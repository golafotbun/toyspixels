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
            'title' => 'Sony PlayStation 5 Console Gaming & Collectible Edition',
            'subtitle' => 'Konsol gaming next-gen dengan visual 4K ultra-smooth, SSD super cepat, kontroler DualSense haptic feedback, dan edisi koleksi terlengkap',
            'category_name' => 'Collectibles & Hobbies',
            'category_slug' => 'collectibles',
            'category_url' => 'https://toyspixels.com/collectibles',
            'price' => '14.630.000',
            'raw_price' => 14630000,
            'rating' => '4.9',
            'sold' => '2.8rb+',
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
            ],
            'summary' => 'Konsol gaming generasi terbaru yang menggabungkan performa gaming kelas atas, visual 4K HDR memukau, kontroler DualSense revolusioner, serta menjadi barang koleksi wajib bagi para pecinta game dan hobi pop culture.',
            'content' => 'Sony PlayStation 5 Console Gaming & Collectible Edition menghadirkan standar baru dalam dunia gaming dan hiburan interaktif. Ditenagai prosesor kustom AMD Zen 2 berkecepatan tinggi dan arsitektur grafis RDNA 2, konsol ini mampu menjalankan game pada resolusi 4K dengan frame rate hingga 120 FPS serta teknologi Ray Tracing real-time untuk pencahayaan fotorealistis. Didukung kontroler nirkabel inovatif DualSense dengan fitur Haptic Feedback responsif dan Adaptive Triggers dinamis, setiap aksi di dalam game terasa nyata di ujung jari.',
            'specs' => [
                'Kategori' => 'Collectibles & Hobbies',
                'Judul' => 'Sony PlayStation 5 Console Gaming & Collectible Edition',
                'Keterangan Judul' => 'Konsol gaming next-gen dengan visual 4K ultra-smooth, SSD super cepat, kontroler DualSense haptic feedback, dan edisi koleksi terlengkap',
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
