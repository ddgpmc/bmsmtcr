
<!DOCTYPE html>
<html lang="en" style="position: relative;min-height: 100%;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Clearance</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href={{ URL::asset('css/ClientCSS/Contact-Form-Clean.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/ClientCSS/Footer-Clean.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/ClientCSS/Header-Blue.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/ClientCSS/styles.css') }}>
    <style>
    body {
        font-family: 'Poppins', sans-serif;
    }
    
    /* Add more specific selectors for other elements if needed */
</style>
</head>
@extends('layouts.apps')
@section('content')

<div class="col-sm-12 text-left">
  <h1 class="border-bottom border-bot text-4xl font-bold pt-3">Dashboard</h1>
</div>
<div class="main-wrapper col-sm-12 text-left h-100 pr-0 pl-0 pt-2 text-white">
  <div class="flex flex-wrap pl-4 pr-4">
    <div class="col-sm-3 form-group text-center dashboard-box rounded-lg bg-gray-800 p-4 mb-4">
      <h5 class="mb-3">Registered Population</h5>
      <h1 class="mb-0">{{ $registered ?? '0' }}</h1>
    </div>
    <div class="col-sm-2 form-group text-center dashboard-box rounded-lg bg-gray-800 p-4 mb-4">
      <h5 class="mb-3">Males</h5>
      <h1 class="mb-0">{{ $male ?? '0' }}</h1>
    </div>
    <div class="col-sm-2 form-group text-center dashboard-box rounded-lg bg-gray-800 p-4 mb-4">
      <h5 class="mb-3">List of Request</h5>
      <h1 class="mb-0">{{ $certificate_requests ?? '0' }}</h1>
    </div>
    <div class="col-sm-2 form-group text-center dashboard-box rounded-lg bg-gray-800 p-4 mb-4">
      <h5 class="mb-3">Females</h5>
      <h1>{{ $female ?? '0' }}</h1>
    </div>
    <div class="col-sm-3 form-group text-center dashboard-box rounded-lg bg-gray-800 p-4 mb-4">
      <h5 class="mb-3">Registered Voter</h5>
      <h1>{{ $voter ?? '0' }}</h1>
    </div>
    <div class="col-sm-12 border border-bot"></div>
  </div>
  <div class="row pt-4 pl-4 pr-4">
    <div class="col-sm-8">
      <!-- Rest of your code -->
    </div>
    <div class="col-sm-4">
      <!-- Rest of your code -->
    </div>
  </div>

</div>

@endsection
