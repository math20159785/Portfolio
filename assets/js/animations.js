// Advanced Animations JavaScript
class PortfolioAnimations {
    constructor() {
        this.init();
    }

    init() {
        this.setupHomeAnimations();
        this.setupParticleEffect();
        this.setupScrollEffects();
        this.setupHoverAnimations();
    }

    // Home Section Animations
    setupHomeAnimations() {
        const homeTitle = document.querySelector('.home-title');
        const homeSubtitle = document.querySelector('.home-subtitle');
        const homeButtons = document.querySelector('.home-buttons');

        if (homeTitle) {
            setTimeout(() => {
                homeTitle.style.animation = 'fadeInUp 1s ease forwards';
            }, 500);
        }

        if (homeSubtitle) {
            setTimeout(() => {
                homeSubtitle.style.animation = 'fadeInUp 1s ease 0.3s forwards';
            }, 800);
        }

        if (homeButtons) {
            setTimeout(() => {
                homeButtons.style.animation = 'fadeInUp 1s ease 0.6s forwards';
            }, 1100);
        }
    }

    // Particle Background Effect
    setupParticleEffect() {
        const homeSection = document.querySelector('.home');
        if (!homeSection) return;

        const particlesContainer = document.createElement('div');
        particlesContainer.className = 'particles';
        homeSection.appendChild(particlesContainer);

        // Create particles
        for (let i = 0; i < 15; i++) {
            this.createParticle(particlesContainer);
        }
    }

    createParticle(container) {
        const particle = document.createElement('div');
        particle.className = 'particle';
        
        // Random properties
        const size = Math.random() * 6 + 2;
        const posX = Math.random() * 100;
        const posY = Math.random() * 100;
        const delay = Math.random() * 5;
        const duration = Math.random() * 10 + 10;
        
        particle.style.cssText = `
            width: ${size}px;
            height: ${size}px;
            left: ${posX}%;
            top: ${posY}%;
            opacity: ${Math.random() * 0.5 + 0.2};
            animation-delay: ${delay}s;
            animation-duration: ${duration}s;
        `;
        
        container.appendChild(particle);
    }

    // Scroll-based Animations
    setupScrollEffects() {
        // Parallax effect for home background
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const homeSection = document.querySelector('.home');
            
            if (homeSection) {
                homeSection.style.transform = `translateY(${scrolled * 0.5}px)`;
            }
        });

        // Animate elements on scroll
        this.animateOnScroll();
    }

    animateOnScroll() {
        const animatedElements = document.querySelectorAll('.animated');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const element = entry.target;
                    const animationClass = element.getAttribute('data-animation');
                    
                    if (animationClass) {
                        element.classList.add(animationClass);
                    }
                    
                    observer.unobserve(element);
                }
            });
        }, { threshold: 0.1 });

        animatedElements.forEach(element => {
            observer.observe(element);
        });
    }

    // Hover Animations
    setupHoverAnimations() {
        // Add hover effects to portfolio items
        const portfolioItems = document.querySelectorAll('.portfolio-item');
        
        portfolioItems.forEach(item => {
            item.addEventListener('mouseenter', () => {
                item.classList.add('hover-lift', 'hover-glow');
            });
            
            item.addEventListener('mouseleave', () => {
                item.classList.remove('hover-lift', 'hover-glow');
            });
        });

        // Button hover effects
        const buttons = document.querySelectorAll('.btn');
        buttons.forEach(button => {
            button.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-3px) scale(1.05)';
            });
            
            button.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });
    }

    // Typewriter Effect
    typewriter(element, text, speed = 100) {
        let i = 0;
        element.innerHTML = '';
        
        function type() {
            if (i < text.length) {
                element.innerHTML += text.charAt(i);
                i++;
                setTimeout(type, speed);
            }
        }
        
        type();
    }

    // Counter Animation
    animateCounter(element, target, duration = 2000) {
        let start = 0;
        const increment = target / (duration / 16);
        
        function updateCounter() {
            start += increment;
            if (start < target) {
                element.textContent = Math.floor(start);
                requestAnimationFrame(updateCounter);
            } else {
                element.textContent = target;
            }
        }
        
        updateCounter();
    }
}

// Initialize animations
document.addEventListener('DOMContentLoaded', () => {
    new PortfolioAnimations();
});