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
          </div>
          <br>
          <div class="form-group">
            <label for="pwd">To:</label>
            <input type="text" class="form-control" id="pwd" placeholder="name" name="sender_number">
          </div>
          <br>
          <div class="form-group">
            <label for="pwd">Message:</label>
            <textarea class="form-control" placeholder="Masage" rows="3" name="message"></textarea>
          </div>
          <br>
          <button type="submit" class="btn btn-primary" onclick="that()">Submit</button>
        </form>
      </div>



      <?php
      use Twilio\Rest\Client;

      
      function that()
      {
        $message = $_POST['message'];
      $sender_number = $_POST['sender_number'];
        require __DIR__ . '/twilio-php-main/src/Twilio/autoload.php';


        // Your Account SID and Auth Token from twilio.com/console
        $account_sid = 'ACf003ba26e229bc51d7ae8847424d8a3f';
        $auth_token = '37b84b35ed4802f0a4c35d7a3c64f827';
        // In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]
      
        // A Twilio number you own with SMS capabilities
        $twilio_number = "+15017122661";

        $client = new Client($account_sid, $auth_token);
        $client->messages->create(
          // Where to send a text message (your cell phone?)
          $sender_number,
          array(
            'from' => $twilio_number,
            'body' => $message
          )
        );


      }

      ?>


    </section>

  </main>



  <?php include('footer.php') ?>
</body>

</html>