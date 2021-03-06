
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LinoopTek</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="./assets/img/logo2.png" rel="icon">
  <link href="./assets/img/logo2.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

 

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
   .img_p{ width:80px;
           height: 80px;
         }
  </style>


</head>

<body>

  <!-- ======= Header ======= -->
  
  <header id="header" class="fixed-top ">
    
    <div class="container d-flex align-items-center">
      
      <h1 class="logo me-auto"><a href="index.html">LinoopTek</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
        
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a id="pro" class="nav-link scrollto" href="dash.php">DashBoard</a></li>
         
          <li class="dropdown"><a href="#"><span>User Profile</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="" ><img class="img_p" class="img-fluid"   src="images1/<?php echo $_SESSION['user']['imgpath']; ?>" alt="profile pic"  /></a></li>
              <li><a href="#"><?php echo $_SESSION['user']['name']; ?></a></li>
              <li><a href="#"><?php echo $_SESSION['user']['mail']; ?></a></li>
              <li><a href="./logout.php">Log Out</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Lets Learn & Earn</h1>
          <h2>Job Oriented Training Program By Certified Industry Experts</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            
            <a href="./assets/video/linooptek.mp4" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Cliens Section ======= -->
    <section id="cliens" class="cliens section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section  id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              The LinoopTek training approach is based on real-world scenarios that coach Linoopies to face tackle and manage their responsibilities.
              We are committed to being a reliable source in computer education by anticipating and synchronizing the ever-growing demands of the IT industry across the globe. STEM education / hands on learning (from basics to latest technology).
            </p>
          
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Our mission is to equip Linoopies with all the tools and techniques that make technology an asset and provide cutting-edge IT knowledge.
            </p>
          
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3><strong>Why Linoop?</strong></h3>
              <p>
                Go beyond knowledge-to mastery, Let us help you get the skills that are in demand
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> More than 80% of companies use Linux <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      According to the latest 2020 report more than 80% of companies preferd linux as it gives more control, and is efficient.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Linoopies everywhere <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      With the help of Linooptek over 5000 students secure their jobs in multinational companies.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> 50,000+ open Linux positions <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                     Other than pakistan, there are plenty of jobs for Linux in US and USA every year.
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/skills.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>LinoopTek Skills</h3>
            <p class="fst-italic">
              We have certified professionals teaching each course we offer.
            </p>

            <div class="skills-content">

              <div class="progress">
                <span class="skill">Linux <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Cloud<i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">DevOps <i class="val">75%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Virtualization <i class="val">55%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Global dynamics are shifting. We'll help you adapt. Announcing new technology expert program to strengthen, scale, and protect IT ops.</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i  ><span class="iconify" data-icon="cib:linux" ></span></i></div>
              
              <h4><a href="">Linux</a></h4>
              <p>Linux fundamentals, Linux Administration, Linux Engineering</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i ><span class="iconify" data-icon="akar-icons:cloud" ></span></i></div>
              <h4><a href="">Cloud</a></h4>
              <p>AWS (Introduction to cloud computing & day to day cloud administration</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i ><span class="iconify" data-icon="ph:infinity-bold" ></span></i></div>
              <h4><a href="">DevOps</a></h4>
              <p>Ansible, Python, docker, Kubernetes</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i><span class="iconify" data-icon="carbon:virtual-machine" ></span></i></div>
              <h4><a href="">Virtualization</a></h4>
              <p>Introduction to virtual technology, installing, maintaining</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Helping you to Get the skills you want and employers need</h3>
            <p> The LinoopTek training approach is based on real-world scenarios that coach Linoopies to face, tackle and manage their day-to-day responsibilities. Our students will have the opportunity to work with an expert community of globally recognized and certified IT professionals & trainers who provide guidance and placement assistance with conceptual, hands-on knowledge and methodologies to implement those controls in the diverse corporate world of 2020.

            </p>
          </div>
         
        </div>

      </div>
    </section><!-- End Cta Section -->



    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Our job is to find the best candidates in the market and present them to our customers in a timely manner.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="./assets/img/team/hmza.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Hamza Badar</h4>
                <span>Chief Executive Officer</span>
                <p>Red Hat Certified System Administrator (RHCSA)</p>
                <div class="social">
              
                  <a href="https://www.facebook.com/hamzabdr36"><i class="ri-facebook-fill"></i></a>
                  <a href="https://www.instagram.com/hamzabdr.1/"><i class="ri-instagram-fill"></i></a>
                
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="./assets/img/team/mdni.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Abdul Wahab</h4>
                <span>Cloud Engineeer</span>
                <p></p>
                <div class="social">
             
                  <a href="https://www.instagram.com/notwahab_009/"><i class="ri-instagram-fill"></i></a>
                
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="./assets/img/team/bur.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Burhan</h4>
                <span>DevOps Engineer</span>
                <p></p>
                <div class="social">
             
                  <a href="https://instagram.com/notburhannn?utm_medium=copy_link"><i class="ri-instagram-fill"></i></a>
            
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="./assets/img/team/umr.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Muhammad Umar</h4>
                <span>Computer Scientist</span>
                <p></p>
                <div class="social">
           
                  <a href="https://instagram.com/muhammadumer.7?utm_medium=copy_link"><i class="ri-instagram-fill"></i></a>
                  
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

  

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <p></p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">COACHING DETAILS? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
               <ul>
                 <li>All training materials will be provided through our learning portal, where students can read coaching content, take quizzes, complete labs, homework, & assessments and review all recorded classes.</li>
                  <li>All learning is hands-on and assignment-based; designed with real-world use cases.
                    Coaching material contains syllabus and tools, including server access which will be provided to the student after registration.</li>
                </ul>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">WHAT DO I GET WHEN I GRADUATE? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Upon successful completion of the Coaching, you will have demonstrated the ability to not only understand the theory behind Linux Systems, but also how to apply it in real world situations.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">WHAT IS THE AVERAGE PAY ONCE I GRADUATE ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  According to Indeed.com there are 77000 job opening that require knowledge of linux.

                  According to Salary.com the average salary for Linux System Administrator is about $92K plus bonuses and other benefits.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">WHO IS LIKELY GET A JOB ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Graduate successfully completed the 6-month long program (having no unexcused attendance for classes, labs, and workshops).
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">DO YOU OFFER CAREER SUPPORT ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Yes! Career development support is offered to all students and alumni.
Program includes resume polishing, career-related activities,such as 1:1 mentorship sessions, job-searching workshops, and networking events. Initial post-employment support is also offered. We will work with student until he gets a job.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

   

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            
            
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>LinoopTek</h3>
            <p>
              Jada <br>
              Jhelum<br>
              Pakistan <br><br>
              <strong>Phone:</strong> +923180569033<br>
              <strong>Email:</strong> hamzabdr36@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
  
            </ul>
          </div>

      

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Follow Us for Updates</p>
            <div class="social-links mt-3">
           
              <a href="https://www.facebook.com/hamzabdr36" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/hamzabdr.1/" class="instagram"><i class="bx bxl-instagram"></i></a>
         
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Hamza</span></strong>. All Rights Reserved
      </div>
  \
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script  src="js/script.js"></script>



  

</body>

</html>