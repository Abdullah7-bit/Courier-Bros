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

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Floating labels Form</h5>

                    <!-- Floating Labels Form -->
                    <form action="agent_login.php" method="post" class="row g-3">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="floatingEmail" name="email" placeholder="Your Email">
                                <label for="floatingEmail">Agent Email</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="password" class="form-control" name="password" id="floatingPassword"
                                    placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="add_agent_login" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form><!-- End floating Labels Form -->

                </div>
            </div>



        </section>

    </main>



    <?php include('footer.php') ?>
</body>

</html>


<?php
if (isset($_POST['add_agent_login'])) {
    // will go into different table
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = "agent";

    $query = " INSERT INTO `users`(`username`, `password`, `role`) VALUES ('$email','$password','$role')";

    

    if (mysqli_query($con, $query)) {
        echo "Track Added successfully!!";
        echo "<script> window.location.href ='manage_agent.php' </script>";
      } else {
        echo "Track not added";
      }
}
?>