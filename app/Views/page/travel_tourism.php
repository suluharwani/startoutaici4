<section class="py-20 px-4 lg:px-8">
    <div class="container mx-auto max-w-4xl text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-6 animate-fade-in">
            <?= $hero_title ?? '<span class="gradient-text">Travel & Tourism</span> AI Solutions' ?>
        </h1>
        <p class="text-xl text-muted-foreground mb-8 animate-fade-in">
            <?= $hero_subtitle ?? 'Enhance traveler experiences and streamline operations with intelligent automation' ?>
        </p>
        <a href="/start-journey">
            <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8 gradient-bg shadow-glow">
                Explore Solutions
            </button>
        </a>
    </div>
</section>

<section class="py-16 px-4 lg:px-8 bg-secondary/20">
    <div class="container mx-auto max-w-6xl">
        <h2 class="text-3xl font-bold text-center mb-12"><?= $solutions_title ?? 'Our Travel Solutions' ?></h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php if (!empty($solutions)): ?>
                <?php foreach ($solutions as $solution): ?>
                    <div class="rounded-lg border bg-card text-card-foreground shadow-sm card-hover-glow">
                        <div class="p-6 pt-6 text-center">
                            <div class="w-14 h-14 rounded-lg gradient-bg flex items-center justify-center mx-auto mb-4">
                                <i class="<?= $solution['icon'] ?? 'fas fa-plane' ?> text-white text-2xl"></i>
                            </div>
                            <h3 class="text-lg font-semibold mb-3"><?= $solution['title'] ?? 'Travel Planning AI' ?></h3>
                            <p class="text-sm text-muted-foreground">
                                <?= $solution['description'] ?? 'Personalized itinerary generation and smart travel recommendations for customers.' ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <!-- Default solutions -->
                <?php 
                $defaultSolutions = [
                    ['icon' => 'fas fa-plane', 'title' => 'Travel Planning AI', 'desc' => 'Personalized itinerary generation and smart travel recommendations for customers.'],
                    ['icon' => 'fas fa-map-marker-alt', 'title' => 'Destination Intelligence', 'desc' => 'Real-time insights on destinations, weather, events, and local attractions.'],
                    ['icon' => 'fas fa-calendar-alt', 'title' => 'Booking Optimization', 'desc' => 'AI-powered booking systems that maximize conversions and revenue.'],
                    ['icon' => 'fas fa-comments', 'title' => '24/7 Customer Support', 'desc' => 'Multilingual chatbots and support for travelers across time zones.']
                ];
                ?>
                <?php foreach ($defaultSolutions as $solution): ?>
                    <div class="rounded-lg border bg-card text-card-foreground shadow-sm card-hover-glow">
                        <div class="p-6 pt-6 text-center">
                            <div class="w-14 h-14 rounded-lg gradient-bg flex items-center justify-center mx-auto mb-4">
                                <i class="<?= $solution['icon'] ?> text-white text-2xl"></i>
                            </div>
                            <h3 class="text-lg font-semibold mb-3"><?= $solution['title'] ?></h3>
                            <p class="text-sm text-muted-foreground">
                                <?= $solution['desc'] ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="py-16 px-4 lg:px-8">
    <div class="container mx-auto max-w-6xl">
        <h2 class="text-3xl font-bold text-center mb-12"><?= $use_cases_title ?? 'Use Cases' ?></h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php if (!empty($use_cases)): ?>
                <?php foreach ($use_cases as $useCase): ?>
                    <div class="rounded-lg border bg-card text-card-foreground shadow-sm gradient-border-card">
                        <div class="p-6 pt-6">
                            <h3 class="text-xl font-semibold mb-3"><?= $useCase['title'] ?? 'Smart Recommendations' ?></h3>
                            <p class="text-muted-foreground">
                                <?= $useCase['description'] ?? 'AI-driven suggestions for hotels, activities, and experiences based on preferences.' ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <!-- Default use cases -->
                <?php 
                $defaultUseCases = [
                    ['title' => 'Smart Recommendations', 'desc' => 'AI-driven suggestions for hotels, activities, and experiences based on preferences.'],
                    ['title' => 'Dynamic Pricing', 'desc' => 'Optimize pricing based on demand, seasonality, and market conditions.'],
                    ['title' => 'Review Analysis', 'desc' => 'Sentiment analysis of reviews to improve services and respond to feedback.'],
                    ['title' => 'Virtual Concierge', 'desc' => 'AI assistants that help travelers throughout their journey.'],
                    ['title' => 'Fraud Prevention', 'desc' => 'Protect bookings and payments with AI-powered fraud detection.'],
                    ['title' => 'Loyalty Programs', 'desc' => 'Personalized rewards and engagement strategies to retain customers.']
                ];
                ?>
                <?php foreach ($defaultUseCases as $useCase): ?>
                    <div class="rounded-lg border bg-card text-card-foreground shadow-sm gradient-border-card">
                        <div class="p-6 pt-6">
                            <h3 class="text-xl font-semibold mb-3"><?= $useCase['title'] ?></h3>
                            <p class="text-muted-foreground">
                                <?= $useCase['desc'] ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="py-16 px-4 lg:px-8 bg-secondary/20">
    <div class="container mx-auto max-w-4xl">
        <h2 class="text-3xl font-bold text-center mb-12"><?= $impact_title ?? 'Customer Satisfaction' ?></h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <?php if (!empty($metrics)): ?>
                <?php foreach ($metrics as $metric): ?>
                    <div>
                        <div class="text-4xl font-bold gradient-text mb-2"><?= $metric['value'] ?? '45%' ?></div>
                        <div class="text-sm text-muted-foreground"><?= $metric['label'] ?? 'Booking Increase' ?></div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <!-- Default metrics -->
                <?php 
                $defaultMetrics = [
                    ['value' => '45%', 'label' => 'Booking Increase'],
                    ['value' => '30%', 'label' => 'Higher Revenue'],
                    ['value' => '24/7', 'label' => 'Support Available'],
                    ['value' => '95%', 'label' => 'Customer Satisfaction']
                ];
                ?>
                <?php foreach ($defaultMetrics as $metric): ?>
                    <div>
                        <div class="text-4xl font-bold gradient-text mb-2"><?= $metric['value'] ?></div>
                        <div class="text-sm text-muted-foreground"><?= $metric['label'] ?></div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="py-20 px-4 lg:px-8">
    <div class="container mx-auto max-w-3xl text-center">
        <h2 class="text-3xl font-bold mb-6"><?= $cta_title ?? 'Ready to Transform Travel Experiences?' ?></h2>
        <p class="text-xl text-muted-foreground mb-8">
            <?= $cta_subtitle ?? 'Let\'s discuss how AI can enhance your travel business' ?>
        </p>
        <a href="/start-journey">
            <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8 gradient-bg shadow-glow">
                <?= $cta_button_text ?? 'Schedule Consultation' ?>
            </button>
        </a>
    </div>
</section>