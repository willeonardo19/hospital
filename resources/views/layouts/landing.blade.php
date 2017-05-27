<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Adminlte-laravel - {{ trans('adminlte_lang::message.landingdescription') }} ">
    <meta name="author" content="Sergi Tur Badenas - acacha.org">

    <meta property="og:title" content="Adminlte-laravel" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Adminlte-laravel - {{ trans('adminlte_lang::message.landingdescription') }}" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org/" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x600.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x314.png" />
    <meta property="og:sitename" content="demo.adminlte.acacha.org" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@acachawiki" />
    <meta name="twitter:creator" content="@acacha1" />
    <title>Hospital</title>
    <!--title>{{ trans('adminlte_lang::message.landingdescriptionpratt') }}</title-->

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('/js/smoothscroll.js') }}"></script>


</head>

<body data-spy="scroll" data-offset="0" data-target="#navigation">

<!-- Fixed navbar -->
<div id="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        @if (!Auth::guest())
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><b>Hospital</b></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{url('/home')}}" class="smoothScroll">{{ trans('adminlte_lang::message.home') }}</a></li>
                
            </ul>
        @endif
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">{{ trans('adminlte_lang::message.login') }}</a></li>
                    <!--li><a href="{{ url('/register') }}">{{ trans('adminlte_lang::message.register') }}</a></li-->
                @else
                    <li><a href="/home">{{ Auth::user()->name }}</a></li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>


<section id="home" name="home"></section>
<div id="headerwrap">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-12">
                <h1>Hospital <b>Señorita Elena</b></h1>
               
            </div>
            <div class="col-lg-3">
                
            </div>
            <div class="col-lg-6">
                <img class="img-responsive" src="{{ asset('/img/logo.png') }}" >
            </div>
            <div class="col-lg-3">
                
            </div>

        </div>
    </div> <!--/ .container -->

</div><!--/ #headerwrap -->


<section id="desc" name="desc"></section>

<!-- FEATURES WRAP -->
<div id="features">
    <div class="container">
        <div class="row">
            <h1 class="centered">{{ trans('Información Sobre Nosotros') }}</h1>
            <br>
            <br>
            <div class="col-lg-6 centered">
                <img class="centered" src="{{ asset('/img/left.png') }}" alt="">
            </div>

            <div class="col-lg-6">
                <h3>{{ trans('Algunos Datos:') }}</h3>
                <br>
                <!-- ACCORDION -->
                <div class="accordion ac" id="accordion2">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                {{ trans('Nuestra Misión: ') }}
                            </a>
                        </div><!-- /accordion-heading -->
                        <div id="collapseOne" class="accordion-body collapse in">
                            <div class="accordion-inner">
                                <p>Avanzar con compasión el mandato de Jesucristo de evangelizar y hacer discípulos alrededor del mundo por medio de líderes nacionales comprometidos a una transformación de vida en asociación con cristianos que tengan el mismo propósito. Creemos que la verdadera transformación duradera requiere el creer en Jesucristo, arrepentirse y depender de Él. Este proceso incluye asistencia compasiva hacia aquellas personas en las comunidades en las que servimos.</p>
                            </div><!-- /accordion-inner -->
                        </div><!-- /collapse -->
                    </div><!-- /accordion-group -->
                    <br>

                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                {{ trans('Nuestra Visión:') }}
                            </a>
                        </div>
                        <div id="collapseTwo" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <p>Imaginamos un día cuando cada persona en la tierra tendrá por lo menos una oportunidad de escuchar y responder a una clara presentación del Evangelio de Jesucristo y tengan y tengan la oportunidad de crecer como discípulos de Cristo.</p>
                            </div><!-- /accordion-inner -->
                        </div><!-- /collapse -->
                    </div><!-- /accordion-group -->
                    <br>

                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                                {{ trans('Valores:') }}
                            </a>
                        </div>
                        <div id="collapseThree" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <p>Abrazando la Palabra de Dios y trabajando a través de del cuerpo de Cristo que es Su Iglesia , perseguimos nuestra misión con la unidad,  esperando en Dios y construyendo confianza entre nuestras alianzas y entre nosotros mismos con excelencia. </p>
                            </div><!-- /accordion-inner -->
                        </div><!-- /collapse -->
                    </div><!-- /accordion-group -->
                    <br>

                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
                                {{ trans('Puente de Vida:') }}
                            </a>
                        </div>
                        <div id="collapseFour" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <p>AMG Guatemala ha desarrollado el Modelo Puente de Vida, para guiar e inspirar a nuestra organización en la coordinación de esfuerzos con la iglesia local y otros actores de la comunidad para trabajar de forma integral con niños, niñas y sus familias en contextos difíciles.
</p>
                            </div><!-- /accordion-inner -->
                        </div><!-- /collapse -->
                    </div><!-- /accordion-group -->
                       
                    <br>
                </div><!-- Accordion -->
                <a class="accordion-toggle"  href="http://amgg.org/">
                                {{ trans('Click para mas información...') }}
                            </a>
            </div>
        </div>
    </div><!--/ .container -->
</div><!--/ #features -->





<section id="contact" name="contact"></section>
<div id="c">
    <div class="container">
        <p>
             Copyright © 2017 <a href="http://devsleosoft.com/">Leosoft</a>.
        </p>

    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
<script src="https://use.fontawesome.com/d5fc20dcd3.js"></script>
</body>
</html>
