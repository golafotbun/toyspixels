<?php

namespace Tests\Feature;

use Tests\TestCase;

class NewsReviewSectionTest extends TestCase
{
    /**
     * Test the homepage contains Tahap 6 News & Review section with 2 categories and 3 cards each.
     */
    public function test_homepage_news_and_review_section_tahap_6(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);

        // Verify section header
        $response->assertSee('NEWS & REVIEW', escape: false);
        $response->assertSee('LATEST NEWS & IN-DEPTH REVIEWS', escape: false);

        // Extract section content
        $content = $response->getContent();
        $this->assertStringContainsString('id="artikel"', $content);
        $this->assertStringContainsString('id="news-review"', $content);

        $sectionStart = strpos($content, 'data-section="news-review"');
        $this->assertNotFalse($sectionStart);
        $sectionEnd = strpos($content, 'id="faq"', $sectionStart);
        $sectionHtml = substr($content, $sectionStart, $sectionEnd - $sectionStart);

        // Verify 3 categories: Semua, Mainan, and Teknologi
        $this->assertStringContainsString('id="tabBtnNewsAll"', $sectionHtml);
        $this->assertStringContainsString('id="tabBtnNewsMainan"', $sectionHtml);
        $this->assertStringContainsString('id="tabBtnNewsTeknologi"', $sectionHtml);
        $this->assertStringContainsString('Semua', $sectionHtml);
        $this->assertStringContainsString('Mainan', $sectionHtml);
        $this->assertStringContainsString('Teknologi', $sectionHtml);

        // Verify no icons and no word "Kategori" on the tabs
        $this->assertStringNotContainsString('🧸', $sectionHtml);
        $this->assertStringNotContainsString('⚡', $sectionHtml);
        $this->assertStringNotContainsString('Kategori 1:', $sectionHtml);
        $this->assertStringNotContainsString('Kategori 2:', $sectionHtml);

        // Verify no Tokopedia or Shopee in Tahap 6 section
        $this->assertStringNotContainsString('shopee.co.id', $sectionHtml);
        $this->assertStringNotContainsString('tokopedia.com', $sectionHtml);
        $this->assertStringNotContainsString('Beli di Shopee', $sectionHtml);
        $this->assertStringNotContainsString('Beli di Tokopedia', $sectionHtml);

        // Verify 6 cards in Semua (tag: allnews)
        $this->assertStringContainsString('id="newsContentAll"', $sectionHtml);
        $this->assertStringContainsString('data-tag="allnews"', $sectionHtml);
        $this->assertStringContainsString('#allnews', $sectionHtml);

        // Verify 3 cards in Mainan
        $this->assertStringContainsString('id="newsContentMainan"', $sectionHtml);
        $this->assertStringContainsString('Top 7 Mainan Edukasi Anak 3-7 Tahun', $sectionHtml);
        $this->assertStringContainsString('Panduan Memilih Gundam', $sectionHtml);
        $this->assertStringContainsString('Tren Pop Mart', $sectionHtml);

        // Verify 3 cards in Teknologi
        $this->assertStringContainsString('id="newsContentTeknologi"', $sectionHtml);
        $this->assertStringContainsString('Review Smartphone Flagship 2026', $sectionHtml);
        $this->assertStringContainsString('5 Rekomendasi Laptop Produktivitas di Bawah 10 Juta', $sectionHtml);
        $this->assertStringContainsString('Panduan Setup Ergonomis', $sectionHtml);

        // Verify tags for each category
        $this->assertStringContainsString('data-tag="newsmainan"', $sectionHtml);
        $this->assertStringContainsString('data-tag="newsteknologi"', $sectionHtml);
        $this->assertStringContainsString('#newsmainan', $sectionHtml);
        $this->assertStringContainsString('#newsteknologi', $sectionHtml);

        // Verify bottom links point to category specific pages (allnews, newsmainan, newsteknologi)
        $this->assertStringContainsString('https://toyspixels.com/allnews', $sectionHtml);
        $this->assertStringContainsString('https://toyspixels.com/newsmainan', $sectionHtml);
        $this->assertStringContainsString('https://toyspixels.com/newsteknologi', $sectionHtml);
        $this->assertStringContainsString('LIHAT SELURUH BERITA', $sectionHtml);
        $this->assertStringContainsString('MAINAN', $sectionHtml);
        $this->assertStringContainsString('TEKNOLOGI', $sectionHtml);

        // Verify "Lihat Selengkapnya" in cards
        $this->assertStringContainsString('Lihat Selengkapnya', $sectionHtml);
    }

    /**
     * Test the dedicated /allnews page loads successfully with tag allnews.
     */
    public function test_dedicated_all_news_page_loads(): void
    {
        $response = $this->get('/allnews');

        $response->assertStatus(200);
        $response->assertSee('News & Review — Semua Berita & Ulasan Pilihan | ToysPixel', escape: false);
        $response->assertSee('Koleksi Lengkap');
        $response->assertSee('Berita & Review');
        $response->assertSee('Top 7 Mainan Edukasi Anak 3-7 Tahun');
        $response->assertSee('Review Smartphone Flagship 2026');
        $response->assertSee('https://toyspixels.com/allnews');
        $response->assertSee('#allnews');

        // Check 6 items returned by NewsService
        $items = \App\Services\NewsService::byTag('allnews');
        $this->assertCount(6, $items);
    }

    /**
     * Test the dedicated /newsmainan page loads successfully.
     */
    public function test_dedicated_news_mainan_page_loads(): void
    {
        $response = $this->get('/newsmainan');

        $response->assertStatus(200);
        $response->assertSee('News & Review Mainan — ToysPixel', escape: false);
        $response->assertSee('Koleksi Berita');
        $response->assertSee('Review Mainan');
        $response->assertSee('Top 7 Mainan Edukasi Anak 3-7 Tahun');
        $response->assertSee('Panduan Memilih Gundam');
        $response->assertSee('Tren Pop Mart');
        $response->assertSee('https://toyspixels.com/newsmainan');
        $response->assertSee('#newsmainan');
    }

    /**
     * Test the dedicated /newsteknologi page loads successfully.
     */
    public function test_dedicated_news_teknologi_page_loads(): void
    {
        $response = $this->get('/newsteknologi');

        $response->assertStatus(200);
        $response->assertSee('News & Review Teknologi — ToysPixel', escape: false);
        $response->assertSee('Koleksi Berita');
        $response->assertSee('Review Teknologi');
        $response->assertSee('Review Smartphone Flagship 2026');
        $response->assertSee('5 Rekomendasi Laptop Produktivitas di Bawah 10 Juta');
        $response->assertSee('Panduan Setup Ergonomis');
        $response->assertSee('https://toyspixels.com/newsteknologi');
        $response->assertSee('#newsteknologi');
    }

    /**
     * Test legacy routes redirect to new clean routes.
     */
    public function test_legacy_news_routes_redirect(): void
    {
        $this->get('/news')->assertRedirect('/allnews');
        $this->get('/news/all')->assertRedirect('/allnews');
        $this->get('/news/mainan')->assertRedirect('/newsmainan');
        $this->get('/news/teknologi')->assertRedirect('/newsteknologi');
    }
}
