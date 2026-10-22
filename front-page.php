<?php
/**
 * The template for displaying the Homepage
 * Designed according to the Gloss Millennia Editorial Magazine layout.
 */

get_header(); 
?>

<!-- Google Fonts Preload for Jost & Crimson Text -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400&family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
/* ==========================================================================
   GLOSS MILLENNIA HOMEPAGE STYLES (Figma Editorial Design)
   ========================================================================== */
:root {
    --gm-font-display: 'Jost', 'Helvetica Neue', Arial, sans-serif;
    --gm-font-serif: 'Crimson Text', Georgia, serif;
    --gm-font-sans: 'Jost', -apple-system, BlinkMacSystemFont, sans-serif;
    --gm-color-dark: #111111;
    --gm-color-gray-dark: #444444;
    --gm-color-gray-muted: #707070;
    --gm-color-dot: #BABAAB;
    --gm-color-sand: #E5E3DB;
    --gm-color-bg-light: #EFEFEF;
}

.gm-home-wrapper {
    width: 100%;
    margin: 0;
    padding: 24px 0 0;
    box-sizing: border-box;
    font-family: var(--gm-font-sans);
    color: var(--gm-color-dark);
}

/* Ensure all boxed sections align exactly with the header container */
.gm-container,
.gm-home-wrapper .container {
    width: 100%;
    max-width: 1240px;
    margin-left: auto;
    margin-right: auto;
    padding-left: var(--spacing-sm, 1rem);
    padding-right: var(--spacing-sm, 1rem);
    box-sizing: border-box;
}

/* Typography Helpers */
.gm-heading-xl {
    font-family: var(--gm-font-display);
    font-weight: 300;
    font-size: clamp(38px, 5vw, 68px);
    line-height: 1.15;
    text-transform: uppercase;
    color: #000000;
    margin: 0 0 12px;
    letter-spacing: 0.5px;
}

.gm-heading-xl a {
    color: inherit;
    text-decoration: none;
    transition: opacity 0.2s ease;
}

.gm-heading-xl a:hover {
    opacity: 0.8;
}

.gm-accent-line {
    width: 100px;
    height: 4.8px;
    border-bottom: 2.4px solid rgba(17, 17, 17, 0.25);
    margin-bottom: 36px;
}

.gm-category-tag {
    font-family: var(--gm-font-sans);
    font-size: 12px;
    line-height: 17px;
    letter-spacing: 1px;
    text-transform: uppercase;
    font-weight: 600;
    color: var(--gm-color-dark);
    display: inline-block;
}

.gm-meta-dot {
    display: inline-block;
    width: 5px;
    height: 5px;
    background: var(--gm-color-dot);
    border-radius: 50%;
    margin: 0 8px;
    vertical-align: middle;
}

.gm-meta-time {
    font-family: var(--gm-font-sans);
    font-size: 12px;
    line-height: 17px;
    letter-spacing: 0.8px;
    text-transform: uppercase;
    color: var(--gm-color-gray-dark);
}

.gm-time-date {
    display: none;
}

.gm-time-relative {
    display: inline;
}

.gm-card-title {
    font-family: var(--gm-font-sans);
    font-size: 24px;
    line-height: 1.3;
    letter-spacing: 0.3px;
    font-weight: 600;
    color: var(--gm-color-dark);
    margin: 8px 0;
    transition: color 0.2s ease;
}

.gm-card-title:hover,
a:hover .gm-card-title {
    color: #555555;
}

.gm-card-excerpt {
    font-family: var(--gm-font-serif);
    font-size: 16px;
    line-height: 1.5;
    color: #222222;
    margin: 0 0 12px;
}

.gm-card-author {
    font-family: var(--gm-font-sans);
    font-size: 11px;
    line-height: 16px;
    letter-spacing: 0.64px;
    text-transform: uppercase;
    color: var(--gm-color-dark);
    font-weight: 500;
    margin-top: auto;
}

.gm-see-all-link {
    font-family: var(--gm-font-sans);
    font-size: 13px;
    line-height: 20px;
    letter-spacing: 1.2px;
    text-transform: uppercase;
    font-weight: 600;
    color: var(--gm-color-dark);
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: transform 0.2s ease;
}

.gm-see-all-link:hover {
    transform: translateX(4px);
}

/* ==========================================================================
   1. HERO SPLIT SECTION (Full Width Flush Left Corkboard + Portrait Card)
   ========================================================================== */
.gm-hero-section {
    width: 100%;
    margin: 0 0 90px 0;
    padding: 0;
    box-sizing: border-box;
    display: flex;
    align-items: stretch;
    position: relative;
    background: #FAF9F6;
}

.gm-hero-main {
    flex: 1;
    position: relative;
    text-decoration: none;
    display: block;
    min-width: 0;
}

.gm-hero-image-wrap {
    width: 100%;
    background: #EFEFEF;
    overflow: hidden;
    position: relative;
}

/* Aspect ratio options for customized hero image */
.gm-hero-image-wrap.ratio-16-9 {
    aspect-ratio: 16 / 9;
    max-height: 480px;
}

.gm-hero-image-wrap.ratio-21-9 {
    aspect-ratio: 21 / 9;
    max-height: 440px;
}

.gm-hero-image-wrap.ratio-27-10 {
    aspect-ratio: 781 / 285;
    max-height: 440px;
}

.gm-hero-image-wrap.ratio-3-2 {
    aspect-ratio: 3 / 2;
    max-height: 520px;
}

.gm-hero-image-wrap.ratio-auto {
    height: 440px;
}

.gm-hero-image-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    display: block;
    transition: transform 0.5s ease;
}

.gm-hero-main:hover .gm-hero-image-wrap img {
    transform: scale(1.02);
}

.gm-hero-overlay-card {
    background: #E5E3DB;
    max-width: 864px;
    width: 86%;
    position: absolute;
    bottom: -60px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 10;
    padding: 26px 36px;
    box-sizing: border-box;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.06);
}

.gm-hero-overlay-title {
    font-family: var(--gm-font-sans);
    font-size: clamp(22px, 2.3vw, 28px);
    line-height: 1.3;
    font-weight: 600;
    color: var(--gm-color-dark);
    letter-spacing: 0.5px;
    margin: 8px 0;
}

.gm-hero-overlay-excerpt {
    font-family: var(--gm-font-serif);
    font-size: 16px;
    line-height: 1.5;
    color: var(--gm-color-dark);
    margin: 0;
}

/* Right Editorial Video Card (GLOSSY Portrait Offset Layout) */
.gm-hero-side {
    width: 320px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 24px 32px;
    box-sizing: border-box;
    background: #FAF9F6;
}

.gm-hero-portrait-card-wrap {
    position: relative;
    width: 100%;
    max-width: 240px;
    margin: 0 auto;
    transition: transform 0.3s ease;
}

.gm-hero-portrait-card-wrap:not(.has-floating-player):hover {
    transform: translateY(-3px);
}

body.has-floating-hero-video .gm-hero-portrait-card-wrap,
body.has-floating-hero-video .gm-hero-portrait-card-wrap:hover,
.gm-hero-portrait-card-wrap.has-floating-player,
.gm-hero-portrait-card-wrap.has-floating-player:hover {
    transform: none !important;
    transition: none !important;
}

/* Offset black accent sticking out top-right and right edge */
.gm-hero-card-accent {
    position: absolute;
    top: 12px;
    right: -12px;
    bottom: 0;
    width: 100%;
    background: #000000;
    z-index: 1;
    pointer-events: none;
}

/* Video Slot (Maintains exact space in card when video floats) */
.gm-hero-video-slot {
    position: relative;
    z-index: 2;
    width: 100%;
    aspect-ratio: 304 / 363;
    background: #000000;
    overflow: visible;
}

/* Video Player in Hero */
.gm-hero-floating-player {
    position: relative;
    width: 100%;
    height: 100%;
    aspect-ratio: 304 / 363;
    overflow: hidden;
    background: #111111;
    z-index: 2;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
}

.gm-hero-video-tag {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    cursor: pointer;
}

/* Sound Toggle Button */
.gm-hero-sound-toggle {
    position: absolute;
    top: 8px;
    right: 8px;
    z-index: 5;
    width: 28px;
    height: 28px;
    border-radius: 50%;
    background: rgba(0, 0, 0, 0.6);
    backdrop-filter: blur(4px);
    -webkit-backdrop-filter: blur(4px);
    border: 1px solid rgba(255, 255, 255, 0.25);
    color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    padding: 0;
    transition: background 0.2s ease, transform 0.2s ease;
}

.gm-hero-sound-toggle:hover {
    background: rgba(0, 0, 0, 0.85);
    transform: scale(1.08);
}

.gm-hero-sound-toggle svg {
    width: 14px;
    height: 14px;
    fill: currentColor;
    display: block;
}

/* Floating Close Button (hidden in hero, visible only when floating) */
.gm-hero-floating-close {
    display: none;
    position: absolute;
    top: 6px;
    left: 6px;
    width: 22px;
    height: 22px;
    border-radius: 50%;
    background: rgba(0, 0, 0, 0.75);
    color: #ffffff;
    border: 1px solid rgba(255, 255, 255, 0.35);
    align-items: center;
    justify-content: center;
    cursor: pointer;
    z-index: 6;
    padding: 0;
    transition: transform 0.2s ease, background 0.2s ease;
}

.gm-hero-floating-close:hover {
    transform: scale(1.1);
    background: rgba(0, 0, 0, 0.95);
}

.gm-hero-floating-close svg {
    width: 10px;
    height: 10px;
    fill: currentColor;
    display: block;
}

/* Bottom Black Bar with GLOSSY (STAYS PERMANENTLY IN HERO) */
.gm-hero-card-brand-bar {
    position: relative;
    z-index: 2;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 52px;
    background: #000000;
    margin-left: 28px;
    margin-right: -12px;
    text-decoration: none;
    transition: opacity 0.2s ease;
}

.gm-hero-card-brand-bar:hover {
    opacity: 0.9;
}

.gm-hero-brand-text {
    color: #ffffff;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
    font-size: 15px;
    font-weight: 800;
    letter-spacing: 0.32em;
    text-transform: uppercase;
    text-indent: 0.32em;
    line-height: 1;
    user-select: none;
}

/* ==========================================================================
   FLOATING VIDEO PLAYER ONLY (Scroll to Bottom-Right Corner)
   Note: The black background frame and GLOSSY text remain in the hero!
   ========================================================================== */
.gm-hero-floating-player.is-floating {
    position: fixed !important;
    bottom: 24px !important;
    right: 24px !important;
    width: 160px !important;
    aspect-ratio: 304 / 363 !important;
    height: auto !important;
    border-radius: 8px !important;
    overflow: hidden !important;
    z-index: 1005 !important;
    box-shadow: 0 12px 35px rgba(0, 0, 0, 0.45) !important;
    transform: translateZ(0) !important;
    -webkit-transform: translateZ(0) !important;
    backface-visibility: hidden !important;
    -webkit-backface-visibility: hidden !important;
    will-change: transform, opacity;
    animation: gmFloatSlideIn 0.25s ease-out;
}

.gm-hero-floating-player.is-floating .gm-hero-floating-close {
    display: flex !important;
}

.gm-hero-floating-player.is-floating .gm-hero-sound-toggle {
    width: 24px !important;
    height: 24px !important;
    top: 6px !important;
    right: 6px !important;
}

.gm-hero-floating-player.is-floating .gm-hero-sound-toggle svg {
    width: 12px !important;
    height: 12px !important;
}

@keyframes gmFloatSlideIn {
    0% {
        opacity: 0;
        transform: translateY(30px) scale(0.92);
    }
    100% {
        opacity: 1;
        transform: translateY(0) scale(1);
    }
}

/* Shift back-to-top button up when floating hero video is active */
body.has-floating-hero-video #tcc-floating-to-top {
    bottom: 270px !important;
    transition: bottom 0.3s ease, opacity 0.3s ease, transform 0.3s ease;
}

@media (max-width: 900px) {
    .gm-hero-side {
        width: 100%;
        padding: 24px 20px;
    }
    .gm-hero-portrait-card-wrap {
        max-width: 240px;
    }
}

@media (max-width: 768px) {
    .gm-hero-floating-player.is-floating {
        bottom: 18px !important;
        right: 16px !important;
        width: 130px !important;
    }
    body.has-floating-hero-video #tcc-floating-to-top {
        bottom: 230px !important;
    }
}

/* ==========================================================================
   2. THE LATEST SECTION + SIDEBAR
   ========================================================================== */
.gm-latest-section {
    margin-bottom: 80px;
}

.gm-latest-layout {
    display: flex;
    gap: 40px;
}

.gm-latest-main {
    flex: 1;
}

.gm-latest-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 36px 24px;
}

.gm-latest-card {
    display: flex;
    flex-direction: column;
    text-decoration: none;
    color: inherit;
}

.gm-card-img-wrap {
    width: 100%;
    aspect-ratio: 4 / 3;
    background: #eeeeee;
    overflow: hidden;
    margin-bottom: 12px;
}

.gm-card-img-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
}

.gm-latest-card:hover .gm-card-img-wrap img,
.gm-card-hover:hover img {
    transform: scale(1.04);
}

/* Sidebar: Scrollable Newsletter + Sticky 300x600 Ad Below */
.gm-latest-sidebar {
    width: 300px;
    flex-shrink: 0;
    display: flex;
    flex-direction: column;
    gap: 24px;
}

/* 1. Scrollable Newsletter Card */
.gm-newsletter-card {
    width: 300px;
    background: #FAF8F5;
    border: 1px solid #E5E2DA;
    padding: 30px 22px;
    box-sizing: border-box;
    text-align: center;
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.03);
}

.gm-newsletter-tag {
    font-family: var(--gm-font-sans);
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: #888888;
    margin-bottom: 8px;
    display: inline-block;
}

.gm-newsletter-title {
    font-family: var(--gm-font-serif);
    font-size: 22px;
    line-height: 1.25;
    font-weight: 500;
    color: #111111;
    margin: 0 0 10px;
}

.gm-newsletter-desc {
    font-family: var(--gm-font-sans);
    font-size: 13px;
    line-height: 1.5;
    color: #555555;
    margin: 0 0 18px;
}

.gm-newsletter-input {
    width: 100%;
    padding: 11px 14px;
    font-family: var(--gm-font-sans);
    font-size: 13px;
    border: 1px solid #D8D5CD;
    background: #ffffff;
    color: #111111;
    outline: none;
    box-sizing: border-box;
    margin-bottom: 10px;
    transition: border-color 0.2s ease;
}

.gm-newsletter-input:focus {
    border-color: #111111;
}

.gm-newsletter-btn {
    width: 100%;
    padding: 12px;
    font-family: var(--gm-font-sans);
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    background: #111111;
    color: #ffffff;
    border: none;
    cursor: pointer;
    transition: background 0.25s ease;
    display: block;
}

.gm-newsletter-btn:hover {
    background: #333333;
}

.gm-newsletter-privacy {
    font-family: var(--gm-font-sans);
    font-size: 10px;
    line-height: 1.4;
    color: #888888;
    margin: 12px 0 0 0;
}

/* 2. Sticky Advertisement Card Below (300x600 Half Page like before) */
.gm-ad-sticky-wrap {
    position: sticky;
    top: 100px;
    width: 300px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.gm-ad-label {
    font-family: var(--gm-font-sans);
    font-size: 10px;
    line-height: 14px;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: var(--gm-color-gray-muted);
    text-align: center;
    margin: 8px 0;
}

.gm-ad-box {
    width: 300px;
    min-height: 600px;
    background: #F4F4F4;
    border: 1px dashed #CCCCCC;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 20px;
    box-sizing: border-box;
    text-align: center;
}

/* ==========================================================================
   3. TRENDING NOW SECTION (Full Width Warm Sand)
   ========================================================================== */
.gm-trending-wrapper {
    background: var(--gm-color-sand);
    width: 100%;
    padding: 50px 0 70px;
    box-sizing: border-box;
    margin: 0 0 80px;
}

.gm-trending-header-box {
    text-align: center;
    margin-bottom: 45px;
}

.gm-trending-title {
    font-family: var(--gm-font-display);
    font-size: clamp(60px, 8vw, 110px);
    line-height: 1.1;
    font-weight: 400;
    text-transform: uppercase;
    color: #FFFFFF;
    -webkit-text-stroke: 2px #111111;
    paint-order: stroke fill;
    letter-spacing: 3px;
    margin: 0;
}

.gm-trending-title a {
    color: inherit;
    -webkit-text-stroke: inherit;
    paint-order: inherit;
    text-decoration: none;
    transition: opacity 0.2s ease;
}

.gm-trending-title a:hover {
    opacity: 0.85;
}

.gm-trending-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 28px;
}

/* ==========================================================================
   4. MOST CLICKED SECTION
   ========================================================================== */
.gm-most-clicked-section {
    margin-bottom: 80px;
}

.gm-four-col-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 28px;
}

/* ==========================================================================
   5. SHOPPING SECTION
   ========================================================================== */
.gm-section-header-flex {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    margin-bottom: 12px;
}

.gm-shopping-section {
    margin-bottom: 80px;
}

.gm-shopping-grid {
    display: grid;
    grid-template-columns: 1.15fr 1.15fr 0.85fr;
    gap: 36px;
    align-items: flex-start;
}

/* Large Featured Story (Col 1) */
.gm-featured-square-card {
    display: flex;
    flex-direction: column;
    text-decoration: none;
    color: inherit;
}

.gm-square-img-wrap {
    width: 100%;
    aspect-ratio: 1 / 1;
    overflow: hidden;
    background: #eee;
    margin-bottom: 16px;
}

.gm-square-img-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
}

.gm-featured-square-card:hover img {
    transform: scale(1.03);
}

.gm-featured-large-title {
    font-family: var(--gm-font-sans);
    font-size: 32px;
    line-height: 1.25;
    font-weight: 600;
    letter-spacing: 0.5px;
    margin: 10px 0;
    color: var(--gm-color-dark);
}

/* Horizontal List Cards (Col 2) */
.gm-horizontal-list {
    display: flex;
    flex-direction: column;
    gap: 24px;
}

.gm-horizontal-item {
    display: flex;
    gap: 16px;
    text-decoration: none;
    color: inherit;
    align-items: flex-start;
}

.gm-horizontal-thumb {
    width: 150px;
    height: 115px;
    flex-shrink: 0;
    overflow: hidden;
    background: #eee;
}

.gm-horizontal-thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
}

.gm-horizontal-item:hover .gm-horizontal-thumb img {
    transform: scale(1.05);
}

.gm-horizontal-content {
    flex: 1;
    display: flex;
    flex-direction: column;
}

.gm-horizontal-title {
    font-family: var(--gm-font-sans);
    font-size: 20px;
    line-height: 1.3;
    font-weight: 600;
    margin: 4px 0 8px;
    color: var(--gm-color-dark);
}

/* Verification Seal Box (Col 3) */
.gm-seal-box {
    border: 1px solid #000000;
    padding: 44px 28px;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    background: #ffffff;
    box-sizing: border-box;
}

.gm-seal-icon-wrap {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    border: 2px solid #000000;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-bottom: 24px;
    position: relative;
    padding: 10px;
    background: #fafafa;
}

.gm-seal-icon-wrap span {
    font-family: var(--gm-font-sans);
    font-size: 10px;
    letter-spacing: 2px;
    text-transform: uppercase;
    font-weight: 700;
}

.gm-seal-title {
    font-family: var(--gm-font-sans);
    font-size: 20px;
    line-height: 1.3;
    font-weight: 600;
    margin: 0 0 12px;
    color: var(--gm-color-dark);
}

.gm-seal-desc {
    font-family: var(--gm-font-serif);
    font-size: 16px;
    line-height: 1.5;
    color: #333333;
    margin: 0 0 20px;
}

.gm-seal-see-all {
    font-family: var(--gm-font-sans);
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 1.2px;
    text-transform: uppercase;
    color: #111111;
    text-decoration: none;
    margin: 0 0 22px;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    transition: opacity 0.2s ease, transform 0.2s ease;
}

.gm-seal-see-all:hover {
    opacity: 0.7;
    transform: translateX(3px);
}

.gm-btn-black {
    background: #000000;
    color: #ffffff;
    font-family: var(--gm-font-sans);
    font-size: 13px;
    line-height: 1;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    font-weight: 600;
    padding: 16px 32px;
    text-decoration: none;
    border: 1px solid #000000;
    transition: all 0.25s ease;
    display: inline-block;
}

.gm-btn-black:hover {
    background: #ffffff;
    color: #000000;
}

/* ==========================================================================
   6. NAILS SECTION - THE MONTH'S NAIL EDIT (Full Width Screen Layout)
   ========================================================================== */
.gm-nails-section {
    width: 100%;
    max-width: 100%;
    margin-left: 0;
    margin-right: 0;
    background: #ECE7E6;
    padding-top: clamp(50px, 5.5vw, 85px);
    padding-bottom: clamp(50px, 5.5vw, 85px);
    padding-left: 0;
    padding-right: 0;
    margin-bottom: 0 !important;
    box-sizing: border-box;
    overflow: hidden;
}

.gm-nail-edit-grid {
    display: grid;
    grid-template-columns: 1.3fr 1fr 1fr 1fr;
    grid-template-rows: repeat(2, clamp(280px, 22vw, 380px));
    width: 100%;
    gap: 4px;
    background: #ECE7E6;
}

.gm-nail-edit-intro {
    grid-row: span 2;
    background: #ECE7E6;
    padding: clamp(40px, 4vw, 64px) clamp(32px, 3.5vw, 56px);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    box-sizing: border-box;
}

.gm-nail-edit-title {
    font-family: var(--gm-font-serif);
    font-size: clamp(26px, 2.4vw, 34px);
    line-height: 1.25;
    font-weight: 400;
    color: #111111;
    margin: 0 0 16px 0;
    letter-spacing: -0.2px;
}

.gm-nail-edit-title em {
    font-style: italic;
    font-family: var(--gm-font-serif);
}

.gm-nail-edit-desc {
    font-family: var(--gm-font-sans);
    font-size: 14px;
    line-height: 1.6;
    color: #444444;
    margin: 0 0 28px 0;
    max-width: 300px;
}

.gm-nail-edit-btn {
    font-family: var(--gm-font-sans);
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: #ffffff;
    background: #111111;
    padding: 13px 24px;
    text-decoration: none;
    display: inline-block;
    transition: background 0.25s ease, transform 0.2s ease;
}

.gm-nail-edit-btn:hover {
    background: #333333;
    color: #ffffff;
}

.gm-nail-card {
    display: block;
    text-decoration: none;
    overflow: hidden;
    position: relative;
    background: #ECE7E6;
    height: 100%;
}

.gm-nail-img-wrap {
    width: 100%;
    height: 100%;
    overflow: hidden;
    position: relative;
    background: #ECE7E6;
}

.gm-nail-img-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.45s ease;
}

.gm-nail-card:hover .gm-nail-img-wrap img {
    transform: scale(1.05);
}

/* ==========================================================================
   RESPONSIVE MEDIA QUERIES
   ========================================================================== */
@media (max-width: 1200px) {
    .gm-latest-layout {
        flex-direction: column;
    }
    .gm-latest-sidebar {
        width: 100%;
        align-items: center;
        margin-top: 40px;
    }
    .gm-ad-sticky-wrap {
        position: static;
    }
    .gm-trending-grid,
    .gm-four-col-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    .gm-shopping-grid {
        grid-template-columns: 1fr 1fr;
    }
    .gm-seal-box {
        grid-column: span 2;
        max-width: 500px;
        margin: 20px auto 0;
    }
}

@media (max-width: 992px) {
    .gm-home-wrapper {
        padding: 16px 0 60px;
    }
    .gm-hero-section {
        flex-direction: column;
        margin-bottom: 50px;
    }
    .gm-hero-image-wrap,
    .gm-hero-image-wrap.ratio-16-9,
    .gm-hero-image-wrap.ratio-21-9,
    .gm-hero-image-wrap.ratio-27-10,
    .gm-hero-image-wrap.ratio-3-2,
    .gm-hero-image-wrap.ratio-auto {
        aspect-ratio: auto !important;
        height: 320px !important;
    }
    .gm-hero-overlay-card {
        position: relative;
        bottom: auto;
        left: auto;
        transform: none;
        width: 90%;
        margin: -40px auto 20px;
        padding: 20px 24px;
    }
    .gm-hero-overlay-title {
        font-size: 22px;
    }
    .gm-hero-overlay-excerpt {
        font-size: 14px;
    }
    .gm-hero-side {
        width: 100%;
        padding: 30px 20px 65px;
    }
    .gm-hero-video-card-container {
        max-width: 250px;
    }
    .gm-heading-xl {
        font-size: clamp(30px, 5vw, 48px);
        margin-bottom: 8px;
    }
    .gm-latest-section,
    .gm-most-clicked-section,
    .gm-shopping-section {
        margin-bottom: 50px;
    }
    .gm-nails-section {
        margin-bottom: 0 !important;
    }
    .gm-latest-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 24px 18px;
    }
    .gm-card-title {
        font-size: 21px;
    }
    .gm-card-excerpt {
        font-size: 15px;
    }
    .gm-featured-large-title {
        font-size: 26px;
    }
    .gm-horizontal-title {
        font-size: 18px;
    }
    .gm-trending-wrapper {
        padding: 36px 0 50px;
        margin-bottom: 50px;
    }
    .gm-trending-title {
        font-size: clamp(44px, 7vw, 80px);
        -webkit-text-stroke: 1.8px #111111;
    }
    .gm-trending-header-box {
        margin-bottom: 30px;
    }
    .gm-shopping-grid {
        grid-template-columns: 1fr;
        gap: 28px;
    }
    .gm-seal-box {
        grid-column: span 1;
        padding: 32px 24px;
    }
    .gm-nail-edit-grid {
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: auto repeat(2, minmax(0, 220px));
        width: 100%;
        gap: 6px;
    }
    .gm-nail-edit-intro {
        grid-column: span 3;
        grid-row: auto;
        padding: 36px 24px;
        text-align: center;
        align-items: center;
    }
    .gm-nail-edit-desc {
        max-width: 480px;
        margin-bottom: 20px;
    }
}

/* 2-Column Mobile Grid for "The Latest" Section (matching reference style) */
@media (max-width: 768px) {
    .gm-latest-layout {
        gap: 24px;
    }
    .gm-latest-grid {
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 22px 14px;
    }
    .gm-latest-card {
        display: flex;
        flex-direction: column;
        height: 100%;
    }
    .gm-latest-card .gm-card-img-wrap {
        aspect-ratio: 4 / 3;
        border-radius: 4px;
        margin-bottom: 8px;
        overflow: hidden;
    }
    .gm-latest-card .gm-card-meta {
        display: contents;
    }
    .gm-latest-card .gm-card-img-wrap {
        order: 1;
    }
    .gm-latest-card .gm-category-tag {
        order: 2;
        font-family: var(--gm-font-sans);
        font-size: 11px;
        line-height: 15px;
        font-weight: 700;
        letter-spacing: 0.8px;
        text-transform: uppercase;
        color: #1a56db;
        margin: 2px 0 4px;
        display: block;
    }
    .gm-latest-card .gm-meta-dot {
        display: none !important;
    }
    .gm-card-title {
        font-size: 19px;
    }
    .gm-latest-card .gm-card-title {
        order: 3;
        font-family: var(--gm-font-sans);
        font-size: 17px;
        line-height: 1.35;
        font-weight: 600;
        letter-spacing: 0.15px;
        color: #111827;
        margin: 0 0 8px;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .gm-latest-card .gm-meta-time {
        order: 4;
        font-family: var(--gm-font-sans);
        font-size: 11px;
        line-height: 14px;
        letter-spacing: 0.2px;
        text-transform: none;
        color: #6b7280;
        margin-top: auto;
        display: block;
    }
    .gm-latest-card .gm-time-relative {
        display: none;
    }
    .gm-latest-card .gm-time-date {
        display: inline;
    }
    .gm-latest-card .gm-card-excerpt,
    .gm-latest-card .gm-card-author {
        display: none !important;
    }
    .gm-heading-xl {
        font-size: clamp(28px, 6vw, 38px);
    }
    .gm-shopping-section .gm-heading-xl {
        font-size: clamp(34px, 8.5vw, 46px) !important;
        letter-spacing: 0.8px;
        line-height: 1.1;
        margin-bottom: 8px;
    }
    .gm-shopping-section .gm-see-all-link {
        display: none;
    }
    .gm-section-header-flex {
        margin-bottom: 8px;
    }
    .gm-see-all-link {
        font-size: 11px;
    }
    .gm-trending-title {
        font-size: clamp(36px, 9vw, 60px);
        -webkit-text-stroke: 1.5px #111111;
        letter-spacing: 2px;
    }
    .gm-trending-wrapper {
        padding: 28px 0 40px;
        margin-bottom: 40px;
    }
    .gm-trending-header-box {
        margin-bottom: 22px;
    }
    .gm-hero-image-wrap {
        height: 260px;
    }
    .gm-hero-overlay-card {
        padding: 16px 20px;
    }
    .gm-hero-overlay-title {
        font-size: 22px;
    }
    .gm-hero-overlay-excerpt {
        font-size: 13px;
    }
    .gm-horizontal-list {
        gap: 20px;
    }
    .gm-horizontal-item {
        display: flex !important;
        flex-direction: row !important;
        gap: 14px;
        align-items: flex-start;
    }
    .gm-horizontal-thumb {
        width: clamp(110px, 28vw, 130px) !important;
        height: clamp(84px, 22vw, 100px) !important;
        aspect-ratio: 4 / 3;
        flex-shrink: 0;
    }
    .gm-horizontal-content {
        flex: 1;
        min-width: 0;
    }
    .gm-horizontal-title {
        font-size: clamp(15px, 3.8vw, 17px);
        line-height: 1.3;
        margin: 2px 0 5px;
    }
    .gm-seal-title {
        font-size: 17px;
    }
    .gm-seal-desc {
        font-size: 14px;
    }
    .gm-seal-icon-wrap {
        width: 90px;
        height: 90px;
        margin-bottom: 18px;
    }
    .gm-newsletter-title {
        font-size: 20px;
    }
}

@media (max-width: 600px) {
    .gm-trending-title {
        font-size: clamp(28px, 8.5vw, 42px);
        -webkit-text-stroke: 1.2px #111111;
        letter-spacing: 1.5px;
    }
    .gm-trending-grid,
    .gm-four-col-grid {
        grid-template-columns: 1fr;
        gap: 24px;
    }
    .gm-horizontal-item {
        display: flex !important;
        flex-direction: row !important;
        gap: 14px;
        align-items: flex-start;
    }
    .gm-horizontal-thumb {
        width: clamp(105px, 28vw, 125px) !important;
        height: clamp(80px, 22vw, 96px) !important;
        aspect-ratio: 4 / 3;
        flex-shrink: 0;
    }
    .gm-hero-image-wrap {
        height: 220px;
    }
    .gm-hero-overlay-card {
        width: 94%;
        padding: 14px 16px;
    }
    .gm-hero-overlay-title {
        font-size: 20px;
        margin: 4px 0;
    }
    .gm-hero-overlay-excerpt {
        font-size: 12px;
        line-height: 1.4;
    }
    .gm-heading-xl {
        font-size: clamp(24px, 7vw, 34px);
    }
    .gm-featured-large-title {
        font-size: 24px;
    }
    .gm-card-title {
        font-size: 20px;
    }
    .gm-latest-section,
    .gm-most-clicked-section,
    .gm-shopping-section {
        margin-bottom: 40px;
    }
    .gm-nails-section {
        margin-bottom: 0 !important;
    }
    .gm-accent-line {
        width: 70px;
        margin-bottom: 24px;
    }
    .gm-newsletter-card,
    .gm-ad-sticky-wrap {
        width: 100%;
        max-width: 300px;
    }
    .gm-nail-edit-grid {
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: auto repeat(3, minmax(0, 180px));
        gap: 6px;
    }
    .gm-nail-edit-intro {
        grid-column: span 2;
        padding: 28px 18px;
        text-align: center;
        align-items: center;
    }
    .gm-nail-edit-title {
        font-size: 24px;
        margin-bottom: 10px;
    }
    .gm-nail-edit-desc {
        font-size: 13px;
        margin-bottom: 18px;
    }
    .gm-nail-edit-btn {
        width: 100%;
        text-align: center;
        box-sizing: border-box;
    }
}

@media (max-width: 440px) {
    .gm-latest-grid {
        gap: 16px 10px;
    }
    .gm-card-title {
        font-size: 18px;
    }
    .gm-latest-card .gm-card-title {
        font-size: 16px;
        line-height: 1.35;
    }
    .gm-trending-title {
        font-size: clamp(24px, 8vw, 36px);
        -webkit-text-stroke: 1px #111111;
    }
    .gm-heading-xl {
        font-size: 26px;
    }
    .gm-shopping-section .gm-heading-xl {
        font-size: clamp(32px, 9vw, 40px) !important;
    }
    .gm-horizontal-item {
        gap: 12px;
    }
    .gm-horizontal-thumb {
        width: 105px !important;
        height: 80px !important;
    }
    .gm-horizontal-title {
        font-size: 15px;
        line-height: 1.28;
    }
    .gm-hero-overlay-title {
        font-size: 18px;
    }
    .gm-hero-overlay-excerpt {
        font-size: 11px;
    }
    .gm-hero-image-wrap {
        height: 180px;
    }
}
</style>

<main class="gm-home-wrapper">

    <!-- =====================================================================
         1. HERO SECTION (Split Hero Banner + Overlay Badge + Video Story)
         ===================================================================== -->
    <?php
    if ( ! function_exists( 'gm_find_category' ) ) {
        function gm_find_category( $slugs, $names = array() ) {
            if ( is_string( $slugs ) ) {
                $slugs = array( $slugs );
            }
            if ( is_string( $names ) ) {
                $names = array( $names );
            }
            foreach ( $slugs as $slug ) {
                $cat = get_category_by_slug( $slug );
                if ( $cat && ! is_wp_error( $cat ) ) {
                    return $cat;
                }
            }
            foreach ( $names as $name ) {
                $cat = get_term_by( 'name', $name, 'category' );
                if ( $cat && ! is_wp_error( $cat ) ) {
                    return $cat;
                }
            }
            return false;
        }
    }

    // 1. Manual Post Selection (Does not query by category)
    $manual_post_id = absint( get_theme_mod( 'tcc_hero_manual_post_id', '' ) );
    if ( ! $manual_post_id ) {
        $manual_post_id = absint( get_theme_mod( 'tcc_hero_manual_post', 0 ) );
    }

    $hero_post = null;
    if ( $manual_post_id > 0 ) {
        $hero_post = get_post( $manual_post_id );
        if ( ! $hero_post || $hero_post->post_status !== 'publish' ) {
            $hero_post = null;
        }
    }

    // If no manual post specified, fallback to latest published post
    if ( ! $hero_post ) {
        $latest_posts = get_posts( array(
            'numberposts'         => 1,
            'post_status'         => 'publish',
            'ignore_sticky_posts' => 1,
        ) );
        if ( ! empty( $latest_posts ) ) {
            $hero_post = $latest_posts[0];
        }
    }

    // 2. Extract post details or defaults
    if ( $hero_post ) {
        $hero_title     = get_the_title( $hero_post );
        $hero_link      = get_permalink( $hero_post );
        $hero_excerpt   = has_excerpt( $hero_post ) ? get_the_excerpt( $hero_post ) : wp_trim_words( $hero_post->post_content, 22 );
        $cats           = get_the_category( $hero_post->ID );
        $hero_cat_name  = ! empty( $cats ) ? $cats[0]->name : 'Product & Brand News';
    } else {
        $hero_title     = 'Can You Launch a Beauty Product Without Controversy?';
        $hero_link      = home_url( '/category/trends-innovation/' );
        $hero_excerpt   = 'In the endless sea of launches, it feels like drama is the only way to break through the noise. But is it worth it?';
        $hero_cat_name  = 'Product & Brand News';
    }

    // Overrides from Customizer (if provided)
    $custom_title = get_theme_mod( 'tcc_hero_custom_title', '' );
    if ( ! empty( $custom_title ) ) {
        $hero_title = $custom_title;
    }
    $custom_cat = get_theme_mod( 'tcc_hero_custom_category', '' );
    if ( ! empty( $custom_cat ) ) {
        $hero_cat_name = $custom_cat;
    }
    $custom_excerpt = get_theme_mod( 'tcc_hero_custom_excerpt', '' );
    if ( ! empty( $custom_excerpt ) ) {
        $hero_excerpt = $custom_excerpt;
    }

    // 3. Custom Hero Image (DO NOT use standard featured image!)
    $hero_custom_img = get_theme_mod( 'tcc_hero_custom_image', '' );
    if ( empty( $hero_custom_img ) ) {
        $hero_custom_img = get_template_directory_uri() . '/assets/images/hero-corkboard.png';
    }

    // 4. Aspect Ratio Class
    $ratio_setting = get_theme_mod( 'tcc_hero_image_ratio', '16-9' );
    $ratio_class   = 'ratio-' . esc_attr( $ratio_setting );
    ?>
    <section class="gm-hero-section">
        <!-- Left: Main Featured Article (Manual Post + Customized Image) -->
        <a href="<?php echo esc_url( $hero_link ); ?>" class="gm-hero-main">
            <div class="gm-hero-image-wrap <?php echo esc_attr( $ratio_class ); ?>">
                <img src="<?php echo esc_url( $hero_custom_img ); ?>" alt="<?php echo esc_attr( $hero_title ); ?>" />
            </div>
            <div class="gm-hero-overlay-card">
                <span class="gm-category-tag"><?php echo esc_html( $hero_cat_name ); ?></span>
                <h1 class="gm-hero-overlay-title"><?php echo esc_html( $hero_title ); ?></h1>
                <p class="gm-hero-overlay-excerpt"><?php echo esc_html( $hero_excerpt ); ?></p>
            </div>
        </a>

                <!-- Right: Video Player / Portrait Story Card -->
        <?php
        $hero_video_url    = get_theme_mod( 'tcc_hero_video_url', '' );
        if ( empty( $hero_video_url ) ) {
            $video_file = get_template_directory() . '/assets/videos/hero-video.mp4';
            if ( file_exists( $video_file ) ) {
                $hero_video_url = get_template_directory_uri() . '/assets/videos/hero-video.mp4?v=' . filemtime( $video_file );
            }
        }
        $hero_video_poster = get_theme_mod( 'tcc_hero_video_poster', '' );
        if ( empty( $hero_video_poster ) ) {
            $poster_file = get_template_directory() . '/assets/images/dress-poster.jpg';
            $poster_ver  = file_exists( $poster_file ) ? filemtime( $poster_file ) : time();
            $hero_video_poster = get_template_directory_uri() . '/assets/images/dress-poster.jpg?v=' . $poster_ver;
        }
        $hero_video_brand  = get_theme_mod( 'tcc_hero_video_brand', 'GLOSSY' );
        $hero_video_link   = get_theme_mod( 'tcc_hero_video_link', home_url( '/category/trends-innovation/' ) );
        if ( empty( $hero_video_link ) ) {
            $hero_video_link = home_url( '/category/trends-innovation/' );
        }
        ?>
        <div class="gm-hero-side">
            <div class="gm-hero-portrait-card-wrap" id="gmHeroCardWrap">
                <!-- The Black Offset Accent on Right & Bottom -->
                <div class="gm-hero-card-accent"></div>

                <!-- Video Slot (Holds position in hero card when video floats) -->
                <div class="gm-hero-video-slot" id="gmHeroVideoSlot">
                    <!-- The Floating Video Player (ONLY this element floats on scroll!) -->
                    <div class="gm-hero-floating-player" id="gmHeroFloatingPlayer">
                        <?php if ( ! empty( $hero_video_url ) ) : ?>
                            <video id="gmHeroPortraitVideo" class="gm-hero-video-tag" playsinline autoplay muted loop preload="auto" poster="<?php echo esc_url( $hero_video_poster ); ?>">
                                <source src="<?php echo esc_url( $hero_video_url ); ?>" type="video/mp4">
                            </video>
                        <?php else : ?>
                            <img src="<?php echo esc_url( $hero_video_poster ); ?>" alt="Hero Video" class="gm-hero-video-tag" />
                        <?php endif; ?>

                        <!-- Sound Toggle Button -->
                        <button type="button" class="gm-hero-sound-toggle" id="gmHeroSoundToggle" aria-label="Toggle Video Sound" title="Toggle Sound">
                            <span class="gm-sound-icon-muted">
                                <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><path d="M16.5 12c0-1.77-1.02-3.29-2.5-4.03v2.21l2.45 2.45c.03-.2.05-.41.05-.63zm2.5 0c0 .94-.2 1.82-.54 2.64l1.51 1.51C20.63 14.91 21 13.5 21 12c0-4.28-2.99-7.86-7-8.77v2.06c2.89.86 5 3.54 5 6.71zM4.27 3L3 4.27 7.73 9H3v6h4l5 5v-6.73l4.25 4.25c-.67.52-1.42.93-2.25 1.18v2.06c1.38-.31 2.63-.95 3.69-1.81L19.73 21 21 19.73l-9-9L4.27 3zM12 4L9.91 6.09 12 8.18V4z"/></svg>
                            </span>
                            <span class="gm-sound-icon-unmuted" style="display:none;">
                                <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><path d="M3 9v6h4l5 5V4L7 9H3zm13.5 3c0-1.77-1.02-3.29-2.5-4.03v8.05c1.48-.73 2.5-2.25 2.5-4.02zM14 3.23v2.06c2.89.86 5 3.54 5 6.71s-2.11 5.85-5 6.71v2.06c4.01-.91 7-4.49 7-8.77s-2.99-7.86-7-8.77z"/></svg>
                            </span>
                        </button>

                        <!-- Dismiss / Close button for floating player -->
                        <button type="button" class="gm-hero-floating-close" id="gmHeroFloatingClose" aria-label="Close Floating Video" title="Close Video">
                            <svg viewBox="0 0 24 24" width="10" height="10" fill="currentColor"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg>
                        </button>
                    </div>
                </div>

                <!-- Bottom Solid Black Bar with GLOSSY (stays permanently in hero!) -->
                <a href="<?php echo esc_url( $hero_video_link ); ?>" class="gm-hero-card-brand-bar">
                    <span class="gm-hero-brand-text"><?php echo esc_html( $hero_video_brand ); ?></span>
                </a>
            </div>
        </div>
    </section>


    <!-- =====================================================================
         2. THE LATEST SECTION (3 Columns Grid + 300px Sticky Sidebar Ad)
         ===================================================================== -->
    <section class="gm-latest-section container">
        <?php
        $latest_cat = gm_find_category( array( 'the-latest', 'latest' ), array( 'The Latest', 'Latest' ) );
        $latest_cat_link = $latest_cat ? get_category_link( $latest_cat->term_id ) : home_url( '/category/the-latest/' );
        ?>
        <h2 class="gm-heading-xl"><a href="<?php echo esc_url( $latest_cat_link ); ?>">The Latest</a></h2>
        <div class="gm-accent-line"></div>

        <div class="gm-latest-layout">
            <!-- 3 Columns Post Grid (12 items) -->
            <div class="gm-latest-main">
                <div class="gm-latest-grid">
                    <?php
                    $latest_args = array(
                        'posts_per_page'      => 12,
                        'post_status'         => 'publish',
                        'post__not_in'        => array( $hero_post_id ),
                        'ignore_sticky_posts' => 1
                    );
                    if ( $latest_cat && $latest_cat->count > 0 ) {
                        $latest_args['cat'] = $latest_cat->term_id;
                    }
                    $latest_query = new WP_Query( $latest_args );

                    // Default sample articles matching Figma layout if fewer WP posts exist
                    $fallback_latest = array(
                        array(
                            'title'    => '24 Dark Chrome Nail Ideas for a Moody Fall Manicure',
                            'cat'      => 'Nails',
                            'time'     => '21 hours ago',
                            'date'     => 'Aug 26, 2026',
                            'excerpt'  => 'From Glazed Black to Metallic Blue.',
                            'author'   => 'By Rebecca Norris',
                            'img'      => 'https://images.unsplash.com/photo-1604654894610-df63bc536371?auto=format&fit=crop&q=80&w=600'
                        ),
                        array(
                            'title'    => 'There’s No Better Fall Manicure Than One of These Rich Berry Shades',
                            'cat'      => 'Nails',
                            'time'     => '21 hours ago',
                            'date'     => 'Aug 26, 2026',
                            'excerpt'  => 'Simply sumptuous.',
                            'author'   => 'By Rebecca Norris',
                            'img'      => 'https://images.unsplash.com/photo-1632345031435-8727f6897d53?auto=format&fit=crop&q=80&w=600'
                        ),
                        array(
                            'title'    => 'These 26 October Beauty and Style Launches Are a Dream',
                            'cat'      => 'Product & Brand News',
                            'time'     => '1 day ago',
                            'date'     => 'Aug 25, 2026',
                            'excerpt'  => 'From Rhode newness to lace-trimmed sweats and so much more.',
                            'author'   => 'By Sophie Vilensky',
                            'img'      => 'https://images.unsplash.com/photo-1596462502278-27bfdc403348?auto=format&fit=crop&q=80&w=600'
                        ),
                        array(
                            'title'    => '“Cherry Noir” Nails Are Taking Over for Fall 2026',
                            'cat'      => 'Nails',
                            'time'     => '1 day ago',
                            'date'     => 'Aug 25, 2026',
                            'excerpt'  => 'Just ask Anne Hathaway.',
                            'author'   => 'By Sophie Vilensky',
                            'img'      => 'https://images.unsplash.com/photo-1519014816548-bf5fe059798b?auto=format&fit=crop&q=80&w=600'
                        ),
                        array(
                            'title'    => 'Pamela Anderson’s New Lip Balm Was Inspired by Gardening',
                            'cat'      => 'Product & Brand News',
                            'time'     => '2 days ago',
                            'date'     => 'Aug 24, 2026',
                            'excerpt'  => 'The icon herself fills us in.',
                            'author'   => 'By Sophie Vilensky',
                            'img'      => 'https://images.unsplash.com/photo-1586495777744-4413f21062fa?auto=format&fit=crop&q=80&w=600'
                        ),
                        array(
                            'title'    => 'The Great Bringback Is Upon Us',
                            'cat'      => 'Trends & Innovation',
                            'time'     => '2 days ago',
                            'date'     => 'Aug 24, 2026',
                            'excerpt'  => 'In a world of constant newness, brands are finally listening to customer nostalgia.',
                            'author'   => 'By Kara Nesvig',
                            'img'      => 'https://images.unsplash.com/photo-1509631179647-0177331693ae?auto=format&fit=crop&q=80&w=600'
                        ),
                        array(
                            'title'    => 'Funky Little Hats Are Adding Whimsy to Our Fall Looks',
                            'cat'      => 'Fashion Trends',
                            'time'     => '2 days ago',
                            'date'     => 'Aug 23, 2026',
                            'excerpt'  => 'Trade your baseball cap for these playful picks.',
                            'author'   => 'By Jennifer Hussein',
                            'img'      => 'https://images.unsplash.com/photo-1521369909029-2afed882baee?auto=format&fit=crop&q=80&w=600'
                        ),
                        array(
                            'title'    => '20 ‘70s Hairstyles to Try This Fall, from Funky to Classic',
                            'cat'      => 'Hair',
                            'time'     => '3 days ago',
                            'date'     => 'Aug 22, 2026',
                            'excerpt'  => 'For the canyon girls.',
                            'author'   => 'By Elinor Block',
                            'img'      => 'https://images.unsplash.com/photo-1522337094133-f4cc4856a9db?auto=format&fit=crop&q=80&w=600'
                        ),
                        array(
                            'title'    => 'How “Devil Horn” Updos Brought High Fashion to the Red Carpet',
                            'cat'      => 'Trends & Innovation',
                            'time'     => '3 days ago',
                            'date'     => 'Aug 21, 2026',
                            'excerpt'  => 'Her makeup artist Heba Thorisdottir gives us all the details.',
                            'author'   => 'By Sophie Vilensky',
                            'img'      => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=600'
                        ),
                        array(
                            'title'    => '7 Fall 2026 Protective Styles That’ll Have You Booked and Busy',
                            'cat'      => 'Protective Hairstyles',
                            'time'     => '3 days ago',
                            'date'     => 'Aug 20, 2026',
                            'excerpt'  => 'Your fall hair mood board starts here.',
                            'author'   => 'By Annie Blay-Tettey',
                            'img'      => 'https://images.unsplash.com/photo-1584297091622-af8e5ad194db?auto=format&fit=crop&q=80&w=600'
                        ),
                        array(
                            'title'    => 'Soak up All the Fall Energy With These 19 Autumn Acrylic Nails',
                            'cat'      => 'Nails',
                            'time'     => '3 days ago',
                            'date'     => 'Aug 19, 2026',
                            'excerpt'  => 'Such a vibe.',
                            'author'   => 'By Madelyn Reed',
                            'img'      => 'https://images.unsplash.com/photo-1522337660859-02fbefca4702?auto=format&fit=crop&q=80&w=600'
                        ),
                        array(
                            'title'    => 'Amazon’s Best Beauty Deals Include Dyson Styling Tools',
                            'cat'      => 'Skin',
                            'time'     => '4 days ago',
                            'date'     => 'Aug 18, 2026',
                            'excerpt'  => 'Plus, rare discounts on Saie and Tarte.',
                            'author'   => 'By Alyssa Kaplan',
                            'img'      => 'https://images.unsplash.com/photo-1512290900672-1f4868cb53eb?auto=format&fit=crop&q=80&w=600'
                        ),
                    );

                    $count = 0;
                    if ( $latest_query->have_posts() ) {
                        while ( $latest_query->have_posts() ) {
                            $latest_query->the_post();
                            $cats = get_the_category();
                            $cat_name = ! empty( $cats ) ? $cats[0]->name : 'Beauty';
                            ?>
                            <a href="<?php the_permalink(); ?>" class="gm-latest-card">
                                <div class="gm-card-img-wrap">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <?php the_post_thumbnail( 'medium_large' ); ?>
                                    <?php else : ?>
                                        <img src="<?php echo esc_url( $fallback_latest[$count % count($fallback_latest)]['img'] ); ?>" alt="<?php the_title_attribute(); ?>" />
                                    <?php endif; ?>
                                </div>
                                <div class="gm-card-meta">
                                    <span class="gm-category-tag"><?php echo esc_html( $cat_name ); ?></span>
                                    <span class="gm-meta-dot"></span>
                                    <span class="gm-meta-time">
                                        <span class="gm-time-relative"><?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago' ); ?></span>
                                        <span class="gm-time-date"><?php echo esc_html( get_the_date( 'M j, Y' ) ); ?></span>
                                    </span>
                                </div>
                                <h3 class="gm-card-title"><?php the_title(); ?></h3>
                                <p class="gm-card-excerpt"><?php echo wp_trim_words( get_the_excerpt(), 12, '...' ); ?></p>
                                <span class="gm-card-author">By <?php the_author(); ?></span>
                            </a>
                            <?php
                            $count++;
                        }
                        wp_reset_postdata();
                    }

                    // Fill remaining slots with Figma design fallbacks
                    for ( $i = $count; $i < 12; $i++ ) {
                        $item = $fallback_latest[$i];
                        ?>
                        <a href="<?php echo esc_url( $latest_cat_link ); ?>" class="gm-latest-card">
                            <div class="gm-card-img-wrap">
                                <img src="<?php echo esc_url( $item['img'] ); ?>" alt="<?php echo esc_attr( $item['title'] ); ?>" />
                            </div>
                            <div class="gm-card-meta">
                                <span class="gm-category-tag"><?php echo esc_html( $item['cat'] ); ?></span>
                                <span class="gm-meta-dot"></span>
                                <span class="gm-meta-time">
                                    <span class="gm-time-relative"><?php echo esc_html( $item['time'] ); ?></span>
                                    <span class="gm-time-date"><?php echo esc_html( $item['date'] ); ?></span>
                                </span>
                            </div>
                            <h3 class="gm-card-title"><?php echo esc_html( $item['title'] ); ?></h3>
                            <p class="gm-card-excerpt"><?php echo esc_html( $item['excerpt'] ); ?></p>
                            <span class="gm-card-author"><?php echo esc_html( $item['author'] ); ?></span>
                        </a>
                        <?php
                    }
                    ?>
                </div>
            </div>

            <!-- Right Sidebar: Scrollable Newsletter + Sticky 300x600 Ad Below -->
            <aside class="gm-latest-sidebar">
                <!-- 1. Newsletter Card on Top (Scrollable with page) -->
                <div class="gm-newsletter-card">
                    <span class="gm-newsletter-tag">NEWSLETTER</span>
                    <h3 class="gm-newsletter-title">Beauty & Style in Your Inbox</h3>
                    <p class="gm-newsletter-desc">Get trend forecasts, editor favorites, and exclusive stories delivered weekly.</p>
                    <form class="gm-newsletter-form" action="#" method="post" onsubmit="event.preventDefault(); this.querySelector('.gm-newsletter-success').style.display='block'; this.querySelector('.gm-newsletter-fields').style.display='none';">
                        <div class="gm-newsletter-fields">
                            <input type="email" class="gm-newsletter-input" placeholder="Your email address" required aria-label="Email address" />
                            <button type="submit" class="gm-newsletter-btn">SUBSCRIBE</button>
                        </div>
                        <div class="gm-newsletter-success" style="display: none; padding: 10px; font-size: 12px; color: #166534; background: #dcfce7; border-radius: 2px; margin-top: 6px;">
                            Thank you for subscribing!
                        </div>
                        <p class="gm-newsletter-privacy">By signing up, you agree to our Terms & Privacy.</p>
                    </form>
                </div>

                <!-- 2. Sticky Advertisement Card Below (300x600 Half Page like before) -->
                <div class="gm-ad-sticky-wrap">
                    <div class="gm-ad-label">Advertisement</div>
                    <div class="gm-ad-box">
                        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
                            <?php dynamic_sidebar( 'sidebar-1' ); ?>
                        <?php else : ?>
                            <div style="font-family: var(--gm-font-sans); color: #888; font-size: 13px; letter-spacing: 1px;">
                                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#bbb" stroke-width="1.5" style="margin-bottom: 12px;"><rect x="2" y="2" width="20" height="20" rx="2"></rect><line x1="2" y1="12" x2="22" y2="12"></line><line x1="12" y1="2" x2="12" y2="22"></line></svg>
                                <p style="margin: 0; text-transform: uppercase;">300 &times; 600</p>
                                <p style="margin: 4px 0 0; font-size: 11px;">Half Page Ad Placement</p>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="gm-ad-label">Advertisement</div>
                </div>
            </aside>
        </div>
    </section>


    <!-- =====================================================================
         3. TRENDING NOW SECTION (Full-Width Sand Banner + 4-Col Grid)
         ===================================================================== -->
    <section class="gm-trending-wrapper">
        <div class="container">
            <?php
            $trending_cat = gm_find_category( array( 'trending-now', 'trending' ), array( 'Trending Now', 'Trending' ) );
            $trending_cat_link = $trending_cat ? get_category_link( $trending_cat->term_id ) : home_url( '/category/trending-now/' );
            ?>
            <div class="gm-trending-header-box">
                <h2 class="gm-trending-title"><a href="<?php echo esc_url( $trending_cat_link ); ?>">Trending Now</a></h2>
            </div>

            <div class="gm-trending-grid">
                <?php
                $trending_args = array(
                    'posts_per_page'      => 4,
                    'post_status'         => 'publish',
                    'ignore_sticky_posts' => 1,
                );
                if ( $trending_cat && $trending_cat->count > 0 ) {
                    $trending_args['cat'] = $trending_cat->term_id;
                } elseif ( $trending_cat ) {
                    $trending_args['category_name'] = $trending_cat->slug;
                } else {
                    $trending_args['category_name'] = 'trending-now';
                }
                $trending_query = new WP_Query( $trending_args );

                $trending_items = array(
                    array(
                        'cat'     => 'Product & Brand News',
                        'title'   => 'Can You Launch a Beauty Product Without Controversy?',
                        'excerpt' => 'In the endless sea of launches, it feels like drama...',
                        'author'  => 'By Lindy Segal',
                        'img'     => 'https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&q=80&w=600'
                    ),
                    array(
                        'cat'     => 'Nails',
                        'title'   => 'Give Your Fall Mani the Royal Treatment With These Regal Purple Hues',
                        'excerpt' => 'From lavender to dark purple.',
                        'author'  => 'By Rebecca Norris',
                        'img'     => 'https://images.unsplash.com/photo-1632345031435-8727f6897d53?auto=format&fit=crop&q=80&w=600'
                    ),
                    array(
                        'cat'     => 'Makeup',
                        'title'   => 'Don’t Worry, Fall’s “Anti-Blush” Trend Still Provides a Flush',
                        'excerpt' => 'Allow us to explain.',
                        'author'  => 'By Sophie Vilensky',
                        'img'     => 'https://images.unsplash.com/photo-1512496015851-a90fb38ba796?auto=format&fit=crop&q=80&w=600'
                    ),
                    array(
                        'cat'     => 'Trends & Innovation',
                        'title'   => 'Fenty Beauty’s New Foundation Is the Start of a Whole New Era',
                        'excerpt' => 'That Rihanna reign just won’t let up.',
                        'author'  => 'By Tatiana Pile',
                        'img'     => 'https://images.unsplash.com/photo-1515688594390-b649af70d282?auto=format&fit=crop&q=80&w=600'
                    ),
                );

                $t_count = 0;
                if ( $trending_query->have_posts() ) {
                    while ( $trending_query->have_posts() ) {
                        $trending_query->the_post();
                        $cats = get_the_category();
                        $cat_name = ! empty( $cats ) ? $cats[0]->name : ( $trending_cat ? $trending_cat->name : 'Trending' );
                        ?>
                        <a href="<?php the_permalink(); ?>" class="gm-latest-card">
                            <div class="gm-card-img-wrap">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail( 'medium_large' ); ?>
                                <?php else : ?>
                                    <img src="<?php echo esc_url( $trending_items[$t_count % count($trending_items)]['img'] ); ?>" alt="<?php the_title_attribute(); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="gm-card-meta">
                                <span class="gm-category-tag"><?php echo esc_html( $cat_name ); ?></span>
                            </div>
                            <h3 class="gm-card-title"><?php the_title(); ?></h3>
                            <p class="gm-card-excerpt"><?php echo wp_trim_words( get_the_excerpt(), 12, '...' ); ?></p>
                            <span class="gm-card-author">By <?php the_author(); ?></span>
                        </a>
                        <?php
                        $t_count++;
                    }
                    wp_reset_postdata();
                }

                for ( $i = $t_count; $i < 4; $i++ ) {
                    $item = $trending_items[$i];
                    ?>
                    <a href="<?php echo esc_url( $trending_cat_link ); ?>" class="gm-latest-card">
                        <div class="gm-card-img-wrap">
                            <img src="<?php echo esc_url( $item['img'] ); ?>" alt="<?php echo esc_attr( $item['title'] ); ?>" />
                        </div>
                        <div class="gm-card-meta">
                            <span class="gm-category-tag"><?php echo esc_html( $item['cat'] ); ?></span>
                        </div>
                        <h3 class="gm-card-title"><?php echo esc_html( $item['title'] ); ?></h3>
                        <p class="gm-card-excerpt"><?php echo esc_html( $item['excerpt'] ); ?></p>
                        <span class="gm-card-author"><?php echo esc_html( $item['author'] ); ?></span>
                    </a>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>


    <!-- =====================================================================
         4. MOST CLICKED SECTION (4 Columns Grid)
         ===================================================================== -->
    <section class="gm-most-clicked-section container">
        <?php
        $clicked_cat = gm_find_category( array( 'most-clicked', 'mostclicked', 'popular' ), array( 'Most Clicked', 'Most Popular' ) );
        $clicked_cat_link = $clicked_cat ? get_category_link( $clicked_cat->term_id ) : home_url( '/category/most-clicked/' );
        ?>
        <h2 class="gm-heading-xl"><a href="<?php echo esc_url( $clicked_cat_link ); ?>">Most Clicked</a></h2>
        <div class="gm-accent-line"></div>

        <div class="gm-four-col-grid">
            <?php
            $clicked_args = array(
                'posts_per_page'      => 4,
                'post_status'         => 'publish',
                'ignore_sticky_posts' => 1,
            );
            if ( $clicked_cat && $clicked_cat->count > 0 ) {
                $clicked_args['cat'] = $clicked_cat->term_id;
            } elseif ( $clicked_cat ) {
                $clicked_args['category_name'] = $clicked_cat->slug;
            } else {
                $clicked_args['category_name'] = 'most-clicked';
            }
            $clicked_query = new WP_Query( $clicked_args );

            $clicked_items = array(
                array(
                    'cat'     => 'Product Reviews',
                    'title'   => 'Editors’ Picks: The Beauty and Fashion Standouts Having a Moment',
                    'excerpt' => 'Fashion refreshes, hair repair, and so much more.',
                    'author'  => 'By Ali Webb',
                    'img'     => 'https://images.unsplash.com/photo-1490481651871-ab68de25d43d?auto=format&fit=crop&q=80&w=600'
                ),
                array(
                    'cat'     => 'Product & Brand News',
                    'title'   => 'Alexa Chung and Reformation’s New Collection Was Made for Cool Girls',
                    'excerpt' => 'We want it all.',
                    'author'  => 'By Sophie Vilensky',
                    'img'     => 'https://images.unsplash.com/photo-1469334031218-e382a71b716b?auto=format&fit=crop&q=80&w=600'
                ),
                array(
                    'cat'     => 'Trends & Innovation',
                    'title'   => 'Packaging Is the Next Frontier of Product Innovation in Beauty',
                    'excerpt' => 'From sliceable eye masks to built-in tools.',
                    'author'  => 'By Sophie Vilensky',
                    'img'     => 'https://images.unsplash.com/photo-1527799820374-dcf8d9d4a388?auto=format&fit=crop&q=80&w=600'
                ),
                array(
                    'cat'     => 'Celebrities',
                    'title'   => 'Behind Charli XCX’s “Refined” Party Girl Hair for the Brat Tour',
                    'excerpt' => 'Hairstylist Matt Benns gives us all the details.',
                    'author'  => 'By Bella Cacciatore',
                    'img'     => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=600'
                ),
            );

            $c_count = 0;
            if ( $clicked_query->have_posts() ) {
                while ( $clicked_query->have_posts() ) {
                    $clicked_query->the_post();
                    $cats = get_the_category();
                    $cat_name = ! empty( $cats ) ? $cats[0]->name : ( $clicked_cat ? $clicked_cat->name : 'Most Clicked' );
                    ?>
                    <a href="<?php the_permalink(); ?>" class="gm-latest-card">
                        <div class="gm-card-img-wrap">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail( 'medium_large' ); ?>
                            <?php else : ?>
                                <img src="<?php echo esc_url( $clicked_items[$c_count % count($clicked_items)]['img'] ); ?>" alt="<?php the_title_attribute(); ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="gm-card-meta">
                            <span class="gm-category-tag"><?php echo esc_html( $cat_name ); ?></span>
                        </div>
                        <h3 class="gm-card-title"><?php the_title(); ?></h3>
                        <p class="gm-card-excerpt"><?php echo wp_trim_words( get_the_excerpt(), 12, '...' ); ?></p>
                        <span class="gm-card-author">By <?php the_author(); ?></span>
                    </a>
                    <?php
                    $c_count++;
                }
                wp_reset_postdata();
            }

            for ( $i = $c_count; $i < 4; $i++ ) {
                $item = $clicked_items[$i];
                ?>
                <a href="<?php echo esc_url( $clicked_cat_link ); ?>" class="gm-latest-card">
                    <div class="gm-card-img-wrap">
                        <img src="<?php echo esc_url( $item['img'] ); ?>" alt="<?php echo esc_attr( $item['title'] ); ?>" />
                    </div>
                    <div class="gm-card-meta">
                        <span class="gm-category-tag"><?php echo esc_html( $item['cat'] ); ?></span>
                    </div>
                    <h3 class="gm-card-title"><?php echo esc_html( $item['title'] ); ?></h3>
                    <p class="gm-card-excerpt"><?php echo esc_html( $item['excerpt'] ); ?></p>
                    <span class="gm-card-author"><?php echo esc_html( $item['author'] ); ?></span>
                </a>
                <?php
            }
            ?>
        </div>
    </section>


    <!-- =====================================================================
         5. SHOPPING SECTION (Featured Large + 4 Horizontal Items + Seal Box)
         ===================================================================== -->
    <section class="gm-shopping-section container">
        <?php
        $shopping_cat = gm_find_category( array( 'shopping', 'shop' ), array( 'Shopping', 'Shop' ) );
        $shopping_cat_link = $shopping_cat ? get_category_link( $shopping_cat->term_id ) : home_url( '/category/shopping/' );

        $shopping_args = array(
            'posts_per_page'      => 5,
            'post_status'         => 'publish',
            'ignore_sticky_posts' => 1,
        );
        if ( $shopping_cat && $shopping_cat->count > 0 ) {
            $shopping_args['cat'] = $shopping_cat->term_id;
        } elseif ( $shopping_cat ) {
            $shopping_args['category_name'] = $shopping_cat->slug;
        } else {
            $shopping_args['category_name'] = 'shopping';
        }
        $shopping_query = new WP_Query( $shopping_args );
        $shopping_posts = $shopping_query->posts;
        ?>
        <div class="gm-section-header-flex">
            <div>
                <h2 class="gm-heading-xl" style="margin-bottom: 6px;"><a href="<?php echo esc_url( $shopping_cat_link ); ?>">Shopping</a></h2>
                <div class="gm-accent-line" style="margin-bottom: 0;"></div>
            </div>
            <a href="<?php echo esc_url( $shopping_cat_link ); ?>" class="gm-see-all-link">
                See all Shopping &rarr;
            </a>
        </div>

        <div class="gm-shopping-grid" style="margin-top: 36px;">
            <!-- Column 1: Featured 1:1 Large Square Card -->
            <?php 
            if ( ! empty( $shopping_posts ) && isset( $shopping_posts[0] ) ) : 
                $feat_post = $shopping_posts[0];
                $feat_cats = get_the_category( $feat_post->ID );
                $feat_cat_name = ! empty( $feat_cats ) ? $feat_cats[0]->name : ( $shopping_cat ? $shopping_cat->name : 'Shopping' );
                $feat_author = get_the_author_meta( 'display_name', $feat_post->post_author );
                $feat_thumb = get_the_post_thumbnail_url( $feat_post->ID, 'large' );
                if ( ! $feat_thumb ) {
                    $feat_thumb = 'https://images.unsplash.com/photo-1483985988355-763728e1935b?auto=format&fit=crop&q=80&w=700';
                }
            ?>
                <a href="<?php echo esc_url( get_permalink( $feat_post->ID ) ); ?>" class="gm-featured-square-card">
                    <div class="gm-square-img-wrap">
                        <img src="<?php echo esc_url( $feat_thumb ); ?>" alt="<?php echo esc_attr( get_the_title( $feat_post->ID ) ); ?>" />
                    </div>
                    <span class="gm-category-tag"><?php echo esc_html( $feat_cat_name ); ?></span>
                    <h3 class="gm-featured-large-title"><?php echo esc_html( get_the_title( $feat_post->ID ) ); ?></h3>
                    <p class="gm-card-excerpt"><?php echo wp_trim_words( get_the_excerpt( $feat_post->ID ), 12, '...' ); ?></p>
                    <span class="gm-card-author">By <?php echo esc_html( $feat_author ); ?></span>
                </a>
            <?php else : ?>
                <a href="<?php echo esc_url( $shopping_cat_link ); ?>" class="gm-featured-square-card">
                    <div class="gm-square-img-wrap">
                        <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?auto=format&fit=crop&q=80&w=700" alt="Byrdie Fall Catalog" />
                    </div>
                    <span class="gm-category-tag">Trends & Innovation</span>
                    <h3 class="gm-featured-large-title">Byrdie’s Fall Catalog Is Here</h3>
                    <p class="gm-card-excerpt">Real trends culled by real editors.</p>
                    <span class="gm-card-author">By Byrdie Editors</span>
                </a>
            <?php endif; ?>

            <!-- Column 2: Stack of 4 Horizontal Cards -->
            <div class="gm-horizontal-list">
                <?php
                $shopping_items = array(
                    array(
                        'cat'    => 'Clothing & Apparel',
                        'title'  => 'I’m Overhauling My Fall Wardrobe With 9 Amazon Fashion Finds',
                        'author' => 'By Alyssa Kaplan',
                        'img'    => 'https://images.unsplash.com/photo-1490481651871-ab68de25d43d?auto=format&fit=crop&q=80&w=400'
                    ),
                    array(
                        'cat'    => 'Sales & Deals',
                        'title'  => 'October Prime Day Ends Tonight—Shop 68 Last-Chance Deals',
                        'author' => 'By Madison Barber',
                        'img'    => 'https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&fit=crop&q=80&w=400'
                    ),
                    array(
                        'cat'    => 'Shoes',
                        'title'  => 'Ballet Flats Are *the* It-Girl Fall Shoe—Shop Kendall Jenner’s Picks',
                        'author' => 'By Shannon Stubbs',
                        'img'    => 'https://images.unsplash.com/photo-1543163521-1bf539c55dd2?auto=format&fit=crop&q=80&w=400'
                    ),
                    array(
                        'cat'    => 'Makeup Tools & Techniques',
                        'title'  => 'The 7 Best Blush Brushes Byrdie Editors Love for a Seamless Glow',
                        'author' => 'By Amanda Rosenthal',
                        'img'    => 'https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&q=80&w=400'
                    ),
                );

                $h_count = 0;
                if ( ! empty( $shopping_posts ) && count( $shopping_posts ) > 1 ) {
                    for ( $p = 1; $p < count( $shopping_posts ) && $h_count < 4; $p++ ) {
                        $h_post = $shopping_posts[$p];
                        $h_cats = get_the_category( $h_post->ID );
                        $h_cat_name = ! empty( $h_cats ) ? $h_cats[0]->name : ( $shopping_cat ? $shopping_cat->name : 'Shopping' );
                        $h_author = get_the_author_meta( 'display_name', $h_post->post_author );
                        $h_thumb = get_the_post_thumbnail_url( $h_post->ID, 'medium' );
                        if ( ! $h_thumb ) {
                            $h_thumb = $shopping_items[$h_count % count($shopping_items)]['img'];
                        }
                        ?>
                        <a href="<?php echo esc_url( get_permalink( $h_post->ID ) ); ?>" class="gm-horizontal-item">
                            <div class="gm-horizontal-thumb">
                                <img src="<?php echo esc_url( $h_thumb ); ?>" alt="<?php echo esc_attr( get_the_title( $h_post->ID ) ); ?>" />
                            </div>
                            <div class="gm-horizontal-content">
                                <span class="gm-category-tag" style="font-size: 11px;"><?php echo esc_html( $h_cat_name ); ?></span>
                                <h4 class="gm-horizontal-title"><?php echo esc_html( get_the_title( $h_post->ID ) ); ?></h4>
                                <span class="gm-card-author" style="margin-top: 4px;">By <?php echo esc_html( $h_author ); ?></span>
                            </div>
                        </a>
                        <?php
                        $h_count++;
                    }
                }

                for ( $i = $h_count; $i < 4; $i++ ) {
                    $item = $shopping_items[$i];
                    ?>
                    <a href="<?php echo esc_url( $shopping_cat_link ); ?>" class="gm-horizontal-item">
                        <div class="gm-horizontal-thumb">
                            <img src="<?php echo esc_url( $item['img'] ); ?>" alt="<?php echo esc_attr( $item['title'] ); ?>" />
                        </div>
                        <div class="gm-horizontal-content">
                            <span class="gm-category-tag" style="font-size: 11px;"><?php echo esc_html( $item['cat'] ); ?></span>
                            <h4 class="gm-horizontal-title"><?php echo esc_html( $item['title'] ); ?></h4>
                            <span class="gm-card-author" style="margin-top: 4px;"><?php echo esc_html( $item['author'] ); ?></span>
                        </div>
                    </a>
                    <?php
                }
                ?>
            </div>

            <!-- Column 3: Seal of Approval Promo Box -->
            <div class="gm-seal-box">
                <div class="gm-seal-icon-wrap">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#111" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" style="margin-bottom: 4px;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
                    <span>VERIFIED</span>
                </div>
                <h3 class="gm-seal-title">Our Product Testing Seal of Approval</h3>
                <p class="gm-seal-desc">The Byrdie Verified seal stands for product recommendations you can trust—all day, every day.</p>
                <a href="<?php echo esc_url( $shopping_cat_link ); ?>" class="gm-seal-see-all">SEE ALL SHOPPING &rarr;</a>
                <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>" class="gm-btn-black">Learn More</a>
            </div>
        </div>
    </section>


    <!-- =====================================================================
         6. NAILS SECTION - THE MONTH'S NAIL EDIT (Figma Editorial Grid)
         ===================================================================== -->
    <section class="gm-nails-section gm-nails-section-fullwidth">
        <div class="gm-nail-edit-grid">
            <!-- 1. Left Feature Text Box (Spans 2 rows on desktop) -->
            <?php
            $nails_cat = gm_find_category( 
                array( 'nails', 'nail', 'nail-art', 'nail-edit', 'the-months-nail-edit', 'nail-inspo' ), 
                array( 'Nails', 'Nail', 'Nail Art', 'Nail Edit', "The Month's Nail Edit", "The Month’s Nail Edit", 'Nail Inspo' ) 
            );
            $nails_cat_link = $nails_cat ? get_category_link( $nails_cat->term_id ) : home_url( '/category/nails/' );
            ?>
            <div class="gm-nail-edit-intro">
                <h2 class="gm-nail-edit-title">The Month’s <em>Nail Edit</em></h2>
                <p class="gm-nail-edit-desc">A curated selection of the perfect nail looks – timeless shades, soft details, and styles that always feel elevated.</p>
                <a href="<?php echo esc_url( $nails_cat_link ); ?>" class="gm-nail-edit-btn">BROWSE NAIL INSPO</a>
            </div>

            <?php
            // Curated 6 nail looks matching the exact design in the reference screenshot
            $curated_nails = array(
                array(
                    'title' => 'Glazed Burgundy Cat Eye Nails',
                    'img'   => get_template_directory_uri() . '/assets/images/nail-edit-1.png',
                    'link'  => $nails_cat_link
                ),
                array(
                    'title' => 'Shimmering Burgundy Almond Nails',
                    'img'   => get_template_directory_uri() . '/assets/images/nail-edit-2.png',
                    'link'  => $nails_cat_link
                ),
                array(
                    'title' => 'Chrome Mauve Rose-Gold Nails',
                    'img'   => get_template_directory_uri() . '/assets/images/nail-edit-3.png',
                    'link'  => $nails_cat_link
                ),
                array(
                    'title' => 'Brown Polka Dot French Tips',
                    'img'   => get_template_directory_uri() . '/assets/images/nail-edit-4.png',
                    'link'  => $nails_cat_link
                ),
                array(
                    'title' => 'Black and Gold Chevron French Tips',
                    'img'   => get_template_directory_uri() . '/assets/images/nail-edit-5.png',
                    'link'  => $nails_cat_link
                ),
                array(
                    'title' => 'Glossy Olive Green Autumn Nails',
                    'img'   => get_template_directory_uri() . '/assets/images/nail-edit-6.png',
                    'link'  => $nails_cat_link
                ),
            );

            // Query posts for Nail Edit - prioritize posts in nails category, or posts with featured images
            $nail_args = array(
                'posts_per_page'      => 6,
                'post_status'         => 'publish',
                'ignore_sticky_posts' => 1,
            );
            if ( $nails_cat && $nails_cat->count > 0 ) {
                $nail_args['cat'] = $nails_cat->term_id;
            } else {
                $nail_args['meta_query'] = array(
                    array(
                        'key'     => '_thumbnail_id',
                        'compare' => 'EXISTS',
                    ),
                );
            }
            $nails_wp_query = new WP_Query( $nail_args );

            if ( ! $nails_wp_query->have_posts() ) {
                $nails_wp_query = new WP_Query( array(
                    'posts_per_page'      => 6,
                    'post_status'         => 'publish',
                    'ignore_sticky_posts' => 1,
                ) );
            }

            $rendered_count = 0;
            if ( $nails_wp_query->have_posts() ) {
                while ( $nails_wp_query->have_posts() ) {
                    $nails_wp_query->the_post();
                    ?>
                    <a href="<?php the_permalink(); ?>" class="gm-nail-card" aria-label="<?php the_title_attribute(); ?>">
                        <div class="gm-nail-img-wrap">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail( 'large', array( 'loading' => 'lazy', 'alt' => the_title_attribute( array( 'echo' => false ) ) ) ); ?>
                            <?php else : ?>
                                <img src="<?php echo esc_url( $curated_nails[ $rendered_count % count( $curated_nails ) ]['img'] ); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy" />
                            <?php endif; ?>
                        </div>
                    </a>
                    <?php
                    $rendered_count++;
                }
                wp_reset_postdata();
            }

            // Fill remaining slots with the curated editorial images from the screenshot
            for ( $n = $rendered_count; $n < 6; $n++ ) {
                $nail_item = $curated_nails[ $n ];
                ?>
                <a href="<?php echo esc_url( $nail_item['link'] ); ?>" class="gm-nail-card" aria-label="<?php echo esc_attr( $nail_item['title'] ); ?>">
                    <div class="gm-nail-img-wrap">
                        <img src="<?php echo esc_url( $nail_item['img'] ); ?>" alt="<?php echo esc_attr( $nail_item['title'] ); ?>" loading="lazy" />
                    </div>
                </a>
                <?php
            }
            ?>
        </div>
    </section>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var floatingPlayer = document.getElementById('gmHeroFloatingPlayer');
    var videoSlot = document.getElementById('gmHeroVideoSlot');
    var closeBtn = document.getElementById('gmHeroFloatingClose');
    var video = document.getElementById('gmHeroPortraitVideo');
    var soundBtn = document.getElementById('gmHeroSoundToggle');

    if (video && soundBtn) {
        var mutedIcon = soundBtn.querySelector('.gm-sound-icon-muted');
        var unmutedIcon = soundBtn.querySelector('.gm-sound-icon-unmuted');

        soundBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            e.preventDefault();
            video.muted = !video.muted;
            if (video.muted) {
                if (mutedIcon) mutedIcon.style.display = 'block';
                if (unmutedIcon) unmutedIcon.style.display = 'none';
            } else {
                if (mutedIcon) mutedIcon.style.display = 'none';
                if (unmutedIcon) unmutedIcon.style.display = 'block';
            }
        });

        // Click on video to toggle play/pause
        video.addEventListener('click', function(e) {
            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
        });
    }

    // Scroll detection: Float ONLY the video player
    var cardWrap = document.getElementById('gmHeroCardWrap');
    if (floatingPlayer && videoSlot) {
        var isDismissed = false;

        function updateFloatingState() {
            var rect = videoSlot.getBoundingClientRect();
            // When the video slot top has scrolled out of view
            var shouldFloat = rect.bottom < 20;

            // Reset dismissal when user scrolls back near the hero section
            if (rect.bottom >= 100) {
                isDismissed = false;
            }

            if (shouldFloat && !isDismissed) {
                if (!floatingPlayer.classList.contains('is-floating')) {
                    floatingPlayer.classList.add('is-floating');
                    document.body.classList.add('has-floating-hero-video');
                    if (cardWrap) cardWrap.classList.add('has-floating-player');
                }
            } else {
                if (floatingPlayer.classList.contains('is-floating')) {
                    floatingPlayer.classList.remove('is-floating');
                    document.body.classList.remove('has-floating-hero-video');
                    if (cardWrap) cardWrap.classList.remove('has-floating-player');
                }
            }
        }

        window.addEventListener('scroll', updateFloatingState, { passive: true });
        window.addEventListener('resize', updateFloatingState, { passive: true });
        updateFloatingState();

        if (closeBtn) {
            closeBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                e.preventDefault();
                isDismissed = true;
                floatingPlayer.classList.remove('is-floating');
                document.body.classList.remove('has-floating-hero-video');
                if (cardWrap) cardWrap.classList.remove('has-floating-player');
            });
        }
    }
});
</script>

<?php 
get_footer();
