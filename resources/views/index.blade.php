<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
          <meta charset="utf-8">
         <link rel="shortcut icon" href="img/iconominkay.png">
      <title>Proyecto Minkay</title>
     <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
      <link href="font-awesome/fonts/css/fontawesome-all.css" rel="stylesheet" type="text/css">
      <link href="font-awesome/fonts/css/animationfont.css" rel="stylesheet" type="text/css">
      <link href="css/estilos.css" rel="stylesheet">
      <link href="css/animate.css" rel="stylesheet">

    <script src="js/jquery/jquery.js"></script>
    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap/bootstrap.js"></script>
    <script src="js/wow.js"></script>

    <script src="js/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <script src="js/jquery.lazyload.js"></script>
    <script async src="js/addtoany.js"></script>
  </head>

<body>

<script >
  $(document).ready(function(){
      $("img").lazyload({
        threshold: 200,
      });
  });
  </script>    

<script type="text/javascript">
    $(window).on('load',function(){
        $('#ModalInicio').modal('show');
    });
</script>

<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('portfolio').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
</script>
<center>
<div id="ModalInicio" class="modal fade">
    <div class="modal-dialog" id="mod_ai">
        <div class="modal-content" id="mdctini">
            <div class="modal-body">
                <img src="img/modalinicio/oplaboral.jpg" id="imgmodi">
            </div>
        </div>
    </div>
</div>
</center>

<style>
  .carousel-item {
  height: 100vh;
  min-height: 300px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>

   <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container-fluid">
          <a class="navbar-brand js-scroll-trigger" href="#page-top"><img data-original="img/logos/logominkayblanco.png" id="imagenlogom" > </a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
              <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#elegir">¿Porqué Elegir?</a></li>
              <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Servicios</a></li>
              <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#comentarios">Hablan de Nosotros</a></li>
              <li class="nav-item"><a class="nav-link js-scroll-trigger" data-target="#mdactc" data-toggle="modal">Contáctenos</a></li>
              <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('login') }}">Acceso Clientes</a></li>
            </ul>
          </div>
        </div>
    </nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('http://placehold.it/1900x1080')">
              <div class="carousel-caption d-none d-md-block">
                <h3>First Slide</h3>
                <p>This is a description for the first slide.</p>
                         <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger wow rollIn" href="#portfolio" >Conócenos</a>
              </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
              <div class="carousel-caption d-none d-md-block">
                <h3>Second Slide</h3>
                <p>This is a description for the second slide.</p>
              </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
              <div class="carousel-caption d-none d-md-block">
                <h3>Third Slide</h3>
                <p>This is a description for the third slide.</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
</div>

<!-- Services -->
<section id="elegir">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 wow fadeInDown" align="center">
            <h3 class="section-heading text-uppercase">¿Porqué elegir Minkay?</h3>
                <div class="lineasub"></div>              
          </div>
        </div>

        <div class="row">
              <div class="col-md-6" >
                  <div class="row secdescq">
                        <div class="col-md-3 wow bounceInLeft">
                            <span class="fa-stack fa-4x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fas fa-mobile-alt fa-stack-1x fa-inverse faa-pulse animated-hover"></i>
                            </span>
                        </div>
                        <div class="col-md-9">
                                          <h4 class="service-heading wow bounceInLeft">Accesible</h4>
                            <p class="text-muted wow bounceInLeft" >
                                Productos accesibles y de fácil manejo a la comodidad del cliente
                            </p>
                        </div>
                  </div>

                  <div class="row secdescq">
                      <div class="col-md-3 wow bounceInLeft">
                            <span class="fa-stack fa-4x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fas fa-signal fa-stack-1x fa-inverse faa-pulse animated-hover"></i>
                            </span>
                      </div>
                      <div class="col-md-9">
                            <h4 class="service-heading">Completo</h4>
                            <p class="text-muted">
                              Productos Completos y eficaces
                            </p>
                      </div>
                  </div>
              </div>

              <div class="col-md-6 bloqueimg">
                <img data-original="img/pqm/bloque1.png" class="imgpqm wow bounceInRight">
              </div>
        </div>

        <div class="row">
              <div class="col-md-6 bloqueimg">
                <img data-original="img/pqm/bloque2.png" class="imgpqm wow bounceInRight">
              </div>

          <div class="col-md-6">
                <div class="row secdescq">
                      <div class="col-md-3 wow bounceInLeft">
                          <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-primary "></i>
                            <i class="fas fa-calculator fa-stack-1x fa-inverse faa-pulse animated-hover"></i>
                          </span>
                      </div>
                      <div class="col-md-9">
                          <h4 class="service-heading">Eficacia</h4>
                          <p class="text-muted">
                          Productos eficaces y eficientes.</p>
                      </div>
                </div>

                <div class="row secdescq">
                      <div class="col-md-3 wow bounceInLeft">
                          <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fab fa-gratipay fa-stack-1x fa-inverse faa-tada animated-hover"></i>
                          </span>
                      </div>
                      <div class="col-md-9">
                          <h4 class="service-heading">Patriotismo</h4>
                          <p class="text-muted">
                            Producto 100% hecho por peruanos 
                          </p>
                      </div>
                </div>
        </div>
      </div>
</section>

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 wow flipInX"  align="center">
            <h3 class="section-heading text-uppercase">Servicios</h3>
              <div class="lineasub">
               </div> 
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 portfolio-item wow slideInLeft">
            <div class="portfolio-link" data-toggle="modal" data-target="#modalserv">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" data-original="img/picserv/serviciosg.jpg" alt="">
            </div>
              <center><div class="textsub"><h5>Servicios Generales</h5></div></center>
          </div>

          <div class="col-md-6 portfolio-item wow slideInRight">
            <div class="portfolio-link" data-toggle="modal" data-target="#modalfac">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" data-original="img/picserv/facilities.jpg">
            </div>
            <center><div class="textsub"><h5>Facilities Management</h5><div></center>
          </div>
          <div class="col-md-6 portfolio-item wow slideInLeft">
            <div class="portfolio-link" data-toggle="modal" data-target="#modalinte">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" data-original="img/picserv/interioresminkay.jpg">
            </div>
            <center><div class="textsub"><h5>Interiorismo</h5></div></center>
          </div>
          <div class="col-md-6 portfolio-item wow slideInRight">
            <div class="portfolio-link" data-toggle="modal" data-target="#modalsering">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" data-original="img/picserv/serving.jpg">
            </div>
            <center><div class="textsub"><h5>Servicios de Ingeniería</h5></div></center>
          </div>
          <div class="col-md-6 portfolio-item wow slideInLeft">
            <div class="portfolio-link" data-toggle="modal" data-target="#modaleco">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" data-original="img/picserv/eco.jpg" >
            </div>
            <center><div class="textsub"><h5>Sistemas Ecoeficientes</h5></div></center>
          </div>
          <div class="col-md-6 portfolio-item wow slideInRight">
            <div class="portfolio-link" data-toggle="modal" data-target="#modalappweb">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" data-original="img/picserv/appmovil.png">
            </div>
            <center><div class="textsub"><h5>Aplicaciones</h5></div></center>
          </div>

        </div>
      </div>

   </section>

<div class="modal fade" id="modalserv">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <center>
        <h5 class="modal-title" id="exampleModalLabel">Servicios Generales</h5>
        </center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Ofrecemos un servicio integral: realizamos visitas de inspección periódicas, visitas de emergencia y/o visitas de mantenimiento preventivo en la frecuencia requerida
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalfac">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Facilites Management</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Administramos de forma integral y óptima sus instalaciones y equipamiento, respondiendo en tiempo real a sus solicitudes.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalinte">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">INTERIORISMO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Desarrollamos proyectos acompañando al cliente en cada etapa del mismo, brindando en todo momento el asesoramiento que el cliente requiere
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalsering">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SERVICIOS DE INGENIERÍA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Ofrecemos servicios especializados en proyectos en el ámbito de la ingeniería civil.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modaleco">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SISTEMAS ECOEFICIENTES</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Nuestra propuesta viene de la mano con la implementación de sistemas que garanticen ahorros en un marco del cuidado del medio ambiente, utilizando de manera más responsable los recursos naturales como el agua y la disminución de la emisión de contaminantes.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalappweb">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">APLICACIONES WEB</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <p>  Analizamos los requerimientos de su empresa, buscando la mejor solución que se adapte a sus necesidades.</p>
          <p>  Diseñamos y Desarrollamos Aplicaciones Web y Móviles a la medida del cliente, empleando programación tradicional, programación web y bases de datos utilizando herramientas de desarrollo java, android, pl/sql, php, python, JavaScript y HTML5.  </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

    <!-- Team -->
<section class="bg-light" id="comentarios">
      <div class="container">
                  <div class="row">
                    <div class="col-lg-12 wow lightSpeedIn" align="center">
                      <h3 class="comt">HABLAN DE NOSOTROS</h3>
                        <div class="lineasub">
                        </div>            
                    </div>
                  </div>

          <div class="container">
              <div id="carouselContent" class="carousel slide" data-ride="carousel" data-interval="3500">
                  <div class="carousel-inner" role="listbox">
                      <div class="carousel-item active p-4">
                          <div class="row" >
                            <div class="col-md-4">
                              <img data-original="https://i2.wp.com/www.businessempresarial.com.pe/wp-content/uploads/2017/12/e18d24ac-91be-4642-9705-fb04d3b463fa.jpg?w=1144" style="width: 75%">
                            </div>
                            <div class="col-sm-8">
                               <h4 class="tescl">
                                 "Sentimos usabilidad, eficiencia, y una gran conformidad para el uso de los sistemas que proyecto minkay realiza, estamos conformes, buena gestion de"
                               </h4>
                             <h5 class="textcarr"> MIBANCO</h5>
                          </div>
                        </div>
                    </div>
                      
                      <div class="carousel-item p-4">
                        <div class="row" >
                              <div class="col-md-4">
                                <img data-original="https://www.compartamos.com.pe/wps/wcm/connect/d7b9a600414882b8a14aa393e1f61293/logo_nodo.png?MOD=AJPERES" style="width: 85%">
                              </div>
                              <div class="col-sm-8">
                                   <h4 class="tescl">
                                     "Sentimos usabilidad, eficiencia, y una gran conformidad para el uso de los sistemas que proyecto minkay realiza, estamos conformes, buena gestion de"
                                   </h4>
                               <h5 class="textcarr"> COMPARTAMOS</h5>
                            </div>
                        </div>
                      </div>
                    </div>
                  
                   <a class="carousel-control-prev" href="#carouselContent" role="button" data-slide="prev"><i class="fas fa-arrow-circle-left fa-3x" id="flechaizq"></i></a>
                   <a class="carousel-control-next" href="#carouselContent" role="button" data-slide="next"><i class="fas fa-arrow-circle-right fa-3x" id="flechader"></i></a> 
              </div>
          </div>

      </div>
</section>

<div class="modal fade" id="mdactc" tabindex="-1" role="dialog" aria-labelledby="mdactc">
    <div class="modal-dialog" role="document" id="mddctc" >
      <div class="modal-content" id="mdctc">
        <div class="modal-header" style="color: white;background-color: #00a7e2;border-radius: 0px">
            <h5 class="modal-title" >CONTÁCTENOS</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
              </button>
        </div>
        <div class="modal-body">
          <div class="row">
              <div class="col-md-6">  
              <img src="img/logos/logominkay.png" id="imgmodal">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15604.890163451972!2d-77.022344!3d-12.096912!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5787fab6e3209266!2sProyecto+Minkay+SAC!5e0!3m2!1ses!2spe!4v1530051717503" allowfullscreen></iframe>
              </div>
              <ul class="listmodd">
                <li>San Isidro - Lima</li>
                <li>(01) 344 - 6645</li>
              </ul>           
              </div>
          <div class="col-md-6">
            <form>
              <div class="form-group"><input type="email" class="form-control" id="nombreapellido" aria-describedby="emailHelp" placeholder="Nombres y Apellidos ..."></div>
              <div class="form-group"><input type="email" class="form-control" id="correomen" placeholder="Correo electrónico..."></div>
              <div class="form-group"><input type="email" class="form-control" id="telefc" placeholder="Teléfono..."></div>
              <div class="form-group"><textarea type="password" class="form-control" id="mensajetexto" placeholder="Mensaje"></textarea></div>
            </form>
          </div>

          </div>
        </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btnmc" data-dismiss="modal">CANCELAR</button>
                  <button type="button" class="btn btn-info btnmc">ENVIAR</button>
                </div>
              </div>
            </div>
</div>
<footer id="moar">
  <div class="container-fluid">
    <div class="row">
    <div class="col-md-4">
        <h3 class="wow bounceInRight">Proyecto Minkay</h3>
        <p class="wow bounceInLeft" style="font-size: 14px">Somos un equipo de profesionales con experiencia dedicados a brindar soluciones a la medida de las necesidades de las empresas.</p>
    </div>
    <div class="col-md-8">
      <div class="row">
          <div class="col-md-4 wow zoomInRight" >
            <h3>Ubíquenos</h3>
              <ul class="ulfoot">
                    <li>Av. Canaval y Moreyra 425</li>
                    <li>Oficina 41</li>
                    <li>San Isidro</li>
              </ul>
          </div>
          <div class="col-md-4 wow zoomInRight" >
              <ul class="ulfoot" >
                  <h3> Contáctenos</h3>
                    <li class="wow zoomInRight"> 
                        <i class="fas fa-phone-square iconpie"></i> 
                         Teléfono : (01) 344 - 6645 
                    </li>
                    <li>
                       <i class="fas fa-at iconpie"></i>
                        E-mail : ventas@minkay.com.pe
                    </li>
                    <li> 
                        <i class="fas fa-mobile-alt iconpie"></i>
                         Celular: <a href="tel:+51968885288" style="color:white">+51968885288</a>
                    </li>
              </ul>
          </div>
          <div class="col-md-4 wow zoomInRight" >

            <ul class="ulfoot">
              <h3> Síguenos</h3>
            
                      <li >
                        <a href="https://www.facebook.com/minkaysac" target="blank" class="lisred" >
                          <i class="fab fa-facebook-square  faa-flash animated-hover"></i> Facebook
                        </a>
                      </li>

                      <li> 
                        <a href="https://www.linkedin.com/in/minkay-proyectos-y-servicios-2a334a149" target="blank" class="lisred" >
                          <i class="fab fa-linkedin faa-flash animated-hover"></i> LinkedIn
                        </a>
                      </li>
              </ul>
          </div>

      </div>
    </div>
     </div>
    </div>
    
</footer>

<footer class="pieminkay" >
   
  <div class="copyright-wrapper" align="center" >
    <div class="copyright-container container" >
        <div class="copyright-right">
          <span class="frase"> Todos los derechos reservados. Desarrollado por Proyecto Minkay <i class="fa fa-copyright "></i></span> 
          <span class="frase"> 2018  </span>
        </div>

    </div>
  </div>
</footer>
<div class="a2a_kit a2a_kit_size_32  a2a_floating_style a2a_vertical_style a2a_follow" style="left:0px; top:180px;">
      <a href="https://es-la.facebook.com/minkaysac/"" class="a2a_button_facebook"></a>
      <a class="a2a_button_facebook_messenger"></a>
      <a href="https://www.linkedin.com/company/pminkaysac" class="a2a_button_linkedin"></a>
      <a class="a2a_button_whatsapp"></a>
</div>

<!-- AddToAny END -->
    <script src="js/agency.js"></script>
  </body>

</html>
