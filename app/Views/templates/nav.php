<!-- Navigation -->
<nav class="fixed top-0 left-0 right-0 z-50 bg-background/80 backdrop-blur-lg border-b border-border">
    <div class="container mx-auto px-4 lg:px-6">
        <div class="flex items-center justify-between h-14">
            <a href="/" class="flex items-center space-x-2">
                <div class="w-8 h-8 rounded-lg gradient-bg flex items-center justify-center shadow-glow">
                    <span class="text-white font-bold text-lg">S</span>
                </div>
                <span class="text-lg font-bold hidden sm:inline">Startout AI</span>
            </a>
            
            <div class="hidden md:flex items-center space-x-4">
                <div class="dropdown">
                    <div class="flex items-center text-xs font-medium hover-gradient-text cursor-pointer px-2 py-1">
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
                    <div class="flex items-center text-xs font-medium hover-gradient-text cursor-pointer px-2 py-1">
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
                
                <a href="/process-automation" class="text-xs font-medium hover-gradient-text px-2 py-1">AI & Process Automation</a>
                <a href="/security" class="text-xs font-medium hover-gradient-text px-2 py-1">Security & Compliance</a>
                
                <div class="dropdown">
                    <div class="flex items-center text-xs font-medium hover-gradient-text cursor-pointer px-2 py-1">
                        Company <i class="fas fa-chevron-down ml-1 text-xs"></i>
                    </div>
                    <div class="dropdown-content">
                        <a href="/about">About</a>
                        <a href="/careers">Careers</a>
                        <a href="/press">Press</a>
                        <a href="/our-work">Our Work</a>
                    </div>
                </div>
                
                <a href="/why-startout-ai" class="text-xs font-medium hover-gradient-text px-2 py-1">Why Startout AI?</a>
                <a href="/resources" class="text-xs font-medium hover-gradient-text px-2 py-1">Resources</a>
            </div>
            
            <div class="hidden md:flex items-center space-x-3">
                <button class="theme-toggle p-1">
                    <i class="fas fa-moon text-sm"></i>
                </button>
                <a href="/careers" class="inline-flex items-center justify-center gap-1 whitespace-nowrap text-xs font-medium border border-input bg-background hover:bg-accent hover:text-accent-foreground h-7 rounded px-2 py-1">
                    Join Us
                </a>
                <a href="/start-journey" class="inline-flex items-center justify-center gap-1 whitespace-nowrap text-xs font-medium bg-primary text-primary-foreground hover:bg-primary/90 h-7 rounded px-2 py-1 gradient-bg shadow-glow">
                    Contact
                </a>
            </div>
            
            <button class="md:hidden p-1" id="mobile-menu-toggle">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </div>
</nav>

<!-- Mobile Menu -->
<div class="mobile-menu" id="mobile-menu">
    <div class="flex justify-between items-center p-4 border-b border-border">
        <a href="/" class="flex items-center space-x-2">
            <div class="w-8 h-8 rounded-lg gradient-bg flex items-center justify-center shadow-glow">
                <span class="text-white font-bold text-lg">S</span>
            </div>
            <span class="text-lg font-bold">Startout AI</span>
        </a>
        <button class="mobile-menu-close" id="mobile-menu-close">
            <i class="fas fa-times text-xl"></i>
        </button>
    </div>
    
    <div class="p-4 overflow-y-auto">
        <div class="space-y-4">
            <div class="space-y-2">
                <h3 class="font-semibold text-sm uppercase tracking-wider text-muted-foreground">Services</h3>
                <div class="space-y-1">
                    <a href="/services/data-annotation" class="block py-2 text-sm hover-gradient-text">Data Annotation</a>
                    <a href="/services/trust-safety" class="block py-2 text-sm hover-gradient-text">Trust & Safety</a>
                    <a href="/services/content-moderation" class="block py-2 text-sm hover-gradient-text">Content Moderation</a>
                    <a href="/services/customer-support" class="block py-2 text-sm hover-gradient-text">Customer Support</a>
                    <a href="/services/talent-solution" class="block py-2 text-sm hover-gradient-text">Talent Solution</a>
                    <a href="/services/social-media" class="block py-2 text-sm hover-gradient-text">Social Media</a>
                </div>
            </div>
            
            <div class="space-y-2">
                <h3 class="font-semibold text-sm uppercase tracking-wider text-muted-foreground">Industries</h3>
                <div class="space-y-1">
                    <a href="/industries/gaming-entertainment" class="block py-2 text-sm hover-gradient-text">Gaming & Entertainment</a>
                    <a href="/industries/fintech-banking" class="block py-2 text-sm hover-gradient-text">FinTech & Banking</a>
                    <a href="/industries/ecommerce-retail" class="block py-2 text-sm hover-gradient-text">E-Commerce & Retail</a>
                    <a href="/industries/technology" class="block py-2 text-sm hover-gradient-text">Technology</a>
                    <a href="/industries/travel-tourism" class="block py-2 text-sm hover-gradient-text">Travel & Tourism</a>
                </div>
            </div>
            
            <div class="space-y-2">
                <h3 class="font-semibold text-sm uppercase tracking-wider text-muted-foreground">Company</h3>
                <div class="space-y-1">
                    <a href="/about" class="block py-2 text-sm hover-gradient-text">About</a>
                    <a href="/careers" class="block py-2 text-sm hover-gradient-text">Careers</a>
                    <a href="/press" class="block py-2 text-sm hover-gradient-text">Press</a>
                    <a href="/our-work" class="block py-2 text-sm hover-gradient-text">Our Work</a>
                    <a href="/why-startout-ai" class="block py-2 text-sm hover-gradient-text">Why Startout AI?</a>
                </div>
            </div>
            
            <div class="space-y-2">
                <h3 class="font-semibold text-sm uppercase tracking-wider text-muted-foreground">Resources</h3>
                <div class="space-y-1">
                    <a href="/resources" class="block py-2 text-sm hover-gradient-text">Resources</a>
                    <a href="/process-automation" class="block py-2 text-sm hover-gradient-text">AI & Process Automation</a>
                    <a href="/start-journey" class="block py-2 text-sm hover-gradient-text">Start Journey</a>
                    <a href="/security" class="block py-2 text-sm hover-gradient-text">Security</a>
                </div>
            </div>
            
            <div class="space-y-2">
                <h3 class="font-semibold text-sm uppercase tracking-wider text-muted-foreground">Other Pages</h3>
                <div class="space-y-1">
                    <a href="/process-automation" class="block py-2 text-sm hover-gradient-text">AI & Process Automation</a>
                    <a href="/security" class="block py-2 text-sm hover-gradient-text">Security & Compliance</a>
                </div>
            </div>
            
            <div class="flex space-x-3 pt-6">
                <a href="/careers" class="flex-1 inline-flex items-center justify-center text-xs font-medium border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md">
                    Join Us
                </a>
                <a href="/start-journey" class="flex-1 inline-flex items-center justify-center text-xs font-medium bg-primary text-primary-foreground hover:bg-primary/90 h-9 rounded-md gradient-bg shadow-glow">
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</div>