/**
 * Flyers Choice Theme Custom JavaScript
 */

(function($) {
    'use strict';

    $(document).ready(function() {
        
        // Smooth scrolling for anchor links
        $('a[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top - 70
                    }, 1000);
                    return false;
                }
            }
        });

        // Navbar background change on scroll
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 100) {
                $('.navbar').addClass('navbar-scrolled');
            } else {
                $('.navbar').removeClass('navbar-scrolled');
            }
        });

        // Counter animation for statistics
        function animateCounters() {
            $('.stat-number').each(function() {
                var $this = $(this);
                var countTo = $this.text().replace(/[^\d]/g, ''); // Extract numbers only
                var suffix = $this.text().replace(/[\d]/g, ''); // Extract non-numbers (like K, +)
                
                $({ countNum: 0 }).animate({
                    countNum: countTo
                }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function() {
                        $this.text(Math.floor(this.countNum) + suffix);
                    },
                    complete: function() {
                        $this.text(countTo + suffix);
                    }
                });
            });
        }

        // Trigger counter animation when stats section is visible
        var hasAnimated = false;
        $(window).scroll(function() {
            var statsSection = $('.stats-section');
            if (statsSection.length) {
                var elementTop = statsSection.offset().top;
                var elementBottom = elementTop + statsSection.outerHeight();
                var viewportTop = $(window).scrollTop();
                var viewportBottom = viewportTop + $(window).height();
                
                if (elementBottom > viewportTop && elementTop < viewportBottom && !hasAnimated) {
                    animateCounters();
                    hasAnimated = true;
                }
            }
        });

        // Mobile menu close on link click
        $('.navbar-nav .nav-link').on('click', function() {
            if ($(window).width() < 992) {
                $('.navbar-collapse').collapse('hide');
            }
        });

        // Add loading animation
        $(window).on('load', function() {
            $('body').addClass('loaded');
        });

        // Parallax effect for hero section (optional)
        $(window).scroll(function() {
            var scrollTop = $(this).scrollTop();
            var parallax = $('.geometric-bg');
            var speed = 0.5;
            
            if (parallax.length) {
                var yPos = -(scrollTop * speed);
                parallax.css('transform', 'translate3d(0, ' + yPos + 'px, 0)');
            }
        });

        // Button hover effects
        $('.btn').hover(
            function() {
                $(this).addClass('btn-hover');
            },
            function() {
                $(this).removeClass('btn-hover');
            }
        );

        // Consultants section animations
        var consultantsAnimated = false;
        $(window).scroll(function() {
            var consultantsSection = $('.consultants-section');
            if (consultantsSection.length) {
                var elementTop = consultantsSection.offset().top;
                var elementBottom = elementTop + consultantsSection.outerHeight();
                var viewportTop = $(window).scrollTop();
                var viewportBottom = viewportTop + $(window).height();
                
                if (elementBottom > viewportTop && elementTop < viewportBottom && !consultantsAnimated) {
                    // Animate stat boxes
                    $('.consultants-section .stat-value').each(function() {
                        var $this = $(this);
                        var countTo = parseInt($this.text());
                        
                        $({countNum: 0}).animate({countNum: countTo}, {
                            duration: 2000,
                            easing: 'swing',
                            step: function() {
                                var num = Math.floor(this.countNum);
                                var html = num + '<span class="plus">+</span>';
                                $this.html(html);
                            },
                            complete: function() {
                                var html = countTo + '<span class="plus">+</span>';
                                $this.html(html);
                            }
                        });
                    });
                    
                    // Add entrance animations
                    $('.hexagon').each(function(index) {
                        var $this = $(this);
                        setTimeout(function() {
                            $this.addClass('animated');
                        }, index * 200);
                    });
                    
                    consultantsAnimated = true;
                }
            }
        });

        // Hexagon hover effect enhancement
        $('.hexagon').hover(
            function() {
                $('.hexagon').not(this).css('opacity', '0.7');
            },
            function() {
                $('.hexagon').css('opacity', '1');
            }
        );

    });

})(jQuery);