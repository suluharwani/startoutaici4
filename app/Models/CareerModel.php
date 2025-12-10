<?php

namespace App\Models;

use CodeIgniter\Model;

class CareerModel extends Model
{
    protected $table = 'career_pages';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'hero_title', 'hero_subtitle', 'benefits_title', 'positions_title'
    ];
    
    public function getCareerPageData()
    {
        // Ambil data utama halaman karir (ambil yang pertama)
        $page = $this->first();
        
        if (!$page) {
            // Jika belum ada data, return default
            return $this->getDefaultData();
        }
        
        return $page;
    }
    
    public function getBenefits($pageId)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('career_benefits');
        
        return $builder
            ->where('career_page_id', $pageId)
            ->orderBy('display_order', 'ASC')
            ->get()
            ->getResultArray();
    }
    
    public function getActivePositions($pageId)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('career_positions');
        
        return $builder
            ->where('career_page_id', $pageId)
            ->where('is_active', 1)
            ->orderBy('display_order', 'ASC')
            ->get()
            ->getResultArray();
    }
    
    public function getPositionBySlug($slug)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('career_positions');
        
        return $builder
            ->where('apply_url', '/apply/' . $slug)
            ->where('is_active', 1)
            ->get()
            ->getRowArray();
    }
    
    private function getDefaultData()
    {
        return [
            'id' => 0,
            'hero_title' => 'Join Our <span class="gradient-text">Mission</span>',
            'hero_subtitle' => 'Help us shape the future of AI-powered business solutions. We\'re looking for talented, passionate people to join our team.',
            'benefits_title' => 'Why Work With Us',
            'positions_title' => 'Open Positions'
        ];
    }
}