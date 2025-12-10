<!-- About Page -->
<main class="pt-16">
    <!-- Hero Section -->
    <section class="py-20 px-4 lg:px-8">
        <div class="container mx-auto max-w-4xl text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 animate-fade-in">
                Building the <span class="gradient-text">Future of AI</span>
            </h1>
            <p class="text-xl text-muted-foreground mb-8 animate-fade-in">
                Founded in 2024, Startout AI is on a mission to empower businesses with intelligent automation and data-driven insights.
            </p>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="py-16 px-4 lg:px-8 bg-secondary/20">
        <div class="container mx-auto max-w-4xl">
            <h2 class="text-3xl font-bold mb-8">Our Story</h2>
            <div class="space-y-4 text-muted-foreground">
                <p>
                    Startout AI was born from a simple observation: while AI technology was advancing rapidly, most businesses struggled to implement it effectively. We saw companies investing millions in AI projects that never delivered results.
                </p>
                <p>
                    Our founders, veterans of the tech industry, decided to change that. They built Startout AI to bridge the gap between cutting-edge AI research and practical business applications.
                </p>
                <p>
                    Today, we're proud to serve hundreds of companies worldwide, helping them automate operations, gain insights from their data, and stay ahead of the competition.
                </p>
            </div>
        </div>
    </section>

    <!-- Our Values Section -->
    <section class="py-16 px-4 lg:px-8">
        <div class="container mx-auto max-w-6xl">
            <h2 class="text-3xl font-bold text-center mb-12">Our Values</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <?php foreach ($values as $value): ?>
                <div class="rounded-lg border bg-card text-card-foreground shadow-sm card-hover-glow">
                    <div class="p-6 pt-6 text-center">
                        <div class="w-14 h-14 rounded-lg gradient-bg flex items-center justify-center mx-auto mb-4">
                            <i class="<?= $value['icon'] ?> text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3"><?= $value['title'] ?></h3>
                        <p class="text-sm text-muted-foreground"><?= $value['description'] ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 px-4 lg:px-8 bg-secondary/20">
        <div class="container mx-auto max-w-6xl">
            <div class="grid md:grid-cols-4 gap-8 text-center">
                <?php foreach ($stats as $stat): ?>
                <div>
                    <div class="text-4xl font-bold gradient-text mb-2"><?= $stat['value'] ?></div>
                    <div class="text-muted-foreground"><?= $stat['label'] ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>