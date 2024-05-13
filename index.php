<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8" />
    <title>Solusi Pelanggan Sukses</title>
    <link rel="stylesheet" href="style/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    />
  </head>
  <body>
    <section class="header">
      <nav>
        <a href="index.html"><img src="image/rating.png" alt="" /></a>
        <div class="nav-links" id="navLinks">
          <i class="bx bx-x" onclick="hideMenu()"></i>
          <ul>
            <li><a href="">Home</a></li>
            <li><a href="#Galeri">Galeri</a></li>
            <li><a href="#about-us">About Us</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="register.html">Register</a></li>
          </ul>
        </div>
        <i class="bx bx-menu" onclick="showMenu()"></i>
      </nav>
      <div class="text-box">
        <h1>Solusi Pelanggan Sukses</h1>
        <p>Membantu Anda Menjadi Lebih Baik</p>
        <div class="new-section" id="modal-section">
          <button class="show-modal">Untuk Informasi Lebih Lanjut</button>
          <div class="overlay"></div>
          <div class="modal-box">
            <i class="fa-solid fa-info"></i>
            <h2>Info</h2>
            <h3>Ini Paundra wleee!</h3>

            <div class="buttons">
              <button class="close-btn">Ngoke</button>
              <button>Lanjut</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal Box -->
    </section>

    <!-- Testimonials -->

    <div class="hero">
      <h1>Testimonials</h1>
      <div class="container">
        <div class="testimonial">
          <div class="slide-row" id="slide">
            <div class="slide-col">
              <div class="user-text">
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga,
                  dignissimos!
                </p>
                <h3>Anonim</h3>
                <p>Lorem, ipsum dolor.</p>
              </div>
              <div class="user-img">
                <img src="image/hacker256px.png" alt="" />
              </div>
            </div>
            <div class="slide-col">
              <div class="user-text">
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga,
                  dignissimos!
                </p>
                <h3>Anonim2</h3>
                <p>Lorem, ipsum dolor.</p>
              </div>
              <div class="user-img">
                <img src="image/hacker256px.png" alt="" />
              </div>
            </div>
            <div class="slide-col">
              <div class="user-text">
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga,
                  dignissimos!
                </p>
                <h3>Anonim3</h3>
                <p>Lorem, ipsum dolor.</p>
              </div>
              <div class="user-img">
                <img src="image/hacker256px.png" alt="" />
              </div>
            </div>
            <div class="slide-col">
              <div class="user-text">
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga,
                  dignissimos!
                </p>
                <h3>Anonim3</h3>
                <p>Lorem, ipsum dolor.</p>
              </div>
              <div class="user-img">
                <img src="image/hacker256px.png" alt="" />
              </div>
            </div>
          </div>
        </div>
        <div class="indicator">
          <span class="btn active"></span>
          <span class="btn"></span>
          <span class="btn"></span>
          <span class="btn"></span>
        </div>
      </div>
    </div>

    <!-- About Us + Contact -->

    <section class="about-us" id="about-us">
      <h1>About Us</h1>
      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi eligendi
        tempora deserunt. Vel tempora expedita maiores laudantium accusamus
        iusto, eum minus sunt! Aut magnam nemo accusamus earum impedit delectus
        quisquam?
      </p>
      <a href="" class="hero-btn">CONTACT US</a>
    </section>

    <!-- Footer -->

    <section class="footer">
      <h4>© 2024 Solusi Pelanggan Sukses. Semua hak dilindungi.</h4>
      <div class="icons">
        <i class="bx bxl-facebook"></i>
        <i class="bx bxl-instagram"></i>
        <i class="bx bxl-linkedin"></i>
      </div>
    </section>

    <!-- Javascript -->
    <script src="javascript/script.js"></script>
  </body>
</html>