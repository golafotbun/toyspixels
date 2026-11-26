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
     * Test Post 1 top banner spot contains photo, price, affiliate link, and detail specs.
     */
    public function test_post_1_has_top_banner_spot_with_specs_photo_price_and_affiliate_link(): void
    {
        $response = $this->get('/post/post-1');

        $response->assertStatus(200);

        // Verify Top Banner Spot and photo
        $response->assertSee('SPOTLIGHT PRODUK #1', escape: false);
        $response->assertSee('images/toys/playstation.jpg');
        $response->assertSee('Shopee Official');

        // Verify Price in banner
        $response->assertSee('14.630.000');
        $response->assertSee('HARGA PENAWARAN RESMI');

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

        // Verify specifications in the top banner spot
        $response->assertSee('Kategori:');
        $response->assertSee('Judul:');
        $response->assertSee('Keterangan Judul:');
        $response->assertSee('Harga:');
        $response->assertSee('Beli Langsung:');
        $response->assertSee('Tags:');

        // Verify duplicate bottom specifications block has been removed so it is not written twice
        $response->assertDontSee('KETERANGAN & SPESIFIKASI ARTIKEL');
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

        $this->assertCount(1, PostService::filterByTag('topproduk'));
        $this->assertCount(1, PostService::filterByTag('gaming'));
        $this->assertCount(1, PostService::filterByTag('collectibles'));
        $this->assertCount(1, PostService::filterByTag('gamespuzzles'));
        $this->assertCount(1, PostService::filterByTag('semuaproduk'));
        $this->assertCount(1, PostService::filterByTag('katalogmainan'));
        $this->assertCount(1, PostService::filterByTag('katalogteknologi'));
    }

    /**
     * Test /topproduk/post-1 redirects to /post/post-1 and top produk cards link directly to post-1.
     */
    public function test_topproduk_links_directly_to_post_detail(): void
    {
        $response = $this->get('/topproduk/post-1');
        $response->assertRedirect('/post/post-1');

        $homeResponse = $this->get('/');
        $homeResponse->assertStatus(200);
        $homeContent = $homeResponse->getContent();
        $this->assertStringContainsString('href="http://localhost:8000/post/post-1"', $homeContent);

        $topResponse = $this->get('/topproduk');
        $topResponse->assertStatus(200);
        $topContent = $topResponse->getContent();
        $this->assertStringContainsString('href="http://localhost:8000/post/post-1"', $topContent);
    }
}
