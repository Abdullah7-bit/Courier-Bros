<html>
<title>Add Courier</title>

<?php include('connect.php'); ?>
<?php include 'link_agent.php'; ?>

<body>

    <?php include 'header.php'; ?>

    <?php include 'sidebar.php'; ?>


    <main id="main" class="main">
        <h3>Courier</h3>
        <section class="section dashboard">

            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <!-- Multi Columns Form -->
                        <form action="courier.php" method="post" class="row g-3">
                            <div class="col-md-12">
                                <h3 class="form-label p-2">Sender</h3>
                            </div>
                            <div class="col-md-12">
                                <label for="inputName5" class="form-label">Name</label>
                                <input type="text" class="form-control" id="inputName5" name="sendername" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputPhone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="inputPhone" name="senderphone" required>
                            </div>
                            <div class="col-12">
                                <label for="inputAddress5" class="form-label">Address</label>
                                <input type="text" class="form-control" id="inputAddres5s" name="senderaddress"
                                    placeholder="1234 Main St" required>
                            </div>

                            <div class="col-md-12">
                                <hr class="border-primary">
                            </div>
                            <div class="col-md-12">
                                <h3 class="form-label p-2">Receiver</h3>
                            </div>
                            <div class="col-md-12">
                                <label for="inputName5" class="form-label">Name</label>
                                <input type="text" class="form-control" id="inputName5" name="receivername" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputPhone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="inputPhone" name="receiverphone" required>
                            </div>
                            <div class="col-12">
                                <label for="inputAddress5" class="form-label">Address</label>
                                <input type="text" class="form-control" id="inputAddres5s" name="receiveraddress"
                                    placeholder="1234 Main St" required>
                            </div>

                            <div class="col-md-12">
                                <hr class="border-primary">
                            </div>
                            <div class="col-md-12">
                                <h3 class="form-label p-2">Dimensions</h3>
                            </div>
                            <div class="col-12">
                                <label for="inputWeight" class="form-label">Weight</label>
                                <input type="text" class="form-control" id="inputWeight" name="weight" placeholder="kg" required>
                            </div>

                            <div class="col-md-12">
                                <hr class="border-primary">
                            </div>
                            <div class="col-md-12">
                                <h3 class="form-label p-2">Other Details</h3>
                            </div>
                            <div class="col-12">
                                <label for="inputStatus" class="form-label">Status</label>
                                <input type="text" class="form-control" id="inputWeight" name="status"
                                    placeholder="At Branch / Dispatched / Deleivered" required>
                            </div>
                            <!-- Foreign Key Work -->
                            <div class="col-12">
                                <label for="inputagentID" class="form-label">Agent ID</label>
                                <select name="agent_id" id="itemid" class="form-control">
                                    <option>Select Items</option>
                                    <?php

                                    $sql = "select * from agent";
                                    $rs = mysqli_query($con, $sql);
                                    
                                    if (mysqli_num_rows($rs) > 0) {
                                        while ($data = mysqli_fetch_array($rs)) {
                                            ?>

                                            <option value="<?= $data['agent_id']?>"><?= $data['name']?></option>

                                            <?php
                                        }
                                    } else {

                                        echo '<option> Items not found </option>';

                                    }

                                    ?>
                                </select>
                            </div>
                            <!-- End of Foreign Key Work -->
                            <div class="text-center">
                                <button type="submit" name="addcourier" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form><!-- End Multi Columns Form -->

                    </div>
                </div>


            </div>
        </section>

    </main><!-- End #main -->

    <?php include('footer.php'); ?>
</body>

</html>


<!-- Courier -->
<?php
if (isset($_POST['addcourier'])) {
    $sendername = $_POST['sendername'];
    $senderphone = $_POST['senderphone'];
    $senderaddress = $_POST['senderaddress'];
    $receivername = $_POST['receivername'];
    $receiverphone = $_POST['receiverphone'];
    $receiveraddress = $_POST['receiveraddress'];
    $weight = $_POST['weight'];
    $status = $_POST['status'];
    $agent_id = $_POST['agent_id'];

    $query = " INSERT INTO `courier`(`sender_name`, `sender_address`, `sender_phone`, `receiver_name`, `receiver_address`, `receiver_phone`, `weight`, `status`, `agent_id`) VALUES ('$sendername','$senderaddress','$senderphone','$receivername','$receiveraddress','$receiverphone','$weight','$status','$agent_id')";

    if (mysqli_query($con, $query)) {
        echo "Track Added successfully!!";
        echo "<script> window.location.href ='index.php' </script>";
    } else {
        echo "Track not added";
    }


}

?>
<!-- End of Courier -->