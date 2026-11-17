<?php

namespace Tests\Feature;

use Tests\TestCase;

class GameIntroSectionTest extends TestCase
{
    /**
     * Test Tahap 1 Game Intro features: 3 taps, moving limbs (hands & feet),
     * epic ulti on 3rd tap, no portrait logo (more arena space), and smooth transitions.
     */
    public function test_game_intro_tahap_1_revisions(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $content = $response->getContent();

        // 1. Verify gameIntroOverlay exists
        $this->assertStringContainsString('id="gameIntroOverlay"', $content);

        // Extract overlay section
        $startPos = strpos($content, '<div id="gameIntroOverlay"');
        $this->assertNotFalse($startPos);
        $endPos = strpos($content, '<!-- Top Affiliate Notice Bar -->', $startPos);
        $overlayHtml = substr($content, $startPos, $endPos - $startPos);

        // 2. Logo at the bottom is REMOVED to maximize fighting arena space
        $this->assertStringNotContainsString('logo-portrait.png', $overlayHtml);
        $this->assertStringNotContainsString('toyspixels.com Logo Portrait', $overlayHtml);

        // 3. Battle Arena has expansive space
        $this->assertStringContainsString('id="battleArena"', $overlayHtml);

        // 4. Fighters with dynamic hands and legs motion layers
        $this->assertStringContainsString('id="fighterHero"', $overlayHtml);
        $this->assertStringContainsString('id="heroPunchArm"', $overlayHtml); // Tangan & kepalan bergerak
        $this->assertStringContainsString('id="heroKickLeg"', $overlayHtml);  // Kaki menendang melayang
        $this->assertStringContainsString('id="heroMultiPunchRush"', $overlayHtml); // Kumpulan banyak pukulan ketukan 3
        $this->assertStringContainsString('id="heroUltiAura"', $overlayHtml); // Aura naga ulti
        $this->assertStringContainsString('id="heroDust"', $overlayHtml);     // Debu hentakan kaki
        $this->assertStringContainsString('id="fighterEnemy"', $overlayHtml);
        $this->assertStringContainsString('id="enemyDust"', $overlayHtml);

        // 5. Epic Ulti VFX elements
        $this->assertStringContainsString('id="arenaUltiBeam"', $overlayHtml);
        $this->assertStringContainsString('id="screenFlash"', $overlayHtml);
        $this->assertStringContainsString('id="ultiTitleAlert"', $overlayHtml);
        $this->assertStringContainsString('id="ultiDarkVignette"', $overlayHtml);
        $this->assertStringContainsString('id="heroChargeOrb"', $overlayHtml);
        $this->assertStringContainsString('id="ultiDamagePopup"', $overlayHtml);
        $this->assertStringContainsString('ULTIMATE COMBO', $overlayHtml);

        // 6. Giant K.O. Banner & Instant CTA Button
        $this->assertStringContainsString('id="koBanner"', $overlayHtml);
        $this->assertStringContainsString('K.O.!', $overlayHtml);
        $this->assertStringContainsString('PERFECT VICTORY', $overlayHtml);
        $this->assertStringContainsString('MASUK KE TOYSPIXEL SEKARANG', $overlayHtml);

        // 7. Exactly 3 taps loading bar & attack button (3 Segments)
        $this->assertStringContainsString('id="loadSeg1"', $overlayHtml);
        $this->assertStringContainsString('id="loadSeg2"', $overlayHtml);
        $this->assertStringContainsString('id="loadSeg3"', $overlayHtml);
        $this->assertStringNotContainsString('id="loadSeg4"', $overlayHtml);
        $this->assertStringNotContainsString('id="loadSeg5"', $overlayHtml);
        $this->assertStringContainsString('/ 3', $overlayHtml);
        $this->assertStringContainsString('KETUK 3X', $overlayHtml);
        $this->assertStringContainsString('KE-3 ULTI', $overlayHtml);

        // 8. Script animations & transition logic
        $this->assertStringContainsString('intro-exit-cinematic', $content);
        $this->assertStringContainsString('webRevealSmooth', $content);
        $this->assertStringContainsString('anim-strike-punch-combo', $content);
        $this->assertStringContainsString('anim-strike-flying-kick', $content);
        $this->assertStringContainsString('anim-strike-multi-punch-rush', $content);
        $this->assertStringContainsString('anim-enemy-multi-hurt-barrage', $content);
        $this->assertStringContainsString('anim-hero-charge-pose', $content);
        $this->assertStringContainsString('anim-charge-orb-pulse', $content);
        $this->assertStringContainsString('anim-hero-ulti-unleash', $content);
        $this->assertStringContainsString('anim-beam-fire', $content);
        $this->assertStringContainsString('anim-enemy-struggle-in-beam', $content);
        $this->assertStringContainsString('anim-enemy-ko-explosion-final', $content);
        $this->assertStringContainsString('maxBattleTaps = 3', $content);
    }
}
