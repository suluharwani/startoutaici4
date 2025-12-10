<!-- Start Your AI Transformation -->
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

<!-- How We Work -->
<section class="py-16 px-4 lg:px-8 bg-secondary/20">
    <div class="container mx-auto max-w-6xl">
        <h2 class="text-3xl font-bold text-center mb-12"><?= $process_title ?></h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php foreach ($processSteps as $index => $step): ?>
            <div class="card-hover-glow gradient-border-card rounded-lg p-6 animate-slide-up" style="animation-delay: <?= $index * 0.1 ?>s">
                <div class="w-12 h-12 rounded-lg gradient-bg flex items-center justify-center mb-4 shadow-glow">
                    <i class="<?= $step['icon'] ?> text-white text-lg"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2"><?= $step['title'] ?></h3>
                <p class="text-sm text-muted-foreground"><?= $step['description'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Contact Form -->
<section class="py-20 px-4 lg:px-8">
    <div class="container mx-auto max-w-2xl">
        <div class="gradient-border-card rounded-lg p-6 animate-fade-in">
            <form class="space-y-6" id="contactForm">
                <!-- Form fields tetap sama -->
                <!-- ... -->
            </form>
        </div>
    </div>
</section>

<!-- Contact Information -->
<section class="py-16 px-4 lg:px-8 bg-secondary/20">
    <div class="container mx-auto max-w-4xl">
        <div class="text-center space-y-8">
            <div>
                <h3 class="text-2xl font-bold mb-4"><?= $contact_title ?></h3>
                <div class="space-y-2">
                    <p class="text-muted-foreground">
                        <strong>Email:</strong> 
                        <a href="mailto:hello@startoutai.com" class="text-primary hover:underline">hello@startoutai.com</a>
                    </p>
                    <p class="text-muted-foreground">
                        <strong>Mailing Address:</strong><br>
                        Yogyakarta, Indonesia
                    </p>
                </div>
            </div>
            
            <div class="flex justify-center gap-4">
                <a href="/schedule-consultation" 
                   class="inline-flex items-center justify-center px-4 py-2 border border-border rounded-md hover:bg-accent transition-colors">
                    Schedule Consultation
                </a>
                <a href="/press" 
                   class="inline-flex items-center justify-center px-4 py-2 border border-border rounded-md hover:bg-accent transition-colors">
                    Press & Media
                </a>
            </div>
            
            <div class="mt-12">
                <h3 class="text-2xl font-bold mb-8"><?= $offices_title ?></h3>
                <div class="grid md:grid-cols-3 gap-4">
                    <?php foreach ($offices as $office): ?>
                    <div class="gradient-border-card rounded-lg p-6 hover-scale">
                        <h4 class="font-semibold mb-1"><?= $office['city'] ?></h4>
                        <p class="text-sm text-muted-foreground">ZIP: <?= $office['zip'] ?></p>
                        <p class="text-sm text-muted-foreground">Tel: <?= $office['phone'] ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>