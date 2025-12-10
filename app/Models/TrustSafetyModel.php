<?php

namespace App\Models;

use CodeIgniter\Model;

class TrustSafetyModel extends Model
{
    protected $table = 'trust_safety_pages';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'hero_title', 'hero_subtitle', 'services_title', 'services_subtitle',
        'how_it_works_title', 'how_it_works_subtitle', 'benefits_title',
        'cta_title', 'cta_subtitle'
    ];
    
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    
    /**
     * Get page data
     */
    public function getPageData($id = 1)
    {
        return $this->find($id);
    }
    
    /**
     * Get features for Trust & Safety page
     */
    public function getFeatures($pageId = 1)
    {
        $db = db_connect();
        return $db->table('trust_safety_features')
                 ->where('trust_safety_page_id', $pageId)
                 ->orderBy('display_order', 'ASC')
                 ->get()
                 ->getResultArray();
    }
    
    /**
     * Get stats for Trust & Safety page
     */
    public function getStats($pageId = 1)
    {
        $db = db_connect();
        return $db->table('trust_safety_stats')
                 ->where('trust_safety_page_id', $pageId)
                 ->orderBy('display_order', 'ASC')
                 ->get()
                 ->getResultArray();
    }
    
    /**
     * Default features if database is empty
     */
    public function getDefaultFeatures()
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
    
    /**
     * Default stats if database is empty
     */
    public function getDefaultStats()
    {
        return [
            [
                'value' => '99.9%',
                'label' => 'Accuracy Rate'
            ],
            [
                'value' => '24/7',
                'label' => 'Monitoring'
            ],
            [
                'value' => '50ms',
                'label' => 'Response Time'
            ],
            [
                'value' => '1000+',
                'label' => 'Platforms Secured'
            ]
        ];
    }
}