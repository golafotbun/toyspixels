<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Katalog Lengkap Mainan & Gadget — ToysPixel</title>
    <meta name="description" content="Katalog lengkap kurasi mainan anak, diecast, action figure, gadget, headphone, dan gaming gear dengan promo link afiliasi Shopee & Tokopedia resmi.">
    <meta name="keywords" content="Katalog Mainan, Katalog Gadget, ToysPixel, Rekomendasi Mainan, Promo Shopee Tokopedia">
    
    <!-- OpenGraph & Social SEO -->
    <meta property="og:title" content="Katalog Lengkap Mainan & Gadget — ToysPixel">
    <meta property="og:description" content="Koleksi mainan dan gadget terbaik siap beli melalui link afiliasi resmi Shopee & Tokopedia.">
    <meta property="og:image" content="{{ asset('images/brand/logo-landscape.png') }}">
    <meta property="og:type" content="website">
    <link rel="canonical" href="{{ url('/katalog') }}">

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
                <span>Katalog Resmi: <strong>All Products Mainan & Gadget</strong> Siap Beli</span>
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
                <a href="{{ url('/topproduk') }}" class="hover:text-[#E3FF73] transition-colors">TOP PRODUK</a>
                <a href="{{ url('/') }}#kategori" class="hover:text-[#E3FF73] transition-colors">KATEGORI</a>
                <a href="{{ url('/katalog') }}" class="text-[#E3FF73] border-b-2 border-[#E3FF73] pb-1 transition-colors">KATALOG</a>
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
                KATALOG LENGKAP
            </span>
            <h1 class="text-3xl sm:text-5xl font-extrabold text-white tracking-tight leading-tight">
                ALL PRODUCTS — <span class="text-[#E3FF73]">Rekomendasi Terpilih</span>
            </h1>
            <p class="text-white/90 text-sm sm:text-base mt-4 max-w-2xl mx-auto leading-relaxed">
                Koleksi mainan dan gadget terbaik siap beli melalui link afiliasi resmi Shopee & Tokopedia. Seluruh produk telah dikurasi dengan rating tertinggi dan penjual terverifikasi.
            </p>

            <!-- Dedicated Category Switcher Buttons -->
            <div class="mt-8 inline-flex p-1.5 bg-black/20 backdrop-blur-md rounded-full text-xs sm:text-sm font-extrabold">
                <button type="button" onclick="setKatalogFilter('all')" id="tabBtnAll" class="px-6 sm:px-8 py-2.5 rounded-full bg-white text-[#1677d2] shadow-sm transition-all duration-200">
                    Semua Produk (12)
                </button>
                <a href="{{ url('/katalog/mainan') }}" class="px-6 sm:px-8 py-2.5 rounded-full text-white/80 hover:text-white hover:bg-white/10 transition-all duration-200">
                    Katalog Mainan (6)
                </a>
                <a href="{{ url('/katalog/teknologi') }}" class="px-6 sm:px-8 py-2.5 rounded-full text-white/80 hover:text-white hover:bg-white/10 transition-all duration-200">
                    Katalog Teknologi (6)
                </a>
            </div>
        </div>
    </section>

    <!-- CATALOG GRID SECTION -->
    <section class="py-14 sm:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Breadcrumb & Direct Category Links -->
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4 mb-8 pb-4 border-b border-slate-200">
                <div class="text-xs text-slate-500 font-bold flex items-center gap-2">
                    <a href="{{ url('/') }}" class="hover:text-[#1677d2]">Beranda</a>
                    <span>/</span>
                    <span class="text-[#0B1A30]">Katalog Lengkap (All Products)</span>
                </div>
                <div class="flex items-center gap-3 text-xs font-bold">
                    <span class="text-slate-400">Pages Kategori:</span>
                    <a href="{{ url('/katalog/mainan') }}" class="px-3 py-1.5 rounded-lg bg-blue-50 text-[#1677d2] hover:bg-blue-100 transition-colors">
                        Halaman Mainan ➔
                    </a>
                    <a href="{{ url('/katalog/teknologi') }}" class="px-3 py-1.5 rounded-lg bg-blue-50 text-[#1677d2] hover:bg-blue-100 transition-colors">
                        Halaman Teknologi ➔
                    </a>
                </div>
            </div>

            <!-- Product Grid: 12 Produk Resmi Katalog -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 sm:gap-7">
                @php
                    $katalogList = $products ?? \App\Services\KatalogService::all();
                @endphp
                @foreach($katalogList as $prod)
                <div class="cat-prod-item bg-white rounded-2xl p-4 sm:p-5 border border-slate-200/80 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.06)] hover:shadow-xl transition-all duration-300 flex flex-col justify-between group" data-group="{{ in_array('mainan', $prod['tags'] ?? []) ? 'mainan' : 'technology' }}">
                    <div>
                        <!-- Bingkai Foto Thumbnail (Klik menuju artikel) -->
                        <a href="{{ url('/post/' . $prod['slug']) }}" class="block relative aspect-square w-full rounded-2xl bg-[#F8FAFC] border-2 border-slate-100 group-hover:border-blue-200/80 flex items-center justify-center p-4 sm:p-5 mb-4 overflow-hidden group-hover:bg-slate-50 transition-all shadow-[inset_0_1px_3px_rgba(0,0,0,0.02)]">
                            <img src="{{ asset($prod['image']) }}" alt="{{ $prod['title'] }}" class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-500 rounded-xl">
                        </a>
                        <!-- Kategori resmi -->
                        <a href="{{ $prod['category_url'] }}" class="text-[10px] font-black text-[#1677d2] hover:text-[#0B1A30] uppercase tracking-wider inline-flex items-center gap-1 mb-1 transition-colors">
                            <span>{{ $prod['category_name'] }}</span>
                        </a>
                        <!-- Judul Produk (Klik menuju artikel) -->
                        <h3 class="font-bold text-sm sm:text-base text-[#0B1A30] line-clamp-1 group-hover:text-[#1677d2] transition-colors leading-snug">
                            <a href="{{ url('/post/' . $prod['slug']) }}" class="hover:underline">
                                {{ $prod['title'] }}
                            </a>
                        </h3>
                        <!-- Harga & Rating -->
                        <div class="mt-2 flex items-baseline justify-between">
                            <span class="text-base sm:text-lg font-black text-[#0B1A30]">Rp {{ $prod['price'] }}</span>
                            <span class="text-xs font-bold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded-full">⭐ {{ $prod['rating'] }}</span>
                        </div>
                    </div>
                    <!-- Action Buttons: Cek Detail (Ke Artikel) & Shopee (Link Shopee Resmi Sesuai di Artikel) -->
                    <div class="mt-4 pt-3.5 border-t border-slate-100 flex flex-col gap-2">
                        <div class="grid grid-cols-2 gap-2">
                            <a href="{{ url('/post/' . $prod['slug']) }}" class="py-2.5 px-3 rounded-xl border border-slate-200 hover:border-[#1677d2] bg-white hover:bg-blue-50/60 text-[#0B1A30] hover:text-[#1677d2] text-xs font-bold transition-all text-center flex items-center justify-center gap-1 active:scale-95">
                                <span>Cek Detail</span>
                            </a>
                            <a href="{{ $prod['affiliate_url'] ?? $prod['shopee_url'] }}" target="_blank" rel="noopener nofollow" class="py-2.5 px-3 rounded-xl bg-[#EE4D2D] hover:bg-[#d83f21] text-white text-xs font-black transition-all text-center flex items-center justify-center gap-1 shadow-sm hover:shadow active:scale-95">
                                <span>Shopee</span>
                            </a>
                        </div>
                        <a href="{{ $prod['tokopedia_url'] ?? 'https://tokopedia.com' }}" target="_blank" rel="noopener nofollow" class="text-[11px] font-bold text-slate-400 hover:text-[#03AC0E] text-center transition-colors">
                            Tersedia di Tokopedia ➔
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Bottom Action Banner to Categories -->
            <div class="mt-14 p-8 rounded-3xl bg-gradient-to-r from-[#0B1A30] to-[#132847] text-white shadow-xl flex flex-col md:flex-row items-center justify-between gap-6">
                <div>
                    <span class="text-xs font-black text-[#E3FF73] uppercase tracking-wider block mb-1">Eksplorasi Per Kategori Spesifik</span>
                    <h3 class="text-xl sm:text-2xl font-black">Mau fokus mencari koleksi Mainan atau Perangkat Teknologi?</h3>
                    <p class="text-slate-300 text-xs sm:text-sm mt-1 max-w-xl">
                        Kunjungi halaman katalog khusus yang dirancang dengan filter mendalam sesuai minat belanja Anda.
                    </p>
                </div>
                <div class="flex flex-wrap items-center gap-3 shrink-0">
                    <a href="{{ url('/katalog/mainan') }}" class="px-6 py-3 rounded-full bg-[#1677d2] hover:bg-blue-600 text-white font-extrabold text-xs sm:text-sm shadow-md transition-all flex items-center gap-2">
                        <span>Katalog Mainan</span>
                        <span>➔</span>
                    </a>
                    <a href="{{ url('/katalog/teknologi') }}" class="px-6 py-3 rounded-full bg-[#E3FF73] hover:bg-[#d6f556] text-[#0A1628] font-black text-xs sm:text-sm shadow-md transition-all flex items-center gap-2">
                        <span>Katalog Teknologi</span>
                        <span>➔</span>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-[#0B1A30] text-slate-300 py-12 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-xs text-slate-400">
            <p>© {{ date('Y') }} ToysPixel. All Rights Reserved. Rekomendasi Mainan dan Gadget Terbaik di Indonesia.</p>
        </div>
    </footer>

    <script>
        function setKatalogFilter(group) {
            const items = document.querySelectorAll('.cat-prod-item');

            items.forEach(item => {
                if (group === 'all' || item.getAttribute('data-group') === group) {
                    item.style.display = 'flex';
                } else {
                    item.style.display = 'none';
                }
            });
        }
    </script>

</body>
</html>
