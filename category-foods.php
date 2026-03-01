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

    /* Category Hero Section */
    .category-hero {
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

    .category-hero::before {
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

    .category-hero-content {
        position: relative;
        z-index: 1;
        text-align: center;
        color: white;
    }

    .category-hero-content h1 {
        font-size: 48px;
        font-weight: 700;
        margin-bottom: 15px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
    }

    .category-hero-content h1 i {
        margin-right: 15px;
        color: #ffd93d;
    }

    .category-stats {
        margin-top: 20px;
        font-size: 18px;
        opacity: 0.9;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 30px;
    }

    .category-stats span {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .category-stats i {
        color: #ffd93d;
    }

    /* Category Navigation */
    .category-nav {
        background: white;
        border-radius: 15px;
        padding: 20px;
        margin-bottom: 30px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 20px;
    }

    .category-links {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
    }

    .category-link {
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
    }

    .category-link:hover,
    .category-link.active {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }

    .category-link i {
        font-size: 14px;
    }

    .filter-options {
        display: flex;
        gap: 15px;
        align-items: center;
    }

    .filter-select {
        padding: 10px 20px;
        border: 2px solid #f0f0f0;
        border-radius: 30px;
        outline: none;
        cursor: pointer;
        transition: 0.3s;
        background: white;
        color: #333;
    }

    .filter-select:hover,
    .filter-select:focus {
        border-color: #667eea;
    }

    /* Food Grid */
    .food-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
        gap: 30px;
        margin: 40px 0;
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

    .food-header h3 {
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
        flex-wrap: wrap;
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

    /* Category Info Card */
    .category-info {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 15px;
        padding: 25px;
        margin: 40px 0;
        color: white;
        position: relative;
        overflow: hidden;
    }

    .category-info::before {
        content: '';
        position: absolute;
        top: -50px;
        right: -50px;
        width: 200px;
        height: 200px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
    }

    .category-info-content {
        position: relative;
        z-index: 1;
        display: flex;
        align-items: center;
        gap: 30px;
        flex-wrap: wrap;
    }

    .category-info-icon {
        width: 80px;
        height: 80px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 40px;
    }

    .category-info-text {
        flex: 1;
    }

    .category-info-text h4 {
        font-size: 20px;
        margin-bottom: 10px;
    }

    .category-info-text p {
        opacity: 0.9;
        font-size: 14px;
        line-height: 1.6;
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
    }

    .explore-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 15px 40px;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        transition: 0.3s;
    }

    .explore-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
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

        .category-hero-content h1 {
            font-size: 36px;
        }
    }

    @media (max-width: 768px) {
        .category-hero {
            padding: 40px 20px;
        }

        .category-hero-content h1 {
            font-size: 28px;
        }

        .category-stats {
            flex-direction: column;
            gap: 10px;
        }

        .category-nav {
            flex-direction: column;
            align-items: flex-start;
        }

        .category-links {
            width: 100%;
            overflow-x: auto;
            padding-bottom: 10px;
        }

        .filter-options {
            width: 100%;
        }

        .filter-select {
            width: 100%;
        }

        .food-grid {
            grid-template-columns: 1fr;
        }

        .category-info-content {
            flex-direction: column;
            text-align: center;
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

<?php 
    //Check whether id is passed or not
    if(isset($_GET['category_id']))
    {
        $category_id = $_GET['category_id'];
        
        // Get the Category Title and Details
        $sql = "SELECT * FROM tbl_category WHERE id=$category_id";
        $res = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($res);
        $category_title = $row['title'];
        $category_image = $row['image_name'];
        $category_active = $row['active'];
        $category_featured = $row['featured'];
    }
    else
    {
        header('location:'.SITEURL);
    }
?>

<div class="main-content" id="mainContent">
    <div class="container">

        <!-- Category Hero Section -->
        <section class="category-hero">
            <div class="category-hero-content">
                <h1>
                    <i class="fas fa-utensils"></i>
                    <?php echo $category_title; ?>
                </h1>
                
                <?php
                // Get statistics for this category
                $sql_count = "SELECT COUNT(*) as total, AVG(price) as avg_price FROM tbl_food WHERE category_id=$category_id";
                $res_count = mysqli_query($conn, $sql_count);
                $row_count = mysqli_fetch_assoc($res_count);
                $total_items = $row_count['total'];
                $avg_price = round($row_count['avg_price'], 2);
                ?>
                
                <div class="category-stats">
                    <span>
                        <i class="fas fa-hamburger"></i>
                        <?php echo $total_items; ?> Items
                    </span>
                    <span>
                        <i class="fas fa-dollar-sign"></i>
                        Avg $<?php echo $avg_price; ?>
                    </span>
                    <?php if($category_featured == 'Yes'): ?>
                    <span>
                        <i class="fas fa-star"></i>
                        Featured Category
                    </span>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <!-- Category Navigation -->
        <?php
        // Get all categories for navigation
        $sql_cats = "SELECT * FROM tbl_category WHERE active='Yes' ORDER BY title ASC LIMIT 5";
        $res_cats = mysqli_query($conn, $sql_cats);
        if(mysqli_num_rows($res_cats) > 0):
        ?>
        <div class="category-nav">
            <div class="category-links">
                <a href="<?php echo SITEURL; ?>categories.php" class="category-link">
                    <i class="fas fa-th-large"></i>
                    All Categories
                </a>
                <?php while($cat = mysqli_fetch_assoc($res_cats)): ?>
                <a href="<?php echo SITEURL; ?>category-foods.php?category_id=<?php echo $cat['id']; ?>" 
                   class="category-link <?php echo ($cat['id'] == $category_id) ? 'active' : ''; ?>">
                    <?php if($cat['image_name'] != ""): ?>
                    <img src="<?php echo SITEURL; ?>images/category/<?php echo $cat['image_name']; ?>" 
                         style="width: 20px; height: 20px; border-radius: 50%; object-fit: cover;">
                    <?php else: ?>
                    <i class="fas fa-tag"></i>
                    <?php endif; ?>
                    <?php echo $cat['title']; ?>
                </a>
                <?php endwhile; ?>
            </div>
            <div class="filter-options">
                <select class="filter-select" onchange="filterItems(this.value)">
                    <option value="all">All Items</option>
                    <option value="price_low">Price: Low to High</option>
                    <option value="price_high">Price: High to Low</option>
                    <option value="name">Name: A to Z</option>
                    <option value="popular">Most Popular</option>
                </select>
            </div>
        </div>
        <?php endif; ?>

        <!-- Food Grid -->
        <div class="food-grid" id="foodGrid">
            <?php 
                $sql2 = "SELECT * FROM tbl_food WHERE category_id=$category_id AND active='Yes'";
                $res2 = mysqli_query($conn, $sql2);
                $count2 = mysqli_num_rows($res2);

                if($count2 > 0) {
                    while($row2 = mysqli_fetch_assoc($res2)) {
                        $id = $row2['id'];
                        $title = $row2['title'];
                        $price = $row2['price'];
                        $description = $row2['description'];
                        $image_name = $row2['image_name'];
                        
                        // Generate random rating and reviews (in real app, these would come from database)
                        $rating = rand(35, 50) / 10;
                        $reviews = rand(10, 500);
                        $prep_time = rand(15, 45);
                        $calories = rand(300, 800);
            ?>

            <div class="food-card" data-price="<?php echo $price; ?>" data-name="<?php echo $title; ?>">
                <div class="food-image-wrapper">
                    <?php if($image_name != ""): ?>
                        <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="<?php echo $title; ?>" class="food-image">
                    <?php else: ?>
                        <img src="https://via.placeholder.com/400x300?text=<?php echo urlencode($title); ?>" alt="<?php echo $title; ?>" class="food-image">
                    <?php endif; ?>
                    
                    <?php if($row2['featured'] == 'Yes'): ?>
                    <span class="food-badge">Featured</span>
                    <?php endif; ?>
                </div>

                <div class="food-content">
                    <div class="food-header">
                        <h3><?php echo $title; ?></h3>
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
                    <i class="fas fa-utensils"></i>
                </div>
                <h3>No Items Available</h3>
                <p>We're sorry, but there are no food items available in this category at the moment.</p>
                <a href="<?php echo SITEURL; ?>" class="explore-btn">
                    <i class="fas fa-compass"></i>
                    Explore Other Categories
                </a>
            </div>

            <?php } ?>
        </div>

        <?php if($count2 > 6): ?>
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

        <?php if($count2 > 0): ?>
        <!-- Category Information Card -->
        <div class="category-info">
            <div class="category-info-content">
                <div class="category-info-icon">
                    <i class="fas fa-info-circle"></i>
                </div>
                <div class="category-info-text">
                    <h4>About <?php echo $category_title; ?></h4>
                    <p>Discover our delicious selection of <?php echo strtolower($category_title); ?> dishes. 
                       All items are prepared fresh with high-quality ingredients. 
                       <?php echo $total_items; ?> items available with average price of $<?php echo $avg_price; ?>.</p>
                </div>
                <?php if($category_image != ""): ?>
                <img src="<?php echo SITEURL; ?>images/category/<?php echo $category_image; ?>" 
                     style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover; border: 3px solid white;">
                <?php endif; ?>
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
        
        switch(filterBy) {
            case 'price_low':
                cards.sort((a, b) => parseFloat(a.dataset.price) - parseFloat(b.dataset.price));
                break;
            case 'price_high':
                cards.sort((a, b) => parseFloat(b.dataset.price) - parseFloat(a.dataset.price));
                break;
            case 'name':
                cards.sort((a, b) => a.dataset.name.localeCompare(b.dataset.name));
                break;
            case 'popular':
                // In a real app, you'd sort by popularity metrics
                cards.sort(() => Math.random() - 0.5); // Random for demo
                break;
            default:
                return;
        }
        
        // Reorder cards
        cards.forEach(card => grid.appendChild(card));
        
        // Add animation to reordered cards
        cards.forEach((card, index) => {
            card.style.animation = 'none';
            card.offsetHeight; // Trigger reflow
            card.style.animation = `fadeInUp 0.6s ease ${index * 0.1}s`;
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
                img.src = img.src; // Trigger load
                img.classList.add('loaded');
                imageObserver.unobserve(img);
            }
        });
    });

    images.forEach(img => imageObserver.observe(img));
</script>

<?php include('partials-front/footer.php'); ?>