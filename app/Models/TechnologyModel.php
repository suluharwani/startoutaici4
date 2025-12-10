<?php

namespace App\Models;

use CodeIgniter\Model;

class TechnologyModel extends Model
{
    protected $table = 'technology_pages';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'hero_title', 'hero_subtitle', 'hero_button_text',
        'solutions_title', 'use_cases_title', 'impact_title',
        'cta_title', 'cta_subtitle', 'cta_button_text'
    ];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    
    // Method untuk mendapatkan data halaman
    public function getPageData()
    {
        $data = $this->first();
        
        if (!$data) {
            // Jika belum ada data, buat data default
            $defaultData = [
                'hero_title' => '<span class="gradient-text">Technology</span> AI Solutions',
                'hero_subtitle' => 'Accelerate innovation and streamline operations with AI-powered technology solutions',
                'hero_button_text' => 'Explore Solutions',
                'solutions_title' => 'Our Technology Solutions',
                'use_cases_title' => 'Use Cases',
                'impact_title' => 'Impact Metrics',
                'cta_title' => 'Ready to Accelerate Your Tech Stack?',
                'cta_subtitle' => 'Let\'s discuss how AI can transform your technology operations',
                'cta_button_text' => 'Schedule Consultation'
            ];
            
            $this->insert($defaultData);
            $data = $this->first();
        }
        
        return $data;
    }
    
    // Method untuk mendapatkan solutions
    public function getSolutions($pageId)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('technology_solutions');
        $solutions = $builder->where('technology_page_id', $pageId)
                      ->orderBy('display_order', 'ASC')
                      ->get()
                      ->getResultArray();
        
        // Jika tidak ada data, return default
        if (empty($solutions)) {
            return $this->getDefaultSolutions();
        }
        
        return $solutions;
    }
    
    // Method untuk mendapatkan use cases
    public function getUseCases($pageId)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('technology_use_cases');
        $useCases = $builder->where('technology_page_id', $pageId)
                      ->orderBy('display_order', 'ASC')
                      ->get()
                      ->getResultArray();
        
        // Jika tidak ada data, return default
        if (empty($useCases)) {
            return $this->getDefaultUseCases();
        }
        
        return $useCases;
    }
    
    // Method untuk mendapatkan metrics
    public function getMetrics($pageId)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('technology_metrics');
        $metrics = $builder->where('technology_page_id', $pageId)
                      ->orderBy('display_order', 'ASC')
                      ->get()
                      ->getResultArray();
        
        // Jika tidak ada data, return default
        if (empty($metrics)) {
            return $this->getDefaultMetrics();
        }
        
        return $metrics;
    }
    
    // Method untuk default solutions
    public function getDefaultSolutions()
    {
        return [
            [
                'icon' => 'fas fa-code',
                'title' => 'AI Development',
                'description' => 'Build and deploy custom AI models tailored to your technology stack and use cases.'
            ],
            [
                'icon' => 'fas fa-bolt',
                'title' => 'Process Automation',
                'description' => 'Automate repetitive tasks and workflows to increase development efficiency.'
            ],
            [
                'icon' => 'fas fa-shield-alt',
                'title' => 'Security & Compliance',
                'description' => 'AI-powered threat detection and compliance monitoring for tech platforms.'
            ],
            [
                'icon' => 'fas fa-server',
                'title' => 'Infrastructure Optimization',
                'description' => 'Optimize cloud resources and infrastructure costs with intelligent automation.'
            ]
        ];
    }
    
    // Method untuk default use cases
    public function getDefaultUseCases()
    {
        return [
            [
                'title' => 'DevOps Automation',
                'description' => 'Streamline CI/CD pipelines and deployment processes with AI-driven insights.'
            ],
            [
                'title' => 'Code Quality Analysis',
                'description' => 'Automated code review and quality assurance to maintain high standards.'
            ],
            [
                'title' => 'Predictive Maintenance',
                'description' => 'Anticipate system failures and optimize infrastructure uptime.'
            ],
            [
                'title' => 'API Management',
                'description' => 'Intelligent API monitoring, analytics, and optimization.'
            ],
            [
                'title' => 'Data Pipeline Automation',
                'description' => 'Automate data processing and ETL workflows for faster insights.'
            ],
            [
                'title' => 'Technical Support',
                'description' => 'AI-assisted developer support and documentation search.'
            ]
        ];
    }
    
    // Method untuk default metrics
    public function getDefaultMetrics()
    {
        return [
            [
                'value' => '60%',
                'label' => 'Faster Deployment'
            ],
            [
                'value' => '45%',
                'label' => 'Cost Reduction'
            ],
            [
                'value' => '99.9%',
                'label' => 'Uptime'
            ],
            [
                'value' => '3x',
                'label' => 'Development Speed'
            ]
        ];
    }
}