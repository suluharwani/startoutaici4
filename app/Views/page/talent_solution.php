<section class="pt-32 pb-20">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-4xl mx-auto text-center mb-16">
            <h1 class="text-4xl lg:text-5xl font-bold mb-6 animate-slide-up">
                <?= $hero_title ?>
            </h1>
            <p class="text-xl text-muted-foreground mb-8 animate-slide-up" style="animation-delay: 0.1s;">
                <?= $hero_subtitle ?>
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center animate-slide-up" style="animation-delay: 0.2s;">
                <a href="/start-journey" class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8 gradient-bg shadow-glow">
                    Find Talent
                </a>
                <a href="#benefits" class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium border border-input bg-background hover:bg-accent hover:text-accent-foreground h-11 rounded-md px-8">
                    Learn More
                </a>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-secondary/20" id="benefits">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12"><?= $benefits_title ?></h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <?php foreach ($benefits as $index => $benefit): ?>
                <div class="card-hover-glow bg-card p-6 rounded-xl border border-border animate-slide-up" style="animation-delay: <?= $index * 0.1 ?>s">
                    <div class="w-14 h-14 rounded-lg gradient-bg flex items-center justify-center mx-auto mb-4">
                        <i class="<?= $benefit['icon'] ?> text-white text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-3 text-center"><?= $benefit['title'] ?></h3>
                    <p class="text-muted-foreground text-sm text-center"><?= $benefit['description'] ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section class="py-16">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12"><?= $roles_title ?></h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($roles as $index => $role): ?>
                <div class="gradient-border-card bg-card p-6 rounded-xl animate-slide-up" style="animation-delay: <?= $index * 0.1 ?>s">
                    <h3 class="text-xl font-semibold mb-3"><?= $role['title'] ?></h3>
                    <p class="text-muted-foreground mb-4"><?= $role['description'] ?></p>
                    <a href="<?= $role['button_url'] ?>" class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3">
                        <?= $role['button_text'] ?>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-secondary/20">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12"><?= $process_title ?></h2>
            <div class="space-y-8">
                <?php foreach ($processSteps as $index => $step): ?>
                <div class="flex gap-6 items-start animate-slide-up" style="animation-delay: <?= $index * 0.1 ?>s">
                    <div class="w-12 h-12 rounded-lg gradient-bg flex items-center justify-center flex-shrink-0">
                        <span class="text-white font-bold text-xl"><?= $step['step_number'] ?></span>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2"><?= $step['title'] ?></h3>
                        <p class="text-muted-foreground"><?= $step['description'] ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section class="py-20">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6"><?= $cta_title ?></h2>
            <p class="text-xl text-muted-foreground mb-8"><?= $cta_subtitle ?></p>
            <a href="/schedule-consultation" class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8 gradient-bg shadow-glow">
                <?= $cta_button_text ?>
            </a>
        </div>
    </div>
</section>