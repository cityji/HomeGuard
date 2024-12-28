<!-- hero section -->
    <section 
        class="min-h-screen relative overflow-hidden bg-neutral-light"
        x-data="{ shown: false }"
        x-intersect="shown = true; gsap.to('.hero1-img', { scale: 1, opacity: 1, duration: 1.2, ease: 'power2.out' })"
    >
        <div class="container mx-auto px-4 py-16 flex flex-col lg:flex-row items-center gap-12">
            <div class="w-full lg:w-1/2 space-y-6">
                <h1 
                    class="text-4xl md:text-5xl lg:text-6xl font-bold text-text-primary"
                    x-show="shown"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 transform -translate-x-12"
                    x-transition:enter-end="opacity-100 transform translate-x-0"
                >
                    Protecting Communities Together
                </h1>
                <p 
                    class="text-lg text-text-secondary"
                    x-show="shown"
                    x-transition:enter="transition ease-out duration-500 delay-300"
                    x-transition:enter-start="opacity-0 transform -translate-x-12"
                    x-transition:enter-end="opacity-100 transform translate-x-0"
                >
                    Join our dedicated team of civil defence volunteers and make a difference in your community's safety and preparedness.
                </p>
                <div 
                    class="flex gap-4"
                    x-show="shown"
                    x-transition:enter="transition ease-out duration-500 delay-500"
                    x-transition:enter-start="opacity-0 transform -translate-y-12"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                >
                    <button class="px-6 py-3 bg-primary hover:bg-primary-light text-white rounded-lg transition-colors">
                        Join Now
                    </button>
                    <button class="px-6 py-3 border-2 border-primary text-primary hover:bg-primary hover:text-white rounded-lg transition-colors">
                        Learn More
                    </button>
                </div>
            </div>
            <div class="w-full lg:w-1/2">
                <img 
                    src="/api/placeholder/800/600" 
                    alt="Civil Defence Team" 
                    class="hero1-img w-full h-auto rounded-lg shadow-xl opacity-0 scale-95"
                >
            </div>
        </div>
        <div class="absolute -z-10 top-0 right-0 w-1/2 h-full bg-secondary opacity-10 transform skew-x-12"></div>
    </section>

    <section 
        class="min-h-screen relative overflow-hidden"
        x-data="{ shown: false }"
        x-intersect="shown = true"
    >
        <div class="absolute inset-0 bg-neutral-dark bg-opacity-60 z-10"></div>
        <video class="absolute inset-0 w-full h-full object-cover" autoplay loop muted playsinline>
            <source src="your-video-source.mp4" type="video/mp4">
        </video>
        <div class="relative z-20 container mx-auto px-4 py-24 text-center">
            <h1 
                class="text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-8"
                x-show="shown"
                x-transition:enter="transition ease-out duration-1000"
                x-transition:enter-start="opacity-0 transform -translate-y-12"
                x-transition:enter-end="opacity-100 transform translate-y-0"
            >
                Ready to Serve
            </h1>
            <p 
                class="text-xl text-white max-w-3xl mx-auto mb-12"
                x-show="shown"
                x-transition:enter="transition ease-out duration-1000 delay-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
            >
                24/7 Emergency Response | Community Training | Disaster Preparedness
            </p>
            <div 
                class="flex justify-center gap-6"
                x-show="shown"
                x-transition:enter="transition ease-out duration-1000 delay-500"
                x-transition:enter-start="opacity-0 transform translate-y-12"
                x-transition:enter-end="opacity-100 transform translate-y-0"
            >
                <button class="px-8 py-4 bg-secondary hover:bg-secondary-light text-neutral-dark font-bold rounded-lg transition-colors">
                    Emergency Contact
                </button>
                <button class="px-8 py-4 bg-primary hover:bg-primary-light text-white font-bold rounded-lg transition-colors">
                    Volunteer Program
                </button>
            </div>
        </div>
    </section>


    <section 
        class="min-h-screen bg-neutral-light py-16"
        x-data="{ 
            shown: false,
            activeFeature: 1,
            features: [
                { id: 1, title: 'Emergency Response', icon: 'fa-solid fa-truck-medical' },
                { id: 2, title: 'Training Programs', icon: 'fa-solid fa-graduation-cap' },
                { id: 3, title: 'Community Safety', icon: 'fa-solid fa-shield-heart' }
            ]
        }"
        x-intersect="shown = true; gsap.from('.feature-card', { 
            y: 100, 
            opacity: 0, 
            duration: 0.8, 
            stagger: 0.2, 
            ease: 'power2.out' 
        })"
    >
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h1 
                    class="text-4xl md:text-5xl font-bold text-text-primary mb-6"
                    x-show="shown"
                    x-transition:enter="transition ease-out duration-700"
                    x-transition:enter-start="opacity-0 transform -translate-y-12"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                >
                    Our Core Services
                </h1>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <template x-for="feature in features" :key="feature.id">
                    <div 
                        class="feature-card bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300"
                        :class="{ 'border-2 border-primary': activeFeature === feature.id }"
                        @mouseenter="activeFeature = feature.id"
                    >
                        <i 
                            :class="feature.icon + ' text-4xl text-primary mb-6'"
                            x-transition:enter="transition ease-out duration-300"
                        ></i>
                        <h3 
                            class="text-2xl font-bold text-text-primary mb-4"
                            x-text="feature.title"
                        ></h3>
                        <p class="text-text-secondary">
                            Click to learn more about our essential services and how we protect our community.
                        </p>
                    </div>
                </template>
            </div>
        </div>
    </section>

    <section 
        class="min-h-screen bg-primary relative overflow-hidden py-20"
        x-data="{ shown: false }"
        x-intersect="shown = true; gsap.to('.stat-number', { 
            duration: 2,
            ease: 'power2.out',
            scrambleText: {
                chars: '0123456789',
                speed: 0.3,
                newClass: 'text-secondary'
            }
        })"
    >
        <div class="absolute inset-0 bg-[url('/api/placeholder/1920/1080')] opacity-10 bg-cover bg-center"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-16">
                <h1 
                    class="text-4xl md:text-5xl font-bold text-white mb-6"
                    x-show="shown"
                    x-transition:enter="transition ease-out duration-700"
                    x-transition:enter-start="opacity-0 transform scale-95"
                    x-transition:enter-end="opacity-100 transform scale-100"
                >
                    Our Impact in Numbers
                </h1>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <i class="fa-solid fa-users text-4xl text-primary mb-4"></i>
                    <div class="stat-number text-5xl font-bold text-primary mb-2">2500+</div>
                    <p class="text-text-secondary">Active Volunteers</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <i class="fa-solid fa-clock text-4xl text-primary mb-4"></i>
                    <div class="stat-number text-5xl font-bold text-primary mb-2">24/7</div>
                    <p class="text-text-secondary">Emergency Response</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <i class="fa-solid fa-building-shield text-4xl text-primary mb-4"></i>
                    <div class="stat-number text-5xl font-bold text-primary mb-2">100+</div>
                    <p class="text-text-secondary">Communities Protected</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <i class="fa-solid fa-award text-4xl text-primary mb-4"></i>
                    <div class="stat-number text-5xl font-bold text-primary mb-2">95%</div>
                    <p class="text-text-secondary">Satisfaction Rate</p>
                </div>
            </div>
        </div>
    </section>
