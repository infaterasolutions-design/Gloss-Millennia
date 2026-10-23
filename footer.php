</div> <!-- .site-wrapper -->

<!-- Google Fonts (Playfair Display & Inter) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

<style>
/* Section Base */
.figma-ig-section {
    width: 100%;
    position: relative;
    background: #ffffff;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.figma-ig-section * {
    box-sizing: border-box;
}

/* Header Container */
.figma-ig-header {
    background: #F4F1EC; /* Warm neutral cream tone */
    padding: 50px 20px 40px;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
}

/* Subtitle */
.figma-ig-subtitle {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
    font-size: 14px;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: #000000;
    margin-bottom: 10px;
}

/* Title */
.figma-ig-title {
    font-family: 'Playfair Display', Georgia, serif;
    font-style: italic;
    font-size: 60px;
    font-weight: 400;
    color: #000000;
    margin: 0 0 15px 0;
    line-height: 1.05;
}

/* Description */
.figma-ig-desc {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
    font-size: 16px;
    color: #000000;
    margin: 0 0 30px 0;
}

/* Buttons Container */
.figma-ig-buttons {
    display: flex;
    flex-direction: column;
    gap: 15px;
    align-items: center;
}

/* Action Buttons */
.figma-ig-btn {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 230px;
    height: 38px;
    background: #020202;
    color: #FFFFFF !important;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    text-decoration: none;
    transition: opacity 0.3s ease, transform 0.2s ease;
}

.figma-ig-btn:hover {
    opacity: 0.85;
    transform: translateY(-1px);
    color: #FFFFFF !important;
}

/* Feed Grid Container */
.figma-ig-grid {
    display: block;
    width: 100%;
    border-top: 1px solid #000000;
    overflow: hidden;
}

/* Smash Balloon CSS Grid Overrides (Seamless 6-column layout) */
#sb_instagram {
    padding: 0 !important;
    margin: 0 !important;
    width: 100% !important;
    max-width: 100% !important;
}

#sb_instagram #sbi_images {
    display: flex !important;
    flex-wrap: nowrap !important;
    gap: 1px !important;
    background-color: #ffffff !important;
    padding: 0 !important;
    margin: 0 !important;
    width: 100% !important;
}

#sb_instagram .sbi_item {
    position: relative !important;
    padding: 0 !important;
    margin: 0 !important;
    flex: 1 1 16.666% !important;
    max-width: 16.666% !important;
    border: none !important;
    overflow: hidden !important;
}

#sb_instagram .sbi_photo_wrap,
#sb_instagram .sbi_photo {
    position: relative !important;
    display: block !important;
    width: 100% !important;
    height: 100% !important;
    aspect-ratio: 1 / 1 !important;
    overflow: hidden !important;
}

#sb_instagram .sbi_item img {
    width: 100% !important;
    height: 100% !important;
    object-fit: cover !important;
    display: block !important;
    transition: transform 0.5s ease !important;
}

#sb_instagram .sbi_item:hover img {
    transform: scale(1.05) !important;
}

#sb_instagram .sbi_load_btn,
#sb_instagram .sbi_follow_btn,
#sb_instagram .sbi_header {
    display: none !important;
}

/* Play Button Styling & Centering for Videos/Reels */
#sb_instagram .sbi_playbtn {
    position: absolute !important;
    top: 50% !important;
    left: 50% !important;
    right: auto !important;
    bottom: auto !important;
    transform: translate(-50%, -50%) !important;
    margin: 0 !important;
    width: 44px !important;
    height: 44px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    background: transparent !important;
    padding: 0 !important;
    z-index: 10 !important;
    filter: drop-shadow(0px 4px 10px rgba(0, 0, 0, 0.25)) !important;
    pointer-events: none;
}

#sb_instagram .sbi_playbtn svg {
    width: 100% !important;
    height: 100% !important;
    fill: #ffffff !important;
    margin: 0 !important;
}

/* Mobile Responsiveness (Horizontal Touch Slider) */
@media (max-width: 1024px) {
    #sb_instagram #sbi_images {
        overflow-x: auto !important;
        scroll-snap-type: x mandatory !important;
        -webkit-overflow-scrolling: touch !important;
        scrollbar-width: none !important;
    }
    #sb_instagram #sbi_images::-webkit-scrollbar {
        display: none !important;
    }
    #sb_instagram .sbi_item {
        flex: 0 0 30% !important;
        max-width: 30% !important;
        scroll-snap-align: start !important;
    }
}

@media (max-width: 768px) {
    .figma-ig-section {
        margin-top: 0 !important;
        padding-top: 0 !important;
    }
    .figma-ig-header {
        padding: 30px 20px 35px !important;
    }
    .figma-ig-title {
        font-size: 38px !important;
    }
    #sb_instagram .sbi_item {
        flex: 0 0 25% !important; /* 4 visible on mobile */
        max-width: 25% !important;
    }
    #sb_instagram .sbi_playbtn {
        width: 24px !important;
        height: 24px !important;
    }
}
</style>

<section class="figma-ig-section">
    <div class="figma-ig-header">
        <div class="figma-ig-subtitle">SOCIAL</div>
        <h2 class="figma-ig-title">On Instagram</h2>
        <p class="figma-ig-desc">Everyday Outfits and Style Inspiration</p>
        <div class="figma-ig-buttons">
            <a href="<?php echo esc_url( home_url( '/category/shopping/' ) ); ?>" class="figma-ig-btn">SHOP DAILY LOOKS HERE</a>
            <a href="https://www.instagram.com/thecombocloset/" target="_blank" rel="noopener noreferrer" class="figma-ig-btn">FOLLOW ON INSTAGRAM</a>
        </div>
    </div>

    <div class="figma-ig-grid plugin-container">
        <?php 
        $ig_feed = do_shortcode('[instagram-feed num=6 cols=6 disablemobile=true showheader=false showbutton=false showfollow=false showcaption=false]'); 
        if ( ! empty( $ig_feed ) && strpos( $ig_feed, '[instagram-feed' ) === false ) {
            echo $ig_feed;
        } else {
            ?>
            <div id="sb_instagram" class="sbi sbi_col_6">
                <div id="sbi_images">
                    <div class="sbi_item"><div class="sbi_photo_wrap"><a href="https://www.instagram.com/thecombocloset/" target="_blank" rel="noopener noreferrer" class="sbi_photo"><img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?auto=format&fit=crop&q=80&w=600" alt="Instagram Post" /></a></div></div>
                    <div class="sbi_item"><div class="sbi_photo_wrap"><a href="https://www.instagram.com/thecombocloset/" target="_blank" rel="noopener noreferrer" class="sbi_photo"><img src="https://images.unsplash.com/photo-1529139574466-a303027c1d8b?auto=format&fit=crop&q=80&w=600" alt="Instagram Post" /></a></div></div>
                    <div class="sbi_item"><div class="sbi_photo_wrap"><a href="https://www.instagram.com/thecombocloset/" target="_blank" rel="noopener noreferrer" class="sbi_photo"><img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?auto=format&fit=crop&q=80&w=600" alt="Instagram Post" /></a></div></div>
                    <div class="sbi_item"><div class="sbi_photo_wrap"><a href="https://www.instagram.com/thecombocloset/" target="_blank" rel="noopener noreferrer" class="sbi_photo"><img src="https://images.unsplash.com/photo-1469334031218-e382a71b716b?auto=format&fit=crop&q=80&w=600" alt="Instagram Post" /></a></div></div>
                    <div class="sbi_item"><div class="sbi_photo_wrap"><a href="https://www.instagram.com/thecombocloset/" target="_blank" rel="noopener noreferrer" class="sbi_photo"><img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&q=80&w=600" alt="Instagram Post" /></a></div></div>
                    <div class="sbi_item"><div class="sbi_photo_wrap"><a href="https://www.instagram.com/thecombocloset/" target="_blank" rel="noopener noreferrer" class="sbi_photo"><img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=600" alt="Instagram Post" /></a></div></div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</section>

<footer id="tcc-footer" class="site-footer figma-footer">
	<div class="figma-footer-main">
		
		<!-- Left Column: Links -->
		<div class="figma-footer-col figma-footer-col-left">
			<nav class="figma-footer-nav">
				<a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">ABOUT US</a>
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">CONTACT</a>
				<a href="<?php echo esc_url( home_url( '/disclaimer/' ) ); ?>">DISCLAIMER</a>
				<a href="<?php echo esc_url( home_url( '/privacy-policy-affiliate-disclosure/' ) ); ?>">PRIVACY POLICY & AFFILIATE DISCLOSURE</a>
				<a href="<?php echo esc_url( home_url( '/terms-and-conditions/' ) ); ?>">TERMS AND CONDITIONS</a>
			</nav>
		</div>

		<!-- Vertical Divider -->
		<div class="figma-footer-divider"></div>

		<!-- Middle Column: Branding -->
		<div class="figma-footer-col figma-footer-col-middle">
			<div class="figma-footer-branding">
				<?php if ( has_custom_logo() ) : ?>
					<div class="site-logo flex items-center" style="margin-bottom: 15px;">
						<?php the_custom_logo(); ?>
					</div>
				<?php else : ?>
					<div class="site-logo flex items-center" style="margin-bottom: 15px;">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="custom-logo-link" rel="home">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="custom-logo" style="max-height: 45px; width: auto; object-fit: contain;" />
						</a>
					</div>
				<?php endif; ?>
			</div>
			<div class="figma-footer-social">
				<a href="https://www.instagram.com/thecombocloset/" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
					  <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
					  <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
					  <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
					</svg>
				</a>
				<a href="https://in.pinterest.com/thecombocloset/" target="_blank" rel="noopener noreferrer" aria-label="Pinterest">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor">
					  <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.162-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.401.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.951-7.252 4.168 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.354-.629-2.758-1.379l-.749 2.848c-.269 1.045-1.004 2.352-1.498 3.146 1.123.345 2.306.535 3.55.535 6.607 0 11.985-5.365 11.985-11.987C23.97 5.367 18.592 0 12.017 0z"/>
					</svg>
				</a>
			</div>
		</div>

		<!-- Vertical Divider -->
		<div class="figma-footer-divider"></div>

		<!-- Right Column: Newsletter -->
		<div class="figma-footer-col figma-footer-col-right">
			<h3 class="newsletter-title">Elevate your inbox</h3>
			<p class="newsletter-desc">Join the tcc newsletter community to receive exclusive content.</p>
			<!-- Reusing the newsletter form logic -->
			<form class="newsletter-form" action="#" method="post">
				<input type="text" placeholder="First name" required />
				<input type="email" placeholder="Email address" required />
				<button type="submit">SUBSCRIBE</button>
			</form>
		</div>
	</div>



	<!-- Bottom Bar -->
	<div class="figma-footer-bottom">
		<p>&copy; <?php echo date('Y'); ?> GLOSS MILLENNIA&reg; &nbsp;|&nbsp; <a href="<?php echo esc_url( home_url( '/privacy-policy-affiliate-disclosure/' ) ); ?>">PRIVACY POLICY</a> &nbsp;|&nbsp; SITE CREDIT</p>
	</div>
</footer>

<!-- Shoppable Video Lightbox -->
<div id="tcc-smv-lightbox" class="tcc-smv-lightbox" style="display:none;">
    <div class="tcc-smv-lightbox-overlay"></div>
    <div class="tcc-smv-lightbox-content">
        <button class="tcc-smv-lightbox-close" aria-label="Close">&times;</button>
        <div class="tcc-smv-lightbox-layout">
            <!-- Left: Video Player -->
            <div class="tcc-smv-lightbox-video">
                <div id="tcc-smv-player-container"></div>
            </div>
            <!-- Right: Shop Products -->
            <div class="tcc-smv-lightbox-shop">
                <h3 class="tcc-smv-shop-title">Shop this look</h3>
                <div id="tcc-smv-products-container" class="tcc-smv-products-grid"></div>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
<style>
/* Back to Top Button */
#tcc-floating-to-top {
    position: fixed;
    bottom: 170px;
    right: 30px;
    width: 45px;
    height: 45px;
    background: #235F6A;
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    opacity: 0;
    visibility: hidden;
    transform: translateY(20px);
    transition: opacity 0.3s, transform 0.3s, visibility 0.3s, background 0.2s;
    z-index: 1000;
}
#tcc-floating-to-top.show {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}
#tcc-floating-to-top:hover {
    background: #1a4a53;
}
@media (max-width: 768px) {
    #tcc-floating-to-top {
        bottom: 160px;
        right: 20px;
        width: 40px;
        height: 40px;
    }
}
</style>

<div id="tcc-floating-to-top" title="Back to Top">
    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"></polyline></svg>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var backToTop = document.getElementById('tcc-floating-to-top');
    if (backToTop) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 500) {
                backToTop.classList.add('show');
            } else {
                backToTop.classList.remove('show');
            }
        });
        backToTop.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
});
</script>

<!-- Subscribe Modal -->
<div id="tcc-subscribe-modal" style="display: none; position: fixed; inset: 0; z-index: 9999; align-items: center; justify-content: center;">
	<!-- Overlay -->
	<div style="position: absolute; inset: 0; background-color: rgba(0,0,0,0.6); backdrop-filter: blur(4px); cursor: pointer;" onclick="closeSubscribeModal()"></div>
	
	<!-- Modal Content -->
	<div style="position: relative; background: #fff; width: 90%; max-width: 500px; display: flex; border-radius: 12px; overflow: hidden; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25); z-index: 10000;">
		
		<!-- Close Button -->
		<button onclick="closeSubscribeModal()" style="position: absolute; top: 15px; right: 15px; background: none; border: none; font-size: 24px; cursor: pointer; color: #000; width: 30px; height: 30px; display: flex; align-items: center; justify-content: center; z-index: 2;">&times;</button>
		
		<!-- Right: Form (Now full width) -->
		<div class="modal-form-col" style="flex: 1; padding: 50px 40px; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">
			<h2 style="font-family: 'Playfair Display', serif; font-size: 32px; font-style: italic; margin: 0 0 10px 0; color: #000;">Subscribe to our newsletter</h2>
			<p style="font-family: 'Inter', sans-serif; font-size: 14px; color: #555; margin-bottom: 25px; line-height: 1.5;">Join our community to receive the latest updates, exclusive content, and early access directly to your inbox.</p>
			
			<form class="modal-newsletter-form" action="#" method="post" style="display: flex; flex-direction: column; gap: 15px; width: 100%; max-width: 350px;">
				<input type="text" placeholder="First name" required style="width: 100%; border: 1px solid #ccc; padding: 12px 15px; font-family: 'Inter', sans-serif; font-size: 14px; border-radius: 4px; text-align: center;" />
				<input type="email" placeholder="Email address" required style="width: 100%; border: 1px solid #ccc; padding: 12px 15px; font-family: 'Inter', sans-serif; font-size: 14px; border-radius: 4px; text-align: center;" />
				<button type="submit" style="background-color: #000; color: #fff; border: none; padding: 15px; font-family: 'Inter', sans-serif; font-weight: 600; font-size: 14px; letter-spacing: 0.05em; text-transform: uppercase; cursor: pointer; border-radius: 4px; transition: background 0.2s;">Subscribe</button>
			</form>
			<p style="font-family: 'Inter', sans-serif; font-size: 11px; color: #999; margin-top: 15px; text-align: center;">We respect your privacy. Unsubscribe at any time.</p>
		</div>
	</div>
</div>
<style>
@media (max-width: 768px) {
	.modal-form-col { padding: 40px 25px !important; }
}
</style>

<script>
function openSubscribeModal(e) {
	if(e) e.preventDefault();
	document.getElementById('tcc-subscribe-modal').style.display = 'flex';
	document.body.style.overflow = 'hidden';
	
	// Add a dummy state to history so the back button can be intercepted
	if (window.location.hash !== '#subscribe') {
		window.history.pushState({ modalOpen: true }, '', window.location.pathname + window.location.search + '#subscribe');
	}
}

function closeSubscribeModal(fromPopState = false) {
	document.getElementById('tcc-subscribe-modal').style.display = 'none';
	document.body.style.overflow = '';
	
	// If closed manually via X or overlay, and we have the hash, go back to clear it
	if (!fromPopState && window.location.hash === '#subscribe') {
		window.history.back();
	}
}

window.addEventListener('popstate', function(e) {
	// If the hash is gone, it means the user pressed the back button
	if (window.location.hash !== '#subscribe') {
		var modal = document.getElementById('tcc-subscribe-modal');
		if (modal && modal.style.display === 'flex') {
			closeSubscribeModal(true);
		}
	}
});
</script>


<script>
var tcc_ajax_url = "<?php echo admin_url('admin-ajax.php'); ?>";
document.querySelectorAll('.newsletter-form, .modal-newsletter-form').forEach(form => {
	form.addEventListener('submit', function(e) {
		e.preventDefault();
		const btn = form.querySelector('button[type="submit"]');
		const inputs = form.querySelectorAll('input');
		const firstName = inputs[0].value;
		const email = inputs[1].value;
		
		const originalText = btn.textContent;
		btn.textContent = 'Wait...';
		btn.disabled = true;

		const formData = new FormData();
		formData.append('action', 'tcc_subscribe');
		formData.append('first_name', firstName);
		formData.append('email', email);

		fetch(tcc_ajax_url, {
			method: 'POST',
			body: formData
		})
		.then(res => res.json())
		.then(res => {
			if(res.success) {
				btn.textContent = 'Subscribed!';
				btn.style.backgroundColor = '#2F4436';
				btn.style.color = '#fff';
				inputs.forEach(i => i.value = '');
			} else {
				alert(res.data);
				btn.textContent = originalText;
				btn.disabled = false;
			}
		})
		.catch(err => {
			alert('Network error.');
			btn.textContent = originalText;
			btn.disabled = false;
		});
	});
});
</script>
</body>
</html>
