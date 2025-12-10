<!-- Career Position Detail Page -->
<main class="pt-16">
    <section class="py-12 px-4 lg:px-8">
        <div class="container mx-auto max-w-4xl">
            <a href="/careers" class="inline-flex items-center text-sm text-muted-foreground hover:text-primary mb-6">
                <i class="fas fa-arrow-left mr-2"></i> Back to Careers
            </a>
            
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm mb-8">
                <div class="p-8">
                    <div class="flex justify-between items-start mb-6">
                        <div>
                            <h1 class="text-3xl font-bold mb-2"><?= htmlspecialchars($position['title']) ?></h1>
                            <div class="flex flex-wrap gap-4 text-sm text-muted-foreground mb-4">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt w-4 h-4 mr-1"></i>
                                    <?= htmlspecialchars($position['location']) ?>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-clock w-4 h-4 mr-1"></i>
                                    <?= htmlspecialchars($position['employment_type']) ?>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-briefcase w-4 h-4 mr-1"></i>
                                    <?= htmlspecialchars($position['department']) ?>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-calendar w-4 h-4 mr-1"></i>
                                    Posted <?= date('F j, Y', strtotime($position['created_at'])) ?>
                                </div>
                            </div>
                        </div>
                        <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8 gradient-bg shadow-glow">
                            Apply Now
                        </button>
                    </div>
                    
                    <div class="prose prose-lg max-w-none">
                        <p class="text-lg text-muted-foreground mb-6"><?= htmlspecialchars($position['description']) ?></p>
                        
                        <h2 class="text-2xl font-bold mt-8 mb-4">About the Role</h2>
                        <p>We are looking for a talented individual to join our team and help shape the future of AI-powered solutions.</p>
                        
                        <h2 class="text-2xl font-bold mt-8 mb-4">Responsibilities</h2>
                        <ul>
                            <li>Work with cutting-edge AI technologies</li>
                            <li>Collaborate with cross-functional teams</li>
                            <li>Contribute to product development</li>
                            <li>Participate in technical discussions</li>
                        </ul>
                        
                        <h2 class="text-2xl font-bold mt-8 mb-4">Requirements</h2>
                        <ul>
                            <li>3+ years of relevant experience</li>
                            <li>Strong problem-solving skills</li>
                            <li>Excellent communication abilities</li>
                            <li>Passion for technology and innovation</li>
                        </ul>
                    </div>
                    
                    <div class="mt-10 pt-8 border-t">
                        <h3 class="text-xl font-semibold mb-4">How to Apply</h3>
                        <p class="text-muted-foreground mb-6">Please send your resume and cover letter to <a href="mailto:careers@startoutai.com" class="text-primary hover:underline">careers@startoutai.com</a> with the subject line "<?= htmlspecialchars($position['title']) ?> Application".</p>
                        
                        <div class="flex flex-wrap gap-4">
                            <a href="/careers" class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 rounded-md px-6">
                                View Other Positions
                            </a>
                            <a href="/start-journey?position=<?= urlencode($position['title']) ?>" class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium bg-primary text-primary-foreground hover:bg-primary/90 h-10 rounded-md px-6 gradient-bg">
                                Apply Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>