<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Alumni;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Major;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@skanka.id',
            'password' => Hash::make('admin'),
        ]);

        DB::table('schools')->insert([
            'name' => '1 Kasreman',
            'alias' => 'Skanka',
            'logo' => 'logo/01JFHNM46N25GCXYCRS1S5RJ6Z.png',
            'motto' => 'Shaping Excellent Generations, Ready to Work and Compete.',
            'vision' => '<p>&nbsp;Menjadi sekolah menengah kejuruan yang unggul, berwawasan global, dan mampu menghasilkan lulusan yang siap pakai, kompeten, serta berkarakter dalam menghadapi perkembangan dunia industri dan teknologi.&nbsp;</p>',
            'mission' => '<ul><li>Menyediakan pendidikan kejuruan yang berkualitas, relevan dengan kebutuhan dunia industri, dan mengikuti perkembangan teknologi terkini.</li><li>Membekali siswa dengan keterampilan praktis dan teori yang sesuai dengan bidang keahlian mereka, sehingga dapat bersaing di dunia kerja maupun melanjutkan pendidikan ke jenjang yang lebih tinggi.</li><li>Membangun karakter siswa yang profesional, disiplin, berintegritas, serta memiliki etika kerja yang baik dan mampu beradaptasi dalam lingkungan kerja yang dinamis.</li><li>Menjalin kerjasama yang erat dengan berbagai perusahaan dan industri untuk menciptakan peluang magang, pelatihan, dan penempatan kerja bagi siswa.</li><li>Mengembangkan fasilitas pendidikan yang memadai, seperti laboratorium, bengkel, dan ruang praktek, untuk mendukung proses pembelajaran yang efektif dan menyenangkan.</li><li>Mendorong siswa untuk berinovasi, berpikir kreatif, dan mengembangkan kemampuan teknologi yang dapat diimplementasikan dalam dunia kerja dan kehidupan sehari-hari.</li></ul>',
            'url_video_profile' => 'https://youtu.be/RcgFVQsLQL0?si=oG7k5DyXu0iCeeoi',
            'description' => '
                SMKN 1 Kasreman merupakan salah satu sekolah menengah kejuruan yang terletak di Kecamatan Kasreman, Kabupaten Bojonegoro. Sekolah ini memiliki tujuan utama untuk mencetak generasi muda yang kompeten dan siap menghadapi tantangan dunia kerja maupun melanjutkan pendidikan ke jenjang yang lebih tinggi. Dengan fokus pada pendidikan vokasi, SMKN 1 Kasreman berupaya memberikan keterampilan yang relevan dengan kebutuhan industri modern.

                Sejarah berdirinya SMKN 1 Kasreman dimulai dari inisiatif pemerintah daerah untuk meningkatkan kualitas pendidikan kejuruan di wilayah Bojonegoro. Didirikan pada tahun yang menjadi tonggak penting dalam pengembangan pendidikan vokasi di daerah tersebut, SMKN 1 Kasreman awalnya hanya memiliki beberapa program keahlian. Namun, seiring berjalannya waktu dan meningkatnya kebutuhan masyarakat akan tenaga kerja terampil, sekolah ini terus berkembang dengan menambah program keahlian baru dan meningkatkan fasilitas yang tersedia.

                Kini, SMKN 1 Kasreman telah menjadi salah satu sekolah kejuruan yang diakui di tingkat lokal maupun regional. Dengan dukungan tenaga pengajar yang kompeten dan fasilitas pendidikan yang memadai, sekolah ini mampu menghasilkan lulusan yang tidak hanya mahir di bidangnya, tetapi juga memiliki karakter yang unggul, seperti disiplin, integritas, dan etika kerja yang baik. Selain itu, SMKN 1 Kasreman juga aktif menjalin kemitraan dengan berbagai industri untuk memberikan pengalaman langsung kepada siswa melalui program magang dan pelatihan.

                Sebagai bagian dari komitmennya untuk terus maju, SMKN 1 Kasreman juga berupaya mengikuti perkembangan teknologi dan dunia industri. Dengan mengintegrasikan teknologi dalam proses pembelajaran, sekolah ini memastikan para siswa mendapatkan keterampilan yang relevan dan dapat bersaing di era globalisasi. Selain itu, berbagai kegiatan ekstrakurikuler juga disediakan untuk mengembangkan bakat dan minat siswa di luar bidang akademik.

                Dengan segala upaya dan dedikasi yang dilakukan, SMKN 1 Kasreman menjadi pilihan tepat bagi siswa yang ingin mengembangkan potensi diri dan meraih masa depan yang lebih cerah melalui pendidikan kejuruan. Sekolah ini tidak hanya menjadi tempat belajar, tetapi juga menjadi wadah untuk membentuk generasi muda yang unggul dan berdaya saing tinggi.
                ',
            'welcome_text' => '
                Assalamu’alaikum Warahmatullahi Wabarakatuh,
                Salam sejahtera bagi kita semua,

                Puji syukur kita panjatkan ke hadirat Allah SWT atas segala limpahan rahmat dan karunia-Nya sehingga SMKN 1 Kasreman dapat terus berkembang menjadi lembaga pendidikan yang unggul dalam membentuk generasi muda yang kompeten, berkarakter, dan siap menghadapi tantangan di era globalisasi.

                Selamat datang di website resmi SMKN 1 Kasreman. Website ini kami hadirkan sebagai media informasi dan komunikasi yang memudahkan seluruh masyarakat, terutama siswa, orang tua, dan mitra kerja, untuk mengenal lebih jauh tentang profil, program, dan berbagai kegiatan yang kami selenggarakan.

                Sebagai sekolah menengah kejuruan, kami berkomitmen untuk menyediakan pendidikan berbasis keahlian yang relevan dengan kebutuhan dunia kerja dan perkembangan teknologi. Dengan berbagai program keahlian yang kami tawarkan, kami berupaya membekali siswa dengan keterampilan yang mumpuni, serta karakter yang unggul seperti disiplin, tanggung jawab, dan etika kerja yang baik.

                Tidak hanya itu, kami juga terus berinovasi dalam meningkatkan kualitas pembelajaran melalui pengembangan fasilitas, pelatihan bagi guru, serta menjalin kerja sama dengan berbagai industri. Dengan sinergi ini, kami berharap dapat memberikan kontribusi nyata dalam mencetak lulusan yang siap bersaing di dunia kerja maupun melanjutkan pendidikan ke jenjang yang lebih tinggi.

                Saya juga mengapresiasi dukungan dan partisipasi seluruh pihak, baik orang tua, guru, staf, maupun masyarakat sekitar, yang terus memberikan semangat dan motivasi bagi kami untuk terus maju. Semoga website ini dapat menjadi sarana yang bermanfaat dalam mendukung visi dan misi SMKN 1 Kasreman.

                Akhir kata, kami mengundang Anda semua untuk terus mendukung SMKN 1 Kasreman agar mampu menjadi sekolah yang lebih unggul dan berprestasi. Semoga Allah SWT senantiasa memberikan keberkahan dan kelancaran dalam setiap langkah kita.

                Wassalamu’alaikum Warahmatullahi Wabarakatuh.',
            'address' => 'Jl. Raya Ngawi Caruban Km 6 Ds. Cargakan, Kec Kasreman, Kab Ngawi, Jawa Timur, 63281',
            'phone' => '08113024555',
            'email' => 'smkn1kasreman@yahoo.co.id',
            'url_instagram' => 'https://www.instagram.com/official_smkn1kasreman?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==',
            'url_facebook' => '',
            'url_youtube' => '',
            'url_tiktok' => 'https://www.tiktok.com/@smkn1kasreman?is_from_webapp=1&sender_device=pc',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('majors')->insert([
            [
                'name' => 'Teknik Komputer dan Jaringan',
                'alias' => 'TKJ',
                'description' => '<p>Teknik Komputer dan Jaringan (TKJ) adalah bidang keahlian yang fokus pada penguasaan teknologi informasi, khususnya dalam merancang, membangun, dan memelihara sistem jaringan komputer. Konsentrasi ini dirancang untuk memenuhi kebutuhan industri modern yang sangat mengandalkan teknologi digital.</p><h2><strong>Kompetensi yang Dipelajari di TKJ</strong></h2><p>Siswa TKJ dibekali berbagai keterampilan, di antaranya:</p><ol><li><strong>Perakitan dan Pemeliharaan Komputer</strong><ul><li>Merakit komputer dari komponen dasar.</li><li>Melakukan perawatan dan perbaikan perangkat keras.</li></ul></li><li><strong>Administrasi Jaringan</strong><ul><li>Konfigurasi jaringan lokal (LAN) dan luas (WAN).</li><li>Pengelolaan server dan pengguna jaringan.</li></ul></li><li><strong>Keamanan Jaringan</strong><ul><li>Mengidentifikasi ancaman jaringan.</li><li>Menerapkan sistem keamanan seperti firewall dan VPN.</li></ul></li><li><strong>Pemrograman Dasar</strong><ul><li>Membuat skrip sederhana untuk mendukung administrasi jaringan.</li></ul></li></ol><h2><strong>Prospek Kerja Lulusan TKJ</strong></h2><p>Bidang TKJ menawarkan peluang karier yang luas, seperti:</p><ul><li><strong>Teknisi Jaringan</strong><br>Bertanggung jawab atas instalasi dan perawatan jaringan komputer.</li><li><strong>Administrator Sistem</strong><br>Mengelola server dan memastikan ketersediaan layanan IT.</li><li><strong>IT Support</strong><br>Menyelesaikan masalah teknis yang dialami pengguna.</li><li><strong>Cybersecurity Analyst</strong><br>Melindungi data dan sistem dari serangan siber.</li><li><strong>Wirausahawan Teknologi</strong><br>Membuka bisnis di bidang teknologi seperti jasa instalasi jaringan dan penyewaan server.</li></ul><h2><strong>Mengapa Memilih Konsentrasi TKJ?</strong></h2><p>Ada beberapa alasan mengapa TKJ menjadi pilihan yang menarik:</p><ul><li><strong>Kebutuhan Industri yang Tinggi</strong><br>Dengan perkembangan teknologi, tenaga ahli di bidang jaringan sangat dibutuhkan.</li><li><strong>Materi Praktis</strong><br>Siswa belajar melalui praktik langsung yang sesuai dengan kebutuhan dunia kerja.</li><li><strong>Peluang Pengembangan Diri</strong><br>Lulusan TKJ dapat melanjutkan studi ke perguruan tinggi atau mengambil sertifikasi internasional seperti CCNA dan CompTIA Network+.</li></ul><p><br></p><p>Teknik Komputer dan Jaringan adalah salah satu konsentrasi keahlian yang menjanjikan. Dengan keterampilan yang relevan dan peluang karier yang beragam, konsentrasi ini menjadi pilihan tepat bagi siswa yang tertarik dengan dunia teknologi, khususnya jaringan komputer.</p>',
                'study_group' => 2,
                'study_period' => 3,
                'total_students' => 216,
                'logo' => 'major/logo/tkj.svg',
                'photo' => json_encode([
                    "major/cover/1007.jpg",
                    "major/cover/1008.jpg",
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Akuntansi',
                'alias' => 'AK',
                'description' => '<p>Akuntansi adalah bidang yang berfokus pada pencatatan, analisis, dan pelaporan keuangan suatu organisasi atau perusahaan. Keahlian ini sangat penting karena menyangkut pengelolaan keuangan yang transparan dan akurat, yang dapat digunakan untuk pengambilan keputusan dan perencanaan keuangan. Akuntansi mencakup berbagai proses yang melibatkan pengukuran, pemrosesan, dan penyajian informasi keuangan.</p><h2><strong>Kompetensi yang Dipelajari dalam Akuntansi</strong></h2><p>Siswa yang memilih konsentrasi Akuntansi akan mempelajari berbagai keterampilan yang relevan di dunia kerja, antara lain:</p><ol><li><strong>Pencatatan Keuangan</strong><ul><li>Menyusun dan mencatat transaksi keuangan perusahaan.</li><li>Memahami prinsip-prinsip dasar akuntansi, seperti sistem pencatatan ganda dan penggunaan akun.</li></ul></li><li><strong>Penyusunan Laporan Keuangan</strong><ul><li>Membuat laporan keuangan seperti neraca, laporan laba rugi, dan laporan arus kas.</li><li>Menganalisis laporan keuangan untuk membantu dalam pengambilan keputusan.</li></ul></li><li><strong>Akuntansi Pajak</strong><ul><li>Menghitung kewajiban pajak perusahaan sesuai dengan peraturan perpajakan yang berlaku.</li><li>Menyusun laporan pajak dan memastikan kepatuhan terhadap peraturan perpajakan.</li></ul></li><li><strong>Akuntansi Manajerial</strong><ul><li>Menganalisis biaya dan pendapatan untuk membantu perencanaan dan pengendalian keuangan perusahaan.</li><li>Menyusun anggaran dan proyeksi keuangan.</li></ul></li><li><strong>Audit dan Pengendalian Internal</strong><ul><li>Menilai keandalan dan akurasi laporan keuangan melalui audit internal.</li><li>Menerapkan prosedur pengendalian internal untuk mencegah penyelewengan atau kesalahan dalam pencatatan keuangan.</li></ul></li></ol><h2><strong>Prospek Kerja Lulusan Akuntansi</strong></h2><p>Lulusan Akuntansi memiliki peluang karier yang sangat luas di berbagai sektor, antara lain:</p><ul><li><strong>Akuntan</strong><br>Bertanggung jawab untuk pencatatan dan penyusunan laporan keuangan perusahaan atau organisasi.</li><li><strong>Auditor</strong><br>Memastikan bahwa laporan keuangan sesuai dengan standar akuntansi dan peraturan yang berlaku.</li><li><strong>Pajak Konsultan</strong><br>Memberikan nasihat terkait perencanaan pajak dan kepatuhan terhadap peraturan perpajakan.</li><li><strong>Manajer Keuangan</strong><br>Mengelola dan merencanakan aspek keuangan perusahaan, seperti anggaran dan investasi.</li><li><strong>Wirausaha di Bidang Jasa Akuntansi</strong><br>Membuka layanan konsultasi akuntansi atau pembukuan untuk usaha kecil dan menengah.</li></ul><h2><strong>Mengapa Memilih Konsentrasi Akuntansi?</strong></h2><p>Berikut beberapa alasan mengapa memilih konsentrasi Akuntansi adalah keputusan yang tepat:</p><ul><li><strong>Peluang Karier yang Luas</strong><br>Semua perusahaan, baik kecil maupun besar, memerlukan akuntan untuk mengelola keuangan mereka, membuka banyak peluang karier.</li><li><strong>Keterampilan yang Dapat Dipertanggungjawabkan</strong><br>Keahlian dalam akuntansi sangat dihargai dan selalu dibutuhkan di dunia profesional.</li><li><strong>Peluang untuk Sertifikasi Profesional</strong><br>Lulusan akuntansi dapat melanjutkan studi dan mendapatkan sertifikasi profesional, seperti CPA (Certified Public Accountant) atau CA (Chartered Accountant).</li><li><strong>Peluang Wirausaha</strong><br>Akuntansi memberikan dasar yang kuat bagi mereka yang ingin memulai bisnis atau membuka jasa konsultasi keuangan.</li></ul><p><br></p><p>Konsentrasi Akuntansi adalah pilihan yang sangat baik bagi mereka yang tertarik dengan pengelolaan keuangan dan memiliki ketelitian tinggi. Dengan peluang karier yang luas dan keterampilan yang dapat diterapkan di berbagai sektor, Akuntansi membuka jalan bagi kesuksesan profesional di dunia kerja.</p>',
                'study_group' => 3,
                'study_period' => 3,
                'total_students' => 324,
                'logo' => 'major/logo/ak.svg',
                'photo' => json_encode([
                    "major/cover/1005.jpg",
                    "major/cover/1006.jpg",
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Kuliner',
                'alias' => 'KL',
                'description' => '<p>Jurusan Kuliner adalah bidang pendidikan yang fokus pada keterampilan memasak dan pengelolaan bisnis makanan. Di dalamnya, siswa diajarkan tidak hanya tentang cara membuat berbagai hidangan, tetapi juga bagaimana mengelola dapur profesional, mengatur manajemen restoran, serta memahami berbagai aspek terkait industri kuliner. Jurusan ini sangat cocok bagi mereka yang memiliki passion di bidang makanan dan minuman serta tertarik untuk berkarier di dunia hospitality.</p><h2><strong>Kompetensi yang Dipelajari dalam Jurusan Kuliner</strong></h2><p>Siswa yang memilih jurusan Kuliner akan mempelajari berbagai kompetensi yang meliputi:</p><ol><li><strong>Dasar-Dasar Memasak</strong><ul><li>Teknik dasar memasak, mulai dari memotong bahan hingga teknik pemasakan yang berbeda.</li><li>Penguasaan berbagai jenis masakan dari berbagai daerah dan negara.</li></ul></li><li><strong>Higiene dan Keamanan Pangan</strong><ul><li>Pentingnya kebersihan dan sanitasi dalam mempersiapkan makanan.</li><li>Pemahaman tentang pengendalian kualitas makanan dan pencegahan penyakit yang ditularkan melalui makanan.</li></ul></li><li><strong>Pengelolaan Dapur</strong><ul><li>Manajemen operasional dapur, pengaturan bahan baku, serta pemeliharaan peralatan dapur.</li><li>Pengelolaan tenaga kerja di dapur, termasuk pembagian tugas dan pelatihan karyawan.</li></ul></li><li><strong>Penyajian dan Dekorasi Makanan</strong><ul><li>Teknik penyajian dan plating yang menarik agar makanan terlihat lebih menggugah selera.</li><li>Kreativitas dalam menghias makanan dan minuman untuk meningkatkan daya tarik visual.</li></ul></li><li><strong>Manajemen Bisnis Kuliner</strong><ul><li>Pengelolaan keuangan, pemasaran, dan operasional restoran atau bisnis kuliner lainnya.</li><li>Pengenalan tentang tren industri kuliner, termasuk restoran, katering, dan usaha makanan lainnya.</li></ul></li></ol><h2><strong>Prospek Kerja Lulusan Jurusan Kuliner</strong></h2><p>Lulusan jurusan Kuliner memiliki banyak peluang karier di berbagai sektor, baik di dalam negeri maupun internasional, seperti:</p><ul><li><strong>Koki Profesional</strong><br>Bekerja di restoran, hotel, atau resort, memimpin tim dapur untuk menyajikan hidangan berkualitas tinggi.</li><li><strong>Pastry Chef</strong><br>Spesialis dalam pembuatan kue, roti, dan makanan manis lainnya.</li><li><strong>Manajer Restoran</strong><br>Mengelola operasional harian restoran, mulai dari pengelolaan staf hingga strategi pemasaran.</li><li><strong>Food Stylist</strong><br>Mengatur presentasi makanan untuk foto atau video yang digunakan dalam iklan atau media sosial.</li><li><strong>Pengusaha Kuliner</strong><br>Memulai bisnis makanan, seperti membuka restoran, katering, atau usaha kuliner lainnya.</li><li><strong>Instruktur Kuliner</strong><br>Mengajar keterampilan memasak di sekolah kuliner atau pusat pelatihan.</li></ul><h2><strong>Mengapa Memilih Jurusan Kuliner?</strong></h2><p>Beberapa alasan mengapa memilih jurusan Kuliner adalah pilihan yang menarik:</p><ul><li><strong>Peluang Karier yang Luas</strong><br>Industri kuliner terus berkembang, menawarkan banyak kesempatan untuk bekerja di berbagai bidang.</li><li><strong>Kreativitas dalam Memasak</strong><br>Jurusan ini memungkinkan Anda untuk berekspresi melalui masakan dan menciptakan inovasi di dunia kuliner.</li><li><strong>Peluang untuk Berwirausaha</strong><br>Jurusan kuliner memberikan bekal untuk memulai bisnis kuliner Anda sendiri, dengan keterampilan yang dibutuhkan untuk sukses dalam industri ini.</li><li><strong>Industri yang Dinamis</strong><br>Dunia kuliner selalu berubah, memberikan kesempatan untuk terus belajar dan mengikuti tren baru.</li></ul><p><br></p><p>Jurusan Kuliner adalah pilihan yang sangat baik bagi mereka yang memiliki minat dan bakat dalam dunia masak-memasak dan ingin mengembangkan karier di industri makanan. Dengan keterampilan yang didapatkan, lulusan kuliner dapat memasuki dunia kerja yang penuh tantangan dan peluang, baik di dalam negeri maupun internasional.</p>',
                'study_group' => 2,
                'study_period' => 3,
                'total_students' => 216,
                'logo' => 'major/logo/kl.svg',
                'photo' => json_encode([
                    "major/cover/1003.jpg",
                    "major/cover/1004.jpg",
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Desain dan Produksi Busana',
                'alias' => 'DPB',
                'description' => '<p>Desain dan Produksi Busana adalah bidang yang menggabungkan kreativitas dalam merancang pakaian dengan keterampilan teknis dalam produksi busana. Jurusan ini fokus pada pengembangan ide, pembuatan pola, pemilihan bahan, serta pembuatan pakaian yang estetis dan fungsional. Konsentrasi ini sangat cocok bagi mereka yang memiliki minat di dunia fashion dan ingin memahami seluruh proses dari konsep desain hingga produk jadi.</p><h2><strong>Kompetensi yang Dipelajari dalam Desain dan Produksi Busana</strong></h2><p>Siswa yang memilih konsentrasi Desain dan Produksi Busana akan mempelajari keterampilan utama di bidang fashion, antara lain:</p><ol><li><strong>Desain Busana</strong><ul><li>Menggambar dan merancang pakaian sesuai dengan tren mode dan kebutuhan pasar.</li><li>Membuat sketsa, mood board, dan mengembangkan konsep desain pakaian.</li></ul></li><li><strong>Pembuatan Pola dan Teknik Jahit</strong><ul><li>Membuat pola dasar pakaian dan memodifikasinya untuk desain yang lebih kompleks.</li><li>Teknik menjahit dan merakit bahan menjadi pakaian yang siap pakai.</li></ul></li><li><strong>Pemilihan Bahan dan Material</strong><ul><li>Memahami berbagai jenis bahan pakaian dan karakteristiknya.</li><li>Memilih bahan yang sesuai dengan desain dan fungsionalitas pakaian.</li></ul></li><li><strong>Produksi Busana</strong><ul><li>Memahami proses produksi dari sketsa hingga pakaian jadi.</li><li>Mengatur produksi busana dalam skala kecil maupun besar, termasuk manajemen produksi dan pengendalian kualitas.</li></ul></li><li><strong>Pengembangan Koleksi dan Tren Mode</strong><ul><li>Menganalisis tren mode terkini untuk mengembangkan koleksi pakaian yang sesuai dengan pasar sasaran.</li><li>Mengikuti perkembangan industri fashion dan menyesuaikan desain dengan kebutuhan konsumen.</li></ul></li></ol><h2><strong>Prospek Kerja Lulusan Desain dan Produksi Busana</strong></h2><p>Lulusan desain dan produksi busana memiliki banyak peluang kerja di berbagai sektor industri mode, seperti:</p><ul><li><strong>Desainer Busana</strong><br>Mengembangkan koleksi busana untuk rumah mode, butik, atau perusahaan fashion.</li><li><strong>Pola Maker</strong><br>Membuat pola busana berdasarkan desain yang telah dibuat untuk proses produksi.</li><li><strong>Penjahit Profesional</strong><br>Menjahit pakaian custom untuk klien atau dalam produksi massal.</li><li><strong>Manajer Produksi Busana</strong><br>Mengelola dan mengatur jalannya proses produksi pakaian di pabrik atau studio desain.</li><li><strong>Fashion Stylist</strong><br>Bertanggung jawab atas penataan busana untuk pemotretan, acara, atau klien pribadi.</li><li><strong>Pengusaha Fashion</strong><br>Membuka merek atau lini pakaian sendiri, mengelola produksi dan distribusi busana.</li><li><strong>Konsultan Mode</strong><br>Memberikan saran dan ide desain kepada perusahaan atau individu dalam pengembangan busana.</li></ul><h2><strong>Mengapa Memilih Konsentrasi Desain dan Produksi Busana?</strong></h2><p>Beberapa alasan mengapa memilih jurusan Desain dan Produksi Busana adalah pilihan yang tepat:</p><ul><li><strong>Industri Fashion yang Terus Berkembang</strong><br>Dunia mode selalu berkembang dengan cepat, menciptakan berbagai peluang karier dalam berbagai sektor, baik di dalam negeri maupun internasional.</li><li><strong>Kreativitas yang Tak Terbatas</strong><br>Jurusan ini memberikan kebebasan untuk berekspresi dan menciptakan karya-karya busana yang menarik dan inovatif.</li><li><strong>Peluang Berwirausaha</strong><br>Dengan keterampilan desain dan produksi, lulusan dapat memulai bisnis fashion mereka sendiri, seperti butik atau label pakaian.</li><li><strong>Peluang Karier di Berbagai Bidang</strong><br>Selain menjadi desainer, lulusan juga dapat berkarier dalam produksi, manajemen, dan pemasaran busana.</li></ul><p><br></p><p>Jurusan Desain dan Produksi Busana adalah pilihan yang ideal bagi mereka yang memiliki minat dalam dunia mode dan ingin mengembangkan keterampilan kreatif dan teknis. Dengan berbagai peluang karier dan potensi untuk berwirausaha, lulusan dari konsentrasi ini memiliki kesempatan besar untuk sukses di industri fashion yang dinamis.</p>',
                'study_group' => 1,
                'study_period' => 3,
                'total_students' => 108,
                'logo' => 'major/logo/dpb.svg',
                'photo' => json_encode([
                    "major/cover/1001.jpg",
                    "major/cover/1002.jpg",
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
        
        DB::table('photos')->insert([
            [
                'photo' => json_encode([
                    "photos/01JFKJQSA1G84JMGPPBHHEETA6.jpg",
                    "photos/01JFKJQSA5SSZTR3B0XT0R5YFN.jpg",
                    "photos/01JFKJQSA80GS1Q42GYY0R3NZZ.jpg"
                ]),
                'type' => 'hero'
            ],
            [
                'photo' => json_encode([
                    "photos/01JFKKN0DP1WHK252GGAFXNJ0W.jpg",
                    "photos/01JFKKN0DVFMBMF48ZK5XKQMJW.jpg",
                    "photos/01JFKKN0DZ94RC24A1S5WWW60E.jpg",
                    "photos/01JFKKN0E16A93PFWSVY1R6QXK.jpg",
                    "photos/01JFKKN0E3TYNDHBQ1WZCJW9WT.jpg"
                ]),
                'type' => 'gallery'
            ]
        ]);

        DB::table('partners')->insert([
            [
                'name' => 'Universitas Amikom Yogyakarta',
                'logo' => 'partners/01JFKSN6W1NC7NQ2R2D39JJNAG.png',
                'address' => 'Jl. Padjajaran, Ring Road Utara, Kel. Condongcatur, Kec. Depok, Kab. Sleman, Prop. Daerah Istimewa Yogyakarta 55283',
                'industry' => json_encode(["Teknologi Informasi", "Akuntansi", "Perbankan"]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'PT. Chemco Harapan Nusantara',
                'logo' => 'partners/01JFKTFBPNE4EEFSBB17EF78JC.png',
                'address' => 'Jababeka Industrial Estate Jl. Jababeka Raya Blok F No.19-28, Cikarang - Bekasi, West Java 17530 Indonesia',
                'industry' => json_encode(["Manufaktur"]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Dinas Kependudukan dan Pencatatan SIpil Kabupaten Ngawi',
                'logo' => 'partners/01JFKTNATX4GJ9KRA3STDZN185.png',
                'address' => 'Mall Pelayanan Publik, Kerek, Margomulyo, Kec. Ngawi, Kabupaten Ngawi, Jawa Timur 63217',
                'industry' => json_encode(["Akuntansi", "Administrasi"]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Pemerintah Kabupaten Nagwi',
                'logo' => 'partners/01JFKTRDM0HQG6DMYWW18E9QWZ.png',
                'address' => 'Jl. Teuku Umar No.12, Kluncing, Ketanggi, Kec. Ngawi, Kabupaten Ngawi, Jawa Timur 63211',
                'industry' => json_encode(["Akuntansi", "Administrasi"]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Maju Hardware',
                'logo' => 'partners/01JFKTSXF50S1EWEQ2DB26RMZ6.png',
                'address' => 'Jl. Kutai No.5, Pandean, Kec. Taman Kota Madiun, Jawa Timur 63133',
                'industry' => json_encode(["Teknologi Informasi"]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'PT Dwi Prima Sentosa',
                'logo' => 'partners/01JFKTWJEFVANHMPN08P64D2RA.png',
                'address' => 'Cabean, Karang Tengah Prandon, Kec. Ngawi, Kabupaten Ngawi, Jawa Timur 63218',
                'industry' => json_encode(["Tekstil", "Manufaktur"]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'PT. Wilmar Cahaya indonesia Tbk',
                'logo' => 'partners/01JFKV005SDJSN21PD009B9JKT.png',
                'address' => 'Jl. Khatulistiwa Km. 4,3 Batulayang, Pontianak 78244 - West Kalimantan',
                'industry' => json_encode(["Teknologi Informasi"]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Dinas Komunikasi Dan Informatika Ngawi',
                'logo' => 'partners/01JFKV1MPJ8FXQKP9BH41GYNN2.png',
                'address' => 'Jl. Teuku Umar No.43, Cabean Kidul, Ketanggi, Kec. Ngawi, Kabupaten Ngawi, Jawa Timur 63211',
                'industry' => json_encode(["Teknologi Informasi", "Akuntansi"]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'RM Spesial Soto Boyolali',
                'logo' => 'partners/01JFKV3C4QCJCABQESE8BHHWEN.png',
                'address' => 'Mojosongo, Kab. Boyolali, Jawa tengah, indonesia',
                'industry' => json_encode(["FnB"]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'PT Sinar Solaria',
                'logo' => 'partners/01JFKV70EYNG10FRK79X5QJ8RV.png',
                'address' => 'Pulo Gebang, Kota Jakarta Timur, DKI Jakarta, Indonesia',
                'industry' => json_encode(["FnB"]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);

        DB::table('achievements')->insert([
            [
                'title' => 'Lomba Masak Masakan Tingkat Provinsi Jawa Timur',
                'slug' => 'lomba-masak-masakan-tingkat-provinsi-jawa-timur',
                'rankings' => 'Juara 3',
                'photo' => 'achievement/01JFMCBMF5JJ2749A7TPN1PCF6.jpg',
                'content' => '<p>Lomba Masak Masakan Tingkat Provinsi Jawa Timur baru saja selesai diadakan, dan SMKN 1 Kasreman berhasil meraih <strong>Juara 3</strong> dalam kompetisi yang penuh tantangan ini. Lomba yang diikuti oleh berbagai peserta dari seluruh penjuru Jawa Timur ini tidak hanya menjadi ajang untuk menunjukkan keterampilan memasak, tetapi juga sebagai platform untuk melestarikan kuliner tradisional Jawa Timur.</p><h2>Prestasi Mengagumkan SMKN 1 Kasreman</h2><p>Dalam lomba yang berlangsung selama dua hari, para peserta ditantang untuk memasak hidangan-hidangan khas Jawa Timur dengan kreativitas tinggi, teknik yang tepat, dan cita rasa yang autentik. <strong>SMKN 1 Kasreman</strong>, yang diwakili oleh tim siswa dan guru pembimbing, berhasil memukau juri dengan masakan inovatif yang tetap menjaga keaslian rasa tradisional.</p><h3>Menu Andalan SMKN 1 Kasreman</h3><p>Tim dari SMKN 1 Kasreman menyajikan <strong>Rawon</strong>, salah satu masakan khas Jawa Timur, dengan sentuhan modern namun tetap mempertahankan rasa asli yang khas. Berikut adalah beberapa menu yang mereka sajikan dalam lomba:</p><ul><li><strong>Rawon Daging Sapi</strong>: Sup hitam dengan bumbu khas yang menggugah selera.</li><li><strong>Lontong Balap</strong>: Lontong dengan tauge dan sate kerang yang menjadi hidangan khas Surabaya.</li><li><strong>Pindang Ikan Patin</strong>: Masakan sehat yang menggabungkan cita rasa pedas dan asam.</li></ul><p>Keberhasilan ini juga berkat <strong>kerja keras dan kolaborasi</strong> antara para siswa dan guru yang telah mempersiapkan segala sesuatunya dengan matang, dari pemilihan bahan hingga teknik memasak yang digunakan.</p><h2>Proses Penilaian Lomba</h2><p>Lomba masak ini dinilai oleh panel juri yang terdiri dari chef profesional dan ahli kuliner. Para peserta dinilai berdasarkan beberapa aspek penting:</p><h3>1. <strong>Kreativitas dalam Mengolah Bahan</strong></h3><p>Para peserta dituntut untuk memberikan inovasi pada masakan tradisional, yang ditunjukkan dengan kreativitas dalam penggunaan bahan-bahan lokal.</p><h3>2. <strong>Teknik Memasak</strong></h3><p>Penilaian pada teknik memasak sangat penting, di mana peserta harus menjaga kualitas rasa dan tampilan masakan dengan teknik yang tepat.</p><h3>3. <strong>Estetika Penyajian</strong></h3><p>Penyajian masakan yang rapi dan menarik juga menjadi salah satu faktor penilaian, karena dapat meningkatkan daya tarik masakan.</p><h2>Keseruan Lomba Masak</h2><p>Selama lomba berlangsung, banyak acara menarik yang menyertai kompetisi, di antaranya:</p><ul><li><strong>Demo Memasak dari Chef Terkenal</strong><br>Para pengunjung dan peserta dapat melihat langsung bagaimana chef profesional mengolah masakan tradisional dengan cara yang modern dan menarik.</li><li><strong>Pameran Kuliner Jawa Timur</strong><br>Berbagai macam kuliner khas Jawa Timur dipamerkan, dan para peserta dapat mencicipinya untuk mendapatkan inspirasi masakan.</li></ul><h2>Apa Arti Prestasi ini bagi SMKN 1 Kasreman?</h2><p>Meraih <strong>Juara 3</strong> dalam lomba ini adalah sebuah pencapaian yang membanggakan bagi <strong>SMKN 1 Kasreman</strong>, yang menunjukkan bahwa kualitas pendidikan kuliner yang diberikan di sekolah ini sangat berkualitas. Selain itu, keberhasilan ini juga menjadi bukti bahwa para siswa SMKN 1 Kasreman memiliki keterampilan tinggi dalam bidang kuliner dan mampu bersaing di tingkat provinsi.</p><p>Prestasi ini tidak hanya memberikan kebanggaan bagi para peserta, tetapi juga meningkatkan reputasi <strong>SMKN 1 Kasreman</strong> sebagai salah satu sekolah unggulan dalam bidang pendidikan keterampilan memasak di Jawa Timur.</p><h2>Harapan untuk Kedepannya</h2><p>Dengan raihan <strong>Juara 3</strong> ini, SMKN 1 Kasreman berharap untuk terus mengembangkan program pendidikan kuliner mereka, agar semakin banyak siswa yang terinspirasi untuk berkarir di dunia kuliner. Ke depan, tim kuliner SMKN 1 Kasreman bertekad untuk meraih prestasi yang lebih tinggi lagi dan terus melestarikan kuliner khas Jawa Timur.</p>',
                'tags' => json_encode([
                    "Masak",
                    "Kuliner",
                    "Jawa Timur"
                ]),
                'is_pinned' => true,
                'user_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Lomba Networking Mikrotik Kabupaten Ngawi',
                'slug' => 'lomba-networking-mikrotik-kabupaten-ngawi',
                'rankings' => 'Juara 1 ',
                'photo' => 'achievement/01JFMCJDDG1MNYM4EZP9KHJ0SJ.jpg',
                'content' => '<p>Prestasi gemilang kembali diraih oleh <strong>SMKN 1 Kasreman</strong> dalam ajang <strong>Lomba Networking Mikrotik Kabupaten Ngawi</strong>. Tim dari SMKN 1 Kasreman berhasil meraih <strong>Juara 1</strong> dalam kompetisi yang diikuti oleh siswa-siswi dari berbagai sekolah di Kabupaten Ngawi. Kompetisi ini tidak hanya menguji kemampuan teknis, tetapi juga kreativitas dan ketelitian dalam mengelola jaringan komputer berbasis <strong>Mikrotik</strong>.</p><h2>Tentang Lomba Networking Mikrotik</h2><p>Lomba Networking Mikrotik adalah ajang kompetisi teknologi informasi yang bertujuan untuk:</p><ul><li>Mengasah kemampuan siswa dalam pengelolaan jaringan komputer.</li><li>Memperkenalkan teknologi Mikrotik sebagai solusi jaringan modern.</li><li>Meningkatkan minat siswa terhadap dunia teknologi informasi dan komunikasi (TIK).</li></ul><p>Dalam lomba ini, peserta diuji dalam berbagai aspek jaringan, termasuk konfigurasi router, manajemen bandwidth, hingga troubleshooting jaringan.</p><h2>Perjalanan SMKN 1 Kasreman Menuju Juara</h2><p>Tim dari SMKN 1 Kasreman menunjukkan performa luar biasa sepanjang lomba. Dengan bimbingan guru pembimbing yang berpengalaman, para siswa berhasil menyelesaikan setiap tantangan dengan hasil yang memuaskan.</p><h3>Tantangan Lomba</h3><p>Beberapa tantangan yang harus diselesaikan peserta dalam lomba ini antara lain:</p><ol><li><strong>Konfigurasi Router Mikrotik</strong><ul><li>Peserta diminta untuk mengatur jaringan lokal dengan topologi tertentu menggunakan perangkat Mikrotik.</li><li>Konfigurasi meliputi pengaturan IP address, routing, dan DHCP server.</li></ul></li><li><strong>Manajemen Bandwidth</strong><ul><li>Peserta diuji dalam mengatur bandwidth agar jaringan tetap stabil dan efisien.</li><li>Teknik seperti <strong>queue tree</strong> dan <strong>simple queue</strong> menjadi salah satu penilaian penting.</li></ul></li><li><strong>Troubleshooting Jaringan</strong><ul><li>Peserta harus mampu mengidentifikasi dan memperbaiki masalah jaringan dalam waktu yang terbatas.</li></ul></li><li><strong>Keamanan Jaringan</strong><ul><li>Melakukan konfigurasi firewall untuk melindungi jaringan dari ancaman eksternal.</li></ul></li></ol><h3>Kunci Keberhasilan</h3><p>Keberhasilan SMKN 1 Kasreman tidak lepas dari beberapa faktor berikut:</p><ul><li><strong>Kerja Sama Tim</strong>: Setiap anggota tim berkontribusi sesuai keahlian masing-masing.</li><li><strong>Persiapan yang Matang</strong>: Tim telah melakukan latihan intensif sebelum lomba, termasuk simulasi jaringan yang kompleks.</li><li><strong>Penguasaan Teknologi</strong>: Pemahaman mendalam tentang fitur Mikrotik, seperti <strong>Winbox</strong>, <strong>CLI</strong>, dan <strong>Layer 7 Protocol</strong>, menjadi keunggulan tim.</li></ul><h2>Penghargaan dan Apresiasi</h2><p>Sebagai pemenang <strong>Juara 1</strong>, tim dari SMKN 1 Kasreman menerima penghargaan berupa:</p><ul><li><strong>Piala Juara 1</strong>: Sebagai simbol atas prestasi mereka dalam lomba ini.</li><li><strong>Sertifikat Penghargaan</strong>: Yang menunjukkan kompetensi mereka di bidang networking.</li><li><strong>Hadiah Teknologi</strong>: Seperti perangkat jaringan atau voucher pelatihan, untuk mendukung pengembangan keterampilan mereka.</li></ul><p>Selain itu, prestasi ini mendapat apresiasi tinggi dari sekolah dan masyarakat, yang bangga atas pencapaian luar biasa ini.</p><h2>Manfaat Kompetisi bagi Siswa</h2><p>Mengikuti lomba seperti ini memberikan banyak manfaat bagi siswa, antara lain:</p><ul><li><strong>Meningkatkan Kompetensi Teknis</strong>: Siswa mendapatkan pengalaman langsung dalam mengelola jaringan komputer.</li><li><strong>Persiapan Karier</strong>: Kompetisi ini membantu siswa untuk mempersiapkan diri menghadapi tantangan di dunia kerja, terutama di bidang teknologi informasi.</li><li><strong>Pengakuan di Dunia Pendidikan</strong>: Prestasi ini memperkuat reputasi SMKN 1 Kasreman sebagai salah satu sekolah unggulan di bidang teknologi.</li></ul><h2>Harapan untuk Masa Depan</h2><p>Dengan prestasi ini, SMKN 1 Kasreman berharap dapat terus melahirkan siswa-siswa berprestasi yang siap bersaing di tingkat regional, nasional, bahkan internasional. Kompetisi ini juga menjadi motivasi bagi siswa lain untuk meningkatkan keterampilan mereka di bidang teknologi.</p>',
                'tags' => json_encode([
                    "TKJ",
                    "Mikrotik",
                    "Ngawi"
                ]),
                'is_pinned' => true,
                'user_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'MS Excel Competition Binus University 2024',
                'slug' => 'ms-excel-competition-binus-university-2024',
                'rankings' => 'Juara 2',
                'photo' => 'achievement/01JFMCPC0NHY1Y747E47TH8PMJ.jpg',
                'content' => '<p>Prestasi luar biasa kembali ditorehkan oleh <strong>SMKN 1 Kasreman</strong> dalam ajang <strong>MS Excel Competition Binus University 2024</strong>. Kompetisi ini mempertemukan siswa-siswi terbaik dari berbagai sekolah di seluruh Indonesia untuk menunjukkan keahlian mereka dalam pengelolaan data menggunakan Microsoft Excel. SMKN 1 Kasreman berhasil meraih <strong>Juara 2</strong>, membuktikan kemampuan mereka yang luar biasa dalam menghadapi tantangan di dunia teknologi dan data.</p><h2>Tentang MS Excel Competition Binus University</h2><p>MS Excel Competition adalah salah satu kompetisi bergengsi yang diselenggarakan oleh <strong>Binus University</strong> untuk mengasah kemampuan siswa dalam:</p><ul><li><strong>Pengolahan Data</strong>: Mengolah data besar (big data) dengan menggunakan fitur-fitur canggih Microsoft Excel.</li><li><strong>Analisis Data</strong>: Membuat visualisasi data yang efektif dan memberikan wawasan mendalam dari data mentah.</li><li><strong>Efisiensi Kerja</strong>: Menggunakan rumus, makro, dan alat Excel lainnya untuk meningkatkan produktivitas.</li></ul><p>Ajang ini juga menjadi platform bagi siswa untuk berkompetisi, belajar, dan berbagi pengetahuan dalam bidang teknologi informasi.</p><h2>Perjalanan SMKN 1 Kasreman Menuju Juara</h2><p>Dalam kompetisi yang berlangsung di kampus <strong>Binus University</strong>, tim dari SMKN 1 Kasreman tampil memukau dalam setiap tahap perlombaan. Berikut adalah perjalanan mereka:</p><h3>Babak Penyisihan</h3><p>Pada tahap awal, peserta harus menyelesaikan soal-soal pengolahan data yang mencakup:</p><ol><li><strong>Penggunaan Fungsi Dasar Excel</strong><br>Seperti <strong>VLOOKUP</strong>, <strong>HLOOKUP</strong>, <strong>IF</strong>, <strong>SUMIF</strong>, dan <strong>COUNTIF</strong>.</li><li><strong>Pivot Table dan Chart</strong><br>Membuat laporan dinamis dan visualisasi data interaktif.</li><li><strong>Data Cleaning</strong><br>Mengolah data mentah menjadi format yang rapi dan siap analisis.</li></ol><p>Tim SMKN 1 Kasreman berhasil lolos ke babak final dengan skor tinggi berkat ketelitian dan strategi mereka.</p><h3>Babak Final</h3><p>Pada babak final, tantangan menjadi lebih kompleks. Peserta diminta untuk:</p><ul><li><strong>Menganalisis Dataset Besar</strong>: Menggunakan formula kompleks seperti <strong>ARRAY</strong>, <strong>INDEX-MATCH</strong>, dan <strong>TEXT FUNCTIONS</strong>.</li><li><strong>Membuat Dashboard Interaktif</strong>: Menggunakan <strong>Slicer</strong>, <strong>Conditional Formatting</strong>, dan grafik dinamis untuk menyajikan data dalam bentuk yang menarik.</li><li><strong>Studi Kasus</strong>: Menyelesaikan skenario bisnis nyata dengan data mentah, memberikan wawasan yang mendalam, dan membuat rekomendasi berbasis data.</li></ul><p>Tim SMKN 1 Kasreman menunjukkan performa luar biasa dalam semua aspek, meskipun menghadapi kompetitor dari sekolah-sekolah unggulan lainnya.</p><h2>Keunggulan Tim SMKN 1 Kasreman</h2><p>Prestasi ini tidak lepas dari beberapa keunggulan berikut:</p><ul><li><strong>Pemahaman Excel yang Mendalam</strong>: Tim telah menguasai berbagai fitur Excel dari dasar hingga tingkat lanjut.</li><li><strong>Kerja Sama Tim</strong>: Setiap anggota memiliki peran spesifik yang dijalankan dengan baik.</li><li><strong>Persiapan yang Matang</strong>: Latihan intensif dengan simulasi soal-soal kompetisi membuat mereka siap menghadapi tantangan.</li></ul><h2>Penghargaan yang Diterima</h2><p>Sebagai <strong>Juara 2</strong>, tim SMKN 1 Kasreman mendapatkan penghargaan berupa:</p><ol><li><strong>Piala Juara 2</strong>: Simbol kebanggaan atas pencapaian mereka.</li><li><strong>Sertifikat Penghargaan</strong>: Pengakuan resmi dari Binus University atas prestasi mereka.</li><li><strong>Hadiah Uang Tunai</strong>: Sebagai bentuk apresiasi terhadap kemampuan luar biasa mereka.</li></ol><p>Penghargaan ini menjadi bukti nyata bahwa SMKN 1 Kasreman mampu bersaing di tingkat nasional.</p><h2>Manfaat Kompetisi Bagi Siswa</h2><p>Mengikuti MS Excel Competition memberikan banyak manfaat bagi siswa, di antaranya:</p><ul><li><strong>Meningkatkan Keterampilan Teknologi</strong>: Peserta mendapatkan pengalaman nyata dalam menggunakan alat teknologi untuk menyelesaikan masalah.</li><li><strong>Persiapan Dunia Kerja</strong>: Kemampuan Excel yang mendalam adalah salah satu keterampilan yang sangat dibutuhkan di dunia kerja saat ini.</li><li><strong>Meningkatkan Kepercayaan Diri</strong>: Meraih Juara 2 dalam kompetisi nasional menjadi motivasi besar bagi siswa untuk terus belajar dan berkembang.</li></ul><h2>Harapan untuk Masa Depan</h2><p>Keberhasilan ini menjadi motivasi bagi SMKN 1 Kasreman untuk terus meningkatkan kualitas pendidikan di bidang teknologi informasi. Dengan semangat juang yang tinggi, tim berharap dapat meraih juara pertama dalam kompetisi berikutnya dan membawa nama sekolah ke tingkat yang lebih tinggi.</p>',
                'tags' => json_encode([
                    "Binus",
                    "Akuntansi",
                    "Excel"
                ]),
                'is_pinned' => true,
                'user_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Lomba Desain Busana Batik Surakarta 2023',
                'slug' => 'lomba-desain-busana-batik-surakarta-2023',
                'rankings' => 'Juara 1',
                'photo' => 'achievement/01JFMCSA0ECZ17JWKP577NZ1X1.jpg',
                'content' => '<p><strong>SMKN 1 Kasreman</strong> kembali menorehkan prestasi membanggakan di dunia seni dan kreativitas. Dalam ajang <strong>Lomba Desain Busana Batik Surakarta 2023</strong>, perwakilan dari SMKN 1 Kasreman berhasil meraih <strong>Juara 1</strong>. Kompetisi ini merupakan bagian dari upaya pelestarian budaya batik sebagai warisan budaya Indonesia yang diakui dunia.</p><h2>Tentang Lomba Desain Busana Batik Surakarta</h2><p>Lomba Desain Busana Batik Surakarta adalah ajang tahunan yang mempertemukan desainer muda berbakat dari seluruh Indonesia untuk menampilkan karya terbaik mereka. Tahun ini, kompetisi mengusung tema <strong>“Modernisasi Batik dalam Era Digital”</strong>, yang bertujuan untuk:</p><ul><li>Meningkatkan inovasi dalam desain batik yang tetap mempertahankan nilai tradisional.</li><li>Menginspirasi generasi muda untuk mencintai batik.</li><li>Menciptakan tren busana batik yang relevan dengan kebutuhan masyarakat modern.</li></ul><h2>Perjalanan SMKN 1 Kasreman Menuju Juara</h2><p>Keberhasilan SMKN 1 Kasreman dalam lomba ini tidak lepas dari kerja keras, kreativitas, dan dedikasi siswa yang mewakili sekolah. Berikut adalah perjalanan mereka dalam lomba:</p><h3>Tahap Seleksi Awal</h3><p>Pada tahap ini, peserta diminta untuk mengajukan desain busana batik berdasarkan tema yang ditentukan. Desain dari SMKN 1 Kasreman berhasil mencuri perhatian juri dengan:</p><ol><li><strong>Kombinasi Motif Tradisional dan Modern</strong><br>Desain menggabungkan motif batik khas Solo dengan elemen geometris modern.</li><li><strong>Warna yang Berani dan Harmonis</strong><br>Palet warna yang digunakan mencerminkan keberanian dan kreativitas generasi muda, namun tetap harmonis dan sesuai dengan karakter batik.</li><li><strong>Cerita di Balik Desain</strong><br>Karya yang diajukan memiliki filosofi mendalam tentang harmoni antara tradisi dan inovasi.</li></ol><h3>Tahap Final</h3><p>Pada babak final, peserta harus mempresentasikan desain mereka di hadapan dewan juri yang terdiri dari desainer ternama dan pakar batik. Tantangan utama pada tahap ini adalah:</p><ul><li><strong>Membuat Prototipe Busana</strong><br>Peserta harus mewujudkan desain mereka dalam bentuk busana nyata.</li><li><strong>Presentasi dan Tanya Jawab</strong><br>Peserta memaparkan konsep di balik desain dan menjawab pertanyaan dari juri.</li></ul><p>Tim SMKN 1 Kasreman menunjukkan keunggulan dalam kreativitas dan kemampuan komunikasi, yang membawa mereka ke posisi tertinggi.</p><h2>Penghargaan dan Apresiasi</h2><p>Sebagai <strong>Juara 1</strong>, tim dari SMKN 1 Kasreman menerima penghargaan bergengsi berupa:</p><ol><li><strong>Trophy Juara 1</strong><br>Sebagai pengakuan atas keunggulan desain mereka.</li><li><strong>Sertifikat Penghargaan</strong><br>Sertifikat resmi dari penyelenggara lomba yang menunjukkan prestasi mereka.</li><li><strong>Hadiah Uang Tunai</strong><br>Digunakan untuk mendukung pengembangan kreativitas siswa dalam seni batik.</li><li><strong>Kesempatan Magang</strong><br>Pemenang juga diberikan kesempatan untuk magang di perusahaan batik ternama di Surakarta.</li></ol><p>Prestasi ini tidak hanya membanggakan bagi siswa, tetapi juga menjadi kebanggaan bagi SMKN 1 Kasreman dan masyarakat sekitarnya.</p><h2>Manfaat Kompetisi bagi Siswa</h2><p>Mengikuti lomba ini memberikan banyak manfaat bagi siswa, di antaranya:</p><ul><li><strong>Meningkatkan Kreativitas</strong><br>Siswa belajar untuk berpikir kreatif dalam menggabungkan elemen tradisional dan modern.</li><li><strong>Pelestarian Budaya</strong><br>Kompetisi ini menjadi sarana bagi siswa untuk mencintai dan melestarikan budaya batik.</li><li><strong>Peluang Karier</strong><br>Pengalaman ini membuka peluang bagi siswa untuk berkarier di industri fashion dan desain.</li></ul><h2>Harapan untuk Masa Depan</h2><p>Dengan prestasi ini, SMKN 1 Kasreman berharap dapat terus menghasilkan siswa-siswi berprestasi yang mencintai budaya Indonesia. Lomba ini juga menjadi motivasi bagi siswa lain untuk terus berkarya dan mengembangkan bakat mereka di bidang seni dan budaya.</p>',
                'tags' => json_encode([
                    "DPB",
                    "Busana",
                    "batik",
                    "Surakarta"
                ]),
                'is_pinned' => true,
                'user_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Lomba Variasi Baris-Berbaris Kabupaten Ngawi',
                'slug' => 'lomba-variasi-baris-berbaris-kabupaten-ngawi',
                'rankings' => ' Juara 3',
                'photo' => 'achievement/01JFMCVS6CXYTKDM2K6E3B0FK3.jpg',
                'content' => '<p><strong>SMKN 1 Kasreman</strong> kembali menunjukkan keunggulan dalam bidang non-akademik dengan meraih <strong>Juara 3</strong> di ajang <strong>Lomba Variasi Baris-Berbaris (VBB) Kabupaten Ngawi</strong>. Kompetisi ini berlangsung dengan meriah dan diikuti oleh berbagai sekolah menengah di Kabupaten Ngawi.</p><h2>Tentang Lomba Variasi Baris-Berbaris</h2><p>Lomba Variasi Baris-Berbaris merupakan ajang yang menguji kekompakan, kreativitas, dan kedisiplinan tim dalam menampilkan gerakan baris-berbaris yang dikombinasikan dengan variasi formasi yang inovatif. Penilaian meliputi:</p><ul><li><strong>Kekompakan</strong>: Seluruh anggota tim bergerak serempak dan selaras.</li><li><strong>Kreativitas</strong>: Desain formasi dan variasi gerakan yang unik dan menarik.</li><li><strong>Ketepatan Waktu</strong>: Kesesuaian dengan durasi waktu yang telah ditentukan.</li><li><strong>Penampilan</strong>: Kerapian dan kepercayaan diri para peserta.</li></ul><p>Lomba ini bertujuan untuk meningkatkan semangat kebersamaan, disiplin, dan kreativitas di kalangan pelajar.</p><h2>Perjalanan Tim SMKN 1 Kasreman</h2><h3>Persiapan Sebelum Lomba</h3><p>Tim SMKN 1 Kasreman telah mempersiapkan diri secara intensif sebelum lomba, dengan latihan rutin yang dipandu oleh pelatih berpengalaman. Beberapa hal yang menjadi fokus utama latihan adalah:</p><ol><li><strong>Sinkronisasi Gerakan</strong>: Agar seluruh anggota tim dapat bergerak dengan ritme yang sama.</li><li><strong>Formasi Inovatif</strong>: Membuat variasi gerakan dan pola yang unik, sesuai dengan tema lomba.</li><li><strong>Penguasaan Teknik Dasar</strong>: Memastikan bahwa semua anggota menguasai teknik baris-berbaris dengan sempurna.</li></ol><h3>Penampilan di Lomba</h3><p>Pada hari pelaksanaan, tim SMKN 1 Kasreman tampil dengan semangat yang luar biasa. Penampilan mereka mendapatkan apresiasi dari para juri dan penonton, terutama karena:</p><ul><li><strong>Variasi Formasi yang Kreatif</strong>: Tim berhasil menciptakan pola formasi yang berbeda dan menarik perhatian.</li><li><strong>Semangat yang Tinggi</strong>: Kekompakan dan semangat tim sangat terasa sepanjang penampilan.</li><li><strong>Ketepatan Gerakan</strong>: Gerakan dilakukan dengan penuh kepercayaan diri dan sesuai dengan aba-aba.</li></ul><h3>Pengumuman Pemenang</h3><p>Setelah melalui proses penilaian yang ketat, SMKN 1 Kasreman dinyatakan meraih <strong>Juara 3</strong>. Hasil ini merupakan pencapaian yang membanggakan, mengingat persaingan yang sangat ketat dengan tim-tim unggulan lainnya.</p><h2>Penghargaan yang Diterima</h2><p>Sebagai Juara 3, tim SMKN 1 Kasreman mendapatkan penghargaan berupa:</p><ol><li><strong>Trophy Juara 3</strong>: Sebagai simbol prestasi dan kebanggaan sekolah.</li><li><strong>Sertifikat Penghargaan</strong>: Bukti resmi atas keberhasilan tim.</li><li><strong>Apresiasi dari Sekolah</strong>: Dukungan penuh dari pihak sekolah untuk terus mengembangkan potensi siswa.</li></ol><h2>Manfaat Kompetisi bagi Siswa</h2><p>Mengikuti lomba ini memberikan banyak manfaat bagi para siswa, di antaranya:</p><ul><li><strong>Melatih Kedisiplinan</strong>: Baris-berbaris membutuhkan kedisiplinan tinggi dari setiap anggota tim.</li><li><strong>Meningkatkan Kekompakan</strong>: Kerja sama tim menjadi faktor utama dalam kesuksesan lomba ini.</li><li><strong>Menumbuhkan Rasa Percaya Diri</strong>: Kesempatan tampil di depan publik memberikan pengalaman berharga bagi siswa.</li></ul><h2>Harapan untuk Masa Depan</h2><p>Keberhasilan ini menjadi motivasi bagi SMKN 1 Kasreman untuk terus berprestasi di bidang lainnya. Dengan latihan dan semangat yang konsisten, tim berharap dapat meraih hasil yang lebih baik di kompetisi mendatang.</p>',
                'tags' => json_encode([
                    "LBB",
                    "Ngawi"
                ]),
                'is_pinned' => false,
                'user_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);

        Alumni::factory()->count(10)->create();

        DB::table('testimonials')->insert([
            [
                'alumni_id' => 1,
                'content' => 'Sebagai alumni SMKN 1 Kasreman, saya merasa sangat beruntung bisa mendapatkan pendidikan yang berkualitas di sekolah ini. Pengajaran yang diberikan oleh guru-guru sangat mendalam dan praktis, mempersiapkan kami untuk siap terjun ke dunia kerja. Selain itu, suasana sekolah yang mendukung kreativitas dan pembelajaran juga membantu saya mengembangkan potensi diri. Saya sangat menghargai berbagai fasilitas dan program yang disediakan oleh SMKN 1 Kasreman, yang tidak hanya fokus pada teori, tetapi juga memberikan pengalaman langsung melalui praktek dan magang di dunia industri. Terima kasih SMKN 1 Kasreman, yang telah memberikan bekal berharga untuk perjalanan karir saya.',
                'rating' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'alumni_id' => 4,
                'content' => 'SMKN 1 Kasreman telah memberikan pengalaman luar biasa selama saya belajar di sana. Dengan berbagai kegiatan ekstrakurikuler dan pelajaran yang berfokus pada keahlian praktis, saya merasa lebih siap menghadapi tantangan di dunia profesional. Lingkungan yang mendukung, serta bimbingan dari guru-guru yang berdedikasi, sangat memotivasi saya untuk terus berkembang. Sekolah ini tidak hanya mengajarkan teori, tetapi juga memberikan kesempatan untuk berpraktik langsung, yang sangat membantu saya dalam menjalani karir saat ini. Terima kasih SMKN 1 Kasreman, kalian telah menjadi bagian penting dalam perjalanan hidup saya.',
                'rating' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'alumni_id' => 10,
                'content' => 'Menjadi alumni SMKN 1 Kasreman adalah keputusan terbaik dalam perjalanan hidup saya. Selama menempuh pendidikan di sana, saya mendapatkan pengetahuan dan keterampilan yang sangat berguna dalam dunia kerja. Program pelatihan yang diberikan tidak hanya relevan dengan kebutuhan industri, tetapi juga sangat praktis dan aplikatif. Dukungan dari teman-teman dan guru-guru yang selalu mendukung dan memotivasi sangat berperan dalam perkembangan karir saya. Terima kasih SMKN 1 Kasreman, saya bangga menjadi bagian dari keluarga besar sekolah ini.',
                'rating' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'alumni_id' => 9,
                'content' => 'SMKN 1 Kasreman telah memberikan saya fondasi yang kuat untuk meraih kesuksesan di dunia kerja. Selama bersekolah, saya tidak hanya diajarkan teori, tetapi juga diberikan kesempatan untuk mengasah keterampilan melalui berbagai program praktik yang relevan dengan kebutuhan industri. Pengalaman ini sangat membantu saya dalam menjalani karir saya sekarang. Saya sangat berterima kasih kepada para guru yang selalu mendukung dan membimbing kami untuk menjadi pribadi yang lebih baik. SMKN 1 Kasreman bukan hanya tempat belajar, tetapi juga tempat yang membentuk karakter dan kompetensi saya.',
                'rating' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'alumni_id' => 7,
                'content' => 'Menjadi bagian dari SMKN 1 Kasreman adalah pengalaman yang sangat berharga. Selama di sana, saya tidak hanya belajar materi pelajaran, tetapi juga dipersiapkan untuk menghadapi dunia profesional melalui berbagai keterampilan yang diajarkan. Saya merasa sangat terbantu dengan adanya program magang yang memberikan pengalaman langsung di industri. Guru-guru yang penuh dedikasi dan teman-teman yang mendukung membuat suasana belajar semakin menyenangkan. SMKN 1 Kasreman telah memberi saya banyak peluang untuk berkembang, dan saya sangat bangga menjadi alumni dari sekolah ini.',
                'rating' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'alumni_id' => 5,
                'content' => 'SMKN 1 Kasreman adalah tempat yang tidak hanya mengajarkan saya ilmu pengetahuan, tetapi juga membentuk karakter dan keahlian yang berguna di dunia kerja. Saya sangat berterima kasih atas kesempatan yang diberikan untuk mengikuti berbagai pelatihan dan program magang, yang mempersiapkan saya dengan baik untuk menghadapi tantangan di industri. Dosen dan teman-teman di SMKN 1 Kasreman selalu memberikan dukungan yang luar biasa, menciptakan suasana belajar yang penuh motivasi. Saya bangga bisa menjadi alumni dan terus membawa nama baik sekolah dalam setiap langkah karir saya.',
                'rating' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'alumni_id' => 2,
                'content' => 'SMKN 1 Kasreman telah memberikan banyak sekali pengalaman berharga dalam perjalanan pendidikan saya. Selain memperoleh ilmu yang relevan dengan perkembangan industri, saya juga diajarkan untuk menjadi pribadi yang lebih disiplin dan siap menghadapi tantangan. Pengalaman belajar yang saya dapatkan di sekolah ini tidak hanya membekali saya dengan keterampilan teknis, tetapi juga dengan pemahaman penting tentang kerja sama tim dan etika profesional. Saya sangat bersyukur bisa belajar di SMKN 1 Kasreman, yang tidak hanya mempersiapkan saya untuk dunia kerja, tetapi juga mengajarkan nilai-nilai kehidupan yang sangat berharga',
                'rating' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
