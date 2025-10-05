<?php
/** template name: About */
get_header();
?>

<section class="container-fluid about-us-section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 content-wrap">
				<p class="section-label">About KiwiBridge</p>
				<h2 class="main-text">Smart Virtual Support for Kiwi Businesses</h2>

				<p class="about-description" style="color: #fff;">Running a business is tough — juggling admin, accounts, marketing, IT, and client work all at once. That’s why we built KiwiBridge: to take the pressure off and give New Zealand businesses the freedom to grow.<br />
                    We’re a proudly NZ-owned company, connecting local businesses with dedicated virtual assistants and specialist teams who handle the time-consuming tasks — so you can focus on what really matters.<br />
                    With KiwiBridge, you don’t just get outsourcing — you get a partner who understands the Kiwi way of doing business, supported by global capability.
                </p>
				<div class="mt-5">
				    <a href="<?php echo site_url('about-us'); ?>" class="discover-link">Discover More</a>
				</div>
			</div>
            <div class="col-lg-6 mb-5 mb-lg-0">
				<div class="about-image-wrapper">
					<img src="<?php echo bloginfo('template_url'); ?>/public/images/who-we-are.webp" alt="Business Team" class="about-image" />
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Our Value Section -->
<section class="our-value-section">
    <div class="container">
        <div class="row align-items-stretch">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="value-content">
                    <h2 class="value-title">Our Value</h2>
                    <p class="value-description">
                        Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>
            </div>
            <div class="col-lg-7 mb-4 mb-lg-0">
                <div class="value-card-wrapper">
                    <div class="value-highlight">
                        <p class="highlight-text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
                        </p>
                        <div class="executive-info">
                            <h4 class="executive-name">Amanda Black</h4>
                            <p class="executive-title">Chief Executive Officer</p>
                        </div>
                    </div>
                    <div class="team-image-wrapper">
                        <img src="<?php echo bloginfo('template_url'); ?>/public/images/team-collaboration.jpg" alt="Team Collaboration" class="team-image" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
