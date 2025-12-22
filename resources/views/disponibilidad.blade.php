<!DOCTYPE html>
<html lang="zxx">
@push('styles')
<link href="css/style.css" rel="stylesheet" type="text/css" >
@endpush
@include('head')

<body class="dark-scheme section-dark">

    <div id="wrapper">

        <div class="float-text show-on-scroll">
            <span><a href="#">Scroll to top</a></span>
        </div>
        <div class="scrollbar-v show-on-scroll"></div>
        
        <!-- page preloader begin -->
        <div id="de-loader"></div>
        <!-- page preloader close -->
        

        

        @include('header')

        <section style="background-color:#3e401c !important;" id="section-about">
            <div class="container">
                <div class="row g-4 align-items-center justify-content-between">
                    <div class="col-lg-5">
                                             <img src="imagenes/logo.png" class="w-40" alt="">
                       <br><br>
                        <h3>Diseño y conceptualización del despacho de Arquitectura</h3>
                                            <img src="imagenes/macias_peredo.png" class="w-60" alt="">
                    </div>

                    <div class="col-lg-5">
                        <p class="mb-4">Descubre un oasis donde la modernidad y la naturaleza conviven en perfecta sintonía. Nuestro complejo inmobiliario redefine el concepto de habitat, ofreciendo un espacio que inspira paz, conexión y equilibrio.<br><br>

Aquí, la sustentabilidad no es solo un compromiso, es el corazón de cada detalle. Desde materiales ecológicos hasta energías renovables, cada aspecto ha sido diseñado para cuidar de nuestro entorno mientras disfrutas de un estilo de vida único.
</p>
                    </div>
                </div>
            </div>
        </section>


        @if(isset($imp))
            <div id="image-map-pro"></div>
        @else
            <img style="width: 100%" src="https://propstudios.mx/img/Verdant/Ubicación%20en%20plano/{{ $unit->unit }}.jpg">
        @endif

     
        <section id="unit-info" style="
        @if(false)
        display: none;
        @endif
        ">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-4">
                        <div class="pe-lg-3">
                            <div class="subtitle wow fadeInUp" data-wow-delay=".2s">Room</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">Floorplan</h2>

                            <div class="relative overflow-hidden">
                                <div class="d-flex bg-dark-2 px-4 py-2">
                                    <div class="w-60">Living Room</div>
                                    <div class="w-40 fw-600">22 m²</div>
                                </div>
                                <div class="d-flex px-4 py-2">
                                    <div class="w-60">Dinning Room</div>
                                    <div class="w-40 fw-600">15 m²</div>
                                </div>
                                <div class="d-flex bg-dark-2 px-4 py-2">
                                    <div class="w-60">Kitchen</div>
                                    <div class="w-40 fw-600">15 m²</div>
                                </div>
                                <div class="d-flex px-4 py-2">
                                    <div class="w-60">Master Bedroom</div>
                                    <div class="w-40 fw-600">16 m²</div>
                                </div>
                                <div class="d-flex bg-dark-2 px-4 py-2">
                                    <div class="w-60">Kids Bedroom</div>
                                    <div class="w-40 fw-600">12 m²</div>
                                </div>
                                <div class="d-flex px-4 py-2">
                                    <div class="w-60">Bath Room</div>
                                    <div class="w-40 fw-600">6 m²</div>
                                </div>
                                <div class="d-flex bg-dark-2 px-4 py-2">
                                    <div class="w-60">Guest Toilet</div>
                                    <div class="w-40 fw-600">2 m²</div>
                                </div>
                                <div class="d-flex px-4 py-2">
                                    <div class="w-60">Balcony</div>
                                    <div class="w-40 fw-600">5 m²</div>
                                </div>
                                <div class="d-flex px-4 bg-dark-2 py-2">
                                    <div class="w-60">Storage Room</div>
                                    <div class="w-40 fw-600">3 m²</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <img src="images/misc/floorplan-2-color.webp" class="w-100 wow fadeInUp" data-wow-delay=".2s" alt="">
                    </div>
                </div>
            </div>
            <div id="plans">
            {!! $plans->render() !!}
            @if(isset($sender))
            {!! $sender->render() !!}
            @endif
            </div>
            @include('financial-proyection')
        </section>

        <section id="section-gallery" style="background-color:#3e401c !important;" class="bg-dark-2 relative">
            <div class="container relative z-2">
              <div class="row g-4 gx-5 justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="subtitle s2 mb-3 wow fadeInUp" data-wow-delay=".0s">Dicover Gallery</div>
                    <h2 class="wow fadeInUp" data-wow-delay=".2s">Galería</h2>
                </div>
              </div>

              <div class="row">
                  <div class="col-md-12 text-center">
                      <ul id="filters" class="wow fadeInUp" data-wow-delay="0s">
                        <li><a href="#" data-filter="*" class="selected">Ver todo</a></li>
                          <li><a href="#" data-filter=".exterior">Exterior</a></li>
                          <li><a href="#" data-filter=".interior">Interior</a></li>
                      </ul>
                  </div>
              </div>


              <div id="gallery" class="row g-3 wow fadeInUp" data-wow-delay=".3s">

           
<div class="col-md-3 col-sm-6 col-12 item interior">
                    <a href="imagenes/aldea_kuzamil_03.jpg" class="image-popup d-block hover">
                        <div class="relative overflow-hidden">
                            <div class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                Ver
                            </div>
                            <div class="absolute start-0 w-100 h-100 overlay-dark-7 hover-op-1 z-2"></div>
                            <img src="imagenes/aldea_kuzamil_03.jpg" class="w-100 hover-scale-1-2" alt="">
                        </div>
                    </a>
                </div>

<div class="col-md-3 col-sm-6 col-12 item interior">
                    <a href="imagenes/aldea_kuzamil_04.jpg" class="image-popup d-block hover">
                        <div class="relative overflow-hidden">
                            <div class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                Ver
                            </div>
                            <div class="absolute start-0 w-100 h-100 overlay-dark-7 hover-op-1 z-2"></div>
                            <img src="imagenes/aldea_kuzamil_04.jpg" class="w-100 hover-scale-1-2" alt="">
                        </div>
                    </a>
                </div>

<div class="col-md-3 col-sm-6 col-12 item interior">
                    <a href="imagenes/aldea_kuzamil_05.jpg" class="image-popup d-block hover">
                        <div class="relative overflow-hidden">
                            <div class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                Ver
                            </div>
                            <div class="absolute start-0 w-100 h-100 overlay-dark-7 hover-op-1 z-2"></div>
                            <img src="imagenes/aldea_kuzamil_05.jpg" class="w-100 hover-scale-1-2" alt="">
                        </div>
                    </a>
                </div>

<div class="col-md-3 col-sm-6 col-12 item interior">
                    <a href="imagenes/aldea_kuzamil_06.jpg" class="image-popup d-block hover">
                        <div class="relative overflow-hidden">
                            <div class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                Ver
                            </div>
                            <div class="absolute start-0 w-100 h-100 overlay-dark-7 hover-op-1 z-2"></div>
                            <img src="imagenes/aldea_kuzamil_06.jpg" class="w-100 hover-scale-1-2" alt="">
                        </div>
                    </a>
                </div>

<div class="col-md-3 col-sm-6 col-12 item interior">
                    <a href="imagenes/aldea_kuzamil_07.jpg" class="image-popup d-block hover">
                        <div class="relative overflow-hidden">
                            <div class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                Ver
                            </div>
                            <div class="absolute start-0 w-100 h-100 overlay-dark-7 hover-op-1 z-2"></div>
                            <img src="imagenes/aldea_kuzamil_07.jpg" class="w-100 hover-scale-1-2" alt="">
                        </div>
                    </a>
                </div>

<div class="col-md-3 col-sm-6 col-12 item interior">
                    <a href="imagenes/aldea_kuzamil_08.jpg" class="image-popup d-block hover">
                        <div class="relative overflow-hidden">
                            <div class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                Ver
                            </div>
                            <div class="absolute start-0 w-100 h-100 overlay-dark-7 hover-op-1 z-2"></div>
                            <img src="imagenes/aldea_kuzamil_08.jpg" class="w-100 hover-scale-1-2" alt="">
                        </div>
                    </a>
                </div>

              </div>


            </div>
        </section>
        
               @if(isset($asesor_area))
    @include(config('overrides.views.asesor-area'))
    @endif

    </div>

    <!-- footer begin -->
    <footer class="section-dark" style="background-color:#3e401c !important;">
        <div class="container">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                        <img src="imagenes/logo.png" class="w-200px" alt="">
                        <div class="spacer-single"></div>
                        <div class="fs-16">
                            Ubicación
                        </div>
                                                
                                                <div class="social-icons mb-sm-30 text-center">
                                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                                    <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                                                </div>
                    </div>
                </div>                
            </div>

            <div class="spacer-double"></div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6 mb-sm-30">
                    <div class="d-flex justify-content-center">
                        <i class="fs-30 id-color icon_phone"></i>
                        <div class="ms-3">
                            <h4 class="mb-0">Llámanos</h4>
                            <p>33 1855 1493</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-sm-30">
                    <div class="d-flex justify-content-center">
                        <i class="fs-30 id-color icon_clock"></i>
                        <div class="ms-3">
                            <h4 class="mb-0">Horario</h4>
                            <p>Lunes a Sábado 10:00 am - 8:00 pm</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-sm-30">
                    <div class="d-flex justify-content-center">
                        <i class="fs-30 id-color icon_mail"></i>
                        <div class="ms-3">
                            <h4 class="mb-0">Email</h4>
                            <p>contacto@aldeakuzamil.com</p>
                        </div>
                    </div>
                </div>                
            </div>

        </div>
        <div class="subfooter">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" style="text-align:center;">
                        <a href="https://propstudios.mx/">Sistema Desarrollado por PropStudios</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->


    <!-- Javascript Files
    ================================================== -->
    @push('script-includes')
        <script src="js/vendors.js"></script>
        <script src="js/designesia.js"></script>
        <script src="js/validation-booking.js"></script>
        <script src="js/swiper.js"></script>
        <script src="js/custom-swiper-2.js"></script>
    @endpush

@push('scripts')
<script>
    window.addEventListener('resize', function() {
        $('body').css({
          width: '100%',
          height: '100%'
        });
    });
</script>
@endpush
@include(config('overrides.views.scripts'))
</body>

</html>