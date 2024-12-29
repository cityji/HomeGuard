<?php
$services = [
    [
        "title" => "Emergency Response",
        "description" => "24/7 rapid response team providing immediate assistance during disasters, accidents, and civil emergencies across Indore.",
        "icon" => "fa-solid fa-truck-medical",
        "link" => "#emergency"
    ],
    [
        "title" => "Disaster Management",
        "description" => "Strategic planning and execution of disaster preparedness protocols to ensure community safety during critical situations.",
        "icon" => "fa-solid fa-shield-halved",
        "link" => "#disaster"
    ],
 
    [
        "title" => "Volunteer Program",
        "description" => "Join our elite team of civil defense volunteers. Get professional training and serve the community in times of need.",
        "icon" => "fa-solid fa-handshake-angle",
        "link" => "#volunteer"
    ],
    
];
?>

<div class="container mx-auto px-4 py-12">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php foreach($services as $index => $service): ?>
        <div x-data="{ show: false }"
             x-intersect="show = true"
             :class="show ? 'opacity-0 translate-y-0' : 'opacity-100 translate-y-4'"
             class="transition-all duration-500 ease-out"
             style="transition-delay: <?= $index * 100 ?>ms">
            
            <div class="group relative bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300">
                <!-- Top Accent Border -->
                <div class="h-1 bg-primary rounded-t-xl"></div>
                
                <div class="p-6">
                    <!-- Icon with Subtle Animation -->
                    <div class="inline-block p-3 mb-4 text-primary bg-primary/5 rounded-lg
                               group-hover:bg-primary group-hover:text-white 
                               transition-all duration-300 ease-in-out">
                        <i class="<?= $service['icon'] ?> text-xl"></i>
                    </div>

                    <!-- Content -->
                    <h3 class="text-xl font-semibold text-neutral-dark mb-3 
                               group-hover:text-primary transition-colors duration-300">
                        <?= $service['title'] ?>
                    </h3>
                    
                    <p class="text-text-secondary mb-6 text-sm leading-relaxed">
                        <?= $service['description'] ?>
                    </p>

                    <!-- Action Link -->
                    <a href="<?= $service['link'] ?>" 
                       class="inline-flex items-center text-primary hover:text-primary-light 
                              font-medium text-sm transition-all duration-300">
                        <span class="mr-2">Learn More</span>
                        <i class="fa-solid fa-arrow-right text-xs 
                                 group-hover:translate-x-1 transition-transform duration-300"></i>
                    </a>
                </div>

                <!-- Bottom Decoration -->
                <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r 
                           from-transparent via-primary/20 to-transparent 
                           group-hover:via-primary/40 transition-all duration-300"></div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>