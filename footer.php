    <footer class="footer">
        <div class="container">
        <div class="row align-items-start">
            
            <!-- Left Column -->
            <div class="col-md-7">
                <div class="footer-logo">
                    <img src="<?php echo bloginfo('template_url'); ?>/public/images/KiwiBridgeLogo.png" alt="Kiwi Bridge Logo">
                </div>
                <p class="footer-description">Helping Kiwi businesses scale smarter with affordable, flexible virtual support.</p>
                <hr>
                <div class="footer-links d-flex">
                    <a href="<?php echo site_url(''); ?>">Home</a>
                    <a href="<?php echo site_url('about-us'); ?>">About</a>
                    <a href="<?php echo site_url('services'); ?>">Services</a>
                    <a href="<?php echo site_url('contact'); ?>">Contact</a>
                </div>
                <hr>
            </div>

            <div class="col-md-1"></div>
            <div class="col-md-4 footer-contact-col">
            <div class="footer-contact">
                <p><i class="bi bi-geo-alt"></i> Level 1, 7 Earl Richardson Avenue, <br />Wiri, Manukau 2104</p>
                <p><i class="bi bi-envelope"></i> <a href="mailto:sales@kiwibridge.nz">sales@kiwibridge.nz</a></p>
                <p><i class="bi bi-telephone"></i> <a href="tel:+64 226461700">+64 226461700</a></p>
            </div>
            <div class="social-icons">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
            </div>

        </div>
        </div>
        
        <!-- Footer Bottom -->
        <div class="footer-bottom">
        <p>Copyright © <?php echo date('Y'); ?> KiwiBridge | Proudly New Zealand Owned. All Rights Reserved.</p>
        </div>
    </footer>
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="<?php echo bloginfo('template_url'); ?>/public/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/public/js/script.js"></script>
    
    <?php wp_footer(); ?>
</body>
</html>