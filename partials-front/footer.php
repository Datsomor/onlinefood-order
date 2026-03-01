<style>
    /* Footer Styles */
    .footer {
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        color: white;
        padding: 60px 0 20px;
        position: relative;
        overflow: hidden;
        margin-left: 300px;
        transition: 0.3s;
    }

    .footer.expanded {
        margin-left: 80px;
    }

    .footer::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #ff6b6b, #ffd93d, #6bcf7f, #667eea);
    }

    .footer::after {
        content: '';
        position: absolute;
        top: -50px;
        right: -50px;
        width: 200px;
        height: 200px;
        background: rgba(255, 255, 255, 0.03);
        border-radius: 50%;
    }

    .footer-content {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 40px;
        margin-bottom: 40px;
        position: relative;
        z-index: 1;
    }

    /* Footer Logo Section */
    .footer-logo {
        text-align: left;
    }

    .footer-logo img {
        width: 60px;
        height: 60px;
        border-radius: 12px;
        margin-bottom: 20px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
    }

    .footer-logo h3 {
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 15px;
        background: linear-gradient(135deg, #ffd93d, #ff9f43);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .footer-logo p {
        color: rgba(255, 255, 255, 0.8);
        font-size: 14px;
        line-height: 1.7;
        margin-bottom: 20px;
    }

    .restaurant-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(255, 255, 255, 0.1);
        padding: 8px 15px;
        border-radius: 30px;
        font-size: 13px;
        backdrop-filter: blur(10px);
    }

    .restaurant-badge i {
        color: #ffd93d;
    }

    /* Footer Links */
    .footer-links h4 {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 25px;
        position: relative;
        padding-bottom: 10px;
    }

    .footer-links h4::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 40px;
        height: 3px;
        background: linear-gradient(90deg, #ff6b6b, #ffd93d);
        border-radius: 2px;
    }

    .footer-links ul {
        list-style: none;
        padding: 0;
    }

    .footer-links li {
        margin-bottom: 12px;
    }

    .footer-links a {
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
        font-size: 14px;
        transition: 0.3s;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .footer-links a:hover {
        color: #ffd93d;
        transform: translateX(5px);
    }

    .footer-links a i {
        font-size: 12px;
        color: #ffd93d;
        opacity: 0;
        transition: 0.3s;
    }

    .footer-links a:hover i {
        opacity: 1;
    }

    /* Footer Contact */
    .footer-contact h4 {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 25px;
        position: relative;
        padding-bottom: 10px;
    }

    .footer-contact h4::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 40px;
        height: 3px;
        background: linear-gradient(90deg, #6bcf7f, #667eea);
        border-radius: 2px;
    }

    .contact-info {
        margin-bottom: 20px;
    }

    .contact-item {
        display: flex;
        align-items: flex-start;
        gap: 15px;
        margin-bottom: 15px;
    }

    .contact-item i {
        width: 35px;
        height: 35px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        color: #ffd93d;
    }

    .contact-item span {
        color: rgba(255, 255, 255, 0.8);
        font-size: 14px;
        line-height: 1.6;
    }

    /* Opening Hours */
    .opening-hours {
        background: rgba(255, 255, 255, 0.05);
        border-radius: 12px;
        padding: 15px;
        backdrop-filter: blur(10px);
    }

    .opening-hours h5 {
        font-size: 15px;
        margin-bottom: 10px;
        color: #ffd93d;
    }

    .hours-row {
        display: flex;
        justify-content: space-between;
        color: rgba(255, 255, 255, 0.8);
        font-size: 13px;
        margin-bottom: 8px;
    }

    .hours-row .days {
        font-weight: 500;
    }

    .hours-row .time {
        color: #ffd93d;
    }

    .closed-badge {
        background: #ff6b6b;
        color: white;
        padding: 2px 8px;
        border-radius: 12px;
        font-size: 11px;
        font-weight: 600;
    }

    /* Social Media Section */
    .social-section {
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        padding: 30px 0;
        margin: 30px 0;
    }

    .social-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 20px;
    }

    .social-text h4 {
        font-size: 18px;
        margin-bottom: 5px;
    }

    .social-text p {
        color: rgba(255, 255, 255, 0.7);
        font-size: 13px;
    }

    .social-icons {
        display: flex;
        gap: 15px;
    }

    .social-icon {
        width: 45px;
        height: 45px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: 0.3s;
        position: relative;
        overflow: hidden;
    }

    .social-icon::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, #ff6b6b, #ffd93d);
        opacity: 0;
        transition: 0.3s;
    }

    .social-icon:hover::before {
        opacity: 1;
    }

    .social-icon i,
    .social-icon img {
        position: relative;
        z-index: 1;
        width: 24px;
        height: 24px;
        transition: 0.3s;
    }

    .social-icon:hover {
        transform: translateY(-5px);
    }

    .social-icon:hover i,
    .social-icon:hover img {
        filter: brightness(0) invert(1);
    }

    /* Newsletter Section */
    .newsletter {
        background: rgba(255, 255, 255, 0.05);
        border-radius: 15px;
        padding: 30px;
        margin-bottom: 30px;
        backdrop-filter: blur(10px);
    }

    .newsletter-content {
        display: flex;
        align-items: center;
        gap: 30px;
        flex-wrap: wrap;
    }

    .newsletter-text {
        flex: 1;
    }

    .newsletter-text h4 {
        font-size: 20px;
        margin-bottom: 8px;
    }

    .newsletter-text p {
        color: rgba(255, 255, 255, 0.7);
        font-size: 14px;
    }

    .newsletter-form {
        flex: 1;
        display: flex;
        gap: 10px;
        min-width: 300px;
    }

    .newsletter-form input {
        flex: 1;
        padding: 15px;
        border: none;
        border-radius: 12px;
        background: rgba(255, 255, 255, 0.1);
        color: white;
        font-size: 14px;
        outline: none;
        transition: 0.3s;
    }

    .newsletter-form input::placeholder {
        color: rgba(255, 255, 255, 0.5);
    }

    .newsletter-form input:focus {
        background: rgba(255, 255, 255, 0.15);
        box-shadow: 0 0 0 3px rgba(255, 217, 61, 0.3);
    }

    .newsletter-form button {
        padding: 15px 25px;
        border: none;
        border-radius: 12px;
        background: linear-gradient(135deg, #ff6b6b, #ff8e8e);
        color: white;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .newsletter-form button:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 20px rgba(255, 107, 107, 0.3);
    }

    /* App Download Section */
    .app-download {
        display: flex;
        gap: 15px;
        margin: 20px 0;
        flex-wrap: wrap;
    }

    .app-btn {
        display: flex;
        align-items: center;
        gap: 10px;
        background: rgba(0, 0, 0, 0.3);
        padding: 10px 20px;
        border-radius: 12px;
        text-decoration: none;
        color: white;
        transition: 0.3s;
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .app-btn:hover {
        background: rgba(0, 0, 0, 0.5);
        transform: translateY(-2px);
        border-color: #ffd93d;
    }

    .app-btn i {
        font-size: 24px;
        color: #ffd93d;
    }

    .app-btn span {
        display: flex;
        flex-direction: column;
    }

    .app-btn small {
        font-size: 10px;
        opacity: 0.7;
    }

    .app-btn strong {
        font-size: 14px;
    }

    /* Footer Bottom */
    .footer-bottom {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 20px;
        padding-top: 20px;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        color: rgba(255, 255, 255, 0.7);
        font-size: 13px;
    }

    .footer-bottom p {
        margin: 0;
    }

    .footer-bottom a {
        color: rgba(255, 255, 255, 0.7);
        text-decoration: none;
        transition: 0.3s;
    }

    .footer-bottom a:hover {
        color: #ffd93d;
    }

    .footer-bottom-links {
        display: flex;
        gap: 20px;
    }

    .payment-methods {
        display: flex;
        gap: 10px;
        align-items: center;
    }

    .payment-methods i {
        font-size: 24px;
        color: rgba(255, 255, 255, 0.5);
        transition: 0.3s;
    }

    .payment-methods i:hover {
        color: #ffd93d;
    }

    /* Back to Top Button */
    .back-to-top {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-decoration: none;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        z-index: 99;
        opacity: 0;
        visibility: hidden;
    }

    .back-to-top.visible {
        opacity: 1;
        visibility: visible;
    }

    .back-to-top:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
    }

    /* Responsive Design */
    @media (max-width: 992px) {
        .footer {
            margin-left: 0;
        }
    }

    @media (max-width: 768px) {
        .footer-content {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .footer-logo {
            text-align: center;
        }

        .footer-links h4::after,
        .footer-contact h4::after {
            left: 50%;
            transform: translateX(-50%);
        }

        .footer-links a {
            justify-content: center;
        }

        .footer-links a:hover {
            transform: translateX(0) translateY(-2px);
        }

        .contact-item {
            justify-content: center;
        }

        .social-content {
            flex-direction: column;
            text-align: center;
        }

        .newsletter-content {
            flex-direction: column;
            text-align: center;
        }

        .newsletter-form {
            width: 100%;
        }

        .footer-bottom {
            flex-direction: column;
            text-align: center;
        }

        .app-download {
            justify-content: center;
        }
    }

    /* Footer Wave Animation */
    .footer-wave {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100px;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgba(255,255,255,0.03)" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,154.7C960,171,1056,181,1152,170.7C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>');
        background-size: cover;
        background-repeat: no-repeat;
        opacity: 0.5;
        pointer-events: none;
    }
</style>

<!-- Footer Section -->
<footer class="footer" id="footer">
    <div class="footer-wave"></div>
    
    <div class="container">
        <!-- Main Footer Content -->
        <div class="footer-content">
            <!-- Company Info -->
            <div class="footer-logo">
                <img src="images/ordersta.png" alt="ODTECH Innovation" onerror="this.src='https://via.placeholder.com/60x60?text=ODTECH'">
                <h3>ODTECH Innovation</h3>
                <p>Delivering delicious moments since 2024. We bring the best culinary experiences right to your doorstep with love and care.</p>
                <div class="restaurant-badge">
                    <i class="fas fa-star"></i>
                    <span>4.8 ★ (500+ reviews)</span>
                </div>
                
                <!-- App Download -->
                <div class="app-download">
                    <a href="#" class="app-btn">
                        <i class="fab fa-apple"></i>
                        <span>
                            <small>Download on</small>
                            <strong>App Store</strong>
                        </span>
                    </a>
                    <a href="#" class="app-btn">
                        <i class="fab fa-google-play"></i>
                        <span>
                            <small>Get it on</small>
                            <strong>Google Play</strong>
                        </span>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="footer-links">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="<?php echo SITEURL; ?>"><i class="fas fa-chevron-right"></i> Home</a></li>
                    <li><a href="<?php echo SITEURL; ?>categories.php"><i class="fas fa-chevron-right"></i> Categories</a></li>
                    <li><a href="<?php echo SITEURL; ?>foods.php"><i class="fas fa-chevron-right"></i> Food Menu</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> About Us</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Contact</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> FAQ</a></li>
                </ul>
            </div>

            <!-- Support Links -->
            <div class="footer-links">
                <h4>Support</h4>
                <ul>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Delivery Information</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Privacy Policy</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Terms & Conditions</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Refund Policy</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Careers</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Track Order</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="footer-contact">
                <h4>Contact Us</h4>
                
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>123 Innovation Street, Tech City, TC 12345</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <span>+1 234 567 8900</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>info@odtechinnovation.com</span>
                    </div>
                </div>

                <!-- Opening Hours -->
                <div class="opening-hours">
                    <h5><i class="far fa-clock"></i> Opening Hours</h5>
                    <div class="hours-row">
                        <span class="days">Monday - Friday</span>
                        <span class="time">11:00 AM - 10:00 PM</span>
                    </div>
                    <div class="hours-row">
                        <span class="days">Saturday - Sunday</span>
                        <span class="time">12:00 PM - 11:00 PM</span>
                    </div>
                    <div class="hours-row">
                        <span class="days">Holidays</span>
                        <span class="closed-badge">Closed</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Newsletter Section -->
        <div class="newsletter">
            <div class="newsletter-content">
                <div class="newsletter-text">
                    <h4><i class="far fa-envelope"></i> Subscribe to Our Newsletter</h4>
                    <p>Get exclusive offers, updates, and delicious deals directly in your inbox!</p>
                </div>
                <form class="newsletter-form" action="#" method="POST">
                    <input type="email" placeholder="Enter your email address" required>
                    <button type="submit">
                        <i class="fas fa-paper-plane"></i>
                        Subscribe
                    </button>
                </form>
            </div>
        </div>

        <!-- Social Media Section -->
        <div class="social-section">
            <div class="social-content">
                <div class="social-text">
                    <h4>Connect With Us</h4>
                    <p>Follow us on social media for daily updates and mouth-watering content!</p>
                </div>
                <div class="social-icons">
                    <a href="#" class="social-icon">
                        <img src="https://img.icons8.com/fluent/24/000000/facebook-new.png" alt="Facebook">
                    </a>
                    <a href="#" class="social-icon">
                        <img src="https://img.icons8.com/fluent/24/000000/instagram-new.png" alt="Instagram">
                    </a>
                    <a href="#" class="social-icon">
                        <img src="https://img.icons8.com/fluent/24/000000/twitter.png" alt="Twitter">
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-tiktok"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> ODTECH Innovation Consult. All rights reserved. | Designed with <i class="fas fa-heart" style="color: #ff6b6b;"></i> for food lovers</p>
            
            <div class="footer-bottom-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Cookie Policy</a>
            </div>

            <div class="payment-methods">
                <i class="fab fa-cc-visa"></i>
                <i class="fab fa-cc-mastercard"></i>
                <i class="fab fa-cc-amex"></i>
                <i class="fab fa-cc-paypal"></i>
                <i class="fab fa-cc-discover"></i>
            </div>
        </div>
    </div>
</footer>

<!-- Back to Top Button -->
<a href="#" class="back-to-top" id="backToTop">
    <i class="fas fa-arrow-up"></i>
</a>

<script>
    // Back to Top Button functionality
    window.addEventListener('scroll', function() {
        const backToTop = document.getElementById('backToTop');
        if (window.scrollY > 300) {
            backToTop.classList.add('visible');
        } else {
            backToTop.classList.remove('visible');
        }
    });

    document.getElementById('backToTop').addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Update footer margin based on sidebar state
    function updateFooterMargin() {
        const footer = document.getElementById('footer');
        const sidebar = document.getElementById('sidebar');
        
        if (sidebar && footer) {
            if (sidebar.classList.contains('collapsed')) {
                footer.classList.add('expanded');
            } else {
                footer.classList.remove('expanded');
            }
        }
    }

    // Listen for sidebar toggle
    document.addEventListener('click', function(e) {
        if (e.target.closest('.toggle-btn') || e.target.closest('.mobile-menu-btn')) {
            setTimeout(updateFooterMargin, 300);
        }
    });

    // Newsletter form submission
    document.querySelector('.newsletter-form')?.addEventListener('submit', function(e) {
        e.preventDefault();
        const email = this.querySelector('input[type="email"]').value;
        
        // Show success message
        const button = this.querySelector('button');
        const originalText = button.innerHTML;
        button.innerHTML = '<i class="fas fa-check"></i> Subscribed!';
        
        setTimeout(() => {
            button.innerHTML = originalText;
            this.querySelector('input[type="email"]').value = '';
        }, 3000);
        
        // Here you would typically send the email to your server
        console.log('Newsletter subscription:', email);
    });

    // Add smooth scroll to footer links
    document.querySelectorAll('.footer-links a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
</script>

</body>
</html>