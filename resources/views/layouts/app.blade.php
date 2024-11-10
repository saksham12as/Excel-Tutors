<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excel Tutors - Home</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Full Page Styling */
        body,
        html {
            font-family: Arial, sans-serif;
            color: white;
            height: 100%;
            overflow-x: hidden;
        }

        /* Navbar */
        .navbar {
            position: absolute;
            top: 0;
            width: 100%;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 10;
        }

        .navbar .logo img {
            height: 60px;
        }

        .navbar .menu a {
            color: white;
            margin: 0 15px;
            font-weight: bold;
            text-decoration: none;
            transition: color 0.3s;
        }

        .navbar .menu a:hover {
            color: #8BC34A;
        }

        /* Hero Section */
        .hero-section {
            position: relative;
            background-image: url("{{ asset('images/hero.jpg') }}");
            background-size: cover;
            /* Makes the image cover the entire section width */
            background-position: center;
            background-repeat: no-repeat;
            width: 100vw;
            /* Full viewport width */
            height: 100vh;
            /* Keeps the height to full viewport height */
            display: flex;
            align-items: center;
            padding: 0 50px;
            color: white;
            overflow: hidden;
        }



        /* Dark Overlay */
        .hero-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 700px;
        }

        .hero-content h1 {
            font-size: 5rem;
            font-weight: bold;
            line-height: 1;
        }

        .hero-content p.subheading {
            font-size: 1.5rem;
            color: #8BC34A;
            margin: 20px 0;
            font-weight: bold;
        }

        .hero-content p.description {
            font-size: 1.2rem;
            margin-bottom: 2em;
        }

        .btn-primary {
            padding: 15px 30px;
            font-size: 1rem;
            background-color: #8BC34A;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #8BC34A;
        }

        .btn-secondary {
            padding: 15px 30px;
            font-size: 1rem;
            background-color: transparent;
            color: white;
            border: 2px solid white;
            text-decoration: none;
            border-radius: 5px;
            margin-left: 15px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .btn-secondary:hover {
            background-color: #FF5733;
            color: white;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <div class="navbar">
        <div class="logo">
            <a href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" alt="Excel Tutors Logo"></a>
        </div>
        <div class="menu">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About Us</a>
            <a href="#">Reviews</a>

            <a href="#">Contact Us</a>
            <a href="#" class="btn-secondary">Get Started</a>
        </div>
    </div>

    <!-- Hero Section -->
    <!-- Add this in the <head> section if Font Awesome is not already included -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <section class="hero-section">
        <div class="hero-content">
            <p class="subheading">Welcome to Excel Tutors</p>
            <h1>Master Mathematics</h1>
            <p class="description">Helping students overcome math anxiety and build confidence through personalized tutoring sessions.</p>
            <a href="#" class="btn-primary">Join Class Today</a>
            <p style="margin-top: 20px; font-size: 1rem;">
                <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call us now: 9914152274
            </p>
        </div>
    </section>


</body>

</html>