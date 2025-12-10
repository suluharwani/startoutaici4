<!-- Press Page -->
<main class="pt-16">
    <!-- Hero Section -->
    <section class="py-20 px-4 lg:px-8">
        <div class="container mx-auto max-w-4xl text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 animate-fade-in">
                <span class="gradient-text">Press</span> & Media
            </h1>
            <p class="text-xl text-muted-foreground mb-8 animate-fade-in">
                The latest news and updates from Startout AI
            </p>
        </div>
    </section>

    <!-- Recent Announcements Section -->
    <section class="py-16 px-4 lg:px-8">
        <div class="container mx-auto max-w-4xl">
            <h2 class="text-3xl font-bold mb-8">Recent Announcements</h2>
            <div class="space-y-6">
                <?php foreach ($announcements as $announcement): ?>
                <div class="rounded-lg border bg-card text-card-foreground shadow-sm hover-scale">
                    <div class="p-6 pt-6">
                        <div class="flex items-start justify-between">
                            <div class="flex-1">
                                <p class="text-sm text-muted-foreground mb-2"><?= $announcement['date'] ?></p>
                                <h3 class="text-xl font-semibold mb-2"><?= $announcement['title'] ?></h3>
                                <p class="text-muted-foreground mb-4"><?= $announcement['description'] ?></p>
                                <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3">
                                    <i class="fas fa-file-alt w-4 h-4 mr-2"></i>
                                    Read More
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Media Kit Section -->
    <section class="py-16 px-4 lg:px-8 bg-secondary/20">
        <div class="container mx-auto max-w-4xl">
            <h2 class="text-3xl font-bold mb-8">Media Kit</h2>
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
                <div class="p-6 pt-6">
                    <p class="text-muted-foreground mb-6">Download our media kit for logos, brand guidelines, and press materials.</p>
                    <div class="space-y-4">
                        <?php foreach ($mediaKit as $item): ?>
                        <div class="flex items-center justify-between p-4 bg-secondary/50 rounded-lg">
                            <div class="flex items-center">
                                <i class="fas fa-file-alt w-5 h-5 mr-3 text-primary"></i>
                                <div>
                                    <p class="font-medium"><?= $item['name'] ?></p>
                                    <p class="text-sm text-muted-foreground"><?= $item['size'] ?></p>
                                </div>
                            </div>
                            <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3">
                                <i class="fas fa-download w-4 h-4"></i>
                            </button>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="mt-6 pt-6 border-t border-border">
                        <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 gradient-bg">
                            Download Complete Media Kit
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Media Inquiries Section -->
    <section class="py-20 px-4 lg:px-8">
        <div class="container mx-auto max-w-3xl text-center">
            <h2 class="text-3xl font-bold mb-6">Media Inquiries</h2>
            <p class="text-xl text-muted-foreground mb-8">For press inquiries, please contact our media team</p>
            <div class="space-y-4 mb-8">
                <?php foreach ($contacts as $contact): ?>
                <div>
                    <p class="font-semibold text-foreground mb-2"><?= $contact['label'] ?></p>
                    <p class="text-muted-foreground"><?= $contact['value'] ?></p>
                </div>
                <?php endforeach; ?>
            </div>
            <a href="/schedule-consultation">
                <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8 gradient-bg shadow-glow">
                    Schedule Consultation
                </button>
            </a>
        </div>
    </section>
</main>

<style>
    .hover-scale {
        transition: all 0.3s ease;
    }
    
    .hover-scale:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }
</style>