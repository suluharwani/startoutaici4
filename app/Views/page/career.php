<!-- Careers Page -->
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

    <!-- Benefits Section -->
    <section class="py-16 px-4 lg:px-8 bg-secondary/20">
        <div class="container mx-auto max-w-6xl">
            <h2 class="text-3xl font-bold text-center mb-12"><?= $benefits_title ?></h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php if(!empty($benefits)): ?>
                    <?php foreach ($benefits as $benefit): ?>
                    <div class="rounded-lg border bg-card text-card-foreground shadow-sm gradient-border-card">
                        <div class="p-6 pt-6">
                            <p class="font-medium"><?= htmlspecialchars($benefit) ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-span-3 text-center py-8">
                        <p class="text-muted-foreground">No benefits information available.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Open Positions Section -->
    <section class="py-20 px-4 lg:px-8">
        <div class="container mx-auto max-w-4xl">
            <h2 class="text-3xl font-bold text-center mb-12"><?= $positions_title ?></h2>
            <?php if(!empty($positions)): ?>
                <div class="space-y-6">
                    <?php foreach ($positions as $position): ?>
                    <div class="rounded-lg border bg-card text-card-foreground shadow-sm card-hover-glow">
                        <div class="flex flex-col space-y-1.5 p-6">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h3 class="text-xl font-semibold mb-2"><?= htmlspecialchars($position['title']) ?></h3>
                                    <p class="text-sm text-muted-foreground"><?= htmlspecialchars($position['description']) ?></p>
                                </div>
                                <a href="<?= isset($position['apply_url']) ? $position['apply_url'] : '/careers/apply/' . strtolower(str_replace(' ', '-', $position['title'])) ?>">
                                    <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 gradient-bg">
                                        Apply
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="p-6 pt-0">
                            <div class="flex flex-wrap gap-4 text-sm text-muted-foreground">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt w-4 h-4 mr-1"></i>
                                    <?= htmlspecialchars($position['location']) ?>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-clock w-4 h-4 mr-1"></i>
                                    <?= htmlspecialchars($position['type']) ?>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-briefcase w-4 h-4 mr-1"></i>
                                    <?= htmlspecialchars($position['department']) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="text-center py-12">
                    <div class="w-24 h-24 rounded-full bg-secondary/20 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-search text-3xl text-muted-foreground"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">No Open Positions</h3>
                    <p class="text-muted-foreground mb-6">We don't have any open positions at the moment.</p>
                    <p class="text-sm text-muted-foreground">Check back soon or <a href="/start-journey" class="text-primary hover:underline">submit your resume</a> for future opportunities.</p>
                </div>
            <?php endif; ?>
            
            <!-- Talent Pool Section -->
            <?php if(empty($positions)): ?>
            <div class="mt-12 rounded-lg border bg-card text-card-foreground shadow-sm">
                <div class="p-8 text-center">
                    <h3 class="text-xl font-semibold mb-4">Join Our Talent Pool</h3>
                    <p class="text-muted-foreground mb-6">Even if we don't have a perfect match right now, we're always looking for talented people.</p>
                    <a href="/start-journey?type=talent-pool">
                        <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8 gradient-bg shadow-glow">
                            Submit Your Resume
                        </button>
                    </a>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>
</main>

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