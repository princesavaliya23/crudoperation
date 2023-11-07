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
    <div class="text-left">
        <a href="" class="">add User</a>
    </div>
    <div class="w-24 text-left">
        <a href="" class="btn btn-dark btn-sm">Back</a>
    </div>
</nav>

<div class="container">
    <form action="" class="needs-validation" novalidate>
      <div class="form-group">
        <label for="country">Country:</label>
        <input type="text" class="form-control" id="country" placeholder="Enter country" name="country" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="form-group">
        <label for="code">Code:</label>
        <input type="code" class="form-control" id="code" placeholder="Enter code" name="code" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
    </form>
    <form>
        <label for="code">State Permission:</label>
        <select name="cars" class="custom-select">
          <option selected>Custom Select Menu</option>
          <option value="yes">Yes</option>
          <option value="no">No</option>
        </select>
      </form>
      <button type="submit" class="btn btn-primary mt-4">Submit</button>
  </div>
    
</body>
</html>