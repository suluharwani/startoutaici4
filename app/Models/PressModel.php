<?php

namespace App\Models;

use CodeIgniter\Model;

class PressModel extends Model
{
    protected $table = 'press_pages';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    
    // Method untuk mengambil data halaman press
    public function getPressPageData()
    {
        // Ambil data halaman utama press (asumsi hanya ada 1 row)
        $pageData = $this->first();
        
        if (!$pageData) {
            // Jika belum ada data, buat default
            return $this->getDefaultPressPageData();
        }
        
        return $pageData;
    }
    
    // Method untuk mengambil announcements
    public function getAnnouncements($pressPageId)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('press_announcements');
        
        return $builder->select('*')
                      ->where('press_page_id', $pressPageId)
                      ->where('is_published', 1)
                      ->orderBy('display_order', 'ASC')
                      ->orderBy('date', 'DESC')
                      ->get()
                      ->getResultArray();
    }
    
    // Method untuk mengambil media kit items
    public function getMediaKit($pressPageId)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('press_media_kit');
        
        return $builder->select('*')
                      ->where('press_page_id', $pressPageId)
                      ->where('is_active', 1)
                      ->orderBy('display_order', 'ASC')
                      ->get()
                      ->getResultArray();
    }
    
    // Method untuk mengambil contact info
    public function getContacts($pressPageId)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('press_contacts');
        
        return $builder->select('*')
                      ->where('press_page_id', $pressPageId)
                      ->orderBy('display_order', 'ASC')
                      ->get()
                      ->getResultArray();
    }
    
    // Data default jika database kosong
    private function getDefaultPressPageData()
    {
        return [
            'id' => 1,
            'hero_title' => '<span class="gradient-text">Press</span> & Media',
            'hero_subtitle' => 'The latest news and updates from Startout AI',
            'announcements_title' => 'Recent Announcements',
            'media_kit_title' => 'Media Kit',
            'inquiries_title' => 'Media Inquiries',
            'cta_title' => 'Ready to Transform Your Business with AI?',
            'cta_subtitle' => 'Schedule a consultation to discuss how Startout AI can help you achieve your goals',
            'cta_button_text' => 'Schedule Consultation'
        ];
    }
    
    // Method untuk default announcements
    public function getDefaultAnnouncements()
    {
        return [
            [
                'title' => 'Startout AI Raises $50M Series B to Expand AI Platform',
                'description' => 'Leading venture capital firms back our mission to democratize AI for businesses.',
                'date' => 'March 15, 2024',
                'read_more_url' => '/press/startout-ai-raises-50m-series-b'
            ],
            [
                'title' => 'Startout AI Named to Forbes Cloud 100 Rising Stars',
                'description' => 'Recognition highlights our rapid growth and innovative approach to business AI.',
                'date' => 'February 1, 2024',
                'read_more_url' => '/press/forbes-cloud-100-rising-stars'
            ],
            [
                'title' => 'New AI Automation Features Drive 80% Efficiency Gains',
                'description' => 'Latest platform update delivers record productivity improvements for customers.',
                'date' => 'January 10, 2024',
                'read_more_url' => '/press/new-ai-automation-features'
            ]
        ];
    }
    
    // Method untuk default media kit
    public function getDefaultMediaKit()
    {
        return [
            [
                'name' => 'Company Logo (PNG)',
                'file_type' => 'PNG',
                'file_size' => '2.4 MB',
                'download_url' => '/downloads/media-kit/logo.png'
            ],
            [
                'name' => 'Company Logo (SVG)',
                'file_type' => 'SVG',
                'file_size' => '124 KB',
                'download_url' => '/downloads/media-kit/logo.svg'
            ],
            [
                'name' => 'Brand Guidelines',
                'file_type' => 'PDF',
                'file_size' => '8.1 MB',
                'download_url' => '/downloads/media-kit/brand-guidelines.pdf'
            ],
            [
                'name' => 'Product Screenshots',
                'file_type' => 'ZIP',
                'file_size' => '15.3 MB',
                'download_url' => '/downloads/media-kit/screenshots.zip'
            ],
            [
                'name' => 'Executive Headshots',
                'file_type' => 'ZIP',
                'file_size' => '12.7 MB',
                'download_url' => '/downloads/media-kit/headshots.zip'
            ]
        ];
    }
    
    // Method untuk default contacts
    public function getDefaultContacts()
    {
        return [
            [
                'label' => 'Press Email',
                'value' => 'press@startoutai.com'
            ],
            [
                'label' => 'Yogyakarta, Indonesia',
                'value' => '+62 274 123 4567'
            ],
            [
                'label' => 'Los Angeles, USA',
                'value' => '+1 (310) 555-0123'
            ]
        ];
    }
}