<!DOCTYPE html>
<html lang="en" style="position: relative;min-height: 100%;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Info</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href={{ URL::asset('fonts\vendor\font-awesome/fontawesome5-overrides.min.css') }}>
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
    
    @include('inc.client_nav')

    <div class="container mx-auto my-8">
        <div class="bg-gray-100 py-4 px-8">
            <h1 class="text-3xl font-bold mb-4">Contact Us</h1>
            <div class="space-y-4">
                <div class="flex items-center">
                    <i class="fas fa-phone mr-2"></i>
                    <strong>Phone</strong>
                    <p class="ml-4">012345678902</p>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-mail-bulk mr-2"></i>
                    <strong>Email</strong>
                    <p class="ml-4">test@example.com</p>
                </div>
            </div>
        </div>

        <div class="bg-gray-100 py-4 px-8 mt-8">
            <h1 class="text-3xl font-bold mb-4">Other Government Hotlines</h1>
            <div class="space-y-4">
                <div class="flex items-center">
                    <i class="fas fa-dot-circle-o mr-2"></i>
                    <p>National Emergency Hotline in the Philippines: 911</p>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-dot-circle-o mr-2"></i>
                    <p>Philippine National Police Hotline: 117 or (02) 8722-0650</p>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-dot-circle-o mr-2"></i>
                    <p>Philippine Red Cross: 143 or (02) 8527-8385 to 95</p>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-dot-circle-o mr-2"></i>
                    <p>Bureau of Fire Protection: (02) 8426-0219 or (02) 8426-3812</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto my-8 pb-10">
        <div class="bg-gray-100 py-4 px-8">
            <h1 class="text-3xl font-bold mb-4">Frequently Asked Questions</h1>
            <div class="space-y-4">
                <div class="flex items-center">
                    <i class="fas fa-question mr-2"></i>
                    <strong>Random Question</strong>
                    <p class="ml-4">Random Answer</p>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-question mr-2"></i>
                    <strong>Random Question</strong>
                    <p class="ml-4">Random Answer</p>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-question mr-2"></i>
                    <strong>Random Question</strong>
                    <p class="ml-4">Random Answer</p>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-question mr-2"></i>
                    <strong>Random Question</strong>
                    <p class="ml-4">Random Answer</p>
                </div>
            </div>
        </div>
    </div>

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
