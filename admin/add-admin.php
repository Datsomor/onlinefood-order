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

    .add-wrapper {
        max-width: 700px;
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

    .form-control {
        width: 100%;
        padding: 12px 15px;
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

    .strength-text i {
        font-size: 12px;
    }

    .password-hint {
        font-size: 12px;
        color: #999;
        margin-top: 5px;
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

    /* Info Note */
    .info-note {
        background: #e8f4fd;
        border-left: 4px solid #667eea;
        padding: 12px 15px;
        border-radius: 10px;
        margin-bottom: 25px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .info-note i {
        color: #667eea;
        font-size: 18px;
    }

    .info-note p {
        color: #333;
        font-size: 13px;
        margin: 0;
    }

    /* Button Group */
    .button-group {
        display: flex;
        gap: 15px;
        margin-top: 25px;
    }

    .btn-add {
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

    .btn-add:hover {
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
    }

    /* Loading State */
    .btn-loading {
        position: relative;
        pointer-events: none;
        opacity: 0.7;
    }
</style>

<div class="main-content">
    <div class="add-wrapper">

        <!-- Page Header -->
        <div class="page-header">
            <h1>
                <i class="fas fa-user-plus"></i>
                Add New Administrator
            </h1>
            <p>Create a new admin account to manage the food ordering system</p>
        </div>

        <!-- Alert Messages -->
        <?php 
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
        ?>

        <!-- Add Admin Form -->
        <div class="form-section">
            <div class="section-title">
                <i class="fas fa-user-shield"></i>
                <h2>Admin Account Details</h2>
            </div>

            <div class="info-note">
                <i class="fas fa-info-circle"></i>
                <p>All fields are required. The password will be encrypted for security.</p>
            </div>

            <form action="" method="POST" id="addForm">

                <div class="form-group">
                    <label class="required">
                        <i class="fas fa-user"></i>
                        Full Name
                    </label>
                    <input type="text" name="full_name" id="full_name" class="form-control" 
                           placeholder="Enter administrator's full name" 
                           autocomplete="off" required>
                    <small style="color: #999; font-size: 12px; margin-top: 5px; display: block;">
                        <i class="fas fa-info-circle"></i> This will be displayed in the admin panel
                    </small>
                </div>

                <div class="form-group">
                    <label class="required">
                        <i class="fas fa-user-tag"></i>
                        Username
                    </label>
                    <input type="text" name="username" id="username" class="form-control" 
                           placeholder="Choose a unique username" 
                           autocomplete="off" required>
                    <small style="color: #999; font-size: 12px; margin-top: 5px; display: block;">
                        <i class="fas fa-info-circle"></i> Username must be unique (e.g., admin_john)
                    </small>
                </div>

                <div class="form-group">
                    <label class="required">
                        <i class="fas fa-lock"></i>
                        Password
                    </label>
                    <input type="password" name="password" id="password" class="form-control" 
                           placeholder="Create a strong password" required>
                    
                    <!-- Password Strength Indicator -->
                    <div class="password-strength">
                        <div class="strength-bar-container">
                            <div class="strength-bar" id="strengthBar"></div>
                        </div>
                        <div class="strength-text" id="strengthText">
                            <i class="fas fa-shield-alt"></i>
                            <span>Enter a password</span>
                        </div>
                    </div>
                    
                    <div class="password-hint">
                        <i class="fas fa-lightbulb"></i>
                        <span>Use 8+ characters with letters, numbers & symbols</span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="required">
                        <i class="fas fa-check-circle"></i>
                        Confirm Password
                    </label>
                    <input type="password" name="confirm_password" id="confirm_password" class="form-control" 
                           placeholder="Re-enter your password" required>
                    <div class="password-match" id="passwordMatch"></div>
                </div>

                <!-- Button Group -->
                <div class="button-group">
                    <button type="submit" name="submit" class="btn-add" id="submitBtn">
                        <i class="fas fa-save"></i>
                        Create Admin
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
    // Password Strength Checker
    const passwordInput = document.getElementById('password');
    const confirmInput = document.getElementById('confirm_password');
    const strengthBar = document.getElementById('strengthBar');
    const strengthText = document.getElementById('strengthText');

    function checkPasswordStrength(password) {
        let strength = 0;
        
        if(password.length === 0) {
            return { score: 0, message: 'Enter a password', class: '' };
        }
        
        // Length check
        if(password.length >= 8) strength += 1;
        
        // Lowercase letter check
        if(password.match(/[a-z]+/)) strength += 1;
        
        // Uppercase letter check
        if(password.match(/[A-Z]+/)) strength += 1;
        
        // Number check
        if(password.match(/[0-9]+/)) strength += 1;
        
        // Special character check
        if(password.match(/[$@#&!%*?]+/)) strength += 1;
        
        let result = { score: strength, message: '', class: '' };
        
        if(strength <= 2) {
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

    passwordInput.addEventListener('input', function() {
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
        
        // Check password match if confirm has value
        if(confirmInput.value) {
            checkPasswordMatch();
        }
    });

    // Password Match Checker
    const passwordMatchDiv = document.getElementById('passwordMatch');

    function checkPasswordMatch() {
        const password = passwordInput.value;
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

    // Username availability check (optional enhancement)
    const usernameInput = document.getElementById('username');
    let usernameTimeout;

    usernameInput.addEventListener('input', function() {
        clearTimeout(usernameTimeout);
        const username = this.value.trim();
        
        if(username.length < 3) {
            this.classList.remove('error');
            return;
        }
        
        // You can implement AJAX username check here if needed
        // This is a placeholder for future enhancement
    });

    // Form validation and submission
    document.getElementById('addForm').addEventListener('submit', function(e) {
        const fullName = document.getElementById('full_name');
        const username = document.getElementById('username');
        const password = document.getElementById('password');
        const confirm = document.getElementById('confirm_password');
        const submitBtn = document.getElementById('submitBtn');
        
        let isValid = true;
        
        // Validate full name
        if(fullName.value.trim() === '') {
            fullName.classList.add('error');
            fullName.focus();
            isValid = false;
        } else {
            fullName.classList.remove('error');
        }
        
        // Validate username
        if(username.value.trim() === '') {
            username.classList.add('error');
            if(isValid) username.focus();
            isValid = false;
        } else if(username.value.length < 3) {
            username.classList.add('error');
            if(isValid) username.focus();
            alert('Username must be at least 3 characters long');
            isValid = false;
        } else {
            username.classList.remove('error');
        }
        
        // Validate password
        if(password.value === '') {
            password.classList.add('error');
            if(isValid) password.focus();
            isValid = false;
        } else if(password.value.length < 6) {
            password.classList.add('error');
            if(isValid) password.focus();
            alert('Password must be at least 6 characters long');
            isValid = false;
        } else {
            password.classList.remove('error');
        }
        
        // Validate password match
        if(confirm.value === '') {
            confirm.classList.add('error');
            if(isValid) confirm.focus();
            isValid = false;
        } else if(password.value !== confirm.value) {
            confirm.classList.add('error');
            if(isValid) confirm.focus();
            alert('Passwords do not match');
            isValid = false;
        } else {
            confirm.classList.remove('error');
        }
        
        if(!isValid) {
            e.preventDefault();
            return;
        }
        
        // Show loading state
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Creating Admin...';
        submitBtn.classList.add('btn-loading');
        submitBtn.disabled = true;
    });

    // Remove error class on input
    document.getElementById('full_name').addEventListener('input', function() {
        if(this.value.trim() !== '') this.classList.remove('error');
    });
    
    document.getElementById('username').addEventListener('input', function() {
        if(this.value.trim() !== '') this.classList.remove('error');
    });
    
    document.getElementById('password').addEventListener('input', function() {
        if(this.value !== '') this.classList.remove('error');
    });
    
    document.getElementById('confirm_password').addEventListener('input', function() {
        if(this.value !== '') this.classList.remove('error');
    });
</script>

<?php include('partials/footer.php'); ?>

<?php 
    // Process the Value from Form and Save it in Database
    if(isset($_POST['submit']))
    {
        // Get the Data from form
        $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = md5($_POST['password']); // Password Encryption with MD5
        
        // Check if username already exists
        $check_sql = "SELECT * FROM tbl_admin WHERE username = '$username'";
        $check_res = mysqli_query($conn, $check_sql);
        
        if(mysqli_num_rows($check_res) > 0) {
            $_SESSION['add'] = "<div class='error'>Username already exists! Please choose a different username.</div>";
            header("location:".SITEURL.'admin/add-admin.php');
            exit();
        }
        
        // SQL Query to Save the data into database
        $sql = "INSERT INTO tbl_admin SET 
            full_name = '$full_name',
            username = '$username',
            password = '$password'";
        
        // Executing Query and Saving Data into Database
        $res = mysqli_query($conn, $sql);
        
        // Check whether the data is inserted or not
        if($res == true)
        {
            $_SESSION['add'] = "<div class='success'>Admin Added Successfully.</div>";
            header("location:".SITEURL.'admin/manage-admin.php');
            exit();
        }
        else
        {
            $_SESSION['add'] = "<div class='error'>Failed to Add Admin. Error: " . mysqli_error($conn) . "</div>";
            header("location:".SITEURL.'admin/add-admin.php');
            exit();
        }
    }
?>