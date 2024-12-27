<?php
// hero-component.php
// if (!defined('SECURE_ACCESS')) {
//     die('Direct access not permitted');
// }
?>

<div class="relative min-h-screen overflow-hidden bg-gradient-to-br from-background-contrast/5 to-background-contrast/10"
     x-data="{ 
        mouseX: 0,
        mouseY: 0,
        cursorVisible: false,
        updateMousePosition(event) {
            this.mouseX = event.clientX;
            this.mouseY = event.clientY;
            this.cursorVisible = true;
        }
     }"
     @mousemove="updateMousePosition($event)"
     @mouseleave="cursorVisible = false">

    <!-- Animated background elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-main-light-orange/10 rounded-full blur-3xl transform -translate-x-1/2 animate-float"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-background-contrast/10 rounded-full blur-3xl transform translate-x-1/2 animate-bounce-subtle"></div>
    </div>

    <!-- Main hero content -->
    <div class="container mx-auto px-4 pt-32 pb-20 relative z-10">
        <!-- Trusted by section -->
        <div class="text-center mb-8 opacity-0" data-animate="fade-in">
            <span class="inline-flex items-center px-4 py-1 rounded-full bg-alter-dark-orange/10 text-alter-dark-orange text-sm font-medium">
                <i class="fas fa-star mr-2"></i>
                Trusted By 40,000 Sellers
            </span>
        </div>

        <!-- Main heading -->
        <div class="text-center max-w-4xl mx-auto mb-8">
            <h1 class="text-4xl md:text-6xl font-bold text-primary-text mb-6 opacity-0 text-reveal">
                <span class="block text-background-contrast">Launch your</span>
                <span class="block bg-clip-text text-transparent bg-gradient-to-r from-main-light-orange to-alter-dark-orange">
                    Application Startup
                </span>
                <span class="block text-2xl md:text-4xl mt-4">In Just 10 Minutes</span>
            </h1>
            
            <p class="text-lg md:text-xl text-secondary-text/80 mb-8 opacity-0" data-animate="fade-in">
                Create your superfast website for 499/month only. No coding required, No developer required,
                <br class="hidden md:block">
                No plugins required, No server charges required. Fast And Easy.
            </p>
        </div>

        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row justify-center gap-4 mb-16 opacity-0" data-animate="fade-in">
            <button class="magnetic px-8 py-4 bg-main-light-orange hover:bg-alter-dark-orange text-white rounded-lg transform transition-all hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center">
                <i class="fas fa-rocket mr-2"></i>
                Get Started Now
            </button>
            <button class="magnetic px-8 py-4 bg-white hover:bg-gray-50 text-primary-text rounded-lg transform transition-all hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center">
                <i class="fas fa-play mr-2"></i>
                Watch Demo
            </button>
        </div>

        <!-- Service icons -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-4xl mx-auto text-center mb-16">
            <div class="p-4 opacity-0" data-animate="slide-left">
                <i class="fas fa-shopping-cart text-3xl text-main-light-orange mb-2"></i>
                <p class="text-secondary-text">E-commerce Website</p>
            </div>
            <div class="p-4 opacity-0" data-animate="slide-left">
                <i class="fab fa-whatsapp text-3xl text-main-light-orange mb-2"></i>
                <p class="text-secondary-text">Whatsapp Store</p>
            </div>
            <div class="p-4 opacity-0" data-animate="slide-right">
                <i class="fas fa-building text-3xl text-main-light-orange mb-2"></i>
                <p class="text-secondary-text">B2B Website</p>
            </div>
            <div class="p-4 opacity-0" data-animate="slide-right">
                <i class="fas fa-store text-3xl text-main-light-orange mb-2"></i>
                <p class="text-secondary-text">Reselling Website</p>
            </div>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 max-w-4xl mx-auto text-center">
            <div class="magnetic p-4 rounded-lg bg-white/50 backdrop-blur-sm shadow-lg opacity-0" data-animate="scale-up">
                <h3 class="text-3xl font-bold text-background-contrast mb-2">6K+</h3>
                <p class="text-secondary-text">Websites</p>
            </div>
            <div class="magnetic p-4 rounded-lg bg-white/50 backdrop-blur-sm shadow-lg opacity-0" data-animate="scale-up">
                <h3 class="text-3xl font-bold text-background-contrast mb-2">500+</h3>
                <p class="text-secondary-text">Mobile Apps</p>
            </div>
            <div class="magnetic p-4 rounded-lg bg-white/50 backdrop-blur-sm shadow-lg opacity-0" data-animate="scale-up">
                <h3 class="text-3xl font-bold text-background-contrast mb-2">2K+</h3>
                <p class="text-secondary-text">Consultations</p>
            </div>
            <div class="magnetic p-4 rounded-lg bg-white/50 backdrop-blur-sm shadow-lg opacity-0" data-animate="scale-up">
                <h3 class="text-3xl font-bold text-background-contrast mb-2">700K+</h3>
                <p class="text-secondary-text">Subscribers</p>
            </div>
        </div>
    </div>
</div>