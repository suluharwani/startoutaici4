<!-- Navigation -->
<nav class="fixed top-0 left-0 right-0 z-50 bg-background/80 backdrop-blur-lg border-b border-border">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <a href="/" class="flex items-center space-x-2">
                <div class="w-10 h-10 rounded-lg gradient-bg flex items-center justify-center shadow-glow">
                    <span class="text-white font-bold text-xl">S</span>
                </div>
                <span class="text-xl font-bold">Startout AI</span>
            </a>
            
            <div class="hidden md:flex items-center space-x-6">
                <div class="dropdown">
                    <div class="flex items-center text-sm font-medium hover-gradient-text cursor-pointer">
                        Services <i class="fas fa-chevron-down ml-1 text-xs"></i>
                    </div>
                    <div class="dropdown-content">
                        <a href="/services/data-annotation">Data Annotation</a>
                        <a href="/services/trust-safety">Trust & Safety</a>
                        <a href="/services/content-moderation">Content Moderation</a>
                        <a href="/services/customer-support">Customer Support</a>
                        <a href="/services/talent-solution">Talent Solution</a>
                        <a href="/services/social-media">Social Media</a>
                    </div>
                </div>
                
                <div class="dropdown">
                    <div class="flex items-center text-sm font-medium hover-gradient-text cursor-pointer">
                        Industries <i class="fas fa-chevron-down ml-1 text-xs"></i>
                    </div>
                    <div class="dropdown-content">
                        <a href="/industries/gaming-entertainment">Gaming & Entertainment</a>
                        <a href="/industries/fintech-banking">FinTech & Banking</a>
                        <a href="/industries/ecommerce-retail">E-Commerce & Retail</a>
                        <a href="/industries/technology">Technology</a>
                        <a href="/industries/travel-tourism">Travel & Tourism</a>
                        <a href="/industries/automotive-mobility">Automotive & Mobility</a>
                    </div>
                </div>
                
                <a href="/process-automation" class="text-sm font-medium hover-gradient-text">AI & Process Automation</a>
                <a href="/security" class="text-sm font-medium hover-gradient-text">Security & Data Compliance</a>
                
                <div class="dropdown">
                    <div class="flex items-center text-sm font-medium hover-gradient-text cursor-pointer">
                        Company <i class="fas fa-chevron-down ml-1 text-xs"></i>
                    </div>
                    <div class="dropdown-content">
                        <a href="/about">About</a>
                        <a href="/careers">Careers</a>
                        <a href="/press">Press</a>
                        <a href="/our-work">Our Work</a>
                    </div>
                </div>
                
                <a href="/why-startout-ai" class="text-sm font-medium hover-gradient-text">Why Startout AI?</a>
                <a href="/resources" class="text-sm font-medium hover-gradient-text">Resources</a>
            </div>
            
            <div class="hidden md:flex items-center space-x-4">
                <button class="theme-toggle">
                    <i class="fas fa-moon"></i>
                </button>
                <a href="/careers" class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3">
                    Join Us
                </a>
                <a href="/start-journey" class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium bg-primary text-primary-foreground hover:bg-primary/90 h-9 rounded-md px-3 gradient-bg shadow-glow">
                    Contact Us
                </a>
            </div>
            
            <button class="md:hidden" id="mobile-menu-toggle">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </div>
</nav>

<!-- Mobile Menu -->
<div class="mobile-menu" id="mobile-menu">
    <button class="mobile-menu-close" id="mobile-menu-close">
        <i class="fas fa-times"></i>
    </button>
    
    <div class="flex flex-col space-y-6 mt-8">
        <div class="space-y-4">
            <h3 class="font-semibold text-lg">Services</h3>
            <div class="space-y-2">
                <a href="/services/data-annotation" class="block text-muted-foreground hover-gradient-text">Data Annotation</a>
                <a href="/services/trust-safety" class="block text-muted-foreground hover-gradient-text">Trust & Safety</a>
                <a href="/services/content-moderation" class="block text-muted-foreground hover-gradient-text">Content Moderation</a>
                <a href="/services/customer-support" class="block text-muted-foreground hover-gradient-text">Customer Support</a>
                <a href="/services/talent-solution" class="block text-muted-foreground hover-gradient-text">Talent Solution</a>
                <a href="/services/social-media" class="block text-muted-foreground hover-gradient-text">Social Media</a>
            </div>
        </div>
        
        <div class="space-y-4">
            <h3 class="font-semibold text-lg">Industries</h3>
            <div class="space-y-2">
                <a href="/industries/gaming-entertainment" class="block text-muted-foreground hover-gradient-text">Gaming & Entertainment</a>
                <a href="/industries/fintech-banking" class="block text-muted-foreground hover-gradient-text">FinTech & Banking</a>
                <a href="/industries/ecommerce-retail" class="block text-muted-foreground hover-gradient-text">E-Commerce & Retail</a>
                <a href="/industries/technology" class="block text-muted-foreground hover-gradient-text">Technology</a>
                <a href="/industries/travel-tourism" class="block text-muted-foreground hover-gradient-text">Travel & Tourism</a>
            </div>
        </div>
        
        <div class="space-y-4">
            <h3 class="font-semibold text-lg">Company</h3>
            <div class="space-y-2">
                <a href="/about" class="block text-muted-foreground hover-gradient-text">About</a>
                <a href="/careers" class="block text-muted-foreground hover-gradient-text">Careers</a>
                <a href="/press" class="block text-muted-foreground hover-gradient-text">Press</a>
                <a href="/our-work" class="block text-muted-foreground hover-gradient-text">Our Work</a>
                <a href="/why-startout-ai" class="block text-muted-foreground hover-gradient-text">Why Startout AI?</a>
            </div>
        </div>
        
        <div class="space-y-4">
            <h3 class="font-semibold text-lg">Resources</h3>
            <div class="space-y-2">
                <a href="/resources" class="block text-muted-foreground hover-gradient-text">Resources</a>
                <a href="/process-automation" class="block text-muted-foreground hover-gradient-text">AI & Process Automation</a>
                <a href="/start-journey" class="block text-muted-foreground hover-gradient-text">Start Journey</a>
                <a href="/security" class="block text-muted-foreground hover-gradient-text">Security</a>
            </div>
        </div>
        
        <div class="flex space-x-4 pt-4">
            <a href="/careers" class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3">
                Join Us
            </a>
            <a href="/start-journey" class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium bg-primary text-primary-foreground hover:bg-primary/90 h-9 rounded-md px-3 gradient-bg shadow-glow">
                Contact Us
            </a>
        </div>
    </div>
</div>