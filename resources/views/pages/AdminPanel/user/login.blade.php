<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link href=" {{ URL::asset('css/app.css') }}" rel="stylesheet">
  <link href=" https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css" rel="stylesheet">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

  <title>Admin Login</title>
</head>

<body>
  @include('inc.client_nav_login')

    <div class="flex justify-center items-center h-screen bg-cover bg-center" style="background-image: url('/images/backgroundhome.png');">
        <div class="max-w-sm w-full p-4 bg-white rounded shadow-lg">
            <div class="flex justify-center items-center mb-6">
              <img class="mx-auto h-25 w-auto" src="/images/logodark.png" alt="Logo"> 
            </div>
            <h2 class="mt-6 text-center text-3xl font-bold text-gray-900">
              Log in to your account
            </h2>
            <form class="log-in-form space-y-6" action="login" method="post">
                @csrf
                <div class="mb-4">
                    <label for="login_email" class="block font-medium text-sm text-gray-700">Email address</label>
                    <input type="text" id="login_email" name="login_email"
                        class="mt-1 px-4 py-2 w-full rounded-md border border-gray-300 focus:outline-none focus:ring focus:ring-blue-400"
                        placeholder="Email address" autofocus value="{{ old('login_email') }}">
                    @error('login_email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="login_password" class="block font-medium text-sm text-gray-700">Password</label>
                    <input type="password" id="login_password" name="login_password"
                        class="mt-1 px-4 py-2 w-full rounded-md border border-gray-300 focus:outline-none focus:ring focus:ring-blue-400"
                        placeholder="Password">
                    @error('login_password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit"
                    class="w-full px-4 py-2 mt-3 bg-blue-600 text-white font-bold text-sm rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">
                    Log in
                </button>
            </form>
            <p class="text-sm text-center mt-4">
                <a href="/barangay/login" class="text-blue-600 hover:underline">Go to Residents Login here.</a>
            </p>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>

</html>
