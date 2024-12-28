<?php

namespace App\Filament\Resources;

use Directory;
use Filament\Forms;
use Filament\Tables;
use App\Models\Article;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Tables\Filters\TabsFilter;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\DB;
use Filament\Tables\Grouping\Group;
use Illuminate\Support\Facades\Auth;
use Filament\Resources\Components\Tab;
use Filament\Navigation\NavigationItem;
use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ArticleResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ArticleResource\RelationManagers;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;
    protected static ?string $modelLabel = 'Artikel';
    protected static ?string $pluralModelLabel = 'Artikel';

    protected static ?string $navigationIcon = 'fas-newspaper';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                    ->maxLength(255),
                Forms\Components\Hidden::make('slug'),
                Forms\Components\FileUpload::make('photo')
                    ->directory('/articles')
                    ->required(),
                Forms\Components\RichEditor::make('content')
                    ->fileAttachmentsDirectory('/attachments-article')
                    ->toolbarButtons([
                        'attachFiles',
                        'blockquote',
                        'bold',
                        'bulletList',
                        'h2',
                        'h3',
                        'italic',
                        'link',
                        'orderedList',
                        'redo',
                        'strike',
                        'underline',
                        'undo',
                    ])
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Select::make('category')
                    ->options([
                        'news' => 'News',
                        'announcement' => 'Announcement',
                        'enrollment' => 'Enrollment',
                    ])
                    ->native(false)
                    ->required(),
                Forms\Components\TagsInput::make('tags')
                    ->splitKeys(['Tab'])
                    ->required(),
                Forms\Components\Toggle::make('is_pinned')
                    ->live()
                    ->afterStateUpdated(function (bool $state, callable $set, callable $get) {
                        $category = $get('category');
                        $articleId = $get('id'); // Mengambil ID artikel jika ada (untuk update)
                    
                        // Pastikan hanya kategori 'announcement' atau 'enrollment' yang diproses
                        if ($category == 'announcement' || $category == 'enrollment') {
                            // Jika toggle diaktifkan (state = true), artinya artikel ingin dipinned
                            if ($state) {
                                // Cek apakah ada artikel lain yang sudah dipinned dalam kategori yang sama, kecuali artikel yang sedang diproses
                                $existingPinned = Article::where('category', $category)
                                    ->where('is_pinned', true)
                                    ->where('id', '!=', $articleId) // Pastikan tidak mengubah artikel yang sedang diproses
                                    ->exists();
                    
                                // Jika ada artikel lain yang dipinned
                                if ($existingPinned) {
                                    // Unpin artikel lain yang dipinned di kategori yang sama
                                    Article::where('category', $category)
                                        ->where('is_pinned', true)
                                        ->where('id', '!=', $articleId)
                                        ->update(['is_pinned' => false]); // Set 'is_pinned' menjadi false untuk artikel lain
                    
                                    // Kirim notifikasi bahwa hanya satu artikel yang bisa dipinned di kategori ini
                                    Notification::make()
                                        ->success()
                                        ->title('Berhasil Disematkan')
                                        ->body('Hanya Satu Artikel yang Bisa Disematkan di Kategori ' . ($category == 'announcement' ? 'Pengumuman' : 'Informasi PPDB'))
                                        ->send();
                                }
                    
                                // Setelah memastikan tidak ada artikel lain yang dipinned, set artikel ini menjadi dipinned
                                $set('is_pinned', true);
                            } else {
                                // Jika toggle dimatikan (state = false), unpin artikel
                                $set('is_pinned', false);
                            }
                        }
                    })                    
                    // ->afterStateUpdated(function (bool $state, $set, $get) {
                    //     $category = $get('category');
                        
                    //     if ($category == 'announcement' || $category == 'enrollment') {
                    //         if ($state) {
                    //             $existingPinned = Article::where('category', $category)
                    //                 ->where('is_pinned', true)
                    //                 ->where('id', '!=', $get('id'))
                    //                 ->exists();
                    
                    //             if ($existingPinned) {
                    //                 Article::where('category', $category)
                    //                     ->where('is_pinned', true)
                    //                     ->where('id', '!=', $get('id'))
                    //                     ->update(['is_pinned' => false]);
                    
                    //                 Notification::make()
                    //                     ->success()
                    //                     ->title('Berhasil Disematkan')
                    //                     ->body('Hanya Satu Artikel yang Bisa Disematkan di Kategori ' . ($category == 'announcement' ? 'Pengumuman' : 'Informasi PPDB'))
                    //                     ->send();
                    //             }
                    
                    //             $set('is_pinned', true);
                    //         } else {
                    //             $set('is_pinned', false);
                    //         }
                    //     }
                    // })                    
                    ->required(),
                Forms\Components\Hidden::make('user_id')
                    ->default(fn () => Auth::id()),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\ToggleColumn::make('is_pinned')
                    ->afterStateUpdated(function ($state, $record) {
                        if ($record->category == 'announcement' || $record->category == 'enrollment') {
                            // Cek jika toggle diaktifkan (state = true)
                            if ($state) {
                                // Cari artikel lain yang dipinned di kategori yang sama, selain artikel yang sedang diproses
                                $existingPinned = Article::where('category', $record->category)
                                    ->where('is_pinned', true)
                                    ->where('id', '!=', $record->id) // Pastikan artikel yang sedang diproses tidak dihitung
                                    ->exists();
                    
                                // Jika ada artikel lain yang dipinned
                                if ($existingPinned) {
                                    // Unpin artikel lain (set is_pinned ke false pada artikel lain)
                                    Article::where('category', $record->category)
                                        ->where('is_pinned', true)
                                        ->where('id', '!=', $record->id)
                                        ->update(['is_pinned' => false]);
                    
                                    // Kirim notifikasi
                                    Notification::make()
                                        ->success()
                                        ->title('Berhasil Disematkan')
                                        ->body('Hanya Satu Artikel yang Bisa Disematkan di Kategori ' . ($record->category  == 'announcement' ? 'Pengumuman' : 'Informasi PPDB'))
                                        ->send();
                                }
                    
                                // Setelah memastikan hanya ada satu artikel yang dipinned, set artikel ini untuk dipinned
                                $record->is_pinned = true;
                                $record->save();
                            } else {
                                // Jika toggle dimatikan (state = false), unpin artikel (set is_pinned ke false)
                                $record->is_pinned = false;
                                $record->save();
                            }
                        }
                    })
                    ->sortable()
                    ->label('Sematkan'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->since()
                    ->dateTimeTooltip()
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Diperbarui')
                    ->since()
                    ->dateTimeTooltip()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([

            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
