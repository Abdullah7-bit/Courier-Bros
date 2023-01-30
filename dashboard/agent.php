<!DOCTYPE html>
<html>
<title></title>

<head>
  <?php include('../connect.php') ?>
  <?php include 'link_admin.php'; ?>
</head>



<body>

  <?php include('header.php') ?>


  <?php include('sidebar.php') ?>


  <main id="main" class="main">

    <section class="section dashboard">


      <div class="card-body">
        <h5 class="card-title">Create Agent</h5>

        <!-- Vertical Form -->
        <form action="agent.php" method="post">
          <div class="col-12">
            <label for="inputNanme4" class="form-label">Agent Name</label>
            <input type="text" class="form-control" id="inputNanme4" name="name">
          </div>
          <div class="col-12">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4" name="email">
          </div>
          <div class="col-12">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" class="form-control" id="inputPassword4" name="password">
          </div>
          <div class="col-12">
            <label for="phone" class="form-label">Phone:</label>
            <input type="text" class="form-control" placeholder="Phone" name="phone">
          </div>
          <div class="col-12">
            <label for="inputAddress" class="form-label">Branch</label>
            <input type="text" class="form-control" id="inputAddress" name="branch" placeholder="1234 Main St">
          </div>
          <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St">
          </div>
          <div class="text-center">

            <input type="submit" name="add_agent" class="btn btn-primary" value="Submit">
            <button type="reset" class="btn btn-secondary">Reset</button>
          </div>
        </form><!-- Vertical Form -->

      </div>

    </section>

  </main>



  <?php include('footer.php') ?>
</body>

</html>


<!-- Create -->
<?php
if (isset($_POST['add_agent'])) {
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $branch = $_POST['branch'];
  $address = $_POST['address'];



  $query = " INSERT INTO `agent`(`name`, `address`, `phone`, `branch`) VALUES ('$name','$address','$phone','$branch')";



  if (mysqli_query($con, $query)) {
    echo "Track Added successfully!!";
    echo "<script> window.location.href ='agent.php' </script>";
  } else {
    echo "Track not added";
  }

}

?>

<!-- End of Create -->