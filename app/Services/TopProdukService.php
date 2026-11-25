<?php

namespace App\Services;

use Illuminate\Support\Collection;

class TopProdukService
{
    /**
     * Data kumpulan post / artikel produk dengan tag 'top produk'.
     * Urutan post diatur otomatis berdasarkan tanggal post (post_date ascending):
     * Tanggal paling lama = Urutan 1 di Homepage.
     */
    protected static array $posts = [
        [
            'id' => 1,
            'slug' => 'gundam-barbatos',
            'title' => 'Gundam Barbatos',
            'subtitle' => 'Gunpla Master 1/100 dengan artikulasi dinamis dan detail mekanik',
            'age' => '14+',
            'type' => 'GUNPLA MG',
            'age_type' => '14+/GUNPLA MG',
            'price' => 'Rp 329.000',
            'raw_price' => 329000,
            'thumbnail' => 'images/toys/gundam.jpg',
            'post_date' => '2026-11-01',
            'tag' => 'top produk',
            'rating' => '4.9',
            'sold' => '2.8rb+',
            'shopee_url' => 'https://shopee.co.id/gundam-barbatos-mg',
            'tokopedia_url' => 'https://tokopedia.com',
            'summary' => 'Model kit Master Grade skala 1/100 original Bandai Jepang dengan inner frame lengkap, artikulasi sendi dinamis, senjata mace & pedang katana, serta detail panel lining presisi.',
            'content' => 'Gundam Barbatos dari serial Iron-Blooded Orphans hadir dalam lini Master Grade (MG) 1/100 dengan artikulasi rangka batin (inner frame) yang sangat fleksibel. Setiap piston silinder hidrolik bergerak secara sinkron saat sendi ditekuk. Dilengkapi persenjataan lengkap seperti Mace raksasa, smoothbore gun, dan Katana tajam. Kit ini menjadi primadona kolektor gunpla berkat kestabilan pose dan detail mekanik yang menawan tanpa perlu pengecatan tambahan.',
        ],
        [
            'id' => 2,
            'slug' => 'tamiya-avante-4wd',
            'title' => 'Tamiya Avante 4WD',
            'subtitle' => 'Racer Mini 4WD legendaris dengan sasis AR aerodinamis dan gold suspension',
            'age' => '8-18 Thn',
            'type' => 'Speed Racer',
            'age_type' => '8-18 Thn/Speed Racer',
            'price' => 'Rp 289.000',
            'raw_price' => 289000,
            'thumbnail' => 'images/toys/tamiya.jpg',
            'post_date' => '2026-11-02',
            'tag' => 'top produk',
            'rating' => '4.9',
            'sold' => '3.1rb+',
            'shopee_url' => 'https://shopee.co.id/tamiya-avante-4wd',
            'tokopedia_url' => 'https://tokopedia.com',
            'summary' => 'Kit balap Tamiya original dengan sasis modern berkecepatan tinggi, gold coilover suspension, ban spiked high-grip, dan motor kencang siap tanding di lintasan trek.',
            'content' => 'Tamiya Avante merupakan legenda balap Mini 4WD yang digandrungi lintas generasi. Mengadopsi sasis berpusat gravitasi rendah dengan transmisi poros 4-wheel drive presisi tinggi. Kit ini dilengkapi velg berdiameter besar, ban compound bertapak khusus, dan peredam getaran gold suspension. Dirancang untuk stabilitas maksimal saat melibas tanjakan dan tikungan tajam lintasan sirkuit.',
        ],
        [
            'id' => 3,
            'slug' => 'playstation-5-slim',
            'title' => 'PlayStation 5 Slim',
            'subtitle' => 'Konsol gaming generasi terbaru dengan grafis 4K 120FPS dan DualSense',
            'age' => 'Gaming 12+',
            'type' => 'Next-Gen',
            'age_type' => 'Gaming 12+/Next-Gen',
            'price' => 'Rp 7.890.000',
            'raw_price' => 7890000,
            'thumbnail' => 'images/toys/playstation.jpg',
            'post_date' => '2026-11-03',
            'tag' => 'top produk',
            'rating' => '4.9',
            'sold' => '1.9rb+',
            'shopee_url' => 'https://shopee.co.id/playstation-5-slim',
            'tokopedia_url' => 'https://tokopedia.com',
            'summary' => 'Konsol resmi Sony PlayStation 5 Slim edisi terbaru dengan SSD 1TB ultra-fast, ray tracing grafis resolusi 4K, audio 3D Tempest, dan controller nirkabel DualSense.',
            'content' => 'Sony PlayStation 5 Slim menghadirkan performa komputasi gaming luar biasa dalam bodi 30% lebih ramping. Ditenagai SSD kustom ultra-kencang 1TB yang memangkas waktu loading ke titik nol. Nikmati grafis photorealistic 4K 120Hz dengan dukungan hardware Ray Tracing dinamis serta controller revolusioner DualSense yang memberikan umpan balik haptic nyata di setiap aksi permainan.',
        ],
        [
            'id' => 4,
            'slug' => 'pop-mart-labubu',
            'title' => 'Pop Mart Labubu',
            'subtitle' => 'Boneka vinyl collectible limited edition Pop Mart dengan senyum khas mischievous',
            'age' => 'Semua Usia',
            'type' => 'Viral Hype',
            'age_type' => 'Semua Usia/Viral Hype',
            'price' => 'Rp 189.000',
            'raw_price' => 189000,
            'thumbnail' => 'images/toys/labubu.jpg',
            'post_date' => '2026-11-04',
            'tag' => 'top produk',
            'rating' => '5.0',
            'sold' => '6.5rb+',
            'shopee_url' => 'https://shopee.co.id/pop-mart-labubu',
            'tokopedia_url' => 'https://tokopedia.com',
            'summary' => 'Figur seni vinyl Pop Mart Labubu edisi terbatas original. Menjadi tren viral global di kalangan selebriti dan kolektor mainan dengan detail cat premium.',
            'content' => 'Labubu The Monsters karya Kasing Lung bersama Pop Mart telah menjadi fenomena tren pop-culture global. Dengan karakteristik telinga kelinci panjang berbulu lembut dan senyuman khas berderet taring menggemaskan, figur vinyl edisi terbatas ini dibuat dengan standar cetakan tinggi dan warna pastel yang sangat estetik dipajang di meja kerja maupun lemari etalase koleksi.',
        ],
        [
            'id' => 5,
            'slug' => 'hot-wheels-gtr-r34',
            'title' => 'Hot Wheels GT-R R34',
            'subtitle' => 'Diecast metal skala 1:64 dengan cat metallic blue dan ban karet asli Real Riders',
            'age' => 'Kolektor Diecast',
            'type' => 'Real Riders',
            'age_type' => 'Kolektor Diecast/Real Riders',
            'price' => 'Rp 119.000',
            'raw_price' => 119000,
            'thumbnail' => 'images/toys/hotwheels.jpg',
            'post_date' => '2026-11-05',
            'tag' => 'top produk',
            'rating' => '4.9',
            'sold' => '4.8rb+',
            'shopee_url' => 'https://shopee.co.id/hot-wheels-gtr-r34',
            'tokopedia_url' => 'https://tokopedia.com',
            'summary' => 'Hot Wheels Premium Car Culture edisi Nissan Skyline GT-R BNR34 dengan bodi full-metal diecast tebal, velg sport bronze, dan ban karet asli Real Riders.',
            'content' => 'Nissan Skyline GT-R R34 berjuluk Godzilla merupakan mahakarya diecast skala 1:64 lini Premium Car Culture. Menggunakan sasis full-metal berbobot solid dengan balutan cat Bayside Blue otentik. Detail lampu depan mika, sayap belakang aerokit Nismo, dan ban karet asli Real Riders menjadikannya incaran nomor satu para pecinta mobil legendaris JDM.',
        ],
        [
            'id' => 6,
            'slug' => 'lego-ferrari-f40',
            'title' => 'LEGO Ferrari F40',
            'subtitle' => 'Set rakitan supercar balap klasik Ferrari dengan spoiler ikonik dan minifigure',
            'age' => '9+ Thn',
            'type' => 'Speed Champions',
            'age_type' => '9+ Thn/Speed Champions',
            'price' => 'Rp 349.000',
            'raw_price' => 349000,
            'thumbnail' => 'images/toys/lego.jpg',
            'post_date' => '2026-11-06',
            'tag' => 'top produk',
            'rating' => '4.9',
            'sold' => '3.7rb+',
            'shopee_url' => 'https://shopee.co.id/lego-ferrari-f40',
            'tokopedia_url' => 'https://tokopedia.com',
            'summary' => 'Set balok LEGO Speed Champions original Ferrari F40 Competizione dengan detail bodi mobil balap warna merah khas Maranello dan minifigure pengemudi.',
            'content' => 'LEGO Speed Champions Ferrari F40 menghadirkan sensasi merakit salah satu supercar paling ikonik di dunia. Dirancang dengan proporsi 8 stud yang lebih lebar dan akurat, replika ini menangkap garis bodi tajam, spoiler belakang legendaris, kap mesin berventilasi transparan, serta kokpit yang dapat memuat minifigure pengemudi Ferrari lengkap dengan helm balap.',
        ],
        [
            'id' => 7,
            'slug' => 'beyblade-x-stadium',
            'title' => 'Beyblade X Stadium',
            'subtitle' => 'Gasing tempur generasi Xtreme berkecepatan putar ekstrem dengan bilah logam ganda',
            'age' => '6-14 Thn',
            'type' => 'Turnamen',
            'age_type' => '6-14 Thn/Turnamen',
            'price' => 'Rp 219.000',
            'raw_price' => 219000,
            'thumbnail' => 'images/toys/beyblade.jpg',
            'post_date' => '2026-11-07',
            'tag' => 'top produk',
            'rating' => '5.0',
            'sold' => '5.2rb+',
            'shopee_url' => 'https://shopee.co.id/beyblade-x-stadium',
            'tokopedia_url' => 'https://tokopedia.com',
            'summary' => 'Starter pack Beyblade X original Takara Tomy dengan launcher berkecepatan tinggi, metal coat fusion ring, dan performa putaran agresif untuk bertarung di stadium turnamen resmi.',
            'content' => 'Generasi ke-4 gasing tempur Beyblade X membawa inovasi Xtreme Dash (X-Dash) yang memanfaatkan rel gigi pada arena stadium untuk memicu akselerasi turbo instan. Bilah logam metal terluar memberikan benturan keras berdaya ledak tinggi yang memicu aksi pertempuran seru dan adu ketahanan spin yang mendebarkan di setiap ronde turnamen.',
        ],
        // Post tambahan (akan muncul di halaman khusus /topproduk yang memuat lebih dari 7 produk)
        [
            'id' => 8,
            'slug' => 'pokemon-tcg-holo',
            'title' => 'Pokemon TCG Holo',
            'subtitle' => 'Koleksi booster pack kartu original edisi foil holografik langka rating grade tinggi',
            'age' => 'Kartu Koleksi',
            'type' => 'Holo Rare',
            'age_type' => 'Kartu Koleksi/Holo Rare',
            'price' => 'Rp 159.000',
            'raw_price' => 159000,
            'thumbnail' => 'images/toys/pokemon.jpg',
            'post_date' => '2026-11-08',
            'tag' => 'top produk',
            'rating' => '5.0',
            'sold' => '7.1rb+',
            'shopee_url' => 'https://shopee.co.id/pokemon-tcg-holo',
            'tokopedia_url' => 'https://tokopedia.com',
            'summary' => 'Paket kartu Pokemon Trading Card Game (TCG) original berlisensi The Pokemon Company dengan kartu holografik foil edisi langka dan sleeve pelindung.',
            'content' => 'Pokemon Trading Card Game (TCG) edisi Booster Holo menghadirkan seni kartu spektakuler berlapisan foil prisma metalik. Kartu-kartu karakter langka seperti Charizard, Pikachu VMAX, dan Mewtwo memiliki nilai koleksi tinggi di pasar lelang internasional. Setiap pack terjamin keasliannya dan bersegel resmi pabrikan.',
        ],
        [
            'id' => 9,
            'slug' => 'optimus-prime-masterpiece',
            'title' => 'Optimus Prime Masterpiece',
            'subtitle' => 'Figur transformasi diecast premium Autobot Leader dengan 49 langkah konversi presisi',
            'age' => '15+',
            'type' => 'Transformers Masterpiece',
            'age_type' => '15+/Transformers Masterpiece',
            'price' => 'Rp 1.450.000',
            'raw_price' => 1450000,
            'thumbnail' => 'images/toys/optimus.jpg',
            'post_date' => '2026-11-09',
            'tag' => 'top produk',
            'rating' => '4.9',
            'sold' => '820+',
            'shopee_url' => 'https://shopee.co.id/optimus-prime-masterpiece',
            'tokopedia_url' => 'https://tokopedia.com',
            'summary' => 'Figur transformasi diecast skala kolektor Takara Tomy Transformers Masterpiece MPM-12 Optimus Prime dengan sendi artikulasi berat dan cat premium.',
            'content' => 'Optimus Prime Masterpiece MPM-12 adalah interpretasi terbaik dari pemimpin Autobot berlisensi resmi. Mampu bertransformasi sempurna dari truk semi-cabover klasik menjadi robot setinggi 28cm dalam 49 langkah konversi rekayasa presisi tinggi. Menggunakan part berbahan diecast metal, Matrix of Leadership berlapis chrome di rongga dada, dan senjata Ion Blaster otentik.',
        ],
        [
            'id' => 10,
            'slug' => 'post-1',
            'title' => 'Sony PlayStation 5 Console Gaming & Collectible Edition',
            'subtitle' => 'Konsol gaming next-gen dengan visual 4K ultra-smooth, SSD super cepat, kontroler DualSense haptic feedback, dan edisi koleksi terlengkap',
            'age' => 'Gaming 12+',
            'type' => 'Gaming Console',
            'age_type' => 'Gaming 12+/Gaming Console',
            'price' => 'Rp 14.630.000',
            'raw_price' => 14630000,
            'thumbnail' => 'images/toys/playstation.jpg',
            'post_date' => '2026-11-25',
            'tag' => 'top produk',
            'rating' => '4.9',
            'sold' => '2.8rb+',
            'shopee_url' => 'https://s.shopee.co.id/Lp4WI31xi',
            'affiliate_url' => 'https://s.shopee.co.id/Lp4WI31xi',
            'tokopedia_url' => 'https://tokopedia.com',
            'summary' => 'Konsol gaming generasi terbaru yang menggabungkan performa gaming kelas atas, visual 4K HDR memukau, kontroler DualSense revolusioner, serta menjadi barang koleksi wajib bagi para pecinta game dan hobi pop culture.',
            'content' => 'Sony PlayStation 5 Console Gaming & Collectible Edition menghadirkan standar baru dalam dunia gaming dan hiburan interaktif. Ditenagai prosesor kustom AMD Zen 2 berkecepatan tinggi dan arsitektur grafis RDNA 2, konsol ini mampu menjalankan game pada resolusi 4K dengan frame rate hingga 120 FPS serta teknologi Ray Tracing real-time untuk pencahayaan fotorealistis.',
        ],
    ];

    /**
     * Ambil semua post yang memiliki tag 'top produk',
     * dengan post paling update (Post 1) di urutan paling awal (#1).
     */
    public static function all(): Collection
    {
        $posts = collect(self::$posts)->filter(fn ($post) => strtolower($post['tag']) === 'top produk');
        $latest = $posts->firstWhere('slug', 'post-1');
        $others = $posts->where('slug', '!==', 'post-1')->values();

        return collect([$latest])->filter()->concat($others)->values();
    }

    /**
     * Ambil 7 produk teratas untuk ditampilkan di Homepage Top Produk slider.
     * Post 1 (terbaru) berada di posisi #1 (Card 1 tema biru).
     */
    public static function topSeven(): Collection
    {
        return self::all()->take(7);
    }

    /**
     * Cari post berdasarkan slug.
     */
    public static function findBySlug(string $slug): ?array
    {
        return self::all()->firstWhere('slug', $slug);
    }
}
