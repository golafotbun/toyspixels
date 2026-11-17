<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $category['title'] }} — toyspixels.com</title>
    <meta name="description" content="{{ $category['description'] }}">
    <meta name="keywords" content="{{ $category['title'] }}, Mainan, Gadget, toyspixels, Rekomendasi Terpilih">
    
    <!-- OpenGraph & Social SEO -->
    <meta property="og:title" content="{{ $category['title'] }} — toyspixels.com">
    <meta property="og:description" content="{{ $category['description'] }}">
    <meta property="og:image" content="{{ asset($category['image']) }}">
    <meta property="og:type" content="website">
    <link rel="canonical" href="https://toyspixels.com/{{ $category['slug'] }}">

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
                <span>Kategori Resmi: <strong class="text-white">{{ $category['title'] }}</strong></span>
            </div>
            <div class="flex items-center gap-4 text-[11px]">
                <a href="{{ url('/') }}" class="text-[#E3FF73] hover:underline font-bold flex items-center gap-1">
                    <span>Kembali ke Beranda</span>
                    <span>➔</span>
                </a>
            </div>
        </div>
    </div>

    <!-- MAIN NAVBAR -->
    <header class="sticky top-0 z-40 bg-[#0B1A30]/95 backdrop-blur-md border-b border-slate-800 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between gap-4">
            <!-- Logo -->
            <a href="{{ url('/') }}" class="flex items-center gap-3 group">
                <img src="{{ asset('images/brand/logo-landscape.png') }}" alt="toyspixels.com" class="h-8 sm:h-9 object-contain">
            </a>

            <!-- Center Navigation Links -->
            <nav class="hidden md:flex items-center gap-8 text-xs font-black tracking-widest text-slate-300">
                <a href="{{ url('/') }}" class="hover:text-[#E3FF73] transition-colors">BERANDA</a>
                <a href="https://toyspixel.com/topproduk" class="hover:text-[#E3FF73] transition-colors">TOP PRODUK</a>
                <a href="{{ url('/katalog') }}" class="hover:text-[#E3FF73] transition-colors">KATALOG</a>
                <a href="{{ url('/') }}#faq" class="hover:text-[#E3FF73] transition-colors">FAQ</a>
            </nav>

            <!-- Action Button -->
            <div class="flex items-center gap-3">
                <a href="{{ url('/') }}" class="inline-flex items-center gap-2 px-4 py-2 sm:px-5 sm:py-2.5 rounded-full bg-[#1677d2] hover:bg-[#1264b3] text-white text-xs font-extrabold shadow-md transition-all">
                    <span>Beranda</span>
                    <span>➔</span>
                </a>
            </div>
        </div>
    </header>

    <!-- HERO HEADER -->
    <section class="bg-gradient-to-b from-[#0B1A30] via-[#132847] to-[#1677d2] text-white py-12 sm:py-16 border-b border-white/10 relative overflow-hidden">
        <!-- Ambient Glow -->
        <div class="absolute -top-24 left-1/2 -translate-x-1/2 w-96 h-96 bg-[#1677d2]/30 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Breadcrumbs -->
            <div class="text-xs text-slate-300 font-bold flex items-center gap-2 mb-6">
                <a href="{{ url('/') }}" class="hover:text-[#E3FF73] transition-colors">Beranda</a>
                <span>/</span>
                <a href="{{ url('/') }}#kategori" class="hover:text-[#E3FF73] transition-colors">Kategori</a>
                <span>/</span>
                <span class="text-[#E3FF73]">{{ $category['title'] }}</span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-center">
                <!-- Mascot Image -->
                <div class="md:col-span-4 flex justify-center">
                    <div class="relative w-56 h-56 sm:w-64 sm:h-64 rounded-3xl p-4 bg-white/10 backdrop-blur-md border-2 border-white/20 shadow-2xl flex items-center justify-center">
                        <img src="{{ asset($category['image']) }}" alt="{{ $category['title'] }}" class="w-full h-full object-contain rounded-2xl drop-shadow-xl hover:scale-105 transition-transform duration-300">
                    </div>
                </div>

                <!-- Category Information -->
                <div class="md:col-span-8 text-center md:text-left">
                    <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/10 border border-white/20 text-[#E3FF73] text-[11px] font-black tracking-widest uppercase mb-3 backdrop-blur-md">
                        {{ $category['group'] }}
                    </span>
                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white tracking-tight leading-tight">
                        {{ $category['title'] }}
                    </h1>
                    <p class="text-[#E3FF73] font-bold text-sm sm:text-base mt-2">
                        {{ $category['tagline'] }}
                    </p>
                    <p class="text-white/85 text-sm sm:text-base mt-3 leading-relaxed max-w-2xl">
                        {{ $category['description'] }}
                    </p>

                    <div class="mt-6 flex flex-wrap items-center justify-center md:justify-start gap-3">
                        <a href="#daftar-produk" class="px-6 py-2.5 rounded-full bg-[#E3FF73] hover:bg-[#d6f556] text-[#0A1628] font-black text-xs sm:text-sm shadow-md transition-all">
                            Lihat Rekomendasi Produk
                        </a>
                        <a href="{{ url('/') }}#kategori" class="px-6 py-2.5 rounded-full bg-white/15 hover:bg-white/25 text-white font-bold text-xs sm:text-sm border border-white/20 transition-all">
                            Semua Kategori
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PRODUCTS SECTION -->
    <section id="daftar-produk" class="py-12 sm:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between gap-4 mb-8">
                <div>
                    <h2 class="text-xl sm:text-2xl font-black text-[#0B1A30]">
                        Rekomendasi Produk Pilihan
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-500 font-medium mt-1">
                        Produk kurasi terbaik dalam kategori {{ $category['title'] }}
                    </p>
                </div>
                <span class="px-3 py-1 rounded-full bg-blue-100 text-[#1677d2] font-black text-xs">
                    {{ count($category['products']) }} Produk
                </span>
            </div>

            <!-- Grid 4 Products -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($category['products'] as $product)
                <div class="bg-white rounded-3xl p-5 border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <!-- Image Container with Rounded Frame -->
                        <div class="relative w-full aspect-square rounded-2xl overflow-hidden bg-slate-50 border border-slate-100 p-3 mb-4 flex items-center justify-center">
                            <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}" class="w-full h-full object-contain rounded-xl group-hover:scale-105 transition-transform duration-300">
                            <span class="absolute top-3 left-3 bg-[#0B1A30] text-[#E3FF73] text-[10px] font-black px-2.5 py-1 rounded-full shadow-sm">
                                ⭐ {{ $product['rating'] }} | {{ $product['sold'] }}
                            </span>
                        </div>

                        <!-- Product Title -->
                        <h3 class="font-extrabold text-sm sm:text-base text-[#0B1A30] group-hover:text-[#1677d2] transition-colors leading-snug line-clamp-2">
                            {{ $product['name'] }}
                        </h3>

                        <!-- Product Specs / Subtitle -->
                        <p class="text-xs text-slate-500 font-medium mt-1.5 leading-snug line-clamp-2">
                            {{ $product['specs'] }}
                        </p>
                    </div>

                    <!-- Price & Action Buttons -->
                    <div class="mt-4 pt-4 border-t border-slate-100">
                        <div class="font-black text-lg text-[#1677d2] mb-3">
                            {{ $product['price'] }}
                        </div>

                        <!-- 2 Buttons: Cek Detail & Beli Langsung -->
                        <div class="grid grid-cols-2 gap-2">
                            <a href="{{ $product['shopee_url'] }}" target="_blank" rel="noopener noreferrer" class="px-3 py-2 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-extrabold text-xs text-center transition-colors">
                                Cek Detail
                            </a>
                            <a href="{{ $product['tokopedia_url'] }}" target="_blank" rel="noopener noreferrer" class="px-3 py-2 rounded-xl bg-[#1677d2] hover:bg-[#1264b3] text-white font-extrabold text-xs text-center shadow-sm transition-colors">
                                Beli Langsung
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- OTHER CATEGORIES QUICK SWITCH -->
    <section class="py-12 bg-white border-y border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h3 class="text-lg font-black text-[#0B1A30] mb-4 text-center">
                Jelajahi Kategori Lainnya di toyspixels.com
            </h3>
            <div class="flex flex-wrap items-center justify-center gap-2.5 sm:gap-3">
                @foreach($allCategories as $c)
                <a href="https://toyspixels.com/{{ $c['slug'] }}" class="px-4 py-2 rounded-full text-xs font-bold border transition-all {{ $c['slug'] === $category['slug'] ? 'bg-[#1677d2] text-white border-[#1677d2]' : 'bg-slate-50 text-slate-700 border-slate-200 hover:border-[#1677d2] hover:text-[#1677d2]' }}">
                    {{ $c['title'] }}
                </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- FOOTER (TAHAP 7 STYLE) -->
    <footer class="bg-[#0B1A30] text-slate-300 pt-12 pb-8 border-t border-slate-800">
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
                        <li><a href="https://toyspixel.com/topproduk" class="hover:text-[#E3FF73] transition-colors">Top Produk</a></li>
                        <li><a href="{{ url('/katalog') }}" class="hover:text-[#E3FF73] transition-colors">Katalog</a></li>
                        <li><a href="{{ url('/') }}#faq" class="hover:text-[#E3FF73] transition-colors">FAQ</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-extrabold text-white uppercase tracking-wider mb-3">Kategori Resmi</h4>
                    <ul class="space-y-2 text-slate-400">
                        <li><a href="https://toyspixels.com/kidstoys" class="hover:text-[#E3FF73] transition-colors">Kids & Educational Toys</a></li>
                        <li><a href="https://toyspixels.com/collectibles" class="hover:text-[#E3FF73] transition-colors">Collectibles & Hobbies</a></li>
                        <li><a href="https://toyspixels.com/mobiletablets" class="hover:text-[#E3FF73] transition-colors">Mobile & Tablets</a></li>
                        <li><a href="https://toyspixels.com/gamingentertainment" class="hover:text-[#E3FF73] transition-colors">Gaming & Entertainment</a></li>
                    </ul>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row items-center justify-between gap-4 text-[11px] text-slate-400">
                <p>© {{ date('Y') }} toyspixels.com. Hak cipta dilindungi undang-undang.</p>
                <p>Link afiliasi resmi marketplace: Komisi dari pembelian mendukung keberlangsungan portal kurasi ini.</p>
            </div>
        </div>
    </footer>

</body>
</html>
