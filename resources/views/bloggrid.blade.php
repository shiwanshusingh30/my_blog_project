<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/grid.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
 
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

  <section id="blog">
    <div class="container">
      <div class="blog-title">
        <h1>Latest From Our blog</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur corrupti molestias recusandae
          nesciunt ut provident, sapiente suscipit animi voluptatibus eveniet!</p>
      </div>
      <div class="row">
        @foreach ($blogs as $blog)
          <div class="col">
            <div class="image">
              <img src="{{ asset('storage/' . $blog->image) }}" alt="">
            </div>
            <p class="date">{{ $blog->created_at->format('M d, Y') }}</p>
            <a href="">
              <h4>{{ $blog->title }}</h4>
            </a>
            <p>{{ Str::limit($blog->contents, 100) }}</p>
            <div class="btn-parent">
              <a href="{{ route('blog.single', $blog->slug) }}" class="btn-grid ">View More</a>
            </div>


          </div>
        @endforeach

      </div>
      <!-- Pagination links -->
      <div class="pagination-wrapper">
        {{ $blogs->links('pagination::simple-default') }}
      </div>
    </div>
  </section>


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
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="{{ asset('js/home.js') }}"></script>


</body>

</html>