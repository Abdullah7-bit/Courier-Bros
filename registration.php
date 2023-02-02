<?php
include('connect.php');
?>
<!DOCTYPE html>
<html>
<title></title>

<?php include 'link.php'; ?>

<body>
  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <form action="" method="post">
                    <div class="col-12">
                      <label for="email" class="form-label">Your Email</label>
                      <input type="email" name="email" class="form-control" id="email" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>




                    <div class="col-12">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="password" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and
                            conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" value="Submit">Next Step</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="login.php">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>


            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->
</body>
</html>

<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $email = $_POST['email'];
  $password = $_POST['password'];

  // Validate the form data
  if (empty($email) || empty($password)) {
    echo 'Please fill in all fields';
  } else {
    // Insert the user data into the database
    // (Note: This is just an example and should not be used in production without proper security measures)
    $query = "INSERT INTO users (username, role, password) VALUES ('$email', 'user', '$password')";
    if (mysqli_query($con, $query)) {
      echo "<script> window.location.href ='login.php' </script>";
    } else {
      echo 'Error: ' . mysqli_error($con);
    }
    mysqli_close($con);
  }
}

?>