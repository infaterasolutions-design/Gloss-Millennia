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
    padding: 24px 0 80px;
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
    font-size: 20px;
    line-height: 1.35;
    letter-spacing: 0.4px;
    font-weight: 500;
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
    height: 440px;
    background: #EFEFEF;
    overflow: hidden;
    position: relative;
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

/* Right Feature Card */
.gm-hero-side {
    width: 320px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 24px 36px;
    box-sizing: border-box;
    background: #FAF9F6;
}

.gm-hero-portrait-link {
    display: block;
    text-decoration: none;
    max-width: 250px;
    width: 100%;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    box-shadow: 0 4px 15px rgba(0,0,0,0.08);
}

.gm-hero-portrait-link:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.12);
}

.gm-hero-portrait-img {
    width: 100%;
    height: auto;
    display: block;
}

.gm-hero-video-badge svg {
    width: 14px;
    height: 14px;
    fill: #ffffff;
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
    font-size: 28px;
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
    font-size: 17px;
    line-height: 1.35;
    font-weight: 500;
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
    margin: 0 0 28px;
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
   6. NAILS SECTION - THE MONTH'S NAIL EDIT (Figma Editorial Grid)
   ========================================================================== */
.gm-nails-section {
    margin-bottom: 80px;
}

.gm-nail-edit-grid {
    display: grid;
    grid-template-columns: 1.35fr 1fr 1fr 1fr;
    grid-template-rows: repeat(2, 275px);
    width: 100%;
    gap: 4px;
    background: #ffffff;
}

.gm-nail-edit-intro {
    grid-row: span 2;
    background: #ECE7E6;
    padding: 44px 38px;
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
    .gm-hero-image-wrap {
        height: 320px;
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
        padding: 20px;
    }
    .gm-heading-xl {
        font-size: clamp(30px, 5vw, 48px);
        margin-bottom: 8px;
    }
    .gm-latest-section,
    .gm-most-clicked-section,
    .gm-shopping-section,
    .gm-nails-section {
        margin-bottom: 50px;
    }
    .gm-latest-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 24px 18px;
    }
    .gm-card-title {
        font-size: 17px;
    }
    .gm-card-excerpt {
        font-size: 14px;
    }
    .gm-featured-large-title {
        font-size: 22px;
    }
    .gm-horizontal-title {
        font-size: 15px;
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
    .gm-latest-card .gm-card-title {
        order: 3;
        font-family: var(--gm-font-sans);
        font-size: 14px;
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
        font-size: clamp(26px, 6vw, 38px);
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
        font-size: 18px;
    }
    .gm-hero-overlay-excerpt {
        font-size: 13px;
    }
    .gm-horizontal-thumb {
        width: 120px;
        height: 95px;
    }
    .gm-horizontal-title {
        font-size: 14px;
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
        flex-direction: column;
    }
    .gm-horizontal-thumb {
        width: 100%;
        height: 200px;
    }
    .gm-hero-image-wrap {
        height: 220px;
    }
    .gm-hero-overlay-card {
        width: 94%;
        padding: 14px 16px;
    }
    .gm-hero-overlay-title {
        font-size: 16px;
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
        font-size: 20px;
    }
    .gm-card-title {
        font-size: 15px;
    }
    .gm-latest-section,
    .gm-most-clicked-section,
    .gm-shopping-section,
    .gm-nails-section {
        margin-bottom: 40px;
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
    .gm-latest-card .gm-card-title {
        font-size: 13px;
        line-height: 1.3;
    }
    .gm-trending-title {
        font-size: clamp(24px, 8vw, 36px);
        -webkit-text-stroke: 1px #111111;
    }
    .gm-heading-xl {
        font-size: 22px;
    }
    .gm-hero-overlay-title {
        font-size: 14px;
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
    // Fetch latest post for hero if available
    $hero_query = new WP_Query( array(
        'posts_per_page' => 1,
        'post_status'    => 'publish',
        'ignore_sticky_posts' => 1
    ) );

    $hero_has_post = $hero_query->have_posts();
    $hero_post_id  = 0;
    if ( $hero_has_post ) {
        $hero_query->the_post();
        $hero_post_id = get_the_ID();
    }
    ?>
    <section class="gm-hero-section">
        <!-- Left: Main Featured Article -->
        <a href="<?php echo $hero_has_post ? esc_url( get_permalink() ) : '#'; ?>" class="gm-hero-main">
            <div class="gm-hero-image-wrap">
                <?php if ( $hero_has_post && has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail( 'full' ); ?>
                <?php else : ?>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-corkboard.png' ); ?>" alt="Beauty Product Feature" />
                <?php endif; ?>
            </div>
            <div class="gm-hero-overlay-card">
                <span class="gm-category-tag">
                    <?php 
                    if ( $hero_has_post ) {
                        $cats = get_the_category();
                        echo ! empty( $cats ) ? esc_html( $cats[0]->name ) : 'Product & Brand News';
                    } else {
                        echo 'Product & Brand News';
                    }
                    ?>
                </span>
                <h1 class="gm-hero-overlay-title">
                    <?php echo $hero_has_post ? esc_html( get_the_title() ) : 'Can You Launch a Beauty Product Without Controversy?'; ?>
                </h1>
                <p class="gm-hero-overlay-excerpt">
                    <?php 
                    if ( $hero_has_post && has_excerpt() ) {
                        echo esc_html( get_the_excerpt() );
                    } else {
                        echo 'In the endless sea of launches, it feels like drama is the only way to break through the noise. But is it worth it?';
                    }
                    ?>
                </p>
            </div>
        </a>
        <?php wp_reset_postdata(); ?>

        <!-- Right: Video Player / Portrait Story -->
        <div class="gm-hero-side">
            <a href="<?php echo esc_url( home_url( '/category/trends-innovation/' ) ); ?>" class="gm-hero-portrait-link">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-portrait-card.png' ); ?>" alt="The Era of Influence - Alix Earle" class="gm-hero-portrait-img" />
            </a>
        </div>
    </section>


    <!-- =====================================================================
         2. THE LATEST SECTION (3 Columns Grid + 300px Sticky Sidebar Ad)
         ===================================================================== -->
    <section class="gm-latest-section container">
        <h2 class="gm-heading-xl">The Latest</h2>
        <div class="gm-accent-line"></div>

        <div class="gm-latest-layout">
            <!-- 3 Columns Post Grid (12 items) -->
            <div class="gm-latest-main">
                <div class="gm-latest-grid">
                    <?php
                    $latest_query = new WP_Query( array(
                        'posts_per_page'      => 12,
                        'post_status'         => 'publish',
                        'post__not_in'        => array( $hero_post_id ),
                        'ignore_sticky_posts' => 1
                    ) );

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
                        <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="gm-latest-card">
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
            <div class="gm-trending-header-box">
                <h2 class="gm-trending-title">Trending Now</h2>
            </div>

            <div class="gm-trending-grid">
                <?php
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

                foreach ( $trending_items as $item ) : ?>
                    <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="gm-latest-card">
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
                <?php endforeach; ?>
            </div>
        </div>
    </section>


    <!-- =====================================================================
         4. MOST CLICKED SECTION (4 Columns Grid)
         ===================================================================== -->
    <section class="gm-most-clicked-section container">
        <h2 class="gm-heading-xl">Most Clicked</h2>
        <div class="gm-accent-line"></div>

        <div class="gm-four-col-grid">
            <?php
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

            foreach ( $clicked_items as $item ) : ?>
                <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="gm-latest-card">
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
            <?php endforeach; ?>
        </div>
    </section>


    <!-- =====================================================================
         5. SHOPPING SECTION (Featured Large + 4 Horizontal Items + Seal Box)
         ===================================================================== -->
    <section class="gm-shopping-section container">
        <div class="gm-section-header-flex">
            <div>
                <h2 class="gm-heading-xl" style="margin-bottom: 6px;">Shopping</h2>
                <div class="gm-accent-line" style="margin-bottom: 0;"></div>
            </div>
            <a href="<?php echo esc_url( home_url( '/category/shopping/' ) ); ?>" class="gm-see-all-link">
                See all Shopping &rarr;
            </a>
        </div>

        <div class="gm-shopping-grid" style="margin-top: 36px;">
            <!-- Column 1: Featured 1:1 Large Square Card -->
            <a href="<?php echo esc_url( home_url( '/category/shopping/' ) ); ?>" class="gm-featured-square-card">
                <div class="gm-square-img-wrap">
                    <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?auto=format&fit=crop&q=80&w=700" alt="Byrdie Fall Catalog" />
                </div>
                <span class="gm-category-tag">Trends & Innovation</span>
                <h3 class="gm-featured-large-title">Byrdie’s Fall Catalog Is Here</h3>
                <p class="gm-card-excerpt">Real trends culled by real editors.</p>
                <span class="gm-card-author">By Byrdie Editors</span>
            </a>

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

                foreach ( $shopping_items as $item ) : ?>
                    <a href="<?php echo esc_url( home_url( '/category/shopping/' ) ); ?>" class="gm-horizontal-item">
                        <div class="gm-horizontal-thumb">
                            <img src="<?php echo esc_url( $item['img'] ); ?>" alt="<?php echo esc_attr( $item['title'] ); ?>" />
                        </div>
                        <div class="gm-horizontal-content">
                            <span class="gm-category-tag" style="font-size: 11px;"><?php echo esc_html( $item['cat'] ); ?></span>
                            <h4 class="gm-horizontal-title"><?php echo esc_html( $item['title'] ); ?></h4>
                            <span class="gm-card-author" style="margin-top: 4px;"><?php echo esc_html( $item['author'] ); ?></span>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>

            <!-- Column 3: Seal of Approval Promo Box -->
            <div class="gm-seal-box">
                <div class="gm-seal-icon-wrap">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#111" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" style="margin-bottom: 4px;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
                    <span>VERIFIED</span>
                </div>
                <h3 class="gm-seal-title">Our Product Testing Seal of Approval</h3>
                <p class="gm-seal-desc">The Byrdie Verified seal stands for product recommendations you can trust.</p>
                <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>" class="gm-btn-black">Learn More</a>
            </div>
        </div>
    </section>


    <!-- =====================================================================
         6. NAILS SECTION - THE MONTH'S NAIL EDIT (Figma Editorial Grid)
         ===================================================================== -->
    <section class="gm-nails-section container">
        <div class="gm-nail-edit-grid">
            <!-- 1. Left Feature Text Box (Spans 2 rows on desktop) -->
            <div class="gm-nail-edit-intro">
                <h2 class="gm-nail-edit-title">The Month’s <em>Nail Edit</em></h2>
                <p class="gm-nail-edit-desc">A curated selection of the perfect nail looks – timeless shades, soft details, and styles that always feel elevated.</p>
                <a href="<?php echo esc_url( home_url( '/category/nails/' ) ); ?>" class="gm-nail-edit-btn">BROWSE NAIL INSPO</a>
            </div>

            <?php
            // Curated 6 nail looks matching the exact design in the reference screenshot
            $curated_nails = array(
                array(
                    'title' => 'Glazed Burgundy Cat Eye Nails',
                    'img'   => get_template_directory_uri() . '/assets/images/nail-edit-1.png',
                    'link'  => home_url( '/category/nails/' )
                ),
                array(
                    'title' => 'Shimmering Burgundy Almond Nails',
                    'img'   => get_template_directory_uri() . '/assets/images/nail-edit-2.png',
                    'link'  => home_url( '/category/nails/' )
                ),
                array(
                    'title' => 'Chrome Mauve Rose-Gold Nails',
                    'img'   => get_template_directory_uri() . '/assets/images/nail-edit-3.png',
                    'link'  => home_url( '/category/nails/' )
                ),
                array(
                    'title' => 'Brown Polka Dot French Tips',
                    'img'   => get_template_directory_uri() . '/assets/images/nail-edit-4.png',
                    'link'  => home_url( '/category/nails/' )
                ),
                array(
                    'title' => 'Black and Gold Chevron French Tips',
                    'img'   => get_template_directory_uri() . '/assets/images/nail-edit-5.png',
                    'link'  => home_url( '/category/nails/' )
                ),
                array(
                    'title' => 'Glossy Olive Green Autumn Nails',
                    'img'   => get_template_directory_uri() . '/assets/images/nail-edit-6.png',
                    'link'  => home_url( '/category/nails/' )
                ),
            );

            // Check if WordPress posts in 'nails' category exist with featured images
            $nails_wp_query = new WP_Query( array(
                'category_name'       => 'nails',
                'posts_per_page'      => 6,
                'post_status'         => 'publish',
                'ignore_sticky_posts' => 1
            ) );

            $rendered_count = 0;
            if ( $nails_wp_query->have_posts() ) {
                while ( $nails_wp_query->have_posts() ) {
                    $nails_wp_query->the_post();
                    $has_thumb = has_post_thumbnail();
                    $img_src = $has_thumb ? get_the_post_thumbnail_url( get_the_ID(), 'medium_large' ) : $curated_nails[ $rendered_count % count( $curated_nails ) ]['img'];
                    ?>
                    <a href="<?php the_permalink(); ?>" class="gm-nail-card" aria-label="<?php the_title_attribute(); ?>">
                        <div class="gm-nail-img-wrap">
                            <img src="<?php echo esc_url( $img_src ); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy" />
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

<?php 
get_footer();
