<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#333"> 
    @yield('titles')
   
    <link rel="shortcut icon" href="assets/img/favicon.png?v=3">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{ URL::asset('public/assets/css/preload.min.css')}}" />
    <link rel="stylesheet" href="{{ URL::asset('public/assets/css/plugins.min.css')}}" />
    <link rel="stylesheet" href="{{ URL::asset('public/assets/css/style.light-blue-500.min.css')}}" />
    <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="ms-preload" class="ms-preload">
      <div id="status">
        <div class="spinner">
          <div class="dot1"></div>
          <div class="dot2"></div>
        </div>
      </div>
    </div>
    <div class="sb-site-container">
      <!-- Modal -->
      <div class="modal modal-primary" id="ms-account-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog animated zoomIn animated-3x" role="document">
          <div class="modal-content">
            <div class="modal-header shadow-2dp no-pb">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">
                  <i class="zmdi zmdi-close"></i>
                </span>
              </button>
              <div class="modal-title text-center">
                <span class="ms-logo ms-logo-white ms-logo-sm mr-1">M</span>
                <h3 class="no-m ms-site-title">Material
                  <span>Style</span>
                </h3>
              </div>
              <div class="modal-header-tabs">
                <ul class="nav nav-tabs nav-tabs-full nav-tabs-3 nav-tabs-primary" role="tablist">
                  <li role="presentation" class="active">
                    <a href="#ms-login-tab" aria-controls="ms-login-tab" role="tab" data-toggle="tab" class="withoutripple">
                      <i class="zmdi zmdi-account"></i> Login</a>
                  </li>
                  <li role="presentation">
                    <a href="#ms-register-tab" aria-controls="ms-register-tab" role="tab" data-toggle="tab" class="withoutripple">
                      <i class="zmdi zmdi-account-add"></i> Register</a>
                  </li>
                  <li role="presentation">
                    <a href="#ms-recovery-tab" aria-controls="ms-recovery-tab" role="tab" data-toggle="tab" class="withoutripple">
                      <i class="zmdi zmdi-key"></i> Recovery Pass</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="modal-body">
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade active in" id="ms-login-tab">
                  <form autocomplete="off">
                    <fieldset>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-account"></i>
                          </span>
                          <label class="control-label" for="ms-form-user">Username</label>
                          <input type="text" id="ms-form-user" class="form-control"> </div>
                      </div>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-lock"></i>
                          </span>
                          <label class="control-label" for="ms-form-pass">Password</label>
                          <input type="password" id="ms-form-pass" class="form-control"> </div>
                      </div>
                      <div class="row mt-2">
                        <div class="col-md-6">
                          <div class="form-group no-mt">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox"> Remember Me </label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <button class="btn btn-raised btn-primary pull-right">Login</button>
                        </div>
                      </div>
                    </fieldset>
                  </form>
                  <div class="text-center">
                    <h3>Login with</h3>
                    <a href="javascript:void(0)" class="wave-effect-light btn btn-raised btn-facebook">
                      <i class="zmdi zmdi-facebook"></i> Facebook</a>
                    <a href="javascript:void(0)" class="wave-effect-light btn btn-raised btn-twitter">
                      <i class="zmdi zmdi-twitter"></i> Twitter</a>
                    <a href="javascript:void(0)" class="wave-effect-light btn btn-raised btn-google">
                      <i class="zmdi zmdi-google"></i> Google</a>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="ms-register-tab">
                  <form>
                    <fieldset>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-account"></i>
                          </span>
                          <label class="control-label" for="ms-form-user">Username</label>
                          <input type="text" id="ms-form-user" class="form-control"> </div>
                      </div>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-email"></i>
                          </span>
                          <label class="control-label" for="ms-form-email">Email</label>
                          <input type="email" id="ms-form-email" class="form-control"> </div>
                      </div>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-lock"></i>
                          </span>
                          <label class="control-label" for="ms-form-pass">Password</label>
                          <input type="password" id="ms-form-pass" class="form-control"> </div>
                      </div>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-lock"></i>
                          </span>
                          <label class="control-label" for="ms-form-pass">Re-type Password</label>
                          <input type="password" id="ms-form-pass" class="form-control"> </div>
                      </div>
                      <button class="btn btn-raised btn-block btn-primary">Register Now</button>
                    </fieldset>
                  </form>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="ms-recovery-tab">
                  <fieldset>
                    <div class="form-group label-floating">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="zmdi zmdi-account"></i>
                        </span>
                        <label class="control-label" for="ms-form-user">Username</label>
                        <input type="text" id="ms-form-user" class="form-control"> </div>
                    </div>
                    <div class="form-group label-floating">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="zmdi zmdi-email"></i>
                        </span>
                        <label class="control-label" for="ms-form-email">Email</label>
                        <input type="email" id="ms-form-email" class="form-control"> </div>
                    </div>
                    <button class="btn btn-raised btn-block btn-primary">Send Password</button>
                  </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <header class="ms-header ms-header-primary">
        <div class="container container-full">
          <div class="ms-title">
            <a href="index.html">
              <!-- <img src="assets/img/demo/logo-header.png" alt=""> -->
              <span class="ms-logo animated zoomInDown animation-delay-5">EA</span>
              <h1 class="animated fadeInRight animation-delay-6">Espartan
                <span>Apps</span>
              </h1>
            </a>
          </div>
           <!--<div class="header-right">
            <div class="share-menu">
              <ul class="share-menu-list">
                <li class="animated fadeInRight animation-delay-3">
                  <a href="javascript:void(0)" class="btn-circle btn-google">
                    <i class="zmdi zmdi-google"></i>
                  </a>
                </li>
                <li class="animated fadeInRight animation-delay-2">
                  <a href="javascript:void(0)" class="btn-circle btn-facebook">
                    <i class="zmdi zmdi-facebook"></i>
                  </a>
                </li>
                <li class="animated fadeInRight animation-delay-1">
                  <a href="javascript:void(0)" class="btn-circle btn-twitter">
                    <i class="zmdi zmdi-twitter"></i>
                  </a>
                </li>
              </ul>
              <a href="javascript:void(0)" class="btn-circle btn-circle-primary animated zoomInDown animation-delay-7">
                <i class="zmdi zmdi-share"></i>
              </a>
            </div>
            <a href="javascript:void(0)" class="btn-circle btn-circle-primary no-focus animated zoomInDown animation-delay-8" data-toggle="modal" data-target="#ms-account-modal">
              <i class="zmdi zmdi-account"></i>
            </a>
           <form class="search-form animated zoomInDown animation-delay-9">
              <input id="search-box" type="text" class="search-input" placeholder="Search..." name="q" />
              <label for="search-box">
                <i class="zmdi zmdi-search"></i>
              </label>
            </form>
            <a href="javascript:void(0)" class="btn-ms-menu btn-circle btn-circle-primary sb-toggle-left animated zoomInDown animation-delay-10">
              <i class="zmdi zmdi-menu"></i>
            </a>
          </div>-->
        </div>
      </header>
      <!--NAV-->
        @yield('nav')
      <!--END NAV-->
      <!--CONTENT-->
          @yield('content')
      <!--ENDCONTENT-->
      <!-- container -->
      <aside class="ms-footbar">
        <div class="container">
          <div class="row">
            <div class="col-md-4 ms-footer-col">
              <div class="ms-footbar-block">
                <h3 class="ms-footbar-title">Sitemap</h3>
                <ul class="list-unstyled ms-icon-list three_cols">
                  <li>
                    <a href="index.html">
                      <i class="zmdi zmdi-home"></i> Home</a>
                  </li>
                  <li>
                    <a href="page-blog.html">
                      <i class="zmdi zmdi-edit"></i> Blog</a>
                  </li>
                  <li>
                    <a href="page-blog.html">
                      <i class="zmdi zmdi-image-o"></i> Portafolio</a>
                  </li>
                  <li>
                    <a href="portfolio-filters_sidebar.html">
                      <i class="zmdi zmdi-case"></i> Works</a>
                  </li>
                  <li>
                    <a href="page-timeline_left2.html">
                      <i class="zmdi zmdi-time"></i> Timeline</a>
                  </li>
                  <li>
                    <a href="page-pricing.html">
                      <i class="zmdi zmdi-money"></i> Pricing</a>
                  </li>
                  <li>
                    <a href="page-about.html">
                      <i class="zmdi zmdi-favorite-outline"></i> About Us</a>
                  </li>
                  <li>
                    <a href="page-team2.html">
                      <i class="zmdi zmdi-accounts"></i> Our Team</a>
                  </li>
                  <li>
                    <a href="page-services.html">
                      <i class="zmdi zmdi-face"></i> Services</a>
                  </li>
                  <li>
                    <a href="page-faq2.html">
                      <i class="zmdi zmdi-help"></i> FAQ</a>
                  </li>
                  <li>
                    <a href="page-login2.html">
                      <i class="zmdi zmdi-lock"></i> Login</a>
                  </li>
                  <li>
                    <a href="page-contact.html">
                      <i class="zmdi zmdi-email"></i> Contact</a>
                  </li>
                </ul>
              </div>
              <div class="ms-footbar-block">
                <h3 class="ms-footbar-title">Subscribe</h3>
                <p class="">Lorem ipsum Amet fugiat elit nisi anim mollit minim labore ut esse Duis ullamco ad dolor veniam velit.</p>
                <form>
                  <div class="form-group label-floating mt-2 mb-1">
                    <div class="input-group ms-input-subscribe">
                      <label class="control-label" for="ms-subscribe">
                        <i class="zmdi zmdi-email"></i> Email Adress</label>
                      <input type="email" id="ms-subscribe" class="form-control"> </div>
                  </div>
                  <button class="ms-subscribre-btn" type="button">Subscribe</button>
                </form>
              </div>
            </div>
            <div class="col-md-5 col-sm-7 ms-footer-col ms-footer-alt-color">
              <div class="ms-footbar-block">
                <h3 class="ms-footbar-title text-center mb-2">Last Articles</h3>
                <div class="ms-footer-media">
                  <div class="media">
                    <div class="media-left media-middle">
                      <a href="javascript:void(0)">
                        <img class="media-object media-object-circle" src="assets/img/demo/p75.jpg" alt="..."> </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">
                        <a href="javascript:void(0)">Lorem ipsum dolor sit expedita cumque amet consectetur adipisicing repellat</a>
                      </h4>
                      <div class="media-footer">
                        <span>
                          <i class="zmdi zmdi-time color-info-light"></i> August 18, 2016</span>
                        <span>
                          <i class="zmdi zmdi-folder-outline color-warning-light"></i>
                          <a href="javascript:void(0)">Design</a>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left media-middle">
                      <a href="javascript:void(0)">
                        <img class="media-object media-object-circle" src="assets/img/demo/p75.jpg" alt="..."> </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">
                        <a href="javascript:void(0)">Labore ut esse Duis consectetur expedita cumque ullamco ad dolor veniam velit</a>
                      </h4>
                      <div class="media-footer">
                        <span>
                          <i class="zmdi zmdi-time color-info-light"></i> August 18, 2016</span>
                        <span>
                          <i class="zmdi zmdi-folder-outline color-warning-light"></i>
                          <a href="javascript:void(0)">News</a>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left media-middle">
                      <a href="javascript:void(0)">
                        <img class="media-object media-object-circle" src="assets/img/demo/p75.jpg" alt="..."> </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">
                        <a href="javascript:void(0)">voluptates deserunt ducimus expedita cumque quaerat molestiae labore</a>
                      </h4>
                      <div class="media-footer">
                        <span>
                          <i class="zmdi zmdi-time color-info-light"></i> August 18, 2016</span>
                        <span>
                          <i class="zmdi zmdi-folder-outline color-warning-light"></i>
                          <a href="javascript:void(0)">Productivity</a>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-5 ms-footer-col ms-footer-text-right">
              <div class="ms-footbar-block">
                <div class="ms-footbar-title">
                  <span class="ms-logo ms-logo-white ms-logo-sm mr-1">M</span>
                  <h3 class="no-m ms-site-title">Material
                    <span>Style</span>
                  </h3>
                </div>
                <address class="no-mb">
                  <p>
                    <i class="color-danger-light zmdi zmdi-pin mr-1"></i> 795 Folsom Ave, Suite 600</p>
                  <p>
                    <i class="color-warning-light zmdi zmdi-map mr-1"></i> San Francisco, CA 94107</p>
                  <p>
                    <i class="color-info-light zmdi zmdi-email mr-1"></i>
                    <a href="mailto:joe@example.com">example@domain.com</a>
                  </p>
                  <p>
                    <i class="color-royal-light zmdi zmdi-phone mr-1"></i>+34 123 456 7890 </p>
                  <p>
                    <i class="color-success-light fa fa-fax mr-1"></i>+34 123 456 7890 </p>
                </address>
              </div>
              <div class="ms-footbar-block">
                <h3 class="ms-footbar-title">Social Media</h3>
                <div class="ms-footbar-social">
                  <a href="javascript:void(0)" class="btn-circle btn-facebook">
                    <i class="zmdi zmdi-facebook"></i>
                  </a>
                  <a href="javascript:void(0)" class="btn-circle btn-twitter">
                    <i class="zmdi zmdi-twitter"></i>
                  </a>
                  <a href="javascript:void(0)" class="btn-circle btn-youtube">
                    <i class="zmdi zmdi-youtube"></i>
                  </a>
                  <br>
                  <a href="javascript:void(0)" class="btn-circle btn-google">
                    <i class="zmdi zmdi-google"></i>
                  </a>
                  <a href="javascript:void(0)" class="btn-circle btn-instagram">
                    <i class="zmdi zmdi-instagram"></i>
                  </a>
                  <a href="javascript:void(0)" class="btn-circle btn-github">
                    <i class="zmdi zmdi-github"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </aside>
      <footer class="ms-footer">
        <div class="container">
          <p>Copyright &copy; Material Style 2017</p>
        </div>
      </footer>
      <div class="btn-back-top">
        <a href="#" data-scroll id="back-top" class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised ">
          <i class="zmdi zmdi-long-arrow-up"></i>
        </a>
      </div>
    </div>
    <!-- sb-site-container -->
    <div class="ms-slidebar sb-slidebar sb-left sb-style-overlay" id="ms-slidebar">
      <div class="sb-slidebar-container">
        <header class="ms-slidebar-header">
          <div class="ms-slidebar-login">
            <a href="javascript:void(0)" class="withripple">
              <i class="zmdi zmdi-account"></i> Login</a>
            <a href="javascript:void(0)" class="withripple">
              <i class="zmdi zmdi-account-add"></i> Register</a>
          </div>
          <div class="ms-slidebar-title">
            <form class="search-form">
              <input id="search-box-slidebar" type="text" class="search-input" placeholder="Search..." name="q" />
              <label for="search-box-slidebar">
                <i class="zmdi zmdi-search"></i>
              </label>
            </form>
            <div class="ms-slidebar-t">
              <span class="ms-logo ms-logo-sm">M</span>
              <h3>Material
                <span>Style</span>
              </h3>
            </div>
          </div>
        </header>
        <ul class="ms-slidebar-menu" id="slidebar-menu" role="tablist" aria-multiselectable="true">
          <li class="panel" role="tab" id="sch1">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#slidebar-menu" href="#sc1" aria-expanded="false" aria-controls="sc1">
              <i class="zmdi zmdi-home"></i> Home </a>
            <ul id="sc1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="sch1">
              <li>
                <a href="index.html">Default Home</a>
              </li>
              <li>
                <a href="home-generic-2.html">Home Black Slider</a>
              </li>
              <li>
                <a href="home-landing.html">Home Landing Intro</a>
              </li>
              <li>
                <a href="home-landing3.html">Home Landing Video</a>
              </li>
              <li>
                <a href="home-shop.html">Home Shop 1</a>
              </li>
            </ul>
          </li>
          <li class="panel" role="tab" id="sch2">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#slidebar-menu" href="#sc2" aria-expanded="false" aria-controls="sc2">
              <i class="zmdi zmdi-desktop-mac"></i> Pages </a>
            <ul id="sc2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="sch2">
              <li>
                <a href="page-about.html">About US</a>
              </li>
              <li>
                <a href="page-team.html">Our Team</a>
              </li>
              <li>
                <a href="page-product.html">Products</a>
              </li>
              <li>
                <a href="page-services.html">Services</a>
              </li>
              <li>
                <a href="page-faq.html">FAQ</a>
              </li>
              <li>
                <a href="page-timeline_left.html">Timeline</a>
              </li>
              <li>
                <a href="page-contact.html">Contact Option</a>
              </li>
              <li>
                <a href="page-login.html">Login</a>
              </li>
              <li>
                <a href="page-pricing.html">Pricing</a>
              </li>
              <li>
                <a href="page-coming.html">Coming Soon</a>
              </li>
            </ul>
          </li>
          <li class="panel" role="tab" id="sch4">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#slidebar-menu" href="#sc4" aria-expanded="false" aria-controls="sc4">
              <i class="zmdi zmdi-edit"></i> Blog </a>
            <ul id="sc4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="sch4">
              <li>
                <a href="blog-sidebar.html">Blog Sidebar 1</a>
              </li>
              <li>
                <a href="blog-sidebar2.html">Blog Sidebar 2</a>
              </li>
              <li>
                <a href="blog-masonry.html">Blog Masonry 1</a>
              </li>
              <li>
                <a href="blog-masonry2.html">Blog Masonry 2</a>
              </li>
              <li>
                <a href="blog-full.html">Blog Full Page 1</a>
              </li>
              <li>
                <a href="blog-full2.html">Blog Full Page 2</a>
              </li>
              <li>
                <a href="blog-post.html">Blog Post 1</a>
              </li>
              <li>
                <a href="blog-post2.html">Blog Post 2</a>
              </li>
            </ul>
          </li>
          <li class="panel" role="tab" id="sch5">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#slidebar-menu" href="#sc5" aria-expanded="false" aria-controls="sc5">
              <i class="zmdi zmdi-shopping-basket"></i> E-Commerce </a>
            <ul id="sc5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="sch5">
              <li>
                <a href="ecommerce-filters.html">E-Commerce Sidebar</a>
              </li>
              <li>
                <a href="ecommerce-filters-full.html">E-Commerce Sidebar Full</a>
              </li>
              <li>
                <a href="ecommerce-filters-full2.html">E-Commerce Topbar Full</a>
              </li>
              <li>
                <a href="ecommerce-item.html">E-Commerce Item</a>
              </li>
              <li>
                <a href="ecommerce-cart.html">E-Commerce Cart</a>
              </li>
            </ul>
          </li>
          <li class="panel" role="tab" id="sch6">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#slidebar-menu" href="#sc6" aria-expanded="false" aria-controls="sc6">
              <i class="zmdi zmdi-collection-image-o"></i> Portfolio </a>
            <ul id="sc6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="sch6">
              <li>
                <a href="portfolio-filters_sidebar.html">Portfolio Sidebar Filters</a>
              </li>
              <li>
                <a href="portfolio-filters_topbar.html">Portfolio Topbar Filters</a>
              </li>
              <li>
                <a href="portfolio-filters_sidebar_fluid.html">Portfolio Sidebar Fluid</a>
              </li>
              <li>
                <a href="portfolio-filters_topbar_fluid.html">Portfolio Topbar Fluid</a>
              </li>
              <li>
                <a href="portfolio-cards.html">Porfolio Cards</a>
              </li>
              <li>
                <a href="portfolio-masonry.html">Porfolio Masonry</a>
              </li>
              <li>
                <a href="portfolio-item.html">Portfolio Item 1</a>
              </li>
              <li>
                <a href="portfolio-item2.html">Portfolio Item 2</a>
              </li>
            </ul>
          </li>
          <li>
            <a class="link" href="component-typography.html">
              <i class="zmdi zmdi-view-compact"></i> UI Elements</a>
          </li>
          <li>
            <a class="link" href="page-all.html">
              <i class="zmdi zmdi-link"></i> All Pages</a>
          </li>
        </ul>
        <div class="ms-slidebar-social ms-slidebar-block">
          <h4 class="ms-slidebar-block-title">Social Links</h4>
          <div class="ms-slidebar-social">
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-facebook">
              <i class="zmdi zmdi-facebook"></i>
              <span class="badge badge-pink">12</span>
              <div class="ripple-container"></div>
            </a>
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-twitter">
              <i class="zmdi zmdi-twitter"></i>
              <span class="badge badge-pink">4</span>
              <div class="ripple-container"></div>
            </a>
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-google">
              <i class="zmdi zmdi-google"></i>
              <div class="ripple-container"></div>
            </a>
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-instagram">
              <i class="zmdi zmdi-instagram"></i>
              <div class="ripple-container"></div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <script src="{{ URL::asset('public/assets/js/plugins.min.js')}}"></script>
    <script src="{{ URL::asset('public/assets/js/app.min.js')}}"></script>
    <script src="{{ URL::asset('public/assets/js/home-generic-6.js')}}"></script>
  </body>
</html>