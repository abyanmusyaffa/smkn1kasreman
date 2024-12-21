<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MajorResource\Pages;
use App\Filament\Resources\MajorResource\RelationManagers;
use App\Models\Major;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MajorResource extends Resource
{
    protected static ?string $model = Major::class;

    protected static ?string $navigationLabel = 'Konsentrasi Keahlian';

    protected static ?string $navigationIcon = 'fas-graduation-cap';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('shortname')
                    ->required()
                    ->maxLength(3),
                Forms\Components\RichEditor::make('description')
                    ->required()
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
                    ]),
                Forms\Components\TextInput::make('study_group')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('study_period')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('total_students')
                    ->required()
                    ->numeric(),
                Forms\Components\FileUpload::make('logo')
                    ->directory('/major/logo')
                    ->image()
                    ->required(),
                Forms\Components\FileUpload::make('image_1')
                    ->directory('/major/cover')
                    ->image()
                    ->required(),
                Forms\Components\FileUpload::make('image_2')
                    ->directory('/major/cover')
                    ->image()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('logo'),
                Tables\Columns\TextColumn::make('name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('shortname')
                    ->searchable(),
                Tables\Columns\TextColumn::make('study_group')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('study_period')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('total_students')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('image_1'),
                Tables\Columns\ImageColumn::make('image_2'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListMajors::route('/'),
            'create' => Pages\CreateMajor::route('/create'),
            'edit' => Pages\EditMajor::route('/{record}/edit'),
        ];
    }
}
