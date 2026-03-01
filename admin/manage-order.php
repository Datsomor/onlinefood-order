<?php include('partials/menu.php'); ?>

<style>
    /* Main Content Styling */
    .main-content {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        min-height: 100vh;
        padding: 30px;
    }

    .order-wrapper {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    }

    /* Header Section */
    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
        padding-bottom: 20px;
        border-bottom: 2px solid #f0f0f0;
        flex-wrap: wrap;
        gap: 15px;
    }

    .page-header h1 {
        font-size: 32px;
        color: #333;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .page-header h1 i {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 10px;
        border-radius: 12px;
        font-size: 24px;
    }

    /* Statistics Cards */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        margin-bottom: 30px;
    }

    .stat-card {
        background: white;
        border-radius: 15px;
        padding: 20px;
        display: flex;
        align-items: center;
        gap: 15px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        transition: 0.3s;
        cursor: pointer;
    }

    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(102, 126, 234, 0.2);
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
        font-size: 24px;
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

    /* Alert Message */
    .alert {
        padding: 15px 20px;
        border-radius: 10px;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 10px;
        animation: slideIn 0.3s ease;
    }

    @keyframes slideIn {
        from {
            transform: translateY(-10px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .alert-success {
        background: #d4edda;
        color: #155724;
        border-left: 4px solid #28a745;
    }

    /* Table Container */
    .table-container {
        overflow-x: auto;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        background: white;
    }

    /* Modern Table */
    .modern-table {
        width: 100%;
        border-collapse: collapse;
        min-width: 1500px;
    }

    .modern-table thead tr {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }

    .modern-table th {
        padding: 15px;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 12px;
        letter-spacing: 0.5px;
        text-align: left;
    }

    .modern-table td {
        padding: 20px 15px;
        border-bottom: 1px solid #f0f0f0;
        color: #666;
        vertical-align: middle;
    }

    .modern-table tbody tr {
        transition: 0.3s;
    }

    .modern-table tbody tr:hover {
        background: #f8f9ff;
        transform: scale(1.01);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    /* Serial Number Badge */
    .sn-badge {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        width: 30px;
        height: 30px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        font-size: 14px;
    }

    /* Order Date */
    .order-date {
        display: flex;
        flex-direction: column;
    }

    .order-date .date {
        font-weight: 600;
        color: #333;
    }

    .order-date .time {
        font-size: 11px;
        color: #999;
    }

    /* Food Info */
    .food-info {
        display: flex;
        flex-direction: column;
    }

    .food-name {
        font-weight: 600;
        color: #333;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .food-name i {
        color: #667eea;
    }

    .food-details {
        font-size: 11px;
        color: #999;
    }

    /* Price Badges */
    .price-badge {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 5px 10px;
        border-radius: 20px;
        font-weight: 600;
        font-size: 12px;
        display: inline-flex;
        align-items: center;
        gap: 3px;
    }

    .price-badge.small {
        padding: 3px 8px;
        font-size: 11px;
    }

    .total-price {
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        color: white;
        padding: 5px 10px;
        border-radius: 20px;
        font-weight: 600;
        font-size: 13px;
        display: inline-flex;
        align-items: center;
        gap: 3px;
    }

    /* Quantity Badge */
    .qty-badge {
        background: #f0f0f0;
        color: #666;
        padding: 5px 10px;
        border-radius: 20px;
        font-weight: 600;
        font-size: 12px;
        display: inline-flex;
        align-items: center;
        gap: 5px;
    }

    .qty-badge i {
        color: #667eea;
    }

    /* Status Badges */
    .status-badge {
        padding: 8px 15px;
        border-radius: 30px;
        font-size: 12px;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
    }

    .status-badge.ordered {
        background: #cce5ff;
        color: #004085;
        border-left: 4px solid #004085;
    }

    .status-badge.ondelivery {
        background: #fff3cd;
        color: #856404;
        border-left: 4px solid #ffc107;
    }

    .status-badge.delivered {
        background: #d4edda;
        color: #155724;
        border-left: 4px solid #28a745;
    }

    .status-badge.cancelled {
        background: #f8d7da;
        color: #721c24;
        border-left: 4px solid #dc3545;
    }

    /* Customer Info */
    .customer-info {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .customer-avatar {
        width: 35px;
        height: 35px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 16px;
        font-weight: 600;
    }

    .customer-details {
        display: flex;
        flex-direction: column;
    }

    .customer-name {
        font-weight: 600;
        color: #333;
    }

    .customer-id {
        font-size: 10px;
        color: #999;
    }

    /* Contact Info */
    .contact-info {
        display: flex;
        flex-direction: column;
        gap: 3px;
    }

    .contact-item {
        display: flex;
        align-items: center;
        gap: 5px;
        font-size: 12px;
    }

    .contact-item i {
        color: #667eea;
        width: 16px;
    }

    /* Address */
    .address {
        max-width: 200px;
        font-size: 12px;
        line-height: 1.4;
        color: #666;
        position: relative;
    }

    .address i {
        color: #667eea;
        margin-right: 5px;
    }

    /* Action Button */
    .btn-update {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 10px 20px;
        border-radius: 30px;
        text-decoration: none;
        font-size: 13px;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: 0.3s;
        border: none;
        cursor: pointer;
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
    }

    .btn-update:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
    }

    .btn-update i {
        font-size: 14px;
    }

    /* Empty State */
    .empty-state {
        text-align: center;
        padding: 60px !important;
    }

    .empty-state-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 20px;
    }

    .empty-state-icon {
        width: 100px;
        height: 100px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .empty-state-icon i {
        font-size: 50px;
        color: white;
    }

    .empty-state h3 {
        color: #333;
        font-size: 24px;
    }

    .empty-state p {
        color: #999;
        font-size: 16px;
    }

    /* Timeline View */
    .timeline-indicator {
        display: flex;
        align-items: center;
        gap: 5px;
        margin-top: 5px;
    }

    .timeline-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #ccc;
    }

    .timeline-dot.active {
        background: #28a745;
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.7);
        }
        70% {
            box-shadow: 0 0 0 10px rgba(40, 167, 69, 0);
        }
        100% {
            box-shadow: 0 0 0 0 rgba(40, 167, 69, 0);
        }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .main-content {
            padding: 15px;
        }

        .order-wrapper {
            padding: 20px;
        }

        .page-header h1 {
            font-size: 24px;
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
    }

    .tooltip:hover .tooltiptext {
        visibility: visible;
        opacity: 1;
    }
</style>

<div class="main-content">
    <div class="order-wrapper">
        
        <!-- Statistics Cards -->
        <?php
            // Total Orders
            $sql_total = "SELECT COUNT(*) as total FROM tbl_order";
            $res_total = mysqli_query($conn, $sql_total);
            $row_total = mysqli_fetch_assoc($res_total);
            
            // Pending Orders
            $sql_pending = "SELECT COUNT(*) as pending FROM tbl_order WHERE status='Ordered'";
            $res_pending = mysqli_query($conn, $sql_pending);
            $row_pending = mysqli_fetch_assoc($res_pending);
            
            // On Delivery
            $sql_delivery = "SELECT COUNT(*) as delivery FROM tbl_order WHERE status='On Delivery'";
            $res_delivery = mysqli_query($conn, $sql_delivery);
            $row_delivery = mysqli_fetch_assoc($res_delivery);
            
            // Delivered Today
            $today = date('Y-m-d');
            $sql_today = "SELECT COUNT(*) as today FROM tbl_order WHERE status='Delivered' AND DATE(order_date) = '$today'";
            $res_today = mysqli_query($conn, $sql_today);
            $row_today = mysqli_fetch_assoc($res_today);
            
            // Total Revenue
            $sql_revenue = "SELECT SUM(total) as revenue FROM tbl_order WHERE status='Delivered'";
            $res_revenue = mysqli_query($conn, $sql_revenue);
            $row_revenue = mysqli_fetch_assoc($res_revenue);
        ?>
        
        <div class="stats-grid">
            <div class="stat-card" onclick="filterOrders('all')">
                <div class="stat-icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="stat-info">
                    <h3><?php echo $row_total['total']; ?></h3>
                    <p>Total Orders</p>
                </div>
            </div>
            
            <div class="stat-card" onclick="filterOrders('ordered')">
                <div class="stat-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="stat-info">
                    <h3><?php echo $row_pending['pending']; ?></h3>
                    <p>Pending</p>
                </div>
            </div>
            
            <div class="stat-card" onclick="filterOrders('ondelivery')">
                <div class="stat-icon">
                    <i class="fas fa-truck"></i>
                </div>
                <div class="stat-info">
                    <h3><?php echo $row_delivery['delivery']; ?></h3>
                    <p>On Delivery</p>
                </div>
            </div>
            
            <div class="stat-card" onclick="filterOrders('delivered')">
                <div class="stat-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="stat-info">
                    <h3><?php echo $row_today['today']; ?></h3>
                    <p>Delivered Today</p>
                </div>
            </div>
            
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="stat-info">
                    <h3>GHS <?php echo number_format($row_revenue['revenue'] ?? 0, 2); ?></h3>
                    <p>Total Revenue</p>
                </div>
            </div>
        </div>

        <!-- Page Header -->
        <div class="page-header">
            <h1>
                <i class="fas fa-clipboard-list"></i>
                Manage Orders
            </h1>
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
                    Ordered
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
                <input type="text" name="search" placeholder="Search orders..." value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
                <button type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>

        <!-- Alert Message -->
        <?php if(isset($_SESSION['update'])): ?>
            <div class="alert alert-success">
                <i class="fas fa-check-circle"></i>
                <?php echo $_SESSION['update']; ?>
            </div>
            <?php unset($_SESSION['update']); ?>
        <?php endif; ?>

        <!-- Orders Table -->
        <div class="table-container">
            <table class="modern-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Order Date</th>
                        <th>Food Item</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Customer</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        // Build SQL query based on filters
                        $sql = "SELECT * FROM tbl_order WHERE 1=1";
                        
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
                            $sql .= " AND (food LIKE '%$search%' OR customer_name LIKE '%$search%' OR customer_contact LIKE '%$search%' OR customer_email LIKE '%$search%')";
                        }
                        
                        $sql .= " ORDER BY id DESC";
                        $res = mysqli_query($conn, $sql);
                        $count = mysqli_num_rows($res);
                        $sn = 1;

                        if($count > 0) {
                            while($row = mysqli_fetch_assoc($res)) {
                                $id = $row['id'];
                                $food = $row['food'];
                                $price = $row['price'];
                                $qty = $row['qty'];
                                $total = $row['total'];
                                $order_date = $row['order_date'];
                                $status = $row['status'];
                                $customer_name = $row['customer_name'];
                                $customer_contact = $row['customer_contact'];
                                $customer_email = $row['customer_email'];
                                $customer_address = $row['customer_address'];
                                
                                // Format date and time
                                $date_time = new DateTime($order_date);
                                $formatted_date = $date_time->format('M d, Y');
                                $formatted_time = $date_time->format('h:i A');
                                
                                // Get customer initials for avatar
                                $name_parts = explode(' ', $customer_name);
                                $initials = '';
                                foreach($name_parts as $part) {
                                    $initials .= strtoupper(substr($part, 0, 1));
                                }
                                $initials = substr($initials, 0, 2);
                    ?>
                    <tr>
                        <td>
                            <div class="sn-badge"><?php echo $sn++; ?></div>
                        </td>
                        <td>
                            <div class="order-date">
                                <span class="date"><?php echo $formatted_date; ?></span>
                                <span class="time"><?php echo $formatted_time; ?></span>
                            </div>
                        </td>
                        <td>
                            <div class="food-info">
                                <span class="food-name">
                                    <i class="fas fa-hamburger"></i>
                                    <?php echo $food; ?>
                                </span>
                            </div>
                        </td>
                        <td>
                            <span class="price-badge small">
                                <i class="fas fa-cedi-sign"></i>
                                <?php echo number_format($price, 2); ?>
                            </span>
                        </td>
                        <td>
                            <span class="qty-badge">
                                <i class="fas fa-times"></i>
                                <?php echo $qty; ?>
                            </span>
                        </td>
                        <td>
                            <span class="total-price">
                                <i class="fas fa-dollar-sign"></i>
                                <?php echo number_format($total, 2); ?>
                            </span>
                        </td>
                        <td>
                            <?php 
                                $status_class = '';
                                $status_icon = '';
                                switch($status) {
                                    case 'Ordered':
                                        $status_class = 'ordered';
                                        $status_icon = 'fa-clock';
                                        break;
                                    case 'On Delivery':
                                        $status_class = 'ondelivery';
                                        $status_icon = 'fa-truck';
                                        break;
                                    case 'Delivered':
                                        $status_class = 'delivered';
                                        $status_icon = 'fa-check-circle';
                                        break;
                                    case 'Cancelled':
                                        $status_class = 'cancelled';
                                        $status_icon = 'fa-times-circle';
                                        break;
                                }
                            ?>
                            <span class="status-badge <?php echo $status_class; ?>">
                                <i class="fas <?php echo $status_icon; ?>"></i>
                                <?php echo $status; ?>
                            </span>
                            <?php if($status == 'On Delivery'): ?>
                                <div class="timeline-indicator">
                                    <span class="timeline-dot"></span>
                                    <span class="timeline-dot active"></span>
                                    <span class="timeline-dot"></span>
                                </div>
                            <?php endif; ?>
                        </td>
                        <td>
                            <div class="customer-info">
                                <div class="customer-avatar">
                                    <?php echo $initials; ?>
                                </div>
                                <div class="customer-details">
                                    <span class="customer-name"><?php echo $customer_name; ?></span>
                                    <span class="customer-id">#ORD-<?php echo str_pad($id, 4, '0', STR_PAD_LEFT); ?></span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="contact-info">
                                <span class="contact-item">
                                    <i class="fas fa-phone"></i>
                                    <?php echo $customer_contact; ?>
                                </span>
                                <span class="contact-item">
                                    <i class="fas fa-envelope"></i>
                                    <?php echo substr($customer_email, 0, 15) . (strlen($customer_email) > 15 ? '...' : ''); ?>
                                </span>
                            </div>
                        </td>
                        <td>
                            <div class="address">
                                <i class="fas fa-map-marker-alt"></i>
                                <?php echo $customer_address; ?>
                            </div>
                        </td>
                        <td>
                            <a href="<?php echo SITEURL; ?>admin/update-order.php?id=<?php echo $id; ?>" 
                               class="btn-update tooltip"
                               title="Update Order">
                                <i class="fas fa-edit"></i>
                                Update
                                <span class="tooltiptext">Update order status</span>
                            </a>
                        </td>
                    </tr>
                    <?php 
                            }
                        } else {
                    ?>
                    <tr>
                        <td colspan="11" class="empty-state">
                            <div class="empty-state-content">
                                <div class="empty-state-icon">
                                    <i class="fas fa-clipboard-list"></i>
                                </div>
                                <h3>No Orders Found</h3>
                                <p>There are no orders matching your criteria. New orders will appear here when customers place them.</p>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- Order Summary -->
        <?php if($count > 0): ?>
        <div style="margin-top: 30px; display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px;">
            <!-- Today's Summary -->
            <div style="background: white; border-radius: 15px; padding: 20px;">
                <h4 style="color: #333; margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                    <i class="fas fa-calendar-day" style="color: #667eea;"></i>
                    Today's Summary
                </h4>
                <?php
                    $today_sql = "SELECT COUNT(*) as count, SUM(total) as total FROM tbl_order WHERE DATE(order_date) = '$today'";
                    $today_res = mysqli_query($conn, $today_sql);
                    $today_row = mysqli_fetch_assoc($today_res);
                ?>
                <div style="display: flex; justify-content: space-between; padding: 10px 0; border-bottom: 1px solid #f0f0f0;">
                    <span style="color: #666;">Total Orders Today</span>
                    <span class="price-badge"><?php echo $today_row['count']; ?></span>
                </div>
                <div style="display: flex; justify-content: space-between; padding: 10px 0; border-bottom: 1px solid #f0f0f0;">
                    <span style="color: #666;">Revenue Today</span>
                    <span class="total-price">$<?php echo number_format($today_row['total'] ?? 0, 2); ?></span>
                </div>
            </div>

            <!-- Status Distribution -->
            <div style="background: white; border-radius: 15px; padding: 20px;">
                <h4 style="color: #333; margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                    <i class="fas fa-chart-pie" style="color: #667eea;"></i>
                    Order Status Distribution
                </h4>
                <?php
                    $statuses = ['Ordered', 'On Delivery', 'Delivered', 'Cancelled'];
                    $colors = ['#004085', '#856404', '#155724', '#721c24'];
                    foreach($statuses as $index => $stat) {
                        $stat_sql = "SELECT COUNT(*) as count FROM tbl_order WHERE status='$stat'";
                        $stat_res = mysqli_query($conn, $stat_sql);
                        $stat_row = mysqli_fetch_assoc($stat_res);
                        $percentage = ($row_total['total'] > 0) ? round(($stat_row['count'] / $row_total['total']) * 100) : 0;
                ?>
                <div style="margin-bottom: 10px;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                        <span style="color: #666;"><?php echo $stat; ?></span>
                        <span style="color: <?php echo $colors[$index]; ?>; font-weight: 600;"><?php echo $stat_row['count']; ?></span>
                    </div>
                    <div style="height: 8px; background: #f0f0f0; border-radius: 4px; overflow: hidden;">
                        <div style="height: 100%; width: <?php echo $percentage; ?>%; background: <?php echo $colors[$index]; ?>; border-radius: 4px;"></div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <?php endif; ?>

    </div>
</div>

<script>
    // Filter orders function
    function filterOrders(status) {
        let url = new URL(window.location.href);
        if(status === 'all') {
            url.searchParams.delete('status');
        } else {
            url.searchParams.set('status', status);
        }
        window.location.href = url.toString();
    }

    // Auto-hide alerts after 5 seconds
    document.querySelectorAll('.alert').forEach(alert => {
        setTimeout(() => {
            alert.style.opacity = '0';
            setTimeout(() => {
                alert.style.display = 'none';
            }, 300);
        }, 5000);
    });

    // Search on enter key
    document.querySelector('.search-box input').addEventListener('keypress', function(e) {
        if(e.key === 'Enter') {
            this.closest('form').submit();
        }
    });

    // Real-time status update simulation
    setInterval(() => {
        const timelineDots = document.querySelectorAll('.timeline-dot.active');
        timelineDots.forEach(dot => {
            // This is just for visual effect
        });
    }, 2000);
</script>

<?php include('partials/footer.php'); ?>