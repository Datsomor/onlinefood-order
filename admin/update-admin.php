<?php include('partials/menu.php'); ?>

<style>
    /* Main Content Styling */
    .main-content {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        min-height: 100vh;
        padding: 30px;
        display: flex;
        align-items: center;
    }

    .update-wrapper {
        max-width: 600px;
        margin: 0 auto;
        width: 100%;
    }

    /* Form Container */
    .form-container {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        animation: slideUp 0.5s ease;
    }

    @keyframes slideUp {
        from {
            transform: translateY(30px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    /* Header Section */
    .page-header {
        text-align: center;
        margin-bottom: 30px;
    }

    .page-header h1 {
        font-size: 32px;
        color: #333;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        margin-bottom: 10px;
    }

    .page-header h1 i {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 10px;
        border-radius: 12px;
        font-size: 24px;
    }

    .page-header p {
        color: #666;
        font-size: 14px;
    }

    /* Admin Avatar */
    .admin-avatar-large {
        width: 100px;
        height: 100px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        border: 4px solid white;
        box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
    }

    .admin-avatar-large i {
        font-size: 50px;
        color: white;
    }

    /* Form Styling */
    .modern-form {
        width: 100%;
    }

    .form-group {
        margin-bottom: 25px;
        position: relative;
    }

    .form-group label {
        display: flex;
        align-items: center;
        gap: 8px;
        font-weight: 500;
        color: #333;
        margin-bottom: 8px;
        font-size: 14px;
    }

    .form-group label i {
        color: #667eea;
        font-size: 16px;
    }

    .input-wrapper {
        position: relative;
        display: flex;
        align-items: center;
    }

    .input-icon {
        position: absolute;
        left: 15px;
        color: #667eea;
        font-size: 18px;
    }

    .modern-input {
        width: 100%;
        padding: 15px 15px 15px 45px;
        border: 2px solid #e0e0e0;
        border-radius: 12px;
        font-size: 16px;
        transition: all 0.3s;
        background: white;
    }

    .modern-input:focus {
        outline: none;
        border-color: #667eea;
        box-shadow: 0 5px 20px rgba(102, 126, 234, 0.2);
        transform: translateY(-2px);
    }

    .modern-input:hover {
        border-color: #764ba2;
    }

    /* Input Validation Styles */
    .modern-input.valid {
        border-color: #28a745;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%2328a745' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='20 6 9 17 4 12'%3E%3C/polyline%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 15px center;
        background-size: 20px;
    }

    .modern-input.invalid {
        border-color: #dc3545;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%23dc3545' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Ccircle cx='12' cy='12' r='10'%3E%3C/circle%3E%3Cline x1='12' y1='8' x2='12' y2='12'%3E%3C/line%3E%3Cline x1='12' y1='16' x2='12.01' y2='16'%3E%3C/line%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 15px center;
        background-size: 20px;
    }

    /* Character Count */
    .char-count {
        position: absolute;
        right: 15px;
        bottom: 15px;
        font-size: 12px;
        color: #999;
    }

    /* Input Hint */
    .input-hint {
        font-size: 12px;
        color: #999;
        margin-top: 5px;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .input-hint i {
        color: #667eea;
        font-size: 12px;
    }

    /* Password Strength Meter */
    .password-strength {
        margin-top: 10px;
        height: 5px;
        background: #f0f0f0;
        border-radius: 5px;
        overflow: hidden;
    }

    .strength-bar {
        height: 100%;
        width: 0;
        transition: all 0.3s;
        border-radius: 5px;
    }

    .strength-bar.weak {
        width: 33%;
        background: #dc3545;
    }

    .strength-bar.medium {
        width: 66%;
        background: #ffc107;
    }

    .strength-bar.strong {
        width: 100%;
        background: #28a745;
    }

    .strength-text {
        font-size: 12px;
        margin-top: 5px;
        text-align: right;
    }

    /* Button Group */
    .button-group {
        display: flex;
        gap: 15px;
        margin-top: 30px;
    }

    .btn-update {
        flex: 1;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 15px 30px;
        border: none;
        border-radius: 12px;
        font-size: 16px;
        font-weight: 600;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        cursor: pointer;
        transition: all 0.3s;
        box-shadow: 0 5px 20px rgba(102, 126, 234, 0.3);
    }

    .btn-update:hover:not(:disabled) {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
    }

    .btn-update:disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }

    .btn-cancel {
        flex: 1;
        background: #f0f0f0;
        color: #666;
        padding: 15px 30px;
        border: none;
        border-radius: 12px;
        font-size: 16px;
        font-weight: 600;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        text-decoration: none;
        transition: all 0.3s;
    }

    .btn-cancel:hover {
        background: #e0e0e0;
        transform: translateY(-2px);
    }

    /* Loading Spinner */
    .loading-spinner {
        display: inline-block;
        width: 20px;
        height: 20px;
        border: 3px solid rgba(255,255,255,0.3);
        border-radius: 50%;
        border-top-color: white;
        animation: spin 1s ease-in-out infinite;
    }

    @keyframes spin {
        to { transform: rotate(360deg); }
    }

    /* Success Animation */
    .success-checkmark {
        width: 80px;
        height: 80px;
        margin: 0 auto 20px;
    }

    .check-icon {
        width: 80px;
        height: 80px;
        position: relative;
        border-radius: 50%;
        box-sizing: content-box;
        border: 4px solid #4CAF50;
    }

    .check-icon::before {
        top: 50%;
        left: 50%;
        height: 80px;
        width: 40px;
        border: solid #4CAF50;
        border-width: 0 4px 4px 0;
        content: '';
        position: absolute;
        transform: rotate(45deg) translate(-50%, -50%);
        animation: checkmark 0.5s ease-in-out;
    }

    @keyframes checkmark {
        0% {
            height: 0;
            width: 0;
            opacity: 0;
        }
        100% {
            height: 40px;
            width: 20px;
            opacity: 1;
        }
    }

    /* Form Divider */
    .form-divider {
        text-align: center;
        margin: 20px 0;
        position: relative;
    }

    .form-divider::before,
    .form-divider::after {
        content: '';
        position: absolute;
        top: 50%;
        width: 45%;
        height: 1px;
        background: #f0f0f0;
    }

    .form-divider::before {
        left: 0;
    }

    .form-divider::after {
        right: 0;
    }

    .form-divider span {
        background: white;
        padding: 0 10px;
        color: #999;
        font-size: 12px;
    }

    /* Info Box */
    .info-box {
        background: #f8f9ff;
        border-radius: 10px;
        padding: 15px;
        margin-top: 20px;
        display: flex;
        align-items: center;
        gap: 15px;
        border-left: 4px solid #667eea;
    }

    .info-box i {
        color: #667eea;
        font-size: 24px;
    }

    .info-box p {
        color: #666;
        font-size: 13px;
        line-height: 1.5;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .main-content {
            padding: 15px;
        }

        .form-container {
            padding: 25px;
        }

        .page-header h1 {
            font-size: 24px;
        }

        .button-group {
            flex-direction: column;
        }

        .btn-update, .btn-cancel {
            width: 100%;
        }
    }

    /* Tooltip */
    .tooltip {
        position: relative;
        display: inline-block;
    }

    .tooltip .tooltiptext {
        visibility: hidden;
        width: 200px;
        background-color: #333;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 8px;
        position: absolute;
        z-index: 1;
        bottom: 125%;
        left: 50%;
        margin-left: -100px;
        opacity: 0;
        transition: opacity 0.3s;
        font-size: 12px;
    }

    .tooltip:hover .tooltiptext {
        visibility: visible;
        opacity: 1;
    }

    /* Ripple Effect */
    .ripple {
        position: relative;
        overflow: hidden;
    }

    .ripple:after {
        content: "";
        display: block;
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        pointer-events: none;
        background-image: radial-gradient(circle, #fff 10%, transparent 10.01%);
        background-repeat: no-repeat;
        background-position: 50%;
        transform: scale(10, 10);
        opacity: 0;
        transition: transform .5s, opacity 1s;
    }

    .ripple:active:after {
        transform: scale(0, 0);
        opacity: .3;
        transition: 0s;
    }
</style>

<div class="main-content">
    <div class="update-wrapper">
        <div class="form-container">
            
            <!-- Admin Avatar -->
            <div class="admin-avatar-large">
                <i class="fas fa-user-shield"></i>
            </div>

            <!-- Page Header -->
            <div class="page-header">
                <h1>
                    <i class="fas fa-user-edit"></i>
                    Update Admin
                </h1>
                <p>Update administrator information and credentials</p>
            </div>

            <?php 
                //1. Get the ID of Selected Admin
                $id = $_GET['id'];

                //2. Create SQL Query to Get the Details
                $sql = "SELECT * FROM tbl_admin WHERE id=$id";
                $res = mysqli_query($conn, $sql);

                if($res == true) {
                    $count = mysqli_num_rows($res);
                    if($count == 1) {
                        $row = mysqli_fetch_assoc($res);
                        $full_name = $row['full_name'];
                        $username = $row['username'];
                        $email = isset($row['email']) ? $row['email'] : '';
                        $phone = isset($row['phone']) ? $row['phone'] : '';
                    } else {
                        header('location:'.SITEURL.'admin/manage-admin.php');
                        exit();
                    }
                }
            ?>

            <!-- Update Form -->
            <form action="" method="POST" class="modern-form" id="updateForm">
                <!-- Hidden ID Field -->
                <input type="hidden" name="id" value="<?php echo $id; ?>">

                <!-- Full Name Field -->
                <div class="form-group">
                    <label>
                        <i class="fas fa-user"></i>
                        Full Name
                    </label>
                    <div class="input-wrapper">
                        <i class="fas fa-user input-icon"></i>
                        <input type="text" 
                               class="modern-input" 
                               name="full_name" 
                               id="full_name"
                               value="<?php echo htmlspecialchars($full_name); ?>" 
                               placeholder="Enter full name"
                               required
                               minlength="3"
                               maxlength="50"
                               pattern="[A-Za-z\s]+"
                               title="Full name should contain only letters and spaces">
                        <span class="char-count">0/50</span>
                    </div>
                    <div class="input-hint">
                        <i class="fas fa-info-circle"></i>
                        Minimum 3 characters, letters and spaces only
                    </div>
                </div>

                <!-- Username Field -->
                <div class="form-group">
                    <label>
                        <i class="fas fa-user-tag"></i>
                        Username
                    </label>
                    <div class="input-wrapper">
                        <i class="fas fa-at input-icon"></i>
                        <input type="text" 
                               class="modern-input" 
                               name="username" 
                               id="username"
                               value="<?php echo htmlspecialchars($username); ?>" 
                               placeholder="Enter username"
                               required
                               minlength="4"
                               maxlength="20"
                               pattern="[a-zA-Z0-9_]+"
                               title="Username can contain letters, numbers, and underscores">
                        <span class="char-count">0/20</span>
                    </div>
                    <div class="input-hint">
                        <i class="fas fa-info-circle"></i>
                        4-20 characters, letters, numbers, and underscores only
                    </div>
                </div>

                <!-- Email Field (Optional - if exists in database) -->
                <?php if(isset($email)): ?>
                <div class="form-group">
                    <label>
                        <i class="fas fa-envelope"></i>
                        Email Address
                    </label>
                    <div class="input-wrapper">
                        <i class="fas fa-envelope input-icon"></i>
                        <input type="email" 
                               class="modern-input" 
                               name="email" 
                               id="email"
                               value="<?php echo htmlspecialchars($email); ?>" 
                               placeholder="Enter email address">
                    </div>
                    <div class="input-hint">
                        <i class="fas fa-info-circle"></i>
                        Optional: Used for notifications
                    </div>
                </div>
                <?php endif; ?>

                <!-- Phone Field (Optional - if exists in database) -->
                <?php if(isset($phone)): ?>
                <div class="form-group">
                    <label>
                        <i class="fas fa-phone"></i>
                        Phone Number
                    </label>
                    <div class="input-wrapper">
                        <i class="fas fa-phone input-icon"></i>
                        <input type="tel" 
                               class="modern-input" 
                               name="phone" 
                               id="phone"
                               value="<?php echo htmlspecialchars($phone); ?>" 
                               placeholder="Enter phone number"
                               pattern="[0-9+\-\s]+"
                               title="Enter a valid phone number">
                    </div>
                    <div class="input-hint">
                        <i class="fas fa-info-circle"></i>
                        Optional: Contact number
                    </div>
                </div>
                <?php endif; ?>

                <!-- Form Divider -->
                <div class="form-divider">
                    <span>SECURITY INFORMATION</span>
                </div>

                <!-- Password Change Option (Optional) -->
                <div class="form-group">
                    <label>
                        <i class="fas fa-key"></i>
                        New Password (Optional)
                    </label>
                    <div class="input-wrapper">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" 
                               class="modern-input" 
                               name="password" 
                               id="password"
                               placeholder="Leave blank to keep current password"
                               minlength="6">
                        <span class="char-count">0/50</span>
                    </div>
                    <div class="password-strength" id="passwordStrength">
                        <div class="strength-bar" id="strengthBar"></div>
                    </div>
                    <div class="strength-text" id="strengthText"></div>
                    <div class="input-hint">
                        <i class="fas fa-info-circle"></i>
                        Minimum 6 characters. Leave blank to keep current password
                    </div>
                </div>

                <!-- Confirm Password -->
                <div class="form-group">
                    <label>
                        <i class="fas fa-check-circle"></i>
                        Confirm New Password
                    </label>
                    <div class="input-wrapper">
                        <i class="fas fa-check-circle input-icon"></i>
                        <input type="password" 
                               class="modern-input" 
                               name="confirm_password" 
                               id="confirm_password"
                               placeholder="Confirm new password">
                    </div>
                    <div class="input-hint" id="passwordMatchHint">
                        <i class="fas fa-info-circle"></i>
                        Passwords must match
                    </div>
                </div>

                <!-- Info Box -->
                <div class="info-box">
                    <i class="fas fa-shield-alt"></i>
                    <p>Updating admin information requires proper authorization. All changes are logged for security purposes.</p>
                </div>

                <!-- Button Group -->
                <div class="button-group">
                    <button type="submit" name="submit" class="btn-update ripple" id="submitBtn">
                        <i class="fas fa-save"></i>
                        Update Admin
                    </button>
                    <a href="<?php echo SITEURL; ?>admin/manage-admin.php" class="btn-cancel ripple">
                        <i class="fas fa-times"></i>
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // Character counter
    function updateCharCount(input, maxLength) {
        const count = input.value.length;
        const counter = input.parentElement.querySelector('.char-count');
        if(counter) {
            counter.textContent = count + '/' + maxLength;
            if(count > maxLength * 0.8) {
                counter.style.color = '#ffc107';
            }
            if(count > maxLength * 0.9) {
                counter.style.color = '#dc3545';
            }
        }
    }

    // Add event listeners for character count
    document.getElementById('full_name').addEventListener('input', function() {
        updateCharCount(this, 50);
    });

    document.getElementById('username').addEventListener('input', function() {
        updateCharCount(this, 20);
    });

    // Password strength meter
    document.getElementById('password').addEventListener('input', function() {
        const password = this.value;
        const strengthBar = document.getElementById('strengthBar');
        const strengthText = document.getElementById('strengthText');
        
        let strength = 0;
        if(password.length >= 6) strength += 1;
        if(password.match(/[a-z]+/)) strength += 1;
        if(password.match(/[A-Z]+/)) strength += 1;
        if(password.match(/[0-9]+/)) strength += 1;
        if(password.match(/[$@#&!]+/)) strength += 1;

        if(password.length === 0) {
            strengthBar.style.width = '0';
            strengthBar.className = 'strength-bar';
            strengthText.textContent = '';
        } else if(strength <= 2) {
            strengthBar.className = 'strength-bar weak';
            strengthText.textContent = 'Weak password';
            strengthText.style.color = '#dc3545';
        } else if(strength <= 4) {
            strengthBar.className = 'strength-bar medium';
            strengthText.textContent = 'Medium password';
            strengthText.style.color = '#ffc107';
        } else {
            strengthBar.className = 'strength-bar strong';
            strengthText.textContent = 'Strong password';
            strengthText.style.color = '#28a745';
        }
    });

    // Password match validation
    document.getElementById('confirm_password').addEventListener('input', function() {
        const password = document.getElementById('password').value;
        const confirm = this.value;
        const hint = document.getElementById('passwordMatchHint');
        
        if(confirm.length > 0) {
            if(password === confirm) {
                this.classList.add('valid');
                this.classList.remove('invalid');
                hint.innerHTML = '<i class="fas fa-check-circle" style="color: #28a745;"></i> Passwords match';
            } else {
                this.classList.add('invalid');
                this.classList.remove('valid');
                hint.innerHTML = '<i class="fas fa-exclamation-circle" style="color: #dc3545;"></i> Passwords do not match';
            }
        } else {
            this.classList.remove('valid', 'invalid');
            hint.innerHTML = '<i class="fas fa-info-circle"></i> Passwords must match';
        }
    });

    // Form validation before submit
    document.getElementById('updateForm').addEventListener('submit', function(e) {
        const submitBtn = document.getElementById('submitBtn');
        const fullName = document.getElementById('full_name').value;
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;
        const confirm = document.getElementById('confirm_password').value;

        // Validate full name
        if(fullName.length < 3) {
            e.preventDefault();
            alert('Full name must be at least 3 characters long');
            return;
        }

        // Validate username
        if(username.length < 4) {
            e.preventDefault();
            alert('Username must be at least 4 characters long');
            return;
        }

        // Validate password if entered
        if(password.length > 0) {
            if(password.length < 6) {
                e.preventDefault();
                alert('Password must be at least 6 characters long');
                return;
            }
            
            if(password !== confirm) {
                e.preventDefault();
                alert('Passwords do not match');
                return;
            }
        }

        // Show loading state
        submitBtn.innerHTML = '<span class="loading-spinner"></span> Updating...';
        submitBtn.disabled = true;
    });

    // Initialize character counts
    window.onload = function() {
        updateCharCount(document.getElementById('full_name'), 50);
        updateCharCount(document.getElementById('username'), 20);
        
        // Add ripple effect to buttons
        document.querySelectorAll('.ripple').forEach(button => {
            button.addEventListener('click', function(e) {
                const rect = this.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                
                const ripple = document.createElement('span');
                ripple.style.position = 'absolute';
                ripple.style.width = '0';
                ripple.style.height = '0';
                ripple.style.backgroundColor = 'rgba(255, 255, 255, 0.3)';
                ripple.style.borderRadius = '50%';
                ripple.style.transform = 'translate(-50%, -50%)';
                ripple.style.left = x + 'px';
                ripple.style.top = y + 'px';
                ripple.style.transition = 'width 0.3s, height 0.3s';
                
                this.appendChild(ripple);
                
                setTimeout(() => {
                    ripple.style.width = '200px';
                    ripple.style.height = '200px';
                }, 10);
                
                setTimeout(() => {
                    ripple.remove();
                }, 300);
            });
        });
    };

    // Warn before leaving if form is dirty
    let formChanged = false;
    document.querySelectorAll('.modern-input').forEach(input => {
        input.addEventListener('input', () => {
            formChanged = true;
        });
    });

    window.addEventListener('beforeunload', function(e) {
        if(formChanged) {
            e.preventDefault();
            e.returnValue = '';
        }
    });
</script>

<?php 
    //Check whether the Submit Button is Clicked or not
    if(isset($_POST['submit']))
    {
        $id = $_POST['id'];
        $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        
        // Check if password is being updated
        if(!empty($_POST['password'])) {
            $password = md5($_POST['password']); // You should use better encryption in production
            $sql = "UPDATE tbl_admin SET
                    full_name = '$full_name',
                    username = '$username',
                    password = '$password'
                    WHERE id='$id'";
        } else {
            $sql = "UPDATE tbl_admin SET
                    full_name = '$full_name',
                    username = '$username'
                    WHERE id='$id'";
        }

        $res = mysqli_query($conn, $sql);

        if($res == true) {
            $_SESSION['update'] = "<div class='success'>Admin Updated Successfully.</div>";
            header('location:'.SITEURL.'admin/manage-admin.php');
        } else {
            $_SESSION['update'] = "<div class='error'>Failed to Update Admin.</div>";
            header('location:'.SITEURL.'admin/manage-admin.php');
        }
    }
?>

<?php include('partials/footer.php'); ?>