<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Country crud</title>
</head>
<body>
    <nav class="navbar bg-dark">
        <!-- Links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-light" href="/">Countrys</a>
          </li>
        </ul>
        {{-- <div class="text-right">
          <a href="countrys/user" class="btn btn-light mt-2">New User</a>
      </div> --}}
      </nav>

      @if ($message = Session::get('success'))
      <div class="alertalert-success alert-block">
        <strong>{{ $message }}</strong>
      </div>
      @endif

      @yield('main')

</body>
</html>