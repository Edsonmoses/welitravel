<div>
    <section class="page-section pb-70">
        <div class="container purl">
          <div class="row">
            <div class="col-md-8">
              <h6 class="title-section-top font-4">To give you</h6>
              <h2 class="title-section"><span> a seamless experience we offer:</span></h2>
              <div class="cws_divider mb-25 mt-5"></div>
              
            </div>
            </div>
            <div class="row sicon">
            <div class="col-md-4">
              <h5><img src="{{ asset('assets/frontend/pic/About-Us/Hajj & Umrah-01.svg')}}" alt width="100" height="100"><br/>
                1. Hajj and Umrah</h5>
              <ul class="style-2">
                <li>Accommodation </li>
                <li>Visa acquisition and processing</li>

                <li>Round trip on Emirates</li>

                <li>Juma’ah in both Makkah and Madina</li>

                <li>Luxurious ground transportation</li>

                <li>Visit of historic places, sightseeing and tour</li>

                <li>Guides in Makkah and Madina</li>
              </ul>
            </div>
            <div class="col-md-4">
              <h5><img src="{{ asset('assets/frontend/pic/About-Us/Visa Processing-03.svg')}}" alt width="100" height="100"><br/>2. Visa processing</h5>
              <ul class="style-2">
                <li>All the Saudi Arabia Visas</li>
                <li>All United Arab Emirates Visas</li>
              </ul>
            </div>
            <div class="col-md-4">
              <h5><img src="{{ asset('assets/frontend/pic/About-Us/Air Ticketing-04.svg')}}" alt width="100" height="100"><br/>3. Ticketing</h5>
            </div>
            </div>
            <div class="row">
            <div class="col-md-4">
              <h5><img src="{{ asset('assets/frontend/pic/About-Us/Car Rental-02.svg')}}" alt width="100" height="100"><br/>4. Car renting </h5>
            </div>
            <div class="col-md-4">
               <h5><img src="{{ asset('assets/frontend/pic/About-Us/Hotel Bookings-05.svg')}}" alt width="100" height="100"><br/>5. Hotel bookings</h5>
            </div>
            <div class="col-md-4">
              <h5> <img src="{{ asset('assets/frontend/pic/About-Us/Accomodation-06.svg')}}" alt width="100" height="100"><br/>6. Accommodation </h5>
            </div>
          </div>
        </div>
      </section>
      <!-- ! section features-->
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
      <!-- page contact-->
      <div class="container page">
        <div class="row">
          <div class="col-md-8">
            <h2 class="title-section"><span>Get</span> In touch</h2>
            <div class="cws_divider mb-25 mt-5"></div>
            <p>Our hospitable team is ready to answer all your queries. </p>
            <ul class="style-5">
            <li>Email: info@welitravel.com</li>
            <li>Office Line: +256393206289</li>
            <li>Mobile and Whatsapp Line: +256705555557</li>
          </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-md-30">
            <div class="add-comment pattern bg-gray-3 relative">
              <div class="widget-contact-form pb-0">
                <!-- contact-form-->
                <div id="feedback-form-errors" role="alert" class="alert alert-danger alt alert-dismissible fade in">
                  <button type="button" data-dismiss="alert" aria-label="Close" class="close"></button><i class="alert-icon border fa fa-exclamation-triangle"></i><strong>Error Message!</strong><br>
                  <div class="message"></div>
                </div>
                <div class="email_server_responce"></div>
                <form action="php/contacts-process.php" method="post" class="form contact-form alt clearfix">
                  <div class="row">
                    <div class="col-md-6">
                      <input type="text" name="name" value="" size="40" placeholder="Name" aria-invalid="false" aria-required="true" class="form-row form-row-first">
                    </div>
                    <div class="col-md-6">
                      <input type="text" name="email" value="" size="40" placeholder="Email" aria-required="true" class="form-row form-row-last">
                    </div>
                  </div>
                  <textarea name="message" cols="40" rows="4" placeholder="Comment" aria-invalid="false" aria-required="true"></textarea>
                  <input type="submit" value="Submit now" class="cws-button alt">
                </form>
                <!-- ! contact-form-->
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="map-wrapper alt-h">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7516217556417!2d32.5745815500362!3d0.3312988997570982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dbbe92a8c0e21%3A0x7ae149b9c975a4f9!2sWeli%20Travel!5e0!3m2!1sen!2ske!4v1648553855247!5m2!1sen!2ske" width="600" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
      <!-- ! page contact-->
</div>
