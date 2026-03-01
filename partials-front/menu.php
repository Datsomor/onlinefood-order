<?php include('config/constants.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Food Order System</title>
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
        }

        /* Sidebar Styles */
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            height: 100%;
            width: 300px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            box-shadow: 2px 0 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            z-index: 1000;
            overflow-y: auto;
        }

        .sidebar.collapsed {
            width: 80px;
        }

        /* Food-themed animated background */
        .sidebar::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" opacity="0.1"><path d="M20,30 Q30,20 40,30 T60,30 T80,30" stroke="white" fill="none" stroke-width="2"/><circle cx="30" cy="50" r="5" fill="white"/><circle cx="70" cy="50" r="5" fill="white"/><path d="M45,70 L55,70 L50,80 Z" fill="white"/></svg>');
            background-size: 150px 150px;
            background-repeat: repeat;
            animation: float 20s linear infinite;
            pointer-events: none;
        }

        @keyframes float {
            0% { background-position: 0 0; }
            100% { background-position: 300px 300px; }
        }

        /* Logo Area */
        .sidebar-header {
            padding: 30px 20px;
            text-align: center;
            border-bottom: 2px solid rgba(255, 255, 255, 0.1);
            position: relative;
        }

        .logo-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }

        .logo-image {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            transition: 0.3s;
        }

        .logo-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .logo-text {
            font-size: 24px;
            font-weight: 700;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            white-space: nowrap;
            transition: 0.3s;
        }

        .sidebar.collapsed .logo-text {
            opacity: 0;
            width: 0;
            display: none;
        }

        .sidebar.collapsed .logo-image {
            width: 40px;
            height: 40px;
        }

        /* Toggle Button */
        .toggle-btn {
            position: absolute;
            right: -15px;
            top: 50%;
            transform: translateY(-50%);
            width: 30px;
            height: 30px;
            background: white;
            border: none;
            border-radius: 50%;
            color: #764ba2;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            z-index: 10;
        }

        .toggle-btn:hover {
            transform: translateY(-50%) scale(1.1);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        /* User Profile Section */
        .user-profile {
            padding: 25px 20px;
            text-align: center;
            border-bottom: 2px solid rgba(255, 255, 255, 0.1);
        }

        .user-avatar {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #ff6b6b 0%, #ff8e8e 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            border: 3px solid white;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
            transition: 0.3s;
        }

        .user-avatar i {
            font-size: 40px;
            color: white;
        }

        .user-name {
            font-weight: 600;
            color: white;
            margin-bottom: 5px;
            white-space: nowrap;
            transition: 0.3s;
        }

        .user-role {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.8);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
            white-space: nowrap;
            transition: 0.3s;
        }

        .user-role i {
            font-size: 10px;
        }

        .sidebar.collapsed .user-avatar {
            width: 50px;
            height: 50px;
        }

        .sidebar.collapsed .user-avatar i {
            font-size: 25px;
        }

        .sidebar.collapsed .user-name,
        .sidebar.collapsed .user-role {
            opacity: 0;
            height: 0;
            margin: 0;
            display: none;
        }

        /* Navigation Menu */
        .nav-menu {
            list-style: none;
            padding: 20px 0;
        }

        .nav-item {
            margin: 5px 15px;
            border-radius: 12px;
            transition: 0.3s;
            position: relative;
            overflow: hidden;
        }

        .nav-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 4px;
            background: white;
            transform: scaleY(0);
            transition: transform 0.3s;
        }

        .nav-item:hover::before,
        .nav-item.active::before {
            transform: scaleY(1);
        }

        .nav-item:hover {
            background: rgba(255, 255, 255, 0.15);
        }

        .nav-item.active {
            background: rgba(255, 255, 255, 0.2);
        }

        .nav-link {
            display: flex;
            align-items: center;
            padding: 15px 20px;
            text-decoration: none;
            color: white;
            gap: 15px;
            transition: 0.3s;
            position: relative;
            z-index: 1;
        }

        .nav-link i {
            font-size: 22px;
            width: 25px;
            text-align: center;
            transition: 0.3s;
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

        /* Food icons specific styling */
        .nav-link .fa-pizza-slice { color: #ffd93d; }
        .nav-link .fa-hamburger { color: #ff9f43; }
        .nav-link .fa-utensils { color: #ff6b6b; }
        .nav-link .fa-shopping-cart { color: #4ecdc4; }
        .nav-link .fa-tags { color: #a8e6cf; }
        .nav-link .fa-phone { color: #ffd3b6; }

        /* Badge for notifications */
        .nav-badge {
            background: #ff6b6b;
            color: white;
            font-size: 10px;
            padding: 2px 6px;
            border-radius: 10px;
            margin-left: auto;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        /* Food item animation */
        .food-item {
            position: absolute;
            font-size: 20px;
            opacity: 0.1;
            animation: float-item 10s linear infinite;
            pointer-events: none;
        }

        @keyframes float-item {
            0% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0.1;
            }
            100% {
                transform: translateY(-100px) rotate(360deg);
                opacity: 0;
            }
        }

        /* Main Content Area */
        .main-content {
            margin-left: 300px;
            padding: 20px;
            transition: 0.3s;
            min-height: 100vh;
        }

        .main-content.expanded {
            margin-left: 80px;
        }

        /* Header with welcome message */
        .content-header {
            background: white;
            border-radius: 15px;
            padding: 20px 30px;
            margin-bottom: 30px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .welcome-text h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 5px;
        }

        .welcome-text p {
            color: #666;
            font-size: 14px;
        }

        .food-search {
            background: #f0f0f0;
            border-radius: 30px;
            padding: 5px;
            display: flex;
            align-items: center;
        }

        .food-search input {
            border: none;
            background: transparent;
            padding: 10px 20px;
            outline: none;
            width: 250px;
        }

        .food-search button {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            color: white;
            padding: 10px 25px;
            border-radius: 30px;
            cursor: pointer;
            transition: 0.3s;
        }

        .food-search button:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
        }

        /* Mobile Menu Button */
        .mobile-menu-btn {
            display: none;
            position: fixed;
            top: 20px;
            left: 20px;
            z-index: 999;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 12px 15px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .sidebar {
                left: -300px;
            }

            .sidebar.mobile-active {
                left: 0;
            }

            .main-content {
                margin-left: 0 !important;
            }

            .mobile-menu-btn {
                display: block;
            }

            .content-header {
                flex-direction: column;
                align-items: stretch;
            }

            .food-search {
                width: 100%;
            }

            .food-search input {
                width: 100%;
            }
        }

        /* Scrollbar Styling */
        .sidebar::-webkit-scrollbar {
            width: 5px;
        }

        .sidebar::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
        }

        .sidebar::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.3);
            border-radius: 5px;
        }

        .sidebar::-webkit-scrollbar-thumb:hover {
            background: rgba(255, 255, 255, 0.5);
        }

        /* Food-themed hover effects */
        .nav-item:hover .nav-link i {
            transform: rotate(5deg) scale(1.1);
        }

        /* Special offer badge */
        .offer-badge {
            background: linear-gradient(135deg, #ff6b6b 0%, #ff8e8e 100%);
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 10px;
            font-weight: 600;
            margin-left: 10px;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-2px); }
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
        <!-- Animated food items -->
        <div class="food-item" style="left: 10%; animation-delay: 0s;">🍕</div>
        <div class="food-item" style="left: 30%; animation-delay: 2s;">🍔</div>
        <div class="food-item" style="left: 50%; animation-delay: 4s;">🍜</div>
        <div class="food-item" style="left: 70%; animation-delay: 6s;">🍣</div>
        <div class="food-item" style="left: 90%; animation-delay: 8s;">🍩</div>

        <!-- Sidebar Header with Logo -->
        <div class="sidebar-header">
            <div class="logo-wrapper">
                <div class="logo-image">
                    <img src="images/ordersta.png" alt="Foodie Logo" onerror="this.src='https://via.placeholder.com/50x50?text=🍕'">
                </div>
                <span class="logo-text">FoodieExpress</span>
            </div>
            <button class="toggle-btn" onclick="toggleSidebar()">
                <i class="fas fa-chevron-left" id="toggleIcon"></i>
            </button>
        </div>

        <!-- User Profile Section -->
        <div class="user-profile">
            <div class="user-avatar">
                <i class="fas fa-user"></i>
            </div>
            <?php
            // You can make this dynamic based on logged-in user
            $user_name = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : 'Guest User';
            ?>
            <div class="user-name"><?php echo $user_name; ?></div>
            <div class="user-role">
                <i class="fas fa-crown"></i>
                Food Lover
            </div>
        </div>

        <!-- Navigation Menu -->
        <ul class="nav-menu">
            <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">
                <a href="<?php echo SITEURL; ?>" class="nav-link">
                    <i class="fas fa-home"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'categories.php' ? 'active' : ''; ?>">
                <a href="<?php echo SITEURL; ?>categories.php" class="nav-link">
                    <i class="fas fa-tags"></i>
                    <span class="nav-text">Categories</span>
                    <span class="nav-badge">New</span>
                </a>
            </li>
            <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'foods.php' ? 'active' : ''; ?>">
                <a href="<?php echo SITEURL; ?>foods.php" class="nav-link">
                    <i class="fas fa-pizza-slice"></i>
                    <span class="nav-text">Food Items</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo SITEURL; ?>my-orders.php" class="nav-link">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="nav-text">My Orders</span>
                    <span class="offer-badge">3</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo SITEURL; ?>my-fav.php" class="nav-link">
                    <i class="fas fa-heart"></i>
                    <span class="nav-text">Favorites</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-truck"></i>
                    <span class="nav-text">Track Order</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo SITEURL; ?>contact-us.php" class="nav-link">
                    <i class="fas fa-phone"></i>
                    <span class="nav-text">Contact</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-cog"></i>
                    <span class="nav-text">Settings</span>
                </a>
            </li>
        </ul>

        <!-- Special Offer Section -->
        <div style="padding: 20px; margin: 15px; background: rgba(255, 255, 255, 0.15); border-radius: 12px; text-align: center;">
            <i class="fas fa-gift" style="color: #ffd93d; font-size: 24px; margin-bottom: 10px;"></i>
            <p style="color: white; font-size: 12px;">Special Offer!</p>
            <p style="color: #ffd93d; font-weight: 600;">30% OFF on first order</p>
        </div>
    </div>

    <!-- Main Content Area -->
    
    <!-- <div class="main-content" id="mainContent"-->>
        <!-- Content Header with Welcome Message -->
        <!--<div class="content-header">
            <div class="welcome-text">
                <h2>
                    <i class="fas fa-hamburger" style="color: #ff6b6b; margin-right: 10px;"></i>
                    Hungry, <?php echo $user_name; ?>?
                </h2>
                <p>Discover delicious food from our menu</p>
            </div>
            <div class="food-search">
                <input type="text" placeholder="Search for food...">
                <button><i class="fas fa-search"></i> Search</button>
            </div>
        </div>
-->
        <!-- The rest of your page content will go here -->
        <!-- This is where your existing page content will be included -->

    </div>
    

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('mainContent');
            const toggleIcon = document.getElementById('toggleIcon');
            
            sidebar.classList.toggle('collapsed');
            mainContent.classList.toggle('expanded');
            
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

        // Add active class to current page
        document.addEventListener('DOMContentLoaded', function() {
            const currentPage = window.location.pathname.split('/').pop();
            const navItems = document.querySelectorAll('.nav-item');
            
            navItems.forEach(item => {
                const link = item.querySelector('a');
                if (link && link.getAttribute('href').includes(currentPage)) {
                    item.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>