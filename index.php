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

    /* Compact Search Bar */
    .search-section {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 15px;
        padding: 30px 40px;
        margin-bottom: 40px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 20px;
    }

    .search-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" opacity="0.05"><circle cx="20" cy="20" r="10" fill="white"/><circle cx="80" cy="80" r="15" fill="white"/></svg>');
        background-size: 150px 150px;
    }

    .search-content {
        position: relative;
        z-index: 1;
        flex: 1;
        min-width: 250px;
    }

    .search-content h2 {
        color: white;
        font-size: 24px;
        font-weight: 600;
        margin-bottom: 5px;
    }

    .search-content p {
        color: rgba(255, 255, 255, 0.9);
        font-size: 14px;
    }

    .compact-search {
        position: relative;
        z-index: 1;
        min-width: 400px;
        background: white;
        border-radius: 12px;
        padding: 5px;
        display: flex;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }

    .compact-search input {
        flex: 1;
        border: none;
        padding: 12px 20px;
        border-radius: 12px;
        font-size: 14px;
        outline: none;
        background: transparent;
    }

    .compact-search button {
        background: linear-gradient(135deg, #ff6b6b 0%, #ff8e8e 100%);
        border: none;
        color: white;
        padding: 12px 30px;
        border-radius: 10px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s;
        display: flex;
        align-items: center;
        gap: 8px;
        white-space: nowrap;
    }

    .compact-search button:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 20px rgba(255, 107, 107, 0.4);
    }

    /* Order Success Message */
    .order-success {
        background: linear-gradient(135deg, #84fab0 0%, #8fd3f4 100%);
        color: #155724;
        padding: 15px 25px;
        border-radius: 12px;
        margin-bottom: 30px;
        display: flex;
        align-items: center;
        gap: 15px;
        animation: slideIn 0.5s ease;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    }

    @keyframes slideIn {
        from {
            transform: translateY(-20px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    /* Section Title */
    .section-title {
        text-align: left;
        margin-bottom: 25px;
        position: relative;
    }

    .section-title h2 {
        font-size: 28px;
        color: #333;
        margin-bottom: 5px;
        position: relative;
        display: inline-block;
    }

    .section-title h2::after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 0;
        width: 60px;
        height: 3px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 2px;
    }

    .section-title p {
        color: #666;
        font-size: 14px;
        margin-top: 10px;
    }

    /* Categories Grid - Horizontal Scroll */
    .categories-wrapper {
        position: relative;
        margin: 30px 0;
    }

    .categories-scroll {
        display: flex;
        gap: 20px;
        overflow-x: auto;
        padding: 10px 0 20px;
        scrollbar-width: thin;
        scrollbar-color: #667eea #f0f0f0;
    }

    .categories-scroll::-webkit-scrollbar {
        height: 6px;
    }

    .categories-scroll::-webkit-scrollbar-track {
        background: #f0f0f0;
        border-radius: 10px;
    }

    .categories-scroll::-webkit-scrollbar-thumb {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 10px;
    }

    .category-card {
        min-width: 200px;
        height: 120px;
        border-radius: 15px;
        overflow: hidden;
        position: relative;
        text-decoration: none;
        transition: 0.3s;
        flex-shrink: 0;
    }

    .category-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
    }

    .category-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: 0.5s;
    }

    .category-card:hover img {
        transform: scale(1.1);
    }

    .category-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(102, 126, 234, 0.9), rgba(118, 75, 162, 0.9));
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: 600;
        font-size: 18px;
        opacity: 0.9;
        transition: 0.3s;
    }

    .category-card:hover .category-overlay {
        opacity: 1;
    }

    /* Food Grid - Professional Row Layout */
    .food-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin: 30px 0;
    }

    .food-item {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: 0.3s;
        display: flex;
        height: 140px;
    }

    .food-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(102, 126, 234, 0.15);
    }

    .food-image {
        width: 140px;
        height: 140px;
        overflow: hidden;
        position: relative;
        flex-shrink: 0;
    }

    .food-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: 0.5s;
    }

    .food-item:hover .food-image img {
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
    }

    .food-details {
        flex: 1;
        padding: 15px;
        display: flex;
        flex-direction: column;
        position: relative;
    }

    .food-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 8px;
    }

    .food-header h4 {
        font-size: 16px;
        color: #333;
        font-weight: 600;
        margin: 0;
        line-height: 1.3;
    }

    .food-price {
        font-size: 18px;
        font-weight: 700;
        color: #667eea;
        white-space: nowrap;
        margin-left: 10px;
    }

    .food-description {
        color: #666;
        font-size: 12px;
        line-height: 1.5;
        margin-bottom: 10px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        flex: 1;
    }

    .food-meta {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 10px;
    }

    .meta-item {
        display: flex;
        align-items: center;
        gap: 4px;
        color: #888;
        font-size: 11px;
    }

    .meta-item i {
        color: #667eea;
        font-size: 12px;
    }

    .rating {
        display: flex;
        align-items: center;
        gap: 2px;
    }

    .rating i {
        color: #ffc107;
        font-size: 11px;
    }

    .rating span {
        color: #666;
        font-size: 10px;
        margin-left: 4px;
    }

    .order-btn {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
        padding: 8px 15px;
        border-radius: 8px;
        font-size: 12px;
        font-weight: 500;
        cursor: pointer;
        transition: 0.3s;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 5px;
        width: fit-content;
    }

    .order-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
    }

    .order-btn i {
        font-size: 12px;
    }

    /* View All Button */
    .view-all {
        text-align: center;
        margin-top: 30px;
    }

    .btn-view-all {
        background: white;
        color: #667eea;
        padding: 10px 30px;
        border-radius: 25px;
        text-decoration: none;
        font-weight: 500;
        font-size: 14px;
        transition: 0.3s;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        border: 1px solid #667eea;
    }

    .btn-view-all:hover {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
    }

    /* Quick Stats */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        margin: 40px 0;
    }

    .stat-card {
        background: white;
        border-radius: 12px;
        padding: 20px;
        display: flex;
        align-items: center;
        gap: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: 0.3s;
    }

    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(102, 126, 234, 0.15);
    }

    .stat-icon {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .stat-icon i {
        font-size: 24px;
        color: white;
    }

    .stat-info h3 {
        font-size: 22px;
        color: #333;
        margin-bottom: 3px;
    }

    .stat-info p {
        color: #666;
        font-size: 12px;
    }

    /* Responsive Design */
    @media (max-width: 1200px) {
        .food-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .stats-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 992px) {
        .main-content {
            margin-left: 0;
        }
        
        .search-section {
            flex-direction: column;
            text-align: center;
        }
        
        .compact-search {
            min-width: 100%;
        }
    }

    @media (max-width: 768px) {
        .food-grid {
            grid-template-columns: 1fr;
        }
        
        .food-item {
            height: auto;
            flex-direction: column;
        }
        
        .food-image {
            width: 100%;
            height: 160px;
        }
        
        .stats-grid {
            grid-template-columns: 1fr;
        }
        
        .categories-scroll {
            padding-bottom: 15px;
        }
    }

    /* Loading Animation */
    .skeleton {
        background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
        background-size: 200% 100%;
        animation: loading 1.5s infinite;
    }

    @keyframes loading {
        0% { background-position: 200% 0; }
        100% { background-position: -200% 0; }
    }
</style>

<div class="main-content" id="mainContent">
    <div class="container">
        
        <!-- Compact Search Section -->
        <section class="search-section">
            <div class="search-content">
                <h2>Hungry? Let's find your favorite food</h2>
                <p>Search from 100+ delicious dishes</p>
            </div>
            
            <form action="<?php echo SITEURL; ?>food-search.php" method="POST" class="compact-search">
                <input type="text" name="search" placeholder="Search for pizza, burger, pasta..." required>
                <button type="submit" name="submit">
                    <i class="fas fa-search"></i>
                    Search
                </button>
            </form>
        </section>

        <!-- Order Success Message -->
        <?php if(isset($_SESSION['order'])): ?>
            <div class="order-success">
                <i class="fas fa-check-circle"></i>
                <div>
                    <strong>Order Placed Successfully!</strong>
                    <p><?php echo $_SESSION['order']; ?></p>
                </div>
            </div>
            <?php unset($_SESSION['order']); ?>
        <?php endif; ?>

        <!-- Categories Section - Horizontal Scroll -->
        <section class="categories">
            <div class="section-title">
                <h2>Browse Categories</h2>
                <p>Explore our wide variety of food categories</p>
            </div>

            <?php 
                $sql = "SELECT * FROM tbl_category WHERE active='Yes' AND featured='Yes' ORDER BY id DESC";
                $res = mysqli_query($conn, $sql);
                $count = mysqli_num_rows($res);

                if($count>0):
            ?>
            <div class="categories-wrapper">
                <div class="categories-scroll">
                    <?php while($row = mysqli_fetch_assoc($res)): 
                        $id = $row['id'];
                        $title = $row['title'];
                        $image_name = $row['image_name'];
                    ?>
                    <a href="<?php echo SITEURL; ?>category-foods.php?category_id=<?php echo $id; ?>" class="category-card">
                        <?php if($image_name != ""): ?>
                            <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" alt="<?php echo $title; ?>">
                        <?php else: ?>
                            <img src="https://via.placeholder.com/200x120?text=<?php echo urlencode($title); ?>" alt="<?php echo $title; ?>">
                        <?php endif; ?>
                        <div class="category-overlay">
                            <?php echo $title; ?>
                        </div>
                    </a>
                    <?php endwhile; ?>
                </div>
            </div>
            <?php else: ?>
                <div class="order-success" style="background: #f8d7da; color: #721c24;">
                    <i class="fas fa-exclamation-circle"></i>
                    <p>No categories available at the moment.</p>
                </div>
            <?php endif; ?>
        </section>

        <!-- Featured Food Menu Section - Professional Grid -->
        <section class="food-menu">
            <div class="section-title">
                <h2>Featured Dishes</h2>
                <p>Hand-picked favorites from our menu</p>
            </div>

            <?php 
                $sql2 = "SELECT * FROM tbl_food WHERE active='Yes' AND featured='Yes' ORDER BY id DESC LIMIT 6";
                $res2 = mysqli_query($conn, $sql2);
                $count2 = mysqli_num_rows($res2);

                if($count2>0):
            ?>
            <div class="food-grid">
                <?php while($row = mysqli_fetch_assoc($res2)): 
                    $id = $row['id'];
                    $title = $row['title'];
                    $price = $row['price'];
                    $description = $row['description'];
                    $image_name = $row['image_name'];
                    
                    // Simulated data
                    $rating = rand(35, 50) / 10;
                    $reviews = rand(10, 500);
                    $prep_time = rand(15, 30);
                ?>
                <div class="food-item">
                    <div class="food-image">
                        <?php if($image_name != ""): ?>
                            <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="<?php echo $title; ?>">
                        <?php else: ?>
                            <img src="https://via.placeholder.com/140x140?text=<?php echo urlencode($title); ?>" alt="<?php echo $title; ?>">
                        <?php endif; ?>
                        <span class="food-badge">Featured</span>
                    </div>
                    
                    <div class="food-details">
                        <div class="food-header">
                            <h4><?php echo $title; ?></h4>
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
                <?php endwhile; ?>
            </div>
            <?php else: ?>
                <div class="order-success" style="background: #f8d7da; color: #721c24;">
                    <i class="fas fa-exclamation-circle"></i>
                    <p>No food items available at the moment.</p>
                </div>
            <?php endif; ?>

            <div class="view-all">
                <a href="<?php echo SITEURL; ?>foods.php" class="btn-view-all">
                    View Full Menu
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </section>

        <!-- Quick Stats Section -->
        <section class="stats-grid">
            <?php
            $stats = [
                ['icon' => 'fa-pizza-slice', 'count' => '50+', 'label' => 'Food Items'],
                ['icon' => 'fa-users', 'count' => '1k+', 'label' => 'Happy Customers'],
                ['icon' => 'fa-truck', 'count' => '30min', 'label' => 'Fast Delivery'],
                ['icon' => 'fa-star', 'count' => '4.8', 'label' => 'Rating']
            ];
            
            foreach($stats as $stat): ?>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas <?php echo $stat['icon']; ?>"></i>
                </div>
                <div class="stat-info">
                    <h3><?php echo $stat['count']; ?></h3>
                    <p><?php echo $stat['label']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </section>

    </div>
</div>

<script>
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Loading skeleton effect
    document.querySelectorAll('.food-item, .category-card').forEach(card => {
        card.classList.add('skeleton');
        setTimeout(() => {
            card.classList.remove('skeleton');
        }, 800);
    });

    // Auto-hide success message
    const successMsg = document.querySelector('.order-success');
    if(successMsg) {
        setTimeout(() => {
            successMsg.style.opacity = '0';
            setTimeout(() => {
                successMsg.style.display = 'none';
            }, 300);
        }, 5000);
    }
</script>

<?php include('partials-front/footer.php'); ?>