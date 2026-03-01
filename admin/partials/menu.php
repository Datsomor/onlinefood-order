<?php 
    include('../config/constants.php'); 
    include('login-check.php');
?>

<html>
    <head>
        <title>Online Food Order - Admin</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link rel="stylesheet" href="../css/admin.css">
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }

            body {
                background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), 
                            url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=1920&q=80');
                background-size: cover;
                background-attachment: fixed;
                background-position: center;
                min-height: 100vh;
            }

            /* Sidebar Styles */
            .sidebar {
                position: fixed;
                left: 0;
                top: 0;
                height: 100%;
                width: 280px;
                background: rgba(255, 255, 255, 0.95);
                backdrop-filter: blur(10px);
                box-shadow: 2px 0 20px rgba(0, 0, 0, 0.1);
                transition: all 0.3s ease;
                z-index: 1000;
                overflow-y: auto;
            }

            .sidebar.collapsed {
                width: 80px;
            }

            .sidebar-header {
                padding: 20px;
                display: flex;
                align-items: center;
                justify-content: space-between;
                border-bottom: 2px solid #f0f0f0;
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                color: white;
            }

            .logo-area {
                display: flex;
                align-items: center;
                gap: 10px;
                overflow: hidden;
            }

            .logo-icon {
                font-size: 30px;
                min-width: 40px;
            }

            .logo-text {
                font-size: 18px;
                font-weight: 600;
                white-space: nowrap;
                transition: 0.3s;
            }

            .sidebar.collapsed .logo-text {
                opacity: 0;
                width: 0;
            }

            .toggle-btn {
                background: none;
                border: none;
                color: white;
                font-size: 20px;
                cursor: pointer;
                padding: 5px;
                transition: 0.3s;
            }

            .toggle-btn:hover {
                transform: scale(1.1);
            }

            /* Admin Profile */
            .admin-profile {
                padding: 20px;
                text-align: center;
                border-bottom: 2px solid #f0f0f0;
                background: rgba(255, 255, 255, 0.5);
            }

            .admin-avatar {
                width: 80px;
                height: 80px;
                border-radius: 50%;
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 0 auto 10px;
                border: 3px solid white;
                box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            }

            .admin-avatar i {
                font-size: 40px;
                color: white;
            }

            .admin-name {
                font-weight: 600;
                color: #333;
                white-space: nowrap;
                transition: 0.3s;
            }

            .admin-role {
                font-size: 12px;
                color: #666;
                white-space: nowrap;
                transition: 0.3s;
            }

            .sidebar.collapsed .admin-name,
            .sidebar.collapsed .admin-role {
                opacity: 0;
                height: 0;
                margin: 0;
            }

            /* Navigation Menu */
            .nav-menu {
                list-style: none;
                padding: 20px 0;
            }

            .nav-item {
                margin: 5px 15px;
                border-radius: 10px;
                transition: 0.3s;
            }

            .nav-item:hover {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            }

            .nav-item:hover .nav-link {
                color: white;
            }

            .nav-link {
                display: flex;
                align-items: center;
                padding: 12px 15px;
                text-decoration: none;
                color: #333;
                gap: 15px;
                transition: 0.3s;
            }

            .nav-link i {
                font-size: 20px;
                min-width: 25px;
                text-align: center;
            }

            .nav-text {
                white-space: nowrap;
                transition: 0.3s;
                font-weight: 500;
            }

            .sidebar.collapsed .nav-text {
                opacity: 0;
                width: 0;
                display: none;
            }

            .nav-item.active {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            }

            .nav-item.active .nav-link {
                color: white;
            }

            /* Main Content Adjustment */
            .main-content {
                margin-left: 280px;
                padding: 20px;
                transition: 0.3s;
                min-height: 100vh;
            }

            .main-content.expanded {
                margin-left: 80px;
            }

            /* Responsive Design */
            @media (max-width: 768px) {
                .sidebar {
                    left: -280px;
                }

                .sidebar.mobile-active {
                    left: 0;
                }

                .main-content {
                    margin-left: 0 !important;
                }

                .mobile-menu-btn {
                    display: block !important;
                    position: fixed;
                    top: 20px;
                    left: 20px;
                    z-index: 999;
                    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                    color: white;
                    border: none;
                    padding: 10px 15px;
                    border-radius: 5px;
                    cursor: pointer;
                    font-size: 20px;
                }
            }

            .mobile-menu-btn {
                display: none;
            }

            /* Scrollbar Styling */
            .sidebar::-webkit-scrollbar {
                width: 5px;
            }

            .sidebar::-webkit-scrollbar-track {
                background: #f1f1f1;
            }

            .sidebar::-webkit-scrollbar-thumb {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                border-radius: 5px;
            }
        </style>
    </head>
    
    <body>
        <!-- Mobile Menu Button -->
        <button class="mobile-menu-btn" onclick="toggleMobileMenu()">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <div class="logo-area">
                    <i class="fas fa-utensils logo-icon"></i>
                    <span class="logo-text">FoodieAdmin</span>
                </div>
                <button class="toggle-btn" onclick="toggleSidebar()">
                    <i class="fas fa-chevron-left" id="toggleIcon"></i>
                </button>
            </div>

            <div class="admin-profile">
                <div class="admin-avatar">
                    <i class="fas fa-user"></i>
                </div>
                <div class="admin-name">Administrator</div>
                <div class="admin-role">Super Admin</div>
            </div>

            <ul class="nav-menu">
                <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">
                    <a href="index.php" class="nav-link">
                        <i class="fas fa-home"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'manage-category.php' ? 'active' : ''; ?>">
                    <a href="manage-category.php" class="nav-link">
                        <i class="fas fa-tags"></i>
                        <span class="nav-text">Categories</span>
                    </a>
                </li>
                <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'manage-food.php' ? 'active' : ''; ?>">
                    <a href="manage-food.php" class="nav-link">
                        <i class="fas fa-pizza-slice"></i>
                        <span class="nav-text">Food Items</span>
                    </a>
                </li>
                <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'manage-order.php' ? 'active' : ''; ?>">
                    <a href="manage-order.php" class="nav-link">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="nav-text">Orders</span>
                    </a>
                </li>
                <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'manage-admin.php' ? 'active' : ''; ?>">
                    <a href="manage-admin.php" class="nav-link">
                        <i class="fas fa-users-cog"></i>
                        <span class="nav-text">Manage Admins</span>
                    </a>
                </li>

                <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'analytics.php' ? 'active' : ''; ?>">
                    <a href="analytics.php" class="nav-link">
                        <i class="fas fa-chart-line"></i>
                        <span class="nav-text">Analytics</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="logout.php" class="nav-link">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="nav-text">Logout</span>
                    </a>
                </li>
            </ul>
        </div>

        <script>
            function toggleSidebar() {
                const sidebar = document.getElementById('sidebar');
                const mainContent = document.querySelector('.main-content');
                const toggleIcon = document.getElementById('toggleIcon');
                
                sidebar.classList.toggle('collapsed');
                
                if (mainContent) {
                    mainContent.classList.toggle('expanded');
                }
                
                if (sidebar.classList.contains('collapsed')) {
                    toggleIcon.classList.remove('fa-chevron-left');
                    toggleIcon.classList.add('fa-chevron-right');
                } else {
                    toggleIcon.classList.remove('fa-chevron-right');
                    toggleIcon.classList.add('fa-chevron-left');
                }
            }

            function toggleMobileMenu() {
                const sidebar = document.getElementById('sidebar');
                sidebar.classList.toggle('mobile-active');
            }

            // Close sidebar when clicking outside on mobile
            document.addEventListener('click', function(event) {
                const sidebar = document.getElementById('sidebar');
                const mobileBtn = document.querySelector('.mobile-menu-btn');
                
                if (window.innerWidth <= 768) {
                    if (!sidebar.contains(event.target) && !mobileBtn.contains(event.target)) {
                        sidebar.classList.remove('mobile-active');
                    }
                }
            });
        </script>
    </body>
</html>