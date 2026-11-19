<?php

namespace App\Services;

use Illuminate\Support\Collection;

class KatalogService
{
    /**
     * Data 12 Produk Resmi Tahap 5 (Katalog Lengkap).
     * Setiap produk memiliki kategori resmi dari 8 kategori Tahap 4,
     * format harga di bawah artikel (contoh harga : 3.250.000),
     * link beli langsung afiliasi, serta tag artikel (semua, mainan, technology).
     */
    protected static array $products = [
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
            'tags' => ['semua', 'mainan', 'collectibles'],
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
            'tags' => ['semua', 'mainan', 'collectibles'],
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
            'tags' => ['semua', 'mainan', 'kidstoys'],
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
            'tags' => ['semua', 'mainan', 'collectibles'],
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
            'tags' => ['semua', 'mainan', 'kidstoys'],
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
            'tags' => ['semua', 'mainan', 'gamespuzzles'],
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
            'tags' => ['semua', 'technology', 'gamingentertainment'],
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
            'tags' => ['semua', 'technology', 'gadgetswearables'],
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
            'tags' => ['semua', 'technology', 'computersaccessories'],
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
            'tags' => ['semua', 'technology', 'computersaccessories'],
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
            'tags' => ['semua', 'technology', 'gamingentertainment'],
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
            'tags' => ['semua', 'technology', 'mobiletablets'],
            'summary' => 'Tablet flagship layar Dynamic AMOLED 2X 14.6 inci, prosesor Snapdragon 8 Gen 2, rating anti air IP68, dan sudah termasuk S-Pen latensi ultra rendah.',
            'content' => 'Galaxy Tab S9 Ultra mendefinisikan ulang produktivitas dan hiburan kelas atas. Menampilkan layar raksasa Dynamic AMOLED 2X 14.6 inci 120Hz yang sangat memukau, dapur pacu Snapdragon 8 Gen 2 for Galaxy, ketahanan air dan debu IP68 pertama di seri flagship tab, serta dukungan stylus S-Pen bawaan berlatensi 2.8ms.',
        ],
    ];

    public static function all(): Collection
    {
        return collect(self::$products)->map(function ($item) {
            $item['shopee_url'] = $item['shopee_url'] ?? $item['affiliate_url'];
            return $item;
        });
    }

    public static function findBySlug(string $slug): ?array
    {
        $normalized = strtolower(trim($slug));

        foreach (self::$products as $product) {
            if ($product['slug'] === $normalized) {
                $product['shopee_url'] = $product['shopee_url'] ?? $product['affiliate_url'];
                return $product;
            }
        }

        return null;
    }

    public static function filterByTag(string $tag): Collection
    {
        $normalized = strtolower(trim($tag));

        if ($normalized === 'all' || $normalized === 'semua') {
            return self::all();
        }

        return self::all()->filter(function ($item) use ($normalized) {
            return in_array($normalized, $item['tags'] ?? []);
        });
    }
}
