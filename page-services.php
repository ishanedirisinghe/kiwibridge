<?php
/** template name: Services */
get_header();
?>


<!-- Service Hero Section -->
<section class="service-hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="row service-hero-content">
                    <div class="col-sm-12 col-md-10 col-lg-8 offset-sm-0 offset-md-1 offset-lg-2">    
                        <h1 class="service-hero-title"><?php the_title(); ?></h1>
                        <h4 class="service-hero-subtitle">Stay on Top of Your Business</h4>
                        <p class="service-intro">Running a business comes with countless small but critical tasks. At KiwiBridge, our Virtual Administration serviceshelp you manage the details, so you can focus on growth.</p>
                    </div>
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

<?php
get_footer();
?>