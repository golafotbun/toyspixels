<?php

namespace App\Services;

use Illuminate\Support\Collection;

class CategoryService
{
    /**
     * Kumpulan 8 Kategori Resmi ToysPixel (Tahap 4).
     * Masing-masing kategori dan produknya memiliki tag yang sesuai.
     */
    protected static array $categories = [
        'kidstoys' => [
            'slug' => 'kidstoys',
            'tag' => 'kidstoys',
            'aliases' => ['kids-toys', 'kidstoys', 'kids-educational'],
            'title' => 'Kids & Educational Toys',
            'group' => 'Mainan & Hobi',
            'group_slug' => 'mainan',
            'tagline' => 'Mainan edukatif, balok susun & kreativitas anak',
            'image' => 'images/categories/kids-educational.jpg',
            'accent_color' => '#1677d2',
            'description' => 'Koleksi mainan edukatif terbaik untuk melatih motorik halus, logika berhitung, balok susun kreatif, puzzle angka & huruf, serta mainan sensori interaktif yang aman untuk tumbuh kembang anak.',
            'products' => [
                [
                    'name' => 'LEGO Classic Bricks & Animals Creative Box',
                    'tag' => 'kidstoys',
                    'tags' => ['semua', 'mainan', 'kidstoys'],
                    'specs' => 'Usia 4+ • 1500 Pieces • Balok Susun Edukatif',
                    'price' => 'Rp 899.000',
                    'rating' => '4.9',
                    'sold' => '1.2rb+',
                    'image' => 'images/categories/kids-educational.jpg',
                    'shopee_url' => 'https://shopee.co.id',
                    'tokopedia_url' => 'https://tokopedia.com',
                ],
                [
                    'name' => 'Magnetic Tiles Marble Run STEM 100 Pcs',
                    'tag' => 'kidstoys',
                    'tags' => ['semua', 'mainan', 'kidstoys'],
                    'specs' => 'Usia 3+ • Magnetic 3D • Latihan Logika Spasial',
                    'price' => 'Rp 289.000',
                    'rating' => '4.9',
                    'sold' => '2.5rb+',
                    'image' => 'images/categories/kids-educational.jpg',
                    'shopee_url' => 'https://shopee.co.id',
                    'tokopedia_url' => 'https://tokopedia.com',
                ],
                [
                    'name' => 'Montessori Wooden Busy Board Sensori Anak',
                    'tag' => 'kidstoys',
                    'tags' => ['semua', 'mainan', 'kidstoys'],
                    'specs' => 'Kayu Alami Ramah Anak • 14 Aktivitas Interaktif',
                    'price' => 'Rp 149.000',
                    'rating' => '4.8',
                    'sold' => '3.8rb+',
                    'image' => 'images/categories/kids-educational.jpg',
                    'shopee_url' => 'https://shopee.co.id',
                    'tokopedia_url' => 'https://tokopedia.com',
                ],
                [
                    'name' => 'Smart Interactive Drawing Robot for Kids',
                    'tag' => 'kidstoys',
                    'tags' => ['semua', 'mainan', 'kidstoys'],
                    'specs' => 'Kartu Huruf & Hewan • Voice Guide Bahasa Indo',
                    'price' => 'Rp 329.000',
                    'rating' => '4.8',
                    'sold' => '940+',
                    'image' => 'images/categories/kids-educational.jpg',
                    'shopee_url' => 'https://shopee.co.id',
                    'tokopedia_url' => 'https://tokopedia.com',
                ],
            ],
        ],
        'collectibles' => [
            'slug' => 'collectibles',
            'tag' => 'collectibles',
            'aliases' => ['collectibles', 'collectibleshobbies', 'collectibles-hobbies'],
            'title' => 'Collectibles & Hobbies',
            'group' => 'Mainan & Hobi',
            'group_slug' => 'mainan',
            'tagline' => 'Action figures, vinyl art toys & koleksi langka',
            'image' => 'images/categories/collectibles-hobbies.jpg',
            'accent_color' => '#1677d2',
            'description' => 'Kurasi action figures original, Master Grade Gunpla Bandai Jepang, vinyl designer toys Pop Mart, diecast Hot Wheels premium, dan memorabilia langka untuk hobi dan investasi kolektor sejati.',
            'products' => [
                [
                    'name' => 'Gundam Barbatos MG 1/100 Master Grade',
                    'tag' => 'collectibles',
                    'tags' => ['semua', 'mainan', 'collectibles'],
                    'specs' => 'Skala 1/100 • Bandai Original • Inner Frame Lengkap',
                    'price' => 'Rp 329.000',
                    'rating' => '4.9',
                    'sold' => '2.8rb+',
                    'image' => 'images/toys/gundam.jpg',
                    'shopee_url' => 'https://shopee.co.id',
                    'tokopedia_url' => 'https://tokopedia.com',
                ],
                [
                    'name' => 'Tamiya Avante 4WD Racer Gold Suspension',
                    'tag' => 'collectibles',
                    'tags' => ['semua', 'mainan', 'collectibles'],
                    'specs' => 'Sasis AR Aerodinamis • Motor Kencang • Kit Balap',
                    'price' => 'Rp 289.000',
                    'rating' => '4.9',
                    'sold' => '3.1rb+',
                    'image' => 'images/toys/tamiya.jpg',
                    'shopee_url' => 'https://shopee.co.id',
                    'tokopedia_url' => 'https://tokopedia.com',
                ],
                [
                    'name' => 'Pop Mart Labubu The Monsters Vinyl Series',
                    'tag' => 'collectibles',
                    'tags' => ['semua', 'mainan', 'collectibles'],
                    'specs' => 'Blind Box Original • Vinyl Art Collectible • 10cm',
                    'price' => 'Rp 249.000',
                    'rating' => '5.0',
                    'sold' => '4.2rb+',
                    'image' => 'images/categories/collectibles-hobbies.jpg',
                    'shopee_url' => 'https://shopee.co.id',
                    'tokopedia_url' => 'https://tokopedia.com',
                ],
                [
                    'name' => 'Hot Wheels Premium Nissan Skyline GT-R R34',
                    'tag' => 'collectibles',
                    'tags' => ['semua', 'mainan', 'collectibles'],
                    'specs' => 'Real Riders Rubber Tires • Metal/Metal Body',
                    'price' => 'Rp 125.000',
                    'rating' => '4.9',
                    'sold' => '5.4rb+',
                    'image' => 'images/categories/collectibles-hobbies.jpg',
                    'shopee_url' => 'https://shopee.co.id',
                    'tokopedia_url' => 'https://tokopedia.com',
                ],
                [
                    'name' => 'Sony PlayStation 5 Console Gaming & Collectible Edition',
                    'slug' => 'post-1',
                    'tag' => 'collectibles',
                    'tags' => ['topproduk', 'collectibles', 'gamespuzzles', 'gaming', 'semuaproduk', 'katalogmainan', 'katalogteknologi', 'mainan', 'semua'],
                    'specs' => 'Visual 4K HDR • SSD Ultra Cepat • DualSense Haptic Feedback',
                    'price' => 'Rp 14.630.000',
                    'rating' => '4.9',
                    'sold' => '2.8rb+',
                    'image' => 'images/toys/playstation.jpg',
                    'shopee_url' => 'https://s.shopee.co.id/Lp4WI31xi',
                    'affiliate_url' => 'https://s.shopee.co.id/Lp4WI31xi',
                    'tokopedia_url' => 'https://tokopedia.com',
                    'detail_url' => 'https://toyspixels.com/post/post-1',
                ],
            ],
        ],
        'gamespuzzles' => [
            'slug' => 'gamespuzzles',
            'tag' => 'gamespuzzles',
            'aliases' => ['gamespuzzles', 'games-puzzles'],
            'title' => 'Games & Puzzles',
            'group' => 'Mainan & Hobi',
            'group_slug' => 'mainan',
            'tagline' => 'Rubik magnetik, board game & asah strategi',
            'image' => 'images/categories/games-puzzles.jpg',
            'accent_color' => '#1677d2',
            'description' => 'Pilihan speedcube magnetik kompetisi, board game keluarga seru, puzzle kayu 3D mekanikal, dan permainan asah otak untuk melatih ketangkasan berpikir taktis dan fokus konsentrasi.',
            'products' => [
                [
                    'name' => 'GAN 356 M Magnetic Speed Cube 3x3 Flagship',
                    'tag' => 'gamespuzzles',
                    'tags' => ['semua', 'mainan', 'gamespuzzles'],
                    'specs' => 'GES System • Core Magnetik Ringan • Smooth Turning',
                    'price' => 'Rp 195.000',
                    'rating' => '4.9',
                    'sold' => '3.3rb+',
                    'image' => 'images/categories/games-puzzles.jpg',
                    'shopee_url' => 'https://shopee.co.id',
                    'tokopedia_url' => 'https://tokopedia.com',
                ],
                [
                    'name' => 'Catan Board Game Classic Strategy Edition',
                    'tag' => 'gamespuzzles',
                    'tags' => ['semua', 'mainan', 'gamespuzzles'],
                    'specs' => '3-4 Pemain • Board Game Terpopuler • Versi Indonesia',
                    'price' => 'Rp 549.000',
                    'rating' => '4.9',
                    'sold' => '1.5rb+',
                    'image' => 'images/categories/games-puzzles.jpg',
                    'shopee_url' => 'https://shopee.co.id',
                    'tokopedia_url' => 'https://tokopedia.com',
                ],
                [
                    'name' => 'ROKR 3D Wooden Mechanical Marble Night City',
                    'tag' => 'gamespuzzles',
                    'tags' => ['semua', 'mainan', 'gamespuzzles'],
                    'specs' => '253 Pieces Kayu Presisi • Jalur Kelereng Mekanik',
                    'price' => 'Rp 389.000',
                    'rating' => '4.9',
                    'sold' => '870+',
                    'image' => 'images/categories/games-puzzles.jpg',
                    'shopee_url' => 'https://shopee.co.id',
                    'tokopedia_url' => 'https://tokopedia.com',
                ],
                [
                    'name' => 'Monopoly Deal Card Game Fast-Paced Fun',
                    'tag' => 'gamespuzzles',
                    'tags' => ['semua', 'mainan', 'gamespuzzles'],
                    'specs' => '15 Menit Permainan • 110 Kartu Properti • Portabel',
                    'price' => 'Rp 79.000',
                    'rating' => '4.8',
                    'sold' => '6.7rb+',
                    'image' => 'images/categories/games-puzzles.jpg',
                    'shopee_url' => 'https://shopee.co.id',
                    'tokopedia_url' => 'https://tokopedia.com',
                ],
                [
                    'name' => 'Sony PlayStation 5 Console Gaming & Collectible Edition',
                    'slug' => 'post-1',
                    'tag' => 'gamespuzzles',
                    'tags' => ['topproduk', 'collectibles', 'gamespuzzles', 'gaming', 'semuaproduk', 'katalogmainan', 'katalogteknologi', 'mainan', 'semua'],
                    'specs' => 'Visual 4K HDR • SSD Ultra Cepat • DualSense Haptic Feedback',
                    'price' => 'Rp 14.630.000',
                    'rating' => '4.9',
                    'sold' => '2.8rb+',
                    'image' => 'images/toys/playstation.jpg',
                    'shopee_url' => 'https://s.shopee.co.id/Lp4WI31xi',
                    'affiliate_url' => 'https://s.shopee.co.id/Lp4WI31xi',
                    'tokopedia_url' => 'https://tokopedia.com',
                    'detail_url' => 'https://toyspixels.com/post/post-1',
                ],
            ],
        ],
        'outdoorrc' => [
            'slug' => 'outdoorrc',
            'tag' => 'outdoorrc',
            'aliases' => ['outdoorrc', 'outdoor-rc'],
            'title' => 'Outdoor & RC Play',
            'group' => 'Mainan & Hobi',
            'group_slug' => 'mainan',
            'tagline' => 'Mobil remote control 4WD, monster truck & mainan outdoor',
            'image' => 'images/categories/outdoor-rc.jpg',
            'accent_color' => '#1677d2',
            'description' => 'Jajaran mobil remote control 4WD off-road berkecepatan tinggi, drone quadcopter ringkas berkamera, blaster olahraga luar ruangan, dan mainan petualangan outdoor seru segala cuaca.',
            'products' => [
                [
                    'name' => 'RC Rock Crawler 4WD Waterproof Off-Road 1/16',
                    'tag' => 'outdoorrc',
                    'tags' => ['semua', 'mainan', 'outdoorrc'],
                    'specs' => 'Suspensi Independen • 2.4GHz Jarak 60m • Baterai 2x',
                    'price' => 'Rp 349.000',
                    'rating' => '4.8',
                    'sold' => '2.1rb+',
                    'image' => 'images/categories/outdoor-rc.jpg',
                    'shopee_url' => 'https://shopee.co.id',
                    'tokopedia_url' => 'https://tokopedia.com',
                ],
                [
                    'name' => 'Mini Foldable Drone Dual HD Camera WiFi FPV',
                    'tag' => 'outdoorrc',
                    'tags' => ['semua', 'mainan', 'outdoorrc'],
                    'specs' => 'Optical Flow Hover • Altitude Hold • Remote Pistol',
                    'price' => 'Rp 299.000',
                    'rating' => '4.7',
                    'sold' => '1.8rb+',
                    'image' => 'images/categories/outdoor-rc.jpg',
                    'shopee_url' => 'https://shopee.co.id',
                    'tokopedia_url' => 'https://tokopedia.com',
                ],
                [
                    'name' => 'Nerf Elite 2.0 Commander Blaster + 24 Darts',
                    'tag' => 'outdoorrc',
                    'tags' => ['semua', 'mainan', 'outdoorrc'],
                    'specs' => 'Rotating 6-Dart Drum • Jarak Tembak Hingga 27m',
                    'price' => 'Rp 219.000',
                    'rating' => '4.9',
                    'sold' => '3.4rb+',
                    'image' => 'images/categories/outdoor-rc.jpg',
                    'shopee_url' => 'https://shopee.co.id',
                    'tokopedia_url' => 'https://tokopedia.com',
                ],
                [
                    'name' => 'High-Speed RC Drift Car 4WD Sport GTR 1/24',
                    'tag' => 'outdoorrc',
                    'tags' => ['semua', 'mainan', 'outdoorrc'],
                    'specs' => 'Termasuk Ban Karet & Ban Drift • Lampu LED Depan',
                    'price' => 'Rp 189.000',
                    'rating' => '4.8',
                    'sold' => '4.0rb+',
                    'image' => 'images/categories/outdoor-rc.jpg',
                    'shopee_url' => 'https://shopee.co.id',
                    'tokopedia_url' => 'https://tokopedia.com',
                ],
            ],
        ],
        'mobiletablets' => [
            'slug' => 'mobiletablets',
            'tag' => 'mobiletablets',
            'aliases' => ['mobiletablets', 'mobile-tablets'],
            'title' => 'Mobile & Tablets',
            'group' => 'Gadget & Teknologi',
            'group_slug' => 'teknologi',
            'tagline' => 'Smartphone, tablet belajar & aksesoris mobile',
            'image' => 'images/categories/mobile-tablets.jpg',
            'accent_color' => '#047857',
            'description' => 'Rekomendasi tablet belajar visual interaktif anak, smartphone dengan kamera andalan & daya tahan baterai tinggi, active stylus pen, dan stand magnetik ergonomis terbaik.',
            'products' => [
                [
                    'name' => 'Xiaomi Pad 6 Tablet 8/256GB Snapdragon 870',
                    'tag' => 'mobiletablets',
                    'tags' => ['semua', 'teknologi', 'mobiletablets'],
                    'specs' => 'Layar 11" 144Hz WQHD+ • Quad Speakers Dolby Atmos',
                    'price' => 'Rp 4.499.000',
                    'rating' => '4.9',
                    'sold' => '1.7rb+',
                    'image' => 'images/categories/mobile-tablets.jpg',
                    'shopee_url' => 'https://shopee.co.id',
                    'tokopedia_url' => 'https://tokopedia.com',
                ],
                [
                    'name' => 'Apple iPad 10th Gen 10.9" Wi-Fi A14 Bionic',
                    'tag' => 'mobiletablets',
                    'tags' => ['semua', 'teknologi', 'mobiletablets'],
                    'specs' => 'Liquid Retina Display • USB-C • Support Apple Pencil',
                    'price' => 'Rp 5.799.000',
                    'rating' => '5.0',
                    'sold' => '980+',
                    'image' => 'images/categories/mobile-tablets.jpg',
                    'shopee_url' => 'https://shopee.co.id',
                    'tokopedia_url' => 'https://tokopedia.com',
                ],
                [
                    'name' => 'Universal Active Stylus Pen Palm Rejection',
                    'tag' => 'mobiletablets',
                    'tags' => ['semua', 'teknologi', 'mobiletablets'],
                    'specs' => 'Sensitivitas Tekanan • Baterai Tahan 12 Jam • Type-C',
                    'price' => 'Rp 169.000',
                    'rating' => '4.8',
                    'sold' => '6.3rb+',
                    'image' => 'images/categories/mobile-tablets.jpg',
                    'shopee_url' => 'https://shopee.co.id',
                    'tokopedia_url' => 'https://tokopedia.com',
                ],
                [
                    'name' => 'Baseus Magnetic Foldable Desk Tablet Stand',
                    'tag' => 'mobiletablets',
                    'tags' => ['semua', 'teknologi', 'mobiletablets'],
                    'specs' => 'Aluminium Alloy Kokoh • Rotasi 360 Derajat Bebas',
                    'price' => 'Rp 139.000',
                    'rating' => '4.9',
                    'sold' => '4.5rb+',
                    'image' => 'images/categories/mobile-tablets.jpg',
                    'shopee_url' => 'https://shopee.co.id',
                    'tokopedia_url' => 'https://tokopedia.com',
                ],
            ],
        ],
        'gadgetswearables' => [
            'slug' => 'gadgetswearables',
            'tag' => 'gadgetswearables',
            'aliases' => ['gadgetswearables', 'gadgets-wearables'],
            'title' => 'Gadgets & Wearables',
            'group' => 'Gadget & Teknologi',
            'group_slug' => 'teknologi',
            'tagline' => 'Smartwatch kesehatan, TWS earbuds & smart gear',
            'image' => 'images/categories/gadgets-wearables.jpg',
            'accent_color' => '#047857',
            'description' => 'Kurasi smartwatch pemantau detak jantung & kualitas tidur akurat, TWS earbuds berteknologi active noise cancellation (ANC), dan perangkat wearable modern pendukung gaya hidup sehat.',
            'products' => [
                [
                    'name' => 'Huawei Band 9 AMOLED Smart Tracker 5ATM',
                    'tag' => 'gadgetswearables',
                    'tags' => ['semua', 'teknologi', 'gadgetswearables'],
                    'specs' => 'SpO2 24/7 • Baterai Awet 14 Hari • 100+ Mode Olahraga',
                    'price' => 'Rp 499.000',
                    'rating' => '4.9',
                    'sold' => '5.8rb+',
                    'image' => 'images/categories/gadgets-wearables.jpg',
                    'shopee_url' => 'https://shopee.co.id',
                    'tokopedia_url' => 'https://tokopedia.com',
                ],
                [
                    'name' => 'Soundcore Space One ANC Wireless Headphones',
                    'tag' => 'gadgetswearables',
                    'tags' => ['semua', 'teknologi', 'gadgetswearables'],
                    'specs' => 'Active Noise Cancelling 98% • Hi-Res Audio • 55 Jam',
                    'price' => 'Rp 1.199.000',
                    'rating' => '4.9',
                    'sold' => '1.9rb+',
                    'image' => 'images/categories/gadgets-wearables.jpg',
                    'shopee_url' => 'https://shopee.co.id',
                    'tokopedia_url' => 'https://tokopedia.com',
                ],
                [
                    'name' => 'Moondrop Space Travel TWS ANC Bluetooth 5.3',
                    'tag' => 'gadgetswearables',
                    'tags' => ['semua', 'teknologi', 'gadgetswearables'],
                    'specs' => 'Transparan Case Unik • Latensi Rendah Game Mode',
                    'price' => 'Rp 349.000',
                    'rating' => '4.8',
                    'sold' => '8.2rb+',
                    'image' => 'images/categories/gadgets-wearables.jpg',
                    'shopee_url' => 'https://shopee.co.id',
                    'tokopedia_url' => 'https://tokopedia.com',
                ],
                [
                    'name' => 'Apple Watch SE 2nd Gen 40mm GPS Sport',
                    'tag' => 'gadgetswearables',
                    'tags' => ['semua', 'teknologi', 'gadgetswearables'],
                    'specs' => 'Retina OLED Display • Deteksi Tabrakan • S8 SiP',
                    'price' => 'Rp 3.899.000',
                    'rating' => '5.0',
                    'sold' => '720+',
                    'image' => 'images/categories/gadgets-wearables.jpg',
                    'shopee_url' => 'https://shopee.co.id',
                    'tokopedia_url' => 'https://tokopedia.com',
                ],
            ],
        ],
        'computersaccessories' => [
            'slug' => 'computersaccessories',
            'tag' => 'computersaccessories',
            'aliases' => ['computersaccessories', 'computers-accessories'],
            'title' => 'Computers & Accessories',
            'group' => 'Gadget & Teknologi',
            'group_slug' => 'teknologi',
            'tagline' => 'Laptop kerja, keyboard mekanik & mouse gaming',
            'image' => 'images/categories/computers-accessories.jpg',
            'accent_color' => '#047857',
            'description' => 'Setup produktivitas kerja dan belajar modern dengan keyboard mekanik kustom hotswap, mouse ergonomis presisi tinggi, monitor lamp bar pelindung mata, dan hub charger serbaguna.',
            'products' => [
                [
                    'name' => 'Keychron K2 V2 Wireless Hotswap Mechanical Keyboard',
                    'tag' => 'computersaccessories',
                    'tags' => ['semua', 'teknologi', 'computersaccessories'],
                    'specs' => 'Gateron G Pro Switch • Bluetooth 5.1 & Type-C • RGB Backlight',
                    'price' => 'Rp 1.150.000',
                    'rating' => '4.9',
                    'sold' => '2.4rb+',
                    'image' => 'images/categories/computers-accessories.jpg',
                    'shopee_url' => 'https://shopee.co.id',
                    'tokopedia_url' => 'https://tokopedia.com',
                ],
                [
                    'name' => 'Logitech MX Master 3S Ergonomic Wireless Mouse',
                    'tag' => 'computersaccessories',
                    'tags' => ['semua', 'teknologi', 'computersaccessories'],
                    'specs' => '8K DPI Any-Surface Tracking • Quiet Clicks • MagSpeed Scroll',
                    'price' => 'Rp 1.399.000',
                    'rating' => '5.0',
                    'sold' => '3.1rb+',
                    'image' => 'images/categories/computers-accessories.jpg',
                    'shopee_url' => 'https://shopee.co.id',
                    'tokopedia_url' => 'https://tokopedia.com',
                ],
                [
                    'name' => 'Baseus Screenbar Monitor Light LED Auto-Dimming',
                    'tag' => 'computersaccessories',
                    'tags' => ['semua', 'teknologi', 'computersaccessories'],
                    'specs' => 'Tanpa Silau Layar • Sensor Sentuh 3 Suhu Warna • USB-C',
                    'price' => 'Rp 289.000',
                    'rating' => '4.9',
                    'sold' => '4.7rb+',
                    'image' => 'images/categories/computers-accessories.jpg',
                    'shopee_url' => 'https://shopee.co.id',
                    'tokopedia_url' => 'https://tokopedia.com',
                ],
                [
                    'name' => 'Ugreen 65W GaN Fast Charger 3 Ports Multi-Device',
                    'tag' => 'computersaccessories',
                    'tags' => ['semua', 'teknologi', 'computersaccessories'],
                    'specs' => 'Dual USB-C PD + USB-A • Kompatibel MacBook, iPad, HP',
                    'price' => 'Rp 269.000',
                    'rating' => '4.9',
                    'sold' => '7.5rb+',
                    'image' => 'images/categories/computers-accessories.jpg',
                    'shopee_url' => 'https://shopee.co.id',
                    'tokopedia_url' => 'https://tokopedia.com',
                ],
            ],
        ],
        'gamingentertainment' => [
            'slug' => 'gamingentertainment',
            'tag' => 'gamingentertainment',
            'aliases' => ['gamingentertainment', 'gaming-entertainment'],
            'title' => 'Gaming & Entertainment',
            'group' => 'Gadget & Teknologi',
            'group_slug' => 'teknologi',
            'tagline' => 'Gamepad konsol RGB, headset gaming & konsol game',
            'image' => 'images/categories/gaming-entertainment.jpg',
            'accent_color' => '#047857',
            'description' => 'Pusat periferal gaming generasi mutakhir: konsol PlayStation & Nintendo Switch, gamepad nirkabel Hall-Effect anti drift, headset audio spasial 7.1, dan aksesoris hiburan interaktif.',
            'products' => [
                [
                    'name' => 'PlayStation 5 Slim 1TB Console Disc Version',
                    'tag' => 'gamingentertainment',
                    'tags' => ['semua', 'teknologi', 'gamingentertainment'],
                    'specs' => 'Ultra-High Speed SSD • Ray Tracing 4K 120Hz • DualSense Controller',
                    'price' => 'Rp 7.890.000',
                    'rating' => '5.0',
                    'sold' => '850+',
                    'image' => 'images/categories/gaming-entertainment.jpg',
                    'shopee_url' => 'https://shopee.co.id',
                    'tokopedia_url' => 'https://tokopedia.com',
                ],
                [
                    'name' => 'Nintendo Switch OLED Model Mario Red Edition',
                    'tag' => 'gamingentertainment',
                    'tags' => ['semua', 'teknologi', 'gamingentertainment'],
                    'specs' => 'Layar 7" OLED Tajam • Audio Ditingkatkan • Dock LAN Port',
                    'price' => 'Rp 4.299.000',
                    'rating' => '4.9',
                    'sold' => '1.6rb+',
                    'image' => 'images/categories/gaming-entertainment.jpg',
                    'shopee_url' => 'https://shopee.co.id',
                    'tokopedia_url' => 'https://tokopedia.com',
                ],
                [
                    'name' => '8BitDo Ultimate Wireless Controller Hall Effect',
                    'tag' => 'gamingentertainment',
                    'tags' => ['semua', 'teknologi', 'gamingentertainment'],
                    'specs' => 'Charging Dock • No Stick Drift • 2.4G & Bluetooth',
                    'price' => 'Rp 689.000',
                    'rating' => '4.9',
                    'sold' => '2.9rb+',
                    'image' => 'images/categories/gaming-entertainment.jpg',
                    'shopee_url' => 'https://shopee.co.id',
                    'tokopedia_url' => 'https://tokopedia.com',
                ],
                [
                    'name' => 'Razer BlackShark V2 X Multi-Platform Gaming Headset',
                    'tag' => 'gamingentertainment',
                    'tags' => ['semua', 'teknologi', 'gamingentertainment'],
                    'specs' => 'TriForce 50mm Drivers • Cardioid Mic • 7.1 Surround Sound',
                    'price' => 'Rp 649.000',
                    'rating' => '4.8',
                    'sold' => '3.8rb+',
                    'image' => 'images/categories/gaming-entertainment.jpg',
                    'shopee_url' => 'https://shopee.co.id',
                    'tokopedia_url' => 'https://tokopedia.com',
                ],
                [
                    'name' => 'Sony PlayStation 5 Console Gaming & Collectible Edition',
                    'slug' => 'post-1',
                    'tag' => 'gamingentertainment',
                    'tags' => ['topproduk', 'collectibles', 'gamespuzzles', 'gaming', 'semuaproduk', 'katalogmainan', 'katalogteknologi', 'teknologi', 'semua'],
                    'specs' => 'Visual 4K HDR • SSD Ultra Cepat • DualSense Haptic Feedback',
                    'price' => 'Rp 14.630.000',
                    'rating' => '4.9',
                    'sold' => '2.8rb+',
                    'image' => 'images/toys/playstation.jpg',
                    'shopee_url' => 'https://s.shopee.co.id/Lp4WI31xi',
                    'affiliate_url' => 'https://s.shopee.co.id/Lp4WI31xi',
                    'tokopedia_url' => 'https://tokopedia.com',
                    'detail_url' => 'https://toyspixels.com/post/post-1',
                ],
            ],
        ],
    ];

    /**
     * Mengambil semua kategori.
     */
    public static function all(): Collection
    {
        return collect(self::$categories);
    }

    /**
     * Mencari kategori berdasarkan slug atau aliasnya.
     * Memastikan setiap produk yang dimuat strictly ber-tag sesuai kategori tersebut.
     */
    public static function findBySlug(string $slug): ?array
    {
        $normalized = strtolower(trim($slug));

        foreach (self::$categories as $key => $category) {
            if ($key === $normalized || $category['slug'] === $normalized || in_array($normalized, $category['aliases'] ?? [])) {
                $targetTag = $category['tag'] ?? $category['slug'];

                // Filter validasi ketat: pastikan produk yang masuk ke kategori ini strictly ber-tag sesuai kategori
                $category['products'] = collect($category['products'])->filter(function ($product) use ($targetTag) {
                    return ($product['tag'] ?? null) === $targetTag || in_array($targetTag, $product['tags'] ?? []);
                })->values()->all();

                return $category;
            }
        }

        return null;
    }

    /**
     * Mengambil produk berdasarkan tag kategori.
     */
    public static function filterByTag(string $tag): Collection
    {
        $normalized = strtolower(trim($tag));

        $results = collect();
        foreach (self::$categories as $category) {
            foreach ($category['products'] as $product) {
                if (($product['tag'] ?? null) === $normalized || in_array($normalized, $product['tags'] ?? [])) {
                    $results->push($product);
                }
            }
        }

        return $results;
    }

    /**
     * Alias helper filter by tag.
     */
    public static function byTag(string $tag): Collection
    {
        return self::filterByTag($tag);
    }

    /**
     * Helper render view category.
     */
    public static function render(string $slug)
    {
        $category = self::findBySlug($slug);

        if (! $category) {
            abort(404);
        }

        $allCategories = self::all();

        return view('category', compact('category', 'allCategories'));
    }
}
