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
            public function fintechBanking()
    {
        $data = [
            'title' => 'tartout AI',
            'description' => 'Fintech & Banking',
            'page' => 'fintech-banking',
            'features' => $this->getAnnotationFeatures()
        ];

        return view('templates/header', $data)
             . view('templates/nav')
             . view('page/fintech_banking', $data)
             . view('templates/footer');
    }
                public function ecommerceRetail()
    {
        $data = [
            'title' => 'tartout AI',
            'description' => 'Fintech & Banking',
            'page' => 'fintech-banking',
            'features' => $this->getAnnotationFeatures()
        ];

        return view('templates/header', $data)
             . view('templates/nav')
             . view('page/ecommerce_retail', $data)
             . view('templates/footer');
    }
        public function technology()
    {
        $data = [
            'title' => 'Startout AI - Technology Solutions',
            'description' => 'AI-powered technology solutions for accelerating innovation and streamlining operations',
            'page' => 'technology',
            'features' => $this->getAnnotationFeatures()
        ];

        return view('templates/header', $data)
             . view('templates/nav')
             . view('page/technology', $data)
             . view('templates/footer');
    }
     public function travelTourism()
    {
        $data = [
            'title' => 'Startout AI - Travel & Tourism Solutions',
            'description' => 'AI-powered solutions to enhance traveler experiences and streamline travel industry operations',
            'page' => 'travel-tourism',
            'features' => $this->getAnnotationFeatures()
        ];

        return view('templates/header', $data)
             . view('templates/nav')
             . view('page/travel_tourism', $data)
             . view('templates/footer');
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