<?php include('partials/menu.php'); ?>

<style>
    /* Main Content Styling */
    .main-content {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        min-height: 100vh;
        padding: 30px;
    }

    .category-wrapper {
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

    .alert i {
        font-size: 20px;
    }

    /* Add Category Button */
    .btn-add {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
    }

    .btn-add:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
    }

    /* Table Styling */
    .table-container {
        overflow-x: auto;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
    }

    .modern-table {
        width: 100%;
        border-collapse: collapse;
        background: white;
        border-radius: 15px;
        overflow: hidden;
    }

    .modern-table thead tr {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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

    /* Category Image */
    .category-image {
        width: 80px;
        height: 80px;
        border-radius: 12px;
        object-fit: cover;
        border: 3px solid white;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        transition: 0.3s;
    }

    .category-image:hover {
        transform: scale(1.1);
        box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
    }

    .no-image {
        width: 80px;
        height: 80px;
        background: #f0f0f0;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #999;
        font-size: 12px;
        text-align: center;
        border: 2px dashed #ccc;
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
        padding: 50px !important;
    }

    .empty-state-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 15px;
    }

    .empty-state i {
        font-size: 60px;
        color: #ccc;
    }

    .empty-state p {
        color: #999;
        font-size: 16px;
    }

    /* Statistics Cards */
    .stats-cards {
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

    /* Responsive Design */
    @media (max-width: 768px) {
        .main-content {
            padding: 15px;
        }

        .category-wrapper {
            padding: 20px;
        }

        .page-header {
            flex-direction: column;
            gap: 15px;
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
    }

    /* Loading Animation */
    .loading {
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
</style>

<div class="main-content">
    <div class="category-wrapper">
        
        <!-- Statistics Cards -->
        <div class="stats-cards">
            <?php
                // Total Categories
                $sql_total = "SELECT COUNT(*) as total FROM tbl_category";
                $res_total = mysqli_query($conn, $sql_total);
                $row_total = mysqli_fetch_assoc($res_total);
                
                // Featured Categories
                $sql_featured = "SELECT COUNT(*) as featured FROM tbl_category WHERE featured='Yes'";
                $res_featured = mysqli_query($conn, $sql_featured);
                $row_featured = mysqli_fetch_assoc($res_featured);
                
                // Active Categories
                $sql_active = "SELECT COUNT(*) as active FROM tbl_category WHERE active='Yes'";
                $res_active = mysqli_query($conn, $sql_active);
                $row_active = mysqli_fetch_assoc($res_active);
            ?>
            
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-tags"></i>
                </div>
                <div class="stat-info">
                    <h3><?php echo $row_total['total']; ?></h3>
                    <p>Total Categories</p>
                </div>
            </div>
            
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-star"></i>
                </div>
                <div class="stat-info">
                    <h3><?php echo $row_featured['featured']; ?></h3>
                    <p>Featured</p>
                </div>
            </div>
            
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="stat-info">
                    <h3><?php echo $row_active['active']; ?></h3>
                    <p>Active</p>
                </div>
            </div>
        </div>

        <!-- Page Header -->
        <div class="page-header">
            <h1>
                <i class="fas fa-tags"></i>
                Manage Food Categories
            </h1>
            <a href="<?php echo SITEURL; ?>admin/add-category.php" class="btn-add">
                <i class="fas fa-plus-circle"></i>
                Add New Category
            </a>
        </div>

        <!-- Alert Messages -->
        <?php 
        $alert_messages = [
            'add' => ['type' => 'success', 'icon' => 'check-circle', 'message' => 'Category added successfully!'],
            'remove' => ['type' => 'success', 'icon' => 'check-circle', 'message' => 'Category removed successfully!'],
            'delete' => ['type' => 'success', 'icon' => 'check-circle', 'message' => 'Category deleted successfully!'],
            'update' => ['type' => 'success', 'icon' => 'check-circle', 'message' => 'Category updated successfully!'],
            'upload' => ['type' => 'success', 'icon' => 'check-circle', 'message' => 'Image uploaded successfully!'],
            'no-category-found' => ['type' => 'error', 'icon' => 'exclamation-circle', 'message' => 'No category found!'],
            'failed-remove' => ['type' => 'error', 'icon' => 'exclamation-triangle', 'message' => 'Failed to remove category!']
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

        <!-- Categories Table -->
        <div class="table-container">
            <table class="modern-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Category Title</th>
                        <th>Image</th>
                        <th>Featured</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $sql = "SELECT * FROM tbl_category ORDER BY title ASC";
                        $res = mysqli_query($conn, $sql);
                        $count = mysqli_num_rows($res);
                        $sn = 1;

                        if($count > 0) {
                            while($row = mysqli_fetch_assoc($res)) {
                                $id = $row['id'];
                                $title = $row['title'];
                                $image_name = $row['image_name'];
                                $featured = $row['featured'];
                                $active = $row['active'];
                    ?>
                    <tr>
                        <td>
                            <div class="sn-badge"><?php echo $sn++; ?></div>
                        </td>
                        <td>
                            <strong><?php echo $title; ?></strong>
                        </td>
                        <td>
                            <?php if($image_name != ""): ?>
                                <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" 
                                     class="category-image" 
                                     alt="<?php echo $title; ?>"
                                     onerror="this.src='https://via.placeholder.com/80x80?text=No+Image'">
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
                                <a href="<?php echo SITEURL; ?>admin/update-category.php?id=<?php echo $id; ?>" 
                                   class="btn-action btn-update"
                                   title="Update Category">
                                    <i class="fas fa-edit"></i>
                                    <span>Update</span>
                                </a>
                                <a href="<?php echo SITEURL; ?>admin/delete-category.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name; ?>" 
                                   class="btn-action btn-delete"
                                   title="Delete Category"
                                   onclick="return confirm('Are you sure you want to delete this category?');">
                                    <i class="fas fa-trash-alt"></i>
                                    <span>Delete</span>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <?php 
                            }
                        } else {
                    ?>
                    <tr>
                        <td colspan="6" class="empty-state">
                            <div class="empty-state-content">
                                <i class="fas fa-folder-open"></i>
                                <p>No categories found. Click "Add New Category" to create your first category!</p>
                                <a href="<?php echo SITEURL; ?>admin/add-category.php" class="btn-add" style="display: inline-flex;">
                                    <i class="fas fa-plus-circle"></i>
                                    Add Your First Category
                                </a>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- Quick Tips -->
        <div style="margin-top: 30px; padding: 20px; background: #f8f9ff; border-radius: 15px;">
            <h4 style="color: #333; margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                <i class="fas fa-lightbulb" style="color: #667eea;"></i>
                Quick Tips
            </h4>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px;">
                <div style="display: flex; align-items: center; gap: 10px;">
                    <i class="fas fa-check-circle" style="color: #28a745;"></i>
                    <span style="color: #666;">Featured categories appear on homepage</span>
                </div>
                <div style="display: flex; align-items: center; gap: 10px;">
                    <i class="fas fa-check-circle" style="color: #28a745;"></i>
                    <span style="color: #666;">Use clear, descriptive category names</span>
                </div>
                <div style="display: flex; align-items: center; gap: 10px;">
                    <i class="fas fa-check-circle" style="color: #28a745;"></i>
                    <span style="color: #666;">Upload high-quality category images</span>
                </div>
                <div style="display: flex; align-items: center; gap: 10px;">
                    <i class="fas fa-check-circle" style="color: #28a745;"></i>
                    <span style="color: #666;">Inactive categories won't show to customers</span>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    // Add loading effect on delete
    document.querySelectorAll('.btn-delete').forEach(btn => {
        btn.addEventListener('click', function(e) {
            if(confirm('Are you sure you want to delete this category?')) {
                this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Deleting...';
            } else {
                e.preventDefault();
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
</script>

<?php include('partials/footer.php'); ?>