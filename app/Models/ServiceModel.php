<?php

namespace App\Models;

use CodeIgniter\Model;

class ServiceModel extends Model
{
    protected $table = 'service_pages';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'service_name', 'hero_title', 'hero_subtitle', 'features_title',
        'services_title', 'stats_title', 'how_it_works_title', 
        'how_it_works_subtitle', 'cta_title', 'cta_subtitle', 
        'cta_button_text', 'benefits_title'
    ];
    
    public function getPageByName($serviceName)
    {
        $page = $this->where('service_name', $serviceName)->first();
        
        if (!$page) {
            return $this->getDefaultPage($serviceName);
        }
        
        return $page;
    }
    
    public function getFeatures($pageId)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('service_features');
        
        return $builder
            ->where('service_page_id', $pageId)
            ->orderBy('display_order', 'ASC')
            ->get()
            ->getResultArray();
    }
    
    public function getServices($pageId)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('service_services');
        
        return $builder
            ->where('service_page_id', $pageId)
            ->orderBy('display_order', 'ASC')
            ->get()
            ->getResultArray();
    }
    
    public function getStats($pageId)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('service_stats');
        
        return $builder
            ->where('service_page_id', $pageId)
            ->orderBy('display_order', 'ASC')
            ->get()
            ->getResultArray();
    }
    
    public function getSteps($pageId)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('service_steps');
        
        return $builder
            ->where('service_page_id', $pageId)
            ->orderBy('display_order', 'ASC')
            ->get()
            ->getResultArray();
    }
    
    public function getBenefits($pageId)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('service_benefits');
        
        return $builder
            ->where('service_page_id', $pageId)
            ->orderBy('display_order', 'ASC')
            ->get()
            ->getResultArray();
    }
    
    private function getDefaultPage($serviceName)
    {
        // Default data untuk content moderation
        $defaults = [
            'content-moderation' => [
                'id' => 0,
                'service_name' => $serviceName,
                'hero_title' => 'Content <span class="gradient-text">Moderation</span>',
                'hero_subtitle' => 'Protect your platform and users with intelligent content moderation that scales with your growth',
                'features_title' => 'Why Choose Our Moderation Services',
                'services_title' => 'Our Moderation Services',
                'stats_title' => 'Our Performance Metrics',
                'how_it_works_title' => 'How Our Content Moderation Works',
                'how_it_works_subtitle' => 'A comprehensive approach combining AI technology with human expertise',
                'cta_title' => 'Keep Your Platform Safe',
                'cta_subtitle' => 'Let\'s discuss your content moderation needs',
                'cta_button_text' => 'Schedule Consultation',
                'benefits_title' => 'Benefits of Professional Content Moderation'
            ]
        ];
        
        return $defaults[$serviceName] ?? [
            'id' => 0,
            'service_name' => $serviceName,
            'hero_title' => 'Service Page',
            'hero_subtitle' => 'Service description',
            'features_title' => 'Our Features',
            'services_title' => 'Our Services',
            'stats_title' => 'Our Stats',
            'how_it_works_title' => 'How It Works',
            'how_it_works_subtitle' => 'Learn how our service works',
            'cta_title' => 'Get Started',
            'cta_subtitle' => 'Start your journey with us',
            'cta_button_text' => 'Get Started',
            'benefits_title' => 'Benefits'
        ];
    }
}