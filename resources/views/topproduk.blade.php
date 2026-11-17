<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Top Produk Terpopuler & Pilihan Terbaik — ToysPixel</title>
    <meta name="description" content="Daftar kurasi top produk mainan, gunpla, gadget, dan action figures terfavorit dengan rating tertinggi pilihan orang tua, anak, dan kolektor.">
    <meta name="keywords" content="Top Produk, Mainan Populer, Rekomendasi Mainan, ToysPixel">
    
    <!-- OpenGraph & Social SEO -->
    <meta property="og:title" content="Top Produk Terpopuler & Pilihan Terbaik — ToysPixel">
    <meta property="og:description" content="Daftar kurasi top produk mainan dan gadget terfavorit pilihan ToysPixel.">
    <meta property="og:image" content="{{ asset('images/brand/logo-landscape.png') }}">
    <meta property="og:type" content="website">
    <link rel="canonical" href="https://toyspixel.com/topproduk">

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
                <span>Portal Resmi: <strong>Daftar Lengkap Top Produk Pilihan</strong></span>
            </div>
            <div class="flex items-center gap-4 text-[11px]">
                <a href="{{ url('/') }}" class="text-[#E3FF73] hover:underline font-bold flex items-center gap-1">
                    <span>← Kembali ke Beranda Utama</span>
                </a>
                <span class="text-slate-400 hidden sm:inline">Official Affiliate Shopee & Tokopedia</span>
            </div>
        </div>
    </div>

    <!-- MAIN NAVIGATION HEADER -->
    <header class="sticky top-0 z-40 bg-[#1677d2] border-b border-white/20 text-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between gap-4">
            
            <!-- Left: Brand Logo Landscape -->
            <a href="{{ url('/') }}" class="flex items-center gap-2 group">
                <div class="bg-white/95 px-3.5 py-1.5 rounded-xl shadow-md border border-white/40 flex items-center group-hover:scale-105 transition-transform">
                    <img src="{{ asset('images/brand/logo-landscape.png') }}" alt="toyspixels.com" class="h-8 sm:h-9 object-contain">
                </div>
            </a>

            <!-- Center: Navigation Links -->
            <nav class="hidden md:flex items-center gap-7 lg:gap-9 text-xs lg:text-sm font-extrabold tracking-wider text-white/90">
                <a href="{{ url('/') }}#hero-section" class="hover:text-[#E3FF73] transition-colors">HOME</a>
                <a href="{{ url('/topproduk') }}" class="text-[#E3FF73] border-b-2 border-[#E3FF73] pb-1 transition-colors">TOP PRODUK</a>
                <a href="{{ url('/') }}#kategori" class="hover:text-[#E3FF73] transition-colors">KATEGORI</a>
                <a href="{{ url('/katalog') }}" class="hover:text-[#E3FF73] transition-colors">KATALOG</a>
                <a href="{{ url('/') }}#news-review" class="hover:text-[#E3FF73] transition-colors">NEWS & REVIEW</a>
                <a href="{{ url('/') }}#faq" class="hover:text-[#E3FF73] transition-colors">FAQ</a>
            </nav>

            <!-- Right: Action Button -->
            <div class="flex items-center gap-3">
                <a href="{{ url('/') }}" class="bg-[#E3FF73] hover:bg-[#d6f556] text-[#0A1628] font-black text-xs sm:text-sm px-5 sm:px-6 py-2.5 rounded-full shadow-md hover:shadow-lg transition-all flex items-center gap-2 uppercase tracking-wide">
                    <span>BERANDA</span>
                    <span>➔</span>
                </a>
            </div>
        </div>
    </header>

    <!-- HERO HEADER -->
    <section class="bg-gradient-to-b from-[#1677d2] via-[#1474d2] to-[#125ea7] text-white py-14 sm:py-20 border-b border-white/20 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/15 border border-white/25 text-[#E3FF73] text-xs font-black tracking-widest uppercase mb-4 backdrop-blur-md">
                TOP PRODUK PILIHAN TERBAIK
            </span>
            <h1 class="text-3xl sm:text-5xl font-extrabold text-white tracking-tight leading-tight">
                Koleksi Lengkap <span class="text-[#E3FF73]">Top Produk</span>
            </h1>
            <p class="text-white/90 text-sm sm:text-base mt-4 max-w-2xl mx-auto leading-relaxed">
                Daftar kurasi mendalam produk terfavorit dengan ulasan komprehensif, spesifikasi lengkap, dan link pembelian resmi terverifikasi.
            </p>
        </div>
    </section>

    <!-- POSTS GRID SECTION -->
    <section class="py-14 sm:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Breadcrumbs -->
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4 mb-8 pb-4 border-b border-slate-200">
                <div class="text-xs text-slate-500 font-bold flex items-center gap-2">
                    <a href="{{ url('/') }}" class="hover:text-[#1677d2]">Beranda</a>
                    <span>/</span>
                    <span class="text-[#0B1A30]">Top Produk</span>
                </div>
                <div class="text-xs font-bold text-slate-500">
                    Menampilkan seluruh post dengan tag <strong>Top Produk</strong>
                </div>
            </div>

            <!-- Product Cards Grid: Bersih tanpa harga coret & tanpa diskon -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-7 sm:gap-8">
                @foreach ($posts as $idx => $post)
                    <article class="bg-white rounded-[2rem] p-5 sm:p-6 border border-slate-200/90 shadow-md hover:shadow-2xl transition-all duration-300 flex flex-col justify-between group">
                        <div>
                            <!-- Header Badges: Umur & Jenis -->
                            <div class="flex items-center justify-between gap-2 mb-4">
                                <div class="flex items-center gap-2">
                                    <span class="text-[11px] font-black px-3 py-1 rounded-full bg-slate-100 text-slate-800 border border-slate-200/50 uppercase tracking-wider">
                                        {{ $post['age'] }}
                                    </span>
                                    <span class="text-[11px] font-black px-3 py-1 rounded-full bg-[#1677d2] text-white uppercase tracking-wider">
                                        {{ $post['type'] }}
                                    </span>
                                </div>
                                <div class="w-8 h-8 rounded-full bg-blue-50 text-[#1677d2] border border-blue-200 flex items-center justify-center font-black text-xs shadow-sm">
                                    #{{ $idx + 1 }}
                                </div>
                            </div>

                            <!-- Thumbnail Image -->
                            <div class="relative w-full h-56 rounded-2xl overflow-hidden bg-slate-900 mb-4 group-hover:shadow-md transition-shadow">
                                <img src="{{ asset($post['thumbnail']) }}" alt="{{ $post['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            </div>

                            <!-- Judul & Keterangan Judul -->
                            <h3 class="font-extrabold text-xl text-[#0B1A30] group-hover:text-[#1677d2] transition-colors leading-snug">
                                <a href="{{ url('/topproduk/' . $post['slug']) }}">
                                    {{ $post['title'] }}
                                </a>
                            </h3>
                            <p class="text-xs sm:text-sm text-slate-600 mt-2 line-clamp-2 leading-relaxed">
                                {{ $post['subtitle'] }}
                            </p>

                            <!-- Harga Bersih (Tanpa harga coret & diskon) -->
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-xl font-black text-[#0B1A30]">
                                    {{ $post['price'] }}
                                </span>
                                <span class="text-xs font-bold text-emerald-600 bg-emerald-50 px-2.5 py-1 rounded-full">
                                    ⭐ {{ $post['rating'] }} ({{ $post['sold'] }})
                                </span>
                            </div>
                        </div>

                        <!-- CTA Button: Masuk ke artikel lengkap -->
                        <div class="mt-6 pt-4 border-t border-slate-100">
                            <a href="{{ url('/topproduk/' . $post['slug']) }}" class="w-full py-3 px-4 rounded-xl bg-[#0B1A30] hover:bg-[#1677d2] text-white text-xs font-extrabold flex items-center justify-center gap-2 transition-all shadow-sm">
                                <span>Lihat Artikel Lengkap</span>
                                <span>➔</span>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>

        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-[#0B1A30] text-slate-300 py-12 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-xs text-slate-400">
            <p>© {{ date('Y') }} ToysPixel. All Rights Reserved. Rekomendasi Mainan dan Gadget Terbaik di Indonesia.</p>
        </div>
    </footer>

</body>
</html>
