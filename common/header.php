<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Marketplace Header</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/common/common.css">
</head>
<body>
    <!-- Top Alert Bar -->
    <div class="top-alert-bar">
        <div class="container">
            <span><i class="fas fa-phone"></i> Customer Care: +977 9812345678</span>
            <div class="top-links">
                <a href="#"><i class="fas fa-map-marker-alt"></i> Locations</a>
                <a href="#"><i class="fas fa-book"></i> Order Tracking</a>
                <a href="#"><i class="fas fa-rupee-sign"></i> Sell Car</a>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <header class="main-header">
        <div class="container">
            <!-- Logo -->
            <a href="/" class="logo">
                <img src="/images/company_logo.jpg" alt="Auto Marketplace">
            </a>

            <!-- Vehicle Type Dropdown -->
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

            <!-- Search Bar -->
            <div class="search-bar">
                <input type="text" placeholder="Search by Make, Model or Keyword">
                <button class="search-btn">
                    <i class="fas fa-search"></i>
                </button>
            </div>

            <!-- User Actions -->
            <div class="user-actions">
                <a href="#" class="action-item">
                    <i class="fas fa-user"></i>
                    <span>Login/Signup</span>
                </a>
                <a href="#" class="action-item highlight">
                    <i class="fas fa-car"></i>
                    <span>My Garage</span>
                </a>
            </div>
        </div>

        <!-- Main Navigation -->
        <nav class="main-nav">
            <div class="container">
                <ul class="nav-links">
                    <li><a href="#">Used Cars</a></li>
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
</body>
</html>