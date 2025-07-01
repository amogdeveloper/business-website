<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs - Ocentra</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #0f172a;
            color: #e2e8f0;
        }
        
        .gradient-text {
            background: linear-gradient(90deg, #FFD700, #FFC300, #FFA500);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .blue-gradient-btn {
            background: linear-gradient(90deg, #3b82f6, #60a5fa);
        }
        
        .green-gradient-btn {
            background: linear-gradient(90deg, #10b981, #34d399);
        }
        
        .blog-card {
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 215, 0, 0.1);
            background: linear-gradient(145deg, #1e293b, #0f172a);
        }
        
        .blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(255, 215, 0, 0.1);
            border-color: rgba(255, 215, 0, 0.3);
        }
        
        .category-btn {
            transition: all 0.3s ease;
        }
        
        .category-btn:hover, .category-btn.active {
            background: linear-gradient(90deg, rgba(255, 215, 0, 0.2), rgba(255, 195, 0, 0.2), rgba(255, 165, 0, 0.2));
            border: 1px solid rgba(255, 215, 0, 0.3);
        }
        
        .tag {
            background: rgba(30, 64, 175, 0.2);
            border: 1px solid rgba(30, 64, 175, 0.4);
        }
        
        .hero-section {
            background: linear-gradient(rgba(15, 23, 42, 0.9), rgba(15, 23, 42, 0.7)), url('https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');
            background-size: cover;
            background-position: center;
        }
        
        .featured-blog {
            background: linear-gradient(145deg, #1e293b, #0f172a);
            border: 1px solid rgba(255, 215, 0, 0.2);
        }
        
        .pagination-btn {
            transition: all 0.3s ease;
        }
        
        .pagination-btn:hover:not(.active-page) {
            background: rgba(255, 215, 0, 0.1);
        }
        
        .active-page {
            background: linear-gradient(90deg, rgba(255, 215, 0, 0.3), rgba(255, 195, 0, 0.3));
        }
    </style>
</head>
<body class="w-full">
   <?php include("./components/header.php")?>

    <!-- Hero Section -->
    <section class="hero-section py-20 px-6">
        <div class="max-w-6xl mx-auto text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Explore Our <span class="gradient-text">Insights</span></h1>
            <p class="text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto mb-8">
                Discover the latest trends, technologies, and strategies in the digital world
            </p>
           
        </div>
    </section>

    <!-- Featured Blog -->
    <section class="py-12 px-6">
        <div class="max-w-6xl mx-auto">
            <div class="featured-blog rounded-2xl p-8 md:p-12 flex flex-col md:flex-row gap-8">
                <div class="md:w-1/2">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Featured Blog" class="w-full h-80 object-cover rounded-xl">
                </div>
                <div class="md:w-1/2">
                    <div class="flex items-center mb-4">
                        <span class="tag px-3 py-1 rounded-full text-sm mr-3">Technology</span>
                        <span class="text-gray-400 text-sm">June 15, 2023</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">The Future of AI in Business Transformation</h2>
                    <p class="text-gray-300 mb-6">
                        Artificial Intelligence is revolutionizing how businesses operate. From automating routine tasks to providing deep insights through data analysis, AI is becoming an indispensable tool for companies looking to stay competitive in the digital age.
                    </p>
                    <div class="flex items-center">
                        <div class="flex items-center mr-6">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Author" class="w-10 h-10 rounded-full mr-3">
                            <div>
                                <p class="font-semibold">Ahmad Ali</p>
                                <p class="text-gray-400 text-sm">Tech Lead</p>
                            </div>
                        </div>
                        <a href="#" class="blue-gradient-btn text-white px-6 py-2 rounded-md font-semibold">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories -->
    <section class="py-8 px-6">
        <div class="max-w-6xl mx-auto">
            <div class="flex flex-wrap gap-4 justify-center" id="category-filter">
                <button class="category-btn active px-5 py-2 rounded-full" data-category="all">All Topics</button>
                <button class="category-btn px-5 py-2 rounded-full" data-category="technology">Technology</button>
                <button class="category-btn px-5 py-2 rounded-full" data-category="business">Business</button>
                <button class="category-btn px-5 py-2 rounded-full" data-category="development">Development</button>
                <button class="category-btn px-5 py-2 rounded-full" data-category="design">Design</button>
                <button class="category-btn px-5 py-2 rounded-full" data-category="marketing">Marketing</button>
                <button class="category-btn px-5 py-2 rounded-full" data-category="data">Data Science</button>
            </div>
        </div>
    </section>

    <!-- Blog Grid -->
    <section class="py-12 px-6">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold mb-8 text-center">Latest Articles</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="blog-container">
                <!-- Blog cards will be dynamically inserted here -->
            </div>
            
            <!-- Pagination -->
            <div class="flex justify-center mt-12">
                <div class="flex space-x-2" id="pagination-container">
                    <!-- Pagination buttons will be dynamically generated here -->
                </div>
            </div>
        </div>
    </section>

   <section class="py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-purple-500/10 z-0"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">Ready to Start Your Project?</h2>
                <p class="text-xl text-slate-300 mb-10 max-w-2xl mx-auto">
                    Let's discuss how we can help you achieve your business goals with our technology solutions.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#contact-form" class="px-8 py-4 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full font-bold text-lg shadow-lg hover:shadow-xl transition-all transform hover:scale-105 btn-glow pulse">
                        Get in Touch
                    </a>
                    <a href="tel:+15551234567" class="px-8 py-4 bg-transparent border-2 border-white text-white rounded-full font-bold text-lg hover:bg-white hover:text-gray-900 transition-all">
                        <i class="fas fa-phone mr-2"></i> Call Us Now
                    </a>
                </div>
            </div>
        </div>
    </section>


      <?php include("./components/footer.php")?>
    <script>
        // Blog data
        const blogPosts = [
            { id: 1, title: "Mastering React Hooks in 2023", category: "development", date: "June 10, 2023", excerpt: "Learn how to effectively use React Hooks to build more efficient and cleaner components in your applications.", image: "https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80", author: "Zara Khan", authorImage: "https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=688&q=80" },
            { id: 2, title: "SEO Strategies for E-commerce Success", category: "marketing", date: "May 28, 2023", excerpt: "Discover the latest SEO techniques that can help your e-commerce store rank higher and drive more organic traffic.", image: "https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1415&q=80", author: "John Smith", authorImage: "https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" },
            { id: 3, title: "UI/UX Trends to Watch in 2023", category: "design", date: "May 15, 2023", excerpt: "Explore the most exciting UI/UX design trends that are shaping digital experiences this year and beyond.", image: "https://images.unsplash.com/photo-1553877522-43269d4ea984?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80", author: "Sarah Johnson", authorImage: "https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" },
            { id: 4, title: "Big Data Analytics for Business Growth", category: "data", date: "April 30, 2023", excerpt: "How leveraging big data can transform decision-making processes and drive substantial business growth.", image: "https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80", author: "Michael Brown", authorImage: "https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" },
            { id: 5, title: "Blockchain Beyond Cryptocurrency", category: "technology", date: "April 22, 2023", excerpt: "Exploring innovative applications of blockchain technology in industries beyond finance and cryptocurrency.", image: "https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1400&q=80", author: "Ahmad Ali", authorImage: "https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" },
            { id: 6, title: "Remote Work Culture Best Practices", category: "business", date: "April 10, 2023", excerpt: "Building and maintaining a productive remote work culture in the post-pandemic business landscape.", image: "https://images.unsplash.com/photo-1522542550221-31fd19575a2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80", author: "Zara Khan", authorImage: "https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=688&q=80" },
            { id: 7, title: "Cloud Migration Strategies for Enterprises", category: "technology", date: "March 28, 2023", excerpt: "Key considerations and best practices for enterprises planning to migrate their infrastructure to the cloud.", image: "https://images.unsplash.com/photo-1461749280684-dccba630e2f6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80", author: "John Smith", authorImage: "https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" },
            { id: 8, title: "The Power of Content Marketing", category: "marketing", date: "March 15, 2023", excerpt: "How content marketing can drive engagement, build authority, and generate leads for your business.", image: "https://images.unsplash.com/photo-1432888498266-38ffec3eaf0a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1474&q=80", author: "Sarah Johnson", authorImage: "https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" },
            { id: 9, title: "Mobile App Development Best Practices", category: "development", date: "March 5, 2023", excerpt: "Essential practices for building high-performance, user-friendly mobile applications in 2023.", image: "https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80", author: "Michael Brown", authorImage: "https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" }
        ];

        // Pagination settings
        const postsPerPage = 6;
        let currentPage = 1;
        let currentCategory = 'all';

        // DOM Elements
        const blogContainer = document.getElementById('blog-container');
        const paginationContainer = document.getElementById('pagination-container');
        const categoryFilter = document.getElementById('category-filter');

        // Function to render blog posts
        function renderBlogPosts(posts, page = 1) {
            // Clear container
            blogContainer.innerHTML = '';
            
            // Calculate pagination
            const startIndex = (page - 1) * postsPerPage;
            const endIndex = startIndex + postsPerPage;
            const paginatedPosts = posts.slice(startIndex, endIndex);
            
            // Render posts
            paginatedPosts.forEach(post => {
                const blogCard = document.createElement('div');
                blogCard.className = 'blog-card rounded-2xl p-6';
                blogCard.innerHTML = `
                    <img src="${post.image}" alt="${post.title}" class="w-full h-48 object-cover rounded-lg mb-4">
                    <div class="flex items-center mb-3">
                        <span class="tag px-3 py-1 rounded-full text-sm mr-3">${post.category.charAt(0).toUpperCase() + post.category.slice(1)}</span>
                        <span class="text-gray-400 text-sm">${post.date}</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3">${post.title}</h3>
                    <p class="text-gray-400 mb-4">
                        ${post.excerpt}
                    </p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <img src="${post.authorImage}" alt="${post.author}" class="w-8 h-8 rounded-full mr-2">
                            <span class="text-sm">${post.author}</span>
                        </div>
                        <a href="#" class="text-blue-400 hover:text-blue-300 flex items-center">
                            Read More <i class="fas fa-arrow-right ml-2 text-xs"></i>
                        </a>
                    </div>
                `;
                blogContainer.appendChild(blogCard);
            });
        }

        // Function to render pagination
        function renderPagination(totalPosts) {
            const totalPages = Math.ceil(totalPosts / postsPerPage);
            
            // Clear container
            paginationContainer.innerHTML = '';
            
            // Previous button
            if (currentPage > 1) {
                const prevBtn = document.createElement('button');
                prevBtn.className = 'pagination-btn bg-gray-800 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-blue-500';
                prevBtn.innerHTML = '<i class="fas fa-chevron-left"></i>';
                prevBtn.addEventListener('click', () => {
                    currentPage--;
                    filterAndRenderBlogs();
                });
                paginationContainer.appendChild(prevBtn);
            }
            
            // Page numbers
            for (let i = 1; i <= totalPages; i++) {
                const pageBtn = document.createElement('button');
                pageBtn.className = `pagination-btn bg-gray-800 text-white w-10 h-10 rounded-full flex items-center justify-center ${i === currentPage ? 'active-page' : ''}`;
                pageBtn.textContent = i;
                pageBtn.addEventListener('click', () => {
                    currentPage = i;
                    filterAndRenderBlogs();
                });
                paginationContainer.appendChild(pageBtn);
            }
            
            // Next button
            if (currentPage < totalPages) {
                const nextBtn = document.createElement('button');
                nextBtn.className = 'pagination-btn bg-gray-800 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-blue-500';
                nextBtn.innerHTML = '<i class="fas fa-chevron-right"></i>';
                nextBtn.addEventListener('click', () => {
                    currentPage++;
                    filterAndRenderBlogs();
                });
                paginationContainer.appendChild(nextBtn);
            }
        }

        // Function to filter and render blogs
        function filterAndRenderBlogs() {
            let filteredPosts;
            
            if (currentCategory === 'all') {
                filteredPosts = blogPosts;
            } else {
                filteredPosts = blogPosts.filter(post => post.category === currentCategory);
            }
            
            renderBlogPosts(filteredPosts, currentPage);
            renderPagination(filteredPosts.length);
        }

        // Category filter event listeners
        categoryFilter.querySelectorAll('.category-btn').forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                categoryFilter.querySelectorAll('.category-btn').forEach(btn => {
                    btn.classList.remove('active');
                });
                
                // Add active class to clicked button
                this.classList.add('active');
                
                // Update current category and reset to page 1
                currentCategory = this.dataset.category;
                currentPage = 1;
                
                // Filter and render blogs
                filterAndRenderBlogs();
            });
        });

        // Initialize
        document.addEventListener('DOMContentLoaded', () => {
            filterAndRenderBlogs();
            
            // Blog card hover effect
            document.querySelectorAll('.blog-card').forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-8px)';
                    this.style.boxShadow = '0 15px 30px rgba(255, 215, 0, 0.15)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                    this.style.boxShadow = '0 4px 6px rgba(0, 0, 0, 0.1)';
                });
            });
        });
    </script>
</body>
</html>