<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <title></title>
  </head>
  <body>
      <header id="navSec">
        <div>
          <a href="index.php">Home</a>
          <a href="#">Blogs</a>
          <a href="#">News</a>
          <a href="#">About</a>
          <a href="#">Contact</a>
        </div>
      </header>
    <?php
    $conn = new mysqli('localhost', 'root', '24Strawberry', 'shop');
    if ($conn->connect_error) {
      echo "db connection error";
    }

    $name = $_POST['productname'];
    $brand = $_POST['brandname'];
    $quality = $_POST['quality'];

    $stmt = $conn->prepare("INSERT INTO products(name, brand, quality) VALUES (?, ?, ?)");
    $stmt->bind_param('ssi', $name, $brand, $quality);

    if ($stmt->execute()) {
      echo "Success";
    }else {
      echo "Failure";
    }




     ?>
    <script src="js/reg.js" charset="utf-8"></script>
  </body>
</html>
