<?php

namespace App\Models;

use CodeIgniter\Model;

class ProcessAutomationModel extends Model
{
    protected $table = 'process_automation_pages';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    
    // Method untuk mengambil data halaman
    public function getPageData()
    {
        // Ambil data halaman utama (asumsi hanya ada 1 row)
        $pageData = $this->first();
        
        if (!$pageData) {
            // Jika belum ada data, buat default
            return $this->getDefaultPageData();
        }
        
        return $pageData;
    }
    
    // Method untuk mengambil capabilities
    public function getCapabilities($pageId)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('process_automation_capabilities');
        
        return $builder->select('*')
                      ->where('page_id', $pageId)
                      ->orderBy('display_order', 'ASC')
                      ->get()
                      ->getResultArray();
    }
    
    // Method untuk mengambil benefits
    public function getBenefits($pageId)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('process_automation_benefits');
        
        return $builder->select('*')
                      ->where('page_id', $pageId)
                      ->orderBy('display_order', 'ASC')
                      ->get()
                      ->getResultArray();
    }
    
    // Data default jika database kosong
    private function getDefaultPageData()
    {
        return [
            'id' => 1,
            'hero_title' => 'Transform Operations with <span class="gradient-text">AI & Intelligent Automation</span>',
            'hero_subtitle' => 'Harness the power of artificial intelligence and advanced automation to revolutionize your business processes. Our AI-driven solutions learn, adapt, and optimize continuously for maximum efficiency.',
            'capabilities_title' => 'AI-Driven <span class="gradient-text">Automation Capabilities</span>',
            'capabilities_subtitle' => 'Leverage cutting-edge AI to automate and optimize every aspect of your operations',
            'benefits_title' => 'Transform Your Business with <span class="gradient-text">AI & Automation</span>',
            'benefits_subtitle' => 'Proven results with intelligent, adaptive automation',
            'cta_title' => 'Ready to Automate Your Business?',
            'cta_subtitle' => 'Start saving time and money with intelligent process automation',
            'cta_button_text' => 'Schedule Consultation',
            'hero_button_text' => 'Start Your Project',
            'hero_button_url' => '/start-journey'
        ];
    }
    
    // Method untuk default capabilities
    public function getDefaultCapabilities()
    {
        return [
            [
                'icon' => 'fas fa-brain',
                'title' => 'AI-Powered Workflows',
                'description' => 'Intelligent automation that learns and adapts to your business processes'
            ],
            [
                'icon' => 'fas fa-robot',
                'title' => 'Robotic Process Automation',
                'description' => 'Deploy AI bots to handle repetitive tasks with human-like precision'
            ],
            [
                'icon' => 'fas fa-file-alt',
                'title' => 'Intelligent Document Processing',
                'description' => 'AI-driven extraction and analysis of data from any document format'
            ],
            [
                'icon' => 'fas fa-chart-line',
                'title' => 'Machine Learning Integration',
                'description' => 'Predictive analytics and decision-making built into your workflows'
            ],
            [
                'icon' => 'fas fa-bolt',
                'title' => 'Smart API Orchestration',
                'description' => 'AI-coordinated integration across all your business systems'
            ],
            [
                'icon' => 'fas fa-sync-alt',
                'title' => 'Self-Optimizing Systems',
                'description' => 'Continuous learning AI that improves efficiency automatically'
            ]
        ];
    }
    
    // Method untuk default benefits
    public function getDefaultBenefits()
    {
        return [
            'Reduce operational costs by up to 70% with AI optimization',
            'Achieve 99.9% accuracy with machine learning',
            'Free up 40+ hours per week per employee',
            'Accelerate processes by 15x with intelligent automation',
            'Real-time insights and predictive analytics',
            'Scale infinitely without increasing headcount'
        ];
    }
}