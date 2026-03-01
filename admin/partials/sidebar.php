<style>
body {
    margin: 0;
    font-family: 'Segoe UI', sans-serif;
    background: #f4f6f9;
}

.dashboard-layout {
    display: flex;
}

/* Sidebar */
.sidebar {
    width: 250px;
    height: 100vh;
    background: #111827;
    color: #fff;
    position: fixed;
    left: 0;
    top: 0;
    transition: 0.3s;
}

.sidebar h2 {
    text-align: center;
    padding: 20px 0;
    background: #0f172a;
    margin: 0;
    font-size: 22px;
}

.sidebar ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.sidebar ul li {
    border-bottom: 1px solid #1f2937;
}

.sidebar ul li a {
    display: block;
    padding: 15px 20px;
    color: #cbd5e1;
    text-decoration: none;
    transition: 0.3s;
}

.sidebar ul li a:hover {
    background: #1f2937;
    color: #fff;
    padding-left: 25px;
}

/* Main Content Adjustment */
.main-content {
    margin-left: 250px;
    padding: 40px;
    width: 100%;
}

/* Responsive */
@media(max-width: 768px) {
    .sidebar {
        width: 200px;
    }

    .main-content {
        margin-left: 200px;
        padding: 20px;
    }
}
</style>

<div class="sidebar">
    <h2>Admin Panel</h2>
    <ul>
        <li><a href="index.php">Dashboard</a></li>
        <li><a href="manage-category.php">Categories</a></li>
        <li><a href="manage-food.php">Foods</a></li>
        <li><a href="manage-order.php">Orders</a></li>
        <li><a href="manage-admin.php">Admins</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</div>