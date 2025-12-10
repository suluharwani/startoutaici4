<!-- Hero Section -->
<section class="pt-32 pb-20 bg-gradient-to-b from-background to-secondary/30">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl lg:text-6xl font-bold mb-6 animate-slide-up">
                <?= $hero_title ?>
            </h1>
            <p class="text-xl text-muted-foreground mb-8 max-w-2xl mx-auto animate-slide-up">
                <?= $hero_subtitle ?>
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center animate-slide-up">
                <a href="/start-journey" class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium bg-primary text-primary-foreground hover:bg-primary/90 h-12 rounded-md px-6 gradient-bg shadow-glow">
                    Start Your Project
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-16 bg-secondary/20">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12"><?= $features_title ?></h2>
            <?php if(!empty($features)): ?>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <?php foreach ($features as $index => $feature): ?>
                    <div class="card-hover-glow bg-card border border-border rounded-xl p-6 text-center animate-fade-in" style="animation-delay: <?= $index * 0.1 ?>s;">
                        <div class="w-14 h-14 rounded-lg gradient-bg flex items-center justify-center mx-auto mb-4 shadow-glow">
                            <i class="<?= htmlspecialchars($feature['icon']) ?> text-white text-xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold mb-3"><?= htmlspecialchars($feature['title']) ?></h3>
                        <p class="text-sm text-muted-foreground"><?= htmlspecialchars($feature['description']) ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="text-center py-12">
                    <p class="text-muted-foreground">No features data available.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-16 bg-background">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12"><?= $services_title ?></h2>
            <?php if(!empty($services)): ?>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php foreach ($services as $index => $service): ?>
                    <div class="gradient-border-card rounded-xl p-6 animate-fade-in" style="animation-delay: <?= $index * 0.1 ?>s;">
                        <h3 class="text-xl font-semibold mb-3"><?= htmlspecialchars($service['title']) ?></h3>
                        <p class="text-muted-foreground"><?= htmlspecialchars($service['description']) ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="text-center py-12">
                    <p class="text-muted-foreground">No services data available.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-16 bg-secondary/20">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12"><?= $stats_title ?></h2>
            <?php if(!empty($stats)): ?>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                    <?php foreach ($stats as $index => $stat): ?>
                    <div class="animate-fade-in" style="animation-delay: <?= $index * 0.1 ?>s;">
                        <div class="text-4xl font-bold gradient-text mb-2"><?= htmlspecialchars($stat['value']) ?></div>
                        <div class="text-sm text-muted-foreground"><?= htmlspecialchars($stat['label']) ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="text-center py-12">
                    <p class="text-muted-foreground">No stats data available.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- How It Works Section -->
<section class="py-20 bg-background">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold mb-4"><?= $how_it_works_title ?></h2>
                <p class="text-muted-foreground max-w-2xl mx-auto">
                    <?= $how_it_works_subtitle ?>
                </p>
            </div>

            <?php if(!empty($steps)): ?>
                <div class="grid md:grid-cols-3 gap-8">
                    <?php foreach ($steps as $index => $step): ?>
                    <div class="text-center animate-fade-in" style="animation-delay: <?= $index * 0.1 ?>s;">
                        <div class="w-16 h-16 rounded-full gradient-bg flex items-center justify-center mx-auto mb-4 shadow-glow">
                            <i class="<?= htmlspecialchars($step['icon']) ?> text-white text-xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3"><?= htmlspecialchars($step['title']) ?></h3>
                        <p class="text-muted-foreground"><?= htmlspecialchars($step['description']) ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="text-center py-12">
                    <p class="text-muted-foreground">No process steps available.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-blue-500 to-purple-500 text-white">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6"><?= $cta_title ?></h2>
            <p class="text-xl text-blue-100 mb-8"><?= $cta_subtitle ?></p>
            <a href="/start-journey" class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium bg-white text-blue-600 hover:bg-blue-50 h-12 rounded-md px-8 shadow-lg">
                <?= $cta_button_text ?>
                <i class="fas fa-calendar-check"></i>
            </a>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-20 bg-background">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12"><?= $benefits_title ?></h2>
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="animate-fade-in">
                    <?php if(!empty($benefits)): ?>
                        <div class="space-y-4">
                            <?php foreach ($benefits as $benefit): ?>
                            <div class="flex items-start space-x-4">
                                <div class="w-6 h-6 rounded-full gradient-bg flex items-center justify-center mt-1 flex-shrink-0">
                                    <i class="fas fa-check text-white text-xs"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-1"><?= htmlspecialchars($benefit['title']) ?></h4>
                                    <p class="text-muted-foreground text-sm"><?= htmlspecialchars($benefit['description']) ?></p>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    <?php else: ?>
                        <p class="text-muted-foreground">No benefits data available.</p>
                    <?php endif; ?>
                </div>
                <div class="animate-fade-in" style="animation-delay: 0.2s;">
                    <div class="bg-card border border-border rounded-xl p-8 card-hover-glow">
                        <h3 class="text-2xl font-bold mb-4">Get Started Today</h3>
                        <p class="text-muted-foreground mb-6">
                            Ready to implement professional content moderation? Contact us for a customized solution.
                        </p>
                        <a href="/start-journey" class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium bg-primary text-primary-foreground hover:bg-primary/90 h-12 rounded-md px-6 gradient-bg shadow-glow w-full">
                            Start Your Safety Journey
                            <i class="fas fa-shield-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .gradient-border-card {
        position: relative;
        background: var(--card);
        border: 1px solid transparent;
        background-clip: padding-box;
    }
    
    .gradient-border-card::before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: -1;
        margin: -1px;
        border-radius: inherit;
        background: var(--gradient-primary);
        opacity: 0.5;
    }
</style>