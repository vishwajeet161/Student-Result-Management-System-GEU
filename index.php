<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=7" />

    <link
      rel="shortcut icon"
      href="assets/logo and favicon/University-Logo11.png"
      type="image/x-icon"
    />

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />

    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="./css/navbar.css" />

    <link rel="stylesheet" href="./css/index.css" />

    <link rel="stylesheet" href="./css/footer.css" />
    
    <style>
    .navbar-toggler-icon {
    display: inline-block;
    width: 1.5em;
    height: 1.5em;
    vertical-align: middle;
    content: "";
    background: no-repeat center center;
    background-size: 100% 100%;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.5%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }
    </style>

    <title>GEU - Graphic Era University | Best University in Uttrakhand India - Placements</title>
  </head>

  <body>

    <nav class="navbar navbar-expand-lg" style="background-color: #ffffff !important;">
      <a class="navbar-brand" href="./index.php">
        <img
          class="logo-one"
          src="./assets/logo and favicon/GEU.png"
          alt="Navbar logo"
        />
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="true"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon" ></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="./index.php" style="background-color:red">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" style="background-color:red" href="./service-pages/result-form.php"
              >Result</a
            >
          </li>

          <li class="nav-item">
            <a class="nav-link" style="background-color:red" href="#about">About Us</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" style="background-color:red" href="#contact">Contact Us</a>
          </li>

          <li class="nav-item dropdown">
            <a
              class="nav-link btn btn-primary"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <span>Login Here</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="./service-pages/admin-login.php"
                >As Admin</a
              >
              <a class="dropdown-item" href="./php/logout.php"
                >Logout</a
              >

            </div>
          </li>
        </ul>
      </div>
    </nav>

    <div style="padding: 3.4rem;" class="space"></div>

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="./assets/images/GEU-Main-Building.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./assets/images/header-image-1.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./assets/images/GEU_cover3.jpg" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./assets/images/GEU_cover4.jpg" alt="Fourth slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>



    <section id="about">
        <h1 class="heading">About Us</h1>

        <h5 class="about-text text-center" style="background-color:red">
            GEU stands tall as a leading university in India, ranked amongst the top 55 Universities of the country and as an abode of learning and excellence, setting new benchmarks in all parameters of assessment like teaching, learning, research, graduation outcome, outreach, industrial presence and more, for Indian Institutions of higher education.
        </h5>
    </section>

    <h1 class="heading">Our Association</h1>

    <section class="assocaition">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-6">
                    <img  src="./assets/association/0-4.png" alt="association-1">
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <img src="./assets/association/bannerlogo.png" alt="association-2">
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <img src="./assets/association/amazon-logo.jpg" alt="association-3">
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <img src="./assets/association/download-10.png" alt="association-4">
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <img src="./assets/association/0-12.png" alt="association-5">
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <img src="./assets/association/download-16.png" alt="association-6">
                </div>
            </div>
        </div>
    </section>


    <div class="parallax1">
        <h5 class="about-text-2 text-center">
            The mission of the university is to promote learning in true spirit and offering knowledge and skills in order to succeed as professionals. The university aims to distinguish itself as a diverse, socially responsible learning community with a high quality scholarship and academic rigor.
        </h5>
    </div>

    <h1 class="heading">Distinguished Faculty</h1>

    <section id="testimonials" style="background-color:red">
      <div id="testimonial-carousel" class="carousel slide" data-ride="false">
        <div class="carousel-inner">
          <div class="carousel-item active container-fluid">
            <img class="testimonial-img" src="./assets/faculty/image-24.png" alt="Prof. Kamal Ghanshala">
            <h4 class="testimonial-name">Prof. Kamal Ghanshala</h4>
            <h5>
                President <br/> Graphic Era Group of Institutions
            </h5>
            <h5 class="testimonial-text text-center">
                We strive to create a learning environment for students where they unfold their potential and closely interact with the practitioners from the corporate world
            </h5>
          </div>
          <div class="carousel-item container-fluid" >
            <img class="testimonial-img" src="./assets/faculty/r-k-khanduja-sir.jpg" alt="Dr. S. R. Khanduja">
            <h4 class="testimonial-name">Dr. S. R. Khanduja</h4>
            <h5>
                Chancellor <br/> Graphic Era (Deemed to be University)
            </h5>
            <h5 class="testimonial-text text-center">
             GEU focuses not only on world-class education, but provides an experience to groom students as value-driven human beings, competent professionals and future leaders.
            </h5>
          </div>
          <div class="carousel-item container-fluid">
            <img class="testimonial-img" src="./assets/faculty/Prof-Narpinder-Singh.jpg" alt="Prof Narpinder Singh">
            <h4 class="testimonial-name">Prof Narpinder Singh</h4>
            <h5>
                 Vice Chancellor <br/> Graphic Era (Deemed to be University)
            </h5>
            <h5 class="testimonial-text text-center">
                GEU focuses not only on world-class education, but provides an experience to groom students as value-driven human beings, competent professionals and future leaders.
            </h5>
          </div>
          <div class="carousel-item container-fluid">
            <img class="testimonial-img" src="./assets/faculty/devesh-pratap-singh.jpg" alt="Devesh Pratap Singh">
            <h4 class="testimonial-name">Devesh Pratap Singh</h4>
            <h5>
                Professor and HOD CSE <br/> Graphic Era (Deemed to be University) 
            </h5>
            <h5 class="testimonial-text text-center">
                 GEU focuses not only on world-class education, but provides an experience to groom students as value-driven human beings, competent professionals and future leaders.
            </h5>
          </div>
          <a class="carousel-control-prev" href="#testimonial-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#testimonial-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
    </section>

    <footer id="contact">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <a href="./index.php">
                <img
                  class="logo2"
                  src="./assets/logo and favicon/University-Logo11.png"
                  alt="logo2"
                />
              </a>
              <p class="content1">
                Graphic Era Deemed to be University is the culmination of the hard work of its visionary founder, Prof. (Dr.) Kamal Ghanshala, who had the dream to change the destiny of thousands of youths through quality and holistic education. In 1993, he embarked on the mission to transform the higher education landscape of the Doon Valley with twenty-nine thousand rupees in his pocket and loads of determination and tenacity in his heart, and started off with Graphic Era Computer Centre, developing software and delivering trainings on Computer Graphics. His vision gained concrete shape in 1997 in the form of Graphic Era Institute of Technology (GEU).
                 <br /><br />
              </p>
            </div>

            <div class="col-lg-4 col-md-6">
              <h6 class="content2">CONTACT US</h6>
              <div class="social-icons">
                <a
                  class="icon-link"
                  href="https://www.facebook.com/GEUOfficial/"
                  ><i class="fa fa-facebook" aria-hidden="true"></i
                ></a>
                <a class="icon-link" href="https://www.instagram.com/geuofficial/"
                  ><i class="fa fa-instagram" aria-hidden="true"></i
                ></a>
                <a class="icon-link" href="https://twitter.com/GraphicEraUni"
                  ><i class="fa fa-twitter" aria-hidden="true"></i
                ></a>
                <a
                  class="icon-link"
                  href="https://linkedin.com/school/graphic-era-official"
                  ><i class="fa fa-linkedin" aria-hidden="true"></i
                ></a>
                <a
                  class="icon-link"
                  href="https://www.youtube.com/@GraphicEraOfficial"
                  ><i class="fa fa-youtube" aria-hidden="true"></i
                ></a>

                <br /><br />
                <p class="contact-details">
                  <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;
                  <a href="mailto:enquiry@geu.ac.in" style="color:#fff; text-decoration: none;"> enquiry@geu.ac.in</a>
                  <br /><br />
                  <i class="fa fa-phone" aria-hidden="true"></i> &nbsp;
                  tel:1800 890 6027, 1800 270 1280<br /><br />
                  <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;
                  566/6, Bell Road, Society Area, Clement Town, Dehradun, Uttarakhand PIN :248002
                </p>
              </div>
            </div>

            <div class="col-lg-4 mt-3">
              <h4>Graphic Era University, Dehradun</h4>
              <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3445.8933156681205!2d77.99226727641556!3d30.26862077481148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39092b9451ae8dfd%3A0xf39c46d34a152faa!2sGraphic%20Era%20(Deemed%20to%20be%20University)!5e0!3m2!1sen!2sin!4v1689178326244!5m2!1sen!2sin" width="440" height="440" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </div>
            </div>
          </div>
        </div>

        <div class="footer2">
          Graphic Era University&nbsp;&copy;&nbsp;2023 All Rights Reserved.
        </div>
      </div>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="./javascript/index.js"></script>
   

  </body>
</html>
