<?php include('partials/menu.php'); ?>

<style>
    /* Main Content Styling */
    .main-content {
        background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
        min-height: 100vh;
        padding: 30px;
    }

    .food-wrapper {
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
        background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
        color: white;
        padding: 10px;
        border-radius: 12px;
        font-size: 24px;
    }

    /* Add Food Button */
    .btn-add {
        background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
        color: white;
        padding: 12px 25px;
        border-radius: 10px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        font-weight: 500;
        transition: 0.3s;
        border: none;
        cursor: pointer;
        box-shadow: 0 5px 15px rgba(240, 147, 251, 0.3);
    }

    .btn-add:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(240, 147, 251, 0.4);
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
    }

    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(240, 147, 251, 0.2);
    }

    .stat-icon {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
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

    /* Alert Messages */
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

    .alert-error {
        background: #f8d7da;
        color: #721c24;
        border-left: 4px solid #dc3545;
    }

    .alert-warning {
        background: #fff3cd;
        color: #856404;
        border-left: 4px solid #ffc107;
    }

    .alert i {
        font-size: 20px;
    }

    /* Table Container */
    .table-container {
        overflow-x: auto;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
    }

    /* Modern Table */
    .modern-table {
        width: 100%;
        border-collapse: collapse;
        background: white;
        border-radius: 15px;
        overflow: hidden;
    }

    .modern-table thead tr {
        background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
        color: white;
    }

    .modern-table th {
        padding: 15px;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 14px;
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
        background: #fff5f5;
        transform: scale(1.01);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    /* Serial Number Badge */
    .sn-badge {
        background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
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

    /* Food Title */
    .food-title {
        font-weight: 600;
        color: #333;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .food-title i {
        color: #667eea;
        font-size: 16px;
    }

    /* Price Badge */
    .price-badge {
        background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
        color: white;
        padding: 6px 12px;
        border-radius: 20px;
        font-weight: 600;
        font-size: 14px;
        display: inline-flex;
        align-items: center;
        gap: 5px;
        box-shadow: 0 3px 10px rgba(240, 147, 251, 0.3);
    }

    .price-badge i {
        font-size: 12px;
    }

    /* Food Image */
    .food-image-container {
        position: relative;
        width: 100px;
        height: 100px;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .food-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: 0.5s;
    }

    .food-image:hover {
        transform: scale(1.1);
    }

    .image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: 0.3s;
    }

    .food-image-container:hover .image-overlay {
        opacity: 1;
    }

    .image-overlay i {
        color: white;
        font-size: 24px;
    }

    .no-image {
        width: 100px;
        height: 100px;
        background: #f0f0f0;
        border-radius: 12px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        color: #999;
        font-size: 12px;
        text-align: center;
        border: 2px dashed #ccc;
        gap: 5px;
    }

    .no-image i {
        font-size: 30px;
        color: #ccc;
    }

    /* Status Badges */
    .status-badge {
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 5px;
    }

    .status-badge.featured {
        background: #d4edda;
        color: #155724;
    }

    .status-badge.not-featured {
        background: #f8d7da;
        color: #721c24;
    }

    .status-badge.active {
        background: #d4edda;
        color: #155724;
    }

    .status-badge.inactive {
        background: #f8d7da;
        color: #721c24;
    }

    /* Action Buttons */
    .action-buttons {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }

    .btn-action {
        padding: 8px 15px;
        border-radius: 8px;
        text-decoration: none;
        font-size: 13px;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
        gap: 5px;
        transition: 0.3s;
        border: none;
        cursor: pointer;
    }

    .btn-update {
        background: #cce5ff;
        color: #004085;
    }

    .btn-update:hover {
        background: #004085;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 64, 133, 0.3);
    }

    .btn-delete {
        background: #f8d7da;
        color: #721c24;
    }

    .btn-delete:hover {
        background: #721c24;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(114, 28, 36, 0.3);
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
        background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
    }

    .empty-state-icon i {
        font-size: 50px;
        color: white;
    }

    .empty-state h3 {
        color: #333;
        font-size: 24px;
        margin-bottom: 10px;
    }

    .empty-state p {
        color: #999;
        font-size: 16px;
        max-width: 400px;
        margin: 0 auto;
    }

    /* Price Range Filter */
    .filter-section {
        background: white;
        border-radius: 15px;
        padding: 20px;
        margin-bottom: 30px;
        display: flex;
        align-items: center;
        gap: 20px;
        flex-wrap: wrap;
    }

    .filter-title {
        display: flex;
        align-items: center;
        gap: 10px;
        color: #333;
        font-weight: 600;
    }

    .filter-title i {
        color: #667eea;
    }

    .price-tags {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }

    .price-tag {
        padding: 8px 15px;
        border-radius: 20px;
        background: #f0f0f0;
        color: #666;
        text-decoration: none;
        font-size: 14px;
        transition: 0.3s;
    }

    .price-tag:hover,
    .price-tag.active {
        background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
        color: white;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .main-content {
            padding: 15px;
        }

        .food-wrapper {
            padding: 20px;
        }

        .page-header {
            flex-direction: column;
            text-align: center;
        }

        .page-header h1 {
            font-size: 24px;
        }

        .modern-table td {
            padding: 15px 10px;
        }

        .action-buttons {
            flex-direction: column;
        }

        .btn-action {
            width: 100%;
            justify-content: center;
        }

        .food-image-container {
            width: 60px;
            height: 60px;
        }

        .no-image {
            width: 60px;
            height: 60px;
        }
    }

    /* Loading Animation */
    .loading-spinner {
        display: inline-block;
        width: 20px;
        height: 20px;
        border: 3px solid #f3f3f3;
        border-top: 3px solid #667eea;
        border-radius: 50%;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
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
    <div class="food-wrapper">
        
        <!-- Statistics Cards -->
        <?php
            // Total Food Items
            $sql_total = "SELECT COUNT(*) as total FROM tbl_food";
            $res_total = mysqli_query($conn, $sql_total);
            $row_total = mysqli_fetch_assoc($res_total);
            
            // Featured Food Items
            $sql_featured = "SELECT COUNT(*) as featured FROM tbl_food WHERE featured='Yes'";
            $res_featured = mysqli_query($conn, $sql_featured);
            $row_featured = mysqli_fetch_assoc($res_featured);
            
            // Active Food Items
            $sql_active = "SELECT COUNT(*) as active FROM tbl_food WHERE active='Yes'";
            $res_active = mysqli_query($conn, $sql_active);
            $row_active = mysqli_fetch_assoc($res_active);
            
            // Average Price
            $sql_avg = "SELECT AVG(price) as avg_price FROM tbl_food";
            $res_avg = mysqli_query($conn, $sql_avg);
            $row_avg = mysqli_fetch_assoc($res_avg);
        ?>
        
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-utensils"></i>
                </div>
                <div class="stat-info">
                    <h3><?php echo $row_total['total']; ?></h3>
                    <p>Total Food Items</p>
                </div>
            </div>
            
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-star"></i>
                </div>
                <div class="stat-info">
                    <h3><?php echo $row_featured['featured']; ?></h3>
                    <p>Featured Items</p>
                </div>
            </div>
            
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="stat-info">
                    <h3><?php echo $row_active['active']; ?></h3>
                    <p>Active Items</p>
                </div>
            </div>
            
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="stat-info">
                    <h3>GHS <?php echo number_format($row_avg['avg_price'] ?? 0, 2); ?></h3>
                    <p>Average Price</p>
                </div>
            </div>
        </div>

        <!-- Page Header -->
        <div class="page-header">
            <h1>
                <i class="fas fa-utensils"></i>
                Manage Food Items
            </h1>
            <a href="<?php echo SITEURL; ?>admin/add-food.php" class="btn-add">
                <i class="fas fa-plus-circle"></i>
                Add New Food Item
            </a>
        </div>

        <!-- Price Filter Section -->
        <div class="filter-section">
            <div class="filter-title">
                <i class="fas fa-filter"></i>
                <span>Filter by Price:</span>
            </div>
            <div class="price-tags">
                <a href="?price=all" class="price-tag <?php echo (!isset($_GET['price']) || $_GET['price'] == 'all') ? 'active' : ''; ?>">All</a>
                <a href="?price=under10" class="price-tag <?php echo (isset($_GET['price']) && $_GET['price'] == 'under10') ? 'active' : ''; ?>">Under GHS 10</a>
                <a href="?price=10-20" class="price-tag <?php echo (isset($_GET['price']) && $_GET['price'] == '10-20') ? 'active' : ''; ?>">GHS 10 - GHS 20</a>
                <a href="?price=20-30" class="price-tag <?php echo (isset($_GET['price']) && $_GET['price'] == '20-30') ? 'active' : ''; ?>">GHS 20 - GHS 30</a>
                <a href="?price=over30" class="price-tag <?php echo (isset($_GET['price']) && $_GET['price'] == 'over30') ? 'active' : ''; ?>">Over GHS 30</a>
            </div>
        </div>

        <!-- Alert Messages -->
        <?php 
        $alert_messages = [
            'add' => ['type' => 'success', 'icon' => 'check-circle', 'message' => 'Food item added successfully!'],
            'delete' => ['type' => 'success', 'icon' => 'check-circle', 'message' => 'Food item deleted successfully!'],
            'update' => ['type' => 'success', 'icon' => 'check-circle', 'message' => 'Food item updated successfully!'],
            'upload' => ['type' => 'success', 'icon' => 'check-circle', 'message' => 'Image uploaded successfully!'],
            'unauthorize' => ['type' => 'error', 'icon' => 'exclamation-triangle', 'message' => 'You are not authorized to perform this action!']
        ];

        foreach($alert_messages as $key => $alert):
            if(isset($_SESSION[$key])): ?>
                <div class="alert alert-<?php echo $alert['type']; ?>">
                    <i class="fas fa-<?php echo $alert['icon']; ?>"></i>
                    <span><?php echo $alert['message']; ?></span>
                </div>
                <?php 
                unset($_SESSION[$key]);
            endif;
        endforeach;
        ?>

        <!-- Food Items Table -->
        <div class="table-container">
            <table class="modern-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Food Item</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Featured</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        // Build SQL query based on price filter
                        $sql = "SELECT * FROM tbl_food";
                        
                        if(isset($_GET['price'])) {
                            switch($_GET['price']) {
                                case 'under10':
                                    $sql .= " WHERE price < 10";
                                    break;
                                case '10-20':
                                    $sql .= " WHERE price BETWEEN 10 AND 20";
                                    break;
                                case '20-30':
                                    $sql .= " WHERE price BETWEEN 20 AND 30";
                                    break;
                                case 'over30':
                                    $sql .= " WHERE price > 30";
                                    break;
                            }
                        }
                        
                        $sql .= " ORDER BY title ASC";
                        $res = mysqli_query($conn, $sql);
                        $count = mysqli_num_rows($res);
                        $sn = 1;

                        if($count > 0) {
                            while($row = mysqli_fetch_assoc($res)) {
                                $id = $row['id'];
                                $title = $row['title'];
                                $price = $row['price'];
                                $image_name = $row['image_name'];
                                $featured = $row['featured'];
                                $active = $row['active'];
                    ?>
                    <tr>
                        <td>
                            <div class="sn-badge"><?php echo $sn++; ?></div>
                        </td>
                        <td>
                            <div class="food-title">
                                <i class="fas fa-hamburger"></i>
                                <?php echo $title; ?>
                            </div>
                        </td>
                        <td>
                            <span class="price-badge">
                                <i class="fas fa-cedi-sign"></i>
                                <?php echo number_format($price, 2); ?>
                            </span>
                        </td>
                        <td>
                            <?php if($image_name != ""): ?>
                                <div class="food-image-container">
                                    <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" 
                                         class="food-image" 
                                         alt="<?php echo $title; ?>"
                                         onerror="this.src='https://via.placeholder.com/100x100?text=No+Image'">
                                    <div class="image-overlay">
                                        <i class="fas fa-search-plus"></i>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="no-image">
                                    <i class="fas fa-image"></i>
                                    <span>No Image</span>
                                </div>
                            <?php endif; ?>
                        </td>
                        <td>
                            <span class="status-badge <?php echo ($featured == 'Yes') ? 'featured' : 'not-featured'; ?>">
                                <i class="fas <?php echo ($featured == 'Yes') ? 'fa-check-circle' : 'fa-times-circle'; ?>"></i>
                                <?php echo $featured; ?>
                            </span>
                        </td>
                        <td>
                            <span class="status-badge <?php echo ($active == 'Yes') ? 'active' : 'inactive'; ?>">
                                <i class="fas <?php echo ($active == 'Yes') ? 'fa-check-circle' : 'fa-times-circle'; ?>"></i>
                                <?php echo $active; ?>
                            </span>
                        </td>
                        <td>
                            <div class="action-buttons">
                                <a href="<?php echo SITEURL; ?>admin/update-food.php?id=<?php echo $id; ?>" 
                                   class="btn-action btn-update tooltip"
                                   title="Update Food Item">
                                    <i class="fas fa-edit"></i>
                                    <span>Update</span>
                                    <span class="tooltiptext">Edit details</span>
                                </a>
                                <a href="<?php echo SITEURL; ?>admin/delete-food.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name; ?>" 
                                   class="btn-action btn-delete tooltip"
                                   title="Delete Food Item"
                                   onclick="return confirmDelete('<?php echo $title; ?>')">
                                    <i class="fas fa-trash-alt"></i>
                                    <span>Delete</span>
                                    <span class="tooltiptext">Remove item</span>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <?php 
                            }
                        } else {
                    ?>
                    <tr>
                        <td colspan="7" class="empty-state">
                            <div class="empty-state-content">
                                <div class="empty-state-icon">
                                    <i class="fas fa-utensils"></i>
                                </div>
                                <h3>No Food Items Found</h3>
                                <p>Start adding delicious food items to your menu. Click the button below to add your first item!</p>
                                <a href="<?php echo SITEURL; ?>admin/add-food.php" class="btn-add" style="display: inline-flex;">
                                    <i class="fas fa-plus-circle"></i>
                                    Add Your First Food Item
                                </a>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- Quick Stats and Tips -->
        <div style="margin-top: 30px; display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <!-- Popular Categories -->
            <div style="background: white; border-radius: 15px; padding: 20px;">
                <h4 style="color: #333; margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                    <i class="fas fa-chart-pie" style="color: #667eea;"></i>
                    Popular Categories
                </h4>
                <?php
                    $sql_cats = "SELECT c.title, COUNT(f.id) as item_count 
                                 FROM tbl_category c 
                                 LEFT JOIN tbl_food f ON c.id = f.category_id 
                                 GROUP BY c.id 
                                 ORDER BY item_count DESC 
                                 LIMIT 5";
                    $res_cats = mysqli_query($conn, $sql_cats);
                    if(mysqli_num_rows($res_cats) > 0) {
                        while($cat = mysqli_fetch_assoc($res_cats)) {
                ?>
                <div style="display: flex; justify-content: space-between; align-items: center; padding: 10px 0; border-bottom: 1px solid #f0f0f0;">
                    <span style="color: #666;"><?php echo $cat['title']; ?></span>
                    <span class="price-badge" style="padding: 3px 10px;"><?php echo $cat['item_count']; ?> items</span>
                </div>
                <?php 
                        }
                    } else {
                        echo "<p style='color: #999; text-align: center;'>No categories yet</p>";
                    }
                ?>
            </div>

            <!-- Quick Tips -->
            <div style="background: #f8f9ff; border-radius: 15px; padding: 20px;">
                <h4 style="color: #333; margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                    <i class="fas fa-lightbulb" style="color: #667eea;"></i>
                    Pro Tips
                </h4>
                <div style="display: flex; flex-direction: column; gap: 15px;">
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <i class="fas fa-check-circle" style="color: #28a745;"></i>
                        <span style="color: #666;">High-quality food images increase orders by 40%</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <i class="fas fa-check-circle" style="color: #28a745;"></i>
                        <span style="color: #666;">Feature your best-selling items for visibility</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <i class="fas fa-check-circle" style="color: #28a745;"></i>
                        <span style="color: #666;">Keep prices competitive and updated</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <i class="fas fa-check-circle" style="color: #28a745;"></i>
                        <span style="color: #666;">Use descriptive titles with keywords</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    // Confirm delete function
    function confirmDelete(itemName) {
        return confirm(`Are you sure you want to delete "${itemName}"? This action cannot be undone.`);
    }

    // Add loading effect on delete
    document.querySelectorAll('.btn-delete').forEach(btn => {
        btn.addEventListener('click', function(e) {
            if(this.getAttribute('onclick') && !confirmDelete('this item')) {
                e.preventDefault();
                return;
            }
            if(this.innerHTML.includes('Delete')) {
                this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Deleting...';
            }
        });
    });

    // Auto-hide alerts after 5 seconds
    document.querySelectorAll('.alert').forEach(alert => {
        setTimeout(() => {
            alert.style.opacity = '0';
            setTimeout(() => {
                alert.style.display = 'none';
            }, 300);
        }, 5000);
    });

    // Image zoom functionality
    document.querySelectorAll('.food-image-container').forEach(container => {
        container.addEventListener('click', function() {
            const img = this.querySelector('img').src;
            // You can implement a lightbox here
            window.open(img, '_blank');
        });
    });
</script>

<?php include('partials/footer.php'); ?>