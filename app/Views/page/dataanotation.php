<!-- Hero Section -->
<section class="py-20 px-4 lg:px-8">
    <div class="container mx-auto max-w-4xl text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-6 animate-fade-in">
            <span class="gradient-text">Data Annotation</span> Services
        </h1>
        <p class="text-xl text-muted-foreground mb-8 animate-fade-in">
            Power your AI models with expertly annotated data at scale
        </p>
        <a href="<?= base_url('start-journey') ?>">
            <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8 gradient-bg shadow-glow">
                Start Your Project
            </button>
        </a>
    </div>
</section>

<!-- Features Section -->
<section class="py-16 px-4 lg:px-8 bg-secondary/20">
    <div class="container mx-auto max-w-6xl">
        <h2 class="text-3xl font-bold text-center mb-12">
            Why Choose Our Annotation Services
        </h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php if (isset($features) && !empty($features)): ?>
                <?php foreach ($features as $feature): ?>
                <div class="rounded-lg border bg-card text-card-foreground shadow-sm card-hover-glow">
                    <div class="p-6 pt-6 text-center">
                        <div class="w-14 h-14 rounded-lg gradient-bg flex items-center justify-center mx-auto mb-4">
                            <i class="<?= esc($feature['icon']) ?> text-white text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold mb-3"><?= esc($feature['title']) ?></h3>
                        <p class="text-sm text-muted-foreground"><?= esc($feature['description']) ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-span-3 text-center py-8">
                    <p class="text-muted-foreground">No features available at the moment.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Solutions Section -->
<section class="py-16 px-4 lg:px-8">
    <div class="container mx-auto max-w-6xl">
        <h2 class="text-3xl font-bold text-center mb-12">
            Our Annotation Solutions
        </h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php 
            $solutions = [
                [
                    'title' => 'Computer Vision Labeling',
                    'description' => 'Bounding boxes, polygons, keypoints, and semantic segmentation for training vision models.'
                ],
                [
                    'title' => 'Natural Language Processing',
                    'description' => 'Text annotation, entity extraction, intent classification, and sentiment analysis.'
                ],
                [
                    'title' => 'Audio & Speech Data',
                    'description' => 'Transcription, speaker diarization, and acoustic event detection for speech AI.'
                ],
                [
                    'title' => '3D Point Cloud Annotation',
                    'description' => 'LiDAR and 3D sensor data labeling for autonomous vehicles and robotics.'
                ],
                [
                    'title' => 'Medical Data Labeling',
                    'description' => 'Healthcare-grade annotation for medical imaging, clinical notes, and patient records.'
                ],
                [
                    'title' => 'Custom Taxonomy Design',
                    'description' => 'Develop specialized labeling schemas tailored to your unique AI requirements.'
                ]
            ];
            ?>
            
            <?php foreach ($solutions as $solution): ?>
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm gradient-border-card">
                <div class="p-6 pt-6">
                    <h3 class="text-xl font-semibold mb-3"><?= esc($solution['title']) ?></h3>
                    <p class="text-muted-foreground"><?= esc($solution['description']) ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-16 px-4 lg:px-8 bg-secondary/20">
    <div class="container mx-auto max-w-4xl">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="text-4xl font-bold gradient-text mb-2">99%+</div>
                <div class="text-sm text-muted-foreground">Accuracy</div>
            </div>
            <div>
                <div class="text-4xl font-bold gradient-text mb-2">50+</div>
                <div class="text-sm text-muted-foreground">Languages</div>
            </div>
            <div>
                <div class="text-4xl font-bold gradient-text mb-2">1M+</div>
                <div class="text-sm text-muted-foreground">Data Points Daily</div>
            </div>
            <div>
                <div class="text-4xl font-bold gradient-text mb-2">24/7</div>
                <div class="text-sm text-muted-foreground">Operations</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 px-4 lg:px-8">
    <div class="container mx-auto max-w-3xl text-center">
        <h2 class="text-3xl font-bold mb-6">Improve Your AI Models</h2>
        <p class="text-xl text-muted-foreground mb-8">Start with high-quality training data today</p>
        <a href="<?= base_url('schedule-consultation') ?>">
            <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8 gradient-bg shadow-glow">
                Schedule Consultation
            </button>
        </a>
    </div>
</section>