<footer class="modern-footer">
  <div class="footer-container">
    <!-- Newsletter Section -->
    <div class="newsletter-section">
      <h4 class="newsletter-title">BE THE FIRST TO KNOW ABOUT NEW MOTORCYCLES AND SALES</h4>
      <form class="newsletter-form">
        <div class="input-group">
          <input type="email" placeholder="Email address" required>
          <button type="submit" class="newsletter-btn">SUBSCRIBE</button>
        </div>
      </form>
    </div>

    <!-- Main Footer Content -->
    <div class="footer-grid">
      <!-- Quick Links -->
      <div class="footer-column">
        <h5 class="footer-heading">Quick Links</h5>
        <ul class="footer-links">
          <li><a href="#"><i class="fas fa-search"></i> Search</a></li>
          <li><a href="#"><i class="fas fa-info-circle"></i> About Us</a></li>
          <li><a href="#"><i class="fas fa-motorcycle"></i> Motorcycle Models</a></li>
          <li><a href="#"><i class="fas fa-calendar-alt"></i> Events</a></li>
        </ul>
      </div>

      <!-- Support -->
      <div class="footer-column">
        <h5 class="footer-heading">Support</h5>
        <ul class="footer-links">
          <li><a href="#"><i class="fas fa-envelope"></i> Contact Us</a></li>
          <li><a href="#"><i class="fas fa-question-circle"></i> FAQ</a></li>
          <li><a href="#"><i class="fas fa-headset"></i> Customer Support</a></li>
          <li><a href="#"><i class="fas fa-shipping-fast"></i> Shipping Info</a></li>
        </ul>
      </div>

      <!-- Company -->
      <div class="footer-column">
        <h5 class="footer-heading">Company</h5>
        <ul class="footer-links">
          <li><a href="#"><i class="fas fa-briefcase"></i> Jobs</a></li>
          <li><a href="#"><i class="fas fa-gavel"></i> Legal</a></li>
          <li><a href="#"><i class="fas fa-newspaper"></i> Press</a></li>
          <li><a href="#"><i class="fas fa-leaf"></i> Sustainability</a></li>
        </ul>
      </div>

      <!-- Social -->
      <div class="footer-column">
        <h5 class="footer-heading">Connect</h5>
        <div class="social-links">
          <a href="#" class="social-icon facebook">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#" class="social-icon instagram">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="#" class="social-icon twitter">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" class="social-icon pinterest">
            <i class="fab fa-pinterest"></i>
          </a>
        </div>
      </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
      <p class="copyright">© 2025 MotorcycleWebsite. All rights reserved</p>
      <div class="legal-links">
        <a href="#"><i class="fas fa-user-secret"></i> Privacy Policy</a>
        <a href="#"><i class="fas fa-file-contract"></i> Terms of Service</a>
        <a href="#"><i class="fas fa-cookie-bite"></i> Cookie Settings</a>
      </div>
    </div>
  </div>
</footer>

<style>
/* Modern Footer Styles */
.modern-footer {
  margin-top: 40px;
  background: #2d3e50;
  color: #fff;
  padding: 40px 0 20px;
  font-family: 'Arial', sans-serif;
}

.newsletter-section {
  text-align: center;
  padding: 30px 0;
  border-bottom: 1px solid #3a4d63;
  margin-bottom: 40px;
}

.newsletter-title {
  color: #f39c12;
  font-size: 1.1rem;
  text-transform: uppercase;
  letter-spacing: 1px;
  margin-bottom: 20px;
}

.input-group {
  max-width: 500px;
  margin: 0 auto;
  display: flex;
  gap: 10px;
}

.input-group input {
  flex: 1;
  padding: 12px 20px;
  border: 1px solid #3a4d63;
  border-radius: 4px;
  background: rgba(255,255,255,0.1);
  color: #fff;
}

.newsletter-btn {
  background: #f39c12;
  color: white;
  border: none;
  padding: 12px 30px;
  border-radius: 4px;
  cursor: pointer;
  transition: all 0.3s ease;
  text-transform: uppercase;
  font-weight: 600;
  letter-spacing: 0.5px;
}

.newsletter-btn:hover {
  background: #e67e22;
  transform: translateY(-1px);
}

.footer-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 30px;
  max-width: 1200px;
  margin: 0 auto 40px;
}

.footer-heading {
  color: #f39c12;
  font-size: 0.95rem;
  margin-bottom: 15px;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

.footer-links {
  list-style: none;
  padding: 0;
}

.footer-links li {
  margin-bottom: 8px;
}

.footer-links a {
  color: #ffffffcc;
  text-decoration: none;
  font-size: 0.9rem;
  transition: all 0.3s ease;
}

.footer-links a:hover {
  color: #f39c12;
  padding-left: 5px;
}

.social-links {
  display: flex;
  gap: 15px;
}

.social-icon {
  width: 36px;
  height: 36px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  transition: all 0.3s ease;
}

.social-icon.facebook { background: #1877f2; }
.social-icon.instagram { background: #e4405f; }
.social-icon.twitter { background: #1da1f2; }
.social-icon.pinterest { background: #bd081c; }

.social-icon:hover {
  transform: translateY(-3px);
  box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}

.footer-bottom {
  text-align: center;
  padding-top: 20px;
  border-top: 1px solid #3a4d63;
}

.copyright {
  color: #ffffff99;
  font-size: 0.85rem;
  margin-bottom: 10px;
}

.legal-links {
  display: flex;
  gap: 20px;
  justify-content: center;
}

.legal-links a {
  color: #ffffffcc;
  text-decoration: none;
  font-size: 0.85rem;
  transition: color 0.3s ease;
}

.legal-links a:hover {
  color: #f39c12;
}

@media (max-width: 768px) {
  .footer-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 30px 20px;
  }
  
  .input-group {
    flex-direction: column;
  }
  
  .newsletter-btn {
    width: 100%;
  }
  
  .legal-links {
    flex-direction: column;
    gap: 8px;
  }
}

@media (max-width: 480px) {
  .footer-grid {
    grid-template-columns: 1fr;
  }

  .input-group input {
    padding: 10px 15px;
  }

  .newsletter-btn {
    padding: 10px 20px;
  }
}
</style>