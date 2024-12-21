<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
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
                'shortname' => 'TKJ',
                'description' => '<p>Teknik Komputer dan Jaringan (TKJ) adalah bidang keahlian yang fokus pada penguasaan teknologi informasi, khususnya dalam merancang, membangun, dan memelihara sistem jaringan komputer. Konsentrasi ini dirancang untuk memenuhi kebutuhan industri modern yang sangat mengandalkan teknologi digital.</p><h2><strong>Kompetensi yang Dipelajari di TKJ</strong></h2><p>Siswa TKJ dibekali berbagai keterampilan, di antaranya:</p><ol><li><strong>Perakitan dan Pemeliharaan Komputer</strong><ul><li>Merakit komputer dari komponen dasar.</li><li>Melakukan perawatan dan perbaikan perangkat keras.</li></ul></li><li><strong>Administrasi Jaringan</strong><ul><li>Konfigurasi jaringan lokal (LAN) dan luas (WAN).</li><li>Pengelolaan server dan pengguna jaringan.</li></ul></li><li><strong>Keamanan Jaringan</strong><ul><li>Mengidentifikasi ancaman jaringan.</li><li>Menerapkan sistem keamanan seperti firewall dan VPN.</li></ul></li><li><strong>Pemrograman Dasar</strong><ul><li>Membuat skrip sederhana untuk mendukung administrasi jaringan.</li></ul></li></ol><h2><strong>Prospek Kerja Lulusan TKJ</strong></h2><p>Bidang TKJ menawarkan peluang karier yang luas, seperti:</p><ul><li><strong>Teknisi Jaringan</strong><br>Bertanggung jawab atas instalasi dan perawatan jaringan komputer.</li><li><strong>Administrator Sistem</strong><br>Mengelola server dan memastikan ketersediaan layanan IT.</li><li><strong>IT Support</strong><br>Menyelesaikan masalah teknis yang dialami pengguna.</li><li><strong>Cybersecurity Analyst</strong><br>Melindungi data dan sistem dari serangan siber.</li><li><strong>Wirausahawan Teknologi</strong><br>Membuka bisnis di bidang teknologi seperti jasa instalasi jaringan dan penyewaan server.</li></ul><h2><strong>Mengapa Memilih Konsentrasi TKJ?</strong></h2><p>Ada beberapa alasan mengapa TKJ menjadi pilihan yang menarik:</p><ul><li><strong>Kebutuhan Industri yang Tinggi</strong><br>Dengan perkembangan teknologi, tenaga ahli di bidang jaringan sangat dibutuhkan.</li><li><strong>Materi Praktis</strong><br>Siswa belajar melalui praktik langsung yang sesuai dengan kebutuhan dunia kerja.</li><li><strong>Peluang Pengembangan Diri</strong><br>Lulusan TKJ dapat melanjutkan studi ke perguruan tinggi atau mengambil sertifikasi internasional seperti CCNA dan CompTIA Network+.</li></ul><p><br></p><p>Teknik Komputer dan Jaringan adalah salah satu konsentrasi keahlian yang menjanjikan. Dengan keterampilan yang relevan dan peluang karier yang beragam, konsentrasi ini menjadi pilihan tepat bagi siswa yang tertarik dengan dunia teknologi, khususnya jaringan komputer.</p>',
                'study_group' => 2,
                'study_period' => 3,
                'total_students' => 216,
                'logo' => 'major/logo/tkj.svg',
                'image_1' => 'major/cover/1007.jpg',
                'image_2' => 'major/cover/1008.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Akuntansi',
                'shortname' => 'AK',
                'description' => '<p>Akuntansi adalah bidang yang berfokus pada pencatatan, analisis, dan pelaporan keuangan suatu organisasi atau perusahaan. Keahlian ini sangat penting karena menyangkut pengelolaan keuangan yang transparan dan akurat, yang dapat digunakan untuk pengambilan keputusan dan perencanaan keuangan. Akuntansi mencakup berbagai proses yang melibatkan pengukuran, pemrosesan, dan penyajian informasi keuangan.</p><h2><strong>Kompetensi yang Dipelajari dalam Akuntansi</strong></h2><p>Siswa yang memilih konsentrasi Akuntansi akan mempelajari berbagai keterampilan yang relevan di dunia kerja, antara lain:</p><ol><li><strong>Pencatatan Keuangan</strong><ul><li>Menyusun dan mencatat transaksi keuangan perusahaan.</li><li>Memahami prinsip-prinsip dasar akuntansi, seperti sistem pencatatan ganda dan penggunaan akun.</li></ul></li><li><strong>Penyusunan Laporan Keuangan</strong><ul><li>Membuat laporan keuangan seperti neraca, laporan laba rugi, dan laporan arus kas.</li><li>Menganalisis laporan keuangan untuk membantu dalam pengambilan keputusan.</li></ul></li><li><strong>Akuntansi Pajak</strong><ul><li>Menghitung kewajiban pajak perusahaan sesuai dengan peraturan perpajakan yang berlaku.</li><li>Menyusun laporan pajak dan memastikan kepatuhan terhadap peraturan perpajakan.</li></ul></li><li><strong>Akuntansi Manajerial</strong><ul><li>Menganalisis biaya dan pendapatan untuk membantu perencanaan dan pengendalian keuangan perusahaan.</li><li>Menyusun anggaran dan proyeksi keuangan.</li></ul></li><li><strong>Audit dan Pengendalian Internal</strong><ul><li>Menilai keandalan dan akurasi laporan keuangan melalui audit internal.</li><li>Menerapkan prosedur pengendalian internal untuk mencegah penyelewengan atau kesalahan dalam pencatatan keuangan.</li></ul></li></ol><h2><strong>Prospek Kerja Lulusan Akuntansi</strong></h2><p>Lulusan Akuntansi memiliki peluang karier yang sangat luas di berbagai sektor, antara lain:</p><ul><li><strong>Akuntan</strong><br>Bertanggung jawab untuk pencatatan dan penyusunan laporan keuangan perusahaan atau organisasi.</li><li><strong>Auditor</strong><br>Memastikan bahwa laporan keuangan sesuai dengan standar akuntansi dan peraturan yang berlaku.</li><li><strong>Pajak Konsultan</strong><br>Memberikan nasihat terkait perencanaan pajak dan kepatuhan terhadap peraturan perpajakan.</li><li><strong>Manajer Keuangan</strong><br>Mengelola dan merencanakan aspek keuangan perusahaan, seperti anggaran dan investasi.</li><li><strong>Wirausaha di Bidang Jasa Akuntansi</strong><br>Membuka layanan konsultasi akuntansi atau pembukuan untuk usaha kecil dan menengah.</li></ul><h2><strong>Mengapa Memilih Konsentrasi Akuntansi?</strong></h2><p>Berikut beberapa alasan mengapa memilih konsentrasi Akuntansi adalah keputusan yang tepat:</p><ul><li><strong>Peluang Karier yang Luas</strong><br>Semua perusahaan, baik kecil maupun besar, memerlukan akuntan untuk mengelola keuangan mereka, membuka banyak peluang karier.</li><li><strong>Keterampilan yang Dapat Dipertanggungjawabkan</strong><br>Keahlian dalam akuntansi sangat dihargai dan selalu dibutuhkan di dunia profesional.</li><li><strong>Peluang untuk Sertifikasi Profesional</strong><br>Lulusan akuntansi dapat melanjutkan studi dan mendapatkan sertifikasi profesional, seperti CPA (Certified Public Accountant) atau CA (Chartered Accountant).</li><li><strong>Peluang Wirausaha</strong><br>Akuntansi memberikan dasar yang kuat bagi mereka yang ingin memulai bisnis atau membuka jasa konsultasi keuangan.</li></ul><p><br></p><p>Konsentrasi Akuntansi adalah pilihan yang sangat baik bagi mereka yang tertarik dengan pengelolaan keuangan dan memiliki ketelitian tinggi. Dengan peluang karier yang luas dan keterampilan yang dapat diterapkan di berbagai sektor, Akuntansi membuka jalan bagi kesuksesan profesional di dunia kerja.</p>',
                'study_group' => 3,
                'study_period' => 3,
                'total_students' => 324,
                'logo' => 'major/logo/ak.svg',
                'image_1' => 'major/cover/1005.jpg',
                'image_2' => 'major/cover/1006.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Kuliner',
                'shortname' => 'KL',
                'description' => '<p>Jurusan Kuliner adalah bidang pendidikan yang fokus pada keterampilan memasak dan pengelolaan bisnis makanan. Di dalamnya, siswa diajarkan tidak hanya tentang cara membuat berbagai hidangan, tetapi juga bagaimana mengelola dapur profesional, mengatur manajemen restoran, serta memahami berbagai aspek terkait industri kuliner. Jurusan ini sangat cocok bagi mereka yang memiliki passion di bidang makanan dan minuman serta tertarik untuk berkarier di dunia hospitality.</p><h2><strong>Kompetensi yang Dipelajari dalam Jurusan Kuliner</strong></h2><p>Siswa yang memilih jurusan Kuliner akan mempelajari berbagai kompetensi yang meliputi:</p><ol><li><strong>Dasar-Dasar Memasak</strong><ul><li>Teknik dasar memasak, mulai dari memotong bahan hingga teknik pemasakan yang berbeda.</li><li>Penguasaan berbagai jenis masakan dari berbagai daerah dan negara.</li></ul></li><li><strong>Higiene dan Keamanan Pangan</strong><ul><li>Pentingnya kebersihan dan sanitasi dalam mempersiapkan makanan.</li><li>Pemahaman tentang pengendalian kualitas makanan dan pencegahan penyakit yang ditularkan melalui makanan.</li></ul></li><li><strong>Pengelolaan Dapur</strong><ul><li>Manajemen operasional dapur, pengaturan bahan baku, serta pemeliharaan peralatan dapur.</li><li>Pengelolaan tenaga kerja di dapur, termasuk pembagian tugas dan pelatihan karyawan.</li></ul></li><li><strong>Penyajian dan Dekorasi Makanan</strong><ul><li>Teknik penyajian dan plating yang menarik agar makanan terlihat lebih menggugah selera.</li><li>Kreativitas dalam menghias makanan dan minuman untuk meningkatkan daya tarik visual.</li></ul></li><li><strong>Manajemen Bisnis Kuliner</strong><ul><li>Pengelolaan keuangan, pemasaran, dan operasional restoran atau bisnis kuliner lainnya.</li><li>Pengenalan tentang tren industri kuliner, termasuk restoran, katering, dan usaha makanan lainnya.</li></ul></li></ol><h2><strong>Prospek Kerja Lulusan Jurusan Kuliner</strong></h2><p>Lulusan jurusan Kuliner memiliki banyak peluang karier di berbagai sektor, baik di dalam negeri maupun internasional, seperti:</p><ul><li><strong>Koki Profesional</strong><br>Bekerja di restoran, hotel, atau resort, memimpin tim dapur untuk menyajikan hidangan berkualitas tinggi.</li><li><strong>Pastry Chef</strong><br>Spesialis dalam pembuatan kue, roti, dan makanan manis lainnya.</li><li><strong>Manajer Restoran</strong><br>Mengelola operasional harian restoran, mulai dari pengelolaan staf hingga strategi pemasaran.</li><li><strong>Food Stylist</strong><br>Mengatur presentasi makanan untuk foto atau video yang digunakan dalam iklan atau media sosial.</li><li><strong>Pengusaha Kuliner</strong><br>Memulai bisnis makanan, seperti membuka restoran, katering, atau usaha kuliner lainnya.</li><li><strong>Instruktur Kuliner</strong><br>Mengajar keterampilan memasak di sekolah kuliner atau pusat pelatihan.</li></ul><h2><strong>Mengapa Memilih Jurusan Kuliner?</strong></h2><p>Beberapa alasan mengapa memilih jurusan Kuliner adalah pilihan yang menarik:</p><ul><li><strong>Peluang Karier yang Luas</strong><br>Industri kuliner terus berkembang, menawarkan banyak kesempatan untuk bekerja di berbagai bidang.</li><li><strong>Kreativitas dalam Memasak</strong><br>Jurusan ini memungkinkan Anda untuk berekspresi melalui masakan dan menciptakan inovasi di dunia kuliner.</li><li><strong>Peluang untuk Berwirausaha</strong><br>Jurusan kuliner memberikan bekal untuk memulai bisnis kuliner Anda sendiri, dengan keterampilan yang dibutuhkan untuk sukses dalam industri ini.</li><li><strong>Industri yang Dinamis</strong><br>Dunia kuliner selalu berubah, memberikan kesempatan untuk terus belajar dan mengikuti tren baru.</li></ul><p><br></p><p>Jurusan Kuliner adalah pilihan yang sangat baik bagi mereka yang memiliki minat dan bakat dalam dunia masak-memasak dan ingin mengembangkan karier di industri makanan. Dengan keterampilan yang didapatkan, lulusan kuliner dapat memasuki dunia kerja yang penuh tantangan dan peluang, baik di dalam negeri maupun internasional.</p>',
                'study_group' => 2,
                'study_period' => 3,
                'total_students' => 216,
                'logo' => 'major/logo/kl.svg',
                'image_1' => 'major/cover/1003.jpg',
                'image_2' => 'major/cover/1004.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Desain dan Produksi Busana',
                'shortname' => 'DPB',
                'description' => '<p>Desain dan Produksi Busana adalah bidang yang menggabungkan kreativitas dalam merancang pakaian dengan keterampilan teknis dalam produksi busana. Jurusan ini fokus pada pengembangan ide, pembuatan pola, pemilihan bahan, serta pembuatan pakaian yang estetis dan fungsional. Konsentrasi ini sangat cocok bagi mereka yang memiliki minat di dunia fashion dan ingin memahami seluruh proses dari konsep desain hingga produk jadi.</p><h2><strong>Kompetensi yang Dipelajari dalam Desain dan Produksi Busana</strong></h2><p>Siswa yang memilih konsentrasi Desain dan Produksi Busana akan mempelajari keterampilan utama di bidang fashion, antara lain:</p><ol><li><strong>Desain Busana</strong><ul><li>Menggambar dan merancang pakaian sesuai dengan tren mode dan kebutuhan pasar.</li><li>Membuat sketsa, mood board, dan mengembangkan konsep desain pakaian.</li></ul></li><li><strong>Pembuatan Pola dan Teknik Jahit</strong><ul><li>Membuat pola dasar pakaian dan memodifikasinya untuk desain yang lebih kompleks.</li><li>Teknik menjahit dan merakit bahan menjadi pakaian yang siap pakai.</li></ul></li><li><strong>Pemilihan Bahan dan Material</strong><ul><li>Memahami berbagai jenis bahan pakaian dan karakteristiknya.</li><li>Memilih bahan yang sesuai dengan desain dan fungsionalitas pakaian.</li></ul></li><li><strong>Produksi Busana</strong><ul><li>Memahami proses produksi dari sketsa hingga pakaian jadi.</li><li>Mengatur produksi busana dalam skala kecil maupun besar, termasuk manajemen produksi dan pengendalian kualitas.</li></ul></li><li><strong>Pengembangan Koleksi dan Tren Mode</strong><ul><li>Menganalisis tren mode terkini untuk mengembangkan koleksi pakaian yang sesuai dengan pasar sasaran.</li><li>Mengikuti perkembangan industri fashion dan menyesuaikan desain dengan kebutuhan konsumen.</li></ul></li></ol><h2><strong>Prospek Kerja Lulusan Desain dan Produksi Busana</strong></h2><p>Lulusan desain dan produksi busana memiliki banyak peluang kerja di berbagai sektor industri mode, seperti:</p><ul><li><strong>Desainer Busana</strong><br>Mengembangkan koleksi busana untuk rumah mode, butik, atau perusahaan fashion.</li><li><strong>Pola Maker</strong><br>Membuat pola busana berdasarkan desain yang telah dibuat untuk proses produksi.</li><li><strong>Penjahit Profesional</strong><br>Menjahit pakaian custom untuk klien atau dalam produksi massal.</li><li><strong>Manajer Produksi Busana</strong><br>Mengelola dan mengatur jalannya proses produksi pakaian di pabrik atau studio desain.</li><li><strong>Fashion Stylist</strong><br>Bertanggung jawab atas penataan busana untuk pemotretan, acara, atau klien pribadi.</li><li><strong>Pengusaha Fashion</strong><br>Membuka merek atau lini pakaian sendiri, mengelola produksi dan distribusi busana.</li><li><strong>Konsultan Mode</strong><br>Memberikan saran dan ide desain kepada perusahaan atau individu dalam pengembangan busana.</li></ul><h2><strong>Mengapa Memilih Konsentrasi Desain dan Produksi Busana?</strong></h2><p>Beberapa alasan mengapa memilih jurusan Desain dan Produksi Busana adalah pilihan yang tepat:</p><ul><li><strong>Industri Fashion yang Terus Berkembang</strong><br>Dunia mode selalu berkembang dengan cepat, menciptakan berbagai peluang karier dalam berbagai sektor, baik di dalam negeri maupun internasional.</li><li><strong>Kreativitas yang Tak Terbatas</strong><br>Jurusan ini memberikan kebebasan untuk berekspresi dan menciptakan karya-karya busana yang menarik dan inovatif.</li><li><strong>Peluang Berwirausaha</strong><br>Dengan keterampilan desain dan produksi, lulusan dapat memulai bisnis fashion mereka sendiri, seperti butik atau label pakaian.</li><li><strong>Peluang Karier di Berbagai Bidang</strong><br>Selain menjadi desainer, lulusan juga dapat berkarier dalam produksi, manajemen, dan pemasaran busana.</li></ul><p><br></p><p>Jurusan Desain dan Produksi Busana adalah pilihan yang ideal bagi mereka yang memiliki minat dalam dunia mode dan ingin mengembangkan keterampilan kreatif dan teknis. Dengan berbagai peluang karier dan potensi untuk berwirausaha, lulusan dari konsentrasi ini memiliki kesempatan besar untuk sukses di industri fashion yang dinamis.</p>',
                'study_group' => 1,
                'study_period' => 3,
                'total_students' => 108,
                'logo' => 'major/logo/dpb.svg',
                'image_1' => 'major/cover/1001.jpg',
                'image_2' => 'major/cover/1002.jpg',
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
                'created_at' => '2024-12-20 22:04:49',
                'updated_at' => '2024-12-20 22:04:49',
            ],
            [
                'name' => 'PT. Chemco Harapan Nusantara',
                'logo' => 'partners/01JFKTFBPNE4EEFSBB17EF78JC.png',
                'address' => 'Jababeka Industrial Estate Jl. Jababeka Raya Blok F No.19-28, Cikarang - Bekasi, West Java 17530 Indonesia',
                'industry' => json_encode(["Manufaktur"]),
                'created_at' => '2024-12-20 22:19:06',
                'updated_at' => '2024-12-20 22:19:06',
            ],
            [
                'name' => 'Dinas Kependudukan dan Pencatatan SIpil Kabupaten Ngawi',
                'logo' => 'partners/01JFKTNATX4GJ9KRA3STDZN185.png',
                'address' => 'Mall Pelayanan Publik, Kerek, Margomulyo, Kec. Ngawi, Kabupaten Ngawi, Jawa Timur 63217',
                'industry' => json_encode(["Akuntansi", "Administrasi"]),
                'created_at' => '2024-12-20 22:22:22',
                'updated_at' => '2024-12-20 22:22:22',
            ],
            [
                'name' => 'Pemerintah Kabupaten Nagwi',
                'logo' => 'partners/01JFKTRDM0HQG6DMYWW18E9QWZ.png',
                'address' => 'Jl. Teuku Umar No.12, Kluncing, Ketanggi, Kec. Ngawi, Kabupaten Ngawi, Jawa Timur 63211',
                'industry' => json_encode(["Akuntansi", "Administrasi"]),
                'created_at' => '2024-12-20 22:24:03',
                'updated_at' => '2024-12-20 22:24:03',
            ],
            [
                'name' => 'Maju Hardware',
                'logo' => 'partners/01JFKTSXF50S1EWEQ2DB26RMZ6.png',
                'address' => 'Jl. Kutai No.5, Pandean, Kec. Taman Kota Madiun, Jawa Timur 63133',
                'industry' => json_encode(["Teknologi Informasi"]),
                'created_at' => '2024-12-20 22:24:54',
                'updated_at' => '2024-12-20 22:24:54',
            ],
            [
                'name' => 'PT Dwi Prima Sentosa',
                'logo' => 'partners/01JFKTWJEFVANHMPN08P64D2RA.png',
                'address' => 'Cabean, Karang Tengah Prandon, Kec. Ngawi, Kabupaten Ngawi, Jawa Timur 63218',
                'industry' => json_encode(["Tekstil", "Manufaktur"]),
                'created_at' => '2024-12-20 22:26:19',
                'updated_at' => '2024-12-20 22:26:19',
            ],
            [
                'name' => 'PT. Wilmar Cahaya indonesia Tbk',
                'logo' => 'partners/01JFKV005SDJSN21PD009B9JKT.png',
                'address' => 'Jl. Khatulistiwa Km. 4,3 Batulayang, Pontianak 78244 - West Kalimantan',
                'industry' => json_encode(["Teknologi Informasi"]),
                'created_at' => '2024-12-20 22:28:11',
                'updated_at' => '2024-12-20 22:28:11',
            ],
            [
                'name' => 'Dinas Komunikasi Dan Informatika Ngawi',
                'logo' => 'partners/01JFKV1MPJ8FXQKP9BH41GYNN2.png',
                'address' => 'Jl. Teuku Umar No.43, Cabean Kidul, Ketanggi, Kec. Ngawi, Kabupaten Ngawi, Jawa Timur 63211',
                'industry' => json_encode(["Teknologi Informasi", "Akuntansi"]),
                'created_at' => '2024-12-20 22:29:05',
                'updated_at' => '2024-12-20 22:29:05',
            ],
            [
                'name' => 'RM Spesial Soto Boyolali',
                'logo' => 'partners/01JFKV3C4QCJCABQESE8BHHWEN.png',
                'address' => 'Mojosongo, Kab. Boyolali, Jawa tengah, indonesia',
                'industry' => json_encode(["FnB"]),
                'created_at' => '2024-12-20 22:30:02',
                'updated_at' => '2024-12-20 22:30:02',
            ],
            [
                'name' => 'PT Sinar Solaria',
                'logo' => 'partners/01JFKV70EYNG10FRK79X5QJ8RV.png',
                'address' => 'Pulo Gebang, Kota Jakarta Timur, DKI Jakarta, Indonesia',
                'industry' => json_encode(["FnB"]),
                'created_at' => '2024-12-20 22:32:01',
                'updated_at' => '2024-12-20 22:32:01',
            ],
        ]);
    }
}
