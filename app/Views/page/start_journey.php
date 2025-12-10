<!-- Start Your AI Transformation -->
<section class="py-20 px-4 lg:px-8">
    <div class="container mx-auto max-w-4xl text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-6 animate-fade-in">
            Start Your AI <span class="gradient-text">Transformation</span>
        </h1>
        <p class="text-xl text-muted-foreground mb-8 animate-fade-in">
            Let's build something incredible together. Fill out the form below and our team will reach out within 24 hours.
        </p>
    </div>
</section>

<!-- How We Work -->
<section class="py-16 px-4 lg:px-8 bg-secondary/20">
    <div class="container mx-auto max-w-6xl">
        <h2 class="text-3xl font-bold text-center mb-12">How We Work</h2>
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
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="space-y-2">
                        <label class="text-sm font-medium" for="firstName">First Name</label>
                        <input type="text" id="firstName" name="firstName" required 
                               class="w-full px-3 py-2 rounded-md border border-border bg-background focus:outline-none focus:ring-2 focus:ring-primary">
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm font-medium" for="lastName">Last Name</label>
                        <input type="text" id="lastName" name="lastName" required 
                               class="w-full px-3 py-2 rounded-md border border-border bg-background focus:outline-none focus:ring-2 focus:ring-primary">
                    </div>
                </div>
                
                <div class="space-y-2">
                    <label class="text-sm font-medium" for="email">Work Email</label>
                    <input type="email" id="email" name="email" required 
                           class="w-full px-3 py-2 rounded-md border border-border bg-background focus:outline-none focus:ring-2 focus:ring-primary">
                </div>
                
                <div class="space-y-2">
                    <label class="text-sm font-medium" for="company">Company</label>
                    <input type="text" id="company" name="company" required 
                           class="w-full px-3 py-2 rounded-md border border-border bg-background focus:outline-none focus:ring-2 focus:ring-primary">
                </div>
                
                <div class="space-y-2">
                    <label class="text-sm font-medium" for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" 
                           class="w-full px-3 py-2 rounded-md border border-border bg-background focus:outline-none focus:ring-2 focus:ring-primary">
                </div>
                
                <div class="space-y-2">
                    <label class="text-sm font-medium" for="message">Tell us about your project</label>
                    <textarea id="message" name="message" rows="5" required 
                              class="w-full px-3 py-2 rounded-md border border-border bg-background focus:outline-none focus:ring-2 focus:ring-primary"></textarea>
                </div>
                
                <button type="submit" 
                        class="w-full py-3 px-4 rounded-md gradient-bg text-white font-medium hover:opacity-90 transition-opacity shadow-glow">
                    Submit Request
                </button>
            </form>
        </div>
    </div>
</section>

<!-- Contact Information -->
<section class="py-16 px-4 lg:px-8 bg-secondary/20">
    <div class="container mx-auto max-w-4xl">
        <div class="text-center space-y-8">
            <div>
                <h3 class="text-2xl font-bold mb-4">Get in Touch</h3>
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
                <h3 class="text-2xl font-bold mb-8">Our Global Offices</h3>
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

<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Get form data
    const formData = {
        firstName: document.getElementById('firstName').value,
        lastName: document.getElementById('lastName').value,
        email: document.getElementById('email').value,
        company: document.getElementById('company').value,
        phone: document.getElementById('phone').value,
        message: document.getElementById('message').value
    };
    
    // Here you would typically send the data to your server
    // For now, we'll just show a success message
    alert('Thank you for your submission! Our team will contact you within 24 hours.');
    
    // Reset form
    this.reset();
    
    // Scroll to top
    window.scrollTo({ top: 0, behavior: 'smooth' });
});
</script>