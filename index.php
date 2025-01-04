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
                <!-- <div x-data="{ show: false }" x-intersect="show = true" 
                    :class="show ? 'translate-y-0 opacity-0' : 'translate-y-4 opacity-100'"
                    class="bg-neutral-light rounded-xl p-6 transition-all duration-500 delay-100">
                    <i class="fas fa-clipboard-check text-3xl text-primary mb-4"></i>
                    <h3 class="font-semibold mb-2">Certification</h3>
                    <p class="text-text-secondary text-sm">Official certifications for completed courses</p>
                </div> -->
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