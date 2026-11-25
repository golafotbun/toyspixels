<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News & Review — Semua Berita & Ulasan Pilihan | ToysPixel</title>
    <meta name="description" content="Koleksi lengkap seluruh berita, ulasan mendalam, dan panduan memilih produk mainan anak, Gunpla, LEGO, konsol gaming, gadget, dan teknologi terkini.">
    <meta name="keywords" content="News and Review, Semua Berita, Review Mainan, Review Teknologi, ToysPixel, Panduan Belanja">
    
    <!-- OpenGraph & Social SEO -->
    <meta property="og:title" content="News & Review — Semua Berita & Ulasan Pilihan | ToysPixel">
    <meta property="og:description" content="Koleksi lengkap seluruh berita, ulasan mendalam, dan panduan memilih produk mainan dan teknologi terkini di ToysPixel.">
    <meta property="og:image" content="{{ asset('images/brand/logo-landscape.png') }}">
    <meta property="og:type" content="website">
    <link rel="canonical" href="https://toyspixels.com/allnews">

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
                <span>Portal Resmi: <strong>News & Review — Semua Berita & Ulasan Pilihan</strong></span>
            </div>
            <div class="flex items-center gap-4 text-[11px]">
                <a href="{{ url('/') }}" class="text-[#E3FF73] hover:underline font-bold flex items-center gap-1">
                    <span>← Kembali ke Beranda Utama</span>
                </a>
                <span class="text-slate-400 hidden sm:inline">Kurasi Terpercaya Mainan & Teknologi</span>
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
                <a href="https://toyspixels.com/topproduk" class="hover:text-[#E3FF73] transition-colors">TOP PRODUK</a>
                <a href="{{ url('/') }}#kategori" class="hover:text-[#E3FF73] transition-colors">KATEGORI</a>
                <a href="{{ url('/katalog') }}" class="hover:text-[#E3FF73] transition-colors">KATALOG</a>
                <a href="{{ url('/allnews') }}" class="text-[#E3FF73] border-b-2 border-[#E3FF73] pb-1 transition-colors">NEWS & REVIEW</a>
                <a href="{{ url('/') }}#faq" class="hover:text-[#E3FF73] transition-colors">FAQ</a>
            </nav>

            <!-- Right: Action Button -->
            <div class="flex items-center gap-3">
                <a href="{{ url('/newsmainan') }}" class="bg-white/20 hover:bg-white/30 text-white text-xs font-extrabold px-3.5 py-2 rounded-full transition-all hidden sm:inline-block">
                    News Mainan
                </a>
                <a href="{{ url('/newsteknologi') }}" class="bg-white/20 hover:bg-white/30 text-white text-xs font-extrabold px-3.5 py-2 rounded-full transition-all hidden sm:inline-block">
                    News Teknologi
                </a>
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
                NEWS & REVIEW
            </span>
            <h1 class="text-3xl sm:text-5xl font-extrabold text-white tracking-tight leading-tight">
                Koleksi Lengkap <span class="text-[#E3FF73]">Berita &amp; Review</span>
            </h1>
            <p class="text-white/90 text-sm sm:text-base mt-4 max-w-2xl mx-auto leading-relaxed">
                Ulasan terpercaya, panduan komprehensif, dan kabar tren terbaru seputar mainan edukasi, Gunpla, diecast, konsol gaming, gadget, dan teknologi modern.
            </p>

            <!-- Category Switcher Pill in Page (3 Kategori: Semua, Mainan, Teknologi) -->
            <div class="mt-8 inline-flex p-1.5 bg-black/20 backdrop-blur-md rounded-full text-xs sm:text-sm font-extrabold gap-1">
                <span class="px-6 py-2 rounded-full bg-white text-[#1677d2] shadow-sm">
                    Semua
                </span>
                <a href="{{ url('/newsmainan') }}" class="px-6 py-2 rounded-full text-white/80 hover:text-white transition-colors">
                    Mainan
                </a>
                <a href="{{ url('/newsteknologi') }}" class="px-6 py-2 rounded-full text-white/80 hover:text-white transition-colors">
                    Teknologi
                </a>
            </div>
        </div>
    </section>

    <!-- ARTICLES GRID SECTION -->
    <section class="py-14 sm:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-7 sm:gap-8">
                @php
                    $listAll = (isset($articles) && count($articles)) ? $articles : \App\Services\NewsService::byTag('allnews');
                @endphp
                @foreach($listAll as $item)
                <article class="bg-white rounded-3xl p-6 border border-slate-200/90 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] hover:shadow-xl transition-all duration-300 flex flex-col justify-between group" data-tag="allnews">
                    <div>
                        <div class="relative aspect-[16/10] w-full rounded-2xl overflow-hidden bg-slate-100 mb-5 border border-slate-100">
                            <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <span class="absolute top-3 left-3 px-3 py-1 rounded-full bg-[#0B1A30]/85 text-[#E3FF73] text-[10px] font-black tracking-wider uppercase backdrop-blur-sm">
                                #allnews
                            </span>
                        </div>
                        <div class="text-xs text-slate-500 font-medium mb-2.5 flex items-center gap-2">
                            <span>{{ $item['date'] }}</span>
                            <span>•</span>
                            <span>{{ $item['read_time'] }}</span>
                            <span>•</span>
                            <span class="font-bold text-[#1677d2]">{{ $item['category_name'] }}</span>
                        </div>
                        <h2 class="font-extrabold text-lg text-[#0B1A30] line-clamp-2 group-hover:text-[#1677d2] transition-colors leading-snug">
                            {{ $item['title'] }}
                        </h2>
                        <p class="text-slate-600 text-xs sm:text-sm mt-3 line-clamp-3 leading-relaxed">
                            {{ $item['summary'] }}
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-100">
                        <button type="button" onclick="openPageNewsModal('{{ addslashes($item['title']) }}', '{{ $item['date'] }}', '{{ $item['image'] }}', '{{ addslashes($item['content']) }}')" class="inline-flex items-center gap-1.5 text-xs sm:text-sm font-extrabold text-[#1677d2] group-hover:text-[#0B1A30] transition-colors">
                            <span>Lihat Selengkapnya</span>
                            <span class="group-hover:translate-x-1 transition-transform">➔</span>
                        </button>
                    </div>
                </article>
                @endforeach
            </div>

            <!-- Back to Home Button -->
            <div class="mt-14 sm:mt-16 text-center">
                <a href="{{ url('/') }}#news-review" class="inline-flex items-center gap-3 px-8 sm:px-10 py-4 rounded-full bg-[#0B1A30] hover:bg-[#1677d2] text-white font-extrabold text-xs sm:text-sm shadow-lg hover:shadow-2xl transition-all hover:-translate-y-0.5 active:translate-y-0 group tracking-wide">
                    <span>← KEMBALI KE BERANDA TOYSPIXEL</span>
                </a>
            </div>

        </div>
    </section>

    <!-- Modal Detail Artikel Ulasan -->
    <div id="pageArticleModal" class="fixed inset-0 z-50 bg-black/60 backdrop-blur-sm hidden items-center justify-center p-4">
        <div class="bg-white rounded-3xl max-w-xl w-full p-6 sm:p-8 card-shadow border border-slate-200 relative">
            <div class="flex justify-between items-start pb-4 border-b border-slate-100">
                <div>
                    <span id="pageModalDate" class="text-xs font-semibold text-slate-400 block mb-1">Tanggal</span>
                    <h3 id="pageModalTitle" class="font-extrabold text-lg sm:text-xl text-[#0B1A30] leading-snug">Judul Artikel</h3>
                </div>
                <button type="button" onclick="closePageNewsModal()" class="text-slate-400 hover:text-slate-800 font-black text-xl ml-4 p-1">✕</button>
            </div>
            <div class="relative aspect-video w-full rounded-2xl overflow-hidden bg-slate-100 my-4">
                <img id="pageModalImage" src="" alt="Artikel" class="w-full h-full object-cover">
            </div>
            <p id="pageModalContent" class="text-xs sm:text-sm text-slate-600 leading-relaxed max-h-60 overflow-y-auto pr-2">Isi konten...</p>
            <div class="mt-6 pt-4 border-t border-slate-100 flex justify-end">
                <button type="button" onclick="closePageNewsModal()" class="px-6 py-2.5 rounded-full bg-[#0B1A30] hover:bg-[#1677d2] text-white text-xs font-bold transition-colors">
                    Tutup Ulasan
                </button>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="bg-[#0B1A30] text-slate-300 py-12 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-xs text-slate-400">
            <p>© {{ date('Y') }} ToysPixel. All Rights Reserved. Rekomendasi Mainan dan Gadget Terbaik di Indonesia.</p>
        </div>
    </footer>

    <script>
        function openPageNewsModal(title, date, image, content) {
            document.getElementById('pageModalTitle').innerText = title;
            document.getElementById('pageModalDate').innerText = date;
            document.getElementById('pageModalImage').src = image;
            document.getElementById('pageModalContent').innerText = content;
            const modal = document.getElementById('pageArticleModal');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.style.overflow = 'hidden';
        }

        function closePageNewsModal() {
            const modal = document.getElementById('pageArticleModal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.style.overflow = '';
        }
    </script>

</body>
</html>
