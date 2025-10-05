<?php
/**
 * Template for displaying single service posts
 */

get_header(); ?>

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

<section class="service-main-content">
    <div class="container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="service-content">
                                <div class="entry-content">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>