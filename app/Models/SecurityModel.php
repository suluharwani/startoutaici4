<?php

namespace App\Models;

use CodeIgniter\Model;

class SecurityModel extends Model
{
    protected $table = 'security_pages';
    protected $primaryKey = 'id';
    
    public function getPageByName($pageName)
    {
        return $this->db->table('security_pages')
            ->where('page_name', $pageName)
            ->get()
            ->getRowArray();
    }
    
    public function getFeatures($pageId)
    {
        return $this->db->table('security_features')
            ->where('security_page_id', $pageId)
            ->orderBy('display_order', 'ASC')
            ->get()
            ->getResultArray();
    }
    
    public function getCertifications($pageId)
    {
        return $this->db->table('security_certifications')
            ->where('security_page_id', $pageId)
            ->orderBy('display_order', 'ASC')
            ->get()
            ->getResultArray();
    }
    
    public function getPractices($pageId)
    {
        return $this->db->table('security_practices')
            ->where('security_page_id', $pageId)
            ->orderBy('display_order', 'ASC')
            ->get()
            ->getResultArray();
    }
}