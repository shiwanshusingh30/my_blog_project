<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">

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
    <script src="{{ asset('js/home.js') }}"></script>
    

</body>

</html>