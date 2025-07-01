<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Sitemap | Company Name</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3a0ca3;
            --accent-color: #4cc9f0;
            --light-bg: #f8f9fa;
            --dark-text: #212529;
            --light-text: #6c757d;
            --border-color: #dee2e6;
            --card-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            --transition: all 0.3s ease;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--dark-text);
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e7eb 100%);
            min-height: 100vh;
            padding: 2rem 0;
        }
        
        .sitemap-container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            border-radius: 16px;
            box-shadow: var(--card-shadow);
            overflow: hidden;
        }
        
        .sitemap-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 4rem 2rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .sitemap-header::before {
            content: "";
            position: absolute;
            top: -50px;
            right: -50px;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
        }
        
        .sitemap-header::after {
            content: "";
            position: absolute;
            bottom: -80px;
            left: -80px;
            width: 250px;
            height: 250px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
        }
        
        .sitemap-header h1 {
            font-size: 3rem;
            margin-bottom: 0.75rem;
            position: relative;
            z-index: 2;
        }
        
        .sitemap-header p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
            opacity: 0.9;
        }
        
        .sitemap-content {
            padding: 3rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .sitemap-section {
            background: var(--light-bg);
            border-radius: 12px;
            padding: 2rem;
            transition: var(--transition);
            border: 1px solid var(--border-color);
        }
        
        .sitemap-section:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .section-title {
            color: var(--secondary-color);
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
            display: flex;
            align-items: center;
            gap: 1rem;
            padding-bottom: 0.75rem;
            border-bottom: 2px solid var(--accent-color);
        }
        
        .section-title i {
            background: var(--primary-color);
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .sitemap-links {
            list-style: none;
        }
        
        .sitemap-links li {
            margin-bottom: 0.8rem;
            position: relative;
            padding-left: 1.8rem;
        }
        
        .sitemap-links li::before {
            content: "→";
            position: absolute;
            left: 0;
            color: var(--primary-color);
            font-weight: bold;
        }
        
        .sitemap-links a {
            color: var(--dark-text);
            text-decoration: none;
            transition: var(--transition);
            display: block;
            padding: 0.5rem 0;
            border-bottom: 1px dashed var(--border-color);
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        
        .sitemap-links a:hover {
            color: var(--primary-color);
            padding-left: 5px;
        }
        
        .sitemap-links a i {
            color: var(--accent-color);
            width: 24px;
            text-align: center;
        }
        
        .sitemap-links .sub-link {
            padding-left: 2.5rem;
        }
        
        .sitemap-links .sub-link::before {
            content: "•";
            color: var(--accent-color);
        }
        
      
        
       
        
        .site-stats {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-top: 2rem;
            flex-wrap: wrap;
        }
        
        .stat-card {
            background: white;
            padding: 1.5rem;
            border-radius: 12px;
            text-align: center;
            min-width: 150px;
            box-shadow: var(--card-shadow);
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: bold;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }
        
        .stat-label {
            color: var(--light-text);
            font-size: 1rem;
        }
        
        /* Responsive Styles */
        @media (max-width: 900px) {
            .sitemap-content {
                padding: 2rem;
            }
            
            .sitemap-header {
                padding: 3rem 1.5rem;
            }
            
            .sitemap-header h1 {
                font-size: 2.25rem;
            }
        }
        
        @media (max-width: 600px) {
            body {
                padding: 1rem;
            }
            
            .sitemap-content {
                padding: 1.5rem;
                grid-template-columns: 1fr;
            }
            
            .sitemap-header h1 {
                font-size: 1.8rem;
            }
            
          
            
            .site-stats {
                gap: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Sitemap Container -->
    <div class="sitemap-container">
        <div class="sitemap-header">
            <h1><i class="fas fa-sitemap"></i> Website Sitemap</h1>
            <p>Explore the structure of our website and find what you're looking for</p>
        </div>
        
        
        
        <div class="sitemap-content">
            <!-- Main Pages Section -->
            <div class="sitemap-section">
                <h2 class="section-title">
                    <i class="fas fa-home"></i>
                    Main Pages
                </h2>
                <ul class="sitemap-links">
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Home</a></li>
                    <li><a href="#"><i class="fas fa-user"></i> About Us</a></li>
                    <li><a href="#"><i class="fas fa-briefcase"></i> Services</a></li>
                    <li><a href="#"><i class="fas fa-shopping-cart"></i> Products</a></li>
                    <li><a href="#"><i class="fas fa-newspaper"></i> Blog</a></li>
                    <li><a href="#"><i class="fas fa-envelope"></i> Contact</a></li>
                </ul>
            </div>
            
            <!-- Products Section -->
            <div class="sitemap-section">
                <h2 class="section-title">
                    <i class="fas fa-box-open"></i>
                    Products
                </h2>
                <ul class="sitemap-links">
                    <li><a href="#"><i class="fas fa-laptop"></i> Software Solutions</a></li>
                    <li><a href="#"><i class="fas fa-mobile-alt"></i> Mobile Apps</a>
                        <ul>
                            <li class="sub-link"><a href="#">iOS Applications</a></li>
                            <li class="sub-link"><a href="#">Android Applications</a></li>
                            <li class="sub-link"><a href="#">Cross-Platform Apps</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fas fa-cloud"></i> Cloud Services</a>
                        <ul>
                            <li class="sub-link"><a href="#">Cloud Hosting</a></li>
                            <li class="sub-link"><a href="#">Cloud Storage</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fas fa-shield-alt"></i> Security Products</a></li>
                    <li><a href="#"><i class="fas fa-cogs"></i> Enterprise Solutions</a></li>
                </ul>
            </div>
            
            <!-- Services Section -->
            <div class="sitemap-section">
                <h2 class="section-title">
                    <i class="fas fa-concierge-bell"></i>
                    Services
                </h2>
                <ul class="sitemap-links">
                    <li><a href="#"><i class="fas fa-code"></i> Web Development</a>
                        <ul>
                            <li class="sub-link"><a href="#">Frontend Development</a></li>
                            <li class="sub-link"><a href="#">Backend Development</a></li>
                            <li class="sub-link"><a href="#">E-commerce Solutions</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fas fa-paint-brush"></i> UI/UX Design</a></li>
                    <li><a href="#"><i class="fas fa-search"></i> SEO Optimization</a></li>
                    <li><a href="#"><i class="fas fa-bullhorn"></i> Digital Marketing</a>
                        <ul>
                            <li class="sub-link"><a href="#">Social Media Marketing</a></li>
                            <li class="sub-link"><a href="#">Content Marketing</a></li>
                            <li class="sub-link"><a href="#">Email Marketing</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            
            <!-- Resources Section -->
            <div class="sitemap-section">
                <h2 class="section-title">
                    <i class="fas fa-book"></i>
                    Resources
                </h2>
                <ul class="sitemap-links">
                    <li><a href="#"><i class="fas fa-file-alt"></i> Documentation</a></li>
                    <li><a href="#"><i class="fas fa-graduation-cap"></i> Tutorials</a></li>
                    <li><a href="#"><i class="fas fa-video"></i> Video Guides</a></li>
                    <li><a href="#"><i class="fas fa-file-download"></i> Downloads</a></li>
                    <li><a href="#"><i class="fas fa-question-circle"></i> FAQ</a></li>
                    <li><a href="#"><i class="fas fa-comments"></i> Community Forum</a></li>
                </ul>
            </div>
            
            <!-- Legal Section -->
            <div class="sitemap-section">
                <h2 class="section-title">
                    <i class="fas fa-balance-scale"></i>
                    Legal
                </h2>
                <ul class="sitemap-links">
                    <li><a href="#"><i class="fas fa-user-shield"></i> Privacy Policy</a></li>
                    <li><a href="#"><i class="fas fa-file-contract"></i> Terms of Service</a></li>
                    <li><a href="#"><i class="fas fa-cookie-bite"></i> Cookie Policy</a></li>
                    <li><a href="#"><i class="fas fa-gavel"></i> Compliance</a></li>
                </ul>
            </div>
            
            <!-- Support Section -->
            <div class="sitemap-section">
                <h2 class="section-title">
                    <i class="fas fa-headset"></i>
                    Support
                </h2>
                <ul class="sitemap-links">
                    <li><a href="#"><i class="fas fa-life-ring"></i> Help Center</a></li>
                    <li><a href="#"><i class="fas fa-ticket-alt"></i> Submit a Ticket</a></li>
                    <li><a href="#"><i class="fas fa-phone-alt"></i> Contact Support</a></li>
                    <li><a href="#"><i class="fas fa-bug"></i> Report a Bug</a></li>
                    <li><a href="#"><i class="fas fa-lightbulb"></i> Feature Requests</a></li>
                </ul>
            </div>
        </div>
        
        <div class="site-stats">
            <div class="stat-card">
                <div class="stat-number">85+</div>
                <div class="stat-label">Total Pages</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">12</div>
                <div class="stat-label">Categories</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">6</div>
                <div class="stat-label">Main Sections</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">2024</div>
                <div class="stat-label">Last Updated</div>
            </div>
        </div>
    </div>
    
    <script>
        // Simple search functionality
        document.querySelector('.search-box input').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const links = document.querySelectorAll('.sitemap-links a');
            
            links.forEach(link => {
                const linkText = link.textContent.toLowerCase();
                if (linkText.includes(searchTerm)) {
                    link.style.display = 'flex';
                    // Highlight parent if child matches
                    let parentLi = link.parentElement;
                    while (parentLi && parentLi.tagName === 'LI') {
                        parentLi.style.display = 'block';
                        parentLi = parentLi.parentElement.closest('li');
                    }
                } else {
                    link.style.display = 'none';
                }
            });
        });
        
        // Add hover effect to stat cards
        const statCards = document.querySelectorAll('.stat-card');
        statCards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.style.transform = 'scale(1.05)';
                card.style.boxShadow = '0 10px 20px rgba(0, 0, 0, 0.15)';
            });
            
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'scale(1)';
                card.style.boxShadow = 'var(--card-shadow)';
            });
        });
    </script>
</body>
</html>