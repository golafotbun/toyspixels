<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Top Produk Terpopuler & Pilihan Terbaik — ToysPixel</title>
    <meta name="description" content="Katalog kurasi produk top toys pilihan terbaik dan terpopuler. Temukan rekomendasi mainan edukatif, Gunpla, Tamiya, diecast, dan gadget hobi dengan ulasan terlengkap.">
    <meta name="keywords" content="Top Produk, Top Toys, Rekomendasi Mainan, ToysPixel, Gunpla, Tamiya, Hot Wheels, Lego, PS5">
    
    <!-- OpenGraph & Social SEO -->
    <meta property="og:title" content="Top Produk Terpopuler & Pilihan Terbaik — ToysPixel">
    <meta property="og:description" content="Katalog kurasi produk top toys pilihan terbaik dan terpopuler di ToysPixel.">
    <meta property="og:image" content="{{ asset('images/brand/logo-landscape.png') }}">
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
                            green: '#00C853',
                            greenHover: '#00B048',
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

        /* Top Toy Card (SAMA PERSIS DENGAN DI HOMEPAGE) */
        .top-toy-card {
            transition: transform 0.4s cubic-bezier(0.2, 0.8, 0.2, 1), opacity 0.4s ease, box-shadow 0.3s ease;
            will-change: transform, opacity;
        }
        .top-toy-card:hover {
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
<body class="bg-[#FAF5EE] text-[#0A1628] font-sans antialiased selection:bg-[#00C853] selection:text-white">

    <!-- Top Notice Bar (Official Portal Info) -->
    <div class="bg-[#0B1A30] text-slate-200 text-xs py-2 px-4 border-b border-slate-800">
        <div class="max-w-7xl mx-auto flex flex-wrap items-center justify-between gap-2">
            <div class="flex items-center gap-2">
                <span class="inline-block w-2 h-2 rounded-full bg-[#00C853] animate-pulse"></span>
                <span>Portal Resmi: <strong>Daftar Kurasi Top Produk &amp; Top Toys Pilihan</strong></span>
            </div>
            <div class="flex items-center gap-4 text-[11px]">
                <a href="{{ url('/') }}" class="text-[#E3FF73] hover:underline font-bold flex items-center gap-1">
                    <span>← Kembali ke Beranda Utama</span>
                </a>
                <span class="text-slate-400 hidden sm:inline">Official Affiliate Shopee &amp; Tokopedia</span>
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- MAIN NAVIGATION HEADER (PERSIS REFERENSI PAGES TOP PRODUK.JPG) -->
    <!-- Minimalist Clean White/Cream, Logo Kiri, Nav Tengah, Green Pill Kanan -->
    <!-- ============================================================== -->
    <header class="sticky top-0 z-50 bg-[#FAF5EE]/95 backdrop-blur-md border-b border-slate-200/80 transition-all">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between gap-4">
            
            <!-- Left: Brand Logo Landscape -->
            <a href="{{ url('/') }}" class="flex items-center gap-2 group">
                <div class="bg-white px-3.5 py-1.5 rounded-xl shadow-sm border border-slate-200/80 flex items-center group-hover:scale-105 transition-transform">
                    <img src="{{ asset('images/brand/logo-landscape.png') }}" alt="toyspixels.com" class="h-8 sm:h-9 object-contain">
                </div>
            </a>

            <!-- Center: Navigation Links (Matching pages top produk.jpg style) -->
            <nav class="hidden md:flex items-center gap-7 lg:gap-9 text-xs lg:text-sm font-extrabold tracking-wider text-slate-700">
                <a href="{{ url('/') }}" class="hover:text-[#00C853] transition-colors">HOME</a>
                <a href="https://toyspixels.com/topproduk" class="text-[#00C853] font-black border-b-2 border-[#00C853] pb-1 transition-colors">TOP PRODUK</a>
                <a href="{{ url('/') }}#kategori" class="hover:text-[#00C853] transition-colors">KATEGORI</a>
                <a href="{{ url('/katalog') }}" class="hover:text-[#00C853] transition-colors">KATALOG</a>
                <a href="{{ url('/') }}#news-review" class="hover:text-[#00C853] transition-colors">NEWS &amp; REVIEW</a>
                <a href="{{ url('/') }}#faq" class="hover:text-[#00C853] transition-colors">FAQ</a>
            </nav>

            <!-- Right: Vibrant Green Pill Button (Persis Download Button di Referensi) -->
            <div class="flex items-center gap-3">
                <a href="{{ url('/katalog') }}" class="hidden sm:inline-block text-xs font-extrabold text-slate-600 hover:text-slate-900 transition-colors uppercase tracking-wider">
                    Semua Produk
                </a>
                <a href="#koleksi-produk" class="bg-[#00C853] hover:bg-[#00B048] text-white font-extrabold text-xs sm:text-sm px-5 sm:px-6 py-2.5 rounded-full shadow-[0_4px_18px_rgba(0,200,83,0.35)] hover:shadow-[0_6px_22px_rgba(0,200,83,0.5)] hover:-translate-y-0.5 active:translate-y-0 transition-all flex items-center gap-2 tracking-wide uppercase">
                    <span>LIHAT PRODUK</span>
                    <span class="text-sm">➔</span>
                </a>
                
                <!-- Mobile Menu Button -->
                <button onclick="toggleTopProdukNav()" aria-label="Toggle Menu" class="md:hidden flex items-center justify-center w-10 h-10 rounded-full bg-white text-slate-800 border border-slate-200 shadow-sm active:scale-95 transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Nav Menu Drawer -->
        <div id="topProdukNavDrawer" class="hidden md:hidden border-t border-slate-200 bg-white/98 backdrop-blur-xl px-4 py-4 transition-all">
            <div class="max-w-7xl mx-auto flex flex-col gap-2.5 text-xs sm:text-sm font-extrabold text-slate-800">
                <a href="{{ url('/') }}" class="py-1.5 hover:text-[#00C853] flex items-center gap-2">
                    <span>🏠</span> HOME
                </a>
                <a href="https://toyspixels.com/topproduk" class="py-1.5 text-[#00C853] flex items-center gap-2">
                    <span>⭐</span> TOP PRODUK
                </a>
                <a href="{{ url('/') }}#kategori" class="py-1.5 hover:text-[#00C853] flex items-center gap-2">
                    <span>🧩</span> KATEGORI PRODUK
                </a>
                <a href="{{ url('/katalog') }}" class="py-1.5 hover:text-[#00C853] flex items-center gap-2">
                    <span>📦</span> KATALOG LENGKAP
                </a>
                <a href="{{ url('/') }}#news-review" class="py-1.5 hover:text-[#00C853] flex items-center gap-2">
                    <span>📰</span> NEWS &amp; REVIEW
                </a>
                <a href="{{ url('/') }}#faq" class="py-1.5 hover:text-[#00C853] flex items-center gap-2">
                    <span>❓</span> FAQ
                </a>
            </div>
        </div>
    </header>

    <!-- ============================================================== -->
    <!-- HERO SECTION (PERSIS REFERENSI PAGES TOP PRODUK.JPG)           -->
    <!-- Badge Pill -> Huge Headline dengan "TOP TOYS" warna Hijau       -->
    <!-- Subtitle -> Green Pill Button -> Clothesline Wire Hanging Cards -->
    <!-- ============================================================== -->
    <section class="relative overflow-hidden pt-10 sm:pt-14 pb-14 sm:pb-20 bg-gradient-to-b from-[#FAF5EE] via-[#FCFAF5] to-[#F5EFE6]">
        
        <!-- Soft Ambient Glow Orbs in Background -->
        <div class="absolute -top-24 left-1/4 w-[500px] h-[500px] bg-emerald-200/20 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute top-1/3 right-10 w-[450px] h-[450px] bg-amber-200/20 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            
            <!-- Top Pill Badge (Persis: Best App for kids education di referensi) -->
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white border border-slate-200/90 text-slate-800 text-xs sm:text-sm font-bold shadow-sm mb-6 hover:shadow-md transition-shadow">
                <span class="text-base">🎉</span>
                <span>Kurasi Mainan &amp; Gadget Pilihan Terbaik</span>
            </div>

            <!-- Headline H1 (Persis Typography: SAFE WEB FOR KIDS TO LEARN AND GROW) -->
            <!-- Kata "TOP TOYS" diberi warna Hijau (#00C853) persis kata "KIDS" di referensi -->
            <h1 class="text-3xl sm:text-5xl md:text-6xl lg:text-[4.2rem] font-black text-[#111827] tracking-tight uppercase leading-[1.08] max-w-5xl mx-auto">
                KOLEKSI PRODUK <span class="text-[#00C853] inline-block">TOP TOYS</span> UNTUK<br class="hidden sm:inline"> EDUKASI &amp; KOLEKSI
            </h1>

            <!-- Subtitle (Persis: With Built In Parental Controls And Monitoring) -->
            <p class="mt-4 sm:mt-5 text-sm sm:text-base md:text-lg text-slate-600 max-w-2xl mx-auto leading-relaxed font-medium">
                Rekomendasi mainan edukatif, action figures, diecast, dan gadget hobi dengan ulasan terlengkap serta link toko resmi terverifikasi di Shopee &amp; Tokopedia.
            </p>

            <!-- Green Pill CTA Button (Persis: Download App di referensi) -->
            <div class="mt-6 sm:mt-8 flex justify-center">
                <a href="#koleksi-produk" class="inline-flex items-center gap-2.5 px-8 sm:px-10 py-3.5 sm:py-4 rounded-full bg-[#00C853] hover:bg-[#00B048] text-white font-extrabold text-sm sm:text-base shadow-[0_10px_25px_-5px_rgba(0,200,83,0.45)] hover:shadow-[0_15px_30px_-5px_rgba(0,200,83,0.6)] hover:-translate-y-0.5 active:translate-y-0 transition-all">
                    <span>Jelajahi Produk Pilihan</span>
                    <span class="text-lg">↓</span>
                </a>
            </div>

            <!-- ============================================================== -->
            <!-- CLOTHESLINE WIRE & 5 POLAROID HANGING CARDS (ICONIC HERO FEATURE)-->
            <!-- Persis seperti di gambar referensi: Tali Lengkung + Klip Hijau -->
            <!-- ============================================================== -->
            <div class="relative w-full max-w-6xl mx-auto mt-10 sm:mt-16 pt-6 pb-6 select-none">
                
                <!-- The Hanging Wire / String Curve (SVG Bezier Arc persis referensi) -->
                <div class="hidden md:block absolute top-10 inset-x-0 w-full pointer-events-none z-10">
                    <svg class="w-full h-20" viewBox="0 0 1100 80" fill="none" preserveAspectRatio="none">
                        <!-- Shadow string -->
                        <path d="M 0,15 Q 550,75 1100,15" stroke="#cbd5e1" stroke-width="2.5" stroke-linecap="round" />
                        <!-- Main delicate wire -->
                        <path d="M 0,14 Q 550,74 1100,14" stroke="#94a3b8" stroke-width="1.8" stroke-linecap="round" />
                    </svg>
                </div>

                <!-- Cards Container: 5 Hanging Polaroid Cards along the Arc Curve -->
                <div class="flex items-center justify-between gap-4 sm:gap-5 overflow-x-auto no-scrollbar py-6 px-4 md:px-2 md:overflow-visible">

                    <!-- CARD 1: Gundam Barbatos (Far Left - Tilted Left -6deg) -->
                    <div class="shrink-0 w-52 sm:w-56 md:w-52 lg:w-56 hanging-card relative md:[transform:rotate(-6deg)_translateY(12px)]">
                        <!-- Green Clothespin / Clip (Persis Klip Hijau di referensi) -->
                        <div class="absolute -top-4 sm:-top-5 left-1/2 -translate-x-1/2 w-5 sm:w-6 h-8 sm:h-9 bg-[#00C853] rounded-md shadow-md flex items-center justify-center z-20 border border-emerald-400">
                            <div class="w-2 h-2 rounded-full bg-white/90 shadow-inner"></div>
                        </div>
                        <!-- White Polaroid Frame -->
                        <a href="{{ url('/topproduk/gundam-barbatos') }}" class="block bg-white rounded-3xl p-3 sm:p-3.5 shadow-[0_15px_35px_rgba(0,0,0,0.1)] border border-slate-200/90 hover:border-[#00C853] transition-colors text-left group">
                            <div class="w-full aspect-[4/3] rounded-2xl overflow-hidden bg-slate-900 relative">
                                <img src="{{ asset('images/toys/gundam.jpg') }}" alt="Gundam Barbatos" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <span class="absolute top-2 left-2 bg-[#00C853] text-white text-[9px] font-black px-2 py-0.5 rounded-full uppercase tracking-wider shadow">#1 TOP</span>
                            </div>
                            <div class="mt-3 px-1">
                                <h3 class="font-extrabold text-sm sm:text-base text-slate-900 group-hover:text-[#00C853] transition-colors leading-tight">
                                    Gundam Barbatos
                                </h3>
                                <p class="text-[11px] sm:text-xs text-slate-500 mt-1 truncate">
                                    Gunpla Master Grade 1/100
                                </p>
                            </div>
                        </a>
                    </div>

                    <!-- CARD 2: Tamiya Avante 4WD (Mid Left - Tilted Left -3deg) -->
                    <div class="shrink-0 w-52 sm:w-56 md:w-52 lg:w-56 hanging-card relative md:[transform:rotate(-3deg)_translateY(28px)]">
                        <!-- Green Clothespin / Clip -->
                        <div class="absolute -top-4 sm:-top-5 left-1/2 -translate-x-1/2 w-5 sm:w-6 h-8 sm:h-9 bg-[#00C853] rounded-md shadow-md flex items-center justify-center z-20 border border-emerald-400">
                            <div class="w-2 h-2 rounded-full bg-white/90 shadow-inner"></div>
                        </div>
                        <!-- White Polaroid Frame -->
                        <a href="{{ url('/topproduk/tamiya-avante-4wd') }}" class="block bg-white rounded-3xl p-3 sm:p-3.5 shadow-[0_15px_35px_rgba(0,0,0,0.1)] border border-slate-200/90 hover:border-[#00C853] transition-colors text-left group">
                            <div class="w-full aspect-[4/3] rounded-2xl overflow-hidden bg-slate-900 relative">
                                <img src="{{ asset('images/toys/tamiya.jpg') }}" alt="Tamiya Avante 4WD" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <span class="absolute top-2 left-2 bg-blue-600 text-white text-[9px] font-black px-2 py-0.5 rounded-full uppercase tracking-wider shadow">#2 TOP</span>
                            </div>
                            <div class="mt-3 px-1">
                                <h3 class="font-extrabold text-sm sm:text-base text-slate-900 group-hover:text-[#00C853] transition-colors leading-tight">
                                    Tamiya Avante 4WD
                                </h3>
                                <p class="text-[11px] sm:text-xs text-slate-500 mt-1 truncate">
                                    Mini 4WD Sasis Aerodinamis
                                </p>
                            </div>
                        </a>
                    </div>

                    <!-- CARD 3: PlayStation 5 Slim (Center - Straight 0deg, hanging lowest) -->
                    <div class="shrink-0 w-52 sm:w-56 md:w-52 lg:w-56 hanging-card relative md:[transform:rotate(0deg)_translateY(38px)]">
                        <!-- Green Clothespin / Clip -->
                        <div class="absolute -top-4 sm:-top-5 left-1/2 -translate-x-1/2 w-5 sm:w-6 h-8 sm:h-9 bg-[#00C853] rounded-md shadow-md flex items-center justify-center z-20 border border-emerald-400">
                            <div class="w-2 h-2 rounded-full bg-white/90 shadow-inner"></div>
                        </div>
                        <!-- White Polaroid Frame -->
                        <a href="{{ url('/topproduk/playstation-5-slim') }}" class="block bg-white rounded-3xl p-3 sm:p-3.5 shadow-[0_18px_40px_rgba(0,0,0,0.13)] border-2 border-[#00C853]/60 hover:border-[#00C853] transition-colors text-left group">
                            <div class="w-full aspect-[4/3] rounded-2xl overflow-hidden bg-slate-900 relative">
                                <img src="{{ asset('images/toys/playstation.jpg') }}" alt="PlayStation 5 Slim" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <span class="absolute top-2 left-2 bg-[#00C853] text-white text-[9px] font-black px-2 py-0.5 rounded-full uppercase tracking-wider shadow">#3 TOP</span>
                            </div>
                            <div class="mt-3 px-1">
                                <h3 class="font-extrabold text-sm sm:text-base text-slate-900 group-hover:text-[#00C853] transition-colors leading-tight">
                                    PlayStation 5 Slim
                                </h3>
                                <p class="text-[11px] sm:text-xs text-slate-500 mt-1 truncate">
                                    Next-Gen Console 4K 120FPS
                                </p>
                            </div>
                        </a>
                    </div>

                    <!-- CARD 4: Pop Mart Labubu (Mid Right - Tilted Right +3deg) -->
                    <div class="shrink-0 w-52 sm:w-56 md:w-52 lg:w-56 hanging-card relative md:[transform:rotate(3deg)_translateY(28px)]">
                        <!-- Green Clothespin / Clip -->
                        <div class="absolute -top-4 sm:-top-5 left-1/2 -translate-x-1/2 w-5 sm:w-6 h-8 sm:h-9 bg-[#00C853] rounded-md shadow-md flex items-center justify-center z-20 border border-emerald-400">
                            <div class="w-2 h-2 rounded-full bg-white/90 shadow-inner"></div>
                        </div>
                        <!-- White Polaroid Frame -->
                        <a href="{{ url('/topproduk/pop-mart-labubu') }}" class="block bg-white rounded-3xl p-3 sm:p-3.5 shadow-[0_15px_35px_rgba(0,0,0,0.1)] border border-slate-200/90 hover:border-[#00C853] transition-colors text-left group">
                            <div class="w-full aspect-[4/3] rounded-2xl overflow-hidden bg-slate-900 relative">
                                <img src="{{ asset('images/toys/labubu.jpg') }}" alt="Pop Mart Labubu" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <span class="absolute top-2 left-2 bg-pink-500 text-white text-[9px] font-black px-2 py-0.5 rounded-full uppercase tracking-wider shadow">#4 TOP</span>
                            </div>
                            <div class="mt-3 px-1">
                                <h3 class="font-extrabold text-sm sm:text-base text-slate-900 group-hover:text-[#00C853] transition-colors leading-tight">
                                    Pop Mart Labubu
                                </h3>
                                <p class="text-[11px] sm:text-xs text-slate-500 mt-1 truncate">
                                    Vinyl Collectible Art Toy Hype
                                </p>
                            </div>
                        </a>
                    </div>

                    <!-- CARD 5: Hot Wheels GT-R R34 (Far Right - Tilted Right +6deg) -->
                    <div class="shrink-0 w-52 sm:w-56 md:w-52 lg:w-56 hanging-card relative md:[transform:rotate(6deg)_translateY(12px)]">
                        <!-- Green Clothespin / Clip -->
                        <div class="absolute -top-4 sm:-top-5 left-1/2 -translate-x-1/2 w-5 sm:w-6 h-8 sm:h-9 bg-[#00C853] rounded-md shadow-md flex items-center justify-center z-20 border border-emerald-400">
                            <div class="w-2 h-2 rounded-full bg-white/90 shadow-inner"></div>
                        </div>
                        <!-- White Polaroid Frame -->
                        <a href="{{ url('/topproduk/hot-wheels-gtr-r34') }}" class="block bg-white rounded-3xl p-3 sm:p-3.5 shadow-[0_15px_35px_rgba(0,0,0,0.1)] border border-slate-200/90 hover:border-[#00C853] transition-colors text-left group">
                            <div class="w-full aspect-[4/3] rounded-2xl overflow-hidden bg-slate-900 relative">
                                <img src="{{ asset('images/toys/hotwheels.jpg') }}" alt="Hot Wheels GT-R R34" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <span class="absolute top-2 left-2 bg-red-600 text-white text-[9px] font-black px-2 py-0.5 rounded-full uppercase tracking-wider shadow">#5 TOP</span>
                            </div>
                            <div class="mt-3 px-1">
                                <h3 class="font-extrabold text-sm sm:text-base text-slate-900 group-hover:text-[#00C853] transition-colors leading-tight">
                                    Hot Wheels GT-R R34
                                </h3>
                                <p class="text-[11px] sm:text-xs text-slate-500 mt-1 truncate">
                                    Diecast Metal Real Riders Ban Karet
                                </p>
                            </div>
                        </a>
                    </div>

                </div>

            </div>

            <!-- ============================================================== -->
            <!-- BRAND PARTNERS LOGO STRIP (PERSIS LOGOIPSUM ROW DI REFERENSI)  -->
            <!-- ============================================================== -->
            <div class="mt-14 sm:mt-20 pt-8 border-t border-slate-200/80">
                <p class="text-xs font-bold text-slate-600 uppercase tracking-widest mb-6">
                    Brand &amp; Produsen Mainan Terkemuka Dunia
                </p>
                <div class="flex flex-wrap items-center justify-center gap-6 sm:gap-10 md:gap-14 opacity-75 grayscale hover:grayscale-0 transition-all duration-300">
                    <span class="font-black text-slate-600 hover:text-red-600 text-sm sm:text-base tracking-widest uppercase transition-colors">BANDAI NAMCO</span>
                    <span class="font-black text-slate-600 hover:text-blue-600 text-sm sm:text-base tracking-widest uppercase transition-colors">TAMIYA</span>
                    <span class="font-black text-slate-600 hover:text-red-500 text-sm sm:text-base tracking-widest uppercase transition-colors">HOT WHEELS</span>
                    <span class="font-black text-slate-600 hover:text-amber-500 text-sm sm:text-base tracking-widest uppercase transition-colors">LEGO</span>
                    <span class="font-black text-slate-600 hover:text-indigo-600 text-sm sm:text-base tracking-widest uppercase transition-colors">PLAYSTATION</span>
                    <span class="font-black text-slate-600 hover:text-pink-600 text-sm sm:text-base tracking-widest uppercase transition-colors">POP MART</span>
                    <span class="font-black text-slate-600 hover:text-cyan-600 text-sm sm:text-base tracking-widest uppercase transition-colors">TAKARA TOMY</span>
                </div>
            </div>

        </div>
    </section>

    <!-- ============================================================== -->
    <!-- TAMPILAN PRODUK SAMA PERSIS SEPERTI DI HOME PAGE               -->
    <!-- Top Toys Card Structure, Badges, Typography, Price, Photo,     -->
    <!-- Floating 'Lihat Selengkapnya' Button & Brand Blue / White Theme -->
    <!-- ============================================================== -->
    <section id="koleksi-produk" class="py-16 sm:py-24 bg-[#FAF5EE] border-t border-b border-[#E8DFD0] relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- SECTION HEADER: Title & Breadcrumbs persis layout home page -->
            <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-6 mb-10 sm:mb-12">
                <div class="max-w-2xl">
                    <div class="text-xs text-slate-500 font-bold flex items-center gap-2 mb-3">
                        <a href="{{ url('/') }}" class="hover:text-[#1677d2]">Beranda</a>
                        <span>/</span>
                        <span class="text-[#0A1628] font-bold">Top Produk</span>
                    </div>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#1677d2]/10 text-[#1677d2] text-xs font-black tracking-wider uppercase mb-3">
                        DAFTAR LENGKAP TOP PRODUK PILIHAN
                    </span>
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-[#0A1628] tracking-tight leading-tight">
                        Mainan Paling Populer &amp;<br>
                        <span class="text-[#1677d2]">Paling Banyak Dibeli</span>
                    </h2>
                    <p class="text-slate-600 text-sm sm:text-base mt-3 leading-relaxed font-medium">
                        Daftar lengkap seluruh artikel dengan tag <strong>Top Produk</strong> pilihan terbaik dengan rating tertinggi dan ulasan terpercaya.
                    </p>
                </div>
                
                <!-- Status Badge -->
                <div class="flex items-center gap-2 text-xs font-bold text-slate-700 bg-white px-4 py-2.5 rounded-full border border-slate-200/90 shadow-sm shrink-0 self-start sm:self-end">
                    <span class="w-2.5 h-2.5 rounded-full bg-[#1677d2] animate-pulse"></span>
                    <span>Menampilkan Seluruh <strong>{{ count($posts) }} Top Produk</strong></span>
                </div>
            </div>

            <!-- PRODUCT CARDS (SAMA PERSIS DENGAN KARTU PRODUK DI HOME PAGE) -->
            <!-- Card 1: Blue Theme (#1677d2 + Lime #E3FF73)                    -->
            <!-- Cards 2-9: White Theme (bg-white + Blue Badge + Slate-900)     -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                @foreach ($posts as $idx => $prod)
                    @if ($idx === 0)
                        <!-- CARD 1: {{ $prod['title'] }} (Brand Blue Theme No. 1 - SAMA PERSIS HOMEPAGE) -->
                        <div class="top-toy-card w-full h-[520px] sm:h-[545px] rounded-[2.25rem] p-5 sm:p-6 flex flex-col justify-between bg-[#1677d2] text-white border-2 border-white/20 shadow-md hover:shadow-2xl">
                            <div>
                                <div class="flex items-center justify-between gap-2">
                                    <div class="flex items-center gap-2">
                                        <span class="text-[11px] font-black px-3 py-1 rounded-full bg-white/20 text-white border border-white/30 uppercase tracking-wider">{{ $prod['age'] }}</span>
                                        <span class="text-[11px] font-black px-3 py-1 rounded-full bg-[#E3FF73] text-[#0A1628] uppercase tracking-wider">{{ $prod['type'] }}</span>
                                    </div>
                                    <div class="w-8 h-8 rounded-full bg-[#E3FF73] text-[#0A1628] flex items-center justify-center font-black text-xs shadow-sm">
                                        #1
                                    </div>
                                </div>
                                <h3 class="text-2xl sm:text-3xl font-extrabold tracking-tight mt-5 leading-tight text-white">
                                    {{ $prod['title'] }}
                                </h3>
                                <p class="text-xs sm:text-sm mt-2 leading-relaxed text-blue-100 line-clamp-2 font-medium">
                                    {{ $prod['subtitle'] }}
                                </p>
                                <div class="mt-4 flex items-baseline gap-2">
                                    <span class="text-lg sm:text-xl font-black text-[#E3FF73]">{{ $prod['price'] }}</span>
                                </div>
                            </div>

                            <!-- Card Photo Container & Floating 'Lihat Selengkapnya' Button (SAMA PERSIS HOMEPAGE) -->
                            <div class="relative w-full h-56 sm:h-64 rounded-[1.75rem] overflow-hidden mt-4 group bg-slate-900">
                                <img src="{{ asset($prod['thumbnail']) }}" alt="{{ $prod['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-transparent to-transparent pointer-events-none"></div>
                                
                                <a href="{{ $prod['detail_url'] ?? (str_starts_with($prod['slug'], 'post-') ? url('/post/' . $prod['slug']) : url('/topproduk/' . $prod['slug'])) }}" class="absolute bottom-3.5 inset-x-3.5 bg-white/90 hover:bg-white text-slate-950 backdrop-blur-md border border-white/80 font-black text-xs py-2.5 px-4 rounded-full flex items-center justify-between shadow-lg transition-all active:scale-95 group/btn">
                                    <span class="tracking-wide">Lihat Selengkapnya</span>
                                    <span class="w-6 h-6 rounded-full bg-slate-950 text-white flex items-center justify-center text-[10px] group-hover/btn:translate-x-0.5 transition-transform">➔</span>
                                </a>
                            </div>
                        </div>
                    @else
                        <!-- CARD {{ $idx + 1 }}: {{ $prod['title'] }} (White Theme - SAMA PERSIS HOMEPAGE) -->
                        <div class="top-toy-card w-full h-[520px] sm:h-[545px] rounded-[2.25rem] p-5 sm:p-6 flex flex-col justify-between bg-white text-slate-900 border-2 border-slate-200/80 shadow-md hover:shadow-2xl">
                            <div>
                                <div class="flex items-center justify-between gap-2">
                                    <div class="flex items-center gap-2">
                                        <span class="text-[11px] font-black px-3 py-1 rounded-full bg-slate-100 text-slate-800 border border-slate-200/50 shadow-sm uppercase tracking-wider">{{ $prod['age'] }}</span>
                                        <span class="text-[11px] font-black px-3 py-1 rounded-full bg-blue-600 text-white shadow-sm uppercase tracking-wider">{{ $prod['type'] }}</span>
                                    </div>
                                    <div class="w-8 h-8 rounded-full bg-blue-50 text-blue-600 border border-blue-200 flex items-center justify-center font-black text-xs shadow-sm">
                                        #{{ $idx + 1 }}
                                    </div>
                                </div>
                                <h3 class="text-2xl sm:text-3xl font-extrabold tracking-tight mt-5 leading-tight text-[#0A1628]">
                                    {{ $prod['title'] }}
                                </h3>
                                <p class="text-xs sm:text-sm mt-2 leading-relaxed text-slate-600 line-clamp-2 font-medium">
                                    {{ $prod['subtitle'] }}
                                </p>
                                <div class="mt-4 flex items-baseline gap-2">
                                    <span class="text-lg sm:text-xl font-black text-[#0A1628]">{{ $prod['price'] }}</span>
                                </div>
                            </div>

                            <!-- Card Photo Container & Floating 'Lihat Selengkapnya' Button (SAMA PERSIS HOMEPAGE) -->
                            <div class="relative w-full h-56 sm:h-64 rounded-[1.75rem] overflow-hidden mt-4 group bg-slate-100">
                                <img src="{{ asset($prod['thumbnail']) }}" alt="{{ $prod['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-transparent to-transparent pointer-events-none"></div>
                                
                                <a href="{{ $prod['detail_url'] ?? (str_starts_with($prod['slug'], 'post-') ? url('/post/' . $prod['slug']) : url('/topproduk/' . $prod['slug'])) }}" class="absolute bottom-3.5 inset-x-3.5 bg-white/90 hover:bg-white text-slate-950 backdrop-blur-md border border-white/80 font-black text-xs py-2.5 px-4 rounded-full flex items-center justify-between shadow-lg transition-all active:scale-95 group/btn">
                                    <span class="tracking-wide">Lihat Selengkapnya</span>
                                    <span class="w-6 h-6 rounded-full bg-slate-950 text-white flex items-center justify-center text-[10px] group-hover/btn:translate-x-0.5 transition-transform">➔</span>
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <!-- Bottom Back to Homepage Banner -->
            <div class="mt-16 bg-gradient-to-r from-slate-900 via-[#0B1A30] to-slate-900 rounded-[2.5rem] p-8 sm:p-12 text-white text-center relative overflow-hidden shadow-xl">
                <div class="relative z-10 max-w-2xl mx-auto">
                    <span class="inline-block px-4 py-1.5 rounded-full bg-white/10 text-[#E3FF73] text-xs font-black uppercase tracking-wider mb-4 border border-white/20">
                        JELAJAHI LEBIH BANYAK REKOMENDASI
                    </span>
                    <h3 class="text-2xl sm:text-3xl font-black tracking-tight leading-tight">
                        Butuh Inspirasi Mainan &amp; Gadget Lainnya?
                    </h3>
                    <p class="text-slate-300 text-xs sm:text-sm mt-3 leading-relaxed">
                        Kembali ke beranda utama untuk melihat mini-game arkade seru, kategori lengkap, artikel panduan hobi, dan katalog promo terkini.
                    </p>
                    <div class="mt-6 flex flex-wrap items-center justify-center gap-3">
                        <a href="{{ url('/') }}" class="bg-[#1677d2] hover:bg-[#1264b3] text-white font-extrabold text-xs sm:text-sm px-7 py-3.5 rounded-full shadow-lg transition-all hover:-translate-y-0.5">
                            Kembali ke Beranda Utama ➔
                        </a>
                        <a href="{{ url('/katalog') }}" class="bg-white/10 hover:bg-white/20 text-white font-extrabold text-xs sm:text-sm px-6 py-3.5 rounded-full border border-white/30 transition-all">
                            Buka Katalog Lengkap
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ============================================================== -->
    <!-- FOOTER (KONSISTEN DENGAN HOMEPAGE TOYSPIXEL)                   -->
    <!-- ============================================================== -->
    <footer class="bg-[#0B1A30] text-slate-300 py-12 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-6 pb-8 border-b border-slate-800">
                <div class="flex items-center gap-3">
                    <div class="bg-white px-3 py-1 rounded-xl">
                        <img src="{{ asset('images/brand/logo-landscape.png') }}" alt="toyspixels.com" class="h-7 object-contain">
                    </div>
                    <span class="text-xs text-slate-400 font-medium">Pusat Rekomendasi Mainan &amp; Gadget Terpercaya</span>
                </div>
                <div class="flex items-center gap-6 text-xs font-bold text-slate-400">
                    <a href="{{ url('/') }}" class="hover:text-white transition-colors">Beranda</a>
                    <a href="https://toyspixels.com/topproduk" class="text-[#00C853] hover:text-white transition-colors">Top Produk</a>
                    <a href="{{ url('/') }}#kategori" class="hover:text-white transition-colors">Kategori</a>
                    <a href="{{ url('/katalog') }}" class="hover:text-white transition-colors">Katalog</a>
                    <a href="{{ url('/') }}#faq" class="hover:text-white transition-colors">FAQ</a>
                </div>
            </div>
            <div class="pt-6 text-center text-xs text-slate-500 flex flex-col sm:flex-row items-center justify-between gap-3">
                <p>© {{ date('Y') }} ToysPixel. All Rights Reserved. Rekomendasi Mainan dan Gadget Terbaik di Indonesia.</p>
                <p class="text-[11px] text-slate-400">Afiliasi Resmi Shopee &amp; Tokopedia</p>
            </div>
        </div>
    </footer>

    <!-- Mobile Drawer Toggle Script -->
    <script>
        function toggleTopProdukNav() {
            const drawer = document.getElementById('topProdukNavDrawer');
            if (drawer) {
                drawer.classList.toggle('hidden');
            }
        }
    </script>
</body>
</html>
