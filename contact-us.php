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

    /* Hero Section */
    .contact-hero {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 20px;
        padding: 60px 40px;
        margin-bottom: 40px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
        animation: slideDown 0.6s ease;
    }

    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .contact-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" opacity="0.1"><circle cx="20" cy="20" r="10" fill="white"/><circle cx="80" cy="80" r="15" fill="white"/><path d="M30,70 Q40,50 60,70 T90,70" stroke="white" fill="none" stroke-width="3"/></svg>');
        background-size: 200px 200px;
        animation: float 20s linear infinite;
    }

    @keyframes float {
        0% { background-position: 0 0; }
        100% { background-position: 200px 200px; }
    }

    .contact-hero-content {
        position: relative;
        z-index: 1;
        text-align: center;
        color: white;
    }

    .contact-hero-content h1 {
        font-size: 42px;
        font-weight: 700;
        margin-bottom: 15px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
    }

    .contact-hero-content p {
        font-size: 18px;
        max-width: 600px;
        margin: 0 auto;
        opacity: 0.9;
    }

    /* Contact Grid Layout */
    .contact-grid {
        display: grid;
        grid-template-columns: 1fr 1.5fr;
        gap: 30px;
        margin: 40px 0;
    }

    /* Contact Information Cards */
    .contact-info-section {
        background: white;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
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

    .info-header {
        margin-bottom: 30px;
    }

    .info-header h3 {
        font-size: 24px;
        color: #333;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .info-header h3 i {
        color: #667eea;
    }

    .info-header p {
        color: #666;
        font-size: 14px;
        line-height: 1.6;
    }

    .info-cards {
        display: flex;
        flex-direction: column;
        gap: 20px;
        margin-bottom: 30px;
    }

    .info-card {
        display: flex;
        gap: 15px;
        padding: 20px;
        background: #f8f9ff;
        border-radius: 15px;
        transition: 0.3s;
    }

    .info-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(102, 126, 234, 0.1);
    }

    .info-icon {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .info-icon i {
        font-size: 24px;
        color: white;
    }

    .info-details h4 {
        font-size: 16px;
        color: #333;
        margin-bottom: 5px;
    }

    .info-details p {
        color: #666;
        font-size: 14px;
        line-height: 1.6;
        margin-bottom: 2px;
    }

    .info-details .small-text {
        font-size: 12px;
        color: #999;
    }

    /* Business Hours */
    .business-hours {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 15px;
        padding: 25px;
        color: white;
        margin-top: 20px;
    }

    .business-hours h4 {
        font-size: 18px;
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .business-hours h4 i {
        color: #ffd93d;
    }

    .hours-row {
        display: flex;
        justify-content: space-between;
        padding: 8px 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .hours-row:last-child {
        border-bottom: none;
    }

    .hours-day {
        font-weight: 500;
    }

    .hours-time {
        color: #ffd93d;
    }

    .closed-badge {
        background: #ff6b6b;
        color: white;
        padding: 2px 10px;
        border-radius: 20px;
        font-size: 12px;
    }

    /* Contact Form */
    .contact-form-section {
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

    .form-header {
        margin-bottom: 30px;
    }

    .form-header h3 {
        font-size: 24px;
        color: #333;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .form-header h3 i {
        color: #667eea;
    }

    .form-header p {
        color: #666;
        font-size: 14px;
    }

    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 20px;
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
        font-size: 14px;
    }

    .form-control {
        width: 100%;
        padding: 12px 15px;
        border: 2px solid #e0e0e0;
        border-radius: 12px;
        font-size: 14px;
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

    /* Submit Button */
    .submit-btn {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
        padding: 15px 30px;
        border-radius: 12px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        width: 100%;
    }

    .submit-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
    }

    .submit-btn i {
        font-size: 18px;
    }

    /* Map Section */
    .map-section {
        background: white;
        border-radius: 20px;
        padding: 30px;
        margin: 40px 0;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        animation: fadeInUp 0.8s ease;
    }

    .map-header {
        margin-bottom: 20px;
    }

    .map-header h3 {
        font-size: 20px;
        color: #333;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .map-header h3 i {
        color: #667eea;
    }

    .map-container {
        border-radius: 15px;
        overflow: hidden;
        height: 350px;
    }

    .map-container iframe {
        width: 100%;
        height: 100%;
        border: none;
    }

    /* FAQ Section */
    .faq-section {
        background: white;
        border-radius: 20px;
        padding: 30px;
        margin: 40px 0;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    }

    .faq-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .faq-header h3 {
        font-size: 28px;
        color: #333;
        margin-bottom: 10px;
    }

    .faq-header p {
        color: #666;
        font-size: 16px;
    }

    .faq-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
    }

    .faq-item {
        padding: 20px;
        background: #f8f9ff;
        border-radius: 15px;
        transition: 0.3s;
    }

    .faq-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(102, 126, 234, 0.1);
    }

    .faq-question {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 10px;
    }

    .faq-question i {
        color: #667eea;
        font-size: 18px;
    }

    .faq-question h4 {
        font-size: 16px;
        color: #333;
        font-weight: 600;
    }

    .faq-answer {
        color: #666;
        font-size: 14px;
        line-height: 1.6;
        padding-left: 28px;
    }

    /* Social Connect */
    .social-connect {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 15px;
        padding: 40px;
        margin: 40px 0;
        text-align: center;
        color: white;
    }

    .social-connect h3 {
        font-size: 24px;
        margin-bottom: 15px;
    }

    .social-connect p {
        font-size: 16px;
        margin-bottom: 30px;
        opacity: 0.9;
    }

    .social-links {
        display: flex;
        justify-content: center;
        gap: 20px;
    }

    .social-link {
        width: 60px;
        height: 60px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 24px;
        transition: 0.3s;
        text-decoration: none;
    }

    .social-link:hover {
        background: white;
        color: #667eea;
        transform: translateY(-5px);
    }

    /* Alert Message */
    .alert {
        padding: 15px 20px;
        border-radius: 10px;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 10px;
        animation: slideIn 0.5s ease;
    }

    .alert-success {
        background: #d4edda;
        color: #155724;
        border-left: 4px solid #28a745;
    }

    .alert-error {
        background: #f8d7da;
        color: #721c24;
        border-left: 4px solid #dc3545;
    }

    @keyframes slideIn {
        from {
            transform: translateY(-20px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    /* Responsive Design */
    @media (max-width: 992px) {
        .main-content {
            margin-left: 0;
        }

        .contact-grid {
            grid-template-columns: 1fr;
        }

        .faq-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 768px) {
        .contact-hero {
            padding: 40px 20px;
        }

        .contact-hero-content h1 {
            font-size: 32px;
        }

        .form-row {
            grid-template-columns: 1fr;
        }

        .social-links {
            flex-wrap: wrap;
        }

        .map-container {
            height: 250px;
        }
    }
</style>

<div class="main-content" id="mainContent">
    <div class="container">

        <!-- Hero Section -->
        <section class="contact-hero">
            <div class="contact-hero-content">
                <h1>Get in Touch With Us</h1>
                <p>We'd love to hear from you! Whether you have a question about our menu, delivery, or anything else, our team is ready to help.</p>
            </div>
        </section>

        <!-- Alert Messages -->
        <?php if(isset($_SESSION['contact_success'])): ?>
            <div class="alert alert-success">
                <i class="fas fa-check-circle"></i>
                <?php echo $_SESSION['contact_success']; ?>
            </div>
            <?php unset($_SESSION['contact_success']); ?>
        <?php endif; ?>

        <?php if(isset($_SESSION['contact_error'])): ?>
            <div class="alert alert-error">
                <i class="fas fa-exclamation-circle"></i>
                <?php echo $_SESSION['contact_error']; ?>
            </div>
            <?php unset($_SESSION['contact_error']); ?>
        <?php endif; ?>

        <!-- Contact Grid -->
        <div class="contact-grid">
            <!-- Contact Information -->
            <div class="contact-info-section">
                <div class="info-header">
                    <h3>
                        <i class="fas fa-info-circle"></i>
                        Contact Information
                    </h3>
                    <p>Reach out to us through any of these channels and we'll get back to you as soon as possible.</p>
                </div>

                <div class="info-cards">
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="info-details">
                            <h4>Visit Us</h4>
                            <p>Naa Dawa Street, Weija District</p>
                            <p>New Gbawe-CP GC-116-8785</p>
                            <p class="small-text">Greater Accra, Ghana.</p>
                        </div>
                    </div>

                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="info-details">
                            <h4>Call Us</h4>
                            <p>+233 (567) 567-8900</p>
                            <p>+233 (598) 567-8901</p>
                            <p class="small-text">24/7 Customer Support</p>
                        </div>
                    </div>

                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="info-details">
                            <h4>Email Us</h4>
                            <p>info@foodieexpress.com</p>
                            <p>support@foodieexpress.com</p>
                            <p class="small-text">orders@foodieexpress.com</p>
                        </div>
                    </div>
                </div>

                <!-- Business Hours -->
                <div class="business-hours">
                    <h4>
                        <i class="fas fa-clock"></i>
                        Business Hours
                    </h4>
                    <div class="hours-row">
                        <span class="hours-day">Monday - Friday</span>
                        <span class="hours-time">11:00 AM - 10:00 PM</span>
                    </div>
                    <div class="hours-row">
                        <span class="hours-day">Saturday</span>
                        <span class="hours-time">12:00 PM - 11:00 PM</span>
                    </div>
                    <div class="hours-row">
                        <span class="hours-day">Sunday</span>
                        <span class="hours-time">12:00 PM - 09:00 PM</span>
                    </div>
                    <div class="hours-row">
                        <span class="hours-day">Holidays</span>
                        <span class="closed-badge">Open</span>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form-section">
                <div class="form-header">
                    <h3>
                        <i class="fas fa-paper-plane"></i>
                        Send Us a Message
                    </h3>
                    <p>Fill out the form below and we'll get back to you within 24 hours.</p>
                </div>

                <form action="" method="POST" id="contactForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label>
                                <i class="fas fa-user"></i>
                                First Name
                            </label>
                            <input type="text" name="first_name" class="form-control" placeholder="Andy" required>
                        </div>
                        <div class="form-group">
                            <label>
                                <i class="fas fa-user"></i>
                                Last Name
                            </label>
                            <input type="text" name="last_name" class="form-control" placeholder="Jhonson" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>
                            <i class="fas fa-envelope"></i>
                            Email Address
                        </label>
                        <input type="email" name="email" class="form-control" placeholder="ODTECH@example.com" required>
                    </div>

                    <div class="form-group">
                        <label>
                            <i class="fas fa-phone"></i>
                            Phone Number
                        </label>
                        <input type="tel" name="phone" class="form-control" placeholder="+233 234 567 8900" required>
                    </div>

                    <div class="form-group">
                        <label>
                            <i class="fas fa-tag"></i>
                            Subject
                        </label>
                        <select name="subject" class="form-control" required>
                            <option value="">Select a subject</option>
                            <option value="general">General Inquiry</option>
                            <option value="order">Order Issue</option>
                            <option value="delivery">Delivery Question</option>
                            <option value="feedback">Feedback & Suggestions</option>
                            <option value="complaint">Complaint</option>
                            <option value="partnership">Partnership Opportunity</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>
                            <i class="fas fa-comment"></i>
                            Message
                        </label>
                        <textarea name="message" class="form-control" placeholder="Write your message here..." required></textarea>
                    </div>

                    <button type="submit" name="submit" class="submit-btn" id="submitBtn">
                        <i class="fas fa-paper-plane"></i>
                        Send Message
                    </button>
                </form>
            </div>
        </div>

        <!-- Map Section -->
        <div class="map-section">
            <div class="map-header">
                <h3>
                    <i class="fas fa-map-marked-alt"></i>
                    Find Us Here
                </h3>
            </div>
            <div class="map-container">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.91477029268!2d-74.119763973046!3d40.69740344146177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1624567890123!5m2!1sen!2s" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="faq-section">
            <div class="faq-header">
                <h3>Frequently Asked Questions</h3>
                <p>Quick answers to common questions</p>
            </div>

            <div class="faq-grid">
                <div class="faq-item">
                    <div class="faq-question">
                        <i class="fas fa-question-circle"></i>
                        <h4>How long does delivery take?</h4>
                    </div>
                    <div class="faq-answer">
                        Delivery typically takes 30-45 minutes depending on your location and traffic conditions.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <i class="fas fa-question-circle"></i>
                        <h4>What are your delivery hours?</h4>
                    </div>
                    <div class="faq-answer">
                        We deliver during our business hours: 11 AM to 10 PM Monday-Friday, and 12 PM to 11 PM on weekends.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <i class="fas fa-question-circle"></i>
                        <h4>Do you offer catering services?</h4>
                    </div>
                    <div class="faq-answer">
                        Yes! We offer catering for events and parties. Please contact us at least 48 hours in advance.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <i class="fas fa-question-circle"></i>
                        <h4>How can I track my order?</h4>
                    </div>
                    <div class="faq-answer">
                        Once your order is confirmed, you'll receive a tracking link via SMS and email to follow your delivery in real-time.
                    </div>
                </div>
            </div>
        </div>

        <!-- Social Connect -->
        <div class="social-connect">
            <h3>Connect With Us</h3>
            <p>Follow us on social media for updates, promotions, and mouth-watering food content!</p>
            <div class="social-links">
                <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                <a href="#" class="social-link"><i class="fab fa-tiktok"></i></a>
            </div>
        </div>

    </div>
</div>

<script>
    // Form submission handler
    document.getElementById('contactForm')?.addEventListener('submit', function(e) {
        const submitBtn = document.getElementById('submitBtn');
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
        submitBtn.disabled = true;
    });

    // Phone number formatting
    document.querySelector('input[name="phone"]')?.addEventListener('input', function(e) {
        let x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
        e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
    });

    // Form validation
    document.getElementById('contactForm')?.addEventListener('submit', function(e) {
        const email = document.querySelector('input[name="email"]').value;
        const phone = document.querySelector('input[name="phone"]').value;
        const firstName = document.querySelector('input[name="first_name"]').value;
        const lastName = document.querySelector('input[name="last_name"]').value;
        
        if(firstName.length < 2) {
            e.preventDefault();
            alert('Please enter a valid first name');
            return;
        }
        
        if(lastName.length < 2) {
            e.preventDefault();
            alert('Please enter a valid last name');
            return;
        }
        
        if(phone.replace(/\D/g, '').length < 10) {
            e.preventDefault();
            alert('Please enter a valid phone number with at least 10 digits');
            return;
        }
        
        if(!email.includes('@') || !email.includes('.')) {
            e.preventDefault();
            alert('Please enter a valid email address');
            return;
        }
    });

    // Smooth scroll for map
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href'))?.scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>

<?php
// Handle form submission
if(isset($_POST['submit'])) {
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    
    // Here you would typically save to database or send email
    // For now, we'll just set a success message
    
    $_SESSION['contact_success'] = "Thank you for contacting us! We'll get back to you within 24 hours.";
    
    // Redirect to prevent form resubmission
    header('Location: '.SITEURL.'contact.php');
    exit();
}
?>

<?php include('partials-front/footer.php'); ?>