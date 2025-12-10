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
        $page = $this->where('page_name', $pageName)->first();
        
        if (!$page) {
            return $this->getDefaultPage($pageName);
        }
        
        return $page;
    }
    
    public function getSolutions($pageId)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('industry_solutions');
        
        return $builder
            ->where('industry_page_id', $pageId)
            ->orderBy('display_order', 'ASC')
            ->get()
            ->getResultArray();
    }
    
    public function getUseCases($pageId)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('industry_use_cases');
        
        return $builder
            ->where('industry_page_id', $pageId)
            ->orderBy('display_order', 'ASC')
            ->get()
            ->getResultArray();
    }
    
    public function getMetrics($pageId)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('industry_metrics');
        
        return $builder
            ->where('industry_page_id', $pageId)
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