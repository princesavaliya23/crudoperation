<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>



<nav class="navbar bg-light navbar-light">
    {{-- <div class="text-left">
        <a href="" class="btn btn-dark mt-2">add User</a>
    </div> --}}
    <div class="w-24 text-left">
        <a href="{{route ('countrys.index') }}" class="btn btn-dark btn-sm">Back</a>
    </div>
</nav>
<div class="container">
    <div class="text-right">
        <a href="countrys/newuser" class="btn btn-dark mt-2">New User Add</a>
    </div>

    <div class="container m-2">        
        <table class="table">
        <thead>
        <tr>
        <th>No.</th>
        <th>Country</th>
        <th>Code</th>
        <th>State Permission</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>India</td>
        <td>In</td>
        <td>yes</td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
