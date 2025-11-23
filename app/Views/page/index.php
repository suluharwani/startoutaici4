<!-- Hero Section -->
<section class="relative min-h-[60vh] flex items-center justify-center overflow-hidden pt-20">
    <div class="absolute inset-0 bg-gradient-to-b from-background via-secondary/30 to-background"></div>
    
    <div class="absolute inset-0 opacity-30">
        <div class="absolute top-20 left-10 w-72 h-72 bg-primary/20 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-accent/20 rounded-full blur-3xl animate-pulse delay-1000"></div>
    </div>
    
    <div class="container relative z-10 mx-auto px-4 lg:px-8 py-16">
        <div class="max-w-5xl mx-auto text-center space-y-8 animate-fade-in">
            <div class="inline-flex items-center space-x-2 px-4 py-2 rounded-full bg-secondary border border-border">
                <i class="fas fa-tags text-primary"></i>
                <span class="text-sm font-medium">Data Annotation Services</span>
            </div>
            
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold leading-tight">
                Precision <span class="gradient-text">Data Annotation</span>
            </h1>
            
            <p class="text-xl md:text-2xl text-muted-foreground max-w-3xl mx-auto leading-relaxed">
                High-quality data labeling and annotation services powered by AI and human expertise. 
                Train your machine learning models with accurately annotated data at scale.
            </p>
            
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-8">
                <a href="/start-journey" class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md gradient-bg shadow-glow text-lg px-8 py-6">
                    Start Your Project
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
                <a href="#services" class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium border border-input bg-background hover:bg-accent hover:text-accent-foreground h-11 rounded-md text-lg px-8 py-6">
                    View Services
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Services Overview -->
<section class="py-20 bg-secondary/30" id="services">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="text-center space-y-4 mb-16">
            <h2 class="text-3xl md:text-5xl font-bold">
                Comprehensive <span class="gradient-text">Annotation Services</span>
            </h2>
            <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                From image classification to complex video annotation, we provide end-to-end data labeling solutions
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <!-- Image Annotation -->
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm group card-hover-glow border-border/50">
                <div class="flex flex-col space-y-1.5 p-6">
                    <div class="w-12 h-12 rounded-lg gradient-bg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                        <i class="fas fa-image text-white text-xl"></i>
                    </div>
                    <h3 class="font-semibold tracking-tight text-xl">Image Annotation</h3>
                </div>
                <div class="p-6 pt-0">
                    <p class="text-muted-foreground text-base mb-4">
                        Bounding boxes, polygons, semantic segmentation, and keypoint annotation for computer vision models.
                    </p>
                    <ul class="space-y-2 text-sm text-muted-foreground">
                        <li class="flex items-center space-x-2">
                            <i class="fas fa-check text-primary text-xs"></i>
                            <span>Object Detection</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <i class="fas fa-check text-primary text-xs"></i>
                            <span>Instance Segmentation</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <i class="fas fa-check text-primary text-xs"></i>
                            <span>Landmark Annotation</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Text Annotation -->
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm group card-hover-glow border-border/50">
                <div class="flex flex-col space-y-1.5 p-6">
                    <div class="w-12 h-12 rounded-lg gradient-bg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                        <i class="fas fa-file-alt text-white text-xl"></i>
                    </div>
                    <h3 class="font-semibold tracking-tight text-xl">Text Annotation</h3>
                </div>
                <div class="p-6 pt-0">
                    <p class="text-muted-foreground text-base mb-4">
                        Named entity recognition, sentiment analysis, text classification, and semantic role labeling.
                    </p>
                    <ul class="space-y-2 text-sm text-muted-foreground">
                        <li class="flex items-center space-x-2">
                            <i class="fas fa-check text-primary text-xs"></i>
                            <span>NER & POS Tagging</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <i class="fas fa-check text-primary text-xs"></i>
                            <span>Sentiment Analysis</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <i class="fas fa-check text-primary text-xs"></i>
                            <span>Text Classification</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Video Annotation -->
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm group card-hover-glow border-border/50">
                <div class="flex flex-col space-y-1.5 p-6">
                    <div class="w-12 h-12 rounded-lg gradient-bg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                        <i class="fas fa-video text-white text-xl"></i>
                    </div>
                    <h3 class="font-semibold tracking-tight text-xl">Video Annotation</h3>
                </div>
                <div class="p-6 pt-0">
                    <p class="text-muted-foreground text-base mb-4">
                        Frame-by-frame object tracking, activity recognition, and temporal segmentation for video analysis.
                    </p>
                    <ul class="space-y-2 text-sm text-muted-foreground">
                        <li class="flex items-center space-x-2">
                            <i class="fas fa-check text-primary text-xs"></i>
                            <span>Object Tracking</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <i class="fas fa-check text-primary text-xs"></i>
                            <span>Action Recognition</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <i class="fas fa-check text-primary text-xs"></i>
                            <span>Event Detection</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="py-20">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="text-center space-y-4 mb-16">
            <h2 class="text-3xl md:text-5xl font-bold">
                Our <span class="gradient-text">Annotation Process</span>
            </h2>
            <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                A streamlined workflow ensuring quality and efficiency in every project
            </p>
        </div>
        
        <div class="grid md:grid-cols-4 gap-8 max-w-6xl mx-auto">
            <div class="text-center space-y-4">
                <div class="w-16 h-16 rounded-full gradient-bg flex items-center justify-center mx-auto shadow-glow">
                    <span class="text-white font-bold text-xl">1</span>
                </div>
                <h3 class="font-semibold text-lg">Data Assessment</h3>
                <p class="text-sm text-muted-foreground">
                    Analyze your data requirements and define annotation guidelines
                </p>
            </div>
            
            <div class="text-center space-y-4">
                <div class="w-16 h-16 rounded-full gradient-bg flex items-center justify-center mx-auto shadow-glow">
                    <span class="text-white font-bold text-xl">2</span>
                </div>
                <h3 class="font-semibold text-lg">AI-Powered Pre-labeling</h3>
                <p class="text-sm text-muted-foreground">
                    Use our AI models to accelerate the annotation process
                </p>
            </div>
            
            <div class="text-center space-y-4">
                <div class="w-16 h-16 rounded-full gradient-bg flex items-center justify-center mx-auto shadow-glow">
                    <span class="text-white font-bold text-xl">3</span>
                </div>
                <h3 class="font-semibold text-lg">Human Verification</h3>
                <p class="text-sm text-muted-foreground">
                    Expert annotators review and refine AI-generated labels
                </p>
            </div>
            
            <div class="text-center space-y-4">
                <div class="w-16 h-16 rounded-full gradient-bg flex items-center justify-center mx-auto shadow-glow">
                    <span class="text-white font-bold text-xl">4</span>
                </div>
                <h3 class="font-semibold text-lg">Quality Assurance</h3>
                <p class="text-sm text-muted-foreground">
                    Multi-stage quality checks ensure annotation accuracy
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-br from-primary/10 to-accent/10">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-4xl mx-auto text-center space-y-8">
            <h2 class="text-3xl md:text-5xl font-bold">
                Ready to <span class="gradient-text">Annotate Your Data?</span>
            </h2>
            <p class="text-xl text-muted-foreground">
                Get started with our professional data annotation services and accelerate your AI projects
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-8">
                <a href="/start-journey" class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md gradient-bg shadow-glow text-lg px-8 py-6">
                    Start Your Project
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
                <a href="/contact" class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium border border-input bg-background hover:bg-accent hover:text-accent-foreground h-11 rounded-md text-lg px-8 py-6">
                    Schedule a Demo
                </a>
            </div>
        </div>
    </div>
</section>