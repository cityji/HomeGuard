<link rel="preload" href="https://cdnjs.cl0oudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" as="style">
<link rel="preload" href="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js" as="script">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/CustomEase.min.js"></script>


<script src="https://cdn.tailwindcss.com"></script>


<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    primary: {
                        DEFAULT: '#0056b3', // Main Blue
                        light: '#007bff', // Lighter Blue for hover
                        dark: '#003580', // Darker Blue
                    },
                    secondary: {
                        DEFAULT: '#ffcc00', // Golden Yellow
                        light: '#ffe066', // Lighter Yellow
                        dark: '#b38f00', // Darker Yellow
                    },
                    neutral: {
                        light: '#f8f9fa', // Light Gray Background
                        DEFAULT: '#e9ecef', // Default Neutral Gray
                        dark: '#212529', // Dark Gray Background
                    },
                    text: {
                        primary: '#212529', // Dark Gray Text
                        secondary: '#6c757d', // Muted Gray Text
                        white: '#ffffff', // White Text
                    },
                    status: {
                        success: '#28a745', // Green
                        warning: '#ffc107', // Yellow
                        danger: '#dc3545', // Red
                        info: '#17a2b8', // Teal
                    },
                },
                animation: {
                    'slide-in-left': 'slideInLeft 0.8s ease-out',
                    'slide-in-right': 'slideInRight 0.8s ease-out',
                    'fade-in': 'fadeIn 0.8s ease-out',
                    'float': 'float 6s ease-in-out infinite',
                    'bounce-subtle': 'bounceSubtle 2s ease-in-out infinite',
                    'scale-up': 'scaleUp 0.5s ease-out',
                    'rotate-in': 'rotateIn 0.6s ease-out',
                    'blur-in': 'blurIn 0.8s ease-out',
                    'swing': 'swing 2s ease-in-out infinite',
                    'shake': 'shake 0.5s ease-in-out',
                    'pulse-ring': 'pulseRing 1.25s cubic-bezier(0.215, 0.61, 0.355, 1) infinite',
                    'fade-in': 'fadeIn 0.6s cubic-bezier(0.4, 0, 0.2, 1)',
                    'slide-up': 'slideUp 0.6s cubic-bezier(0.4, 0, 0.2, 1)',
                    'scale-in': 'scaleIn 0.4s cubic-bezier(0.4, 0, 0.2, 1)',
                    'blur-in': 'blurIn 0.5s cubic-bezier(0.4, 0, 0.2, 1)',
                },
                keyframes: {
                    slideInLeft: {
                        '0%': { opacity: '0', transform: 'translateX(-100%)' },
                        '100%': { opacity: '1', transform: 'translateX(0)' }
                    },
                    slideInRight: {
                        '0%': { opacity: '0', transform: 'translateX(100%)' },
                        '100%': { opacity: '1', transform: 'translateX(0)' }
                    },
                    fadeIn: {
                        '0%': { opacity: '0' },
                        '100%': { opacity: '1' }
                    },
                    float: {
                        '0%, 100%': { transform: 'translateY(0)' },
                        '50%': { transform: 'translateY(-20px)' }
                    },
                    bounceSubtle: {
                        '0%, 100%': { transform: 'translateY(-5px)' },
                        '50%': { transform: 'translateY(5px)' }
                    },
                    scaleUp: {
                        '0%': { transform: 'scale(0.8)', opacity: '0' },
                        '100%': { transform: 'scale(1)', opacity: '1' }
                    },
                    rotateIn: {
                        '0%': { transform: 'rotate(-180deg) scale(0)', opacity: '0' },
                        '100%': { transform: 'rotate(0) scale(1)', opacity: '1' }
                    },
                    blurIn: {
                        '0%': { filter: 'blur(20px)', opacity: '0' },
                        '100%': { filter: 'blur(0)', opacity: '1' }
                    },
                    swing: {
                        '0%, 100%': { transform: 'rotate(-3deg)' },
                        '50%': { transform: 'rotate(3deg)' }
                    },
                    shake: {
                        '0%, 100%': { transform: 'translateX(0)' },
                        '10%, 30%, 50%, 70%, 90%': { transform: 'translateX(-5px)' },
                        '20%, 40%, 60%, 80%': { transform: 'translateX(5px)' }
                    },
                    pulseRing: {
                        '0%': { transform: 'scale(0.33)' },
                        '80%, 100%': { opacity: '0' }
                    }
                }
            }
        }
    }
</script>

<style>
    * {
        scroll-behavior: smooth;
    }

    .section-padding {
        padding: 4rem 0;
    }

    .container-padding {
        padding-left: 1.5rem;
        padding-right: 1.5rem;
    }


    .cursor-glow {
        position: fixed;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        pointer-events: none;
        z-index: 9999;
        transition: transform 0.2s ease;
        mix-blend-mode: difference;
    }


    .interactive-bg {
        position: relative;
        overflow: hidden;
    }

    .interactive-bg::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle at center,
                rgba(255, 255, 255, 0.1) 0%,
                rgba(255, 255, 255, 0) 70%);
        transform: translate(-50%, -50%);
        pointer-events: none;
    }


    html {
        scroll-behavior: smooth;
    }


    .magnetic {
        transition: transform 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    @media (min-width: 768px) {
        .section-padding {
            padding: 6rem 0;
        }

        .container-padding {
            padding-left: 2rem;
            padding-right: 2rem;
        }
    }

    /* Text reveal effect */
    .text-reveal {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.8s ease, transform 0.8s ease;
    }

    .text-reveal.visible {
        opacity: 1;
        transform: translateY(0);
    }

    .smooth-transition {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* Refined Cursor Effects */
    .cursor-dot {
        width: 8px;
        height: 8px;
        background: rgba(255, 255, 255, 0.8);
        position: fixed;
        border-radius: 50%;
        pointer-events: none;
        z-index: 9999;
        transition: transform 0.1s ease;
    }

    .cursor-ring {
        width: 24px;
        height: 24px;
        border: 2px solid rgba(255, 255, 255, 0.4);
        position: fixed;
        border-radius: 50%;
        pointer-events: none;
        z-index: 9998;
        transition: all 0.15s ease;
    }

    /* Magnetic Effect */
    .magnetic-target {
        transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* Parallax Container */
    .parallax-container {
        overflow: hidden;
        position: relative;
    }

    /* Smooth Scroll Reveal */
    .scroll-reveal {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.6s cubic-bezier(0.4, 0, 0.2, 1),
            transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .scroll-reveal.visible {
        opacity: 1;
        transform: translateY(0);
    }

    @keyframes scaleIn {
        from {
            transform: scale(0.95);
            opacity: 0;
        }

        to {
            transform: scale(1);
            opacity: 1;
        }
    }

    @keyframes blurIn {
        from {
            filter: blur(8px);
            opacity: 0;
        }

        to {
            filter: blur(0);
            opacity: 1;
        }
    }
</style>


<script>
    // Initialize GSAP
    gsap.registerPlugin(ScrollTrigger, CustomEase);

    // Custom ease for smoother animations
    CustomEase.create("smoothOut", "0.7, 0, 0.3, 1");

    // Cursor glow effect
    function initCursorEffect() {
        const cursor = document.createElement('div');
        cursor.className = 'cursor-glow';
        document.body.appendChild(cursor);

        document.addEventListener('mousemove', (e) => {
            gsap.to(cursor, {
                x: e.clientX - 10,
                y: e.clientY - 10,
                duration: 0.2,
                ease: "smoothOut"
            });
        });
    }

    // Magnetic effect for elements
    function initMagneticEffect() {
        document.querySelectorAll('.magnetic').forEach(element => {
            element.addEventListener('mousemove', (e) => {
                const bound = element.getBoundingClientRect();
                const mouseX = e.clientX - bound.left - bound.width / 2;
                const mouseY = e.clientY - bound.top - bound.height / 2;

                gsap.to(element, {
                    x: mouseX * 0.3,
                    y: mouseY * 0.3,
                    duration: 0.3,
                    ease: "smoothOut"
                });
            });

            element.addEventListener('mouseleave', () => {
                gsap.to(element, {
                    x: 0,
                    y: 0,
                    duration: 0.3,
                    ease: "smoothOut"
                });
            });
        });
    }

    // Parallax scrolling effect
    function initParallaxEffects() {
        gsap.utils.toArray('[data-parallax]').forEach(element => {
            const depth = element.getAttribute('data-parallax');
            gsap.to(element, {
                y: (i, target) => -ScrollTrigger.maxScroll(window) * target.getAttribute('data-parallax'),
                ease: "none",
                scrollTrigger: {
                    trigger: element,
                    start: "top top",
                    end: "max",
                    invalidateOnRefresh: true,
                    scrub: true
                }
            });
        });
    }

    // Text reveal on scroll
    function initTextReveal() {
        const textElements = document.querySelectorAll('.text-reveal');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.1 });

        textElements.forEach(element => observer.observe(element));
    }

    // Interactive background effect
    function initInteractiveBackground() {
        document.querySelectorAll('.interactive-bg').forEach(bg => {
            bg.addEventListener('mousemove', (e) => {
                const rect = bg.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;

                gsap.to(bg.querySelector('::before'), {
                    x: x,
                    y: y,
                    duration: 0.6,
                    ease: "smoothOut"
                });
            });
        });
    }

    // Initialize all effects
    document.addEventListener('DOMContentLoaded', () => {
        initCursorEffect();
        initMagneticEffect();
        initParallaxEffects();
        initTextReveal();
        initInteractiveBackground();

        // Smooth scroll initialization
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    gsap.to(window, {
                        duration: 1,
                        scrollTo: target,
                        ease: "smoothOut"
                    });
                }
            });
        });
    });
</script>


<!-- cursor events and animations -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Advanced Cursor Effect
        const cursorDot = document.createElement('div');
        const cursorRing = document.createElement('div');
        cursorDot.className = 'cursor-dot';
        cursorRing.className = 'cursor-ring';
        document.body.appendChild(cursorDot);
        document.body.appendChild(cursorRing);

        let mousePos = { x: 0, y: 0 };
        let ringPos = { x: 0, y: 0 };

        window.addEventListener('mousemove', (e) => {
            mousePos.x = e.clientX;
            mousePos.y = e.clientY;

            cursorDot.style.transform = `translate(${mousePos.x - 4}px, ${mousePos.y - 4}px)`;
        });

        // Smooth ring follow animation
        function updateRing() {
            ringPos.x += (mousePos.x - ringPos.x - 12) * 0.2;
            ringPos.y += (mousePos.y - ringPos.y - 12) * 0.2;

            cursorRing.style.transform = `translate(${ringPos.x}px, ${ringPos.y}px)`;
            requestAnimationFrame(updateRing);
        }
        updateRing();

        // Enhanced Magnetic Effect
        document.querySelectorAll('.magnetic-target').forEach(target => {
            let strength = target.dataset.magneticStrength || 0.3;
            let rect = target.getBoundingClientRect();
            let distanceThreshold = 100;

            target.addEventListener('mousemove', (e) => {
                const centerX = rect.left + rect.width / 2;
                const centerY = rect.top + rect.height / 2;
                const distance = Math.hypot(e.clientX - centerX, e.clientY - centerY);

                if (distance < distanceThreshold) {
                    const x = (e.clientX - centerX) * strength;
                    const y = (e.clientY - centerY) * strength;
                    target.style.transform = `translate(${x}px, ${y}px)`;
                    cursorRing.style.transform = `translate(${mousePos.x - 12}px, ${mousePos.y - 12}px) scale(1.5)`;
                }
            });

            target.addEventListener('mouseleave', () => {
                target.style.transform = 'translate(0, 0)';
                cursorRing.style.transform = `translate(${mousePos.x - 12}px, ${mousePos.y - 12}px) scale(1)`;
            });
        });

        // Smooth Scroll Reveal with Intersection Observer
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const scrollObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    if (entry.target.dataset.delay) {
                        entry.target.style.transitionDelay = `${entry.target.dataset.delay}ms`;
                    }
                }
            });
        }, observerOptions);

        document.querySelectorAll('.scroll-reveal').forEach(element => {
            scrollObserver.observe(element);
        });

        // Advanced Parallax Effect
        const parallaxElements = document.querySelectorAll('[data-parallax]');

        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;

            parallaxElements.forEach(element => {
                const speed = element.dataset.parallax || 0.5;
                const offset = -scrolled * speed;
                element.style.transform = `translateY(${offset}px)`;
            });
        });
    });
</script>
