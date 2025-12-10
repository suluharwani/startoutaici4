<!-- Content dimulai langsung dari <section> karena sudah ada template -->
<section class="py-20 px-4 lg:px-8">
    <div class="container mx-auto max-w-4xl text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-6 animate-fade-in">
            <?= $hero_title ?>
        </h1>
        <p class="text-xl text-muted-foreground mb-8 animate-fade-in">
            <?= $hero_subtitle ?>
        </p>
        <a href="/start-journey">
            <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8 gradient-bg shadow-glow">
                <?= $hero_button_text ?>
            </button>
        </a>
    </div>
</section>

<section class="py-16 px-4 lg:px-8 bg-secondary/20">
    <div class="container mx-auto max-w-6xl">
        <h2 class="text-3xl font-bold text-center mb-12"><?= $solutions_title ?></h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php foreach ($solutions as $index => $solution): ?>
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm card-hover-glow animate-fade-in" style="animation-delay: <?= $index * 0.1 ?>s">
                <div class="p-6 pt-6 text-center">
                    <div class="w-14 h-14 rounded-lg gradient-bg flex items-center justify-center mx-auto mb-4">
                        <i class="<?= $solution['icon'] ?> text-white text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-3"><?= $solution['title'] ?></h3>
                    <p class="text-sm text-muted-foreground">
                        <?= $solution['description'] ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="py-16 px-4 lg:px-8">
    <div class="container mx-auto max-w-6xl">
        <h2 class="text-3xl font-bold text-center mb-12"><?= $use_cases_title ?></h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($useCases as $index => $useCase): ?>
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm gradient-border-card animate-fade-in" style="animation-delay: <?= $index * 0.1 ?>s">
                <div class="p-6 pt-6">
                    <h3 class="text-xl font-semibold mb-3"><?= $useCase['title'] ?></h3>
                    <p class="text-muted-foreground">
                        <?= $useCase['description'] ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="py-16 px-4 lg:px-8 bg-secondary/20">
    <div class="container mx-auto max-w-4xl">
        <h2 class="text-3xl font-bold text-center mb-12"><?= $impact_title ?></h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <?php foreach ($metrics as $index => $metric): ?>
            <div class="animate-fade-in" style="animation-delay: <?= $index * 0.1 ?>s">
                <div class="text-4xl font-bold gradient-text mb-2"><?= $metric['value'] ?></div>
                <div class="text-sm text-muted-foreground"><?= $metric['label'] ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="py-20 px-4 lg:px-8">
    <div class="container mx-auto max-w-3xl text-center">
        <h2 class="text-3xl font-bold mb-6"><?= $cta_title ?></h2>
        <p class="text-xl text-muted-foreground mb-8">
            <?= $cta_subtitle ?>
        </p>
        <a href="/start-journey">
            <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8 gradient-bg shadow-glow">
                <?= $cta_button_text ?>
            </button>
        </a>
    </div>
</section>