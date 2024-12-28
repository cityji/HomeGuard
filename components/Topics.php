<?php
// Data array for topics
$topics = [
    [
        'category' => 'Training Programs',
        'icon' => 'fa-solid fa-graduation-cap',
        'image' => '/assets/exercise.jpg',
        'date' => 'December 20, 2024',
        'title' => 'Advanced Disaster Management Training Program Launched for Civil Defence Volunteers'
    ],
    [
        'category' => 'Emergency Response',
        'icon' => 'fa-solid fa-truck-medical',
        'image' => '/assets/mock drill1.jpg',
        'date' => 'December 18, 2024',
        'title' => 'Civil Defence Teams Successfully Conduct Multi-State Disaster Response Exercise'
    ],
    [
        'category' => 'Community Safety',
        'icon' => 'fa-solid fa-shield-heart',
        'image' => '/assets/knowledge.jpg',
        'date' => 'December 15, 2024',
        'title' => 'Home Guards Deploy New Community Safety Initiative Across Urban Centers'
    ]
];
?>

<!-- Topics Section -->
<section 
    id="topics" 
    class="py-16 bg-neutral-light"
    x-data="{ shown: false }"
    x-intersect="shown = true; gsap.from('.topic-article', {
        y: 50,
        opacity: 0,
        duration: 0.8,
        stagger: 0.2,
        ease: 'power2.out'
    })"
>
    <div class="container mx-auto px-4">
        <!-- Header -->
        <div class="flex items-center justify-between mb-12">
            <h2 class="text-4xl font-bold text-text-primary">What we do</h2>
            <span 
                class="scroll-guide flex items-center text-text-secondary"
                x-show="shown"
                x-transition:enter="transition ease-out duration-700"
            >
                <i class="fa-solid fa-arrow-down mr-2 animate-bounce"></i>
                Scroll
            </span>
        </div>

        <!-- Topics Grid -->
        <div class="topics-in grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach($topics as $topic): ?>
                <article class="topic-article bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-2 transition-all duration-300">
                    <!-- Category Tag -->
                    <div class="category-icon bg-primary text-white p-3 inline-flex items-center gap-2 rounded-br-xl">
                        <i class="<?php echo $topic['icon']; ?>"></i>
                        <span><?php echo $topic['category']; ?></span>
                    </div>

                    <!-- Article Content -->
                    <a href="#" class="block">
                        <!-- Image -->
                        <div class="photo-f overflow-hidden">
                            <figure class="photo relative pt-[60%]">
                                <img 
                                    src="<?php echo $topic['image']; ?>" 
                                    alt="<?php echo $topic['title']; ?>"
                                    class="absolute inset-0 w-full h-full object-cover transform hover:scale-105 transition-transform duration-500"
                                >
                            </figure>
                        </div>

                        <!-- Text Content -->
                        <div class="txt-box p-6">
                            <div class="txt-in">
                                <p class="date text-text-secondary mb-3">
                                    <?php echo $topic['date']; ?>
                                </p>
                                <h3 class="title text-lg font-semibold text-text-primary hover:text-primary transition-colors">
                                    <?php echo $topic['title']; ?>
                                </h3>
                            </div>
                        </div>
                    </a>
                </article>
            <?php endforeach; ?>
        </div>

        <!-- View All Button -->
        <div class="text-center mt-12">
            <button 
                class="px-6 py-3 bg-primary hover:bg-primary-light text-white rounded-lg transition-colors inline-flex items-center gap-2 group"
            >
                View More
                <i class="fa-solid fa-arrow-right transform group-hover:translate-x-1 transition-transform"></i>
            </button>
        </div>
    </div>
</section>

<!-- GSAP Animation Script -->
<script>
    // Initialize GSAP ScrollTrigger
    gsap.registerPlugin(ScrollTrigger);
    
    // Animate articles on scroll
    gsap.utils.toArray('.topic-article').forEach((article, i) => {
        gsap.from(article, {
            scrollTrigger: {
                trigger: article,
                start: 'top bottom-=100',
                toggleActions: 'play none none reverse'
            },
            y: 50,
            opacity: 0,
            duration: 0.8,
            delay: i * 0.2
        });
    });
</script>