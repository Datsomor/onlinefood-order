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

    /* Hero Section */
    .favorites-hero {
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

    .favorites-hero::before {
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

    .favorites-hero-content {
        position: relative;
        z-index: 1;
        text-align: center;
        color: white;
    }

    .favorites-hero-content h1 {
        font-size: 42px;
        font-weight: 700;
        margin-bottom: 15px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
    }

    .favorites-hero-content p {
        font-size: 18px;
        max-width: 600px;
        margin: 0 auto;
        opacity: 0.9;
    }

    /* Welcome Banner */
    .welcome-banner {
        background: white;
        border-radius: 15px;
        padding: 25px 30px;
        margin-bottom: 30px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 20px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        animation: fadeIn 0.8s ease;
    }

    .welcome-text h2 {
        font-size: 24px;
        color: #333;
        margin-bottom: 5px;
    }

    .welcome-text p {
        color: #666;
        font-size: 14px;
    }

    .welcome-badge {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 10px 25px;
        border-radius: 30px;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .welcome-badge i {
        color: #ffd93d;
    }

    /* Section Headers */
    .section-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
    }

    .section-header h2 {
        font-size: 24px;
        color: #333;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .section-header h2 i {
        color: #667eea;
        font-size: 24px;
    }

    .section-header p {
        color: #666;
        font-size: 14px;
    }

    .view-all-link {
        color: #667eea;
        text-decoration: none;
        font-size: 14px;
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 5px;
        transition: 0.3s;
    }

    .view-all-link:hover {
        color: #764ba2;
        transform: translateX(5px);
    }

    /* Horizontal Scroll Sections */
    .scroll-section {
        position: relative;
        margin: 30px 0 50px;
    }

    .scroll-container {
        display: flex;
        gap: 20px;
        overflow-x: auto;
        padding: 10px 0 20px;
        scrollbar-width: thin;
        scrollbar-color: #667eea #f0f0f0;
        scroll-behavior: smooth;
    }

    .scroll-container::-webkit-scrollbar {
        height: 6px;
    }

    .scroll-container::-webkit-scrollbar-track {
        background: #f0f0f0;
        border-radius: 10px;
    }

    .scroll-container::-webkit-scrollbar-thumb {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 10px;
    }

    .scroll-container::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
    }

    /* Food Cards for Scroll */
    .scroll-food-card {
        min-width: 280px;
        background: white;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: 0.3s;
        flex-shrink: 0;
        display: flex;
        height: 130px;
    }

    .scroll-food-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(102, 126, 234, 0.15);
    }

    .scroll-food-image {
        width: 130px;
        height: 130px;
        overflow: hidden;
        position: relative;
        flex-shrink: 0;
    }

    .scroll-food-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: 0.5s;
    }

    .scroll-food-card:hover .scroll-food-image img {
        transform: scale(1.1);
    }

    .scroll-food-badge {
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

    .scroll-food-badge.trending {
        background: linear-gradient(135deg, #ffd93d 0%, #ff9f43 100%);
        color: #333;
    }

    .scroll-food-content {
        padding: 12px;
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .scroll-food-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 5px;
    }

    .scroll-food-header h4 {
        font-size: 15px;
        color: #333;
        font-weight: 600;
        margin: 0;
        line-height: 1.3;
        max-width: 120px;
        word-wrap: break-word;
        white-space: normal;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .scroll-food-price {
        font-size: 16px;
        font-weight: 700;
        color: #667eea;
        white-space: nowrap;
        margin-left: 5px;
    }

    .scroll-food-meta {
        display: flex;
        align-items: center;
        gap: 8px;
        margin: 5px 0;
        flex-wrap: wrap;
    }

    .scroll-meta-item {
        display: flex;
        align-items: center;
        gap: 3px;
        color: #888;
        font-size: 10px;
    }

    .scroll-meta-item i {
        color: #667eea;
        font-size: 10px;
    }

    .scroll-rating {
        display: flex;
        align-items: center;
        gap: 2px;
    }

    .scroll-rating i {
        color: #ffc107;
        font-size: 9px;
    }

    .scroll-rating span {
        color: #666;
        font-size: 9px;
        margin-left: 2px;
    }

    .scroll-order-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 4px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 20px;
        font-size: 10px;
        font-weight: 500;
        cursor: pointer;
        transition: 0.3s;
        text-decoration: none;
        width: fit-content;
        margin-top: auto;
    }

    .scroll-order-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 10px rgba(102, 126, 234, 0.3);
    }

    .scroll-order-btn i {
        font-size: 10px;
    }

    /* Navigation Buttons */
    .scroll-nav {
        display: flex;
        gap: 10px;
    }

    .scroll-nav-btn {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        background: white;
        border: none;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        cursor: pointer;
        transition: 0.3s;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #667eea;
    }

    .scroll-nav-btn:hover {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        transform: translateY(-2px);
    }

    .scroll-nav-btn:disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }

    /* Stats Cards */
    .quick-stats {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        margin: 40px 0;
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

    /* Try Something New Section */
    .try-new-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin: 30px 0;
    }

    .try-card {
        background: white;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        transition: 0.3s;
        position: relative;
    }

    .try-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(102, 126, 234, 0.15);
    }

    .try-image {
        height: 180px;
        overflow: hidden;
        position: relative;
    }

    .try-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: 0.5s;
    }

    .try-card:hover .try-image img {
        transform: scale(1.1);
    }

    .try-badge {
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
    }

    .try-content {
        padding: 20px;
    }

    .try-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
    }

    .try-header h4 {
        font-size: 18px;
        color: #333;
        font-weight: 600;
    }

    .try-price {
        font-size: 20px;
        font-weight: 700;
        color: #667eea;
    }

    .try-description {
        color: #666;
        font-size: 13px;
        line-height: 1.5;
        margin-bottom: 15px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .try-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .try-rating {
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .try-rating i {
        color: #ffc107;
        font-size: 12px;
    }

    .try-rating span {
        color: #666;
        font-size: 12px;
    }

    .try-btn {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 8px 20px;
        border-radius: 25px;
        text-decoration: none;
        font-size: 12px;
        font-weight: 500;
        transition: 0.3s;
        display: inline-flex;
        align-items: center;
        gap: 5px;
    }

    .try-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
    }

    /* Taste Profile */
    .taste-profile {
        background: white;
        border-radius: 20px;
        padding: 30px;
        margin: 40px 0;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    }

    .profile-header {
        display: flex;
        align-items: center;
        gap: 20px;
        margin-bottom: 30px;
        flex-wrap: wrap;
    }

    .profile-icon {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .profile-icon i {
        font-size: 35px;
        color: white;
    }

    .profile-text h3 {
        font-size: 20px;
        color: #333;
        margin-bottom: 5px;
    }

    .profile-text p {
        color: #666;
        font-size: 14px;
    }

    .preference-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
    }

    .pref-tag {
        padding: 10px 20px;
        background: #f0f0f0;
        border-radius: 30px;
        color: #666;
        font-size: 14px;
        transition: 0.3s;
        cursor: pointer;
    }

    .pref-tag:hover,
    .pref-tag.active {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }

    /* Empty State */
    .empty-state {
        text-align: center;
        padding: 60px 20px;
        background: white;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    }

    .empty-state-icon {
        width: 120px;
        height: 120px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 25px;
    }

    .empty-state-icon i {
        font-size: 60px;
        color: white;
    }

    .empty-state h3 {
        font-size: 22px;
        color: #333;
        margin-bottom: 10px;
    }

    .empty-state p {
        color: #666;
        font-size: 14px;
        max-width: 400px;
        margin: 0 auto;
    }

    /* Responsive Design */
    @media (max-width: 1200px) {
        .quick-stats {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .try-new-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 992px) {
        .main-content {
            margin-left: 0;
        }
    }

    @media (max-width: 768px) {
        .favorites-hero {
            padding: 40px 20px;
        }

        .favorites-hero-content h1 {
            font-size: 32px;
        }

        .quick-stats {
            grid-template-columns: 1fr;
        }

        .try-new-grid {
            grid-template-columns: 1fr;
        }

        .welcome-banner {
            flex-direction: column;
            text-align: center;
        }

        .profile-header {
            flex-direction: column;
            text-align: center;
        }

        .preference-tags {
            justify-content: center;
        }
    }
</style>

<?php
// Simulate user data (in real app, this would come from session/database)
$user_name = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : 'Food Lover';
$user_email = isset($_SESSION['user_email']) ? $_SESSION['user_email'] : 'guest@example.com';

// Get user's order history counts
$sql_user_orders = "SELECT COUNT(*) as total_orders, COUNT(DISTINCT food) as unique_items 
                    FROM tbl_order WHERE customer_email='$user_email'";
$res_user_orders = mysqli_query($conn, $sql_user_orders);
$user_stats = mysqli_fetch_assoc($res_user_orders);
$total_orders = $user_stats['total_orders'] ?? 0;
$unique_items = $user_stats['unique_items'] ?? 0;

// Get popular foods overall
$sql_popular = "SELECT f.*, COUNT(o.id) as order_count, AVG(o.total) as avg_price
                FROM tbl_food f
                LEFT JOIN tbl_order o ON f.title = o.food
                WHERE f.active='Yes'
                GROUP BY f.id
                ORDER BY order_count DESC
                LIMIT 10";
$res_popular = mysqli_query($conn, $sql_popular);

// Get user's most ordered foods
$sql_my_favorites = "SELECT f.*, COUNT(o.id) as times_ordered
                    FROM tbl_food f
                    JOIN tbl_order o ON f.title = o.food
                    WHERE o.customer_email='$user_email'
                    GROUP BY f.id
                    ORDER BY times_ordered DESC
                    LIMIT 8";
$res_my_favorites = mysqli_query($conn, $sql_my_favorites);

// Get recommendations (foods user hasn't ordered but are popular)
$sql_recommendations = "SELECT f.*, c.title as category_name
                       FROM tbl_food f
                       JOIN tbl_category c ON f.category_id = c.id
                       WHERE f.active='Yes' 
                       AND f.title NOT IN (
                           SELECT DISTINCT food 
                           FROM tbl_order 
                           WHERE customer_email='$user_email'
                       )
                       ORDER BY RAND()
                       LIMIT 6";
$res_recommendations = mysqli_query($conn, $sql_recommendations);
?>

<div class="main-content" id="mainContent">
    <div class="container">

        <!-- Hero Section -->
        <section class="favorites-hero">
            <div class="favorites-hero-content">
                <h1>Your Personal Food Discovery</h1>
                <p>Discover your favorites, explore popular dishes, and find your next delicious meal</p>
            </div>
        </section>

        <!-- Welcome Banner -->
        <div class="welcome-banner">
            <div class="welcome-text">
                <h2>Welcome back, <?php echo $user_name; ?>! 👋</h2>
                <p>Here's what we've prepared for you based on your taste</p>
            </div>
            <div class="welcome-badge">
                <i class="fas fa-star"></i>
                <span>Foodie Level <?php echo min(5, floor($total_orders / 5) + 1); ?></span>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="quick-stats">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-shopping-bag"></i>
                </div>
                <h4><?php echo $total_orders; ?></h4>
                <p>Total Orders</p>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-utensils"></i>
                </div>
                <h4><?php echo $unique_items; ?></h4>
                <p>Unique Items Tried</p>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-heart"></i>
                </div>
                <h4><?php echo rand(5, 15); ?></h4>
                <p>Favorite Items</p>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-fire"></i>
                </div>
                <h4><?php echo rand(3, 8); ?></h4>
                <p>New Suggestions</p>
            </div>
        </div>

        <!-- Popular Foods Section -->
        <section class="scroll-section">
            <div class="section-header">
                <div>
                    <h2>
                        <i class="fas fa-fire"></i>
                        Trending Now
                    </h2>
                    <p>Most popular dishes among our customers</p>
                </div>
                <div class="scroll-nav">
                    <button class="scroll-nav-btn" onclick="scrollSection('popular', -200)"><i class="fas fa-chevron-left"></i></button>
                    <button class="scroll-nav-btn" onclick="scrollSection('popular', 200)"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
            <div class="scroll-container" id="popular-scroll">
                <?php 
                if(mysqli_num_rows($res_popular) > 0) {
                    while($row = mysqli_fetch_assoc($res_popular)) {
                        $rating = rand(40, 50) / 10;
                        $reviews = rand(50, 500);
                ?>
                <div class="scroll-food-card">
                    <div class="scroll-food-image">
                        <?php if($row['image_name'] != ""): ?>
                            <img src="<?php echo SITEURL; ?>images/food/<?php echo $row['image_name']; ?>" alt="<?php echo $row['title']; ?>">
                        <?php else: ?>
                            <img src="https://via.placeholder.com/130x130?text=<?php echo urlencode($row['title']); ?>" alt="<?php echo $row['title']; ?>">
                        <?php endif; ?>
                        <span class="scroll-food-badge trending">
                            <i class="fas fa-chart-line"></i> #<?php echo rand(1, 5); ?>
                        </span>
                    </div>
                    <div class="scroll-food-content">
                        <div class="scroll-food-header">
                            <h4><?php echo $row['title']; ?></h4>
                            <span class="scroll-food-price">$<?php echo $row['price']; ?></span>
                        </div>
                        <div class="scroll-food-meta">
                            <div class="scroll-meta-item">
                                <i class="fas fa-shopping-bag"></i>
                                <?php echo $row['order_count']; ?> orders
                            </div>
                            <div class="scroll-rating">
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
                        <a href="<?php echo SITEURL; ?>order.php?food_id=<?php echo $row['id']; ?>" class="scroll-order-btn">
                            <i class="fas fa-shopping-cart"></i>
                            Order
                        </a>
                    </div>
                </div>
                <?php 
                    }
                }
                ?>
            </div>
        </section>

        <!-- My Favorites Section -->
        <section class="scroll-section">
            <div class="section-header">
                <div>
                    <h2>
                        <i class="fas fa-heart" style="color: #ff6b6b;"></i>
                        Your Favorites
                    </h2>
                    <p>Dishes you keep coming back to</p>
                </div>
                <div class="scroll-nav">
                    <button class="scroll-nav-btn" onclick="scrollSection('favorites', -200)"><i class="fas fa-chevron-left"></i></button>
                    <button class="scroll-nav-btn" onclick="scrollSection('favorites', 200)"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
            <div class="scroll-container" id="favorites-scroll">
                <?php 
                if(mysqli_num_rows($res_my_favorites) > 0) {
                    while($row = mysqli_fetch_assoc($res_my_favorites)) {
                ?>
                <div class="scroll-food-card">
                    <div class="scroll-food-image">
                        <?php if($row['image_name'] != ""): ?>
                            <img src="<?php echo SITEURL; ?>images/food/<?php echo $row['image_name']; ?>" alt="<?php echo $row['title']; ?>">
                        <?php else: ?>
                            <img src="https://via.placeholder.com/130x130?text=<?php echo urlencode($row['title']); ?>" alt="<?php echo $row['title']; ?>">
                        <?php endif; ?>
                        <span class="scroll-food-badge">
                            <i class="fas fa-heart"></i> <?php echo $row['times_ordered']; ?>x
                        </span>
                    </div>
                    <div class="scroll-food-content">
                        <div class="scroll-food-header">
                            <h4><?php echo $row['title']; ?></h4>
                            <span class="scroll-food-price">$<?php echo $row['price']; ?></span>
                        </div>
                        <div class="scroll-food-meta">
                            <div class="scroll-meta-item">
                                <i class="fas fa-clock"></i>
                                <?php echo rand(15, 30); ?> min
                            </div>
                            <div class="scroll-meta-item">
                                <i class="fas fa-fire"></i>
                                <?php echo rand(300, 600); ?> cal
                            </div>
                        </div>
                        <a href="<?php echo SITEURL; ?>order.php?food_id=<?php echo $row['id']; ?>" class="scroll-order-btn">
                            <i class="fas fa-redo-alt"></i>
                            Reorder
                        </a>
                    </div>
                </div>
                <?php 
                    }
                } else {
                ?>
                <div class="empty-state" style="min-width: 100%;">
                    <div class="empty-state-icon" style="width: 80px; height: 80px;">
                        <i class="fas fa-heart" style="font-size: 40px;"></i>
                    </div>
                    <h3>No favorites yet</h3>
                    <p>Start ordering to see your favorite dishes here!</p>
                </div>
                <?php } ?>
            </div>
        </section>

        <!-- Try Something New Section -->
        <section>
            <div class="section-header">
                <div>
                    <h2>
                        <i class="fas fa-compass"></i>
                        Try Something New
                    </h2>
                    <p>Recommended just for you based on your taste</p>
                </div>
                <a href="#" class="view-all-link">See all <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="try-new-grid">
                <?php 
                if(mysqli_num_rows($res_recommendations) > 0) {
                    while($row = mysqli_fetch_assoc($res_recommendations)) {
                        $rating = rand(40, 50) / 10;
                        $reviews = rand(20, 200);
                ?>
                <div class="try-card">
                    <div class="try-image">
                        <?php if($row['image_name'] != ""): ?>
                            <img src="<?php echo SITEURL; ?>images/food/<?php echo $row['image_name']; ?>" alt="<?php echo $row['title']; ?>">
                        <?php else: ?>
                            <img src="https://via.placeholder.com/300x180?text=<?php echo urlencode($row['title']); ?>" alt="<?php echo $row['title']; ?>">
                        <?php endif; ?>
                        <span class="try-badge">Recommended</span>
                    </div>
                    <div class="try-content">
                        <div class="try-header">
                            <h4><?php echo $row['title']; ?></h4>
                            <span class="try-price">$<?php echo $row['price']; ?></span>
                        </div>
                        <div class="try-description">
                            <?php echo substr($row['description'], 0, 80) . '...'; ?>
                        </div>
                        <div class="try-footer">
                            <div class="try-rating">
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
                            <a href="<?php echo SITEURL; ?>order.php?food_id=<?php echo $row['id']; ?>" class="try-btn">
                                <i class="fas fa-utensils"></i>
                                Try it
                            </a>
                        </div>
                    </div>
                </div>
                <?php 
                    }
                } else {
                ?>
                <div class="empty-state" style="grid-column: 1/-1;">
                    <div class="empty-state-icon">
                        <i class="fas="compass"></i>
                    </div>
                    <h3>No recommendations yet</h3>
                    <p>Try ordering more to get personalized suggestions!</p>
                </div>
                <?php } ?>
            </div>
        </section>

        <!-- Taste Profile -->
        <div class="taste-profile">
            <div class="profile-header">
                <div class="profile-icon">
                    <i class="fas fa-chart-pie"></i>
                </div>
                <div class="profile-text">
                    <h3>Your Taste Profile</h3>
                    <p>Based on your order history, we've identified your preferences</p>
                </div>
            </div>
            <div class="preference-tags">
                <span class="pref-tag active"><i class="fas fa-pizza-slice"></i> Pizza Lover</span>
                <span class="pref-tag"><i class="fas fa-hamburger"></i> Burger Fan</span>
                <span class="pref-tag"><i class="fas fa-fish"></i> Seafood</span>
                <span class="pref-tag"><i class="fas fa-pepper-hot"></i> Spicy</span>
                <span class="pref-tag"><i class="fas fa-seedling"></i> Vegetarian</span>
                <span class="pref-tag"><i class="fas fa-cookie"></i> Desserts</span>
            </div>
        </div>

    </div>
</div>

<script>
    // Scroll functionality for horizontal sections
    function scrollSection(sectionId, amount) {
        const container = document.getElementById(sectionId + '-scroll');
        if(container) {
            container.scrollBy({
                left: amount,
                behavior: 'smooth'
            });
        }
    }

    // Auto-scroll indicators
    function checkScrollButtons() {
        const sections = ['popular', 'favorites'];
        sections.forEach(section => {
            const container = document.getElementById(section + '-scroll');
            if(container) {
                const leftBtn = document.querySelector(`[onclick="scrollSection('${section}', -200)"]`);
                const rightBtn = document.querySelector(`[onclick="scrollSection('${section}', 200)"]`);
                
                if(container.scrollLeft <= 0) {
                    leftBtn?.setAttribute('disabled', 'disabled');
                } else {
                    leftBtn?.removeAttribute('disabled');
                }
                
                if(container.scrollLeft >= container.scrollWidth - container.clientWidth) {
                    rightBtn?.setAttribute('disabled', 'disabled');
                } else {
                    rightBtn?.removeAttribute('disabled');
                }
            }
        });
    }

    // Add scroll event listeners
    document.addEventListener('DOMContentLoaded', function() {
        const sections = ['popular', 'favorites'];
        sections.forEach(section => {
            const container = document.getElementById(section + '-scroll');
            if(container) {
                container.addEventListener('scroll', checkScrollButtons);
            }
        });
        
        // Initial check
        checkScrollButtons();
    });

    // Loading skeleton effect
    document.querySelectorAll('.scroll-food-card, .try-card').forEach(card => {
        card.classList.add('skeleton');
        setTimeout(() => {
            card.classList.remove('skeleton');
        }, 800);
    });

    // Preference tag click
    document.querySelectorAll('.pref-tag').forEach(tag => {
        tag.addEventListener('click', function() {
            this.classList.toggle('active');
        });
    });
</script>

<?php include('partials-front/footer.php'); ?>