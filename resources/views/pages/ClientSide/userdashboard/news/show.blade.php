@extends('layouts.apps')

@section('content')
    <div class="container">
        <div class="col-sm-12 text-left">
            <h1 class="border-bottom border-bot text-4xl font-bold pt-3">News Detail</h1>
        </div>
        <br><br>
        <div class="container">
            <div class="bg-white p-8 shadow-md rounded-lg">
                <h4 class="text-2xl font-bold mb-4">{{ $ordinance->title }}</h4>
                <p class="text-gray-700">{!! nl2br(e(str_replace('\n', PHP_EOL, $ordinance->description))) !!}</p>
            </div>
        </div>
    </div>
@endsection