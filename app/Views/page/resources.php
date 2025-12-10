<!-- Hero Section -->
<section class="pt-32 pb-12 px-4 lg:px-8 bg-gradient-to-b from-background to-secondary/30">
    <div class="container mx-auto max-w-4xl text-center space-y-6">
        <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold">
            <?= $hero_title ?? 'Resources & <span class="gradient-text">Insights</span>' ?>
        </h1>
        <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
            <?= $hero_subtitle ?? 'Expert guides, case studies, and thought leadership to help you master AI-powered business growth.' ?>
        </p>
        <div class="max-w-2xl mx-auto pt-4">
            <div class="flex gap-2">
                <input type="text" placeholder="Search resources..." class="flex-1 h-10 rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm">
                <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 rounded-md gradient-bg">
                    Search
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Filter Tabs -->
<section class="py-8 px-4 lg:px-8 border-b border-border">
    <div class="container mx-auto">
        <div class="flex flex-wrap gap-3 justify-center">
            <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 rounded-md gradient-bg">
                All Resources
                <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80 ml-2">47</span>
            </button>
            <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 rounded-md">
                Blog Posts
                <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80 ml-2">24</span>
            </button>
            <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 rounded-md">
                Case Studies
                <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80 ml-2">12</span>
            </button>
            <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 rounded-md">
                Whitepapers
                <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80 ml-2">8</span>
            </button>
            <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 rounded-md">
                Videos
                <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80 ml-2">15</span>
            </button>
        </div>
    </div>
</section>

<!-- Featured Resources -->
<section class="py-20 px-4 lg:px-8">
    <div class="container mx-auto max-w-6xl">
        <div class="mb-12">
            <h2 class="text-4xl font-bold mb-2"><?= $featured_title ?? 'Featured Resources' ?></h2>
            <p class="text-muted-foreground"><?= $featured_subtitle ?? 'Our most popular and impactful content' ?></p>
        </div>
        
        <?php if (!empty($featuredResources)): ?>
            <div class="grid md:grid-cols-3 gap-8">
                <?php foreach ($featuredResources as $resource): ?>
                <div class="group hover:shadow-glow transition-all duration-300 hover:-translate-y-1 flex flex-col card-hover-glow rounded-lg border bg-card text-card-foreground shadow-sm">
                    <div class="h-48 bg-gradient-to-br <?= $resource['color'] ?? 'from-blue-500 to-cyan-500' ?> flex items-center justify-center">
                        <i class="<?= $resource['icon'] ?? 'fas fa-file-alt' ?> text-white/90 text-4xl"></i>
                    </div>
                    <div class="p-6 flex-1">
                        <div class="flex items-center justify-between mb-2">
                            <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                <?= $resource['type'] ?? 'Resource' ?>
                            </span>
                            <div class="flex items-center text-xs text-muted-foreground">
                                <i class="fas fa-clock w-3 h-3 mr-1"></i>
                                <?= $resource['read_time'] ?? 'N/A' ?>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold mb-3 group-hover:gradient-text transition-all">
                            <?= $resource['title'] ?? 'Resource Title' ?>
                        </h3>
                        <p class="text-muted-foreground text-sm mb-4">
                            <?= $resource['description'] ?? 'Description not available' ?>
                        </p>
                        
                        <?php if (!empty($resource['tags'])): ?>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <?php foreach ($resource['tags'] as $tag): ?>
                                <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground">
                                    <?= $tag ?>
                                </span>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        
                        <a href="<?= $resource['button_url'] ?? '#' ?>">
                            <button class="w-full group/btn inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 rounded-md">
                                <?= $resource['button_text'] ?? 'Read More' ?>
                                <i class="fas fa-arrow-right ml-2 w-4 h-4 group-hover/btn:translate-x-1 transition-transform"></i>
                            </button>
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="text-center py-12">
                <p class="text-muted-foreground">No featured resources available.</p>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Recent Articles & Formats -->
<section class="py-20 px-4 lg:px-8 bg-secondary/30">
    <div class="container mx-auto max-w-6xl">
        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Recent Articles -->
            <div class="lg:col-span-2">
                <h2 class="text-3xl font-bold mb-6"><?= $articles_title ?? 'Recent Articles' ?></h2>
                <?php if (!empty($recentArticles)): ?>
                    <div class="space-y-4">
                        <?php foreach ($recentArticles as $article): ?>
                        <a href="<?= $article['button_url'] ?? '#' ?>">
                            <div class="hover:shadow-lg transition-all duration-300 cursor-pointer card-hover-glow rounded-lg border bg-card text-card-foreground shadow-sm">
                                <div class="p-6">
                                    <div class="flex justify-between items-start gap-4">
                                        <div class="flex-1">
                                            <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground mb-2">
                                                <?= $article['category'] ?? 'Category' ?>
                                            </span>
                                            <h3 class="text-lg font-semibold mb-2 hover:gradient-text transition-all">
                                                <?= $article['title'] ?? 'Article Title' ?>
                                            </h3>
                                            <p class="text-sm text-muted-foreground">
                                                <?= $article['formatted_date'] ?? $article['date'] ?? 'N/A' ?>
                                            </p>
                                        </div>
                                        <i class="fas fa-arrow-right w-5 h-5 text-muted-foreground flex-shrink-0 mt-1"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php endforeach; ?>
                    </div>
                <?php else: ?>
                    <p class="text-muted-foreground">No articles available.</p>
                <?php endif; ?>
            </div>
            
            <!-- Explore by Format -->
            <div>
                <h2 class="text-3xl font-bold mb-6"><?= $formats_title ?? 'Explore by Format' ?></h2>
                <?php if (!empty($formats)): ?>
                    <div class="space-y-4">
                        <?php foreach ($formats as $format): ?>
                        <a href="<?= $format['button_url'] ?? '#' ?>">
                            <div class="hover:shadow-lg transition-all duration-300 card-hover-glow rounded-lg border bg-card text-card-foreground shadow-sm">
                                <div class="p-6">
                                    <div class="flex items-start space-x-4">
                                        <div class="w-12 h-12 rounded-lg gradient-bg flex items-center justify-center flex-shrink-0">
                                            <i class="<?= $format['icon'] ?? 'fas fa-file' ?> text-white text-xl"></i>
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <h3 class="font-semibold mb-1"><?= $format['title'] ?? 'Format' ?></h3>
                                            <p class="text-sm text-primary font-medium mb-1"><?= $format['count'] ?? '0' ?></p>
                                            <p class="text-sm text-muted-foreground"><?= $format['description'] ?? 'Description' ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php endforeach; ?>
                    </div>
                <?php else: ?>
                    <p class="text-muted-foreground">No formats available.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter CTA -->
<section class="py-20 px-4 lg:px-8">
    <div class="container mx-auto max-w-3xl text-center">
        <div class="gradient-border-card rounded-lg border p-8">
            <div class="w-16 h-16 rounded-lg gradient-bg flex items-center justify-center mx-auto mb-6">
                <i class="fas fa-envelope text-white text-2xl"></i>
            </div>
            <h2 class="text-3xl font-bold mb-4"><?= $newsletter_title ?? 'Stay Updated' ?></h2>
            <p class="text-xl text-muted-foreground mb-8">
                <?= $newsletter_subtitle ?? 'Get the latest AI insights delivered to your inbox. Join 10,000+ leaders who read our newsletter.' ?>
            </p>
            <div class="max-w-md mx-auto">
                <div class="flex gap-2">
                    <input type="email" placeholder="Enter your email" class="flex-1 h-12 rounded-md border border-input bg-background px-4 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm">
                    <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium bg-primary text-primary-foreground hover:bg-primary/90 h-12 px-6 py-2 rounded-md gradient-bg shadow-glow">
                        Subscribe
                    </button>
                </div>
                <p class="text-xs text-muted-foreground mt-3">
                    By subscribing, you agree to our Privacy Policy. Unsubscribe anytime.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<?php if (!empty($stats)): ?>
<section class="py-16 px-4 lg:px-8 bg-secondary/20">
    <div class="container mx-auto max-w-4xl">
        <h3 class="text-2xl font-bold text-center mb-8"><?= $stats_title ?? 'Our Impact' ?></h3>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <?php foreach ($stats as $stat): ?>
            <div class="text-center">
                <div class="text-4xl md:text-5xl font-bold gradient-text mb-2"><?= $stat['value'] ?? '0' ?></div>
                <div class="text-sm text-muted-foreground"><?= $stat['label'] ?? 'Label' ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>