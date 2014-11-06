<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Control de Laboratorio</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/personalizado.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">

    <!--Slider-->
    <link rel="stylesheet" href="slider/css/global.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
  <script src="slider/js/slides.min.jquery.js"></script>
  <script>
    $(function(){
      $('#slides').slides({
        preload: true,
        preloadImage: 'slider/img/loading.gif',
        play: 5000,
        pause: 2500,
        hoverPause: true,
        animationStart: function(current){
          $('.caption').animate({
            bottom:-35
          },100);
          if (window.console && console.log) {
            // example return of current slide number
            console.log('animationStart on slide: ', current);
          };
        },
        animationComplete: function(current){
          $('.caption').animate({
            bottom:0
          },200);
          if (window.console && console.log) {
            // example return of current slide number
            console.log('animationComplete on slide: ', current);
          };
        },
        slidesLoaded: function() {
          $('.caption').animate({
            bottom:0
          },200);
        }
      });
    });
  </script>
    <!--Fin slider-->
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">
        <div class="banner">
              <img src="images/images.jpg"/>
        </div>
        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!--<a class="navbar-brand" href="#">Project name</a>-->
            

            </div>

            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.html">Inicio</a></li>
                <li><a href="#about">Acerca De</a></li>
                <li><a href="sesion.php">Iniciar Sesión</a></li>
                
                   
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
   
   <!--slider -->
   <div id="contenedor">
   <div id="example">
      <img src="slider/img/new-ribbon.png" width="112" height="112" alt="New Ribbon" id="ribbon">
      <div id="slides">
        <div class="slides_container">
          <div class="slide">
            <a href="http://www.flickr.com/photos/jliba/4665625073/" title="145.365 - Happy Bokeh Thursday! | Flickr - Photo Sharing!" target="_blank"><img src="slider/img/slide-1.jpg" width="570" height="270" alt="Slide 1"></a>
            <div class="caption" style="bottom:0">
              <p>Happy Bokeh Thursday!</p>
            </div>
          </div>
          <div class="slide">
            <a href="http://www.flickr.com/photos/stephangeyer/3020487807/" title="Taxi | Flickr - Photo Sharing!" target="_blank"><img src="slider/img/slide-2.jpg" width="570" height="270" alt="Slide 2"></a>
            <div class="caption">
              <p>Taxi</p>
            </div>
          </div>
          <div class="slide">
            <a href="http://www.flickr.com/photos/childofwar/2984345060/" title="Happy Bokeh raining Day | Flickr - Photo Sharing!" target="_blank"><img src="slider/img/slide-3.jpg" width="570" height="270" alt="Slide 3"></a>
            <div class="caption">
              <p>Happy Bokeh raining Day</p>
            </div>
          </div>
          <div class="slide">
            <a href="http://www.flickr.com/photos/b-tal/117037943/" title="We Eat Light | Flickr - Photo Sharing!" target="_blank"><img src="slider/img/slide-4.jpg" width="570" height="270" alt="Slide 4"></a>
            <div class="caption">
              <p>We Eat Light</p>
            </div>
          </div>
          <div class="slide">
            <a href="http://www.flickr.com/photos/bu7amd/3447416780/" title="&ldquo;I must go down to the sea again, to the lonely sea and the sky; and all I ask is a tall ship and a star to steer her by.&rdquo; | Flickr - Photo Sharing!" target="_blank"><img src="slider/img/slide-5.jpg" width="570" height="270" alt="Slide 5"></a>
            <div class="caption">
              <p>&ldquo;I must go down to the sea again, to the lonely sea and the sky...&rdquo;</p>
            </div>
          </div>
          <div class="slide">
            <a href="http://www.flickr.com/photos/streetpreacher/2078765853/" title="twelve.inch | Flickr - Photo Sharing!" target="_blank"><img src="slider/img/slide-6.jpg" width="570" height="270" alt="Slide 6"></a>
            <div class="caption">
              <p>twelve.inch</p>
            </div>
          </div>
          <div class="slide">
            <a href="http://www.flickr.com/photos/aftab/3152515428/" title="Save my love for loneliness | Flickr - Photo Sharing!" target="_blank"><img src="slider/img/slide-7.jpg" width="570" height="270" alt="Slide 7"></a>
            <div class="caption">
              <p>Save my love for loneliness</p>
            </div>
          </div>
        </div>
        <a href="#" class="prev"><img src="slider/img/arrow-prev.png" width="24" height="43" alt="Arrow Prev"></a>
        <a href="#" class="next"><img src="slider/img/arrow-next.png" width="24" height="43" alt="Arrow Next"></a>
      </div>
      <img src="slider/img/example-frame.png" width="739" height="341" alt="Example Frame" id="frame">
    </div>
    </div>
   <!fin slider-->


    <!-- Carousel
    ================================================== 
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators 
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="data:image/gif;base64,R0lGODlhAQABAIAAAGZmZgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="data:image/gif;base64,R0lGODlhAQABAIAAAFVVVQAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>--><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Mision</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Vision</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Contacto</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <!--<hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>-->
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <!--<p class="pull-right"><a href="#">Back to top</a></p>-->
        <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
