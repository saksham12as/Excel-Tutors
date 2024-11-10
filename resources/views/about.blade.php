<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Excel Tutors</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Full Page Background Styling */
        body, html {
            font-family: 'Arial', sans-serif;
            color: #333;
            height: 100%;
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2); /* Soft gradient background covering the whole page */
            overflow-x: hidden;
        }
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 15px 30px;
            background-color: rgba(255, 255, 255, 0.1); /* Transparent background */
            backdrop-filter: blur(5px); /* Subtle blur effect */
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            z-index: 100;
            transition: transform 0.3s ease; /* Smooth hide/show effect */
        }

        /* Hide navbar on scroll */
        .navbar.hidden {
            transform: translateY(-100%); /* Moves navbar out of view */
        }

        /* Logo on Left Side */
        .navbar .logo {
            position: absolute;
            left: 20px;
        }

        .navbar .logo img {
            height: 50px;
            filter: brightness(0.9);
            opacity: 0.9; /* Blending effect */
        }

        /* Centered Menu */
        .navbar .menu {
            display: flex;
            gap: 30px;
        }

        .navbar .menu a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.2rem;
            transition: color 0.3s;
        }

        .navbar .menu a:hover {
            color: #8BC34A; /* Gold color on hover */
        }
        /* Centered About Section */
        .about-section {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 100px 20px;
            max-width: 1200px;
            margin: 0 auto;
            gap: 50px;
            color: #333;
            position: relative;
        }

        .about-section::before {
            content: "01";
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 8rem;
            color: rgba(0, 0, 0, 0.05);
            z-index: -1;
        }

        /* About Content */
        .about-content {
            flex: 1;
            padding: 40px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            animation: fadeIn 1s ease-in-out;
        }

        .about-content h1 {
            font-size: 4rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 0.5em;
            text-transform: uppercase;
            position: relative;
        }

        .about-content h3 {
            font-size: 1.5rem;
            color: #666;
            margin-bottom: 1.5em;
            font-weight: 600;
        }

        .about-content p {
            font-size: 1.2rem;
            color: #555;
            line-height: 1.8;
            margin-bottom: 1.5em;
        }

        /* About Image Styling */
        .about-image {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            max-width: 600px;
            padding: 20px;
        }

        .about-image img {
            max-width: 100%;
            border-radius: 15px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.15);
            animation: slideIn 1s ease-out;
        }

        /* Services Section */
        .services-section {
            padding: 80px 20px;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.9);
            margin-top: 50px;
            border-radius: 15px;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }

        .services-section h2 {
            font-size: 3rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 1em;
            position: relative;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .services-section h2::before {
            content: "02";
            position: absolute;
            top: -30px;
            left: -30px;
            font-size: 8rem;
            color: rgba(0, 0, 0, 0.05);
            z-index: -1;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
        }

        .service-item {
            background-color: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
        }

        .service-item:hover {
            transform: translateY(-10px);
            box-shadow: 0px 15px 40px rgba(0, 0, 0, 0.15);
        }

        /* Larger Images with Circular Style */
        .service-item img {
            width: 120px; /* Increase size for better visibility */
            height: 120px;
            border-radius: 50%;
            background-color: #f8f8f8;
            padding: 10px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            object-fit: cover;
        }

        .service-item h4 {
            font-size: 1.6rem;
            color: #333;
            margin-bottom: 0.5em;
        }

        .service-item p {
            color: #666;
            font-size: 1rem;
            line-height: 1.6;
        }

        /* Animations */
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

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
    </style>
</head>
<body>
<!-- Fixed Navbar -->
<nav class="navbar">
        <div class="logo">
            <a href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" alt="Excel Tutors Logo"></a>
        </div>
        <div class="menu">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About</a>
            <a href="#">Review</a>
            <a href="#">Contact Us</a>
        </div>
    </nav>

    <!-- About Section -->
    <section class="about-section">
        <div class="about-image">
            <img src="{{ asset('images/maths-tutor.jpg') }}" alt="Math Tutor Assisting Students">
        </div>
        <div class="about-content">
            <h1>About</h1>
            <h3>Transforming Math Anxiety into Mastery</h3>
            <p>
                At Excel Tutors, we are dedicated to empowering students from grades 8 to 10 with the skills and confidence needed to excel in mathematics. We exclusively focus on the ICSE curriculum, ensuring students have the tools to succeed in a challenging academic environment.
            </p>
            <p>
                Our approach includes personalized support, regular assessments, and progress tracking, making complex math concepts approachable and engaging for every learner.
            </p>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section">
        <h2>Our Services</h2>
        <div class="services-grid">
            <div class="service-item">
                <img src="{{ asset('images/test-prep.jpg') }}" alt="Test Preparation">
                <h4>Test Preparation</h4>
                <p>Focused coaching to prepare students for exams with confidence.</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('images/doubt-classes.jpg') }}" alt="Doubt Classes">
                <h4>Doubt Classes</h4>
                <p>Dedicated sessions to clarify doubts and ensure conceptual clarity.</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('images/weekly-classes.jpg') }}" alt="Weekly Tests">
                <h4>Weekly Tests</h4>
                <p>Regular tests to track progress and identify areas of improvement.</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('images/exam-preparation.jpg') }}" alt="Exam Preparation">
                <h4>Exam Preparation</h4>
                <p>Comprehensive preparation for final exams to boost performance.</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('images/practice-sessions.jpg') }}" alt="Practice Sessions">
                <h4>Practice Sessions</h4>
                <p>Extra practice sessions focused on key problem areas.</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('images/progress-tracking.jpg') }}" alt="Progress Tracking">
                <h4>Progress Tracking</h4>
                <p>Continuous tracking to ensure steady improvement.</p>
            </div>
        </div>
    </section>

</body>
</html>
