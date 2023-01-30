<!DOCTYPE html>
<html>
        <title></title>
        
        <?php include 'link.php';?>

    <body>

    
<div class="container">
  <form action="/action_page.php">
    <div class="form-group">
        <h1>Agent</h1>
      <label>Name:</label>
      <input style="border-bottom: 2px solide black;" class="form-control"placeholder="Name">
    </div>
    <br>
    <div class="form-group">
      <label for="pwd">Address:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Address" name="pswd">
    </div>
    <br>
    <div class="form-group">
      <label for="pwd">Phone:</label>
      <input type="password" class="form-control" placeholder="Phone" name="pswd">
    </div>
    <br>
    <div class="form-group">
      <label for="pwd">Place:</label>
      <input type="password" class="form-control" placeholder="Phone" name="pswd">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>



    </body>
    </html>