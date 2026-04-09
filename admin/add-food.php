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

    textarea.form-control {
        resize: vertical;
        min-height: 100px;
    }

    select.form-control {
        cursor: pointer;
        background: white;
    }

    /* Image Upload Area */
    .image-upload-area {
        border: 2px dashed #e0e0e0;
        border-radius: 15px;
        padding: 40px;
        text-align: center;
        transition: 0.3s;
        cursor: pointer;
        background: #fafafa;
    }

    .image-upload-area:hover {
        border-color: #667eea;
        background: #f8f9ff;
    }

    .image-upload-area.dragover {
        border-color: #28a745;
        background: #e8f5e9;
    }

    .image-upload-area i {
        font-size: 48px;
        color: #667eea;
        margin-bottom: 10px;
    }

    .image-upload-area p {
        color: #666;
        font-size: 14px;
        margin-bottom: 5px;
    }

    .image-upload-area small {
        color: #999;
        font-size: 12px;
    }

    .file-input {
        display: none;
    }

    .preview-image {
        margin-top: 20px;
        display: none;
        text-align: center;
        padding: 15px;
        background: #f8f9ff;
        border-radius: 12px;
    }

    .preview-image p {
        margin-bottom: 10px;
        color: #667eea;
        font-size: 13px;
        font-weight: 500;
    }

    .preview-image img {
        max-width: 150px;
        max-height: 150px;
        border-radius: 12px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    /* Radio Group */
    .radio-group {
        display: flex;
        gap: 30px;
        align-items: center;
        flex-wrap: wrap;
    }

    .radio-option {
        display: flex;
        align-items: center;
        gap: 8px;
        cursor: pointer;
        padding: 8px 15px;
        border-radius: 30px;
        transition: 0.3s;
    }

    .radio-option:hover {
        background: #f8f9ff;
    }

    .radio-option input[type="radio"] {
        width: 18px;
        height: 18px;
        cursor: pointer;
        accent-color: #667eea;
    }

    .radio-option span {
        cursor: pointer;
        color: #666;
        font-weight: 500;
    }

    .status-badge {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 13px;
        font-weight: 500;
    }

    .status-badge.active {
        background: #d4edda;
        color: #155724;
    }

    .status-badge.inactive {
        background: #f8d7da;
        color: #721c24;
    }

    .status-badge.featured {
        background: #cce5ff;
        color: #004085;
    }

    .status-badge.not-featured {
        background: #f0f0f0;
        color: #666;
    }

    /* Button Group */
    .button-group {
        display: flex;
        gap: 15px;
        margin-top: 20px;
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

    /* Info Note */
    .info-note {
        background: #e8f4fd;
        border-left: 4px solid #667eea;
        padding: 12px 15px;
        border-radius: 10px;
        margin-bottom: 20px;
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
        
        .radio-group {
            flex-direction: column;
            gap: 10px;
        }
        
        .image-upload-area {
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
                <i class="fas fa-plus-circle"></i>
                Add New Food Item
            </h1>
            <p>Create a delicious new dish to add to your menu</p>
        </div>

        <!-- Alert Messages -->
        <?php 
            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }
        ?>

        <!-- Add Food Form -->
        <form action="" method="POST" enctype="multipart/form-data" id="addForm">

            <!-- Basic Information Section -->
            <div class="form-section">
                <div class="section-title">
                    <i class="fas fa-info-circle"></i>
                    <h2>Basic Information</h2>
                </div>

                <div class="form-group">
                    <label class="required">
                        <i class="fas fa-tag"></i>
                        Food Title
                    </label>
                    <input type="text" name="title" id="title" class="form-control" 
                           placeholder="Enter food name (e.g., Margherita Pizza, Chicken Burger)" 
                           autocomplete="off" required>
                    <small style="color: #999; font-size: 12px; margin-top: 5px; display: block;">
                        <i class="fas fa-info-circle"></i> This name will be displayed to customers
                    </small>
                </div>

                <div class="form-group">
                    <label>
                        <i class="fas fa-align-left"></i>
                        Description
                    </label>
                    <textarea name="description" id="description" class="form-control" 
                              placeholder="Describe your delicious dish... Include ingredients, taste profile, and serving suggestions" 
                              rows="4"></textarea>
                    <small style="color: #999; font-size: 12px; margin-top: 5px; display: block;">
                        <i class="fas fa-info-circle"></i> A good description helps customers choose
                    </small>
                </div>

                <div class="form-group">
                    <label class="required">
                        <i class="fas fa-dollar-sign"></i>
                        Price
                    </label>
                    <input type="number" name="price" id="price" class="form-control" 
                           placeholder="0.00" step="0.01" min="0" required>
                    <small style="color: #999; font-size: 12px; margin-top: 5px; display: block;">
                        <i class="fas fa-info-circle"></i> Enter price in USD (e.g., 12.99)
                    </small>
                </div>

                <div class="form-group">
                    <label class="required">
                        <i class="fas fa-list"></i>
                        Category
                    </label>
                    <select name="category" id="category" class="form-control" required>
                        <option value="">-- Select a Category --</option>
                        <?php 
                            $sql = "SELECT * FROM tbl_category WHERE active='Yes' ORDER BY title ASC";
                            $res = mysqli_query($conn, $sql);
                            $count = mysqli_num_rows($res);

                            if($count > 0)
                            {
                                while($row = mysqli_fetch_assoc($res))
                                {
                                    $id = $row['id'];
                                    $title = $row['title'];
                                    echo "<option value='$id'>" . htmlspecialchars($title) . "</option>";
                                }
                            }
                            else
                            {
                                echo "<option value='0'>No Categories Available</option>";
                            }
                        ?>
                    </select>
                    <small style="color: #999; font-size: 12px; margin-top: 5px; display: block;">
                        <i class="fas fa-info-circle"></i> Select the appropriate category for this dish
                    </small>
                </div>
            </div>

            <!-- Image Section -->
            <div class="form-section">
                <div class="section-title">
                    <i class="fas fa-image"></i>
                    <h2>Food Image</h2>
                </div>

                <div class="info-note">
                    <i class="fas fa-lightbulb"></i>
                    <p>Recommended image size: 400x300 pixels. Supported formats: JPG, PNG, GIF (Max 2MB)</p>
                </div>

                <div class="image-upload-area" id="uploadArea">
                    <i class="fas fa-cloud-upload-alt"></i>
                    <p><strong>Click or drag to upload</strong></p>
                    <p>Choose an appetizing image of your dish</p>
                    <small>Recommended: 400x300px | Max size: 2MB</small>
                    <input type="file" name="image" id="fileInput" class="file-input" accept="image/*">
                </div>
                <div class="preview-image" id="previewImage">
                    <p><i class="fas fa-eye"></i> Image Preview:</p>
                    <img id="imagePreview" src="" alt="Preview">
                </div>
            </div>

            <!-- Status Section -->
            <div class="form-section">
                <div class="section-title">
                    <i class="fas fa-toggle-on"></i>
                    <h2>Status Settings</h2>
                </div>

                <div class="form-group">
                    <label>
                        <i class="fas fa-star"></i>
                        Featured Status
                    </label>
                    <div class="radio-group">
                        <label class="radio-option">
                            <input type="radio" name="featured" value="Yes" checked>
                            <span class="status-badge featured">
                                <i class="fas fa-star"></i> Featured
                            </span>
                        </label>
                        <label class="radio-option">
                            <input type="radio" name="featured" value="No">
                            <span class="status-badge not-featured">
                                <i class="fas fa-star-half-alt"></i> Not Featured
                            </span>
                        </label>
                    </div>
                    <small style="color: #999; font-size: 12px; margin-top: 5px; display: block;">
                        <i class="fas fa-info-circle"></i> Featured items appear on the homepage
                    </small>
                </div>

                <div class="form-group">
                    <label>
                        <i class="fas fa-power-off"></i>
                        Active Status
                    </label>
                    <div class="radio-group">
                        <label class="radio-option">
                            <input type="radio" name="active" value="Yes" checked>
                            <span class="status-badge active">
                                <i class="fas fa-check-circle"></i> Active
                            </span>
                        </label>
                        <label class="radio-option">
                            <input type="radio" name="active" value="No">
                            <span class="status-badge inactive">
                                <i class="fas fa-times-circle"></i> Inactive
                            </span>
                        </label>
                    </div>
                    <small style="color: #999; font-size: 12px; margin-top: 5px; display: block;">
                        <i class="fas fa-info-circle"></i> Inactive items won't be visible to customers
                    </small>
                </div>
            </div>

            <!-- Button Group -->
            <div class="button-group">
                <button type="submit" name="submit" class="btn-add" id="submitBtn">
                    <i class="fas fa-save"></i>
                    Add Food Item
                </button>
                <a href="<?php echo SITEURL; ?>admin/manage-food.php" class="btn-cancel">
                    <i class="fas fa-times"></i>
                    Cancel
                </a>
            </div>
        </form>

        <?php 
            // Check whether the button is clicked or not
            if(isset($_POST['submit']))
            {
                // Get the Data from Form
                $title = mysqli_real_escape_string($conn, $_POST['title']);
                $description = mysqli_real_escape_string($conn, $_POST['description']);
                $price = floatval($_POST['price']);
                $category = intval($_POST['category']);
                
                // Get radio button values
                $featured = isset($_POST['featured']) ? $_POST['featured'] : "No";
                $active = isset($_POST['active']) ? $_POST['active'] : "No";
                
                $image_name = "";

                // Upload the Image if selected
                if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != "")
                {
                    $image_name = $_FILES['image']['name'];
                    
                    // Get the extension of selected image
                    $ext = pathinfo($image_name, PATHINFO_EXTENSION);
                    
                    // Create new name for image
                    $image_name = "Food-Name-" . rand(0000, 9999) . "." . $ext;
                    
                    $src = $_FILES['image']['tmp_name'];
                    $dst = "../images/food/" . $image_name;
                    
                    $upload = move_uploaded_file($src, $dst);
                    
                    if($upload == false)
                    {
                        $_SESSION['upload'] = "<div class='error'>Failed to Upload Image.</div>";
                        header('location:'.SITEURL.'admin/add-food.php');
                        exit();
                    }
                }

                // Insert into Database
                $sql2 = "INSERT INTO tbl_food SET 
                    title = '$title',
                    description = '$description',
                    price = $price,
                    image_name = '$image_name',
                    category_id = $category,
                    featured = '$featured',
                    active = '$active'";

                $res2 = mysqli_query($conn, $sql2);

                if($res2 == true)
                {
                    $_SESSION['add'] = "<div class='success'>Food Added Successfully.</div>";
                    header('location:'.SITEURL.'admin/manage-food.php');
                    exit();
                }
                else
                {
                    $_SESSION['add'] = "<div class='error'>Failed to Add Food. Error: " . mysqli_error($conn) . "</div>";
                    header('location:'.SITEURL.'admin/manage-food.php');
                    exit();
                }
            }
        ?>

    </div>
</div>

<script>
    // Image upload preview
    const fileInput = document.getElementById('fileInput');
    const uploadArea = document.getElementById('uploadArea');
    const previewDiv = document.getElementById('previewImage');
    const imagePreview = document.getElementById('imagePreview');

    // Click to upload
    uploadArea.addEventListener('click', function() {
        fileInput.click();
    });

    // File selection preview
    fileInput.addEventListener('change', function(e) {
        if(e.target.files && e.target.files[0]) {
            const file = e.target.files[0];
            
            // Validate file size (2MB limit)
            if(file.size > 2 * 1024 * 1024) {
                alert('File is too large! Maximum size is 2MB.');
                fileInput.value = '';
                previewDiv.style.display = 'none';
                return;
            }
            
            // Validate file type
            const validTypes = ['image/jpeg', 'image/png', 'image/gif'];
            if(!validTypes.includes(file.type)) {
                alert('Invalid file type! Please upload JPG, PNG, or GIF images only.');
                fileInput.value = '';
                previewDiv.style.display = 'none';
                return;
            }
            
            const reader = new FileReader();
            reader.onload = function(e) {
                imagePreview.src = e.target.result;
                previewDiv.style.display = 'block';
                uploadArea.style.borderColor = '#28a745';
            }
            reader.readAsDataURL(file);
        }
    });

    // Drag and drop functionality
    uploadArea.addEventListener('dragover', function(e) {
        e.preventDefault();
        uploadArea.classList.add('dragover');
        uploadArea.style.borderColor = '#28a745';
        uploadArea.style.background = '#e8f5e9';
    });

    uploadArea.addEventListener('dragleave', function(e) {
        e.preventDefault();
        uploadArea.classList.remove('dragover');
        uploadArea.style.borderColor = '#e0e0e0';
        uploadArea.style.background = '#fafafa';
    });

    uploadArea.addEventListener('drop', function(e) {
        e.preventDefault();
        uploadArea.classList.remove('dragover');
        uploadArea.style.borderColor = '#e0e0e0';
        uploadArea.style.background = '#fafafa';
        
        if(e.dataTransfer.files && e.dataTransfer.files[0]) {
            fileInput.files = e.dataTransfer.files;
            
            // Trigger change event
            const event = new Event('change');
            fileInput.dispatchEvent(event);
        }
    });

    // Form validation and submission
    document.getElementById('addForm').addEventListener('submit', function(e) {
        const titleInput = document.getElementById('title');
        const priceInput = document.getElementById('price');
        const categorySelect = document.getElementById('category');
        const submitBtn = document.getElementById('submitBtn');
        
        let isValid = true;
        
        // Validate title
        if(titleInput.value.trim() === '') {
            titleInput.classList.add('error');
            titleInput.focus();
            isValid = false;
        }
        
        // Validate price
        if(priceInput.value === '' || parseFloat(priceInput.value) <= 0) {
            priceInput.classList.add('error');
            if(isValid) priceInput.focus();
            isValid = false;
        }
        
        // Validate category
        if(categorySelect.value === '' || categorySelect.value === '0') {
            categorySelect.classList.add('error');
            if(isValid) categorySelect.focus();
            isValid = false;
        }
        
        if(!isValid) {
            e.preventDefault();
            alert('Please fill in all required fields correctly.');
            return;
        }
        
        // Show loading state
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Adding...';
        submitBtn.classList.add('btn-loading');
        submitBtn.disabled = true;
    });

    // Remove error class on input
    document.getElementById('title').addEventListener('input', function() {
        if(this.value.trim() !== '') this.classList.remove('error');
    });
    
    document.getElementById('price').addEventListener('input', function() {
        if(this.value !== '' && parseFloat(this.value) > 0) this.classList.remove('error');
    });
    
    document.getElementById('category').addEventListener('change', function() {
        if(this.value !== '' && this.value !== '0') this.classList.remove('error');
    });

    // Set default radio selection styling on page load
    document.addEventListener('DOMContentLoaded', function() {
        // Set default featured
        const featuredYes = document.querySelector('input[name="featured"][value="Yes"]');
        if(featuredYes) featuredYes.checked = true;
        
        // Set default active
        const activeYes = document.querySelector('input[name="active"][value="Yes"]');
        if(activeYes) activeYes.checked = true;
    });
</script>

<?php include('partials/footer.php'); ?>