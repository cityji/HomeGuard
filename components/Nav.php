<!-- Navbar Component -->
<nav x-data="{ isOpen: false, activeDropdown: null }"
     class="bg-white border-b border-gray-100 fixed w-full top-0 z-50 shadow-md">
    <div class="max-w-[100dvw] mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Main Navigation Bar -->
        <div class="flex justify-between items-center h-20">
            <!-- Logo Section -->
            <div class="flex items-center space-x-3">
                <img src="/assets/civildefencelogo.png" alt="Logo" class="h-14 object-cover rounded">
                <a href="/" class="flex flex-col">
                    <span class="text-xl font-bold text-primary-DEFAULT tracking-tight">Civil Defence</span>
                    <span class="text-sm text-primary-dark">Indore</span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center space-x-2">
                <!-- Home Link -->
                <!-- <a href="index.php"
                   class="px-4 py-2 rounded-md text-text-primary hover:text-primary-DEFAULT hover:bg-neutral-light transition-all duration-300">
                    <i class="fas fa-home mr-1"></i> Home
                </a> -->

                <!-- Dynamic Dropdowns -->
<!-- Dynamic Dropdowns -->
<?php
$navItems = [
    'Training' => 'training.php',
    'About Us' => [
        ['label' => 'Civil Defence', 'address' => 'civil_defence.php'],
        ['label' => 'Home Guard', 'address' => 'home_guard.php'],
        ['label' => 'SDERF', 'address' => 'sderf.php'],
    ],
    'Role of Organization' => [
        ['label' => 'Rescue Operations', 'address' => 'rescue_operations.php'],
        ['label' => 'Relief Work', 'address' => 'relief_work.php'],
        ['label' => 'Volunteer Training', 'address' => 'volunteer_training.php'],
    ],
    'Safety Measures' => [
        ['label' => 'Disaster Preparedness', 'address' => 'disaster_preparedness.php'],
        ['label' => 'Safety Drills', 'address' => 'safety_drills.php'],
        ['label' => 'Emergency Protocols', 'address' => 'emergency_protocols.php'],
    ],
    'Emergency Services' => [
        ['label' => 'Home Guard', 'address' => 'home_guard_service.php'],
        ['label' => 'Fire Brigade', 'address' => 'fire_brigade.php'],
        ['label' => 'Police', 'address' => 'police.php'],
        ['label' => 'Ambulance', 'address' => 'ambulance.php'],
    ],
    'Contact Us' => 'contact.php',
];
foreach ($navItems as $label => $items):
?>
    <div class="relative group">
        <?php if (is_array($items) && !empty($items)): ?>
            <!-- Dropdown Button -->
            <button class="px-4 py-2 rounded-md text-text-primary hover:text-primary-DEFAULT hover:bg-neutral-light transition-all duration-300 flex items-center space-x-1">
                <span><?=$label?></span>
                <i class="fas fa-chevron-down text-xs transition-transform duration-300 group-hover:rotate-180 group-focus-within:rotate-180"></i>
            </button>

            <!-- Dropdown Menu -->
            <div class="absolute left-0 mt-1 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden group-hover:block group-focus-within:block">
                <div class="py-1">
                    <?php foreach ($items as $item): ?>
                    <a href="<?=$item['address']?>"
                       class="block px-4 py-2 text-sm text-text-primary hover:bg-primary-light hover:text-white transition-colors duration-200">
                        <?=$item['label']?>
                    </a>
                    <?php endforeach;?>
                </div>
            </div>
        <?php elseif (is_string($items)): ?>
            <!-- Direct Link for Pages Without Sub-Pages -->
            <a href="<?=$items?>"
               class="px-4 py-2 rounded-md text-text-primary hover:text-primary-DEFAULT hover:bg-neutral-light transition-all duration-300 block">
                <?=$label?>
            </a>
        <?php endif;?>
    </div>
    <?php endforeach;?>

                <!-- Static Links -->
                <a href="laws.php"
                   class="px-4 py-2 rounded-md text-text-primary hover:text-primary-DEFAULT hover:bg-neutral-light transition-all duration-300">
                    <i class="fas fa-gavel mr-1"></i> Laws & Acts
                </a>

                <a href="gallery.php"
                   class="px-4 py-2 rounded-md text-text-primary hover:text-primary-DEFAULT hover:bg-neutral-light transition-all duration-300">
                    <i class="fas fa-images mr-1"></i> Gallery
                </a>

                <!-- Emergency Button -->
                <button class="ml-4 px-6 py-2 bg-status-danger text-white rounded-full hover:bg-red-600 transition-colors duration-300 flex items-center space-x-2 shadow-md">
                    <i class="fas fa-phone-alt animate-pulse"></i>
                    <span>Emergency</span>
                </button>
            </div>

            <!-- Mobile Menu Button -->
            <div class="lg:hidden">
                <button @click="isOpen = !isOpen"
                        class="p-2 rounded-md text-text-primary hover:text-primary-DEFAULT hover:bg-neutral-light transition-colors duration-300">
                    <i x-show="!isOpen" class="fas fa-bars text-xl"></i>
                    <i x-show="isOpen" class="fas fa-times text-xl"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div x-show="isOpen"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-4"
             class="lg:hidden bg-white rounded-lg shadow-xl mt-2 mb-4"
             @click.away="isOpen = false"
             style="display: none;">
            <div class="px-4 pt-2 pb-3 space-y-1">
                <!-- Mobile Menu Items -->
                <a href="index.php"
                   class="block px-4 py-2 text-text-primary hover:bg-primary-light hover:text-white rounded-md transition-colors duration-200">
                    <i class="fas fa-home mr-2"></i> Home
                </a>

                <?php foreach ($navItems as $label => $items): ?>
                <div x-data="{ open: false }">
                    <button @click="open = !open"
                            class="w-full text-left px-4 py-2 text-text-primary hover:bg-primary-light hover:text-white rounded-md transition-colors duration-200 flex justify-between items-center">
                        <span><?=$label?></span>
                        <i class="fas fa-chevron-down text-xs transition-transform duration-300"
                           :class="{ 'transform rotate-180': open }"></i>
                    </button>

                    <div x-show="open"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0"
                         x-transition:enter-end="opacity-100"
                         class="pl-4">
                        <?php foreach ($items as $item): ?>
                        <a href="#"
                           class="block px-4 py-2 text-sm text-text-primary hover:bg-primary-light hover:text-white rounded-md transition-colors duration-200">
                            <?=$item?>
                        </a>
                        <?php endforeach;?>
                    </div>
                </div>
                <?php endforeach;?>

                <!-- Mobile Static Links -->
                <a href="laws.php"
                   class="block px-4 py-2 text-text-primary hover:bg-primary-light hover:text-white rounded-md transition-colors duration-200">
                    <i class="fas fa-gavel mr-2"></i> Laws & Acts
                </a>

                <a href="gallery.php"
                   class="block px-4 py-2 text-text-primary hover:bg-primary-light hover:text-white rounded-md transition-colors duration-200">
                    <i class="fas fa-images mr-2"></i> Gallery
                </a>

                <!-- Mobile Emergency Button -->
                <button class="w-full mt-4 px-6 py-2 bg-status-danger text-white rounded-full hover:bg-red-600 transition-colors duration-300 flex items-center justify-center space-x-2">
                    <i class="fas fa-phone-alt animate-pulse"></i>
                    <span>Emergency</span>
                </button>
            </div>
        </div>
    </div>
</nav>