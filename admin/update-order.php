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

    .update-wrapper {
        max-width: 800px;
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

    /* Order Info Card */
    .order-info-card {
        background: white;
        border-radius: 20px;
        padding: 30px;
        margin-bottom: 30px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        animation: slideDown 0.5s ease;
    }

    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .order-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
        padding-bottom: 20px;
        border-bottom: 2px solid #f0f0f0;
    }

    .order-id {
        font-size: 20px;
        font-weight: 700;
        color: #667eea;
        background: #f0f0ff;
        padding: 8px 20px;
        border-radius: 30px;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .order-date {
        color: #666;
        font-size: 14px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    /* Form Sections */
    .form-section {
        background: white;
        border-radius: 20px;
        padding: 30px;
        margin-bottom: 30px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        animation: fadeIn 0.5s ease;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .section-title {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
        padding-bottom: 15px;
        border-bottom: 2px solid #f0f0f0;
    }

    .section-title h2 {
        font-size: 20px;
        color: #333;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .section-title h2 i {
        color: #667eea;
    }

    /* Edit Mode Toggle Button */
    .edit-toggle {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
        padding: 8px 20px;
        border-radius: 30px;
        font-size: 14px;
        font-weight: 500;
        cursor: pointer;
        transition: 0.3s;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .edit-toggle:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
    }

    .edit-toggle.editing {
        background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
    }

    /* Readonly Fields */
    .readonly-fields {
        opacity: 0.7;
        transition: 0.3s;
    }

    .readonly-fields.editable {
        opacity: 1;
    }

    /* Form Grid */
    .form-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 25px;
    }

    .form-group {
        margin-bottom: 5px;
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
        font-size: 14px;
    }

    .form-group label i {
        color: #667eea;
        width: 20px;
    }

    .form-control {
        width: 100%;
        padding: 12px 15px;
        border: 2px solid #e0e0e0;
        border-radius: 12px;
        font-size: 14px;
        transition: 0.3s;
        background: #f8f9fa;
    }

    .form-control:focus {
        outline: none;
        border-color: #667eea;
        box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
    }

    .form-control:read-only {
        background: #f8f9fa;
        cursor: not-allowed;
        border-color: #e0e0e0;
    }

    .form-control:read-only:focus {
        box-shadow: none;
    }

    /* Status Select */
    .status-select {
        width: 100%;
        padding: 12px 15px;
        border: 2px solid #e0e0e0;
        border-radius: 12px;
        font-size: 14px;
        font-weight: 500;
        cursor: pointer;
        transition: 0.3s;
        background: white;
    }

    .status-select:focus {
        outline: none;
        border-color: #667eea;
    }

    /* Status Colors in Select */
    .status-ordered { color: #004085; background: #cce5ff; }
    .status-ondelivery { color: #856404; background: #fff3cd; }
    .status-delivered { color: #155724; background: #d4edda; }
    .status-cancelled { color: #721c24; background: #f8d7da; }

    /* Price Display */
    .price-display {
        font-size: 28px;
        font-weight: 700;
        color: #667eea;
        background: #f0f0ff;
        padding: 10px 20px;
        border-radius: 12px;
        display: inline-block;
    }

    .total-display {
        font-size: 24px;
        font-weight: 700;
        color: #28a745;
        background: #e8f5e9;
        padding: 10px 20px;
        border-radius: 12px;
        display: inline-block;
    }

    /* Food Info Card */
    .food-info-card {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 15px;
        padding: 20px;
        color: white;
        margin-bottom: 25px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 15px;
    }

    .food-info-item {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .food-info-item i {
        font-size: 24px;
        opacity: 0.9;
    }

    .food-info-item span {
        font-size: 14px;
        opacity: 0.8;
    }

    .food-info-item strong {
        font-size: 18px;
        display: block;
    }

    /* Button Group */
    .button-group {
        display: flex;
        gap: 15px;
        margin-top: 30px;
    }

    .btn-update {
        flex: 1;
        background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
        color: white;
        border: none;
        padding: 15px;
        border-radius: 12px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    .btn-update:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(40, 167, 69, 0.3);
    }

    .btn-cancel {
        flex: 1;
        background: #f0f0f0;
        color: #666;
        border: none;
        padding: 15px;
        border-radius: 12px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s;
        text-decoration: none;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    .btn-cancel:hover {
        background: #e0e0e0;
        transform: translateY(-2px);
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
        
        .form-grid {
            grid-template-columns: 1fr;
        }
        
        .form-group.full-width {
            grid-column: span 1;
        }
        
        .order-header {
            flex-direction: column;
            gap: 15px;
            text-align: center;
        }
        
        .food-info-card {
            flex-direction: column;
            text-align: center;
        }
        
        .button-group {
            flex-direction: column;
        }
    }

    /* Loading State */
    .btn-loading {
        position: relative;
        pointer-events: none;
        opacity: 0.7;
    }

    /* Success Animation */
    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.02); }
        100% { transform: scale(1); }
    }
</style>

<div class="main-content">
    <div class="update-wrapper">

        <?php 
            // Check whether id is set or not
            if(isset($_GET['id']))
            {
                $id = mysqli_real_escape_string($conn, $_GET['id']);
                $sql = "SELECT * FROM tbl_order WHERE id=$id";
                $res = mysqli_query($conn, $sql);
                $count = mysqli_num_rows($res);

                if($count==1)
                {
                    $row = mysqli_fetch_assoc($res);
                    $food = $row['food'];
                    $price = $row['price'];
                    $qty = $row['qty'];
                    $total = $row['total'];
                    $status = $row['status'];
                    $order_date = $row['order_date'];
                    $customer_name = $row['customer_name'];
                    $customer_contact = $row['customer_contact'];
                    $customer_email = $row['customer_email'];
                    $customer_address = $row['customer_address'];
                    
                    $formatted_date = date("F j, Y, g:i a", strtotime($order_date));
                }
                else
                {
                    header('location:'.SITEURL.'admin/manage-order.php');
                    exit();
                }
            }
            else
            {
                header('location:'.SITEURL.'admin/manage-order.php');
                exit();
            }
        ?>

        <!-- Page Header -->
        <div class="page-header">
            <h1>
                <i class="fas fa-edit"></i>
                Update Order
            </h1>
            <p>Manage order details, update status, and modify customer information</p>
        </div>

        <!-- Order Info Card -->
        <div class="order-info-card">
            <div class="order-header">
                <div class="order-id">
                    <i class="fas fa-receipt"></i>
                    #ORD-<?php echo str_pad($id, 4, '0', STR_PAD_LEFT); ?>
                </div>
                <div class="order-date">
                    <i class="far fa-calendar-alt"></i>
                    Placed on: <?php echo $formatted_date; ?>
                </div>
            </div>

            <div class="food-info-card">
                <div class="food-info-item">
                    <i class="fas fa-hamburger"></i>
                    <div>
                        <span>Food Item</span>
                        <strong><?php echo $food; ?></strong>
                    </div>
                </div>
                <div class="food-info-item">
                    <i class="fas fa-dollar-sign"></i>
                    <div>
                        <span>Unit Price</span>
                        <strong>$<?php echo number_format($price, 2); ?></strong>
                    </div>
                </div>
                <div class="food-info-item">
                    <i class="fas fa-chart-line"></i>
                    <div>
                        <span>Current Total</span>
                        <strong>$<?php echo number_format($total, 2); ?></strong>
                    </div>
                </div>
            </div>
        </div>

        <!-- Update Form -->
        <form action="" method="POST" id="updateForm">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="hidden" name="price" value="<?php echo $price; ?>">

            <!-- Order Details Section (Always Editable) -->
            <div class="form-section">
                <div class="section-title">
                    <h2>
                        <i class="fas fa-truck"></i>
                        Order Status
                    </h2>
                </div>

                <div class="form-group">
                    <label>
                        <i class="fas fa-tag"></i>
                        Order Status
                    </label>
                    <select name="status" class="status-select" id="statusSelect" required>
                        <option value="Ordered" <?php echo ($status == "Ordered") ? 'selected' : ''; ?> class="status-ordered">
                            📋 Ordered
                        </option>
                        <option value="On Delivery" <?php echo ($status == "On Delivery") ? 'selected' : ''; ?> class="status-ondelivery">
                            🚚 On Delivery
                        </option>
                        <option value="Delivered" <?php echo ($status == "Delivered") ? 'selected' : ''; ?> class="status-delivered">
                            ✅ Delivered
                        </option>
                        <option value="Cancelled" <?php echo ($status == "Cancelled") ? 'selected' : ''; ?> class="status-cancelled">
                            ❌ Cancelled
                        </option>
                    </select>
                </div>

                <div class="form-group">
                    <label>
                        <i class="fas fa-sort-amount-up"></i>
                        Quantity
                    </label>
                    <input type="number" name="qty" id="qty" class="form-control" value="<?php echo $qty; ?>" min="1" required>
                </div>

                <div class="form-group">
                    <label>
                        <i class="fas fa-calculator"></i>
                        Calculated Total
                    </label>
                    <div class="total-display" id="calculatedTotal">
                        $<?php echo number_format($price * $qty, 2); ?>
                    </div>
                </div>
            </div>

            <!-- Customer Details Section (Editable in Edit Mode) -->
            <div class="form-section" id="customerSection">
                <div class="section-title">
                    <h2>
                        <i class="fas fa-user"></i>
                        Customer Information
                    </h2>
                    <button type="button" class="edit-toggle" id="editToggleBtn">
                        <i class="fas fa-lock"></i>
                        Edit Mode
                    </button>
                </div>

                <div class="readonly-fields" id="readonlyFields">
                    <div class="form-grid">
                        <div class="form-group">
                            <label>
                                <i class="fas fa-user"></i>
                                Customer Name
                            </label>
                            <input type="text" name="customer_name" id="customer_name" class="form-control" 
                                   value="<?php echo htmlspecialchars($customer_name); ?>" readonly>
                        </div>

                        <div class="form-group">
                            <label>
                                <i class="fas fa-phone"></i>
                                Contact Number
                            </label>
                            <input type="text" name="customer_contact" id="customer_contact" class="form-control" 
                                   value="<?php echo htmlspecialchars($customer_contact); ?>" readonly>
                        </div>

                        <div class="form-group full-width">
                            <label>
                                <i class="fas fa-envelope"></i>
                                Email Address
                            </label>
                            <input type="email" name="customer_email" id="customer_email" class="form-control" 
                                   value="<?php echo htmlspecialchars($customer_email); ?>" readonly>
                        </div>

                        <div class="form-group full-width">
                            <label>
                                <i class="fas fa-map-marker-alt"></i>
                                Delivery Address
                            </label>
                            <textarea name="customer_address" id="customer_address" class="form-control" rows="3" readonly><?php echo htmlspecialchars($customer_address); ?></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Button Group -->
            <div class="button-group">
                <button type="submit" name="submit" class="btn-update" id="submitBtn">
                    <i class="fas fa-save"></i>
                    Update Order
                </button>
                <a href="<?php echo SITEURL; ?>admin/manage-order.php" class="btn-cancel">
                    <i class="fas fa-times"></i>
                    Cancel
                </a>
            </div>
        </form>

        <?php 
            // Process form submission
            if(isset($_POST['submit']))
            {
                $id = intval($_POST['id']);
                $price = floatval($_POST['price']);
                $qty = intval($_POST['qty']);
                $total = $price * $qty;
                $status = mysqli_real_escape_string($conn, $_POST['status']);
                $customer_name = mysqli_real_escape_string($conn, $_POST['customer_name']);
                $customer_contact = mysqli_real_escape_string($conn, $_POST['customer_contact']);
                $customer_email = mysqli_real_escape_string($conn, $_POST['customer_email']);
                $customer_address = mysqli_real_escape_string($conn, $_POST['customer_address']);

                $sql2 = "UPDATE tbl_order SET 
                    qty = $qty,
                    total = $total,
                    status = '$status',
                    customer_name = '$customer_name',
                    customer_contact = '$customer_contact',
                    customer_email = '$customer_email',
                    customer_address = '$customer_address'
                    WHERE id = $id";

                $res2 = mysqli_query($conn, $sql2);

                if($res2)
                {
                    $_SESSION['update'] = "<div class='success'>Order Updated Successfully.</div>";
                    header('location:'.SITEURL.'admin/manage-order.php');
                    exit();
                }
                else
                {
                    $_SESSION['update'] = "<div class='error'>Failed to Update Order. Error: " . mysqli_error($conn) . "</div>";
                    header('location:'.SITEURL.'admin/manage-order.php');
                    exit();
                }
            }
        ?>

    </div>
</div>

<script>
    // Get DOM elements
    const editToggleBtn = document.getElementById('editToggleBtn');
    const readonlyFields = document.getElementById('readonlyFields');
    const customerName = document.getElementById('customer_name');
    const customerContact = document.getElementById('customer_contact');
    const customerEmail = document.getElementById('customer_email');
    const customerAddress = document.getElementById('customer_address');
    const qtyInput = document.getElementById('qty');
    const calculatedTotal = document.getElementById('calculatedTotal');
    const price = <?php echo $price; ?>;
    
    let isEditing = false;
    
    // Toggle edit mode
    editToggleBtn.addEventListener('click', function() {
        isEditing = !isEditing;
        
        if(isEditing) {
            // Enable edit mode
            customerName.readOnly = false;
            customerContact.readOnly = false;
            customerEmail.readOnly = false;
            customerAddress.readOnly = false;
            
            readonlyFields.classList.add('editable');
            editToggleBtn.innerHTML = '<i class="fas fa-save"></i> Save Changes';
            editToggleBtn.classList.add('editing');
            
            // Add visual feedback
            customerName.style.background = 'white';
            customerContact.style.background = 'white';
            customerEmail.style.background = 'white';
            customerAddress.style.background = 'white';
        } else {
            // Exit edit mode
            customerName.readOnly = true;
            customerContact.readOnly = true;
            customerEmail.readOnly = true;
            customerAddress.readOnly = true;
            
            readonlyFields.classList.remove('editable');
            editToggleBtn.innerHTML = '<i class="fas fa-lock"></i> Edit Mode';
            editToggleBtn.classList.remove('editing');
            
            // Reset background
            customerName.style.background = '#f8f9fa';
            customerContact.style.background = '#f8f9fa';
            customerEmail.style.background = '#f8f9fa';
            customerAddress.style.background = '#f8f9fa';
        }
    });
    
    // Update total when quantity changes
    qtyInput.addEventListener('input', function() {
        const qty = parseInt(this.value) || 0;
        const total = price * qty;
        calculatedTotal.textContent = '$' + total.toFixed(2);
    });
    
    // Form submission loading state
    document.getElementById('updateForm').addEventListener('submit', function(e) {
        const submitBtn = document.getElementById('submitBtn');
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Updating...';
        submitBtn.classList.add('btn-loading');
        submitBtn.disabled = true;
    });
    
    // Style the status select based on selected value
    const statusSelect = document.getElementById('statusSelect');
    
    function updateStatusStyle() {
        const value = statusSelect.value;
        statusSelect.className = 'status-select';
        if(value === 'Ordered') {
            statusSelect.style.background = '#cce5ff';
            statusSelect.style.color = '#004085';
        } else if(value === 'On Delivery') {
            statusSelect.style.background = '#fff3cd';
            statusSelect.style.color = '#856404';
        } else if(value === 'Delivered') {
            statusSelect.style.background = '#d4edda';
            statusSelect.style.color = '#155724';
        } else if(value === 'Cancelled') {
            statusSelect.style.background = '#f8d7da';
            statusSelect.style.color = '#721c24';
        }
    }
    
    statusSelect.addEventListener('change', updateStatusStyle);
    updateStatusStyle();
</script>

<?php include('partials/footer.php'); ?>