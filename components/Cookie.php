<div x-data="{
    showConsent: true,
    preferences: {
        analytics: true,
        marketing: false,
        necessary: true
    },
    savePreferences() {
        // Save to localStorage
        localStorage.setItem('cookiePreferences', JSON.stringify(this.preferences));
        this.showConsent = false;
        //change on prod !important
    },
    init() {
        // Check if preferences already exist
        const saved = localStorage.getItem('cookiePreferences');
        if (saved) {
            this.showConsent = true;
        }
        // Add floating animation
        <!-- this.$el.style.animation = 'float 6s ease-in-out infinite'; -->
    }
}" 
    x-show="showConsent"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 transform translate-y-full"
    x-transition:enter-end="opacity-100 transform translate-y-0"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 transform translate-y-0"
    x-transition:leave-end="opacity-0 transform translate-y-full"
    class="fixed bottom-4 left-6 w-4/5 max-w-[300px]  rounded-2xl bg-gray-200/90 shadow:rgba(60,64,67,0.3)_0_1px_2px_0,rgba(60,64,67,0.15)_0_2px_6px_2px] [box-shadow:var(--shadow)] animate-fade-in"
    style="z-index: 9999;">

    <style>
        @keyframes float {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-10px);
            }
            100% {
                transform: translateY(0px);
            }
        }
    </style>

    <div class="flex flex-col items-center justify-between pt-9 px-6 pb-6 relative">
        <!-- Icon Container with pulse effect -->
        <span class="relative mx-auto -mt-16 mb-8 bg-primary rounded-full p-4 text-text-white shadow-lg"
              x-transition
              x-data
              x-init="$el.style.animation = 'pulse 1s ease-in-out ';">
            <i class="fas fa-shield-alt text-4xl"></i>
        </span>

        <!-- Title -->
        <h5 class="text-sm font-semibold mb-2 text-left mr-auto text-neutral-dark">
            Your Privacy is Our Priority
        </h5>

        <!-- Description -->
        <p class="w-full mb-4 text-sm text-justify text-text-secondary">
            We process your personal information to improve our services and provide you with the best possible experience. Your data is handled with utmost care and security.
            <br/><br/>
            For more information, see our
            <a class="font-semibold text-primary hover:text-primary-light transition-colors underline underline-offset-2 cursor-pointer">
                Privacy Policy
            </a>
        </p>

        <!-- Cookie Settings Panel -->
        <div x-data="{ showSettings: false }" class="w-full">
            <!-- Settings Toggle Button -->
            <button @click="showSettings = !showSettings"
                    class="mb-2 text-sm mr-auto text-text-secondary cursor-pointer font-semibold transition-colors hover:text-primary hover:underline underline-offset-2 flex items-center gap-2">
                <span>Cookie Settings</span>
                <i :class="showSettings ? 'fa-chevron-up' : 'fa-chevron-down'" class="fas text-xs"></i>
            </button>

            <!-- Settings Panel -->
            <div x-show="showSettings" 
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 transform -translate-y-2"
                 x-transition:enter-end="opacity-100 transform translate-y-0"
                 class="mb-4 bg-neutral-light rounded-lg p-4 space-y-3">
                
                <!-- Necessary Cookies -->
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-semibold">Necessary</p>
                        <p class="text-xs text-text-secondary">Required for basic functionality</p>
                    </div>
                    <div class="relative">
                        <input type="checkbox" x-model="preferences.necessary" disabled checked
                               class="appearance-none w-9 focus:outline-none checked:bg-primary bg-gray-300 h-5 rounded-full before:inline-block before:rounded-full before:bg-white before:h-4 before:w-4 checked:before:translate-x-full before:shadow before:transition-all before:duration-300 before:content[''] before:absolute before:top-[2px] before:left-[2px]">
                    </div>
                </div>

                <!-- Analytics Cookies -->
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-semibold">Analytics</p>
                        <p class="text-xs text-text-secondary">Help us improve our website</p>
                    </div>
                    <div class="relative">
                        <input type="checkbox" x-model="preferences.analytics"
                               class="appearance-none w-9 focus:outline-none checked:bg-primary bg-gray-300 h-5 rounded-full before:inline-block before:rounded-full before:bg-white before:h-4 before:w-4 checked:before:translate-x-full before:shadow before:transition-all before:duration-300 before:content[''] before:absolute before:top-[2px] before:left-[2px] cursor-pointer">
                    </div>
                </div>

                <!-- Marketing Cookies -->
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-semibold">Marketing</p>
                        <p class="text-xs text-text-secondary">Personalized advertisements</p>
                    </div>
                    <div class="relative">
                        <input type="checkbox" x-model="preferences.marketing"
                               class="appearance-none w-9 focus:outline-none checked:bg-primary bg-gray-300 h-5 rounded-full before:inline-block before:rounded-full before:bg-white before:h-4 before:w-4 checked:before:translate-x-full before:shadow before:transition-all before:duration-300 before:content[''] before:absolute before:top-[2px] before:left-[2px] cursor-pointer">
                    </div>
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex justify-end gap-2 w-full mt-4">
            <button @click="preferences = { analytics: false, marketing: false, necessary: true }; savePreferences()"
                    class="py-2 px-4 text-sm font-semibold rounded-lg transition-all duration-300 
                    text-text-secondary hover:text-primary
                    hover:underline underline-offset-2"
                    type="button">
                Reject All
            </button>
            <button @click="preferences = { analytics: true, marketing: true, necessary: true }; savePreferences()"
                    class="py-2 px-4 text-sm font-semibold rounded-lg transition-all duration-300 
                    bg-primary text-text-white hover:bg-primary-light
                    hover:shadow-md active:transform active:scale-95"
                    type="button">
                Accept All
            </button>
        </div>
    </div>
</div>