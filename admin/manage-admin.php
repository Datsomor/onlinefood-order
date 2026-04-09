<?php include('partials/menu.php'); ?>

<style>
    /* Main Content Area */
    .main-content {
        margin-left: 300px;
        padding: 30px;
        transition: 0.3s;
        min-height: 100vh;
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    }

    .main-content.expanded {
        margin-left: 80px;
    }

    .manage-wrapper {
        max-width: 1200px;
        margin: 0 auto;
    }

    /* Page Header */
    .page-header {
        text-align: center;
        margin-bottom: 30px;
    }

    .page-header h1 {
        font-size: 36px;
        color: #333;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        margin-bottom: 10px;
    }

    .page-header h1 i {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 12px;
        border-radius: 15px;
        font-size: 24px;
    }

    .page-header p {
        color: #666;
        font-size: 14px;
    }

    /* Stats Cards */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        margin-bottom: 30px;
    }

    .stat-card {
        background: white;
        border-radius: 15px;
        padding: 25px;
        display: flex;
        align-items: center;
        gap: 15px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        transition: 0.3s;
    }

    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(102, 126, 234, 0.15);
    }

    .stat-icon {
        width: 55px;
        height: 55px;
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
        font-size: 28px;
        color: #333;
        margin-bottom: 5px;
    }

    .stat-info p {
        color: #666;
        font-size: 13px;
    }

    /* Add Admin Button */
    .action-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
        flex-wrap: wrap;
        gap: 15px;
    }

    .btn-add {
        background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
        color: white;
        padding: 12px 25px;
        border-radius: 10px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        font-weight: 600;
        transition: 0.3s;
        box-shadow: 0 5px 15px rgba(40, 167, 69, 0.3);
    }

    .btn-add:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(40, 167, 69, 0.4);
    }

    /* Search Box */
    .search-box {
        display: flex;
        align-items: center;
        gap: 10px;
        background: white;
        padding: 5px 15px;
        border-radius: 30px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }

    .search-box i {
        color: #999;
    }

    .search-box input {
        border: none;
        padding: 10px;
        width: 250px;
        outline: none;
        font-size: 14px;
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

    /* Table Container */
    .table-container {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    }

    .modern-table {
        width: 100%;
        border-collapse: collapse;
    }

    .modern-table thead tr {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }

    .modern-table th {
        padding: 18px 15px;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 13px;
        letter-spacing: 0.5px;
        text-align: left;
    }

    .modern-table td {
        padding: 16px 15px;
        border-bottom: 1px solid #f0f0f0;
        color: #555;
        vertical-align: middle;
    }

    .modern-table tbody tr {
        transition: 0.3s;
    }

    .modern-table tbody tr:hover {
        background: #f8f9ff;
    }

    /* Serial Number Badge */
    .sn-badge {
        width: 30px;
        height: 30px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        font-size: 13px;
    }

    /* Admin Avatar */
    .admin-cell {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .admin-avatar {
        width: 40px;
        height: 40px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: 600;
        font-size: 16px;
    }

    .admin-info {
        display: flex;
        flex-direction: column;
    }

    .admin-name {
        font-weight: 600;
        color: #333;
    }

    .admin-username {
        font-size: 12px;
        color: #999;
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
        gap: 6px;
        transition: 0.3s;
    }

    .btn-password {
        background: #cce5ff;
        color: #004085;
    }

    .btn-password:hover {
        background: #004085;
        color: white;
        transform: translateY(-2px);
    }

    .btn-update {
        background: #d4edda;
        color: #155724;
    }

    .btn-update:hover {
        background: #155724;
        color: white;
        transform: translateY(-2px);
    }

    .btn-delete {
        background: #f8d7da;
        color: #721c24;
    }

    .btn-delete:hover {
        background: #721c24;
        color: white;
        transform: translateY(-2px);
    }

    /* Empty State */
    .empty-state {
        text-align: center;
        padding: 60px;
    }

    .empty-state-icon {
        width: 100px;
        height: 100px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
    }

    .empty-state-icon i {
        font-size: 50px;
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
    }

    /* Responsive */
    @media (max-width: 992px) {
        .main-content {
            margin-left: 0;
        }
    }

    @media (max-width: 768px) {
        .main-content {
            padding: 20px;
        }
        
        .action-bar {
            flex-direction: column;
            align-items: stretch;
        }
        
        .search-box {
            width: 100%;
        }
        
        .search-box input {
            width: 100%;
        }
        
        .modern-table {
            font-size: 13px;
        }
        
        .action-buttons {
            flex-direction: column;
        }
        
        .btn-action {
            justify-content: center;
        }
    }
</style>

<div class="main-content">
    <div class="manage-wrapper">

        <!-- Page Header -->
        <div class="page-header">
            <h1>
                <i class="fas fa-users-cog"></i>
                Manage Administrators
            </h1>
            <p>View, add, update, and manage system administrators</p>
        </div>

        <?php 
            // Display all session messages
            $messages = [
                'add' => 'success',
                'delete' => 'success',
                'update' => 'success',
                'user-not-found' => 'error',
                'pwd-not-match' => 'error',
                'change-pwd' => 'success'
            ];

            foreach($messages as $key => $type) {
                if(isset($_SESSION[$key])) {
                    echo '<div class="alert alert-' . $type . '">' . $_SESSION[$key] . '</div>';
                    unset($_SESSION[$key]);
                }
            }
        ?>

        <?php
        // Get statistics
        $sql_stats = "SELECT COUNT(*) as total FROM tbl_admin";
        $res_stats = mysqli_query($conn, $sql_stats);
        $stats = mysqli_fetch_assoc($res_stats);
        $total_admins = $stats['total'];
        ?>

        <!-- Statistics Cards -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="stat-info">
                    <h3><?php echo $total_admins; ?></h3>
                    <p>Total Administrators</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-user-shield"></i>
                </div>
                <div class="stat-info">
                    <h3><?php echo $total_admins; ?></h3>
                    <p>Active Admins</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-calendar"></i>
                </div>
                <div class="stat-info">
                    <h3><?php echo date('Y'); ?></h3>
                    <p>Current Year</p>
                </div>
            </div>
        </div>

        <!-- Action Bar -->
        <div class="action-bar">
            <a href="add-admin.php" class="btn-add">
                <i class="fas fa-plus-circle"></i>
                Add New Admin
            </a>
            <div class="search-box">
                <i class="fas fa-search"></i>
                <input type="text" id="searchInput" placeholder="Search by name or username...">
                <button onclick="searchAdmins()"><i class="fas fa-search"></i></button>
            </div>
        </div>

        <!-- Admins Table -->
        <div class="table-container">
            <table class="modern-table" id="adminTable">
                <thead>
                    <tr>
                        <th width="5%">#</th>
                        <th width="35%">Administrator</th>
                        <th width="30%">Username</th>
                        <th width="30%">Actions</th>
                    </tr>
                </thead>
                <tbody id="adminTableBody">
                    <?php 
                        $sql = "SELECT * FROM tbl_admin ORDER BY id ASC";
                        $res = mysqli_query($conn, $sql);
                        $count = mysqli_num_rows($res);
                        $sn = 1;

                        if($count > 0) {
                            while($rows = mysqli_fetch_assoc($res)) {
                                $id = $rows['id'];
                                $full_name = $rows['full_name'];
                                $username = $rows['username'];
                                // Get initials for avatar
                                $initials = strtoupper(substr($full_name, 0, 1));
                                if(strpos($full_name, ' ') !== false) {
                                    $initials .= strtoupper(substr($full_name, strpos($full_name, ' ') + 1, 1));
                                }
                    ?>
                    <tr data-fullname="<?php echo strtolower($full_name); ?>" data-username="<?php echo strtolower($username); ?>">
                        <td><div class="sn-badge"><?php echo $sn++; ?></div></td>
                        <td>
                            <div class="admin-cell">
                                <div class="admin-avatar">
                                    <?php echo $initials; ?>
                                </div>
                                <div class="admin-info">
                                    <span class="admin-name"><?php echo $full_name; ?></span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <i class="fas fa-at" style="color: #667eea; margin-right: 5px;"></i>
                            <?php echo $username; ?>
                        </td>
                        <td>
                            <div class="action-buttons">
                                <a href="<?php echo SITEURL; ?>admin/update-password.php?id=<?php echo $id; ?>" class="btn-action btn-password">
                                    <i class="fas fa-key"></i>
                                    Change Password
                                </a>
                                <a href="<?php echo SITEURL; ?>admin/update-admin.php?id=<?php echo $id; ?>" class="btn-action btn-update">
                                    <i class="fas fa-edit"></i>
                                    Update
                                </a>
                                <a href="<?php echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id; ?>" class="btn-action btn-delete" onclick="return confirmDelete('<?php echo $full_name; ?>')">
                                    <i class="fas fa-trash-alt"></i>
                                    Delete
                                </a>
                            </div>
                        </td>
                    </tr>
                    <?php 
                            }
                        } else {
                    ?>
                    <tr>
                        <td colspan="4" class="empty-state">
                            <div class="empty-state-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <h3>No Administrators Found</h3>
                            <p>Click the "Add New Admin" button to create your first administrator account.</p>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
</div>

<script>
    // Search functionality
    function searchAdmins() {
        const searchTerm = document.getElementById('searchInput').value.toLowerCase();
        const rows = document.querySelectorAll('#adminTableBody tr');
        
        rows.forEach(row => {
            // Skip empty state row
            if(row.querySelector('.empty-state')) return;
            
            const fullname = row.getAttribute('data-fullname') || '';
            const username = row.getAttribute('data-username') || '';
            
            if(fullname.includes(searchTerm) || username.includes(searchTerm) || searchTerm === '') {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    }

    // Real-time search
    document.getElementById('searchInput').addEventListener('input', function() {
        searchAdmins();
    });

    // Confirm delete function
    function confirmDelete(adminName) {
        return confirm(`Are you sure you want to delete "${adminName}"? This action cannot be undone.`);
    }

    // Add loading effect on delete buttons
    document.querySelectorAll('.btn-delete').forEach(btn => {
        btn.addEventListener('click', function(e) {
            if(!confirmDelete(this.closest('tr')?.querySelector('.admin-name')?.innerText || 'this admin')) {
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

<style>
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
            transform: translateY(-20px);
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

    .alert-success i,
    .alert-error i {
        font-size: 20px;
    }

    .alert-success i {
        color: #28a745;
    }

    .alert-error i {
        color: #dc3545;
    }
</style>

<script>
    // Add alert icons
    document.querySelectorAll('.alert-success').forEach(alert => {
        if(!alert.querySelector('i')) {
            alert.innerHTML = '<i class="fas fa-check-circle"></i>' + alert.innerHTML;
        }
    });
    
    document.querySelectorAll('.alert-error').forEach(alert => {
        if(!alert.querySelector('i')) {
            alert.innerHTML = '<i class="fas fa-exclamation-circle"></i>' + alert.innerHTML;
        }
    });
</script>

<?php include('partials/footer.php'); ?>