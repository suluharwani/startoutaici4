<section class="py-20 px-4 lg:px-8">
    <div class="container mx-auto max-w-4xl text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-6 animate-fade-in">
            <?php echo $hero_title ?? '<span class="gradient-text">Social Media</span> Management'; ?>
        </h1>
        <p class="text-xl text-muted-foreground mb-8 animate-fade-in">
            <?php echo $hero_subtitle ?? 'Amplify your brand presence with AI-powered social media strategies that drive engagement and growth'; ?>
        </p>
        <a href="/start-journey">
            <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8 gradient-bg shadow-glow">
                Start Your Project
            </button>
        </a>
    </div>
</section>

<?php if (!empty($services)): ?>
<section class="py-16 px-4 lg:px-8 bg-secondary/20">
    <div class="container mx-auto max-w-6xl">
        <h2 class="text-3xl font-bold text-center mb-12">
            <?php echo $services_title ?? 'Our Social Media Services'; ?>
        </h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php foreach ($services as $service): ?>
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm card-hover-glow">
                <div class="p-6 pt-6 text-center">
                    <div class="w-14 h-14 rounded-lg gradient-bg flex items-center justify-center mx-auto mb-4">
                        <i class="<?php echo $service['icon'] ?? 'fas fa-comments'; ?> text-white text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-3"><?php echo $service['title']; ?></h3>
                    <p class="text-sm text-muted-foreground">
                        <?php echo $service['description']; ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if (!empty($platforms)): ?>
<section class="py-16 px-4 lg:px-8">
    <div class="container mx-auto max-w-6xl">
        <h2 class="text-3xl font-bold text-center mb-12">
            <?php echo $platforms_title ?? 'Platforms We Manage'; ?>
        </h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($platforms as $platform): ?>
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm gradient-border-card">
                <div class="p-6 pt-6">
                    <h3 class="text-xl font-semibold mb-3"><?php echo $platform['name']; ?></h3>
                    <p class="text-muted-foreground">
                        <?php echo $platform['description']; ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if (!empty($included)): ?>
<section class="py-16 px-4 lg:px-8 bg-secondary/20">
    <div class="container mx-auto max-w-6xl">
        <h2 class="text-3xl font-bold text-center mb-12">
            <?php echo $included_title ?? 'What\'s Included'; ?>
        </h2>
        <div class="grid md:grid-cols-2 gap-8">
            <?php foreach ($included as $item): ?>
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm card-hover-glow">
                <div class="p-6 pt-6">
                    <h3 class="text-xl font-semibold mb-3"><?php echo $item['title']; ?></h3>
                    <p class="text-muted-foreground">
                        <?php echo $item['description']; ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if (!empty($stats)): ?>
<section class="py-16 px-4 lg:px-8">
    <div class="container mx-auto max-w-4xl">
        <h2 class="text-3xl font-bold text-center mb-12">
            <?php echo $stats_title ?? 'Our Impact'; ?>
        </h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <?php foreach ($stats as $stat): ?>
            <div>
                <div class="text-4xl font-bold gradient-text mb-2"><?php echo $stat['value']; ?></div>
                <div class="text-sm text-muted-foreground"><?php echo $stat['label']; ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<section class="py-20 px-4 lg:px-8 bg-secondary/20">
    <div class="container mx-auto max-w-3xl text-center">
        <h2 class="text-3xl font-bold mb-6">
            <?php echo $cta_title ?? 'Ready to Grow Your Social Presence?'; ?>
        </h2>
        <p class="text-xl text-muted-foreground mb-8">
            <?php echo $cta_subtitle ?? 'Let\'s create a winning social media strategy together'; ?>
        </p>
        <a href="/schedule-consultation">
            <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8 gradient-bg shadow-glow">
                <?php echo $cta_button_text ?? 'Schedule Consultation'; ?>
            </button>
        </a>
    </div>
</section>