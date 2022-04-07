<div>
    <div class="container page purl">
        <h2 class="title-section mb-5"><span>Search</span> Hotels</h2>
        <div class="search-hotels mb-40 pattern">
          <div class="tours-container">
            <div class="tours-box">
              <div class="tours-search mb-20">
                <form method="post" class="form search divider-skew">
                  <div class="search-wrap">
                    <input type="text" placeholder="Destination" class="form-control search-field"><i class="flaticon-suntour-map search-icon"></i>
                  </div>
                </form>
                <div class="tours-calendar divider-skew"> 
                  <input placeholder="Depart date" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="calendar-default textbox-n"><i class="flaticon-suntour-calendar calendar-icon"></i>
                </div>
                <div class="tours-calendar divider-skew"> 
                  <input placeholder="Return date" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="calendar-default textbox-n"><i class="flaticon-suntour-calendar calendar-icon"></i>
                </div>
                <div class="selection-box divider-skew"><i class="flaticon-suntour-adult box-icon"></i>
                  <select>
                    <option>Adult</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                </div>
                <div class="selection-box divider-skew"><i class="flaticon-suntour-children box-icon"></i>
                  <select>
                    <option>Child</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                </div>
                <div class="selection-box"><i class="flaticon-suntour-bed box-icon"></i>
                  <select>
                    <option>Room</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 clearfix">
                  <div class="widget-price-slider float-left">
                    <form method="get" action="#">
                      <div class="price_slider_wrapper">
                        <div aria-disabled="false" class="price_slider price_slider_amount ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                          <div class="ui-slider-range ui-widget-header ui-corner-all"></div><a href="#" class="ui-slider-handle ui-state-default ui-corner-all">
                            <div style="" class="price_label"><span class="from"></span></div></a><a href="#" class="ui-slider-handle ui-state-default ui-corner-all">
                            <div style="" class="price_label"><span class="to"></span></div></a>
                        </div>
                        <div class="price_slider_amount addon">
                          <input id="min_price" type="text" name="min_price" value="" data-min="0" placeholder="Min price" style="display: none;">
                          <input id="max_price" type="text" name="max_price" value="" data-max="200" placeholder="Max price" style="display: none;">
                          <input type="hidden" name="post_type" value="product">
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="rating">Rating
                    <div class="stars stars-5"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="tours-search">
                    <form method="post" class="form search">
                      <div class="search-wrap">
                        <input type="text" placeholder="Destination" class="form-control search-field"><i class="flaticon-suntour-map search-icon"></i>
                      </div>
                    </form>
                    <div class="button-search">Search</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
          <div class="row">
            <!-- Recomended item-->
            <div class="col-md-6">
              <div class="recom-item">
                <div class="recom-media"><a href="hotels-details.html">
                    <div class="pic"><img src="{{ asset('assets/frontend/pic/recomended/Al Nosour Al Mohajreen Hotel 3*/770x240_Al Nosour Al Mohajreen Hotel 3*_2.jpg')}}" data-at2x="{{ asset('assets/frontend/pic/recomended/Al Nosour Al Mohajreen Hotel 3*/1540x480_Al Nosour Al Mohajreen Hotel 3*_2.jpg')}}" alt></div></a>
                  <div class="location"><i class="flaticon-suntour-map"></i> 6406 Al Hijrah, Al Mesfala</div>
                </div>
                <!-- Recomended Content-->
                <div class="recom-item-body"><a href="hotels-details.html">
                    <h6 class="blog-title">Al Nosour Al Mohajreen Hotel </h6></a>
                  <div class="stars stars-3"></div>
                  <div class="recom-price"><span class="font-4">$90</span> per night</div>
                  <p class="mb-30">Featuring free WiFi, Al Nosour Al Mohajreen Hotel offers </p><a href="hotels-details.html" class="recom-button">Read more</a><a href="hotels-details.html" class="cws-button small alt">Book now</a>
                  <div class="action font-2">20%</div>
                </div>
                <!-- Recomended Image-->
              </div>
            </div>
            <!-- ! Recomended item-->
            <!-- Recomended item-->
            <div class="col-md-6">
              <div class="recom-item">
                <div class="recom-media"><a href="hotels-details.html">
                    <div class="pic"><img src="{{ asset('assets/frontend/pic/recomended/Anjum Hotel Makkah/770x240_Anjum Hotel Makkah_2.jpg')}}" data-at2x="{{ asset('assets/frontend/pic/recomended/Anjum Hotel Makkah/1540x480_Anjum Hotel Makkah_2.jpg')}}" alt></div></a>
                  <div class="location"><i class="flaticon-suntour-map"></i> Alkhalil Courtyard, Souk Al-Khalil</div>
                </div>
                <!-- Recomended Content-->
                <div class="recom-item-body"><a href="hotels-details.html">
                    <h6 class="blog-title">Anjum Hotel Makkah</h6></a>
                  <div class="stars stars-3"></div>
                  <div class="recom-price"><span class="font-4">$35</span> per night</div>
                  <p class="mb-30">2 restaurants, a coffee shop/cafe, and self parking are available at this smoke-free hotel.</p><a href="hotels-details.html" class="recom-button">Read more</a><a href="hotels-details.html" class="cws-button small alt">Book now</a>
                </div>
                <!-- Recomended Image-->
              </div>
            </div>
            <!-- ! Recomended item-->
            <!-- Recomended item-->
            <div class="col-md-6">
              <div class="recom-item">
                <div class="recom-media"><a href="hotels-details.html">
                    <div class="pic"><img src="{{ asset('assets/frontend/pic/recomended/Azka Al Safa Hotel 5*/770x240_Azka Al Safa Hotel 5*_2.jpg')}}" data-at2x="{{ asset('assets/frontend/pic/recomended/Azka Al Safa Hotel 5*/1540x480_Azka Al Safa Hotel 5*_2.jpg')}}" alt></div></a>
                  <div class="location"><i class="flaticon-suntour-map"></i> Ajyad. King Abdul Aziz rd</div>
                </div>
                <!-- Recomended Content-->
                <div class="recom-item-body"><a href="hotels-details.html">
                    <h6 class="blog-title">Azka Al Safa</h6></a>
                  <div class="stars stars-5"></div>
                  <div class="recom-price"><span class="font-4">$110</span> per night</div>
                  <p class="mb-30">4 restaurants, a coffee shop/cafe, and self parking are available at </p><a href="hotels-details.html" class="recom-button">Read more</a><a href="hotels-details.html" class="cws-button small alt">Book now</a>
                </div>
                <!-- Recomended Image-->
              </div>
            </div>
            <!-- ! Recomended item-->
            <!-- Recomended item-->
            <div class="col-md-6">
              <div class="recom-item">
                <div class="recom-media"><a href="hotels-details.html">
                    <div class="pic"><img src="{{ asset('assets/frontend/pic/recomended/Jabal Omar Hyatt Regency Makkah 5*/770x240_Jabal Omar Hyatt Regency Makkah 5*_2.jpg')}}" data-at2x="{{ asset('assets/frontend/pic/recomended/Jabal Omar Hyatt Regency Makkah 5*/1540x480_Jabal Omar Hyatt Regency Makkah 5*_2.jpg')}}" alt></div></a>
                  <div class="location"><i class="flaticon-suntour-map"></i> Jabal Omar, Ibrahim Al Khalil Street,</div>
                </div>
                <!-- Recomended Content-->
                <div class="recom-item-body"><a href="hotels-details.html">
                    <h6 class="blog-title">Jabal Omar Hyatt Regency Makkah</h6></a>
                  <div class="stars stars-5"></div>
                  <div class="recom-price"><span class="font-4">$55</span> per night</div>
                  <p class="mb-30">This smoke-free hotel features 2 restaurants, a restaurant, and a </p><a href="hotels-details.html" class="recom-button">Read more</a><a href="hotels-details.html" class="cws-button small alt">Book now</a>
                </div>
                <!-- Recomended Image-->
              </div>
            </div>
            <!-- ! Recomended item-->
            <!-- Recomended item-->
            <div class="col-md-6">
              <div class="recom-item">
                <div class="recom-media"><a href="hotels-details.html">
                    <div class="pic"><img src="{{ asset('assets/frontend/pic/recomended/Makkah Hilton Towers 5*/770x240_Makkah Hilton Towers 5*_2.jpg')}}" data-at2x="{{ asset('assets/frontend/pic/recomended/Makkah Hilton Towers 5*/1540x480_Makkah Hilton Towers 5*_2.jpg')}}" alt></div></a>
                  <div class="location"><i class="flaticon-suntour-map"></i>  Ibrahim Al Khalil Road, Mecca, 21955</div>
                </div>
                <!-- Recomended Content-->
                <div class="recom-item-body"><a href="hotels-details.html">
                    <h6 class="blog-title">HILTON SUITES MAKKAH </h6></a>
                  <div class="stars stars-5"></div>
                  <div class="recom-price"><span class="font-4">$98</span> per night</div>
                  <p class="mb-30">2 restaurants, a bar/lounge, and 3 coffee shops/cafés are available </p><a href="hotels-details.html" class="recom-button">Read more</a><a href="hotels-details.html" class="cws-button small alt">Book now</a>
                </div>
                <!-- Recomended Image-->
              </div>
            </div>
            <!-- ! Recomended item-->
            <!-- Recomended item-->
            <div class="col-md-6">
              <div class="recom-item">
                <div class="recom-media"><a href="hotels-details.html">
                    <div class="pic"><img src="{{ asset('assets/frontend/pic/recomended/Pulman Zamzam Makkah/770x240_Pullman Zamzam Makkah 5*_2.jpg')}}" data-at2x="{{ asset('assets/frontend/pic/recomended/Pulman Zamzam Makkah/1540x480_Pullman Zamzam Makkah 5*_2.jpg')}}" alt></div></a>
                  <div class="location"><i class="flaticon-suntour-map"></i> : Abraj Al-bait., Central Area Ajyad</div>
                </div>
                <!-- Recomended Content-->
                <div class="recom-item-body"><a href="hotels-details.html">
                    <h6 class="blog-title">Pullman Zamzam Makkah</h6></a>
                  <div class="stars stars-5"></div>
                  <div class="recom-price"><span class="font-4">$75</span> per night</div>
                  <p class="mb-30">Along with 2 restaurants, this hotel has a snack bar/deli and a </p><a href="hotels-details.html" class="recom-button">Read more</a><a href="hotels-details.html" class="cws-button small alt">Book now</a>
                </div>
                <!-- Recomended Image-->
              </div>
            </div>
            <!-- ! Recomended item-->
             <!-- Recomended item-->
             <div class="col-md-6">
              <div class="recom-item">
                <div class="recom-media"><a href="hotels-details.html">
                    <div class="pic"><img src="{{ asset('assets/frontend/pic/recomended/Swissotel Makkah 5*/770x240_Swissotel Makkah 5*_2.jpg')}}" data-at2x="{{ asset('assets/frontend/pic/recomended/Swissotel Makkah 5*/1540X480_Swissotel Makkah 5*_2.jpg')}}" alt></div></a>
                  <div class="location"><i class="flaticon-suntour-map"></i> King Abdul Aziz Endowment</div>
                </div>
                <!-- Recomended Content-->
                <div class="recom-item-body"><a href="hotels-details.html">
                    <h6 class="blog-title">Swissotel Makkah</h6></a>
                  <div class="stars stars-5"></div>
                  <div class="recom-price"><span class="font-4">$75</span> per night</div>
                  <p class="mb-30">Along with 3 restaurants, this smoke-free hotel has a bar/lounge </p><a href="hotels-details.html" class="recom-button">Read more</a><a href="hotels-details.html" class="cws-button small alt">Book now</a>
                </div>
                <!-- Recomended Image-->
              </div>
            </div>
            <!-- ! Recomended item-->
          </div>
      </div>
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
      <!-- ! call out section	-->
</div>
