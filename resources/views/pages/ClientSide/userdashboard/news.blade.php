<!DOCTYPE html>
<html lang="en" style="position: relative;min-height: 100%;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>News</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href={{ URL::asset('css/ClientCSS/Footer-Clean.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/ClientCSS/Header-Blue.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/ClientCSS/styles.css') }}>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body style="margin: 0 0 169px;">
    
@include('inc.client_nav')

    <div class="bg-gray-100 py-8">
    <div class="container mx-auto px-4">
    <div class="mb-3">
            <div class="dropdown">
                <button class="btn bg-blue-400 dropdown-toggle" type="button" id="sortDropdown" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Sort by
                </button>
                <div class="dropdown-menu" aria-labelledby="sortDropdown">
                    <a class="dropdown-item" href="#" id="sortTime">Sort by Time</a>
                    <a class="dropdown-item" href="#" id="sortTitle">Sort by Title</a>
                </div>
            </div>
        </div>  
        <div class="container">
            <div class="container">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @forelse($news as $item)
                        <div class="bg-white p-8 shadow-md rounded-lg">
                            <h4 class="text-2xl font-bold mb-4">{{ $item->title }}</h4>
                            <p class="text-gray-700">{{ \Illuminate\Support\Str::limit($item->description, 100) }}</p>
                            <a href="{{ route('news.show', $item) }}">Read More</a>
                        </div>
                    @empty
                        <div class="bg-white p-8 shadow-lg rounded-lg">
                            <p class="text-gray-700">No news available.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
        </div>
    </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById('sortTime').addEventListener('click', function() {
        sortOrdinances('time');
    });

    document.getElementById('sortTitle').addEventListener('click', function() {
        sortOrdinances('title');
    });

    function sortOrdinances(sortBy) {
        var ordinancesContainer = document.querySelector('.grid');
        var ordinances = Array.from(ordinancesContainer.children);

        ordinances.sort(function(a, b) {
            var valueA, valueB;

            if (sortBy === 'time') {
                valueA = a.querySelector('.text-gray-500').textContent;
                valueB = b.querySelector('.text-gray-500').textContent;
            } else if (sortBy === 'title') {
                valueA = a.querySelector('.text-2xl').textContent;
                valueB = b.querySelector('.text-2xl').textContent;
            }

            if (valueA < valueB) {
                return -1;
            } else if (valueA > valueB) {
                return 1;
            } else {
                return 0;
            }
        });

        while (ordinancesContainer.firstChild) {
            ordinancesContainer.firstChild.remove();
        }

        ordinances.forEach(function(ordinance) {
            ordinancesContainer.appendChild(ordinance);
        });
    }
</script>

</body>

</html>