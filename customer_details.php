<?php
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'link.php'; ?>
  <title>Customer Details</title>
</head>

<body>
  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
              <h6 class="card-title text-center pb-0 fs-4 text-primary">Step 02 of 02</h6>
              <div class="card mb-3">


                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Further Details</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <form action="customer_details.php" method="post">
                    <div class="col-12">
                      <label for="name" class="form-label">Your Name</label>
                      <input type="text" name="name" class="form-control" id="name" required>
                      <div class="invalid-feedback">Please enter a valid Name!</div>
                    </div>

                    <div class="col-12">
                      <label for="Address" class="form-label">Address</label>
                      <input type="text" name="address" class="form-control" id="Address" required>
                      <div class="invalid-feedback">Please enter your Address!</div>
                    </div>

                    <div class="col-12">
                      <label for="phone" class="form-label">Phone</label>
                      <input type="text" name="phone" class="form-control" id="phone" required>
                      <div class="invalid-feedback">Please enter your Phone!</div>
                    </div>


                    <div class="col-12">
                      <button class="btn btn-primary w-100 mt-3" type="submit" value="" name="proceed">Create
                        Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0 mt-2">Already have an account? <a href="login.php">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>


            </div>
          </div>
        </div>

      </section>

    </div>




  </main>

</body>

</html>



<?php
// Check if the form is submitted
if (isset($_POST['proceed'])) {

  $name = $_POST['name'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];

  // Validate the form data
  if (empty($name) || empty($address) || empty($phone)) {
    echo 'Please fill in all fields';
  } else {
    $query2 = "INSERT INTO `customer` (`name`,`address`,`phone`) VALUES ('$name', '$address', '$phone')";

    if (mysqli_query($con, $query2)) {
      echo "Track Added successfully!!";
      echo "<script> window.location.href ='index.php' </script>";
    } else {
      echo "Track not added";
    }
  }
}

?>

