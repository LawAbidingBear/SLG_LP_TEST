<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>SLG Landing Page</title>
      <link rel="stylesheet" href="style\style.css">
      <link rel="stylesheet" href="style\bootstrap-overwrite.css">
      <link rel="stylesheet" href="style\bootstrap-additions.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <!--Tempus Dominus Date-Time Picker CDN-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha18/css/tempusdominus-bootstrap-4.min.css" />
   </head>
   <body>
      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
         <div class="container">
            <img src="components\images\slg_logos\SLG-LOGO-WHITE.png" class="img-fluid" alt="Responsive image" id="navbar-logo">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav text-uppercase ml-auto">
                  <li class="nav-item">
                     <a class="nav-link js-scroll-trigger text-uppercase" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link js-scroll-trigger text-uppercase" href="#">Products</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link js-scroll-trigger text-uppercase" href="#">Sign Up</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link js-scroll-trigger text-uppercase" href="#">Faq</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link js-scroll-trigger text-uppercase" href="#">Contact</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <header class="masthead text-center text-white d-flex">
         <div class="container my-auto">
            <div class="row">
               <div class="col-lg-10 mx-auto">
                  <h1 class="green-text">
                     <strong>Real Infectious Ideas</strong>
                  </h1>
                  <hr>
               </div>
               <div class="col-lg-8 mx-auto">
                  <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis lacus eu odio viverra molestie. Pellentesque condimentum, justo a volutpat hendrerit, nunc velit rutrum massa, in commodo purus magna et.</p>
                  <a class="btn btn-primary btn-xl js-scroll-trigger main-section-btn" href="#">Get Started</a>
                  <a class="btn btn-light btn-xl js-scroll-trigger main-section-btn" href="#">Learn More</a>
               </div>
            </div>
         </div>
      </header>
      <section class="bg-off-white" id="text-block">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-8 mx-auto">
                  <div class="col-6 pl-0">
                     <h1 class="section-heading text-dark text-left font-weight-bold mw-80">Out of clutter, find <span style="color: #5BE393 !important">simplicity.</span></h1>
                  </div>
               </div>
            </div>
            <div class="row mt-5">
               <div class="col-lg-8 mx-auto">
                  <p class="text-left mb-4">
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et blandit lacus. Quisque velit neque, vulputate nec viverra quis, porta non quam. Mauris non arcu nec dui efficitur suscipit. Sed ultrices ut quam id pulvinar. Morbi viverra, mi at bibendum convallis, nisl dui hendrerit urna, id facilisis odio magna in nulla. Phasellus in nulla est. Cras viverra convallis commodo. Suspendisse molestie felis non metus facilisis, ut feugiat sem faucibus.
                     <br>
                     <br>
                     <!--Could probably do with seperating this into a new element-->
                     Duis faucibus efficitur erat, id consequat felis aliquam eu. Nulla at purus placerat, suscipit libero vel, hendrerit tellus. Nulla commodo leo et volutpat semper. Donec commodo quis sem id maximus. Maecenas id diam orci. Praesent facilisis sodales orci, non aliquam leo fringilla sed.
                     <br>
                     <br>
                     <span class="text-muted">-Veritatis Quasi</span>
                  </p>
               </div>
            </div>
         </div>
      </section>
      <!-- Contact -->
      <section id="contact" class="bg-grey">
         <div class="container">
            <div class="row mb-5">
               <div class="col-lg-12 text-center">
                  <h1 class="section-heading text-white">Enter your details</h1>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-12">






















                  <form id="contactForm" name="sentMessage" action="components/vendors/contact_form.php" method="post">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <input class="form-control" id="email" name="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                              <p class="help-block text-danger"></p>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                                 <input type="text" name="date" class="form-control datetimepicker-input" data-target="#datetimepicker4"/>
                                 <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <script type="text/javascript">
                           $(function () {
                               $('#datetimepicker4').datetimepicker({
                                 format: "L";
                               });
                           });
                        </script>
                     </div>
                     <div class="row">
                        <div class="container-fluid">
                           <div class="form-group">
                              <input class="form-control" id="address" name="address" type="text" placeholder="Address" required="required" data-validation-required-message="Please enter your phone number.">
                              <p class="help-block text-danger"></p>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="container-fluid">
                           <div class="form-group">
                              <textarea class="form-control" id="message" name="message" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                              <p class="help-block text-danger"></p>
                           </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="g-recaptcha col-lg-6" data-sitekey="6Le8Al0UAAAAAIMQmJytepkEaM1-BeYRuoI7JlAG" data-callback="enableBtn"></div>
                        <div class="col-lg-6 text-right">
                           <div id="success"></div>
                           <button id="sendMessageButton" class="btn btn-primary btn-xl" type="submit" name="submit" data-toggle="modal" data-target="#submitModal" disabled>Send</button>
                          <script>
                           function enableBtn(){
                             document.getElementById("sendMessageButton").disabled = false;
                           };
                          </script>
                        </div>
                     </div>
                  </form>
  










               </div>
            </div>
         </div>
      </section>
      <section id="services">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 text-center">
                  <h2 class="section-heading">Perfection. Uncompromised.</h2>
                  <p class="text-left mt-4"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut erat erat. Aliquam scelerisque, augue in viverra consequat, urna erat imperdiet nisi, non egestas arcu turpis vel tellus. Duis euismod massa enim, et pretium nulla pulvinar sed. Nulla dolor nisl, elementum et pharetra placerat, laoreet sit amet lorem. Phasellus at. </p>
               </div>
            </div>
            <div class="row mt-4">
               <div id="carousel" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#carousel" data-slide-to="0" class="active"></li>
                     <li data-target="#carousel" data-slide-to="1"></li>
                     <li data-target="#carousel" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <img class="d-block w-100" src="components\images\carousel_images\Carousel_1.jpg" alt="Construction Worker">
                     </div>
                     <div class="carousel-item">
                        <img class="d-block w-100" src="components\images\carousel_images\Carousel_2.jpg" alt="Private Jet">
                     </div>
                     <div class="carousel-item">
                        <img class="d-block w-100" src="components\images\carousel_images\Carousel_3.jpg" alt="Colour Explosion">
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                  </a>
               </div>
            </div>
            <div class="row pt-5">
               <div class="col-md-6 order-md-2">
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. In blandit eu ipsum a fermentum. Donec vestibulum posuere velit eget fermentum. Duis tincidunt erat sed porta pulvinar. Cras dictum interdum risus, nec semper leo cursus non. Donec laoreet metus eget porttitor tristique. Aliquam erat volutpat. Integer eu est sed sem ultrices vehicula. Vivamus nec facilisis nunc. Phasellus nec nunc vel ipsum maximus suscipit. Integer faucibus mauris quis arcu commodo rutrum. Nulla id neque at risus sodales luctus sed ut felis. Fusce id lectus tortor. Cras rhoncus ex vitae lectus volutpat molestie.
                     <br>
                     <br>
                     Vestibulum urna nibh, venenatis non efficitur id, fringilla in nisl. Mauris non ipsum tortor. Phasellus sed massa quam. Integer ultrices lobortis velit, nec molestie quam dignissim quis. Aenean id mi risus. Sed urna augue, fermentum a arcu et, gravida imperdiet velit. Etiam in ligula mollis libero scelerisque ultricies in quis nibh. Etiam pulvinar enim id urna bibendum tempor. Phasellus eget lorem sed massa sodales finibus. Pellentesque finibus lorem nec congue tincidunt. Vivamus eu posuere odio, ut tempus orci.
                  </p>
               </div>
               <div class="col-md-6 order-md-1">
                  <img class="d-block text-block-img" src="components\images\suitcase.jpg">
               </div>
            </div>
         </div>
      </section>
      <section class="bg-dark text-white pt-5 ">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
               </div>
               <div class="col-md-4">
                  <img src="components\images\slg_logos\SLG-LOGO-WHITE.png" class="img-fluid footer-logo float-none mx-auto d-block mb-5" alt="Responsive image">
               </div>
               <div class="col-md-4">
               </div>
            </div>
            <div class="row pb-4">
               <div class="col-md-4">
                  <h6 class="green-text text-uppercase text-center pb-4">Shop</h6>
                  <p class="text-center sitemap-line-height text-muted">Find a Shop</p>
                  <p class="text-center sitemap-line-height text-muted">Schedule a Tour</p>
                  <p class="text-center sitemap-line-height text-muted">Custom Solutions</p>
                  <p class="text-center sitemap-line-height text-muted pb-3">Get a Quote</p>
               </div>
               <div class="col-md-4">
                  <h6 class="green-text text-uppercase text-center pb-4">Explore</h6>
                  <p class="text-center sitemap-line-height text-muted">Featured Products</p>
                  <p class="text-center sitemap-line-height text-muted">Future Products</p>
                  <p class="text-center sitemap-line-height text-muted">Our Mission</p>
                  <p class="text-center sitemap-line-height text-muted pb-3">Customer Stories</p>
               </div>
               <div class="col-md-4">
                  <h6 class="green-text text-uppercase text-center pb-4">More</h6>
                  <p class="text-center sitemap-line-height text-muted">News Feed</p>
                  <p class="text-center sitemap-line-height text-muted">Careers</p>
                  <p class="text-center sitemap-line-height text-muted">Contact Us</p>
                  <p class="text-center sitemap-line-height text-muted pb-3">Privacy Policy</p>
               </div>
            </div>
         </div>
      </section>
      <!-- Footer -->
      <footer style="background-color: black;" class="pt-2">
         <div class="container" >
            <div class="row">
               <div class="col-md-5">
                  <span class="copyright text-muted">Copyright &copy; 1996-2016 Company Co. All rights reserved</span>
               </div>
               <div class="col-md-2">
               </div>
               <div class="col-md-5">
                  <img src="components\images\slg_logos\SLG-LOGO-WHITE.png" class="img-fluid footer-logo" alt="Responsive image">
               </div>
            </div>
         </div>
      </footer>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha18/js/tempusdominus-bootstrap-4.min.js"></script>
      <script src='https://www.google.com/recaptcha/api.js'></script>
      <script src="js\main.js"></script>
   </body>
</html>
