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

        // Verify bottom specifications block also exists
        $response->assertSee('KETERANGAN & SPESIFIKASI ARTIKEL');
        $response->assertSee('Kategori');
        $response->assertSee('Judul');
        $response->assertSee('Keterangan Judul');
        $response->assertSee('harga');
        $response->assertSee('beli langsung');
        $response->assertSee('tags');
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
}
