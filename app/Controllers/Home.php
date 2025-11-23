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
}