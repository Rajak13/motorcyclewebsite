<?php
?>
<style>
    .main-footer {
        background: #2d3e50;
        color: #ffffff;
        padding: 60px 0 20px;
        position: relative;
        font-size: 0.95em;
    }

    .footer-wave {
        position: absolute;
        top: -60px;
        left: 0;
        width: 100%;
        height: 60px;
        background: url('data:image/svg+xml;utf8,<svg viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg"><path fill="%23ffffff" d="M0 64L60 58.7C120 53 240 43 360 48C480 53 600 75 720 80C840 85 960 75 1080 64C1200 53 1320 43 1380 37.3L1440 32V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z"></path></svg>');
    }

    .footer-content {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 40px;
        padding: 0 20px;
    }

    .footer-section h4 {
        color: #f39c12;
        margin-bottom: 25px;
        font-size: 1.2em;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .footer-links {
        list-style: none;
        padding: 0;
    }

    .footer-links li {
        margin-bottom: 12px;
    }

    .footer-links a {
        color: rgba(255,255,255,0.8);
        text-decoration: none;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .footer-links a:hover {
        color: #f39c12;
        transform: translateX(5px);
    }

    .footer-newsletter {
        margin-top: 20px;
    }

    .newsletter-form {
        display: flex;
        gap: 10px;
        margin-top: 15px;
    }

    .newsletter-input {
        flex: 1;
        padding: 12px 15px;
        border: none;
        border-radius: 5px;
        background: rgba(255,255,255,0.1);
        color: white;
    }

    .newsletter-input::placeholder {
        color: rgba(255,255,255,0.7);
    }

    .newsletter-btn {
        background: #f39c12;
        color: white;
        border: none;
        padding: 12px 20px;
        border-radius: 5px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .newsletter-btn:hover {
        background: #e67e22;
    }

    .social-links {
        display: flex;
        gap: 15px;
        margin-top: 20px;
    }

    .social-link {
        width: 40px;
        height: 40px;
        background: rgba(255,255,255,0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .social-link:hover {
        background: #f39c12;
        transform: translateY(-3px);
    }

    .footer-bottom {
        margin-top: 60px;
        padding-top: 30px;
        border-top: 1px solid rgba(255,255,255,0.1);
        text-align: center;
    }

    .payment-methods {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin: 20px 0;
    }

    .payment-method {
        width: 50px;
        filter: grayscale(100%);
        transition: filter 0.3s ease;
    }

    .payment-method:hover {
        filter: grayscale(0%);
    }

    .back-to-top {
        position: fixed;
        bottom: 30px;
        right: 30px;
        background: #f39c12;
        width: 45px;
        height: 45px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    }

    .back-to-top.visible {
        opacity: 1;
        visibility: visible;
    }

    @media (max-width: 992px) {
        .footer-content {
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
        }
    }

    @media (max-width: 768px) {
        .footer-content {
            grid-template-columns: 1fr;
        }
        
        .footer-section {
            text-align: center;
        }
        
        .newsletter-form {
            flex-direction: column;
        }
        
        .social-links {
            justify-content: center;
        }
    }
</style>

<footer class="main-footer">
    <div class="footer-wave"></div>
    
    <div class="footer-content">
        <div class="footer-section">
            <h4>Quick Links</h4>
            <ul class="footer-links">
                <li><a href="/about"><i class="fas fa-chevron-right"></i>About Us</a></li>
                <li><a href="/contact"><i class="fas fa-chevron-right"></i>Contact</a></li>
                <li><a href="/blog"><i class="fas fa-chevron-right"></i>Blog & News</a></li>
                <li><a href="/faq"><i class="fas fa-chevron-right"></i>FAQs</a></li>
                <li><a href="/sitemap"><i class="fas fa-chevron-right"></i>Sitemap</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h4>Popular Brands</h4>
            <ul class="footer-links">
                <li><a href="/brands/honda"><i class="fas fa-motorcycle"></i>Honda</a></li>
                <li><a href="/brands/yamaha"><i class="fas fa-motorcycle"></i>Yamaha</a></li>
                <li><a href="/brands/bajaj"><i class="fas fa-motorcycle"></i>Bajaj</a></li>
                <li><a href="/brands/hero"><i class="fas fa-motorcycle"></i>Hero</a></li>
                <li><a href="/brands/ktm"><i class="fas fa-motorcycle"></i>KTM</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h4>Customer Service</h4>
            <ul class="footer-links">
                <li><a href="/warranty"><i class="fas fa-shield-alt"></i>Warranty</a></li>
                <li><a href="/finance"><i class="fas fa-hand-holding-usd"></i>Financing</a></li>
                <li><a href="/insurance"><i class="fas fa-file-contract"></i>Insurance</a></li>
                <li><a href="/test-drive"><i class="fas fa-tachometer-alt"></i>Schedule Test Drive</a></li>
                <li><a href="/service-center"><i class="fas fa-tools"></i>Service Centers</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h4>Connect With Us</h4>
            <div class="footer-newsletter">
                <p>Subscribe for updates and offers</p>
                <form class="newsletter-form">
                    <input type="email" class="newsletter-input" placeholder="Enter your email" required>
                    <button type="submit" class="newsletter-btn">Subscribe</button>
                </form>
            </div>
            <div class="social-links">
                <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="payment-methods">
            <img src="visa.png" class="payment-method" alt="Visa">
            <img src="mastercard.png" class="payment-method" alt="Mastercard">
            <img src="paypal.png" class="payment-method" alt="PayPal">
            <img src="esewa.png" class="payment-method" alt="eSewa">
            <img src="khalti.png" class="payment-method" alt="Khalti">
        </div>
        
        <p>&copy; <?php echo date('Y'); ?> 2Pangre. All rights reserved.</p>
        <p>
            <a href="/privacy" style="color: rgba(255,255,255,0.8);">Privacy Policy</a> | 
            <a href="/terms" style="color: rgba(255,255,255,0.8);">Terms of Service</a> | 
            <a href="/legal" style="color: rgba(255,255,255,0.8);">Legal</a>
        </p>
    </div>

    <div class="back-to-top" id="backToTop">
        <i class="fas fa-chevron-up"></i>
    </div>
</footer>

<script>
    // Back to Top Button
    const backToTop = document.getElementById('backToTop');
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            backToTop.classList.add('visible');
        } else {
            backToTop.classList.remove('visible');
        }
    });

    backToTop.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Newsletter Form Submission
    document.querySelector('.newsletter-form').addEventListener('submit', function(e) {
        e.preventDefault();
        const email = this.querySelector('input').value;
        // Add your newsletter subscription logic here
        console.log('Subscribed with:', email);
        this.reset();
        alert('Thank you for subscribing!');
    });

    // Smooth Scroll for Footer Links
    document.querySelectorAll('.footer-links a').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const href = this.getAttribute('href');
            if(href.startsWith('#')) {
                document.querySelector(href).scrollIntoView({
                    behavior: 'smooth'
                });
            } else {
                window.location.href = href;
            }
        });
    });

    // Payment Method Hover Effect
    document.querySelectorAll('.payment-method').forEach(method => {
        method.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.1)';
        });
        
        method.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    });

    // Social Media Link Animation
    document.querySelectorAll('.social-link').forEach(link => {
        link.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-3px) rotate(5deg)';
        });
        
        link.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) rotate(0)';
        });
    });
</script>
