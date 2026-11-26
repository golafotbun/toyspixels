<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Katalog Lengkap Semua Produk — Mainan & Gadget Pilihan | toyspixels.com</title>
    <meta name="description" content="Katalog lengkap seluruh produk mainan anak edukatif, Gunpla, Tamiya, diecast, art toy, smartphone, tablet, laptop, dan perangkat gaming dengan link Shopee & Tokopedia resmi.">
    <meta name="keywords" content="Katalog Lengkap, Semua Produk, Mainan Anak, Gunpla, Tamiya, LEGO, PlayStation, Gadget, toyspixels">
    
    <!-- OpenGraph & Social SEO -->
    <meta property="og:title" content="Katalog Lengkap Semua Produk — toyspixels.com">
    <meta property="og:description" content="Katalog kurasi seluruh produk mainan dan gadget pilihan dengan link afiliasi resmi di toyspixels.com.">
    <meta property="og:image" content="{{ asset('images/brand/logo-landscape.png') }}">
    <meta property="og:type" content="website">
    <link rel="canonical" href="https://toyspixels.com/semuaproduk">

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

    <style>
        /* Smooth hanging cards subtle hover in Hero */
        .hanging-card {
            transition: transform 0.4s cubic-bezier(0.2, 0.8, 0.2, 1), box-shadow 0.4s ease;
            transform-origin: top center;
            will-change: transform;
        }
        .hanging-card:hover {
            transform: rotate(0deg) translateY(-8px) scale(1.04) !important;
            z-index: 30;
        }

        /* Product Card */
        .katalog-card {
            transition: transform 0.35s cubic-bezier(0.2, 0.8, 0.2, 1), box-shadow 0.35s ease;
            will-change: transform;
        }
        .katalog-card:hover {
            transform: translateY(-6px);
        }

        /* Hide scrollbar for clean horizontal card scrolling on mobile */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>
<body class="bg-[#FAF5EE] text-[#0A1628] font-sans antialiased selection:bg-[#E3FF73] selection:text-[#0A1628]">

    <!-- Top Notice Bar -->
    <div class="bg-[#0B1A30] text-slate-200 text-xs py-2 px-4 border-b border-slate-800">
        <div class="max-w-7xl mx-auto flex flex-wrap items-center justify-between gap-2">
            <div class="flex items-center gap-2">
                <span class="inline-block w-2 h-2 rounded-full bg-[#E3FF73] animate-pulse"></span>
                <span>Portal Resmi: <strong>Pages Semua Produk — Katalog Lengkap Mainan &amp; Gadget</strong></span>
            </div>
            <div class="flex items-center gap-4 text-[11px]">
                <a href="{{ url('/') }}" class="text-[#E3FF73] hover:underline font-bold flex items-center gap-1">
                    <span>← Kembali ke Beranda Utama</span>
                </a>
                <span class="text-slate-400 hidden sm:inline">Official Affiliate Shopee &amp; Tokopedia</span>
            </div>
        </div>
    </div>

    <!-- MAIN NAVBAR (WARNA COLOR PALETTE HOME PAGE) -->
    <header class="sticky top-0 z-50 bg-[#FAF5EE]/95 backdrop-blur-md border-b border-slate-200/80 transition-all">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between gap-4">
            
            <!-- Logo -->
            <a href="{{ url('/') }}" class="flex items-center gap-2 group">
                <div class="bg-white px-3.5 py-1.5 rounded-xl shadow-sm border border-slate-200/80 flex items-center group-hover:scale-105 transition-transform">
                    <img src="{{ asset('images/brand/logo-landscape.png') }}" alt="toyspixels.com" class="h-8 sm:h-9 object-contain">
                </div>
            </a>

            <!-- Center Navigation Links -->
            <nav class="hidden md:flex items-center gap-7 lg:gap-9 text-xs lg:text-sm font-extrabold tracking-wider text-slate-700">
                <a href="{{ url('/') }}" class="hover:text-[#1677d2] transition-colors">HOME</a>
                <a href="https://toyspixels.com/topproduk" class="hover:text-[#1677d2] transition-colors">TOP PRODUK</a>
                <a href="{{ url('/') }}#kategori" class="hover:text-[#1677d2] transition-colors">KATEGORI</a>
                <a href="https://toyspixels.com/semuaproduk" class="text-[#1677d2] font-black border-b-2 border-[#1677d2] pb-1 transition-colors">KATALOG</a>
                <a href="{{ url('/') }}#news-review" class="hover:text-[#1677d2] transition-colors">NEWS &amp; REVIEW</a>
                <a href="{{ url('/') }}#faq" class="hover:text-[#1677d2] transition-colors">FAQ</a>
            </nav>

            <!-- Action Button -->
            <div class="flex items-center gap-3">
                <a href="#daftar-produk" class="bg-[#1677d2] hover:bg-[#1264b3] text-white font-extrabold text-xs sm:text-sm px-5 sm:px-6 py-2.5 rounded-full shadow-md hover:shadow-lg transition-all flex items-center gap-2 tracking-wide uppercase">
                    <span>LIHAT PRODUK</span>
                    <span class="text-sm">➔</span>
                </a>

                <!-- Mobile Menu Button -->
                <button onclick="toggleMobileNav()" aria-label="Toggle Menu" class="md:hidden flex items-center justify-center w-10 h-10 rounded-full bg-white text-slate-800 border border-slate-200 shadow-sm active:scale-95 transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Drawer -->
        <div id="mobileNavDrawer" class="hidden md:hidden border-t border-slate-200 bg-white/98 backdrop-blur-xl px-4 py-4 transition-all">
            <div class="max-w-7xl mx-auto flex flex-col gap-2.5 text-xs sm:text-sm font-extrabold text-slate-800">
                <a href="{{ url('/') }}" class="py-1.5 hover:text-[#1677d2] flex items-center gap-2">
                    <span>🏠</span> HOME
                </a>
                <a href="https://toyspixels.com/topproduk" class="py-1.5 hover:text-[#1677d2] flex items-center gap-2">
                    <span>⭐</span> TOP PRODUK
                </a>
                <a href="{{ url('/') }}#kategori" class="py-1.5 hover:text-[#1677d2] flex items-center gap-2">
                    <span>🧩</span> KATEGORI PRODUK
                </a>
                <a href="https://toyspixels.com/semuaproduk" class="py-1.5 text-[#1677d2] flex items-center gap-2">
                    <span>📦</span> SEMUA PRODUK
                </a>
                <a href="https://toyspixels.com/katalogmainan" class="py-1.5 pl-6 hover:text-[#1677d2] flex items-center gap-2">
                    <span>🧸</span> Katalog Mainan
                </a>
                <a href="https://toyspixels.com/katalogteknologi" class="py-1.5 pl-6 hover:text-[#1677d2] flex items-center gap-2">
                    <span>⚡</span> Katalog Teknologi
                </a>
                <a href="{{ url('/') }}#news-review" class="py-1.5 hover:text-[#1677d2] flex items-center gap-2">
                    <span>📰</span> NEWS &amp; REVIEW
                </a>
                <a href="{{ url('/') }}#faq" class="py-1.5 hover:text-[#1677d2] flex items-center gap-2">
                    <span>❓</span> FAQ
                </a>
            </div>
        </div>
    </header>

    <!-- ============================================================== -->
    <!-- HERO SECTION (PERSIS REFERENSI PAGES ALLPRODUK.JPG)           -->
    <!-- Wire Arc Curve + 5 Hanging Polaroid Cards with Navy/Blue Clips -->
    <!-- ============================================================== -->
    <section class="relative overflow-hidden pt-10 sm:pt-14 pb-14 sm:pb-20 bg-gradient-to-b from-[#FAF5EE] via-[#FCFAF5] to-[#F5EFE6]">
        
        <!-- Ambient Glow Orbs -->
        <div class="absolute -top-24 left-1/4 w-[500px] h-[500px] bg-blue-200/20 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute top-1/3 right-10 w-[450px] h-[450px] bg-amber-200/20 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            
            <!-- Top Pill Badge -->
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white border border-slate-200/90 text-slate-800 text-xs sm:text-sm font-bold shadow-sm mb-6 hover:shadow-md transition-shadow">
                <span class="text-base">✨</span>
                <span>Kurasi Seluruh Produk Terlengkap &amp; Terpercaya</span>
            </div>

            <!-- Headline H1 (Color Palette Home Page: Primary Blue #1677d2) -->
            <h1 class="text-3xl sm:text-5xl md:text-6xl lg:text-[4rem] font-black text-[#0B1A30] tracking-tight uppercase leading-[1.08] max-w-5xl mx-auto">
                SEMUA PRODUK <span class="text-[#1677d2] inline-block">KATALOG LENGKAP</span> MAINAN &amp; GADGET TERPILIH
            </h1>

            <!-- Subtitle -->
            <p class="mt-4 sm:mt-5 text-sm sm:text-base md:text-lg text-slate-600 max-w-3xl mx-auto leading-relaxed font-medium">
                Jelajahi kurasi lengkap mainan anak edukatif, Gunpla original, koleksi balap Tamiya, diecast Hot Wheels, hingga konsol next-gen dan perangkat produktivitas terbaik dengan link beli resmi terverifikasi.
            </p>

            <!-- Dedicated Category Switcher Buttons in Header (Warna Palette Home Page) -->
            <div class="mt-8 flex justify-center">
                <div class="inline-flex flex-wrap items-center justify-center p-1.5 bg-white rounded-full border border-slate-200/90 shadow-md text-xs sm:text-sm font-extrabold gap-1 sm:gap-2">
                    <a href="{{ url('/semuaproduk') }}" class="px-5 sm:px-7 py-2.5 rounded-full bg-[#1677d2] text-white shadow-sm transition-all flex items-center gap-1.5">
                        <span>Semua Produk (12)</span>
                    </a>
                    <a href="{{ url('/katalogmainan') }}" class="px-5 sm:px-7 py-2.5 rounded-full text-slate-700 hover:text-[#1677d2] hover:bg-slate-100 transition-all flex items-center gap-1.5">
                        <span>Katalog Mainan (6)</span>
                    </a>
                    <a href="{{ url('/katalogteknologi') }}" class="px-5 sm:px-7 py-2.5 rounded-full text-slate-700 hover:text-[#1677d2] hover:bg-slate-100 transition-all flex items-center gap-1.5">
                        <span>Katalog Teknologi (6)</span>
                    </a>
                </div>
            </div>

            <!-- CTA Button -->
            <div class="mt-6 sm:mt-8 flex justify-center">
                <a href="#daftar-produk" class="inline-flex items-center gap-2.5 px-8 sm:px-10 py-3.5 sm:py-4 rounded-full bg-[#1677d2] hover:bg-[#1264b3] text-white font-extrabold text-sm sm:text-base shadow-[0_10px_25px_-5px_rgba(22,119,210,0.4)] hover:shadow-[0_15px_30px_-5px_rgba(22,119,210,0.6)] hover:-translate-y-0.5 active:translate-y-0 transition-all">
                    <span>Jelajahi Seluruh Produk</span>
                    <span class="text-lg">↓</span>
                </a>
            </div>

            <!-- ============================================================== -->
            <!-- CLOTHESLINE WIRE & 5 POLAROID HANGING CARDS (CAMPURAN TOYS & TECH) -->
            <!-- ============================================================== -->
            <div class="relative w-full max-w-6xl mx-auto mt-10 sm:mt-16 pt-6 pb-6 select-none">
                
                <!-- The Hanging Wire / String Curve (SVG Bezier Arc) -->
                <div class="hidden md:block absolute top-10 inset-x-0 w-full pointer-events-none z-10">
                    <svg class="w-full h-20" viewBox="0 0 1100 80" fill="none" preserveAspectRatio="none">
                        <path d="M 0,15 Q 550,75 1100,15" stroke="#cbd5e1" stroke-width="2.5" stroke-linecap="round" />
                        <path d="M 0,14 Q 550,74 1100,14" stroke="#94a3b8" stroke-width="1.8" stroke-linecap="round" />
                    </svg>
                </div>

                <!-- 5 Hanging Cards -->
                <div class="flex items-center justify-between gap-4 sm:gap-5 overflow-x-auto no-scrollbar py-6 px-4 md:px-2 md:overflow-visible">

                    <!-- CARD 1: Gundam PG Unleashed (Far Left - Tilted Left -6deg) -->
                    <div class="shrink-0 w-52 sm:w-56 md:w-52 lg:w-56 hanging-card relative md:[transform:rotate(-6deg)_translateY(12px)]">
                        <div class="absolute -top-4 sm:-top-5 left-1/2 -translate-x-1/2 w-5 sm:w-6 h-8 sm:h-9 bg-[#1677d2] rounded-md shadow-md flex items-center justify-center z-20 border border-blue-400">
                            <div class="w-2 h-2 rounded-full bg-[#E3FF73] shadow-inner"></div>
                        </div>
                        <a href="{{ url('/post/gundam-pg-unleashed-rx-78-2') }}" class="block bg-white rounded-3xl p-3 sm:p-3.5 shadow-[0_15px_35px_rgba(0,0,0,0.1)] border border-slate-200/90 hover:border-[#1677d2] transition-colors text-left group">
                            <div class="w-full aspect-[4/3] rounded-2xl overflow-hidden bg-slate-900 relative">
                                <img src="{{ asset('images/toys/gundam.jpg') }}" alt="Gundam PG Unleashed" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <span class="absolute top-2 left-2 bg-[#1677d2] text-white text-[9px] font-black px-2 py-0.5 rounded-full uppercase tracking-wider shadow">Gunpla</span>
                            </div>
                            <div class="mt-3 px-1">
                                <h3 class="font-extrabold text-sm sm:text-base text-slate-900 group-hover:text-[#1677d2] transition-colors leading-tight truncate">
                                    Gundam PG Unleashed
                                </h3>
                                <p class="text-[11px] sm:text-xs text-slate-500 mt-1 truncate">
                                    Rp 3.250.000 • Skala 1/60
                                </p>
                            </div>
                        </a>
                    </div>

                    <!-- CARD 2: LEGO Star Wars (Mid Left - Tilted Left -3deg) -->
                    <div class="shrink-0 w-52 sm:w-56 md:w-52 lg:w-56 hanging-card relative md:[transform:rotate(-3deg)_translateY(28px)]">
                        <div class="absolute -top-4 sm:-top-5 left-1/2 -translate-x-1/2 w-5 sm:w-6 h-8 sm:h-9 bg-[#1677d2] rounded-md shadow-md flex items-center justify-center z-20 border border-blue-400">
                            <div class="w-2 h-2 rounded-full bg-[#E3FF73] shadow-inner"></div>
                        </div>
                        <a href="{{ url('/post/lego-star-wars-millennium-falcon') }}" class="block bg-white rounded-3xl p-3 sm:p-3.5 shadow-[0_15px_35px_rgba(0,0,0,0.1)] border border-slate-200/90 hover:border-[#1677d2] transition-colors text-left group">
                            <div class="w-full aspect-[4/3] rounded-2xl overflow-hidden bg-slate-900 relative">
                                <img src="{{ asset('images/toys/lego.jpg') }}" alt="LEGO Millennium Falcon" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <span class="absolute top-2 left-2 bg-amber-500 text-white text-[9px] font-black px-2 py-0.5 rounded-full uppercase tracking-wider shadow">LEGO</span>
                            </div>
                            <div class="mt-3 px-1">
                                <h3 class="font-extrabold text-sm sm:text-base text-slate-900 group-hover:text-[#1677d2] transition-colors leading-tight truncate">
                                    LEGO Millennium Falcon
                                </h3>
                                <p class="text-[11px] sm:text-xs text-slate-500 mt-1 truncate">
                                    Rp 2.450.000 • 1.351 Pcs
                                </p>
                            </div>
                        </a>
                    </div>

                    <!-- CARD 3: Sony PlayStation 5 (Center - Straight 0deg, highlight) -->
                    <div class="shrink-0 w-52 sm:w-56 md:w-52 lg:w-56 hanging-card relative md:[transform:rotate(0deg)_translateY(38px)]">
                        <div class="absolute -top-4 sm:-top-5 left-1/2 -translate-x-1/2 w-5 sm:w-6 h-8 sm:h-9 bg-[#1677d2] rounded-md shadow-md flex items-center justify-center z-20 border border-blue-400">
                            <div class="w-2 h-2 rounded-full bg-[#E3FF73] shadow-inner"></div>
                        </div>
                        <a href="{{ url('/post/sony-playstation-5-slim-digital') }}" class="block bg-white rounded-3xl p-3 sm:p-3.5 shadow-[0_18px_40px_rgba(0,0,0,0.13)] border-2 border-[#1677d2]/60 hover:border-[#1677d2] transition-colors text-left group">
                            <div class="w-full aspect-[4/3] rounded-2xl overflow-hidden bg-slate-900 relative">
                                <img src="{{ asset('images/toys/playstation.jpg') }}" alt="Sony PlayStation 5" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <span class="absolute top-2 left-2 bg-[#1677d2] text-white text-[9px] font-black px-2 py-0.5 rounded-full uppercase tracking-wider shadow">Gaming</span>
                            </div>
                            <div class="mt-3 px-1">
                                <h3 class="font-extrabold text-sm sm:text-base text-slate-900 group-hover:text-[#1677d2] transition-colors leading-tight truncate">
                                    PlayStation 5 Slim
                                </h3>
                                <p class="text-[11px] sm:text-xs text-slate-500 mt-1 truncate">
                                    Rp 7.899.000 • 1TB SSD
                                </p>
                            </div>
                        </a>
                    </div>

                    <!-- CARD 4: Tamiya Avante Black Special (Mid Right - Tilted Right +3deg) -->
                    <div class="shrink-0 w-52 sm:w-56 md:w-52 lg:w-56 hanging-card relative md:[transform:rotate(3deg)_translateY(28px)]">
                        <div class="absolute -top-4 sm:-top-5 left-1/2 -translate-x-1/2 w-5 sm:w-6 h-8 sm:h-9 bg-[#1677d2] rounded-md shadow-md flex items-center justify-center z-20 border border-blue-400">
                            <div class="w-2 h-2 rounded-full bg-[#E3FF73] shadow-inner"></div>
                        </div>
                        <a href="{{ url('/post/tamiya-avante-black-special-4wd') }}" class="block bg-white rounded-3xl p-3 sm:p-3.5 shadow-[0_15px_35px_rgba(0,0,0,0.1)] border border-slate-200/90 hover:border-[#1677d2] transition-colors text-left group">
                            <div class="w-full aspect-[4/3] rounded-2xl overflow-hidden bg-slate-900 relative">
                                <img src="{{ asset('images/toys/tamiya.jpg') }}" alt="Tamiya Avante" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <span class="absolute top-2 left-2 bg-blue-600 text-white text-[9px] font-black px-2 py-0.5 rounded-full uppercase tracking-wider shadow">Tamiya</span>
                            </div>
                            <div class="mt-3 px-1">
                                <h3 class="font-extrabold text-sm sm:text-base text-slate-900 group-hover:text-[#1677d2] transition-colors leading-tight truncate">
                                    Tamiya Avante 4WD
                                </h3>
                                <p class="text-[11px] sm:text-xs text-slate-500 mt-1 truncate">
                                    Rp 289.000 • VS Chassis
                                </p>
                            </div>
                        </a>
                    </div>

                    <!-- CARD 5: Nintendo Switch OLED (Far Right - Tilted Right +6deg) -->
                    <div class="shrink-0 w-52 sm:w-56 md:w-52 lg:w-56 hanging-card relative md:[transform:rotate(6deg)_translateY(12px)]">
                        <div class="absolute -top-4 sm:-top-5 left-1/2 -translate-x-1/2 w-5 sm:w-6 h-8 sm:h-9 bg-[#1677d2] rounded-md shadow-md flex items-center justify-center z-20 border border-blue-400">
                            <div class="w-2 h-2 rounded-full bg-[#E3FF73] shadow-inner"></div>
                        </div>
                        <a href="{{ url('/post/nintendo-switch-oled-mario-red') }}" class="block bg-white rounded-3xl p-3 sm:p-3.5 shadow-[0_15px_35px_rgba(0,0,0,0.1)] border border-slate-200/90 hover:border-[#1677d2] transition-colors text-left group">
                            <div class="w-full aspect-[4/3] rounded-2xl overflow-hidden bg-slate-900 relative">
                                <img src="{{ asset('images/toys/nintendo.jpg') }}" alt="Nintendo Switch OLED" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <span class="absolute top-2 left-2 bg-red-600 text-white text-[9px] font-black px-2 py-0.5 rounded-full uppercase tracking-wider shadow">Nintendo</span>
                            </div>
                            <div class="mt-3 px-1">
                                <h3 class="font-extrabold text-sm sm:text-base text-slate-900 group-hover:text-[#1677d2] transition-colors leading-tight truncate">
                                    Nintendo Switch OLED
                                </h3>
                                <p class="text-[11px] sm:text-xs text-slate-500 mt-1 truncate">
                                    Rp 4.650.000 • Mario Red
                                </p>
                            </div>
                        </a>
                    </div>

                </div>

            </div>

            <!-- Brand Partners Row -->
            <div class="mt-14 sm:mt-20 pt-8 border-t border-slate-200/80">
                <p class="text-xs font-bold text-slate-600 uppercase tracking-widest mb-6">
                    Brand &amp; Produsen Mainan &amp; Teknologi Terkemuka
                </p>
                <div class="flex flex-wrap items-center justify-center gap-6 sm:gap-10 md:gap-12 opacity-80 grayscale hover:grayscale-0 transition-all duration-300">
                    <span class="font-black text-slate-600 hover:text-red-600 text-xs sm:text-sm tracking-widest uppercase transition-colors">BANDAI NAMCO</span>
                    <span class="font-black text-slate-600 hover:text-blue-600 text-xs sm:text-sm tracking-widest uppercase transition-colors">TAMIYA</span>
                    <span class="font-black text-slate-600 hover:text-amber-500 text-xs sm:text-sm tracking-widest uppercase transition-colors">LEGO</span>
                    <span class="font-black text-slate-600 hover:text-indigo-600 text-xs sm:text-sm tracking-widest uppercase transition-colors">PLAYSTATION</span>
                    <span class="font-black text-slate-600 hover:text-red-500 text-xs sm:text-sm tracking-widest uppercase transition-colors">NINTENDO</span>
                    <span class="font-black text-slate-600 hover:text-pink-600 text-xs sm:text-sm tracking-widest uppercase transition-colors">POP MART</span>
                    <span class="font-black text-slate-600 hover:text-cyan-600 text-xs sm:text-sm tracking-widest uppercase transition-colors">TAKARA TOMY</span>
                    <span class="font-black text-slate-600 hover:text-teal-600 text-xs sm:text-sm tracking-widest uppercase transition-colors">LOGITECH</span>
                    <span class="font-black text-slate-600 hover:text-slate-900 text-xs sm:text-sm tracking-widest uppercase transition-colors">APPLE</span>
                </div>
            </div>

        </div>
    </section>

    <!-- ============================================================== -->
    <!-- DAFTAR PRODUK (PAGES SEMUAPRODUK - TAG: SEMUAPRODUK)           -->
    <!-- Tanpa tulisan dobel di atas produk, langsung grid bersih       -->
    <!-- ============================================================== -->
    <section id="daftar-produk" class="py-12 sm:py-16 bg-[#FAF5EE] border-t border-b border-[#E8DFD0]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- PRODUCT GRID (12 PRODUK) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 sm:gap-7">
                @foreach($products as $prod)
                <div class="katalog-card bg-white rounded-3xl p-5 border border-slate-200/90 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group" data-tag="semuaproduk">
                    <div>
                        <!-- Image Container with Rounded Frame -->
                        <div class="relative w-full aspect-square rounded-2xl overflow-hidden bg-slate-50 border border-slate-100 p-3 mb-4 flex items-center justify-center">
                            <a href="{{ url('/post/' . $prod['slug']) }}" class="w-full h-full flex items-center justify-center">
                                <img src="{{ asset($prod['image']) }}" alt="{{ $prod['title'] }}" class="w-full h-full object-contain rounded-xl group-hover:scale-105 transition-transform duration-500">
                            </a>
                            <span class="absolute top-3 left-3 bg-[#0B1A30] text-[#E3FF73] text-[10px] font-black px-2.5 py-1 rounded-full shadow-sm">
                                ⭐ {{ $prod['rating'] }} | {{ $prod['sold'] }}
                            </span>
                            <span class="absolute top-3 right-3 bg-blue-50 text-[#1677d2] text-[10px] font-black px-2.5 py-0.5 rounded-full border border-blue-200 shadow-sm">
                                #semuaproduk
                            </span>
                        </div>

                        <!-- Kategori resmi link -->
                        <a href="{{ $prod['category_url'] }}" class="text-[11px] font-black text-[#1677d2] hover:underline uppercase tracking-wider inline-block mb-1.5">
                            {{ $prod['category_name'] }}
                        </a>

                        <!-- Product Title -->
                        <h3 class="font-extrabold text-base text-[#0B1A30] group-hover:text-[#1677d2] transition-colors leading-snug line-clamp-2" title="{{ $prod['title'] }}">
                            <a href="{{ url('/post/' . $prod['slug']) }}">
                                {{ $prod['display_title'] ?? \Illuminate\Support\Str::words($prod['title'], 5, '') }}
                            </a>
                        </h3>

                        <!-- Product Summary -->
                        <p class="text-xs text-slate-500 font-medium mt-1.5 leading-snug line-clamp-2">
                            {{ $prod['summary'] }}
                        </p>
                    </div>

                    <!-- Price & Action Buttons -->
                    <div class="mt-5 pt-4 border-t border-slate-100">
                        <div class="font-black text-xl text-[#0B1A30] mb-3">
                            Rp {{ $prod['price'] }}
                        </div>

                        <!-- 2 Buttons: Cek Detail & Shopee -->
                        <div class="grid grid-cols-2 gap-2">
                            <a href="{{ url('/post/' . $prod['slug']) }}" class="px-3 py-2.5 rounded-xl bg-slate-100 hover:bg-blue-50 text-[#0B1A30] hover:text-[#1677d2] font-extrabold text-xs text-center transition-colors">
                                Cek Detail
                            </a>
                            <a href="{{ $prod['affiliate_url'] ?? $prod['shopee_url'] }}" target="_blank" rel="noopener nofollow" class="px-3 py-2.5 rounded-xl bg-[#EE4D2D] hover:bg-[#d83f21] text-white font-extrabold text-xs text-center shadow-sm transition-colors">
                                Shopee
                            </a>
                        </div>
                        <a href="{{ $prod['tokopedia_url'] ?? 'https://tokopedia.com' }}" target="_blank" rel="noopener nofollow" class="mt-2 text-[11px] font-bold text-slate-400 hover:text-[#03AC0E] text-center block transition-colors">
                            Tersedia di Tokopedia ➔
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Bottom Exploration Box -->
            <div class="mt-14 p-8 sm:p-10 rounded-3xl bg-[#0B1A30] text-white shadow-xl flex flex-col md:flex-row items-center justify-between gap-6 border-2 border-[#1677d2]/30">
                <div>
                    <span class="text-xs font-black text-[#E3FF73] uppercase tracking-wider block mb-1">Eksplorasi Katalog Berdasarkan Kategori</span>
                    <h3 class="text-xl sm:text-2xl font-black">Mau fokus mencari koleksi Mainan atau Perangkat Teknologi?</h3>
                    <p class="text-slate-300 text-xs sm:text-sm mt-1 max-w-xl">
                        Kunjungi halaman khusus yang dirancang dengan filter tag mendalam untuk mainan edukasi atau gadget pilihan.
                    </p>
                </div>
                <div class="flex flex-wrap items-center gap-3 shrink-0">
                    <a href="https://toyspixels.com/katalogmainan" class="px-6 py-3 rounded-full bg-[#1677d2] hover:bg-blue-600 text-white font-extrabold text-xs sm:text-sm shadow-md transition-all flex items-center gap-2">
                        <span>🧸 Katalog Mainan</span>
                        <span>➔</span>
                    </a>
                    <a href="https://toyspixels.com/katalogteknologi" class="px-6 py-3 rounded-full bg-[#E3FF73] hover:bg-[#d6f556] text-[#0A1628] font-black text-xs sm:text-sm shadow-md transition-all flex items-center gap-2">
                        <span>⚡ Katalog Teknologi</span>
                        <span>➔</span>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- FOOTER -->
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
                        <li><a href="https://toyspixels.com/topproduk" class="hover:text-[#E3FF73] transition-colors">Top Produk</a></li>
                        <li><a href="https://toyspixels.com/semuaproduk" class="hover:text-[#E3FF73] transition-colors">Semua Produk</a></li>
                        <li><a href="https://toyspixels.com/katalogmainan" class="hover:text-[#E3FF73] transition-colors">Katalog Mainan</a></li>
                        <li><a href="https://toyspixels.com/katalogteknologi" class="hover:text-[#E3FF73] transition-colors">Katalog Teknologi</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-extrabold text-white uppercase tracking-wider mb-3">Kategori Resmi</h4>
                    <ul class="space-y-2 text-slate-400">
                        <li><a href="https://toyspixels.com/kidstoys" class="hover:text-[#E3FF73] transition-colors">Kids &amp; Educational Toys</a></li>
                        <li><a href="https://toyspixels.com/collectibles" class="hover:text-[#E3FF73] transition-colors">Collectibles &amp; Hobbies</a></li>
                        <li><a href="https://toyspixels.com/mobiletablets" class="hover:text-[#E3FF73] transition-colors">Mobile &amp; Tablets</a></li>
                        <li><a href="https://toyspixels.com/gamingentertainment" class="hover:text-[#E3FF73] transition-colors">Gaming &amp; Entertainment</a></li>
                    </ul>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row items-center justify-between gap-4 text-[11px] text-slate-400">
                <p>© {{ date('Y') }} toyspixels.com. Hak cipta dilindungi undang-undang.</p>
                <p>Link afiliasi resmi marketplace: Komisi dari pembelian mendukung keberlangsungan portal kurasi ini.</p>
            </div>
        </div>
    </footer>

    <script>
        function toggleMobileNav() {
            var drawer = document.getElementById('mobileNavDrawer');
            if (drawer) {
                drawer.classList.toggle('hidden');
            }
        }
    </script>
</body>
</html>
