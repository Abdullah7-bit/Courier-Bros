<!DOCTYPE html>
<html>
<title>Manage Agent</title>

<head>
  <?php include('../connect.php') ?>
  <?php include 'link_admin.php'; ?>
</head>

<body>

  <?php include('header.php') ?>


  <?php include('sidebar.php') ?>


  <main id="main" class="main">

    <section class="section dashboard">

      <!-- Edit Code -->
      <?php

      //  fetch  data from table logins from id ( same method use for delete )
      
      if (isset($_GET['editid'])) {

        $id = $_GET['editid'];

        $sql = "SELECT * FROM `users` WHERE user_id = '$id'";
        $rs = mysqli_query($con, $sql);
        $editdata = mysqli_fetch_array($rs);

        //for checking purpose print_r($editdata);
      
        ?>

        <!-- Form that updates the record -->
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Floating labels Form</h5>

            <!-- Floating Labels Form -->
            <form action="manage_agent.php" method="post" class="row g-3">
              <div class="col-12">
                <!-- <label for="inputNanme4" class="form-label">Agent ID</label> -->
                <input type="hidden" class="form-control" id="inputNanme4" name="user_id"
                  value="<?= $editdata['user_id'] ?>">
              </div>
              <div class="col-md-12">
                <div class="form-floating">
                  <input type="email" class="form-control" id="floatingEmail" name="email" placeholder="Your Email" value="<?= $editdata['username'] ?>">
                  <label for="floatingEmail">Agent Email</label>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-floating">
                  <input type="password" class="form-control" name="password" id="floatingPassword"
                    placeholder="Password" value="<?= $editdata['password'] ?>">
                  <label for="floatingPassword">Password</label>
                </div>
              </div>
              <div class="text-center">
                <button type="submit" name="update_agent" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
              </div>
            </form><!-- End floating Labels Form -->

          </div>
        </div>




        

      <?php } else { ?>
        <!-- Showing Records -->
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Agent Details</h5>



            <table class="table table-bordered">
              <tr>
                <h5 class="card-title">Agent Logins</h5>
              </tr>
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Email / Username</th>
                  <th scope="col">Password</th>
                  <th scope="col">Role</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <?php
                  $query_user = "SELECT * FROM `users` WHERE role = 'agent'";
                  $dc = mysqli_query($con, $query_user);
                  while ($items = mysqli_fetch_array($dc)) {
                    ?>
                    <th scope="row">
                      <?= $items['user_id'] ?>
                    </th>
                    <td>
                      <?= $items['username'] ?>
                    </td>
                    <td>
                      <div class="input-group">
                        <input type="password" class="form-control" id="password-input" value="<?= $items['password'] ?>">
                        <div class="input-group-append">
                          <button class="btn btn-secondary" type="button" id="password-toggle-btn">
                            <i class="bi bi-eye" aria-hidden="true"></i>
                          </button>
                        </div>
                      </div>

                    </td>
                    <td>
                      <?= $items['role'] ?>
                    </td>
                    <td>
                      <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <!-- get link for edit / delete  -->
                        <a href="manage_agent.php?editid=<?= $items['user_id'] ?>"
                          class="btn btn-outline-success"><b>Edit</b></a>
                        <a href="manage_agent.php?delid=<?= $items['user_id'] ?>"
                          class="btn btn-outline-danger"><b>Delete</b></a>
                      </div>
                    </td>
                  </tr>
                  <?php
                  }
                  ?>
              </tbody>
            </table>

            <!-- Primary Color Bordered Table -->
            <table class="table table-bordered border-primary">
              <tr>
                <h5 class="card-title">Agent Credentials</h5>
              </tr>
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Address</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Branch</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $sql = "SELECT * FROM `agent`";
                $rs = mysqli_query($con, $sql);
                while ($data = mysqli_fetch_array($rs)) {
                  ?>
                  <tr>
                    <th scope="row">
                      <?= $data['agent_id'] ?>
                    </th>
                    <td>
                      <?= $data['name'] ?>
                    </td>
                    <td>
                      <?= $data['address'] ?>
                    </td>
                    <td>
                      <?= $data['phone'] ?>
                    </td>
                    <td>
                      <?= $data['branch'] ?>
                    </td>
                    <td>
                      <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <!-- get link for edit / delete  -->
                        <a href="manage_agent.php?edit_id=<?= $data['agent_id'] ?>"
                          class="btn btn-outline-success"><b>Edit</b></a>
                        <a href="manage_agent.php?del_id=<?= $data['agent_id'] ?>"
                          class="btn btn-outline-danger"><b>Delete</b></a>
                      </div>
                    </td>
                  </tr>
                  <?php
                }
                ?>
              </tbody>
            </table>
            <!-- End Primary Color Bordered Table -->

          </div>
        </div>



      <?php } ?>

    </section>

  </main>



  <?php include('footer.php') ?>

  <!-- Custom Script from Password Hiding Toggle -->
  <script>
    const passwordInput = document.getElementById("password-input");
    const passwordToggleBtn = document.getElementById("password-toggle-btn");

    passwordToggleBtn.addEventListener("click", function () {
      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        passwordToggleBtn.innerHTML = "<i class='bi bi-eye-slash' aria-hidden='true'></i>";
      } else {
        passwordInput.type = "password";
        passwordToggleBtn.innerHTML = "<i class='bi bi-eye' aria-hidden='true'></i>";
      }
    });

  </script>
</body>

</html>



<?php 


if (isset($_POST['update_agent'])) {
  
  $user_id = $_POST['user_id'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $role = "agent";

  $query = " UPDATE users SET username = '$email' , password = '$password' , role = '$role' WHERE user_id = '$user_id' ";

  if (mysqli_query($con, $query)) {
      echo "Track Added successfully!!";
      echo "<script> window.location.href ='manage_agent.php' </script>";
    } else {
      echo "Track not added";
    }
}


?>









<?php
//   update record from table 

// if (isset($_POST['Update'])) {

//   $agent_id = $_POST['agent_id'];
//   $name = $_POST['name'];
//   $phone = $_POST['phone'];
//   $branch = $_POST['branch'];
//   $address = $_POST['address'];



//   $query = "UPDATE agent SET name = '$name', address = '$address', phone = '$phone', branch = '$branch' WHERE agent_id = '$agent_id'";



//   if (mysqli_query($con, $query)) {
//     echo "Category Added successfully!!";
//     echo "<script> window.location.href ='agent.php' </script>";
//   } else {
//     echo "Category not added";
//   }

// }

?>


<!-- delete record from table logins-->

<?php

if (isset($_GET['delid'])) {

  $id_user = $_GET['delid'];

  $sql = "DELETE FROM users WHERE user_id = '$id_user'";

  if (mysqli_query($con, $sql)) {
    echo "<script> window.location.href ='manage_agent.php' </script>";

  } else {
    echo "not deleted";
  }


}

?>


<!-- delete record from table credentials-->

<?php

if (isset($_GET['del_id'])) {

  $id_cred = $_GET['del_id'];

  $sql = "DELETE FROM agent WHERE agent_id = '$id_cred'";

  if (mysqli_query($con, $sql)) {
    echo "<script> window.location.href ='manage_agent.php' </script>";

  } else {
    echo "not deleted";
  }


}

?>