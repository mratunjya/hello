<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="../CSS/master.css">
    <link rel="stylesheet" href="CSS/Products.css">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:wght@300|Montserrat|Montserrat+Alternates:500|Raleway:500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/952d5d526e.js" crossorigin="anonymous"></script>

    <title>Vetmax - Product Management</title>
  </head>
  <body>
    <?php include '../Modules/Header.html'; ?>
    <h1 class="h1 center">Add new  Product</h1>
    <table align=center>
      <tr>
        <th style="width:60%"><input type="text" name="Product" id="Product" placeholder="Enter Product Name" alt="Enter Product Name" title="Enter Product Name"></th>
        <th><input type="text" name="Pack" id="Pack" placeholder="Enter Available Pack Size (Separated with commas)" alt="Enter Available Pack Size (Separated with commas)" title="Enter Available Pack Size (Separated with commas)"></th>
      </tr>
      <tr>
        <th colspan="2"><input type="text" name="Each" id="Each" placeholder="Each ml/gm. Contains : ...." alt="Each ml/gm. Contains : ...." title="Each ml/gm. Contains : ...."></th>
      </tr>
      <tbody id="Composition">
      </tbody>
    </table>
    <br><br>

    <div class="center">
      <button type="button" class="btn-1" name="button" onclick="myfun()"><i class="fas fa-plus-square"></i> Add more Compound</button>
      <button type="submit" class="btn-2" name="button" onclick="submit()"><i class="fas fa-plus"></i> Add this Product</button>
    </div>

    <form class="" action="PHP/Add Products.php" method="post" hidden>
      <input type="text" class="form" name="Product">
      <input type="text" class="form" name="Pack">
      <input type="text" class="form" name="Each">
      <input type="text" class="form" name="Compound">
      <input type="text" class="form" name="Amount">
      <button type="submit" class="form "hidden>+ Add this Product</button>
    </form>
  </body>
  <script src="JS/Products.js" charset="utf-8"></script>
</html>
