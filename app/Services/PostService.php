<?php

namespace App\Services;

use Illuminate\Support\Collection;

class PostService
{
    /**
     * Data Koleksi Artikel Post Resmi toyspixels.com
     * Post 1: Produk resmi Shopee affiliate dengan banner spot spesifikasi atas
     */
    protected static array $posts = [
        [
            'id' => 1,
            'slug' => 'post-1',
            'aliases' => ['1', 'post-1', 'post1', 'produk-1'],
            'title' => 'SONY PS5 Playstation 5 Disc Digital GARANSI RESMI SONY INDONESIA Bonus Bundle Banyak Games',
            'display_title' => 'Sony PS5 Playstation 5 Disc',
            'subtitle' => 'Konsol PS5 Garansi Resmi Sony Indonesia dengan Garansi 1 Tahun Full Spare Part & Servis, Gratis Refill Seumur Hidup, serta Bonus Bundle 400+ Games termasuk EA FC 26 & Game Story Blockbuster',
            'category_name' => 'Collectibles & Hobbies',
            'category_slug' => 'collectibles',
            'category_url' => 'https://toyspixels.com/collectibles',
            'price' => '14.630.000',
            'raw_price' => 14630000,
            'original_price' => 'Rp 17.800.000',
            'discount_badge' => 'SAVE 18% | GARANSI RESMI',
            'rating' => '4.9',
            'sold' => '1.1rb+',
            'image' => 'images/toys/ps5/1.webp',
            'gallery' => [
                'images/toys/ps5/1.webp',
                'images/toys/ps5/2.webp',
                'images/toys/playstation.jpg',
            ],
            'affiliate_url' => 'https://s.shopee.co.id/Lp4WI31xi',
            'shopee_url' => 'https://s.shopee.co.id/Lp4WI31xi',
            'tokopedia_url' => 'https://tokopedia.com',
            'tag' => 'topproduk',
            'tags' => [
                'topproduk',
                'collectibles',
                'gamespuzzles',
                'gaming',
                'gamingentertainment',
                'gadget',
                'technology',
                'semuaproduk',
                'katalogmainan',
                'katalogteknologi',
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
            'id' => 2,
            'slug' => 'post-2',
            'aliases' => ['2', 'post-2', 'post2', 'produk-2', 'snapzy-rc-offroad', 'snapzy-mobil-rc-off-road-4wd'],
            'title' => 'Snapzy Mobil RC Off Road 4WD 2.4GHz Lampu LED Semprotan Kabut Rechargeable',
            'display_title' => 'Snapzy Mobil RC Off Road 4WD',
            'subtitle' => 'Mobil RC Off Road 4WD dari Snapzy dengan Desain Sporty, Ban Besar Bertekstur, Lampu LED Keren, Efek Semprotan Kabut Realistis, serta Baterai Isi Ulang USB Siap Panjat Segala Medan',
            'category_name' => 'Kids & Educational Toys',
            'category_slug' => 'kidstoys',
            'category_url' => 'https://toyspixels.com/kidstoys',
            'age' => '6 - 14 Tahun',
            'type' => 'Mobil RC 4WD',
            'age_type' => '6 - 14 Tahun/Mobil RC 4WD',
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
                'kidstoys',
                'collectibles',
                'outdoorrc',
                'semuaproduk',
                'katalogmainan',
            ],
            'post_date' => '2026-11-26',
            'summary' => 'Mobil RC Off Road 4WD dari Snapzy hadir dengan desain sporty, ban besar bertekstur, lampu LED, dan efek semprotan kabut realistis yang membuat permainan semakin seru. Menggunakan remote control 2.4GHz responsif dan mudah dikendalikan hingga jarak 50 meter dengan baterai isi ulang USB praktis.',
            'content' => '<div class="space-y-6 text-slate-700 leading-relaxed">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 not-prose my-4">
        <div class="p-4 rounded-2xl bg-blue-50/70 border border-blue-200">
            <h4 class="font-black text-[#1677d2] text-sm flex items-center gap-2 mb-1.5">
                <span>💨</span> Fitur Semprotan Kabut (Spray Effect)
            </h4>
            <p class="text-xs text-slate-600 leading-relaxed">
                Tersedia efek semprotan kabut uap air realistis dari knalpot belakang. Cukup isi air bersih dengan botol pengisi kecil yang disediakan!
            </p>
        </div>
        <div class="p-4 rounded-2xl bg-amber-50/70 border border-amber-200">
            <h4 class="font-black text-amber-700 text-sm flex items-center gap-2 mb-1.5">
                <span>⚡</span> Sistem 4WD Panjat Segala Medan
            </h4>
            <p class="text-xs text-slate-600 leading-relaxed">
                Empat roda bergerak aktif membantu mobil lebih stabil, lincah, dan tangguh di aspal, rumput, tanah berpasir, hingga jalanan berbatu.
            </p>
        </div>
        <div class="p-4 rounded-2xl bg-emerald-50/70 border border-emerald-200">
            <h4 class="font-black text-emerald-700 text-sm flex items-center gap-2 mb-1.5">
                <span>💡</span> Lampu Headlight LED Keren
            </h4>
            <p class="text-xs text-slate-600 leading-relaxed">
                Dilengkapi efek lampu LED depan yang terang dan atraktif untuk keseruan balapan siang maupun malam hari.
            </p>
        </div>
        <div class="p-4 rounded-2xl bg-purple-50/70 border border-purple-200">
            <h4 class="font-black text-purple-700 text-sm flex items-center gap-2 mb-1.5">
                <span>🔋</span> Baterai Rechargeable USB Praktis
            </h4>
            <p class="text-xs text-slate-600 leading-relaxed">
                Menggunakan baterai 3.7V 800mAh isi ulang tahan hingga 40 menit bermain, mudah di-charge menggunakan kabel USB yang disertakan.
            </p>
        </div>
    </div>

    <div>
        <h3 class="text-lg font-black text-[#0B1A30] mb-3 flex items-center gap-2">
            <span>📦</span> Kelengkapan Paket Produk
        </h3>
        <ul class="list-disc list-inside space-y-1.5 text-sm text-slate-600 bg-slate-50 p-4 rounded-2xl border border-slate-200">
            <li><strong>1x</strong> Mobil RC Off-Road 4WD Snapzy (Varian Warna Pilihan)</li>
            <li><strong>1x</strong> Remote Control 2.4GHz Responsif (Jangkauan hingga 50m)</li>
            <li><strong>1x</strong> Baterai Mobil 3.7V 800mAh Rechargeable</li>
            <li><strong>1x</strong> Kabel USB Charging Praktis</li>
            <li><strong>1x</strong> Botol Kecil Pengisi Air Spray Kabut</li>
            <li><strong>1x</strong> Buku Panduan &amp; Kotak Box Kemasan Original Snapzy</li>
        </ul>
    </div>

    <div>
        <h3 class="text-lg font-black text-[#0B1A30] mb-3 flex items-center gap-2">
            <span>⚙️</span> Spesifikasi Teknis Produk
        </h3>
        <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 text-xs font-mono">
            <div class="p-3 rounded-xl bg-slate-50 border border-slate-200">
                <span class="text-slate-400 block text-[10px] uppercase font-bold">Merek</span>
                <span class="font-black text-slate-800">Snapzy Official</span>
            </div>
            <div class="p-3 rounded-xl bg-slate-50 border border-slate-200">
                <span class="text-slate-400 block text-[10px] uppercase font-bold">Sistem Gerak</span>
                <span class="font-black text-slate-800">4WD Off-Road</span>
            </div>
            <div class="p-3 rounded-xl bg-slate-50 border border-slate-200">
                <span class="text-slate-400 block text-[10px] uppercase font-bold">Frekuensi</span>
                <span class="font-black text-slate-800">2.4GHz Wireless</span>
            </div>
            <div class="p-3 rounded-xl bg-slate-50 border border-slate-200">
                <span class="text-slate-400 block text-[10px] uppercase font-bold">Kecepatan</span>
                <span class="font-black text-emerald-600">Hingga 25 km/jam</span>
            </div>
            <div class="p-3 rounded-xl bg-slate-50 border border-slate-200">
                <span class="text-slate-400 block text-[10px] uppercase font-bold">Jarak Kendali</span>
                <span class="font-black text-slate-800">Hingga 50 Meter</span>
            </div>
            <div class="p-3 rounded-xl bg-slate-50 border border-slate-200">
                <span class="text-slate-400 block text-[10px] uppercase font-bold">Waktu Main</span>
                <span class="font-black text-slate-800">Hingga 40 Menit</span>
            </div>
            <div class="p-3 rounded-xl bg-slate-50 border border-slate-200">
                <span class="text-slate-400 block text-[10px] uppercase font-bold">Dimensi Mobil</span>
                <span class="font-black text-slate-800">22 x 16.5 x 10 cm</span>
            </div>
            <div class="p-3 rounded-xl bg-slate-50 border border-slate-200">
                <span class="text-slate-400 block text-[10px] uppercase font-bold">Rekomendasi Usia</span>
                <span class="font-black text-slate-800">6 - 14 Tahun</span>
            </div>
            <div class="p-3 rounded-xl bg-slate-50 border border-slate-200">
                <span class="text-slate-400 block text-[10px] uppercase font-bold">Dikirim Dari</span>
                <span class="font-black text-slate-800">Kab. Tangerang</span>
            </div>
        </div>
    </div>
</div>',
            'specs' => [
                'Kategori' => 'Kids & Educational Toys / Mobil Remote Control',
                'Judul' => 'Snapzy Mobil RC Off Road 4WD 2.4GHz Lampu LED Semprotan Kabut Rechargeable',
                'Keterangan Judul' => 'Mobil RC Off Road 4WD dari Snapzy dengan Desain Sporty, Ban Besar Bertekstur, Lampu LED Keren, Efek Semprotan Kabut Realistis, serta Baterai Isi Ulang USB Siap Panjat Segala Medan',
                'Harga' => 'Rp 212.000',
                'harga' => '212.000',
                'Beli Langsung' => 'https://s.shopee.co.id/9zzc37VEVr',
                'beli langsung' => 'https://s.shopee.co.id/9zzc37VEVr',
                'tags' => 'topproduk, kidstoys, collectibles, outdoorrc, semuaproduk, katalogmainan',
            ],
        ],
        [
            'id' => 3,
            'slug' => 'post-3',
            'aliases' => ['3', 'post-3', 'post3', 'produk-3', 'wing-zero-honoo', 'bandai-hgbf-wing-zero-honoo'],
            'title' => 'Bandai HGBF 1/144 Wing Zero Honoo ORI BANDAI Gundam New Ori Mainan Robot Mainan Gundam Hadiah Ulang Tahun Birthday Gift',
            'display_title' => 'Bandai HGBF Wing Zero Honoo',
            'subtitle' => 'Model Kit Gunpla HGBF 1/144 Wing Zero Honoo Original Bandai Spirits Jepang dengan Desain Sayap Api Oranye Transparan Ikonik, Persenjataan Twin Buster Rifle, dan Box Kemasan Mulus Terawat',
            'category_name' => 'Collectibles & Hobbies',
            'category_slug' => 'collectibles',
            'category_url' => 'https://toyspixels.com/collectibles',
            'age' => '15+ / Semua Usia',
            'type' => 'Gunpla HGBF 1/144',
            'age_type' => '15+/Gunpla HGBF',
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
                'kidstoys',
                'collectibles',
                'semuaproduk',
                'katalogmainan',
            ],
            'post_date' => '2026-11-27',
            'summary' => 'Model kit Gunpla High Grade Build Fighters (HGBF) 1/144 Wing Gundam Zero Honoo original Bandai Namco Jepang. Dilengkapi part efek sayap api transparan oranye-merah spektakuler, persenjataan buster rifle & tameng api, sistem perakitan snap-fit presisi tanpa lem, kondisi barang baru gres dan box mulus.',
            'content' => '<div class="space-y-6 text-slate-700 leading-relaxed">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 not-prose my-4">
        <div class="p-4 rounded-2xl bg-orange-50/70 border border-orange-200">
            <h4 class="font-black text-orange-600 text-sm flex items-center gap-2 mb-1.5">
                <span>🔥</span> Desain Sayap Api Honoo Custom
            </h4>
            <p class="text-xs text-slate-600 leading-relaxed">
                Varian modifikasi api khusus karya Yuusei Kousaka dari serial Gundam Build Fighters Honoo dengan sayap api transparan oranye spektakuler dan artikulasi dinamis.
            </p>
        </div>
        <div class="p-4 rounded-2xl bg-blue-50/70 border border-blue-200">
            <h4 class="font-black text-[#1677d2] text-sm flex items-center gap-2 mb-1.5">
                <span>⚔️</span> Persenjataan Twin Buster Rifle &amp; Shield
            </h4>
            <p class="text-xs text-slate-600 leading-relaxed">
                Dilengkapi Twin Buster Rifle berkekuatan tinggi yang dapat digabungkan atau dipisah, Hyper Beam Saber efek api, dan tameng pelindung bergaya lidah api.
            </p>
        </div>
        <div class="p-4 rounded-2xl bg-emerald-50/70 border border-emerald-200">
            <h4 class="font-black text-emerald-700 text-sm flex items-center gap-2 mb-1.5">
                <span>🛡️</span> 100% Original Bandai Spirits Japan
            </h4>
            <p class="text-xs text-slate-600 leading-relaxed">
                Produk resmi berlisensi Bandai Namco dengan cetakan runner polistirena presisi tinggi, teknologi snap-fit tanpa memerlukan lem, serta artikulasi poliket kokoh.
            </p>
        </div>
        <div class="p-4 rounded-2xl bg-purple-50/70 border border-purple-200">
            <h4 class="font-black text-purple-700 text-sm flex items-center gap-2 mb-1.5">
                <span>📦</span> Barang Baru &amp; Kondisi Box Mulus
            </h4>
            <p class="text-xs text-slate-600 leading-relaxed">
                Unit 100% baru gres bersegel, part plastik runner di dalam plastik utuh belum dirakit, serta kondisi box luar mulus sangat aman untuk kolektor gunpla.
            </p>
        </div>
    </div>

    <div>
        <h3 class="text-lg font-black text-[#0B1A30] mb-3 flex items-center gap-2">
            <span>📦</span> Isi Dalam Box Kemasan (Fullset Bandai)
        </h3>
        <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 text-xs sm:text-sm text-slate-700">
            <ul class="space-y-2 list-disc list-inside">
                <li><strong>1x Set Runner Plastik</strong> Model Kit HGBF 1/144 Wing Gundam Zero Honoo (Multi-Color Mold)</li>
                <li><strong>1x Clear Flame Effect Parts</strong> Part Efek Sayap &amp; Bilah Api Oranye Transparan</li>
                <li><strong>1x Set Persenjataan:</strong> Twin Buster Rifle, Beam Saber &amp; Perisai Shield Honoo</li>
                <li><strong>1x Lembar Foil Sticker / Marking Seal</strong> Detail Warna &amp; Mata Kamera Sensor</li>
                <li><strong>1x Buku Panduan Perakitan Manual</strong> Berwarna Resmi Bandai Jepang</li>
                <li><strong>1x Box Luar Kemasan</strong> Original Bandai Namco (Kondisi Mulus Terawat)</li>
            </ul>
        </div>
    </div>

    <div>
        <h3 class="text-lg font-black text-[#0B1A30] mb-3 flex items-center gap-2">
            <span>⚙️</span> Spesifikasi Teknis Produk
        </h3>
        <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 text-xs font-mono">
            <div class="p-3 rounded-xl bg-slate-50 border border-slate-200">
                <span class="text-slate-400 block text-[10px] uppercase font-bold">Merek</span>
                <span class="font-black text-slate-800">Bandai Namco</span>
            </div>
            <div class="p-3 rounded-xl bg-slate-50 border border-slate-200">
                <span class="text-slate-400 block text-[10px] uppercase font-bold">Grade / Lini</span>
                <span class="font-black text-slate-800">High Grade (HGBF)</span>
            </div>
            <div class="p-3 rounded-xl bg-slate-50 border border-slate-200">
                <span class="text-slate-400 block text-[10px] uppercase font-bold">Skala</span>
                <span class="font-black text-slate-800">1/144 (~13 cm)</span>
            </div>
            <div class="p-3 rounded-xl bg-slate-50 border border-slate-200">
                <span class="text-slate-400 block text-[10px] uppercase font-bold">Kondisi</span>
                <span class="font-black text-emerald-600">Baru (Box Mulus)</span>
            </div>
            <div class="p-3 rounded-xl bg-slate-50 border border-slate-200">
                <span class="text-slate-400 block text-[10px] uppercase font-bold">Perakitan</span>
                <span class="font-black text-slate-800">Snap-fit (Harus Dirakit)</span>
            </div>
            <div class="p-3 rounded-xl bg-slate-50 border border-slate-200">
                <span class="text-slate-400 block text-[10px] uppercase font-bold">Berat Produk</span>
                <span class="font-black text-slate-800">300 gram</span>
            </div>
            <div class="p-3 rounded-xl bg-slate-50 border border-slate-200">
                <span class="text-slate-400 block text-[10px] uppercase font-bold">Kategori</span>
                <span class="font-black text-slate-800">Mecha Model &amp; Diecast</span>
            </div>
            <div class="p-3 rounded-xl bg-slate-50 border border-slate-200">
                <span class="text-slate-400 block text-[10px] uppercase font-bold">Rekomendasi Usia</span>
                <span class="font-black text-slate-800">15+ / Semua Usia</span>
            </div>
            <div class="p-3 rounded-xl bg-slate-50 border border-slate-200">
                <span class="text-slate-400 block text-[10px] uppercase font-bold">Dikirim Dari</span>
                <span class="font-black text-slate-800">Kota Jakarta Barat</span>
            </div>
        </div>
    </div>
</div>',
            'specs' => [
                'Kategori' => 'Collectibles & Hobbies / Mecha Model & Diecast',
                'Judul' => 'Bandai HGBF 1/144 Wing Zero Honoo ORI BANDAI Gundam New Ori Mainan Robot Mainan Gundam Hadiah Ulang Tahun Birthday Gift',
                'Keterangan Judul' => 'Model Kit Gunpla HGBF 1/144 Wing Zero Honoo Original Bandai Spirits Jepang dengan Desain Sayap Api Oranye Transparan Ikonik, Persenjataan Twin Buster Rifle, dan Box Kemasan Mulus Terawat',
                'Harga' => 'Rp 888.888',
                'harga' => '888.888',
                'Beli Langsung' => 'https://s.shopee.co.id/4B1p83lRaY',
                'beli langsung' => 'https://s.shopee.co.id/4B1p83lRaY',
                'tags' => 'topproduk, kidstoys, collectibles, semuaproduk, katalogmainan',
            ],
        ],
    ];

    /**
     * Dapatkan semua data post artikel resmi.
     */
    public static function all(): Collection
    {
        return collect(self::$posts);
    }

    /**
     * Cari post berdasarkan slug atau alias (contoh: post-1, 1, post1).
     */
    public static function findBySlug(string $slug): ?array
    {
        $normalized = strtolower(trim($slug));

        foreach (self::$posts as $post) {
            if ($post['slug'] === $normalized) {
                return $post;
            }
            if (isset($post['aliases']) && in_array($normalized, $post['aliases'])) {
                return $post;
            }
            if ((string) $post['id'] === $normalized) {
                return $post;
            }
        }

        return null;
    }

    /**
     * Cari post berdasarkan ID numerik.
     */
    public static function findById(int|string $id): ?array
    {
        $targetId = (int) $id;
        foreach (self::$posts as $post) {
            if ((int) $post['id'] === $targetId) {
                return $post;
            }
        }

        return null;
    }

    /**
     * Filter post berdasarkan tag tertentu.
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
}
