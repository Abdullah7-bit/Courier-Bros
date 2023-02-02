<?php
  include('connect.php');
?>

<!DOCTYPE html>
<html>
        <title>Login</title>
        
        <?php include 'link.php';?>

     <body>

     <div class="container" >
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
    
                  <div class="card mb-3">
    
                    <div class="card-body">
    
                      <div class="pt-4 pb-2">
                        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                        <p class="text-center small">Enter your username &amp; password to login</p>
                      </div>
                      <form action="" method="post">
                      <div class="row g-3 needs-validation" novalidate="">
    
                        <div class="col-12">
                          <label for="username" class="form-label">Username</label>
                          <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="text" name="username" class="form-control" id="username" required="">
                            <div class="invalid-feedback">Please enter your username.</div>
                          </div>
                        </div>
                       
    
                        <div class="col-12">
                          <label for="password" class="form-label">Password</label>
                          <input type="password" name="password" class="form-control" id="password" required="">
                          <div class="invalid-feedback">Please enter your password!</div>
                        </div>
    
                        <div class="col-12">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">Remember me</label>
                          </div>
                        </div>
                        <div class="col-12">
                          <button class="btn btn-primary w-100" type="submit" name="login" value="Login">Login</button>
                        </div>
                        <div class="col-12">
                          <p class="small mb-0">Don't have account? <a href="registration.php">Create an account</a></p>
                        </div>
                        </div> 
                      </form>
    
                    </div>
                  </div>
    
    
                </div>
              </div>
            </div>
    
          </section>
    </div>

     </body>
    </html>

    <?php

session_start();


if (isset($_POST['login'])) {
  $Username = mysqli_real_escape_string($con, $_POST['username']);
  $Password = mysqli_real_escape_string($con, $_POST['password']);

  // Look up the user in the database
  $query = "SELECT * FROM users WHERE username='$Username' AND password='$Password'";
  $results = mysqli_query($con, $query);

  if (mysqli_num_rows($results) == 1) {
    // Log the user in
    $user = mysqli_fetch_assoc($results);
    $_SESSION['user_id'] = $user['user_id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['role'] = $user['role'];

    // Redirect the user based on their user type
    if ($_SESSION['role'] == 'admin') {
      echo "<script> window.location.href ='../Courier-Bros/dashboard/index.php' </script>";
    } elseif ($_SESSION['role'] == 'agent') {
      echo "<script> window.location.href ='../Courier-Bros/dashboard/agent/index.php' </script>";
    } else {
      echo "<script> window.location.href ='index.php' </script>";
    }
  } else {
    // Invalid login
    echo 'Invalid username or password';
  }
}


?>
