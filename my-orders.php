<?php 
ob_start();
include('partials-front/menu.php'); 
?>

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

    /* Lookup Form */
    .lookup-section {
        background: white;
        border-radius: 20px;
        padding: 40px;
        margin-bottom: 40px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
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

    .lookup-title {
        text-align: center;
        margin-bottom: 30px;
    }

    .lookup-title h2 {
        font-size: 28px;
        color: #333;
        margin-bottom: 10px;
    }

    .lookup-title p {
        color: #666;
        font-size: 14px;
    }

    .lookup-form {
        max-width: 500px;
        margin: 0 auto;
    }

    .lookup-group {
        margin-bottom: 20px;
    }

    .lookup-group label {
        display: block;
        color: #333;
        font-weight: 500;
        margin-bottom: 8px;
    }

    .lookup-input {
        width: 100%;
        padding: 15px;
        border: 2px solid #e0e0e0;
        border-radius: 12px;
        font-size: 16px;
        transition: 0.3s;
    }

    .lookup-input:focus {
        outline: none;
        border-color: #667eea;
        box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
    }

    .lookup-btn {
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
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    .lookup-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
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

    .total-amount {
        font-size: 24px;
        font-weight: 700;
        color: #667eea;
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

    /* Empty State */
    .empty-state {
        text-align: center;
        padding: 60px 20px;
        background: white;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        grid-column: 1 / -1;
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

    .clear-search {
        color: #667eea;
        text-decoration: none;
        font-size: 14px;
        display: inline-flex;
        align-items: center;
        gap: 5px;
        margin-top: 15px;
    }

    .clear-search:hover {
        text-decoration: underline;
    }

    @media (max-width: 992px) {
        .main-content {
            margin-left: 0;
        }
    }

    @media (max-width: 768px) {
        .page-header h1 {
            font-size: 32px;
        }
        .lookup-section {
            padding: 25px;
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
        .orders-grid {
            grid-template-columns: 1fr;
        }
        .order-details {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="main-content">
    <div class="container">

        <div class="page-header">
            <h1>
                <i class="fas fa-clipboard-list" style="color: #667eea; margin-right: 15px;"></i>
                My Orders
            </h1>
            <p>Track and manage all your food orders in one place</p>
        </div>

        <?php
        // Handle order lookup
        $customer_identifier = '';
        $lookup_performed = false;
        
        if(isset($_POST['lookup_email']) || isset($_GET['email'])) {
            $lookup_performed = true;
            if(isset($_POST['lookup_email'])) {
                $customer_identifier = mysqli_real_escape_string($conn, $_POST['lookup_email']);
                $_SESSION['order_lookup_email'] = $customer_identifier;
            } elseif(isset($_GET['email'])) {
                $customer_identifier = mysqli_real_escape_string($conn, $_GET['email']);
                $_SESSION['order_lookup_email'] = $customer_identifier;
            } elseif(isset($_SESSION['order_lookup_email'])) {
                $customer_identifier = $_SESSION['order_lookup_email'];
            }
        } elseif(isset($_SESSION['order_lookup_email']) && !isset($_POST['clear'])) {
            $customer_identifier = $_SESSION['order_lookup_email'];
            $lookup_performed = true;
        }
        
        // Clear lookup
        if(isset($_POST['clear'])) {
            unset($_SESSION['order_lookup_email']);
            $customer_identifier = '';
            $lookup_performed = false;
        }
        ?>

        <!-- Order Lookup Form -->
        <div class="lookup-section">
            <div class="lookup-title">
                <h2>Find Your Orders</h2>
                <p>Enter your email address or phone number to view your order history</p>
            </div>
            
            <form method="POST" class="lookup-form">
                <div class="lookup-group">
                    <label><i class="fas fa-envelope"></i> Email Address</label>
                    <input type="email" name="lookup_email" class="lookup-input" 
                           placeholder="Enter the email you used for ordering" 
                           value="<?php echo htmlspecialchars($customer_identifier); ?>" required>
                </div>
                <button type="submit" class="lookup-btn">
                    <i class="fas fa-search"></i> Find My Orders
                </button>
                
                <?php if($lookup_performed && !empty($customer_identifier)): ?>
                <div style="text-align: center; margin-top: 15px;">
                    <form method="POST" style="display: inline;">
                        <button type="submit" name="clear" class="clear-search">
                            <i class="fas fa-times-circle"></i> Clear and Search Again
                        </button>
                    </form>
                </div>
                <?php endif; ?>
            </form>
        </div>

        <?php if($lookup_performed && !empty($customer_identifier)): 
            // Get orders for this customer (by email)
            $sql_total = "SELECT COUNT(*) as total, SUM(total) as total_spent FROM tbl_order WHERE customer_email='$customer_identifier'";
            $res_total = mysqli_query($conn, $sql_total);
            $row_total = mysqli_fetch_assoc($res_total);
            
            $sql_pending = "SELECT COUNT(*) as pending FROM tbl_order WHERE customer_email='$customer_identifier' AND status='Ordered'";
            $res_pending = mysqli_query($conn, $sql_pending);
            $row_pending = mysqli_fetch_assoc($res_pending);
            
            $sql_delivered = "SELECT COUNT(*) as delivered FROM tbl_order WHERE customer_email='$customer_identifier' AND status='Delivered'";
            $res_delivered = mysqli_query($conn, $sql_delivered);
            $row_delivered = mysqli_fetch_assoc($res_delivered);
            
            $total_orders = $row_total['total'] ?? 0;
        ?>

        <?php if($total_orders > 0): ?>
        <!-- Statistics Cards -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-shopping-bag"></i>
                </div>
                <div class="stat-info">
                    <h3><?php echo $total_orders; ?></h3>
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
                <a href="?email=<?php echo urlencode($customer_identifier); ?>&status=all" class="filter-tab <?php echo (!isset($_GET['status']) || $_GET['status'] == 'all') ? 'active' : ''; ?>">
                    <i class="fas fa-list"></i> All Orders
                </a>
                <a href="?email=<?php echo urlencode($customer_identifier); ?>&status=ordered" class="filter-tab <?php echo (isset($_GET['status']) && $_GET['status'] == 'ordered') ? 'active' : ''; ?>">
                    <i class="fas fa-clock"></i> Pending
                </a>
                <a href="?email=<?php echo urlencode($customer_identifier); ?>&status=ondelivery" class="filter-tab <?php echo (isset($_GET['status']) && $_GET['status'] == 'ondelivery') ? 'active' : ''; ?>">
                    <i class="fas fa-truck"></i> On Delivery
                </a>
                <a href="?email=<?php echo urlencode($customer_identifier); ?>&status=delivered" class="filter-tab <?php echo (isset($_GET['status']) && $_GET['status'] == 'delivered') ? 'active' : ''; ?>">
                    <i class="fas fa-check-circle"></i> Delivered
                </a>
                <a href="?email=<?php echo urlencode($customer_identifier); ?>&status=cancelled" class="filter-tab <?php echo (isset($_GET['status']) && $_GET['status'] == 'cancelled') ? 'active' : ''; ?>">
                    <i class="fas fa-times-circle"></i> Cancelled
                </a>
            </div>
            
            <form method="GET" class="search-box">
                <input type="hidden" name="email" value="<?php echo htmlspecialchars($customer_identifier); ?>">
                <input type="text" name="search" placeholder="Search by food or order ID..." value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
                <button type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>

        <!-- Orders Grid -->
        <div class="orders-grid">
            <?php
            // Build SQL query
            $sql = "SELECT * FROM tbl_order WHERE customer_email='$customer_identifier'";
            
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
                    
                    $date = new DateTime($order_date);
                    $formatted_date = $date->format('M d, Y');
                    $formatted_time = $date->format('h:i A');
                    
                    $sql_img = "SELECT image_name FROM tbl_food WHERE title='$food' LIMIT 1";
                    $res_img = mysqli_query($conn, $sql_img);
                    $row_img = mysqli_fetch_assoc($res_img);
                    $image_name = $row_img['image_name'] ?? '';
                    
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
                        <span>Total Amount:</span>
                        <span class="total-amount">$<?php echo number_format($total, 2); ?></span>
                    </div>

                    <div class="order-actions">
                        <a href="order.php?food_id=<?php echo $id; ?>" class="btn-action btn-reorder">
                            <i class="fas fa-redo-alt"></i> Reorder
                        </a>
                    </div>
                </div>
            </div>

            <?php 
                }
            } else {
            ?>
            <div class="empty-state">
                <div class="empty-state-icon">
                    <i class="fas fa-search"></i>
                </div>
                <h2>No Orders Found</h2>
                <p>We couldn't find any orders for <?php echo htmlspecialchars($customer_identifier); ?></p>
                <a href="<?php echo SITEURL; ?>" class="btn-explore">
                    <i class="fas fa-utensils"></i> Start Ordering
                </a>
            </div>
            <?php } ?>
        </div>

        <?php else: ?>
        <!-- No orders for this email -->
        <div class="empty-state" style="margin-top: 20px;">
            <div class="empty-state-icon">
                <i class="fas fa-search"></i>
            </div>
            <h2>No Orders Found</h2>
            <p>We couldn't find any orders for <?php echo htmlspecialchars($customer_identifier); ?></p>
            <a href="<?php echo SITEURL; ?>" class="btn-explore">
                <i class="fas fa-utensils"></i> Start Ordering
            </a>
        </div>
        <?php endif; ?>

        <?php elseif($lookup_performed && empty($customer_identifier)): ?>
        <div class="empty-state" style="margin-top: 20px;">
            <div class="empty-state-icon">
                <i class="fas fa-envelope"></i>
            </div>
            <h2>Enter Your Email</h2>
            <p>Please enter your email address to view your orders</p>
        </div>
        <?php endif; ?>

    </div>
</div>

<script>
    // Search functionality with debounce
    let searchTimeout;
    const searchInput = document.querySelector('.search-box input');
    if(searchInput) {
        searchInput.addEventListener('input', function() {
            clearTimeout(searchTimeout);
            searchTimeout = setTimeout(() => {
                this.closest('form').submit();
            }, 500);
        });
    }
</script>

<?php include('partials-front/footer.php'); 
ob_end_flush();
?>