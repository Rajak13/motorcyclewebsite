<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2Pangre - Motorcycle Dealership</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <style>
        :root {
            --primary: #f39c12;
            --secondary: #2d3e50;
            --dark: #0f172a;
            --light: #f8f9fa;
            --text: #444;
            --border: #e2e8f0;
            --shadow: 0 2px 15px rgba(0,0,0,0.1);
            --radius: 8px;
            --transition: all 0.3s cubic-bezier(0.4,0,0.2,1);
            --header-height: 106px;
        }

        .top-alert-bar {
            background: #2d3e50;
            color: white;
            padding: 8px 0;
            font-size: 0.9em;
        }

        .top-alert-bar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        .top-alert-bar i {
            margin-right: 5px;
        }

        .top-links a {
            color: white;
            text-decoration: none;
            margin-left: 25px;
            transition: color 0.3s;
        }

        .top-links a:hover {
            color: #f39c12;
        }

        .main-header {
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .main-header > .container {
            padding: 15px 20px;
            display: flex;
            align-items: center;
            position: relative;
        }

        .logo img {
            height: 40px;
            margin-right: 30px;
        }

        .vehicle-type-dropdown {
            position: relative;
            margin-right: 30px;
        }

        .dropdown-btn {
            background: #f8f9fa;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            display: flex;
            align-items: center;
            transition: background 0.3s;
        }

        .dropdown-btn:hover {
            background: #e9ecef;
        }

        .dropdown-btn i {
            margin-left: 8px;
            font-size: 0.8em;
        }

        .dropdown-content {
            position: absolute;
            top: 100%;
            left: 0;
            background: white;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
            border-radius: 5px;
            padding: 20px;
            width: 600px;
            display: none;
            z-index: 1000;
        }

        .vehicle-type-dropdown:hover .dropdown-content {
            display: flex;
        }

        .dropdown-column {
            flex: 1;
            padding: 0 15px;
        }

        .dropdown-column h4 {
            color: #2d3e50;
            margin-bottom: 12px;
            font-size: 0.9em;
        }

        .dropdown-column a {
            display: block;
            color: #666;
            text-decoration: none;
            padding: 8px 0;
            font-size: 0.9em;
            transition: color 0.3s;
        }

        .dropdown-column a:hover {
            color: #f39c12;
        }

        .search-bar {
            flex: 1;
            margin: 0 30px;
            position: relative;
        }

        .search-bar input {
            width: 100%;
            padding: 12px 20px;
            border: 1px solid #ddd;
            border-radius: 25px;
            font-size: 0.9em;
        }

        .search-btn {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            color: #666;
        }

        .user-actions {
            display: flex;
            gap: 20px;
            margin-left: auto;
        }

        .action-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-decoration: none;
            color: #333;
            transition: color 0.3s;
            min-width: 60px;
        }

        .action-item i {
            font-size: 1.2em;
            margin-bottom: 3px;
        }

        .action-item span {
            font-size: 0.8em;
        }

        .action-item.highlight {
            color: #f39c12;
        }

        .main-nav {
            border-top: 1px solid #eee;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 25px;
            padding: 15px 0;
        }

        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            padding: 15px 0;
            display: block;
            position: relative;
            font-size: 0.9em;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: #f39c12;
            transition: width 0.3s;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .mobile-menu {
            position: fixed;
            top: var(--header-height);
            left: -100%;
            width: 100%;
            height: calc(100vh - var(--header-height));
            background: white;
            z-index: 999;
            transition: left 0.3s ease;
            overflow-y: auto;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 20px;
        }

        .mobile-menu.active {
            left: 0;
        }

        .mobile-nav-links {
            list-style: none;
            padding: 0;
        }

        .mobile-nav-links li {
            margin-bottom: 15px;
        }

        .mobile-nav-links a {
            text-decoration: none;
            color: #333;
            font-size: 1.1rem;
            display: block;
            padding: 10px;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .mobile-nav-links a:hover {
            background: #f8f9fa;
        }

        .hamburger-btn {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: #333;
            margin-right: 15px;
            cursor: pointer;
        }

        .auth-modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0 0 0 / 0.5);
            backdrop-filter: blur(5px);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 10000;
        }

        .auth-modal.active {
            display: flex;
        }

        .modal-container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 12px 40px rgba(0,0,0,0.2);
            width: 90%;
            max-width: 500px;
            overflow: hidden;
        }

        .modal-header {
            padding: 2rem;
            background: #0f172a;
            text-align: center;
            position: relative;
        }

        .modal-header h2 {
            color: white;
            margin: 0;
            font-size: 1.8rem;
        }

        .modal-tabs {
            display: flex;
            border-bottom: 2px solid #e2e8f0;
        }

        .tab-btn {
            flex: 1;
            padding: 1.2rem;
            border: none;
            background: none;
            font-weight: 600;
            color: #94a3b8;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
        }

        .tab-btn.active {
            color: #0f172a;
            background: #f8fafc;
        }

        .tab-btn.active::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100%;
            height: 2px;
            background: #f39c12;
        }

        .modal-body {
            padding: 2rem;
        }

        .auth-form {
            display: none;
        }

        .auth-form.active {
            display: block;
            animation: fadeIn 0.4s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }

        .form-input {
            width: 100%;
            padding: 1rem;
            border: 2px solid #e2e8f0;
            border-radius: 10px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
            padding-left: 3rem;
        }

        .form-input:focus {
            border-color: #f39c12;
            outline: none;
        }

        .input-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #94a3b8;
        }

        .btn-primary {
            background: #f39c12;
            color: white;
            width: 100%;
            padding: 1rem;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .btn-primary:hover {
            background: #e67e22;
        }

        .social-auth {
            margin: 2rem 0;
            text-align: center;
            position: relative;
        }

        .social-auth span {
            background: white;
            padding: 0 1rem;
            position: relative;
            z-index: 1;
            color: #64748b;
        }

        .social-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            margin-top: 1.5rem;
        }

        .social-btn {
            width: 45px;
            height: 45px;
            border: 2px solid #e2e8f0;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .social-btn:hover {
            background: #f8fafc;
            transform: translateY(-2px);
        }

        .modal-close {
            position: absolute;
            top: 1.5rem;
            right: 1.5rem;
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
            padding: 0.5rem;
        }

        @media (max-width: 992px) {
            .vehicle-type-dropdown,
            .search-bar,
            .main-nav {
                display: none;
            }
            
            .hamburger-btn {
                display: block;
            }
            
            .logo img {
                margin-right: 0;
            }
            
            .user-actions {
                gap: 15px;
            }
        }

        @media (max-width: 768px) {
            .top-links {
                display: none;
            }
        }

        @media (max-width: 480px) {
            .user-actions .action-item span {
                display: none;
            }
            
            .action-item i {
                font-size: 1.5rem;
                margin-bottom: 0;
            }
        }
    </style>
</head>
<body>
    <div class="top-alert-bar">
        <div class="container">
            <span><i class="fas fa-phone"></i> Customer Care: +977 981234567</span>
            <div class="top-links">
                <a href="#"><i class="fas fa-map-marker-alt"></i> Locations</a>
                <a href="#"><i class="fas fa-book"></i> Order Tracking</a>
                <a href="#"><i class="fas fa-rupee-sign"></i> Sell Vehicle</a>
            </div>
        </div>
    </div>

    <header class="main-header">
        <div class="container">
            <button class="hamburger-btn">
                <i class="fas fa-bars"></i>
            </button>

            <a href="/" class="logo">
                <img src="images/company_logo.jpg" alt="2Pangre">
            </a>

            <div class="vehicle-type-dropdown">
                <button class="dropdown-btn">
                    All Vehicles <i class="fas fa-chevron-down"></i>
                </button>
                <div class="dropdown-content">
                    <div class="dropdown-column">
                        <h4>By Type</h4>
                        <a href="#">Cars</a>
                        <a href="#">Bikes</a>
                        <a href="#">Scooters</a>
                    </div>
                    <div class="dropdown-column">
                        <h4>By Budget</h4>
                        <a href="#">Under ₹5L</a>
                        <a href="#">₹5L - ₹10L</a>
                        <a href="#">₹10L+</a>
                    </div>
                    <div class="dropdown-column">
                        <h4>Popular Brands</h4>
                        <a href="#">Maruti</a>
                        <a href="#">Hyundai</a>
                        <a href="#">Honda</a>
                    </div>
                </div>
            </div>

            <div class="search-bar">
                <input type="text" placeholder="Search by Make, Model or Keyword">
                <button class="search-btn">
                    <i class="fas fa-search"></i>
                </button>
            </div>

            <div class="user-actions">
                <a href="#" class="action-item" onclick="toggleAuthModal(true)">
                    <i class="fas fa-user"></i>
                    <span>Login/Signup</span>
                </a>
                <a href="#" class="action-item highlight">
                    <i class="fas fa-car"></i>
                    <span>My Garage</span>
                </a>
            </div>
        </div>

        <nav class="main-nav">
            <div class="container">
                <ul class="nav-links">
                    <li><a href="#">Used Vehicles</a></li>
                    <li><a href="#">New Cars</a></li>
                    <li><a href="#">Certified Cars</a></li>
                    <li><a href="#">Compare</a></li>
                    <li><a href="#">Reviews</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Sell Car</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="mobile-menu">
        <ul class="mobile-nav-links">
            <li><a href="#"><i class="fas fa-car"></i> Used Vehicles</a></li>
            <li><a href="#"><i class="fas fa-car"></i> New Cars</a></li>
            <li><a href="#"><i class="fas fa-certificate"></i> Certified Cars</a></li>
            <li><a href="#"><i class="fas fa-balance-scale"></i> Compare</a></li>
            <li><a href="#"><i class="fas fa-star"></i> Reviews</a></li>
            <li><a href="#"><i class="fas fa-newspaper"></i> News</a></li>
            <li><a href="#"><i class="fas fa-rupee-sign"></i> Sell Car</a></li>
        </ul>
    </div>

    <div class="auth-modal" id="authModal">
        <div class="modal-container">
            <div class="modal-header">
                <h2>Welcome to 2Pangre</h2>
                <button class="modal-close" onclick="toggleAuthModal(false)">&times;</button>
            </div>
            
            <div class="modal-tabs">
                <button class="tab-btn active" onclick="switchAuthTab('login')">Login</button>
                <button class="tab-btn" onclick="switchAuthTab('signup')">Sign Up</button>
            </div>

            <div class="modal-body">
                <form id="loginForm" class="auth-form active">
                    <div class="form-group">
                        <i class="fas fa-envelope input-icon"></i>
                        <input type="email" class="form-input" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" class="form-input" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn-primary">Continue</button>
                    
                    <div class="social-auth">
                        <span>Or continue with</span>
                        <div class="social-buttons">
                            <div class="social-btn">
                                <i class="fab fa-google"></i>
                            </div>
                            <div class="social-btn">
                                <i class="fab fa-facebook-f"></i>
                            </div>
                        </div>
                    </div>
                </form>

                <form id="signupForm" class="auth-form">
                    <div class="form-group">
                        <i class="fas fa-user input-icon"></i>
                        <input type="text" class="form-input" placeholder="Full Name" required>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-envelope input-icon"></i>
                        <input type="email" class="form-input" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" class="form-input" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn-primary">Create Account</button>
                    
                    <div class="social-auth">
                        <span>Or sign up with</span>
                        <div class="social-buttons">
                            <div class="social-btn">
                                <i class="fab fa-google"></i>
                            </div>
                            <div class="social-btn">
                                <i class="fab fa-facebook-f"></i>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const hamburgerBtn = document.querySelector('.hamburger-btn');
        const mobileMenu = document.querySelector('.mobile-menu');
        const body = document.body;

        hamburgerBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('active');
            body.classList.toggle('no-scroll');
        });

        document.addEventListener('click', (e) => {
            if (mobileMenu.classList.contains('active') && 
                !e.target.closest('.mobile-menu') && 
                !e.target.closest('.hamburger-btn')) {
                mobileMenu.classList.remove('active');
                body.classList.remove('no-scroll');
            }
        });

        const authModal = document.getElementById('authModal');

        function toggleAuthModal(show = true) {
            if(show) {
                authModal.classList.add('active');
                body.classList.add('no-scroll');
            } else {
                authModal.classList.remove('active');
                body.classList.remove('no-scroll');
            }
        }

        function switchAuthTab(tab) {
            document.querySelectorAll('.tab-btn').forEach(t => t.classList.remove('active'));
            document.querySelectorAll('.auth-form').forEach(f => f.classList.remove('active'));
            
            document.querySelector(`[onclick="switchAuthTab('${tab}')"]`).classList.add('active');
            document.getElementById(`${tab}Form`).classList.add('active');
        }

        window.addEventListener('click', (e) => {
            if(e.target === authModal) toggleAuthModal(false);
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && authModal.classList.contains('active')) {
                toggleAuthModal(false);
            }
        });

        document.querySelectorAll('.auth-form').forEach(form => {
            form.addEventListener('submit', (e) => {
                e.preventDefault();
            });
        });
    </script>
</body>
</html>