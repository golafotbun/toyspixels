<?php

namespace Tests\Feature;

use Tests\TestCase;

class CategoriesSectionTest extends TestCase
{
    /**
     * Test the 8 categories from Tahap 4 are rendered properly.
     */
    public function test_categories_section_contains_all_eight_categories(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('id="kategori"', escape: false);
        $response->assertSee('Kategori Mainan');
        $response->assertSee('Gadget Pilihan');

        // Check 4 categories row 1
        $response->assertSee('Kids & Educational Toys', escape: false);
        $response->assertSee('Collectibles & Hobbies', escape: false);
        $response->assertSee('Games & Puzzles', escape: false);
        $response->assertSee('Outdoor & RC Play', escape: false);

        // Check 4 categories row 2
        $response->assertSee('Mobile & Tablets', escape: false);
        $response->assertSee('Gadgets & Wearables', escape: false);
        $response->assertSee('Computers & Accessories', escape: false);
        $response->assertSee('Gaming & Entertainment', escape: false);

        // Verify "Save Up to" and distracting badges are removed as requested
        $response->assertDontSee('Save Up to');
        $response->assertDontSee('Top Pick');
        $response->assertDontSee('CATEGORIES');
        $response->assertDontSee('Koleksi Mainan & Hobi (4 Kategori)');
        $response->assertDontSee('Perangkat Gadget & Teknologi (4 Kategori)');
        $response->assertDontSee('Kategori 01');
    }

    /**
     * Test all 8 categories in Tahap 4 link to dedicated custom URLs (toyspixels.com/{category}).
     */
    public function test_categories_section_has_custom_links(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('https://toyspixels.com/kidstoys', escape: false);
        $response->assertSee('https://toyspixels.com/collectibles', escape: false);
        $response->assertSee('https://toyspixels.com/gamespuzzles', escape: false);
        $response->assertSee('https://toyspixels.com/outdoorrc', escape: false);
        $response->assertSee('https://toyspixels.com/mobiletablets', escape: false);
        $response->assertSee('https://toyspixels.com/gadgetswearables', escape: false);
        $response->assertSee('https://toyspixels.com/computersaccessories', escape: false);
        $response->assertSee('https://toyspixels.com/gamingentertainment', escape: false);
    }

    /**
     * Test each category route returns HTTP 200 with proper data.
     */
    public function test_category_pages_render_successfully(): void
    {
        $categories = [
            'kidstoys' => 'Kids & Educational Toys',
            'collectibles' => 'Collectibles & Hobbies',
            'gamespuzzles' => 'Games & Puzzles',
            'outdoorrc' => 'Outdoor & RC Play',
            'mobiletablets' => 'Mobile & Tablets',
            'gadgetswearables' => 'Gadgets & Wearables',
            'computersaccessories' => 'Computers & Accessories',
            'gamingentertainment' => 'Gaming & Entertainment',
        ];

        foreach ($categories as $slug => $title) {
            $response = $this->get('/'.$slug);
            $response->assertStatus(200);
            $response->assertSee($title);
            $response->assertSee('Rekomendasi Produk Pilihan');
            $response->assertSee('Cek Detail');
            $response->assertSee('Beli Langsung');
        }
    }

    /**
     * Test alias routes redirect to main category slug.
     */
    public function test_category_aliases_redirect_properly(): void
    {
        $aliases = [
            '/kids-toys' => '/kidstoys',
            '/collectibles-hobbies' => '/collectibles',
            '/games-puzzles' => '/gamespuzzles',
            '/outdoor-rc' => '/outdoorrc',
            '/mobile-tablets' => '/mobiletablets',
            '/gadgets-wearables' => '/gadgetswearables',
            '/computers-accessories' => '/computersaccessories',
            '/gaming-entertainment' => '/gamingentertainment',
            '/catagori/kidstoys' => '/kidstoys',
            '/kategori/kidstoys' => '/kidstoys',
        ];

        foreach ($aliases as $from => $to) {
            $response = $this->get($from);
            $response->assertRedirect($to);
        }
    }
}
