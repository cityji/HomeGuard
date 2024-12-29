<footer class="bg-neutral-dark text-text-white pt-16 pb-8" x-data="{ mapLoaded: false }">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Logo and Description Section -->
            <div class="space-y-4 animate-fade-in">
                <div class="flex items-center space-x-2">
                    <img src="/path-to-your-logo.png" alt="Company Logo" class="h-12 w-auto">
                    <h3 class="text-xl font-bold">Your Company</h3>
                </div>
                <p class="text-text-secondary leading-relaxed">
                    Your company's compelling description goes here. Make it engaging and informative to capture visitors' attention and convey your brand's value proposition.
                </p>
                <div class="flex space-x-4 pt-4">
                    <a href="#" class="text-text-white hover:text-secondary-DEFAULT transition-colors duration-300">
                        <i class="fab fa-facebook-f text-lg"></i>
                    </a>
                    <a href="#" class="text-text-white hover:text-secondary-DEFAULT transition-colors duration-300">
                        <i class="fab fa-twitter text-lg"></i>
                    </a>
                    <a href="#" class="text-text-white hover:text-secondary-DEFAULT transition-colors duration-300">
                        <i class="fab fa-linkedin-in text-lg"></i>
                    </a>
                    <a href="#" class="text-text-white hover:text-secondary-DEFAULT transition-colors duration-300">
                        <i class="fab fa-instagram text-lg"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links Section -->
            <div class="animate-fade-in" style="animation-delay: 0.2s">
                <h4 class="text-lg font-semibold mb-4 text-secondary-DEFAULT">Quick Links</h4>
                <ul class="space-y-3">
                    <li>
                        <a href="#" class="text-text-secondary hover:text-secondary-DEFAULT transition-colors duration-300 flex items-center">
                            <i class="fas fa-chevron-right text-xs mr-2"></i>
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-text-secondary hover:text-secondary-DEFAULT transition-colors duration-300 flex items-center">
                            <i class="fas fa-chevron-right text-xs mr-2"></i>
                            Services
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-text-secondary hover:text-secondary-DEFAULT transition-colors duration-300 flex items-center">
                            <i class="fas fa-chevron-right text-xs mr-2"></i>
                            Projects
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-text-secondary hover:text-secondary-DEFAULT transition-colors duration-300 flex items-center">
                            <i class="fas fa-chevron-right text-xs mr-2"></i>
                            Contact
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact Information -->
            <div class="animate-fade-in" style="animation-delay: 0.4s">
                <h4 class="text-lg font-semibold mb-4 text-secondary-DEFAULT">Contact Us</h4>
                <ul class="space-y-3">
                    <li class="flex items-start space-x-3">
                        <i class="fas fa-map-marker-alt mt-1 text-secondary-DEFAULT"></i>
                        <span class="text-text-secondary">123 Business Street, Suite 100, Your City, ST 12345</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-phone-alt text-secondary-DEFAULT"></i>
                        <span class="text-text-secondary">+1 (555) 123-4567</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-envelope text-secondary-DEFAULT"></i>
                        <span class="text-text-secondary">contact@yourcompany.com</span>
                    </li>
                </ul>
            </div>

            <!-- Map Section -->
            <div class="animate-fade-in" style="animation-delay: 0.6s">
                <h4 class="text-lg font-semibold mb-4 text-secondary-DEFAULT">Find Us</h4>
                <div 
                    class="w-full h-48 bg-neutral-light rounded-lg overflow-hidden"
                    x-intersect:enter="mapLoaded = true"
                >
                    <iframe 
                        x-show="mapLoaded"
                        x-transition:enter="transition-opacity duration-700"
                        class="w-full h-full"
                        src="https://www.google.com/maps/embed?pb=YOUR_MAP_EMBED_CODE"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                    ></iframe>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="mt-12 pt-8 border-t border-neutral-DEFAULT">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <p class="text-text-secondary text-sm">
                    © 2024 Your Company. All rights reserved.
                </p>
                <div class="flex space-x-6">
                    <a href="#" class="text-text-secondary hover:text-secondary-DEFAULT text-sm transition-colors duration-300">Privacy Policy</a>
                    <a href="#" class="text-text-secondary hover:text-secondary-DEFAULT text-sm transition-colors duration-300">Terms of Service</a>
                    <a href="#" class="text-text-secondary hover:text-secondary-DEFAULT text-sm transition-colors duration-300">Cookie Policy</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php
/*
<!-- footer --> text 
Madhya Pradesh Homeguards,
Civil Defense and Disaster Management |
State Disaster Command, Response and Monitoring System

Jahangirabad, Bhopal,
Madhya Pradesh- 462008
scc.mphomeguard@mp.gov.in
Phone: 1079 (टॉल फ्री)
Footer Menu
Home
Accessibility Statement
Website Policies
Terms & Conditions
Feedback
Help
Disclaimer
Contact Us
Sitemap
अन्य
National Portal of India My Gov GOI Directory
Science-and-technology-logo
मध्यप्रदेश विज्ञान एवं प्रौद्योगिकी
परिषद द्वारा विकसित

 

Copyright © 2018. M.P. HOMEGUARD, CIVIL DEFENCE AND DISASTER MANAGEMENT, Government of Madhya Pradesh, India. All rights reserved.
For any query regarding this website Please Contact the "Web Information Manager: Shri Kamal Nath Dhurve,7049163500,0755-2550884, dghomeguard.mp@gmail.com."

*/