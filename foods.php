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

    .search-hero-content h1 {
        font-size: 42px;
        font-weight: 700;
        margin-bottom: 15px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
    }

    .search-hero-content p {
        font-size: 18px;
        margin-bottom: 30px;
        opacity: 0.9;
    }

    /* Modern Search Form */
    .modern-search {
        max-width: 600px;
        margin: 0 auto;
        background: white;
        border-radius: 50px;
        padding: 5px;
        display: flex;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }

    .modern-search input {
        flex: 1;
        border: none;
        padding: 15px 25px;
        border-radius: 50px;
        font-size: 16px;
        outline: none;
        background: transparent;
    }

    .modern-search button {
        background: linear-gradient(135deg, #ff6b6b 0%, #ff8e8e 100%);
        border: none;
        color: white;
        padding: 15px 40px;
        border-radius: 50px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .modern-search button:hover {
        transform: scale(1.05);
        box-shadow: 0 5px 20px rgba(255, 107, 107, 0.4);
    }

    /* Page Header */
    .page-header {
        text-align: center;
        margin-bottom: 40px;
        position: relative;
    }

    .page-header h2 {
        font-size: 36px;
        color: #333;
        margin-bottom: 15px;
        position: relative;
        display: inline-block;
    }

    .page-header h2::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 2px;
    }

    .page-header p {
        color: #666;
        font-size: 16px;
        max-width: 600px;
        margin: 0 auto;
    }

    /* Filter Bar */
    .filter-bar {
        background: white;
        border-radius: 15px;
        padding: 20px;
        margin-bottom: 30px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 20px;
    }

    .filter-tabs {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }

    .filter-tab {
        padding: 10px 25px;
        border-radius: 30px;
        background: #f0f0f0;
        color: #666;
        text-decoration: none;
        font-size: 14px;
        font-weight: 500;
        transition: 0.3s;
        display: flex;
        align-items: center;
        gap: 8px;
        cursor: pointer;
        border: none;
    }

    .filter-tab:hover,
    .filter-tab.active {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }

    .filter-tab i {
        font-size: 14px;
    }

    .sort-options {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .sort-select {
        padding: 10px 20px;
        border: 2px solid #f0f0f0;
        border-radius: 30px;
        outline: none;
        cursor: pointer;
        transition: 0.3s;
        background: white;
        color: #333;
    }

    .sort-select:hover,
    .sort-select:focus {
        border-color: #667eea;
    }

    /* Food Grid - Horizontal Row Layout */
    .food-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin: 40px 0;
    }

    .food-card {
        background: white;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
        transition: 0.3s;
        position: relative;
        animation: fadeInUp 0.6s ease;
        display: flex;
        height: 140px;
    }

    .food-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(102, 126, 234, 0.15);
    }

    .food-image-wrapper {
        position: relative;
        width: 140px;
        height: 140px;
        overflow: hidden;
        flex-shrink: 0;
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
        top: 8px;
        right: 8px;
        background: linear-gradient(135deg, #ff6b6b 0%, #ff8e8e 100%);
        color: white;
        padding: 3px 10px;
        border-radius: 20px;
        font-size: 10px;
        font-weight: 600;
        z-index: 1;
        box-shadow: 0 2px 5px rgba(255, 107, 107, 0.3);
    }

    .food-badge.featured {
        background: linear-gradient(135deg, #ffd93d 0%, #ff9f43 100%);
        color: #333;
    }

    .food-content {
        padding: 12px;
        flex: 1;
        display: flex;
        flex-direction: column;
        position: relative;
    }

    .food-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 6px;
    }

    .food-header h3 {
        font-size: 15px;
        color: #333;
        font-weight: 600;
        margin: 0;
        line-height: 1.4;
        max-width: 140px;
        word-wrap: break-word;
        white-space: normal;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .food-price {
        font-size: 16px;
        font-weight: 700;
        color: #667eea;
        white-space: nowrap;
        margin-left: 5px;
    }

    .food-price small {
        font-size: 10px;
        color: #999;
        font-weight: normal;
    }

    .food-description {
        color: #666;
        font-size: 11px;
        line-height: 1.4;
        margin-bottom: 8px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        flex: 1;
    }

    .food-meta {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 8px;
        flex-wrap: wrap;
    }

    .meta-item {
        display: flex;
        align-items: center;
        gap: 3px;
        color: #888;
        font-size: 10px;
    }

    .meta-item i {
        color: #667eea;
        font-size: 10px;
    }

    .rating {
        display: flex;
        align-items: center;
        gap: 2px;
        margin-left: auto;
    }

    .rating i {
        color: #ffc107;
        font-size: 9px;
    }

    .rating span {
        color: #666;
        font-size: 9px;
        margin-left: 2px;
    }

    .order-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 4px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
        padding: 6px 10px;
        border-radius: 20px;
        font-size: 10px;
        font-weight: 500;
        cursor: pointer;
        transition: 0.3s;
        text-decoration: none;
        width: fit-content;
        margin-top: auto;
    }

    .order-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 10px rgba(102, 126, 234, 0.3);
    }

    .order-btn i {
        font-size: 10px;
    }

    /* Quick Stats */
    .quick-stats {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        margin: 60px 0 40px;
    }

    .stat-card {
        background: white;
        border-radius: 15px;
        padding: 25px;
        text-align: center;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        transition: 0.3s;
    }

    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(102, 126, 234, 0.15);
    }

    .stat-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 15px;
    }

    .stat-icon i {
        font-size: 30px;
        color: white;
    }

    .stat-card h4 {
        font-size: 28px;
        color: #333;
        margin-bottom: 5px;
    }

    .stat-card p {
        color: #666;
        font-size: 14px;
    }

    /* Pagination */
    .pagination {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin: 40px 0;
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

    /* Empty State */
    .empty-state {
        text-align: center;
        padding: 80px 20px;
        background: white;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        grid-column: 1 / -1;
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
    }

    .empty-state-icon i {
        font-size: 70px;
        color: white;
    }

    .empty-state h3 {
        font-size: 28px;
        color: #333;
        margin-bottom: 15px;
    }

    .empty-state p {
        color: #666;
        font-size: 16px;
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

    /* Featured Categories */
    .categories-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        margin-top: 20px;
    }

    .category-card {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 15px;
        padding: 30px 20px;
        text-align: center;
        text-decoration: none;
        color: white;
        transition: 0.3s;
        position: relative;
        overflow: hidden;
    }

    .category-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
    }

    .category-card img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid white;
        margin-bottom: 15px;
    }

    .category-card h4 {
        font-size: 18px;
        margin-bottom: 5px;
        font-weight: 600;
    }

    .category-card p {
        opacity: 0.9;
        font-size: 13px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 5px;
    }

    /* Responsive Design */
    @media (max-width: 1200px) {
        .food-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .quick-stats {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .categories-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 992px) {
        .main-content {
            margin-left: 0;
        }
    }

    @media (max-width: 768px) {
        .search-hero {
            padding: 40px 20px;
        }

        .search-hero-content h1 {
            font-size: 28px;
        }

        .modern-search {
            flex-direction: column;
            background: transparent;
            gap: 10px;
        }

        .modern-search input {
            width: 100%;
            border-radius: 25px;
            background: white;
        }

        .modern-search button {
            width: 100%;
        }

        .page-header h2 {
            font-size: 28px;
        }

        .filter-bar {
            flex-direction: column;
            align-items: flex-start;
        }

        .filter-tabs {
            width: 100%;
            overflow-x: auto;
            padding-bottom: 10px;
        }

        .sort-options {
            width: 100%;
        }

        .sort-select {
            width: 100%;
        }

        .food-grid {
            grid-template-columns: 1fr;
        }

        .food-card {
            height: 140px;
        }

        .food-image-wrapper {
            width: 140px;
            height: 140px;
        }

        .food-header h3 {
            max-width: 180px;
        }

        .quick-stats {
            grid-template-columns: 1fr;
            gap: 15px;
        }

        .categories-grid {
            grid-template-columns: 1fr;
        }
    }

    /* Card animations delay */
    .food-card:nth-child(odd) {
        animation-delay: 0.1s;
    }

    .food-card:nth-child(even) {
        animation-delay: 0.2s;
    }
</style>

<div class="main-content" id="mainContent">
    <div class="container">

        <!-- Hero Search Section -->
        <section class="search-hero">
            <div class="search-hero-content">
                <h1>Discover Delicious Food</h1>
                <p>Browse our extensive menu and find your next favorite meal</p>
                
                <form action="<?php echo SITEURL; ?>food-search.php" method="POST" class="modern-search">
                    <input type="text" name="search" placeholder="Search for pizza, burger, pasta, salad..." required>
                    <button type="submit" name="submit">
                        <i class="fas fa-search"></i>
                        Search
                    </button>
                </form>
            </div>
        </section>

        <!-- Page Header -->
        <div class="page-header">
            <h2>Our Food Menu</h2>
            <p>Explore our wide variety of delicious dishes prepared with love and fresh ingredients</p>
        </div>

        <?php
        // Get statistics
        $sql_stats = "SELECT 
                        COUNT(*) as total_items,
                        COUNT(CASE WHEN featured='Yes' THEN 1 END) as featured_items,
                        AVG(price) as avg_price,
                        MIN(price) as min_price,
                        MAX(price) as max_price
                      FROM tbl_food WHERE active='Yes'";
        $res_stats = mysqli_query($conn, $sql_stats);
        $stats = mysqli_fetch_assoc($res_stats);
        ?>

        <!-- Filter Bar -->
        <div class="filter-bar">
            <div class="filter-tabs">
                <button class="filter-tab active" onclick="filterItems('all')">
                    <i class="fas fa-list"></i>
                    All Items
                </button>
                <button class="filter-tab" onclick="filterItems('featured')">
                    <i class="fas fa-star"></i>
                    Featured
                </button>
                <button class="filter-tab" onclick="filterItems('price_low')">
                    <i class="fas fa-arrow-up"></i>
                    Price: Low to High
                </button>
                <button class="filter-tab" onclick="filterItems('price_high')">
                    <i class="fas fa-arrow-down"></i>
                    Price: High to Low
                </button>
                <button class="filter-tab" onclick="filterItems('name')">
                    <i class="fas fa-sort-alpha-down"></i>
                    Name
                </button>
            </div>
            <div class="sort-options">
                <span class="filter-tab" style="background: transparent; cursor: default;">Show:</span>
                <select class="sort-select" onchange="changeItemsPerPage(this.value)">
                    <option value="12">12 per page</option>
                    <option value="24">24 per page</option>
                    <option value="36">36 per page</option>
                    <option value="48">48 per page</option>
                </select>
            </div>
        </div>

        <!-- Food Grid -->
        <div class="food-grid" id="foodGrid">
            <?php 
                //Display Foods that are Active
                $sql = "SELECT * FROM tbl_food WHERE active='Yes' ORDER BY featured DESC, title ASC";
                $res = mysqli_query($conn, $sql);
                $count = mysqli_num_rows($res);

                if($count > 0) {
                    while($row = mysqli_fetch_assoc($res)) {
                        $id = $row['id'];
                        $title = $row['title'];
                        $description = $row['description'];
                        $price = $row['price'];
                        $image_name = $row['image_name'];
                        $featured = $row['featured'];
                        
                        // Generate random rating and reviews (in real app, these would come from database)
                        $rating = rand(35, 50) / 10;
                        $reviews = rand(10, 500);
                        $prep_time = rand(15, 45);
                        $calories = rand(300, 800);
            ?>

            <div class="food-card" data-price="<?php echo $price; ?>" data-name="<?php echo $title; ?>" data-featured="<?php echo $featured; ?>">
                <div class="food-image-wrapper">
                    <?php if($image_name != ""): ?>
                        <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="<?php echo $title; ?>" class="food-image">
                    <?php else: ?>
                        <img src="https://via.placeholder.com/140x140?text=<?php echo urlencode($title); ?>" alt="<?php echo $title; ?>" class="food-image">
                    <?php endif; ?>
                    
                    <?php if($featured == 'Yes'): ?>
                    <span class="food-badge featured">
                        <i class="fas fa-crown"></i>
                        Featured
                    </span>
                    <?php else: ?>
                    <span class="food-badge">Popular</span>
                    <?php endif; ?>
                </div>

                <div class="food-content">
                    <div class="food-header">
                        <h3><?php echo $title; ?></h3>
                        <span class="food-price">$<?php echo $price; ?></span>
                    </div>

                    <p class="food-description">
                        <?php echo substr($description, 0, 60) . (strlen($description) > 60 ? '...' : ''); ?>
                    </p>

                    <div class="food-meta">
                        <div class="meta-item">
                            <i class="fas fa-clock"></i>
                            <?php echo $prep_time; ?> min
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-fire"></i>
                            <?php echo $calories; ?> cal
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
                        Order
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
                    <i class="fas fa-utensils"></i>
                </div>
                <h3>No Food Items Available</h3>
                <p>We're sorry, but there are no food items available at the moment. Please check back later!</p>
            </div>

            <?php } ?>
        </div>

        <?php if($count > 12): ?>
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

        <!-- Quick Stats - Moved after Food Grid -->
        <div class="quick-stats">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-utensils"></i>
                </div>
                <h4><?php echo $stats['total_items']; ?></h4>
                <p>Total Items</p>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-star"></i>
                </div>
                <h4><?php echo $stats['featured_items']; ?></h4>
                <p>Featured Items</p>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <h4>$<?php echo number_format($stats['avg_price'], 2); ?></h4>
                <p>Average Price</p>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-fire"></i>
                </div>
                <h4><?php echo rand(500, 1000); ?>+</h4>
                <p>Daily Orders</p>
            </div>
        </div>

        <!-- Featured Categories -->
        <?php
        $sql_cats = "SELECT * FROM tbl_category WHERE active='Yes' AND featured='Yes' LIMIT 4";
        $res_cats = mysqli_query($conn, $sql_cats);
        if(mysqli_num_rows($res_cats) > 0):
        ?>
        <div style="margin-top: 40px;">
            <div class="page-header">
                <h2>Popular Categories</h2>
                <p>Explore our most loved food categories</p>
            </div>
            <div class="categories-grid">
                <?php while($cat = mysqli_fetch_assoc($res_cats)): ?>
                <a href="<?php echo SITEURL; ?>category-foods.php?category_id=<?php echo $cat['id']; ?>" class="category-card">
                    <?php if($cat['image_name'] != ""): ?>
                    <img src="<?php echo SITEURL; ?>images/category/<?php echo $cat['image_name']; ?>" alt="<?php echo $cat['title']; ?>">
                    <?php endif; ?>
                    <h4><?php echo $cat['title']; ?></h4>
                    <p>Explore <i class="fas fa-arrow-right"></i></p>
                </a>
                <?php endwhile; ?>
            </div>
        </div>
        <?php endif; ?>

    </div>
</div>

<script>
    // Filter and sort functionality
    function filterItems(filterBy) {
        const grid = document.getElementById('foodGrid');
        const cards = Array.from(grid.getElementsByClassName('food-card'));
        
        // Update active tab
        document.querySelectorAll('.filter-tab').forEach(tab => {
            tab.classList.remove('active');
        });
        event.target.classList.add('active');
        
        // Filter and sort
        let filteredCards = [...cards];
        
        if(filterBy === 'featured') {
            filteredCards = cards.filter(card => card.dataset.featured === 'Yes');
        }
        
        switch(filterBy) {
            case 'price_low':
                filteredCards.sort((a, b) => parseFloat(a.dataset.price) - parseFloat(b.dataset.price));
                break;
            case 'price_high':
                filteredCards.sort((a, b) => parseFloat(b.dataset.price) - parseFloat(a.dataset.price));
                break;
            case 'name':
                filteredCards.sort((a, b) => a.dataset.name.localeCompare(b.dataset.name));
                break;
            default:
                if(filterBy !== 'featured') {
                    filteredCards = cards;
                }
        }
        
        // Clear grid and append filtered cards
        grid.innerHTML = '';
        filteredCards.forEach(card => grid.appendChild(card));
        
        // Add animation
        filteredCards.forEach((card, index) => {
            card.style.animation = 'none';
            card.offsetHeight;
            card.style.animation = `fadeInUp 0.6s ease ${index * 0.1}s`;
        });
    }

    function changeItemsPerPage(value) {
        // In a real app, you'd implement pagination here
        console.log('Items per page:', value);
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

    // Intersection Observer for animations
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if(entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.food-card').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'all 0.6s ease';
        observer.observe(card);
    });

    // Lazy loading for images
    const images = document.querySelectorAll('.food-image');
    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if(entry.isIntersecting) {
                const img = entry.target;
                img.src = img.src;
                img.classList.add('loaded');
                imageObserver.unobserve(img);
            }
        });
    });

    images.forEach(img => imageObserver.observe(img));
</script>

<?php include('partials-front/footer.php'); ?>