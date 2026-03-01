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

    /* Page Header */
    .page-header {
        text-align: center;
        margin-bottom: 40px;
        position: relative;
    }

    .page-header h1 {
        font-size: 42px;
        color: #333;
        margin-bottom: 15px;
        position: relative;
        display: inline-block;
    }

    .page-header h1::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 4px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 2px;
    }

    .page-header p {
        color: #666;
        font-size: 18px;
        max-width: 600px;
        margin: 0 auto;
    }

    /* Stats Cards */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 25px;
        margin-bottom: 40px;
    }

    .stat-card {
        background: white;
        border-radius: 20px;
        padding: 25px;
        display: flex;
        align-items: center;
        gap: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        transition: 0.3s;
        position: relative;
        overflow: hidden;
    }

    .stat-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 4px;
        height: 100%;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }

    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(102, 126, 234, 0.15);
    }

    .stat-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .stat-icon i {
        font-size: 30px;
        color: white;
    }

    .stat-info h3 {
        font-size: 28px;
        color: #333;
        margin-bottom: 5px;
    }

    .stat-info p {
        color: #666;
        font-size: 14px;
    }

    /* Filter Section */
    .filter-section {
        background: white;
        border-radius: 15px;
        padding: 20px;
        margin-bottom: 30px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 20px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
    }

    .filter-tabs {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }

    .filter-tab {
        padding: 10px 20px;
        border-radius: 30px;
        background: #f0f0f0;
        color: #666;
        text-decoration: none;
        font-size: 14px;
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: 0.3s;
        border: none;
        cursor: pointer;
    }

    .filter-tab:hover,
    .filter-tab.active {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }

    .filter-tab i {
        font-size: 14px;
    }

    .search-box {
        display: flex;
        align-items: center;
        gap: 10px;
        background: #f0f0f0;
        padding: 5px;
        border-radius: 30px;
    }

    .search-box input {
        border: none;
        background: transparent;
        padding: 8px 15px;
        outline: none;
        width: 250px;
    }

    .search-box button {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
        color: white;
        padding: 8px 20px;
        border-radius: 30px;
        cursor: pointer;
        transition: 0.3s;
    }

    .search-box button:hover {
        transform: scale(1.05);
    }

    /* Orders Grid */
    .orders-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
        gap: 25px;
        margin-bottom: 40px;
    }

    .order-card {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        transition: 0.3s;
        position: relative;
        animation: fadeInUp 0.6s ease;
    }

    .order-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(102, 126, 234, 0.2);
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

    .order-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        padding: 20px;
        color: white;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .order-id {
        font-size: 18px;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .order-id i {
        font-size: 20px;
    }

    .order-date {
        font-size: 13px;
        opacity: 0.9;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .order-content {
        padding: 20px;
    }

    .food-item {
        display: flex;
        gap: 15px;
        margin-bottom: 20px;
        padding-bottom: 20px;
        border-bottom: 1px solid #f0f0f0;
    }

    .food-image {
        width: 80px;
        height: 80px;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .food-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .food-details {
        flex: 1;
    }

    .food-details h4 {
        font-size: 18px;
        color: #333;
        margin-bottom: 5px;
    }

    .food-price {
        color: #667eea;
        font-weight: 600;
        font-size: 16px;
    }

    .order-details {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
        margin-bottom: 20px;
    }

    .detail-item {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .detail-icon {
        width: 35px;
        height: 35px;
        background: #f0f0f0;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #667eea;
    }

    .detail-text {
        display: flex;
        flex-direction: column;
    }

    .detail-label {
        font-size: 11px;
        color: #999;
        text-transform: uppercase;
    }

    .detail-value {
        font-size: 14px;
        color: #333;
        font-weight: 600;
    }

    /* Status Badges */
    .status-badge {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        padding: 8px 15px;
        border-radius: 30px;
        font-size: 13px;
        font-weight: 600;
        width: fit-content;
    }

    .status-ordered {
        background: #cce5ff;
        color: #004085;
    }

    .status-ondelivery {
        background: #fff3cd;
        color: #856404;
    }

    .status-delivered {
        background: #d4edda;
        color: #155724;
    }

    .status-cancelled {
        background: #f8d7da;
        color: #721c24;
    }

    .order-total {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 0;
        border-top: 2px dashed #f0f0f0;
        margin-top: 15px;
    }

    .total-label {
        color: #666;
        font-size: 14px;
    }

    .total-amount {
        font-size: 24px;
        font-weight: 700;
        color: #333;
    }

    .order-actions {
        display: flex;
        gap: 10px;
        margin-top: 15px;
    }

    .btn-action {
        flex: 1;
        padding: 12px;
        border: none;
        border-radius: 10px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        text-decoration: none;
    }

    .btn-track {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }

    .btn-track:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
    }

    .btn-reorder {
        background: #f0f0f0;
        color: #666;
    }

    .btn-reorder:hover {
        background: #e0e0e0;
        transform: translateY(-2px);
    }

    /* Timeline */
    .order-timeline {
        padding: 20px;
        background: #f8f9ff;
        border-radius: 15px;
        margin: 20px 0;
    }

    .timeline-item {
        display: flex;
        gap: 15px;
        position: relative;
        padding-bottom: 20px;
    }

    .timeline-item:last-child {
        padding-bottom: 0;
    }

    .timeline-item:not(:last-child)::before {
        content: '';
        position: absolute;
        left: 17px;
        top: 30px;
        bottom: 0;
        width: 2px;
        background: #e0e0e0;
    }

    .timeline-dot {
        width: 35px;
        height: 35px;
        background: white;
        border: 2px solid #667eea;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #667eea;
        font-size: 14px;
        z-index: 1;
    }

    .timeline-dot.completed {
        background: #667eea;
        color: white;
    }

    .timeline-content {
        flex: 1;
    }

    .timeline-content h4 {
        font-size: 16px;
        color: #333;
        margin-bottom: 5px;
    }

    .timeline-content p {
        color: #666;
        font-size: 13px;
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
        margin: 0 auto 30px;
    }

    .empty-state-icon i {
        font-size: 60px;
        color: white;
    }

    .empty-state h2 {
        font-size: 28px;
        color: #333;
        margin-bottom: 15px;
    }

    .empty-state p {
        color: #666;
        font-size: 16px;
        margin-bottom: 30px;
    }

    .btn-explore {
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

    .btn-explore:hover {
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

    .page-item {
        list-style: none;
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
    .page-item.active .page-link {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .main-content {
            margin-left: 0;
        }

        .page-header h1 {
            font-size: 32px;
        }

        .stats-grid {
            grid-template-columns: 1fr;
        }

        .filter-section {
            flex-direction: column;
            align-items: stretch;
        }

        .search-box {
            width: 100%;
        }

        .search-box input {
            width: 100%;
        }

        .orders-grid {
            grid-template-columns: 1fr;
        }

        .order-details {
            grid-template-columns: 1fr;
        }
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

    /* Tooltip */
    .tooltip {
        position: relative;
        display: inline-block;
    }

    .tooltip .tooltiptext {
        visibility: hidden;
        width: 120px;
        background-color: #333;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px;
        position: absolute;
        z-index: 1;
        bottom: 125%;
        left: 50%;
        margin-left: -60px;
        opacity: 0;
        transition: opacity 0.3s;
        font-size: 12px;
    }

    .tooltip:hover .tooltiptext {
        visibility: visible;
        opacity: 1;
    }
</style>

<div class="main-content" id="mainContent">
    <div class="container">

        <!-- Page Header -->
        <div class="page-header">
            <h1>
                <i class="fas fa-clipboard-list" style="color: #667eea; margin-right: 15px;"></i>
                My Orders
            </h1>
            <p>Track and manage all your food orders in one place</p>
        </div>

        <?php
        // Get customer email from session (you need to implement login system)
        // For demo, we'll use a sample email
        $customer_email = isset($_SESSION['customer_email']) ? $_SESSION['customer_email'] : 'john@example.com';
        
        // Statistics Queries
        $sql_total = "SELECT COUNT(*) as total, SUM(total) as total_spent FROM tbl_order WHERE customer_email='$customer_email'";
        $res_total = mysqli_query($conn, $sql_total);
        $row_total = mysqli_fetch_assoc($res_total);
        
        $sql_pending = "SELECT COUNT(*) as pending FROM tbl_order WHERE customer_email='$customer_email' AND status='Ordered'";
        $res_pending = mysqli_query($conn, $sql_pending);
        $row_pending = mysqli_fetch_assoc($res_pending);
        
        $sql_delivered = "SELECT COUNT(*) as delivered FROM tbl_order WHERE customer_email='$customer_email' AND status='Delivered'";
        $res_delivered = mysqli_query($conn, $sql_delivered);
        $row_delivered = mysqli_fetch_assoc($res_delivered);
        ?>

        <!-- Statistics Cards -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-shopping-bag"></i>
                </div>
                <div class="stat-info">
                    <h3><?php echo $row_total['total'] ?? 0; ?></h3>
                    <p>Total Orders</p>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="stat-info">
                    <h3><?php echo $row_pending['pending'] ?? 0; ?></h3>
                    <p>Pending Orders</p>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="stat-info">
                    <h3><?php echo $row_delivered['delivered'] ?? 0; ?></h3>
                    <p>Delivered</p>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="stat-info">
                    <h3>$<?php echo number_format($row_total['total_spent'] ?? 0, 2); ?></h3>
                    <p>Total Spent</p>
                </div>
            </div>
        </div>

        <!-- Filter Section -->
        <div class="filter-section">
            <div class="filter-tabs">
                <a href="?status=all" class="filter-tab <?php echo (!isset($_GET['status']) || $_GET['status'] == 'all') ? 'active' : ''; ?>">
                    <i class="fas fa-list"></i>
                    All Orders
                </a>
                <a href="?status=ordered" class="filter-tab <?php echo (isset($_GET['status']) && $_GET['status'] == 'ordered') ? 'active' : ''; ?>">
                    <i class="fas fa-clock"></i>
                    Pending
                </a>
                <a href="?status=ondelivery" class="filter-tab <?php echo (isset($_GET['status']) && $_GET['status'] == 'ondelivery') ? 'active' : ''; ?>">
                    <i class="fas fa-truck"></i>
                    On Delivery
                </a>
                <a href="?status=delivered" class="filter-tab <?php echo (isset($_GET['status']) && $_GET['status'] == 'delivered') ? 'active' : ''; ?>">
                    <i class="fas fa-check-circle"></i>
                    Delivered
                </a>
                <a href="?status=cancelled" class="filter-tab <?php echo (isset($_GET['status']) && $_GET['status'] == 'cancelled') ? 'active' : ''; ?>">
                    <i class="fas fa-times-circle"></i>
                    Cancelled
                </a>
            </div>
            
            <form method="GET" class="search-box">
                <input type="text" name="search" placeholder="Search by food or order ID..." value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
                <button type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>

        <!-- Orders Grid -->
        <div class="orders-grid">
            <?php
            // Build SQL query based on filters
            $sql = "SELECT * FROM tbl_order WHERE customer_email='$customer_email'";
            
            if(isset($_GET['status']) && $_GET['status'] != 'all') {
                $status = mysqli_real_escape_string($conn, $_GET['status']);
                if($status == 'ordered') {
                    $sql .= " AND status='Ordered'";
                } elseif($status == 'ondelivery') {
                    $sql .= " AND status='On Delivery'";
                } elseif($status == 'delivered') {
                    $sql .= " AND status='Delivered'";
                } elseif($status == 'cancelled') {
                    $sql .= " AND status='Cancelled'";
                }
            }
            
            if(isset($_GET['search']) && !empty($_GET['search'])) {
                $search = mysqli_real_escape_string($conn, $_GET['search']);
                $sql .= " AND (food LIKE '%$search%' OR id LIKE '%$search%')";
            }
            
            $sql .= " ORDER BY id DESC";
            $res = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($res);

            if($count > 0) {
                while($row = mysqli_fetch_assoc($res)) {
                    $id = $row['id'];
                    $food = $row['food'];
                    $price = $row['price'];
                    $qty = $row['qty'];
                    $total = $row['total'];
                    $order_date = $row['order_date'];
                    $status = $row['status'];
                    $customer_address = $row['customer_address'];
                    
                    // Format date
                    $date = new DateTime($order_date);
                    $formatted_date = $date->format('M d, Y');
                    $formatted_time = $date->format('h:i A');
                    
                    // Get food image
                    $sql_img = "SELECT image_name FROM tbl_food WHERE title='$food' LIMIT 1";
                    $res_img = mysqli_query($conn, $sql_img);
                    $row_img = mysqli_fetch_assoc($res_img);
                    $image_name = $row_img['image_name'] ?? '';
                    
                    // Determine status class
                    $status_class = '';
                    $status_icon = '';
                    switch($status) {
                        case 'Ordered':
                            $status_class = 'status-ordered';
                            $status_icon = 'fa-clock';
                            break;
                        case 'On Delivery':
                            $status_class = 'status-ondelivery';
                            $status_icon = 'fa-truck';
                            break;
                        case 'Delivered':
                            $status_class = 'status-delivered';
                            $status_icon = 'fa-check-circle';
                            break;
                        case 'Cancelled':
                            $status_class = 'status-cancelled';
                            $status_icon = 'fa-times-circle';
                            break;
                    }
            ?>

            <div class="order-card">
                <div class="order-header">
                    <div class="order-id">
                        <i class="fas fa-receipt"></i>
                        #ORD-<?php echo str_pad($id, 4, '0', STR_PAD_LEFT); ?>
                    </div>
                    <div class="order-date">
                        <i class="far fa-calendar"></i>
                        <?php echo $formatted_date; ?>
                    </div>
                </div>

                <div class="order-content">
                    <div class="food-item">
                        <div class="food-image">
                            <?php if($image_name != ""): ?>
                                <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="<?php echo $food; ?>">
                            <?php else: ?>
                                <img src="https://via.placeholder.com/80x80?text=Food" alt="Food">
                            <?php endif; ?>
                        </div>
                        <div class="food-details">
                            <h4><?php echo $food; ?></h4>
                            <div class="food-price">$<?php echo $price; ?> x <?php echo $qty; ?></div>
                        </div>
                    </div>

                    <div class="order-details">
                        <div class="detail-item">
                            <div class="detail-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="detail-text">
                                <span class="detail-label">Order Time</span>
                                <span class="detail-value"><?php echo $formatted_time; ?></span>
                            </div>
                        </div>

                        <div class="detail-item">
                            <div class="detail-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="detail-text">
                                <span class="detail-label">Delivery To</span>
                                <span class="detail-value"><?php echo substr($customer_address, 0, 20) . '...'; ?></span>
                            </div>
                        </div>
                    </div>

                    <div class="status-badge <?php echo $status_class; ?>">
                        <i class="fas <?php echo $status_icon; ?>"></i>
                        <?php echo $status; ?>
                    </div>

                    <div class="order-total">
                        <span class="total-label">Total Amount</span>
                        <span class="total-amount">$<?php echo number_format($total, 2); ?></span>
                    </div>

                    <div class="order-actions">
                        <?php if($status != 'Delivered' && $status != 'Cancelled'): ?>
                        <a href="track-order.php?id=<?php echo $id; ?>" class="btn-action btn-track tooltip">
                            <i class="fas fa-map-marker-alt"></i>
                            Track Order
                            <span class="tooltiptext">Track your delivery</span>
                        </a>
                        <?php endif; ?>
                        
                        <a href="order.php?food_id=<?php echo $id; ?>" class="btn-action btn-reorder tooltip">
                            <i class="fas fa-redo-alt"></i>
                            Reorder
                            <span class="tooltiptext">Order again</span>
                        </a>
                    </div>
                </div>
            </div>

            <?php 
                }
            } else {
            ?>
            <!-- Empty State -->
            <div class="empty-state" style="grid-column: 1 / -1;">
                <div class="empty-state-icon">
                    <i class="fas fa-shopping-bag"></i>
                </div>
                <h2>No Orders Yet</h2>
                <p>Looks like you haven't placed any orders yet. Start exploring our delicious menu!</p>
                <a href="<?php echo SITEURL; ?>" class="btn-explore">
                    <i class="fas fa-utensils"></i>
                    Explore Menu
                </a>
            </div>
            <?php } ?>
        </div>

        <?php if($count > 0): ?>
        <!-- Pagination -->
        <div class="pagination">
            <ul style="display: flex; gap: 10px; list-style: none;">
                <li class="page-item"><a href="#" class="page-link"><i class="fas fa-chevron-left"></i></a></li>
                <li class="page-item active"><a href="#" class="page-link">1</a></li>
                <li class="page-item"><a href="#" class="page-link">2</a></li>
                <li class="page-item"><a href="#" class="page-link">3</a></li>
                <li class="page-item"><a href="#" class="page-link"><i class="fas fa-chevron-right"></i></a></li>
            </ul>
        </div>
        <?php endif; ?>

        <!-- Recent Activity Timeline (Optional) -->
        <?php if($count > 0): ?>
        <div style="margin-top: 60px;">
            <h3 style="color: #333; margin-bottom: 20px; display: flex; align-items: center; gap: 10px;">
                <i class="fas fa-history" style="color: #667eea;"></i>
                Recent Activity
            </h3>
            <div class="order-timeline">
                <?php
                $sql_recent = "SELECT * FROM tbl_order WHERE customer_email='$customer_email' ORDER BY id DESC LIMIT 3";
                $res_recent = mysqli_query($conn, $sql_recent);
                while($row = mysqli_fetch_assoc($res_recent)) {
                    $date = new DateTime($row['order_date']);
                ?>
                <div class="timeline-item">
                    <div class="timeline-dot <?php echo ($row['status'] == 'Delivered') ? 'completed' : ''; ?>">
                        <i class="fas <?php echo ($row['status'] == 'Delivered') ? 'fa-check' : 'fa-clock'; ?>"></i>
                    </div>
                    <div class="timeline-content">
                        <h4>Order #<?php echo str_pad($row['id'], 4, '0', STR_PAD_LEFT); ?></h4>
                        <p><?php echo $row['food']; ?> - $<?php echo $row['total']; ?></p>
                        <p style="color: #999; font-size: 12px;"><?php echo $date->format('M d, Y h:i A'); ?></p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <?php endif; ?>

    </div>
</div>

<script>
    // Search functionality with debounce
    let searchTimeout;
    document.querySelector('.search-box input').addEventListener('input', function() {
        clearTimeout(searchTimeout);
        searchTimeout = setTimeout(() => {
            this.closest('form').submit();
        }, 500);
    });

    // Add loading skeleton effect
    document.querySelectorAll('.order-card').forEach(card => {
        card.classList.add('skeleton');
        setTimeout(() => {
            card.classList.remove('skeleton');
        }, 1000);
    });

    // Tooltip initialization
    document.querySelectorAll('.tooltip').forEach(element => {
        element.addEventListener('mouseenter', function(e) {
            const tooltip = this.querySelector('.tooltiptext');
            if(tooltip) {
                tooltip.style.visibility = 'visible';
                tooltip.style.opacity = '1';
            }
        });
        
        element.addEventListener('mouseleave', function(e) {
            const tooltip = this.querySelector('.tooltiptext');
            if(tooltip) {
                tooltip.style.visibility = 'hidden';
                tooltip.style.opacity = '0';
            }
        });
    });
</script>

<?php include('partials-front/footer.php'); ?>