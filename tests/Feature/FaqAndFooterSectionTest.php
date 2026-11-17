<?php

namespace Tests\Feature;

use Tests\TestCase;

class FaqAndFooterSectionTest extends TestCase
{
    /**
     * Test the homepage contains Tahap 7 FAQ section with 10 questions without numbers, and a clean footer.
     */
    public function test_homepage_faq_section_has_10_questions_without_numbers(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);

        // Verify section header
        $response->assertSee('TANYA JAWAB & PANDUAN', escape: false);
        $response->assertSee('Frequently Asked Questions (FAQ)', escape: false);

        $content = $response->getContent();
        $this->assertStringContainsString('id="faq"', $content);

        // Extract FAQ section
        $faqStart = strpos($content, '<section id="faq"');
        $this->assertNotFalse($faqStart);
        $faqEnd = strpos($content, '</section>', $faqStart);
        $faqHtml = substr($content, $faqStart, $faqEnd - $faqStart);

        // Verify exactly 10 FAQ accordion items
        for ($i = 1; $i <= 10; $i++) {
            $this->assertStringContainsString("toggleFaq({$i})", $faqHtml);
            $this->assertStringContainsString("id=\"faqAnswer{$i}\"", $faqHtml);
            $this->assertStringContainsString("id=\"faqIcon{$i}\"", $faqHtml);
        }

        // Verify there is NO 11th FAQ item
        $this->assertStringNotContainsString('toggleFaq(11)', $faqHtml);
        $this->assertStringNotContainsString('id="faqAnswer11"', $faqHtml);

        // Verify questions have NO number prefix (e.g. "1. ", "2. ", "10. ")
        $this->assertStringNotContainsString('<span>1. ', $faqHtml);
        $this->assertStringNotContainsString('<span>2. ', $faqHtml);
        $this->assertStringNotContainsString('<span>3. ', $faqHtml);
        $this->assertStringNotContainsString('<span>4. ', $faqHtml);
        $this->assertStringNotContainsString('<span>5. ', $faqHtml);
        $this->assertStringNotContainsString('<span>6. ', $faqHtml);
        $this->assertStringNotContainsString('<span>7. ', $faqHtml);
        $this->assertStringNotContainsString('<span>8. ', $faqHtml);
        $this->assertStringNotContainsString('<span>9. ', $faqHtml);
        $this->assertStringNotContainsString('<span>10. ', $faqHtml);

        // Verify specific question texts exist cleanly
        $this->assertStringContainsString('Apakah ToysPixel menjual produk secara langsung?', $faqHtml);
        $this->assertStringContainsString('Apakah harga produk menjadi lebih mahal jika dibeli lewat link di situs ini?', $faqHtml);
        $this->assertStringContainsString('Bagaimana jaminan keaslian mainan dan perangkat teknologi yang direkomendasikan?', $faqHtml);
        $this->assertStringContainsString('Bagaimana prosedur pengiriman dan pelacakan pesanan saya?', $faqHtml);
        $this->assertStringContainsString('Apakah saya bisa mengajukan retur atau komplain jika barang rusak saat diterima?', $faqHtml);
        $this->assertStringContainsString('Apakah ketersediaan stok dan harga produk diperbarui secara berkala?', $faqHtml);
        $this->assertStringContainsString('Bagaimana cara menemukan kategori produk spesifik di ToysPixel?', $faqHtml);
        $this->assertStringContainsString('Metode pembayaran apa saja yang didukung saat checkout di marketplace?', $faqHtml);
        $this->assertStringContainsString('Apakah ulasan dan panduan review produk di ToysPixel objektif?', $faqHtml);
        $this->assertStringContainsString('Bagaimana cara mendapatkan info promo diskon dan rilis produk terbaru?', $faqHtml);
    }

    /**
     * Test the homepage footer is tidy, well-structured and contains all key sections.
     */
    public function test_homepage_footer_is_tidy_and_complete(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $content = $response->getContent();

        // Extract Footer section
        $footerStart = strpos($content, '<footer');
        $this->assertNotFalse($footerStart);
        $footerEnd = strpos($content, '</footer>', $footerStart);
        $footerHtml = substr($content, $footerStart, $footerEnd + 9 - $footerStart);

        // Verify Brand Info
        $this->assertStringContainsString('images/brand/logo-landscape.png', $footerHtml);
        $this->assertStringContainsString('Smart Picks. More Fun.', $footerHtml);
        $this->assertStringContainsString('100% Original Mall', $footerHtml);
        $this->assertStringContainsString('Official Affiliate', $footerHtml);

        // Verify Quick Navigation Column
        $this->assertStringContainsString('Navigasi Cepat', $footerHtml);
        $this->assertStringContainsString('Top 7 Produk Terpopuler', $footerHtml);
        $this->assertStringContainsString('8 Kategori Pilihan', $footerHtml);
        $this->assertStringContainsString('Katalog Lengkap Produk', $footerHtml);

        // Verify Popular Categories Column
        $this->assertStringContainsString('Kategori Populer', $footerHtml);
        $this->assertStringContainsString('Kids & Educational Toys', $footerHtml);
        $this->assertStringContainsString('Gunpla & Action Figures', $footerHtml);
        $this->assertStringContainsString('Smartphone & Tablet', $footerHtml);

        // Verify News & Guides Column
        $this->assertStringContainsString('News & Panduan', $footerHtml);
        $this->assertStringContainsString('/newsmainan', $footerHtml);
        $this->assertStringContainsString('/newsteknologi', $footerHtml);
        $this->assertStringContainsString('Transparansi Afiliasi', $footerHtml);

        // Verify Copyright & Links
        $this->assertStringContainsString('ToysPixel. All Rights Reserved.', $footerHtml);

        // Verify distracting icons and emojis are removed from footer
        $this->assertStringNotContainsString('✓ 100% Original Mall', $footerHtml);
        $this->assertStringNotContainsString('▸', $footerHtml);
        $this->assertStringNotContainsString('🧸', $footerHtml);
        $this->assertStringNotContainsString('🤖', $footerHtml);
        $this->assertStringNotContainsString('🎨', $footerHtml);
        $this->assertStringNotContainsString('📱', $footerHtml);
        $this->assertStringNotContainsString('💻', $footerHtml);
        $this->assertStringNotContainsString('🎮', $footerHtml);
        $this->assertStringNotContainsString('📰', $footerHtml);
        $this->assertStringNotContainsString('⚡', $footerHtml);
        $this->assertStringNotContainsString('🔍', $footerHtml);
    }
}
