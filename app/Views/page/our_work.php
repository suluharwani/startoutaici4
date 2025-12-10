<!-- Hero Section -->
<section class="py-20 px-4 lg:px-8">
    <div class="container mx-auto max-w-4xl text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-6 animate-fade-in">
            <?= $hero_title ?? '<span class="gradient-text">Our Work</span> Speaks for Itself' ?>
        </h1>
        <p class="text-xl text-muted-foreground mb-8 animate-fade-in">
            <?= $hero_subtitle ?? 'Real results from real clients across diverse industries' ?>
        </p>
        <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium border border-input bg-background hover:bg-accent hover:text-accent-foreground h-11 rounded-md px-8 group">
            <i class="fas fa-play w-5 h-5 mr-2 group-hover:scale-110 transition-transform"></i>
            Watch Video
        </button>
    </div>
</section>

<!-- Stats Section -->
<?php if (!empty($stats)): ?>
<section class="py-16 px-4 lg:px-8 bg-secondary/20">
    <div class="container mx-auto max-w-6xl">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <?php foreach ($stats as $stat): ?>
            <div class="text-center">
                <?php if (!empty($stat['value'])): ?>
                <div class="text-4xl md:text-5xl font-bold gradient-text mb-2"><?= $stat['value'] ?></div>
                <?php endif; ?>
                
                <?php if (!empty($stat['label'])): ?>
                <div class="text-sm text-muted-foreground"><?= $stat['label'] ?></div>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Case Studies Section -->
<?php if (!empty($caseStudies)): ?>
<section class="py-16 px-4 lg:px-8">
    <div class="container mx-auto max-w-6xl">
        <?php if (!empty($case_studies_title)): ?>
        <h2 class="text-3xl font-bold text-center mb-12"><?= $case_studies_title ?></h2>
        <?php endif; ?>
        
        <div class="space-y-12">
            <?php foreach ($caseStudies as $study): ?>
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm overflow-hidden hover-scale">
                <div class="grid md:grid-cols-2 gap-6">
                    <?php if (!empty($study['image'])): ?>
                    <div class="relative h-64 md:h-auto">
                        <img src="<?= $study['image'] ?>" alt="<?= $study['client'] ?? '' ?>" class="absolute inset-0 w-full h-full object-cover">
                    </div>
                    <?php endif; ?>
                    
                    <div class="p-6 pt-6">
                        <?php if (!empty($study['industry'])): ?>
                        <div class="text-sm text-primary font-semibold mb-2"><?= $study['industry'] ?></div>
                        <?php endif; ?>
                        
                        <?php if (!empty($study['client'])): ?>
                        <h3 class="text-2xl font-bold mb-4"><?= $study['client'] ?></h3>
                        <?php endif; ?>
                        
                        <div class="space-y-4">
                            <?php if (!empty($study['challenge'])): ?>
                            <div>
                                <h4 class="font-semibold mb-2">Challenge</h4>
                                <p class="text-sm text-muted-foreground"><?= $study['challenge'] ?></p>
                            </div>
                            <?php endif; ?>
                            
                            <?php if (!empty($study['solution'])): ?>
                            <div>
                                <h4 class="font-semibold mb-2">Solution</h4>
                                <p class="text-sm text-muted-foreground"><?= $study['solution'] ?></p>
                            </div>
                            <?php endif; ?>
                            
                            <?php if (!empty($study['results_array'])): ?>
                            <div>
                                <h4 class="font-semibold mb-2">Results</h4>
                                <ul class="space-y-1">
                                    <?php foreach ($study['results_array'] as $result): ?>
                                    <li class="text-sm text-muted-foreground flex items-center">
                                        <span class="w-1.5 h-1.5 rounded-full bg-primary mr-2"></span>
                                        <?= $result ?>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Testimonials Section -->
<?php if (!empty($testimonials)): ?>
<section class="py-16 px-4 lg:px-8 bg-secondary/20">
    <div class="container mx-auto max-w-6xl">
        <?php if (!empty($testimonials_title)): ?>
        <h2 class="text-3xl font-bold text-center mb-12"><?= $testimonials_title ?></h2>
        <?php endif; ?>
        
        <div class="grid md:grid-cols-2 gap-8">
            <?php foreach ($testimonials as $testimonial): ?>
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm hover-scale">
                <div class="p-6 pt-6">
                    <div class="flex items-start space-x-4 mb-4">
                        <?php if (!empty($testimonial['avatar'])): ?>
                        <img src="<?= $testimonial['avatar'] ?>" alt="<?= $testimonial['name'] ?? '' ?>" class="w-16 h-16 rounded-full object-cover">
                        <?php endif; ?>
                        
                        <div class="flex-1">
                            <?php if (!empty($testimonial['name'])): ?>
                            <h4 class="font-semibold"><?= $testimonial['name'] ?></h4>
                            <?php endif; ?>
                            
                            <?php if (!empty($testimonial['position'])): ?>
                            <p class="text-sm text-muted-foreground"><?= $testimonial['position'] ?></p>
                            <?php endif; ?>
                            
                            <?php if (!empty($testimonial['company'])): ?>
                            <p class="text-sm text-primary"><?= $testimonial['company'] ?></p>
                            <?php endif; ?>
                        </div>
                        <i class="fas fa-quote-right w-8 h-8 text-primary opacity-50"></i>
                    </div>
                    
                    <?php if (isset($testimonial['rating'])): ?>
                    <div class="flex mb-3">
                        <?php for ($i = 0; $i < $testimonial['rating']; $i++): ?>
                        <i class="fas fa-star w-4 h-4 fill-primary text-primary"></i>
                        <?php endfor; ?>
                    </div>
                    <?php endif; ?>
                    
                    <?php if (!empty($testimonial['quote'])): ?>
                    <p class="text-muted-foreground italic">"<?= $testimonial['quote'] ?>"</p>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- CTA Section -->
<section class="py-20 px-4 lg:px-8">
    <div class="container mx-auto max-w-3xl text-center">
        <?php if (!empty($cta_title)): ?>
        <h2 class="text-3xl font-bold mb-6"><?= $cta_title ?></h2>
        <?php endif; ?>
        
        <?php if (!empty($cta_subtitle)): ?>
        <p class="text-xl text-muted-foreground mb-8"><?= $cta_subtitle ?></p>
        <?php endif; ?>
        
        <?php if (!empty($cta_button_text)): ?>
        <a href="/start-journey" class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8 gradient-bg shadow-glow">
            <?= $cta_button_text ?>
        </a>
        <?php endif; ?>
    </div>
</section>