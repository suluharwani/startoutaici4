<!-- Hero Section -->
<section class="py-20 px-4 lg:px-8">
    <div class="container mx-auto max-w-4xl text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-6 animate-fade-in">
            <span class="gradient-text">Our Work</span> Speaks for Itself
        </h1>
        <p class="text-xl text-muted-foreground mb-8 animate-fade-in">
            Real results from real clients across diverse industries
        </p>
        <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium border border-input bg-background hover:bg-accent hover:text-accent-foreground h-11 rounded-md px-8 group">
            <i class="fas fa-play w-5 h-5 mr-2 group-hover:scale-110 transition-transform"></i>
            Watch Video
        </button>
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

<!-- Case Studies Section -->
<section class="py-16 px-4 lg:px-8">
    <div class="container mx-auto max-w-6xl">
        <h2 class="text-3xl font-bold text-center mb-12">Featured Case Studies</h2>
        <div class="space-y-12">
            <?php foreach ($caseStudies as $study): ?>
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm overflow-hidden hover-scale">
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="relative h-64 md:h-auto">
                        <img src="<?= $study['image'] ?>" alt="<?= $study['client'] ?>" class="absolute inset-0 w-full h-full object-cover">
                    </div>
                    <div class="p-6 pt-6">
                        <div class="text-sm text-primary font-semibold mb-2"><?= $study['industry'] ?></div>
                        <h3 class="text-2xl font-bold mb-4"><?= $study['client'] ?></h3>
                        <div class="space-y-4">
                            <div>
                                <h4 class="font-semibold mb-2">Challenge</h4>
                                <p class="text-sm text-muted-foreground"><?= $study['challenge'] ?></p>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-2">Solution</h4>
                                <p class="text-sm text-muted-foreground"><?= $study['solution'] ?></p>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-2">Results</h4>
                                <ul class="space-y-1">
                                    <?php foreach ($study['results'] as $result): ?>
                                    <li class="text-sm text-muted-foreground flex items-center">
                                        <span class="w-1.5 h-1.5 rounded-full bg-primary mr-2"></span>
                                        <?= $result ?>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-16 px-4 lg:px-8 bg-secondary/20">
    <div class="container mx-auto max-w-6xl">
        <h2 class="text-3xl font-bold text-center mb-12">What Our Clients Say</h2>
        <div class="grid md:grid-cols-2 gap-8">
            <?php foreach ($testimonials as $testimonial): ?>
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm hover-scale">
                <div class="p-6 pt-6">
                    <div class="flex items-start space-x-4 mb-4">
                        <img src="<?= $testimonial['avatar'] ?>" alt="<?= $testimonial['name'] ?>" class="w-16 h-16 rounded-full object-cover">
                        <div class="flex-1">
                            <h4 class="font-semibold"><?= $testimonial['name'] ?></h4>
                            <p class="text-sm text-muted-foreground"><?= $testimonial['position'] ?></p>
                            <p class="text-sm text-primary"><?= $testimonial['company'] ?></p>
                        </div>
                        <i class="fas fa-quote-right w-8 h-8 text-primary opacity-50"></i>
                    </div>
                    <div class="flex mb-3">
                        <?php for ($i = 0; $i < $testimonial['rating']; $i++): ?>
                        <i class="fas fa-star w-4 h-4 fill-primary text-primary"></i>
                        <?php endfor; ?>
                    </div>
                    <p class="text-muted-foreground italic">"<?= $testimonial['quote'] ?>"</p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 px-4 lg:px-8">
    <div class="container mx-auto max-w-3xl text-center">
        <h2 class="text-3xl font-bold mb-6">Ready to Create Your Success Story?</h2>
        <p class="text-xl text-muted-foreground mb-8">Let's discuss how we can help you achieve similar results</p>
        <a href="/start-journey" class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8 gradient-bg shadow-glow">
            Start Your Project
        </a>
    </div>
</section>