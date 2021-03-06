<div>
 @foreach ($headersetting as $setting )
 @if ($setting->name == 'DEFUALT')
 <div class="content-body">
  <div class="tp-banner-container">
    <div class="tp-banner-slider">
      <ul>
        @foreach ($sliders as $slider )
         <li data-masterspeed="700" data-slotamount="7" data-transition="fade"><img src="{{ asset('assets/frontend/rs-plugin/assets/loader.gif')}}" data-lazyload="{{ asset('assets/frontend/pic/slider/main/')}}/{{$slider->image}}" data-bgposition="center" alt="" data-kenburns="off" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10">
          <div data-x="['center','center','center','center']" data-y="center" data-transform_in="x:-150px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:150px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="400" class="tp-caption sl-content">
            {{--<div class="sl-title-top">{{$slider->title}}</div>
            <div class="sl-title">{{$slider->subtitle}}</div>
            <div class="sl-title-bot">{{$slider->Starting}} <span>${{$slider->price}}</span> {{$slider->per}}</div>--}}
          </div>
        </li>
        @endforeach
      </ul>
    </div>
    <!-- search tours form-->
   {{--  <div class="search-tours-form">
      <div class="container">
        <div class="search-tours-wrap">
          <div class="search-tours-tabs">
            <div class="search-tabs-wrap">
              <div data-tours-cat="tab-cat-1" class="tours-tab-btn active"><span>Tours</span><i class="tours-tab-icon flaticon-suntour-world"></i></div>
              <div data-tours-cat="tab-cat-2" class="tours-tab-btn"> <span>Holidays</span><i class="tours-tab-icon flaticon-suntour-fireworks"></i></div>
              <div data-tours-cat="tab-cat-3" class="tours-tab-btn"> <span>Hotels</span><i class="tours-tab-icon flaticon-suntour-hotel"></i></div>
              <div data-tours-cat="tab-cat-4" class="tours-tab-btn"> <span>Cruise</span><i class="tours-tab-icon flaticon-suntour-ship"></i></div>
              <div data-tours-cat="tab-cat-5" class="tours-tab-btn"> <span>Flights</span><i class="tours-tab-icon flaticon-suntour-airplane"></i></div>
              <div data-tours-cat="tab-cat-6" class="tours-tab-btn"> <span>Cars</span><i class="tours-tab-icon flaticon-suntour-car"></i></div>
            </div>
          </div>
          <div class="search-tours-content">
            <div data-tours-cat="tab-cat-1" class="tours-container active">
              <div class="tours-box">
                <div class="tours-search">
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
                  <div class="selection-box"><i class="flaticon-suntour-children box-icon"></i>
                    <select>
                      <option>Child</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                    </select>
                  </div>
                  <div class="button-search">Search</div>
                </div>
              </div>
            </div>
            <div data-tours-cat="tab-cat-2" style="display: none;" class="tours-container">
              <div class="holidays-box">
                <div class="holidays-search">
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
                  <div class="selection-box"><i class="flaticon-suntour-children box-icon"></i>
                    <select>
                      <option>Child</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                    </select>
                  </div>
                  <div class="button-search">Search</div>
                </div>
              </div>
            </div>
            <div data-tours-cat="tab-cat-3" style="display: none;" class="tours-container">
              <div class="hotels-box">
                <div class="hotels-search">
                  <form method="post" class="form search">
                    <div class="search-wrap">
                      <input type="text" placeholder="Destination, hotel name, airport, train station, landmark or address" class="form-control search-field"><i class="flaticon-suntour-map search-icon"></i>
                    </div>
                  </form>
                </div>
                <div class="hotels-select">
                  <div class="tours-calendar divider-skew"> 
                    <input placeholder="Check in" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="calendar-default textbox-n"><i class="flaticon-suntour-calendar calendar-icon"></i>
                  </div>
                  <div class="tours-calendar divider-skew"> 
                    <input placeholder="Check out" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="calendar-default textbox-n"><i class="flaticon-suntour-calendar calendar-icon"></i>
                  </div>
                  <div class="selection-box divider-skew"><i class="flaticon-suntour-bed box-icon"></i>
                    <select>
                      <option>Rooms</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                    </select>
                  </div>
                  <div class="selection-box divider-skew"><i class="flaticon-suntour-adult box-icon"></i>
                    <select>
                      <option>Adults</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                    </select>
                  </div>
                  <div class="selection-box"><i class="flaticon-suntour-children box-icon"></i>
                    <select>
                      <option>Children</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                    </select>
                  </div>
                  <div class="button-search">Search</div>
                </div>
              </div>
            </div>
            <div data-tours-cat="tab-cat-4" style="display: none;" class="tours-container">
              <div class="cruise-box">
                <div class="cruise-search"> 
                  <form method="post" class="form search divider-skew">
                    <div class="search-wrap">
                      <input type="text" placeholder="Destination" class="form-control search-field"><i class="flaticon-suntour-map search-icon"></i>
                    </div>
                  </form>
                  <div class="tours-calendar"> 
                    <input placeholder="Depart date" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="calendar-default textbox-n"><i class="flaticon-suntour-calendar calendar-icon"></i>
                  </div>
                  <div class="button-search">Search</div>
                </div>
              </div>
            </div>
            <div data-tours-cat="tab-cat-5" style="display: none;" class="tours-container">
              <div class="flights-box">
                <div class="flights-search">
                  <form method="post" class="form search divider-skew">
                    <div class="search-wrap">
                      <input type="text" placeholder="Flying from (City or airport)" class="form-control search-field"><i class="flaticon-suntour-map search-icon"></i>
                    </div>
                  </form>
                  <form method="post" class="form search">
                    <div class="search-wrap">
                      <input type="text" placeholder="Flying to (City or airport)" class="form-control search-field"><i class="flaticon-suntour-map search-icon"></i>
                    </div>
                  </form>
                </div>
                <div class="flights-select clearfix">
                  <div class="tours-calendar divider-skew"> 
                    <input placeholder="Depart" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="calendar-default textbox-n"><i class="flaticon-suntour-calendar calendar-icon"></i>
                  </div>
                  <div class="tours-calendar divider-skew"> 
                    <input placeholder="Return" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="calendar-default textbox-n"><i class="flaticon-suntour-calendar calendar-icon"></i>
                  </div>
                  <div class="selection-box divider-skew"><i class="flaticon-suntour-adult box-icon"></i>
                    <select>
                      <option>Adults</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                    </select>
                  </div>
                  <div class="selection-box"><i class="flaticon-suntour-children box-icon"></i>
                    <select>
                      <option>Children</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                    </select>
                  </div>
                </div>
                <div class="flights-search">
                  <form method="post" class="form search divider-skew">
                    <div class="search-wrap">
                      <input type="text" placeholder="Prefered airline" class="form-control search-field"><i class="flaticon-suntour-map search-icon"></i>
                    </div>
                  </form>
                  <form method="post" class="form search">
                    <div class="search-wrap">
                      <input type="text" placeholder="Prefered class" class="form-control search-field"><i class="flaticon-suntour-map search-icon"></i>
                    </div>
                  </form>
                  <div class="button-search">Search</div>
                </div>
                <div class="flights-advance"><span>Advanced options</span>
                  <div class="checkbox-wrap">
                    <div class="checkbox">
                      <input id="checkbox8" type="checkbox" value="none" name="check">
                      <label for="checkbox8">Nonstop</label>
                    </div>
                  </div>
                  <div class="checkbox-wrap">
                    <div class="checkbox">
                      <input id="checkbox9" type="checkbox" value="none" name="check">
                      <label for="checkbox9">Refundable flight</label>
                    </div>
                  </div>
                  <div class="buttons-wrap"> <a href="#" class="tour-button">Roundtrip </a><a href="#" class="tour-button">One Way </a><a href="#" class="tour-button">Multiply Destinations </a></div>
                </div>
              </div>
            </div>
            <div data-tours-cat="tab-cat-6" style="display: none;" class="tours-container">
              <div class="cars-box">
                <div class="cars-search">
                  <form method="post" class="form search divider-skew">
                    <div class="search-wrap">
                      <input type="text" placeholder="Picking up (City, airport, address)" class="form-control search-field"><i class="flaticon-suntour-map search-icon"></i>
                    </div>
                  </form>
                  <form method="post" class="form search">
                    <div class="search-wrap">
                      <input type="text" placeholder="Dropping off" class="form-control search-field"><i class="flaticon-suntour-map search-icon"></i>
                    </div>
                  </form>
                </div>
                <div class="cars-calendar clearfix">
                  <div class="tours-calendar divider-skew"> 
                    <input placeholder="Pickup up date" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="calendar-default textbox-n">
                    <div class="selection-box angle">
                      <select>
                        <option>10:30 AM</option>
                        <option>11:30 AM</option>
                        <option>12:30 AM</option>
                        <option>13:30 AM</option>
                      </select>
                    </div><i class="flaticon-suntour-calendar calendar-icon"></i>
                  </div>
                  <div class="tours-calendar"> 
                    <input placeholder="Drop off date" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="calendar-default textbox-n">
                    <div class="selection-box angle">
                      <select>
                        <option>10:30 AM</option>
                        <option>11:30 AM</option>
                        <option>12:30 AM</option>
                        <option>13:30 AM</option>
                      </select>
                    </div><i class="flaticon-suntour-calendar calendar-icon"></i>
                  </div>
                </div>
                <div class="cars-search">
                  <form method="post" class="form search divider-skew">
                    <div class="search-wrap">
                      <input type="text" placeholder="Car type" class="form-control search-field"><i class="flaticon-suntour-map search-icon"></i>
                    </div>
                  </form>
                  <form method="post" class="form search">
                    <div class="search-wrap">
                      <input type="text" placeholder="Car rental company" class="form-control search-field"><i class="flaticon-suntour-map search-icon"></i>
                    </div>
                  </form>
                  <div class="button-search">Search</div>
                </div>
                <div class="cars-advance"><span>Advanced options</span>
                  <div class="checkbox-wrap">
                    <div class="checkbox">
                      <input id="checkbox1" type="checkbox" value="none" name="check">
                      <label for="checkbox1">Infant seat</label>
                    </div>
                  </div>
                  <div class="checkbox-wrap">
                    <div class="checkbox">
                      <input id="checkbox2" type="checkbox" value="none" name="check">
                      <label for="checkbox2">Ski rack</label>
                    </div>
                  </div>
                  <div class="checkbox-wrap">
                    <div class="checkbox">
                      <input id="checkbox3" type="checkbox" value="none" name="check">
                      <label for="checkbox3">Left hand control</label>
                    </div>
                  </div>
                  <div class="checkbox-wrap">
                    <div class="checkbox">
                      <input id="checkbox4" type="checkbox" value="none" name="check">
                      <label for="checkbox4">Toddler seat</label>
                    </div>
                  </div>
                  <div class="checkbox-wrap">
                    <div class="checkbox">
                      <input id="checkbox5" type="checkbox" value="none" name="check">
                      <label for="checkbox5">Snow chains</label>
                    </div>
                  </div>
                  <div class="checkbox-wrap">
                    <div class="checkbox">
                      <input id="checkbox6" type="checkbox" value="none" name="check">
                      <label for="checkbox6">Right hand control</label>
                    </div>
                  </div>
                  <div class="checkbox-wrap">
                    <div class="checkbox">
                      <input id="checkbox7" type="checkbox" value="none" name="check">
                      <label for="checkbox7">Navigation system</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>--}}
    <!-- ! search tours form-->
  </div> 
  @elseif ($setting->name == 'SLIDER') 
  <div class="content-body">
    <div class="tp-banner-container">
      <div class="tp-banner">
        <ul>
          @foreach ($sliders as $slider )
          <li data-masterspeed="700" data-slotamount="7" data-transition="fade"><img src="rs-plugin/assets/loader.gif" data-lazyload="{{ asset('assets/frontend/pic/slider/main/')}}/{{$slider->image}}" data-bgposition="center" alt="" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10">
            <div data-x="['center','center','center','center']" data-y="center" data-transform_in="x:-150px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:150px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="400" class="tp-caption sl-content">
              <div class="sl-title-top">{{$slider->title}}</div>
              <div class="sl-title">{{$slider->subtitle}}</div>
              <div class="sl-title-bot">{{$slider->Starting}} <span>${{$slider->price}}</span>{{$slider->per}}</div>
            </div>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
    <!-- slider info-->
    <div class="slider-info-wrap clearfix">
      <div class="slider-info-content">
        @foreach ($b_sliders as $slider )
          <div class="slider-info-item">
            <div class="info-item-media"><img src="{{ asset('assets/frontend/pic')}}/{{$slider->infoImage}}" data-at2x="{{ asset('assets/frontend/pic')}}/{{$slider->infoImage2}}" alt>
              <div class="info-item-text">
                <div class="info-price font-4"><span>{{$slider->Starting}} {{$slider->per}}</span> ${{$slider->infoprice}}</div>
                <div class="info-temp font-4"><span>{{$slider->tempInfo}}</span> {{$slider->infotemp}}</div>
                <p class="info-text">{{$slider->infoText}}</p>
              </div>
            </div>
            <div class="info-item-content">
              <div class="main-title">
                <h3 class="title"><span class="font-4">{{$slider->maintitle}}</span> {{$slider->spantitle}}</h3>
                <div class="price"><span>${{$slider->mainprice}}</span> {{$slider->mainper}}</div><a href="{{$slider->mainpUrl}}" class="button">Details</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  @elseif ($setting->name == 'VIDEO') 
  <div class="row_bg">
    <!-- bg video-->
    <div data-video-source="4GC0jGODGeY" data-video-id="video-559a112d1873b" data-img-url="pic/video-pic+.jpg" class="row_bg_video cws_Yt_video_bg">
      <div id="video-559a112d1873b"></div>
    </div>
    <!-- ! bg video-->
    <div class="content-video-bg slider">
      <div class="tp-banner-container">
        <div class="tp-banner">
          <ul>
            @foreach ($sliders as $slider )
            <li data-masterspeed="700" data-slotamount="7" data-transition="fade">
              <div data-x="['center','center','center','center']" data-y="center" data-transform_in="x:-150px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:150px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="400" class="tp-caption sl-content">
                <div class="sl-title-top">{{$slider->title}}</div>
                <div class="sl-title">{{$slider->subtitle}}</div>
                <div class="sl-title-bot">{{$slider->Starting}} <span>${{$slider->price}}</span> {{$slider->per}}</div>
              </div>
            </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
    <!-- slider info-->
    <div class="slider-info-wrap clearfix">
      <div class="slider-info-content">
        @foreach ($b_sliders as $slider )
          <div class="slider-info-item">
            <div class="info-item-media"><img src="{{ asset('assets/frontend/pic')}}/{{$slider->infoImage}}" data-at2x="{{ asset('assets/frontend/pic')}}/{{$slider->infoImage2}}" alt>
              <div class="info-item-text">
                <div class="info-price font-4"><span>{{$slider->Starting}} {{$slider->per}}</span> ${{$slider->infoprice}}</div>
                <div class="info-temp font-4"><span>{{$slider->tempInfo}}</span> {{$slider->infotemp}}</div>
                <p class="info-text">{{$slider->infoText}}</p>
              </div>
            </div>
            <div class="info-item-content">
              <div class="main-title">
                <h3 class="title"><span class="font-4">{{$slider->maintitle}}</span> {{$slider->spantitle}}</h3>
                <div class="price"><span>${{$slider->mainprice}}</span> {{$slider->mainper}}</div><a href="{{$slider->mainpUrl}}" class="button">Details</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
    <!-- ! slider-info-->
  </div>
 @endif
   
 @endforeach
  
</div>
