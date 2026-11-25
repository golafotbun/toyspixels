<?php

use App\Services\CategoryService;
use App\Services\KatalogService;
use App\Services\NewsService;
use App\Services\PostService;
use App\Services\TopProdukService;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $topProduk = TopProdukService::topSeven();
    $katalogProduk = KatalogService::all();
    $newsAll = NewsService::byTag('allnews');
    $newsMainan = NewsService::byTag('newsmainan');
    $newsTeknologi = NewsService::byTag('newsteknologi');

    return view('welcome', compact('topProduk', 'katalogProduk', 'newsAll', 'newsMainan', 'newsTeknologi'));
})->name('home');

Route::get('/topproduk', function () {
    $posts = TopProdukService::all();

    return view('topproduk', compact('posts'));
})->name('topproduk');

Route::get('/topproduk/{slug}', function (string $slug) {
    if ($slug === 'post-1' || $slug === '1' || PostService::findBySlug($slug)) {
        return redirect()->route('post.show', ['slug' => $slug]);
    }

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

// Route Post / Artikel Produk (Tahap 5 Cek Detail & Post 1)
Route::get('/post/{slug}', function (string $slug) {
    $post = PostService::findBySlug($slug) ?? KatalogService::findBySlug($slug);
    if (! $post) {
        abort(404);
    }
    $relatedPosts = KatalogService::all()->where('slug', '!==', $post['slug'])->take(3);

    return view('post-detail', compact('post', 'relatedPosts'));
})->name('post.show');

Route::get('/post', function () {
    return redirect()->route('post.show', ['slug' => 'post-1']);
});

Route::get('/artikel/{slug}', function (string $slug) {
    return redirect()->route('post.show', ['slug' => $slug]);
});

Route::get('/artikel', function () {
    return redirect()->route('post.show', ['slug' => 'post-1']);
});

// Tahap 5: Pages Semuaproduk, Pages Produkmainan, Pages Produkteknologi
Route::get('/katalog', function () {
    $products = KatalogService::filterByTag('semuaproduk');
    return view('katalog', compact('products'));
})->name('katalog');

Route::get('/semuaproduk', function () {
    $products = KatalogService::filterByTag('semuaproduk');
    return view('katalog', compact('products'));
})->name('semuaproduk');

Route::get('/katalog/mainan', function () {
    $products = KatalogService::filterByTag('produkmainan');
    return view('katalog-mainan', compact('products'));
})->name('katalog.mainan');

Route::get('/katalogmainan', function () {
    $products = KatalogService::filterByTag('produkmainan');
    return view('katalog-mainan', compact('products'));
})->name('katalogmainan');

Route::get('/mainan', function () {
    return redirect()->route('katalogmainan');
});

Route::get('/katalog/teknologi', function () {
    $products = KatalogService::filterByTag('produkteknologi');
    return view('katalog-teknologi', compact('products'));
})->name('katalog.teknologi');

Route::get('/katalogteknologi', function () {
    $products = KatalogService::filterByTag('produkteknologi');
    return view('katalog-teknologi', compact('products'));
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

// Tahap 6 News & Review Routes (3 Kategori: allnews, newsmainan, newsteknologi)
Route::get('/allnews', function () {
    $articles = NewsService::byTag('allnews');

    return view('news-all', compact('articles'));
})->name('allnews');

Route::get('/news', function () {
    return redirect()->route('allnews');
})->name('news');

Route::get('/news/all', function () {
    return redirect()->route('allnews');
});

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
