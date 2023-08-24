<?php include('connect.php')?>
<html>
<title>Courier Details</title>

<?php include 'link_agent.php'; ?>

<body>

  <?php include 'header.php'; ?>

  <?php include 'sidebar.php'; ?>


  <main id="main" class="main">

    <section class="section dashboard">
      <div class="row">



        <div class="card-body">
          <h5 class="card-title">Courier Details</h5>

          <!-- Bordered Table -->
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Sender Name</th>
                <th scope="col">Sender Address</th>
                <th scope="col">Sender Phone</th>
                <th scope="col">Receiver Name</th>
                <th scope="col">Receiver Address</th>
                <th scope="col">Receiver Phone</th>
                <th scope="col">Weight</th>
                <th scope="col">Status</th>
                <th scope="col">Agent ID</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $sql = "SELECT * FROM `courier`";
              $rs = mysqli_query($con, $sql);
              while ($data = mysqli_fetch_array($rs)) {
                ?>
                <tr>
                  <th scope="row">
                    <?= $data['courier_id'] ?>
                  </th>
                  <td>
                    <?= $data['sender_name'] ?>
                  </td>
                  <td>
                    <?= $data['sender_address'] ?>
                  </td>
                  <td>
                    <?= $data['sender_phone'] ?>
                  </td>
                  <td>
                    <?= $data['receiver_name'] ?>
                  </td>
                  <td>
                    <?= $data['receiver_address'] ?>
                  </td>
                  <td>
                    <?= $data['receiver_phone'] ?>
                  </td>
                  <td>
                    <?= $data['weight'] ?>
                  </td>
                  <td>
                    <?= $data['status'] ?>
                  </td>
                  <td>
                    <?= $data['agent_id'] ?>
                  </td>
                </tr>

              <?php } ?>
            </tbody>
          </table>
          <!-- End Bordered Table -->



        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <?php include('footer.php'); ?>
</body>

</html>