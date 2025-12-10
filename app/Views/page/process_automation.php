<!-- Content dimulai langsung dari <section> karena sudah ada template -->
<section class="pt-32 pb-20 px-4 lg:px-8 bg-gradient-to-b from-secondary/50 to-background">
    <div class="container mx-auto max-w-6xl">
        <div class="text-center space-y-6 mb-12">
            <div class="inline-block px-4 py-2 bg-primary/10 rounded-full">
                <span class="text-sm font-semibold text-primary">AI & Process Automation</span>
            </div>
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold">
                <?= $hero_title ?? 'Transform Operations with <span class="gradient-text">AI & Intelligent Automation</span>' ?>
            </h1>
            <p class="text-xl text-muted-foreground max-w-3xl mx-auto">
                <?= $hero_subtitle ?? 'Harness the power of artificial intelligence and advanced automation to revolutionize your business processes. Our AI-driven solutions learn, adapt, and optimize continuously for maximum efficiency.' ?>
            </p>
            <div class="flex flex-wrap gap-4 justify-center pt-4">
                <a href="<?= $hero_button_url ?? '/start-journey' ?>">
                    <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8 gradient-bg shadow-glow">
                        <?= $hero_button_text ?? 'Start Your Project' ?>
                    </button>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="py-20 px-4 lg:px-8">
    <div class="container mx-auto max-w-6xl">
        <div class="text-center space-y-4 mb-16">
            <h2 class="text-4xl md:text-5xl font-bold">
                <?= $capabilities_title ?? 'AI-Driven <span class="gradient-text">Automation Capabilities</span>' ?>
            </h2>
            <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                <?= $capabilities_subtitle ?? 'Leverage cutting-edge AI to automate and optimize every aspect of your operations' ?>
            </p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php if (!empty($capabilities)): ?>
                <?php foreach ($capabilities as $capability): ?>
                <div class="rounded-lg border bg-card text-card-foreground shadow-sm hover:shadow-glow transition-all duration-300">
                    <div class="flex flex-col space-y-1.5 p-6">
                        <div class="w-12 h-12 rounded-lg gradient-bg flex items-center justify-center mb-4">
                            <i class="<?= $capability['icon'] ?? 'fas fa-cogs' ?> text-white text-xl"></i>
                        </div>
                        <h3 class="font-semibold tracking-tight text-xl"><?= $capability['title'] ?? 'AI Capability' ?></h3>
                        <p class="text-sm text-muted-foreground pt-2">
                            <?= $capability['description'] ?? 'Description not available' ?>
                        </p>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-span-full text-center py-8">
                    <p class="text-muted-foreground">No capabilities available.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="py-20 px-4 lg:px-8 bg-secondary/30">
    <div class="container mx-auto max-w-4xl">
        <div class="text-center space-y-4 mb-12">
            <h2 class="text-4xl md:text-5xl font-bold">
                <?= $benefits_title ?? 'Transform Your Business with <span class="gradient-text">AI & Automation</span>' ?>
            </h2>
            <p class="text-xl text-muted-foreground">
                <?= $benefits_subtitle ?? 'Proven results with intelligent, adaptive automation' ?>
            </p>
        </div>
        <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-8">
            <?php if (!empty($benefits)): ?>
                <div class="grid md:grid-cols-2 gap-6">
                    <?php foreach ($benefits as $benefit): ?>
                    <div class="flex items-center space-x-3">
                        <div class="w-6 h-6 rounded-full gradient-bg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check text-white text-xs"></i>
                        </div>
                        <span class="text-base"><?= $benefit ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <p class="text-center text-muted-foreground py-4">No benefits available.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="py-20 px-4 lg:px-8">
    <div class="container mx-auto max-w-4xl text-center space-y-8">
        <h2 class="text-4xl md:text-5xl font-bold"><?= $cta_title ?? 'Ready to Automate Your Business?' ?></h2>
        <p class="text-xl text-muted-foreground">
            <?= $cta_subtitle ?? 'Start saving time and money with intelligent process automation' ?>
        </p>
        <div class="pt-4">
            <a href="/schedule-consultation">
                <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8 gradient-bg shadow-glow">
                    <?= $cta_button_text ?? 'Schedule Consultation' ?>
                </button>
            </a>
        </div>
    </div>
</section>