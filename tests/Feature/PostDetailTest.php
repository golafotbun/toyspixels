<?php

namespace Tests\Feature;

use App\Services\PostService;
use Tests\TestCase;

class PostDetailTest extends TestCase
{
    /**
     * Test Post 1 is accessible via /post/1 and /post/post-1.
     */
    public function test_post_1_is_accessible_via_slug_and_id(): void
    {
        $response1 = $this->get('/post/post-1');
        $response1->assertStatus(200);

        $response2 = $this->get('/post/1');
        $response2->assertStatus(200);

        $responseRedirect = $this->get('/post');
        $responseRedirect->assertRedirect('/post/post-1');
    }

    /**
     * Test Post 1 purchase header contains gallery photos (PS5), price, affiliate link, and detail specs.
     */
    public function test_post_1_has_top_banner_spot_with_specs_photo_price_and_affiliate_link(): void
    {
        $response = $this->get('/post/post-1');

        $response->assertStatus(200);

        // Verify gallery images and Shopee official badge
        $response->assertSee('images/toys/ps5/1.webp');
        $response->assertSee('images/toys/playstation.jpg');
        $response->assertSee('Shopee Official');

        // Verify Price in header
        $response->assertSee('14.630.000');

        // Verify Affiliate link
        $response->assertSee('https://s.shopee.co.id/Lp4WI31xi');
        $response->assertSee('Beli Langsung di Shopee');

        // Verify all 7 requested tags are present in post
        $tags = [
            'topproduk',
            'collectibles',
            'gamespuzzles',
            'gaming',
            'semuaproduk',
            'katalogmainan',
            'katalogteknologi',
        ];

        foreach ($tags as $tag) {
            $response->assertSee('#' . $tag);
            $response->assertSee($tag);
        }

        // Verify redundant specification block has been removed from Post 1 as requested
        $response->assertDontSee('Keterangan Judul:');
        $response->assertDontSee('Buy Now');
        $response->assertSee('Tags:');

        // Verify duplicate bottom specifications block has been removed so it is not written twice
        $response->assertDontSee('KETERANGAN & SPESIFIKASI ARTIKEL');

        // Verify Shopee specifications & bonus bundles are displayed cleanly in the post
        $response->assertSee('GARANSI RESMI SONY INDONESIA');
        $response->assertSee('EA FC 26');
        $response->assertSee('Kota Surabaya');

        // Verify for Post 1, the bottom action buttons are omitted so it stays completely clean
        $response->assertDontSee('Beli Langsung di Shopee Official');
    }

    /**
     * Test PostService methods.
     */
    public function test_post_service_methods(): void
    {
        $postBySlug = PostService::findBySlug('post-1');
        $this->assertNotNull($postBySlug);
        $this->assertEquals(1, $postBySlug['id']);
        $this->assertEquals('https://s.shopee.co.id/Lp4WI31xi', $postBySlug['affiliate_url']);

        $postById = PostService::findBySlug('1');
        $this->assertNotNull($postById);
        $this->assertEquals(1, $postById['id']);

        $post2BySlug = PostService::findBySlug('post-2');
        $this->assertNotNull($post2BySlug);
        $this->assertEquals(2, $post2BySlug['id']);
        $this->assertEquals('https://s.shopee.co.id/9zzc37VEVr', $post2BySlug['affiliate_url']);

        $this->assertCount(2, PostService::filterByTag('topproduk'));
        $this->assertCount(1, PostService::filterByTag('gaming'));
        $this->assertCount(2, PostService::filterByTag('collectibles'));
        $this->assertCount(1, PostService::filterByTag('gamespuzzles'));
        $this->assertCount(2, PostService::filterByTag('semuaproduk'));
        $this->assertCount(2, PostService::filterByTag('katalogmainan'));
        $this->assertCount(1, PostService::filterByTag('katalogteknologi'));
        $this->assertCount(1, PostService::filterByTag('kidstoys'));
        $this->assertCount(1, PostService::filterByTag('outdoorrc'));
    }

    /**
     * Test /topproduk/post-1 and /topproduk/post-2 redirects to /post/{slug}.
     */
    public function test_topproduk_links_directly_to_post_detail(): void
    {
        $response = $this->get('/topproduk/post-1');
        $response->assertRedirect('/post/post-1');

        $response2 = $this->get('/topproduk/post-2');
        $response2->assertRedirect('/post/post-2');

        $homeResponse = $this->get('/');
        $homeResponse->assertStatus(200);
        $homeContent = $homeResponse->getContent();
        $this->assertStringContainsString('href="http://localhost:8000/post/post-1"', $homeContent);
        $this->assertStringContainsString('href="http://localhost:8000/post/post-2"', $homeContent);

        $topResponse = $this->get('/topproduk');
        $topResponse->assertStatus(200);
        $topContent = $topResponse->getContent();
        $this->assertStringContainsString('href="http://localhost:8000/post/post-1"', $topContent);
        $this->assertStringContainsString('href="http://localhost:8000/post/post-2"', $topContent);
    }

    /**
     * Test Post 2 detail page loads correctly with all required elements.
     */
    public function test_post_2_detail_page_loads_cleanly(): void
    {
        $response = $this->get('/post/post-2');
        $response->assertStatus(200);
        $response->assertSee('Snapzy Mobil RC Off Road 4WD');
        $response->assertSee('212.000');
        $response->assertSee('Rp 261.000');
        $response->assertSee('https://s.shopee.co.id/9zzc37VEVr');
        $response->assertSee('811 Penilaian');
        $response->assertSee('Garansi Produsen 1 Bulan');
        $response->assertSee('Fitur Semprotan Kabut');
        $response->assertSee('Sistem 4WD Panjat Segala Medan');
        $response->assertSee('images/toys/post-2/1.webp');
        $response->assertSee('images/toys/post-2/2.webp');
        $response->assertSee('images/toys/post-2/3.webp');
        $response->assertDontSee('Beli Langsung di Shopee Official');
    }
}
