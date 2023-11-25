

<?php
/*
Template Name: IIDE Home Page
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <style>
        /* Internal Tailwind CSS */
        .swiper-container {
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            /* Center slide text vertically */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .course-card,
        .library-book,
        .testimonial-card {
            transition: transform 0.3s ease-in-out;
        }

        .course-card:hover,
        .library-book:hover,
        .testimonial-card:hover {
            transform: scale(1.05);
        }
    </style>
    <title>IIDE By Gaurav</title>
</head>

<body class="font-sans bg-gray-100">

    <nav class="bg-blue-500 p-4 text-white">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-xl font-bold">IIDE Logo</div>
            <div class="flex space-x-4">
                <a href="#" class="hover:text-gray-300">Programs</a>
                <a href="#" class="hover:text-gray-300">About</a>
                <a href="#" class="hover:text-gray-300">Placements</a>
                <a href="#" class="hover:text-gray-300">Hire from Us</a>
                <a href="#" class="hover:text-gray-300">Work with Us</a>
                <a href="#" class="hover:text-gray-300">Knowledge Portal</a>
                <a href="#" class="hover:text-gray-300">Contact Us</a>
            </div>
        </div>
    </nav>

    <!-- Slider Section -->
    <section class="container mx-auto mt-8">
        <div id="slider" class="max-w-2xl mx-auto">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <!-- Dummy Images for Slider -->
                    <div class="swiper-slide"><img src="https://picsum.photos/800/400/?random=1" alt="Slide 1"></div>
                    <div class="swiper-slide"><img src="https://picsum.photos/800/400/?random=2" alt="Slide 2"></div>
                    <div class="swiper-slide"><img src="https://picsum.photos/800/400/?random=3" alt="Slide 3"></div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Navigation -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>

    <section class="container mx-auto my-8">
        <h2 class="text-2xl font-bold mb-4">Recently Updated</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Actual Digital Marketing Course Cards -->
            <div class="bg-white p-4 shadow-md course-card">
                <img src="path/to/course1.jpg" alt="Digital Marketing Course 1">
                <h3 class="text-lg font-semibold mb-2">Digital Marketing Course 1</h3>
                <p>Learn advanced concepts with real-world case studies.</p>
                <a href="#" class="text-blue-500 hover:underline">View Details</a>
            </div>
            <div class="bg-white p-4 shadow-md course-card">
                <img src="path/to/course2.jpg" alt="Digital Marketing Course 2">
                <h3 class="text-lg font-semibold mb-2">Digital Marketing Course 2</h3>
                <p>Explore AI tools and strategies in digital marketing.</p>
                <a href="#" class="text-blue-500 hover:underline">View Details</a>
            </div>
            <div class="bg-white p-4 shadow-md course-card">
                <img src="path/to/course3.jpg" alt="Digital Marketing Course 3">
                <h3 class="text-lg font-semibold mb-2">Digital Marketing Course 3</h3>
                <p>Get 100% job assistance with our intensive training program.</p>
                <a href="#" class="text-blue-500 hover:underline">View Details</a>
            </div>
        </div>
    </section>

    <!-- Student Life Section -->
    <section class="container mx-auto my-8">
        <h2 class="text-2xl font-bold mb-4">Student Life At IIDE</h2>
        <div id="studentLifeSlider" class="max-w-2xl mx-auto">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <!-- Actual Student Life Cards -->
                    <div class="swiper-slide">
                        <div class="bg-white p-4 shadow-md course-card">
                            <img src="path/to/event1.jpg" alt="Event 1">
                            <h3 class="text-lg font-semibold mb-2">Event 1</h3>
                            <p>Exciting event description goes here.</p>
                            <a href="#" class="text-blue-500 hover:underline">Learn More</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white p-4 shadow-md course-card">
                            <img src="path/to/event2.jpg" alt="Event 2">
                            <h3 class="text-lg font-semibold mb-2">Event 2</h3>
                            <p>Another amazing event description.</p>
                            <a href="#" class="text-blue-500 hover:underline">Learn More</a>
                        </div>
                    </div>
                    <!-- Add more slides as needed -->
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Navigation -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>

    <!-- Library Section -->
    <section class="container mx-auto my-8">
        <h2 class="text-2xl font-bold mb-4">Library</h2>
        <!-- Actual Library Book Images -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="bg-white p-4 shadow-md library-book">
                <img src="path/to/book1.jpg" alt="Book 1">
</div>
<div class="bg-white p-4 shadow-md library-book">
<img src="path/to/book2.jpg" alt="Book 2">
</div>
<div class="bg-white p-4 shadow-md library-book">
<img src="path/to/book3.jpg" alt="Book 3">
</div>
</div>
</section>

<!-- Testimonial Section -->
<section class="container mx-auto my-8">
    <h2 class="text-2xl font-bold mb-4">Testimonials</h2>
    <!-- Actual Testimonial Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <div class="bg-white p-4 shadow-md testimonial-card">
            <img src="path/to/user1.jpg" alt="User 1">
            <p>"IIDE is amazing! Lorem ipsum dolor sit amet."</p>
            <p class="font-semibold">John Doe</p>
        </div>
        <div class="bg-white p-4 shadow-md testimonial-card">
            <img src="path/to/user2.jpg" alt="User 2">
            <p>"I learned a lot at IIDE. Lorem ipsum dolor sit amet."</p>
            <p class="font-semibold">Jane Doe</p>
        </div>
        <!-- Add more testimonials as needed -->
    </div>
</section>

<!-- Footer Section -->
<footer class="bg-gray-800 text-white p-4 text-center">
    <p>&copy; Copyright 2023 IIDE. All rights reserved.</p>
    <p>Terms & conditions | Privacy policy | Sitemap</p>
</footer>

<!-- Include Tailwind CSS and JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>
<!-- Include Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- Initialize Swiper for Student Life Slider -->
<script>
    var studentLifeSwiper = new Swiper('#studentLifeSlider .swiper-container', {
        slidesPerView: 1,
        spaceBetween: 10,
        navigation: {
            nextEl: '#studentLifeSlider .swiper-button-next',
            prevEl: '#studentLifeSlider .swiper-button-prev',
        },
        pagination: {
            el: '#studentLifeSlider .swiper-pagination',
            clickable: true,
        },
    });
</script>
</body>
</html>