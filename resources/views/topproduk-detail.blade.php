<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $post['title'] }} — Review & Spesifikasi Top Produk ToysPixel</title>
    <meta name="description" content="{{ $post['subtitle'] }}. Ulasan lengkap dan panduan belanja resmi di Shopee & Tokopedia.">
    <meta name="keywords" content="{{ $post['title'] }}, {{ $post['type'] }}, Review Mainan, Top Produk, ToysPixel">
    
    <!-- OpenGraph & Social SEO -->
    <meta property="og:title" content="{{ $post['title'] }} — Review & Spesifikasi Top Produk ToysPixel">
    <meta property="og:description" content="{{ $post['subtitle'] }}">
    <meta property="og:image" content="{{ asset($post['thumbnail']) }}">
    <meta property="og:type" content="article">
    <link rel="canonical" href="https://toyspixel.com/topproduk/{{ $post['slug'] }}">

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
                <span>Artikel Review Resmi: <strong>{{ $post['title'] }}</strong></span>
            </div>
            <div class="flex items-center gap-4 text-[11px]">
                <a href="https://toyspixel.com/topproduk" class="text-[#E3FF73] hover:underline font-bold flex items-center gap-1">
                    <span>← Kembali ke Semua Top Produk</span>
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
                <a href="https://toyspixel.com/topproduk" class="text-[#E3FF73] border-b-2 border-[#E3FF73] pb-1 transition-colors">TOP PRODUK</a>
                <a href="{{ url('/') }}#kategori" class="hover:text-[#E3FF73] transition-colors">KATEGORI</a>
                <a href="{{ url('/katalog') }}" class="hover:text-[#E3FF73] transition-colors">KATALOG</a>
                <a href="{{ url('/') }}#news-review" class="hover:text-[#E3FF73] transition-colors">NEWS & REVIEW</a>
                <a href="{{ url('/') }}#faq" class="hover:text-[#E3FF73] transition-colors">FAQ</a>
            </nav>

            <!-- Right: Action Button -->
            <div class="flex items-center gap-3">
                <a href="https://toyspixel.com/topproduk" class="bg-white/20 hover:bg-white/30 text-white text-xs font-extrabold px-4 py-2 rounded-full transition-all">
                    Semua Top Produk
                </a>
                <a href="{{ url('/') }}" class="bg-[#E3FF73] hover:bg-[#d6f556] text-[#0A1628] font-black text-xs sm:text-sm px-5 sm:px-6 py-2.5 rounded-full shadow-md hover:shadow-lg transition-all flex items-center gap-2 uppercase tracking-wide">
                    <span>BERANDA</span>
                    <span>➔</span>
                </a>
            </div>
        </div>
    </header>

    <!-- ARTICLE MAIN CONTAINER -->
    <main class="py-12 sm:py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-2 text-xs text-slate-500 font-bold mb-6">
                <a href="{{ url('/') }}" class="hover:text-[#1677d2]">Beranda</a>
                <span>/</span>
                <a href="https://toyspixel.com/topproduk" class="hover:text-[#1677d2]">Top Produk</a>
                <span>/</span>
                <span class="text-[#0B1A30] truncate">{{ $post['title'] }}</span>
            </nav>

            <!-- Article Header -->
            <article class="bg-white rounded-3xl p-6 sm:p-10 border border-slate-200/90 shadow-md">
                
                <!-- Tag & Meta Info -->
                <div class="flex flex-wrap items-center gap-2.5 mb-4">
                    <span class="px-3.5 py-1 rounded-full bg-[#1677d2] text-white text-xs font-black uppercase tracking-wider">
                        {{ $post['type'] }}
                    </span>
                    <span class="px-3 py-1 rounded-full bg-slate-100 text-slate-700 text-xs font-bold">
                        Tag: {{ $post['tag'] }}
                    </span>
                    <span class="text-xs text-slate-400">
                        Dipublikasikan: {{ date('d F Y', strtotime($post['post_date'])) }}
                    </span>
                </div>

                <h1 class="text-2xl sm:text-4xl font-extrabold text-[#0B1A30] tracking-tight leading-tight mb-3">
                    {{ $post['title'] }}
                </h1>
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed font-medium mb-6">
                    {{ $post['subtitle'] }}
                </p>

                <!-- Featured Thumbnail Image -->
                <div class="relative aspect-video w-full rounded-2xl overflow-hidden bg-slate-950 mb-8 border border-slate-100 shadow-sm">
                    <img src="{{ asset($post['thumbnail']) }}" alt="{{ $post['title'] }}" class="w-full h-full object-cover">
                </div>

                <!-- Complete Article Body Content -->
                <div class="prose max-w-none text-slate-700 text-sm sm:text-base leading-relaxed space-y-4">
                    <p class="font-medium text-slate-800 text-base sm:text-lg leading-relaxed">
                        {{ $post['summary'] }}
                    </p>
                    <p>
                        {{ $post['content'] }}
                    </p>
                </div>

                <!-- ============================================================== -->
                <!-- KETERANGAN & SPESIFIKASI PRODUK DI BAWAH ARTIKEL LENGKAP       -->
                <!-- Format sesuai instruksi:                                      -->
                <!-- umur/jenis : 14+/GUNPLA MG                                     -->
                <!-- Judul : Gundam Barbatos                                        -->
                <!-- Keterangan Judul : Gunpla Master 1/100 dengan artikulasi...    -->
                <!-- Harga : Rp 329.000                                             -->
                <!-- ============================================================== -->
                <div class="mt-10 p-6 sm:p-8 rounded-2xl bg-[#F8FAFC] border-2 border-slate-200/90 shadow-sm">
                    <div class="flex items-center justify-between pb-4 mb-5 border-b border-slate-200">
                        <div>
                            <span class="text-[11px] font-black text-[#1677d2] uppercase tracking-widest block mb-0.5">SPESIFIKASI LENGKAP</span>
                            <h3 class="text-lg sm:text-xl font-extrabold text-[#0B1A30]">Keterangan Produk Resmi</h3>
                        </div>
                        <div class="text-xs font-bold text-slate-500 bg-white px-3 py-1.5 rounded-lg border border-slate-200">
                            Terverifikasi
                        </div>
                    </div>

                    <dl class="space-y-3.5 text-xs sm:text-sm">
                        <div class="flex flex-col sm:flex-row sm:items-baseline py-1.5 border-b border-slate-200/50">
                            <dt class="sm:w-48 font-bold text-slate-500 uppercase tracking-wider text-[11px]">Umur / Jenis</dt>
                            <dd class="font-black text-[#0B1A30] text-sm sm:text-base">: {{ $post['age_type'] }}</dd>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-baseline py-1.5 border-b border-slate-200/50">
                            <dt class="sm:w-48 font-bold text-slate-500 uppercase tracking-wider text-[11px]">Judul</dt>
                            <dd class="font-extrabold text-[#0B1A30] text-sm sm:text-base">: {{ $post['title'] }}</dd>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-baseline py-1.5 border-b border-slate-200/50">
                            <dt class="sm:w-48 font-bold text-slate-500 uppercase tracking-wider text-[11px]">Keterangan Judul</dt>
                            <dd class="font-medium text-slate-700 leading-snug">: {{ $post['subtitle'] }}</dd>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-baseline py-1.5">
                            <dt class="sm:w-48 font-bold text-slate-500 uppercase tracking-wider text-[11px]">Harga</dt>
                            <dd class="font-black text-[#1677d2] text-xl sm:text-2xl">: {{ $post['price'] }}</dd>
                        </div>
                    </dl>

                    <!-- Tombol Belanja Afiliasi Langsung -->
                    <div class="mt-6 pt-5 border-t border-slate-200 flex flex-col sm:flex-row items-center gap-3">
                        <a href="{{ $post['shopee_url'] }}" target="_blank" rel="noopener nofollow" class="w-full sm:w-auto px-7 py-3 rounded-xl bg-[#EE4D2D] hover:bg-[#d83f21] text-white font-extrabold text-xs shadow-md transition-all text-center flex items-center justify-center gap-2">
                            <span>Beli di Shopee Official</span>
                        </a>
                        <a href="{{ $post['tokopedia_url'] }}" target="_blank" rel="noopener nofollow" class="w-full sm:w-auto px-7 py-3 rounded-xl bg-[#03AC0E] hover:bg-[#02970c] text-white font-extrabold text-xs shadow-md transition-all text-center flex items-center justify-center gap-2">
                            <span>Beli di Tokopedia Official</span>
                        </a>
                        <a href="https://toyspixel.com/topproduk" class="w-full sm:w-auto px-5 py-3 rounded-xl bg-white border border-slate-200 hover:border-[#1677d2] text-slate-700 hover:text-[#1677d2] text-xs font-bold transition-all text-center">
                            ← Kembali ke Daftar Top Produk
                        </a>
                    </div>
                </div>

            </article>

            <!-- Related Top Products -->
            @if(isset($relatedPosts) && count($relatedPosts) > 0)
                <div class="mt-12">
                    <h3 class="text-xl font-extrabold text-[#0B1A30] mb-6">Rekomendasi Top Produk Lainnya</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                        @foreach($relatedPosts as $related)
                            <a href="{{ url('/topproduk/' . $related['slug']) }}" class="bg-white rounded-2xl p-4 border border-slate-200/80 shadow-sm hover:shadow-md transition-all group">
                                <div class="aspect-video w-full rounded-xl overflow-hidden bg-slate-900 mb-3">
                                    <img src="{{ asset($related['thumbnail']) }}" alt="{{ $related['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                </div>
                                <span class="text-[10px] font-black text-[#1677d2] uppercase block mb-1">{{ $related['type'] }}</span>
                                <h4 class="font-extrabold text-sm text-[#0B1A30] group-hover:text-[#1677d2] line-clamp-1">{{ $related['title'] }}</h4>
                                <div class="text-sm font-black text-[#0B1A30] mt-1">{{ $related['price'] }}</div>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif

        </div>
    </main>

    <!-- FOOTER -->
    <footer class="bg-[#0B1A30] text-slate-300 py-12 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-xs text-slate-400">
            <p>© {{ date('Y') }} ToysPixel. All Rights Reserved. Rekomendasi Mainan dan Gadget Terbaik di Indonesia.</p>
        </div>
    </footer>

</body>
</html>
