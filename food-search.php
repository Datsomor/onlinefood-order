<?php include('partials-front/menu.php'); ?>

<style>
    /* Main Content Area Adjustments */
    .main-content {
        margin-left: 300px;
        padding: 20px;
        transition: 0.3s;
        min-height: 100vh;
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    }

    .main-content.expanded {
        margin-left: 80px;
    }

    /* Container Adjustments */
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    /* Hero Search Section */
    .search-hero {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 20px;
        padding: 60px 40px;
        margin-bottom: 40px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
        animation: slideDown 0.6s ease;
    }

    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .search-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" opacity="0.1"><circle cx="20" cy="20" r="10" fill="white"/><circle cx="80" cy="80" r="15" fill="white"/><path d="M30,70 Q40,50 60,70 T90,70" stroke="white" fill="none" stroke-width="3"/></svg>');
        background-size: 200px 200px;
        animation: float 20s linear infinite;
    }

    @keyframes float {
        0% { background-position: 0 0; }
        100% { background-position: 200px 200px; }
    }

    .search-hero-content {
        position: relative;
        z-index: 1;
        text-align: center;
        color: white;
    }

    .search-hero-content h2 {
        font-size: 36px;
        font-weight: 700;
        margin-bottom: 20px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        word-wrap: break-word;
    }

    .search-hero-content h2 i {
        margin-right: 10px;
        color: #ffd93d;
    }

    .search-query {
        background: rgba(255, 255, 255, 0.2);
        padding: 10px 30px;
        border-radius: 50px;
        display: inline-block;
        font-size: 24px;
        font-weight: 600;
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255, 255, 255, 0.3);
        margin-top: 15px;
    }

    .search-stats {
        margin-top: 20px;
        font-size: 16px;
        opacity: 0.9;
    }

    .search-stats i {
        margin-right: 5px;
    }

    /* Results Header */
    .results-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
        padding: 20px;
        background: white;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        animation: fadeIn 0.8s ease;
    }

    .results-header h3 {
        color: #333;
        font-size: 22px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .results-header h3 i {
        color: #667eea;
    }

    .sort-options {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .sort-label {
        color: #666;
        font-size: 14px;
    }

    .sort-select {
        padding: 8px 15px;
        border: 2px solid #f0f0f0;
        border-radius: 10px;
        outline: none;
        cursor: pointer;
        transition: 0.3s;
        background: white;
    }

    .sort-select:hover,
    .sort-select:focus {
        border-color: #667eea;
    }

    /* Food Grid */
    .food-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
        gap: 30px;
        margin-bottom: 40px;
    }

    .food-card {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        transition: 0.3s;
        position: relative;
        animation: fadeInUp 0.6s ease;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .food-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(102, 126, 234, 0.2);
    }

    .food-image-wrapper {
        position: relative;
        height: 220px;
        overflow: hidden;
    }

    .food-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: 0.5s;
    }

    .food-card:hover .food-image {
        transform: scale(1.1);
    }

    .food-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        background: linear-gradient(135deg, #ff6b6b 0%, #ff8e8e 100%);
        color: white;
        padding: 5px 15px;
        border-radius: 25px;
        font-size: 12px;
        font-weight: 600;
        z-index: 1;
        box-shadow: 0 3px 10px rgba(255, 107, 107, 0.3);
    }

    .food-content {
        padding: 25px;
    }

    .food-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
    }

    .food-header h4 {
        font-size: 22px;
        color: #333;
        font-weight: 600;
        margin: 0;
    }

    .food-price {
        font-size: 28px;
        font-weight: 700;
        color: #667eea;
    }

    .food-price small {
        font-size: 14px;
        color: #999;
        font-weight: normal;
    }

    .food-description {
        color: #666;
        font-size: 14px;
        line-height: 1.7;
        margin-bottom: 20px;
        height: 70px;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
    }

    .food-meta {
        display: flex;
        align-items: center;
        gap: 20px;
        margin-bottom: 20px;
        padding-bottom: 15px;
        border-bottom: 1px solid #f0f0f0;
    }

    .meta-item {
        display: flex;
        align-items: center;
        gap: 5px;
        color: #666;
        font-size: 13px;
    }

    .meta-item i {
        color: #667eea;
    }

    .rating {
        display: flex;
        align-items: center;
        gap: 5px;
        color: #ffc107;
    }

    .rating span {
        color: #666;
        margin-left: 5px;
    }

    .order-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        width: 100%;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
        padding: 15px;
        border-radius: 12px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s;
        text-decoration: none;
    }

    .order-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
    }

    /* Empty State */
    .empty-state {
        text-align: center;
        padding: 80px 20px;
        background: white;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        grid-column: 1 / -1;
        animation: fadeIn 0.8s ease;
    }

    .empty-state-icon {
        width: 150px;
        height: 150px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 30px;
        box-shadow: 0 20px 40px rgba(102, 126, 234, 0.3);
    }

    .empty-state-icon i {
        font-size: 70px;
        color: white;
    }

    .empty-state h3 {
        font-size: 32px;
        color: #333;
        margin-bottom: 15px;
    }

    .empty-state p {
        color: #666;
        font-size: 18px;
        margin-bottom: 30px;
        max-width: 500px;
        margin-left: auto;
        margin-right: auto;
    }

    .suggestions {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 15px;
        margin-top: 30px;
    }

    .suggestion-tag {
        background: #f0f0f0;
        color: #666;
        padding: 10px 25px;
        border-radius: 30px;
        text-decoration: none;
        font-size: 14px;
        transition: 0.3s;
    }

    .suggestion-tag:hover {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        transform: translateY(-2px);
    }

    .back-to-menu {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: white;
        color: #667eea;
        padding: 15px 40px;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        margin-top: 30px;
        transition: 0.3s;
        border: 2px solid #667eea;
    }

    .back-to-menu:hover {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        transform: translateY(-2px);
    }

    /* Pagination */
    .pagination {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-top: 40px;
    }

    .page-link {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border-radius: 10px;
        background: white;
        color: #333;
        text-decoration: none;
        transition: 0.3s;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }

    .page-link:hover,
    .page-link.active {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }

    /* Recent Searches */
    .recent-searches {
        margin-top: 40px;
        padding: 20px;
        background: white;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
    }

    .recent-searches h4 {
        color: #333;
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .recent-searches h4 i {
        color: #667eea;
    }

    .search-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .search-tag {
        background: #f0f0f0;
        padding: 8px 20px;
        border-radius: 25px;
        color: #666;
        text-decoration: none;
        font-size: 14px;
        transition: 0.3s;
    }

    .search-tag:hover {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }

    /* Loading Skeleton */
    .skeleton {
        background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
        background-size: 200% 100%;
        animation: loading 1.5s infinite;
        border-radius: 10px;
    }

    @keyframes loading {
        0% { background-position: 200% 0; }
        100% { background-position: -200% 0; }
    }

    /* Responsive Design */
    @media (max-width: 992px) {
        .main-content {
            margin-left: 0;
        }

        .search-hero-content h2 {
            font-size: 28px;
        }

        .search-query {
            font-size: 20px;
            padding: 8px 20px;
        }
    }

    @media (max-width: 768px) {
        .search-hero {
            padding: 40px 20px;
        }

        .search-hero-content h2 {
            font-size: 24px;
        }

        .results-header {
            flex-direction: column;
            gap: 15px;
            align-items: flex-start;
        }

        .food-grid {
            grid-template-columns: 1fr;
        }

        .food-image-wrapper {
            height: 200px;
        }

        .empty-state-icon {
            width: 120px;
            height: 120px;
        }

        .empty-state-icon i {
            font-size: 50px;
        }

        .empty-state h3 {
            font-size: 24px;
        }

        .empty-state p {
            font-size: 16px;
        }
    }

    /* Animation for cards */
    .food-card:nth-child(odd) {
        animation-delay: 0.1s;
    }

    .food-card:nth-child(even) {
        animation-delay: 0.2s;
    }
</style>

<div class="main-content" id="mainContent">
    <div class="container">

        <?php 
            //Get the Search Keyword and sanitize it
            $search = mysqli_real_escape_string($conn, $_POST['search']);
            
            // Store search in session for recent searches
            if(!isset($_SESSION['recent_searches'])) {
                $_SESSION['recent_searches'] = array();
            }
            
            // Add current search to recent searches (avoid duplicates)
            if(!in_array($search, $_SESSION['recent_searches'])) {
                array_unshift($_SESSION['recent_searches'], $search);
                // Keep only last 5 searches
                if(count($_SESSION['recent_searches']) > 5) {
                    array_pop($_SESSION['recent_searches']);
                }
            }
        ?>

        <!-- Hero Search Section -->
        <section class="search-hero">
            <div class="search-hero-content">
                <h2>
                    <i class="fas fa-search"></i>
                    Search Results For
                </h2>
                <div class="search-query">
                    "<?php echo htmlspecialchars($search); ?>"
                </div>
                
                <?php
                // Count results for this search
                $sql_count = "SELECT COUNT(*) as count FROM tbl_food WHERE title LIKE '%$search%' OR description LIKE '%$search%'";
                $res_count = mysqli_query($conn, $sql_count);
                $row_count = mysqli_fetch_assoc($res_count);
                $total_results = $row_count['count'];
                ?>
                
                <div class="search-stats">
                    <i class="fas fa-utensils"></i>
                    <?php echo $total_results; ?> delicious items found
                </div>
            </div>
        </section>

        <!-- Results Header -->
        <div class="results-header">
            <h3>
                <i class="fas fa-fire"></i>
                Recommended For You
            </h3>
            <div class="sort-options">
                <span class="sort-label">Sort by:</span>
                <select class="sort-select" onchange="sortResults(this.value)">
                    <option value="relevance">Relevance</option>
                    <option value="price_low">Price: Low to High</option>
                    <option value="price_high">Price: High to Low</option>
                    <option value="name">Name</option>
                </select>
            </div>
        </div>

        <!-- Food Grid -->
        <div class="food-grid" id="foodGrid">
            <?php 
                //SQL Query to Get foods based on search keyword
                $sql = "SELECT * FROM tbl_food WHERE title LIKE '%$search%' OR description LIKE '%$search%' ORDER BY title ASC";
                $res = mysqli_query($conn, $sql);
                $count = mysqli_num_rows($res);

                if($count > 0) {
                    while($row = mysqli_fetch_assoc($res)) {
                        $id = $row['id'];
                        $title = $row['title'];
                        $price = $row['price'];
                        $description = $row['description'];
                        $image_name = $row['image_name'];
                        
                        // Generate random rating (in real app, this would come from database)
                        $rating = rand(35, 50) / 10;
                        $reviews = rand(10, 500);
                        $prep_time = rand(15, 45);
            ?>

            <div class="food-card" data-price="<?php echo $price; ?>" data-name="<?php echo $title; ?>">
                <div class="food-image-wrapper">
                    <?php if($image_name != ""): ?>
                        <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="<?php echo $title; ?>" class="food-image">
                    <?php else: ?>
                        <img src="https://via.placeholder.com/400x300?text=<?php echo urlencode($title); ?>" alt="<?php echo $title; ?>" class="food-image">
                    <?php endif; ?>
                    <span class="food-badge">Popular</span>
                </div>

                <div class="food-content">
                    <div class="food-header">
                        <h4><?php echo $title; ?></h4>
                        <span class="food-price">$<?php echo $price; ?></span>
                    </div>

                    <p class="food-description">
                        <?php echo $description; ?>
                    </p>

                    <div class="food-meta">
                        <div class="meta-item">
                            <i class="fas fa-clock"></i>
                            <?php echo $prep_time; ?> min
                        </div>
                        <div class="rating">
                            <?php 
                            for($i = 1; $i <= 5; $i++) {
                                if($i <= floor($rating)) {
                                    echo '<i class="fas fa-star"></i>';
                                } elseif($i - 0.5 <= $rating) {
                                    echo '<i class="fas fa-star-half-alt"></i>';
                                } else {
                                    echo '<i class="far fa-star"></i>';
                                }
                            }
                            ?>
                            <span>(<?php echo $reviews; ?>)</span>
                        </div>
                    </div>

                    <a href="<?php echo SITEURL; ?>order.php?food_id=<?php echo $id; ?>" class="order-btn">
                        <i class="fas fa-shopping-cart"></i>
                        Order Now
                    </a>
                </div>
            </div>

            <?php 
                    }
                } else {
            ?>

            <!-- Empty State -->
            <div class="empty-state">
                <div class="empty-state-icon">
                    <i class="fas fa-search"></i>
                </div>
                <h3>No Results Found</h3>
                <p>We couldn't find any matches for "<?php echo htmlspecialchars($search); ?>". Try searching with different keywords or browse our categories.</p>
                
                <div class="suggestions">
                    <span style="color: #666; margin-right: 10px;">Try:</span>
                    <a href="food-search.php?search=Pizza" class="suggestion-tag">Pizza</a>
                    <a href="food-search.php?search=Burger" class="suggestion-tag">Burger</a>
                    <a href="food-search.php?search=Pasta" class="suggestion-tag">Pasta</a>
                    <a href="food-search.php?search=Salad" class="suggestion-tag">Salad</a>
                </div>

                <a href="<?php echo SITEURL; ?>" class="back-to-menu">
                    <i class="fas fa-arrow-left"></i>
                    Back to Menu
                </a>
            </div>

            <?php } ?>
        </div>

        <?php if($count > 6): ?>
        <!-- Pagination -->
        <div class="pagination">
            <a href="#" class="page-link"><i class="fas fa-chevron-left"></i></a>
            <a href="#" class="page-link active">1</a>
            <a href="#" class="page-link">2</a>
            <a href="#" class="page-link">3</a>
            <a href="#" class="page-link">4</a>
            <a href="#" class="page-link">5</a>
            <a href="#" class="page-link"><i class="fas fa-chevron-right"></i></a>
        </div>
        <?php endif; ?>

        <?php if(!empty($_SESSION['recent_searches'])): ?>
        <!-- Recent Searches -->
        <div class="recent-searches">
            <h4>
                <i class="fas fa-history"></i>
                Recent Searches
            </h4>
            <div class="search-tags">
                <?php foreach($_SESSION['recent_searches'] as $recent_search): ?>
                    <a href="food-search.php?search=<?php echo urlencode($recent_search); ?>" class="search-tag">
                        <i class="fas fa-search"></i>
                        <?php echo htmlspecialchars($recent_search); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>

    </div>
</div>

<script>
    // Sorting functionality
    function sortResults(sortBy) {
        const grid = document.getElementById('foodGrid');
        const cards = Array.from(grid.getElementsByClassName('food-card'));
        
        cards.sort((a, b) => {
            switch(sortBy) {
                case 'price_low':
                    return parseFloat(a.dataset.price) - parseFloat(b.dataset.price);
                case 'price_high':
                    return parseFloat(b.dataset.price) - parseFloat(a.dataset.price);
                case 'name':
                    return a.dataset.name.localeCompare(b.dataset.name);
                default:
                    return 0;
            }
        });
        
        // Reorder cards
        cards.forEach(card => grid.appendChild(card));
        
        // Update active sort button
        document.querySelectorAll('.sort-options select').forEach(select => {
            select.value = sortBy;
        });
    }

    // Loading skeleton effect
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.food-card');
        cards.forEach(card => {
            card.classList.add('skeleton');
            setTimeout(() => {
                card.classList.remove('skeleton');
            }, 1000);
        });
    });

    // Highlight search terms
    function highlightSearchTerm() {
        const searchTerm = "<?php echo addslashes($search); ?>";
        if(!searchTerm) return;
        
        const descriptions = document.querySelectorAll('.food-description, .food-header h4');
        const regex = new RegExp(`(${searchTerm})`, 'gi');
        
        descriptions.forEach(element => {
            const text = element.innerHTML;
            element.innerHTML = text.replace(regex, '<mark style="background: #ffd93d; padding: 0 2px;">$1</mark>');
        });
    }

    // Call highlight function
    highlightSearchTerm();

    // Infinite scroll (optional)
    let page = 1;
    let loading = false;
    
    window.addEventListener('scroll', function() {
        if((window.innerHeight + window.scrollY) >= document.body.offsetHeight - 500) {
            if(!loading && <?php echo $count; ?> > page * 6) {
                loadMoreResults();
            }
        }
    });

    function loadMoreResults() {
        loading = true;
        page++;
        
        // Show loading indicator
        const loader = document.createElement('div');
        loader.className = 'loading-spinner';
        loader.style.cssText = 'text-align: center; padding: 20px;';
        loader.innerHTML = '<i class="fas fa-spinner fa-spin" style="color: #667eea; font-size: 30px;"></i>';
        document.querySelector('.food-grid').appendChild(loader);
        
        // Simulate AJAX call (replace with actual implementation)
        setTimeout(() => {
            loader.remove();
            loading = false;
        }, 1500);
    }

    // Animate on scroll
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if(entry.isIntersecting) {
                entry.target.style.animation = 'fadeInUp 0.6s ease';
            }
        });
    });

    document.querySelectorAll('.food-card').forEach(card => {
        observer.observe(card);
    });
</script>

<?php include('partials-front/footer.php'); ?>