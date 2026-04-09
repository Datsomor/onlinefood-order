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
        max-width: 600px;
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

    /* Form Section */
    .form-section {
        background: white;
        border-radius: 20px;
        padding: 35px;
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
        align-items: center;
        gap: 10px;
        margin-bottom: 25px;
        padding-bottom: 15px;
        border-bottom: 2px solid #f0f0f0;
    }

    .section-title i {
        width: 35px;
        height: 35px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 16px;
    }

    .section-title h2 {
        font-size: 20px;
        color: #333;
        margin: 0;
    }

    /* Admin Info Card */
    .admin-info-card {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 15px;
        padding: 20px;
        margin-bottom: 25px;
        display: flex;
        align-items: center;
        gap: 15px;
        color: white;
    }

    .admin-avatar {
        width: 60px;
        height: 60px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        font-weight: 600;
    }

    .admin-details h3 {
        font-size: 18px;
        margin-bottom: 5px;
    }

    .admin-details p {
        font-size: 13px;
        opacity: 0.9;
    }

    /* Form Group */
    .form-group {
        margin-bottom: 25px;
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
        width: 18px;
    }

    .form-group label.required:after {
        content: '*';
        color: #dc3545;
        margin-left: 4px;
    }

    .password-input-wrapper {
        position: relative;
    }

    .form-control {
        width: 100%;
        padding: 12px 45px 12px 15px;
        border: 2px solid #e0e0e0;
        border-radius: 12px;
        font-size: 14px;
        transition: 0.3s;
        font-family: inherit;
    }

    .form-control:focus {
        outline: none;
        border-color: #667eea;
        box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
    }

    .form-control.error {
        border-color: #dc3545;
    }

    .toggle-password {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        color: #999;
        transition: 0.3s;
    }

    .toggle-password:hover {
        color: #667eea;
    }

    /* Password Strength Indicator */
    .password-strength {
        margin-top: 10px;
    }

    .strength-bar-container {
        height: 4px;
        background: #f0f0f0;
        border-radius: 2px;
        overflow: hidden;
        margin-bottom: 5px;
    }

    .strength-bar {
        height: 100%;
        width: 0%;
        transition: width 0.3s ease;
        border-radius: 2px;
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
        color: #666;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    /* Password Match */
    .password-match {
        font-size: 12px;
        margin-top: 5px;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .password-match.valid {
        color: #28a745;
    }

    .password-match.invalid {
        color: #dc3545;
    }

    /* Password Requirements */
    .password-requirements {
        background: #f8f9ff;
        border-radius: 10px;
        padding: 12px 15px;
        margin-top: 10px;
    }

    .password-requirements p {
        font-size: 12px;
        color: #666;
        margin-bottom: 8px;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .requirement-list {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
    }

    .requirement-list li {
        font-size: 11px;
        color: #999;
        display: flex;
        align-items: center;
        gap: 4px;
    }

    .requirement-list li.valid {
        color: #28a745;
    }

    .requirement-list li i {
        font-size: 10px;
    }

    /* Button Group */
    .button-group {
        display: flex;
        gap: 15px;
        margin-top: 25px;
    }

    .btn-change {
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

    .btn-change:hover {
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
        
        .button-group {
            flex-direction: column;
        }
        
        .form-section {
            padding: 25px;
        }
        
        .requirement-list {
            flex-direction: column;
            gap: 5px;
        }
    }

    /* Loading State */
    .btn-loading {
        position: relative;
        pointer-events: none;
        opacity: 0.7;
    }
</style>

<div class="main-content">
    <div class="update-wrapper">

        <?php 
            if(isset($_GET['id']))
            {
                $id = intval($_GET['id']);
                
                // Get admin details for display
                $sql = "SELECT * FROM tbl_admin WHERE id = $id";
                $res = mysqli_query($conn, $sql);
                if(mysqli_num_rows($res) > 0) {
                    $admin = mysqli_fetch_assoc($res);
                    $admin_name = $admin['full_name'];
                    $admin_username = $admin['username'];
                    // Get initials
                    $initials = strtoupper(substr($admin_name, 0, 1));
                    if(strpos($admin_name, ' ') !== false) {
                        $initials .= strtoupper(substr($admin_name, strpos($admin_name, ' ') + 1, 1));
                    }
                } else {
                    header('location:'.SITEURL.'admin/manage-admin.php');
                    exit();
                }
            }
            else
            {
                header('location:'.SITEURL.'admin/manage-admin.php');
                exit();
            }
        ?>

        <!-- Page Header -->
        <div class="page-header">
            <h1>
                <i class="fas fa-key"></i>
                Change Password
            </h1>
            <p>Update your password to keep your account secure</p>
        </div>

        <!-- Admin Info Card -->
        <div class="admin-info-card">
            <div class="admin-avatar">
                <?php echo $initials; ?>
            </div>
            <div class="admin-details">
                <h3><?php echo htmlspecialchars($admin_name); ?></h3>
                <p><i class="fas fa-at"></i> <?php echo htmlspecialchars($admin_username); ?></p>
            </div>
        </div>

        <!-- Change Password Form -->
        <div class="form-section">
            <div class="section-title">
                <i class="fas fa-lock"></i>
                <h2>Password Settings</h2>
            </div>

            <form action="" method="POST" id="passwordForm">

                <input type="hidden" name="id" value="<?php echo $id; ?>">

                <div class="form-group">
                    <label class="required">
                        <i class="fas fa-key"></i>
                        Current Password
                    </label>
                    <div class="password-input-wrapper">
                        <input type="password" name="current_password" id="current_password" class="form-control" 
                               placeholder="Enter your current password" required>
                        <span class="toggle-password" onclick="togglePassword('current_password')">
                            <i class="fas fa-eye-slash"></i>
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="required">
                        <i class="fas fa-lock"></i>
                        New Password
                    </label>
                    <div class="password-input-wrapper">
                        <input type="password" name="new_password" id="new_password" class="form-control" 
                               placeholder="Create a strong password" required>
                        <span class="toggle-password" onclick="togglePassword('new_password')">
                            <i class="fas fa-eye-slash"></i>
                        </span>
                    </div>
                    
                    <!-- Password Strength Indicator -->
                    <div class="password-strength">
                        <div class="strength-bar-container">
                            <div class="strength-bar" id="strengthBar"></div>
                        </div>
                        <div class="strength-text" id="strengthText">
                            <i class="fas fa-shield-alt"></i>
                            <span>Enter a new password</span>
                        </div>
                    </div>

                    <!-- Password Requirements -->
                    <div class="password-requirements">
                        <p><i class="fas fa-info-circle"></i> Password must contain:</p>
                        <ul class="requirement-list">
                            <li id="req-length"><i class="far fa-circle"></i> At least 8 characters</li>
                            <li id="req-lowercase"><i class="far fa-circle"></i> Lowercase letter</li>
                            <li id="req-uppercase"><i class="far fa-circle"></i> Uppercase letter</li>
                            <li id="req-number"><i class="far fa-circle"></i> Number</li>
                            <li id="req-special"><i class="far fa-circle"></i> Special character</li>
                        </ul>
                    </div>
                </div>

                <div class="form-group">
                    <label class="required">
                        <i class="fas fa-check-circle"></i>
                        Confirm New Password
                    </label>
                    <div class="password-input-wrapper">
                        <input type="password" name="confirm_password" id="confirm_password" class="form-control" 
                               placeholder="Re-enter your new password" required>
                        <span class="toggle-password" onclick="togglePassword('confirm_password')">
                            <i class="fas fa-eye-slash"></i>
                        </span>
                    </div>
                    <div class="password-match" id="passwordMatch"></div>
                </div>

                <!-- Button Group -->
                <div class="button-group">
                    <button type="submit" name="submit" class="btn-change" id="submitBtn">
                        <i class="fas fa-save"></i>
                        Change Password
                    </button>
                    <a href="<?php echo SITEURL; ?>admin/manage-admin.php" class="btn-cancel">
                        <i class="fas fa-times"></i>
                        Cancel
                    </a>
                </div>
            </form>
        </div>

    </div>
</div>

<script>
    // Toggle password visibility
    function togglePassword(fieldId) {
        const field = document.getElementById(fieldId);
        const icon = field.nextElementSibling.querySelector('i');
        
        if(field.type === 'password') {
            field.type = 'text';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        } else {
            field.type = 'password';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        }
    }

    // Password Strength Checker
    const newPassword = document.getElementById('new_password');
    const strengthBar = document.getElementById('strengthBar');
    const strengthText = document.getElementById('strengthText');

    // Requirements elements
    const reqLength = document.getElementById('req-length');
    const reqLowercase = document.getElementById('req-lowercase');
    const reqUppercase = document.getElementById('req-uppercase');
    const reqNumber = document.getElementById('req-number');
    const reqSpecial = document.getElementById('req-special');

    function checkPasswordStrength(password) {
        let strength = 0;
        let requirements = {
            length: password.length >= 8,
            lowercase: /[a-z]/.test(password),
            uppercase: /[A-Z]/.test(password),
            number: /[0-9]/.test(password),
            special: /[$@#&!%*?]/.test(password)
        };
        
        // Update requirement indicators
        reqLength.innerHTML = requirements.length ? '<i class="fas fa-check-circle"></i> At least 8 characters' : '<i class="far fa-circle"></i> At least 8 characters';
        reqLowercase.innerHTML = requirements.lowercase ? '<i class="fas fa-check-circle"></i> Lowercase letter' : '<i class="far fa-circle"></i> Lowercase letter';
        reqUppercase.innerHTML = requirements.uppercase ? '<i class="fas fa-check-circle"></i> Uppercase letter' : '<i class="far fa-circle"></i> Uppercase letter';
        reqNumber.innerHTML = requirements.number ? '<i class="fas fa-check-circle"></i> Number' : '<i class="far fa-circle"></i> Number';
        reqSpecial.innerHTML = requirements.special ? '<i class="fas fa-check-circle"></i> Special character' : '<i class="far fa-circle"></i> Special character';
        
        reqLength.classList.toggle('valid', requirements.length);
        reqLowercase.classList.toggle('valid', requirements.lowercase);
        reqUppercase.classList.toggle('valid', requirements.uppercase);
        reqNumber.classList.toggle('valid', requirements.number);
        reqSpecial.classList.toggle('valid', requirements.special);
        
        // Calculate strength
        if(requirements.length) strength++;
        if(requirements.lowercase) strength++;
        if(requirements.uppercase) strength++;
        if(requirements.number) strength++;
        if(requirements.special) strength++;
        
        let result = { score: strength, message: '', class: '' };
        
        if(password.length === 0) {
            result.message = 'Enter a new password';
            result.class = '';
        } else if(strength <= 2) {
            result.message = 'Weak password';
            result.class = 'weak';
        } else if(strength <= 4) {
            result.message = 'Medium password';
            result.class = 'medium';
        } else {
            result.message = 'Strong password';
            result.class = 'strong';
        }
        
        return result;
    }

    newPassword.addEventListener('input', function() {
        const password = this.value;
        const result = checkPasswordStrength(password);
        
        strengthBar.className = 'strength-bar ' + result.class;
        strengthText.innerHTML = '<i class="fas fa-shield-alt"></i> <span>' + result.message + '</span>';
        
        // Update color based on strength
        if(result.class === 'weak') {
            strengthText.style.color = '#dc3545';
        } else if(result.class === 'medium') {
            strengthText.style.color = '#ffc107';
        } else if(result.class === 'strong') {
            strengthText.style.color = '#28a745';
        } else {
            strengthText.style.color = '#666';
        }
        
        // Check password match
        if(confirmInput.value) {
            checkPasswordMatch();
        }
    });

    // Password Match Checker
    const confirmInput = document.getElementById('confirm_password');
    const passwordMatchDiv = document.getElementById('passwordMatch');

    function checkPasswordMatch() {
        const password = newPassword.value;
        const confirm = confirmInput.value;
        
        if(confirm.length === 0) {
            passwordMatchDiv.innerHTML = '';
            passwordMatchDiv.className = 'password-match';
            return;
        }
        
        if(password === confirm) {
            passwordMatchDiv.innerHTML = '<i class="fas fa-check-circle"></i> Passwords match';
            passwordMatchDiv.className = 'password-match valid';
            confirmInput.classList.remove('error');
        } else {
            passwordMatchDiv.innerHTML = '<i class="fas fa-times-circle"></i> Passwords do not match';
            passwordMatchDiv.className = 'password-match invalid';
            confirmInput.classList.add('error');
        }
    }

    confirmInput.addEventListener('input', checkPasswordMatch);

    // Form validation and submission
    document.getElementById('passwordForm').addEventListener('submit', function(e) {
        const currentPwd = document.getElementById('current_password');
        const newPwd = document.getElementById('new_password');
        const confirmPwd = document.getElementById('confirm_password');
        const submitBtn = document.getElementById('submitBtn');
        
        let isValid = true;
        
        // Validate current password
        if(currentPwd.value === '') {
            currentPwd.classList.add('error');
            currentPwd.focus();
            isValid = false;
        } else {
            currentPwd.classList.remove('error');
        }
        
        // Validate new password
        if(newPwd.value === '') {
            newPwd.classList.add('error');
            if(isValid) newPwd.focus();
            isValid = false;
        } else if(newPwd.value.length < 8) {
            newPwd.classList.add('error');
            if(isValid) newPwd.focus();
            alert('Password must be at least 8 characters long');
            isValid = false;
        } else {
            newPwd.classList.remove('error');
        }
        
        // Validate password match
        if(confirmPwd.value === '') {
            confirmPwd.classList.add('error');
            if(isValid) confirmPwd.focus();
            isValid = false;
        } else if(newPwd.value !== confirmPwd.value) {
            confirmPwd.classList.add('error');
            if(isValid) confirmPwd.focus();
            alert('New passwords do not match');
            isValid = false;
        } else {
            confirmPwd.classList.remove('error');
        }
        
        // Check if new password is same as current (client-side hint)
        if(newPwd.value === currentPwd.value && currentPwd.value !== '') {
            alert('New password cannot be the same as current password');
            isValid = false;
        }
        
        if(!isValid) {
            e.preventDefault();
            return;
        }
        
        // Show loading state
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Changing Password...';
        submitBtn.classList.add('btn-loading');
        submitBtn.disabled = true;
    });

    // Remove error class on input
    document.getElementById('current_password').addEventListener('input', function() {
        if(this.value !== '') this.classList.remove('error');
    });
    
    document.getElementById('new_password').addEventListener('input', function() {
        if(this.value !== '') this.classList.remove('error');
    });
    
    document.getElementById('confirm_password').addEventListener('input', function() {
        if(this.value !== '') this.classList.remove('error');
    });
</script>

<?php 
    // Process form submission
    if(isset($_POST['submit']))
    {
        $id = intval($_POST['id']);
        $current_password = md5($_POST['current_password']);
        $new_password = md5($_POST['new_password']);
        $confirm_password = md5($_POST['confirm_password']);

        // Check if user exists with current password
        $sql = "SELECT * FROM tbl_admin WHERE id = $id AND password = '$current_password'";
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);

        if($count == 1)
        {
            // Check if new password and confirm match
            if($new_password == $confirm_password)
            {
                // Update the password
                $sql2 = "UPDATE tbl_admin SET password = '$new_password' WHERE id = $id";
                $res2 = mysqli_query($conn, $sql2);

                if($res2 == true)
                {
                    $_SESSION['change-pwd'] = "<div class='success'>Password Changed Successfully.</div>";
                    header('location:'.SITEURL.'admin/manage-admin.php');
                    exit();
                }
                else
                {
                    $_SESSION['change-pwd'] = "<div class='error'>Failed to Change Password. Error: " . mysqli_error($conn) . "</div>";
                    header('location:'.SITEURL.'admin/manage-admin.php');
                    exit();
                }
            }
            else
            {
                $_SESSION['pwd-not-match'] = "<div class='error'>New passwords do not match.</div>";
                header('location:'.SITEURL.'admin/manage-admin.php');
                exit();
            }
        }
        else
        {
            $_SESSION['user-not-found'] = "<div class='error'>Current password is incorrect.</div>";
            header('location:'.SITEURL.'admin/manage-admin.php');
            exit();
        }
    }
?>

<?php include('partials/footer.php'); ?>