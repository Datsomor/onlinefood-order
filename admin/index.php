<?php include('partials/menu.php'); ?>

<style>
    /* Main Content Wrapper */
    .dashboard-wrapper {
        padding: 30px;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        margin: 20px;
        min-height: calc(100vh - 40px);
    }

    /* Header Section */
    .dashboard-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
        padding-bottom: 20px;
        border-bottom: 2px solid #f0f0f0;
    }

    .welcome-section h1 {
        font-size: 32px;
        color: #333;
        margin-bottom: 5px;
    }

    .welcome-section p {
        color: #666;
        font-size: 14px;
    }

    .date-badge {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 10px 20px;
        border-radius: 10px;
        font-weight: 500;
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
    }

    .date-badge i {
        margin-right: 10px;
    }

    /* Stats Grid */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 25px;
        margin-bottom: 30px;
    }

    .stat-card {
        background: white;
        border-radius: 20px;
        padding: 25px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
        text-decoration: none;
        border: 1px solid rgba(255, 255, 255, 0.1);
        position: relative;
        overflow: hidden;
    }

    .stat-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        opacity: 0;
        transition: 0.3s;
        z-index: 1;
    }

    .stat-card:hover::before {
        opacity: 1;
    }

    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
    }

    .stat-card:hover .stat-info h3,
    .stat-card:hover .stat-info p,
    .stat-card:hover .stat-icon {
        color: white;
        position: relative;
        z-index: 2;
    }

    .stat-info h3 {
        font-size: 32px;
        color: #333;
        margin-bottom: 5px;
        transition: 0.3s;
    }

    .stat-info p {
        color: #666;
        font-size: 14px;
        font-weight: 500;
        transition: 0.3s;
    }

    .stat-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: 0.3s;
    }

    .stat-icon i {
        font-size: 30px;
        color: white;
    }

    /* Charts Section */
    .charts-section {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 25px;
        margin-bottom: 30px;
    }

    .chart-card {
        background: white;
        border-radius: 20px;
        padding: 25px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
    }

    .chart-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .chart-header h3 {
        color: #333;
        font-size: 18px;
    }

    .chart-header span {
        color: #667eea;
        font-size: 14px;
        font-weight: 500;
    }

    /* Recent Orders Table */
    .recent-orders {
        background: white;
        border-radius: 20px;
        padding: 25px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
    }

    .section-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .section-header h3 {
        color: #333;
        font-size: 20px;
    }

    .view-all {
        color: #667eea;
        text-decoration: none;
        font-weight: 500;
        transition: 0.3s;
    }

    .view-all:hover {
        color: #764ba2;
    }

    .orders-table {
        width: 100%;
        border-collapse: collapse;
    }

    .orders-table th {
        text-align: left;
        padding: 15px 10px;
        color: #666;
        font-weight: 500;
        border-bottom: 2px solid #f0f0f0;
    }

    .orders-table td {
        padding: 15px 10px;
        border-bottom: 1px solid #f0f0f0;
    }

    .status-badge {
        padding: 5px 10px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 500;
    }

    .status-delivered {
        background: #d4edda;
        color: #155724;
    }

    .status-pending {
        background: #fff3cd;
        color: #856404;
    }

    .status-ondelivery {
        background: #cce5ff;
        color: #004085;
    }

    .status-cancelled {
        background: #f8d7da;
        color: #721c24;
    }

    /* Quick Actions */
    .quick-actions {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 15px;
        margin-top: 30px;
    }

    .action-btn {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 15px;
        border-radius: 10px;
        text-decoration: none;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        transition: 0.3s;
        border: none;
        cursor: pointer;
        font-weight: 500;
    }

    .action-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .dashboard-wrapper {
            padding: 15px;
            margin: 10px;
        }

        .dashboard-header {
            flex-direction: column;
            gap: 15px;
            text-align: center;
        }

        .charts-section {
            grid-template-columns: 1fr;
        }

        .stats-grid {
            grid-template-columns: 1fr;
        }

        .orders-table {
            font-size: 14px;
        }

        .orders-table th, 
        .orders-table td {
            padding: 10px 5px;
        }
    }

    /* Welcome Message */
    .welcome-message {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 15px 20px;
        border-radius: 10px;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .welcome-message i {
        font-size: 24px;
    }
</style>

<div class="main-content">
    <div class="dashboard-wrapper">
        
        <!-- Welcome Message -->
        <?php if(isset($_SESSION['login'])): ?>
            <div class="welcome-message">
                <i class="fas fa-check-circle"></i>
                <span><?php echo $_SESSION['login']; ?></span>
            </div>
            <?php unset($_SESSION['login']); ?>
        <?php endif; ?>

        <!-- Header -->
        <div class="dashboard-header">
            <div class="welcome-section">
                <h1>Welcome back, Admin!</h1>
                <p>Here's what's happening with your restaurant today</p>
            </div>
            <div class="date-badge">
                <i class="far fa-calendar-alt"></i>
                <?php echo date('l, F j, Y'); ?>
            </div>
        </div>

        <!-- Stats Grid -->
        <div class="stats-grid">
            <?php 
                // Categories Count
                $sql = "SELECT * FROM tbl_category";
                $res = mysqli_query($conn, $sql);
                $count = mysqli_num_rows($res);
            ?>
            <a href="manage-category.php" class="stat-card">
                <div class="stat-info">
                    <h3><?php echo $count; ?></h3>
                    <p>Food Categories</p>
                </div>
                <div class="stat-icon">
                    <i class="fas fa-tags"></i>
                </div>
            </a>

            <?php 
                $sql2 = "SELECT * FROM tbl_food";
                $res2 = mysqli_query($conn, $sql2);
                $count2 = mysqli_num_rows($res2);
            ?>
            <a href="manage-food.php" class="stat-card">
                <div class="stat-info">
                    <h3><?php echo $count2; ?></h3>
                    <p>Food Items</p>
                </div>
                <div class="stat-icon">
                    <i class="fas fa-pizza-slice"></i>
                </div>
            </a>

            <?php 
                $sql3 = "SELECT * FROM tbl_order";
                $res3 = mysqli_query($conn, $sql3);
                $count3 = mysqli_num_rows($res3);
            ?>
            <a href="manage-order.php" class="stat-card">
                <div class="stat-info">
                    <h3><?php echo $count3; ?></h3>
                    <p>Total Orders</p>
                </div>
                <div class="stat-icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
            </a>

            <?php 
                $sql4 = "SELECT SUM(total) AS Total FROM tbl_order WHERE status='Delivered'";
                $res4 = mysqli_query($conn, $sql4);
                $row4 = mysqli_fetch_assoc($res4);
                $total_revenue = $row4['Total'] ?? 0;
            ?>
            <a href="manage-order.php" class="stat-card">
                <div class="stat-info">
                    <h3>GHS <?php echo number_format($total_revenue, 2); ?></h3>
                    <p>Revenue</p>
                </div>
                <div class="stat-icon">
                    <i class="fas fa-cedi-sign"></i>
                </div>
            </a>
        </div>

        <!-- Second Row Stats -->
        <div class="stats-grid">
            <?php 
                $sql6 = "SELECT * FROM tbl_order WHERE status = 'Ordered'";
                $res6 = mysqli_query($conn, $sql6);
                $count6 = mysqli_num_rows($res6);
            ?>
            <a href="manage-order.php" class="stat-card">
                <div class="stat-info">
                    <h3><?php echo $count6; ?></h3>
                    <p>Pending Orders</p>
                </div>
                <div class="stat-icon">
                    <i class="fas fa-clock"></i>
                </div>
            </a>

            <?php 
                $sql7 = "SELECT * FROM tbl_order WHERE status = 'On Delivery'";
                $res7 = mysqli_query($conn, $sql7);
                $count7 = mysqli_num_rows($res7);
            ?>
            <a href="manage-order.php" class="stat-card">
                <div class="stat-info">
                    <h3><?php echo $count7; ?></h3>
                    <p>On Delivery</p>
                </div>
                <div class="stat-icon">
                    <i class="fas fa-truck"></i>
                </div>
            </a>

            <?php 
                $sql8 = "SELECT * FROM tbl_order WHERE status = 'Cancelled'";
                $res8 = mysqli_query($conn, $sql8);
                $count8 = mysqli_num_rows($res8);
            ?>
            <a href="manage-order.php" class="stat-card">
                <div class="stat-info">
                    <h3><?php echo $count8; ?></h3>
                    <p>Cancelled</p>
                </div>
                <div class="stat-icon">
                    <i class="fas fa-times-circle"></i>
                </div>
            </a>

            <?php 
                $sql9 = "SELECT * FROM tbl_admin";
                $res9 = mysqli_query($conn, $sql9);
                $count9 = mysqli_num_rows($res9);
            ?>
            <a href="manage-admin.php" class="stat-card">
                <div class="stat-info">
                    <h3><?php echo $count9; ?></h3>
                    <p>Admins</p>
                </div>
                <div class="stat-icon">
                    <i class="fas fa-users-cog"></i>
                </div>
            </a>
        </div>

        <!-- Recent Orders -->
        <div class="recent-orders">
            <div class="section-header">
                <h3><i class="fas fa-history" style="margin-right: 10px; color: #667eea;"></i>Recent Orders</h3>
                <a href="manage-order.php" class="view-all">View All <i class="fas fa-arrow-right"></i></a>
            </div>

            <table class="orders-table">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql_recent = "SELECT * FROM tbl_order ORDER BY id DESC LIMIT 5";
                        $res_recent = mysqli_query($conn, $sql_recent);
                        
                        if(mysqli_num_rows($res_recent) > 0) {
                            while($row = mysqli_fetch_assoc($res_recent)) {
                                $status_class = '';
                                switch($row['status']) {
                                    case 'Delivered':
                                        $status_class = 'status-delivered';
                                        break;
                                    case 'Ordered':
                                        $status_class = 'status-pending';
                                        break;
                                    case 'On Delivery':
                                        $status_class = 'status-ondelivery';
                                        break;
                                    case 'Cancelled':
                                        $status_class = 'status-cancelled';
                                        break;
                                }
                    ?>
                    <tr>
                        <td>#<?php echo str_pad($row['id'], 4, '0', STR_PAD_LEFT); ?></td>
                        <td><?php echo $row['customer_name']; ?></td>
                        <td>GHS <?php echo $row['total']; ?></td>
                        <td><span class="status-badge <?php echo $status_class; ?>"><?php echo $row['status']; ?></span></td>
                        <td><?php echo date('M d, Y', strtotime($row['order_date'])); ?></td>
                    </tr>
                    <?php 
                            }
                        } else {
                    ?>
                    <tr>
                        <td colspan="5" style="text-align: center; color: #999;">No orders found</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- Quick Actions -->
        <div class="quick-actions">
            <a href="add-category.php" class="action-btn">
                <i class="fas fa-plus-circle"></i>
                Add Category
            </a>
            <a href="add-food.php" class="action-btn">
                <i class="fas fa-utensils"></i>
                Add Food Item
            </a>
            <a href="add-admin.php" class="action-btn">
                <i class="fas fa-user-plus"></i>
                Add Admin
            </a>
            <a href="manage-order.php" class="action-btn">
                <i class="fas fa-clipboard-list"></i>
                View Orders
            </a>
        </div>

    </div>
</div>

<?php include('partials/footer.php'); ?>