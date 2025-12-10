<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    protected $table = 'home_pages';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    
    public function getHomePageData()
    {
        // Get main page data
        $pageData = $this->first();
        
        if (!$pageData) {
            // Create default data if not exists
            $pageData = $this->createDefaultHomeData();
        }
        
        return $pageData;
    }
    
    public function getHomeStats($homePageId)
    {
        return $this->db->table('home_stats')
            ->where('home_page_id', $homePageId)
            ->orderBy('display_order', 'ASC')
            ->get()
            ->getResultArray();
    }
    
    public function getHomeFeatures($homePageId)
    {
        return $this->db->table('home_features')
            ->where('home_page_id', $homePageId)
            ->orderBy('display_order', 'ASC')
            ->get()
            ->getResultArray();
    }
    
    public function getHomeServices($homePageId)
    {
        $services = $this->db->table('home_services')
            ->where('home_page_id', $homePageId)
            ->orderBy('display_order', 'ASC')
            ->get()
            ->getResultArray();
        
        // Convert features string to array
        foreach ($services as &$service) {
            $service['features_array'] = !empty($service['features']) ? 
                explode(',', $service['features']) : [];
        }
        
        return $services;
    }
    
    public function getAnnotationFeatures()
    {
        // This method can be reused from Services or defined here
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
    
    private function createDefaultHomeData()
    {
        $defaultData = [
            'hero_title' => 'Transform Your Startup with <span class="gradient-text">Intelligent AI</span>',
            'hero_subtitle' => 'Accelerate growth, automate operations, and scale efficiently with AI-driven solutions tailored for modern startups. Experience the future of business intelligence today.',
            'solutions_title' => 'This is <span class="gradient-text">Intelligent Business</span>',
            'solutions_subtitle' => 'Part human expertise, part artificial intelligence',
            'features_title' => 'Comprehensive <span class="gradient-text">AI Solutions</span>',
            'features_subtitle' => 'Choose the services that fit your startup\'s unique needs',
            'annotation_title' => 'Our <span class="gradient-text">Data Annotation</span> Expertise',
            'annotation_subtitle' => 'High-quality data labeling services for your machine learning models',
            'cta_button_text' => 'Start Your Journey'
        ];
        
        $this->insert($defaultData);
        return $defaultData;
    }
}