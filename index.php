<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>Home</title>
  </head>
  <body>
    <header id="navSec">
      <div>
        <a href="#">Welcome</a>
        <a href="update.php">Update</a>
        <a href="#">News</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
      </div>
    </header>
    <br>
    <div class="sec">
      <section>
        <div id="form">
            <form id="output" action="register.php" method="post">
              <input type="text" name="productname" placeholder="Enter product name"><br><br>
              <input type="text" name="brandname" placeholder="Enter brand name"><br><br>
              <input type="number" name="quality" placeholder="Enter Quantity"><br><br>
            <button type="submit" id="btn" type="button" name="button">Product Source</button>
            </form>
        </div>
      </section>
    </div>
    <section>
    <div class="table">
      <table>
        <tr>
        <th>Name</th>
        <th>Brand</th>
        <th>Ammount</th>
        </tr>
          <tbody id="data">

          </tbody>
      </table>
    </div>
  </section>
    <script src="js/app.js" charset="utf-8"></script>
  </body>
</html>
