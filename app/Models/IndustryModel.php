<?php

namespace App\Models;

use CodeIgniter\Model;

class IndustryModel extends Model
{
    protected $table = 'industry_pages';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'page_name', 'hero_title', 'hero_subtitle', 
        'solutions_title', 'use_cases_title', 'impact_title',
        'cta_title', 'cta_subtitle', 'cta_button_text'
    ];
    
    public function getPageByName($pageName)
    {
        // Cari di industry_pages terlebih dahulu
        $page = $this->where('page_name', $pageName)->first();
        
        if (!$page) {
            // Coba cari di travel_tourism_pages
            $db = \Config\Database::connect();
            $builder = $db->table('travel_tourism_pages');
            $travelPage = $builder->where('page_name', $pageName)->get()->getRowArray();
            
            if ($travelPage) {
                return $travelPage;
            }
            
            // Jika tidak ditemukan di kedua tabel, gunakan default
            return $this->getDefaultPage($pageName);
        }
        
        return $page;
    }
    
    public function getSolutions($pageId)
    {
        $db = \Config\Database::connect();
        
        // Cek apakah page_id termasuk travel_tourism_pages
        $builder = $db->table('industry_solutions');
        $solutions = $builder
            ->where('industry_page_id', $pageId)
            ->orderBy('display_order', 'ASC')
            ->get()
            ->getResultArray();
            
        if (empty($solutions)) {
            // Coba cari di travel_tourism_solutions
            $builder = $db->table('travel_tourism_solutions');
            $solutions = $builder
                ->where('travel_page_id', $pageId)
                ->orderBy('display_order', 'ASC')
                ->get()
                ->getResultArray();
        }
        
        return $solutions;
    }
    
    public function getUseCases($pageId)
    {
        $db = \Config\Database::connect();
        
        // Cek apakah page_id termasuk industry_use_cases
        $builder = $db->table('industry_use_cases');
        $useCases = $builder
            ->where('industry_page_id', $pageId)
            ->orderBy('display_order', 'ASC')
            ->get()
            ->getResultArray();
            
        if (empty($useCases)) {
            // Coba cari di travel_tourism_use_cases
            $builder = $db->table('travel_tourism_use_cases');
            $useCases = $builder
                ->where('travel_page_id', $pageId)
                ->orderBy('display_order', 'ASC')
                ->get()
                ->getResultArray();
        }
        
        return $useCases;
    }
    
    public function getMetrics($pageId)
    {
        $db = \Config\Database::connect();
        
        // Cek apakah page_id termasuk industry_metrics
        $builder = $db->table('industry_metrics');
        $metrics = $builder
            ->where('industry_page_id', $pageId)
            ->orderBy('display_order', 'ASC')
            ->get()
            ->getResultArray();
            
        if (empty($metrics)) {
            // Coba cari di travel_tourism_metrics
            $builder = $db->table('travel_tourism_metrics');
            $metrics = $builder
                ->where('travel_page_id', $pageId)
                ->orderBy('display_order', 'ASC')
                ->get()
                ->getResultArray();
        }
        
        return $metrics;
    }
    
    // Method untuk mendapatkan travel tourism solutions (jika dibutuhkan secara spesifik)
    public function getTravelSolutions($pageId)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('travel_tourism_solutions');
        
        return $builder
            ->where('travel_page_id', $pageId)
            ->orderBy('display_order', 'ASC')
            ->get()
            ->getResultArray();
    }
    
    // Method untuk mendapatkan travel tourism use cases (jika dibutuhkan secara spesifik)
    public function getTravelUseCases($pageId)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('travel_tourism_use_cases');
        
        return $builder
            ->where('travel_page_id', $pageId)
            ->orderBy('display_order', 'ASC')
            ->get()
            ->getResultArray();
    }
    
    // Method untuk mendapatkan travel tourism metrics (jika dibutuhkan secara spesifik)
    public function getTravelMetrics($pageId)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('travel_tourism_metrics');
        
        return $builder
            ->where('travel_page_id', $pageId)
            ->orderBy('display_order', 'ASC')
            ->get()
            ->getResultArray();
    }
    
    private function getDefaultPage($pageName)
    {
        // Default data jika halaman tidak ditemukan
        $defaults = [
            'automotive-mobility' => [
                'id' => 0,
                'page_name' => $pageName,
                'hero_title' => '<span class="gradient-text">Automotive & Mobility</span> AI',
                'hero_subtitle' => 'Drive innovation with AI-powered solutions for the future of transportation',
                'solutions_title' => 'Our Automotive Solutions',
                'use_cases_title' => 'Use Cases',
                'impact_title' => 'Impact Metrics',
                'cta_title' => 'Ready to Transform Your Mobility Solutions?',
                'cta_subtitle' => 'Let\'s discuss how AI can accelerate your automotive innovation',
                'cta_button_text' => 'Schedule Consultation'
            ],
            'travel-tourism' => [
                'id' => 0,
                'page_name' => $pageName,
                'hero_title' => '<span class="gradient-text">Travel & Tourism</span> AI Solutions',
                'hero_subtitle' => 'Enhance traveler experiences and streamline operations with intelligent automation',
                'solutions_title' => 'Our Travel Solutions',
                'use_cases_title' => 'Use Cases',
                'impact_title' => 'Customer Satisfaction',
                'cta_title' => 'Ready to Transform Travel Experiences?',
                'cta_subtitle' => 'Let\'s discuss how AI can enhance your travel business',
                'cta_button_text' => 'Schedule Consultation'
            ],
            'ecommerce-retail' => [
                'id' => 0,
                'page_name' => $pageName,
                'hero_title' => '<span class="gradient-text">E-Commerce & Retail</span> AI Solutions',
                'hero_subtitle' => 'Transform your retail business with intelligent automation and personalized shopping experiences',
                'solutions_title' => 'Our E-Commerce Solutions',
                'use_cases_title' => 'Use Cases',
                'impact_title' => 'Results That Matter',
                'cta_title' => 'Ready to Transform Your Retail Business?',
                'cta_subtitle' => 'Let\'s discuss how AI can boost your e-commerce success',
                'cta_button_text' => 'Schedule Consultation'
            ],
            'fintech-banking' => [
                'id' => 0,
                'page_name' => $pageName,
                'hero_title' => '<span class="gradient-text">FinTech & Banking</span> AI',
                'hero_subtitle' => 'Secure your financial platform with intelligent fraud detection and automation',
                'solutions_title' => 'Our FinTech Solutions',
                'use_cases_title' => 'Use Cases',
                'impact_title' => 'Impact Metrics',
                'cta_title' => 'Ready to Secure Your Platform?',
                'cta_subtitle' => 'Let\'s discuss how AI can transform your financial services',
                'cta_button_text' => 'Schedule Consultation'
            ],
            'gaming-entertainment' => [
                'id' => 0,
                'page_name' => $pageName,
                'hero_title' => '<span class="gradient-text">Gaming & Entertainment</span> AI',
                'hero_subtitle' => 'Build safer, more engaging communities with AI-powered solutions',
                'solutions_title' => 'Our Gaming Solutions',
                'use_cases_title' => 'Use Cases',
                'impact_title' => 'Impact Metrics',
                'cta_title' => 'Ready to Level Up Your Platform?',
                'cta_subtitle' => 'Let\'s discuss how AI can transform your gaming community',
                'cta_button_text' => 'Schedule Consultation'
            ]
        ];
        
        return $defaults[$pageName] ?? [
            'id' => 0,
            'page_name' => $pageName,
            'hero_title' => 'Industry Page',
            'hero_subtitle' => 'Industry description',
            'solutions_title' => 'Our Solutions',
            'use_cases_title' => 'Use Cases',
            'impact_title' => 'Impact Metrics',
            'cta_title' => 'Ready to Get Started?',
            'cta_subtitle' => 'Contact us to learn more',
            'cta_button_text' => 'Get Started'
        ];
    }
}