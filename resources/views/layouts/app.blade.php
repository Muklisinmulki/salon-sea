<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Flowbite -->
    <link href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- AOS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <style>
        /* Optional: Customize AOS animations */
        [data-aos] {
            transition-duration: 800ms; /* Example custom transition duration */
        }
    
        /* Custom CSS for Navbar */
        .navbar-link {
            position: relative;
            display: inline-block;
            padding-bottom: 2px;
            transition: all 0.3s;
        }

        .navbar-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #8B5CF6; /* Purple color */
            transition: width 0.3s;
        }

        .navbar-link:hover::after {
            width: 100%;
        }
    </style>
    
</head>

<body class="pt-16">
    <!--Nav-->
@include('partials.navbar')

<!-- Konten lain di atas video -->
@yield('content')


<!--Footer-->
@include('partials.footer')
</body>
</html>