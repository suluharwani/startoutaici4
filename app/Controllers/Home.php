<?php

namespace App\Controllers;


class Home extends BaseController
{
public function index()
{
    // Load model
    $homeModel = new \App\Models\HomeModel();
    
    // Get page data from database
    $pageData = $homeModel->getHomePageData();
    
    // Get related data
    $stats = $homeModel->getHomeStats($pageData['id']);
    $features = $homeModel->getHomeFeatures($pageData['id']);
    $services = $homeModel->getHomeServices($pageData['id']);
    $annotationFeatures = $homeModel->getAnnotationFeatures();
    
    $data = [
        'title' => 'Startout AI - Intelligent AI Solutions for Startups',
        'description' => 'Accelerate growth, automate operations, and scale efficiently with AI-driven solutions tailored for modern startups.',
        'page' => 'home',
        
        // Hero section
        'hero_title' => $pageData['hero_title'] ?? 'Transform Your Startup with <span class="gradient-text">Intelligent AI</span>',
        'hero_subtitle' => $pageData['hero_subtitle'] ?? 'Accelerate growth, automate operations, and scale efficiently with AI-driven solutions tailored for modern startups. Experience the future of business intelligence today.',
        'cta_button_text' => $pageData['cta_button_text'] ?? 'Start Your Journey',
        
        // Stats
        'stats' => !empty($stats) ? $stats : [
            ['value' => '98%', 'label' => 'Success Rate'],
            ['value' => '500+', 'label' => 'Startups Powered'],
            ['value' => '24/7', 'label' => 'AI Support']
        ],
        
        // Solutions section
        'solutions_title' => $pageData['solutions_title'] ?? 'This is <span class="gradient-text">Intelligent Business</span>',
        'solutions_subtitle' => $pageData['solutions_subtitle'] ?? 'Part human expertise, part artificial intelligence',
        'features' => !empty($features) ? $features : $this->getDefaultHomeFeatures(),
        
        // Services section
        'services_title' => $pageData['features_title'] ?? 'Comprehensive <span class="gradient-text">AI Solutions</span>',
        'services_subtitle' => $pageData['features_subtitle'] ?? 'Choose the services that fit your startup\'s unique needs',
        'services' => !empty($services) ? $services : $this->getDefaultHomeServices(),
        
        // Annotation section
        'annotation_title' => $pageData['annotation_title'] ?? 'Our <span class="gradient-text">Data Annotation</span> Expertise',
        'annotation_subtitle' => $pageData['annotation_subtitle'] ?? 'High-quality data labeling services for your machine learning models',
        'annotation_features' => $annotationFeatures
    ];

    return view('templates/header', $data)
         . view('templates/nav')
         . view('page/index', $data)
         . view('templates/footer');
}

// Helper methods untuk data default
private function getDefaultHomeFeatures()
{
    return [
        [
            'icon' => 'fas fa-brain',
            'title' => 'AI-Powered Intelligence',
            'description' => 'Leverage cutting-edge machine learning algorithms to make data-driven decisions and automate complex workflows.'
        ],
        [
            'icon' => 'fas fa-bolt',
            'title' => 'Lightning Fast Automation',
            'description' => 'Reduce manual tasks by 90% with intelligent automation that learns and adapts to your business processes.'
        ],
        [
            'icon' => 'fas fa-target',
            'title' => 'Precision Targeting',
            'description' => 'Reach your ideal customers with AI-driven targeting and personalization that converts at scale.'
        ],
        [
            'icon' => 'fas fa-shield-alt',
            'title' => 'Enterprise Security',
            'description' => 'Bank-grade encryption and compliance standards protect your data and maintain customer trust.'
        ],
        [
            'icon' => 'fas fa-chart-line',
            'title' => 'Real-Time Analytics',
            'description' => 'Monitor performance metrics and gain actionable insights with comprehensive analytics dashboards.'
        ],
        [
            'icon' => 'fas fa-rocket',
            'title' => 'Scale Effortlessly',
            'description' => 'Grow from startup to enterprise without infrastructure headaches. Our platform scales with you.'
        ]
    ];
}

private function getDefaultHomeServices()
{
    return [
        [
            'title' => 'Data Annotation',
            'description' => 'High-quality data labeling and annotation services powered by AI and human expertise',
            'features_array' => [
                'Image & Video Annotation',
                'Text Classification',
                'Audio Transcription',
                'Quality Assurance'
            ],
            'button_text' => 'Learn More',
            'button_url' => '/services/data-annotation'
        ],
        [
            'title' => 'Trust & Safety',
            'description' => 'Protect your platform with comprehensive content moderation and safety solutions',
            'features_array' => [
                'Content Moderation',
                'User Verification',
                'Fraud Detection',
                'Policy Enforcement'
            ],
            'button_text' => 'Learn More',
            'button_url' => '/services/trust-safety'
        ],
        [
            'title' => 'Customer Experience AI',
            'description' => 'Transform support operations with intelligent chatbots and sentiment analysis',
            'features_array' => [
                '24/7 Automated Support',
                'Multi-language Support',
                'Sentiment Analysis',
                'Ticket Prioritization'
            ],
            'button_text' => 'Learn More',
            'button_url' => '/customer-experience-ai'
        ]
    ];
}

    public function data()
    {
        $data = [
            'title' => 'Annotation Services - Startout AI',
            'description' => 'Comprehensive data annotation services including image, text, audio, and video annotation.',
            'page' => 'services',
            'features' => $this->getAnnotationFeatures()
        ];

        return view('templates/header', $data)
             . view('templates/nav')
             . view('page/dataanotation', $data)
             . view('templates/footer');
    }

    /**
     * Get annotation features data
     */
    private function getAnnotationFeatures()
    {
        return [
            [
                'icon' => 'fas fa-image',
                'title' => 'Image & Video Annotation',
                'description' => 'Precise bounding boxes, polygons, and semantic segmentation for computer vision'
            ],
            [
                'icon' => 'fas fa-file-alt',
                'title' => 'Text Classification',
                'description' => 'Named entity recognition, sentiment analysis, and text categorization at scale'
            ],
            [
                'icon' => 'fas fa-microphone',
                'title' => 'Audio Transcription',
                'description' => 'High-accuracy speech-to-text with speaker identification and timestamps'
            ],
            [
                'icon' => 'fas fa-check-circle',
                'title' => 'Quality Assurance',
                'description' => 'Multi-layer QA process ensuring 99%+ accuracy across all annotations'
            ],
            [
                'icon' => 'fas fa-users',
                'title' => 'Expert Annotators',
                'description' => 'Domain-specific experts trained for your specific use case'
            ],
            [
                'icon' => 'fas fa-bolt',
                'title' => 'Fast Turnaround',
                'description' => 'Scale from thousands to millions of annotations with flexible timelines'
            ]
        ];
    }

    /**
     * Get annotation solutions data
     */
    private function getAnnotationSolutions()
    {
        return [
            [
                'title' => 'Computer Vision Labeling',
                'description' => 'Bounding boxes, polygons, keypoints, and semantic segmentation for training vision models.'
            ],
            [
                'title' => 'Natural Language Processing',
                'description' => 'Text annotation, entity extraction, intent classification, and sentiment analysis.'
            ],
            [
                'title' => 'Audio & Speech Data',
                'description' => 'Transcription, speaker diarization, and acoustic event detection for speech AI.'
            ],
            [
                'title' => '3D Point Cloud Annotation',
                'description' => 'LiDAR and 3D sensor data labeling for autonomous vehicles and robotics.'
            ],
            [
                'title' => 'Medical Data Labeling',
                'description' => 'Healthcare-grade annotation for medical imaging, clinical notes, and patient records.'
            ],
            [
                'title' => 'Custom Taxonomy Design',
                'description' => 'Develop specialized labeling schemas tailored to your unique AI requirements.'
            ]
        ];
    }
public function security()
{
    // Load model
    $securityModel = new \App\Models\SecurityModel();
    
    // Get page data from database
    $pageData = $securityModel->getPageByName('security');
    
    // Jika belum ada data di database, buat data default
    if (!$pageData) {
        $data = [
            'title' => 'Enterprise-Grade Security & Compliance - Startout AI',
            'description' => 'Your data security is our top priority. We employ industry-leading security measures to protect your business.',
            'page' => 'security',
            'hero_title' => 'Enterprise-Grade <span class="gradient-text">Security</span>',
            'hero_subtitle' => 'Your data security is our top priority. We employ industry-leading security measures to protect your business.',
            'features_title' => 'Our Security Features',
            'certifications_title' => 'Certifications & Compliance',
            'practices_title' => 'Our Security Practices',
            'features' => $this->getDefaultSecurityFeatures(),
            'certifications' => $this->getDefaultCertifications(),
            'practices' => $this->getDefaultSecurityPractices()
        ];
    } else {
        // Get related data from database
        $features = $securityModel->getFeatures($pageData['id']);
        $certifications = $securityModel->getCertifications($pageData['id']);
        $practices = $securityModel->getPractices($pageData['id']);
        
        $data = [
            'title' => 'Enterprise-Grade Security & Compliance - Startout AI',
            'description' => $pageData['hero_subtitle'] ?? 'Your data security is our top priority. We employ industry-leading security measures to protect your business.',
            'page' => 'security',
            
            // Hero section
            'hero_title' => $pageData['hero_title'] ?? 'Enterprise-Grade <span class="gradient-text">Security</span>',
            'hero_subtitle' => $pageData['hero_subtitle'] ?? 'Your data security is our top priority. We employ industry-leading security measures to protect your business.',
            
            // Section titles
            'features_title' => $pageData['features_title'] ?? 'Our Security Features',
            'certifications_title' => $pageData['certifications_title'] ?? 'Certifications & Compliance',
            'practices_title' => $pageData['practices_title'] ?? 'Our Security Practices',
            
            // Dynamic content
            'features' => !empty($features) ? $features : $this->getDefaultSecurityFeatures(),
            'certifications' => !empty($certifications) ? $certifications : $this->getDefaultCertifications(),
            'practices' => !empty($practices) ? $practices : $this->getDefaultSecurityPractices()
        ];
    }

    return view('templates/header', $data)
         . view('templates/nav')
         . view('page/security', $data)
         . view('templates/footer');
}

// Helper methods untuk data default security
private function getDefaultSecurityFeatures()
{
    return [
        [
            'icon' => 'fas fa-shield-alt',
            'title' => 'SOC 2 Type II Certified',
            'description' => 'We maintain the highest standards for security, availability, and confidentiality.'
        ],
        [
            'icon' => 'fas fa-lock',
            'title' => 'End-to-End Encryption',
            'description' => 'All data is encrypted in transit and at rest using AES-256 encryption.'
        ],
        [
            'icon' => 'fas fa-eye',
            'title' => 'Privacy by Design',
            'description' => 'GDPR and CCPA compliant with built-in data protection measures.'
        ],
        [
            'icon' => 'fas fa-file-check',
            'title' => 'Regular Audits',
            'description' => 'Third-party security audits and penetration testing conducted quarterly.'
        ],
        [
            'icon' => 'fas fa-server',
            'title' => 'Secure Infrastructure',
            'description' => 'Hosted on enterprise-grade cloud infrastructure with 99.99% uptime SLA.'
        ],
        [
            'icon' => 'fas fa-bell',
            'title' => '24/7 Monitoring',
            'description' => 'Real-time threat detection and automated incident response systems.'
        ]
    ];
}

private function getDefaultCertifications()
{
    return [
        ['name' => 'SOC 2 Type II'],
        ['name' => 'ISO 27001'],
        ['name' => 'GDPR Compliant'],
        ['name' => 'HIPAA Ready'],
        ['name' => 'PCI DSS Level 1'],
        ['name' => 'CCPA Compliant']
    ];
}

private function getDefaultSecurityPractices()
{
    return [
        [
            'title' => 'Data Protection',
            'description' => 'All customer data is encrypted using AES-256 encryption both in transit and at rest. We never store sensitive data in plain text.'
        ],
        [
            'title' => 'Access Control',
            'description' => 'Role-based access control (RBAC) ensures that team members only have access to the data they need. Multi-factor authentication is enforced for all accounts.'
        ],
        [
            'title' => 'Incident Response',
            'description' => 'Our dedicated security team monitors systems 24/7 and maintains a comprehensive incident response plan to address any security concerns immediately.'
        ],
        [
            'title' => 'Regular Updates',
            'description' => 'We continuously update our security measures and conduct regular penetration testing to stay ahead of emerging threats.'
        ]
    ];
}

    public function processAutomation()
{
    // Load model
    $processModel = new \App\Models\ProcessAutomationModel();
    
    // Get page data from database
    $pageData = $processModel->getPageData();
    
    // Get related data from database
    $capabilities = $processModel->getCapabilities($pageData['id']);
    $benefits = $processModel->getBenefits($pageData['id']);
    
    // Jika data dari database kosong, gunakan default
    if (empty($capabilities)) {
        $capabilities = $processModel->getDefaultCapabilities();
    }
    
    if (empty($benefits)) {
        $benefits = $processModel->getDefaultBenefits();
    } else {
        // Format benefits menjadi array sederhana jika dari database
        $benefitsArray = [];
        foreach ($benefits as $benefit) {
            $benefitsArray[] = $benefit['benefit'];
        }
        $benefits = $benefitsArray;
    }
    
    $data = [
        'title' => 'Startout AI - AI & Process Automation',
        'description' => 'Transform operations with AI-powered intelligent automation. Harness artificial intelligence to revolutionize your business processes.',
        'page' => 'process-automation',
        
        // Hero section
        'hero_title' => $pageData['hero_title'] ?? 'Transform Operations with <span class="gradient-text">AI & Intelligent Automation</span>',
        'hero_subtitle' => $pageData['hero_subtitle'] ?? 'Harness the power of artificial intelligence and advanced automation to revolutionize your business processes. Our AI-driven solutions learn, adapt, and optimize continuously for maximum efficiency.',
        'hero_button_text' => $pageData['hero_button_text'] ?? 'Start Your Project',
        'hero_button_url' => $pageData['hero_button_url'] ?? '/start-journey',
        
        // Capabilities section
        'capabilities_title' => $pageData['capabilities_title'] ?? 'AI-Driven <span class="gradient-text">Automation Capabilities</span>',
        'capabilities_subtitle' => $pageData['capabilities_subtitle'] ?? 'Leverage cutting-edge AI to automate and optimize every aspect of your operations',
        'capabilities' => $capabilities,
        
        // Benefits section
        'benefits_title' => $pageData['benefits_title'] ?? 'Transform Your Business with <span class="gradient-text">AI & Automation</span>',
        'benefits_subtitle' => $pageData['benefits_subtitle'] ?? 'Proven results with intelligent, adaptive automation',
        'benefits' => $benefits,
        
        // CTA section
        'cta_title' => $pageData['cta_title'] ?? 'Ready to Automate Your Business?',
        'cta_subtitle' => $pageData['cta_subtitle'] ?? 'Start saving time and money with intelligent process automation',
        'cta_button_text' => $pageData['cta_button_text'] ?? 'Schedule Consultation'
    ];

    return view('templates/header', $data)
         . view('templates/nav')
         . view('page/process_automation', $data)
         . view('templates/footer');
}
public function about()
{
    // Load model
    $aboutModel = new \App\Models\AboutModel();
    
    // Ambil data dari database
    $aboutData = $aboutModel->getAboutPageData();
    
    $data = [
        'title' => 'About Startout AI - Building the Future of AI',
        'description' => 'Founded in 2024, Startout AI is on a mission to empower businesses with intelligent automation and data-driven insights.',
        'page' => 'about',
        'hero_title' => $aboutData['hero_title'],
        'hero_subtitle' => $aboutData['hero_subtitle'],
        'story_title' => $aboutData['story_title'],
        'story_content' => $aboutData['story_content'],
        'values_title' => $aboutData['values_title'],
        'stats_title' => $aboutData['stats_title'],
        'values' => $aboutModel->getAboutValues($aboutData['id']),
        'stats' => $aboutModel->getAboutStats($aboutData['id'])
    ];

    return view('templates/header', $data)
         . view('templates/nav')
         . view('page/about', $data)
         . view('templates/footer');
}
// Update method career() di Home.php
public function career()
{
    // Load model
    $careerModel = new \App\Models\CareerModel();
    
    // Ambil data dari database
    $pageData = $careerModel->getCareerPageData();
    $benefits = $careerModel->getBenefits($pageData['id']);
    $positions = $careerModel->getActivePositions($pageData['id']);
    
    // Format benefits untuk view
    $formattedBenefits = [];
    foreach ($benefits as $benefit) {
        $formattedBenefits[] = $benefit['benefit'];
    }
    
    // Format positions untuk view
    $formattedPositions = [];
    foreach ($positions as $position) {
        $formattedPositions[] = [
            'title' => $position['title'],
            'description' => $position['description'],
            'location' => $position['location'],
            'type' => $position['employment_type'],
            'department' => $position['department'],
            'apply_url' => $position['apply_url'] // Tambahkan ini
        ];
    }
    
    $data = [
        'title' => 'Careers at Startout AI - Join Our Mission',
        'description' => 'Help us shape the future of AI-powered business solutions. We\'re looking for talented, passionate people to join our team.',
        'page' => 'career',
        'hero_title' => $pageData['hero_title'],
        'hero_subtitle' => $pageData['hero_subtitle'],
        'benefits_title' => $pageData['benefits_title'],
        'positions_title' => $pageData['positions_title'],
        'benefits' => $formattedBenefits,
        'positions' => $formattedPositions
    ];

    return view('templates/header', $data)
         . view('templates/nav')
         . view('page/career', $data)
         . view('templates/footer');
}

// Tambahkan method untuk halaman detail posisi
public function careerPosition($slug)
{
    $careerModel = new \App\Models\CareerModel();
    $position = $careerModel->getPositionBySlug($slug);
    
    if (!$position) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }
    
    $data = [
        'title' => $position['title'] . ' - Careers at Startout AI',
        'description' => $position['description'],
        'page' => 'career-position',
        'position' => $position
    ];
    
    return view('templates/header', $data)
         . view('templates/nav')
         . view('page/career_position', $data)
         . view('templates/footer');
}
public function press()
{
    // Load model
    $pressModel = new \App\Models\PressModel();
    
    // Get page data from database
    $pageData = $pressModel->getPressPageData();
    
    // Get related data from database
    $announcements = $pressModel->getAnnouncements($pageData['id']);
    $mediaKit = $pressModel->getMediaKit($pageData['id']);
    $contacts = $pressModel->getContacts($pageData['id']);
    
    // If no data in database, use default
    if (empty($announcements)) {
        $announcements = $pressModel->getDefaultAnnouncements();
    }
    
    if (empty($mediaKit)) {
        $mediaKit = $pressModel->getDefaultMediaKit();
    }
    
    if (empty($contacts)) {
        $contacts = $pressModel->getDefaultContacts();
    }
    
    $data = [
        'title' => 'Press & Media - Startout AI',
        'description' => 'The latest news and updates from Startout AI. Press releases, media kit, and press contact information.',
        'page' => 'press',
        
        // Hero section
        'hero_title' => $pageData['hero_title'] ?? '<span class="gradient-text">Press</span> & Media',
        'hero_subtitle' => $pageData['hero_subtitle'] ?? 'The latest news and updates from Startout AI',
        
        // Section titles
        'announcements_title' => $pageData['announcements_title'] ?? 'Recent Announcements',
        'media_kit_title' => $pageData['media_kit_title'] ?? 'Media Kit',
        'inquiries_title' => $pageData['inquiries_title'] ?? 'Media Inquiries',
        'cta_title' => $pageData['cta_title'] ?? 'Ready to Transform Your Business with AI?',
        'cta_subtitle' => $pageData['cta_subtitle'] ?? 'Schedule a consultation to discuss how Startout AI can help you achieve your goals',
        'cta_button_text' => $pageData['cta_button_text'] ?? 'Schedule Consultation',
        
        // Dynamic content
        'announcements' => $announcements,
        'mediaKit' => $mediaKit,
        'contacts' => $contacts
    ];

    return view('templates/header', $data)
         . view('templates/nav')
         . view('page/press', $data)
         . view('templates/footer');
}
// Tambahkan method ini di class Home di file Home.php
public function ourWork()
{
    // Load model
    $ourWorkModel = new \App\Models\OurWorkModel();
    
    // Get page data from database
    $pageData = $ourWorkModel->getOurWorkPageData();
    
    // Get related data
    $stats = $ourWorkModel->getStats($pageData['id']);
    $caseStudies = $ourWorkModel->getCaseStudies($pageData['id']);
    $testimonials = $ourWorkModel->getTestimonials($pageData['id']);
    
    $data = [
        'title' => 'Our Work - Startout AI Success Stories',
        'description' => 'Explore our portfolio of successful AI projects and case studies across various industries. See how we help businesses transform with intelligent automation.',
        'page' => 'our-work',
        
        // Hero section
        'hero_title' => $pageData['hero_title'] ?? '<span class="gradient-text">Our Work</span> Speaks for Itself',
        'hero_subtitle' => $pageData['hero_subtitle'] ?? 'Real results from real clients across diverse industries',
        
        // Stats
        'stats' => !empty($stats) ? $stats : $this->getDefaultOurWorkStats(),
        
        // Case studies
        'case_studies_title' => $pageData['case_studies_title'] ?? 'Featured Case Studies',
        'caseStudies' => !empty($caseStudies) ? $caseStudies : $this->getDefaultCaseStudies(),
        
        // Testimonials
        'testimonials_title' => $pageData['testimonials_title'] ?? 'What Our Clients Say',
        'testimonials' => !empty($testimonials) ? $testimonials : $this->getDefaultTestimonials(),
        
        // CTA
        'cta_title' => $pageData['cta_title'] ?? 'Ready to Create Your Success Story?',
        'cta_subtitle' => $pageData['cta_subtitle'] ?? 'Let\'s discuss how we can help you achieve similar results',
        'cta_button_text' => $pageData['cta_button_text'] ?? 'Start Your Project'
    ];

    return view('templates/header', $data)
         . view('templates/nav')
         . view('page/our_work', $data)
         . view('templates/footer');
}

// Helper methods untuk data default
private function getDefaultOurWorkStats()
{
    return [
        ['value' => '500+', 'label' => 'Projects Completed'],
        ['value' => '98%', 'label' => 'Client Satisfaction'],
        ['value' => '50+', 'label' => 'Industries Served'],
        ['value' => '24/7', 'label' => 'Global Support']
    ];
}

private function getDefaultCaseStudies()
{
    return [
        [
            'industry' => 'E-Commerce & Retail',
            'client' => 'RetailPro Commerce',
            'challenge' => 'Needed to scale customer support operations while maintaining quality and reducing costs by 40%.',
            'solution' => 'Implemented AI-powered customer support automation with human oversight, reducing response time by 60%.',
            'results_array' => [
                '60% faster response time',
                '40% cost reduction',
                '95% customer satisfaction'
            ],
            'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800&q=80'
        ],
        [
            'industry' => 'FinTech & Banking',
            'client' => 'SecureBank Financial',
            'challenge' => 'Required secure content moderation and AI-powered fraud detection for financial transactions.',
            'solution' => 'Deployed specialized fintech security team with real-time monitoring and compliance protocols.',
            'results_array' => [
                '100% regulatory compliance',
                '3x faster fraud detection',
                '99.8% accuracy rate'
            ],
            'image' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=800&q=80'
        ],
        [
            'industry' => 'Gaming & Entertainment',
            'client' => 'GameWorld Studios',
            'challenge' => 'Needed 24/7 community moderation across multiple gaming platforms in 15 languages.',
            'solution' => 'Established global moderation team with AI-assisted tools for real-time threat detection.',
            'results_array' => [
                '24/7 coverage',
                '15 languages supported',
                '85% reduction in toxic content'
            ],
            'image' => 'https://images.unsplash.com/photo-1511512578047-dfb367046420?auto=format&fit=crop&w=800&q=80'
        ]
    ];
}

private function getDefaultTestimonials()
{
    return [
        [
            'name' => 'Sarah Chen',
            'position' => 'CEO, TechVenture Inc.',
            'company' => 'TechVenture Inc.',
            'quote' => 'Startout AI transformed our customer support operations. Their AI solutions combined with expert human oversight delivered results beyond our expectations.',
            'avatar' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=150&q=80',
            'rating' => 5
        ],
        [
            'name' => 'Michael Rodriguez',
            'position' => 'CTO, RetailPro Commerce',
            'company' => 'RetailPro Commerce',
            'quote' => 'Startout AI revolutionized our e-commerce platform with intelligent automation and exceptional customer support solutions.',
            'avatar' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&w=150&q=80',
            'rating' => 5
        ],
        [
            'name' => 'Emily Thompson',
            'position' => 'Head of Community, GameWorld Studios',
            'company' => 'GameWorld Studios',
            'quote' => 'Our gaming community is safer and more engaged thanks to Startout AI\'s innovative moderation solutions. They scale seamlessly with our growth.',
            'avatar' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=crop&w=150&q=80',
            'rating' => 5
        ],
        [
            'name' => 'David Kim',
            'position' => 'VP Operations, FinanceFlow',
            'company' => 'FinanceFlow',
            'quote' => 'The data annotation quality and turnaround time exceeded our requirements. Startout AI\'s team became an extension of our own.',
            'avatar' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=150&q=80',
            'rating' => 5
        ]
    ];
}
public function whyStartoutAI()
{
    // Load model
    $whyStartoutAIModel = new \App\Models\WhyStartoutAIModel();
    
    // Get page data from database
    $pageData = $whyStartoutAIModel->getPageData();
    
    // Jika belum ada data di database, buat data default
    if (!$pageData) {
        $data = [
            'title' => 'Why Choose Startout AI? - Our Competitive Advantage',
            'description' => 'Discover why leading companies choose Startout AI for their AI solutions. Expert human+AI workforce, global coverage, enterprise security, and proven results.',
            'page' => 'why-startout-ai',
            'hero_title' => 'Why <span class="gradient-text">Startout AI?</span>',
            'hero_subtitle' => 'We\'re not just another AI service provider. We\'re your strategic partner in digital transformation.',
            'stats_title' => 'Our Impact',
            'advantages_title' => 'What Sets Us <span class="gradient-text">Apart</span>',
            'advantages_subtitle' => 'Discover the advantages that make Startout AI the preferred choice for leading companies',
            'benefits_title' => 'The <span class="gradient-text">Startout AI</span> Advantage',
            'cta_title' => 'Ready to Experience the Difference?',
            'cta_subtitle' => 'Join hundreds of companies that trust Startout AI for their most critical operations',
            'stats' => $whyStartoutAIModel->getDefaultStats(),
            'advantages' => $whyStartoutAIModel->getDefaultAdvantages(),
            'benefits' => $whyStartoutAIModel->getDefaultBenefits()
        ];
    } else {
        // Get related data from database
        $stats = $whyStartoutAIModel->getStats($pageData['id']);
        $advantages = $whyStartoutAIModel->getAdvantages($pageData['id']);
        $benefits = $whyStartoutAIModel->getBenefits($pageData['id']);
        
        // Format benefits menjadi array sederhana
        $benefitsArray = [];
        foreach ($benefits as $benefit) {
            $benefitsArray[] = $benefit['benefit'];
        }
        
        $data = [
            'title' => 'Why Choose Startout AI? - Our Competitive Advantage',
            'description' => 'Discover why leading companies choose Startout AI for their AI solutions. Expert human+AI workforce, global coverage, enterprise security, and proven results.',
            'page' => 'why-startout-ai',
            
            // Hero section
            'hero_title' => $pageData['hero_title'] ?? 'Why <span class="gradient-text">Startout AI?</span>',
            'hero_subtitle' => $pageData['hero_subtitle'] ?? 'We\'re not just another AI service provider. We\'re your strategic partner in digital transformation.',
            
            // Section titles
            'stats_title' => $pageData['stats_title'] ?? 'Our Impact',
            'advantages_title' => $pageData['advantages_title'] ?? 'What Sets Us <span class="gradient-text">Apart</span>',
            'advantages_subtitle' => $pageData['advantages_subtitle'] ?? 'Discover the advantages that make Startout AI the preferred choice for leading companies',
            'benefits_title' => $pageData['benefits_title'] ?? 'The <span class="gradient-text">Startout AI</span> Advantage',
            'cta_title' => $pageData['cta_title'] ?? 'Ready to Experience the Difference?',
            'cta_subtitle' => $pageData['cta_subtitle'] ?? 'Join hundreds of companies that trust Startout AI for their most critical operations',
            
            // Dynamic content
            'stats' => !empty($stats) ? $stats : $whyStartoutAIModel->getDefaultStats(),
            'advantages' => !empty($advantages) ? $advantages : $whyStartoutAIModel->getDefaultAdvantages(),
            'benefits' => !empty($benefitsArray) ? $benefitsArray : $whyStartoutAIModel->getDefaultBenefits()
        ];
    }

    return view('templates/header', $data)
         . view('templates/nav')
         . view('page/why_startout_ai', $data)
         . view('templates/footer');
}
public function resources()
{
    // Load model
    $resourcesModel = new \App\Models\ResourcesModel();
    
    // Get page data from database
    $pageData = $resourcesModel->getPageData();
    
    // Get related data from database
    $featuredResources = $resourcesModel->getFeaturedResources($pageData['id']);
    $recentArticles = $resourcesModel->getArticles($pageData['id']);
    $formats = $resourcesModel->getFormats($pageData['id']);
    $stats = $resourcesModel->getStats($pageData['id']);
    
    // Jika data dari database kosong, gunakan default
    if (empty($featuredResources)) {
        $featuredResources = $resourcesModel->getDefaultFeaturedResources();
    }
    
    if (empty($recentArticles)) {
        $recentArticles = $resourcesModel->getDefaultArticles();
    } else {
        // Format date untuk articles
        foreach ($recentArticles as &$article) {
            if (isset($article['date']) && $article['date'] != '0000-00-00') {
                $article['formatted_date'] = date('F j, Y', strtotime($article['date']));
            } else {
                $article['formatted_date'] = $article['date'] ?? '';
            }
        }
    }
    
    if (empty($formats)) {
        $formats = $resourcesModel->getDefaultFormats();
    }
    
    if (empty($stats)) {
        $stats = $resourcesModel->getDefaultStats();
    }
    
    $data = [
        'title' => 'Resources & Insights - Startout AI',
        'description' => 'Expert guides, case studies, and thought leadership to help you master AI-powered business growth.',
        'page' => 'resources',
        
        // Hero section
        'hero_title' => $pageData['hero_title'] ?? 'Resources & <span class="gradient-text">Insights</span>',
        'hero_subtitle' => $pageData['hero_subtitle'] ?? 'Expert guides, case studies, and thought leadership to help you master AI-powered business growth.',
        
        // Featured resources section
        'featured_title' => $pageData['featured_title'] ?? 'Featured Resources',
        'featured_subtitle' => $pageData['featured_subtitle'] ?? 'Our most popular and impactful content',
        'featuredResources' => $featuredResources,
        
        // Articles section
        'articles_title' => $pageData['articles_title'] ?? 'Recent Articles',
        'recentArticles' => $recentArticles,
        
        // Formats section
        'formats_title' => $pageData['formats_title'] ?? 'Explore by Format',
        'formats' => $formats,
        
        // Newsletter section
        'newsletter_title' => $pageData['newsletter_title'] ?? 'Stay Updated',
        'newsletter_subtitle' => $pageData['newsletter_subtitle'] ?? 'Get the latest AI insights delivered to your inbox. Join 10,000+ leaders who read our newsletter.',
        
        // Stats section
        'stats_title' => $pageData['stats_title'] ?? 'Our Impact',
        'stats' => $stats
    ];

    return view('templates/header', $data)
         . view('templates/nav')
         . view('page/resources', $data)
         . view('templates/footer');
}
public function startJourney()
{
    // Load model
    $startJourneyModel = new \App\Models\StartJourneyModel();
    
    // Get page data from database
    $pageData = $startJourneyModel->getPageData();
    
    // Get related data from database
    $processSteps = $startJourneyModel->getProcessSteps($pageData['id']);
    $offices = $startJourneyModel->getOffices($pageData['id']);
    
    // Jika data dari database kosong, gunakan default
    if (empty($processSteps)) {
        $processSteps = $startJourneyModel->getDefaultProcessSteps();
    }
    
    if (empty($offices)) {
        $offices = $startJourneyModel->getDefaultOffices();
    }
    
    $data = [
        'title' => 'Start Your AI Transformation - Startout AI',
        'description' => 'Begin your AI journey with Startout AI. Fill out our contact form and our team will reach out within 24 hours to discuss your AI transformation.',
        'page' => 'start-journey',
        
        // Hero section
        'hero_title' => $pageData['hero_title'] ?? 'Start Your AI <span class="gradient-text">Transformation</span>',
        'hero_subtitle' => $pageData['hero_subtitle'] ?? 'Let\'s build something incredible together. Fill out the form below and our team will reach out within 24 hours.',
        
        // Process section
        'process_title' => $pageData['process_title'] ?? 'How We Work',
        'processSteps' => $processSteps,
        
        // Contact section
        'contact_title' => $pageData['contact_title'] ?? 'Contact Information',
        
        // Offices section
        'offices_title' => $pageData['offices_title'] ?? 'Our Global Offices',
        'offices' => $offices,
        
        // CTA section
        'cta_title' => $pageData['cta_title'] ?? 'Ready to Transform Your Business with AI?',
        'cta_button_text' => $pageData['cta_button_text'] ?? 'Schedule Consultation'
    ];

    return view('templates/header', $data)
         . view('templates/nav')
         . view('page/start_journey', $data)
         . view('templates/footer');
}
}