<?php

namespace App\Controllers;

use App\Models\IndustryModel;

class Industries extends BaseController
{
    private $industryModel;

    public function __construct()
    {
        $this->industryModel = new IndustryModel();
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
    public function gamingEntertainment()
    {
        // Get page data from database
        $pageData = $this->industryModel->getPageByName('gaming-entertainment');

        // Jika belum ada data di database, buat data default
        if (!$pageData) {
            $data = [
                'title' => 'Gaming & Entertainment AI Solutions - Startout AI',
                'description' => 'Build safer, more engaging communities with AI-powered solutions',
                'page' => 'gaming-entertainment',
                'hero_title' => '<span class="gradient-text">Gaming & Entertainment</span> AI',
                'hero_subtitle' => 'Build safer, more engaging communities with AI-powered solutions',
                'solutions_title' => 'Our Gaming Solutions',
                'use_cases_title' => 'Use Cases',
                'impact_title' => 'Impact Metrics',
                'cta_title' => 'Ready to Level Up Your Platform?',
                'cta_subtitle' => 'Let\'s discuss how AI can transform your gaming community',
                'cta_button_text' => 'Schedule Consultation',
                'solutions' => $this->getDefaultGamingSolutions(),
                'use_cases' => $this->getDefaultGamingUseCases(),
                'metrics' => $this->getDefaultGamingMetrics()
            ];
        } else {
            // Get related data from database
            $solutions = $this->industryModel->getSolutions($pageData['id']);
            $useCases = $this->industryModel->getUseCases($pageData['id']);
            $metrics = $this->industryModel->getMetrics($pageData['id']);

            $data = [
                'title' => 'Gaming & Entertainment AI Solutions - Startout AI',
                'description' => $pageData['hero_subtitle'] ?? 'Build safer, more engaging communities with AI-powered solutions',
                'page' => 'gaming-entertainment',

                // Hero section
                'hero_title' => $pageData['hero_title'] ?? '<span class="gradient-text">Gaming & Entertainment</span> AI',
                'hero_subtitle' => $pageData['hero_subtitle'] ?? 'Build safer, more engaging communities with AI-powered solutions',

                // Section titles
                'solutions_title' => $pageData['solutions_title'] ?? 'Our Gaming Solutions',
                'use_cases_title' => $pageData['use_cases_title'] ?? 'Use Cases',
                'impact_title' => $pageData['impact_title'] ?? 'Impact Metrics',
                'cta_title' => $pageData['cta_title'] ?? 'Ready to Level Up Your Platform?',
                'cta_subtitle' => $pageData['cta_subtitle'] ?? 'Let\'s discuss how AI can transform your gaming community',
                'cta_button_text' => $pageData['cta_button_text'] ?? 'Schedule Consultation',

                // Dynamic content
                'solutions' => !empty($solutions) ? $solutions : $this->getDefaultGamingSolutions(),
                'use_cases' => !empty($useCases) ? $useCases : $this->getDefaultGamingUseCases(),
                'metrics' => !empty($metrics) ? $metrics : $this->getDefaultGamingMetrics()
            ];
        }

        return view('templates/header', $data)
            . view('templates/nav')
            . view('page/gaming_entertainment', $data)
            . view('templates/footer');
    }

    // Tambahkan method untuk default Gaming solutions
    private function getDefaultGamingSolutions()
    {
        return [
            [
                'icon' => 'fas fa-shield-alt',
                'title' => 'Content Moderation',
                'description' => 'AI-powered filtering of toxic behavior, hate speech, and inappropriate content'
            ],
            [
                'icon' => 'fas fa-users',
                'title' => 'Player Behavior Analysis',
                'description' => 'Identify patterns and predict player churn before it happens'
            ],
            [
                'icon' => 'fas fa-comments',
                'title' => 'Community Management',
                'description' => 'Automate responses and foster positive player interactions'
            ],
            [
                'icon' => 'fas fa-bolt',
                'title' => 'Anti-Cheat Systems',
                'description' => 'Real-time detection of cheating and fraudulent behavior'
            ]
        ];
    }

    // Tambahkan method untuk default Gaming use cases
    private function getDefaultGamingUseCases()
    {
        return [
            [
                'title' => 'Toxic Chat Detection',
                'description' => 'Monitor and filter harmful language in real-time across all communication channels.'
            ],
            [
                'title' => 'Player Retention AI',
                'description' => 'Predictive analytics to identify at-risk players and re-engage them effectively.'
            ],
            [
                'title' => 'Automated Support Bots',
                'description' => 'Resolve player inquiries instantly with AI-powered chatbots.'
            ],
            [
                'title' => 'Personalized Content',
                'description' => 'Recommend games, items, and experiences based on player preferences.'
            ],
            [
                'title' => 'Fraud Prevention',
                'description' => 'Detect account takeovers, payment fraud, and bot activity.'
            ],
            [
                'title' => 'Live Event Moderation',
                'description' => 'Scale moderation during peak events with AI-assisted tools.'
            ]
        ];
    }

    // Tambahkan method untuk default Gaming metrics
    private function getDefaultGamingMetrics()
    {
        return [
            [
                'value' => '70%',
                'label' => 'Cost Reduction'
            ],
            [
                'value' => '35%',
                'label' => 'Player Retention'
            ],
            [
                'value' => '99%',
                'label' => 'Cheat Detection'
            ],
            [
                'value' => '24/7',
                'label' => 'Support Coverage'
            ]
        ];
    }
    public function fintechBanking()
    {
        // Get page data from database
        $pageData = $this->industryModel->getPageByName('fintech-banking');

        // Jika belum ada data di database, buat data default
        if (!$pageData) {
            $data = [
                'title' => 'FinTech & Banking AI Solutions - Startout AI',
                'description' => 'Secure your financial platform with intelligent fraud detection and automation',
                'page' => 'fintech-banking',
                'hero_title' => '<span class="gradient-text">FinTech & Banking</span> AI',
                'hero_subtitle' => 'Secure your financial platform with intelligent fraud detection and automation',
                'solutions_title' => 'Our FinTech Solutions',
                'use_cases_title' => 'Use Cases',
                'impact_title' => 'Impact Metrics',
                'cta_title' => 'Ready to Secure Your Platform?',
                'cta_subtitle' => 'Let\'s discuss how AI can transform your financial services',
                'cta_button_text' => 'Schedule Consultation',
                'solutions' => $this->getDefaultFintechSolutions(),
                'use_cases' => $this->getDefaultFintechUseCases(),
                'metrics' => $this->getDefaultFintechMetrics()
            ];
        } else {
            // Get related data from database
            $solutions = $this->industryModel->getSolutions($pageData['id']);
            $useCases = $this->industryModel->getUseCases($pageData['id']);
            $metrics = $this->industryModel->getMetrics($pageData['id']);

            $data = [
                'title' => 'FinTech & Banking AI Solutions - Startout AI',
                'description' => $pageData['hero_subtitle'] ?? 'Secure your financial platform with intelligent fraud detection and automation',
                'page' => 'fintech-banking',

                // Hero section
                'hero_title' => $pageData['hero_title'] ?? '<span class="gradient-text">FinTech & Banking</span> AI',
                'hero_subtitle' => $pageData['hero_subtitle'] ?? 'Secure your financial platform with intelligent fraud detection and automation',

                // Section titles
                'solutions_title' => $pageData['solutions_title'] ?? 'Our FinTech Solutions',
                'use_cases_title' => $pageData['use_cases_title'] ?? 'Use Cases',
                'impact_title' => $pageData['impact_title'] ?? 'Impact Metrics',
                'cta_title' => $pageData['cta_title'] ?? 'Ready to Secure Your Platform?',
                'cta_subtitle' => $pageData['cta_subtitle'] ?? 'Let\'s discuss how AI can transform your financial services',
                'cta_button_text' => $pageData['cta_button_text'] ?? 'Schedule Consultation',

                // Dynamic content
                'solutions' => !empty($solutions) ? $solutions : $this->getDefaultFintechSolutions(),
                'use_cases' => !empty($useCases) ? $useCases : $this->getDefaultFintechUseCases(),
                'metrics' => !empty($metrics) ? $metrics : $this->getDefaultFintechMetrics()
            ];
        }

        return view('templates/header', $data)
            . view('templates/nav')
            . view('page/fintech_banking', $data)
            . view('templates/footer');
    }

    // Tambahkan method untuk default FinTech solutions
    private function getDefaultFintechSolutions()
    {
        return [
            [
                'icon' => 'fas fa-shield-alt',
                'title' => 'Fraud Detection',
                'description' => 'Real-time anomaly detection to prevent fraudulent transactions'
            ],
            [
                'icon' => 'fas fa-exclamation-triangle',
                'title' => 'Risk Assessment',
                'description' => 'AI-powered credit scoring and risk profiling'
            ],
            [
                'icon' => 'fas fa-chart-line',
                'title' => 'Financial Forecasting',
                'description' => 'Predictive analytics for market trends and portfolio optimization'
            ],
            [
                'icon' => 'fas fa-money-bill-wave',
                'title' => 'Personalized Banking',
                'description' => 'Tailored financial advice and product recommendations'
            ]
        ];
    }

    // Tambahkan method untuk default FinTech use cases
    private function getDefaultFintechUseCases()
    {
        return [
            [
                'title' => 'Transaction Monitoring',
                'description' => 'AI-driven detection of suspicious patterns and fraudulent behavior in real-time.'
            ],
            [
                'title' => 'KYC & Compliance',
                'description' => 'Automate identity verification and regulatory compliance processes.'
            ],
            [
                'title' => 'Credit Risk Modeling',
                'description' => 'Advanced ML models for accurate credit scoring and loan approvals.'
            ],
            [
                'title' => 'Customer Insights',
                'description' => 'Analyze customer behavior to personalize services and increase engagement.'
            ],
            [
                'title' => 'Chatbot Banking',
                'description' => 'AI assistants for account management, transfers, and financial advice.'
            ],
            [
                'title' => 'Market Intelligence',
                'description' => 'Predictive analytics for investment strategies and portfolio management.'
            ]
        ];
    }

    // Tambahkan method untuk default FinTech metrics
    private function getDefaultFintechMetrics()
    {
        return [
            [
                'value' => '60%',
                'label' => 'Fraud Reduction'
            ],
            [
                'value' => '80%',
                'label' => 'Compliance Automation'
            ],
            [
                'value' => '10x',
                'label' => 'Faster Approvals'
            ],
            [
                'value' => '99%',
                'label' => 'Accuracy'
            ]
        ];
    }
    public function ecommerceRetail()
    {
        // Get page data from database
        $pageData = $this->industryModel->getPageByName('ecommerce-retail');

        // Jika belum ada data di database, buat data default
        if (!$pageData) {
            $data = [
                'title' => 'E-Commerce & Retail AI Solutions - Startout AI',
                'description' => 'Transform your retail business with intelligent automation and personalized shopping experiences',
                'page' => 'ecommerce-retail',
                'hero_title' => '<span class="gradient-text">E-Commerce & Retail</span> AI Solutions',
                'hero_subtitle' => 'Transform your retail business with intelligent automation and personalized shopping experiences',
                'solutions_title' => 'Our E-Commerce Solutions',
                'use_cases_title' => 'Use Cases',
                'impact_title' => 'Results That Matter',
                'cta_title' => 'Ready to Transform Your Retail Business?',
                'cta_subtitle' => 'Let\'s discuss how AI can boost your e-commerce success',
                'cta_button_text' => 'Schedule Consultation',
                'solutions' => $this->getDefaultEcommerceSolutions(),
                'use_cases' => $this->getDefaultEcommerceUseCases(),
                'metrics' => $this->getDefaultEcommerceMetrics()
            ];
        } else {
            // Get related data from database
            $solutions = $this->industryModel->getSolutions($pageData['id']);
            $useCases = $this->industryModel->getUseCases($pageData['id']);
            $metrics = $this->industryModel->getMetrics($pageData['id']);

            $data = [
                'title' => 'E-Commerce & Retail AI Solutions - Startout AI',
                'description' => $pageData['hero_subtitle'] ?? 'Transform your retail business with intelligent automation and personalized shopping experiences',
                'page' => 'ecommerce-retail',

                // Hero section
                'hero_title' => $pageData['hero_title'] ?? '<span class="gradient-text">E-Commerce & Retail</span> AI Solutions',
                'hero_subtitle' => $pageData['hero_subtitle'] ?? 'Transform your retail business with intelligent automation and personalized shopping experiences',

                // Section titles
                'solutions_title' => $pageData['solutions_title'] ?? 'Our E-Commerce Solutions',
                'use_cases_title' => $pageData['use_cases_title'] ?? 'Use Cases',
                'impact_title' => $pageData['impact_title'] ?? 'Results That Matter',
                'cta_title' => $pageData['cta_title'] ?? 'Ready to Transform Your Retail Business?',
                'cta_subtitle' => $pageData['cta_subtitle'] ?? 'Let\'s discuss how AI can boost your e-commerce success',
                'cta_button_text' => $pageData['cta_button_text'] ?? 'Schedule Consultation',

                // Dynamic content
                'solutions' => !empty($solutions) ? $solutions : $this->getDefaultEcommerceSolutions(),
                'use_cases' => !empty($useCases) ? $useCases : $this->getDefaultEcommerceUseCases(),
                'metrics' => !empty($metrics) ? $metrics : $this->getDefaultEcommerceMetrics()
            ];
        }

        return view('templates/header', $data)
            . view('templates/nav')
            . view('page/ecommerce_retail', $data)
            . view('templates/footer');
    }



    // Tambahkan method untuk default use cases
    private function getDefaultEcommerceUseCases()
    {
        return [
            [
                'title' => 'Product Recommendation Engine',
                'description' => 'Increase average order value with AI-powered product suggestions based on browsing history and preferences.'
            ],
            [
                'title' => 'Dynamic Pricing',
                'description' => 'Optimize pricing strategies in real-time based on demand, competition, and inventory levels.'
            ],
            [
                'title' => 'Review Management',
                'description' => 'Automated moderation and sentiment analysis of product reviews to maintain quality.'
            ],
            [
                'title' => 'Visual Search',
                'description' => 'Allow customers to search for products using images for improved discovery.'
            ],
            [
                'title' => 'Fraud Detection',
                'description' => 'Protect your business and customers with AI-powered fraud prevention systems.'
            ],
            [
                'title' => 'Supply Chain Optimization',
                'description' => 'Streamline logistics and reduce costs with predictive supply chain management.'
            ]
        ];
    }

    // Tambahkan method untuk default metrics
    private function getDefaultEcommerceMetrics()
    {
        return [
            [
                'value' => '35%',
                'label' => 'Higher Conversion'
            ],
            [
                'value' => '50%',
                'label' => 'Faster Support'
            ],
            [
                'value' => '25%',
                'label' => 'Reduced Returns'
            ],
            [
                'value' => '40%',
                'label' => 'Lower Costs'
            ]
        ];
    }
    // Tambahkan method untuk default solutions jika data database kosong
    private function getDefaultEcommerceSolutions()
    {
        return [
            [
                'icon' => 'fas fa-shopping-cart',
                'title' => 'Customer Experience Optimization',
                'description' => 'AI-powered personalization and chatbots to enhance shopping experiences and increase conversions.'
            ],
            [
                'icon' => 'fas fa-boxes',
                'title' => 'Inventory Management',
                'description' => 'Predictive analytics for demand forecasting and automated inventory optimization.'
            ],
            [
                'icon' => 'fas fa-chart-line',
                'title' => 'Sales Analytics',
                'description' => 'Real-time insights into customer behavior, trends, and revenue opportunities.'
            ],
            [
                'icon' => 'fas fa-headset',
                'title' => 'Customer Support',
                'description' => '24/7 AI-assisted support for order tracking, returns, and customer inquiries.'
            ]
        ];
    }


    public function technology()
    {
        // Load model
        $technologyModel = new \App\Models\TechnologyModel();

        // Get page data from database
        $pageData = $technologyModel->getPageData();

        // Get related data from database
        $solutions = $technologyModel->getSolutions($pageData['id']);
        $useCases = $technologyModel->getUseCases($pageData['id']);
        $metrics = $technologyModel->getMetrics($pageData['id']);

        $data = [
            'title' => 'Startout AI - Technology Solutions',
            'description' => 'AI-powered technology solutions for accelerating innovation and streamlining operations',
            'page' => 'technology',

            // Hero section
            'hero_title' => $pageData['hero_title'] ?? '<span class="gradient-text">Technology</span> AI Solutions',
            'hero_subtitle' => $pageData['hero_subtitle'] ?? 'Accelerate innovation and streamline operations with AI-powered technology solutions',
            'hero_button_text' => $pageData['hero_button_text'] ?? 'Explore Solutions',

            // Solutions section
            'solutions_title' => $pageData['solutions_title'] ?? 'Our Technology Solutions',
            'solutions' => $solutions,

            // Use Cases section
            'use_cases_title' => $pageData['use_cases_title'] ?? 'Use Cases',
            'useCases' => $useCases,

            // Impact Metrics section
            'impact_title' => $pageData['impact_title'] ?? 'Impact Metrics',
            'metrics' => $metrics,

            // CTA section
            'cta_title' => $pageData['cta_title'] ?? 'Ready to Accelerate Your Tech Stack?',
            'cta_subtitle' => $pageData['cta_subtitle'] ?? 'Let\'s discuss how AI can transform your technology operations',
            'cta_button_text' => $pageData['cta_button_text'] ?? 'Schedule Consultation'
        ];

        return view('templates/header', $data)
            . view('templates/nav')
            . view('page/technology', $data)
            . view('templates/footer');
    }
    public function travelTourism()
{
    // Get page data from database
    $pageData = $this->industryModel->getPageByName('travel-tourism');

    // Jika belum ada data di database, buat data default
    if (!$pageData) {
        $data = [
            'title' => 'Travel & Tourism AI Solutions - Startout AI',
            'description' => 'Enhance traveler experiences and streamline operations with intelligent automation',
            'page' => 'travel-tourism',
            'hero_title' => '<span class="gradient-text">Travel & Tourism</span> AI Solutions',
            'hero_subtitle' => 'Enhance traveler experiences and streamline operations with intelligent automation',
            'solutions_title' => 'Our Travel Solutions',
            'use_cases_title' => 'Use Cases',
            'impact_title' => 'Customer Satisfaction',
            'cta_title' => 'Ready to Transform Travel Experiences?',
            'cta_subtitle' => 'Let\'s discuss how AI can enhance your travel business',
            'cta_button_text' => 'Schedule Consultation',
            'solutions' => $this->getDefaultTravelSolutions(),
            'use_cases' => $this->getDefaultTravelUseCases(),
            'metrics' => $this->getDefaultTravelMetrics()
        ];
    } else {
        // Get related data from database
        $solutions = $this->industryModel->getSolutions($pageData['id']);
        $useCases = $this->industryModel->getUseCases($pageData['id']);
        $metrics = $this->industryModel->getMetrics($pageData['id']);

        $data = [
            'title' => 'Travel & Tourism AI Solutions - Startout AI',
            'description' => $pageData['hero_subtitle'] ?? 'Enhance traveler experiences and streamline operations with intelligent automation',
            'page' => 'travel-tourism',

            // Hero section
            'hero_title' => $pageData['hero_title'] ?? '<span class="gradient-text">Travel & Tourism</span> AI Solutions',
            'hero_subtitle' => $pageData['hero_subtitle'] ?? 'Enhance traveler experiences and streamline operations with intelligent automation',

            // Section titles
            'solutions_title' => $pageData['solutions_title'] ?? 'Our Travel Solutions',
            'use_cases_title' => $pageData['use_cases_title'] ?? 'Use Cases',
            'impact_title' => $pageData['impact_title'] ?? 'Customer Satisfaction',
            'cta_title' => $pageData['cta_title'] ?? 'Ready to Transform Travel Experiences?',
            'cta_subtitle' => $pageData['cta_subtitle'] ?? 'Let\'s discuss how AI can enhance your travel business',
            'cta_button_text' => $pageData['cta_button_text'] ?? 'Schedule Consultation',

            // Dynamic content
            'solutions' => !empty($solutions) ? $solutions : $this->getDefaultTravelSolutions(),
            'use_cases' => !empty($useCases) ? $useCases : $this->getDefaultTravelUseCases(),
            'metrics' => !empty($metrics) ? $metrics : $this->getDefaultTravelMetrics()
        ];
    }

    return view('templates/header', $data)
        . view('templates/nav')
        . view('page/travel_tourism', $data)
        . view('templates/footer');
}

// Tambahkan method untuk default Travel solutions
private function getDefaultTravelSolutions()
{
    return [
        [
            'icon' => 'fas fa-plane',
            'title' => 'Travel Planning AI',
            'description' => 'Personalized itinerary generation and smart travel recommendations for customers.'
        ],
        [
            'icon' => 'fas fa-map-marker-alt',
            'title' => 'Destination Intelligence',
            'description' => 'Real-time insights on destinations, weather, events, and local attractions.'
        ],
        [
            'icon' => 'fas fa-calendar-alt',
            'title' => 'Booking Optimization',
            'description' => 'AI-powered booking systems that maximize conversions and revenue.'
        ],
        [
            'icon' => 'fas fa-comments',
            'title' => '24/7 Customer Support',
            'description' => 'Multilingual chatbots and support for travelers across time zones.'
        ]
    ];
}

// Tambahkan method untuk default Travel use cases
private function getDefaultTravelUseCases()
{
    return [
        [
            'title' => 'Smart Recommendations',
            'description' => 'AI-driven suggestions for hotels, activities, and experiences based on preferences.'
        ],
        [
            'title' => 'Dynamic Pricing',
            'description' => 'Optimize pricing based on demand, seasonality, and market conditions.'
        ],
        [
            'title' => 'Review Analysis',
            'description' => 'Sentiment analysis of reviews to improve services and respond to feedback.'
        ],
        [
            'title' => 'Virtual Concierge',
            'description' => 'AI assistants that help travelers throughout their journey.'
        ],
        [
            'title' => 'Fraud Prevention',
            'description' => 'Protect bookings and payments with AI-powered fraud detection.'
        ],
        [
            'title' => 'Loyalty Programs',
            'description' => 'Personalized rewards and engagement strategies to retain customers.'
        ]
    ];
}

// Tambahkan method untuk default Travel metrics
private function getDefaultTravelMetrics()
{
    return [
        [
            'value' => '45%',
            'label' => 'Booking Increase'
        ],
        [
            'value' => '30%',
            'label' => 'Higher Revenue'
        ],
        [
            'value' => '24/7',
            'label' => 'Support Available'
        ],
        [
            'value' => '95%',
            'label' => 'Customer Satisfaction'
        ]
    ];
}
    public function automotiveMobility()
    {
        // Get page data from database
        $pageData = $this->industryModel->getPageByName('automotive-mobility');

        // Get related data
        $solutions = $this->industryModel->getSolutions($pageData['id']);
        $useCases = $this->industryModel->getUseCases($pageData['id']);
        $metrics = $this->industryModel->getMetrics($pageData['id']);

        $data = [
            'title' => 'Startout AI - Automotive & Mobility Solutions',
            'description' => 'AI-powered solutions for the future of automotive and mobility innovation',
            'page' => 'automotive-mobility',
            'hero_title' => $pageData['hero_title'],
            'hero_subtitle' => $pageData['hero_subtitle'],
            'solutions_title' => $pageData['solutions_title'],
            'use_cases_title' => $pageData['use_cases_title'],
            'impact_title' => $pageData['impact_title'],
            'cta_title' => $pageData['cta_title'],
            'cta_subtitle' => $pageData['cta_subtitle'],
            'cta_button_text' => $pageData['cta_button_text'],
            'solutions' => $solutions,
            'use_cases' => $useCases,
            'metrics' => $metrics
        ];

        return view('templates/header', $data)
            . view('templates/nav')
            . view('page/automotive_mobility', $data)
            . view('templates/footer');
    }
}
