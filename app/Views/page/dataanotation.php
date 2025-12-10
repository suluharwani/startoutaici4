<!-- Hero Section -->
<section class="py-20 px-4 lg:px-8">
    <div class="container mx-auto max-w-4xl text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-6 animate-fade-in">
            <?= $hero_title ?>
        </h1>
        <p class="text-xl text-muted-foreground mb-8 animate-fade-in">
            <?= $hero_subtitle ?>
        </p>
        <a href="<?= base_url('start-journey') ?>">
            <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8 gradient-bg shadow-glow">
                Start Your Project
            </button>
        </a>
    </div>
</section>

<!-- Features Section -->
<section class="py-16 px-4 lg:px-8 bg-secondary/20">
    <div class="container mx-auto max-w-6xl">
        <h2 class="text-3xl font-bold text-center mb-12">
            <?= $features_title ?>
        </h2>
        <?php if (!empty($features)): ?>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($features as $index => $feature): ?>
                <div class="rounded-lg border bg-card text-card-foreground shadow-sm card-hover-glow animate-fade-in" style="animation-delay: <?= $index * 0.1 ?>s;">
                    <div class="p-6 pt-6 text-center">
                        <div class="w-14 h-14 rounded-lg gradient-bg flex items-center justify-center mx-auto mb-4">
                            <i class="<?= htmlspecialchars($feature['icon']) ?> text-white text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold mb-3"><?= htmlspecialchars($feature['title']) ?></h3>
                        <p class="text-sm text-muted-foreground"><?= htmlspecialchars($feature['description']) ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="col-span-3 text-center py-8">
                <p class="text-muted-foreground">No features available at the moment.</p>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Solutions Section -->
<section class="py-16 px-4 lg:px-8">
    <div class="container mx-auto max-w-6xl">
        <h2 class="text-3xl font-bold text-center mb-12">
            <?= $services_title ?>
        </h2>
        <?php if (!empty($services)): ?>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($services as $index => $service): ?>
                <div class="rounded-lg border bg-card text-card-foreground shadow-sm gradient-border-card animate-fade-in" style="animation-delay: <?= $index * 0.1 ?>s;">
                    <div class="p-6 pt-6">
                        <h3 class="text-xl font-semibold mb-3"><?= htmlspecialchars($service['title']) ?></h3>
                        <p class="text-muted-foreground"><?= htmlspecialchars($service['description']) ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="text-center py-8">
                <p class="text-muted-foreground">No solutions data available.</p>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- How It Works Section (Opsional) -->
<?php if(!empty($steps)): ?>
<section class="py-16 px-4 lg:px-8 bg-secondary/20">
    <div class="container mx-auto max-w-6xl">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-4"><?= $how_it_works_title ?></h2>
            <p class="text-muted-foreground max-w-2xl mx-auto"><?= $how_it_works_subtitle ?></p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php foreach ($steps as $index => $step): ?>
            <div class="text-center animate-fade-in" style="animation-delay: <?= $index * 0.1 ?>s;">
                <div class="w-16 h-16 rounded-full gradient-bg flex items-center justify-center mx-auto mb-4">
                    <span class="text-white font-bold text-lg"><?= $index + 1 ?></span>
                </div>
                <h3 class="text-lg font-semibold mb-3"><?= htmlspecialchars($step['title']) ?></h3>
                <p class="text-sm text-muted-foreground"><?= htmlspecialchars($step['description']) ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Stats Section -->
<section class="py-16 px-4 lg:px-8 bg-secondary/20">
    <div class="container mx-auto max-w-4xl">
        <h2 class="text-3xl font-bold text-center mb-12"><?= $stats_title ?></h2>
        <?php if (!empty($stats)): ?>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <?php foreach ($stats as $index => $stat): ?>
                <div class="animate-fade-in" style="animation-delay: <?= $index * 0.1 ?>s;">
                    <div class="text-4xl font-bold gradient-text mb-2"><?= htmlspecialchars($stat['value']) ?></div>
                    <div class="text-sm text-muted-foreground"><?= htmlspecialchars($stat['label']) ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="text-center py-8">
                <p class="text-muted-foreground">No metrics data available.</p>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Benefits Section (Opsional) -->
<?php if(!empty($benefits)): ?>
<section class="py-16 px-4 lg:px-8">
    <div class="container mx-auto max-w-6xl">
        <h2 class="text-3xl font-bold text-center mb-12"><?= $benefits_title ?></h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php foreach ($benefits as $index => $benefit): ?>
            <div class="text-center p-6 rounded-lg border bg-card animate-fade-in" style="animation-delay: <?= $index * 0.1 ?>s;">
                <div class="w-12 h-12 rounded-full gradient-bg flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-check text-white"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2"><?= htmlspecialchars($benefit['title']) ?></h3>
                <p class="text-sm text-muted-foreground"><?= htmlspecialchars($benefit['description']) ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- CTA Section -->
<section class="py-20 px-4 lg:px-8">
    <div class="container mx-auto max-w-3xl text-center">
        <h2 class="text-3xl font-bold mb-6"><?= $cta_title ?></h2>
        <p class="text-xl text-muted-foreground mb-8"><?= $cta_subtitle ?></p>
        <a href="<?= base_url('start-journey') ?>">
            <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8 gradient-bg shadow-glow">
                <?= $cta_button_text ?>
            </button>
        </a>
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