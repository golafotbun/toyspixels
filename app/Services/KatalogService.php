<?php

namespace App\Services;

use Illuminate\Support\Collection;

class KatalogService
{
    /**
     * Data 12 Produk Resmi Tahap 5 (Katalog Lengkap).
     * Setiap produk memiliki kategori resmi dari 8 kategori Tahap 4,
     * format harga di bawah artikel (contoh harga : 3.250.000),
     * link beli langsung afiliasi, serta tag artikel:
     * - semuaproduk (seluruh 12 produk)
     * - produkmainan (6 produk mainan)
     * - produkteknologi (6 produk teknologi)
     */
    protected static array $products = [
        [
            'id' => 13,
            'slug' => 'post-1',
            'title' => 'SONY PS5 Playstation 5 Disc Digital GARANSI RESMI SONY INDONESIA Bonus Bundle Banyak Games',
            'display_title' => 'Sony PS5 Playstation 5 Disc',
            'subtitle' => 'Konsol PS5 Garansi Resmi Sony Indonesia dengan Garansi 1 Tahun Full Spare Part & Servis, Gratis Refill Seumur Hidup, serta Bonus Bundle 400+ Games termasuk EA FC 26 & Game Story Blockbuster',
            'category_name' => 'Collectibles & Hobbies',
            'category_slug' => 'collectibles',
            'category_url' => 'https://toyspixels.com/collectibles',
            'price' => '14.630.000',
            'raw_price' => 14630000,
            'rating' => '4.9',
            'sold' => '1.1rb+',
            'image' => 'images/toys/playstation.jpg',
            'affiliate_url' => 'https://s.shopee.co.id/Lp4WI31xi',
            'shopee_url' => 'https://s.shopee.co.id/Lp4WI31xi',
            'tokopedia_url' => 'https://tokopedia.com',
            'tag' => 'topproduk',
            'tags' => [
                'topproduk',
                'collectibles',
                'gamespuzzles',
                'gaming',
                'semuaproduk',
                'katalogmainan',
                'katalogteknologi',
                'semua',
                'mainan',
                'technology',
                'produkmainan',
                'produkteknologi',
            ],
            'summary' => 'Sony PlayStation 5 Console Gaming & Collectible Edition resmi dengan jaminan 100% Original, 100% Works, dan 100% On-Time Delivery. Dilengkapi garansi 1 tahun full spare part dan servis, gratis refill games seumur hidup, serta bundle ratusan game populer siap online maupun offline.',
            'content' => '<div class="space-y-6 text-slate-700 leading-relaxed">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 not-prose my-4">
        <div class="p-4 rounded-2xl bg-blue-50/70 border border-blue-200">
            <h4 class="font-black text-[#1677d2] text-sm flex items-center gap-2 mb-1.5">
                <span>🛡️</span> Jaminan Garansi Resmi 1 Tahun
            </h4>
            <p class="text-xs text-slate-600 leading-relaxed">
                Garansi 1 tahun FULL spare part + servis. Jika ada spare part yang rusak dalam 1 tahun, diganti <strong>GRATIS 100%</strong> (S&K berlaku).
            </p>
        </div>
        <div class="p-4 rounded-2xl bg-amber-50/70 border border-amber-200">
            <h4 class="font-black text-amber-700 text-sm flex items-center gap-2 mb-1.5">
                <span>🔄</span> Gratis Refill Seumur Hidup
            </h4>
            <p class="text-xs text-slate-600 leading-relaxed">
                Bebas ganti dan isi ulang games sepuasnya kapan saja tanpa biaya tambahan.
            </p>
        </div>
        <div class="p-4 rounded-2xl bg-emerald-50/70 border border-emerald-200">
            <h4 class="font-black text-emerald-700 text-sm flex items-center gap-2 mb-1.5">
                <span>🎮</span> Exclusive Free Bonus Game
            </h4>
            <p class="text-xs text-slate-600 leading-relaxed">
                Langsung mendapatkan bonus gratis game sepak bola terbaru <strong>EA FC 26</strong> siap main!
            </p>
        </div>
        <div class="p-4 rounded-2xl bg-purple-50/70 border border-purple-200">
            <h4 class="font-black text-purple-700 text-sm flex items-center gap-2 mb-1.5">
                <span>✅</span> Quality Verified (GBM)
            </h4>
            <p class="text-xs text-slate-600 leading-relaxed">
                100% Original, 100% Works, Bisa Online & Offline, Bisa Kaset / Digital, dan <strong>BUKAN HEN / Refurbished</strong>.
            </p>
        </div>
    </div>

    <div>
        <h3 class="text-lg font-black text-[#0B1A30] mb-3 flex items-center gap-2">
            <span>📦</span> Kelengkapan Fullset Unit
        </h3>
        <ul class="list-disc list-inside space-y-1.5 text-sm text-slate-600 bg-slate-50 p-4 rounded-2xl border border-slate-200">
            <li><strong>1x</strong> Sony PlayStation 5 (Digital / Disc Edition)</li>
            <li><strong>1 - 2x</strong> DualSense Wireless Controller Original (Pilihan Varian)</li>
            <li><strong>1x</strong> Kabel Micro USB / Type-C Charging</li>
            <li><strong>1x</strong> Kabel Power Original</li>
            <li><strong>1x</strong> Kabel HDMI High-Speed 4K</li>
            <li><strong>1x</strong> Box Fullset Original & Buku Panduan</li>
        </ul>
    </div>

    <div>
        <h3 class="text-lg font-black text-[#0B1A30] mb-3 flex items-center gap-2">
            <span>🔥</span> Pilihan Bonus Paket Games Digital Siap Main
        </h3>
        <div class="space-y-3 text-sm">
            <div class="p-4 rounded-2xl bg-white border border-slate-200 shadow-sm">
                <div class="font-extrabold text-[#1677d2] text-sm mb-1">
                    1. Paket Games Campur (EA Play) — Total 80+ Games Populer
                </div>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Termasuk: <em>eFootball / PES Terbaru, PUBG, EA FC 26, Madden 23, UFC 4, Star Wars Jedi Fallen Order, NFS Heat, Plants vs Zombies Neighborville, Anthem, Battlefield 2042, Fortnite, The Sims 4, A Way Out, Titanfall 2, Battlefield 1, Battlefield Hardline, COD Warzone, Mass Effect, Battlefield 4, Apex Legends, Genshin Impact, NBA Live 19, It Takes Two, F1 22, Dirt 5, Dirt Rally 2.0</em>, dan puluhan game lainnya.
                </p>
            </div>

            <div class="p-4 rounded-2xl bg-white border border-slate-200 shadow-sm">
                <div class="font-extrabold text-[#1677d2] text-sm mb-1">
                    2. Paket Games Story (PS Plus Extra) — Total 100+ Blockbuster Games
                </div>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Termasuk: <em>God of War, Ghost of Tsushima, Spider-Man, Spider-Man Miles Morales, Horizon Forbidden West, Final Fantasy All Series, Assassin\'s Creed All Series, Uncharted 4, Uncharted Lost Legacy, Mortal Kombat 11, Yakuza Kiwami, Naruto, DMC V, Far Cry 5, Harvest Moon, Injustice 2, Guardians of the Galaxy, Tekken 7, Resident Evil 7, Watch Dogs Legion, Days Gone, Batman Arkham, Detroit Become Human, Riders Republic, The Crew</em>, dan game story blockbuster lainnya.
                </p>
            </div>

            <div class="p-4 rounded-2xl bg-blue-50/60 border border-blue-200 shadow-sm">
                <div class="font-extrabold text-[#1677d2] text-sm mb-1">
                    3. Paket Games Lengkap — Total 400++ Games
                </div>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Kombinasi lengkap <strong>[Games Campur] + [Games Story]</strong> dengan total lebih dari 400 game siap main, serta opsi Tanpa Games, Bola Terbaru, dan persiapan rilis GTA VI.
                </p>
            </div>
        </div>
    </div>

    <div>
        <h3 class="text-lg font-black text-[#0B1A30] mb-3 flex items-center gap-2">
            <span>⚙️</span> Spesifikasi Produk
        </h3>
        <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 text-xs font-mono">
            <div class="p-3 rounded-xl bg-slate-50 border border-slate-200">
                <span class="text-slate-400 block text-[10px] uppercase font-bold">Merek</span>
                <span class="font-black text-slate-800">Sony</span>
            </div>
            <div class="p-3 rounded-xl bg-slate-50 border border-slate-200">
                <span class="text-slate-400 block text-[10px] uppercase font-bold">Kondisi</span>
                <span class="font-black text-slate-800">Baru (100% Original)</span>
            </div>
            <div class="p-3 rounded-xl bg-slate-50 border border-slate-200">
                <span class="text-slate-400 block text-[10px] uppercase font-bold">Tegangan</span>
                <span class="font-black text-slate-800">220V</span>
            </div>
            <div class="p-3 rounded-xl bg-slate-50 border border-slate-200">
                <span class="text-slate-400 block text-[10px] uppercase font-bold">Built-in Battery</span>
                <span class="font-black text-slate-800">Ya (DualSense)</span>
            </div>
            <div class="p-3 rounded-xl bg-slate-50 border border-slate-200">
                <span class="text-slate-400 block text-[10px] uppercase font-bold">Dikirim Dari</span>
                <span class="font-black text-slate-800">Kota Surabaya</span>
            </div>
            <div class="p-3 rounded-xl bg-slate-50 border border-slate-200">
                <span class="text-slate-400 block text-[10px] uppercase font-bold">Garansi Mesin</span>
                <span class="font-black text-emerald-600">1 Tahun Full</span>
            </div>
        </div>
    </div>
</div>',
            'specs' => [
                'Kategori' => 'Collectibles & Hobbies',
                'Judul' => 'SONY PS5 Playstation 5 Disc Digital GARANSI RESMI SONY INDONESIA Bonus Bundle Banyak Games',
                'Keterangan Judul' => 'Konsol PS5 Garansi Resmi Sony Indonesia dengan Garansi 1 Tahun Full Spare Part & Servis, Gratis Refill Seumur Hidup, serta Bonus Bundle 400+ Games termasuk EA FC 26 & Game Story Blockbuster',
                'harga' => '14.630.000',
                'beli langsung' => 'https://s.shopee.co.id/Lp4WI31xi',
                'tags' => 'topproduk, collectibles, gamespuzzles, gaming, semuaproduk, katalogmainan, katalogteknologi',
            ],
        ],
        [
            'id' => 14,
            'slug' => 'post-2',
            'title' => 'Snapzy Mobil RC Off Road 4WD 2.4GHz Lampu LED Semprotan Kabut Rechargeable',
            'display_title' => 'Snapzy Mobil RC Off Road 4WD',
            'subtitle' => 'Mobil RC Off Road 4WD dari Snapzy dengan Desain Sporty, Ban Besar Bertekstur, Lampu LED Keren, Efek Semprotan Kabut Realistis, serta Baterai Isi Ulang USB Siap Panjat Segala Medan',
            'category_name' => 'Kids & Educational Toys',
            'category_slug' => 'kidstoys',
            'category_url' => 'https://toyspixels.com/kidstoys',
            'price' => '212.000',
            'raw_price' => 212000,
            'original_price' => 'Rp 261.000',
            'discount_badge' => 'POTONGAN Rp2RB | 19% OFF',
            'rating' => '4.8',
            'sold' => '1.0rb+',
            'reviews_count' => '811',
            'warranty' => 'Garansi Produsen 1 Bulan',
            'image' => 'images/toys/post-2/1.webp',
            'thumbnail' => 'images/toys/post-2/1.webp',
            'gallery' => [
                'images/toys/post-2/1.webp',
                'images/toys/post-2/2.webp',
                'images/toys/post-2/3.webp',
            ],
            'affiliate_url' => 'https://s.shopee.co.id/9zzc37VEVr',
            'shopee_url' => 'https://s.shopee.co.id/9zzc37VEVr',
            'tokopedia_url' => 'https://tokopedia.com',
            'tag' => 'topproduk',
            'tags' => [
                'topproduk',
                'top produk',
                'kidstoys',
                'collectibles',
                'outdoorrc',
                'semuaproduk',
                'katalogmainan',
                'semua',
                'mainan',
            ],
            'summary' => 'Mobil RC Off Road 4WD dari Snapzy hadir dengan desain sporty, ban besar bertekstur, lampu LED, dan efek semprotan kabut realistis yang membuat permainan semakin seru. Menggunakan remote control 2.4GHz responsif dan baterai isi ulang USB praktis.',
        ],
        [
            'id' => 15,
            'slug' => 'post-3',
            'title' => 'Bandai HGBF 1/144 Wing Zero Honoo ORI BANDAI Gundam New Ori Mainan Robot Mainan Gundam Hadiah Ulang Tahun Birthday Gift',
            'display_title' => 'Bandai HGBF Wing Zero Honoo',
            'subtitle' => 'Model Kit Gunpla HGBF 1/144 Wing Zero Honoo Original Bandai Spirits Jepang dengan Desain Sayap Api Oranye Transparan Ikonik, Persenjataan Twin Buster Rifle, dan Box Kemasan Mulus Terawat',
            'category_name' => 'Collectibles & Hobbies',
            'category_slug' => 'collectibles',
            'category_url' => 'https://toyspixels.com/collectibles',
            'price' => '888.888',
            'raw_price' => 888888,
            'original_price' => 'Rp 999.000',
            'discount_badge' => 'CICILAN 0% | 100% ORI BANDAI',
            'rating' => '5.0',
            'sold' => '407 Terjual',
            'reviews_count' => '7',
            'warranty' => '100% Original Bandai',
            'image' => 'images/toys/post-3/1.webp',
            'thumbnail' => 'images/toys/post-3/1.webp',
            'gallery' => [
                'images/toys/post-3/1.webp',
                'images/toys/post-3/2.webp',
                'images/toys/post-3/3.webp',
                'images/toys/post-3/4.webp',
            ],
            'affiliate_url' => 'https://s.shopee.co.id/4B1p83lRaY',
            'shopee_url' => 'https://s.shopee.co.id/4B1p83lRaY',
            'tokopedia_url' => 'https://tokopedia.com',
            'tag' => 'topproduk',
            'tags' => [
                'topproduk',
                'top produk',
                'kidstoys',
                'collectibles',
                'semuaproduk',
                'katalogmainan',
                'semua',
                'mainan',
            ],
            'summary' => 'Model kit Gunpla High Grade Build Fighters (HGBF) 1/144 Wing Gundam Zero Honoo original Bandai Namco Jepang. Dilengkapi part efek sayap api transparan oranye-merah spektakuler, persenjataan buster rifle & tameng api, sistem perakitan snap-fit presisi tanpa lem, kondisi barang baru gres dan box mulus.',
        ],
        [
            'id' => 1,
            'slug' => 'gundam-pg-unleashed-rx-78-2',
            'title' => 'Gundam PG Unleashed RX-78-2',
            'subtitle' => 'Model kit skala 1/60 flagship Bandai dengan artikulasi sendi 5-tahap dan LED',
            'category_name' => 'Collectibles & Hobbies',
            'category_slug' => 'collectibles',
            'category_url' => 'https://toyspixels.com/collectibles',
            'price' => '3.250.000',
            'raw_price' => 3250000,
            'rating' => '4.9',
            'sold' => '1.2rb+',
            'image' => 'images/toys/gundam.jpg',
            'affiliate_url' => 'https://shopee.co.id/gundam-pg-unleashed-rx78-2',
            'tokopedia_url' => 'https://tokopedia.com',
            'tag' => 'produkmainan',
            'tags' => ['semua', 'mainan', 'collectibles', 'semuaproduk', 'produkmainan'],
            'summary' => 'Model kit skala 1/60 flagship Bandai dengan artikulasi sendi 5-tahap, inner skeleton metalik, dan sistem pencahayaan LED mutakhir.',
            'content' => 'Gundam Perfect Grade Unleashed RX-78-2 merupakan mahakarya tertinggi dalam lini gunpla skala 1/60. Mengusung konsep evolusi 5 tahap perakitan mulai dari rangka batin multi-lapisan, detail etsa logam, kubah LED bertenaga magnet, hingga armor luar dengan mekanism open-hatch yang mengagumkan. Setiap sendi memiliki rentang artikulasi dinamis yang memungkinkan pose ikonik seperti Last Shooting.',
        ],
        [
            'id' => 2,
            'slug' => 'tamiya-avante-black-special-4wd',
            'title' => 'Tamiya Avante Black Special 4WD',
            'subtitle' => 'Kit balap legendaris Tamiya original dengan sasis VS chassis dan ban spiked',
            'category_name' => 'Collectibles & Hobbies',
            'category_slug' => 'collectibles',
            'category_url' => 'https://toyspixels.com/collectibles',
            'price' => '289.000',
            'raw_price' => 289000,
            'rating' => '4.9',
            'sold' => '3.1rb+',
            'image' => 'images/toys/tamiya.jpg',
            'affiliate_url' => 'https://shopee.co.id/tamiya-avante-black-special',
            'tokopedia_url' => 'https://tokopedia.com',
            'tag' => 'produkmainan',
            'tags' => ['semua', 'mainan', 'collectibles', 'semuaproduk', 'produkmainan'],
            'summary' => 'Kit balap legendaris Tamiya original dengan sasis VS chassis, ban spiked high grip, dan gold coilover damper autentik.',
            'content' => 'Tamiya Avante Black Special hadir dengan paduan bodi transparan smoke black yang misterius dipadu stiker neon kuning menyala. Didukung sasis VS chassis berbobot ringan namun berdaya tahan tinggi, velg berdiameter besar, serta ban spiked khusus yang menjamin cengkeraman maksimal saat melaju di tikungan sirkuit.',
        ],
        [
            'id' => 3,
            'slug' => 'lego-star-wars-millennium-falcon',
            'title' => 'LEGO Star Wars Millennium Falcon',
            'subtitle' => 'Set balok LEGO 1.351 keping dengan 7 minifigure ikonik Star Wars',
            'category_name' => 'Kids & Educational Toys',
            'category_slug' => 'kidstoys',
            'category_url' => 'https://toyspixels.com/kidstoys',
            'price' => '2.450.000',
            'raw_price' => 2450000,
            'rating' => '4.9',
            'sold' => '980+',
            'image' => 'images/toys/lego.jpg',
            'affiliate_url' => 'https://shopee.co.id/lego-star-wars-millennium-falcon',
            'tokopedia_url' => 'https://tokopedia.com',
            'tag' => 'produkmainan',
            'tags' => ['semua', 'mainan', 'kidstoys', 'semuaproduk', 'produkmainan'],
            'summary' => 'Set balok LEGO Star Wars original dengan 1.351 keping, kokpit terangkat, rotating gun turrets, dan 7 minifigure karakter ikonik.',
            'content' => 'LEGO Star Wars Millennium Falcon menghadirkan pengalaman merakit kapal luar angkasa legendaris terlengkap. Dilengkapi panel bodi atas yang dapat dibuka untuk mengakses interior ruang kargo, meja catur holografik Dejarik, serta stasiun meriam ganda atas-bawah yang bisa diputar 360 derajat.',
        ],
        [
            'id' => 4,
            'slug' => 'pop-mart-labubu-monster-art-toy',
            'title' => 'Pop Mart Labubu Monster Art Toy',
            'subtitle' => 'Figur vinyl Pop Mart Labubu The Monsters original koleksi seni',
            'category_name' => 'Collectibles & Hobbies',
            'category_slug' => 'collectibles',
            'category_url' => 'https://toyspixels.com/collectibles',
            'price' => '189.000',
            'raw_price' => 189000,
            'rating' => '5.0',
            'sold' => '6.5rb+',
            'image' => 'images/toys/labubu.jpg',
            'affiliate_url' => 'https://shopee.co.id/pop-mart-labubu-monster',
            'tokopedia_url' => 'https://tokopedia.com',
            'tag' => 'produkmainan',
            'tags' => ['semua', 'mainan', 'collectibles', 'semuaproduk', 'produkmainan'],
            'summary' => 'Figur vinyl Pop Mart Labubu The Monsters original bersertifikat resmi, tren viral global kolektor hobi dan figur seni.',
            'content' => 'Koleksi art toy fenomenal dari Pop Mart karya ilustrator Kasing Lung. Seri The Monsters menampilkan karakter Labubu dengan senyum bertaring nakal yang khas, detail pewarnaan matte halus, serta sentuhan tekstur vinyl berkualitas tinggi yang cocok menghiasi meja kerja maupun lemari pajangan koleksi.',
        ],
        [
            'id' => 5,
            'slug' => 'beyblade-x-dran-sword-starter-set',
            'title' => 'Beyblade X Dran Sword Starter Set',
            'subtitle' => 'Starter pack Beyblade X Takara Tomy teknologi X-Dash gear rail',
            'category_name' => 'Kids & Educational Toys',
            'category_slug' => 'kidstoys',
            'category_url' => 'https://toyspixels.com/kidstoys',
            'price' => '219.000',
            'raw_price' => 219000,
            'rating' => '5.0',
            'sold' => '5.2rb+',
            'image' => 'images/toys/beyblade.jpg',
            'affiliate_url' => 'https://shopee.co.id/beyblade-x-dran-sword',
            'tokopedia_url' => 'https://tokopedia.com',
            'tag' => 'produkmainan',
            'tags' => ['semua', 'mainan', 'kidstoys', 'semuaproduk', 'produkmainan'],
            'summary' => 'Starter pack Beyblade X Takara Tomy original dengan teknologi X-Dash gear rail untuk putaran super agresif di stadium turnamen.',
            'content' => 'Generasi ke-4 gasing pertarungan Beyblade X menghadirkan inovasi Xtreme Gear Sports. Bagian bit gigi bawah berinteraksi langsung dengan rel stadium untuk memicu akselerasi ekstrim X-Dash, menghasilkan tabrakan spektakuler dan Xtreme Finish yang memukau.',
        ],
        [
            'id' => 6,
            'slug' => 'rubik-gan-12-maglev-3x3-speedcube',
            'title' => 'Rubik GAN 12 MagLev 3x3 Speedcube',
            'subtitle' => 'Speedcube magnetik profesional suspensi MagLev tanpa pergesekan',
            'category_name' => 'Games & Puzzles',
            'category_slug' => 'gamespuzzles',
            'category_url' => 'https://toyspixels.com/gamespuzzles',
            'price' => '420.000',
            'raw_price' => 420000,
            'rating' => '4.9',
            'sold' => '2.4rb+',
            'image' => 'images/toys/rubiks.jpg',
            'affiliate_url' => 'https://shopee.co.id/rubik-gan-12-maglev-3x3',
            'tokopedia_url' => 'https://tokopedia.com',
            'tag' => 'produkmainan',
            'tags' => ['semua', 'mainan', 'gamespuzzles', 'semuaproduk', 'produkmainan'],
            'summary' => 'Speedcube magnetik profesional dengan teknologi suspensi magnet MagLev tanpa per, auto-aligning 30 derajat, dan bobot ultra ringan.',
            'content' => 'GAN 12 MagLev merupakan kubus kecepatan 3x3 kasta tertinggi yang digunakan juara speedcubing dunia. Mengganti per pegas konvensional dengan dua magnet berlawanan kutub (Magnetic Levitation), menghasilkan putaran yang sangat licin, senyap, dengan fitur auto-aligning 30 derajat.',
        ],
        [
            'id' => 7,
            'slug' => 'sony-playstation-5-slim-digital',
            'title' => 'Sony PlayStation 5 Slim Digital',
            'subtitle' => 'Konsol next-gen SSD 1TB ultra cepat grafis 4K 120Hz DualSense',
            'category_name' => 'Gaming & Entertainment',
            'category_slug' => 'gamingentertainment',
            'category_url' => 'https://toyspixels.com/gamingentertainment',
            'price' => '7.899.000',
            'raw_price' => 7899000,
            'rating' => '4.9',
            'sold' => '1.9rb+',
            'image' => 'images/toys/playstation.jpg',
            'affiliate_url' => 'https://shopee.co.id/sony-playstation-5-slim-digital',
            'tokopedia_url' => 'https://tokopedia.com',
            'tag' => 'produkteknologi',
            'tags' => ['semua', 'technology', 'gamingentertainment', 'semuaproduk', 'produkteknologi'],
            'summary' => 'Konsol next-gen resmi Sony dengan SSD ultra cepat 1TB, ray tracing 4K 120Hz, dan controller DualSense haptic feedback.',
            'content' => 'PlayStation 5 Slim hadir dalam desain 30% lebih ramping dengan penyimpanan internal yang ditingkatkan menjadi 1TB SSD kencang. Didukung teknologi audio 3D Tempest, ray tracing realistis, dan stik nirkabel DualSense dengan umpan balik haptic mendalam serta adaptive trigger.',
        ],
        [
            'id' => 8,
            'slug' => 'apple-airpods-max-wireless-anc',
            'title' => 'Apple AirPods Max Wireless ANC',
            'subtitle' => 'Headphone over-ear premium Active Noise Cancellation Spatial Audio',
            'category_name' => 'Gadgets & Wearables',
            'category_slug' => 'gadgetswearables',
            'category_url' => 'https://toyspixels.com/gadgetswearables',
            'price' => '7.499.000',
            'raw_price' => 7499000,
            'rating' => '4.8',
            'sold' => '850+',
            'image' => 'https://images.unsplash.com/photo-1546435770-a3e426bf472b?w=600&auto=format&fit=crop&q=80',
            'affiliate_url' => 'https://shopee.co.id/apple-airpods-max-anc',
            'tokopedia_url' => 'https://tokopedia.com',
            'tag' => 'produkteknologi',
            'tags' => ['semua', 'technology', 'gadgetswearables', 'semuaproduk', 'produkteknologi'],
            'summary' => 'Headphone over-ear premium dengan Active Noise Cancellation kelas dunia, Transparency mode, dan Spatial Audio dinamis.',
            'content' => 'AirPods Max memadukan fidelity audio tinggi dengan peredam kebisingan aktif terdepan di industri. Kanopi jaring breathable pada headband dan ear cushion berbahan busa memori akustik memberikan kenyamanan mendengarkan musik berjam-jam tanpa rasa lelah.',
        ],
        [
            'id' => 9,
            'slug' => 'logitech-mx-master-3s-ergonomic-mouse',
            'title' => 'Logitech MX Master 3S Ergonomic Mouse',
            'subtitle' => 'Mouse nirkabel 8K DPI track-on-glass MagSpeed silent click',
            'category_name' => 'Computers & Accessories',
            'category_slug' => 'computersaccessories',
            'category_url' => 'https://toyspixels.com/computersaccessories',
            'price' => '1.399.000',
            'raw_price' => 1399000,
            'rating' => '4.9',
            'sold' => '4.3rb+',
            'image' => 'https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?w=600&auto=format&fit=crop&q=80',
            'affiliate_url' => 'https://shopee.co.id/logitech-mx-master-3s',
            'tokopedia_url' => 'https://tokopedia.com',
            'tag' => 'produkteknologi',
            'tags' => ['semua', 'technology', 'computersaccessories', 'semuaproduk', 'produkteknologi'],
            'summary' => 'Mouse nirkabel ergonomis profesional dengan sensor 8K DPI track-on-glass, scroll magnetik MagSpeed, dan klik senyap 90%.',
            'content' => 'Logitech MX Master 3S adalah standar tertinggi mouse produktivitas para profesional dan desainer kreatif. Mengusung sensor optik 8.000 DPI yang dapat melacak di segala permukaan termasuk kaca tebal, scroll elektromagnetik MagSpeed super cepat (1.000 baris/detik), dan tombol Quiet Clicks yang meredam 90% suara klik.',
        ],
        [
            'id' => 10,
            'slug' => 'keychron-q1-pro-mechanical-keyboard',
            'title' => 'Keychron Q1 Pro Mechanical Keyboard',
            'subtitle' => 'Keyboard full aluminium CNC Bluetooth 5.1 QMK/VIA hotswap',
            'category_name' => 'Computers & Accessories',
            'category_slug' => 'computersaccessories',
            'category_url' => 'https://toyspixels.com/computersaccessories',
            'price' => '2.199.000',
            'raw_price' => 2199000,
            'rating' => '4.9',
            'sold' => '1.1rb+',
            'image' => 'https://images.unsplash.com/photo-1587829741301-dc798b83add3?w=600&auto=format&fit=crop&q=80',
            'affiliate_url' => 'https://shopee.co.id/keychron-q1-pro-keyboard',
            'tokopedia_url' => 'https://tokopedia.com',
            'tag' => 'produkteknologi',
            'tags' => ['semua', 'technology', 'computersaccessories', 'semuaproduk', 'produkteknologi'],
            'summary' => 'Keyboard mekanikal premium bodi full aluminium CNC dengan konektivitas nirkabel Bluetooth 5.1, QMK/VIA support, dan hot-swappable switch.',
            'content' => 'Keychron Q1 Pro hadir dengan bodi aluminium CNC presisi tinggi berdesain gasket ganda untuk sensasi ketukan yang empuk dan bersuara padat (thocky). Mendukung remap tombol tak terbatas melalui web app QMK/VIA dan konektivitas nirkabel hingga 3 perangkat secara simultan.',
        ],
        [
            'id' => 11,
            'slug' => 'nintendo-switch-oled-mario-red',
            'title' => 'Nintendo Switch OLED Mario Red',
            'subtitle' => 'Konsol hybrid edisi Mario Red layar OLED 7 inci 64GB storage',
            'category_name' => 'Gaming & Entertainment',
            'category_slug' => 'gamingentertainment',
            'category_url' => 'https://toyspixels.com/gamingentertainment',
            'price' => '4.650.000',
            'raw_price' => 4650000,
            'rating' => '4.9',
            'sold' => '2.7rb+',
            'image' => 'images/toys/nintendo.jpg',
            'affiliate_url' => 'https://shopee.co.id/nintendo-switch-oled-mario-red',
            'tokopedia_url' => 'https://tokopedia.com',
            'tag' => 'produkteknologi',
            'tags' => ['semua', 'technology', 'gamingentertainment', 'semuaproduk', 'produkteknologi'],
            'summary' => 'Konsol hybrid edisi spesial Mario Red dengan layar OLED 7 inci cerah, stand lebar fleksibel, audio jernih, dan penyimpanan 64GB.',
            'content' => 'Nintendo Switch edisi Mario Red membalut unit konsol, dock, dan joy-con dalam nuansa merah ikonik Super Mario. Dilengkapi layar OLED 7 inci yang kaya warna kontras tinggi, port LAN kabel internal pada dock, serta dudukan meja yang dapat disesuaikan sudutnya secara fleksibel.',
        ],
        [
            'id' => 12,
            'slug' => 'samsung-galaxy-tab-s9-ultra-5g',
            'title' => 'Samsung Galaxy Tab S9 Ultra 5G',
            'subtitle' => 'Tablet flagship Dynamic AMOLED 2X 14.6 inci Snapdragon 8 Gen 2 S-Pen',
            'category_name' => 'Mobile & Tablets',
            'category_slug' => 'mobiletablets',
            'category_url' => 'https://toyspixels.com/mobiletablets',
            'price' => '16.999.000',
            'raw_price' => 16999000,
            'rating' => '4.9',
            'sold' => '620+',
            'image' => 'https://images.unsplash.com/photo-1544244015-0df4b3ffc6b0?w=600&auto=format&fit=crop&q=80',
            'affiliate_url' => 'https://shopee.co.id/samsung-galaxy-tab-s9-ultra',
            'tokopedia_url' => 'https://tokopedia.com',
            'tag' => 'produkteknologi',
            'tags' => ['semua', 'technology', 'mobiletablets', 'semuaproduk', 'produkteknologi'],
            'summary' => 'Tablet flagship layar Dynamic AMOLED 2X 14.6 inci, prosesor Snapdragon 8 Gen 2, rating anti air IP68, dan sudah termasuk S-Pen latensi ultra rendah.',
            'content' => 'Galaxy Tab S9 Ultra mendefinisikan ulang produktivitas dan hiburan kelas atas. Menampilkan layar raksasa Dynamic AMOLED 2X 14.6 inci 120Hz yang sangat memukau, dapur pacu Snapdragon 8 Gen 2 for Galaxy, ketahanan air dan debu IP68 pertama di seri flagship tab, serta dukungan stylus S-Pen bawaan berlatensi 2.8ms.',
        ],
    ];

    /**
     * Mengambil semua produk dengan format url shopee.
     */
    public static function all(): Collection
    {
        return collect(self::$products)->map(function ($item) {
            $item['display_title'] = $item['display_title'] ?? \Illuminate\Support\Str::words($item['title'], 5, '');
            $item['shopee_url'] = $item['shopee_url'] ?? $item['affiliate_url'];
            return $item;
        });
    }

    /**
     * Mencari produk berdasarkan slug.
     */
    public static function findBySlug(string $slug): ?array
    {
        $normalized = strtolower(trim($slug));

        foreach (self::$products as $product) {
            if ($product['slug'] === $normalized) {
                $product['display_title'] = $product['display_title'] ?? \Illuminate\Support\Str::words($product['title'], 5, '');
                $product['shopee_url'] = $product['shopee_url'] ?? $product['affiliate_url'];
                return $product;
            }
        }

        return null;
    }

    /**
     * Filter produk katalog berdasarkan tag tertentu (semuaproduk, produkmainan, produkteknologi, mainan, technology, dll).
     */
    public static function filterByTag(string $tag): Collection
    {
        $normalized = strtolower(trim($tag));

        if ($normalized === 'all') {
            return self::all();
        }

        return self::all()->filter(function ($item) use ($normalized) {
            return in_array($normalized, $item['tags'] ?? []) || ($item['tag'] ?? null) === $normalized;
        })->values();
    }

    /**
     * Alias helper filter by tag.
     */
    public static function byTag(string $tag): Collection
    {
        return self::filterByTag($tag);
    }

    /**
     * Helper khusus: Ambil seluruh produk ber-tag semuaproduk.
     */
    public static function allProduk(): Collection
    {
        return self::filterByTag('semuaproduk');
    }

    /**
     * Helper khusus: Ambil produk mainan ber-tag produkmainan.
     */
    public static function produkMainan(): Collection
    {
        return self::filterByTag('produkmainan');
    }

    /**
     * Helper khusus: Ambil produk teknologi ber-tag produkteknologi.
     */
    public static function produkTeknologi(): Collection
    {
        return self::filterByTag('produkteknologi');
    }
}
