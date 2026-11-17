<?php

namespace App\Services;

use Illuminate\Support\Collection;

class NewsService
{
    /**
     * Kumpulan artikel News & Review Tahap 6.
     * Kategori Mainan ber-tag: newsmainan
     * Kategori Teknologi ber-tag: newsteknologi
     */
    protected static array $articles = [
        // Kategori Mainan (tag: newsmainan)
        [
            'id' => 1,
            'slug' => 'top-7-mainan-edukasi-anak',
            'title' => 'Top 7 Mainan Edukasi Anak 3-7 Tahun yang Melatih Kreativitas dan Logika',
            'date' => '12 Nov 2026',
            'read_time' => '5 Menit Baca',
            'category_name' => 'Mainan',
            'tag' => 'newsmainan',
            'category_url' => 'https://toyspixels.com/newsmainan',
            'image' => 'https://images.unsplash.com/photo-1516627145497-ae6968895b74?w=600&auto=format&fit=crop&q=80',
            'summary' => 'Mengembangkan potensi anak melalui balok susun, magnetic tiles, dan puzzle interaktif yang merangsang daya pikir serta koordinasi motorik halus sejak usia dini.',
            'content' => 'Memilih mainan yang tepat untuk anak usia 3 hingga 7 tahun sangat berpengaruh terhadap perkembangan kognitif dan kreativitas mereka. Mainan seperti magnetic tiles, balok kayu edukatif, dan puzzle logika membantu anak belajar memecahkan masalah secara mandiri sekaligus mengurangi ketergantungan pada layar gawai (screen time). Pastikan memilih produk bersertifikasi keamanan resmi (SNI/CE) dengan material non-toxic agar aman dimainkan setiap hari.',
        ],
        [
            'id' => 2,
            'slug' => 'panduan-memilih-gundam-gunpla',
            'title' => 'Panduan Memilih Gundam & Gunpla: Perbedaan Tingkatan Grade PG, MG, RG, dan HG',
            'date' => '10 Nov 2026',
            'read_time' => '7 Menit Baca',
            'category_name' => 'Mainan',
            'tag' => 'newsmainan',
            'category_url' => 'https://toyspixels.com/newsmainan',
            'image' => 'https://images.unsplash.com/photo-1607604276583-eef5d076aa5f?w=600&auto=format&fit=crop&q=80',
            'summary' => 'Kupas tuntas skala, tingkat kerumitan perakitan, dan kualitas artikulasi model kit Bandai agar Anda memilih grade yang tepat sesuai keahlian.',
            'content' => 'Bagi pemula maupun kolektor berpengalaman, memahami tingkatan grade Gunpla adalah langkah krusial sebelum membeli. High Grade (HG) skala 1/144 menawarkan perakitan cepat dan harga terjangkau. Real Grade (RG) menghadirkan detail mikroskopis pada skala yang sama. Master Grade (MG) skala 1/100 menghadirkan inner frame lengkap, sementara Perfect Grade (PG) skala 1/60 menjadi mahakarya teknik dengan artikulasi penuh serta pencahayaan LED mutakhir.',
        ],
        [
            'id' => 3,
            'slug' => 'tren-pop-mart-designer-art-toys',
            'title' => 'Tren Pop Mart & Designer Art Toys: Mengapa Blind Box Sangat Digemari Kolektor?',
            'date' => '08 Nov 2026',
            'read_time' => '4 Menit Baca',
            'category_name' => 'Mainan',
            'tag' => 'newsmainan',
            'category_url' => 'https://toyspixels.com/newsmainan',
            'image' => 'https://images.unsplash.com/photo-1566576912321-d58ddd743088?w=600&auto=format&fit=crop&q=80',
            'summary' => 'Eksplorasi tren seni figur vinyl modern, daya tarik karakter Labubu, Skullpanda & Dimoo, serta sensasi unboxing figur rahasia edisi terbatas.',
            'content' => 'Art toys bukan lagi sekadar mainan anak-anak, melainkan bagian dari seni kontemporer dan kultur pop modern. Konsep blind box memberikan sensasi kejutan yang adiktif saat membuka kemasan, terutama mengejar varian Secret yang langka. Figur seperti Labubu The Monsters karya Kasing Lung dan Skullpanda karya Xiongmao membuktikan bahwa perpaduan desain artistik dan estetika visual mampu menciptakan komunitas kolektor yang sangat loyal di seluruh dunia.',
        ],

        // Kategori Teknologi (tag: newsteknologi)
        [
            'id' => 4,
            'slug' => 'review-smartphone-flagship-2026',
            'title' => 'Review Smartphone Flagship 2026: Lompatan Performa AI, Layar 144Hz & Kamera Zoom Periskop',
            'date' => '11 Nov 2026',
            'read_time' => '6 Menit Baca',
            'category_name' => 'Teknologi',
            'tag' => 'newsteknologi',
            'category_url' => 'https://toyspixels.com/newsteknologi',
            'image' => 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=600&auto=format&fit=crop&q=80',
            'summary' => 'Ulasan mendalam performa chipset fabrikasi 3nm, integrasi kecerdasan buatan on-device, dan ketahanan baterai untuk komputasi harian intensif.',
            'content' => 'Generasi ponsel pintar terbaru membawa perubahan signifikan melalui efisiensi daya chipset fabrikasi 3nm dan kapabilitas AI generatif yang tertanam langsung pada sistem. Kualitas fotografi malam hari semakin tajam berkat sensor periskop generasi baru dengan stabilisasi OIS multi-sumbu. Selain itu, kecepatan refresh rate adaptif 1-144Hz memastikan pengalaman navigasi yang luar biasa mulus tanpa mengorbankan daya baterai 5000mAh.',
        ],
        [
            'id' => 5,
            'slug' => '5-rekomendasi-laptop-produktivitas',
            'title' => '5 Rekomendasi Laptop Produktivitas di Bawah 10 Juta: Awet, Ringan, dan Anti-Lemot',
            'date' => '09 Nov 2026',
            'read_time' => '5 Menit Baca',
            'category_name' => 'Teknologi',
            'tag' => 'newsteknologi',
            'category_url' => 'https://toyspixels.com/newsteknologi',
            'image' => 'https://images.unsplash.com/photo-1496181133206-80ce9b88a853?w=600&auto=format&fit=crop&q=80',
            'summary' => 'Pilihan laptop terbaik untuk mahasiswa dan pekerja remote dengan SSD NVMe cepat, layar IPS akurat, dan ketahanan baterai hingga 12 jam.',
            'content' => 'Mencari laptop yang andal untuk kebutuhan multitasking, pengerjaan dokumen, browsing ratusan tab, dan video conference tidak lagi harus merogoh kocek terlalu dalam. Laptop di kisaran harga 7 hingga 9 jutaan saat ini sudah dibekali prosesor multi-core hemat daya, RAM 16GB dual-channel, serta storage SSD PCIe Gen 4 yang responsif. Bobotnya yang di bawah 1.4 kg membuatnya sangat praktis untuk mobilitas tinggi di kampus atau kafe.',
        ],
        [
            'id' => 6,
            'slug' => 'panduan-setup-ergonomis-keyboard',
            'title' => 'Panduan Setup Ergonomis & Mechanical Keyboard: Maksimalkan Fokus dan Kenyamanan',
            'date' => '06 Nov 2026',
            'read_time' => '4 Menit Baca',
            'category_name' => 'Teknologi',
            'tag' => 'newsteknologi',
            'category_url' => 'https://toyspixels.com/newsteknologi',
            'image' => 'https://images.unsplash.com/photo-1587829741301-dc798b83add3?w=600&auto=format&fit=crop&q=80',
            'summary' => 'Memilih jenis switch keyboard mekanikal, monitor arm fleksibel, serta mouse vertikal nirkabel guna mencegah ketegangan sendi saat bekerja.',
            'content' => 'Bekerja di depan meja komputer selama berjam-jam memerlukan perangkat yang mendukung postur tubuh secara optimal. Keyboard mekanikal dengan gasket mount dan switch tactile memberikan umpan balik ketikan yang presisi sekaligus mengurangi tekanan pada jari. Dipadukan dengan mouse berbentuk ergonomis dan posisi layar sejajar dengan pandangan mata, setup ini terbukti mampu meminimalkan risiko RSI (Repetitive Strain Injury) dan meningkatkan produktivitas harian.',
        ],
    ];

    public static function all(): Collection
    {
        return collect(self::$articles);
    }

    public static function byTag(string $tag): Collection
    {
        $normalized = strtolower(trim($tag));
        if ($normalized === 'newsmaianan') {
            $normalized = 'newsmainan';
        }

        return self::all()->filter(function ($item) use ($normalized) {
            $itemTag = strtolower($item['tag'] ?? '');

            return $itemTag === $normalized || ($normalized === 'newsmainan' && $itemTag === 'newsmaianan');
        })->values();
    }

    public static function findBySlug(string $slug): ?array
    {
        $normalized = strtolower(trim($slug));

        foreach (self::$articles as $article) {
            if ($article['slug'] === $normalized) {
                return $article;
            }
        }

        return null;
    }
}
