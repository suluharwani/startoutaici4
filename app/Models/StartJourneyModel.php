<?php

namespace App\Models;

use CodeIgniter\Model;

class StartJourneyModel extends Model
{
    protected $table = 'start_journey_pages';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'hero_title', 'hero_subtitle', 'process_title', 
        'contact_title', 'offices_title', 'cta_title', 'cta_button_text'
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
                'hero_title' => 'Start Your AI <span class="gradient-text">Transformation</span>',
                'hero_subtitle' => 'Let\'s build something incredible together. Fill out the form below and our team will reach out within 24 hours.',
                'process_title' => 'How We Work',
                'contact_title' => 'Contact Information',
                'offices_title' => 'Our Global Offices',
                'cta_title' => 'Ready to Transform Your Business with AI?',
                'cta_button_text' => 'Schedule Consultation'
            ];
            
            $this->insert($defaultData);
            $data = $this->first();
        }
        
        return $data;
    }
    
    // Method untuk mendapatkan process steps
    public function getProcessSteps($pageId)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('start_journey_steps');
        return $builder->where('start_journey_page_id', $pageId)
                      ->orderBy('display_order', 'ASC')
                      ->get()
                      ->getResultArray();
    }
    
    // Method untuk mendapatkan offices
    public function getOffices($pageId)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('start_journey_offices');
        return $builder->where('start_journey_page_id', $pageId)
                      ->orderBy('display_order', 'ASC')
                      ->get()
                      ->getResultArray();
    }
    
    // Method untuk default process steps jika database kosong
    public function getDefaultProcessSteps()
    {
        return [
            [
                'icon' => 'fas fa-target',
                'title' => 'Discovery Call',
                'description' => 'We learn about your business goals and challenges'
            ],
            [
                'icon' => 'fas fa-bolt',
                'title' => 'Strategy Session',
                'description' => 'We design a custom AI solution tailored to your needs'
            ],
            [
                'icon' => 'fas fa-rocket',
                'title' => 'Implementation',
                'description' => 'We deploy and integrate AI into your workflows'
            ],
            [
                'icon' => 'fas fa-check-circle',
                'title' => 'Optimization',
                'description' => 'We continuously improve and scale your AI systems'
            ]
        ];
    }
    
    // Method untuk default offices jika database kosong
    public function getDefaultOffices()
    {
        return [
            [
                'city' => 'Yogyakarta, Indonesia',
                'zip' => '55281',
                'phone' => '+62 274 123 4567'
            ],
            [
                'city' => 'Kuala Lumpur, Malaysia',
                'zip' => '50088',
                'phone' => '+60 3 1234 5678'
            ],
            [
                'city' => 'Amsterdam, Netherlands',
                'zip' => '1012 AB',
                'phone' => '+31 20 123 4567'
            ],
            [
                'city' => 'Sydney, Australia',
                'zip' => '2000',
                'phone' => '+61 2 1234 5678'
            ],
            [
                'city' => 'London, UK',
                'zip' => 'EC1A 1BB',
                'phone' => '+44 20 1234 5678'
            ],
            [
                'city' => 'Los Angeles, USA',
                'zip' => '90001',
                'phone' => '+1 213 123 4567'
            ],
            [
                'city' => 'Ottawa, Canada',
                'zip' => 'K1A 0A6',
                'phone' => '+1 613 123 4567'
            ],
            [
                'city' => 'Shibuya, Japan',
                'zip' => '150-0002',
                'phone' => '+81 3 1234 5678'
            ],
            [
                'city' => 'Berlin, Germany',
                'zip' => '10115',
                'phone' => '+49 30 1234 5678'
            ]
        ];
    }
}