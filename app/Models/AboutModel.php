<?php

namespace App\Models;

use CodeIgniter\Model;

class AboutModel extends Model
{
    protected $table = 'about_pages';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'hero_title', 'hero_subtitle', 'story_title', 
        'story_content', 'values_title', 'stats_title'
    ];
    
    public function getAboutPageData()
    {
        // Ambil data utama halaman about (ambil yang pertama)
        $page = $this->first();
        
        if (!$page) {
            // Jika belum ada data, return default
            return $this->getDefaultData();
        }
        
        return $page;
    }
    
    public function getAboutValues($aboutPageId)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('about_values');
        
        return $builder
            ->where('about_page_id', $aboutPageId)
            ->orderBy('display_order', 'ASC')
            ->get()
            ->getResultArray();
    }
    
    public function getAboutStats($aboutPageId)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('about_stats');
        
        return $builder
            ->where('about_page_id', $aboutPageId)
            ->orderBy('display_order', 'ASC')
            ->get()
            ->getResultArray();
    }
    
    private function getDefaultData()
    {
        return [
            'id' => 0,
            'hero_title' => 'Building the <span class="gradient-text">Future of AI</span>',
            'hero_subtitle' => 'Founded in 2024, Startout AI is on a mission to empower businesses with intelligent automation and data-driven insights.',
            'story_title' => 'Our Story',
            'story_content' => 'Startout AI was born from a simple observation...',
            'values_title' => 'Our Values',
            'stats_title' => 'Our Achievements'
        ];
    }
}