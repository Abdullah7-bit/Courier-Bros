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


      <div class="container">
        <form action="/action_page.php">
          <div class="form-group">
            <h1>SMS</h1>
            <label>From:</label>
            <input style="border-bottom: 2px solide black;" class="form-control" placeholder="name" name="">
          </div>
          <br>
          <div class="form-group">
            <label for="pwd">To:</label>
            <input type="password" class="form-control" id="pwd" placeholder="name" name="pswd">
          </div>
          <br>
          <div class="form-group">
            <label for="pwd">Phone:</label>
            <textarea class="form-control" placeholder="Masage" rows="3"></textarea>
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>


    </section>

  </main>



  <?php include('footer.php') ?>
</body>

</html>