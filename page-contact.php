<?php
/** template name: Contact */
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

<section class="enquiry-section">
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3186.232123536723!2d174.8748544020996!3d-37.00425833570303!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d4ded2a1350cb%3A0x93e9073f067b0df8!2sLevel%201%2F7%20Earl%20Richardson%20Avenue%2C%20Manukau%20City%20Centre%2C%20Auckland%202104%2C%20New%20Zealand!5e0!3m2!1sen!2slk!4v1759591063468!5m2!1sen!2slk" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        class="location-map"
        referrerpolicy="no-referrer-when-downgrade"
    ></iframe>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="row service-hero-content enquiry-wrap">
                    <div class="col-sm-12 col-md-10 col-lg-8 offset-sm-0 offset-md-1 offset-lg-2">    
                        <!-- Calendly inline widget begin -->
                        <div class="calendly-inline-widget" 
                            data-url="https://calendly.com/kiwibridge-sales" 
                            style="min-width:320px;height:680px;"
                        ></div>
                        <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
                        <!-- Calendly inline widget end -->    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Contact Info Section -->
<section class="contact-info text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-10 offset-sm-0 offset-lg-1">    
                <div class="row">
                    <div class="col-12 col-md-4 mb-4 mb-md-0">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M25 2L4 18V46H16V30H34V46H46V18L25 2Z" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <circle cx="25" cy="25" r="6" fill="#00ff88"/>
                                </svg>
                            </div>
                            <div class="contact-details">
                                <address>Level 1, 7 Earl Richardson Avenue, Wiri, <br />Manukau 2104</address>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mb-4 mb-md-0">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="10" y="8" width="30" height="34" rx="4" stroke="currentColor" stroke-width="2.5"/>
                                    <circle cx="25" cy="36" r="3" fill="#00ff88"/>
                                    <path d="M20 12H30" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </div>
                            <div class="contact-details">
                                <a href="tel:+64226461700">+64-22646-1700</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="6" y="12" width="38" height="26" rx="3" stroke="currentColor" stroke-width="2.5"/>
                                    <path d="M6 17L25 28L44 17" stroke="#00ff88" stroke-width="2.5" stroke-linecap="round"/>
                                </svg>
                            </div>
                            <div class="contact-details">
                                <a href="mailto:sales@kiwibridge.nz">sales@kiwibridge.nz</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
get_footer();
