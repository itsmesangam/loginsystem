<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
<title> Welcome</title>
  <body>
   <?php  require 'partials/_nav.php' ?>
   <div class="container">
    <h1 class="text-center"> SignUp The Website </h1>
          <form action="/loginsystem/signup.php" method="post">
        <div class="mb-3">
          <label for="Username" class="form-label">Username</label>
          <input type="email" class="form-control" id="Username" name="Username" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password">
          
        </div>
        <div class="mb-3">
          <label for="cpassword" class="form-label">Confirm Password</label>
          <input type="cpassword" class="form-control" id="cpassword" name="cpassword">
          <div id="emailHelp" class="form-text">Make sure to type the same password.</div>
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Forgot Password</label>
        </div>
        <div class="d-grid gap-2 d-md-block">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" value="reset" class="btn btn-danger">reset</button>
        </div>
      </form>

   </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>