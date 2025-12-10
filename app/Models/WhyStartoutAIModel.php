<?php

namespace App\Models;

use CodeIgniter\Model;

class WhyStartoutAIModel extends Model
{
    protected $table = 'why_startout_ai_pages';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'hero_title', 'hero_subtitle', 'stats_title',
        'advantages_title', 'advantages_subtitle', 'benefits_title',
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
     * Get stats for Why Startout AI page
     */
    public function getStats($pageId = 1)
    {
        $db = db_connect();
        return $db->table('why_startout_ai_stats')
                 ->where('page_id', $pageId)
                 ->orderBy('display_order', 'ASC')
                 ->get()
                 ->getResultArray();
    }
    
    /**
     * Get advantages for Why Startout AI page
     */
    public function getAdvantages($pageId = 1)
    {
        $db = db_connect();
        return $db->table('why_startout_ai_advantages')
                 ->where('page_id', $pageId)
                 ->orderBy('display_order', 'ASC')
                 ->get()
                 ->getResultArray();
    }
    
    /**
     * Get benefits for Why Startout AI page
     */
    public function getBenefits($pageId = 1)
    {
        $db = db_connect();
        return $db->table('why_startout_ai_benefits')
                 ->where('page_id', $pageId)
                 ->orderBy('display_order', 'ASC')
                 ->get()
                 ->getResultArray();
    }
    
    /**
     * Default stats if database is empty
     */
    public function getDefaultStats()
    {
        return [
            [
                'value' => '98%',
                'label' => 'Client Retention Rate'
            ],
            [
                'value' => '500+',
                'label' => 'Active Projects'
            ],
            [
                'value' => '50+',
                'label' => 'Countries Served'
            ],
            [
                'value' => '24/7',
                'label' => 'Global Support'
            ]
        ];
    }
    
    /**
     * Default advantages if database is empty
     */
    public function getDefaultAdvantages()
    {
        return [
            [
                'icon' => 'fas fa-users',
                'title' => 'Expert Human + AI Workforce',
                'description' => 'Combine the best of human expertise with AI-powered efficiency. Our global workforce of trained professionals works seamlessly with advanced AI tools to deliver unmatched quality and scale.'
            ],
            [
                'icon' => 'fas fa-globe',
                'title' => 'Global Coverage, Local Understanding',
                'description' => 'With teams spanning multiple time zones and cultures, we provide 24/7 coverage while maintaining deep local market knowledge and cultural sensitivity.'
            ],
            [
                'icon' => 'fas fa-award',
                'title' => 'Proven Track Record',
                'description' => 'Over 500+ successful projects across diverse industries. Our clients experience an average 60% cost reduction and 10x faster delivery times.'
            ],
            [
                'icon' => 'fas fa-chart-line',
                'title' => 'Scalability on Demand',
                'description' => 'Scale your operations up or down instantly. Whether you need 10 or 10,000 team members, we deliver the same exceptional quality.'
            ],
            [
                'icon' => 'fas fa-shield-alt',
                'title' => 'Enterprise-Grade Security',
                'description' => 'SOC 2 Type II certified, GDPR compliant, and ISO 27001 certified. Your data security and privacy are our top priorities.'
            ],
            [
                'icon' => 'fas fa-bolt',
                'title' => 'Cutting-Edge AI Technology',
                'description' => 'We invest heavily in proprietary AI technology that continuously learns and improves, ensuring you always have access to the latest innovations.'
            ]
        ];
    }
    
    /**
     * Default benefits if database is empty
     */
    public function getDefaultBenefits()
    {
        return [
            'Flexible engagement models that adapt to your needs',
            'Transparent pricing with no hidden costs',
            'Dedicated account management and support',
            'Proprietary AI tools and platforms',
            'Rigorous quality assurance processes',
            'Industry-specific expertise and best practices'
        ];
    }
}