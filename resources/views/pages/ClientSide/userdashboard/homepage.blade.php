<!DOCTYPE html>
<html lang="en" style="position: relative;min-height: 100%;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href={{ URL::asset('css/ClientCSS/Footer-Clean.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/ClientCSS/Header-Blue.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/ClientCSS/styles.css') }}>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>

</head>

<body style="margin: 0 0 169px;">
    <input type="hidden" id = "current_resident" data-id = {{ session("resident.id") }}>
    
    @include('inc.client_nav')
    <div class="min-h-screen flex items-center justify-center bg-gray-100 py-12 px-4 sm:px-6 lg:px-8" style="background-image: url('/images/backgroundhome.png'); background-size: cover;">
    <div class="container" style="margin-top: 20px;align-items: center;margin-bottom: 70px;">
        <div class="row" style="align-items: center;">
            <div class="col-md-6">
            <div class="carousel slide" data-ride="carousel" id="carousel-1" style="background-size: cover;">
            <div class="carousel-inner" style="height: 400px;">
                <div class="carousel-item active">
                    <img class="w-100 h-100 object-cover object-center" src="{{ URL::to('images/city.jpg') }}" alt="Slide Image" style="height: 400px;">
                </div>
                <div class="carousel-item">
                    <img class="w-100 h-100 object-cover object-center" src="{{ URL::to('images/city1.png') }}" alt="Slide Image" style="height: 400px;">
                </div>
                <div class="carousel-item">
                    <img class="w-100 h-100 object-cover object-center" src="{{ URL::to('images/city2.png') }}" alt="Slide Image" style="height: 400px;">
                </div>
            </div>

                <div>
                    <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a>
                    <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a>
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-1" data-slide-to="1"></li>
                    <li data-target="#carousel-1" data-slide-to="2"></li>
                </ol>
                </div>

            </div>
            <div class="col-md-6">
                <div class="d-flex mb-3">
                    <img src="{{ URL::to('images/logo.png') }}" alt="Logo" style="height: 80px;">
                </div>
                <h1 class="text-white text-lg ml-3"><strong>VISION</strong></h1>
                <p class="text-white ml-3">MITACOR aspires for a quality life for everyone influenced by innovative technologies and technological advancement.</p>
                <br>
                <h1 class="text-white text-lg ml-3"><strong>MISSION</strong></h1>
                <p class="text-white ml-3">MITACOR’s mission is plain and simple: to provide and promote quality technology through practical ICT solutions for all walks of life. We aim to uplift the lives of many by bringing them touchpoints and connections that will change and empower the way they live. Our existence is to make everyone’s communication faster, their information access better, and the range of opportunities even wider. We make things closer at the point of your finger.</p>
            </div>

        </div>
    </div>
    <br><br>
    <footer class="footer-clean bg-gray-900" style="position: absolute;left: 0;bottom: 0;height: 174px;width: 100%;overflow: hidden;margin-top: 30px; color: #54c0e8 !important;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-4 col-md-3 item">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#">Web design</a></li>
                        <li><a href="#">Development</a></li>
                        <li><a href="#">Hosting</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 item">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">Company</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Legacy</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 item">
                    <h3>Careers</h3>
                    <ul>
                        <li><a href="#">Job openings</a></li>
                        <li><a href="#">Employee success</a></li>
                        <li><a href="#">Benefits</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a>
                    <p class="copyright">Maharlican Innovations and Technology Applications Corporation © 2022</p>
                </div>
            </div>
        </div>
        
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>