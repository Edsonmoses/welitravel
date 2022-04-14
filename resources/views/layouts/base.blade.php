<!DOCTYPE html>
<html>
  <head>
    @if(Request::is('/'))
       <title>WeliTravel</title>
     @else
       <title>{{ Request::path() }} - WeliTravel</title>
    @endif
    <style>
      title{
        text-transform: capitalize !important;
      }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/reset.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery.fancybox.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/fonts/fi/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/flexslider.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/indent.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/rs-plugin/css/settings.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/rs-plugin/css/layers.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/rs-plugin/css/navigation.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/tuner/css/colorpicker.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/tuner/css/styles.css')}}">
    <link href="http://fonts.cdnfonts.com/css/gotham" rel="stylesheet">
    @livewireStyles
  </head>
  <body>
    <!-- header page-->
    <header>
      <!-- site top panel-->
      <div class="site-top-panel">
        <div class="container p-relative">
          <div class="row">
            <div class="col-md-6 col-sm-7">
              <!-- lang select wrapper-->
              <div class="top-left-wrap font-3">
                <div class="mail-top"><a href="mailto:info@welitravel.com"> <i class="flaticon-suntour-email"></i>info@welitravel.com</a></div><span>/</span>
                <div class="tel-top"><a href="tel:+256393206289"> <i class="flaticon-suntour-phone"></i>+256393206289</a></div>
              </div>
              <!-- ! lang select wrapper-->
            </div>
            <div class="col-md-6 col-sm-5 text-right">
              <div class="top-right-wrap">
                  <a href="/Contact" class="{{ (request()->is('Contact*')) ? 'active' : '' }}" style="margin-right: 15px;">Contact</a>
                  <div class="top-login">
                     <a href="#">My Account</a>
                </div>
                <div class="curr-wrap dropdown">
                  <div>
                    <ul>
                      <li><a href="#" class="lang-sel icl-en">Currency<i class="fa fa-angle-down"></i></a>
                        <ul>
                          <li><a href="#">USD</a></li>
                          <li><a href="#">EUR</a></li>
                          <li> <a href="#">GBP</a></li>
                          <li> <a href="#">AUD</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="lang-wrap dropdown">
                  <div>
                    <ul>
                      <li><a href="#" class="lang-sel icl-en">Language <i class="fa fa-angle-down"></i></a>
                        <ul>
                          <li><a href="#">English</a></li>
                          <li> <a href="#">Deutsch</a></li>
                          <li> <a href="#">Espanol</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ! site top panel-->
      <!-- Navigation panel-->
      <nav class="main-nav js-stick">
        <div class="full-wrapper relative clearfix container">
          <!-- Logo ( * your text or image into link tag *)-->
          <div class="nav-logo-wrap local-scroll"><a href="/" class="logo"><img src="{{ asset('assets/frontend/img/Weli Travel Logo_-09.svg')}}" data-at2x="{{ asset('assets/frontend/img/Weli Travel Logo_-09.svg')}}" alt width="172" height="37"></a></div>
          <!-- Main Menu-->
          <div class="inner-nav desktop-nav">
            <ul class="clearlist">
              <li><a href="/" class="mn-has-sub {{ (request()->is('/*')) ? 'active' : '' }}">Home</a></li>
              <li class="slash">/</li>
              <li><a href="/About-us" class="mn-has-sub {{ (request()->is('About-us*')) ? 'active' : '' }}">About Us</a></li>
              <li class="slash">/</li>
              <li><a href="/Services" class="mn-has-sub {{ (request()->is('Services*')) ? 'active' : '' }}">Services</a></li>
              <li class="slash">/</li>
              <li><a href="/Packages" class="mn-has-sub {{ (request()->is('Packages*')) ? 'active' : '' }}">Packages</a></li>
             {{-- <li class="slash">/</li>
              <li><a href="/Blog" class="mn-has-sub {{ (request()->is('Blog*')) ? 'active' : '' }}">Blog</a></li>
              <li class="slash">/</li>
              <li><a href="/Contact" class="mn-has-sub {{ (request()->is('Contact*')) ? 'active' : '' }}">Contact</a></li>--}}
              <li class="slash">/</li>
              <li><a href="/Hotel-booking" class="mn-has-sub {{ (request()->is('Hotel*')) ? 'active' : '' }} {{ (request()->is('Booking*')) ? 'active' : '' }}">Hotels <i class="fa fa-angle-down button_open"></i></a>
                <ul class="mn-sub">
                  <li class="{{ (request()->is('Booking-terms*')) ? 'active' : '' }}"><a href="/Booking-terms">Booking Terms</a></li>
                  <li class="{{ (request()->is('Hotel-booking*')) ? 'active' : '' }}"><a href="/Hotel-booking">Hotel Bookings</a></li>
                </ul>
              </li>
             {{-- <li class="slash">/</li>
              <li><a href="/Gallery" class="mn-has-sub {{ (request()->is('Gallery*')) ? 'active' : '' }}">Gallery</a></li>
              <li class="slash">/</li>
              <li><a href="/Faq" class="mn-has-sub {{ (request()->is('Faq*')) ? 'active' : '' }}">FAQ</a></li>--}}
              <li class="slash">/</li>
              <li><a href="/Wallpaper" class="mn-has-sub {{ (request()->is('Wallpaper*')) ? 'active' : '' }}">Free Wallpaper</a></li>
              <!-- End Item-->
              <!-- Search-->
              <li class="search"><a href="#" class="mn-has-sub">Search</a>
                <ul class="search-sub">
                  <li>
                    <div class="container">
                      <div class="mn-wrap">
                        <form method="post" class="form">
                          <div class="search-wrap">
                            <input type="text" placeholder="Where will you go next?" class="form-control search-field"><i class="flaticon-suntour-search search-icon"></i>
                          </div>
                        </form>
                      </div>
                      <div class="close-button"><span>Search</span></div>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- End Search-->
            </ul>
          </div>
          <!-- End Main Menu-->
        </div>
      </nav>
      <!-- End Navigation panel-->
      @if(Request::is('/'))

      @else
       <!-- breadcrumbs start-->
       <section style="background-image:url('{{ asset('assets/frontend/pic/breadcrumbs/1920x165_Bg-1.jpg')}}')" class="breadcrumbs">
        <div class="container">
          <div class="text-left breadcrumbs-item"><a href="/">home</a><i>/</i><a href="#" class="last"><span>{{ Request::path() }} </span></a>
            <h2><span>{{ Request::path() }} </span></h2>
          </div>
        </div>
      </section>
      <!-- ! breadcrumbs end-->
      @endif
    </header>
    <!-- ! header page-->
    <div class="content-body">
        {{$slot}}
    </div>
 <!-- footer-->
 <footer style="background-image: url('{{ asset('assets/frontend/pic/footer/2022\ Weli\ Travel\ Website\ Images4.jpg')}}')" class="footer footer-fixed">
    <div class="container">
      <div class="row pb-100 pb-md-40">
        <!-- widget footer-->
        <div class="col-md-6 col-sm-12 mb-sm-30">
          <div class="logo-soc clearfix">
            <div class="footer-logo"><a href="index.html"><img src="{{ asset('assets/frontend/img//Weli Travel Logo_-10.svg')}}" data-at2x="{{ asset('assets/frontend/img//Weli Travel Logo_-10.svg')}}" alt width="172"></a></div>
          </div>
          <p class="color-g2 mt-10">Weli Travel has been providing a wide variety of Hajj and Umrah travel packages to guests like you. We have built a reputation as one of the best travel agencies in our industry thus making us the leading Hajj and Umrah travel agency in Uganda. We also help our clients in Umrah Visa and other travel solutions packages, so that you can have the best experience</p>
          <!-- social-->
          <div class="social-link dark"><a href="https://twitter.com/welitravel" class="cws-social fa fa-twitter" target="_blank"></a><a href="https://www.facebook.com/welitravel/" class="cws-social fa fa-facebook" target="_blank"></a><a href="https://www.instagram.com/welitravel/" class="cws-social fa fa-instagram" target="_blank"></a><a href="https://www.linkedin.com" class="cws-social fa fa-linkedin" target="_blank"></a><a href="https://www.youtube.com/channel/UC5zlrFVatL-5yA1TJmQeOjA/featured" class="cws-social fa fa-youtube-play" target="_blank"></a></div>
          <!-- ! social-->
        </div>
        <!-- ! widget footer-->
        <!-- widget footer-->
        <div class="col-md-3 col-sm-6 mb-sm-30">
          <div class="widget-footer">
            <h4>Latest Tweets</h4>
            <div class="twitter-footer align-left"></div>
          </div>
        </div>
        <!-- end widget footer-->
        <!-- widget footer-->
        <div class="col-md-3 col-sm-6">
          <div class="widget-footer">
            <h4>Certified by</h4>
            <div class="widget-tags-wrap">
              <img src="{{ asset('assets/frontend/pic/Weli-Travel_IATA-Logo.png')}}" data-at2x="{{ asset('assets/frontend/pic/Weli-Travel_IATA-Logo.png')}}" alt>
            </div>
          </div>
        </div>
        <!-- end widget footer-->
      </div>
    </div>
    <!-- copyright-->
    <div class="copyright"> 
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p>© Copyright <?php echo date("Y");?> <span>Welitravel</span> &nbsp;&nbsp;|&nbsp;&nbsp; All Rights Reserved</p>
          </div>
          <div class="col-sm-6 text-right"><a href="index.html" class="footer-nav">Home</a><a href="page-about-us.html" class="footer-nav">Pages</a><a href="hotels-search.html" class="footer-nav">Hotels</a><a href="blog-grid.html" class="footer-nav">Blog</a><a href="shop-grid.html" class="footer-nav">Shop</a><a href="page-contact.html" class="footer-nav">Contacts</a></div>
        </div>
      </div>
    </div>
    <!-- end copyright-->
    <!-- scroll top-->
  </footer>
  <div id="scroll-top"><i class="fa fa-angle-up"></i></div>
  <!-- ! footer-->
  <!-- login popup-->
  <div class="login-popup">
    <div class="login-popup-wrap">
      <div class="title-wrap">
        <h2>Login</h2><i class="close-button flaticon-close"></i>
      </div>
      <div class="login-content">
        <form class="form">
          <input type="text" name="email" value="" size="40" placeholder="Enter Your Email ..." aria-required="true" class="form-row form-row-first">
          <input type="text" name="password" value="" size="40" placeholder="Enter Your Password ..." aria-required="true" class="form-row form-row-last">
        </form>
        <div class="remember">
          <div class="checkbox">
            <input id="checkbox30" type="checkbox" value="None" name="check">
            <label for="checkbox30">Remember Me</label>
          </div><a href="#">Forgot Password ?</a>
        </div><a href="#" class="cws-button gray alt full-width mt-20">Login now</a>
      </div>
      <div class="login-bot">
        <p>No account yet? <a href="#">Register now</a></p>
      </div>
    </div>
  </div>
  <!-- ! login popup-->
  <!-- news popup-->
  <div class="news-popup"> 
    <div class="news-popup-wrap"> <i class="close-button flaticon-close"></i>
      <div class="row">
        <div class="col-sm-6"><img src="{{ asset('assets/frontend/pic/news-popup.jpg')}}" data-at2x="{{ asset('assets/frontend/pic/news-popup@2x.jpg')}}" alt></div>
        <div class="col-sm-6">
          <div class="news-content">
            <div class="news-title">
              <h2>Newsletter</h2>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
            </div>
            <form method="get" action="#" class="newsletter contact-form">
              <label class="mb-0">
                <input type="text" placeholder="Enter Your Email ..." value="" name="email" class="newsletter-field mb-0">
              </label>
              <button type="submit" class="newsletter-submit cws-button alt">Submit</button>
            </form>
            <div class="checkbox-wrap">
              <div class="checkbox">
                <input id="checkbox40" type="checkbox" value="None" name="check">
                <label for="checkbox40">Dont Show This Message Again</label>
              </div>
            </div>
            <div class="social-wrap"><a href="#" class="cws-social flaticon-social-4"></a><a href="#" class="cws-social flaticon-social"></a><a href="#" class="cws-social flaticon-social-3"></a><a href="#" class="cws-social flaticon-social-1"></a><a href="#" class="cws-social flaticon-social-network"></a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ! news popup-->
  <script src="https://www.youtube.com/player_api"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery-ui.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/bootstrap.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/owl.carousel.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.sticky.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/TweenMax.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/cws_parallax.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.fancybox.pack.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.fancybox-media.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/isotope.pkgd.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/imagesloaded.pkgd.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/masonry.pkgd.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/rs-plugin/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/rs-plugin/js/extensions/revolution.extension.navigation.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/rs-plugin/js/extensions/revolution.extension.parallax.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/rs-plugin/js/extensions/revolution.extension.video.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/rs-plugin/js/extensions/revolution.extension.actions.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/rs-plugin/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/rs-plugin/js/extensions/revolution.extension.migration.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.validate.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.form.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/script.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/bg-video/cws_self_vimeo_bg.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/bg-video/jquery.vimeo.api.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/bg-video/cws_YT_bg.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.tweet.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.scrollTo.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.flexslider.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/tuner/js/colorpicker.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/tuner/js/scripts.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/retina.min.js')}}"></script>
  @livewireScripts
</body>
</html>