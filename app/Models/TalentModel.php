<?php

namespace App\Models;

use CodeIgniter\Model;

class TalentModel extends Model
{
    protected $table = 'talent_pages';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'hero_title', 'hero_subtitle', 'benefits_title', 
        'roles_title', 'process_title', 'cta_title', 
        'cta_subtitle', 'cta_button_text'
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
                'hero_title' => '<span class="gradient-text">Talent Solutions</span>',
                'hero_subtitle' => 'Build your dream team with our curated network of AI and tech professionals',
                'benefits_title' => 'Why Our Talent Solutions',
                'roles_title' => 'Available Roles',
                'process_title' => 'How It Works',
                'cta_title' => 'Ready to Build Your Team?',
                'cta_subtitle' => 'Let\'s discuss your talent requirements',
                'cta_button_text' => 'Schedule Consultation'
            ];
            
            $this->insert($defaultData);
            $data = $this->first();
        }
        
        return $data;
    }
    
    // Method untuk mendapatkan benefits
    public function getBenefits($pageId)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('talent_benefits');
        $benefits = $builder->where('talent_page_id', $pageId)
                      ->orderBy('display_order', 'ASC')
                      ->get()
                      ->getResultArray();
        
        // Jika tidak ada data, return default
        if (empty($benefits)) {
            return $this->getDefaultBenefits();
        }
        
        return $benefits;
    }
    
    // Method untuk mendapatkan roles
    public function getRoles($pageId)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('talent_roles');
        $roles = $builder->where('talent_page_id', $pageId)
                      ->orderBy('display_order', 'ASC')
                      ->get()
                      ->getResultArray();
        
        // Jika tidak ada data, return default
        if (empty($roles)) {
            return $this->getDefaultRoles();
        }
        
        return $roles;
    }
    
    // Method untuk mendapatkan process steps
    public function getProcessSteps($pageId)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('talent_process_steps');
        $steps = $builder->where('talent_page_id', $pageId)
                      ->orderBy('display_order', 'ASC')
                      ->get()
                      ->getResultArray();
        
        // Jika tidak ada data, return default
        if (empty($steps)) {
            return $this->getDefaultProcessSteps();
        }
        
        return $steps;
    }
    
    // Method untuk default benefits
    public function getDefaultBenefits()
    {
        return [
            [
                'icon' => 'fas fa-users',
                'title' => 'Pre-Vetted Talent',
                'description' => 'Access to rigorously screened professionals ready to start immediately.'
            ],
            [
                'icon' => 'fas fa-bullseye',
                'title' => 'Perfect Match',
                'description' => 'AI-powered matching ensures the right skills for your specific needs.'
            ],
            [
                'icon' => 'fas fa-award',
                'title' => 'Proven Excellence',
                'description' => 'All talent backed by track records of successful project delivery.'
            ],
            [
                'icon' => 'fas fa-chart-line',
                'title' => 'Scalable Teams',
                'description' => 'Easily scale up or down based on your project requirements.'
            ]
        ];
    }
    
    // Method untuk default roles
    public function getDefaultRoles()
    {
        return [
            [
                'title' => 'AI/ML Engineers',
                'description' => 'Experts in machine learning, deep learning, and AI model development.',
                'button_text' => 'View Profiles',
                'button_url' => '#'
            ],
            [
                'title' => 'Data Scientists',
                'description' => 'Professionals skilled in data analysis, visualization, and insights extraction.',
                'button_text' => 'View Profiles',
                'button_url' => '#'
            ],
            [
                'title' => 'Content Specialists',
                'description' => 'Writers, editors, and moderators for content creation and curation.',
                'button_text' => 'View Profiles',
                'button_url' => '#'
            ],
            [
                'title' => 'Customer Success',
                'description' => 'Support specialists trained in AI-powered customer service tools.',
                'button_text' => 'View Profiles',
                'button_url' => '#'
            ],
            [
                'title' => 'Quality Analysts',
                'description' => 'Detail-oriented professionals ensuring accuracy and compliance.',
                'button_text' => 'View Profiles',
                'button_url' => '#'
            ],
            [
                'title' => 'Project Managers',
                'description' => 'Experienced leaders to coordinate and deliver complex projects.',
                'button_text' => 'View Profiles',
                'button_url' => '#'
            ]
        ];
    }
    
    // Method untuk default process steps
    public function getDefaultProcessSteps()
    {
        return [
            [
                'step_number' => '1',
                'title' => 'Define Requirements',
                'description' => 'Tell us about your project needs and desired skills'
            ],
            [
                'step_number' => '2',
                'title' => 'Talent Matching',
                'description' => 'Our AI matches you with pre-vetted professionals'
            ],
            [
                'step_number' => '3',
                'title' => 'Review & Interview',
                'description' => 'Meet candidates and select your perfect fit'
            ],
            [
                'step_number' => '4',
                'title' => 'Start Working',
                'description' => 'Onboard your new team members and start delivering'
            ]
        ];
    }
}