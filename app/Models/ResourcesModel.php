<?php

namespace App\Models;

use CodeIgniter\Model;

class ResourcesModel extends Model
{
    protected $table = 'resources_pages';
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
    
    // Method untuk mengambil featured resources
    public function getFeaturedResources($pageId)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('resources_featured');
        
        $resources = $builder->select('*')
                      ->where('page_id', $pageId)
                      ->where('is_active', 1)
                      ->orderBy('display_order', 'ASC')
                      ->get()
                      ->getResultArray();
        
        // Format tags menjadi array
        foreach ($resources as &$resource) {
            if (isset($resource['tags']) && !empty($resource['tags'])) {
                $resource['tags'] = explode(',', $resource['tags']);
            } else {
                $resource['tags'] = [];
            }
        }
        
        return $resources;
    }
    
    // Method untuk mengambil articles
    public function getArticles($pageId)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('resources_articles');
        
        return $builder->select('*')
                      ->where('page_id', $pageId)
                      ->where('is_published', 1)
                      ->orderBy('display_order', 'ASC')
                      ->orderBy('date', 'DESC')
                      ->get()
                      ->getResultArray();
    }
    
    // Method untuk mengambil formats
    public function getFormats($pageId)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('resources_formats');
        
        return $builder->select('*')
                      ->where('page_id', $pageId)
                      ->where('is_active', 1)
                      ->orderBy('display_order', 'ASC')
                      ->get()
                      ->getResultArray();
    }
    
    // Method untuk mengambil stats
    public function getStats($pageId)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('resources_stats');
        
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
            'hero_title' => 'Resources & <span class="gradient-text">Insights</span>',
            'hero_subtitle' => 'Expert guides, case studies, and thought leadership to help you master AI-powered business growth.',
            'featured_title' => 'Featured Resources',
            'featured_subtitle' => 'Our most popular and impactful content',
            'articles_title' => 'Recent Articles',
            'formats_title' => 'Explore by Format',
            'newsletter_title' => 'Stay Updated',
            'newsletter_subtitle' => 'Get the latest AI insights delivered to your inbox. Join 10,000+ leaders who read our newsletter.',
            'stats_title' => 'Our Impact'
        ];
    }
    
    // Method untuk default featured resources
    public function getDefaultFeaturedResources()
    {
        return [
            [
                'type' => 'Case Study',
                'icon' => 'fas fa-chart-line',
                'title' => 'How FinTech Startup Reduced Fraud by 85% with AI',
                'description' => 'Discover how we helped a Series A fintech company implement intelligent fraud detection that saved millions while improving customer experience.',
                'read_time' => '8 min read',
                'tags' => ['FinTech', 'Fraud Detection', 'Case Study'],
                'color' => 'from-green-500 to-emerald-500',
                'button_text' => 'Read More',
                'button_url' => '/resources/fintech-fraud-case-study'
            ],
            [
                'type' => 'Blog Post',
                'icon' => 'fas fa-book-open',
                'title' => 'The Ultimate Guide to AI-Powered Customer Support',
                'description' => 'Learn the strategies and best practices for implementing AI chatbots that actually improve customer satisfaction scores.',
                'read_time' => '12 min read',
                'tags' => ['AI', 'Customer Support', 'Guide'],
                'color' => 'from-blue-500 to-cyan-500',
                'button_text' => 'Read More',
                'button_url' => '/resources/ai-customer-support-guide'
            ],
            [
                'type' => 'Whitepaper',
                'icon' => 'fas fa-file-alt',
                'title' => 'The State of AI in Startups 2025',
                'description' => 'Comprehensive research on how startups are leveraging AI for competitive advantage, featuring data from 500+ companies.',
                'read_time' => '25 min read',
                'tags' => ['Research', 'AI Trends', 'Startups'],
                'color' => 'from-purple-500 to-indigo-500',
                'button_text' => 'Read More',
                'button_url' => '/resources/ai-startups-2025'
            ]
        ];
    }
    
    // Method untuk default articles
    public function getDefaultArticles()
    {
        return [
            [
                'category' => 'Best Practices',
                'title' => '5 AI Automation Mistakes That Are Costing You Revenue',
                'description' => 'Common pitfalls to avoid when implementing AI automation in your business.',
                'date' => 'March 8, 2025'
            ],
            [
                'category' => 'Thought Leadership',
                'title' => 'Building Trust: AI Ethics in Customer Interactions',
                'description' => 'How to maintain ethical standards while leveraging AI for customer engagement.',
                'date' => 'March 5, 2025'
            ],
            [
                'category' => 'Tools & Resources',
                'title' => 'ROI Calculator: Is AI Right for Your Startup?',
                'description' => 'A practical guide to calculating potential ROI from AI investments.',
                'date' => 'March 1, 2025'
            ],
            [
                'category' => 'Industry Insights',
                'title' => 'Interview: AI Leaders Share 2025 Predictions',
                'description' => 'Exclusive insights from industry leaders on the future of AI.',
                'date' => 'February 28, 2025'
            ]
        ];
    }
    
    // Method untuk default formats
    public function getDefaultFormats()
    {
        return [
            [
                'icon' => 'fas fa-video',
                'title' => 'Video Tutorials',
                'count' => '15+ videos',
                'description' => 'Step-by-step guides and product walkthroughs'
            ],
            [
                'icon' => 'fas fa-podcast',
                'title' => 'Podcast Series',
                'count' => 'Weekly episodes',
                'description' => 'Conversations with AI innovators and startup founders'
            ],
            [
                'icon' => 'fas fa-file-alt',
                'title' => 'Documentation',
                'count' => '100+ articles',
                'description' => 'Comprehensive guides and API references'
            ]
        ];
    }
    
    // Method untuk default stats
    public function getDefaultStats()
    {
        return [
            ['value' => '47+', 'label' => 'Resources'],
            ['value' => '500K+', 'label' => 'Monthly Readers'],
            ['value' => '98%', 'label' => 'Reader Satisfaction'],
            ['value' => '24', 'label' => 'Industry Experts']
        ];
    }
}