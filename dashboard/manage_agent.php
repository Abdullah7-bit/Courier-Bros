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
                    <h5 class="card-title">Agent Details</h5>

                    <!-- Primary Color Bordered Table -->
                    <table class="table table-bordered border-primary">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Address</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Branch</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                             $sql = "SELECT * FROM `agent`";
                             $rs  = mysqli_query($con,$sql);
                             while($data = mysqli_fetch_array($rs)){
                            ?>
                            <tr>
                                <th scope="row"><?= $data['agent_id']?></th>
                                <td><?= $data['name']?></td>
                                <td><?= $data['address']?></td>
                                <td><?= $data['phone']?></td>
                                <td><?= $data['branch']?></td>
                            </tr>
                            <?php
                        }
                     ?>
                        </tbody>
                    </table>
                    <!-- End Primary Color Bordered Table -->

                </div>
            </div>



        </section>

    </main>



    <?php include('footer.php') ?>
</body>

</html>