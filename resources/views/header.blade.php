@if(!empty($menu))
<header class="transparent header-light header-float">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header-inner" style="background-color:#3e401c;">
                    <div class="de-flex">
                        <div class="de-flex-col">
                            <!-- logo begin -->
                            <div id="logo" style="padding:15px 0 15px 0;>
                                <a href="index.html">
                                    <img class="logo-main" src="imagenes/aldea_kuzamil.png" alt="" >
                                    <img class="logo-scroll" src="imagenes/aldea_kuzamil.png"" alt="" >
                                    <img class="logo-mobile" src="imagenes/aldea_kuzamil.png" alt="" >
                                </a>
                            </div>
                            <!-- logo close -->
                        </div>
                        <div class="de-flex-col">
                            <div class="de-flex-col header-col-mid">
                                <ul id="mainmenu">
                                    @if(isset($asesor))
                                    <li><a class="menu-item" style="color:#c8cda2" href="#">Asesor</a>{{ $asesor }}</li>
                                    @endif
                                    @if(isset($client))
                                    <li><a class="menu-item" style="color:#c8cda2" href="#">Cliente</a>{{ $client }}</li>
                                    @endif
                                    @if(!empty($menu))
                                    <li class="just-phone"><a class="menu-item" style="color:#c8cda2 !important;" href="{{ route('disponibilidad') }}">Disponibilidad</a></li>
                                    <li class="just-phone"><a class="menu-item" style="color:#c8cda2 !important;" href="{{ route('torre') }}">Listado</a></li>
                                    <li class="just-phone"><a class="menu-item" style="color:#c8cda2 !important;" href="{{ route('client-login') }}">Cambiar Cliente</a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="de-flex-col">
                            <a class="btn-main fx-slide w-100" style="background-color:#c8cda2; color:#3e401c;"  href="{{ route('client-login') }}"><span>Cambiar Cliente</span></a>
                            <div class="menu_side_area">
                                <span id="menu-btn"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@endif
<section id="section-hero" class="text-light no-top no-bottom relative overflow-hidden z-1000">
    <div class="abs w-100 abs-centered z-2">
        <div class="container">
            <div class="spacer-double"></div>
            <div class="row g-4 align-items-center justify-content-center">
                <div class="col-md-8 text-center">
                    <h1 class="mb-2">Entre el susurro de la selva, nace el equilibrio de tu vida.</h1>
                    <p class="lead mb-3">Exclusivas Villas en Cozumel Quintana Roo</p>
                    <a class="btn-main btn-line bg-blur fx-slide" href="{{ route('disponibilidad') }}"><span>Disponibilidad</span></a>&nbsp;
                    <a class="btn-main btn-line bg-blur fx-slide" href="{{ route('torre') }}"><span>Listado</span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="vertical-center">
        <div class="swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <div class="swiper-inner" data-bgimage="url(imagenes/interior-c.jpg)">
                    <div class="sw-overlay op-5"></div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swiper-inner" data-bgimage="url(imagenes/espejo-c.jpg)">
                    <div class="sw-overlay op-5"></div>
                </div>
            </div>
       
          </div>
          
        </div>
    </div>
    <div class="abs w-100 bottom-0 z-2 pb-4 sm-hide">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6>10 min Caminando a la playa</h6>
                        </div>
                        <div>
                            <h6>600 metros de Chankanaab</h6>
                        </div>
                        <div>
                            <h6>15 min del Centro de Cozumel</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gradient-edge-bottom op-8"></div>
</section>