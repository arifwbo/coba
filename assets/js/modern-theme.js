/**
 * Modern Theme Interactive JavaScript
 * SMPN 4 Samarinda Modern Blue Theme
 * 
 * Features:
 * - Smooth scroll for anchor links
 * - Fade in cards on viewport entry (IntersectionObserver)
 * - Ripple effect for buttons
 * - Floating button pulse animation
 */

(function() {
    'use strict';

    // Wait for DOM to be fully loaded
    document.addEventListener('DOMContentLoaded', function() {
        
        // Initialize all animations
        initSmoothScroll();
        initCardFadeIn();
        initRippleEffect();
        initFloatingButtonAnimation();
        
        console.log('Modern Theme JavaScript initialized');
    });

    /**
     * 1. Smooth Scroll for Anchor Links
     */
    function initSmoothScroll() {
        // Add smooth scroll behavior to all anchor links
        const anchors = document.querySelectorAll('a[href^="#"]');
        
        anchors.forEach(function(anchor) {
            anchor.addEventListener('click', function(e) {
                const targetId = this.getAttribute('href');
                
                // Skip if it's just a hash
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    e.preventDefault();
                    
                    // Calculate offset for fixed header
                    const headerHeight = document.querySelector('.sticky')?.offsetHeight || 0;
                    const targetPosition = targetElement.offsetTop - headerHeight - 20;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    /**
     * 2. Fade In Cards with IntersectionObserver
     */
    function initCardFadeIn() {
        // Create intersection observer for fade-in animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    // Add fade-in class with a slight delay for staggered effect
                    setTimeout(function() {
                        entry.target.classList.add('fade-in');
                    }, 100);
                    
                    // Stop observing this element
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observe all cards and elements that should fade in
        const elementsToAnimate = document.querySelectorAll('.card, .quote, .carousel-item');
        elementsToAnimate.forEach(function(element) {
            observer.observe(element);
        });
    }

    /**
     * 3. Ripple Effect for Buttons
     */
    function initRippleEffect() {
        // Add ripple effect to buttons
        const buttons = document.querySelectorAll('.btn-primary, .action-button, .btn');
        
        buttons.forEach(function(button) {
            // Add ripple class
            button.classList.add('btn-ripple');
            
            button.addEventListener('click', function(e) {
                createRipple(e, this);
            });
        });
    }

    function createRipple(event, button) {
        // Remove existing ripple
        const existingRipple = button.querySelector('.ripple');
        if (existingRipple) {
            existingRipple.remove();
        }

        // Create ripple element
        const ripple = document.createElement('span');
        ripple.classList.add('ripple');
        
        // Calculate ripple size and position
        const rect = button.getBoundingClientRect();
        const size = Math.max(rect.width, rect.height);
        const x = event.clientX - rect.left - size / 2;
        const y = event.clientY - rect.top - size / 2;
        
        // Style the ripple
        ripple.style.cssText = `
            position: absolute;
            width: ${size}px;
            height: ${size}px;
            left: ${x}px;
            top: ${y}px;
            background: rgba(255, 255, 255, 0.4);
            border-radius: 50%;
            transform: scale(0);
            animation: ripple-animation 0.6s linear;
            pointer-events: none;
            z-index: 1;
        `;
        
        // Add ripple to button
        button.style.position = 'relative';
        button.style.overflow = 'hidden';
        button.appendChild(ripple);
        
        // Remove ripple after animation
        setTimeout(function() {
            ripple.remove();
        }, 600);
    }

    /**
     * 4. Floating Button Pulse Animation
     */
    function initFloatingButtonAnimation() {
        const floatingButtons = document.querySelectorAll('#return-to-top, .floating-btn');
        
        floatingButtons.forEach(function(button) {
            // Add hover listeners for enhanced pulse effect
            button.addEventListener('mouseenter', function() {
                this.style.animationPlayState = 'paused';
                this.style.transform = 'scale(1.15)';
            });
            
            button.addEventListener('mouseleave', function() {
                this.style.animationPlayState = 'running';
                this.style.transform = 'scale(1)';
            });
        });
        
        // Enhanced return to top functionality
        const returnToTop = document.getElementById('return-to-top');
        if (returnToTop) {
            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 300) {
                    returnToTop.style.display = 'block';
                    setTimeout(function() {
                        returnToTop.style.opacity = '0.8';
                    }, 10);
                } else {
                    returnToTop.style.opacity = '0';
                    setTimeout(function() {
                        returnToTop.style.display = 'none';
                    }, 300);
                }
            });
            
            returnToTop.addEventListener('click', function(e) {
                e.preventDefault();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        }
    }

    /**
     * Add CSS animations dynamically
     */
    function addCustomAnimations() {
        const style = document.createElement('style');
        style.textContent = `
            @keyframes ripple-animation {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
            
            .card {
                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            }
            
            .card.fade-in {
                animation: fadeInUp 0.6s ease-out forwards;
            }
            
            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(30px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
            
            /* Enhanced hover effects for interactive elements */
            .list-group-item:hover,
            .card:hover {
                transform: translateY(-2px);
                box-shadow: 0 4px 12px rgba(13, 71, 161, 0.15);
            }
            
            /* Menu item animations */
            .sm-clean a {
                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            }
            
            .sm-clean a:hover {
                transform: translateY(-1px);
            }
        `;
        document.head.appendChild(style);
    }

    // Add custom animations when script loads
    addCustomAnimations();

})();