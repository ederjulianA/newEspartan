<!DOCTYPE html>
<html lang="en"> 
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#333">
    <title>EspartanAps | Tu próximo aliado en tu nuevo proyecto digital</title>
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
    <div class="bg-full-page ms-hero-img-coffee ms-hero-bg-primary ms-bg-fixed back-fixed">
      <div class="absolute-center">
        <div class="container">
          <div class="row">
          @include('partials.errors')
          @include('partials.msg')
            <div class="col-lg-6">
              <div class="card card-flat bg-transparent">
                <div class="card-block color-white">
                  <header class="text-center mb-2">
                    <span class="ms-logo ms-logo-lg ms-logo-white center-block mb-2 animated zoomInDown animation-delay-5">EA</span>
                    <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">Espartan
                      <span>Apps</span>
                    </h1>
                    <p class="lead lead-xl mt-2 animated fadeInUp animation-delay-7">
                     En EspartanApps encontrarás una gran variedad de soluciones digitales para tu próximo proyecto, ya sea 
                      la página corporativa de tu empresa, tu blog, tienda en línea y mucho más

                    </p>
                  </header>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="text-center card-block animated zoomIn animation-delay-10">
                        <span class="btn-circle btn-circle-raised btn-circle-white btn-circle-xlg color-warning">
                          <i class="zmdi zmdi-cloud-outline"></i>
                        </span>
                        <h4 class="color-white">Portafolios Web</h4>
                        <p class="">Tu presencia digital, tu nombre en internet</p>
                        <a href="javascript:void(0)" class="btn btn-white color-warning btn-raised">
                          <i class="zmdi zmdi-download"></i> GN</a>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="text-center card-block animated zoomIn animation-delay-10">
                        <span class="btn-circle btn-circle-raised btn-circle-white btn-circle-xlg color-info">
                          <i class="zmdi zmdi-card"></i>
                        </span>
                        <h4 class="color-white">Tienda en linea</h4>
                        <p class="">Tus productos al alcance del mundo</p>
                        <a href="javascript:void(0)" class="btn btn-white color-info btn-raised">
                          <i class="zmdi zmdi-info"></i> </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card index-1 animated zoomInRight animation-delay-7">
                <div class="card-block-big">
                  <h1 class="color-primary">Proximamente...</h1>
                  <p class="lead">Se de los primeros en registrarte y opten fabulosos descuento  en nuestros productos y empieza con pie derecho tu próximo proyecto digital. Empieza con EspartanApps como tu aliado.</p>
                  <div id="ms-countdown"></div>
                  <h2 class="color-primary">Avísame</h2>
                  <form method="POST" action="{{route('emails')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group label-floating mt-2 mb-1">
                      <div class="input-group center-block">
                        <label class="control-label" for="ms-subscribe">
                          <i class="zmdi zmdi-email"></i> Email </label>
                        <input type="email" id="ms-subscribe" name="email" class="form-control"> </div>
                    </div>
                    <button class="btn btn-raised btn-primary btn-block" type="submit">Suscribir</button>
                  </form>
                  <div class="text-center mt-4">
                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised mt-1 mr-1 no-mr-md btn-google">
                      <i class="zmdi zmdi-google"></i>
                    </a>
                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised mt-1 mr-1 no-mr-md btn-facebook">
                      <i class="zmdi zmdi-facebook"></i>
                    </a>
                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised mt-1 mr-1 no-mr-md btn-twitter">
                      <i class="zmdi zmdi-twitter"></i>
                    </a>
                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised mt-1 mr-1 no-mr-md btn-instagram">
                      <i class="zmdi zmdi-instagram"></i>
                    </a>
                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised mt-1 mr-1 no-mr-md btn-linkedin">
                      <i class="zmdi zmdi-linkedin"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <p class="lead lead-sm text-center mt-4 color-medium animated fadeInUp animation-delay-16">EspartanApps &copy; Copyright 2018</p>
        </div>
      </div>
    </div>
    <script src="{{ URL::asset('public/assets/js/plugins.min.js')}}"></script>
    <script src="{{ URL::asset('public/assets/js/app.min.js')}}"></script>
    <script src="{{ URL::asset('public/assets/js/coming.js')}}"></script>
  </body>
</html>