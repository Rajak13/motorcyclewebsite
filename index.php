<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2Pangre - Motorcycle Dealership</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Add Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        /* Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            padding: 0 20px;
        }

        /* Top Alert Bar */
        .top-alert-bar {
            background: #2d3e50;
            color: white;
            padding: 8px 0;
            font-size: 0.9em;
        }

        .top-alert-bar .container {
            justify-content: space-between;
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

        /* Main Header */
        .main-header {
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .main-header > .container {
            padding: 15px 20px;
            position: relative;
        }

        .logo img {
            height: 40px;
            margin-right: 30px;
        }

        /* Hamburger Menu */
        .hamburger-btn {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: #333;
            margin-right: 15px;
            cursor: pointer;
        }

        /* Vehicle Type Dropdown */
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
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background: white;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
            border-radius: 5px;
            padding: 20px;
            width: 600px;
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

        /* Search Bar */
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
            padding-right: 45px;
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

        /* User Actions */
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

        /* Main Navigation */
        .main-nav {
            border-top: 1px solid #eee;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 25px;
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

        /* Mobile Menu */
        .mobile-menu {
            position: fixed;
            top: 126px;
            left: -100%;
            width: 100%;
            height: calc(100vh - 126px);
            background: white;
            z-index: 999;
            transition: left 0.3s ease;
            overflow-y: auto;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .mobile-menu.active {
            left: 0;
        }

        .mobile-nav-links {
            list-style: none;
            padding: 20px;
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

        .no-scroll {
            overflow: hidden;
        }

        /* Auth Modal Styles */
        .auth-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            justify-content: center;
            align-items: center;
            z-index: 2000;
        }

        .modal-content {
            background: white;
            padding: 30px;
            border-radius: 10px;
            width: 100%;
            max-width: 400px;
            position: relative;
            animation: modalSlideIn 0.3s ease-out;
        }

        @keyframes modalSlideIn {
            from { transform: translateY(-50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .close-btn {
            position: absolute;
            right: 20px;
            top: 15px;
            font-size: 24px;
            cursor: pointer;
            color: #666;
        }

        .form-tabs {
            display: flex;
            margin-bottom: 25px;
            border-bottom: 2px solid #eee;
        }

        .form-switch-btn {
            flex: 1;
            padding: 15px;
            border: none;
            background: none;
            font-weight: 600;
            color: #666;
            cursor: pointer;
            transition: all 0.3s;
        }

        .form-switch-btn.active {
            color: #f39c12;
            border-bottom: 2px solid #f39c12;
            margin-bottom: -2px;
        }

        .auth-form {
            display: none;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 0.9em;
            color: #333;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 0.9em;
        }

        .auth-btn {
            width: 100%;
            padding: 15px;
            background: #f39c12;
            color: white;
            border: none;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
        }

        .auth-btn:hover {
            background: #e67e22;
        }

        .auth-links {
            margin-top: 15px;
            text-align: center;
        }

        .auth-links a {
            color: #666;
            text-decoration: none;
            font-size: 0.9em;
        }

        .auth-links a:hover {
            color: #f39c12;
        }

        

        /* Swiper Hero Section */
        .hero-swiper {
            width: 100%;
            height: 70vh;
        }

        .swiper-slide {
            position: relative;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .swiper-slide::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
            padding: 20px;
        }

        .swiper-button-prev,
        .swiper-button-next {
            color: #f39c12 !important;
            padding: 0 30px;
        }

        .swiper-pagination-bullet {
            background: #fff !important;
            opacity: 0.5 !important;
        }

        .swiper-pagination-bullet-active {
            background: #f39c12 !important;
            opacity: 1 !important;
        }

        /* Hero Section */
        .hero-section {
            height: 70vh;
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                        url('https://images.unsplash.com/photo-1503376780353-7e6692767b70') center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            padding: 20px;
        }

        .hero-content {
            max-width: 800px;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .hero-content p {
            font-size: 1.5rem;
            margin-bottom: 30px;
        }

        .shop-now-btn {
            padding: 15px 40px;
            font-size: 1.2rem;
            background: #f39c12;
            color: white;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .shop-now-btn:hover {
            background: #e67e22;
        }

        /* Enhanced Search Modal */
        .search-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.7);
            z-index: 3000;
        }

        .search-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 30px;
            border-radius: 10px;
            width: 90%;
            max-width: 800px;
            max-height: 90vh;
            overflow-y: auto;
        }

        .search-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .search-title {
            font-size: 1.5rem;
            color: #2d3e50;
        }

        .close-search {
            font-size: 1.5rem;
            cursor: pointer;
            color: #666;
        }

        .filter-section {
            margin-bottom: 25px;
        }

        .filter-group {
            margin-bottom: 20px;
        }

        .filter-title {
            font-weight: 600;
            margin-bottom: 15px;
            color: #2d3e50;
        }

        .price-range {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .range-input {
            flex: 1;
            -webkit-appearance: none;
            height: 5px;
            background: #ddd;
            border-radius: 5px;
        }

        .range-input::-webkit-slider-thumb {
            -webkit-appearance: none;
            width: 20px;
            height: 20px;
            background: #f39c12;
            border-radius: 50%;
            cursor: pointer;
        }

        .price-labels {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .location-select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .advanced-filters {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .search-footer {
            margin-top: 30px;
            display: flex;
            justify-content: flex-end;
            gap: 15px;
        }

        .reset-btn {
            padding: 12px 25px;
            background: #ddd;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .search-btn-main {
            padding: 12px 35px;
            background: #f39c12;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* How It Works Section */
        .process-section {
            padding: 80px 20px;
            background: #f8f9fa;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
            color: #2d3e50;
        }

        .process-steps {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .process-card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            transition: transform 0.3s ease;
        }

        .process-card:hover {
            transform: translateY(-5px);
        }

        .process-icon {
            font-size: 2.5rem;
            color: #f39c12;
            margin-bottom: 20px;
        }

        /* Buy/Sell Section */
        .buy-sell-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            min-height: 400px;
            margin: 80px 0;
        }

        .buy-section, .sell-section {
            padding: 60px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .buy-section {
            background: linear-gradient(rgba(46, 79, 114, 0.9), rgba(46, 79, 114, 0.9)),
                        url('https://images.unsplash.com/photo-1489824904134-891ab64532f1') center/cover;
        }

        .sell-section {
            background: linear-gradient(rgba(243, 156, 18, 0.9), rgba(230, 126, 34, 0.9)),
                        url('https://images.unsplash.com/photo-1615906655593-ad0386982a0f') center/cover;
        }

        .bs-content {
            max-width: 500px;
            margin: 0 auto;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .bs-icon {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .bs-button {
            background: white;
            color: #2d3e50;
            padding: 12px 35px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            margin-top: 25px;
            display: inline-block;
            transition: all 0.3s ease;
        }

        .bs-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

        /* Buy/Sell Tabs */
    .bs-tabs {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin: 60px 0 30px;
    }

    .bs-tab {
        padding: 15px 40px;
        border: none;
        background: #f8f9fa;
        color: #666;
        border-radius: 30px;
        cursor: pointer;
        transition: all 0.3s ease;
        font-weight: 600;
    }

    .bs-tab.active {
        background: #f39c12;
        color: white;
    }

    .bs-content {
        display: none;
        padding: 40px 20px;
    }

    .bs-content.active {
        display: block;
    }

    /* Vehicle Swiper */
    .vehicle-swiper {
        padding: 40px 0 80px;
    }

    .vehicle-swiper .swiper-slide {
        width: 300px;
    }

    .swiper-nav-buttons {
        text-align: center;
        margin-top: 30px;
    }

    .swiper-custom-prev,
    .swiper-custom-next {
        background: #f39c12;
        color: white;
        border: none;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin: 0 10px;
        cursor: pointer;
        transition: background 0.3s;
    }

    .swiper-custom-prev:hover,
    .swiper-custom-next:hover {
        background: #e67e22;
    }
        /* Vehicle Cards */
        .vehicle-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            padding: 40px 20px;
            max-width: 1400px;
            margin: 0 auto;
        }

        .vehicle-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            transition: transform 0.3s ease;
        }

        .vehicle-card:hover {
            transform: translateY(-5px);
        }

        .vehicle-image {
            height: 200px;
            background-size: cover;
            background-position: center;
        }

        .vehicle-details {
            padding: 20px;
        }

        .vehicle-price {
            color: #f39c12;
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .vehicle-specs {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
            flex-wrap: wrap;
        }

        .spec-item {
            display: flex;
            align-items: center;
            gap: 5px;
            color: #666;
        }

        .spec-icon {
            color: #f39c12;
        }

        .view-details {
            display: block;
            text-align: center;
            background: #2d3e50;
            color: white;
            padding: 12px;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .view-details:hover {
            background: #f39c12;
        }



        /* Testimonials Swiper */
        .testimonial-section {
            padding: 80px 20px;
            background: #f8f9fa;
        }

        .testimonial-card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            margin: 20px;
        }

        .testimonial-text {
            font-size: 1rem;
            color: #666;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .author-image {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }

        /* FAQ Section */
        .faq-section {
            padding: 80px 20px;
            max-width: 1000px;
            margin: 0 auto;
        }

        .faq-item {
            border-bottom: 1px solid #eee;
            margin-bottom: 15px;
        }

        .faq-question {
            width: 100%;
            text-align: left;
            padding: 20px 0;
            background: none;
            border: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 1rem;
            color: #2d3e50;
            cursor: pointer;
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
            padding-left: 30px;
            color: #666;
        }

        .faq-icon {
            color: #f39c12;
            transition: transform 0.3s ease;
        }

        .faq-item.active .faq-icon {
            transform: rotate(45deg);
        }

        @media (max-width: 768px) {
            .hamburger-btn {
                display: block;
            }

            .vehicle-type-dropdown,
            .main-nav {
                display: none;
            }

            .search-bar {
                display: none;
            }

            .logo img {
                margin-right: 0;
            }

            .user-actions {
                gap: 15px;
                margin-left: auto;
            }

            .action-item span {
                display: none;
            }

            .action-item i {
                font-size: 1.5rem;
                margin-bottom: 0;
            }

            .container {
                justify-content: space-between;
            }

            .mobile-menu {
                top: 126px;
            }

            .hero-swiper {
                height: 60vh;
            }
            
            .swiper-button-prev,
            .swiper-button-next {
                display: none !important;
            }

            .hero-content h1 {
                font-size: 2.5rem;
            }

            .hero-content p {
                font-size: 1.2rem;
            }

            .search-container {
                padding: 20px;
            }

            .buy-sell-section {
                grid-template-columns: 1fr;
            }
            
            .process-steps {
                grid-template-columns: 1fr;
            }
            
            .bs-content {
                padding: 0 20px;
            }
        }

        @media (max-width: 480px) {
            .top-links {
                display: none;
            }

            .top-alert-bar .container {
                justify-content: center;
            }

            .user-actions {
                gap: 10px;
            }

            .action-item {
                min-width: auto;
            }

            .mobile-menu {
                top: 106px;
                height: calc(100vh - 106px);
            }

            .advanced-filters {
                grid-template-columns: 1fr;
            }

            .search-modal {
                padding: 20px;
            }

            .search-container {
                padding: 10px;
            }

            .advanced-filters {
                grid-template-columns: 1fr;
            }

            .search-modal {
                padding: 10px;
            }

            .hero-content h1 {
                font-size: 2rem;
            color: #2d3e50;
            font-weight: bold;
            text-align: center;
            line-height: 1.5;
            margin-bottom: 20px;
            margin-top: 0;
            }
        }
    </style>
</head>
<body>
    <!-- Top Alert Bar -->
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

    <!-- Main Header -->
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
                <a href="#" class="action-item" onclick="toggleModal(true)">
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

    <!-- Mobile Menu -->
    <div class="mobile-menu">
        <ul class="mobile-nav-links">
            <li><i class="fas fa-car"></i><a href="#">Used Vehicles</a></li>
            <li><i class="fas fa-car"></i><a href="#">New Cars</a></li>
            <li><a href="#">Certified Cars</a></li>
            <li><a href="#">Compare</a></li>
            <li><a href="#">Reviews</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Sell Car</a></li>
        </ul>
    </div>

    <!-- Swiper Hero Section -->
    <div class="swiper hero-swiper">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide" style="background-image: url('https://images.unsplash.com/photo-1503376780353-7e6692767b70')">
                <div class="hero-content">
                    <h1>Find Your Perfect Ride</h1>
                    <p>Up to 10% Discount on Certified Vehicles</p>
                    <button class="shop-now-btn" onclick="openSearch()">SHOP NOW</button>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="swiper-slide" style="background-image: url('https://images.unsplash.com/photo-1553440569-bcc63803a83d')">
                <div class="hero-content">
                    <h1>Premium Collection</h1>
                    <p>Luxury Vehicles at Best Prices</p>
                    <button class="shop-now-btn" onclick="openSearch()">EXPLORE NOW</button>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="swiper-slide" style="background-image: url('https://images.unsplash.com/photo-1580273916550-e323be2ae537')">
                <div class="hero-content">
                    <h1>Best Deals of the Season</h1>
                    <p>Limited Time Offers Available</p>
                    <button class="shop-now-btn" onclick="openSearch()">VIEW DEALS</button>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination"></div>
    </div>



    <!-- Enhanced Search Modal -->
    <div class="search-modal" id="searchModal">
        <div class="search-container">
            <div class="search-header">
                <h2 class="search-title">Advanced Vehicle Search</h2>
                <span class="close-search" onclick="closeSearch()">&times;</span>
            </div>

            <div class="filter-section">
                <div class="filter-group">
                    <h3 class="filter-title">Price Range</h3>
                    <div class="price-range">
                        <input type="range" class="range-input" min="0" max="10000000" step="100000" id="priceRange">
                        <span id="priceValue">₹0 - ₹1,00,00,000</span>
                    </div>
                </div>

                <div class="filter-group">
                    <h3 class="filter-title">Location</h3>
                    <select class="location-select">
                        <option value="">Select Location</option>
                        <option>Kathmandu</option>
                        <option>Pokhara</option>
                        <option>Chitwan</option>
                        <option>Biratnagar</option>
                    </select>
                </div>

                <div class="filter-group">
                    <h3 class="filter-title">Vehicle Type</h3>
                    <div class="advanced-filters">
                        <div class="checkbox-group">
                            <input type="checkbox" id="cars">
                            <label for="cars">Cars</label>
                        </div>
                        <div class="checkbox-group">
                            <input type="checkbox" id="bikes">
                            <label for="bikes">Bikes</label>
                        </div>
                        <div class="checkbox-group">
                            <input type="checkbox" id="scooters">
                            <label for="scooters">Scooters</label>
                        </div>
                    </div>
                </div>

                <div class="filter-group">
                    <h3 class="filter-title">Advanced Filters</h3>
                    <div class="advanced-filters">
                        <div>
                            <label>Make</label>
                            <select class="location-select">
                                <option value="">All Makes</option>
                                <option>Maruti</option>
                                <option>Hyundai</option>
                                <option>Honda</option>
                            </select>
                        </div>
                        <div>
                            <label>Model</label>
                            <select class="location-select">
                                <option value="">All Models</option>
                                <option>Swift</option>
                                <option>i20</option>
                                <option>City</option>
                            </select>
                        </div>
                        <div>
                            <label>Year</label>
                            <input type="number" min="2000" max="2024" class="location-select" placeholder="Enter Year">
                        </div>
                        <div>
                            <label>Mileage (km)</label>
                            <input type="number" class="location-select" placeholder="Max Mileage">
                        </div>
                    </div>
                </div>
            </div>

            <div class="search-footer">
                <button class="reset-btn">Reset Filters</button>
                <button class="search-btn-main">Search Vehicles</button>
            </div>
        </div>
    </div>

        <!-- How It Works Section -->
        <section class="process-section">
        <h2 class="section-title">How 2Pangre Works</h2>
        <div class="process-steps">
            <div class="process-card">
                <i class="fas fa-search process-icon"></i>
                <h3>1. Search & Select</h3>
                <p>Browse our verified inventory of quality vehicles</p>
            </div>
            <div class="process-card">
                <i class="fas fa-car process-icon"></i>
                <h3>2. Schedule Visit</h3>
                <p>Book a test drive at your convenience</p>
            </div>
            <div class="process-card">
                <i class="fas fa-file-contract process-icon"></i>
                <h3>3. Paperwork</h3>
                <p>Hassle-free documentation & financing</p>
            </div>
            <div class="process-card">
                <i class="fas fa-key process-icon"></i>
                <h3>4. Drive Home</h3>
                <p>Get your dream vehicle delivered</p>
            </div>
        </div>
    </section>

    <!-- Buy/Sell Section -->
    <section class="buy-sell-section">
        <div class="buy-section">
            <div class="bs-content">
                <i class="fas fa-car bs-icon"></i>
                <h2>Buy Quality Vehicles</h2>
                <p>200-Point inspected cars with warranty included</p>
                <a href="#" class="bs-button">Browse Inventory</a>
            </div>
        </div>
        <div class="sell-section">
            <div class="bs-content">
                <i class="fas fa-tag bs-icon"></i>
                <h2>Sell Your Vehicle</h2>
                <p>Get best price with fixed price assurance</p>
                <a href="#" class="bs-button">Start Selling</a>
            </div>
        </div>
    </section>

    <!-- Add this HTML -->
<section class="buy-sell-section">
    <div class="bs-tabs">
        <button class="bs-tab active" onclick="toggleBSSection('buy')">Buy Vehicle</button>
        <button class="bs-tab" onclick="toggleBSSection('sell')">Sell Vehicle</button>
    </div>

    <!-- Buy Content -->
    <div class="bs-content active" id="buySection">
        <h2 class="section-title">Quality Certified Vehicles</h2>
        <div class="swiper vehicle-swiper">
            <div class="swiper-wrapper">
                <!-- Vehicle Slide 1 -->
                <div class="swiper-slide">
                    <div class="vehicle-card">
                        <div class="vehicle-image" style="background-image: url('car1.jpg')"></div>
                        <div class="vehicle-details">
                            <div class="vehicle-price">₹5.75 Lakh</div>
                            <h3>Maruti Swift Dzire</h3>
                            <div class="vehicle-specs">
                                <span class="spec-item"><i class="fas fa-tachometer-alt"></i> 25k km</span>
                                <span class="spec-item"><i class="fas fa-gas-pump"></i> Petrol</span>
                                <span class="spec-item"><i class="fas fa-calendar-alt"></i> 2020</span>
                            </div>
                            <a href="#" class="view-details">View Details</a>
                        </div>
                    </div>
                </div>
                <!-- Add more slides -->
                <!-- Vehicle Slide 2 -->
                <div class="swiper-slide">
                    <div class="vehicle-card">
                        <div class="vehicle-image" style="background-image: url('car2.jpg')"></div>
                        <div class="vehicle-details">
                            <div class="vehicle-price">₹7.50 Lakh</div>
                            <h3>Hyundai i20</h3>
                            <div class="vehicle-specs">
                                <span class="spec-item"><i class="fas fa-tachometer-alt"></i> 15k km</span>
                                <span class="spec-item"><i class="fas fa-gas-pump"></i> Diesel</span>
                                <span class="spec-item"><i class="fas fa-calendar-alt"></i> 2019</span>
                            </div>
                            <a href="#" class="view-details">View Details</a>
                        </div>
                    </div>
                </div>
                <!-- Vehicle Slide 3 -->
                <div class="swiper-slide">
                    <div class="vehicle-card">
                        <div class="vehicle-image" style="background-image: url('car3.jpg')"></div>
                        <div class="vehicle-details">
                            <div class="vehicle-price">₹12.00 Lakh</div>
                            <h3>Honda City</h3>
                            <div class="vehicle-specs">
                                <span class="spec-item"><i class="fas fa-tachometer-alt"></i> 10k km</span>
                                <span class="spec-item"><i class="fas fa-gas-pump"></i> Petrol</span>
                                <span class="spec-item"><i class="fas fa-calendar-alt"></i> 2021</span>
                            </div>
                            <a href="#" class="view-details">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-nav-buttons">
                <button class="swiper-custom-prev"><i class="fas fa-chevron-left"></i></button>
                <button class="swiper-custom-next"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </div>

    <!-- Sell Content -->
    <div class="bs-content" id="sellSection">
        <div class="sell-process">
            <h2 class="section-title">Sell Your Vehicle in 3 Steps</h2>
            <div class="process-steps">
                <div class="process-card">
                    <i class="fas fa-phone-alt process-icon"></i>
                    <h3>1. Schedule Inspection</h3>
                    <p>Book free pickup for vehicle inspection</p>
                </div>
                <div class="process-card">
                    <i class="fas fa-rupee-sign process-icon"></i>
                    <h3>2. Get Best Offer</h3>
                    <p>Receive instant price quote</p>
                </div>
                <div class="process-card">
                    <i class="fas fa-hand-holding-usd process-icon"></i>
                    <h3>3. Instant Payment</h3>
                    <p>Complete paperwork & get paid</p>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Vehicle Listings -->
    <section>
        <h2 class="section-title">Featured Vehicles</h2>
        <div class="vehicle-grid">
            <!-- Vehicle 1 -->
            <div class="vehicle-card">
                <div class="vehicle-image" style="background-image: url('https://images.unsplash.com/photo-1503376780353-7e6692767b70')"></div>
                <div class="vehicle-details">
                    <div class="vehicle-price">₹5.75 Lakh</div>
                    <h3>Maruti Swift Dzire</h3>
                    <div class="vehicle-specs">
                        <span class="spec-item"><i class="fas fa-tachometer-alt spec-icon"></i> 25k km</span>
                        <span class="spec-item"><i class="fas fa-gas-pump spec-icon"></i> Petrol</span>
                        <span class="spec-item"><i class="fas fa-calendar-alt spec-icon"></i> 2020</span>
                    </div>
                    <a href="#" class="view-details">View Details</a>
                </div>
            </div>
            <!-- Vehicle 2 -->
            <div class="vehicle-card">
                <div class="vehicle-image" style="background-image: url('https://images.unsplash.com/photo-1571607387225-afa3c7a6b0d0')"></div>
                <div class="vehicle-details">
                    <div class="vehicle-price">₹8.50 Lakh</div>
                    <h3>Hyundai i20</h3>
                    <div class="vehicle-specs">
                        <span class="spec-item"><i class="fas fa-tachometer-alt spec-icon"></i> 15k km</span>
                        <span class="spec-item"><i class="fas fa-gas-pump spec-icon"></i> Diesel</span>
                        <span class="spec-item"><i class="fas fa-calendar-alt spec-icon"></i> 2019</span>
                    </div>
                    <a href="#" class="view-details">View Details</a>
                </div>
            </div>

            <!-- Vehicle 3 -->
            <div class="vehicle-card">
                <div class="vehicle-image" style="background-image: url('https://images.unsplash.com/photo-1583267747751-3a0b4b5b5d3b')"></div>
                <div class="vehicle-details">
                    <div class="vehicle-price">₹12.00 Lakh</div>
                    <h3>Honda City</h3>
                    <div class="vehicle-specs">
                        <span class="spec-item"><i class="fas fa-tachometer-alt spec-icon"></i> 10k km</span>
                        <span class="spec-item"><i class="fas fa-gas-pump spec-icon"></i> Petrol</span>
                        <span class="spec-item"><i class="fas fa-calendar-alt spec-icon"></i> 2021</span>
                    </div>
                    <a href="#" class="view-details">View Details</a>
                </div>
            </div>

            <!-- Vehicle 4 -->
            <div class="vehicle-card">
                <div class="vehicle-image" style="background-image: url('https://images.unsplash.com/photo-1519648023493-d82b5f8d7d1a')"></div>
                <div class="vehicle-details">
                    <div class="vehicle-price">₹1.50 Lakh</div>
                    <h3>Yamaha R15</h3>
                    <div class="vehicle-specs">
                        <span class="spec-item"><i class="fas fa-tachometer-alt spec-icon"></i> 5k km</span>
                        <span class="spec-item"><i class="fas fa-gas-pump spec-icon"></i> Petrol</span>
                        <span class="spec-item"><i class="fas fa-calendar-alt spec-icon"></i> 2018</span>
                    </div>
                    <a href="#" class="view-details">View Details</a>
                </div>
            </div>

            <!-- Vehicle 5 -->
            <div class="vehicle-card">
                <div class="vehicle-image" style="background-image: url('https://images.unsplash.com/photo-1592194996308-7d9d4b6d0b0d')"></div>
                <div class="vehicle-details">
                    <div class="vehicle-price">₹85,000</div>
                    <h3>Honda Activa</h3>
                    <div class="vehicle-specs">
                        <span class="spec-item"><i class="fas fa-tachometer-alt spec-icon"></i> 8k km</span>
                        <span class="spec-item"><i class="fas fa-gas-pump spec-icon"></i> Petrol</span>
                        <span class="spec-item"><i class="fas fa-calendar-alt spec-icon"></i> 2019</span>
                    </div>
                    <a href="#" class="view-details">View Details</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Swiper -->
    <section class="testimonial-section">
        <div class="swiper testimonial-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <p class="testimonial-text">
                            "Excellent service and transparent process. Got my dream car within a week!"
                        </p>
                        <div class="testimonial-author">
                            <img src="user1.jpg" class="author-image" alt="User">
                            <div>
                                <h4>John Doe</h4>
                                <p>Hyderabad</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add more testimonials -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <p class="testimonial-text">
                            "Great experience! The staff was very helpful and the process was smooth."
                        </p>
                        <div class="testimonial-author">
                            <img src="user2.jpg" class="author-image" alt="User">
                            <div>
                                <h4>Jane Smith</h4>
                                <p>Kathmandu</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <p class="testimonial-text">
                            "I am extremely satisfied with my purchase. Highly recommend 2Pangre!"
                        </p>
                        <div class="testimonial-author">
                            <img src="user3.jpg" class="author-image" alt="User">
                            <div>
                                <h4>Michael Johnson</h4>
                                <p>Pokhara</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add more testimonials -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <p class="testimonial-text">
                            "Thank you for the excellent service and great customer support!"
                        </p>
                        <div class="testimonial-author">
                            <img src="user4.jpg" class="author-image" alt="User">
                            <div>
                                <h4>Sarah Wilson</h4>
                                <p>Delhi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <h2 class="section-title">Frequently Asked Questions</h2>
        <div class="faq-item">
            <button class="faq-question">
                What inspection process do you follow?
                <i class="fas fa-plus faq-icon"></i>
            </button>
            <div class="faq-answer">
                <p>All vehicles undergo a 200-point quality inspection by certified mechanics...</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
            How can I schedule a test drive?
            <i class="fas fa-plus faq-icon"></i>
            </button>
            <div class="faq-answer">
            <p>You can schedule a test drive by visiting our website and selecting the vehicle you are interested in. Click on the "Schedule Test Drive" button and fill out the required details.</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
            What financing options are available?
            <i class="fas fa-plus faq-icon"></i>
            </button>
            <div class="faq-answer">
            <p>We offer a variety of financing options to suit your needs. You can choose from different loan terms and interest rates. Our finance team will assist you in finding the best option.</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
            Do you offer vehicle warranties?
            <i class="fas fa-plus faq-icon"></i>
            </button>
            <div class="faq-answer">
            <p>Yes, all our vehicles come with a warranty. The warranty period and coverage details vary depending on the vehicle. Please check the specific vehicle listing for more information.</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
            Can I trade in my old vehicle?
            <i class="fas fa-plus faq-icon"></i>
            </button>
            <div class="faq-answer">
            <p>Yes, we accept trade-ins. You can get an estimate for your old vehicle by filling out the trade-in form on our website. Our team will contact you with a quote.</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
            What is the return policy?
            <i class="fas fa-plus faq-icon"></i>
            </button>
            <div class="faq-answer">
            <p>We offer a 7-day return policy for all our vehicles. If you are not satisfied with your purchase, you can return the vehicle within 7 days for a full refund.</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
            How do I contact customer support?
            <i class="fas fa-plus faq-icon"></i>
            </button>
            <div class="faq-answer">
            <p>You can contact our customer support team by calling +977 981234567 or by emailing support@2pangre.com. Our team is available 24/7 to assist you with any queries.</p>
            </div>
        </div>
    </section>

    <?php include 'common\footer.php'; ?>
    <!-- Auth Modal -->
    <div class="auth-modal" id="authModal">
        <div class="modal-content">
            <span class="close-btn" onclick="toggleModal(false)">&times;</span>
            
            <div class="form-tabs">
                <button class="form-switch-btn active" data-form="loginForm" 
                    onclick="switchForm('loginForm')">Login</button>
                <button class="form-switch-btn" data-form="signupForm" 
                    onclick="switchForm('signupForm')">Sign Up</button>
            </div>

            <!-- Login Form -->
            <form id="loginForm" class="auth-form" style="display: block;">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" placeholder="Enter password" required>
                </div>
                <button type="submit" class="auth-btn">Login</button>
                <div class="auth-links">
                    <a href="#">Forgot Password?</a>
                </div>
            </form>

            <!-- Signup Form -->
            <form id="signupForm" class="auth-form">
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" placeholder="Create password" required>
                </div>
                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="tel" placeholder="Enter phone number" required>
                </div>
                <button type="submit" class="auth-btn">Create Account</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
    // Buy/Sell Tabs Functionality
    function toggleBSSection(section) {
        document.querySelectorAll('.bs-tab').forEach(tab => tab.classList.remove('active'));
        document.querySelectorAll('.bs-content').forEach(content => content.classList.remove('active'));
        
        document.querySelector(`.bs-tab[onclick="toggleBSSection('${section}')"]`).classList.add('active');
        document.getElementById(`${section}Section`).classList.add('active');
        
        // Reinitialize swiper when switching tabs
        if(section === 'buy') {
            vehicleSwiper.update();
        }
    }

    // Initialize Vehicle Swiper
    const vehicleSwiper = new Swiper('.vehicle-swiper', {
        slidesPerView: 'auto',
        spaceBetween: 30,
        navigation: {
            nextEl: '.swiper-custom-next',
            prevEl: '.swiper-custom-prev',
        },
        breakpoints: {
            640: { slidesPerView: 2 },
            1024: { slidesPerView: 3 }
        }
    });
</script>
    <script>
        // Initialize Swiper
        const swiper = new Swiper('.hero-swiper', {
            loop: true,
            autoplay: {
                delay: 5000,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    <script>
        // Mobile Menu Toggle
        const hamburgerBtn = document.querySelector('.hamburger-btn');
        const mobileMenu = document.querySelector('.mobile-menu');
        const body = document.body;

        hamburgerBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('active');
            body.classList.toggle('no-scroll');
        });

        // Close mobile menu on resize
        window.addEventListener('resize', () => {
            if (window.innerWidth > 768) {
                mobileMenu.classList.remove('active');
                body.classList.remove('no-scroll');
            }
        });

        // Auth Modal Functions
        function toggleModal(show = true) {
            const modal = document.getElementById('authModal');
            modal.style.display = show ? 'flex' : 'none';
        }

        function switchForm(formType) {
            document.querySelectorAll('.auth-form').forEach(form => 
                form.style.display = 'none');
            document.getElementById(formType).style.display = 'block';
            
            document.querySelectorAll('.form-switch-btn').forEach(btn => 
                btn.classList.remove('active'));
            document.querySelector(`[data-form="${formType}"]`).classList.add('active');
        }

        // Search Modal Functions
        function openSearch() {
            document.getElementById('searchModal').style.display = 'block';
        }

        function closeSearch() {
            document.getElementById('searchModal').style.display = 'none';
        }

        // Price Range Update
        const priceRange = document.getElementById('priceRange');
        const priceValue = document.getElementById('priceValue');
        
        priceRange.addEventListener('input', (e) => {
            const value = e.target.value;
            priceValue.textContent = `₹${Number(value).toLocaleString()} - ₹1,00,00,000`;
        });

        // Modal Closing Logic
        window.onclick = function(event) {
            const authModal = document.getElementById('authModal');
            const searchModal = document.getElementById('searchModal');
            
            if (event.target == authModal) toggleModal(false);
            if (event.target == searchModal) closeSearch();
        };

        // Reset Filters
        document.querySelector('.reset-btn').addEventListener('click', () => {
            document.querySelectorAll('input, select').forEach(element => {
                if (element.type !== 'button') {
                    element.value = '';
                }
            });
            priceRange.value = 0;
            priceValue.textContent = '₹0 - ₹1,00,00,000';
        });
    </script>
    <script>
        // Add these new initializations
        const testimonialSwiper = new Swiper('.testimonial-swiper', {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: { slidesPerView: 1 },
                768: { slidesPerView: 2 },
                1024: { slidesPerView: 3 }
            }
        });

        // FAQ Accordion
        document.querySelectorAll('.faq-question').forEach(button => {
            button.addEventListener('click', () => {
                const faqItem = button.closest('.faq-item');
                faqItem.classList.toggle('active');
                
                const answer = faqItem.querySelector('.faq-answer');
                answer.style.maxHeight = answer.style.maxHeight 
                    ? null 
                    : answer.scrollHeight + 'px';
            });
        });
    </script>
</body>
</html>