<?php

namespace Tests\Feature;

use Tests\TestCase;

class CatalogSectionTest extends TestCase
{
    /**
     * Test the homepage contains the Tahap 5 All Products catalog section with 12 items.
     */
    public function test_homepage_all_products_catalog_section(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('id="all-products"', escape: false);
        $response->assertSee('KATALOG LENGKAP');
        $response->assertSee('ALL PRODUCTS —');
        $response->assertSee('Rekomendasi Terpilih');
        $response->assertSee('Koleksi mainan dan gadget terbaik siap beli melalui link afiliasi resmi.');

        // Verify the 3 filter windows (Semua, Mainan, Technology)
        $response->assertSee('data-filter="semua"', escape: false);
        $response->assertSee('data-filter="mainan"', escape: false);
        $response->assertSee('data-filter="technology"', escape: false);

        // Verify the 2 action buttons per card
        $response->assertSee('Cek Detail');
        $response->assertSee('Beli Langsung');

        // Verify key products from the 12 items
        $response->assertSee('Gundam PG Unleashed RX-78-2');
        $response->assertSee('Tamiya Avante Black Special 4WD');
        $response->assertSee('LEGO Star Wars Millennium Falcon');
        $response->assertSee('Pop Mart Labubu Monster Art Toy');
        $response->assertSee('Beyblade X Dran Sword Starter Set');
        $response->assertSee('Rubik GAN 12 MagLev 3x3 Speedcube');
        $response->assertSee('Sony PlayStation 5 Slim Digital');
        $response->assertSee('Apple AirPods Max Wireless ANC');
        $response->assertSee('Logitech MX Master 3S Ergonomic Mouse');
        $response->assertSee('Keychron Q1 Pro Mechanical Keyboard');
        $response->assertSee('Nintendo Switch OLED Mario Red');
        $response->assertSee('Samsung Galaxy Tab S9 Ultra 5G');

        // Verify category text on cards uses 8 official categories
        $response->assertSee('Collectibles & Hobbies');
        $response->assertSee('Kids & Educational Toys');
        $response->assertSee('Games & Puzzles');
        $response->assertSee('Gaming & Entertainment');
        $response->assertSee('Gadgets & Wearables');
        $response->assertSee('Computers & Accessories');
        $response->assertSee('Mobile & Tablets');

        // Verify bottom button to custom category page
        $response->assertSee('LIHAT SELURUH KATALOG PRODUK');
        $response->assertSee('https://toyspixels.com/semuaproduk');

        // Verify Tahap 5 revision: No discount badge (% OFF) and no strikethrough price (line-through) in all-products section
        $content = $response->getContent();
        $allProductsSection = substr($content, strpos($content, 'id="all-products"'));
        $allProductsSection = substr($allProductsSection, 0, strpos($allProductsSection, 'id="artikel"'));

        $this->assertStringNotContainsString('% OFF', $allProductsSection, 'Katalog Tahap 5 tidak boleh memiliki badge diskon % OFF');
        $this->assertStringNotContainsString('line-through', $allProductsSection, 'Katalog Tahap 5 tidak boleh memiliki harga coret line-through');
        $this->assertStringContainsString('rounded-2xl', $allProductsSection, 'Bingkai foto produk harus menggunakan rounded rectangle');
        $this->assertStringContainsString('border-2', $allProductsSection, 'Bingkai foto produk harus memiliki border yang rapi');
        $this->assertStringContainsString('Rp 3.250.000', $allProductsSection);
        $this->assertStringContainsString('Rp 289.000', $allProductsSection);
    }

    /**
     * Test Tahap 5 revision: In all categories, underneath it contains links to each respective category page.
     */
    public function test_homepage_tahap5_has_links_to_specific_category_pages(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);

        $content = $response->getContent();
        $allProductsSection = substr($content, strpos($content, 'id="all-products"'));
        $allProductsSection = substr($allProductsSection, 0, strpos($allProductsSection, 'id="artikel"'));

        // Verify 3 distinct CTA sections for each category
        $this->assertStringContainsString('id="catalogCtaAll"', $allProductsSection);
        $this->assertStringContainsString('id="catalogCtaMainan"', $allProductsSection);
        $this->assertStringContainsString('id="catalogCtaTechnology"', $allProductsSection);

        // Verify specific category links
        $this->assertStringContainsString('LIHAT SELURUH KATALOG MAINAN', $allProductsSection);
        $this->assertStringContainsString('LIHAT SELURUH KATALOG TEKNOLOGI', $allProductsSection);
        $this->assertStringContainsString('https://toyspixels.com/semuaproduk', $allProductsSection);
        $this->assertStringContainsString('https://toyspixels.com/katalogmainan', $allProductsSection);
        $this->assertStringContainsString('https://toyspixels.com/katalogteknologi', $allProductsSection);

        // Verify product cards have clickable category labels linking to their respective category pages
        $this->assertStringContainsString('https://toyspixels.com/collectibles', $allProductsSection);
        $this->assertStringContainsString('https://toyspixels.com/kidstoys', $allProductsSection);
        $this->assertStringContainsString('https://toyspixels.com/gamingentertainment', $allProductsSection);

        // Verify Cek Detail links to post article
        $this->assertStringContainsString('/post/gundam-pg-unleashed-rx-78-2', $allProductsSection);

        // Verify Beli Langsung links to affiliate URL
        $this->assertStringContainsString('https://shopee.co.id/gundam-pg-unleashed-rx78-2', $allProductsSection);
    }

    /**
     * Test post detail article page loads with required specifications format at the bottom.
     */
    public function test_post_detail_page_has_required_spec_format(): void
    {
        $response = $this->get('/post/gundam-pg-unleashed-rx-78-2');

        $response->assertStatus(200);
        $response->assertSee('Gundam PG Unleashed RX-78-2');
        $response->assertSee('Collectibles & Hobbies');
        $response->assertSee('Kategori');
        $response->assertSee('Judul');
        $response->assertSee('Keterangan Judul');
        $response->assertSee('harga');
        $response->assertSee('3.250.000');
        $response->assertSee('beli langsung');
        $response->assertSee('https://shopee.co.id/gundam-pg-unleashed-rx78-2');
        $response->assertSee('tags');
        $response->assertSee('semua, mainan, collectibles');
        $response->assertSee('Beli Langsung di Shopee');
    }

    /**
     * Test products have proper tags for dynamic filtering (semua, mainan, technology).
     */
    public function test_homepage_tahap5_items_have_correct_tag_filtering_attributes(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);

        $content = $response->getContent();
        $allProductsSection = substr($content, strpos($content, 'id="all-products"'));
        $allProductsSection = substr($allProductsSection, 0, strpos($allProductsSection, 'id="artikel"'));

        // Check that all 12 items have tag 'semua'
        $this->assertGreaterThanOrEqual(12, substr_count($allProductsSection, 'semua'));

        // Check that items have tag 'mainan'
        $this->assertGreaterThanOrEqual(6, substr_count($allProductsSection, 'mainan'));

        // Check that items have tag 'technology'
        $this->assertGreaterThanOrEqual(6, substr_count($allProductsSection, 'technology'));
    }

    /**
     * Test dedicated /semuaproduk, /katalogmainan, and /katalogteknologi pages load successfully.
     */
    public function test_tahap5_custom_routes_load_successfully(): void
    {
        $this->get('/semuaproduk')->assertStatus(200);
        $this->get('/katalogmainan')->assertStatus(200);
        $this->get('/katalogteknologi')->assertStatus(200);
        $this->get('/mainan')->assertRedirect('/katalogmainan');
        $this->get('/teknologi')->assertRedirect('/katalogteknologi');
    }
}
