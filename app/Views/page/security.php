<!-- Content dimulai langsung dari <section> karena sudah ada template -->
<section class="py-20 px-4 lg:px-8">
    <div class="container mx-auto max-w-4xl text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-6 animate-fade-in">
            <?php echo $hero_title ?? 'Enterprise-Grade <span class="gradient-text">Security</span>'; ?>
        </h1>
        <p class="text-xl text-muted-foreground mb-8 animate-fade-in">
            <?php echo $hero_subtitle ?? 'Your data security is our top priority. We employ industry-leading security measures to protect your business.'; ?>
        </p>
    </div>
</section>

<?php if (!empty($features)): ?>
<section class="py-16 px-4 lg:px-8">
    <div class="container mx-auto max-w-6xl">
        <h2 class="text-3xl font-bold text-center mb-12">
            <?php echo $features_title ?? 'Our Security Features'; ?>
        </h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($features as $feature): ?>
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm card-hover-glow">
                <div class="p-6 pt-6">
                    <div class="w-14 h-14 rounded-lg gradient-bg flex items-center justify-center mb-4">
                        <i class="<?php echo $feature['icon'] ?? 'fas fa-shield-alt'; ?> text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3"><?php echo $feature['title']; ?></h3>
                    <p class="text-muted-foreground">
                        <?php echo $feature['description']; ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if (!empty($certifications)): ?>
<section class="py-16 px-4 lg:px-8 bg-secondary/20">
    <div class="container mx-auto max-w-4xl text-center">
        <h2 class="text-3xl font-bold mb-12">
            <?php echo $certifications_title ?? 'Certifications & Compliance'; ?>
        </h2>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
            <?php foreach ($certifications as $cert): ?>
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm gradient-border-card">
                <div class="p-6 pt-6">
                    <p class="font-semibold"><?php echo $cert['name']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if (!empty($practices)): ?>
<section class="py-20 px-4 lg:px-8">
    <div class="container mx-auto max-w-4xl">
        <h2 class="text-3xl font-bold text-center mb-12">
            <?php echo $practices_title ?? 'Our Security Practices'; ?>
        </h2>
        <div class="space-y-6">
            <?php foreach ($practices as $practice): ?>
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm gradient-border-card">
                <div class="p-6 pt-6">
                    <h3 class="text-xl font-semibold mb-3"><?php echo $practice['title']; ?></h3>
                    <p class="text-muted-foreground">
                        <?php echo $practice['description']; ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>