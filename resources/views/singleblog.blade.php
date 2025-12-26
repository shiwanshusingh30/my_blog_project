<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog</title>
  <link rel="stylesheet" href="style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"> -->

  <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      font-family: 'popins',sans-serif;
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

    .content {
      display: flex;
      gap: 1rem;
      background-color: #f5f5f5;
    }

    .main-content {
      width: 67%;
      margin-top: 30px;
      height: auto;
      background-color: #fff;
      margin-bottom: 30px;
    }

    .sidebar {
      width: 30%;
      height: auto;
      background-color: #f3f4f6;
    }

    .main-content .single-post {
      height: auto;
      width: 100%;
      padding-bottom: 20px;
    }

    .main-content h1 {
      padding: 10px 0px;
      font-size: 45px;
      text-align: center;
    }

    .main-content .single-post img {
      width: 40%;
      height: 250px;
      margin-top: 30px;
      margin-left: 320px;
      border-radius: 5px;
    }

    .main-content .single-post .icon {
      text-align: center;
      padding: 5px 20px;
      font-size: 20px;
      margin: 20px auto 30px auto;
    }

    .main-content .single-post .icon span {
      margin: 0px 40px;
    }

    .main-content .single-post .show-content {
      width: 80%;
      margin: auto;
    }

    .main-content .single-post .show-content p {
      font-size: 20px;
      overflow-wrap: anywhere;
      word-break: break-word;
    }

    .related {
      margin-top: 30px;
      background-color: #fff;
    }

    .related h1 {
      font-size: 40px;
      padding: 15px 20px;
    }

    .related-post {
      height: 100px;
      width: 95%;
      display: flex;
      background-color: #f3f4f6;

      border: 1px solid #e5e7eb;
      border-radius: 8px;

      position: relative;
      margin: 10px;
      padding: 12px;

      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }

    .related-post h3:hover {
      color: #006669;
      transition: all 0.3s;
    }

    .related-post img {
      width: 25%;
      height: 100%;
      border-radius: 3px;
    }

    .related-post .related-title {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      margin: 0px 30px;
      padding: 10px 10px 8px 10px;
    }

    .related-post .related-title .related-icon a {
      position: absolute;
      background-color: #fff;
      border: 1px solid #006669;
      color: #006669;
      bottom: 5px;
      right: 5px;
    }

    .related-post .related-title .related-icon a:hover {
      background-color: #006669;
      color: #fff;
    }

    .sidebar .topics {
      width: 100%;
      margin: 30px auto;
      padding: 10px 20px;
      background: white;
      border-radius: 5px;
    }

    .sidebar .topics h2 {
      font-size: 40px;
      padding: 0px 10px 20px 20px;
      border-bottom: 1px solid #bebdbd;
    }

    .sidebar .topics ul {
      list-style: none;
      padding-left: 20px;
    }

    .sidebar .topics ul li {
      padding: 15px 0px;

      border-bottom: 1px solid #bebdbd;
    }

    .sidebar .topics ul li a {
      padding-left: 20px;
      display: block;
      transition: all 0.3s;
    }

    .sidebar .topics ul li a:hover {
      padding-left: 40px;
      transition: all 0.3s;
    }

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

    @media (min-width: 776px) and (max-width: 900px) {

      .content {
        gap: 1rem;
      }

      .main-content {
        width: 65%;
        margin-top: 20px;
      }

      .sidebar {
        width: 33%;
      }


      .main-content h1 {
        font-size: 32px;
      }


      .main-content .single-post img {
        width: 60%;
        height: auto;
        margin: 20px auto;
        display: block;
      }


      .main-content .single-post .icon {
        font-size: 16px;
      }


      .main-content .single-post .show-content p {
        font-size: 17px;
        line-height: 1.6;
      }


      .related h1 {
        font-size: 30px;
      }

      .related-post {
        height: auto;
        padding: 10px;
      }

      .related-post h3 {
        font-size: 18px;
      }

      .related-post .related-title .related-icon {
        margin-top: 12px;
      }


      .related-post .related-title .related-icon a {
        position: static;
        margin-top: 10px;
        display: inline-block;

        padding: 6px 14px;
      }
    }


    @media only screen and (max-width: 775px) {

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


      .content {
        flex-direction: column;
        gap: 0;
      }

      .main-content,
      .sidebar {
        width: 100%;
        margin-top: 15px;
        margin-bottom: 15px;
      }

      .main-content h1 {
        font-size: 28px;
        padding: 15px 10px;
      }

      .main-content .single-post img {
        width: 90%;
        height: auto;
        margin: 20px auto;
        display: block;
        margin-left: auto;
        margin-right: auto;
      }

      .main-content .single-post .icon {
        font-size: 16px;
        padding: 5px 10px;
      }

      .main-content .single-post .icon span {
        margin: 0 10px;
        display: inline-block;
      }

      .main-content .single-post .show-content {
        width: 95%;
      }

      .main-content .single-post .show-content p {
        font-size: 16px;
        line-height: 1.6;
      }

      .related h1 {
        font-size: 24px;
        padding: 15px 10px;
      }

      .related-post {
        height: auto;
        flex-direction: column;
        width: 95%;
        margin: 10px auto;
        padding: 15px;
      }

      .related-post img {
        width: 100%;
        height: 180px;
        margin-bottom: 15px;
      }

      .related-post .related-title {
        margin: 0;
        padding: 0;
      }

      .related-post .related-title h3 {
        font-size: 18px;
        margin-bottom: 10px;
      }

      .related-post .related-title .related-icon {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 10px;
      }

      .related-post .related-title .related-icon a {
        position: static;
        padding: 8px 15px;
      }

      .sidebar .topics {
        margin: 20px auto;
        padding: 15px;
      }

      .sidebar .topics h2 {
        font-size: 24px;
        padding: 0 0 15px 0;
      }

      .sidebar .topics ul {
        padding-left: 10px;
      }

      .sidebar .topics ul li a {
        padding-left: 10px;
      }

      .sidebar .topics ul li a:hover {
        padding-left: 20px;
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
      <li><a href="{{ route('blog.store') }}">New Blog</a></li>
      <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
    </ul>
  </header>

  <section class="content">
    <div class="main-content">
      <h1>{{ $blog->title }}</h1>
      <div class="single-post">
        <img src="{{ asset('storage/' . $blog->image) }}" alt="">
        <div class="icon">
          <span> <i class="fas fa-user"></i>
            {{ $blog->author }}</span>

          &nbsp;

          <span><i class="fas fa-calendar"></i>
            {{ $blog->created_at->format('Y-m-d') }}</span>
        </div>

        <div class="show-content">
          <p>{{ $blog->contents }}</p>
        </div>

      </div>
    </div>
    <div class="sidebar">
      <div class="related">
        <h1>Related Blog</h1>
        @foreach ($related as $post)
          <div class="related-post">
            <img src="{{ asset('storage/' . $post->image) }}" alt="">
            <div class="related-title">
              <h3>{{ $post->title }}</h3>

              <div class="related-icon">
                <span> <i class="fas fa-user"></i> {{ $post->author }}</span>
                &nbsp;

                <a href="{{ route('blog.single', $post->slug) }}" class="btn read-more">View</a>
              </div>

            </div>
          </div>
        @endforeach
      </div>

      <div class="topics">
        <h2>Category</h2>
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
          <input type="email" name="email" class="text-input contact-input" placeholder="Your email Address....">
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
  </script>

</body>

</html>