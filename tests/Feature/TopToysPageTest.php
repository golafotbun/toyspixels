<?php

namespace Tests\Feature;

use Tests\TestCase;

class TopToysPageTest extends TestCase
{
    /**
     * Test the homepage contains the custom link toyspixels.com/topproduk,
     * exactly 7 products ordered by post date (oldest date = rank #1),
     * and no fire/lightning icons or discount/strikethrough prices.
     */
    public function test_homepage_tahap3_topproduk_custom_link_and_clean_design(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);

        // Verify custom link toyspixels.com/topproduk on button
        $response->assertSee('https://toyspixels.com/topproduk');
        $response->assertSee('Lihat Semua Top Toys');

        $content = $response->getContent();
        $tahap3Start = strpos($content, 'id="top-toys"');
        $tahap3End = strpos($content, 'id="kategori"', $tahap3Start);
        $tahap3Html = substr($content, $tahap3Start, $tahap3End - $tahap3Start);

        // Verify icon api (🔥) and petir (⚡) are removed
        $this->assertStringNotContainsString('🔥', $tahap3Html, 'Tahap 3 tidak boleh memiliki icon api 🔥');
        $this->assertStringNotContainsString('⚡', $tahap3Html, 'Tahap 3 tidak boleh memiliki icon petir ⚡');

        // Verify discount (% OFF / -27%) and strikethrough price (line-through) are removed
        $this->assertStringNotContainsString('% OFF', $tahap3Html, 'Tahap 3 tidak boleh memiliki diskon % OFF');
        $this->assertStringNotContainsString('-27%', $tahap3Html, 'Tahap 3 tidak boleh memiliki badge diskon');
        $this->assertStringNotContainsString('-24%', $tahap3Html, 'Tahap 3 tidak boleh memiliki badge diskon');
        $this->assertStringNotContainsString('line-through', $tahap3Html, 'Tahap 3 tidak boleh memiliki harga coret');

        // Verify #1 is Gundam Barbatos with blue card, correct details & price
        $this->assertStringContainsString('#1', $tahap3Html);
        $this->assertStringContainsString('Gundam Barbatos', $tahap3Html);
        $this->assertStringContainsString('14+', $tahap3Html);
        $this->assertStringContainsString('GUNPLA MG', $tahap3Html);
        $this->assertStringContainsString('Gunpla Master 1/100 dengan artikulasi dinamis dan detail mekanik', $tahap3Html);
        $this->assertStringContainsString('Rp 329.000', $tahap3Html);

        // Verify 7 products exist and rank up to #7
        $this->assertStringContainsString('#7', $tahap3Html);
        $this->assertStringContainsString('Beyblade X Stadium', $tahap3Html);
        // Ensure #8 is NOT in the homepage slider (as only top 7 are shown)
        $this->assertStringNotContainsString('#8', $tahap3Html);
    }

    /**
     * Test the dedicated /topproduk page loads successfully with all posts tagged 'top produk'.
     */
    public function test_topproduk_page_loads_successfully(): void
    {
        $response = $this->get('/topproduk');

        $response->assertStatus(200);
        $response->assertSee('Top Produk');
        $response->assertSee('Gundam Barbatos');
        $response->assertSee('Tamiya Avante 4WD');
        $response->assertSee('PlayStation 5 Slim');
        $response->assertSee('Pop Mart Labubu');
        $response->assertSee('Hot Wheels GT-R R34');
        $response->assertSee('LEGO Ferrari F40');
        $response->assertSee('Beyblade X Stadium');
        $response->assertSee('Pokemon TCG Holo');
        $response->assertSee('Optimus Prime Masterpiece');
    }

    /**
     * Test the single top produk detail article page contains the required specification format at the bottom.
     */
    public function test_topproduk_detail_page_has_specifications_at_bottom(): void
    {
        $response = $this->get('/topproduk/gundam-barbatos');

        $response->assertStatus(200);
        $response->assertSee('Gundam Barbatos');

        // Check structured specification box at the bottom of the article
        $response->assertSee('SPESIFIKASI LENGKAP');
        $response->assertSee('Umur / Jenis');
        $response->assertSee('14+/GUNPLA MG');
        $response->assertSee('Judul');
        $response->assertSee('Keterangan Judul');
        $response->assertSee('Gunpla Master 1/100 dengan artikulasi dinamis dan detail mekanik');
        $response->assertSee('Harga');
        $response->assertSee('Rp 329.000');

        // Check buy buttons
        $response->assertSee('Beli di Shopee Official');
        $response->assertSee('Beli di Tokopedia Official');
    }

    /**
     * Test /top-toys redirects to /topproduk.
     */
    public function test_top_toys_redirects_to_topproduk(): void
    {
        $response = $this->get('/top-toys');
        $response->assertRedirect('/topproduk');
    }
}
