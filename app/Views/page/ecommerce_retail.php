<section class="py-20 px-4 lg:px-8">
    <div class="container mx-auto max-w-4xl text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-6 animate-fade-in">
            <?= $hero_title ?? '<span class="gradient-text">E-Commerce & Retail</span> AI Solutions' ?>
        </h1>
        <p class="text-xl text-muted-foreground mb-8 animate-fade-in">
            <?= $hero_subtitle ?? 'Transform your retail business with intelligent automation and personalized shopping experiences' ?>
        </p>
        <a href="/start-journey">
            <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8 gradient-bg shadow-glow">
                Explore Solutions
            </button>
        </a>
    </div>
</section>
<?php if (!empty($solutions)): ?>
<section class="py-16 px-4 lg:px-8 bg-secondary/20">
    <div class="container mx-auto max-w-6xl">
        <?php if (!empty($solutions_title)): ?>
        <h2 class="text-3xl font-bold text-center mb-12"><?= $solutions_title ?></h2>
        <?php endif; ?>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php foreach ($solutions as $solution): ?>
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm card-hover-glow">
                <div class="p-6 pt-6 text-center">
                    <?php if (!empty($solution['icon'])): ?>
                    <div class="w-14 h-14 rounded-lg gradient-bg flex items-center justify-center mx-auto mb-4">
                        <?php if (strpos($solution['icon'], 'fa-') !== false): ?>
                        <i class="<?= $solution['icon'] ?> w-7 h-7 text-white"></i>
                        <?php else: ?>
                        <?= $solution['icon'] ?>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                    
                    <?php if (!empty($solution['title'])): ?>
                    <h3 class="text-lg font-semibold mb-3"><?= $solution['title'] ?></h3>
                    <?php endif; ?>
                    
                    <?php if (!empty($solution['description'])): ?>
                    <p class="text-sm text-muted-foreground">
                        <?= $solution['description'] ?>
                    </p>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if (!empty($use_cases)): ?>
<section class="py-16 px-4 lg:px-8">
    <div class="container mx-auto max-w-6xl">
        <?php if (!empty($use_cases_title)): ?>
        <h2 class="text-3xl font-bold text-center mb-12"><?= $use_cases_title ?></h2>
        <?php endif; ?>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($use_cases as $use_case): ?>
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm gradient-border-card">
                <div class="p-6 pt-6">
                    <?php if (!empty($use_case['title'])): ?>
                    <h3 class="text-xl font-semibold mb-3"><?= $use_case['title'] ?></h3>
                    <?php endif; ?>
                    
                    <?php if (!empty($use_case['description'])): ?>
                    <p class="text-muted-foreground">
                        <?= $use_case['description'] ?>
                    </p>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if (!empty($metrics)): ?>
<section class="py-16 px-4 lg:px-8 bg-secondary/20">
    <div class="container mx-auto max-w-4xl">
        <?php if (!empty($results_title)): ?>
        <h2 class="text-3xl font-bold text-center mb-12"><?= $results_title ?></h2>
        <?php endif; ?>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <?php foreach ($metrics as $metric): ?>
            <div>
                <?php if (!empty($metric['value'])): ?>
                <div class="text-4xl font-bold gradient-text mb-2"><?= $metric['value'] ?></div>
                <?php endif; ?>
                
                <?php if (!empty($metric['label'])): ?>
                <div class="text-sm text-muted-foreground"><?= $metric['label'] ?></div>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<section class="py-20 px-4 lg:px-8">
    <div class="container mx-auto max-w-3xl text-center">
        <?php if (!empty($cta_title)): ?>
        <h2 class="text-3xl font-bold mb-6"><?= $cta_title ?></h2>
        <?php endif; ?>
        
        <?php if (!empty($cta_subtitle)): ?>
        <p class="text-xl text-muted-foreground mb-8">
            <?= $cta_subtitle ?>
        </p>
        <?php endif; ?>
        
        <?php if (!empty($cta_button_text)): ?>
        <a href="<?= $cta_button_url ?? '/schedule-consultation' ?>">
            <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8 gradient-bg shadow-glow">
                <?= $cta_button_text ?>
            </button>
        </a>
        <?php endif; ?>
    </div>
</section>