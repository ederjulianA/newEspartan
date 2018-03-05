@extends('layouts.page')

@section('titles')
	<title>EspartanApps | Tu próximo aliado en tu nuevo proyecto digital</title>
    <meta name="description" content="Con EspartanApps tendrás el aliado ideal para empezar tu próximo proyecto digital ya sea la página corporativa de tu empresa, tu blog, tienda en línea, o algunas de nuestras soluciones tecnológicas.">
    <meta name="keywords" content="Pagina web, Wordpress, Hosting, Dominios, Tienda en linea"/>
    <meta name="author" content="EspartanApps" />

    <meta name="copyright" content="EspartanApps" />
    <link rel="shortcut icon" href="assets/img/favicon.png?v=3">


    <meta property="og:url" content="http://www.espartanapps.com/" />
  <meta property="og:type"               content="website" />
  <meta property="og:title"              content="EspartanApps | Tu próximo aliado en tu nuevo proyecto digital" />
  <meta property="og:description"        content="Con EspartanApps tendrás el aliado ideal para empezar tu próximo proyecto digital ya sea la página corporativa de tu empresa, tu blog, tienda en línea, o algunas de nuestras soluciones tecnológicas." />
  <meta property="og:image"              content="http://www.espartanapps.com/public/assets/img/EspartanApps.png" />

@stop

@section('nav')
	@include('partials.nav')
@stop

@section('content')
	  <header class="ms-hero-page ms-hero-img-keyboard ms-hero-bg-dark color-white">
        <div class="container index-1">
          <div class="col-md-6">
            <h1 class="text-uppercase animated fadeInDown animation-delay-5 typed-title">Espartan Apps
              <br>
              <span class="color-primary typed-class">Tu aliado digital en tu próximo proyecto</span>
            </h1>
            <p class="lead lead-sm animated fadeInLeft animation-delay-7 color-light">Digitaliza tu negocio con nosotros, incursiona en el mundo tecnológico con tecnología de punta, la que usamos en <stron>EspartanApps</strong>. </p>
            <ul class="ms-list-arrow">
              <li class="animated fadeInUp animation-delay-7">Portafolio web.</li>
              <li class="animated fadeInUp animation-delay-10">Página Corporativa.</li>
              <li class="animated fadeInUp animation-delay-13">Tienda virtual</li>
              <li class="animated fadeInUp animation-delay-16">Aplicaciones móviles</li>
              <li class="animated fadeInUp animation-delay-19">Software a la medida</li>
            </ul>
            <div class="text-center">
              <a href="javascript:void(0)" class="btn btn-raised btn-lg btn-white color-primary animated flipInX animation-delay-20">
                <i class="zmdi zmdi-airplane"></i> Call to action</a>
              <a href="javascript:void(0)" class="btn btn-raised btn-lg btn-warning animated flipInX animation-delay-24">
                <i class="zmdi zmdi-coffee"></i> Secondary Button</a>
            </div>
          </div>
          <div class="col-md-6 text-center mt-4">
            <div class="img-phone-container">
              <img class="img-responsive animated zoomInDown animation-delay-3 index-1" src="{{ URL::asset('public/assets/img/demo/pixel1.png')}}">
              <img class="img-responsive img-phone-left" src="{{ URL::asset('public/assets/img/demo/pixel3.png')}}">
              <img class="img-responsive img-phone-right" src="{{ URL::asset('public/assets/img/demo/pixel2.png')}}"> </div>
          </div>
          <div class="col-md-12">
            <div class="text-center ms-margin">
              <a href="javascript:void(0)" class="btn btn-primary btn-raised btn-app wow flipInX animation-delay-20">
                <div class="btn-container">
                  <i class="fa fa-html5"></i>
                  <span>Aviable as</span>
                  <br>
                  <strong>Web App</strong>
                </div>
              </a>
              <a href="javascript:void(0)" class="btn btn-primary btn-raised btn-app wow flipInX animation-delay-22">
                <div class="btn-container">
                  <i class="fa fa-windows"></i>
                  <span>Download for</span>
                  <br>
                  <strong>Windows</strong>
                </div>
              </a>
              <a href="javascript:void(0)" class="btn btn-primary btn-raised btn-app wow flipInX animation-delay-24">
                <div class="btn-container">
                  <i class="fa fa-apple"></i>
                  <span>Download for</span>
                  <br>
                  <strong>MacOS</strong>
                </div>
              </a>
              <a href="javascript:void(0)" class="btn btn-primary btn-raised btn-app wow flipInX animation-delay-26">
                <div class="btn-container">
                  <i class="fa fa-android"></i>
                  <span>Aviable in </span>
                  <br>
                  <strong>Play Store</strong>
                </div>
              </a>
              <a href="javascript:void(0)" class="btn btn-primary btn-raised btn-app wow flipInX animation-delay-28">
                <div class="btn-container">
                  <i class="fa fa-apple"></i>
                  <span>Aviable in </span>
                  <br>
                  <strong>App Store</strong>
                </div>
              </a>
            </div>
          </div>
        </div>
      </header>
      <div class="container mt-6">
        <div class="text-center mw-800 center-block mb-4">
          <h2 class="color-primary wow fadeInDown animation-delay-4">We know what you need</h2>
          <p class="lead wow fadeInDown animation-delay-4">Discover our projects and the rigorous process of creation. Our principles are creativity, design, experience and knowledge. We are backed by 20 years of research.</p>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="card card-royal wow zoomInUp animation-delay-5">
              <div class="bg-royal">
                <img src="assets/img/demo/m1.png" alt="..." class="img-avatar-circle"> </div>
              <div class="card-block pt-4 text-center">
                <h4 class="color-royal">A Feature Title</h4>
                <p>Eaque repellendus nemo deserunt qui sequi laborum officiis assumenda caecati.</p>
                <a href="javascript:void(0)" class="btn btn-royal">
                  <i class="zmdi zmdi-star"></i> Action here</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card card-danger wow zoomInUp animation-delay-6">
              <div class="bg-danger">
                <img src="assets/img/demo/m2.png" alt="..." class="img-avatar-circle"> </div>
              <div class="card-block pt-4 text-center">
                <h4 class="color-danger">A Feature Title</h4>
                <p>Eaque repellendus nemo deserunt qui sequi laborum officiis assumenda caecati.</p>
                <a href="javascript:void(0)" class="btn btn-danger">
                  <i class="zmdi zmdi-star"></i> Action here</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card card-warning wow zoomInUp animation-delay-7">
              <div class="bg-warning">
                <img src="assets/img/demo/m3.png" alt="..." class="img-avatar-circle"> </div>
              <div class="card-block pt-4 text-center">
                <h4 class="color-warning">A Feature Title</h4>
                <p>Eaque repellendus nemo deserunt qui sequi laborum officiis assumenda caecati.</p>
                <a href="javascript:void(0)" class="btn btn-warning">
                  <i class="zmdi zmdi-star"></i> Action here</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card card-success wow zoomInUp animation-delay-8">
              <div class="bg-success">
                <img src="assets/img/demo/m4.png" alt="..." class="img-avatar-circle"> </div>
              <div class="card-block pt-4 text-center">
                <h4 class="color-success">A Feature Title</h4>
                <p>Eaque repellendus nemo deserunt qui sequi laborum officiis assumenda caecati.</p>
                <a href="javascript:void(0)" class="btn btn-success">
                  <i class="zmdi zmdi-star"></i> Action here</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <section class="wrap ms-hero-page ms-hero-img-coffee ms-hero-bg-info ms-bg-fixed color-white mt-6">
        <div class="container">
          <h2 class="text-center fw-500 mb-6 wow fadeInDown animation-delay-2">Amazing Features</h2>
          <div class="row">
            <div class="col-sm-6 col-md-3 wow fadeIn animation-delay-2">
              <div class="text-center">
                <div class="circle" id="circles-1"></div>
                <h4 class="text-center">HTML 5</h4>
                <p class="small-font">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 wow fadeIn animation-delay-3">
              <div class="text-center">
                <div class="circle" id="circles-2"></div>
                <h4 class="text-center">CSS 3</h4>
                <p class="small-font">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 wow fadeIn animation-delay-4">
              <div class="text-center">
                <div class="circle" id="circles-3"></div>
                <h4 class="text-center">Jquery</h4>
                <p class="small-font">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 wow fadeIn animation-delay-5">
              <div class="text-center">
                <div class="circle" id="circles-4"></div>
                <h4 class="text-center">Bootstrap 3</h4>
                <p class="small-font">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
              </div>
            </div>
          </div>
          <div class="text-center mt-6">
            <a href="javascript:void(0)" class="btn btn-raised btn-lg btn-white color-primary animated flipInX animation-delay-4">
              <i class="zmdi zmdi-info"></i> Know More</a>
            <a href="javascript:void(0)" class="btn btn-raised btn-lg btn-info animated flipInX animation-delay-6">
              <i class="zmdi zmdi-email"></i> Contact US</a>
          </div>
        </div>
      </section>
      <section class="wrap ms-hero-img-road ms-hero-bg-royal ms-bg-fixed color-white">
        <div class="container">
          <div class="row">
            <div class="text-center mb-4">
              <h2>Knows the
                <span class="text-normal">Material Style</span> and surprise yourself</h2>
            </div>
            <div class="col-md-6">
              <h3 class="wow fadeInUp animation-delay-2">Description</h3>
              <p class="wow fadeInUp animation-delay-3">Lorem ipsum dolor sit amet,
                <strong>consectetur adipisicing elit</strong>. Repellat cum laudantium quos tempora magnam voluptas sint perspiciatis nulla ipsa itaque atque quod incidunt maiores iusto, laborum, magni aliquam. Aut eligendi nesciunt nobis eum dolorum maxime corporis
                dicta, repudiandae eveniet ab laboriosam minima voluptate quaerat sequi modi suscipit cumque unde rerum.</p>
              <p class="wow fadeInUp animation-delay-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis porro, magni obcaecati cupiditate nulla rem quae, eveniet corrupti reprehenderit maiores nobis doloribus expedita non quasi itaque. Incidunt, delectus quidem vitae laudantium,
                natus
                <a href="#">quibusdam odio eius eligendi</a> tenetur! Ea, repudiandae eveniet ab minima laboriosam minima voluptate quaerat sequi harum.</p>
            </div>
            <div class="col-md-6">
              <div class="panel-group ms-collapse" id="accordion2" role="tablist" aria-multiselectable="true">
                <div class="panel panel-primary wow fadeInUp animation-delay-2">
                  <div class="panel-heading" role="tab" id="headingOne2">
                    <h4 class="panel-title">
                      <a class="withripple" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                        <i class="fa fa-lightbulb-o"></i> Talent and creativity </a>
                    </h4>
                  </div>
                  <div id="collapseOne2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne2">
                    <div class="panel-body color-dark in">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati molestiae id ipsum ipsa repudiandae. Voluptatum, molestias, quas magnam repellat quos facilis sequi. Ullam optio eius deleniti dolore quasi doloribus ipsam.</p>
                      <p>Dolores, corrupti, laborum, officia sit aliquam doloremque accusantium nemo sunt veniam est incidunt perferendis minima obcaecati ex aperiam voluptatibus blanditiis eum suscipit magnam dolorum in adipisci nihil.</p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-primary wow fadeInUp animation-delay-5">
                  <div class="panel-heading" role="tab" id="headingTwo2">
                    <h4 class="panel-title">
                      <a class="collapsed withripple" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                        <i class="fa fa-desktop"></i> Design and code </a>
                    </h4>
                  </div>
                  <div id="collapseTwo2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo2">
                    <div class="panel-body color-dark">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit dignissimos inventore cupiditate expedita saepe enim nobis nostrum? Laborum, laudantium, maiores, cupiditate, perspiciatis at ad accusamus.</p>
                      <p>Incidunt, harum itaque voluptatum asperiores recusandae explicabo maiores. Alias, quos, ex impedit at error id laborum fugit architecto qui beatae molestiae dolorum rem veritatis quia aliquam totam.</p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-primary wow fadeInUp animation-delay-7">
                  <div class="panel-heading" role="tab" id="headingThree3">
                    <h4 class="panel-title">
                      <a class="collapsed withripple" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
                        <i class="fa fa-user"></i> Quality and Support </a>
                    </h4>
                  </div>
                  <div id="collapseThree2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree2">
                    <div class="panel-body color-dark">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, rerum unde doloribus accusamus pariatur non expedita quibusdam velit totam obcaecati. Consequatur, deserunt, asperiores quam nisi earum voluptates.</p>
                      <p>Dolorum, aliquam, totam labore saepe error a eum culpa assumenda sint laudantium ipsa iure ullam et dicta nesciunt repellendus optio voluptatibus reprehenderit odit officia fugiat necessitatibus recusandae architecto.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="wrap bg-dark color-white">
        <div class="container">
          <h2 class="text-center mb-4">Portfolio</h2>
          <div class="mw-800 center-block mb-4">
            <ul class="nav nav-tabs nav-tabs-primary indicator-light nav-tabs-full nav-tabs-4" role="tablist">
              <li role="presentation" class="active filter" data-filter="all">
                <a class="withoutripple" href="#home7" aria-controls="home7" role="tab" data-toggle="tab">
                  <i class="zmdi zmdi-desktop-mac"></i>
                  <span class="hidden-xs">All</span>
                </a>
              </li>
              <li role="presentation" class="filter" data-filter=".category-1">
                <a class="withoutripple" href="#profile7" aria-controls="profile7" role="tab" data-toggle="tab">
                  <i class="zmdi zmdi-language-html5"></i>
                  <span class="hidden-xs">HTML</span>
                </a>
              </li>
              <li role="presentation" class="filter" data-filter=".category-2">
                <a class="withoutripple" href="#messages7" aria-controls="messages7" role="tab" data-toggle="tab">
                  <i class="fa fa-wordpress"></i>
                  <span class="hidden-xs">Wordpress</span>
                </a>
              </li>
              <li role="presentation" class="filter" data-filter=".category-3">
                <a class="withoutripple" href="#settings7" aria-controls="settings7" role="tab" data-toggle="tab">
                  <i class="zmdi zmdi-language-javascript"></i>
                  <span class="hidden-xs">Angular JS</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="row" id="Container">
            <div class="col-md-4 col-sm-6 mix category-1 category-3">
              <div class="card">
                <figure class="ms-thumbnail">
                  <img src="assets/img/demo/port1.jpg" alt="" class="img-responsive">
                  <figcaption class="ms-thumbnail-caption text-center">
                    <div class="ms-thumbnail-caption-content">
                      <h4 class="ms-thumbnail-caption-title mb-2">Lorem ipsum dolor</h4>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mr-1 btn-circle-white color-danger">
                        <i class="zmdi zmdi-favorite"></i>
                      </a>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs ml-1 mr-1 btn-circle-white color-warning">
                        <i class="zmdi zmdi-star"></i>
                      </a>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs ml-1 btn-circle-white color-success">
                        <i class="zmdi zmdi-share"></i>
                      </a>
                    </div>
                  </figcaption>
                </figure>
                <div class="card-block text-center portfolio-item-caption hidden">
                  <h3 class="color-primary no-mt">Lorem ipsum dolor</h3>
                  <p>Explicabo consequatur quidem praesentium quas qui eius ina Cupiditate ratione sint.</p>
                </div>
              </div>
            </div>
            <!-- item -->
            <div class="col-md-4 col-sm-6 mix category-2">
              <div class="card">
                <figure class="ms-thumbnail">
                  <img src="assets/img/demo/port2.jpg" alt="" class="img-responsive">
                  <figcaption class="ms-thumbnail-caption text-center">
                    <div class="ms-thumbnail-caption-content">
                      <h4 class="ms-thumbnail-caption-title mb-2">Lorem ipsum dolor</h4>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mr-1 btn-circle-white color-danger">
                        <i class="zmdi zmdi-favorite"></i>
                      </a>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs ml-1 mr-1 btn-circle-white color-warning">
                        <i class="zmdi zmdi-star"></i>
                      </a>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs ml-1 btn-circle-white color-success">
                        <i class="zmdi zmdi-share"></i>
                      </a>
                    </div>
                  </figcaption>
                </figure>
                <div class="card-block text-center portfolio-item-caption hidden">
                  <h3 class="color-primary no-mt">Lorem ipsum dolor</h3>
                  <p>Explicabo consequatur quidem praesentium quas qui eius ina Cupiditate ratione sint.</p>
                </div>
              </div>
            </div>
            <!-- item -->
            <div class="col-md-4 col-sm-6 mix category-3">
              <div class="card">
                <figure class="ms-thumbnail">
                  <img src="assets/img/demo/port3.jpg" alt="" class="img-responsive">
                  <figcaption class="ms-thumbnail-caption text-center">
                    <div class="ms-thumbnail-caption-content">
                      <h4 class="ms-thumbnail-caption-title mb-2">Lorem ipsum dolor</h4>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mr-1 btn-circle-white color-danger">
                        <i class="zmdi zmdi-favorite"></i>
                      </a>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs ml-1 mr-1 btn-circle-white color-warning">
                        <i class="zmdi zmdi-star"></i>
                      </a>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs ml-1 btn-circle-white color-success">
                        <i class="zmdi zmdi-share"></i>
                      </a>
                    </div>
                  </figcaption>
                </figure>
                <div class="card-block text-center portfolio-item-caption hidden">
                  <h3 class="color-primary no-mt">Lorem ipsum dolor</h3>
                  <p>Explicabo consequatur quidem praesentium quas qui eius ina Cupiditate ratione sint.</p>
                </div>
              </div>
            </div>
            <!-- item -->
            <div class="col-md-4 col-sm-6 mix category-2">
              <div class="card">
                <figure class="ms-thumbnail">
                  <img src="assets/img/demo/port4.jpg" alt="" class="img-responsive">
                  <figcaption class="ms-thumbnail-caption text-center">
                    <div class="ms-thumbnail-caption-content">
                      <h4 class="ms-thumbnail-caption-title mb-2">Lorem ipsum dolor</h4>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mr-1 btn-circle-white color-danger">
                        <i class="zmdi zmdi-favorite"></i>
                      </a>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs ml-1 mr-1 btn-circle-white color-warning">
                        <i class="zmdi zmdi-star"></i>
                      </a>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs ml-1 btn-circle-white color-success">
                        <i class="zmdi zmdi-share"></i>
                      </a>
                    </div>
                  </figcaption>
                </figure>
                <div class="card-block text-center portfolio-item-caption hidden">
                  <h3 class="color-primary no-mt">Lorem ipsum dolor</h3>
                  <p>Explicabo consequatur quidem praesentium quas qui eius ina Cupiditate ratione sint.</p>
                </div>
              </div>
            </div>
            <!-- item -->
            <div class="col-md-4 col-sm-6 mix category-1">
              <div class="card">
                <figure class="ms-thumbnail">
                  <img src="assets/img/demo/port5.jpg" alt="" class="img-responsive">
                  <figcaption class="ms-thumbnail-caption text-center">
                    <div class="ms-thumbnail-caption-content">
                      <h4 class="ms-thumbnail-caption-title mb-2">Lorem ipsum dolor</h4>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mr-1 btn-circle-white color-danger">
                        <i class="zmdi zmdi-favorite"></i>
                      </a>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs ml-1 mr-1 btn-circle-white color-warning">
                        <i class="zmdi zmdi-star"></i>
                      </a>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs ml-1 btn-circle-white color-success">
                        <i class="zmdi zmdi-share"></i>
                      </a>
                    </div>
                  </figcaption>
                </figure>
                <div class="card-block text-center portfolio-item-caption hidden">
                  <h3 class="color-primary no-mt">Lorem ipsum dolor</h3>
                  <p>Explicabo consequatur quidem praesentium quas qui eius ina Cupiditate ratione sint.</p>
                </div>
              </div>
            </div>
            <!-- item -->
            <div class="col-md-4 col-sm-6 mix category-3">
              <div class="card">
                <figure class="ms-thumbnail">
                  <img src="assets/img/demo/port6.jpg" alt="" class="img-responsive">
                  <figcaption class="ms-thumbnail-caption text-center">
                    <div class="ms-thumbnail-caption-content">
                      <h4 class="ms-thumbnail-caption-title mb-2">Lorem ipsum dolor</h4>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mr-1 btn-circle-white color-danger">
                        <i class="zmdi zmdi-favorite"></i>
                      </a>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs ml-1 mr-1 btn-circle-white color-warning">
                        <i class="zmdi zmdi-star"></i>
                      </a>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs ml-1 btn-circle-white color-success">
                        <i class="zmdi zmdi-share"></i>
                      </a>
                    </div>
                  </figcaption>
                </figure>
                <div class="card-block text-center portfolio-item-caption hidden">
                  <h3 class="color-primary no-mt">Lorem ipsum dolor</h3>
                  <p>Explicabo consequatur quidem praesentium quas qui eius ina Cupiditate ratione sint.</p>
                </div>
              </div>
            </div>
            <!-- item -->
            <div class="col-md-4 col-sm-6 mix category-2">
              <div class="card">
                <figure class="ms-thumbnail">
                  <img src="assets/img/demo/port7.jpg" alt="" class="img-responsive">
                  <figcaption class="ms-thumbnail-caption text-center">
                    <div class="ms-thumbnail-caption-content">
                      <h4 class="ms-thumbnail-caption-title mb-2">Lorem ipsum dolor</h4>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mr-1 btn-circle-white color-danger">
                        <i class="zmdi zmdi-favorite"></i>
                      </a>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs ml-1 mr-1 btn-circle-white color-warning">
                        <i class="zmdi zmdi-star"></i>
                      </a>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs ml-1 btn-circle-white color-success">
                        <i class="zmdi zmdi-share"></i>
                      </a>
                    </div>
                  </figcaption>
                </figure>
                <div class="card-block text-center portfolio-item-caption hidden">
                  <h3 class="color-primary no-mt">Lorem ipsum dolor</h3>
                  <p>Explicabo consequatur quidem praesentium quas qui eius ina Cupiditate ratione sint.</p>
                </div>
              </div>
            </div>
            <!-- item -->
            <div class="col-md-4 col-sm-6 mix category-1">
              <div class="card">
                <figure class="ms-thumbnail">
                  <img src="assets/img/demo/port8.jpg" alt="" class="img-responsive">
                  <figcaption class="ms-thumbnail-caption text-center">
                    <div class="ms-thumbnail-caption-content">
                      <h4 class="ms-thumbnail-caption-title mb-2">Lorem ipsum dolor</h4>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mr-1 btn-circle-white color-danger">
                        <i class="zmdi zmdi-favorite"></i>
                      </a>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs ml-1 mr-1 btn-circle-white color-warning">
                        <i class="zmdi zmdi-star"></i>
                      </a>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs ml-1 btn-circle-white color-success">
                        <i class="zmdi zmdi-share"></i>
                      </a>
                    </div>
                  </figcaption>
                </figure>
                <div class="card-block text-center portfolio-item-caption hidden">
                  <h3 class="color-primary no-mt">Lorem ipsum dolor</h3>
                  <p>Explicabo consequatur quidem praesentium quas qui eius ina Cupiditate ratione sint.</p>
                </div>
              </div>
            </div>
            <!-- item -->
            <div class="col-md-4 col-sm-6 mix category-3">
              <div class="card">
                <figure class="ms-thumbnail">
                  <img src="assets/img/demo/port9.jpg" alt="" class="img-responsive">
                  <figcaption class="ms-thumbnail-caption text-center">
                    <div class="ms-thumbnail-caption-content">
                      <h4 class="ms-thumbnail-caption-title mb-2">Lorem ipsum dolor</h4>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mr-1 btn-circle-white color-danger">
                        <i class="zmdi zmdi-favorite"></i>
                      </a>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs ml-1 mr-1 btn-circle-white color-warning">
                        <i class="zmdi zmdi-star"></i>
                      </a>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs ml-1 btn-circle-white color-success">
                        <i class="zmdi zmdi-share"></i>
                      </a>
                    </div>
                  </figcaption>
                </figure>
                <div class="card-block text-center portfolio-item-caption hidden">
                  <h3 class="color-primary no-mt">Lorem ipsum dolor</h3>
                  <p>Explicabo consequatur quidem praesentium quas qui eius ina Cupiditate ratione sint.</p>
                </div>
              </div>
            </div>
            <!-- item -->
            <div class="col-md-4 col-sm-6 mix category-2">
              <div class="card">
                <figure class="ms-thumbnail">
                  <img src="assets/img/demo/port10.jpg" alt="" class="img-responsive">
                  <figcaption class="ms-thumbnail-caption text-center">
                    <div class="ms-thumbnail-caption-content">
                      <h4 class="ms-thumbnail-caption-title mb-2">Lorem ipsum dolor</h4>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mr-1 btn-circle-white color-danger">
                        <i class="zmdi zmdi-favorite"></i>
                      </a>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs ml-1 mr-1 btn-circle-white color-warning">
                        <i class="zmdi zmdi-star"></i>
                      </a>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs ml-1 btn-circle-white color-success">
                        <i class="zmdi zmdi-share"></i>
                      </a>
                    </div>
                  </figcaption>
                </figure>
                <div class="card-block text-center portfolio-item-caption hidden">
                  <h3 class="color-primary no-mt">Lorem ipsum dolor</h3>
                  <p>Explicabo consequatur quidem praesentium quas qui eius ina Cupiditate ratione sint.</p>
                </div>
              </div>
            </div>
            <!-- item -->
            <div class="col-md-4 col-sm-6 mix category-1">
              <div class="card">
                <figure class="ms-thumbnail">
                  <img src="assets/img/demo/port11.jpg" alt="" class="img-responsive">
                  <figcaption class="ms-thumbnail-caption text-center">
                    <div class="ms-thumbnail-caption-content">
                      <h4 class="ms-thumbnail-caption-title mb-2">Lorem ipsum dolor</h4>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mr-1 btn-circle-white color-danger">
                        <i class="zmdi zmdi-favorite"></i>
                      </a>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs ml-1 mr-1 btn-circle-white color-warning">
                        <i class="zmdi zmdi-star"></i>
                      </a>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs ml-1 btn-circle-white color-success">
                        <i class="zmdi zmdi-share"></i>
                      </a>
                    </div>
                  </figcaption>
                </figure>
                <div class="card-block text-center portfolio-item-caption hidden">
                  <h3 class="color-primary no-mt">Lorem ipsum dolor</h3>
                  <p>Explicabo consequatur quidem praesentium quas qui eius ina Cupiditate ratione sint.</p>
                </div>
              </div>
            </div>
            <!-- item -->
            <div class="col-md-4 col-sm-6 mix category-2">
              <div class="card">
                <figure class="ms-thumbnail">
                  <img src="assets/img/demo/port12.jpg" alt="" class="img-responsive">
                  <figcaption class="ms-thumbnail-caption text-center">
                    <div class="ms-thumbnail-caption-content">
                      <h4 class="ms-thumbnail-caption-title mb-2">Lorem ipsum dolor</h4>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mr-1 btn-circle-white color-danger">
                        <i class="zmdi zmdi-favorite"></i>
                      </a>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs ml-1 mr-1 btn-circle-white color-warning">
                        <i class="zmdi zmdi-star"></i>
                      </a>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs ml-1 btn-circle-white color-success">
                        <i class="zmdi zmdi-share"></i>
                      </a>
                    </div>
                  </figcaption>
                </figure>
                <div class="card-block text-center portfolio-item-caption hidden">
                  <h3 class="color-primary no-mt">Lorem ipsum dolor</h3>
                  <p>Explicabo consequatur quidem praesentium quas qui eius ina Cupiditate ratione sint.</p>
                </div>
              </div>
            </div>
            <!-- item -->
          </div>
        </div>
      </section>
      <div class="container mt-6">
        <div class="text-center color-white mb-4 text-center">
          <h1 class="color-primary">Our Team</h1>
          <p class="lead lead-lg color-danger text-center center-block mt-2 mw-800 text-uppercase fw-300 animated fadeInUp animation-delay-7">These are
            <span class="text-normal">the professionals</span> who, every day, make progress
            <span class="text-normal">the projects of our clients</span>.</p>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="card card-royal wow zoomInUp animation-delay-7">
              <div class="ms-hero-bg-royal ms-hero-img-city">
                <img src="assets/img/demo/avatar4.jpg" alt="..." class="img-avatar-circle"> </div>
              <div class="card-block pt-6 text-center">
                <h3 class="color-royal">Sophie Marks</h3>
                <p>Lorem ipsum dolor sit amet, consectetur alter adipisicing elit. Facilis, natuse inse voluptates officia repudiandae beatae magni es magnam autem molestias.</p>
                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-facebook">
                  <i class="zmdi zmdi-facebook"></i>
                </a>
                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-twitter">
                  <i class="zmdi zmdi-twitter"></i>
                </a>
                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-instagram">
                  <i class="zmdi zmdi-instagram"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="card card-success wow zoomInUp animation-delay-7">
              <div class="ms-hero-bg-success ms-hero-img-city">
                <img src="assets/img/demo/avatar5.jpg" alt="..." class="img-avatar-circle"> </div>
              <div class="card-block pt-6 text-center">
                <h3 class="color-success">Cris Polner</h3>
                <p>Lorem ipsum dolor sit amet, consectetur alter adipisicing elit. Facilis, natuse inse voluptates officia repudiandae beatae magni es magnam autem molestias.</p>
                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-facebook">
                  <i class="zmdi zmdi-facebook"></i>
                </a>
                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-twitter">
                  <i class="zmdi zmdi-twitter"></i>
                </a>
                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-instagram">
                  <i class="zmdi zmdi-instagram"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="card card-primary wow zoomInUp animation-delay-7">
              <div class="ms-hero-bg-primary ms-hero-img-city">
                <img src="assets/img/demo/avatar6.jpg" alt="..." class="img-avatar-circle"> </div>
              <div class="card-block pt-6 text-center">
                <h3 class="color-primary">Julia Robert</h3>
                <p>Lorem ipsum dolor sit amet, consectetur alter adipisicing elit. Facilis, natuse inse voluptates officia repudiandae beatae magni es magnam autem molestias.</p>
                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-facebook">
                  <i class="zmdi zmdi-facebook"></i>
                </a>
                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-twitter">
                  <i class="zmdi zmdi-twitter"></i>
                </a>
                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-instagram">
                  <i class="zmdi zmdi-instagram"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
@stop
 