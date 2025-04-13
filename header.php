<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>WIEC - Educational Consultancy in Nepal</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Favicon -->
  <link
    rel="icon"
    type="image/png"
    sizes="56x56"
    href="assets/images/logo.png" />
  <!-- bootstrap CSS -->
  <link
    rel="stylesheet"
    href="assets/css/bootstrap.min.css"
    type="text/css"
    media="all" />
  <!-- carousel CSS -->
  <link
    rel="stylesheet"
    href="assets/css/owl.carousel.min.css"
    type="text/css"
    media="all" />
  <!-- nivo-slider CSS -->
  <link
    rel="stylesheet"
    href="assets/css/nivo-slider.css"
    type="text/css"
    media="all" />
  <!-- animate CSS -->
  <link
    rel="stylesheet"
    href="assets/css/animate.css"
    type="text/css"
    media="all" />
  <!-- animated-text CSS -->
  <!-- Light Gallery css -->
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.8.3/css/lightgallery-bundle.min.css"
    integrity="sha512-fXavT4uA4L0uTUFHC275D7zd751ohbSuD6VUMc5JysWfmR+NxTI3w7etE7N9hjTETcoh0w0V+24Cel4xXnqvCg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link
    rel="stylesheet"
    href="assets/css/animated-text.css"
    type="text/css"
    media="all" />
  <!-- font-awesome CSS -->
  <!-- <link
      rel="stylesheet"
      href="assets/css/all.min.css"
      type="text/css"
      media="all"
    /> -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <!-- font-flaticon CSS -->
  <link
    rel="stylesheet"
    href="assets/css/flaticon.css"
    type="text/css"
    media="all" />
  <!-- Odometer CSS -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.7/themes/odometer-theme-default.css"
    integrity="sha512-kMPqFnKueEwgQFzXLEEl671aHhQqrZLS5IP3HzqdfozaST/EgU+/wkM07JCmXFAt9GO810I//8DBonsJUzGQsQ=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <!-- theme-default CSS -->
  <link
    rel="stylesheet"
    href="assets/css/theme-default.css"
    type="text/css"
    media="all" />
  <!-- meanmenu CSS -->
  <link
    rel="stylesheet"
    href="assets/css/meanmenu.min.css"
    type="text/css"
    media="all" />
  <!-- Main Style CSS -->
  <link rel="stylesheet" href="style.css" type="text/css" media="all" />
  <!-- transitions CSS -->
  <link
    rel="stylesheet"
    href="assets/css/owl.transitions.css"
    type="text/css"
    media="all" />
  <!-- venobox CSS -->
  <link
    rel="stylesheet"
    href="venobox/venobox.css"
    type="text/css"
    media="all" />
  <!-- widget CSS -->
  <link
    rel="stylesheet"
    href="assets/css/widget.css"
    type="text/css"
    media="all" />
  <!-- responsive CSS -->
  <link
    rel="stylesheet"
    href="assets/css/responsive.css"
    type="text/css"
    media="all" />
  <!-- slick slider CSS -->
  <link
    rel="stylesheet"
    href="assets/css/slick.css"
    type="text/css"
    media="screen" />
  <!-- slick slider CSS -->

  <!-- Photoswipe css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/5.4.4/photoswipe.min.css" integrity="sha512-LFWtdAXHQuwUGH9cImO9blA3a3GfQNkpF2uRlhaOpSbDevNyK1rmAjs13mtpjvWyi+flP7zYWboqY+8Mkd42xA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link
    rel="stylesheet"
    href="assets/css/slick-theme.css"
    type="text/css"
    media="screen" />
</head>

<body>
  <!-- loader -->
  <div class="loader-wrapper">
    <div class="loader"></div>
    <div class="loder-section left-section"></div>
    <div class="loder-section right-section"></div>
  </div>

  <!--==================================================-->
  <!-- Start wiec Main Menu Area -->
  <!--==================================================-->
  <div class="top-navbar d-none d-xl-block">
    <div class="row">
      <div class="col-lg-12">
        <nav class="top-nav-section">
          <ul>
            <!-- <li><a href="gallery.php">gallery</a></li> -->
            <li><a href="blog.php">news & updates</a></li>
            <li><a href="contact.php">contact</a></li>
            <li>
              <a href="" data-toggle="modal" data-target="#exampleModal"><i class="fa-solid fa-user mr-2"></i>login</a>
              <!--Login Modal -->
              <div class="login-modal modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="pills-student-tab" data-toggle="pill" data-target="#pills-student" type="button" role="tab" aria-controls="pills-student" aria-selected="true">Student Login</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-admin-tab" data-toggle="pill" data-target="#pills-admin" type="button" role="tab" aria-controls="pills-admin" aria-selected="false">Admin Login</button>
                        </li>
                      </ul>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-student" role="tabpanel" aria-labelledby="pills-student-tab">
                          <form>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your Email Address">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your Password">
                            </div>
                            <button type="submit" class="slider-button">
                              <a href="login.php">Login</a>
                            </button>
                          </form>
                        </div>
                        <div class="tab-pane fade" id="pills-admin" role="tabpanel" aria-labelledby="pills-admin-tab">
                          <form>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your Email Address">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your Password">
                            </div>
                            <button type="submit" class="slider-button">
                              <a href="login.php">Login</a>
                            </button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <div id="sticky-header" class="wiec_nav_menu">
    <div class="left">
      <div class="logo">
        <a class="logo_img" href="index.php" title="wiec">
          <img src="assets/images/logo.png" alt="" />
        </a>
        <a class="main_sticky" href="index.php" title="wiec">
          <img src="assets/images/logo.png" alt="astute" />
        </a>
      </div>
    </div>
    <div class="right">
      <nav class="wiec_menu">
        <ul class="nav_scroll d-none d-xl-flex">
          <li>
            <a href="#">Study Abroad <span><i class="fas fa-angle-down"></i></span></a>
            <div class="sub-menu">
              <ul>
                <li>
                  <a href="country.php"><img
                      src="assets/images/countries/usa.webp"
                      alt="" />USA</a>

                </li>
                <li>
                  <a href="country.php"><img
                      src="assets/images/countries/denmark.webp"
                      alt="" />Denmark</a>
                </li>
                <li>
                  <a href="country.php"><img
                      src="assets/images/countries/switzerland.webp"
                      alt="" />Switzerland</a>
                </li>
              </ul>
              <ul>
                <li>
                  <a href="country.php"><img
                      src="assets/images/countries/australia.webp"
                      alt="" />Australia</a>
                </li>
                <li>
                  <a href="country.php"><img
                      src="assets/images/countries/germany.webp"
                      alt="" />Germany</a>
                </li>
                <li>
                  <a href="country.php"><img
                      src="assets/images/countries/canada.webp"
                      alt="" />Canada</a>
                </li>
              </ul>
              <ul>
                <li>
                  <a href="country.php"><img
                      src="assets/images/countries/japan.webp"
                      alt="" />Japan</a>
                </li>
                <li>
                  <a href="country.php"><img
                      src="assets/images/countries/new-zealand.webp"
                      alt="" />New Zealand</a>
                </li>
                <li>
                  <a href="country.php"><img
                      src="assets/images/countries/uk.webp"
                      alt="" />UK</a>
                </li>
              </ul>
              <ul>
                <li>
                  <a href="country.php"><img
                      src="assets/images/countries/korea.webp"
                      alt="" />Korea</a>
                </li>
                <li>
                  <a href="country.php"><img
                      src="assets/images/countries/ireland.webp"
                      alt="" />Ireland</a>
                </li>
                <li>
                  <a href="country.php"><img
                      src="assets/images/countries/france.webp"
                      alt="" />France</a>
                </li>
              </ul>
            </div>
          </li>
          <li><a href="test-preparation.php">Test Preparation</a></li>
          <li>
            <a href="#">About Us <span><i class="fas fa-angle-down"></i></span></a>
            <div class="sub-menu about-submenu">
              <ul>
                <h2>About <span>WIEC</span></h2>
                <p>
                  Founded in 2019, WI Education Consultancy Lalitpur Pvt.
                  Ltd. is driven by passionate industry experts dedicated to
                  guiding students toward a successful international
                  education journey.
                </p>
                <div class="slider-button">
                  <a href="about.php">Learn More</a>
                </div>
              </ul>
              <ul class="about-submenu-list">
                <li>
                  <a href="director-message.php"><i class="fa-solid fa-chevron-right"></i>Message from
                    Director</a>
                </li>
                <li>
                  <a href="gallery.php"><i class="fa-solid fa-chevron-right"></i>Gallery</a>
                </li>
                <li>
                  <a href="team.php"><i class="fa-solid fa-chevron-right"></i>WIEC Team</a>
                </li>
              </ul>
            </div>
          </li>
          <li><a href="university.php">University</a></li>
          <li><a href="services.php">Services</a></li>
        </ul>
        <div class="other-menu search-box-btn search-box-outer d-flex">
          <a href="book-appointment.php" class="btn btn-primary book-btn d-none d-xl-block" data-toggle=" modal" data-target="#exampleModal">Book an Appointment</a>
          <div class="nav-btn navSidebar-button">
            <span><i class="fas fa-align-left"></i></span>
          </div>
        </div>
      </nav>
    </div>
  </div>
  <!-- Sidebar Cart Item -->
  <div class="xs-sidebar-group info-group">
    <div class="xs-overlay xs-bg-black"></div>
    <div class="xs-sidebar-widget">
      <div class="sidebar-widget-container">
        <div class="widget-heading">
          <a href="#" class="close-side-widget">
            <i class="fa-solid fa-xmark"></i>
          </a>
        </div>
        <div class="sidebar-textwidget">
          <!-- Sidebar Info Content -->
          <div class="sidebar-info-contents">
            <div class="content-inner">
              <ul class="menu-list">
                <div class="mobile-menu-list d-xl-none">
                  <li class="dropdown">Study Abroad <span><i class="fas fa-angle-down"></i></span>
                  </li>
                  <ul class="sub-menu dropdown-list">
                    <li>
                      <a href="country.php">Australia</a>
                    </li>
                    <li>
                      <a href="country.php">USA</a>
                    </li>
                    <li>
                      <a href="country.php">Japan</a>
                    </li>
                    <li>
                      <a href="country.php">Korea</a>
                    </li>
                    <li>
                      <a href="country.php">Denmark</a>
                    </li>
                    <li>
                      <a href="country.php">Germany</a>
                    </li>
                    <li>
                      <a href="country.php">New Zealand</a>
                    </li>
                    <li>
                      <a href="country.php">Ireland</a>
                    </li>
                    <li>
                      <a href="country.php">Switzerland</a>
                    </li>
                    <li>
                      <a href="country.php">Canada</a>
                    </li>
                    <li>
                      <a href="country.php">United Kingdom</a>
                    </li>
                    <li>
                      <a href="country.php">France</a>
                    </li>
                  </ul>
                  <li><a href="test-preparation.php">Test Preparation</a></li>
                  <li class="dropdown">About Us<span><i class="fas fa-angle-down"></i></span>
                  </li>
                  <ul class="sub-menu dropdown-list">
                    <li>
                      <a href="about.php">About Us</a>
                    </li>
                    <li>
                      <a href="director-message.php">Message from Director</a>
                    </li>
                    <li>
                      <a href="gallery.php">Gallery</a>
                    </li>
                    <li>
                      <a href="team.php">WIEC Team</a>
                    </li>
                  </ul>
                  <li><a href="university.php">University</a></li>
                  <!-- <li><a href="gallery.php">Gallery</a></li> -->
                  <li><a href="contact.php">Contact</a></li>
                </div>
                <li><a href="success-stories.php">Success Stories</a></li>
                <li><a href="">Resources</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="online-application.php">Online Application</a></li>
                <li><a href="how-to-obtain-visa.php">How to Obtain Visa</a></li>
                <li><a href="sop-bank.php">SOP Bank</a></li>
                <div class="mobile-menu-list d-xl-none">
                  <div class="btn-wrapper">
                    <a href="#" class="btn btn-primary">Book an Appointment</a>
                    <a href="#" class="btn btn-primary">Login</a>
                  </div>
                </div>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>