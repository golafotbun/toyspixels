<?php

namespace Tests\Feature;

use Tests\TestCase;

class HeaderMenuTest extends TestCase
{
    /**
     * Test Tahap 8: Header Menu & Sub-Menu Dropdown on Homepage
     */
    public function test_header_menu_contains_submenus_and_direct_category_links(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);

        // Verify Header elements
        $response->assertSee('sticky top-0');
        $response->assertSee('toyspixels.com');

        // Verify All 8 Category direct URLs in Header Navigation
        $categories = [
            'https://toyspixels.com/kidstoys' => 'Kids & Educational Toys',
            'https://toyspixels.com/collectibles' => 'Collectibles & Hobbies',
            'https://toyspixels.com/gamespuzzles' => 'Games & Puzzles',
            'https://toyspixels.com/outdoorrc' => 'Outdoor & RC Play',
            'https://toyspixels.com/mobiletablets' => 'Mobile & Tablets',
            'https://toyspixels.com/gadgetswearables' => 'Gadgets & Wearables',
            'https://toyspixels.com/computersaccessories' => 'Computers & Accessories',
            'https://toyspixels.com/gamingentertainment' => 'Gaming & Entertainment',
        ];

        foreach ($categories as $url => $title) {
            $response->assertSee($url, escape: false);
            $response->assertSee($title, escape: false);
        }

        // Verify TOP PRODUK Sub-menu links
        $response->assertSee('https://toyspixels.com/topproduk', escape: false);
        $response->assertSee('#top-toys', escape: false);

        // Verify SEMUA PRODUK / KATALOG Sub-menu links
        $response->assertSee('https://toyspixels.com/semuaproduk', escape: false);
        $response->assertSee('https://toyspixels.com/katalogmainan', escape: false);
        $response->assertSee('https://toyspixels.com/katalogteknologi', escape: false);

        // Verify NEWS & REVIEW Sub-menu links
        $response->assertSee('https://toyspixels.com/allnews', escape: false);
        $response->assertSee('https://toyspixels.com/newsmainan', escape: false);
        $response->assertSee('https://toyspixels.com/newsteknologi', escape: false);

        // Verify Mobile Drawer has Accordion containers for sub-menus
        $response->assertSee('id="navMenuDrawer"', escape: false);
        $response->assertSee('id="sub-kategori"', escape: false);
        $response->assertSee('id="sub-top-produk"', escape: false);
        $response->assertSee('id="sub-semua-produk"', escape: false);
        $response->assertSee('id="sub-news"', escape: false);
        $response->assertSee('toggleSubDrawer', escape: false);
    }
}
