<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $post['title'] }} — toyspixels.com</title>
    <meta name="description" content="{{ $post['subtitle'] }}. Review resmi produk, spesifikasi, dan link beli langsung official.">
    <meta name="keywords" content="{{ $post['title'] }}, {{ $post['category_name'] }}, toyspixels, Review Produk">
    
    <!-- OpenGraph & Social SEO -->
    <meta property="og:title" content="{{ $post['title'] }} — toyspixels.com">
    <meta property="og:description" content="{{ $post['subtitle'] }}">
    <meta property="og:image" content="{{ asset($post['image'] ?? $post['thumbnail'] ?? '') }}">
    <meta property="og:type" content="article">
    <link rel="canonical" href="https://toyspixels.com/post/{{ $post['slug'] }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&family=Press+Start+2P&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        pixel: ['"Press Start 2P"', 'monospace'],
                    },
                    colors: {
                        brand: {
                            navy: '#0B1A30',
                            navyLight: '#132847',
                            primary: '#1677d2',
                            primaryHover: '#1264b3',
                            lime: '#E3FF73',
                            cream: '#FAF5EE',
                            warmBeige: '#F6F2E9',
                            shopee: '#EE4D2D',
                            tokped: '#03AC0E',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-[#FAF5EE] text-[#0A1628] font-sans antialiased selection:bg-[#E3FF73] selection:text-[#0A1628]">

    <!-- Top Notice Bar -->
    <div class="bg-[#0B1A30] text-slate-200 text-xs py-2 px-4 border-b border-slate-800">
        <div class="max-w-7xl mx-auto flex flex-wrap items-center justify-between gap-2">
            <div class="flex items-center gap-2">
                <span class="inline-block w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                <span>Artikel Post Resmi: <strong>{{ $post['title'] }}</strong></span>
            </div>
            <div class="flex items-center gap-4 text-[11px]">
                <a href="{{ url('/') }}#all-products" class="text-[#E3FF73] hover:underline font-bold flex items-center gap-1">
                    <span>← Kembali ke Katalog Produk</span>
                </a>
                <span class="text-slate-400 hidden sm:inline">Official Affiliate Marketplace</span>
            </div>
        </div>
    </div>

    <!-- MAIN NAVIGATION HEADER -->
    <header class="sticky top-0 z-40 bg-[#1677d2] border-b border-white/20 text-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between gap-4">
            <!-- Brand Logo -->
            <a href="{{ url('/') }}" class="flex items-center gap-3 group">
                <img src="{{ asset('images/brand/logo-landscape.png') }}" alt="toyspixels.com" class="h-8 sm:h-9 object-contain">
            </a>

            <!-- Navigation Links -->
            <nav class="hidden md:flex items-center gap-8 text-xs font-black tracking-widest text-white/90">
                <a href="{{ url('/') }}" class="hover:text-[#E3FF73] transition-colors">BERANDA</a>
                <a href="https://toyspixels.com/topproduk" class="hover:text-[#E3FF73] transition-colors">TOP PRODUK</a>
                <a href="https://toyspixels.com/semuaproduk" class="text-[#E3FF73] border-b-2 border-[#E3FF73] pb-1 transition-colors">KATALOG LENGKAP</a>
                <a href="{{ url('/') }}#faq" class="hover:text-[#E3FF73] transition-colors">FAQ</a>
            </nav>

            <!-- Back to Home -->
            <div class="flex items-center gap-3">
                <a href="{{ url('/') }}#all-products" class="bg-white/20 hover:bg-white/30 text-white text-xs font-extrabold px-4 py-2 rounded-full transition-all">
                    ← Katalog
                </a>
            </div>
        </div>
    </header>

    <!-- MAIN ARTICLE DETAIL CONTAINER -->
    <main class="py-10 sm:py-14">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Breadcrumbs (Persis referensi post produk.jpg) -->
            <nav class="text-xs text-slate-500 font-semibold flex flex-wrap items-center gap-2 mb-6">
                <a href="{{ url('/') }}" class="hover:text-[#1677d2] transition-colors">Home</a>
                <span class="text-slate-400">&gt;</span>
                <a href="{{ $post['category_url'] }}" class="hover:text-[#1677d2] transition-colors">{{ $post['category_name'] }}</a>
                <span class="text-slate-400">&gt;</span>
                <span class="text-slate-800 font-bold truncate max-w-sm sm:max-w-md">{{ $post['title'] }}</span>
            </nav>

            <!-- ============================================================== -->
            <!-- HEADER PEMBELIAN PRODUK (PERSIS REFERENSI post produk.jpg)      -->
            <!-- Foto besar di atas, foto kecil selanjutnya di bawah            -->
            <!-- ============================================================== -->
            <section class="bg-white rounded-3xl p-6 sm:p-10 shadow-sm border border-slate-100 mb-10">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
                    
                    <!-- KOLOM KIRI: Galeri Foto Produk (Besar di Atas, Thumbnail di Bawah) -->
                    <div class="lg:col-span-6 flex flex-col">
                        @php
                            $gallery = $post['gallery'] ?? [$post['image'] ?? $post['thumbnail'] ?? 'images/toys/ps5/1.webp'];
                            if (!empty($post['image']) && !in_array($post['image'], $gallery)) {
                                array_unshift($gallery, $post['image']);
                            }
                            $gallery = array_values(array_unique(array_filter($gallery)));
                        @endphp

                        <!-- Foto Utama Besar (Di Atas - Bersih Tanpa Overlay Badge) -->
                        <div class="w-full aspect-square rounded-3xl bg-[#F0F2F5] flex items-center justify-center p-6 sm:p-10 relative overflow-hidden group">
                            <img id="mainProductDisplay" 
                                 src="{{ asset($gallery[0] ?? 'images/toys/ps5/1.webp') }}" 
                                 alt="{{ $post['title'] }}" 
                                 class="max-h-full max-w-full object-contain transition-all duration-300 drop-shadow-sm group-hover:scale-105">
                        </div>

                        <!-- Foto Kecil / Thumbnail Selanjutnya (Di Bawah Foto Besar) -->
                        @if(count($gallery) > 1)
                        <div class="flex items-center gap-3 sm:gap-4 mt-4 sm:mt-5 overflow-x-auto pb-1" id="thumbnailGallery">
                            @foreach($gallery as $index => $thumb)
                            <button type="button" 
                                    onclick="switchGalleryImage(this, '{{ asset($thumb) }}')" 
                                    class="gallery-thumbnail-btn w-20 h-20 sm:w-24 sm:h-24 rounded-2xl bg-[#F0F2F5] p-2 flex items-center justify-center border transition-all cursor-pointer shrink-0 {{ $index === 0 ? 'border-slate-900' : 'border-transparent hover:border-slate-300 opacity-70 hover:opacity-100' }}">
                                <img src="{{ asset($thumb) }}" alt="Thumbnail {{ $index + 1 }}" class="max-h-full max-w-full object-contain rounded-lg">
                            </button>
                            @endforeach
                        </div>
                        @endif
                    </div>

                    <!-- KOLOM KANAN: Detail Informasi Pembelian & CTA -->
                    <div class="lg:col-span-6 flex flex-col justify-start">
                        <!-- Badge & Kategori di Atas Judul Produk -->
                        <div class="flex flex-wrap items-center gap-2 mb-3">
                            <span class="bg-[#EE4D2D] text-white text-[11px] font-black uppercase px-2.5 py-1 rounded-md tracking-wider shadow-sm flex items-center gap-1.5">
                                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M19 6h-2c0-2.76-2.24-5-5-5S7 3.24 7 6H5c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm-7-3c1.66 0 3 1.34 3 3H9c0-1.66 1.34-3 3-3zm7 17H5V8h14v12z"/></svg>
                                <span>Shopee Official</span>
                            </span>
                            <span class="bg-[#0B1A30] text-[#E3FF73] text-[11px] font-black uppercase px-2.5 py-1 rounded-md shadow-sm">
                                100% Original
                            </span>
                            <a href="{{ $post['category_url'] }}" class="text-xs font-bold text-[#1677d2] hover:underline uppercase tracking-wider ml-1">
                                {{ $post['category_name'] }}
                            </a>
                        </div>

                        <!-- Judul Produk -->
                        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 tracking-tight leading-tight">
                            {{ $post['title'] }}
                        </h1>

                        <!-- Rating Bintang & Review Count (Persis post produk.jpg) -->
                        <div class="flex items-center gap-2 mt-3.5 text-sm">
                            <div class="flex items-center text-amber-400 gap-0.5 text-base">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                            <span class="font-extrabold text-slate-900">{{ $post['rating'] ?? '4.9' }}</span>
                            <span class="text-slate-500 font-medium">Based on <span class="text-slate-800 underline decoration-slate-300 font-semibold">{{ $post['sold'] ?? '1,1RB' }} Penilaian</span></span>
                        </div>

                        <!-- Harga & Badge Diskon (Persis post produk.jpg) -->
                        <div class="mt-5">
                            <div class="text-slate-400 line-through text-sm sm:text-base font-semibold">
                                {{ $post['original_price'] ?? 'Rp 17.800.000' }}
                            </div>
                            <div class="flex flex-wrap items-center gap-3 mt-1">
                                <span class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight">
                                    {{ str_starts_with($post['price'], 'Rp') ? $post['price'] : 'Rp ' . $post['price'] }}
                                </span>
                                <span class="inline-flex items-center px-3 py-1 rounded-md bg-[#EEF4FF] text-[#1677d2] font-black text-xs tracking-wider uppercase border border-blue-200">
                                    {{ $post['discount_badge'] ?? 'SAVE 18% | GARANSI RESMI' }}
                                </span>
                            </div>
                        </div>

                        <!-- Deskripsi / Summary Singkat -->
                        <p class="mt-4 text-slate-600 text-sm sm:text-base leading-relaxed font-normal">
                            {{ $post['summary'] ?? $post['subtitle'] }}
                        </p>

                        <!-- 3 Trust Badges (Secure Checkout, Free Fast Shipping, Garansi Resmi 1 Tahun) -->
                        <div class="grid grid-cols-3 gap-2 sm:gap-4 my-6 py-4 border-t border-b border-slate-100 text-slate-700">
                            <!-- Secure Checkout -->
                            <div class="flex items-center gap-2 sm:gap-2.5">
                                <div class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center shrink-0 text-slate-700">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                    </svg>
                                </div>
                                <div class="text-[11px] sm:text-xs font-bold leading-tight">
                                    Secure<br class="hidden sm:inline"> Checkout
                                </div>
                            </div>

                            <!-- Free Fast Shipping -->
                            <div class="flex items-center gap-2 sm:gap-2.5">
                                <div class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center shrink-0 text-slate-700">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"/>
                                    </svg>
                                </div>
                                <div class="text-[11px] sm:text-xs font-bold leading-tight">
                                    Free Fast<br class="hidden sm:inline"> Shipping
                                </div>
                            </div>

                            <!-- Official Warranty -->
                            <div class="flex items-center gap-2 sm:gap-2.5">
                                <div class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center shrink-0 text-slate-700">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                    </svg>
                                </div>
                                <div class="text-[11px] sm:text-xs font-bold leading-tight">
                                    Garansi Resmi<br class="hidden sm:inline"> 1 Tahun
                                </div>
                            </div>
                        </div>

                        <!-- Tombol Pembelian: Cuma 1 Link Tombol Beli Langsung -->
                        <div class="mt-2">
                            <a href="{{ $post['affiliate_url'] }}" target="_blank" rel="noopener nofollow" 
                               class="w-full py-4 px-6 rounded-2xl bg-[#0C4A85] hover:bg-[#093967] text-white font-extrabold text-sm sm:text-base tracking-wide text-center flex items-center justify-center gap-2 shadow-[0_6px_20px_rgba(12,74,133,0.25)] hover:shadow-[0_8px_25px_rgba(12,74,133,0.35)] hover:-translate-y-0.5 active:translate-y-0 transition-all group">
                                <span>Beli Langsung di Shopee</span>
                                <span class="group-hover:translate-x-1 transition-transform text-lg">➔</span>
                            </a>
                        </div>

                        <!-- Tags Produk -->
                        <div class="mt-5 pt-4 border-t border-slate-100 flex flex-wrap items-center gap-1.5">
                            <span class="text-xs font-bold text-slate-400 mr-1">Tags:</span>
                            @php
                                $tagsList = is_array($post['tags'] ?? null) ? $post['tags'] : array_map('trim', explode(',', $post['tags'] ?? 'topproduk'));
                            @endphp
                            @foreach($tagsList as $tag)
                            <span class="px-2.5 py-0.5 rounded-full bg-slate-100 text-slate-600 text-[11px] font-bold border border-slate-200/80">
                                #{{ $tag }}
                            </span>
                            @endforeach
                        </div>

                        @if(!in_array($post['slug'] ?? '', ['post-1', 'post1']))
                        <!-- Spesifikasi Ringkas untuk Produk Lainnya (Post 1 sudah dihilangkan) -->
                        <div class="mt-6 pt-5 border-t border-slate-100 text-xs font-mono space-y-2 text-slate-600">
                            <div class="flex items-start justify-between border-b border-slate-100 pb-1.5">
                                <span class="text-slate-400 font-bold uppercase text-[10px]">Kategori:</span>
                                <a href="{{ $post['category_url'] }}" class="text-[#1677d2] hover:underline font-extrabold text-right">{{ $post['category_name'] }}</a>
                            </div>
                            <div class="flex items-start justify-between border-b border-slate-100 pb-1.5">
                                <span class="text-slate-400 font-bold uppercase text-[10px]">Judul:</span>
                                <span class="text-slate-900 font-bold text-right max-w-xs truncate">{{ $post['title'] }}</span>
                            </div>
                            <div class="flex items-start justify-between border-b border-slate-100 pb-1.5">
                                <span class="text-slate-400 font-bold uppercase text-[10px]">Keterangan Judul:</span>
                                <span class="text-slate-700 font-medium text-right max-w-xs line-clamp-1 font-sans">{{ $post['subtitle'] }}</span>
                            </div>
                            <div class="flex items-start justify-between border-b border-slate-100 pb-1.5">
                                <span class="text-slate-400 font-bold uppercase text-[10px]">Harga:</span>
                                <span class="text-slate-900 font-black text-sm text-right">{{ str_starts_with($post['price'], 'Rp') ? $post['price'] : 'Rp ' . $post['price'] }}</span>
                            </div>
                            <div class="flex items-start justify-between border-b border-slate-100 pb-1.5">
                                <span class="text-slate-400 font-bold uppercase text-[10px]">Beli Langsung:</span>
                                <a href="{{ $post['affiliate_url'] }}" target="_blank" rel="noopener nofollow" class="text-[#1677d2] hover:underline font-semibold truncate max-w-[200px] sm:max-w-xs text-right">
                                    {{ $post['affiliate_url'] }}
                                </a>
                            </div>
                        </div>
                        @endif

                    </div>
                </div>
            </section>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- ============================================================== -->
            <!-- DESKRIPSI & SPESIFIKASI LENGKAP PRODUK                          -->
            <!-- ============================================================== -->
            <article class="bg-white rounded-3xl p-6 sm:p-10 border border-slate-200/90 shadow-sm">
                <div class="border-b border-slate-200 pb-4 mb-6">
                    <h2 class="text-xl sm:text-2xl font-black text-[#0B1A30] tracking-tight">
                        Deskripsi &amp; Informasi Lengkap Produk
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-500 mt-1 font-medium">
                        Ulasan resmi, panduan garansi, kelengkapan unit fullset, serta daftar bonus game.
                    </p>
                </div>

                <!-- Article Content -->
                <div class="prose prose-slate max-w-none text-slate-700 leading-relaxed text-sm sm:text-base space-y-4">
                    <div class="text-slate-700 leading-relaxed space-y-4">
                        {!! $post['content'] !!}
                    </div>
                </div>

                @if(($post['slug'] ?? '') !== 'post-1' && ($post['id'] ?? null) != 1)
                <!-- Bottom Action Buttons for other posts -->
                <div class="mt-10 pt-6 border-t border-slate-200 flex flex-col sm:flex-row items-center justify-between gap-4">
                    <a href="{{ $post['affiliate_url'] }}" target="_blank" rel="noopener nofollow" class="w-full sm:w-auto px-7 py-3.5 rounded-full bg-[#EE4D2D] hover:bg-[#d83f21] text-white font-black text-xs sm:text-sm shadow-md transition-all text-center flex items-center justify-center gap-2">
                        <span>Beli Langsung di Shopee Official</span>
                        <span>➔</span>
                    </a>
                    <div class="flex items-center gap-2 w-full sm:w-auto">
                        <a href="{{ url('/') }}" class="w-1/2 sm:w-auto px-5 py-3 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-extrabold text-xs text-center transition-colors">
                            ← Beranda
                        </a>
                        <a href="https://toyspixels.com/semuaproduk" class="w-1/2 sm:w-auto px-5 py-3 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-extrabold text-xs text-center transition-colors">
                            Semua Produk →
                        </a>
                    </div>
                </div>
                @endif
            </article>

            <!-- RELATED PRODUCTS SECTION -->
            @if(isset($relatedPosts) && count($relatedPosts) > 0)
            <section class="mt-12">
                <h3 class="text-xl font-black text-[#0B1A30] mb-6">
                    Produk Rekomendasi Terkait
                </h3>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                    @foreach($relatedPosts as $rel)
                    <div class="bg-white rounded-2xl p-4 border border-slate-200/90 shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
                        <div>
                            <div class="aspect-square rounded-xl bg-slate-50 border border-slate-100 p-3 mb-3 flex items-center justify-center">
                                <img src="{{ asset($rel['image']) }}" alt="{{ $rel['title'] }}" class="w-full h-full object-contain rounded-lg">
                            </div>
                            <span class="text-[10px] font-black text-[#1677d2] uppercase">{{ $rel['category_name'] }}</span>
                            <h4 class="font-extrabold text-sm text-[#0B1A30] mt-1 line-clamp-1">{{ $rel['title'] }}</h4>
                            <p class="text-xs text-slate-500 mt-1 line-clamp-1">{{ $rel['subtitle'] }}</p>
                        </div>
                        <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between">
                            <span class="font-black text-sm text-[#0B1A30]">Rp {{ $rel['price'] }}</span>
                            <a href="{{ url('/post/' . $rel['slug']) }}" class="text-xs font-extrabold text-[#1677d2] hover:underline">
                                Cek Detail ➔
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>
            @endif

        </div>
    </main>

    <!-- FOOTER (TAHAP 7 STYLE) -->
    <footer class="bg-[#0B1A30] text-slate-300 pt-12 pb-8 border-t border-slate-800 mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8 pb-8 border-b border-slate-800 text-xs">
                <div class="md:col-span-2">
                    <img src="{{ asset('images/brand/logo-landscape.png') }}" alt="toyspixels.com" class="h-8 object-contain mb-3">
                    <p class="text-slate-400 leading-relaxed max-w-md">
                        <strong>toyspixels.com</strong> — Smart Picks. More Fun. Portal kurasi dan ulasan mainan, action figures, diecast, serta gadget pilihan terpercaya di Indonesia dengan penawaran resmi marketplace.
                    </p>
                </div>
                <div>
                    <h4 class="font-extrabold text-white uppercase tracking-wider mb-3">Navigasi Utama</h4>
                    <ul class="space-y-2 text-slate-400">
                        <li><a href="{{ url('/') }}" class="hover:text-[#E3FF73] transition-colors">Beranda</a></li>
                        <li><a href="https://toyspixels.com/topproduk" class="hover:text-[#E3FF73] transition-colors">Top Produk</a></li>
                        <li><a href="https://toyspixels.com/semuaproduk" class="hover:text-[#E3FF73] transition-colors">Katalog Lengkap</a></li>
                        <li><a href="{{ url('/') }}#faq" class="hover:text-[#E3FF73] transition-colors">FAQ</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-extrabold text-white uppercase tracking-wider mb-3">Kategori Resmi</h4>
                    <ul class="space-y-2 text-slate-400">
                        <li><a href="https://toyspixels.com/kidstoys" class="hover:text-[#E3FF73] transition-colors">Kids & Educational Toys</a></li>
                        <li><a href="https://toyspixels.com/collectibles" class="hover:text-[#E3FF73] transition-colors">Collectibles & Hobbies</a></li>
                        <li><a href="https://toyspixels.com/gamingentertainment" class="hover:text-[#E3FF73] transition-colors">Gaming & Entertainment</a></li>
                        <li><a href="https://toyspixels.com/gadgetswearables" class="hover:text-[#E3FF73] transition-colors">Gadgets & Wearables</a></li>
                    </ul>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row items-center justify-between gap-4 text-[11px] text-slate-400">
                <p>© {{ date('Y') }} toyspixels.com. Hak cipta dilindungi undang-undang.</p>
                <p>Link afiliasi resmi marketplace: Pembelian melalui link ini mendukung kurasi toyspixels.com.</p>
            </div>
        </div>
    </footer>

    <!-- Script Galeri Interaktif (Persis post produk.jpg) -->
    <script>
        function switchGalleryImage(btn, src) {
            const mainImg = document.getElementById('mainProductDisplay');
            if (!mainImg) return;

            // Efek transisi halus (fade & slight scale)
            mainImg.style.opacity = '0.3';
            mainImg.style.transform = 'scale(0.96)';

            setTimeout(() => {
                mainImg.src = src;
                mainImg.style.opacity = '1';
                mainImg.style.transform = 'scale(1)';
            }, 120);

            // Update border aktif pada thumbnail
            document.querySelectorAll('.gallery-thumbnail-btn').forEach(el => {
                el.classList.remove('border-slate-900');
                el.classList.add('border-transparent', 'opacity-70');
            });

            btn.classList.remove('border-transparent', 'opacity-70');
            btn.classList.add('border-slate-900');
        }
    </script>

</body>
</html>
