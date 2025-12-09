<?php

namespace App\Controllers;


class Industries extends BaseController
{
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
}