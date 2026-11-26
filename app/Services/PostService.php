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
