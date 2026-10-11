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
    max-width: 1536px;
    margin: 0 auto;
    padding: 24px 20px 80px;
    box-sizing: border-box;
    font-family: var(--gm-font-sans);
    color: var(--gm-color-dark);
}

.gm-container {
    width: 100%;
    max-width: 1240px;
    margin: 0 auto;
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
   1. HERO SPLIT SECTION
   ========================================================================== */
.gm-hero-section {
    display: flex;
    gap: 32px;
    margin-bottom: 70px;
    align-items: flex-start;
}

.gm-hero-main {
    flex: 1;
    position: relative;
    text-decoration: none;
    display: block;
}

.gm-hero-image-wrap {
    width: 100%;
    height: 430px;
    background: var(--gm-color-bg-light);
    overflow: hidden;
    position: relative;
}

.gm-hero-image-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.gm-hero-main:hover .gm-hero-image-wrap img {
    transform: scale(1.02);
}

.gm-hero-overlay-card {
    background: var(--gm-color-sand);
    max-width: 864px;
    width: 88%;
    margin: -72px auto 0;
    position: relative;
    z-index: 2;
    padding: 24px 32px;
    box-sizing: border-box;
    box-shadow: 0 4px 16px rgba(0,0,0,0.04);
}

.gm-hero-overlay-title {
    font-family: var(--gm-font-sans);
    font-size: clamp(22px, 2.5vw, 28px);
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

/* Right Video / Portrait Card */
.gm-hero-side {
    width: 264px;
    flex-shrink: 0;
    display: flex;
    flex-direction: column;
    padding-top: 10px;
}

.gm-hero-video-card {
    width: 100%;
    height: 330px;
    background: #FAF1EB;
    position: relative;
    overflow: hidden;
    display: block;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
}

.gm-hero-video-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.gm-hero-video-badge {
    position: absolute;
    bottom: 16px;
    left: 16px;
    right: 16px;
    background: rgba(0, 0, 0, 0.7);
    backdrop-filter: blur(4px);
    color: #ffffff;
    padding: 8px 12px;
    font-size: 11px;
    letter-spacing: 0.8px;
    text-transform: uppercase;
    display: flex;
    align-items: center;
    gap: 8px;
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

/* Sticky Sidebar Ad Container */
.gm-latest-sidebar {
    width: 300px;
    flex-shrink: 0;
}

.gm-sidebar-sticky {
    position: sticky;
    top: 100px;
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
    width: 100vw;
    position: relative;
    left: 50%;
    right: 50%;
    margin-left: -50vw;
    margin-right: -50vw;
    padding: 50px 20px 70px;
    box-sizing: border-box;
    margin-bottom: 80px;
}

.gm-trending-header-box {
    text-align: center;
    margin-bottom: 45px;
}

.gm-trending-title {
    font-family: var(--gm-font-display);
    font-size: clamp(48px, 6vw, 86px);
    line-height: 1.1;
    font-weight: 300;
    text-transform: uppercase;
    color: #111111;
    letter-spacing: 2px;
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
   6. NAILS SECTION
   ========================================================================== */
.gm-nails-section {
    margin-bottom: 90px;
}

.gm-nails-grid {
    display: grid;
    grid-template-columns: 1fr 1.15fr;
    gap: 40px;
    align-items: flex-start;
}

.gm-nails-thumb {
    width: 180px;
    height: 135px;
    flex-shrink: 0;
    overflow: hidden;
    background: #eee;
}

.gm-nails-thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
}

.gm-horizontal-item:hover .gm-nails-thumb img {
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
    }
    .gm-sidebar-sticky {
        position: static;
        margin-top: 40px;
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
    .gm-nails-grid {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 900px) {
    .gm-hero-section {
        flex-direction: column;
    }
    .gm-hero-side {
        width: 100%;
    }
    .gm-hero-video-card {
        height: 240px;
    }
    .gm-hero-overlay-card {
        width: 95%;
        margin-top: -40px;
        padding: 20px;
    }
    .gm-latest-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    .gm-shopping-grid {
        grid-template-columns: 1fr;
    }
    .gm-seal-box {
        grid-column: span 1;
    }
}

@media (max-width: 600px) {
    .gm-latest-grid,
    .gm-trending-grid,
    .gm-four-col-grid {
        grid-template-columns: 1fr;
    }
    .gm-horizontal-item {
        flex-direction: column;
    }
    .gm-horizontal-thumb,
    .gm-nails-thumb {
        width: 100%;
        height: 200px;
    }
    .gm-hero-image-wrap {
        height: 280px;
    }
    .gm-heading-xl {
        font-size: 36px;
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
                    <img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&q=80&w=1400" alt="Beauty Product Feature" />
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
                        echo 'In the endless sea of launches, it feels like drama is the new marketing strategy.';
                    }
                    ?>
                </p>
            </div>
        </a>
        <?php wp_reset_postdata(); ?>

        <!-- Right: Video Player / Portrait Story -->
        <div class="gm-hero-side">
            <a href="<?php echo esc_url( home_url( '/category/trends-innovation/' ) ); ?>" class="gm-hero-video-card">
                <img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?auto=format&fit=crop&q=80&w=600" alt="Trending Video Feature" />
                <div class="gm-hero-video-badge">
                    <svg viewBox="0 0 24 24"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg>
                    <span>Trending Video Highlight</span>
                </div>
            </a>
        </div>
    </section>


    <!-- =====================================================================
         2. THE LATEST SECTION (3 Columns Grid + 300px Sticky Sidebar Ad)
         ===================================================================== -->
    <section class="gm-latest-section gm-container">
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
                            'excerpt'  => 'From Glazed Black to Metallic Blue.',
                            'author'   => 'By Rebecca Norris',
                            'img'      => 'https://images.unsplash.com/photo-1604654894610-df63bc536371?auto=format&fit=crop&q=80&w=600'
                        ),
                        array(
                            'title'    => 'There’s No Better Fall Manicure Than One of These Rich Berry Shades',
                            'cat'      => 'Nails',
                            'time'     => '21 hours ago',
                            'excerpt'  => 'Simply sumptuous.',
                            'author'   => 'By Rebecca Norris',
                            'img'      => 'https://images.unsplash.com/photo-1632345031435-8727f6897d53?auto=format&fit=crop&q=80&w=600'
                        ),
                        array(
                            'title'    => 'These 26 October Beauty and Style Launches Are a Dream',
                            'cat'      => 'Product & Brand News',
                            'time'     => '1 day ago',
                            'excerpt'  => 'From Rhode newness to lace-trimmed sweats and so much more.',
                            'author'   => 'By Sophie Vilensky',
                            'img'      => 'https://images.unsplash.com/photo-1596462502278-27bfdc403348?auto=format&fit=crop&q=80&w=600'
                        ),
                        array(
                            'title'    => '“Cherry Noir” Nails Are Taking Over for Fall 2026',
                            'cat'      => 'Nails',
                            'time'     => '1 day ago',
                            'excerpt'  => 'Just ask Anne Hathaway.',
                            'author'   => 'By Sophie Vilensky',
                            'img'      => 'https://images.unsplash.com/photo-1519014816548-bf5fe059798b?auto=format&fit=crop&q=80&w=600'
                        ),
                        array(
                            'title'    => 'Pamela Anderson’s New Lip Balm Was Inspired by Gardening',
                            'cat'      => 'Product & Brand News',
                            'time'     => '2 days ago',
                            'excerpt'  => 'The icon herself fills us in.',
                            'author'   => 'By Sophie Vilensky',
                            'img'      => 'https://images.unsplash.com/photo-1586495777744-4413f21062fa?auto=format&fit=crop&q=80&w=600'
                        ),
                        array(
                            'title'    => 'The Great Bringback Is Upon Us',
                            'cat'      => 'Trends & Innovation',
                            'time'     => '2 days ago',
                            'excerpt'  => 'In a world of constant newness, brands are finally listening to customer nostalgia.',
                            'author'   => 'By Kara Nesvig',
                            'img'      => 'https://images.unsplash.com/photo-1509631179647-0177331693ae?auto=format&fit=crop&q=80&w=600'
                        ),
                        array(
                            'title'    => 'Funky Little Hats Are Adding Whimsy to Our Fall Looks',
                            'cat'      => 'Fashion Trends',
                            'time'     => '2 days ago',
                            'excerpt'  => 'Trade your baseball cap for these playful picks.',
                            'author'   => 'By Jennifer Hussein',
                            'img'      => 'https://images.unsplash.com/photo-1521369909029-2afed882baee?auto=format&fit=crop&q=80&w=600'
                        ),
                        array(
                            'title'    => '20 ‘70s Hairstyles to Try This Fall, from Funky to Classic',
                            'cat'      => 'Hair',
                            'time'     => '3 days ago',
                            'excerpt'  => 'For the canyon girls.',
                            'author'   => 'By Elinor Block',
                            'img'      => 'https://images.unsplash.com/photo-1522337094133-f4cc4856a9db?auto=format&fit=crop&q=80&w=600'
                        ),
                        array(
                            'title'    => 'How “Devil Horn” Updos Brought High Fashion to the Red Carpet',
                            'cat'      => 'Trends & Innovation',
                            'time'     => '3 days ago',
                            'excerpt'  => 'Her makeup artist Heba Thorisdottir gives us all the details.',
                            'author'   => 'By Sophie Vilensky',
                            'img'      => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=600'
                        ),
                        array(
                            'title'    => '7 Fall 2026 Protective Styles That’ll Have You Booked and Busy',
                            'cat'      => 'Protective Hairstyles',
                            'time'     => '3 days ago',
                            'excerpt'  => 'Your fall hair mood board starts here.',
                            'author'   => 'By Annie Blay-Tettey',
                            'img'      => 'https://images.unsplash.com/photo-1584297091622-af8e5ad194db?auto=format&fit=crop&q=80&w=600'
                        ),
                        array(
                            'title'    => 'Soak up All the Fall Energy With These 19 Autumn Acrylic Nails',
                            'cat'      => 'Nails',
                            'time'     => '3 days ago',
                            'excerpt'  => 'Such a vibe.',
                            'author'   => 'By Madelyn Reed',
                            'img'      => 'https://images.unsplash.com/photo-1522337660859-02fbefca4702?auto=format&fit=crop&q=80&w=600'
                        ),
                        array(
                            'title'    => 'Amazon’s Best Beauty Deals Include Dyson Styling Tools',
                            'cat'      => 'Skin',
                            'time'     => '4 days ago',
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
                                    <span class="gm-meta-time"><?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago' ); ?></span>
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
                                <span class="gm-meta-time"><?php echo esc_html( $item['time'] ); ?></span>
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

            <!-- Right Sticky Sidebar Ad (300px) -->
            <aside class="gm-latest-sidebar">
                <div class="gm-sidebar-sticky">
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
        <div class="gm-container">
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
    <section class="gm-most-clicked-section gm-container">
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
    <section class="gm-shopping-section gm-container">
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
         6. NAILS SECTION (Featured Large + 4 Horizontal Items)
         ===================================================================== -->
    <section class="gm-nails-section gm-container">
        <div class="gm-section-header-flex">
            <div>
                <h2 class="gm-heading-xl" style="margin-bottom: 6px;">Nails</h2>
                <div class="gm-accent-line" style="margin-bottom: 0;"></div>
            </div>
            <a href="<?php echo esc_url( home_url( '/category/nails/' ) ); ?>" class="gm-see-all-link">
                See all Nails &rarr;
            </a>
        </div>

        <div class="gm-nails-grid" style="margin-top: 36px;">
            <!-- Column 1: Featured 1:1 Large Square Card -->
            <a href="<?php echo esc_url( home_url( '/category/nails/' ) ); ?>" class="gm-featured-square-card">
                <div class="gm-square-img-wrap">
                    <img src="https://images.unsplash.com/photo-1632345031435-8727f6897d53?auto=format&fit=crop&q=80&w=800" alt="Fall Nail Ideas" />
                </div>
                <span class="gm-category-tag">Nails</span>
                <h3 class="gm-featured-large-title">27 Fall Nail Ideas That Are as Trendy as They Are Chic</h3>
                <p class="gm-card-excerpt">New season, new nails.</p>
                <span class="gm-card-author">By Rebecca Norris</span>
            </a>

            <!-- Column 2: Stack of 4 Horizontal Cards -->
            <div class="gm-horizontal-list">
                <?php
                $nails_items = array(
                    array(
                        'cat'    => 'Nails',
                        'title'  => '24 Short Manicures for Fall With Seasonal Statements',
                        'author' => 'By Catharine Malzahn',
                        'img'    => 'https://images.unsplash.com/photo-1604654894610-df63bc536371?auto=format&fit=crop&q=80&w=400'
                    ),
                    array(
                        'cat'    => 'Nails',
                        'title'  => '26 Fall French Manicures to Add Intrigue to Any Autumn Look',
                        'author' => 'By Rebecca Norris',
                        'img'    => 'https://images.unsplash.com/photo-1519014816548-bf5fe059798b?auto=format&fit=crop&q=80&w=400'
                    ),
                    array(
                        'cat'    => 'Nails',
                        'title'  => 'Jammy Nails are the Sweetest Fall Manicure Idea—21 Looks We Love',
                        'author' => 'By Rebecca Norris',
                        'img'    => 'https://images.unsplash.com/photo-1522337660859-02fbefca4702?auto=format&fit=crop&q=80&w=400'
                    ),
                    array(
                        'cat'    => 'Nails',
                        'title'  => 'Dusty Pastels Are Fall’s Softest, Most Sophisticated Palette',
                        'author' => 'By Kara Nesvig',
                        'img'    => 'https://images.unsplash.com/photo-1586495777744-4413f21062fa?auto=format&fit=crop&q=80&w=400'
                    ),
                );

                foreach ( $nails_items as $item ) : ?>
                    <a href="<?php echo esc_url( home_url( '/category/nails/' ) ); ?>" class="gm-horizontal-item">
                        <div class="gm-nails-thumb">
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
        </div>
    </section>

</main>

<?php 
get_footer();
