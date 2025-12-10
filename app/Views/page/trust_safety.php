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

        <!-- ... rest of the How It Works section ... -->
</section>

<!-- Benefits Section -->
<section class="py-20 bg-background">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="animate-fade-in">
                    <h2 class="text-3xl lg:text-4xl font-bold mb-6"><?= $benefits_title ?? 'Why Choose Our Trust & Safety Solutions?' ?></h2>
                    <!-- ... rest of the Benefits section ... -->
                </div>
                <div class="animate-fade-in" style="animation-delay: 0.2s;">
                    <div class="bg-card border border-border rounded-xl p-8 card-hover-glow">
                        <h3 class="text-2xl font-bold mb-4"><?= $cta_title ?? 'Get Started Today' ?></h3>
                        <p class="text-muted-foreground mb-6">
                            <?= $cta_subtitle ?? 'Ready to enhance your platform\'s trust and safety? Contact us for a customized solution.' ?>
                        </p>
                        <!-- ... CTA button ... -->
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