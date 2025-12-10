<?php

namespace App\Models;

use CodeIgniter\Model;

class OurWorkModel extends Model
{
    protected $table = 'our_work_pages';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    
    public function getOurWorkPageData()
    {
        // Get main page data
        $pageData = $this->first();
        
        if (!$pageData) {
            // Create default data if not exists
            $pageData = $this->createDefaultOurWorkData();
        }
        
        return $pageData;
    }
    
    public function getStats($ourWorkPageId)
    {
        return $this->db->table('our_work_stats')
            ->where('our_work_page_id', $ourWorkPageId)
            ->orderBy('display_order', 'ASC')
            ->get()
            ->getResultArray();
    }
    
    public function getCaseStudies($ourWorkPageId)
    {
        $caseStudies = $this->db->table('our_work_case_studies')
            ->where('our_work_page_id', $ourWorkPageId)
            ->orderBy('display_order', 'ASC')
            ->get()
            ->getResultArray();
        
        // Convert results string to array
        foreach ($caseStudies as &$study) {
            $study['results_array'] = !empty($study['results']) ? 
                explode(',', $study['results']) : [];
        }
        
        return $caseStudies;
    }
    
    public function getTestimonials($ourWorkPageId)
    {
        return $this->db->table('our_work_testimonials')
            ->where('our_work_page_id', $ourWorkPageId)
            ->orderBy('display_order', 'ASC')
            ->get()
            ->getResultArray();
    }
    
    private function createDefaultOurWorkData()
    {
        $defaultData = [
            'hero_title' => '<span class="gradient-text">Our Work</span> Speaks for Itself',
            'hero_subtitle' => 'Real results from real clients across diverse industries',
            'case_studies_title' => 'Featured Case Studies',
            'testimonials_title' => 'What Our Clients Say',
            'cta_title' => 'Ready to Create Your Success Story?',
            'cta_subtitle' => 'Let\'s discuss how we can help you achieve similar results',
            'cta_button_text' => 'Start Your Project'
        ];
        
        $this->insert($defaultData);
        return $defaultData;
    }
}