
<?php
get_header();
?>
<!-- Hero Section -->
<section class="hero-section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="hero-content">
					<h1 class="hero-title">
						Build A<br>
						Profitable<br>
						Business
					</h1>
					<p class="hero-description">Connecting Kiwi Businesses with Smart Virtual Solutions. KiwiBridge helps you save time, reduce stress, and grow your business by providing reliable virtual support services tailored to New Zealand businesses.</p>
					<a href="<?php echo site_url('about-us'); ?>" class="btn theme-btn yellow-btn">Discover More</a>
					
					<!-- <div class="awards-section">
						<p class="awards-text">We Are The Best</p>
						<div class="awards-badges">
							<div class="award-badge">
								<span class="badge-text">ULTRA<br>QUALITY<br>AWARDS</span>
							</div>
							<div class="award-badge">
								<span class="badge-text">BEST<br>QUALITY<br>AWARDS</span>
							</div>
							<div class="award-badge">
								<img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='white'%3E%3Cpath d='M19 9l1.25-2.75L23 5l-2.75-1.25L19 1l-1.25 2.75L15 5l2.75 1.25L19 9zm-7.5.5L9 4 6.5 9.5 1 12l5.5 2.5L9 20l2.5-5.5L17 12l-5.5-2.5z'/%3E%3C/svg%3E" alt="Award">
							</div>
						</div>
					</div> -->
				</div>
			</div>
			<div class="col-lg-6">
				<div class="hero-image-wrapper">
					<div class="shape shape-green"></div>
					<div class="shape shape-blue"></div>
					<img src="<?php echo bloginfo('template_url'); ?>/public/images/header-img.png" alt="Professional Business Man" class="hero-image" />
				</div>
			</div>
		</div>
		<div class="statistics-section">
			<div class="container">
				<div class="row text-center">
					<div class="col-6 col-md-3">
						<div class="stat-item">
							<h2 class="stat-number">100%</h2>
							<p class="stat-label">NZ-Owned & Operated</p>
						</div>
					</div>
					<div class="col-6 col-md-3">
						<div class="stat-item">
							<h2 class="stat-number">6+</h2>
							<p class="stat-label">Core Service Areas</p>
						</div>
					</div>
					<div class="col-6 col-md-3">
						<div class="stat-item">
							<h2 class="stat-number">1 Day</h2>
							<p class="stat-label">Fast Onboarding</p>
						</div>
					</div>
					<div class="col-6 col-md-3">
						<div class="stat-item">
							<h2 class="stat-number">99%</h2>
							<p class="stat-label">Customer Satisfaction</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="about-company-section">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-5">
						<div class="about-image-wrapper">
							<img src="<?php echo bloginfo('template_url'); ?>/public/images/about.jpg" alt="Business Team" class="about-image" />
						</div>
					</div>
					<div class="col-lg-7">
						<div class="about-content">
							<span class="section-label">About Company</span>
							<h2 class="section-title">Proudly New Zealand-Owned, Powered by People</h2>
							<p class="section-description">KiwiBridge was founded by three passionate Kiwis who saw the challenges local business owners face managing admin, sales, finance, and tech. We created a trusted, end-to-end virtual support company so you can focus on what you do best while we handle the rest.<br />
	We’re not just about outsourcing – we’re about building lasting partnerships. Our teams in Sri Lanka work in sync with NZ time zones, delivering tailored, reliable, and transparent services.</p>
							<a href="<?php echo site_url('about-us'); ?>" class="discover-link">Discover More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Services Section (What We Do) -->
<section class="services-section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="services-content">
					<span class="section-label">What We Do</span>
					<h2 class="section-title">Developing Solutions For The Future.</h2>
					<p class="section-description">We offer an end-to-end suite of virtual business services:</p>
					
					<div class="service-cards">
						<!-- Investment Management -->
						<div class="service-card">
							<div class="service-icon">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2">
									<path stroke-linecap="round" stroke-linejoin="round" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
								</svg>
							</div>
							<div class="service-info">
								<h3>Virtual Administration</h3>
								<p>Scheduling, document prep, event coordination, project proposals.</p>
								<a href="<?php echo site_url('services/virtual-administration'); ?>" class="read-more">Read More</a>
							</div>
						</div>

						<!-- Business Planning -->
						<div class="service-card">
							<div class="service-icon">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2">
									<path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
								</svg>
							</div>
							<div class="service-info">
								<h3>Real Estate Virtual Assistants</h3>
								<p>CRM management, listing updates, marketing support.</p>
								<a href="<?php echo site_url('services/real-estate-virtual-assistants'); ?>" class="read-more">Read More</a>
							</div>
						</div>

						<!-- Strategic Consulting -->
						<div class="service-card">
							<div class="service-icon">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2">
									<path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
								</svg>
							</div>
							<div class="service-info">
								<h3>Creative Services</h3>
								<p>Graphic design, video editing, branding, and fashion design.</p>
								<a href="<?php echo site_url('services/creative-services'); ?>" class="read-more">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="services-image-wrapper">
					<img src="<?php echo bloginfo('template_url'); ?>/public/images/what-we-offer-1.webp" alt="Professional Woman Working" class="service-image" />
					<div class="efficiency-badge">
						<!-- <span class="badge-percentage">80%</span> -->
						<span class="badge-text">Smarter support, built for Kiwi businesses.</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- About Company Section -->
<section class="container-fluid about-us-section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 mb-5 mb-lg-0">
				<div class="about-image-wrapper">
					<img src="<?php echo bloginfo('template_url'); ?>/public/images/who-we-are.webp" alt="Business Team" class="about-image" />
				</div>
			</div>
			<div class="col-lg-6 content-wrap">
				<p class="section-label">About KiwiBridge</p>
				<h2 class="main-text">Our Consultants <br />Can Help</h2>

				<div class="d-flex gap-3 my-4">
					<div class="info-box">
						<h3 class="text-warning">Focused</h3>
						<p class="mb-0">on New Zealand Businesses</p>
					</div>
					<div class="info-box">
						<h3 class="text-warning">Built</h3>
						<p class="mb-0">on Trust & Partnership</p>
					</div>
					<div class="info-box">
						<h3 class="text-warning">Backed</h3>
						<p class="mb-0">by Global Capability</p>
					</div>
				</div>

				<p class="text-secondary">KiwiBridge may be new, but our mission is clear: make life easier for Kiwi business owners by providing reliable, affordable, and flexible virtual support.<br />
					From admin and creative to IT, marketing, and finance — our consultants are ready to become an extension of your team, helping you scale smarter without the overhead of hiring full-time staff.
					We bring together local understanding and global expertise, so you can move forward with confidence.
				</p>
				<div class="mt-5">
				<a href="<?php echo site_url('about-us'); ?>" class="discover-link">Discover More</a>
				<a href="<?php echo site_url('get-started'); ?>" class="theme-btn mx-4">Get Started</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Our Services Grid Section -->
<section class="our-services-section">
	<div class="container">
		<div class="section-header">
			<span class="section-label">Our Services</span>
			<h2 class="section-title">Developing Solutions for the Future</h2>
			<p class="section-description">We provide smart, scalable virtual support to help New Zealand businesses grow without the overhead of hiring full-time staff.</p>
		</div>
		
		<div class="row services-grid">
			<div class="col-lg-4 col-md-6 service-grid-col">
				<div class="service-grid-card">
					<div class="service-icon">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
						</svg>
					</div>
					<h3 class="service-title">Virtual Administration</h3>
					<p class="service-description">Stay on top of your day-to-day with scheduling, reporting, proposals, and event coordination handled by your dedicated VA.</p>
					<a href="<?php echo site_url('services/virtual-administration'); ?>" class="service-button">Read More</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 service-grid-col">
				<div class="service-grid-card featured">
					<div class="service-icon">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
						</svg>
					</div>
					<h3 class="service-title">Real Estate Virtual Assistants</h3>
					<p class="service-description">Specialised support for property professionals — from CRM updates and listing management to compliance docs and marketing.</p>
					<a href="<?php echo site_url('services/real-estate-virtual-assistants'); ?>" class="service-button">Read More</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 service-grid-col">
				<div class="service-grid-card">
					<div class="service-icon">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
						</svg>
					</div>
					<h3 class="service-title">Creative Services</h3>
					<p class="service-description">Bring your brand to life with design, video, writing, and even fashion design — everything you need to stand out.</p>
					<a href="<?php echo site_url('services/creative-services'); ?>" class="service-button">Read More</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 service-grid-col">
				<div class="service-grid-card">
					<div class="service-icon">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
						</svg>
					</div>
					<h3 class="service-title">Digital Marketing</h3>
					<p class="service-description">Grow your reach with social media management, Google Ads, SEO, and email campaigns built for real results.</p>
					<a href="<?php echo site_url('services/digital-marketing'); ?>" class="service-button">Read More</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 service-grid-col">
				<div class="service-grid-card">
					<div class="service-icon">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
						</svg>
					</div>
					<h3 class="service-title">IT & Web Solutions</h3>
					<p class="service-description">Web design, redesign, maintenance, and cloud services — so your digital presence is reliable and scalable.</p>
					<a href="<?php echo site_url('services/it-web-solutions'); ?>" class="service-button">Read More</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 service-grid-col">
				<div class="service-grid-card">
					<div class="service-icon">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
						</svg>
					</div>
					<h3 class="service-title">Financial & Accounting Services</h3>
					<p class="service-description">Monthly reporting, GST, payroll, sales analysis, inventory management, and investment support — all in one place.</p>
					<a href="<?php echo site_url('services/financial-accounting-services'); ?>" class="service-button">Read More</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Why Choose Us Section -->
<section class="why-choose-section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-2">
				
			</div>
			<div class="col-lg-6">
				<div class="choose-content">
					<span class="section-badge">Why Choose Us</span>
					<h2 class="section-heading">We Take a Smarter Approach to Risk & Growth</h2>
					<p class="section-text mb-4">At KiwiBridge, we don’t just complete tasks — we create systems that help your business grow with confidence. Our virtual teams bring together strategy, creativity, and reliable delivery so you can scale without unnecessary risk.</p>	
					<div class="choose-actions">
						<a href="<?php echo site_url('contact'); ?>" class="theme-btn">Contact Now</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="choose-features">
					<div class="feature-item">
						<div class="feature-icon">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
								<path d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
							</svg>
						</div>
						<span>Creative Ideas</span>
					</div>
					
					<div class="feature-item">
						<div class="feature-icon">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
								<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
								<circle cx="9" cy="7" r="4"/>
								<path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
								<path d="M16 3.13a4 4 0 0 1 0 7.75"/>
							</svg>
						</div>
						<span>Experienced Advisors</span>
					</div>
					
					<div class="feature-item">
						<div class="feature-icon">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
								<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
								<path d="M9 12l2 2 4-4"/>
							</svg>
						</div>
						<span>Risk Management</span>
					</div>
					
					<div class="feature-item">
						<div class="feature-icon">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
								<path d="M9 11l3 3L22 4"/>
								<path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/>
							</svg>
						</div>
						<span>Quality Management</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- CTA Section -->
<section class="cta-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<p class="section-label">Get Started</p>
				<h2 class="main-text">Book Your Free Consultation</h2>
				<p class="section-description">Ready to save time, reduce costs, and scale your business with ease? Book a consultation with KiwiBridge today. We’ll discuss your goals, challenges, and create a tailored virtual support plan that fits your business needs.</p>
				<div class="contact-form-wrap">
					<?php //echo do_shortcode('[contact-form-7 id="a0af5ad" title="Contact form"]'); ?>

					<!-- Calendly inline widget begin -->
					<div class="calendly-inline-widget" data-url="https://calendly.com/kiwibridge-sales" style="min-width:320px;height:700px;"></div>
					<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
					<!-- Calendly inline widget end -->

				</div>
			</div>
			<div class="col-md-6">
				<div class="image-wrap">
					<img src="<?php echo bloginfo('template_url'); ?>/public/images/cta-banner.webp" alt="cta" />
				</div>
			</div>
		</div>
	</div>
</section>

<!-- FAQs Section -->
<section class="faqs-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="image-wrap" style="background: url(<?php echo bloginfo('template_url'); ?>/public/images/faqs.webp) no-repeat center;"></div> 
			</div>
			<div class="col-md-6">
				<div class="faq-wrap">
					<p class="section-label">Help</p>
					<h2 class="main-text">Frequently Asked Questions</h2>
					<div class="accordion" id="accordionExample">
						<?php 
							$faqs = array(
								[
									'quaction' => 'How fast can I start using KiwiBridge services?',
									'anwser'   => 'Most clients are onboarded within 1 business day after their consultation.'
								],
								[
									'quaction' => 'Do I need to sign a long-term contract?',
									'anwser'   => 'No. We keep it flexible — no lock-in contracts, no minimum hours, and your hours never expire.'
								],
								[
									'quaction' => 'What kind of tasks can my Virtual Assistant handle?',
									'anwser'   => 'Everything from admin, CRM updates, reports, and proposals to marketing, design, IT support, and finance.'
								],
								[
									'quaction' => 'Can I scale up or down as my workload changes?',
									'anwser'   => 'Absolutely. You can add more hours or specialist services anytime — and reduce when you don’t need them.'
								]
							);
							$x=0;
							foreach($faqs as $faq) {
							?>
								<div class="accordion-item">
									<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_<?php echo $x; ?>" aria-expanded="false" aria-controls="collapse_<?php echo $x; ?>">
										<?php echo $faq['quaction']; ?>
									</button>
									</h2>
									<div id="collapse_<?php echo $x; ?>" class="accordion-collapse collapse" data-bs-parent="#faqs">
									<div class="accordion-body">
										<?php echo $faq['anwser']; ?>
									</div>
									</div>
								</div>
							<?php
							$x++;
							}
						?>
					</div>
				</div>	
			</div>
		</div>
	</div>
</section>

<!-- Blog Section -->
<section class="our-blog-section">
	<div class="container">
		<div class="section-header">
			<span class="section-label">Blogs</span>
			<h2 class="section-title">News & Updates</h2>
			<p class="section-description">Insights, Tips & Stories from KiwiBridge</p>
		</div>

		<div class="container py-5">
			<div class="row g-4">
				<?php
					$args = array(
						'post_type'      => 'post',
						'posts_per_page' => 3,
						'orderby'        => 'date',
						'order'          => 'DESC'
					);

					$latest_post = new WP_Query($args);
					$x=1;
					if ( $latest_post->have_posts() ) {
						while ( $latest_post->have_posts() ) {
							$latest_post->the_post();
							$post_id = $latest_post->ID;
							if($x==1) {
						?>
							<div class="col-lg-6">
								<a href="<?php echo get_the_permalink(); ?>" class="card-custom first">
									<img 
										src="<?php echo get_the_post_thumbnail_url(); ?>" 
										alt="<?php echo esc_attr( get_the_title( $post_id ) ); ?>" 
									/>
									<div class="card-body">
										<h5 class="card-title"><?php echo get_the_title(); ?></h5>
										<p class="card-text">
											<?php echo wp_trim_words( get_the_content(), 25, '...' ); ?>
										</p>
									</div>
								</a>
							</div>
							<div class="col-lg-6">
						<?php
							}
							else {
						?>
							<a href="<?php echo get_the_permalink(); ?>" class="card-custom d-flex mb-4">
								<img 
									src="<?php echo get_the_post_thumbnail_url(); ?>" 
									alt="<?php echo esc_attr( get_the_title( $post_id ) ); ?>" 
									class="w-50"
								/>
								<div class="card-body">
									<h5 class="card-title"><?php echo get_the_title(); ?></h5>
									<p class="card-text">
										<?php echo wp_trim_words( get_the_content(), 15, '...' ); ?>
									</p>
								</div>
							</a>
						<?php
							}
							if($x==3) {echo '</div>';}
							$x++;
						}
					}
					wp_reset_postdata();
				?>

				

				

			</div>
		</div>
	</div>
</section>

 <section class="subscribe-section text-center">
    <div class="container position-relative z-2">
      <h2 class="mb-3">Let’s Grow Together</h2>
      <p class="mb-4">We share practical advice, virtual assistant hacks, and updates from our journey helping Kiwi businesses do more with less. <br />Subscribe and never miss out.</p>
      <form class="subscribe-form mx-auto">
        <input type="email" class="form-control" placeholder="Enter your Email" required>
        <button type="submit">Get Started</button>
      </form>
    </div>

    <!-- Decorative Shapes -->
    <div class="shape"></div>
    <div class="circle-shape"></div>
</section>

<?php
get_footer();
?>
