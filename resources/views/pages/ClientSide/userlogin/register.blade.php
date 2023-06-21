<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link href=" {{ URL::asset('css/app.css') }}" rel="stylesheet">
  <link href=" https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css" rel="stylesheet">

  <link rel="stylesheet" href={{ URL::asset('css/ClientCSS/Footer-Clean.css') }}>
  <link rel="stylesheet" href={{ URL::asset('css/ClientCSS/Header-Blue.css') }}>
  <link rel="stylesheet" href={{ URL::asset('css/ClientCSS/styles.css') }}>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

  <title>Register</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body style="background-image: url({{ URL::asset('images/backgroundhome.png') }}); background-repeat:no-repeat; background-size: cover ">

  @include('inc.client_nav_login')

  <div class="min-h-screen flex items-center justify-center bg-gray-100 py-12 px-4 sm:px-6 lg:px-8" style="background-image: url('/images/backgroundhome.png');">
  <div class="max-w-md w-full space-y-8 bg-white p-10 rounded-xl">
        <div>
          <img class="mx-auto h-20 w-auto" src="/images/logodark.png" alt="Logo">
          <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
            Register
          </h2>
        </div>
          {{-- form --}}
          <form class="register-form rounded-lg" enctype="multipart/form-data" action="/barangay/register" method="post">
            @csrf
            <div class="grid grid-cols-2 gap-2">
              <div class="form-label-group mt-2">
                <label for="register_firstname">First name</label>
                <input type="text" id="register_firstname" name="register_firstname" class="form-control" placeholder="Enter First Name" value={{ old('register_firstname')}}>
                @error('register_firstname')
                <span class="text-danger error_text"> {{ $message }}</span>
                @enderror
              </div>

              <div class="form-label-group mt-2">
                <label for="register_lastname">Last name</label>
                <input type="text" id="register_lastname" name="register_lastname" class="form-control" placeholder="Enter Last Name" value={{ old('register_lastname')}}>
                @error('register_lastname')
                <span class="text-danger error_text"> {{ $message }}</span>
                @enderror
              </div>
            </div>

            {{-- username --}}
            <div class="form-label-group mt-2">
              <label for="register_username">Username</label>
              <input type="text" id="register_username" name="register_username" class="form-control placeholder-shown:border-gray-500" placeholder="Enter Username" 
              value={{ old('register_username')}}>
              @error('register_username')
              <span class="text-danger error_text"> {{ $message }}</span>
              @enderror
            </div>

            {{-- Gender --}}
            <div class="grid grid-cols-2 gap-2">
            <div class="form-label-group mt-2">
              <label for="register_gender">Gender</label>
              <select class="form-control border-gray-500" id="register_gender" name="register_gender" data-old="{{ old('register_gender')}}">
                <option value="">-Select Gender-</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>

              @error('register_gender')
              <span class="text-danger error_text"> {{ $message }}</span>
              @enderror
            </div>

            {{-- Voter Status --}}
            <div class="form-label-group mt-2">
              <label for="register_voter_status">Voter Status</label>
              <select class="form-control border-gray-500" id="register_voter_status" name="register_voter_status" data-old="{{ old('register_voter_status')}}">
                <option value="">-Select Status-</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>

              @error('register_voter_status')
              <span class="text-danger error_text"> {{ $message }}</span>
              @enderror
            </div>
            </div>

            {{-- email address --}}
            <div class="form-label-group mt-2">
              <label for="register_email">Email address</label>
              <input type="text" id="register_email" name="register_email" class="form-control placeholder-shown:border-gray-500" placeholder="Email address" 
              value={{ old('register_email')}}>
              @error('register_email')
              <span class="text-danger error_text"> {{ $message }}</span>
              @enderror
            </div>

            {{-- password --}}
            <div class="grid grid-cols-2 gap-2">
            <div class="form-label-group mt-2">
              <label for="register_password">Password</label>
              <input type="password" id="register_password" name="register_password" class="form-control placeholder-shown:border-gray-500" placeholder="Password" >
              @error('register_password')
              <span class="text-danger error_text">{{ $message }}</span>
              @enderror
            </div>

            {{-- verify password --}}
            <div class="form-label-group mt-2">
              <label for="register_password_confirmation">Verify Password</label>
              <input type="password" id="register_password_confirmation" name="register_password_confirmation" class="form-control placeholder-shown:border-gray-500" placeholder="Please Verify Password" >
              @error('register_password_confirmation')
              <span class="text-danger error_text"> {{ $message }}</span>
              @enderror
            </div>
          </div>

          <div class="form-label-group mt-2">
          <label for="register_image">Barangay ID</label>
          <input type="file" id="register_image" name="register_image" class="form-control">
          @error('register_image')
              <span class="text-danger error_text">{{ $message }}</span>
          @enderror
      </div>

      <button class="btn btn-lg btn-block text-uppercase mt-3 bg-gray-900 hover:bg-blue-500 text-white" id="registerBtn" type="submit">Confirm Register</button>
  </form>
          {{-- end form --}}

          <br><a href="/barangay/login">Have an account? Login!</a>
        </div>
</div>

  <script type="text/javascript">
      $(function() {
        var old_gender = $("#register_gender").data("old");
        var old_voter_status = $("#register_voter_status").data("old");
        
        $("#register_gender").val(old_gender);
        $("#register_voter_status").val(old_voter_status);
      })
  </script>

</body>
</html>