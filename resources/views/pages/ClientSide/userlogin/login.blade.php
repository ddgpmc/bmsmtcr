<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link href=" {{ URL::asset('css/app.css') }}" rel="stylesheet">
  <link href=" https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href={{ URL::asset('css/ClientCSS/Footer-Clean.css') }}>
  <link rel="stylesheet" href={{ URL::asset('css/ClientCSS/Header-Blue.css') }}>
  <link rel="stylesheet" href={{ URL::asset('css/ClientCSS/styles.css') }}>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
  <script>
    
  </script>

  <title>Login</title>
</head>

@include('inc.client_nav_login')
@include('layouts.flash-messages')
<div class="flex justify-center items-center min-h-screen bg-cover bg-center" style="background-image: url('/images/backgroundhome.png');">
  <div class="max-w-md w-full bg-white py-6 px-8 rounded-xl">
    <div class="text-center">
      <img class="mx-auto h-25 w-auto" src="/images/logodark.png" alt="Logo">
      <h2 class="mt-6 text-3xl font-bold text-gray-900">
        Log in to your account
      </h2>
    </div>
    <form class="mt-5 space-y-6 p" action="/barangay/login" method="POST">
      @csrf
      <div class="rounded-md shadow-sm -space-y-px">
        <div>
          <label for="client_login_email" class="sr-only">Email address</label>
          <input id="client_login_email" name="client_login_email" type="text" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Email address" value="{{ old('client_login_email')}}">
          @error('client_login_email')
          <span class="text-red-600 text-sm">{{ $message }}</span>
          @enderror
        </div>
        <div>
          <label for="client_login_password" class="sr-only">Password</label>
          <input id="client_login_password" name="client_login_password" type="password" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm mt-3" placeholder="Password">
          @error('client_login_password')
          <span class="text-red-600 text-sm">{{ $message }}</span>
          @enderror
        </div>
      </div>
      <div class="flex items-center justify-between mt-6">
        <div class="flex items-center">
          <input id="remember_me" name="remember" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
          <label for="remember_me" class="ml-2 block text-sm text-gray-900">
            Remember me
          </label>
        </div>
        <div class="text-sm">
          <a href="/barangay/forgot_password" class="font-medium text-indigo-600 hover:text-indigo-500">
            Forgot your password?
          </a>
        </div>
      </div>
      
      <div>
        <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          <span class="absolute left-0 inset-y-0 flex items-center pl-3">
            <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M2.05 5.85A1.75 1.75 0 013.8 4.1h12.4a1.75 1.75 0 011.75 1.75v8.5a1.75 1.75 0 01-1.75 1.75H3.8a1.75 1.75 0 01-1.75-1.75V5.85zm2.341 1.409a.25.25 0 00-.341.076L3.25 8.556V12a.75.75 0 00.75.75h12.5a.75.75 0 00.75-.75V8.556l-1.8-1.221a.25.25 0 00-.316.012l-6.25 5.5a.25.25 0 01-.316 0l-3.25-2.5a.25.25 0 00-.341-.076z"/>
            </svg>
          </span>
          Sign in
        </button>
        <br>
        <div class="flex justify-between">
          <a href="/barangay/register" class="text-sm text-black hover:text-blue-600 no-underline">Register Here</a>
          <a href="/login" class="text-sm text-black hover:text-blue-600 no-underline ml-auto">Go to Admin Login</a>
        </div>
      </form>
      </div>

  </div>
</div>

</body>
</html>
