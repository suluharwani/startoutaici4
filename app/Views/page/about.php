<!-- About Page -->
<main class="pt-16">
    <!-- Hero Section -->
    <section class="py-20 px-4 lg:px-8">
        <div class="container mx-auto max-w-4xl text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 animate-fade-in">
                <?= $hero_title ?>
            </h1>
            <p class="text-xl text-muted-foreground mb-8 animate-fade-in">
                <?= $hero_subtitle ?>
            </p>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="py-16 px-4 lg:px-8 bg-secondary/20">
        <div class="container mx-auto max-w-4xl">
            <h2 class="text-3xl font-bold mb-8"><?= $story_title ?></h2>
            <div class="space-y-4 text-muted-foreground">
                <?php 
                // Pisahkan paragraf berdasarkan newline
                $paragraphs = explode("\n\n", $story_content);
                foreach ($paragraphs as $paragraph):
                ?>
                <p><?= nl2br(htmlspecialchars($paragraph)) ?></p>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Our Values Section -->
    <section class="py-16 px-4 lg:px-8">
        <div class="container mx-auto max-w-6xl">
            <h2 class="text-3xl font-bold text-center mb-12"><?= $values_title ?></h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <?php if(!empty($values)): ?>
                    <?php foreach ($values as $value): ?>
                    <div class="rounded-lg border bg-card text-card-foreground shadow-sm card-hover-glow">
                        <div class="p-6 pt-6 text-center">
                            <div class="w-14 h-14 rounded-lg gradient-bg flex items-center justify-center mx-auto mb-4">
                                <i class="<?= htmlspecialchars($value['icon']) ?> text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold mb-3"><?= htmlspecialchars($value['title']) ?></h3>
                            <p class="text-sm text-muted-foreground"><?= htmlspecialchars($value['description']) ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="text-center col-span-4 text-muted-foreground">No values data available.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 px-4 lg:px-8 bg-secondary/20">
        <div class="container mx-auto max-w-6xl">
            <h2 class="text-3xl font-bold text-center mb-12"><?= $stats_title ?></h2>
            <div class="grid md:grid-cols-4 gap-8 text-center">
                <?php if(!empty($stats)): ?>
                    <?php foreach ($stats as $stat): ?>
                    <div>
                        <div class="text-4xl font-bold gradient-text mb-2"><?= htmlspecialchars($stat['value']) ?></div>
                        <div class="text-muted-foreground"><?= htmlspecialchars($stat['label']) ?></div>
                    </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="text-center col-span-4 text-muted-foreground">No stats data available.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>