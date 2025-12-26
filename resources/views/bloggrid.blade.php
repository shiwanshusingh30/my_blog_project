<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
   <style>
           * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
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
.btn-parent{
    display: flex;
    justify-content:flex-end;
    padding:10px 10px;
    
}
.btn-grid{
    padding: 0.5rem !important;
    background: white;
  color: #006669;
  border: 1px solid #006669;
  border-radius: 0.25rem;
  transition: all 0.3s ;

}
.btn-grid:hover{
    background-color:#006669 ;
    color: white;
    transition:all 0.3s ;
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
#blog {
  width: 90%;
  margin: 0 auto;
}
.container {
  padding: 50px 20px;
}
.blog-title {
  text-align: center;
}
.blog-title h1 {
  font-size: 40px;
}
.blog-title p {
  font-size: 15px;
  margin: 10px 0;
}

.container .row {
  margin-top: 40px;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 30px;
  justify-content: start;
}
.container .row .col {
  background: aliceblue;
  border-radius: 5px;
}
.container .row .col:hover img {
  transform: scale(1.04);
  transition: all 0.5s ease-in;
}

.container .row .col img {
  width: 100%;
  height: 250px;
  object-fit: cover;
  transition: all 0.5s ease-in;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}

.container .row .col .date {
  background-color: #000;
  color: #fff;
  padding: 2px 20px;
  width: 125px;
  font-size: 14px;
  text-align: center;
  margin-top: 20px;
}
.container .row .col a {
  text-decoration: none;
}
.container .row .col a h4 {
  font-size: 18px;
  color: #000;
  margin: 12px 8px;
}
.container .row .col a h4:hover {
  color: rgb(199, 12, 12);
}
.container .row .col p {
  margin: 10px 6px;
  font-size: 14px;
    word-wrap: break-word;
  overflow-wrap: break-word;
  word-break: break-word;

}
.paginate{
  display: flex;
  justify-content: center;
  align-items: center;
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

/* pagination */
.pagination-wrapper {
    display: flex;
    justify-content: center; 
    align-items:center;
    margin-top: 30px;
}

.pagination-wrapper ul {
    display: flex;
    gap: 5px;
    list-style: none;
    padding: 0;
}

.pagination-wrapper li {
    padding: 5px 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.pagination-wrapper li.active {
    background-color: #006669;
    color: white;
}

.pagination-wrapper li.disabled {
    color: #aaa;
    cursor: not-allowed;
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