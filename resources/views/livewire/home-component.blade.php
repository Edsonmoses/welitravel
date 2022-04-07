<div>
      @livewire('headers-component')
      <!-- page section-->
      <section class="page-section pb-0" style="padding: 15px 0 0 0 !important;">
        @livewire('tours-component')
      </section>
      <!-- ! page section-->
      <!-- counter section -->
      @livewire('counter-component')
      <!-- ! counter section-->
      <!-- page section parallax-->
      <section class="small-section cws_prlx_section bg-gray-40"><img src="{{ asset('assets/frontend/pic/1920x630_Parallax 1.jpg')}}" alt class="cws_prlx_layer">
        <div class="container">
          <div class="row">
            <div class="col-md-5">
              <h2 class="title-section-top alt">About</h2>
              <h2 class="title-section alt mb-20"><span>Weli </span>Travel</h2>
              <p class="color-white">Weli Travel has been providing a wide variety of Hajj and Umrah travel packages to guests like you. We have built a reputation as one of the best travel agencies in our industry thus making us the leading Hajj and Umrah travel agency in Uganda. We also help our clients in Umrah Visa and other travel solutions packages, so that you can have the best experience</p>
              <div class="cws_divider short mb-30 mt-30"></div>
              <h3 class="font-5 color-white font-medium">Sheikh Muhammad Abduweli</h3>
            </div>
            <div class="col-md-7">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.youtube.com/embed/8rn1SaGGLCQ" class="embed-responsive-item"></iframe>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ! page section parallax-->
      <!-- recomended section-->
      @livewire('hotels-component')
      <!-- ! recomended section-->
      <!-- testimonials section-->
      <section class="small-section cws_prlx_section bg-blue-40"><img src="{{ asset('assets/frontend/pic/1920x1280_Parallax 2.jpg')}}" alt class="cws_prlx_layer">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <h6 class="title-section-top font-4">Happy Memories</h6>
              <h2 class="title-section alt-2"><span>Our</span> Testimonials</h2>
              <div class="cws_divider mb-25 mt-5"></div>
            </div>
          </div>
          @livewire('testimonials-component')
        </div>
      </section>
      <!-- ! testimonials section-->
      <!-- gallery section-->
      @livewire('gallery-component')
      <!-- ! gallery section-->
      <!-- section testimonials-->
      <section class="small-section cws_prlx_section bg-blue-40"><img src="{{ asset('assets/frontend/pic/1920x1443_Parallax 3.jpg')}}" alt class="cws_prlx_layer">
        <div class="container">
          <div class="row mb-50">
            <div class="col-md-8">
              <h6 class="title-section-top font-4">Latest News</h6>
              <h2 class="title-section alt-2"><span>Our</span> Blog</h2>
              <div class="cws_divider mb-25 mt-5"></div>
              <p class="color-white">Vestibulum feugiat vitae tortor ut venenatis. Sed cursus, purus eu euismod bibendum, diam nisl suscipit odio, vitae ultrices mauris dolor quis mauris. Curabitur ac metus id leo maximus porta.</p>
            </div>
            <div class="col-md-4"><i class="flaticon-suntour-calendar title-icon alt"></i></div>
          </div>
          <div class="carousel-container">
            <div class="row">
              <div class="owl-two-pag pagiation-carousel mb-20">
                <!-- Blog item-->
                <div class="blog-item clearfix">
                  <!-- Blog Image-->
                  <div class="blog-media"><a href="blog-single.html">
                      <div class="pic"><img src="{{ asset('assets/frontend/pic/blog/270x270/1.jpg')}}" data-at2x="{{ asset('assets/frontend/pic/blog/270x270/1@2x.jpg')}}" alt></div></a></div>
                  <!-- blog body-->
                  <div class="blog-item-body clearfix">
                    <!-- title--><a href="blog-single.html">
                      <h6 class="blog-title">Description of Hajj</h6></a>
                    <div class="blog-item-data">Mon, 03-23-2016</div>
                    <!-- Text Intro-->
                    <p>Assuming the state of ihram from Miqat. It is legislated for whoever wants to perform hajj or Umra to perform ghusl, remove the unwanted hairs </p><a href="blog-single.html" class="blog-button">Read more</a>
                  </div>
                </div>
                <!-- ! Blog item-->
                <!-- Blog item-->
                <div class="blog-item clearfix">
                  <!-- Blog Image-->
                  <div class="blog-media"><a href="blog-single.html">
                      <div class="pic"><img src="{{ asset('assets/frontend/pic/blog/270x270/2.jpg')}}" data-at2x="{{ asset('assets/frontend/pic/blog/270x270/2@2x.jpg')}}" alt></div></a></div>
                  <!-- blog body-->
                  <div class="blog-item-body clearfix">
                    <!-- title--><a href="blog-single.html">
                      <h6 class="blog-title">Aenean nec urna ullamcorper</h6></a>
                    <div class="blog-item-data">Mon, 03-23-2016</div>
                    <!-- Text Intro-->
                    <p>Nullam efficitur lorem eu felis rutrum elementum. Vestibulum feugiat massa id ante scelerisque blandit.</p><a href="blog-single.html" class="blog-button">Read more</a>
                  </div>
                </div>
                <!-- ! Blog item-->
                <!-- Blog item-->
                <div class="blog-item clearfix">
                  <!-- Blog Image-->
                  <div class="blog-media"><a href="blog-single.html">
                      <div class="pic"><img src="{{ asset('assets/frontend/pic/blog/270x270/3.jpg')}}" data-at2x="{{ asset('assets/frontend/pic/blog/270x270/3@2x.jpg')}}" alt></div></a></div>
                  <!-- blog body-->
                  <div class="blog-item-body clearfix">
                    <!-- title--><a href="blog-single.html">
                      <h6 class="blog-title">Etiam sit amet est et massa</h6></a>
                    <div class="blog-item-data">Mon, 03-23-2016</div>
                    <!-- Text Intro-->
                    <p>urabitur rhoncus sem et eros pharetra euismod. Ut commodo sem magna, in congue ex vestibulum ut.</p><a href="blog-single.html" class="blog-button">Read more</a>
                  </div>
                </div>
                <!-- ! Blog item-->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ! section testimonials-->
      <!-- call out section-->
      <section class="page-section pt-90 pb-80 bg-main pattern relative">
        <div class="container">
          <div class="call-out-box clearfix with-icon">
            <div class="row call-out-wrap">
              <div class="col-md-5">
                <h6 class="title-section-top gray font-4">subscribe today</h6>
                <h2 class="title-section alt-2"><span>Get</span> Latest offers</h2><i class="flaticon-suntour-email call-out-icon"></i>
              </div>
              <div class="col-md-7">
                <form action="php/contacts-process.php" method="post" class="form contact-form mt-10">
                  <div class="input-container">
                    <input type="text" placeholder="Enter your email" value="" name="email" class="newsletter-field mb-0 form-row"><i class="flaticon-suntour-email icon-left"></i>
                    <button type="submit" class="subscribe-submit"><i class="flaticon-suntour-arrow icon-right"></i></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ! call out section-->
</div>
