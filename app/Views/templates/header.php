<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Startout AI - Data Annotation Services'; ?></title>
    <meta name="description" content="<?php echo isset($pageDescription) ? $pageDescription : 'Professional data annotation services powered by AI and human expertise for machine learning models.'; ?>">
    <meta name="author" content="Startout AI">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo isset($pageTitle) ? $pageTitle : 'Startout AI - Data Annotation Services'; ?>">
    <meta property="og:description" content="<?php echo isset($pageDescription) ? $pageDescription : 'Professional data annotation services powered by AI and human expertise for machine learning models.'; ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://lovable.dev/opengraph-image-p98pqg.png">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@lovable_dev">
    <meta name="twitter:image" content="https://lovable.dev/opengraph-image-p98pqg.png">

    <!-- CDN untuk Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary: #3b82f6;
            --primary-dark: #2563eb;
            --accent: #8b5cf6;
            --accent-dark: #7c3aed;
            --background: #ffffff;
            --foreground: #0f172a;
            --muted-foreground: #64748b;
            --border: #e2e8f0;
            --card: #ffffff;
            --card-foreground: #0f172a;
            --secondary: #f1f5f9;
            --radius: 0.75rem;
            --gradient-primary: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            --gradient-hero: linear-gradient(180deg, var(--background) 0%, var(--secondary) 100%);
            --shadow-soft: 0 4px 20px -2px rgba(59, 130, 246, 0.1);
            --shadow-glow: 0 0 40px rgba(139, 92, 246, 0.3);
        }

        .dark {
            --background: #0f172a;
            --foreground: #f8fafc;
            --muted-foreground: #94a3b8;
            --border: #334155;
            --card: #1e293b;
            --card-foreground: #f8fafc;
            --secondary: #1e293b;
            --gradient-hero: linear-gradient(180deg, var(--background) 0%, var(--secondary) 100%);
            --shadow-soft: 0 4px 20px -2px rgba(0, 0, 0, 0.5);
            --shadow-glow: 0 0 40px rgba(139, 92, 246, 0.4);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--background);
            color: var(--foreground);
            line-height: 1.6;
            transition: all 0.3s ease;
        }

        .gradient-text {
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .gradient-bg {
            background: var(--gradient-primary);
        }

        .hover-gradient-text {
            color: var(--muted-foreground);
            transition: color 0.3s ease-in-out;
        }

        .hover-gradient-text:hover {
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .shadow-glow {
            box-shadow: var(--shadow-glow);
        }

        .card-hover-glow {
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px -1px rgba(59, 130, 246, 0.05), 0 2px 4px -2px rgba(59, 130, 246, 0.05);
        }

        .card-hover-glow:hover {
            box-shadow: 0 10px 30px -5px rgba(139, 92, 246, 0.3), 0 0 20px rgba(139, 92, 246, 0.15), inset 0 0 15px rgba(139, 92, 246, 0.08);
            transform: translateY(-2px);
        }

        .animate-fade-in {
            animation: fade-in 0.6s ease-out;
        }

        @keyframes fade-in {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-slide-up {
            animation: slide-up 0.6s ease-out;
        }

        @keyframes slide-up {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .mobile-menu {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: var(--background);
            z-index: 100;
            padding: 2rem;
            overflow-y: auto;
        }

        .mobile-menu.active {
            display: block;
        }

        .dropdown {
            position: relative;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: var(--card);
            min-width: 200px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
            z-index: 1;
            border-radius: var(--radius);
            border: 1px solid var(--border);
            overflow: hidden;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            display: block;
            padding: 0.75rem 1rem;
            text-decoration: none;
            color: var(--muted-foreground);
            transition: all 0.2s ease;
        }

        .dropdown-content a:hover {
            background: var(--gradient-primary);
            color: white;
        }

        .back-to-top {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            background: var(--gradient-primary);
            color: white;
            width: 3rem;
            height: 3rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: var(--shadow-glow);
            transition: all 0.3s ease;
            opacity: 0;
            visibility: hidden;
            z-index: 1000;
        }

        .back-to-top.active {
            opacity: 1;
            visibility: visible;
        }

        .back-to-top:hover {
            transform: translateY(-3px);
        }
    </style>
</head>
<body>