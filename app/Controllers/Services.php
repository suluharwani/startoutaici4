<?php

namespace App\Controllers;
use App\Models\ServiceModel;
class Services extends BaseController
{
     private $serviceModel;
    
    public function __construct()
    {
        $this->serviceModel = new ServiceModel();
    }
    public function talentsolution()
    {
        $data = [
            'title' => 'Talent Solution Services - Startout AI',
            'description' => 'Build your dream team with our curated network of AI and tech professionals. Pre-vetted talent for your business needs.',
            'page' => 'talent-solution',
            'benefits' => $this->getTalentBenefits(),
            'roles' => $this->getAvailableRoles(),
            'process' => $this->getTalentProcess()
        ];

        return view('templates/header', $data)
             . view('templates/nav')
             . view('page/talent_solution', $data)
             . view('templates/footer');
    }

    private function getTalentBenefits()
    {
        return [
            [
                'icon' => 'fas fa-users',
                'title' => 'Pre-Vetted Talent',
                'description' => 'Access to rigorously screened professionals ready to start immediately.'
            ],
            [
                'icon' => 'fas fa-bullseye',
                'title' => 'Perfect Match',
                'description' => 'AI-powered matching ensures the right skills for your specific needs.'
            ],
            [
                'icon' => 'fas fa-award',
                'title' => 'Proven Excellence',
                'description' => 'All talent backed by track records of successful project delivery.'
            ],
            [
                'icon' => 'fas fa-chart-line',
                'title' => 'Scalable Teams',
                'description' => 'Easily scale up or down based on your project requirements.'
            ]
        ];
    }

    private function getAvailableRoles()
    {
        return [
            [
                'title' => 'AI/ML Engineers',
                'description' => 'Experts in machine learning, deep learning, and AI model development.',
                'button_text' => 'View Profiles'
            ],
            [
                'title' => 'Data Scientists',
                'description' => 'Professionals skilled in data analysis, visualization, and insights extraction.',
                'button_text' => 'View Profiles'
            ],
            [
                'title' => 'Content Specialists',
                'description' => 'Writers, editors, and moderators for content creation and curation.',
                'button_text' => 'View Profiles'
            ],
            [
                'title' => 'Customer Success',
                'description' => 'Support specialists trained in AI-powered customer service tools.',
                'button_text' => 'View Profiles'
            ],
            [
                'title' => 'Quality Analysts',
                'description' => 'Detail-oriented professionals ensuring accuracy and compliance.',
                'button_text' => 'View Profiles'
            ],
            [
                'title' => 'Project Managers',
                'description' => 'Experienced leaders to coordinate and deliver complex projects.',
                'button_text' => 'View Profiles'
            ]
        ];
    }

    private function getTalentProcess()
    {
        return [
            [
                'step' => '1',
                'title' => 'Define Requirements',
                'description' => 'Tell us about your project needs and desired skills'
            ],
            [
                'step' => '2',
                'title' => 'Talent Matching',
                'description' => 'Our AI matches you with pre-vetted professionals'
            ],
            [
                'step' => '3',
                'title' => 'Review & Interview',
                'description' => 'Meet candidates and select your perfect fit'
            ],
            [
                'step' => '4',
                'title' => 'Start Working',
                'description' => 'Onboard your new team members and start delivering'
            ]
        ];
    }

 public function dataanotation()
{
    // 1. Ambil data halaman dari database
    $pageData = $this->serviceModel->getPageByName('data-annotation');
    
    // Debug: Cek data dari database
    // var_dump($pageData); // Uncomment untuk debugging
    
    // 2. Ambil data terkait dari database
    $features = $this->serviceModel->getFeatures($pageData['id']);
    $services = $this->serviceModel->getServices($pageData['id']);
    $stats = $this->serviceModel->getStats($pageData['id']);
    $steps = $this->serviceModel->getSteps($pageData['id']);
    $benefits = $this->serviceModel->getBenefits($pageData['id']);
    
    // Debug: Cek data terkait
    // var_dump([
    //     'features_count' => count($features),
    //     'services_count' => count($services),
    //     'stats_count' => count($stats)
    // ]);
    
    // 3. Jika data dari database kosong, gunakan default data
    if (empty($features)) {
        $features = $this->getAnnotationFeatures();
    }
    
    if (empty($services)) {
        $services = $this->getAnnotationSolutions();
    }
    
    if (empty($stats)) {
        $stats = $this->getDefaultAnnotationStats();
    }
    
    // 4. Siapkan data untuk dikirim ke view
    $data = [
        'title' => 'Data Annotation Services - Startout AI',
        'description' => 'Professional data annotation services powered by AI and human expertise. High-quality data labeling for machine learning models.',
        'page' => 'data-annotation',
        
        // Hero section data
        'hero_title' => $pageData['hero_title'] ?? '<span class="gradient-text">Data Annotation</span> Services',
        'hero_subtitle' => $pageData['hero_subtitle'] ?? 'Power your AI models with expertly annotated data at scale',
        
        // Section titles
        'features_title' => $pageData['features_title'] ?? 'Why Choose Our Annotation Services',
        'services_title' => $pageData['services_title'] ?? 'Our Annotation Solutions',
        'stats_title' => $pageData['stats_title'] ?? 'Quality Metrics',
        'how_it_works_title' => $pageData['how_it_works_title'] ?? 'Our Annotation Process',
        'how_it_works_subtitle' => $pageData['how_it_works_subtitle'] ?? 'Professional data annotation with multi-layer quality assurance',
        'cta_title' => $pageData['cta_title'] ?? 'Improve Your AI Models',
        'cta_subtitle' => $pageData['cta_subtitle'] ?? 'Start with high-quality training data today',
        'cta_button_text' => $pageData['cta_button_text'] ?? 'Schedule Consultation',
        'benefits_title' => $pageData['benefits_title'] ?? 'Benefits of Professional Annotation',
        
        // Dynamic content
        'features' => $features,
        'services' => $services,
        'stats' => $stats,
        'steps' => $steps,
        'benefits' => $benefits
    ];
    
    // 5. Render view
    return view('templates/header', $data)
         . view('templates/nav')
         . view('page/dataanotation', $data)
         . view('templates/footer');
}

// Tambahkan method untuk default annotation solutions jika belum ada
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

// Tambahkan method untuk default stats jika belum ada
private function getDefaultAnnotationStats()
{
    return [
        [
            'value' => '99%+',
            'label' => 'Accuracy'
        ],
        [
            'value' => '50+',
            'label' => 'Languages'
        ],
        [
            'value' => '1M+',
            'label' => 'Data Points Daily'
        ],
        [
            'value' => '24/7',
            'label' => 'Operations'
        ]
    ];
}

    public function trustsafety()
    {
        $data = [
            'title' => 'Trust Safety - Startout AI',
            'description' => 'Professional data annotation services powered by AI and human expertise. High-quality data labeling for machine learning models.',
            'page' => 'data-annotation',
            'features' => $this->getTrustSafetyFeatures()
        ];

        return view('templates/header', $data)
             . view('templates/nav')
             . view('page/trust_safety', $data)
             . view('templates/footer');
    }

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

    private function getTrustSafetyFeatures()
    {
        return [
            [
                'icon' => 'fas fa-shield-alt',
                'title' => 'Content Moderation',
                'description' => 'Advanced AI-powered content moderation to keep your platform safe and compliant with community guidelines.'
            ],
            [
                'icon' => 'fas fa-user-shield',
                'title' => 'User Safety',
                'description' => 'Protect users from harmful content, harassment, and inappropriate behavior across all interactions.'
            ],
            [
                'icon' => 'fas fa-robot',
                'title' => 'AI Monitoring',
                'description' => 'Real-time AI systems that continuously monitor and flag potential safety issues automatically.'
            ],
            [
                'icon' => 'fas fa-gavel',
                'title' => 'Policy Enforcement',
                'description' => 'Ensure consistent application of your platform policies and terms of service.'
            ],
            [
                'icon' => 'fas fa-chart-line',
                'title' => 'Risk Analytics',
                'description' => 'Comprehensive analytics and reporting to identify emerging threats and safety trends.'
            ],
            [
                'icon' => 'fas fa-globe',
                'title' => 'Global Compliance',
                'description' => 'Meet international regulatory requirements and platform safety standards across regions.'
            ]
        ];
    }

public function contentModeration()
    {
        // Get page data from database
        $pageData = $this->serviceModel->getPageByName('content-moderation');
        
        // Get related data
        $features = $this->serviceModel->getFeatures($pageData['id']);
        $services = $this->serviceModel->getServices($pageData['id']);
        $stats = $this->serviceModel->getStats($pageData['id']);
        $steps = $this->serviceModel->getSteps($pageData['id']);
        $benefits = $this->serviceModel->getBenefits($pageData['id']);
        
        $data = [
            'title' => 'Content Moderation Services - Startout AI',
            'description' => 'Protect your platform and users with intelligent content moderation that scales with your growth. AI-powered moderation with human expertise.',
            'page' => 'content-moderation',
            'hero_title' => $pageData['hero_title'],
            'hero_subtitle' => $pageData['hero_subtitle'],
            'features_title' => $pageData['features_title'],
            'services_title' => $pageData['services_title'],
            'stats_title' => $pageData['stats_title'],
            'how_it_works_title' => $pageData['how_it_works_title'],
            'how_it_works_subtitle' => $pageData['how_it_works_subtitle'],
            'cta_title' => $pageData['cta_title'],
            'cta_subtitle' => $pageData['cta_subtitle'],
            'cta_button_text' => $pageData['cta_button_text'],
            'benefits_title' => $pageData['benefits_title'],
            'features' => $features,
            'services' => $services,
            'stats' => $stats,
            'steps' => $steps,
            'benefits' => $benefits
        ];

        return view('templates/header', $data)
             . view('templates/nav')
             . view('page/content_moderation', $data)
             . view('templates/footer');
    }
    private function getContentModerationFeatures()
    {
        return [
            [
                'icon' => 'fas fa-shield-alt',
                'title' => '24/7 Protection',
                'description' => 'Round-the-clock content monitoring across all platforms and time zones.'
            ],
            [
                'icon' => 'fas fa-clock',
                'title' => 'Real-Time Response',
                'description' => 'AI-powered tools combined with human expertise for instant action.'
            ],
            [
                'icon' => 'fas fa-users',
                'title' => 'Expert Moderators',
                'description' => 'Trained professionals with deep understanding of platform policies.'
            ],
            [
                'icon' => 'fas fa-check-circle',
                'title' => 'Custom Guidelines',
                'description' => 'Tailored moderation policies that align with your brand values.'
            ]
        ];
    }

    private function getContentModerationServices()
    {
        return [
            [
                'title' => 'Social Media Moderation',
                'description' => 'Protect your brand reputation across all social platforms with real-time content review.'
            ],
            [
                'title' => 'Community Management',
                'description' => 'Foster healthy online communities while removing harmful content and toxic behavior.'
            ],
            [
                'title' => 'User-Generated Content',
                'description' => 'Review and approve user submissions to ensure quality and compliance.'
            ],
            [
                'title' => 'Live Chat Moderation',
                'description' => 'Keep live conversations safe and on-brand with instant intervention.'
            ],
            [
                'title' => 'Image & Video Moderation',
                'description' => 'AI-assisted visual content review to identify inappropriate or harmful media.'
            ],
            [
                'title' => 'Multi-Language Support',
                'description' => 'Content moderation in 50+ languages with native-speaking moderators.'
            ]
        ];
    }

// Update method customersupport() di Services.php
public function customersupport()
{
    // Get page data from database
    $pageData = $this->serviceModel->getPageByName('customer-support');
    
    // Get related data
    $features = $this->serviceModel->getFeatures($pageData['id']);
    $services = $this->serviceModel->getServices($pageData['id']);
    $stats = $this->serviceModel->getStats($pageData['id']);
    $steps = $this->serviceModel->getSteps($pageData['id']);
    $benefits = $this->serviceModel->getBenefits($pageData['id']);
    
    $data = [
        'title' => 'Customer Support - Startout AI',
        'description' => 'Hybrid AI and human support teams delivering exceptional customer experiences across all channels.',
        'page' => 'customer-support',
        'hero_title' => $pageData['hero_title'],
        'hero_subtitle' => $pageData['hero_subtitle'],
        'features_title' => $pageData['features_title'],
        'services_title' => $pageData['services_title'],
        'stats_title' => $pageData['stats_title'],
        'how_it_works_title' => $pageData['how_it_works_title'],
        'how_it_works_subtitle' => $pageData['how_it_works_subtitle'],
        'cta_title' => $pageData['cta_title'],
        'cta_subtitle' => $pageData['cta_subtitle'],
        'cta_button_text' => $pageData['cta_button_text'],
        'benefits_title' => $pageData['benefits_title'],
        'features' => $features,
        'services' => $services,
        'stats' => $stats,
        'steps' => $steps,
        'benefits' => $benefits
    ];

    return view('templates/header', $data)
         . view('templates/nav')
         . view('page/customer_support', $data)
         . view('templates/footer');
}
    private function getCustomerSupportFeatures()
    {
        return [
            [
                'icon' => 'fas fa-comments',
                'title' => 'Hybrid Support Model',
                'description' => 'AI handles routine queries while human experts manage complex issues'
            ],
            [
                'icon' => 'fas fa-bolt',
                'title' => 'Smart Ticket Routing',
                'description' => 'Automatic routing to AI or human agents based on complexity and sentiment'
            ],
            [
                'icon' => 'fas fa-chart-line',
                'title' => 'Sentiment Analysis',
                'description' => 'Real-time emotion detection to escalate to human agents when needed'
            ],
            [
                'icon' => 'fas fa-clock',
                'title' => '24/7 Availability',
                'description' => 'AI coverage after hours, human agents during peak times'
            ],
            [
                'icon' => 'fas fa-globe',
                'title' => 'Multi-channel Integration',
                'description' => 'Unified support across email, chat, social media, and phone'
            ],
            [
                'icon' => 'fas fa-headset',
                'title' => 'Expert Human Agents',
                'description' => 'Trained specialists for complex inquiries and escalations'
            ]
        ];
    }

    private function getCustomerSupportSolutions()
    {
        return [
            [
                'title' => 'Intelligent Virtual Agents',
                'description' => 'Deploy AI chatbots that resolve common inquiries instantly with natural conversations.'
            ],
            [
                'title' => 'Smart Ticket Routing',
                'description' => 'Automatically assign tickets to the right team based on expertise and priority.'
            ],
            [
                'title' => 'Customer Sentiment Tracking',
                'description' => 'Monitor customer emotions in real-time to prevent churn and improve satisfaction.'
            ],
            [
                'title' => 'Omnichannel Support',
                'description' => 'Seamlessly manage customer interactions across all communication channels.'
            ],
            [
                'title' => 'Knowledge Base AI',
                'description' => 'AI-powered search and recommendations to help customers find answers faster.'
            ],
            [
                'title' => 'Performance Analytics',
                'description' => 'Deep insights into support metrics, response times, and customer satisfaction.'
            ]
        ];
    }

    private function getCustomerSupportStats()
    {
        return [
            [
                'value' => '90%',
                'label' => 'Faster Response'
            ],
            [
                'value' => '10x',
                'label' => 'More Inquiries'
            ],
            [
                'value' => '40%',
                'label' => 'CSAT Increase'
            ],
            [
                'value' => '60%',
                'label' => 'Cost Reduction'
            ]
        ];
    }
    public function socialMedia()
    {
        $data = [
            'title' => 'Social Media - Startout AI',
            'description' => 'Social Media Startout AI',
            'page' => 'social-media',
            'features' => $this->getAnnotationFeatures()
        ];

        return view('templates/header', $data)
             . view('templates/nav')
             . view('page/social_media', $data)
             . view('templates/footer');
    }
        public function gamingEntertainment()
    {
        $data = [
            'title' => 'tartout AI',
            'description' => 'Gaming&Entertainment',
            'page' => 'social-media',
            'features' => $this->getAnnotationFeatures()
        ];

        return view('templates/header', $data)
             . view('templates/nav')
             . view('page/gaming_entertainment', $data)
             . view('templates/footer');
    }
    

}