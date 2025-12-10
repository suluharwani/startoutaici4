<!-- Careers Page -->
<main class="pt-16">
    <!-- Hero Section -->
    <section class="py-20 px-4 lg:px-8">
        <div class="container mx-auto max-w-4xl text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 animate-fade-in">
                Join Our <span class="gradient-text">Mission</span>
            </h1>
            <p class="text-xl text-muted-foreground mb-8 animate-fade-in">
                Help us shape the future of AI-powered business solutions. We're looking for talented, passionate people to join our team.
            </p>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-16 px-4 lg:px-8 bg-secondary/20">
        <div class="container mx-auto max-w-6xl">
            <h2 class="text-3xl font-bold text-center mb-12">Why Work With Us</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php foreach ($benefits as $benefit): ?>
                <div class="rounded-lg border bg-card text-card-foreground shadow-sm gradient-border-card">
                    <div class="p-6 pt-6">
                        <p class="font-medium"><?= $benefit ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Open Positions Section -->
    <section class="py-20 px-4 lg:px-8">
        <div class="container mx-auto max-w-4xl">
            <h2 class="text-3xl font-bold text-center mb-12">Open Positions</h2>
            <div class="space-y-6">
                <?php foreach ($positions as $position): ?>
                <div class="rounded-lg border bg-card text-card-foreground shadow-sm card-hover-glow">
                    <div class="flex flex-col space-y-1.5 p-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-xl font-semibold mb-2"><?= $position['title'] ?></h3>
                                <p class="text-sm text-muted-foreground"><?= $position['description'] ?></p>
                            </div>
                            <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 gradient-bg">
                                Apply
                            </button>
                        </div>
                    </div>
                    <div class="p-6 pt-0">
                        <div class="flex flex-wrap gap-4 text-sm text-muted-foreground">
                            <div class="flex items-center">
                                <i class="fas fa-map-marker-alt w-4 h-4 mr-1"></i>
                                <?= $position['location'] ?>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-clock w-4 h-4 mr-1"></i>
                                <?= $position['type'] ?>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-briefcase w-4 h-4 mr-1"></i>
                                <?= $position['department'] ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
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