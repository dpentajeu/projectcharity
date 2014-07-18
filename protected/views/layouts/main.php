<?php
    $baseUrl = Yii::app()->request->baseUrl;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>We remember MH17</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= $baseUrl ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="<?= $baseUrl ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <!-- Custom Theme CSS -->
    <link href="<?= $baseUrl ?>/css/grayscale.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="http://www.malaysiaairlines.com/my/en/site/mh17.html" target="_blank">
                    <i class="fa fa-play-circle"></i>  <span class="light">MH17</span> Media Statement
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">Remember</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#download">Wall</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">News</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <section class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">MH17</h1>
                        <p class="intro-text">Our thoughts and prayers are with the passengers, crew members, families and friends on board MH17.</p>
                        <div class="page-scroll">
                            <a href="#about" class="btn btn-circle">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>We remember MH17</h2>
                <p>A Malaysia Airlines flight from Amsterdam to Kuala Lumpur, Malaysia, crashed Thursday 17 July 2014 in eastern Ukraine.</p>
                <p>We face this tragedy together, regardless of differences in race or religion.</p>                
            </div>
        </div>
    </section>

    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Wall of Tribute</h2>
                    <p>"uishfuidfhuisdhfuisdhfiushuihfuihsdiudfs", John.</p>
                    <p>"uishfuidfhuisdhfuisdhfiushuihfuihsdiudfs", John.</p>
                    <p>"uishfuidfhuisdhfuisdhfiushuihfuihsdiudfs", John.</p>
                    <p>"uishfuidfhuisdhfuisdhfiushuihfuihsdiudfs", John.</p>
                    <p>"uishfuidfhuisdhfuisdhfiushuihfuihsdiudfs", John.</p>
                    <p>"uishfuidfhuisdhfuisdhfiushuihfuihsdiudfs", John.</p>
                    <p>"uishfuidfhuisdhfuisdhfiushuihfuihsdiudfs", John.</p>
                    <p>"uishfuidfhuisdhfuisdhfiushuihfuihsdiudfs", John.</p>
                    <p>"uishfuidfhuisdhfuisdhfiushuihfuihsdiudfs", John.</p>
                    <p>"uishfuidfhuisdhfuisdhfiushuihfuihsdiudfs", John.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Follow breaking news</h2>
                <ul class="list-inline banner-social-buttons">
                    <li><a href="#twitter" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li><a href="#instagram" class="btn btn-default btn-lg"><i class="fa fa-instagram fa-fw"></i> <span class="network-name">Instagram</span></a>
                    </li>
                    <li><a href="#facebook" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                    </li>
                </ul>
                <p>© Credits to Pentajeu Software Team</p>
            </div>
        </div>
    </section>

    <div id="map"></div>

    <!-- Core JavaScript Files -->
    
    <script src="<?= $baseUrl ?>/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - You will need to use your own API key to use the map feature -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?= $baseUrl ?>/js/grayscale.js"></script>

</body>

</html>