<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Homeguards</title>
    <?php
    include './anchor.php';
    ?>

<body>
    <?php 
    require_once('./components/Nav.php');
    ?>
 <!-- Header Section -->
 <header class="bg-primary py-4 text-white">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold">Civil Defense and Home Guard, Indore</h1>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="#" class="text-white hover:text-secondary-light">Home</a></li>
                    <li><a href="#" class="text-white hover:text-secondary-light">About Us</a></li>
                    <li><a href="#" class="text-white hover:text-secondary-light">Services</a></li>
                    <li><a href="#" class="text-white hover:text-secondary-light">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-secondary-light py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-primary-dark mb-8">About Us</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <img src="https://via.placeholder.com/600x400?text=Civil+Defense+Indore" alt="Civil Defense Indore" class="rounded-lg shadow-lg">
                </div>
                <div class="text-center md:text-left">
                    <p class="text-xl text-primary-dark leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <p class="text-xl text-primary-dark leading-relaxed mt-4">
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <button class="bg-primary-light text-white px-6 py-2 rounded-md hover:bg-primary-dark mt-6">Learn More</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="bg-neutral-light py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-primary-dark mb-8">Our Mission & Vision</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-2xl font-bold text-primary-dark mb-4">Mission</h3>
                    <p class="text-lg text-primary-dark leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-primary-dark mb-4">Vision</h3>
                    <p class="text-lg text-primary-dark leading-relaxed">
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- History Section -->
    <section class="bg-primary-dark py-12">
        <div class="container mx-auto px-4 text-white">
            <h2 class="text-3xl font-bold text-center mb-8">Our History</h2>
            <p class="text-lg leading-relaxed text-center md:text-left">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                <!-- Timeline Item 1 -->
                <div class="flex items-center">
                    <span class="text-2xl mr-4 text-secondary-light"><i class="fas fa-history"></i></span>
                    <div>
                        <h4 class="text-xl font-bold text-white">1950</h4>
                        <p class="text-lg text-secondary-light leading-relaxed">
                            Establishment of Civil Defense in Indore.
                        </p>
                    </div>
                </div>
                <!-- Timeline Item 2 -->
                <div class="flex items-center">
                    <span class="text-2xl mr-4 text-secondary-light"><i class="fas fa-history"></i></span>
                    <div>
                        <h4 class="text-xl font-bold text-white">1980</h4>
                        <p class="text-lg text-secondary-light leading-relaxed">
                            Expansion of services to include Home Guard.
                        </p>
                    </div>
                </div>
                <!-- Timeline Item 3 -->
                <div class="flex items-center">
                    <span class="text-2xl mr-4 text-secondary-light"><i class="fas fa-history"></i></span>
                    <div>
                        <h4 class="text-xl font-bold text-white">2000</h4>
                        <p class="text-lg text-secondary-light leading-relaxed">
                            Modernization and training programs initiated.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Team Section -->
    <section class="bg-neutral-light py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-primary-dark mb-8">Our Team</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Team Member 1 -->
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/200x200?text=Team+Member+1" alt="Team Member 1" class="w-full rounded-lg mb-4">
                    <h3 class="text-xl font-bold text-primary-dark">John Doe</h3>
                    <p class="text-lg text-primary-dark leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
                <!-- Team Member 2 -->
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/200x200?text=Team+Member+2" alt="Team Member 2" class="w-full rounded-lg mb-4">
                    <h3 class="text-xl font-bold text-primary-dark">Jane Smith</h3>
                    <p class="text-lg text-primary-dark leading-relaxed">
                        Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                <!-- Team Member 3 -->
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/200x200?text=Team+Member+3" alt="Team Member 3" class="w-full rounded-lg mb-4">
                    <h3 class="text-xl font-bold text-primary-dark">Robert Johnson</h3>
                    <p class="text-lg text-primary-dark leading-relaxed">
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="bg-secondary-light py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-primary-dark mb-8">Our Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <span class="text-4xl mb-4 text-primary-dark"><i class="fas fa-shield-alt"></i></span>
                    <h3 class="text-xl font-bold text-primary-dark">Civil Defense</h3>
                    <p class="text-lg text-primary-dark leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
                <!-- Service 2 -->
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <span class="text-4xl mb-4 text-primary-dark"><i class="fas fa-handshake"></i></span>
                    <h3 class="text-xl font-bold text-primary-dark">Community Engagement</h3>
                    <p class="text-lg text-primary-dark leading-relaxed">
                        Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                <!-- Service 3 -->
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <span class="text-4xl mb-4 text-primary-dark"><i class="fas fa-first-aid"></i></span>
                    <h3 class="text-xl font-bold text-primary-dark">Emergency Response</h3>
                    <p class="text-lg text-primary-dark leading-relaxed">
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Us Section -->
    <section class="bg-primary-dark py-12">
        <div class="container mx-auto px-4 text-white">
            <h2 class="text-3xl font-bold text-center mb-8">Contact Us</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <p class="text-lg leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <p class="text-lg leading-relaxed mt-4">
                        Address: 123 Defense Street, Indore, India
                    </p>
                    <p class="text-lg leading-relaxed">
                        Phone: +91 1234567890
                    </p>
                    <p class="text-lg leading-relaxed">
                        Email: info@civildefenseindore.in
                    </p>
                </div>
                <div>
                    <!-- Contact Form -->
                    <form class="bg-white p-6 rounded-lg shadow-md">
                        <div class="mb-4">
                            <label for="name" class="block text-primary-dark text-lg font-bold">Name</label>
                            <input type="text" id="name" name="name" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-primary-light">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-primary-dark text-lg font-bold">Email</label>
                            <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-primary-light">
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block text-primary-dark text-lg font-bold">Message</label>
                            <textarea id="message" name="message" rows="4" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-primary-light"></textarea>
                        </div>
                        <button type="submit" class="bg-secondary-light text-primary-dark px-6 py-2 rounded-md hover:bg-secondary-dark">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-neutral-dark py-6 text-center text-white">
        <p class="text-lg">
            &copy; 2023 Civil Defense and Home Guard, Indore. All rights reserved.
        </p>
    </footer>

    <!-- Alpine.js Interactions -->
    <script>
        // Example Alpine.js component for Accordions
        document.addEventListener('alpine:init', () => {
            Alpine.data('accordion', () => ({
                open: null,
                toggle(panel) {
                    this.open = this.open === panel ? null : panel;
                },
            }));
        });
    </script>


</body>

</html>