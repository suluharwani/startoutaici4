<?php
// File: index.php (view untuk halaman homepage)
?>
<section class="relative min-h-screen flex items-center justify-center overflow-hidden pt-16">
    <div class="absolute inset-0 bg-gradient-to-b from-background via-secondary/30 to-background"></div>
    
    <div class="absolute inset-0 opacity-30">
        <div class="absolute top-20 left-10 w-72 h-72 bg-primary/20 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-accent/20 rounded-full blur-3xl animate-pulse delay-1000"></div>
    </div>
    
    <div class="container relative z-10 mx-auto px-4 lg:px-8 py-20">
        <div class="max-w-5xl mx-auto text-center space-y-8 animate-fade-in">
            <div class="inline-flex items-center space-x-2 px-4 py-2 rounded-full bg-secondary border border-border">
                <i class="fas fa-sparkles text-primary"></i>
                <span class="text-sm font-medium">AI-Powered Business Solutions</span>
            </div>
            
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold leading-tight">
                <?= $hero_title ?? 'Transform Your Startup with <span class="gradient-text">Intelligent AI</span>' ?>
            </h1>
            
            <p class="text-xl md:text-2xl text-muted-foreground max-w-3xl mx-auto leading-relaxed">
                <?= $hero_subtitle ?? 'Accelerate growth, automate operations, and scale efficiently with AI-driven solutions tailored for modern startups. Experience the future of business intelligence today.' ?>
            </p>
            
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-8">
                <a href="/start-journey" class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md gradient-bg shadow-glow text-lg px-8 py-6">
                    <?= $cta_button_text ?? 'Start Your Journey' ?>
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
            
            <div class="grid grid-cols-3 gap-8 pt-12 max-w-3xl mx-auto">
                <?php foreach ($stats as $stat): ?>
                <div class="space-y-2">
                    <div class="text-3xl md:text-4xl font-bold gradient-text"><?= $stat['value'] ?? '' ?></div>
                    <div class="text-sm text-muted-foreground"><?= $stat['label'] ?? '' ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        
        <div class="mt-20 animate-slide-up">
            <div class="relative max-w-5xl mx-auto">
                <div class="absolute inset-0 gradient-bg opacity-20 blur-3xl rounded-3xl"></div>
                <img src="https://images.unsplash.com/photo-1620712943543-bcc4688e7485?auto=format&fit=crop&w=1200&q=80" 
                     alt="AI Technology Visualization" 
                     class="relative rounded-3xl shadow-2xl border border-border/50 w-full">
            </div>
        </div>
    </div>
</section>

<section class="py-24 bg-secondary/30" id="ai-solutions">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="text-center space-y-4 mb-16">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold">
                <?= $solutions_title ?? 'This is <span class="gradient-text">Intelligent Business</span>' ?>
            </h2>
            <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                <?= $solutions_subtitle ?? 'Part human expertise, part artificial intelligence' ?>
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            <?php foreach ($features as $feature): ?>
            <div class="card-hover-glow rounded-lg border bg-card text-card-foreground shadow-sm border-border/50 p-6">
                <?php if (!empty($feature['icon'])): ?>
                <div class="w-12 h-12 rounded-lg gradient-bg flex items-center justify-center mb-4">
                    <i class="<?= $feature['icon'] ?> text-white text-xl"></i>
                </div>
                <?php endif; ?>
                
                <?php if (!empty($feature['title'])): ?>
                <h3 class="font-semibold tracking-tight text-xl mb-2"><?= $feature['title'] ?></h3>
                <?php endif; ?>
                
                <?php if (!empty($feature['description'])): ?>
                <p class="text-muted-foreground">
                    <?= $feature['description'] ?>
                </p>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="py-24" id="services">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="text-center space-y-4 mb-16">
            <h2 class="text-4xl md:text-5xl font-bold">
                <?= $services_title ?? 'Comprehensive <span class="gradient-text">AI Solutions</span>' ?>
            </h2>
            <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                <?= $services_subtitle ?? 'Choose the services that fit your startup\'s unique needs' ?>
            </p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <?php foreach ($services as $service): ?>
            <div class="relative overflow-hidden border-2 hover:border-primary/50 transition-all duration-300 rounded-lg bg-card text-card-foreground shadow-sm p-6">
                <h3 class="font-semibold tracking-tight text-2xl mb-3"><?= $service['title'] ?? '' ?></h3>
                <p class="text-muted-foreground text-base mb-6">
                    <?= $service['description'] ?? '' ?>
                </p>
                
                <?php if (!empty($service['features_array'])): ?>
                <ul class="space-y-3 mb-6">
                    <?php foreach ($service['features_array'] as $feature): ?>
                    <li class="flex items-center space-x-3">
                        <div class="w-5 h-5 rounded-full gradient-bg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check text-white text-xs"></i>
                        </div>
                        <span class="text-sm"><?= $feature ?></span>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
                
                <?php if (!empty($service['button_url'])): ?>
                <a href="<?= $service['button_url'] ?>" class="block w-full">
                    <button class="w-full gradient-bg text-white font-medium py-2 px-4 rounded-md hover:opacity-90 transition-opacity">
                        <?= $service['button_text'] ?? 'Learn More' ?>
                    </button>
                </a>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="py-24 bg-secondary/30">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="text-center space-y-4 mb-16">
            <h2 class="text-4xl md:text-5xl font-bold">
                <?= $annotation_title ?? 'Our <span class="gradient-text">Data Annotation</span> Expertise' ?>
            </h2>
            <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                <?= $annotation_subtitle ?? 'High-quality data labeling services for your machine learning models' ?>
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <?php foreach ($annotation_features as $feature): ?>
            <div class="card-hover-glow rounded-lg border bg-card text-card-foreground shadow-sm border-border/50 p-6">
                <?php if (!empty($feature['icon'])): ?>
                <div class="w-12 h-12 rounded-lg gradient-bg flex items-center justify-center mb-4">
                    <i class="<?= $feature['icon'] ?> text-white text-xl"></i>
                </div>
                <?php endif; ?>
                
                <?php if (!empty($feature['title'])): ?>
                <h3 class="font-semibold tracking-tight text-xl mb-3"><?= $feature['title'] ?></h3>
                <?php endif; ?>
                
                <?php if (!empty($feature['description'])): ?>
                <p class="text-muted-foreground">
                    <?= $feature['description'] ?>
                </p>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
        
        <div class="text-center mt-12">
            <a href="/services/data-annotation" class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md gradient-bg shadow-glow text-lg px-8 py-6">
                Explore All Annotation Services
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>