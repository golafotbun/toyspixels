<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mainan Paling Populer & Banyak Dibeli — ToysPixel</title>
    <meta name="description" content="Koleksi kurasi mainan paling populer dan paling banyak dibeli dengan rating tertinggi pilihan orang tua, anak, dan kolektor di Indonesia. Beli dengan diskon resmi di Shopee & Tokopedia.">
    <meta name="keywords" content="Top Toys, Mainan Paling Populer, Mainan Paling Banyak Dibeli, Gundam, Tamiya, Lego, Labubu, Hot Wheels, PlayStation, Beyblade, Pokemon TCG, ToysPixel">
    
    <!-- OpenGraph & Social SEO -->
    <meta property="og:title" content="Mainan Paling Populer & Banyak Dibeli — ToysPixel">
    <meta property="og:description" content="Daftar mainan favorit dan terlaris dengan rating tertinggi pilihan orang tua, anak, dan kolektor bulan ini.">
    <meta property="og:image" content="{{ asset('images/toys/gundam.jpg') }}">
    <meta property="og:type" content="website">
    <link rel="canonical" href="https://toyspixels.com/topproduk">

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
                <span>Halaman Kurasi Khusus: <strong>Mainan Terlaris & Paling Banyak Dibeli</strong> dengan Garansi Asli</span>
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
            
            <!-- Left: Brand Logo Landscape inside white pill capsule -->
            <a href="{{ url('/') }}" class="flex items-center gap-2 group">
                <div class="bg-white/95 px-3.5 py-1.5 rounded-xl shadow-md border border-white/40 flex items-center group-hover:scale-105 transition-transform">
                    <img src="{{ asset('images/brand/logo-landscape.png') }}" alt="toyspixels.com" class="h-8 sm:h-9 object-contain">
                </div>
            </a>

            <!-- Center: Navigation Links -->
            <nav class="hidden md:flex items-center gap-7 lg:gap-9 text-xs lg:text-sm font-extrabold tracking-wider text-white/90">
                <a href="{{ url('/') }}#hero-section" class="hover:text-[#E3FF73] transition-colors">HOME</a>
                <a href="https://toyspixels.com/topproduk" class="text-[#E3FF73] border-b-2 border-[#E3FF73] pb-1 transition-colors">TOP PRODUK</a>
                <a href="{{ url('/') }}#kategori" class="hover:text-[#E3FF73] transition-colors">KATEGORI</a>
                <a href="{{ url('/') }}#all-products" class="hover:text-[#E3FF73] transition-colors">SEMUA PRODUK</a>
                <a href="{{ url('/') }}#news-review" class="hover:text-[#E3FF73] transition-colors">NEWS & REVIEW</a>
                <a href="{{ url('/') }}#faq" class="hover:text-[#E3FF73] transition-colors">FAQ</a>
            </nav>

            <!-- Right: Neon Action Button -->
            <div class="flex items-center gap-3">
                <a href="#koleksi-grid" class="bg-[#E3FF73] hover:bg-[#d6f556] text-[#0A1628] font-black text-xs sm:text-sm px-5 sm:px-6 py-2.5 rounded-full shadow-[0_4px_18px_rgba(227,255,115,0.45)] hover:shadow-[0_6px_22px_rgba(227,255,115,0.65)] hover:-translate-y-0.5 active:translate-y-0 transition-all flex items-center gap-2 tracking-wide uppercase">
                    <span>EXPLORE TOYS</span>
                    <span class="text-sm font-black">↓</span>
                </a>
                
                <!-- Mobile Menu Button -->
                <button onclick="toggleNavDrawer()" aria-label="Toggle Menu" class="md:hidden flex items-center justify-center w-10 h-10 rounded-full bg-white/20 hover:bg-white/30 text-white border border-white/30 backdrop-blur-md active:scale-95 transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Drawer -->
        <div id="navMenuDrawer" class="hidden md:hidden border-t border-white/20 bg-[#1264b3]/98 backdrop-blur-xl px-4 py-4 transition-all">
            <div class="max-w-7xl mx-auto flex flex-col gap-2.5 text-xs sm:text-sm font-extrabold text-white">
                <a href="{{ url('/') }}#hero-section" class="py-1.5 hover:text-[#E3FF73] flex items-center gap-2">
                    <span>🏠</span> HOME
                </a>
                <a href="{{ url('/top-toys') }}" class="py-1.5 text-[#E3FF73] flex items-center gap-2">
                    <span>🔥</span> TOP TOYS (Aktif)
                </a>
                <a href="{{ url('/') }}#kategori" class="py-1.5 hover:text-[#E3FF73] flex items-center gap-2">
                    <span>🧩</span> KATEGORI PRODUK
                </a>
                <a href="{{ url('/') }}#all-products" class="py-1.5 hover:text-[#E3FF73] flex items-center gap-2">
                    <span>📦</span> SEMUA PRODUK
                </a>
                <a href="{{ url('/') }}#news-review" class="py-1.5 hover:text-[#E3FF73] flex items-center gap-2">
                    <span>📰</span> NEWS & REVIEW
                </a>
                <a href="{{ url('/') }}#faq" class="py-1.5 hover:text-[#E3FF73] flex items-center gap-2">
                    <span>❓</span> FAQ
                </a>
            </div>
        </div>
    </header>

    <!-- HERO INTRO BANNER -->
    <section class="relative overflow-hidden bg-gradient-to-b from-[#1474d2] via-[#2083e6] to-[#FAF5EE] pt-12 pb-16 sm:pb-20 px-4 sm:px-6 lg:px-8 text-white">
        <!-- Glow Overlay -->
        <div class="absolute top-0 right-1/4 w-96 h-96 bg-white/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-10 left-1/4 w-80 h-80 bg-[#E3FF73]/15 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto relative z-10">
            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-2 text-xs sm:text-sm font-semibold text-white/80 mb-6">
                <a href="{{ url('/') }}" class="hover:text-[#E3FF73] transition-colors flex items-center gap-1">
                    <span>🏠</span> Beranda
                </a>
                <span>›</span>
                <span class="text-[#E3FF73] font-bold">Top Toys Terlaris & Paling Banyak Dibeli</span>
            </nav>

            <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-8">
                <div class="max-w-3xl">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/15 border border-white/25 text-[#E3FF73] text-xs font-black tracking-wider uppercase mb-4 backdrop-blur-md">
                        <span>🔥 KURASI RESMI EDISI TERBARU</span>
                    </div>
                    <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-[1.15] text-white drop-shadow-md">
                        Mainan Paling Populer &<br>
                        <span class="text-[#E3FF73]">Paling Banyak Dibeli</span>
                    </h1>
                    <p class="mt-4 text-base sm:text-lg text-white/90 leading-relaxed font-medium max-w-2xl">
                        Daftar mainan favorit dan terlaris dengan rating tertinggi pilihan orang tua, anak, dan kolektor bulan ini. Lengkap dengan spesifikasi, review terpercaya, dan link pembelian berdiskon langsung dari <strong>Shopee</strong> dan <strong>Tokopedia</strong>.
                    </p>

                    <!-- Key highlights stats -->
                    <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 sm:gap-4 max-w-2xl">
                        <div class="bg-white/15 backdrop-blur-md rounded-2xl p-3 sm:p-4 border border-white/20">
                            <span class="text-xl sm:text-2xl font-black text-[#E3FF73] block">12+</span>
                            <span class="text-[11px] sm:text-xs font-semibold text-white/90">Mainan Kurasi Teratas</span>
                        </div>
                        <div class="bg-white/15 backdrop-blur-md rounded-2xl p-3 sm:p-4 border border-white/20">
                            <span class="text-xl sm:text-2xl font-black text-[#E3FF73] block">★ 4.9+</span>
                            <span class="text-[11px] sm:text-xs font-semibold text-white/90">Rating Rata-Rata</span>
                        </div>
                        <div class="bg-white/15 backdrop-blur-md rounded-2xl p-3 sm:p-4 border border-white/20">
                            <span class="text-xl sm:text-2xl font-black text-[#E3FF73] block">s/d 30%</span>
                            <span class="text-[11px] sm:text-xs font-semibold text-white/90">Promo Diskon Resmi</span>
                        </div>
                        <div class="bg-white/15 backdrop-blur-md rounded-2xl p-3 sm:p-4 border border-white/20">
                            <span class="text-xl sm:text-2xl font-black text-[#E3FF73] block">100%</span>
                            <span class="text-[11px] sm:text-xs font-semibold text-white/90">Produk Original</span>
                        </div>
                    </div>
                </div>

                <!-- Right visual preview card -->
                <div class="hidden lg:block shrink-0 w-80">
                    <div class="bg-[#0B1A30]/90 backdrop-blur-xl rounded-3xl p-5 border-2 border-white/25 shadow-2xl text-white">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-xs font-black px-2.5 py-1 rounded-full bg-[#E3FF73] text-[#0A1628] uppercase">#1 REKOMENDASI</span>
                            <span class="text-xs font-bold text-amber-300">★ 4.9 (2.8rb+)</span>
                        </div>
                        <div class="w-full h-44 rounded-2xl overflow-hidden bg-slate-900 mb-3 relative">
                            <img src="{{ asset('images/toys/gundam.jpg') }}" alt="Gundam Barbatos" class="w-full h-full object-cover">
                            <div class="absolute bottom-2 left-2 bg-black/70 px-2 py-0.5 rounded text-[10px] font-bold">Bandai MG 1/100</div>
                        </div>
                        <div class="text-base font-extrabold text-white">Gundam Barbatos MG</div>
                        <div class="text-xs text-slate-300 line-clamp-1 mt-0.5">Inner frame mekanik presisi tinggi</div>
                        <div class="mt-3 flex items-baseline justify-between">
                            <div>
                                <span class="text-xs text-slate-400 line-through">Rp 450.000</span>
                                <span class="text-lg font-black text-[#E3FF73] ml-1">Rp 329.000</span>
                            </div>
                            <span class="text-[10px] font-bold bg-red-500/80 px-2 py-0.5 rounded-full">-27%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FILTER & SEARCH BAR SECTION -->
    <section id="koleksi-grid" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-6 sm:-mt-8 relative z-20">
        <div class="bg-white rounded-3xl p-4 sm:p-6 shadow-xl border border-slate-200/80">
            <div class="flex flex-col lg:flex-row items-stretch lg:items-center justify-between gap-4">
                
                <!-- Search Input -->
                <div class="relative flex-1">
                    <svg class="w-5 h-5 absolute left-4 top-1/2 -translate-y-1/2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <input id="toySearchInput" type="text" placeholder="Cari nama mainan, kategori, atau tipe..." class="w-full pl-12 pr-4 py-3 rounded-2xl bg-slate-50 border border-slate-200 text-sm font-semibold text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-[#1677d2] focus:bg-white transition-all">
                </div>

                <!-- Sort Dropdown -->
                <div class="flex items-center gap-3 shrink-0">
                    <span class="text-xs font-bold text-slate-500 hidden sm:inline">Urutkan:</span>
                    <select id="toySortSelect" class="py-3 px-4 rounded-2xl bg-slate-50 border border-slate-200 text-xs sm:text-sm font-bold text-slate-800 focus:outline-none focus:ring-2 focus:ring-[#1677d2]">
                        <option value="popular">Terpopuler & Paling Laris</option>
                        <option value="rating">Rating Tertinggi (★ 5.0)</option>
                        <option value="price-asc">Harga Terendah</option>
                        <option value="price-desc">Harga Tertinggi</option>
                        <option value="discount">Diskon Terbesar</option>
                    </select>
                </div>
            </div>

            <!-- Category Filter Pills -->
            <div class="mt-4 pt-4 border-t border-slate-100 flex items-center gap-2 overflow-x-auto pb-1 scrollbar-none" id="categoryFilterContainer">
                <button onclick="filterCategory('all', this)" class="category-pill active px-4 py-2 rounded-full text-xs font-extrabold transition-all whitespace-nowrap bg-[#1677d2] text-white shadow-md">
                    Semua Top Toys (12)
                </button>
                <button onclick="filterCategory('gunpla', this)" class="category-pill px-4 py-2 rounded-full text-xs font-extrabold transition-all whitespace-nowrap bg-slate-100 text-slate-700 hover:bg-slate-200">
                    🤖 Gunpla & Mecha
                </button>
                <button onclick="filterCategory('tamiya', this)" class="category-pill px-4 py-2 rounded-full text-xs font-extrabold transition-all whitespace-nowrap bg-slate-100 text-slate-700 hover:bg-slate-200">
                    🏎️ Mini 4WD & Balap
                </button>
                <button onclick="filterCategory('gaming', this)" class="category-pill px-4 py-2 rounded-full text-xs font-extrabold transition-all whitespace-nowrap bg-slate-100 text-slate-700 hover:bg-slate-200">
                    🎮 Konsol & Gadget
                </button>
                <button onclick="filterCategory('art-toys', this)" class="category-pill px-4 py-2 rounded-full text-xs font-extrabold transition-all whitespace-nowrap bg-slate-100 text-slate-700 hover:bg-slate-200">
                    🧸 Art Toys & Hype
                </button>
                <button onclick="filterCategory('diecast', this)" class="category-pill px-4 py-2 rounded-full text-xs font-extrabold transition-all whitespace-nowrap bg-slate-100 text-slate-700 hover:bg-slate-200">
                    🚗 Diecast & Mobil
                </button>
                <button onclick="filterCategory('lego', this)" class="category-pill px-4 py-2 rounded-full text-xs font-extrabold transition-all whitespace-nowrap bg-slate-100 text-slate-700 hover:bg-slate-200">
                    🧱 LEGO & Rakitan
                </button>
                <button onclick="filterCategory('battle', this)" class="category-pill px-4 py-2 rounded-full text-xs font-extrabold transition-all whitespace-nowrap bg-slate-100 text-slate-700 hover:bg-slate-200">
                    ⚔️ Beyblade & TCG
                </button>
            </div>
        </div>
    </section>

    <!-- TOYS GRID SHOWCASE -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="flex items-center justify-between mb-8">
            <div>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-[#0A1628]">Daftar Mainan Pilihan Teratas</h2>
                <p class="text-xs sm:text-sm text-slate-500 font-medium mt-1">Menampilkan produk dengan rating tertinggi dan penjualan terlaris</p>
            </div>
            <span id="toyCountBadge" class="text-xs font-extrabold px-3 py-1.5 rounded-full bg-blue-50 text-[#1677d2] border border-blue-200">
                12 Mainan Ditampilkan
            </span>
        </div>

        <!-- The Responsive Grid: 1 col on mobile, 2 on sm, 3 on lg, 4 on xl -->
        <div id="toysGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">

            <!-- PRODUCT 1: Gundam Barbatos MG -->
            <div class="toy-card bg-white rounded-[2rem] p-5 border border-slate-200/90 shadow-md hover:shadow-2xl transition-all duration-300 flex flex-col justify-between group hover:-translate-y-1"
                data-category="gunpla"
                data-name="Gundam Barbatos MG 1/100 Bandai"
                data-price="329000"
                data-rating="4.9"
                data-discount="27">
                <div>
                    <!-- Badges -->
                    <div class="flex items-center justify-between gap-2 mb-3">
                        <span class="text-[10px] font-black px-2.5 py-1 rounded-full bg-[#E3FF73] text-[#0A1628] uppercase tracking-wider">
                            #1 Gunpla Terlaris
                        </span>
                        <span class="text-xs font-bold text-amber-500 bg-amber-50 px-2 py-0.5 rounded-full border border-amber-200">
                            ★ 4.9 (2.8rb+)
                        </span>
                    </div>

                    <!-- Image -->
                    <div class="relative w-full h-56 rounded-2xl overflow-hidden bg-slate-950 mb-4">
                        <img src="{{ asset('images/toys/gundam.jpg') }}" alt="Gundam Barbatos MG" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2 left-2 bg-slate-900/80 backdrop-blur-sm text-white text-[9px] font-bold px-2 py-0.5 rounded-full">14+ Tahun</span>
                        <span class="absolute top-2 right-2 bg-red-600 text-white text-[10px] font-black px-2 py-0.5 rounded-full">-27%</span>
                    </div>

                    <!-- Title & Details -->
                    <h3 class="font-extrabold text-lg text-slate-900 group-hover:text-[#1677d2] transition-colors leading-snug">
                        Gundam Barbatos MG 1/100
                    </h3>
                    <p class="text-xs text-slate-500 mt-1.5 line-clamp-2 leading-relaxed">
                        Gunpla Master Grade original Bandai Jepang dengan inner frame mekanik presisi, senjata mace & katana, dan artikulasi sendi dinamis.
                    </p>

                    <!-- Pricing -->
                    <div class="mt-4 flex items-baseline gap-2">
                        <span class="text-xs text-slate-400 line-through">Rp 450.000</span>
                        <span class="text-xl font-black text-[#0A1628]">Rp 329.000</span>
                    </div>
                </div>

                <!-- CTA Actions -->
                <div class="mt-5 space-y-2 pt-4 border-t border-slate-100">
                    <button onclick="openTopToyModal('Gundam Barbatos MG 1/100', 'Gunpla / Action Figures', 'Rp 329.000', 'Rp 450.000', '4.9', '2.8rb+', 'Model kit Master Grade skala 1/100 original Bandai Jepang dengan inner frame lengkap, artikulasi sendi dinamis, senjata mace & pedang katana, serta detail panel lining presisi.', '{{ asset('images/toys/gundam.jpg') }}', 'https://shopee.co.id', 'https://tokopedia.com')" class="w-full py-2.5 px-3 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-800 text-xs font-extrabold flex items-center justify-center gap-1.5 transition-colors">
                        <span>🔍 Lihat Detail & Spek</span>
                    </button>
                    <div class="grid grid-cols-2 gap-2">
                        <a href="https://shopee.co.id" target="_blank" rel="noopener nofollow" class="py-2.5 px-2 rounded-xl bg-[#EE4D2D] hover:bg-[#d83f21] text-white text-[11px] font-black text-center transition-all flex items-center justify-center gap-1 shadow-sm">
                            <span>Shopee</span> ➔
                        </a>
                        <a href="https://tokopedia.com" target="_blank" rel="noopener nofollow" class="py-2.5 px-2 rounded-xl bg-[#03AC0E] hover:bg-[#028f0c] text-white text-[11px] font-black text-center transition-all flex items-center justify-center gap-1 shadow-sm">
                            <span>Tokopedia</span> ➔
                        </a>
                    </div>
                </div>
            </div>

            <!-- PRODUCT 2: Tamiya Avante 4WD -->
            <div class="toy-card bg-white rounded-[2rem] p-5 border border-slate-200/90 shadow-md hover:shadow-2xl transition-all duration-300 flex flex-col justify-between group hover:-translate-y-1"
                data-category="tamiya"
                data-name="Tamiya Avante Mini 4WD Speed Racer"
                data-price="289000"
                data-rating="4.9"
                data-discount="24">
                <div>
                    <div class="flex items-center justify-between gap-2 mb-3">
                        <span class="text-[10px] font-black px-2.5 py-1 rounded-full bg-blue-100 text-blue-800 uppercase tracking-wider">
                            #2 Mini 4WD Juara
                        </span>
                        <span class="text-xs font-bold text-amber-500 bg-amber-50 px-2 py-0.5 rounded-full border border-amber-200">
                            ★ 4.9 (3.1rb+)
                        </span>
                    </div>

                    <div class="relative w-full h-56 rounded-2xl overflow-hidden bg-slate-900 mb-4">
                        <img src="{{ asset('images/toys/tamiya.jpg') }}" alt="Tamiya Avante 4WD" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2 left-2 bg-slate-900/80 backdrop-blur-sm text-white text-[9px] font-bold px-2 py-0.5 rounded-full">Usia 8-18 Thn</span>
                        <span class="absolute top-2 right-2 bg-red-600 text-white text-[10px] font-black px-2 py-0.5 rounded-full">-24%</span>
                    </div>

                    <h3 class="font-extrabold text-lg text-slate-900 group-hover:text-[#1677d2] transition-colors leading-snug">
                        Tamiya Avante Mini 4WD
                    </h3>
                    <p class="text-xs text-slate-500 mt-1.5 line-clamp-2 leading-relaxed">
                        Racer Mini 4WD legendaris dengan sasis aerodinamis, gold coilover suspension, dan ban off-road berkecepatan tinggi.
                    </p>

                    <div class="mt-4 flex items-baseline gap-2">
                        <span class="text-xs text-slate-400 line-through">Rp 380.000</span>
                        <span class="text-xl font-black text-[#0A1628]">Rp 289.000</span>
                    </div>
                </div>

                <div class="mt-5 space-y-2 pt-4 border-t border-slate-100">
                    <button onclick="openTopToyModal('Tamiya Mini 4WD Avante 2011', 'Mini 4WD & Racing Kit', 'Rp 289.000', 'Rp 380.000', '4.9', '3.1rb+', 'Kit balap Tamiya original dengan sasis modern berkecepatan tinggi, gold coilover suspension, ban spiked high-grip, dan motor kencang siap tanding di lintasan trek.', '{{ asset('images/toys/tamiya.jpg') }}', 'https://shopee.co.id', 'https://tokopedia.com')" class="w-full py-2.5 px-3 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-800 text-xs font-extrabold flex items-center justify-center gap-1.5 transition-colors">
                        <span>🔍 Lihat Detail & Spek</span>
                    </button>
                    <div class="grid grid-cols-2 gap-2">
                        <a href="https://shopee.co.id" target="_blank" rel="noopener nofollow" class="py-2.5 px-2 rounded-xl bg-[#EE4D2D] hover:bg-[#d83f21] text-white text-[11px] font-black text-center transition-all flex items-center justify-center gap-1 shadow-sm">
                            <span>Shopee</span> ➔
                        </a>
                        <a href="https://tokopedia.com" target="_blank" rel="noopener nofollow" class="py-2.5 px-2 rounded-xl bg-[#03AC0E] hover:bg-[#028f0c] text-white text-[11px] font-black text-center transition-all flex items-center justify-center gap-1 shadow-sm">
                            <span>Tokopedia</span> ➔
                        </a>
                    </div>
                </div>
            </div>

            <!-- PRODUCT 3: PlayStation 5 Slim -->
            <div class="toy-card bg-white rounded-[2rem] p-5 border border-slate-200/90 shadow-md hover:shadow-2xl transition-all duration-300 flex flex-col justify-between group hover:-translate-y-1"
                data-category="gaming"
                data-name="PlayStation 5 Slim Console Sony"
                data-price="7890000"
                data-rating="4.9"
                data-discount="12">
                <div>
                    <div class="flex items-center justify-between gap-2 mb-3">
                        <span class="text-[10px] font-black px-2.5 py-1 rounded-full bg-indigo-100 text-indigo-800 uppercase tracking-wider">
                            #3 Konsol Terfavorit
                        </span>
                        <span class="text-xs font-bold text-amber-500 bg-amber-50 px-2 py-0.5 rounded-full border border-amber-200">
                            ★ 4.9 (1.9rb+)
                        </span>
                    </div>

                    <div class="relative w-full h-56 rounded-2xl overflow-hidden bg-slate-100 mb-4">
                        <img src="{{ asset('images/toys/playstation.jpg') }}" alt="PlayStation 5 Slim" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2 left-2 bg-slate-900/80 backdrop-blur-sm text-white text-[9px] font-bold px-2 py-0.5 rounded-full">Next-Gen 4K</span>
                        <span class="absolute top-2 right-2 bg-red-600 text-white text-[10px] font-black px-2 py-0.5 rounded-full">-12%</span>
                    </div>

                    <h3 class="font-extrabold text-lg text-slate-900 group-hover:text-[#1677d2] transition-colors leading-snug">
                        PlayStation 5 Slim Console
                    </h3>
                    <p class="text-xs text-slate-500 mt-1.5 line-clamp-2 leading-relaxed">
                        Konsol gaming generasi terbaru dengan grafis 4K 120FPS ultra-realistis, SSD 1TB, dan kontroler DualSense haptic feedback.
                    </p>

                    <div class="mt-4 flex items-baseline gap-2">
                        <span class="text-xs text-slate-400 line-through">Rp 8.990.000</span>
                        <span class="text-xl font-black text-[#0A1628]">Rp 7.890.000</span>
                    </div>
                </div>

                <div class="mt-5 space-y-2 pt-4 border-t border-slate-100">
                    <button onclick="openTopToyModal('PlayStation 5 Slim Console', 'Gaming Console & Gadget', 'Rp 7.890.000', 'Rp 8.990.000', '4.9', '1.9rb+', 'Konsol resmi Sony PlayStation 5 Slim edisi terbaru dengan SSD 1TB ultra-fast, ray tracing grafis resolusi 4K, audio 3D Tempest, dan bundle controller nirkabel DualSense original bergaransi resmi.', '{{ asset('images/toys/playstation.jpg') }}', 'https://shopee.co.id', 'https://tokopedia.com')" class="w-full py-2.5 px-3 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-800 text-xs font-extrabold flex items-center justify-center gap-1.5 transition-colors">
                        <span>🔍 Lihat Detail & Spek</span>
                    </button>
                    <div class="grid grid-cols-2 gap-2">
                        <a href="https://shopee.co.id" target="_blank" rel="noopener nofollow" class="py-2.5 px-2 rounded-xl bg-[#EE4D2D] hover:bg-[#d83f21] text-white text-[11px] font-black text-center transition-all flex items-center justify-center gap-1 shadow-sm">
                            <span>Shopee</span> ➔
                        </a>
                        <a href="https://tokopedia.com" target="_blank" rel="noopener nofollow" class="py-2.5 px-2 rounded-xl bg-[#03AC0E] hover:bg-[#028f0c] text-white text-[11px] font-black text-center transition-all flex items-center justify-center gap-1 shadow-sm">
                            <span>Tokopedia</span> ➔
                        </a>
                    </div>
                </div>
            </div>

            <!-- PRODUCT 4: Pop Mart Labubu -->
            <div class="toy-card bg-white rounded-[2rem] p-5 border border-slate-200/90 shadow-md hover:shadow-2xl transition-all duration-300 flex flex-col justify-between group hover:-translate-y-1"
                data-category="art-toys"
                data-name="Pop Mart Labubu Designer Art Toy"
                data-price="189000"
                data-rating="5.0"
                data-discount="24">
                <div>
                    <div class="flex items-center justify-between gap-2 mb-3">
                        <span class="text-[10px] font-black px-2.5 py-1 rounded-full bg-pink-100 text-pink-700 uppercase tracking-wider">
                            #4 Viral Hype No.1
                        </span>
                        <span class="text-xs font-bold text-amber-500 bg-amber-50 px-2 py-0.5 rounded-full border border-amber-200">
                            ★ 5.0 (6.5rb+)
                        </span>
                    </div>

                    <div class="relative w-full h-56 rounded-2xl overflow-hidden bg-slate-950 mb-4">
                        <img src="{{ asset('images/toys/labubu.jpg') }}" alt="Pop Mart Labubu" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2 left-2 bg-pink-600/90 backdrop-blur-sm text-white text-[9px] font-bold px-2 py-0.5 rounded-full">Limited Art Toy</span>
                        <span class="absolute top-2 right-2 bg-red-600 text-white text-[10px] font-black px-2 py-0.5 rounded-full">-24%</span>
                    </div>

                    <h3 class="font-extrabold text-lg text-slate-900 group-hover:text-[#1677d2] transition-colors leading-snug">
                        Pop Mart Labubu Vinyl Toy
                    </h3>
                    <p class="text-xs text-slate-500 mt-1.5 line-clamp-2 leading-relaxed">
                        Boneka vinyl collectible limited edition dari Pop Mart dengan senyum khas mischievous yang viral di seluruh dunia.
                    </p>

                    <div class="mt-4 flex items-baseline gap-2">
                        <span class="text-xs text-slate-400 line-through">Rp 250.000</span>
                        <span class="text-xl font-black text-[#0A1628]">Rp 189.000</span>
                    </div>
                </div>

                <div class="mt-5 space-y-2 pt-4 border-t border-slate-100">
                    <button onclick="openTopToyModal('Pop Mart Labubu Designer Art Toy', 'Designer Toys & Collectibles', 'Rp 189.000', 'Rp 250.000', '5.0', '6.5rb+', 'Figur seni vinyl Pop Mart Labubu edisi terbatas original. Menjadi tren viral global di kalangan selebriti dan kolektor mainan dengan detail cat premium dan packaging autentik ber-barcode resmi.', '{{ asset('images/toys/labubu.jpg') }}', 'https://shopee.co.id', 'https://tokopedia.com')" class="w-full py-2.5 px-3 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-800 text-xs font-extrabold flex items-center justify-center gap-1.5 transition-colors">
                        <span>🔍 Lihat Detail & Spek</span>
                    </button>
                    <div class="grid grid-cols-2 gap-2">
                        <a href="https://shopee.co.id" target="_blank" rel="noopener nofollow" class="py-2.5 px-2 rounded-xl bg-[#EE4D2D] hover:bg-[#d83f21] text-white text-[11px] font-black text-center transition-all flex items-center justify-center gap-1 shadow-sm">
                            <span>Shopee</span> ➔
                        </a>
                        <a href="https://tokopedia.com" target="_blank" rel="noopener nofollow" class="py-2.5 px-2 rounded-xl bg-[#03AC0E] hover:bg-[#028f0c] text-white text-[11px] font-black text-center transition-all flex items-center justify-center gap-1 shadow-sm">
                            <span>Tokopedia</span> ➔
                        </a>
                    </div>
                </div>
            </div>

            <!-- PRODUCT 5: Hot Wheels GT-R R34 -->
            <div class="toy-card bg-white rounded-[2rem] p-5 border border-slate-200/90 shadow-md hover:shadow-2xl transition-all duration-300 flex flex-col justify-between group hover:-translate-y-1"
                data-category="diecast"
                data-name="Hot Wheels Nissan Skyline GT-R R34 Diecast"
                data-price="119000"
                data-rating="4.9"
                data-discount="28">
                <div>
                    <div class="flex items-center justify-between gap-2 mb-3">
                        <span class="text-[10px] font-black px-2.5 py-1 rounded-full bg-orange-100 text-orange-800 uppercase tracking-wider">
                            #5 Diecast Kolektor
                        </span>
                        <span class="text-xs font-bold text-amber-500 bg-amber-50 px-2 py-0.5 rounded-full border border-amber-200">
                            ★ 4.9 (4.8rb+)
                        </span>
                    </div>

                    <div class="relative w-full h-56 rounded-2xl overflow-hidden bg-slate-900 mb-4">
                        <img src="{{ asset('images/toys/hotwheels.jpg') }}" alt="Hot Wheels Skyline GT-R" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2 left-2 bg-slate-900/80 backdrop-blur-sm text-white text-[9px] font-bold px-2 py-0.5 rounded-full">Real Riders Metal</span>
                        <span class="absolute top-2 right-2 bg-red-600 text-white text-[10px] font-black px-2 py-0.5 rounded-full">-28%</span>
                    </div>

                    <h3 class="font-extrabold text-lg text-slate-900 group-hover:text-[#1677d2] transition-colors leading-snug">
                        Hot Wheels GT-R R34 Premium
                    </h3>
                    <p class="text-xs text-slate-500 mt-1.5 line-clamp-2 leading-relaxed">
                        Diecast metal skala 1:64 dengan cat metallic blue premium, velg sport bronze, dan ban karet asli Real Riders.
                    </p>

                    <div class="mt-4 flex items-baseline gap-2">
                        <span class="text-xs text-slate-400 line-through">Rp 165.000</span>
                        <span class="text-xl font-black text-[#0A1628]">Rp 119.000</span>
                    </div>
                </div>

                <div class="mt-5 space-y-2 pt-4 border-t border-slate-100">
                    <button onclick="openTopToyModal('Hot Wheels Premium Skyline GT-R R34', 'Diecast & Kendaraan', 'Rp 119.000', 'Rp 165.000', '4.9', '4.8rb+', 'Hot Wheels Premium Car Culture edisi Nissan Skyline GT-R BNR34 dengan bodi full-metal diecast tebal, velg sport bronze, dan ban karet asli Real Riders.', '{{ asset('images/toys/hotwheels.jpg') }}', 'https://shopee.co.id', 'https://tokopedia.com')" class="w-full py-2.5 px-3 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-800 text-xs font-extrabold flex items-center justify-center gap-1.5 transition-colors">
                        <span>🔍 Lihat Detail & Spek</span>
                    </button>
                    <div class="grid grid-cols-2 gap-2">
                        <a href="https://shopee.co.id" target="_blank" rel="noopener nofollow" class="py-2.5 px-2 rounded-xl bg-[#EE4D2D] hover:bg-[#d83f21] text-white text-[11px] font-black text-center transition-all flex items-center justify-center gap-1 shadow-sm">
                            <span>Shopee</span> ➔
                        </a>
                        <a href="https://tokopedia.com" target="_blank" rel="noopener nofollow" class="py-2.5 px-2 rounded-xl bg-[#03AC0E] hover:bg-[#028f0c] text-white text-[11px] font-black text-center transition-all flex items-center justify-center gap-1 shadow-sm">
                            <span>Tokopedia</span> ➔
                        </a>
                    </div>
                </div>
            </div>

            <!-- PRODUCT 6: LEGO Ferrari F40 -->
            <div class="toy-card bg-white rounded-[2rem] p-5 border border-slate-200/90 shadow-md hover:shadow-2xl transition-all duration-300 flex flex-col justify-between group hover:-translate-y-1"
                data-category="lego"
                data-name="LEGO Speed Champions Ferrari F40 Supercar"
                data-price="349000"
                data-rating="4.9"
                data-discount="22">
                <div>
                    <div class="flex items-center justify-between gap-2 mb-3">
                        <span class="text-[10px] font-black px-2.5 py-1 rounded-full bg-red-100 text-red-800 uppercase tracking-wider">
                            #6 LEGO Supercar
                        </span>
                        <span class="text-xs font-bold text-amber-500 bg-amber-50 px-2 py-0.5 rounded-full border border-amber-200">
                            ★ 4.9 (3.7rb+)
                        </span>
                    </div>

                    <div class="relative w-full h-56 rounded-2xl overflow-hidden bg-slate-100 mb-4">
                        <img src="{{ asset('images/toys/lego.jpg') }}" alt="LEGO Ferrari F40" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2 left-2 bg-slate-900/80 backdrop-blur-sm text-white text-[9px] font-bold px-2 py-0.5 rounded-full">Speed Champions</span>
                        <span class="absolute top-2 right-2 bg-red-600 text-white text-[10px] font-black px-2 py-0.5 rounded-full">-22%</span>
                    </div>

                    <h3 class="font-extrabold text-lg text-slate-900 group-hover:text-[#1677d2] transition-colors leading-snug">
                        LEGO Speed Champions Ferrari
                    </h3>
                    <p class="text-xs text-slate-500 mt-1.5 line-clamp-2 leading-relaxed">
                        Set rakitan supercar balap klasik Ferrari F40 dengan spoiler ikonik, aero diffuser, dan minifigure pengemudi berhelm.
                    </p>

                    <div class="mt-4 flex items-baseline gap-2">
                        <span class="text-xs text-slate-400 line-through">Rp 450.000</span>
                        <span class="text-xl font-black text-[#0A1628]">Rp 349.000</span>
                    </div>
                </div>

                <div class="mt-5 space-y-2 pt-4 border-t border-slate-100">
                    <button onclick="openTopToyModal('LEGO Speed Champions Ferrari F40', 'Building Blocks & LEGO', 'Rp 349.000', 'Rp 450.000', '4.9', '3.7rb+', 'Set balok LEGO Speed Champions original Ferrari F40 Competizione. Menghadirkan detail bodi mobil legendaris warna merah khas Maranello lengkap dengan minifigure pembalap berhelm.', '{{ asset('images/toys/lego.jpg') }}', 'https://shopee.co.id', 'https://tokopedia.com')" class="w-full py-2.5 px-3 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-800 text-xs font-extrabold flex items-center justify-center gap-1.5 transition-colors">
                        <span>🔍 Lihat Detail & Spek</span>
                    </button>
                    <div class="grid grid-cols-2 gap-2">
                        <a href="https://shopee.co.id" target="_blank" rel="noopener nofollow" class="py-2.5 px-2 rounded-xl bg-[#EE4D2D] hover:bg-[#d83f21] text-white text-[11px] font-black text-center transition-all flex items-center justify-center gap-1 shadow-sm">
                            <span>Shopee</span> ➔
                        </a>
                        <a href="https://tokopedia.com" target="_blank" rel="noopener nofollow" class="py-2.5 px-2 rounded-xl bg-[#03AC0E] hover:bg-[#028f0c] text-white text-[11px] font-black text-center transition-all flex items-center justify-center gap-1 shadow-sm">
                            <span>Tokopedia</span> ➔
                        </a>
                    </div>
                </div>
            </div>

            <!-- PRODUCT 7: Beyblade X Burst Stadium -->
            <div class="toy-card bg-white rounded-[2rem] p-5 border border-slate-200/90 shadow-md hover:shadow-2xl transition-all duration-300 flex flex-col justify-between group hover:-translate-y-1"
                data-category="battle"
                data-name="Beyblade X Burst Starter Set Takara Tomy"
                data-price="219000"
                data-rating="5.0"
                data-discount="27">
                <div>
                    <div class="flex items-center justify-between gap-2 mb-3">
                        <span class="text-[10px] font-black px-2.5 py-1 rounded-full bg-emerald-100 text-emerald-800 uppercase tracking-wider">
                            #7 Arena Battle X
                        </span>
                        <span class="text-xs font-bold text-amber-500 bg-amber-50 px-2 py-0.5 rounded-full border border-amber-200">
                            ★ 5.0 (5.2rb+)
                        </span>
                    </div>

                    <div class="relative w-full h-56 rounded-2xl overflow-hidden bg-slate-900 mb-4">
                        <img src="{{ asset('images/toys/beyblade.jpg') }}" alt="Beyblade X Burst" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2 left-2 bg-slate-900/80 backdrop-blur-sm text-white text-[9px] font-bold px-2 py-0.5 rounded-full">Turnamen Resmi</span>
                        <span class="absolute top-2 right-2 bg-red-600 text-white text-[10px] font-black px-2 py-0.5 rounded-full">-27%</span>
                    </div>

                    <h3 class="font-extrabold text-lg text-slate-900 group-hover:text-[#1677d2] transition-colors leading-snug">
                        Beyblade X Burst Starter Set
                    </h3>
                    <p class="text-xs text-slate-500 mt-1.5 line-clamp-2 leading-relaxed">
                        Gasing tempur generasi Xtreme berkecepatan putar ekstrem dengan bilah logam ganda untuk arena pertarungan seru.
                    </p>

                    <div class="mt-4 flex items-baseline gap-2">
                        <span class="text-xs text-slate-400 line-through">Rp 299.000</span>
                        <span class="text-xl font-black text-[#0A1628]">Rp 219.000</span>
                    </div>
                </div>

                <div class="mt-5 space-y-2 pt-4 border-t border-slate-100">
                    <button onclick="openTopToyModal('Beyblade X Burst Starter Set', 'Spinning Tops & Battle Arena', 'Rp 219.000', 'Rp 299.000', '5.0', '5.2rb+', 'Starter pack Beyblade X original Takara Tomy dengan launcher berkecepatan tinggi, metal coat fusion ring, dan performa putaran agresif untuk bertarung di stadium turnamen resmi.', '{{ asset('images/toys/beyblade.jpg') }}', 'https://shopee.co.id', 'https://tokopedia.com')" class="w-full py-2.5 px-3 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-800 text-xs font-extrabold flex items-center justify-center gap-1.5 transition-colors">
                        <span>🔍 Lihat Detail & Spek</span>
                    </button>
                    <div class="grid grid-cols-2 gap-2">
                        <a href="https://shopee.co.id" target="_blank" rel="noopener nofollow" class="py-2.5 px-2 rounded-xl bg-[#EE4D2D] hover:bg-[#d83f21] text-white text-[11px] font-black text-center transition-all flex items-center justify-center gap-1 shadow-sm">
                            <span>Shopee</span> ➔
                        </a>
                        <a href="https://tokopedia.com" target="_blank" rel="noopener nofollow" class="py-2.5 px-2 rounded-xl bg-[#03AC0E] hover:bg-[#028f0c] text-white text-[11px] font-black text-center transition-all flex items-center justify-center gap-1 shadow-sm">
                            <span>Tokopedia</span> ➔
                        </a>
                    </div>
                </div>
            </div>

            <!-- PRODUCT 8: Pokemon TCG Holo -->
            <div class="toy-card bg-white rounded-[2rem] p-5 border border-slate-200/90 shadow-md hover:shadow-2xl transition-all duration-300 flex flex-col justify-between group hover:-translate-y-1"
                data-category="battle"
                data-name="Pokemon TCG Holo Rare Booster Cards"
                data-price="159000"
                data-rating="5.0"
                data-discount="28">
                <div>
                    <div class="flex items-center justify-between gap-2 mb-3">
                        <span class="text-[10px] font-black px-2.5 py-1 rounded-full bg-purple-100 text-purple-800 uppercase tracking-wider">
                            #8 Kartu Holo Langka
                        </span>
                        <span class="text-xs font-bold text-amber-500 bg-amber-50 px-2 py-0.5 rounded-full border border-amber-200">
                            ★ 5.0 (7.1rb+)
                        </span>
                    </div>

                    <div class="relative w-full h-56 rounded-2xl overflow-hidden bg-slate-900 mb-4">
                        <img src="{{ asset('images/toys/pokemon.jpg') }}" alt="Pokemon TCG Booster" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2 left-2 bg-slate-900/80 backdrop-blur-sm text-white text-[9px] font-bold px-2 py-0.5 rounded-full">Holo Foil Rare</span>
                        <span class="absolute top-2 right-2 bg-red-600 text-white text-[10px] font-black px-2 py-0.5 rounded-full">-28%</span>
                    </div>

                    <h3 class="font-extrabold text-lg text-slate-900 group-hover:text-[#1677d2] transition-colors leading-snug">
                        Pokemon TCG Holo Rare Cards
                    </h3>
                    <p class="text-xs text-slate-500 mt-1.5 line-clamp-2 leading-relaxed">
                        Koleksi booster pack kartu original edisi foil holografik langka dengan rating grade tinggi untuk koleksi & turnamen.
                    </p>

                    <div class="mt-4 flex items-baseline gap-2">
                        <span class="text-xs text-slate-400 line-through">Rp 220.000</span>
                        <span class="text-xl font-black text-[#0A1628]">Rp 159.000</span>
                    </div>
                </div>

                <div class="mt-5 space-y-2 pt-4 border-t border-slate-100">
                    <button onclick="openTopToyModal('Pokemon TCG Holo Booster Collection', 'Trading Card Games', 'Rp 159.000', 'Rp 220.000', '5.0', '7.1rb+', 'Paket kartu Pokemon Trading Card Game (TCG) original berlisensi The Pokemon Company. Berisi kartu holografik foil edisi langka dengan sleeve pelindung kartu kolektor.', '{{ asset('images/toys/pokemon.jpg') }}', 'https://shopee.co.id', 'https://tokopedia.com')" class="w-full py-2.5 px-3 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-800 text-xs font-extrabold flex items-center justify-center gap-1.5 transition-colors">
                        <span>🔍 Lihat Detail & Spek</span>
                    </button>
                    <div class="grid grid-cols-2 gap-2">
                        <a href="https://shopee.co.id" target="_blank" rel="noopener nofollow" class="py-2.5 px-2 rounded-xl bg-[#EE4D2D] hover:bg-[#d83f21] text-white text-[11px] font-black text-center transition-all flex items-center justify-center gap-1 shadow-sm">
                            <span>Shopee</span> ➔
                        </a>
                        <a href="https://tokopedia.com" target="_blank" rel="noopener nofollow" class="py-2.5 px-2 rounded-xl bg-[#03AC0E] hover:bg-[#028f0c] text-white text-[11px] font-black text-center transition-all flex items-center justify-center gap-1 shadow-sm">
                            <span>Tokopedia</span> ➔
                        </a>
                    </div>
                </div>
            </div>

            <!-- PRODUCT 9: Optimus Prime Masterpiece Transformers -->
            <div class="toy-card bg-white rounded-[2rem] p-5 border border-slate-200/90 shadow-md hover:shadow-2xl transition-all duration-300 flex flex-col justify-between group hover:-translate-y-1"
                data-category="gunpla"
                data-name="Transformers Optimus Prime Masterpiece Takara Hasbro"
                data-price="489000"
                data-rating="4.9"
                data-discount="25">
                <div>
                    <div class="flex items-center justify-between gap-2 mb-3">
                        <span class="text-[10px] font-black px-2.5 py-1 rounded-full bg-cyan-100 text-cyan-800 uppercase tracking-wider">
                            #9 Robot Koleksi
                        </span>
                        <span class="text-xs font-bold text-amber-500 bg-amber-50 px-2 py-0.5 rounded-full border border-amber-200">
                            ★ 4.9 (2.4rb+)
                        </span>
                    </div>

                    <div class="relative w-full h-56 rounded-2xl overflow-hidden bg-slate-900 mb-4">
                        <img src="{{ asset('images/toys/transformers.jpg') }}" alt="Transformers Optimus Prime" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2 left-2 bg-slate-900/80 backdrop-blur-sm text-white text-[9px] font-bold px-2 py-0.5 rounded-full">Diecast + Transform</span>
                        <span class="absolute top-2 right-2 bg-red-600 text-white text-[10px] font-black px-2 py-0.5 rounded-full">-25%</span>
                    </div>

                    <h3 class="font-extrabold text-lg text-slate-900 group-hover:text-[#1677d2] transition-colors leading-snug">
                        Optimus Prime Masterpiece
                    </h3>
                    <p class="text-xs text-slate-500 mt-1.5 line-clamp-2 leading-relaxed">
                        Figur Transformers Masterpiece dengan sendi logam diecast, matrix of leadership, dan transformasi sempurna ke mode truk.
                    </p>

                    <div class="mt-4 flex items-baseline gap-2">
                        <span class="text-xs text-slate-400 line-through">Rp 650.000</span>
                        <span class="text-xl font-black text-[#0A1628]">Rp 489.000</span>
                    </div>
                </div>

                <div class="mt-5 space-y-2 pt-4 border-t border-slate-100">
                    <button onclick="openTopToyModal('Transformers Optimus Prime Masterpiece', 'Action Figures & Robot', 'Rp 489.000', 'Rp 650.000', '4.9', '2.4rb+', 'Figur aksi skala kolektor premium dengan artikulasi 360 derajat, material campuran diecast metal kokoh, aksesoris Ion Blaster dan Energon Axe lengkap.', '{{ asset('images/toys/transformers.jpg') }}', 'https://shopee.co.id', 'https://tokopedia.com')" class="w-full py-2.5 px-3 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-800 text-xs font-extrabold flex items-center justify-center gap-1.5 transition-colors">
                        <span>🔍 Lihat Detail & Spek</span>
                    </button>
                    <div class="grid grid-cols-2 gap-2">
                        <a href="https://shopee.co.id" target="_blank" rel="noopener nofollow" class="py-2.5 px-2 rounded-xl bg-[#EE4D2D] hover:bg-[#d83f21] text-white text-[11px] font-black text-center transition-all flex items-center justify-center gap-1 shadow-sm">
                            <span>Shopee</span> ➔
                        </a>
                        <a href="https://tokopedia.com" target="_blank" rel="noopener nofollow" class="py-2.5 px-2 rounded-xl bg-[#03AC0E] hover:bg-[#028f0c] text-white text-[11px] font-black text-center transition-all flex items-center justify-center gap-1 shadow-sm">
                            <span>Tokopedia</span> ➔
                        </a>
                    </div>
                </div>
            </div>

            <!-- PRODUCT 10: Nintendo Switch OLED -->
            <div class="toy-card bg-white rounded-[2rem] p-5 border border-slate-200/90 shadow-md hover:shadow-2xl transition-all duration-300 flex flex-col justify-between group hover:-translate-y-1"
                data-category="gaming"
                data-name="Nintendo Switch OLED Model White Console"
                data-price="4290000"
                data-rating="4.9"
                data-discount="14">
                <div>
                    <div class="flex items-center justify-between gap-2 mb-3">
                        <span class="text-[10px] font-black px-2.5 py-1 rounded-full bg-red-100 text-red-800 uppercase tracking-wider">
                            #10 Handheld Hybrid
                        </span>
                        <span class="text-xs font-bold text-amber-500 bg-amber-50 px-2 py-0.5 rounded-full border border-amber-200">
                            ★ 4.9 (3.9rb+)
                        </span>
                    </div>

                    <div class="relative w-full h-56 rounded-2xl overflow-hidden bg-slate-100 mb-4">
                        <img src="{{ asset('images/toys/nintendo.jpg') }}" alt="Nintendo Switch OLED" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2 left-2 bg-slate-900/80 backdrop-blur-sm text-white text-[9px] font-bold px-2 py-0.5 rounded-full">Layar OLED 7 Inci</span>
                        <span class="absolute top-2 right-2 bg-red-600 text-white text-[10px] font-black px-2 py-0.5 rounded-full">-14%</span>
                    </div>

                    <h3 class="font-extrabold text-lg text-slate-900 group-hover:text-[#1677d2] transition-colors leading-snug">
                        Nintendo Switch OLED White
                    </h3>
                    <p class="text-xs text-slate-500 mt-1.5 line-clamp-2 leading-relaxed">
                        Konsol game portabel layar OLED 7 inci super tajam, audio jernih, dan dock LAN kabel terintegrasi.
                    </p>

                    <div class="mt-4 flex items-baseline gap-2">
                        <span class="text-xs text-slate-400 line-through">Rp 4.990.000</span>
                        <span class="text-xl font-black text-[#0A1628]">Rp 4.290.000</span>
                    </div>
                </div>

                <div class="mt-5 space-y-2 pt-4 border-t border-slate-100">
                    <button onclick="openTopToyModal('Nintendo Switch OLED White Edition', 'Handheld Gaming Console', 'Rp 4.290.000', 'Rp 4.990.000', '4.9', '3.9rb+', 'Konsol hibrida portabel resmi Nintendo dengan layar vibrant OLED 7 inci, penyimpanan 64GB, kickstand lebar dapat disesuaikan, dan sepasang Joy-Con warna putih elegan.', '{{ asset('images/toys/nintendo.jpg') }}', 'https://shopee.co.id', 'https://tokopedia.com')" class="w-full py-2.5 px-3 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-800 text-xs font-extrabold flex items-center justify-center gap-1.5 transition-colors">
                        <span>🔍 Lihat Detail & Spek</span>
                    </button>
                    <div class="grid grid-cols-2 gap-2">
                        <a href="https://shopee.co.id" target="_blank" rel="noopener nofollow" class="py-2.5 px-2 rounded-xl bg-[#EE4D2D] hover:bg-[#d83f21] text-white text-[11px] font-black text-center transition-all flex items-center justify-center gap-1 shadow-sm">
                            <span>Shopee</span> ➔
                        </a>
                        <a href="https://tokopedia.com" target="_blank" rel="noopener nofollow" class="py-2.5 px-2 rounded-xl bg-[#03AC0E] hover:bg-[#028f0c] text-white text-[11px] font-black text-center transition-all flex items-center justify-center gap-1 shadow-sm">
                            <span>Tokopedia</span> ➔
                        </a>
                    </div>
                </div>
            </div>

            <!-- PRODUCT 11: RC Monster Rock Crawler Truck -->
            <div class="toy-card bg-white rounded-[2rem] p-5 border border-slate-200/90 shadow-md hover:shadow-2xl transition-all duration-300 flex flex-col justify-between group hover:-translate-y-1"
                data-category="tamiya"
                data-name="RC Rock Crawler 4WD Off-Road Monster Truck"
                data-price="279000"
                data-rating="4.8"
                data-discount="30">
                <div>
                    <div class="flex items-center justify-between gap-2 mb-3">
                        <span class="text-[10px] font-black px-2.5 py-1 rounded-full bg-amber-100 text-amber-800 uppercase tracking-wider">
                            #11 RC Monster 4WD
                        </span>
                        <span class="text-xs font-bold text-amber-500 bg-amber-50 px-2 py-0.5 rounded-full border border-amber-200">
                            ★ 4.8 (1.6rb+)
                        </span>
                    </div>

                    <div class="relative w-full h-56 rounded-2xl overflow-hidden bg-slate-900 mb-4">
                        <img src="{{ asset('images/toys/rc-truck.jpg') }}" alt="RC Rock Crawler" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2 left-2 bg-slate-900/80 backdrop-blur-sm text-white text-[9px] font-bold px-2 py-0.5 rounded-full">Remote Control 2.4GHz</span>
                        <span class="absolute top-2 right-2 bg-red-600 text-white text-[10px] font-black px-2 py-0.5 rounded-full">-30%</span>
                    </div>

                    <h3 class="font-extrabold text-lg text-slate-900 group-hover:text-[#1677d2] transition-colors leading-snug">
                        RC Rock Crawler 4WD Truck
                    </h3>
                    <p class="text-xs text-slate-500 mt-1.5 line-clamp-2 leading-relaxed">
                        Mobil remote control off-road skala 1:16 dengan ban oversized karet empuk, suspensi pegas per, dan kendali 2.4Ghz anti-interferensi.
                    </p>

                    <div class="mt-4 flex items-baseline gap-2">
                        <span class="text-xs text-slate-400 line-through">Rp 399.000</span>
                        <span class="text-xl font-black text-[#0A1628]">Rp 279.000</span>
                    </div>
                </div>

                <div class="mt-5 space-y-2 pt-4 border-t border-slate-100">
                    <button onclick="openTopToyModal('RC Rock Crawler 4WD Off-Road Truck', 'Remote Control & Vehicle', 'Rp 279.000', 'Rp 399.000', '4.8', '1.6rb+', 'Mobil kendali jarak jauh tahan benturan untuk segala medan jalanan tanah, batu, dan aspal. Baterai isi ulang USB awet dengan waktu bermain hingga 30 menit.', '{{ asset('images/toys/rc-truck.jpg') }}', 'https://shopee.co.id', 'https://tokopedia.com')" class="w-full py-2.5 px-3 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-800 text-xs font-extrabold flex items-center justify-center gap-1.5 transition-colors">
                        <span>🔍 Lihat Detail & Spek</span>
                    </button>
                    <div class="grid grid-cols-2 gap-2">
                        <a href="https://shopee.co.id" target="_blank" rel="noopener nofollow" class="py-2.5 px-2 rounded-xl bg-[#EE4D2D] hover:bg-[#d83f21] text-white text-[11px] font-black text-center transition-all flex items-center justify-center gap-1 shadow-sm">
                            <span>Shopee</span> ➔
                        </a>
                        <a href="https://tokopedia.com" target="_blank" rel="noopener nofollow" class="py-2.5 px-2 rounded-xl bg-[#03AC0E] hover:bg-[#028f0c] text-white text-[11px] font-black text-center transition-all flex items-center justify-center gap-1 shadow-sm">
                            <span>Tokopedia</span> ➔
                        </a>
                    </div>
                </div>
            </div>

            <!-- PRODUCT 12: Rubik Speedcube Magnetic Gan -->
            <div class="toy-card bg-white rounded-[2rem] p-5 border border-slate-200/90 shadow-md hover:shadow-2xl transition-all duration-300 flex flex-col justify-between group hover:-translate-y-1"
                data-category="art-toys"
                data-name="Speed Cube Gan Magnetic 3x3 Rubik"
                data-price="149000"
                data-rating="4.9"
                data-discount="25">
                <div>
                    <div class="flex items-center justify-between gap-2 mb-3">
                        <span class="text-[10px] font-black px-2.5 py-1 rounded-full bg-lime-100 text-lime-900 uppercase tracking-wider">
                            #12 Asah Otak Populer
                        </span>
                        <span class="text-xs font-bold text-amber-500 bg-amber-50 px-2 py-0.5 rounded-full border border-amber-200">
                            ★ 4.9 (4.3rb+)
                        </span>
                    </div>

                    <div class="relative w-full h-56 rounded-2xl overflow-hidden bg-slate-100 mb-4">
                        <img src="{{ asset('images/toys/rubiks.jpg') }}" alt="Speed Cube Gan Magnetic" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2 left-2 bg-slate-900/80 backdrop-blur-sm text-white text-[9px] font-bold px-2 py-0.5 rounded-full">Magnetic Core</span>
                        <span class="absolute top-2 right-2 bg-red-600 text-white text-[10px] font-black px-2 py-0.5 rounded-full">-25%</span>
                    </div>

                    <h3 class="font-extrabold text-lg text-slate-900 group-hover:text-[#1677d2] transition-colors leading-snug">
                        Speed Cube 3x3 Magnetic
                    </h3>
                    <p class="text-xs text-slate-500 mt-1.5 line-clamp-2 leading-relaxed">
                        Rubik putaran magnetik super licin dengan teknologi pegas elastis dan material anti-baret untuk latihan kecepatan kompetisi.
                    </p>

                    <div class="mt-4 flex items-baseline gap-2">
                        <span class="text-xs text-slate-400 line-through">Rp 199.000</span>
                        <span class="text-xl font-black text-[#0A1628]">Rp 149.000</span>
                    </div>
                </div>

                <div class="mt-5 space-y-2 pt-4 border-t border-slate-100">
                    <button onclick="openTopToyModal('Speed Cube 3x3 Magnetic GAN Core', 'Puzzle & Brain Teaser', 'Rp 149.000', 'Rp 199.000', '4.9', '4.3rb+', 'Rubik magnetik premium untuk para speedcuber. Dilengkapi magnet positioning kuat pada setiap sudut dan sistem gesekan honeycomb untuk stabilitas putaran tingkat tinggi.', '{{ asset('images/toys/rubiks.jpg') }}', 'https://shopee.co.id', 'https://tokopedia.com')" class="w-full py-2.5 px-3 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-800 text-xs font-extrabold flex items-center justify-center gap-1.5 transition-colors">
                        <span>🔍 Lihat Detail & Spek</span>
                    </button>
                    <div class="grid grid-cols-2 gap-2">
                        <a href="https://shopee.co.id" target="_blank" rel="noopener nofollow" class="py-2.5 px-2 rounded-xl bg-[#EE4D2D] hover:bg-[#d83f21] text-white text-[11px] font-black text-center transition-all flex items-center justify-center gap-1 shadow-sm">
                            <span>Shopee</span> ➔
                        </a>
                        <a href="https://tokopedia.com" target="_blank" rel="noopener nofollow" class="py-2.5 px-2 rounded-xl bg-[#03AC0E] hover:bg-[#028f0c] text-white text-[11px] font-black text-center transition-all flex items-center justify-center gap-1 shadow-sm">
                            <span>Tokopedia</span> ➔
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- No Results Fallback -->
        <div id="noResults" class="hidden text-center py-16 bg-white rounded-3xl border border-slate-200 shadow-sm mt-6">
            <div class="text-4xl mb-3">🔍</div>
            <h3 class="text-lg font-bold text-slate-800">Mainan tidak ditemukan</h3>
            <p class="text-xs text-slate-500 mt-1">Coba gunakan kata kunci lain atau pilih kategori "Semua Top Toys".</p>
            <button onclick="resetFilters()" class="mt-4 px-5 py-2 rounded-full bg-[#1677d2] text-white text-xs font-bold hover:bg-[#1264b3] transition-colors">
                Reset Semua Filter
            </button>
        </div>
    </section>

    <!-- TRUST & BENEFIT BANNER -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 mb-12">
        <div class="bg-gradient-to-r from-[#0B1A30] to-[#122847] rounded-3xl p-6 sm:p-10 text-white shadow-xl border border-white/10">
            <div class="grid md:grid-cols-3 gap-6 sm:gap-8">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-[#E3FF73]/20 text-[#E3FF73] flex items-center justify-center text-2xl shrink-0">
                        🛡️
                    </div>
                    <div>
                        <h4 class="text-base font-extrabold text-white">100% Produk Original</h4>
                        <p class="text-xs text-slate-300 mt-1 leading-relaxed">
                            Semua tautan langsung menuju Official Store dan Star Seller terverifikasi di Shopee & Tokopedia.
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-[#E3FF73]/20 text-[#E3FF73] flex items-center justify-center text-2xl shrink-0">
                        ⭐
                    </div>
                    <div>
                        <h4 class="text-base font-extrabold text-white">Kurasi Rating 4.8+</h4>
                        <p class="text-xs text-slate-300 mt-1 leading-relaxed">
                            Hanya mainan dengan ribuan ulasan positif dan kepuasan pelanggan tertinggi yang masuk daftar kurasi ini.
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-[#E3FF73]/20 text-[#E3FF73] flex items-center justify-center text-2xl shrink-0">
                        🏷️
                    </div>
                    <div>
                        <h4 class="text-base font-extrabold text-white">Diskon & Promo Resmi</h4>
                        <p class="text-xs text-slate-300 mt-1 leading-relaxed">
                            Dapatkan penawaran potongan harga terbaik, cashback marketplace, dan gratis ongkir setiap hari.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ SECTION FOR TOP TOYS -->
    <section class="max-w-4xl mx-auto px-4 sm:px-6 pb-20">
        <div class="text-center mb-8">
            <span class="text-xs font-black uppercase text-[#1677d2] tracking-wider">TANYA JAWAB</span>
            <h3 class="text-2xl sm:text-3xl font-extrabold text-[#0A1628] mt-1">Pertanyaan Seputar Mainan Top</h3>
        </div>

        <div class="space-y-3">
            <div class="bg-white rounded-2xl p-5 border border-slate-200/80 shadow-sm">
                <h4 class="font-bold text-sm text-slate-900">Bagaimana ToysPixel memilih mainan dalam daftar ini?</h4>
                <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                    Tim kami melakukan kurasi berdasarkan volume penjualan terlaris, rasio ulasan bintang 4.8 hingga 5.0, keaslian lisensi merk (Bandai, Tamiya, Sony, Pop Mart, Hot Wheels, LEGO, dll), serta ketersediaan stok di official marketplace.
                </p>
            </div>

            <div class="bg-white rounded-2xl p-5 border border-slate-200/80 shadow-sm">
                <h4 class="font-bold text-sm text-slate-900">Apakah harga di ToysPixel sama dengan harga di marketplace?</h4>
                <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                    Ya, ketika Anda mengklik tombol "Beli di Shopee" atau "Beli di Tokopedia", Anda akan diarahkan langsung ke halaman produk resmi dengan harga promo terkini serta voucher diskon yang sedang berlaku.
                </p>
            </div>

            <div class="bg-white rounded-2xl p-5 border border-slate-200/80 shadow-sm">
                <h4 class="font-bold text-sm text-slate-900">Apakah produk dijamin asli dan original?</h4>
                <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                    Pasti! Semua link kurasi kami terafiliasi dengan toko resmi (Official Store) dan penjual berstatus Star/Power Merchant dengan reputasi terpercaya dan garansi uang kembali.
                </p>
            </div>
        </div>
    </section>

    <!-- MODAL POPUP DETAIL SPESIFIKASI MAINAN -->
    <div id="topToyModal" class="fixed inset-0 z-50 hidden bg-slate-950/75 backdrop-blur-md flex items-center justify-center p-4 transition-all duration-300">
        <div class="relative w-full max-w-2xl bg-white rounded-3xl shadow-2xl border border-slate-200 overflow-hidden text-left flex flex-col max-h-[92vh] animate-[scaleUp_0.25s_ease-out]">
            
            <!-- Modal Header with Close Button -->
            <div class="flex items-center justify-between p-5 sm:p-6 border-b border-slate-100 bg-slate-50/70">
                <div>
                    <span id="modalToyCategory" class="text-[10px] sm:text-xs font-black px-2.5 py-0.5 rounded-full bg-[#1677d2]/15 text-[#1677d2] uppercase tracking-wider">KATEGORI</span>
                    <h3 id="modalToyTitle" class="text-xl sm:text-2xl font-black text-[#0A1628] mt-1.5 leading-tight">Nama Mainan</h3>
                </div>
                <button onclick="closeTopToyModal()" aria-label="Tutup" class="w-10 h-10 rounded-full bg-slate-200 hover:bg-slate-300 text-slate-700 font-bold flex items-center justify-center text-lg transition-transform active:scale-95 shrink-0">
                    ✕
                </button>
            </div>

            <!-- Modal Body (Scrollable) -->
            <div class="p-5 sm:p-6 overflow-y-auto space-y-5">
                <div class="w-full h-64 sm:h-72 rounded-2xl overflow-hidden bg-slate-900 relative shadow-inner">
                    <img id="modalToyImage" src="" alt="Toy preview" class="w-full h-full object-cover">
                    <div class="absolute bottom-3 left-3 bg-slate-950/80 backdrop-blur-md text-white px-3 py-1 rounded-full text-xs font-bold flex items-center gap-1.5 border border-white/20">
                        <span class="text-amber-400">★</span>
                        <span id="modalToyRating">4.9</span>
                        <span class="text-slate-400">|</span>
                        <span id="modalToySold" class="text-slate-200">2.5rb+ Pembeli</span>
                    </div>
                </div>

                <!-- Price Box -->
                <div class="flex items-baseline gap-3 p-4 rounded-2xl bg-[#FAF5EE] border border-amber-200/60">
                    <span class="text-xs font-bold text-slate-500 uppercase">Harga Terbaik:</span>
                    <span id="modalToyPrice" class="text-2xl sm:text-3xl font-black text-[#0A1628]">Rp 0</span>
                    <span id="modalToyOldPrice" class="text-xs text-slate-400 line-through">Rp 0</span>
                    <span class="text-[11px] font-black text-red-600 bg-red-100 px-2 py-0.5 rounded-full">PROMO DISKON</span>
                </div>

                <!-- Description & Features -->
                <div>
                    <h4 class="text-xs font-black uppercase text-slate-500 tracking-wider mb-2">Deskripsi & Keunggulan Produk</h4>
                    <p id="modalToyDesc" class="text-sm text-slate-700 leading-relaxed font-medium bg-slate-50 p-4 rounded-2xl border border-slate-100">
                        Deskripsi spesifikasi lengkap.
                    </p>
                </div>

                <!-- Guarantee Notice -->
                <div class="flex items-center gap-3 p-3.5 rounded-xl bg-emerald-50 text-emerald-900 text-xs font-semibold border border-emerald-200">
                    <span class="text-lg">✓</span>
                    <span>100% Produk Original Terverifikasi & Garansi Uang Kembali dari Marketplace Resmi.</span>
                </div>
            </div>

            <!-- Modal Footer (Dual Affiliate Buy Buttons) -->
            <div class="p-5 sm:p-6 border-t border-slate-100 bg-slate-50 flex flex-col sm:flex-row items-center gap-3">
                <span class="text-xs font-extrabold text-slate-500 sm:mr-auto">Beli Langsung di:</span>
                <a id="modalToyShopee" href="https://shopee.co.id" target="_blank" rel="noopener nofollow" class="w-full sm:w-auto bg-[#EE4D2D] hover:bg-orange-700 text-white font-extrabold text-xs py-3 px-6 rounded-xl flex items-center justify-center gap-2 shadow-sm transition-all hover:scale-[1.02]">
                    <span>🟠 Beli di Shopee</span>
                    <span class="text-sm font-bold">↗</span>
                </a>
                <a id="modalToyTokped" href="https://tokopedia.com" target="_blank" rel="noopener nofollow" class="w-full sm:w-auto bg-[#03AC0E] hover:bg-emerald-700 text-white font-extrabold text-xs py-3 px-6 rounded-xl flex items-center justify-center gap-2 shadow-sm transition-all hover:scale-[1.02]">
                    <span>🟢 Beli di Tokopedia</span>
                    <span class="text-sm font-bold">↗</span>
                </a>
            </div>
        </div>
    </div>

    <!-- MAIN FOOTER -->
    <footer class="bg-[#0B1A30] text-slate-300 py-12 border-t border-slate-800 text-xs">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8 mb-8 pb-8 border-b border-slate-800">
                <div class="md:col-span-2 space-y-3">
                    <img src="{{ asset('images/brand/logo-landscape.png') }}" alt="toyspixels.com" class="h-10 object-contain brightness-0 invert">
                    <p class="text-slate-400 text-xs max-w-md leading-relaxed">
                        <strong>toyspixels.com</strong> — Smart Picks. More Fun. Portal kurasi dan ulasan mainan, action figures, diecast, serta gadget pilihan terpercaya di Indonesia dengan penawaran resmi marketplace.
                    </p>
                    <p class="text-[11px] text-slate-500">
                        *toyspixels.com berpartisipasi dalam program afiliasi marketplace resmi. Kami menerima komisi dari pembelian yang dilakukan melalui tautan produk di situs ini.
                    </p>
                </div>
                <div>
                    <div class="text-sm font-bold text-white mb-3">Navigasi Utama</div>
                    <ul class="space-y-2 text-slate-400">
                        <li><a href="{{ url('/') }}" class="hover:text-[#E3FF73] transition-colors">Beranda Utama</a></li>
                        <li><a href="{{ url('/top-toys') }}" class="text-[#E3FF73] font-bold">Mainan Top Terlaris</a></li>
                        <li><a href="{{ url('/') }}#kategori" class="hover:text-[#E3FF73] transition-colors">Kategori Mainan</a></li>
                        <li><a href="{{ url('/') }}#all-products" class="hover:text-[#E3FF73] transition-colors">Katalog Semua Produk</a></li>
                    </ul>
                </div>
                <div>
                    <div class="text-sm font-bold text-white mb-3">Kategori Populer</div>
                    <ul class="space-y-2 text-slate-400">
                        <li><a href="{{ url('/top-toys') }}" class="hover:text-[#E3FF73] transition-colors">Gunpla & Model Kit</a></li>
                        <li><a href="{{ url('/top-toys') }}" class="hover:text-[#E3FF73] transition-colors">Tamiya Mini 4WD</a></li>
                        <li><a href="{{ url('/top-toys') }}" class="hover:text-[#E3FF73] transition-colors">PlayStation & Nintendo</a></li>
                        <li><a href="{{ url('/top-toys') }}" class="hover:text-[#E3FF73] transition-colors">Pop Mart & Designer Toys</a></li>
                    </ul>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row items-center justify-between text-slate-500 text-[11px] gap-2">
                <div>© 2026 ToysPixel. Hak cipta dilindungi undang-undang.</div>
                <div class="flex items-center gap-4">
                    <a href="{{ url('/') }}" class="hover:text-slate-300">Kebijakan Privasi</a>
                    <span>•</span>
                    <a href="{{ url('/') }}" class="hover:text-slate-300">Syarat & Ketentuan</a>
                    <span>•</span>
                    <a href="{{ url('/') }}" class="hover:text-slate-300">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- INTERACTIVE JAVASCRIPT LOGIC -->
    <script>
        function toggleNavDrawer() {
            const drawer = document.getElementById('navMenuDrawer');
            if (drawer) {
                drawer.classList.toggle('hidden');
            }
        }

        // Modal Logic
        function openTopToyModal(title, category, price, oldPrice, rating, sold, desc, image, shopeeUrl, tokpedUrl) {
            document.getElementById('modalToyTitle').textContent = title;
            document.getElementById('modalToyCategory').textContent = category;
            document.getElementById('modalToyPrice').textContent = price;
            document.getElementById('modalToyOldPrice').textContent = oldPrice;
            document.getElementById('modalToyRating').textContent = rating;
            document.getElementById('modalToySold').textContent = sold + ' Pembeli';
            document.getElementById('modalToyDesc').textContent = desc;
            document.getElementById('modalToyImage').src = image;
            document.getElementById('modalToyShopee').href = shopeeUrl || 'https://shopee.co.id';
            document.getElementById('modalToyTokped').href = tokpedUrl || 'https://tokopedia.com';

            const modal = document.getElementById('topToyModal');
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeTopToyModal() {
            const modal = document.getElementById('topToyModal');
            modal.classList.add('hidden');
            document.body.style.overflow = '';
        }

        // Close on backdrop click
        document.getElementById('topToyModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeTopToyModal();
            }
        });

        // Filter and Search logic
        let currentCategory = 'all';
        let searchQuery = '';

        function filterCategory(cat, btn) {
            currentCategory = cat;
            document.querySelectorAll('.category-pill').forEach(el => {
                el.classList.remove('active', 'bg-[#1677d2]', 'text-white', 'shadow-md');
                el.classList.add('bg-slate-100', 'text-slate-700');
            });
            if (btn) {
                btn.classList.add('active', 'bg-[#1677d2]', 'text-white', 'shadow-md');
                btn.classList.remove('bg-slate-100', 'text-slate-700');
            }
            applyFilters();
        }

        function resetFilters() {
            currentCategory = 'all';
            searchQuery = '';
            document.getElementById('toySearchInput').value = '';
            document.getElementById('toySortSelect').value = 'popular';
            const firstPill = document.querySelector('.category-pill');
            if (firstPill) filterCategory('all', firstPill);
        }

        function applyFilters() {
            const cards = Array.from(document.querySelectorAll('.toy-card'));
            let visibleCount = 0;

            cards.forEach(card => {
                const cardCat = card.getAttribute('data-category');
                const cardName = (card.getAttribute('data-name') || '').toLowerCase();

                const matchesCat = (currentCategory === 'all' || cardCat === currentCategory);
                const matchesSearch = !searchQuery || cardName.includes(searchQuery.toLowerCase());

                if (matchesCat && matchesSearch) {
                    card.style.display = 'flex';
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            });

            document.getElementById('toyCountBadge').textContent = visibleCount + ' Mainan Ditampilkan';
            const noResults = document.getElementById('noResults');
            if (visibleCount === 0) {
                noResults.classList.remove('hidden');
            } else {
                noResults.classList.add('hidden');
            }
        }

        // Search event listener
        document.getElementById('toySearchInput').addEventListener('input', function(e) {
            searchQuery = e.target.value.trim();
            applyFilters();
        });

        // Sorting logic
        document.getElementById('toySortSelect').addEventListener('change', function(e) {
            const sortBy = e.target.value;
            const container = document.getElementById('toysGrid');
            const cards = Array.from(container.querySelectorAll('.toy-card'));

            cards.sort((a, b) => {
                if (sortBy === 'price-asc') {
                    return parseInt(a.dataset.price) - parseInt(b.dataset.price);
                } else if (sortBy === 'price-desc') {
                    return parseInt(b.dataset.price) - parseInt(a.dataset.price);
                } else if (sortBy === 'rating') {
                    return parseFloat(b.dataset.rating) - parseFloat(a.dataset.rating);
                } else if (sortBy === 'discount') {
                    return parseInt(b.dataset.discount) - parseInt(a.dataset.discount);
                }
                return 0; // default order
            });

            cards.forEach(card => container.appendChild(card));
        });
    </script>
</body>
</html>
