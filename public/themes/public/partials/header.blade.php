<div class="nicdark_section nicdark_navigation">
          <div class="nicdark_menu_fullwidth">
            <div class="nicdark_section nicdark_navigation">
              <div class="nicdark_menu_fullwidth nicdark_menu_fullwidth_boxed">
                <div class="nicdark_section nicdark_bg_grey nicdark_border_bottom_grey nicdark_displaynone_responsive">
                  <div class="nicdark_container nicdark_clearfix">
                    <div class="grid grid_6">
                      <div class="nicdark_focus">
                        <h6 class="grey subtitle">
                          <a class="grey" href="#">
                            <span class="greydark">WETTER IN </span>&nbsp;&nbsp;&nbsp;&nbsp;DÖBRIACH&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class=" icon-cloud-sun"></i>&nbsp;&nbsp;&nbsp;&nbsp; 13 C°
                          </a>
                        </h6>
                      </div>
                    </div>
                    <div class="grid grid_6 right">
                      <div class="nicdark_focus right">
                        <h6 class="grey subtitle">
                          <i class="greydark icon-flag"></i>&nbsp;&nbsp;
                          <a class="grey nicdark_mpopup_window nicdark_outline" href="#nicdark_window">SPRACHE</a>
                          &nbsp;&nbsp;&nbsp;&nbsp;

                          @if(User::check())
                          <span class="grey2">|</span>&nbsp;&nbsp;&nbsp;&nbsp;
                          <i class="greydark icon-user-1"></i>&nbsp;&nbsp;
                          <a class="grey nicdark_mpopup_ajax nicdark_outline" href="/user/home">MEIN ACCOUNT</a>
                          &nbsp;&nbsp;&nbsp;&nbsp;
                          <span class="grey2">|</span>&nbsp;&nbsp;&nbsp;&nbsp;
                          <i class="greydark icon-logout"></i>&nbsp;&nbsp;
                          <a class="grey nicdark_mpopup_ajax nicdark_outline" href="/auth/user/logout">ABMELDEN</a>
                          @else
                          <span class="grey2">|</span>&nbsp;&nbsp;&nbsp;&nbsp;
                          <i class="greydark icon-plus"></i>&nbsp;&nbsp;
                          <a class="grey nicdark_mpopup_ajax nicdark_outline" href="form-register.html">REGISTRIEREN</a>
                          &nbsp;&nbsp;&nbsp;&nbsp;
                          <span class="grey2">|</span>&nbsp;&nbsp;&nbsp;&nbsp;
                          <i class="greydark icon-lock"></i>&nbsp;&nbsp;
                          <a class="grey nicdark_mpopup_ajax nicdark_outline" href="form-login.html">ANMELDEN</a>
                          @endif
                        </h6>
                      </div>
                    </div>

                    <!--info window for languages-->
                    <div class="nicdark_bg_white  zoom-anim-dialog mfp-hide" id="nicdark_window">

                      <div class="nicdark_textevidence nicdark_bg_red">
                        <div class="nicdark_margin20">
                          <h4 class="white">SPRACHEN</h4>
                        </div>
                      </div>

                      <div class="nicdark_margin20">

                        <ul class="nicdark_list border">

                          <li class="nicdark_border_grey">
                            <p>
                              <a class="grey" href="index.html">DEUTSCH</a>
                              <a class="nicdark_btn right nicdark_opacity" href="home.html"><img alt="" src="img/flag/img1.png" width="30"></a>
                            </p>
                            <div class="nicdark_space15"></div>
                          </li>

                          <li class="nicdark_border_grey">
                            <div class="nicdark_space15"></div>
                            <p>
                              <a class="grey" href="index.html">ENGLISH</a>
                              <a class="nicdark_btn right nicdark_opacity" href="home.html"><img alt="" src="img/flag/img2.png" width="30"></a>
                            </p>
                            <div class="nicdark_space15"></div>
                          </li>
                        </ul>

                      </div>
                    </div>
                    <!--end window-->

                  </div>
                </div>
                <div class="nicdark_displaynone_iphoneland nicdark_displaynone_ipadpotr nicdark_displaynone_iphonepotr nicdark_section nicdark_bg_white fade-down">
                  <div class="nicdark_container nicdark_clearfix">

                    <div class="grid grid_12 percentage">

                      <div class="nicdark_space10"></div>

                      <div class="grid_4">
                        <div class="nicdark_space5"></div>
                        <a href="index.html"><img alt="" src="{!! Theme::asset()->url('img/logo.png'); !!}" width="217"></a>
                      </div>

                      <div class="grid_2 nicdark_sizing nicdark_border_right_grey">
                        <p>
                          <i class="icon-phone green"></i>
                          Rufen Sie uns ans</p>
                        <div class="nicdark_space5"></div>
                        <p class="greydark">0001 800-751804</p>
                      </div>

                      <div class="grid_2 nicdark_sizing nicdark_border_right_grey">
                        <p>
                          <i class="icon-clock green"></i>
                          Öffnungszeiten</p>
                        <div class="nicdark_space5"></div>
                        <p class="greydark">08:00 - 18:00</p>
                      </div>

                      <div class="grid_2">
                        <p>
                          <i class="icon-mail-alt green"></i>
                          E-Mail</p>
                        <div class="nicdark_space5"></div>
                        <p class="greydark">info@camping.com</p>
                      </div>

                      <div class="grid_2">
                        <div class="nicdark_space5"></div>
                        <a class="nicdark_btn nicdark_bg_orange  right medium white" href="#">JETZT BUCHEN</a>
                        <div class="nicdark_space5"></div>
                      </div>

                      <div class="nicdark_space10"></div>

                    </div>

                  </div>
                  <!--end container-->

                </div>
                <!--end header-->
                <div class="nicdark_section nicdark_bg_green fade-down">
                  <div class="nicdark_container nicdark_clearfix">

                    <div class="grid grid_12 percentage">

                      <div class="nicdark_space20"></div>

                      <!--logo mobile-->
                      <div class="nicdark_displaynone_desktop nicdark_displayblock_iphonepotr nicdark_displayblock_iphoneland nicdark_displayblock_ipadpotr nicdark_center nicdark_focus">
                        <a href="index.html"><img alt="" src="img/logo-mobile.png" width="180"></a>
                      </div>
                      <!--end logo mobile-->

                      <!--social-->
                      <a class="nicdark_btn_icon nicdark_displaynone_responsive nicdark_zoom nicdark_bg_blue_hover  nicdark_marginright10 nicdark_bg_greendark extrasmall  white right">
                        <i class="icon-facebook"></i>
                      </a>
                      <a class="nicdark_btn_icon nicdark_displaynone_responsive nicdark_zoom nicdark_bg_blue_hover  nicdark_marginright20 nicdark_bg_greendark extrasmall  white right">
                        <i class="icon-twitter"></i>
                      </a>
                      <a class="nicdark_btn_icon nicdark_displaynone_responsive nicdark_zoom nicdark_bg_blue_hover  nicdark_marginright20 nicdark_bg_greendark extrasmall  white right">
                        <i class="icon-gplus"></i>
                      </a>
                      <!--end social-->

                      <nav>
                        <ul class="nicdark_menu nicdark_margin010 nicdark_padding50">

                          <li class="greydark">
                            <a href="home.html">Home</a>
                          </li>
                          <li class="greydark">
                            <a href="#">Accomodations</a>
                            <ul class="sub-menu">
                              <li>
                                <a href="accomodations.html">Archive</a>
                              </li>
                              <li>
                                <a href="single-accomodation.html">Single</a>
                              </li>
                              <li>
                                <a href="shop-cart.html">Cart Page</a>
                              </li>
                              <li>
                                <a href="shop-checkout.html">Checkout Page</a>
                              </li>
                            </ul>
                          </li>
                          <li class="greydark">
                            <a href="#">Pages</a>
                            <ul class="sub-menu">
                              <li>
                                <a href="prices.html">Prices</a>
                              </li>
                              <li>
                                <a href="faq.html">Faq</a>
                              </li>
                              <li>
                                <a href="components.html">Some Components</a>
                                <ul class="sub-menu">
                                  <li>
                                    <a href="components-forms.html">Forms Solutions</a>
                                  </li>
                                  <li>
                                    <a href="components-archives.html">Archives Solutions</a>
                                  </li>
                                  <li>
                                    <a href="components-focus.html">Focus Solutions</a>
                                  </li>
                                  <li>
                                    <a href="components-widgets.html">Widgets Solutions</a>
                                  </li>
                                  <li>
                                    <a href="components.html">All Components</a>
                                  </li>
                                </ul>
                              </li>
                              <li>
                                <a href="gallery.html">Gallery</a>
                              </li>
                              <li>
                                <a href="rules.html">Rules</a>
                              </li>
                              <li>
                                <a href="404.html">404</a>
                              </li>
                            </ul>
                          </li>
                          <li class="greydark">
                            <a class="" href="prices.html">Prices</a>
                          </li>
                          <li class="greydark">
                            <a class="" href="gallery.html">Gallery</a>
                          </li>
                          <!--<li class="greydark nicdark_megamenu">
                            <a href="#">Mega Menu</a>
                            <ul class="sub-menu">
                                <li class="mm_grid mm_grid_3">
                                    <a href="shop.html">SHOP PAGES</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-cart.html">Cart Page</a></li>
                                        <li><a href="shop-checkout.html">Checkout Page</a></li>
                                        <li><a href="single-product.html">Single Product</a></li>
                                    </ul>
                                </li>
                                <li class="mm_grid mm_grid_3">
                                    <a href="#">DEDICATED PAGES</a>
                                    <ul class="sub-menu">
                                        <li><a href="single-course.html">Single Course</a></li>
                                        <li><a href="single-excursion.html">Single Excursion</a></li>
                                        <li><a href="single-event.html">Single Event</a></li>
                                    </ul>
                                </li>
                                <li class="mm_grid mm_grid_3">
                                    <a href="components.html">COMPONENTS</a>
                                    <ul class="sub-menu">
                                        <li><a href="components.html">Jquery Components</a></li>
                                        <li><a href="components.html">Basic Components</a></li>
                                        <li><a href="components.html">All Components</a></li>
                                    </ul>
                                </li>
                                <li class="mm_grid mm_grid_3">
                                    <a href="#">SPECIAL PAGES</a>
                                    <ul class="sub-menu">
                                        <li><a href="prices.html">Prices Page</a></li>
                                        <li><a href="teachers.html">Teachers Page</a></li>
                                        <li><a href="faq.html">Faq Page</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>-->
                          <li class="greydark">
                            <a href="blog-masonry.html">News</a>
                            <ul class="sub-menu">
                              <li>
                                <a href="blog-masonry.html">Masonry Layout</a>
                              </li>
                              <li>
                                <a href="single-post-right-sidebar.html">Single Post</a>
                                <ul class="sub-menu">
                                  <li>
                                    <a href="single-post-left-sidebar.html">Left Sidebar</a>
                                  </li>
                                  <li>
                                    <a href="single-post-right-sidebar.html">Right Sidebar</a>
                                  </li>
                                  <li>
                                    <a href="single-post-full-width.html">Full Width</a>
                                  </li>
                                </ul>
                              </li>
                            </ul>
                          </li>
                          <li class="greydark nicdark_displaynone_ipadland">
                            <a href="events.html">Events</a>
                            <ul class="sub-menu">
                              <li>
                                <a href="events.html">All Events</a>
                              </li>
                              <li>
                                <a href="single-event.html">Single Event</a>
                              </li>
                            </ul>
                          </li>
                          <li class="greydark">
                            <a href="contacts.html">Contacts</a>
                          </li>
                        </ul>
                      </nav>

                      <div class="nicdark_space20"></div>

                    </div>

                  </div>
                  <!--end container-->

                </div>
                <!--end header-->
              </div>
            </div>
          </div>
        </div>
