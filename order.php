<?php include('partials-front/menu.php'); ?>

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

    /* Container Adjustments */
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    /* Page Header */
    .page-header {
        text-align: center;
        margin-bottom: 40px;
        position: relative;
    }

    .page-header h1 {
        font-size: 42px;
        color: #333;
        margin-bottom: 15px;
        position: relative;
        display: inline-block;
    }

    .page-header h1::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 4px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 2px;
    }

    .page-header p {
        color: #666;
        font-size: 18px;
        max-width: 600px;
        margin: 0 auto;
    }

    /* Order Form Container */
    .order-container {
        display: grid;
        grid-template-columns: 1fr 1.5fr;
        gap: 30px;
        margin: 40px 0;
    }

    /* Order Summary Card */
    .order-summary {
        background: white;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        position: sticky;
        top: 20px;
        height: fit-content;
        animation: slideInLeft 0.6s ease;
    }

    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(-30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .summary-title {
        font-size: 24px;
        color: #333;
        margin-bottom: 25px;
        display: flex;
        align-items: center;
        gap: 10px;
        padding-bottom: 15px;
        border-bottom: 2px solid #f0f0f0;
    }

    .summary-title i {
        color: #667eea;
    }

    /* Food Item Card */
    .food-item-card {
        display: flex;
        gap: 20px;
        margin-bottom: 25px;
        padding: 15px;
        background: #f8f9ff;
        border-radius: 15px;
        transition: 0.3s;
    }

    .food-item-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(102, 126, 234, 0.1);
    }

    .food-image {
        width: 120px;
        height: 120px;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .food-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: 0.5s;
    }

    .food-item-card:hover .food-image img {
        transform: scale(1.1);
    }

    .food-details {
        flex: 1;
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

    .food-price small {
        font-size: 14px;
        color: #999;
        font-weight: normal;
    }

    /* Quantity Selector */
    .quantity-selector {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-top: 15px;
    }

    .quantity-label {
        color: #666;
        font-size: 14px;
        display: flex;
        align-items: center;
        gap: 5px;
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
        transition: 0.3s;
    }

    .qty-btn:hover {
        background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
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

    /* Price Breakdown */
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

    /* Delivery Form */
    .delivery-form {
        background: white;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        animation: slideInRight 0.6s ease;
    }

    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .form-title {
        font-size: 24px;
        color: #333;
        margin-bottom: 25px;
        display: flex;
        align-items: center;
        gap: 10px;
        padding-bottom: 15px;
        border-bottom: 2px solid #f0f0f0;
    }

    .form-title i {
        color: #667eea;
    }

    /* Form Grid */
    .form-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group.full-width {
        grid-column: span 2;
    }

    .form-group label {
        display: flex;
        align-items: center;
        gap: 8px;
        color: #333;
        font-weight: 500;
        margin-bottom: 8px;
    }

    .form-group label i {
        color: #667eea;
        font-size: 16px;
    }

    .form-control {
        width: 100%;
        padding: 15px;
        border: 2px solid #e0e0e0;
        border-radius: 12px;
        font-size: 16px;
        transition: 0.3s;
        background: white;
    }

    .form-control:focus {
        outline: none;
        border-color: #667eea;
        box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
    }

    .form-control:hover {
        border-color: #764ba2;
    }

    textarea.form-control {
        resize: vertical;
        min-height: 120px;
    }

    /* Confirm Order Button */
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
        transition: 0.3s;
        margin-top: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    .confirm-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
    }

    .confirm-btn i {
        font-size: 20px;
    }

    /* Security Badge */
    .security-badge {
        display: flex;
        align-items: center;
        gap: 10px;
        background: #f8f9ff;
        padding: 15px;
        border-radius: 10px;
        margin-top: 20px;
    }

    .security-badge i {
        color: #28a745;
        font-size: 24px;
    }

    .security-badge p {
        color: #666;
        font-size: 13px;
        line-height: 1.5;
    }

    /* Error Message */
    .error-message {
        background: #f8d7da;
        color: #721c24;
        padding: 15px 20px;
        border-radius: 10px;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 10px;
        border-left: 4px solid #dc3545;
    }

    .error-message i {
        font-size: 20px;
    }

    /* Responsive Design */
    @media (max-width: 992px) {
        .order-container {
            grid-template-columns: 1fr;
        }

        .order-summary {
            position: static;
        }
    }

    @media (max-width: 768px) {
        .main-content {
            margin-left: 0;
        }

        .page-header h1 {
            font-size: 32px;
        }

        .form-grid {
            grid-template-columns: 1fr;
        }

        .form-group.full-width {
            grid-column: span 1;
        }

        .food-item-card {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .food-image {
            width: 150px;
            height: 150px;
        }

        .quantity-selector {
            justify-content: center;
        }
    }

    /* Loading State */
    .btn-loading {
        position: relative;
        pointer-events: none;
        opacity: 0.7;
    }

    .btn-loading::after {
        content: '';
        position: absolute;
        width: 20px;
        height: 20px;
        border: 2px solid white;
        border-top-color: transparent;
        border-radius: 50%;
        animation: spin 0.8s linear infinite;
    }

    @keyframes spin {
        to { transform: rotate(360deg); }
    }
</style>

<div class="main-content" id="mainContent">
    <div class="container">

        <?php 
            // Enable error reporting for debugging (remove in production)
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            
            //Check whether food id is set or not
            if(isset($_GET['food_id']))
            {
                $food_id = mysqli_real_escape_string($conn, $_GET['food_id']);
                $sql = "SELECT * FROM tbl_food WHERE id=$food_id";
                $res = mysqli_query($conn, $sql);
                $count = mysqli_num_rows($res);
                
                if($count==1)
                {
                    $row = mysqli_fetch_assoc($res);
                    $title = $row['title'];
                    $price = $row['price'];
                    $image_name = $row['image_name'];
                }
                else
                {
                    $_SESSION['order'] = "<div class='error text-center'>Food item not found.</div>";
                    header('location:'.SITEURL);
                    exit();
                }
            }
            else
            {
                header('location:'.SITEURL);
                exit();
            }
        ?>

        <!-- Page Header -->
        <div class="page-header">
            <h1>
                <i class="fas fa-shopping-bag" style="color: #667eea; margin-right: 15px;"></i>
                Complete Your Order
            </h1>
            <p>You're just a few steps away from delicious food!</p>
        </div>

        <!-- Order Form Container -->
        <div class="order-container">
            
            <!-- Order Summary Section -->
            <div class="order-summary">
                <div class="summary-title">
                    <i class="fas fa-shopping-cart"></i>
                    Order Summary
                </div>

                <div class="food-item-card">
                    <div class="food-image">
                        <?php if($image_name != ""): ?>
                            <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="<?php echo $title; ?>">
                        <?php else: ?>
                            <img src="https://via.placeholder.com/120x120?text=Food" alt="Food">
                        <?php endif; ?>
                    </div>
                    <div class="food-details">
                        <h3><?php echo $title; ?></h3>
                        <div class="food-price">
                            $<?php echo $price; ?>
                            <small>per item</small>
                        </div>
                        
                        <div class="quantity-selector">
                            <span class="quantity-label">
                                <i class="fas fa-sort-amount-up"></i>
                                Quantity:
                            </span>
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
                        <span id="subtotal">$<?php echo $price; ?></span>
                    </div>
                    <div class="price-row">
                        <span>Delivery Fee:</span>
                        <span>$2.99</span>
                    </div>
                    <div class="price-row">
                        <span>Tax (10%):</span>
                        <span id="tax">$<?php echo number_format($price * 0.1, 2); ?></span>
                    </div>
                    <div class="price-row total">
                        <span>Total:</span>
                        <span id="total">$<?php echo number_format($price * 1.1 + 2.99, 2); ?></span>
                    </div>
                </div>

                <div class="security-badge">
                    <i class="fas fa-shield-alt"></i>
                    <p>Your information is encrypted and secure.</p>
                </div>
            </div>

            <!-- Delivery Details Form -->
            <div class="delivery-form">
                <div class="form-title">
                    <i class="fas fa-truck"></i>
                    Delivery Details
                </div>

                <form action="" method="POST" id="orderForm">
                    <input type="hidden" name="food" value="<?php echo $title; ?>">
                    <input type="hidden" name="price" value="<?php echo $price; ?>">
                    <input type="hidden" name="qty" id="qty_hidden" value="1">

                    <div class="form-grid">
                        <div class="form-group">
                            <label>
                                <i class="fas fa-user"></i>
                                Full Name
                            </label>
                            <input type="text" name="full-name" class="form-control" placeholder="John Doe" required>
                        </div>

                        <div class="form-group">
                            <label>
                                <i class="fas fa-phone"></i>
                                Phone Number
                            </label>
                            <input type="tel" name="contact" class="form-control" placeholder="+1 234 567 890" required>
                        </div>

                        <div class="form-group full-width">
                            <label>
                                <i class="fas fa-envelope"></i>
                                Email Address
                            </label>
                            <input type="email" name="email" class="form-control" placeholder="john@example.com" required>
                        </div>

                        <div class="form-group full-width">
                            <label>
                                <i class="fas fa-map-marker-alt"></i>
                                Delivery Address
                            </label>
                            <textarea name="address" class="form-control" placeholder="Street address, City, State, ZIP" required></textarea>
                        </div>
                    </div>

                    <button type="submit" name="submit" class="confirm-btn" id="submitBtn">
                        <i class="fas fa-check-circle"></i>
                        Confirm Order
                    </button>
                </form>
            </div>
        </div>

        <?php 
            // Check whether submit button is clicked or not
            if(isset($_POST['submit']))
            {
                // Get all the details from the form and escape them
                $food = mysqli_real_escape_string($conn, $_POST['food']);
                $price = floatval($_POST['price']);
                $qty = intval($_POST['qty']);
                
                // Calculate total (without delivery and tax as per original schema)
                $total = $price * $qty;
                
                $order_date = date("Y-m-d H:i:s");
                $status = "Ordered";
                $customer_name = mysqli_real_escape_string($conn, $_POST['full-name']);
                $customer_contact = mysqli_real_escape_string($conn, $_POST['contact']);
                $customer_email = mysqli_real_escape_string($conn, $_POST['email']);
                $customer_address = mysqli_real_escape_string($conn, $_POST['address']);

                // Create SQL to save the data - using the correct column names from your database
                $sql2 = "INSERT INTO tbl_order SET 
                    food = '$food',
                    price = $price,
                    qty = $qty,
                    total = $total,
                    order_date = '$order_date',
                    status = '$status',
                    customer_name = '$customer_name',
                    customer_contact = '$customer_contact',
                    customer_email = '$customer_email',
                    customer_address = '$customer_address'
                ";

                // Execute the Query
                $res2 = mysqli_query($conn, $sql2);

                // Check whether query executed successfully or not
                if($res2 == true)
                {
                    // Query Executed and Order Saved
                    $_SESSION['order'] = "Order placed successfully! Your food will be delivered soon.";
                    header('location:'.SITEURL);
                    exit();
                }
                else
                {
                    // Get the error message
                    $error = mysqli_error($conn);
                    // Failed to Save Order
                    $_SESSION['order'] = "Failed to place order. Error: " . $error;
                    header('location:'.SITEURL);
                    exit();
                }
            }
        ?>

    </div>
</div>

<script>
    // Quantity control functions
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
        let tax = subtotal * 0.1;
        let delivery = 2.99;
        let total = subtotal + tax + delivery;

        document.getElementById('subtotal').textContent = '$' + subtotal.toFixed(2);
        document.getElementById('tax').textContent = '$' + tax.toFixed(2);
        document.getElementById('total').textContent = '$' + total.toFixed(2);
    }

    // Form submission loading state
    document.getElementById('orderForm').addEventListener('submit', function(e) {
        let submitBtn = document.getElementById('submitBtn');
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processing...';
        submitBtn.classList.add('btn-loading');
        submitBtn.disabled = true;
    });

    // Auto-format phone number
    document.querySelector('input[name="contact"]').addEventListener('input', function(e) {
        let x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
        e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
    });

    // Validate form before submit
    document.getElementById('orderForm').addEventListener('submit', function(e) {
        let email = document.querySelector('input[name="email"]').value;
        let phone = document.querySelector('input[name="contact"]').value;
        let name = document.querySelector('input[name="full-name"]').value;
        
        if(name.length < 3) {
            e.preventDefault();
            alert('Please enter your full name');
            return;
        }
        
        if(phone.replace(/\D/g, '').length < 10) {
            e.preventDefault();
            alert('Please enter a valid phone number');
            return;
        }
        
        if(!email.includes('@') || !email.includes('.')) {
            e.preventDefault();
            alert('Please enter a valid email address');
            return;
        }
    });

    // Add animation on page load
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('.order-summary').style.opacity = '1';
        document.querySelector('.delivery-form').style.opacity = '1';
    });
</script>

<?php include('partials-front/footer.php'); ?>