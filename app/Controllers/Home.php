<?php

namespace App\Controllers;


class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Data Annotation Services - Startout AI',
            'description' => 'Professional data annotation services powered by AI and human expertise. High-quality data labeling for machine learning models.',
            'page' => 'data-annotation',
            'features' => $this->getAnnotationFeatures()
        ];

        return view('templates/header', $data)
             . view('templates/nav')
             . view('page/index', $data)
             . view('templates/footer');
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
        $data = [
            'title' => 'Startout AI - Enterprise-Grade Security & Data Compliance',
            'description' => 'Your data security is our top priority. We employ industry-leading security measures to protect your business.',
            'page' => 'security'
        ];

        return view('templates/header', $data)
             . view('templates/nav')
             . view('page/security', $data)
             . view('templates/footer');
    }
    public function processAutomation()
    {
        $data = [
            'title' => 'Startout AI - AI & Process Automation',
            'description' => 'Transform operations with AI-powered intelligent automation. Harness artificial intelligence to revolutionize your business processes.',
            'page' => 'process-automation'
        ];

        return view('templates/header', $data)
             . view('templates/nav')
             . view('page/process_automation', $data)
             . view('templates/footer');
    }
    public function about()
{
    $data = [
        'title' => 'About Startout AI - Building the Future of AI',
        'description' => 'Founded in 2024, Startout AI is on a mission to empower businesses with intelligent automation and data-driven insights.',
        'page' => 'about',
        'stats' => [
            ['value' => '500+', 'label' => 'Customers Worldwide'],
            ['value' => '50M+', 'label' => 'AI Operations Daily'],
            ['value' => '99.99%', 'label' => 'Uptime SLA'],
            ['value' => '24/7', 'label' => 'Support Available']
        ],
        'values' => [
            [
                'icon' => 'fas fa-bullseye',
                'title' => 'Mission-Driven',
                'description' => "We're committed to democratizing AI and making it accessible to businesses of all sizes."
            ],
            [
                'icon' => 'fas fa-heart',
                'title' => 'Customer First',
                'description' => 'Your success is our success. We go above and beyond to ensure you achieve your goals.'
            ],
            [
                'icon' => 'fas fa-lightbulb',
                'title' => 'Innovation',
                'description' => 'We continuously push boundaries to deliver cutting-edge AI solutions.'
            ],
            [
                'icon' => 'fas fa-users',
                'title' => 'Collaboration',
                'description' => 'We believe in the power of partnership and working together toward common goals.'
            ]
        ]
    ];

    return view('templates/header', $data)
         . view('templates/nav')
         . view('page/about', $data)
         . view('templates/footer');
}
public function career()
{
    $data = [
        'title' => 'Careers at Startout AI - Join Our Mission',
        'description' => 'Help us shape the future of AI-powered business solutions. We\'re looking for talented, passionate people to join our team.',
        'page' => 'career',
        'benefits' => [
            'Competitive salary and equity',
            'Health, dental, and vision insurance',
            'Flexible remote work',
            'Unlimited PTO',
            'Learning and development budget',
            'Latest hardware and tools'
        ],
        'positions' => [
            [
                'title' => 'Senior AI Engineer',
                'description' => 'Build and deploy cutting-edge AI models that power our platform.',
                'location' => 'Remote',
                'type' => 'Full-time',
                'department' => 'Engineering'
            ],
            [
                'title' => 'Product Designer',
                'description' => 'Design beautiful, intuitive experiences for our customers.',
                'location' => 'San Francisco, CA',
                'type' => 'Full-time',
                'department' => 'Design'
            ],
            [
                'title' => 'Customer Success Manager',
                'description' => 'Help our customers succeed with AI transformation.',
                'location' => 'Remote',
                'type' => 'Full-time',
                'department' => 'Customer Success'
            ],
            [
                'title' => 'DevOps Engineer',
                'description' => 'Build and maintain our cloud infrastructure at scale.',
                'location' => 'New York, NY',
                'type' => 'Full-time',
                'department' => 'Engineering'
            ]
        ]
    ];

    return view('templates/header', $data)
         . view('templates/nav')
         . view('page/career', $data)
         . view('templates/footer');
}
public function press()
{
    $data = [
        'title' => 'Press & Media - Startout AI',
        'description' => 'The latest news and updates from Startout AI. Press releases, media kit, and press contact information.',
        'page' => 'press',
        'announcements' => [
            [
                'date' => 'March 15, 2024',
                'title' => 'Startout AI Raises $50M Series B to Expand AI Platform',
                'description' => 'Leading venture capital firms back our mission to democratize AI for businesses.'
            ],
            [
                'date' => 'February 1, 2024',
                'title' => 'Startout AI Named to Forbes Cloud 100 Rising Stars',
                'description' => 'Recognition highlights our rapid growth and innovative approach to business AI.'
            ],
            [
                'date' => 'January 10, 2024',
                'title' => 'New AI Automation Features Drive 80% Efficiency Gains',
                'description' => 'Latest platform update delivers record productivity improvements for customers.'
            ]
        ],
        'mediaKit' => [
            [
                'name' => 'Company Logo (PNG)',
                'size' => '2.4 MB'
            ],
            [
                'name' => 'Company Logo (SVG)',
                'size' => '124 KB'
            ],
            [
                'name' => 'Brand Guidelines',
                'size' => '8.1 MB'
            ],
            [
                'name' => 'Product Screenshots',
                'size' => '15.3 MB'
            ],
            [
                'name' => 'Executive Headshots',
                'size' => '12.7 MB'
            ]
        ],
        'contacts' => [
            [
                'label' => 'Press Email',
                'value' => 'press@startoutai.com'
            ],
            [
                'label' => 'Yogyakarta, Indonesia',
                'value' => '+62 274 123 4567'
            ],
            [
                'label' => 'Los Angeles, USA',
                'value' => '+1 (310) 555-0123'
            ]
        ]
    ];

    return view('templates/header', $data)
         . view('templates/nav')
         . view('page/press', $data)
         . view('templates/footer');
}
// Tambahkan method ini di class Home di file Home.php
public function ourWork()
{
    $data = [
        'title' => 'Our Work - Startout AI Success Stories',
        'description' => 'Explore our portfolio of successful AI projects and case studies across various industries. See how we help businesses transform with intelligent automation.',
        'page' => 'our-work',
        'stats' => [
            ['value' => '500+', 'label' => 'Projects Completed'],
            ['value' => '98%', 'label' => 'Client Satisfaction'],
            ['value' => '50+', 'label' => 'Industries Served'],
            ['value' => '24/7', 'label' => 'Global Support']
        ],
        'caseStudies' => [
            [
                'industry' => 'E-Commerce & Retail',
                'client' => 'RetailPro Commerce',
                'challenge' => 'Needed to scale customer support operations while maintaining quality and reducing costs by 40%.',
                'solution' => 'Implemented AI-powered customer support automation with human oversight, reducing response time by 60%.',
                'results' => [
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
                'results' => [
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
                'results' => [
                    '24/7 coverage',
                    '15 languages supported',
                    '85% reduction in toxic content'
                ],
                'image' => 'https://images.unsplash.com/photo-1511512578047-dfb367046420?auto=format&fit=crop&w=800&q=80'
            ]
        ],
        'testimonials' => [
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
        ]
    ];

    return view('templates/header', $data)
         . view('templates/nav')
         . view('page/our_work', $data)
         . view('templates/footer');
}
public function whyStartoutAI()
{
    $data = [
        'title' => 'Why Choose Startout AI? - Our Competitive Advantage',
        'description' => 'Discover why leading companies choose Startout AI for their AI solutions. Expert human+AI workforce, global coverage, enterprise security, and proven results.',
        'page' => 'why-startout-ai',
        'stats' => [
            ['value' => '98%', 'label' => 'Client Retention Rate'],
            ['value' => '500+', 'label' => 'Active Projects'],
            ['value' => '50+', 'label' => 'Countries Served'],
            ['value' => '24/7', 'label' => 'Global Support']
        ],
        'advantages' => [
            [
                'icon' => 'fas fa-users',
                'title' => 'Expert Human + AI Workforce',
                'description' => 'Combine the best of human expertise with AI-powered efficiency. Our global workforce of trained professionals works seamlessly with advanced AI tools to deliver unmatched quality and scale.'
            ],
            [
                'icon' => 'fas fa-globe',
                'title' => 'Global Coverage, Local Understanding',
                'description' => 'With teams spanning multiple time zones and cultures, we provide 24/7 coverage while maintaining deep local market knowledge and cultural sensitivity.'
            ],
            [
                'icon' => 'fas fa-award',
                'title' => 'Proven Track Record',
                'description' => 'Over 500+ successful projects across diverse industries. Our clients experience an average 60% cost reduction and 10x faster delivery times.'
            ],
            [
                'icon' => 'fas fa-chart-line',
                'title' => 'Scalability on Demand',
                'description' => 'Scale your operations up or down instantly. Whether you need 10 or 10,000 team members, we deliver the same exceptional quality.'
            ],
            [
                'icon' => 'fas fa-shield-alt',
                'title' => 'Enterprise-Grade Security',
                'description' => 'SOC 2 Type II certified, GDPR compliant, and ISO 27001 certified. Your data security and privacy are our top priorities.'
            ],
            [
                'icon' => 'fas fa-bolt',
                'title' => 'Cutting-Edge AI Technology',
                'description' => 'We invest heavily in proprietary AI technology that continuously learns and improves, ensuring you always have access to the latest innovations.'
            ]
        ],
        'benefits' => [
            'Flexible engagement models that adapt to your needs',
            'Transparent pricing with no hidden costs',
            'Dedicated account management and support',
            'Proprietary AI tools and platforms',
            'Rigorous quality assurance processes',
            'Industry-specific expertise and best practices'
        ]
    ];

    return view('templates/header', $data)
         . view('templates/nav')
         . view('page/why_startout_ai', $data)
         . view('templates/footer');
}
public function resources()
{
    $data = [
        'title' => 'Resources & Insights - Startout AI',
        'description' => 'Expert guides, case studies, and thought leadership to help you master AI-powered business growth.',
        'page' => 'resources',
        'featuredResources' => [
            [
                'type' => 'Case Study',
                'icon' => 'fas fa-chart-line',
                'title' => 'How FinTech Startup Reduced Fraud by 85% with AI',
                'description' => 'Discover how we helped a Series A fintech company implement intelligent fraud detection that saved millions while improving customer experience.',
                'readTime' => '8 min read',
                'tags' => ['FinTech', 'Fraud Detection', 'Case Study'],
                'color' => 'from-green-500 to-emerald-500'
            ],
            [
                'type' => 'Blog Post',
                'icon' => 'fas fa-book-open',
                'title' => 'The Ultimate Guide to AI-Powered Customer Support',
                'description' => 'Learn the strategies and best practices for implementing AI chatbots that actually improve customer satisfaction scores.',
                'readTime' => '12 min read',
                'tags' => ['AI', 'Customer Support', 'Guide'],
                'color' => 'from-blue-500 to-cyan-500'
            ],
            [
                'type' => 'Whitepaper',
                'icon' => 'fas fa-file-alt',
                'title' => 'The State of AI in Startups 2025',
                'description' => 'Comprehensive research on how startups are leveraging AI for competitive advantage, featuring data from 500+ companies.',
                'readTime' => '25 min read',
                'tags' => ['Research', 'AI Trends', 'Startups'],
                'color' => 'from-purple-500 to-indigo-500'
            ]
        ],
        'recentArticles' => [
            [
                'category' => 'Best Practices',
                'title' => '5 AI Automation Mistakes That Are Costing You Revenue',
                'date' => 'March 8, 2025'
            ],
            [
                'category' => 'Thought Leadership',
                'title' => 'Building Trust: AI Ethics in Customer Interactions',
                'date' => 'March 5, 2025'
            ],
            [
                'category' => 'Tools & Resources',
                'title' => 'ROI Calculator: Is AI Right for Your Startup?',
                'date' => 'March 1, 2025'
            ],
            [
                'category' => 'Industry Insights',
                'title' => 'Interview: AI Leaders Share 2025 Predictions',
                'date' => 'February 28, 2025'
            ]
        ],
        'formats' => [
            [
                'icon' => 'fas fa-video',
                'title' => 'Video Tutorials',
                'count' => '15+ videos',
                'description' => 'Step-by-step guides and product walkthroughs'
            ],
            [
                'icon' => 'fas fa-podcast',
                'title' => 'Podcast Series',
                'count' => 'Weekly episodes',
                'description' => 'Conversations with AI innovators and startup founders'
            ],
            [
                'icon' => 'fas fa-file-alt',
                'title' => 'Documentation',
                'count' => '100+ articles',
                'description' => 'Comprehensive guides and API references'
            ]
        ]
    ];

    return view('templates/header', $data)
         . view('templates/nav')
         . view('page/resources', $data)
         . view('templates/footer');
}
public function startJourney()
{
    $data = [
        'title' => 'Start Your AI Transformation - Startout AI',
        'description' => 'Begin your AI journey with Startout AI. Fill out our contact form and our team will reach out within 24 hours to discuss your AI transformation.',
        'page' => 'start-journey',
        'processSteps' => [
            [
                'icon' => 'fas fa-target',
                'title' => 'Discovery Call',
                'description' => 'We learn about your business goals and challenges'
            ],
            [
                'icon' => 'fas fa-bolt',
                'title' => 'Strategy Session',
                'description' => 'We design a custom AI solution tailored to your needs'
            ],
            [
                'icon' => 'fas fa-rocket',
                'title' => 'Implementation',
                'description' => 'We deploy and integrate AI into your workflows'
            ],
            [
                'icon' => 'fas fa-check-circle',
                'title' => 'Optimization',
                'description' => 'We continuously improve and scale your AI systems'
            ]
        ],
        'offices' => [
            [
                'city' => 'Yogyakarta, Indonesia',
                'zip' => '55281',
                'phone' => '+62 274 123 4567'
            ],
            [
                'city' => 'Kuala Lumpur, Malaysia',
                'zip' => '50088',
                'phone' => '+60 3 1234 5678'
            ],
            [
                'city' => 'Amsterdam, Netherlands',
                'zip' => '1012 AB',
                'phone' => '+31 20 123 4567'
            ],
            [
                'city' => 'Sydney, Australia',
                'zip' => '2000',
                'phone' => '+61 2 1234 5678'
            ],
            [
                'city' => 'London, UK',
                'zip' => 'EC1A 1BB',
                'phone' => '+44 20 1234 5678'
            ],
            [
                'city' => 'Los Angeles, USA',
                'zip' => '90001',
                'phone' => '+1 213 123 4567'
            ],
            [
                'city' => 'Ottawa, Canada',
                'zip' => 'K1A 0A6',
                'phone' => '+1 613 123 4567'
            ],
            [
                'city' => 'Shibuya, Japan',
                'zip' => '150-0002',
                'phone' => '+81 3 1234 5678'
            ],
            [
                'city' => 'Berlin, Germany',
                'zip' => '10115',
                'phone' => '+49 30 1234 5678'
            ]
        ]
    ];

    return view('templates/header', $data)
         . view('templates/nav')
         . view('page/start_journey', $data)
         . view('templates/footer');
}
}