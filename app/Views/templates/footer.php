<!-- Footer -->
<footer class="bg-secondary/30 border-t border-border">
    <div class="container mx-auto px-4 lg:px-8 py-16">
        <div class="flex justify-center mb-12">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-12 max-w-5xl">
                <div class="space-y-4">
                    <h3 class="font-semibold mb-4">Services</h3>
                    <ul class="space-y-3">
                        <li><a href="/services/data-annotation" class="text-sm hover-gradient-text">Data Annotation</a></li>
                        <li><a href="/services/trust-safety" class="text-sm hover-gradient-text">Trust & Safety</a></li>
                        <li><a href="/services/content-moderation" class="text-sm hover-gradient-text">Content Moderation</a></li>
                        <li><a href="/services/customer-support" class="text-sm hover-gradient-text">Customer Support</a></li>
                        <li><a href="/services/talent-solution" class="text-sm hover-gradient-text">Talent Solution</a></li>
                        <li><a href="/services/social-media" class="text-sm hover-gradient-text">Social Media</a></li>
                    </ul>
                </div>
                
                <div class="space-y-4">
                    <h3 class="font-semibold mb-4">Industries</h3>
                    <ul class="space-y-3">
                        <li><a href="/industries/gaming-entertainment" class="text-sm hover-gradient-text">Gaming & Entertainment</a></li>
                        <li><a href="/industries/fintech-banking" class="text-sm hover-gradient-text">FinTech & Banking</a></li>
                        <li><a href="/industries/ecommerce-retail" class="text-sm hover-gradient-text">E-Commerce & Retail</a></li>
                        <li><a href="/industries/technology" class="text-sm hover-gradient-text">Technology</a></li>
                        <li><a href="/industries/travel-tourism" class="text-sm hover-gradient-text">Travel & Tourism</a></li>
                    </ul>
                </div>
                
                <div class="space-y-4">
                    <h3 class="font-semibold mb-4">Company</h3>
                    <ul class="space-y-3">
                        <li><a href="/about" class="text-sm hover-gradient-text">About</a></li>
                        <li><a href="/careers" class="text-sm hover-gradient-text">Careers</a></li>
                        <li><a href="/press" class="text-sm hover-gradient-text">Press</a></li>
                        <li><a href="/our-work" class="text-sm hover-gradient-text">Our Work</a></li>
                        <li><a href="/why-startout-ai" class="text-sm hover-gradient-text">Why Startout AI?</a></li>
                    </ul>
                </div>
                
                <div class="space-y-4">
                    <h3 class="font-semibold mb-4">Resources</h3>
                    <ul class="space-y-3">
                        <li><a href="/resources" class="text-sm hover-gradient-text">Resources</a></li>
                        <li><a href="/process-automation" class="text-sm hover-gradient-text">AI & Process Automation</a></li>
                        <li><a href="/start-journey" class="text-sm hover-gradient-text">Start Journey</a></li>
                        <li><a href="/security" class="text-sm hover-gradient-text">Security</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="border-t border-border pt-12 pb-8">
            <div class="max-w-md mx-auto text-center space-y-4">
                <div class="flex items-center justify-center space-x-2">
                    <div class="w-10 h-10 rounded-lg gradient-bg flex items-center justify-center shadow-glow">
                        <span class="text-white font-bold text-xl">S</span>
                    </div>
                    <span class="text-xl font-bold">Startout AI</span>
                </div>
                <p class="text-muted-foreground">
                    Empowering startups with intelligent AI solutions for the modern business landscape.
                </p>
                <div class="flex justify-center space-x-4">
                    <a href="https://x.com" target="_blank" rel="noopener noreferrer" aria-label="X (formerly Twitter)" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium hover:bg-accent hover:text-accent-foreground h-10 w-10">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium hover:bg-accent hover:text-accent-foreground h-10 w-10">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" aria-label="Facebook" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium hover:bg-accent hover:text-accent-foreground h-10 w-10">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" aria-label="Instagram" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium hover:bg-accent hover:text-accent-foreground h-10 w-10">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="mailto:contact@startoutai.com" aria-label="Email" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium hover:bg-accent hover:text-accent-foreground h-10 w-10">
                        <i class="fas fa-envelope"></i>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="text-center text-sm text-muted-foreground pt-8 border-t border-border space-y-2">
            <a href="/privacy-cookies" class="inline-block text-sm hover-gradient-text mb-2">Privacy and Cookies</a>
            <p>© 2025 Startout AI. All rights reserved.</p>
        </div>
    </div>
</footer>

<!-- Back to Top Button -->
<div class="back-to-top" id="back-to-top">
    <i class="fas fa-arrow-up"></i>
</div>

 <script>
        // Mobile Menu Toggle
        const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuClose = document.getElementById('mobile-menu-close');
        
        mobileMenuToggle.addEventListener('click', () => {
            mobileMenu.classList.add('active');
        });
        
        mobileMenuClose.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
        });
        
        // Theme Toggle
        const themeToggle = document.querySelector('.theme-toggle');
        const themeIcon = themeToggle.querySelector('i');
        
        themeToggle.addEventListener('click', () => {
            document.body.classList.toggle('dark');
            
            if (document.body.classList.contains('dark')) {
                themeIcon.classList.remove('fa-moon');
                themeIcon.classList.add('fa-sun');
            } else {
                themeIcon.classList.remove('fa-sun');
                themeIcon.classList.add('fa-moon');
            }
        });
        
        // Back to Top Button
        const backToTop = document.getElementById('back-to-top');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTop.classList.add('active');
            } else {
                backToTop.classList.remove('active');
            }
        });
        
        backToTop.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    mobileMenu.classList.remove('active');
                }
            });
        });
        
        // Add animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in');
                }
            });
        }, observerOptions);
        
        // Observe elements for animation
        document.querySelectorAll('.card-hover-glow, .gradient-border-card').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>
</html>