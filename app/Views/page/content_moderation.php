<!-- Hero Section -->
<section class="pt-32 pb-20 bg-gradient-to-b from-background to-secondary/30">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl lg:text-6xl font-bold mb-6 animate-slide-up">
                Content <span class="gradient-text">Moderation</span>
            </h1>
            <p class="text-xl text-muted-foreground mb-8 max-w-2xl mx-auto animate-slide-up">
                Protect your platform and users with intelligent content moderation that scales with your growth
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center animate-slide-up">
                <a href="/start-journey" class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium bg-primary text-primary-foreground hover:bg-primary/90 h-12 rounded-md px-6 gradient-bg shadow-glow">
                    Start Your Project
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-16 bg-secondary/20">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12">Why Choose Our Moderation Services</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <?php foreach ($features as $index => $feature): ?>
                <div class="card-hover-glow bg-card border border-border rounded-xl p-6 text-center animate-fade-in" style="animation-delay: <?= $index * 0.1 ?>s;">
                    <div class="w-14 h-14 rounded-lg gradient-bg flex items-center justify-center mx-auto mb-4 shadow-glow">
                        <i class="<?= $feature['icon'] ?> text-white text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-3"><?= $feature['title'] ?></h3>
                    <p class="text-sm text-muted-foreground"><?= $feature['description'] ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-16 bg-background">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12">Our Moderation Services</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($services as $index => $service): ?>
                <div class="gradient-border-card rounded-xl p-6 animate-fade-in" style="animation-delay: <?= $index * 0.1 ?>s;">
                    <h3 class="text-xl font-semibold mb-3"><?= $service['title'] ?></h3>
                    <p class="text-muted-foreground"><?= $service['description'] ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-16 bg-secondary/20">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="animate-fade-in">
                    <div class="text-4xl font-bold gradient-text mb-2">24/7</div>
                    <div class="text-sm text-muted-foreground">Coverage</div>
                </div>
                <div class="animate-fade-in" style="animation-delay: 0.1s;">
                    <div class="text-4xl font-bold gradient-text mb-2">50+</div>
                    <div class="text-sm text-muted-foreground">Languages</div>
                </div>
                <div class="animate-fade-in" style="animation-delay: 0.2s;">
                    <div class="text-4xl font-bold gradient-text mb-2">99.5%</div>
                    <div class="text-sm text-muted-foreground">Accuracy</div>
                </div>
                <div class="animate-fade-in" style="animation-delay: 0.3s;">
                    <div class="text-4xl font-bold gradient-text mb-2">&lt;5min</div>
                    <div class="text-sm text-muted-foreground">Response Time</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How It Works Section -->
<section class="py-20 bg-background">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold mb-4">How Our Content Moderation Works</h2>
                <p class="text-muted-foreground max-w-2xl mx-auto">
                    A comprehensive approach combining AI technology with human expertise
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center animate-fade-in">
                    <div class="w-16 h-16 rounded-full gradient-bg flex items-center justify-center mx-auto mb-4 shadow-glow">
                        <i class="fas fa-robot text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">AI Detection</h3>
                    <p class="text-muted-foreground">Advanced AI algorithms scan and flag potentially harmful content in real-time</p>
                </div>
                <div class="text-center animate-fade-in" style="animation-delay: 0.1s;">
                    <div class="w-16 h-16 rounded-full gradient-bg flex items-center justify-center mx-auto mb-4 shadow-glow">
                        <i class="fas fa-user-check text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Human Review</h3>
                    <p class="text-muted-foreground">Expert moderators review flagged content for context and nuance</p>
                </div>
                <div class="text-center animate-fade-in" style="animation-delay: 0.2s;">
                    <div class="w-16 h-16 rounded-full gradient-bg flex items-center justify-center mx-auto mb-4 shadow-glow">
                        <i class="fas fa-chart-line text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Continuous Learning</h3>
                    <p class="text-muted-foreground">Our systems learn and adapt to emerging threats and platform changes</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-blue-500 to-purple-500 text-white">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6">Keep Your Platform Safe</h2>
            <p class="text-xl text-blue-100 mb-8">Let's discuss your content moderation needs</p>
            <a href="/start-journey" class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium bg-white text-blue-600 hover:bg-blue-50 h-12 rounded-md px-8 shadow-lg">
                Schedule Consultation
                <i class="fas fa-calendar-check"></i>
            </a>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-20 bg-background">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="animate-fade-in">
                    <h2 class="text-3xl lg:text-4xl font-bold mb-6">Benefits of Professional Content Moderation</h2>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-4">
                            <div class="w-6 h-6 rounded-full gradient-bg flex items-center justify-center mt-1 flex-shrink-0">
                                <i class="fas fa-check text-white text-xs"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Brand Protection</h4>
                                <p class="text-muted-foreground text-sm">Maintain brand reputation and user trust</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-6 h-6 rounded-full gradient-bg flex items-center justify-center mt-1 flex-shrink-0">
                                <i class="fas fa-check text-white text-xs"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Legal Compliance</h4>
                                <p class="text-muted-foreground text-sm">Stay compliant with international regulations</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-6 h-6 rounded-full gradient-bg flex items-center justify-center mt-1 flex-shrink-0">
                                <i class="fas fa-check text-white text-xs"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">User Safety</h4>
                                <p class="text-muted-foreground text-sm">Create safe environments for all users</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-6 h-6 rounded-full gradient-bg flex items-center justify-center mt-1 flex-shrink-0">
                                <i class="fas fa-check text-white text-xs"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Cost Efficiency</h4>
                                <p class="text-muted-foreground text-sm">Scale moderation without increasing overhead</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="animate-fade-in" style="animation-delay: 0.2s;">
                    <div class="bg-card border border-border rounded-xl p-8 card-hover-glow">
                        <h3 class="text-2xl font-bold mb-4">Get Started Today</h3>
                        <p class="text-muted-foreground mb-6">
                            Ready to implement professional content moderation? Contact us for a customized solution.
                        </p>
                        <a href="/start-journey" class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium bg-primary text-primary-foreground hover:bg-primary/90 h-12 rounded-md px-6 gradient-bg shadow-glow w-full">
                            Start Your Safety Journey
                            <i class="fas fa-shield-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>