<!-- Hero Section -->
<section class="py-20 px-4 lg:px-8 bg-gradient-to-b from-secondary/50 to-background">
    <div class="container mx-auto max-w-4xl text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-6 animate-fade-in">
            Why <span class="gradient-text">Startout AI?</span>
        </h1>
        <p class="text-xl text-muted-foreground mb-8 animate-fade-in">
            We're not just another AI service provider. We're your strategic partner in digital transformation.
        </p>
    </div>
</section>

<!-- Stats Section -->
<section class="py-16 px-4 lg:px-8 bg-secondary/20">
    <div class="container mx-auto max-w-6xl">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <?php foreach ($stats as $stat): ?>
            <div class="text-center">
                <div class="text-4xl md:text-5xl font-bold gradient-text mb-2"><?= $stat['value'] ?></div>
                <div class="text-sm text-muted-foreground"><?= $stat['label'] ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Advantages Section -->
<section class="py-20 px-4 lg:px-8">
    <div class="container mx-auto max-w-6xl">
        <div class="text-center space-y-4 mb-16">
            <h2 class="text-3xl md:text-4xl font-bold">What Sets Us <span class="gradient-text">Apart</span></h2>
            <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                Discover the advantages that make Startout AI the preferred choice for leading companies
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($advantages as $advantage): ?>
            <div class="card-hover-glow rounded-lg border bg-card text-card-foreground shadow-sm p-6">
                <div class="w-12 h-12 rounded-lg gradient-bg flex items-center justify-center mb-4">
                    <i class="<?= $advantage['icon'] ?> text-white text-xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3"><?= $advantage['title'] ?></h3>
                <p class="text-muted-foreground"><?= $advantage['description'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-20 px-4 lg:px-8 bg-secondary/30">
    <div class="container mx-auto max-w-4xl">
        <div class="text-center space-y-4 mb-12">
            <h2 class="text-3xl md:text-4xl font-bold">The <span class="gradient-text">Startout AI</span> Advantage</h2>
        </div>
        
        <div class="card-hover-glow rounded-lg border bg-card text-card-foreground shadow-sm p-8">
            <div class="grid md:grid-cols-2 gap-6">
                <?php foreach ($benefits as $benefit): ?>
                <div class="flex items-start space-x-3">
                    <div class="w-6 h-6 rounded-full gradient-bg flex items-center justify-center flex-shrink-0 mt-0.5">
                        <i class="fas fa-check text-white text-xs"></i>
                    </div>
                    <span class="text-base"><?= $benefit ?></span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 px-4 lg:px-8">
    <div class="container mx-auto max-w-3xl text-center">
        <h2 class="text-3xl font-bold mb-6">Ready to Experience the Difference?</h2>
        <p class="text-xl text-muted-foreground mb-8">
            Join hundreds of companies that trust Startout AI for their most critical operations
        </p>
        <div class="flex flex-wrap gap-4 justify-center">
            <a href="/start-journey" class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8 gradient-bg shadow-glow">
                Schedule Consultation
            </a>
            <a href="/our-work" class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium border border-input bg-background hover:bg-accent hover:text-accent-foreground h-11 rounded-md px-8">
                See Our Work
            </a>
        </div>
    </div>
</section>