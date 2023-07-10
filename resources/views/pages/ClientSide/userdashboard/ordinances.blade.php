<!DOCTYPE html>
<html lang="en" style="position: relative;min-height: 100%;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Ordinances</title>
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
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    @forelse($ordinances as $ordinance)
    <div class="bg-white p-8 shadow-md rounded-lg">
        <h4 class="text-2xl font-bold mb-0">{{ $ordinance->title }}</h4>
        <p class="text-gray-500 text-sm mt-1">Added on {{ $ordinance->created_at->format('M d, Y H:i') }}</p>
        <p class="text-gray-700 mt-4">{{ \Illuminate\Support\Str::limit($ordinance->description, 100) }}</p>
        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal{{ $ordinance->id }}">
            Read More
        </button>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal{{ $ordinance->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ $ordinance->title }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>{{ $ordinance->description }}</p>
                </div>
            </div>
        </div>
    </div>
    @empty
    <div class="bg-white p-8 shadow-lg rounded-lg">
        <p class="text-gray-700">No ordinances available.</p>
    </div>
    @endforelse
</div>

    </div>
</div>
<br><br>

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
