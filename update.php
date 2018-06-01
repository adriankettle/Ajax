<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/update.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Update</title>
  </head>
  <body>
    <header>
      <nav id="navbar">
        <a href="#">Welcome</a>
        <a href="index.php">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
      </nav>
    </header>
    <section>
      <table id="table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Brand</th>
            <th>Ammount</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $conn = mysqli_connect('localhost', 'root', '24Strawberry', 'shop');
          ?>
          <?php
                $table = mysqli_query($conn, "SELECT * FROM products");
                while ($row = mysqli_fetch_array($table)) {?>
                    <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['brand']; ?></td>
                    <td><?php echo $row['quality']; ?></td>
                    <td><a href="#" data-role="update" data-id="<?php echo $row['id']; ?>">Update</a></td>
                    </tr>
          <?php } ?>
        </tbody>
      </table>
    </section>

      <div class="container">
  <h2>More Details</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Cart</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Your Oder</h4>
        </div>
        <div class="modal-body">
          <div id="formData" class="form-group">
            <label for="name">Name</label><br>
            <input id="name" type="text" name="name" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="brand">Brand</label><br>
            <input id="brand" type="text" name="brand" placeholder="Brand">
          </div>
          <div class="form-group">
            <label for="quality">Amount</label><br>
          <input id="quality" type="text" name="quality" placeholder="Amount">
          </div>
        </div>
        <div class="modal-footer">
          <a href="#" id="save" class="btn btn-primary pull-right">Update</a>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
  

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/update.js" charset="utf-8"></script>
  </body>
</html>
