<?php 
// Start output buffering to prevent header issues
ob_start();

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('partials-front/menu.php');

// Check if connection exists
if(!isset($conn)) {
    die("Database connection not established");
}
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

    .page-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .page-header h1 {
        font-size: 42px;
        color: #333;
        margin-bottom: 15px;
    }

    .page-header h1::after {
        content: '';
        display: block;
        width: 100px;
        height: 4px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        margin: 10px auto 0;
        border-radius: 2px;
    }

    .order-container {
        display: grid;
        grid-template-columns: 1fr 1.5fr;
        gap: 30px;
        margin: 40px 0;
    }

    .order-summary {
        background: white;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        position: sticky;
        top: 20px;
    }

    .summary-title {
        font-size: 24px;
        color: #333;
        margin-bottom: 25px;
        padding-bottom: 15px;
        border-bottom: 2px solid #f0f0f0;
    }

    .food-item-card {
        display: flex;
        gap: 20px;
        padding: 15px;
        background: #f8f9ff;
        border-radius: 15px;
        margin-bottom: 25px;
    }

    .food-image {
        width: 120px;
        height: 120px;
        border-radius: 12px;
        overflow: hidden;
    }

    .food-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .food-details h3 {
        font-size: 22px;
        color: #333;
        margin-bottom: 10px;
    }

    .food-price {
        font-size: 28px;
        font-weight: 700;
        color: #667eea;
        margin-bottom: 15px;
    }

    .quantity-selector {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-top: 15px;
    }

    .quantity-controls {
        display: flex;
        align-items: center;
        background: white;
        border-radius: 30px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }

    .qty-btn {
        width: 40px;
        height: 40px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
        cursor: pointer;
        font-size: 18px;
    }

    .qty-input {
        width: 60px;
        height: 40px;
        border: none;
        text-align: center;
        font-size: 16px;
        font-weight: 600;
        color: #333;
        outline: none;
    }

    .price-breakdown {
        background: #f8f9ff;
        border-radius: 15px;
        padding: 20px;
        margin: 20px 0;
    }

    .price-row {
        display: flex;
        justify-content: space-between;
        padding: 10px 0;
        color: #666;
    }

    .price-row.total {
        border-top: 2px dashed #ddd;
        margin-top: 10px;
        padding-top: 15px;
        font-size: 20px;
        font-weight: 700;
        color: #333;
    }

    .price-row.total span:last-child {
        color: #667eea;
    }

    .delivery-form {
        background: white;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    }

    .form-title {
        font-size: 24px;
        color: #333;
        margin-bottom: 25px;
        padding-bottom: 15px;
        border-bottom: 2px solid #f0f0f0;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        color: #333;
        font-weight: 500;
        margin-bottom: 8px;
    }

    .form-control {
        width: 100%;
        padding: 15px;
        border: 2px solid #e0e0e0;
        border-radius: 12px;
        font-size: 16px;
        transition: 0.3s;
    }

    .form-control:focus {
        outline: none;
        border-color: #667eea;
    }

    .confirm-btn {
        width: 100%;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
        padding: 18px;
        border-radius: 12px;
        font-size: 18px;
        font-weight: 600;
        cursor: pointer;
        margin-top: 20px;
        transition: 0.3s;
    }

    .confirm-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
    }

    .debug-info {
        background: #f8f9ff;
        border-left: 4px solid #667eea;
        padding: 15px;
        margin: 20px 0;
        border-radius: 8px;
        font-family: monospace;
        font-size: 12px;
        overflow-x: auto;
    }

    .debug-info pre {
        margin: 0;
        white-space: pre-wrap;
    }

    .error-message {
        background: #f8d7da;
        color: #721c24;
        padding: 15px;
        border-radius: 10px;
        margin-bottom: 20px;
        border-left: 4px solid #dc3545;
    }

    .success-message {
        background: #d4edda;
        color: #155724;
        padding: 15px;
        border-radius: 10px;
        margin-bottom: 20px;
        border-left: 4px solid #28a745;
    }

    @media (max-width: 992px) {
        .order-container {
            grid-template-columns: 1fr;
        }
        .order-summary {
            position: static;
        }
        .main-content {
            margin-left: 0;
        }
    }

    @media (max-width: 768px) {
        .food-item-card {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        .quantity-selector {
            justify-content: center;
        }
        .page-header h1 {
            font-size: 32px;
        }
    }
</style>

<div class="main-content">
    <div class="container">

        <?php 
            // Get food_id from URL
            $food_id = isset($_GET['food_id']) ? intval($_GET['food_id']) : 0;
            
            // Debug: Show received food_id
            echo '<div class="debug-info">';
            echo '<strong>🔍 Debug Information:</strong><br>';
            echo 'Food ID from URL: ' . ($food_id ? $food_id : 'Not set') . '<br>';
            
            if($food_id > 0) {
                $sql = "SELECT * FROM tbl_food WHERE id = $food_id";
                $res = mysqli_query($conn, $sql);
                
                if($res && mysqli_num_rows($res) > 0) {
                    $row = mysqli_fetch_assoc($res);
                    $title = $row['title'];
                    $price = $row['price'];
                    $image_name = $row['image_name'];
                    echo '✅ Food found: ' . $title . ' - $' . $price . '<br>';
                } else {
                    echo '❌ Food not found in database!<br>';
                    $_SESSION['order_error'] = "Food item not found!";
                    header('Location: ' . SITEURL);
                    exit();
                }
            } else {
                echo '❌ No food ID provided!<br>';
                $_SESSION['order_error'] = "Invalid food selection!";
                header('Location: ' . SITEURL);
                exit();
            }
            echo '</div>';
        ?>

        <div class="page-header">
            <h1>Complete Your Order</h1>
            <p>You're just a few steps away from delicious food!</p>
        </div>

        <!-- Display error/success messages -->
        <?php if(isset($_SESSION['order_error'])): ?>
            <div class="error-message">
                <i class="fas fa-exclamation-circle"></i> <?php echo $_SESSION['order_error']; unset($_SESSION['order_error']); ?>
            </div>
        <?php endif; ?>

        <?php if(isset($_SESSION['order_success'])): ?>
            <div class="success-message">
                <i class="fas fa-check-circle"></i> <?php echo $_SESSION['order_success']; unset($_SESSION['order_success']); ?>
            </div>
        <?php endif; ?>

        <div class="order-container">
            
            <!-- Order Summary -->
            <div class="order-summary">
                <div class="summary-title">
                    <i class="fas fa-shopping-cart"></i> Order Summary
                </div>

                <div class="food-item-card">
                    <div class="food-image">
                        <?php if($image_name != "" && file_exists("../images/food/" . $image_name)): ?>
                            <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="<?php echo $title; ?>">
                        <?php else: ?>
                            <img src="https://via.placeholder.com/120x120?text=Food" alt="Food">
                        <?php endif; ?>
                    </div>
                    <div class="food-details">
                        <h3><?php echo $title; ?></h3>
                        <div class="food-price">
                            $<?php echo number_format($price, 2); ?>
                            <small>per item</small>
                        </div>
                        
                        <div class="quantity-selector">
                            <span class="quantity-label">Quantity:</span>
                            <div class="quantity-controls">
                                <button type="button" class="qty-btn" onclick="decreaseQty()">−</button>
                                <input type="number" class="qty-input" id="qty" value="1" min="1" readonly>
                                <button type="button" class="qty-btn" onclick="increaseQty()">+</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="price-breakdown">
                    <div class="price-row">
                        <span>Subtotal:</span>
                        <span id="subtotal">$<?php echo number_format($price, 2); ?></span>
                    </div>
                    <div class="price-row total">
                        <span>Total:</span>
                        <span id="total">$<?php echo number_format($price, 2); ?></span>
                    </div>
                </div>
            </div>

            <!-- Delivery Form -->
            <div class="delivery-form">
                <div class="form-title">
                    <i class="fas fa-truck"></i> Delivery Details
                </div>

                <form action="" method="POST" id="orderForm">
                    <input type="hidden" name="food" value="<?php echo $title; ?>">
                    <input type="hidden" name="price" value="<?php echo $price; ?>">
                    <input type="hidden" name="qty" id="qty_hidden" value="1">

                    <div class="form-group">
                        <label>Full Name *</label>
                        <input type="text" name="full-name" class="form-control" placeholder="John Doe" required>
                    </div>

                    <div class="form-group">
                        <label>Phone Number *</label>
                        <input type="tel" name="contact" class="form-control" placeholder="1234567890" required>
                    </div>

                    <div class="form-group">
                        <label>Email Address *</label>
                        <input type="email" name="email" class="form-control" placeholder="john@example.com" required>
                    </div>

                    <div class="form-group">
                        <label>Delivery Address *</label>
                        <textarea name="address" class="form-control" rows="4" placeholder="Street address, City, State, ZIP" required></textarea>
                    </div>

                    <button type="submit" name="submit" class="confirm-btn" id="submitBtn">
                        <i class="fas fa-check-circle"></i> Confirm Order
                    </button>
                </form>
            </div>
        </div>

        <?php 
            // Process order submission
            if(isset($_POST['submit']))
            {
                echo '<div class="debug-info">';
                echo '<strong>📝 Form Submitted:</strong><br>';
                
                // Get and sanitize form data
                $food = mysqli_real_escape_string($conn, $_POST['food']);
                $price = floatval($_POST['price']);
                $qty = intval($_POST['qty']);
                $total = $price * $qty;
                $order_date = date("Y-m-d H:i:s");
                $status = "Ordered";
                $customer_name = mysqli_real_escape_string($conn, $_POST['full-name']);
                $customer_contact = mysqli_real_escape_string($conn, $_POST['contact']);
                $customer_email = mysqli_real_escape_string($conn, $_POST['email']);
                $customer_address = mysqli_real_escape_string($conn, $_POST['address']);

                echo 'Food: ' . $food . '<br>';
                echo 'Price: ' . $price . '<br>';
                echo 'Quantity: ' . $qty . '<br>';
                echo 'Total: ' . $total . '<br>';
                echo 'Order Date: ' . $order_date . '<br>';
                echo 'Customer Name: ' . $customer_name . '<br>';
                echo 'Customer Contact: ' . $customer_contact . '<br>';
                echo 'Customer Email: ' . $customer_email . '<br>';
                echo 'Customer Address: ' . $customer_address . '<br>';
                echo '<hr>';

                // Check if all required fields are filled
                if(empty($customer_name) || empty($customer_contact) || empty($customer_email) || empty($customer_address)) {
                    echo '❌ Missing required fields!<br>';
                    $_SESSION['order_error'] = "Please fill in all required fields!";
                    header('Location: ' . $_SERVER['PHP_SELF'] . '?food_id=' . $food_id);
                    exit();
                }

                // Create the INSERT query
                $sql2 = "INSERT INTO tbl_order (food, price, qty, total, order_date, status, customer_name, customer_contact, customer_email, customer_address) 
                         VALUES ('$food', $price, $qty, $total, '$order_date', '$status', '$customer_name', '$customer_contact', '$customer_email', '$customer_address')";
                
                echo '<strong>SQL Query:</strong><br>';
                echo '<pre>' . htmlspecialchars($sql2) . '</pre><br>';
                
                // Execute the Query
                $res2 = mysqli_query($conn, $sql2);

                if($res2) {
                    $order_id = mysqli_insert_id($conn);
                    echo '✅ Order inserted successfully! Order ID: ' . $order_id . '<br>';
                    
                    $_SESSION['order_success'] = "Order placed successfully! Order #" . str_pad($order_id, 4, '0', STR_PAD_LEFT);
                    header('Location: ' . $_SERVER['PHP_SELF'] . '?food_id=' . $food_id . '&success=1');
                    exit();
                } else {
                    echo '❌ Database Error: ' . mysqli_error($conn) . '<br>';
                    $_SESSION['order_error'] = "Database error: " . mysqli_error($conn);
                    header('Location: ' . $_SERVER['PHP_SELF'] . '?food_id=' . $food_id);
                    exit();
                }
                echo '</div>';
            }
            
            // Display success modal if order was just placed
            if(isset($_GET['success']) && isset($_SESSION['order_success'])) {
                ?>
                <div class="success-overlay" id="successModal" style="position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.8); display: flex; align-items: center; justify-content: center; z-index: 9999;">
                    <div class="success-alert" style="background: white; border-radius: 24px; padding: 40px; text-align: center; max-width: 450px; width: 90%;">
                        <div style="width: 100px; height: 100px; background: linear-gradient(135deg, #28a745 0%, #20c997 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px;">
                            <i class="fas fa-check-circle" style="font-size: 50px; color: white;"></i>
                        </div>
                        <h2 style="font-size: 28px; color: #333; margin-bottom: 15px;">Order Confirmed! 🎉</h2>
                        <p style="color: #666; font-size: 16px; margin-bottom: 20px;"><?php echo $_SESSION['order_success']; ?></p>
                        <div class="redirect-timer" style="margin-top: 20px;">
                            <i class="fas fa-clock"></i> Redirecting to your orders in <span id="countdown" style="color: #667eea; font-weight: 600;">5</span> seconds
                        </div>
                        <a href="<?php echo SITEURL; ?>my-orders.php" class="btn-view-orders" style="display: inline-block; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 12px 30px; border-radius: 30px; text-decoration: none; margin-top: 20px;">
                            <i class="fas fa-clipboard-list"></i> View My Orders
                        </a>
                    </div>
                </div>
                
                <script>
                    let seconds = 5;
                    const countdownElement = document.getElementById('countdown');
                    
                    const timer = setInterval(() => {
                        seconds--;
                        if(countdownElement) countdownElement.textContent = seconds;
                        if(seconds <= 0) {
                            clearInterval(timer);
                            window.location.href = '<?php echo SITEURL; ?>my-orders.php';
                        }
                    }, 1000);
                </script>
                <?php
                unset($_SESSION['order_success']);
            }
        ?>

    </div>
</div>

<script>
    function increaseQty() {
        let qtyInput = document.getElementById('qty');
        let currentQty = parseInt(qtyInput.value);
        qtyInput.value = currentQty + 1;
        document.getElementById('qty_hidden').value = qtyInput.value;
        updatePrices();
    }

    function decreaseQty() {
        let qtyInput = document.getElementById('qty');
        let currentQty = parseInt(qtyInput.value);
        if(currentQty > 1) {
            qtyInput.value = currentQty - 1;
            document.getElementById('qty_hidden').value = qtyInput.value;
            updatePrices();
        }
    }

    function updatePrices() {
        let qty = parseInt(document.getElementById('qty').value);
        let pricePerItem = <?php echo $price; ?>;
        let subtotal = qty * pricePerItem;
        
        document.getElementById('subtotal').textContent = '$' + subtotal.toFixed(2);
        document.getElementById('total').textContent = '$' + subtotal.toFixed(2);
    }
</script>

<?php 
include('partials-front/footer.php');
ob_end_flush();
?>