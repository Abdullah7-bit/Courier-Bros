<!DOCTYPE html>
<html>
<title>Customer Details</title>

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
                    <h5 class="card-title">Table with stripped rows</h5>

                    <!-- Table with stripped rows -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Address</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM `customer`";
                            $rs = mysqli_query($con, $sql);
                            while ($data = mysqli_fetch_array($rs)) {
                                ?>
                                <tr>
                                    <th scope="row">
                                        <?= $data['customer_id'] ?>
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
                                    <td><a href="customers_details.php?del_id=<?= $data['customer_id'] ?>"
                                            class="btn btn-outline-danger"><b>Delete</b></a> </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>





        </section>

    </main>



    <?php include('footer.php') ?>
</body>

</html>

<!-- delete record from table logins-->

<?php

if (isset($_GET['del_id'])) {

    $customer_id = $_GET['del_id'];

    $sql = "DELETE FROM customer WHERE customer_id = '$customer_id'";

    if (mysqli_query($con, $sql)) {
        echo "<script> window.location.href ='customers_details.php' </script>";

    } else {
        echo "not deleted";
    }


}

?>