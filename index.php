<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    <?php
    include './anchor.php';
    include ('/error.php');
    include ('./components/Cookie.php');
    ?>

<body>
    <?php 
    include('./components/Nav.php');
    ?>
    <main class="container mx-auto p-6">
        <!-- Textbox Section on Top -->
        <section class="bg-gray-100 p-6 rounded-md mb-8">
            <h2 class="text-xl font-bold text-primary mb-2">Civil Defence Indore</h2>
            <p class="text-text-secondary">Civil Defence plays a crucial role in ensuring public safety during emergencies. It assists in rescue missions, relief operations, and volunteer training to prepare for crises. Civil Defence Indore is a Government-run organization of highly qualified professionals in responding quickly to emergencies like rescue operations from disaster, fire rescue & crowd management. It is an organization of highly trained professionals and also a strong team of trained volunteers.</p>
        </section>

        <!-- Three Column Section -->
        <!-- Three Column Section -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
    <!-- Left Image Section (Square) -->
    <div class="bg-gray-100 p-6 rounded-md flex items-center justify-center">
        <img src="image/cm mp.jpg" alt="Left Image" class="w-40 h-40 object-cover rounded-md">
    </div>

    <!-- Notice Board (Rectangle) -->
    <div class="bg-primary-light text-text-white p-6 rounded-md w-full h-48">
        <h2 class="text-xl font-semibold border-b mb-4">Notice Board</h2>
        <div class="overflow-hidden">
            <div class="scroll-up flex flex-col space-y-4">
                <p>Notice 1: Emergency drill on 15th Jan</p>
                <p>Notice 2: Volunteer meeting at 4 PM</p>
                <p>Notice 3: Training session on disaster management</p>
            </div>
        </div>
    </div>

    <!-- Right Image Section (Square) -->
    <div class="bg-gray-100 p-6 rounded-md flex items-center justify-center">
        <img src="image/collector indore.jpg" alt="Right Image" class="w-40 h-40 object-cover rounded-md">
    </div>
</div>


        <!-- What We Do Section -->
        <section class="bg-white px-8 py-6 rounded-md">
            <h2 class="text-2xl font-bold text-primary mb-6 text-center">What We Do</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Fire Rescue -->
                <div class="text-center">
                    <img src="image/fire smaple.png" alt="Fire Rescue" class="w-32 h-32 md:w-40 md:h-40 object-cover rounded-md mx-auto mb-4">
                    <h3 class="text-lg md:text-xl font-semibold mb-2">Fire Rescue</h3>
                    <a href="#" class="text-text-secondary underline hover:text-primary-light">Read more</a>
                </div>

                <!-- Landslide Rescue -->
                <div class="text-center">
                    <img src="image/land slide.jpg" alt="Landslide Rescue" class="w-32 h-32 md:w-40 md:h-40 object-cover rounded-md mx-auto mb-4">
                    <h3 class="text-lg md:text-xl font-semibold mb-2">Landslide Rescue</h3>
                    <a href="#" class="text-text-secondary underline hover:text-primary-light">Read more</a>
                </div>

                <!-- Training -->
                <div class="text-center">
                    <img src="image/training1.jpg" alt="Training" class="w-32 h-32 md:w-40 md:h-40 object-cover rounded-md mx-auto mb-4">
                    <h3 class="text-lg md:text-xl font-semibold mb-2">Training</h3>
                    <a href="#" class="text-text-secondary underline hover:text-primary-light">Read more</a>
                </div>

                <!-- Building Rescue -->
                <div class="text-center">
                    <img src="image/building sample.jpg" alt="Building Rescue" class="w-32 h-32 md:w-40 md:h-40 object-cover rounded-md mx-auto mb-4">
                    <h3 class="text-lg md:text-xl font-semibold mb-2">Building Rescue</h3>
                    <a href="#" class="text-text-secondary underline hover:text-primary-light">Read more</a>
                </div>
            </div>
        </section>
    </main>
        <!-- Services Preview -->
        <div class="grid md:grid-cols-2 gap-8 rounded-3xl bg-white shadow-xl p-8">
            <div class="space-y-6">
                <h2 class="text-3xl font-bold text-primary-dark">Our Essential Services</h2>
                <p class="text-text-secondary">
                    Professional training and emergency response services for various situations including natural disasters, accidents, and civil emergencies.
                </p>
                <div class="flex flex-wrap gap-4">
                    <span class="bg-secondary/20 text-primary-dark px-4 py-2 rounded-full font-medium">
                        <i class="fas fa-first-aid mr-2"></i>First Aid
                    </span>
                    <span class="bg-secondary/20 text-primary-dark px-4 py-2 rounded-full font-medium">
                        <i class="fas fa-fire-extinguisher mr-2"></i>Fire Safety
                    </span>
                    <span class="bg-secondary/20 text-primary-dark px-4 py-2 rounded-full font-medium">
                        <i class="fas fa-hands-helping mr-2"></i>Rescue Operations
                    </span>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div x-data="{ show: false }" x-intersect="show = true" 
                    :class="show ? 'translate-y-0 opacity-0' : 'translate-y-4 opacity-100'"
                    class="bg-neutral-light rounded-xl p-6 transition-all duration-500">
                    <i class="fas fa-graduation-cap text-3xl text-primary mb-4"></i>
                    <h3 class="font-semibold mb-2">Training Programs</h3>
                    <p class="text-text-secondary text-sm">Comprehensive training for emergency response</p>
                </div>
                <div x-data="{ show: false }" x-intersect="show = true" 
                    :class="show ? 'translate-y-0 opacity-0' : 'translate-y-4 opacity-100'"
                    class="bg-neutral-light rounded-xl p-6 transition-all duration-500 delay-100">
                    <i class="fas fa-clipboard-check text-3xl text-primary mb-4"></i>
                    <h3 class="font-semibold mb-2">Certification</h3>
                    <p class="text-text-secondary text-sm">Official certifications for completed courses</p>
                </div>
            </div>
        </div>
    </div>

    <?php
    include ('./components/Cards.php');
    include ('./components/Topics.php');
    include ('./components/Footer.php');
    ?>
</body>

</html>
