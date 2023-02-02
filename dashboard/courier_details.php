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
            <tr>
              <th scope="row">1</th>
              <td>Brandon Jacob</td>
              <td>Designer</td>
              <td>28</td>
              <td>2016-05-25</td>
              <td>2016-05-25</td>
              <td>2016-05-25</td>
              <td>2016-05-25</td>
              <td>2016-05-25</td>
              <td>2016-05-25</td>
            </tr>
          </tbody>
        </table>
        <!-- End Bordered Table -->
      </div>


    </section>
  </main>

  <?php include('footer.php') ?>
</body>

</html>