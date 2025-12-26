<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'popins', sans-serif;
        }

        html,
        body {
            height: 100%;
        }

        body {
            background-color: #f5efef;

            display: flex;
            flex-direction: column;
        }

        .content {
            flex: 1;
        }

        header {
            background-color: #008489;
            height: 66px;
        }

        header * {
            color: #fff;
        }

        .btn {
            padding: 0.5rem 1rem !important;
            background: #006669;
            color: white;
            border: 1px solid transparent;
            border-radius: 0.25rem;
        }

        .btn-big {
            padding: 0.7rem 1.3rem;
            line-height: 1.2em;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .btn:hover {
            color: white !important;
            background-color: #005255;
        }

        .text-input {
            padding: 0.7rem 1rem;
            display: block;
            width: 100%;
            border-radius: 5px;
            outline: none;
            color: #444;
            font-size: 1.2em;
            border: 1px solid #e0e0e0;
            line-height: 1.5rem;
        }

        header .logo {
            float: left;
            height: inherit;
            margin-left: 2em;
        }

        header .logo-text {
            padding-top: 5px;
            margin: 9px;
            font-size: 30px;
            font-weight: 800;
        }

        header .logo-text span {
            color: #05f7ff;
        }

        header ul {
            float: right;
            margin: 0px;
            padding: 0px;
            padding-right: 20px;
            list-style: none;
        }

        header ul li {
            float: left;
            position: relative;
        }

        header ul li a {
            display: block;
            padding: 21px;
            font-size: 1.1em;
            text-decoration: none;
        }

        header ul li:hover {
            background: #006669;
            transition: 0.5s;
        }

        header .menu-toggle {
            display: none;
        }

        header ul li ul {
            position: absolute;
            top: 66px;
            right: 0px;
            width: 180px;
            display: none;
            z-index: 88888;
        }

        header ul li:hover ul {
            display: block;
        }

        header ul li ul li {
            width: 100%;
        }

        header ul li ul li a {
            padding: 10px;
            color: #444;
            background-color: #fff;
        }

        header ul li ul li a:hover {
            background: #d5d6d6;
        }

        .logout {
            color: red;
        }

        /* slider */

        .slidersection h1 {
            padding: 20px 0px 0px 20px;
            text-align: center;
            font-size: 40px;
        }

        .slider {
            width: 85%;
            margin: 50px auto 0px auto;
        }

        .slider .post {
            background: #fff;
            border-radius: 6px;
            overflow: hidden;
            height: 330px;
            margin: auto 15px;
        }

        .slider .post img {
            height: 200px;
            width: 100%;
            object-fit: cover;
            display: block;
        }

        .prev,
        .next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 30px;
            color: #006669;
            z-index: 10;
            cursor: pointer;
        }

        .prev {
            left: 10px;
        }

        .next {
            right: 10px;
        }

        .post-info {
            height: 130px;
            padding: 10px 15px;
        }

        .post-info h4 a {
            text-decoration: none;
            font-size: 20px;
            color: inherit;
        }

        .post-info i,
        span {
            margin-top: 12px;
            padding-left: 10px;
        }

        /* main content */
        .content {
            display: flex;
            width: 90%;
            margin: 10px auto;
            gap: 50px;
        }

        .main-content {
            flex: 0 0 66%;
            height: auto;
            margin-top: 12px;
        }

        .content .main-content .recent-post-title {
            margin: 20px;
            font-weight: 2000;
        }

        .main-content .recent-post {
            display: flex;
            height: 270px;
            width: 100%;
            margin: 12px auto;
            border-radius: 5px;
            background-color: #fff;
        }

        .main-content .recent-post img {
            height: 100%;
            width: 40%;
            border-radius: 5px;
        }

        .content .main-content .recent-post .post-preview {
            width: 60%;
            padding: 10px;
            position: relative;
        }

        .content .main-content .recent-post .post-preview h1 {
            font-size: 35px;
        }

        .content .main-content .recent-post .post-preview a {
            text-decoration: none;
            padding: 10px 0px;
            margin-bottom: 10px;
            color: inherit;
        }

        .content .main-content .recent-post .post-preview i,
        span {
            margin: 10px auto;
        }

        .content .main-content .recent-post .post-preview a:hover {
            color: #006669;
        }

        .content .main-content .recent-post .post-preview .preview-text {
            padding: 10px 0px;
            overflow-wrap: anywhere;
            word-break: break-word;

        }

        .content .main-content .recent-post .read-more {
            position: absolute;
            bottom: 10px;
            right: 10px;
            border: 1px solid #006669;
            background: transparent;
            border-radius: 0px;
            color: #006669 !important;
        }

        .content .main-content .recent-post .read-more:hover {
            background-color: #006669;
            color: white !important;
            transition: 0.25s;
        }

        /* sidebar */
        .sidebar {
            flex: 0 0 29%;
            height: auto;
        }

        .content .sidebar .section {
            background: white;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .content .sidebar .section.search {
            margin-top: 90px;
        }

        .content .sidebar .section.topics ul {
            margin: 0px;
            padding: 0px;
            list-style: none;
            border-top: 1px solid #e0e0e0;
        }

        .content .sidebar .section .section-title {
            margin: 10px 0px 10px 0px;
        }

        .content .sidebar .section.topics ul li a {
            border-bottom: 1px solid #e0e0e0;
            padding: 10px 0px 15px 0px;
            display: block;
            transition: all 0.3s;
        }

        .content .sidebar .section.topics ul li a:hover {
            padding-left: 10px;
            transition: all 0.3s;
        }

        /* footer */

        .footer {
            background: #303036;
            color: #d3d3d3;

            position: relative;
            bottom: 0px;
        }

        .footer .footer-content {
            height: 350px;
            display: flex;
            padding-left: 20px;
        }

        .footer .footer-content .footer-section {
            flex: 1;
            padding: 25px;
        }

        .footer .footer-content h1,
        .footer .footer-content h2 {
            color: white;
        }

        .footer .footer-content .about h1 span {
            color: #05f7ff;
        }

        .footer .footer-content .about p {
            margin-top: 20px;
            margin-left: 10px;
            margin-bottom: 10px;
        }

        .footer .footer-content .about .contact span {
            display: block;
            font-size: 1.1em;
            margin-bottom: 8px;
            margin-left: 10px;
        }

        .footer .footer-content .about .socials {
            margin-top: 15px;
            margin-left: 10px;
        }

        .footer .footer-content .about .socials a {
            border: 1px solid gray;
            width: 45px;
            height: 41px;
            padding-top: 10px;
            margin-right: 5px;
            text-align: center;
            display: inline-block;
            font-size: 1.3em;
            border-radius: 5px;
            transition: all 0.3s;
        }

        .footer .footer-content .about .socials a:hover {
            border: 1px solid white;
            color: white;
            transition: all 0.3s;
        }

        .footer .footer-content .links ul a {
            display: block;
            margin-bottom: 10px;
            font-size: 1.2em;
            margin-left: 40px;
            transition: all 0.3s;
        }

        .footer .footer-content .links ul a:hover {
            color: white;
            margin-left: 15px;
            transition: all 0.3s;
        }

        .footer .footer-content .contact-form .contact-input {
            background: #272727;
            color: #bebdbd;
            margin-bottom: 10px;
            line-height: 1.5rem;
            padding: 0.9rem 1.4rem;
            border: none;
        }

        .footer .footer-content .contact-form .contact-input:focus {
            background: #1a1a1a;
        }

        .footer .footer-content .contact-form .contact-btn {
            float: right;
        }

        .footer .footer-bottom {
            background-color: #343a40;
            color: #686868;
            height: 50px;
            text-align: center;
            width: 100%;
            bottom: 0px;
            left: 0px;
            padding-top: 20px;
        }

        /* RESPONSIVE */
        @media only screen and (min-width: 993px) {

            .content {
                max-width: 1200px;
                margin: 20px auto;
            }

            .slider {
                width: 80%;
            }

            .main-content .recent-post {
                height: 270px;
            }


        }

        @media only screen and (min-width: 701px) and (max-width: 992px) {


            header {
                height: 66px;
            }

            header .logo {
                margin-left: 15px;
            }

            header .logo-text {
                font-size: 22px;
                margin: 12px 5px;
                white-space: nowrap;
            }

            header ul {
                display: flex;
                align-items: center;
                padding-right: 10px;
            }

            header ul li {
                float: none;
            }

            header ul li a {
                padding: 18px 10px;
                font-size: 0.9rem;
                white-space: nowrap;
            }

            header ul li ul {
                top: 66px;
            }

            header .menu-toggle {
                display: none;
            }

            .content {
                width: 95%;
                gap: 30px;
            }

            .main-content {
                flex: 0 0 60%;
            }

            .sidebar {
                flex: 0 0 35%;
            }

            .main-content .recent-post {
                height: auto;
            }

            .recent-post h3,
            .recent-post h4 {
                font-size: 1rem;
            }

            .recent-post p {
                font-size: 0.85rem;
                line-height: 1.4;
            }

            .recent-post .date {
                font-size: 0.75rem;
            }

            .post-preview h3,
            .post-preview h4 {
                font-size: 1rem;
            }

            .post-preview p {
                font-size: 0.85rem;
                line-height: 1.4;
            }

            .content .main-content .recent-post .read-more {
                position: static;
                margin-top: 12px;
                display: inline-block;
            }




            .main-content .recent-post img {
                width: 45%;
            }

            .content .main-content .recent-post .post-preview {
                width: 55%;
            }

            .footer-content {
                padding: 40px 20px;
                gap: 20px;
            }

            .footer-section {
                flex: 1;
            }

            .footer-section h2,
            .footer-section h3 {
                font-size: 18px;
            }

            .footer-section p,
            .footer-section ul li a {
                font-size: 14px;
                line-height: 1.6;
            }

            .footer-section ul li {
                margin-bottom: 8px;
            }

            .footer-bottom {
                font-size: 13px;
                padding: 12px;
            }

            .footer .socials {
                display: flex;
                flex-wrap: wrap;
                gap: 10px;
            }

            .logo-text p {
                display: none;
            }

            .footer .socials a {
                width: 38px;
                height: 38px;
                font-size: 1.1em;
                padding-top: 8px;
            }
        }

        @media only screen and (max-width: 700px) {
            header {
                position: relative;
            }

            header .menu-toggle {
                display: block;
                position: absolute;
                right: 20px;
                top: 18px;
                font-size: 24px;
                cursor: pointer;
            }

            header ul.nav {
                position: fixed;
                top: 66px;
                right: -100%;
                width: 220px;
                height: calc(100vh - 66px);
                background: #006669;
                display: block;
                transition: right 0.3s ease;
                padding-top: 20px;
                z-index: 9999;
            }

            header ul.nav.active {
                right: 0;
            }

            header ul.nav li {
                float: none;
                width: 100%;
                text-align: left;
            }

            header ul.nav li a {
                padding: 15px 20px;
                display: block;
            }

            header ul.nav li ul {
                position: static;
                background: #005255;
                display: none;
            }

            header ul.nav li:hover ul {
                display: none;
            }

            header ul.nav li.active ul {
                display: block;
            }

            .prev,
            .next {
                display: none !important;
            }

            .content {
                flex-direction: column;
                width: 95%;
                gap: 30px;
            }

            .main-content,
            .sidebar {
                flex: 100%;
                width: 100%;
            }

            .main-content .recent-post {
                flex-direction: column;
                height: auto;
            }

            .main-content .recent-post img {
                width: 100%;
                height: 200px;
                border-radius: 5px 5px 0 0;
                object-fit: cover;
            }

            .content .main-content .recent-post .post-preview {
                width: 100%;
                position: static;
                padding: 15px;
            }

            .content .main-content .recent-post .post-preview h1 {
                font-size: 22px;
            }

            .content .main-content .recent-post .preview-text {
                font-size: 15px;
                line-height: 1.5;
            }

            .content .main-content .recent-post .read-more {
                position: static;
                margin-top: 10px;
                display: inline-block;
            }

            .content .sidebar .section.search {
                margin-top: 0;
            }

            .footer .footer-content {
                height: auto;
                flex-direction: column;
                padding-left: 10px;
            }

            .footer .footer-content .footer-section {
                padding: 20px 15px;
            }

            .footer .footer-content .about p {
                margin-left: 0;
            }

            .footer .footer-content .about .contact span {
                margin-left: 0;
            }

            .footer .footer-content .about .socials {
                margin-left: 0;
            }

            .footer .footer-content .links ul a {
                margin-left: 0;
            }

            .footer .footer-content .contact-form .contact-btn {
                float: none;
                width: 100%;
            }

            .footer .footer-bottom {
                padding: 15px 10px;
                height: auto;
            }

            .btn {
                padding: 10px 15px !important;
                font-size: 14px;
            }

            .btn-big {
                padding: 12px 20px;
            }

            .text-input {
                font-size: 16px;
                padding: 10px;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">
            <div class="logo-text"><span>My</span> BLOG</div>
        </div>

        <i class="fa-solid fa-bars menu-toggle" onclick="toggleMenu()"></i>

        <ul class="nav" id="navLinks">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('blog.grid') }}">Blog</a></li>
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
        </ul>
    </header>
    <section class="slidersection">
        <h1>Trending post</h1>
        <i class="fas fa-arrow-left prev"></i>
        <i class="fas fa-arrow-right next"></i>
        <div class="slider">
            @foreach ($blogs as $blog)
            <div class="post">
                <img src="{{ asset('storage/' . $blog->image) }}" alt="">
                <div class="post-info">
                    <h4><a href="{{ route('blog.single', $blog->slug) }}">{{ $blog->title }}</a>
                    </h4>

                    <i class="fas fa-user"></i>
                    <span> {{ $blog->author }}</span>

                    &nbsp;

                    <i class="fas fa-calendar"></i>
                    <span>{{ $blog->created_at->format('Y-m-d') }}</span>


                </div>
            </div>
            @endforeach

        </div>
    </section>

    <section class="content">
        <div class="main-content">
            <h1 class="recent-post-title">Recent Posts</h1>
            @foreach ($latest as $post)
            <div class="recent-post">
                <img src="{{ asset('storage/' . $post->image) }}" alt="">
                <div class="post-preview">
                    <h1><a href="">{{ $post->title }}</a></h1>
                    <i class="fas fa-user"></i>
                    <span> {{ $post->author }}</span>

                    &nbsp;

                    <i class="fas fa-calendar"></i>
                    <span> {{ $post->created_at->format('M d, Y') }}</span>
                    <p class="preview-text">
                        {{ Str::limit(strip_tags($post->contents), 180) }}
                    </p>
                    <a href="{{ route('blog.single', $post->slug) }}" class="btn read-more">Read More</a>

                </div>
            </div>
            @endforeach


        </div>
        <div class="sidebar">
            <div class="section search">
                <h2 class="section-title">Search</h2>
                <form action="">
                    <input type="text" name="search-term" class="text-input" placeholder="Search">
                </form>
            </div>
            <div class="section topics">
                <h2 class="section-title">Topics</h2>
                <ul>
                    <li><a href="">Technology</a></li>
                    <li><a href="">Travel</a></li>
                    <li><a href="">Lifestyle</a></li>
                    <li><a href="">Education</a></li>
                    <li><a href="">Kids</a></li>
                    <li><a href="">Health</a></li>
                    <li><a href="">Biography</a></li>
                </ul>
            </div>
        </div>
    </section>



    <!-- footer -->
    <div class="footer">
        <div class="footer-content">
            <div class="footer-section about">
                <h1 class="logo-text"><span>My</span>Blog</h1>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt veniam similique corporis,
                    veritatis molestiae quasi temporibus numquam dolores cupiditate labore!
                </p>
                <div class="contact">
                    <span><i class="fas fa-phone"></i>&nbsp; 1234-6767</span>
                    <span><i class="fas fa-envelope"></i>&nbsp; Shiwa@1234</span>
                </div>
                <div class="socials">
                    <a href=""><i class="fab fa-facebook"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <div class="footer-section links">
                <h2>Quick Links</h2>
                <br>
                <ul>
                    <a href="">
                        <li>Blog</li>
                    </a>
                    <a href="">
                        <li>Dashboard</li>
                    </a>
                    <a href="">
                        <li>Singup</li>
                    </a>
                    <a href="">
                        <li>Events</li>
                    </a>
                    <a href="">
                        <li>Gallaries</li>
                    </a>
                    <a href="">
                        <li>Terms and condition</li>
                    </a>
                </ul>
            </div>
            <div class="footer-section contact-form">
                <h2>Contact us</h2>
                <form action="">
                    <input type="email" name="email" class="text-input contact-input"
                        placeholder="Your email Address....">
                    <textarea name="message" class="text-input contact-input" placeholder="Your message..."></textarea>
                    <button type="submit" class="btn btn-big contact-btn">
                        <i class="fas fa-envelope"></i>
                        Send
                    </button>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; Shiwanshu.com | Designed by Shiwanshu
        </div>
    </div>

    <!-- slick js -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
        const navLinks = document.getElementById('navLinks');

        function toggleMenu() {
            navLinks.classList.toggle('active');
        }

        $('.slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            nextArrow: $('.next'),
            prevArrow: $('.prev'),
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]


        });

    </script>

</body>

</html>