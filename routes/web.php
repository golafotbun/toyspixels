<?php

use App\Services\CategoryService;
use App\Services\KatalogService;
use App\Services\NewsService;
use App\Services\TopProdukService;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $topProduk = TopProdukService::topSeven();
    $katalogProduk = KatalogService::all();
    $newsMainan = NewsService::byTag('newsmainan');
    $newsTeknologi = NewsService::byTag('newsteknologi');

    return view('welcome', compact('topProduk', 'katalogProduk', 'newsMainan', 'newsTeknologi'));
})->name('home');

Route::get('/topproduk', function () {
    $posts = TopProdukService::all();

    return view('topproduk', compact('posts'));
})->name('topproduk');

Route::get('/topproduk/{slug}', function (string $slug) {
    $post = TopProdukService::findBySlug($slug);
    if (! $post) {
        abort(404);
    }
    $relatedPosts = TopProdukService::all()->where('slug', '!==', $slug)->take(3);

    return view('topproduk-detail', compact('post', 'relatedPosts'));
})->name('topproduk.show');

Route::get('/top-toys', function () {
    return redirect()->route('topproduk');
})->name('top-toys');

// Route Post / Artikel Produk (Tahap 5 Cek Detail)
Route::get('/post/{slug}', function (string $slug) {
    $post = KatalogService::findBySlug($slug);
    if (! $post) {
        abort(404);
    }
    $relatedPosts = KatalogService::all()->where('slug', '!==', $slug)->take(3);

    return view('post-detail', compact('post', 'relatedPosts'));
})->name('post.show');

Route::get('/artikel/{slug}', function (string $slug) {
    return redirect()->route('post.show', ['slug' => $slug]);
});

// Katalog & Halaman Kategori Tahap 5
Route::get('/katalog', function () {
    return view('katalog');
})->name('katalog');

Route::get('/semuaproduk', function () {
    return view('katalog');
})->name('semuaproduk');

Route::get('/katalog/mainan', function () {
    return view('katalog-mainan');
})->name('katalog.mainan');

Route::get('/katalogmainan', function () {
    return view('katalog-mainan');
})->name('katalogmainan');

Route::get('/mainan', function () {
    return redirect()->route('katalogmainan');
});

Route::get('/katalog/teknologi', function () {
    return view('katalog-teknologi');
})->name('katalog.teknologi');

Route::get('/katalogteknologi', function () {
    return view('katalog-teknologi');
})->name('katalogteknologi');

Route::get('/teknologi', function () {
    return redirect()->route('katalogteknologi');
});

Route::get('/technology', function () {
    return redirect()->route('katalogteknologi');
});

Route::get('/katalog/technology', function () {
    return redirect()->route('katalogteknologi');
});

// Tahap 6 News & Review Routes (newsmainan & newsteknologi)
Route::get('/newsmainan', function () {
    $articles = NewsService::byTag('newsmainan');

    return view('news-mainan', compact('articles'));
})->name('newsmainan');

Route::get('/newsteknologi', function () {
    $articles = NewsService::byTag('newsteknologi');

    return view('news-teknologi', compact('articles'));
})->name('newsteknologi');

Route::get('/news/mainan', function () {
    return redirect()->route('newsmainan');
})->name('news.mainan');

Route::get('/news/teknologi', function () {
    return redirect()->route('newsteknologi');
})->name('news.teknologi');

// 8 Kategori Resmi ToysPixel (Tahap 4)
$categorySlugs = [
    'kidstoys',
    'collectibles',
    'gamespuzzles',
    'outdoorrc',
    'mobiletablets',
    'gadgetswearables',
    'computersaccessories',
    'gamingentertainment',
];

foreach ($categorySlugs as $slug) {
    Route::get('/'.$slug, function () use ($slug) {
        return CategoryService::render($slug);
    })->name('category.'.$slug);
}

// Aliases with hyphens or alternate names
$aliases = [
    'kids-toys' => 'kidstoys',
    'kids-educational' => 'kidstoys',
    'collectibleshobbies' => 'collectibles',
    'collectibles-hobbies' => 'collectibles',
    'games-puzzles' => 'gamespuzzles',
    'outdoor-rc' => 'outdoorrc',
    'mobile-tablets' => 'mobiletablets',
    'gadgets-wearables' => 'gadgetswearables',
    'computers-accessories' => 'computersaccessories',
    'gaming-entertainment' => 'gamingentertainment',
];

foreach ($aliases as $from => $to) {
    Route::get('/'.$from, function () use ($to) {
        return redirect()->route('category.'.$to);
    });
}

// Support /catagori/{slug} & /kategori/{slug}
Route::get('/catagori/{slug}', function (string $slug) {
    $cat = CategoryService::findBySlug($slug);
    if (! $cat) {
        abort(404);
    }

    return redirect()->route('category.'.$cat['slug']);
});

Route::get('/kategori/{slug}', function (string $slug) {
    $cat = CategoryService::findBySlug($slug);
    if (! $cat) {
        abort(404);
    }

    return redirect()->route('category.'.$cat['slug']);
});
