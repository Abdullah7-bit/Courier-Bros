<html>
<title></title>

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
                        <form action="courier.php" class="row g-3" method="post">
                            <div class="col-md-12">
                                <h3 class="form-label p-2">Sender</h3>
                            </div>                            
                            <div class="col-md-12">
                                <label for="inputName5" class="form-label">Name</label>
                                <input type="text" class="form-control" id="inputName5" name="sendername">
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail5" class="form-label">Email</label>
                                <input type="email" class="form-control" id="inputEmail5" name="senderemail">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPhone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="inputPhone" name="senderphone">
                            </div>
                            <div class="col-12">
                                <label for="inputAddress5" class="form-label">Address</label>
                                <input type="text" class="form-control" id="inputAddres5s" name="senderaddress" placeholder="1234 Main St">
                            </div>
                            
                            <div class="col-md-12">
                                <hr class="border-primary">
                            </div>
                            <div class="col-md-12">
                                <h3 class="form-label p-2">Receiver</h3>
                            </div> 
                            <div class="col-md-12">
                                <label for="inputName5" class="form-label">Name</label>
                                <input type="text" class="form-control" id="inputName5" name="receivername">
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail5" class="form-label">Email</label>
                                <input type="email" class="form-control" id="inputEmail5" name="receiveremail">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPhone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="inputPhone" name="receiverphone">
                            </div>
                            <div class="col-12">
                                <label for="inputAddress5" class="form-label">Address</label>
                                <input type="text" class="form-control" id="inputAddres5s" name="receiveraddress" placeholder="1234 Main St">
                            </div>
                            
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
    $senderemail = $_POST['senderemail'];
    $senderphone = $_POST['senderphone'];
    $senderaddress = $_POST['senderaddress'];
    $receivername = $_POST['receivername'];
    $receiveremail = $_POST['receiveremail'];
    $receiveraddress = $_POST['receiveraddress'];
    $receiveraddress = $_POST['receiveraddress'];

    
}

?>
<!-- End of Courier -->