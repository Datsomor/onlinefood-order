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

    /* Image Preview Section */
    .image-preview {
        background: #f8f9ff;
        border-radius: 15px;
        padding: 20px;
        text-align: center;
        margin-bottom: 20px;
    }

    .current-image {
        position: relative;
        display: inline-block;
    }

    .current-image img {
        width: 180px;
        height: 180px;
        object-fit: cover;
        border-radius: 15px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        border: 3px solid white;
    }

    .image-badge {
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
        color: white;
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 11px;
        font-weight: 600;
        white-space: nowrap;
    }

    .no-image-placeholder {
        width: 180px;
        height: 180px;
        background: #f0f0f0;
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 3px solid #ffc107;
    }

    .no-image-placeholder i {
        font-size: 60px;
        color: #999;
    }

    /* Image Upload Area */
    .image-upload-area {
        border: 2px dashed #e0e0e0;
        border-radius: 15px;
        padding: 30px;
        text-align: center;
        transition: 0.3s;
        cursor: pointer;
        background: #fafafa;
    }

    .image-upload-area:hover {
        border-color: #667eea;
        background: #f8f9ff;
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
        margin-top: 15px;
        display: none;
        text-align: center;
    }

    .preview-image p {
        margin-bottom: 8px;
        color: #666;
        font-size: 13px;
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
    }

    .radio-option .status-badge {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 12px;
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
        
        .button-group {
            flex-direction: column;
        }
        
        .radio-group {
            flex-direction: column;
            gap: 10px;
        }
    }

    /* Loading State */
    .btn-loading {
        position: relative;
        pointer-events: none;
        opacity: 0.7;
    }
</style>

<?php 
    // Check whether the id is set or not
    if(isset($_GET['id']))
    {
        $id = mysqli_real_escape_string($conn, $_GET['id']);
        $sql = "SELECT * FROM tbl_category WHERE id=$id";
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);

        if($count == 1)
        {
            $row = mysqli_fetch_assoc($res);
            $title = $row['title'];
            $current_image = $row['image_name'];
            $featured = $row['featured'];
            $active = $row['active'];
        }
        else
        {
            $_SESSION['no-category-found'] = "<div class='error'>Category not Found.</div>";
            header('location:'.SITEURL.'admin/manage-category.php');
            exit();
        }
    }
    else
    {
        header('location:'.SITEURL.'admin/manage-category.php');
        exit();
    }
?>

<div class="main-content">
    <div class="update-wrapper">

        <!-- Page Header -->
        <div class="page-header">
            <h1>
                <i class="fas fa-tag"></i>
                Update Category
            </h1>
            <p>Modify category details, update image, and change status settings</p>
        </div>

        <!-- Update Form -->
        <form action="" method="POST" enctype="multipart/form-data" id="updateForm">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="hidden" name="current_image" value="<?php echo $current_image; ?>">

            <!-- Basic Information Section -->
            <div class="form-section">
                <div class="section-title">
                    <i class="fas fa-info-circle"></i>
                    <h2>Basic Information</h2>
                </div>

                <div class="form-group">
                    <label class="required">
                        <i class="fas fa-font"></i>
                        Category Title
                    </label>
                    <input type="text" name="title" class="form-control" 
                           value="<?php echo htmlspecialchars($title); ?>" 
                           placeholder="Enter category name" required>
                </div>
            </div>

            <!-- Image Section -->
            <div class="form-section">
                <div class="section-title">
                    <i class="fas fa-image"></i>
                    <h2>Category Image</h2>
                </div>

                <?php if($current_image != ""): ?>
                <div class="image-preview">
                    <div class="current-image">
                        <img src="<?php echo SITEURL; ?>images/category/<?php echo $current_image; ?>" alt="Current Category Image">
                        <span class="image-badge">
                            <i class="fas fa-check-circle"></i> Current Image
                        </span>
                    </div>
                </div>
                <?php else: ?>
                <div class="image-preview">
                    <div class="current-image">
                        <div class="no-image-placeholder">
                            <i class="fas fa-image"></i>
                        </div>
                        <span class="image-badge" style="background: #ffc107; color: #333;">
                            <i class="fas fa-exclamation-triangle"></i> No Image
                        </span>
                    </div>
                </div>
                <?php endif; ?>

                <div class="image-upload-area" id="uploadArea">
                    <i class="fas fa-cloud-upload-alt"></i>
                    <p>Click or drag to upload new image</p>
                    <small>Supported formats: JPG, PNG, GIF (Max 2MB)</small>
                    <input type="file" name="image" id="fileInput" class="file-input" accept="image/*">
                </div>
                <div class="preview-image" id="previewImage">
                    <p><i class="fas fa-eye"></i> New Image Preview:</p>
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
                            <input type="radio" name="featured" value="Yes" <?php echo ($featured == "Yes") ? 'checked' : ''; ?>>
                            <span class="status-badge featured">
                                <i class="fas fa-star"></i> Featured
                            </span>
                        </label>
                        <label class="radio-option">
                            <input type="radio" name="featured" value="No" <?php echo ($featured == "No") ? 'checked' : ''; ?>>
                            <span class="status-badge not-featured">
                                <i class="fas fa-star-half-alt"></i> Not Featured
                            </span>
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label>
                        <i class="fas fa-power-off"></i>
                        Active Status
                    </label>
                    <div class="radio-group">
                        <label class="radio-option">
                            <input type="radio" name="active" value="Yes" <?php echo ($active == "Yes") ? 'checked' : ''; ?>>
                            <span class="status-badge active">
                                <i class="fas fa-check-circle"></i> Active
                            </span>
                        </label>
                        <label class="radio-option">
                            <input type="radio" name="active" value="No" <?php echo ($active == "No") ? 'checked' : ''; ?>>
                            <span class="status-badge inactive">
                                <i class="fas fa-times-circle"></i> Inactive
                            </span>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Button Group -->
            <div class="button-group">
                <button type="submit" name="submit" class="btn-update" id="submitBtn">
                    <i class="fas fa-save"></i>
                    Update Category
                </button>
                <a href="<?php echo SITEURL; ?>admin/manage-category.php" class="btn-cancel">
                    <i class="fas fa-times"></i>
                    Cancel
                </a>
            </div>
        </form>

        <?php 
            if(isset($_POST['submit']))
            {
                // Get all values from form
                $id = intval($_POST['id']);
                $title = mysqli_real_escape_string($conn, $_POST['title']);
                $current_image = $_POST['current_image'];
                $featured = mysqli_real_escape_string($conn, $_POST['featured']);
                $active = mysqli_real_escape_string($conn, $_POST['active']);
                
                $image_name = $current_image;

                // Check if new image is uploaded
                if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != "")
                {
                    $image_name = $_FILES['image']['name'];
                    $ext = pathinfo($image_name, PATHINFO_EXTENSION);
                    $image_name = "Food_Category_" . rand(000, 999) . '.' . $ext;
                    $source_path = $_FILES['image']['tmp_name'];
                    $destination_path = "../images/category/" . $image_name;
                    
                    $upload = move_uploaded_file($source_path, $destination_path);
                    
                    if($upload == false)
                    {
                        $_SESSION['upload'] = "<div class='error'>Failed to Upload Image.</div>";
                        header('location:'.SITEURL.'admin/manage-category.php');
                        exit();
                    }
                    
                    // Remove current image if exists
                    if($current_image != "")
                    {
                        $remove_path = "../images/category/" . $current_image;
                        if(file_exists($remove_path))
                        {
                            unlink($remove_path);
                        }
                    }
                }

                // Update database
                $sql2 = "UPDATE tbl_category SET 
                    title = '$title',
                    image_name = '$image_name',
                    featured = '$featured',
                    active = '$active' 
                    WHERE id = $id";

                $res2 = mysqli_query($conn, $sql2);

                if($res2)
                {
                    $_SESSION['update'] = "<div class='success'>Category Updated Successfully.</div>";
                    header('location:'.SITEURL.'admin/manage-category.php');
                    exit();
                }
                else
                {
                    $_SESSION['update'] = "<div class='error'>Failed to Update Category. Error: " . mysqli_error($conn) . "</div>";
                    header('location:'.SITEURL.'admin/manage-category.php');
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

    uploadArea.addEventListener('click', function() {
        fileInput.click();
    });

    fileInput.addEventListener('change', function(e) {
        if(e.target.files && e.target.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                imagePreview.src = e.target.result;
                previewDiv.style.display = 'block';
            }
            reader.readAsDataURL(e.target.files[0]);
        }
    });

    // Drag and drop functionality
    uploadArea.addEventListener('dragover', function(e) {
        e.preventDefault();
        uploadArea.style.borderColor = '#667eea';
        uploadArea.style.background = '#f8f9ff';
    });

    uploadArea.addEventListener('dragleave', function(e) {
        e.preventDefault();
        uploadArea.style.borderColor = '#e0e0e0';
        uploadArea.style.background = '#fafafa';
    });

    uploadArea.addEventListener('drop', function(e) {
        e.preventDefault();
        uploadArea.style.borderColor = '#e0e0e0';
        uploadArea.style.background = '#fafafa';
        
        if(e.dataTransfer.files && e.dataTransfer.files[0]) {
            fileInput.files = e.dataTransfer.files;
            const reader = new FileReader();
            reader.onload = function(e) {
                imagePreview.src = e.target.result;
                previewDiv.style.display = 'block';
            }
            reader.readAsDataURL(e.dataTransfer.files[0]);
        }
    });

    // Form submission loading state
    document.getElementById('updateForm').addEventListener('submit', function(e) {
        const submitBtn = document.getElementById('submitBtn');
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Updating...';
        submitBtn.classList.add('btn-loading');
        submitBtn.disabled = true;
    });

    // Title validation
    const titleInput = document.querySelector('input[name="title"]');
    titleInput.addEventListener('input', function() {
        if(this.value.trim() === '') {
            this.style.borderColor = '#dc3545';
        } else {
            this.style.borderColor = '#e0e0e0';
        }
    });
</script>

<?php include('partials/footer.php'); ?>