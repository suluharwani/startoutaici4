<?php

namespace App\Models;

use CodeIgniter\Model;

class SocialMediaModel extends Model
{
    protected $table = 'social_media_pages';
    protected $primaryKey = 'id';
    
    public function getPageByName($pageName)
    {
        return $this->db->table('social_media_pages')
            ->where('page_name', $pageName)
            ->get()
            ->getRowArray();
    }
    
    public function getServices($pageId)
    {
        return $this->db->table('social_media_services')
            ->where('social_media_page_id', $pageId)
            ->orderBy('display_order', 'ASC')
            ->get()
            ->getResultArray();
    }
    
    public function getPlatforms($pageId)
    {
        return $this->db->table('social_media_platforms')
            ->where('social_media_page_id', $pageId)
            ->orderBy('display_order', 'ASC')
            ->get()
            ->getResultArray();
    }
    
    public function getIncluded($pageId)
    {
        return $this->db->table('social_media_included')
            ->where('social_media_page_id', $pageId)
            ->orderBy('display_order', 'ASC')
            ->get()
            ->getResultArray();
    }
    
    public function getStats($pageId)
    {
        return $this->db->table('social_media_stats')
            ->where('social_media_page_id', $pageId)
            ->orderBy('display_order', 'ASC')
            ->get()
            ->getResultArray();
    }
}