/*!
 * Modern Theme JavaScript for CMS Sekolahku
 * Version: 1.0.0
 */

(function() {
    'use strict';

    // Initialize the modern theme
    const ModernTheme = {
        
        // Initialize all components
        init: function() {
            this.setupDarkMode();
            this.setupSidebar();
            this.setupDropdowns();
            this.setupTooltips();
            this.setupReturnToTop();
            this.setupAnimations();
        },

        // Dark Mode functionality
        setupDarkMode: function() {
            const darkModeToggle = document.getElementById('darkModeToggle');
            const body = document.body;
            
            if (!darkModeToggle) return;
            
            const icon = darkModeToggle.querySelector('i');
            
            // Check for saved dark mode preference
            const savedTheme = localStorage.getItem('theme') || 'light';
            body.setAttribute('data-theme', savedTheme);
            this.updateDarkModeIcon(savedTheme, icon);
            
            darkModeToggle.addEventListener('click', () => {
                const currentTheme = body.getAttribute('data-theme');
                const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
                
                body.setAttribute('data-theme', newTheme);
                localStorage.setItem('theme', newTheme);
                this.updateDarkModeIcon(newTheme, icon);
            });
        },

        updateDarkModeIcon: function(theme, icon) {
            if (!icon) return;
            
            if (theme === 'dark') {
                icon.className = 'bi bi-sun-fill';
            } else {
                icon.className = 'bi bi-moon-fill';
            }
        },

        // Sidebar functionality
        setupSidebar: function() {
            const sidebarToggle = document.getElementById('sidebarToggle');
            const modernSidebar = document.getElementById('modernSidebar');
            const modernContent = document.getElementById('modernContent');
            const modernFooter = document.getElementById('modernFooter');
            
            if (!sidebarToggle || !modernSidebar) return;
            
            sidebarToggle.addEventListener('click', () => {
                if (window.innerWidth <= 1024) {
                    modernSidebar.classList.toggle('open');
                } else {
                    modernSidebar.classList.toggle('collapsed');
                    if (modernContent) modernContent.classList.toggle('expanded');
                    if (modernFooter) modernFooter.classList.toggle('expanded');
                }
            });
            
            // Close sidebar on mobile when clicking outside
            document.addEventListener('click', (e) => {
                if (window.innerWidth <= 1024 && 
                    modernSidebar.classList.contains('open') &&
                    !modernSidebar.contains(e.target) && 
                    !sidebarToggle.contains(e.target)) {
                    modernSidebar.classList.remove('open');
                }
            });
            
            // Handle window resize
            window.addEventListener('resize', () => {
                if (window.innerWidth > 1024) {
                    modernSidebar.classList.remove('open');
                }
            });
        },

        // Dropdown functionality
        setupDropdowns: function() {
            const dropdowns = document.querySelectorAll('.modern-dropdown');
            
            dropdowns.forEach(dropdown => {
                const menu = dropdown.querySelector('.modern-dropdown-menu');
                if (!menu) return;
                
                dropdown.addEventListener('mouseenter', () => {
                    menu.style.opacity = '1';
                    menu.style.visibility = 'visible';
                    menu.style.transform = 'translateY(0)';
                });
                
                dropdown.addEventListener('mouseleave', () => {
                    menu.style.opacity = '0';
                    menu.style.visibility = 'hidden';
                    menu.style.transform = 'translateY(-10px)';
                });
            });
        },

        // Bootstrap tooltips
        setupTooltips: function() {
            // Initialize Bootstrap tooltips if available
            if (typeof bootstrap !== 'undefined' && bootstrap.Tooltip) {
                const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
                tooltipTriggerList.map(function(tooltipTriggerEl) {
                    return new bootstrap.Tooltip(tooltipTriggerEl);
                });
            }
        },

        // Return to top button
        setupReturnToTop: function() {
            const returnToTop = document.getElementById('return-to-top');
            if (!returnToTop) return;
            
            window.addEventListener('scroll', () => {
                if (window.pageYOffset > 300) {
                    returnToTop.style.display = 'block';
                } else {
                    returnToTop.style.display = 'none';
                }
            });
            
            returnToTop.addEventListener('click', (e) => {
                e.preventDefault();
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        },

        // Smooth animations
        setupAnimations: function() {
            // Add loading animation for buttons
            const buttons = document.querySelectorAll('.modern-btn');
            
            buttons.forEach(button => {
                button.addEventListener('click', function() {
                    if (!this.classList.contains('loading')) {
                        this.classList.add('loading');
                        
                        setTimeout(() => {
                            this.classList.remove('loading');
                        }, 2000);
                    }
                });
            });
            
            // Animate cards on scroll
            this.setupScrollAnimations();
        },

        // Scroll animations
        setupScrollAnimations: function() {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);
            
            // Observe cards and info boxes
            const animatedElements = document.querySelectorAll('.modern-card, .modern-info-box');
            animatedElements.forEach((el, index) => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';
                el.style.transition = `opacity 0.6s ease ${index * 0.1}s, transform 0.6s ease ${index * 0.1}s`;
                observer.observe(el);
            });
        },

        // Utility functions
        utils: {
            // Show toast notification
            showToast: function(message, type = 'info') {
                // Create toast element
                const toast = document.createElement('div');
                toast.className = `alert alert-${type} alert-dismissible fade show position-fixed`;
                toast.style.cssText = 'top: 20px; right: 20px; z-index: 9999; min-width: 300px;';
                toast.innerHTML = `
                    ${message}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                `;
                
                document.body.appendChild(toast);
                
                // Auto-remove after 5 seconds
                setTimeout(() => {
                    if (toast.parentNode) {
                        toast.parentNode.removeChild(toast);
                    }
                }, 5000);
            },

            // Loading state for elements
            setLoading: function(element, loading = true) {
                if (loading) {
                    element.classList.add('loading');
                    element.disabled = true;
                    
                    const originalText = element.textContent;
                    element.setAttribute('data-original-text', originalText);
                    element.innerHTML = '<span class="modern-loading"></span> Loading...';
                } else {
                    element.classList.remove('loading');
                    element.disabled = false;
                    
                    const originalText = element.getAttribute('data-original-text');
                    if (originalText) {
                        element.textContent = originalText;
                        element.removeAttribute('data-original-text');
                    }
                }
            },

            // Smooth scroll to element
            scrollTo: function(element, offset = 0) {
                const elementPosition = element.offsetTop - offset;
                window.scrollTo({
                    top: elementPosition,
                    behavior: 'smooth'
                });
            }
        }
    };

    // Legacy compatibility
    window.ModernTheme = ModernTheme;

    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', () => {
            ModernTheme.init();
        });
    } else {
        ModernTheme.init();
    }

    // Expose utils globally for backward compatibility
    window.modernUtils = ModernTheme.utils;

})();