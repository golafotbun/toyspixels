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
    <meta property="og:image" content="{{ asset($post['image']) }}">
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
                <a href="https://toyspixel.com/topproduk" class="hover:text-[#E3FF73] transition-colors">TOP PRODUK</a>
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
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Breadcrumbs -->
            <nav class="text-xs text-slate-500 font-bold flex flex-wrap items-center gap-2 mb-6">
                <a href="{{ url('/') }}" class="hover:text-[#1677d2]">Beranda</a>
                <span>/</span>
                <a href="https://toyspixels.com/semuaproduk" class="hover:text-[#1677d2]">Katalog</a>
                <span>/</span>
                <a href="{{ $post['category_url'] }}" class="hover:text-[#1677d2]">{{ $post['category_name'] }}</a>
                <span>/</span>
                <span class="text-slate-800 truncate max-w-xs">{{ $post['title'] }}</span>
            </nav>

            <article class="bg-white rounded-3xl p-6 sm:p-10 border border-slate-200/90 shadow-lg">

                <!-- Category Badge & Header -->
                <div class="flex flex-wrap items-center justify-between gap-3 mb-4">
                    <a href="{{ $post['category_url'] }}" class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-[#1677d2]/10 text-[#1677d2] hover:bg-[#1677d2] hover:text-white text-xs font-black tracking-wider uppercase transition-colors">
                        <span>{{ $post['category_name'] }}</span>
                    </a>
                    <div class="flex items-center gap-2 text-xs font-bold text-slate-500">
                        <span class="text-amber-500">⭐ {{ $post['rating'] }}</span>
                        <span>•</span>
                        <span>Terjual {{ $post['sold'] }}</span>
                    </div>
                </div>

                <!-- Title & Subtitle -->
                <h1 class="text-2xl sm:text-4xl font-black text-[#0B1A30] tracking-tight leading-tight">
                    {{ $post['title'] }}
                </h1>
                <p class="text-slate-600 text-sm sm:text-base mt-2.5 font-medium leading-relaxed">
                    {{ $post['subtitle'] }}
                </p>

                <!-- Featured Image in Rounded Frame -->
                <div class="mt-8 rounded-2xl overflow-hidden bg-slate-50 border-2 border-slate-100 p-6 flex items-center justify-center max-h-[460px]">
                    <img src="{{ asset($post['image']) }}" alt="{{ $post['title'] }}" class="max-h-[400px] w-auto object-contain rounded-xl hover:scale-105 transition-transform duration-500">
                </div>

                <!-- Price Banner & Beli Langsung Quick Button -->
                <div class="mt-8 p-5 rounded-2xl bg-gradient-to-r from-[#0B1A30] to-[#1677d2] text-white flex flex-col sm:flex-row items-center justify-between gap-4">
                    <div>
                        <span class="text-xs text-white/80 uppercase tracking-widest font-bold">Harga Penawaran Resmi</span>
                        <div class="text-2xl sm:text-3xl font-black text-[#E3FF73] mt-0.5">
                            Rp {{ $post['price'] }}
                        </div>
                    </div>
                    <a href="{{ $post['affiliate_url'] }}" target="_blank" rel="noopener nofollow" class="w-full sm:w-auto px-7 py-3 rounded-full bg-[#E3FF73] hover:bg-[#d6f556] text-[#0B1A30] font-black text-xs sm:text-sm shadow-md transition-all hover:scale-105 active:scale-95 text-center">
                        Beli Langsung di Shopee ➔
                    </a>
                </div>

                <!-- Article Content -->
                <div class="mt-8 prose prose-slate max-w-none text-slate-700 leading-relaxed text-sm sm:text-base space-y-4">
                    <p class="font-semibold text-slate-900 text-base sm:text-lg">
                        {{ $post['summary'] }}
                    </p>
                    <p>
                        {{ $post['content'] }}
                    </p>
                </div>

                <!-- ============================================================== -->
                <!-- SPESIFIKASI & KETERANGAN ARTIKEL DI BAWAH ARTIKEL              -->
                <!-- Format Sesuai Instruksi User:                                  -->
                <!-- Kategori, Judul, Keterangan Judul, harga, beli langsung, tags  -->
                <!-- ============================================================== -->
                <div class="mt-10 p-6 sm:p-8 rounded-2xl bg-[#0B1A30] text-white border-2 border-[#1677d2] shadow-xl">
                    <div class="flex items-center justify-between pb-4 mb-5 border-b border-slate-700">
                        <div>
                            <span class="text-[11px] font-black text-[#E3FF73] uppercase tracking-widest block mb-0.5">KETERANGAN & SPESIFIKASI ARTIKEL</span>
                            <h3 class="text-lg sm:text-xl font-extrabold text-white">Detail Format Post Resmi</h3>
                        </div>
                        <div class="text-xs font-bold text-slate-300 bg-white/10 px-3 py-1.5 rounded-lg border border-white/20">
                            Terverifikasi
                        </div>
                    </div>

                    <dl class="space-y-3.5 text-xs sm:text-sm font-mono">
                        <div class="flex flex-col sm:flex-row sm:items-baseline py-1.5 border-b border-slate-800">
                            <dt class="sm:w-48 font-bold text-slate-400 uppercase tracking-wider text-[11px]">Kategori</dt>
                            <dd class="font-black text-white text-sm sm:text-base">: {{ $post['category_name'] }}</dd>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-baseline py-1.5 border-b border-slate-800">
                            <dt class="sm:w-48 font-bold text-slate-400 uppercase tracking-wider text-[11px]">Judul</dt>
                            <dd class="font-extrabold text-[#E3FF73] text-sm sm:text-base">: {{ $post['title'] }}</dd>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-baseline py-1.5 border-b border-slate-800">
                            <dt class="sm:w-48 font-bold text-slate-400 uppercase tracking-wider text-[11px]">Keterangan Judul</dt>
                            <dd class="font-medium text-slate-200 leading-snug font-sans">: {{ $post['subtitle'] }}</dd>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-baseline py-1.5 border-b border-slate-800">
                            <dt class="sm:w-48 font-bold text-slate-400 uppercase tracking-wider text-[11px]">harga</dt>
                            <dd class="font-black text-[#E3FF73] text-xl sm:text-2xl">: {{ $post['price'] }}</dd>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-baseline py-1.5 border-b border-slate-800">
                            <dt class="sm:w-48 font-bold text-slate-400 uppercase tracking-wider text-[11px]">beli langsung</dt>
                            <dd class="font-medium text-sky-300 break-all">: <a href="{{ $post['affiliate_url'] }}" target="_blank" rel="noopener nofollow" class="underline hover:text-white">{{ $post['affiliate_url'] }}</a></dd>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-baseline py-1.5">
                            <dt class="sm:w-48 font-bold text-slate-400 uppercase tracking-wider text-[11px]">tags</dt>
                            <dd class="font-bold text-emerald-300">: {{ implode(', ', $post['tags']) }}</dd>
                        </div>
                    </dl>

                    <!-- Tombol Beli Langsung di Bawah Artikel -->
                    <div class="mt-6 pt-5 border-t border-slate-700 flex flex-col sm:flex-row items-center gap-3">
                        <a href="{{ $post['affiliate_url'] }}" target="_blank" rel="noopener nofollow" class="w-full sm:w-auto px-7 py-3 rounded-xl bg-[#1677d2] hover:bg-[#125ea7] text-white font-extrabold text-xs shadow-md transition-all text-center flex items-center justify-center gap-2">
                            <span>Beli Langsung di Shopee</span>
                            <span>➔</span>
                        </a>
                        <a href="{{ $post['category_url'] }}" class="w-full sm:w-auto px-5 py-3 rounded-xl bg-white/10 hover:bg-white/20 text-white font-bold text-xs text-center border border-white/20 transition-all">
                            Kategori: {{ $post['category_name'] }}
                        </a>
                        <a href="https://toyspixels.com/semuaproduk" class="w-full sm:w-auto px-5 py-3 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-300 text-xs font-bold transition-all text-center">
                            ← Kembali ke Katalog
                        </a>
                    </div>
                </div>

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
                        <li><a href="https://toyspixel.com/topproduk" class="hover:text-[#E3FF73] transition-colors">Top Produk</a></li>
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

</body>
</html>
