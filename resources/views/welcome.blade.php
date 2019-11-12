<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Interccon') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/owl.carousel.css" rel="stylesheet">

    <!-- Styles -->
    <link href="/css/style.css" rel="stylesheet">

    </head>
    <body>


  <section class="hero">
    <div class="container text-center">
      <div class="col-md-12">
        <h1>
            Welcome to Interccon
          </h1>

        <p class="tagline">
          We are here to solve your agricultural trade problems.
        </p>        
      </div>

      <div class="row">
        <div class="col-md-3 ml-auto mt-3">
            <a class="btn btn-full" href="/register">Get Started Now</a>
        </div>
        <div class="col-md-3 mr-auto mt-3">
            <a class="btn btn-full" href="/login">Already a member</a>
        </div>
      </div>
      
    </div>

  </section>


  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#">Interccon</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#business">Our Business</a></li>
        </ul>
      </nav>

      <nav class="nav social-nav pull-right d-none d-lg-inline">
        <a href="#"><i class="fa fa-twitter"></i></a> 
        <a href="#"><i class="fa fa-facebook"></i></a> 
        <a href="#"><i class="fa fa-linkedin"></i></a> 
        <a href="#"><i class="fa fa-envelope"></i></a>
      </nav>
    </div>
  </header>

      <section id="about" class="section-full about-us content-inner dez-about">
			<div class="container">
				<div class="tab-content">
					<div class="row">
						<div class="col-lg-5 about-img">
							<img src="https://gardenzone.dexignlab.com/xhtml/images/img1.jpg" alt="">
						</div>
						<div class="col-lg-7">
							<div class="m-b20">
								<h3 class="h3 ">About <span class="text-success">Interccon</span></h3>
								<div class="clear"></div>
							</div>
							<p class="my-3">Are you looking for market for your produce? Or are you looking to purchase large quantities of agricultural produce? Then Interccon is the perfect solution for you. We <strong>Inter Connect</strong> farmers and produce buyers. We pay farmers handsomely for their produce and provide UNBS certified produce to our buyers.</p>
							<div class="row my-3">
								<div class="col-lg-4 col-md-4 col-sm-6">
									<div class="icon-bx-wraper dashed rounded-lg">
										<div class="text-success text-center p-4"> <a href="#" class="icon-cell"><i class="fa fa-user"></i></a> </div>
										<div class="icon-content text-center">
											<h3 class="h5 text-success m-t10 m-b5"><span class="counter">1800</span>+</h3>
											<p>Registered Farmers</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-6">
									<div class="icon-bx-wraper dashed rounded-lg">
										<div class="text-success text-center p-4"> <a href="#" class="icon-cell"><i class="fa fa-industry"></i></a> </div>
										<div class="icon-content text-center">
											<h3 class="h5 text-success m-t10 m-b5"><span class="counter">620</span>+</h3>
											<p>Assured Buyers</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12">
									<div class="icon-bx-wraper dashed rounded-lg">
										<div class="text-success text-center p-4"> <a href="#" class="icon-cell"><i class="fa fa-tasks"></i></a> </div>
										<div class="icon-content text-center">
											<h3 class="h5 text-success m-t10 m-b5"><span class="counter">527</span>+</h3>
											<p>Field Agents</p>
										</div>
									</div>
								</div>
							</div>
							<p class="my-2">This platform has grown to have almost 2000 registered farmers and who have not yet been able to meet the supply needs of our growing buyers. We have increased our Field Agent staff to make sure every farmer is reached.</p>
							<a href="#" class="btn btn-success">Read More</a>
						</div>
					</div>
				</div>
			</div>
        </section>

    <section id="services" class="section-padding">
      <div class="container">
          <div class="row">
              <div class="col-md-12 page-title text-center">
                  <h1>Our Services</h1>
                  <p>We offer value for money to both farmers and buyers.<br>We save you the hustle of finding buyers/sellers.</p>
                  <hr class="pg-titl-bdr-btm">
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                  <div id="services-slider" class="owl-carousel">
                      <div class="post-slide2">
                          <div class="post-img">
                              <a href="#"><img src="https://images.pexels.com/photos/2135677/pexels-photo-2135677.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></a>
                          </div>
                          <div class="post-content">
                              <h3 class="post-title"><a href="#">Logistics</a></h3>
                              <p class="post-description">
                                  Have our trusted Logistics partners deliver your orders promptly and safely anywhere in the country.
                              </p>
                              <a href="#" class="btn btn-danger">read more</a>
                          </div>
                      </div>        
                      <div class="post-slide2">
                          <div class="post-img">
                              <a href="#"><img src="https://images.pexels.com/photos/2131720/pexels-photo-2131720.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></a>
                          </div>
                          <div class="post-content">
                              <h3 class="post-title"><a href="#">Market Linkages</a></h3>
                              <p class="post-description">
                                  We link registered farmers to a ready market of buyers for their produce any time any where.
                              </p>
                              <a href="#" class="btn btn-danger">read more</a>
                          </div>
                      </div>
                      <div class="post-slide2">
                          <div class="post-img">
                              <a href="#"><img src="https://images.pexels.com/photos/2257345/pexels-photo-2257345.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></a>
                          </div>
                          <div class="post-content">
                              <h3 class="post-title"><a href="#">UNBS Certified</a></h3>
                              <p class="post-description">
                                  We have UNBS do the grading and certification of the produce enabling the farmer get their value's worth for their produce.
                              </p>
                              <a href="#" class="btn btn-danger">read more</a>
                          </div>
                      </div>
                      <div class="post-slide2">
                          <div class="post-img">
                              <a href="#"><img src="https://images.pexels.com/photos/2255793/pexels-photo-2255793.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></a>
                          </div>
                          <div class="post-content">
                              <h3 class="post-title"><a href="#">Convenience</a></h3>
                              <p class="post-description">
                                  You have market for your produce right at the tip of your fingers. Purchase quality produce in the comfort of your home.
                              </p>
                              <a href="#" class="btn btn-danger">read more</a>
                          </div>
                      </div>
                      <div class="post-slide2">
                          <div class="post-img">
                              <a href="#"><img src="https://images.pexels.com/photos/2893635/pexels-photo-2893635.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></a>
                          </div>
                          <div class="post-content">
                              <h3 class="post-title"><a href="#">World Class Quality</a></h3>
                              <p class="post-description">
                                  Are you looking for export quality produce? We have UNBS certified World Market Grade produce for exporters and high-end buyers alike.
                              </p>
                              <a href="#" class="btn btn-danger">read more</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

<section id="business">
  <div class="container">
      <div class="row">
        <div class="col-md-12 page-title text-center">
            <h1>How we do business?</h1>
            <hr class="pg-titl-bdr-btm">
        </div>
      </div>
    <!--first section-->
    <div class="row align-items-center how-it-works d-flex">
      <div class="col-2 text-center bottom d-inline-flex justify-content-center align-items-center">
        <div class="circle font-weight-bold">1</div>
      </div>
      <div class="col-6">
        <h5>Create an account.</h5>
        <p>Register now and be part of growing number of people looking to revolutionalize agricultural market processes through technology.</p>
      </div>
    </div>
    <!--path between 1-2-->
    <div class="row timeline">
      <div class="col-2">
        <div class="corner top-right"></div>
      </div>
      <div class="col-8">
        <hr/>
      </div>
      <div class="col-2">
        <div class="corner left-bottom"></div>
      </div>
    </div>
    <!--second section-->
    <div class="row align-items-center justify-content-end how-it-works d-flex">
      <div class="col-6 text-right">
        <h5>Login to the application</h5>
        <p>Log into your account today and start enjoying the convenience of market solutions at your finger tips.</p>
      </div>
      <div class="col-2 text-center full d-inline-flex justify-content-center align-items-center">
        <div class="circle font-weight-bold">2</div>
      </div>
    </div>
    <!--path between 2-3-->
    <div class="row timeline">
      <div class="col-2">
        <div class="corner right-bottom"></div>
      </div>
      <div class="col-8">
        <hr/>
      </div>
      <div class="col-2">
        <div class="corner top-left"></div>
      </div>
    </div>
    <!--third section-->
    <div class="row align-items-center how-it-works d-flex">
      <div class="col-2 text-center top d-inline-flex justify-content-center align-items-center">
        <div class="circle font-weight-bold">3.1</div>
      </div>
      <div class="col-6">
        <h5>Are you a buyer?</h5>
        <p>Are you an exporter or are you looking to purchase quality agricultural produce in large quantities? Log in now and make that purchase and complete that order in the next 2 minutes.</p>
      </div>
    </div>
    <!--path between 3-4-->
    <div class="row timeline">
      <div class="col-2">
        <div class="corner top-right"></div>
      </div>
      <div class="col-8">
        <hr/>
      </div>
      <div class="col-2">
        <div class="corner left-bottom"></div>
      </div>
    </div>
    <!--forth section-->
    <div class="row align-items-center justify-content-end how-it-works d-flex">
      <div class="col-6 text-right">
        <h5>Are you a farmer?</h5>
        <p>Simply add the quantities of Produce you have on your profile. Let our field agent verify the quantities. Have UNBS come grade and certify the produce and walk happily to the bank to withdraw your money.</p>
      </div>
      <div class="col-2 text-center full d-inline-flex justify-content-center align-items-center">
        <div class="circle font-weight-bold">3.2</div>
      </div>
    </div>
    <!--path between 4-5-->
    <div class="row timeline">
      <div class="col-2">
        <div class="corner right-bottom"></div>
      </div>
      <div class="col-8">
        <hr/>
      </div>
      <div class="col-2">
        <div class="corner top-left"></div>
      </div>
    </div>

    <!--fifth section-->
    <div class="row align-items-center how-it-works d-flex">
      <div class="col-2 text-center top d-inline-flex justify-content-center align-items-center">
        <div class="circle font-weight-bold">3.3</div>
      </div>
      <div class="col-6">
        <h5>Are you a Transporter?</h5>
        <p>Are you a logistics company or transport service provider? Partner with us to bring value to the Agricultural sector in Uganda.</p>
      </div>
    </div>
  </div>
</section>    

  <footer class="site-footer">
    <div class="bottom">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-xs-12 text-lg-left text-center">
            <p class="copyright-text">
              © Interccon
            </p>
            <div class="credits">
             Designed by <a href="https://makewishtech.herokuapp.com">Makewish Technologies</a>
            </div>
          </div>

          <div class="col-lg-6 col-xs-12 text-lg-right text-center">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">Home</a>
              </li>

              <li class="list-inline-item">
                <a href="#about">About Us</a>
              </li>

              <li class="list-inline-item">
                <a href="#services">Our Services</a>
              </li>

              <li class="list-inline-item">
                <a href="#business">Our business</a>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </footer>

  <div class="contant-no-area">
        <div class="contact-number">
            <h5>Have a question?</h5>
            <h6>Contact: 0701637099</h6>
        </div>
    </div>

  <a class="scrolltop" href="#"><span class="fa fa-angle-up"></span></a>

    <!-- JavaScript Libraries -->
    
    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery-migrate.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/easing.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/waypoints.min.js"></script>
    <script src="/js/superfish.min.js"></script>
    <script src="/js/sticky.js"></script>
    <script src="/js/custom.js"></script>

    </body>
</html>
