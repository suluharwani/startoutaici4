<!-- Hero Section -->
<section class="pt-32 pb-20 bg-gradient-to-b from-background to-secondary/30">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl lg:text-6xl font-bold mb-6 animate-slide-up">
                <?= $hero_title ?? 'Trust & <span class="gradient-text">Safety</span> Solutions' ?>
            </h1>
            <p class="text-xl text-muted-foreground mb-8 max-w-2xl mx-auto animate-slide-up">
                <?= $hero_subtitle ?? 'Protect your platform with comprehensive AI-powered trust and safety services. Ensure secure, compliant, and positive user experiences.' ?>
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

<!-- Services Section -->
<section id="services" class="py-20 bg-background">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl lg:text-4xl font-bold mb-4"><?= $services_title ?? 'Comprehensive Trust & Safety Services' ?></h2>
            <p class="text-muted-foreground max-w-2xl mx-auto">
                <?= $services_subtitle ?? 'Our multi-layered approach combines AI technology with human expertise to deliver robust safety solutions' ?>
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($features as $index => $feature): ?>
            <div class="card-hover-glow bg-card border border-border rounded-xl p-6 animate-fade-in" style="animation-delay: <?= $index * 0.1 ?>s;">
                <div class="w-12 h-12 rounded-lg gradient-bg flex items-center justify-center mb-4 shadow-glow">
                    <i class="<?= $feature['icon'] ?> text-white text-lg"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3"><?= $feature['title'] ?></h3>
                <p class="text-muted-foreground"><?= $feature['description'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- How It Works Section -->
<section class="py-20 bg-secondary/30">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl lg:text-4xl font-bold mb-4"><?= $how_it_works_title ?? 'How Our Trust & Safety Works' ?></h2>
            <p class="text-muted-foreground max-w-2xl mx-auto">
                <?= $how_it_works_subtitle ?? 'A seamless process that scales with your platform\'s needs' ?>
            </p>
        </div>
        <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <div class="text-center animate-fade-in">
                <div class="w-16 h-16 rounded-full gradient-bg flex items-center justify-center mx-auto mb-4 shadow-glow">
                    <i class="fas fa-search text-white text-xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3">1. Monitor & Detect</h3>
                <p class="text-muted-foreground text-sm">AI-powered monitoring across all content types and user interactions.</p>
            </div>
            <div class="text-center animate-fade-in" style="animation-delay: 0.1s;">
                <div class="w-16 h-16 rounded-full gradient-bg flex items-center justify-center mx-auto mb-4 shadow-glow">
                    <i class="fas fa-flag text-white text-xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3">2. Review & Analyze</h3>
                <p class="text-muted-foreground text-sm">Human experts review flagged content with contextual understanding.</p>
            </div>
            <div class="text-center animate-fade-in" style="animation-delay: 0.2s;">
                <div class="w-16 h-16 rounded-full gradient-bg flex items-center justify-center mx-auto mb-4 shadow-glow">
                    <i class="fas fa-check-circle text-white text-xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3">3. Act & Improve</h3>
                <p class="text-muted-foreground text-sm">Take action and continuously improve safety protocols.</p>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-20 bg-background">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="animate-fade-in">
                    <h2 class="text-3xl lg:text-4xl font-bold mb-6"><?= $benefits_title ?? 'Why Choose Our Trust & Safety Solutions?' ?></h2>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-4">
                            <div class="w-6 h-6 rounded-full gradient-bg flex items-center justify-center mt-1 flex-shrink-0">
                                <i class="fas fa-check text-white text-xs"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">24/7 Protection</h4>
                                <p class="text-muted-foreground text-sm">Round-the-clock monitoring across all platforms.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-6 h-6 rounded-full gradient-bg flex items-center justify-center mt-1 flex-shrink-0">
                                <i class="fas fa-check text-white text-xs"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Scalable Solutions</h4>
                                <p class="text-muted-foreground text-sm">Grow from thousands to millions of users seamlessly.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-6 h-6 rounded-full gradient-bg flex items-center justify-center mt-1 flex-shrink-0">
                                <i class="fas fa-check text-white text-xs"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Expert Team</h4>
                                <p class="text-muted-foreground text-sm">Trained professionals with industry expertise.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-6 h-6 rounded-full gradient-bg flex items-center justify-center mt-1 flex-shrink-0">
                                <i class="fas fa-check text-white text-xs"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Compliance Ready</h4>
                                <p class="text-muted-foreground text-sm">Meet international regulatory requirements.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="animate-fade-in" style="animation-delay: 0.2s;">
                    <div class="bg-card border border-border rounded-xl p-8 card-hover-glow">
                        <h3 class="text-2xl font-bold mb-4">Get Started Today</h3>
                        <p class="text-muted-foreground mb-6">
                            <?= $cta_subtitle ?? 'Ready to enhance your platform\'s trust and safety? Contact us for a customized solution.' ?>
                        </p>
                        <a href="/start-journey" class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium bg-primary text-primary-foreground hover:bg-primary/90 h-12 rounded-md px-6 gradient-bg shadow-glow w-full">
                            Schedule Consultation
                            <i class="fas fa-calendar-check"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-20 gradient-bg text-white">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="grid md:grid-cols-4 gap-8 text-center">
            <?php foreach ($stats as $index => $stat): ?>
            <div class="animate-fade-in" style="animation-delay: <?= $index * 0.1 ?>s;">
                <div class="text-3xl lg:text-4xl font-bold mb-2"><?= $stat['value'] ?></div>
                <p class="text-blue-100"><?= $stat['label'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>