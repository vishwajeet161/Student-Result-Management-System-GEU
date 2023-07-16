<?php
session_start();
if(!$_SESSION['username']){
echo "<script>alert('You are not logged in');</script>";
echo "<script>window.open('../index.php', '_self');</script>";
}
?>

<html>
  <head>
    <title>Graphic Era University - Student Result Management System</title>
  </head>

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=7" />
  <link
    rel="shortcut icon"
    href="../assets/logo and favicon/University-Logo11.png"
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

  <link rel="stylesheet" href="../css/navbar.css" />

  <link rel="stylesheet" href="../css/common-navbar-style.css" />

  <link rel="stylesheet" href="../css/footer.css" />

  <style>
    form {
      margin: 2% 15%;
    }

    @media (max-width: 767px) {
      form {
        margin: 5%;
      }
    }
    #add{
    text-decoration: none;
    cursor: pointer;
    padding : 15px;
    margin-left :100px;
    margin-top:110px;
    margin-bottom:50px;
    background:red;
    color:white;
    
    }
    #manage{
    padding : 15px;
    margin-left :550px;
    margin-top:110px;
    margin-bottom:50px;
    background:red;
    color:white;
    }
  </style>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #ffffff !important;">
      <a class="navbar-brand" href="../index.php">
        <img
          class="logo-one"
          src="../assets/logo and favicon/University-Logo11.png"
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
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" style="background-color:red" href="../php/changepassword.php">Change Password</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" style="background-color:red" href="../index.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" style="background-color:red" href="../service-pages/result-form.php">Result</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" style="background-color:red" href="../index.php#about">About Us</a>
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
              <span>Login</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="../service-pages/admin-login.php"
                >As Admin</a
              >
              <a class="dropdown-item" href="../php/logout.php">Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <h1 class="head text-center">
       <?php  if ($_SESSION['username']) {
        echo "Welcome ".$_SESSION['username'];
        }
    ?>
    </h1>
    <div class= "container">
    <a href = "../service-pages/admin-exam-details-upload.php"><button id = "add">ADD Students</button></a>
    <a href = "../php/manage_results.php"><button id = "manage">Manage Students</button></a><br/><br/>
    </div>
    <?php
    $con = mysqli_connect('localhost', 'root', '', 'student result management system', '3308');
        if ($con == false) {
            echo "Error in connection";
        } else {
            $sql = "SELECT `name`, `section`, `regno` FROM `student_info`";
            $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result) > 0) {
            echo "<h2 align = 'center' style='color:red'>Student's Detail</h2><br>";
               echo "<table class = 'table'>
                <tr>
                <th>#</th>
                <th>NAME</th>
                <th>REGISTRATION NUMBER</th>
                <th>SECTION</th>
                </tr>";
                $cnt=1;
                while($row = mysqli_fetch_array($result))
                  {
                    echo "<tr>";
                    echo"<td>$cnt</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['regno'] . "</td>";
                    echo "<td>" . $row['section'] . "</td>";
                    echo "</tr>";
                 $cnt++; }

                echo "</table>";
            } else {
                echo "0 Students";
            }
}
        ?>
    <footer id="contact">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <a href="../index.php">
                <img
                  class="logo2"
                  src="../assets/logo and favicon/University-Logo11.png"
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
               <!-- <a
                  class="icon-link"
                  href="https://api.whatsapp.com/send?phone=77357 45535&amp;text=I%20want%20to%20know%20more%20about%20GIET University%20%20%20"
                  ><i class="fa fa-whatsapp" aria-hidden="true"></i
                ></a> -->

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

    <script src="../javascript/index.js"></script>

    <script src="../javascript/login-validation.js"></script>
  </body>
</html>
