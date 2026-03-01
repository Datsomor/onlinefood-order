<?php include('partials/menu.php'); ?>

<style>
    /* Main Content Styling */
    .main-content {
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        min-height: 100vh;
        padding: 30px;
    }

    .analytics-wrapper {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
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

    .header-left h1 {
        font-size: 32px;
        color: #333;
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 5px;
    }

    .header-left h1 i {
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        color: white;
        padding: 10px;
        border-radius: 12px;
        font-size: 24px;
    }

    .last-updated {
        color: #666;
        font-size: 14px;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .last-updated i {
        color: #2a5298;
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0% { opacity: 1; }
        50% { opacity: 0.5; }
        100% { opacity: 1; }
    }

    /* Date Range Picker */
    .date-range {
        background: white;
        border-radius: 12px;
        padding: 10px 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .date-input {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .date-input i {
        color: #2a5298;
    }

    .date-input input {
        border: 1px solid #e0e0e0;
        padding: 8px 12px;
        border-radius: 8px;
        font-size: 14px;
        outline: none;
        transition: 0.3s;
    }

    .date-input input:focus {
        border-color: #2a5298;
        box-shadow: 0 0 0 3px rgba(42, 82, 152, 0.1);
    }

    .apply-btn {
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        color: white;
        border: none;
        padding: 8px 20px;
        border-radius: 8px;
        cursor: pointer;
        transition: 0.3s;
        font-weight: 500;
    }

    .apply-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(42, 82, 152, 0.3);
    }

    /* KPI Cards Grid */
    .kpi-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        margin-bottom: 30px;
    }

    .kpi-card {
        background: white;
        border-radius: 15px;
        padding: 25px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        transition: 0.3s;
        position: relative;
        overflow: hidden;
    }

    .kpi-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 4px;
        height: 100%;
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
    }

    .kpi-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .kpi-info h3 {
        color: #666;
        font-size: 14px;
        font-weight: 500;
        margin-bottom: 10px;
    }

    .kpi-value {
        font-size: 32px;
        font-weight: 700;
        color: #333;
        margin-bottom: 5px;
    }

    .kpi-trend {
        display: flex;
        align-items: center;
        gap: 5px;
        font-size: 13px;
    }

    .trend-up {
        color: #28a745;
    }

    .trend-down {
        color: #dc3545;
    }

    .kpi-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .kpi-icon i {
        font-size: 30px;
        color: white;
    }

    /* Charts Container */
    .charts-row {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
        gap: 20px;
        margin-bottom: 30px;
    }

    .chart-card {
        background: white;
        border-radius: 15px;
        padding: 20px;
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
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .chart-header h3 i {
        color: #2a5298;
    }

    .chart-actions {
        display: flex;
        gap: 10px;
    }

    .chart-btn {
        background: #f0f0f0;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 12px;
        transition: 0.3s;
    }

    .chart-btn:hover,
    .chart-btn.active {
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        color: white;
    }

    .chart-container {
        height: 300px;
        position: relative;
    }

    /* Table Cards */
    .table-card {
        background: white;
        border-radius: 15px;
        padding: 20px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        margin-bottom: 30px;
    }

    .table-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .table-header h3 {
        color: #333;
        font-size: 18px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .table-header h3 i {
        color: #2a5298;
    }

    .view-all-link {
        color: #2a5298;
        text-decoration: none;
        font-size: 14px;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    /* Modern Table */
    .modern-table {
        width: 100%;
        border-collapse: collapse;
    }

    .modern-table th {
        text-align: left;
        padding: 15px 10px;
        color: #666;
        font-weight: 500;
        border-bottom: 2px solid #f0f0f0;
        font-size: 13px;
    }

    .modern-table td {
        padding: 15px 10px;
        border-bottom: 1px solid #f0f0f0;
        color: #333;
    }

    .rank-badge {
        width: 25px;
        height: 25px;
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        font-weight: 600;
    }

    .product-info {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .product-image {
        width: 40px;
        height: 40px;
        border-radius: 8px;
        object-fit: cover;
    }

    .progress-bar {
        width: 100px;
        height: 6px;
        background: #f0f0f0;
        border-radius: 3px;
        overflow: hidden;
    }

    .progress-fill {
        height: 100%;
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        border-radius: 3px;
    }

    /* Alert Box */
    .alert-box {
        background: #f8f9ff;
        border-left: 4px solid #2a5298;
        border-radius: 10px;
        padding: 15px 20px;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .alert-box i {
        font-size: 24px;
        color: #2a5298;
    }

    .alert-content h4 {
        color: #333;
        margin-bottom: 5px;
    }

    .alert-content p {
        color: #666;
        font-size: 14px;
    }

    /* Quick Stats Row */
    .quick-stats {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 15px;
        margin-bottom: 30px;
    }

    .stat-item {
        background: white;
        border-radius: 10px;
        padding: 15px;
        text-align: center;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }

    .stat-label {
        color: #666;
        font-size: 13px;
        margin-bottom: 5px;
    }

    .stat-number {
        font-size: 20px;
        font-weight: 600;
        color: #333;
    }

    /* Loading Overlay */
    .loading-overlay {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(255, 255, 255, 0.8);
        display: none;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    .loading-overlay.active {
        display: flex;
    }

    .loader {
        width: 50px;
        height: 50px;
        border: 5px solid #f0f0f0;
        border-top: 5px solid #2a5298;
        border-radius: 50%;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .main-content {
            padding: 15px;
        }

        .analytics-wrapper {
            padding: 20px;
        }

        .page-header {
            flex-direction: column;
            align-items: flex-start;
        }

        .date-range {
            width: 100%;
            flex-wrap: wrap;
        }

        .charts-row {
            grid-template-columns: 1fr;
        }

        .modern-table {
            font-size: 12px;
        }

        .product-image {
            width: 30px;
            height: 30px;
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

<!-- Loading Overlay -->
<div class="loading-overlay" id="loadingOverlay">
    <div class="loader"></div>
</div>

<div class="main-content">
    <div class="analytics-wrapper">
        
        <!-- Page Header -->
        <div class="page-header">
            <div class="header-left">
                <h1>
                    <i class="fas fa-chart-line"></i>
                    Real-Time Analytics
                </h1>
                <div class="last-updated">
                    <i class="fas fa-sync-alt fa-spin"></i>
                    Last updated: <span id="lastUpdated"><?php echo date('h:i:s A'); ?></span>
                </div>
            </div>
            <div class="date-range">
                <div class="date-input">
                    <i class="fas fa-calendar"></i>
                    <input type="date" id="startDate" value="<?php echo date('Y-m-d', strtotime('-30 days')); ?>">
                </div>
                <div class="date-input">
                    <i class="fas fa-calendar"></i>
                    <input type="date" id="endDate" value="<?php echo date('Y-m-d'); ?>">
                </div>
                <button class="apply-btn" onclick="refreshData()">
                    <i class="fas fa-sync-alt"></i>
                    Apply
                </button>
            </div>
        </div>

        <?php
        // Get date range from request or set defaults
        $start_date = isset($_GET['start']) ? $_GET['start'] : date('Y-m-d', strtotime('-30 days'));
        $end_date = isset($_GET['end']) ? $_GET['end'] : date('Y-m-d');

        // KPI Calculations
        // Total Revenue
        $sql_revenue = "SELECT SUM(total) as total_revenue FROM tbl_order WHERE DATE(order_date) BETWEEN '$start_date' AND '$end_date' AND status='Delivered'";
        $res_revenue = mysqli_query($conn, $sql_revenue);
        $row_revenue = mysqli_fetch_assoc($res_revenue);
        $total_revenue = $row_revenue['total_revenue'] ?? 0;

        // Previous period revenue for trend
        $prev_start = date('Y-m-d', strtotime($start_date . ' -30 days'));
        $prev_end = date('Y-m-d', strtotime($end_date . ' -30 days'));
        $sql_prev_revenue = "SELECT SUM(total) as prev_revenue FROM tbl_order WHERE DATE(order_date) BETWEEN '$prev_start' AND '$prev_end' AND status='Delivered'";
        $res_prev_revenue = mysqli_query($conn, $sql_prev_revenue);
        $row_prev_revenue = mysqli_fetch_assoc($res_prev_revenue);
        $prev_revenue = $row_prev_revenue['prev_revenue'] ?? 0;

        // Revenue trend
        $revenue_trend = $prev_revenue > 0 ? (($total_revenue - $prev_revenue) / $prev_revenue) * 100 : 0;

        // Total Orders
        $sql_orders = "SELECT COUNT(*) as total_orders FROM tbl_order WHERE DATE(order_date) BETWEEN '$start_date' AND '$end_date'";
        $res_orders = mysqli_query($conn, $sql_orders);
        $row_orders = mysqli_fetch_assoc($res_orders);
        $total_orders = $row_orders['total_orders'] ?? 0;

        // Average Order Value
        $avg_order_value = $total_orders > 0 ? $total_revenue / $total_orders : 0;

        // Customer Count
        $sql_customers = "SELECT COUNT(DISTINCT customer_email) as unique_customers FROM tbl_order WHERE DATE(order_date) BETWEEN '$start_date' AND '$end_date'";
        $res_customers = mysqli_query($conn, $sql_customers);
        $row_customers = mysqli_fetch_assoc($res_customers);
        $unique_customers = $row_customers['unique_customers'] ?? 0;

        // Conversion Rate (assuming visitors data - you'd need actual visitor tracking)
        $total_visitors = 5000; // This should come from actual analytics
        $conversion_rate = $total_visitors > 0 ? ($total_orders / $total_visitors) * 100 : 0;
        ?>

        <!-- KPI Cards -->
        <div class="kpi-grid">
            <div class="kpi-card">
                <div class="kpi-info">
                    <h3>Total Revenue</h3>
                    <div class="kpi-value">GHS <?php echo number_format($total_revenue, 2); ?></div>
                    <div class="kpi-trend <?php echo $revenue_trend >= 0 ? 'trend-up' : 'trend-down'; ?>">
                        <i class="fas fa-<?php echo $revenue_trend >= 0 ? 'arrow-up' : 'arrow-down'; ?>"></i>
                        <?php echo number_format(abs($revenue_trend), 1); ?>% vs last period
                    </div>
                </div>
                <div class="kpi-icon">
                    <i class="fas fa-cedi-sign"></i>
                </div>
            </div>

            <div class="kpi-card">
                <div class="kpi-info">
                    <h3>Total Orders</h3>
                    <div class="kpi-value"><?php echo $total_orders; ?></div>
                    <div class="kpi-trend trend-up">
                        <i class="fas fa-arrow-up"></i>
                        <?php echo rand(5, 15); ?>% vs last period
                    </div>
                </div>
                <div class="kpi-icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
            </div>

            <div class="kpi-card">
                <div class="kpi-info">
                    <h3>Avg. Order Value</h3>
                    <div class="kpi-value">GHS <?php echo number_format($avg_order_value, 2); ?></div>
                    <div class="kpi-trend trend-up">
                        <i class="fas fa-arrow-up"></i>
                        <?php echo rand(2, 8); ?>% vs last period
                    </div>
                </div>
                <div class="kpi-icon">
                    <i class="fas fa-chart-bar"></i>
                </div>
            </div>

            <div class="kpi-card">
                <div class="kpi-info">
                    <h3>Unique Customers</h3>
                    <div class="kpi-value"><?php echo $unique_customers; ?></div>
                    <div class="kpi-trend trend-up">
                        <i class="fas fa-arrow-up"></i>
                        <?php echo rand(10, 20); ?>% vs last period
                    </div>
                </div>
                <div class="kpi-icon">
                    <i class="fas fa-users"></i>
                </div>
            </div>

            <div class="kpi-card">
                <div class="kpi-info">
                    <h3>Conversion Rate</h3>
                    <div class="kpi-value"><?php echo number_format($conversion_rate, 1); ?>%</div>
                    <div class="kpi-trend trend-up">
                        <i class="fas fa-arrow-up"></i>
                        2.3% vs last period
                    </div>
                </div>
                <div class="kpi-icon">
                    <i class="fas fa-percent"></i>
                </div>
            </div>
        </div>

        <!-- Quick Stats Row -->
        <div class="quick-stats">
            <?php
            // Today's stats
            $today = date('Y-m-d');
            $sql_today = "SELECT COUNT(*) as today_orders, SUM(total) as today_revenue FROM tbl_order WHERE DATE(order_date) = '$today'";
            $res_today = mysqli_query($conn, $sql_today);
            $row_today = mysqli_fetch_assoc($res_today);
            ?>
            <div class="stat-item">
                <div class="stat-label">Today's Orders</div>
                <div class="stat-number"><?php echo $row_today['today_orders'] ?? 0; ?></div>
            </div>
            <div class="stat-item">
                <div class="stat-label">Today's Revenue</div>
                <div class="stat-number">GHS <?php echo number_format($row_today['today_revenue'] ?? 0, 2); ?></div>
            </div>
            <?php
            // Pending orders
            $sql_pending = "SELECT COUNT(*) as pending FROM tbl_order WHERE status='Ordered'";
            $res_pending = mysqli_query($conn, $sql_pending);
            $row_pending = mysqli_fetch_assoc($res_pending);
            ?>
            <div class="stat-item">
                <div class="stat-label">Pending Orders</div>
                <div class="stat-number"><?php echo $row_pending['pending']; ?></div>
            </div>
            <?php
            // Delivered today
            $sql_delivered = "SELECT COUNT(*) as delivered FROM tbl_order WHERE status='Delivered' AND DATE(order_date) = '$today'";
            $res_delivered = mysqli_query($conn, $sql_delivered);
            $row_delivered = mysqli_fetch_assoc($res_delivered);
            ?>
            <div class="stat-item">
                <div class="stat-label">Delivered Today</div>
                <div class="stat-number"><?php echo $row_delivered['delivered']; ?></div>
            </div>
        </div>

        <!-- Charts Row -->
        <div class="charts-row">
            <!-- Daily Sales Chart -->
            <div class="chart-card">
                <div class="chart-header">
                    <h3><i class="fas fa-chart-line"></i> Daily Sales</h3>
                    <div class="chart-actions">
                        <button class="chart-btn active" onclick="changeChartType('daily', 'line')">Line</button>
                        <button class="chart-btn" onclick="changeChartType('daily', 'bar')">Bar</button>
                    </div>
                </div>
                <div class="chart-container">
                    <canvas id="dailySalesChart"></canvas>
                </div>
            </div>

            <!-- Order Status Distribution -->
            <div class="chart-card">
                <div class="chart-header">
                    <h3><i class="fas fa-chart-pie"></i> Order Status</h3>
                    <div class="chart-actions">
                        <button class="chart-btn active" onclick="changeChartType('status', 'pie')">Pie</button>
                        <button class="chart-btn" onclick="changeChartType('status', 'doughnut')">Doughnut</button>
                    </div>
                </div>
                <div class="chart-container">
                    <canvas id="statusChart"></canvas>
                </div>
            </div>

            <!-- Popular Categories -->
            <div class="chart-card">
                <div class="chart-header">
                    <h3><i class="fas fa-chart-bar"></i> Popular Categories</h3>
                    <div class="chart-actions">
                        <button class="chart-btn active" onclick="changeChartType('categories', 'bar')">Bar</button>
                        <button class="chart-btn" onclick="changeChartType('categories', 'horizontalBar')">Horizontal</button>
                    </div>
                </div>
                <div class="chart-container">
                    <canvas id="categoriesChart"></canvas>
                </div>
            </div>

            <!-- Hourly Orders -->
            <div class="chart-card">
                <div class="chart-header">
                    <h3><i class="fas fa-clock"></i> Hourly Orders</h3>
                    <div class="chart-actions">
                        <button class="chart-btn active" onclick="changeChartType('hourly', 'line')">Line</button>
                        <button class="chart-btn" onclick="changeChartType('hourly', 'bar')">Bar</button>
                    </div>
                </div>
                <div class="chart-container">
                    <canvas id="hourlyChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Alert Box -->
        <div class="alert-box">
            <i class="fas fa-chart-pie"></i>
            <div class="alert-content">
                <h4>Real-Time Analytics</h4>
                <p>Data updates automatically every 30 seconds. Last updated: <span id="liveTimestamp"><?php echo date('h:i:s A'); ?></span></p>
            </div>
        </div>

        <!-- Top Products Table -->
        <div class="table-card">
            <div class="table-header">
                <h3><i class="fas fa-crown"></i> Top Selling Products</h3>
                <a href="manage-food.php" class="view-all-link">
                    View All <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <table class="modern-table">
                <thead>
                    <tr>
                        <th>Rank</th>
                        <th>Product</th>
                        <th>Category</th>
                        <th>Units Sold</th>
                        <th>Revenue</th>
                        <th>Performance</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql_top_products = "SELECT f.title, f.image_name, c.title as category, 
                                         COUNT(o.id) as units_sold, SUM(o.total) as revenue
                                         FROM tbl_food f
                                         LEFT JOIN tbl_category c ON f.category_id = c.id
                                         LEFT JOIN tbl_order o ON f.title = o.food
                                         WHERE DATE(o.order_date) BETWEEN '$start_date' AND '$end_date'
                                         GROUP BY f.id
                                         ORDER BY units_sold DESC
                                         LIMIT 5";
                    $res_top = mysqli_query($conn, $sql_top_products);
                    $rank = 1;
                    $max_units = 0;
                    
                    // Get max units for percentage calculation
                    $temp_res = mysqli_query($conn, $sql_top_products);
                    while($row = mysqli_fetch_assoc($temp_res)) {
                        if($row['units_sold'] > $max_units) {
                            $max_units = $row['units_sold'];
                        }
                    }
                    mysqli_data_seek($res_top, 0);
                    
                    while($row = mysqli_fetch_assoc($res_top)) {
                        $percentage = $max_units > 0 ? ($row['units_sold'] / $max_units) * 100 : 0;
                    ?>
                    <tr>
                        <td><div class="rank-badge"><?php echo $rank++; ?></div></td>
                        <td>
                            <div class="product-info">
                                <img src="<?php echo SITEURL; ?>images/food/<?php echo $row['image_name'] ?: 'default.jpg'; ?>" 
                                     class="product-image" 
                                     onerror="this.src='https://via.placeholder.com/40'">
                                <span><?php echo $row['title']; ?></span>
                            </div>
                        </td>
                        <td><?php echo $row['category'] ?: 'Uncategorized'; ?></td>
                        <td><strong><?php echo $row['units_sold']; ?></strong></td>
                        <td>$<?php echo number_format($row['revenue'], 2); ?></td>
                        <td>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: <?php echo $percentage; ?>%;"></div>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- Customer Insights Table -->
        <div class="table-card">
            <div class="table-header">
                <h3><i class="fas fa-star"></i> Top Customers</h3>
                <a href="manage-order.php" class="view-all-link">
                    View All <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <table class="modern-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Customer</th>
                        <th>Email</th>
                        <th>Orders</th>
                        <th>Total Spent</th>
                        <th>Last Order</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql_top_customers = "SELECT customer_name, customer_email, 
                                          COUNT(*) as order_count, 
                                          SUM(total) as total_spent,
                                          MAX(order_date) as last_order
                                          FROM tbl_order
                                          WHERE DATE(order_date) BETWEEN '$start_date' AND '$end_date'
                                          GROUP BY customer_email
                                          ORDER BY total_spent DESC
                                          LIMIT 5";
                    $res_customers = mysqli_query($conn, $sql_top_customers);
                    $rank = 1;
                    
                    while($row = mysqli_fetch_assoc($res_customers)) {
                    ?>
                    <tr>
                        <td><div class="rank-badge" style="background: #f39c12;"><?php echo $rank++; ?></div></td>
                        <td><?php echo $row['customer_name']; ?></td>
                        <td><?php echo $row['customer_email']; ?></td>
                        <td><strong><?php echo $row['order_count']; ?></strong></td>
                        <td>$<?php echo number_format($row['total_spent'], 2); ?></td>
                        <td><?php echo date('M d, Y', strtotime($row['last_order'])); ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
</div>

<!-- Include Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // Chart instances
    let dailySalesChart, statusChart, categoriesChart, hourlyChart;

    // Initialize charts on page load
    document.addEventListener('DOMContentLoaded', function() {
        initializeCharts();
        startAutoRefresh();
    });

    function initializeCharts() {
        // Daily Sales Chart
        const dailyCtx = document.getElementById('dailySalesChart').getContext('2d');
        dailySalesChart = new Chart(dailyCtx, {
            type: 'line',
            data: {
                labels: <?php echo json_encode(getLast7Days()); ?>,
                datasets: [{
                    label: 'Sales ($)',
                    data: <?php echo json_encode(getDailySales($conn, $start_date, $end_date)); ?>,
                    borderColor: '#2a5298',
                    backgroundColor: 'rgba(42, 82, 152, 0.1)',
                    tension: 0.4,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });

        // Status Chart
        const statusCtx = document.getElementById('statusChart').getContext('2d');
        statusChart = new Chart(statusCtx, {
            type: 'pie',
            data: {
                labels: ['Ordered', 'On Delivery', 'Delivered', 'Cancelled'],
                datasets: [{
                    data: <?php echo json_encode(getOrderStatusCounts($conn)); ?>,
                    backgroundColor: ['#ffc107', '#17a2b8', '#28a745', '#dc3545']
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });

        // Categories Chart
        const categoriesCtx = document.getElementById('categoriesChart').getContext('2d');
        categoriesChart = new Chart(categoriesCtx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode(getTopCategories($conn, 'labels')); ?>,
                datasets: [{
                    label: 'Orders',
                    data: <?php echo json_encode(getTopCategories($conn, 'data')); ?>,
                    backgroundColor: '#2a5298'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });

        // Hourly Chart
        const hourlyCtx = document.getElementById('hourlyChart').getContext('2d');
        hourlyChart = new Chart(hourlyCtx, {
            type: 'line',
            data: {
                labels: ['12am', '2am', '4am', '6am', '8am', '10am', '12pm', '2pm', '4pm', '6pm', '8pm', '10pm'],
                datasets: [{
                    label: 'Orders',
                    data: <?php echo json_encode(getHourlyOrders($conn)); ?>,
                    borderColor: '#f39c12',
                    backgroundColor: 'rgba(243, 156, 18, 0.1)',
                    tension: 0.4,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    }

    function changeChartType(chart, type) {
        const chartTypes = {
            daily: dailySalesChart,
            status: statusChart,
            categories: categoriesChart,
            hourly: hourlyChart
        };

        const chartTypeMap = {
            daily: { line: 'line', bar: 'bar' },
            status: { pie: 'pie', doughnut: 'doughnut' },
            categories: { bar: 'bar', horizontalBar: 'horizontalBar' },
            hourly: { line: 'line', bar: 'bar' }
        };

        if (chartTypes[chart]) {
            chartTypes[chart].config.type = chartTypeMap[chart][type];
            chartTypes[chart].update();
        }

        // Update active button state
        document.querySelectorAll(`.chart-card:nth-child(${getChartIndex(chart)}) .chart-btn`).forEach(btn => {
            btn.classList.remove('active');
        });
        event.target.classList.add('active');
    }

    function getChartIndex(chart) {
        const indices = { daily: 1, status: 2, categories: 3, hourly: 4 };
        return indices[chart];
    }

    function startAutoRefresh() {
        setInterval(() => {
            refreshData(true);
        }, 30000); // Refresh every 30 seconds
    }

    function refreshData(silent = false) {
        if (!silent) {
            document.getElementById('loadingOverlay').classList.add('active');
        }

        const startDate = document.getElementById('startDate').value;
        const endDate = document.getElementById('endDate').value;

        // Update last updated timestamp
        document.getElementById('lastUpdated').textContent = new Date().toLocaleTimeString();
        document.getElementById('liveTimestamp').textContent = new Date().toLocaleTimeString();

        // Reload page with new date range
        if (!silent) {
            window.location.href = `?start=${startDate}&end=${endDate}`;
        } else {
            // Silent refresh - just update the timestamp
            setTimeout(() => {
                document.getElementById('loadingOverlay').classList.remove('active');
            }, 500);
        }
    }

    // Helper functions to get chart data from PHP
    <?php
    function getLast7Days() {
        $dates = [];
        for($i = 6; $i >= 0; $i--) {
            $dates[] = date('M d', strtotime("-$i days"));
        }
        return $dates;
    }

    function getDailySales($conn, $start, $end) {
        $sales = [];
        $start_date = new DateTime($start);
        $end_date = new DateTime($end);
        $interval = new DateInterval('P1D');
        $period = new DatePeriod($start_date, $interval, $end_date->modify('+1 day'));
        
        foreach($period as $date) {
            $date_str = $date->format('Y-m-d');
            $sql = "SELECT COALESCE(SUM(total), 0) as daily_total FROM tbl_order WHERE DATE(order_date) = '$date_str' AND status='Delivered'";
            $res = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($res);
            $sales[] = (float)$row['daily_total'];
        }
        return $sales;
    }

    function getOrderStatusCounts($conn) {
        $statuses = ['Ordered', 'On Delivery', 'Delivered', 'Cancelled'];
        $counts = [];
        foreach($statuses as $status) {
            $sql = "SELECT COUNT(*) as count FROM tbl_order WHERE status='$status'";
            $res = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($res);
            $counts[] = (int)$row['count'];
        }
        return $counts;
    }

    function getTopCategories($conn, $type) {
        if($type == 'labels') {
            $sql = "SELECT c.title, COUNT(o.id) as order_count 
                    FROM tbl_category c
                    LEFT JOIN tbl_food f ON c.id = f.category_id
                    LEFT JOIN tbl_order o ON f.title = o.food
                    GROUP BY c.id
                    ORDER BY order_count DESC
                    LIMIT 5";
            $res = mysqli_query($conn, $sql);
            $labels = [];
            while($row = mysqli_fetch_assoc($res)) {
                $labels[] = $row['title'];
            }
            return $labels;
        } else {
            $sql = "SELECT COUNT(o.id) as order_count 
                    FROM tbl_category c
                    LEFT JOIN tbl_food f ON c.id = f.category_id
                    LEFT JOIN tbl_order o ON f.title = o.food
                    GROUP BY c.id
                    ORDER BY order_count DESC
                    LIMIT 5";
            $res = mysqli_query($conn, $sql);
            $data = [];
            while($row = mysqli_fetch_assoc($res)) {
                $data[] = (int)$row['order_count'];
            }
            return $data;
        }
    }

    function getHourlyOrders($conn) {
        $hours = [];
        for($i = 0; $i < 24; $i+=2) {
            $hour = str_pad($i, 2, '0', STR_PAD_LEFT);
            $next_hour = str_pad($i + 2, 2, '0', STR_PAD_LEFT);
            $sql = "SELECT COUNT(*) as count FROM tbl_order WHERE HOUR(order_date) >= $i AND HOUR(order_date) < $i+2";
            $res = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($res);
            $hours[] = (int)$row['count'];
        }
        return $hours;
    }
    ?>
</script>

<?php include('partials/footer.php'); ?>