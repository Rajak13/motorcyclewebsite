<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2Pangre - Premium Motorcycle Marketplace</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <style>
        :root {
            --primary: #e74c3c;
            --secondary: #2c3e50;
            --accent: #f39c12;
            --text: #34495e;
            --light: #ecf0f1;
            --radius: 12px;
            --shadow: 0 10px 20px rgba(0,0,0,0.1);
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: var(--text);
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .section {
            padding: 80px 0;
        }

        /* Hero Section */
        .hero {
            height: 80vh;
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)),
                        url('https://images.unsplash.com/photo-1558981403-c5f9899a28bc?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            color: white;
        }

        .hero-content {
            max-width: 800px;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
        }

        /* Featured Bikes */
        .featured-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .bike-card {
            background: white;
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .bike-card:hover {
            transform: translateY(-10px);
        }

        .bike-image {
            height: 250px;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .bike-info {
            padding: 25px;
        }

        .bike-price {
            color: var(--primary);
            font-size: 1.5rem;
            font-weight: 700;
            margin: 15px 0;
        }

        /* How It Works */
        .process-steps {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-top: 50px;
        }

        .process-card {
            text-align: center;
            padding: 30px;
            background: white;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
        }

        .process-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 20px;
        }

        /* Why Choose Us */
        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .benefit-card {
            padding: 30px;
            background: white;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            display: flex;
            align-items: center;
            gap: 20px;
        }

        /* Testimonials */
        .testimonial-slider {
            margin: 50px 0;
        }

        .testimonial-card {
            background: white;
            padding: 40px;
            border-radius: var(--radius);
            margin: 20px;
            box-shadow: var(--shadow);
        }

        /* FAQ */
        .faq-section {
            background: var(--light);
        }

        .faq-item {
            background: white;
            border-radius: var(--radius);
            margin-bottom: 15px;
            box-shadow: var(--shadow);
        }

        .faq-question {
            padding: 20px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: var(--transition);
            padding: 0 20px;
        }

        /* Back to Top */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: var(--primary);
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: none;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
        }

        .back-to-top:hover {
            transform: translateY(-5px);
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .section {
                padding: 60px 0;
            }
        }
    </style>
</head>
<body>
    <?php include 'common\header.php'; ?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Find Your Perfect Ride</h1>
                <p>India's Largest Premium Motorcycle Marketplace</p>
                <button class="cta-button" onclick="document.querySelector('#featured').scrollIntoView({behavior: 'smooth'})">
                    Browse Inventory <i class="fas fa-arrow-down"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Featured Bikes -->
    <section id="featured" class="section">
        <div class="container">
            <h2>Featured Motorcycles</h2>
            <div class="featured-grid">
                <!-- Bike 1 -->
                <div class="bike-card">
                    <div class="bike-image" style="background-image: url('https://images.unsplash.com/photo-1558981403-8f5d23519bbd')"></div>
                    <div class="bike-info">
                        <h3>Royal Enfield Classic 350</h3>
                        <div class="bike-price">₹1,85,000</div>
                        <div class="bike-details">
                            <p><i class="fas fa-tachometer-alt"></i> 3,500 km</p>
                            <p><i class="fas fa-calendar-alt"></i> 2022</p>
                        </div>
                    </div>
                </div>

                <!-- Bike 2 -->
                <div class="bike-card">
                    <div class="bike-image" style="background-image: url('https://images.unsplash.com/photo-1589313468320-0d349a093c64')"></div>
                    <div class="bike-info">
                        <h3>KTM Duke 390</h3>
                        <div class="bike-price">₹2,45,000</div>
                        <div class="bike-details">
                            <p><i class="fas fa-tachometer-alt"></i> 1,200 km</p>
                            <p><i class="fas fa-calendar-alt"></i> 2023</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="section" style="background: #f8f9fa;">
        <div class="container">
            <h2>How It Works</h2>
            <div class="process-steps">
                <div class="process-card">
                    <i class="fas fa-search process-icon"></i>
                    <h3>Search & Select</h3>
                    <p>Browse our verified inventory of premium motorcycles</p>
                </div>
                <div class="process-card">
                    <i class="fas fa-calendar-check process-icon"></i>
                    <h3>Schedule Test Ride</h3>
                    <p>Book a convenient time for your personalized test ride</p>
                </div>
                <div class="process-card">
                    <i class="fas fa-file-contract process-icon"></i>
                    <h3>Complete Purchase</h3>
                    <p>Secure financing and complete paperwork online</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="section">
        <div class="container">
            <h2>Why Choose 2Pangre?</h2>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <i class="fas fa-shield-alt" style="font-size: 2rem; color: var(--primary);"></i>
                    <div>
                        <h3>200-Point Inspection</h3>
                        <p>Every motorcycle undergoes rigorous quality checks</p>
                    </div>
                </div>
                <div class="benefit-card">
                    <i class="fas fa-rupee-sign" style="font-size: 2rem; color: var(--primary);"></i>
                    <div>
                        <h3>Best Price Guarantee</h3>
                        <p>We'll match any verified lower price</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section faq-section">
        <div class="container">
            <h2>Frequently Asked Questions</h2>
            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h4>What is your inspection process?</h4>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Our certified technicians perform a comprehensive 200-point inspection covering engine performance, frame integrity, electrical systems, and safety features.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h4>Do you offer financing options?</h4>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we partner with leading financial institutions to offer competitive EMI options and quick loan approvals.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Back to Top -->
    <div class="back-to-top" onclick="window.scrollTo({top: 0, behavior: 'smooth'})">
        <i class="fas fa-arrow-up"></i>
    </div>

    <?php include 'common\footer.php'; ?>

    <script>
        // Back to Top Button
        window.addEventListener('scroll', () => {
            const backButton = document.querySelector('.back-to-top');
            backButton.style.display = window.scrollY > 500 ? 'flex' : 'none';
        });

        // FAQ Accordion
        document.querySelectorAll('.faq-question').forEach(item => {
            item.addEventListener('click', () => {
                const answer = item.nextElementSibling;
                const icon = item.querySelector('i');
                
                item.parentElement.classList.toggle('active');
                answer.style.maxHeight = item.parentElement.classList.contains('active') 
                    ? answer.scrollHeight + 'px' 
                    : null;
                
                icon.style.transform = item.parentElement.classList.contains('active') 
                    ? 'rotate(180deg)' 
                    : 'rotate(0deg)';
            });
        });

        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>