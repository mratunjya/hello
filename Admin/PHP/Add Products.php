<?php
require '../../PHP/Connection.php';

$Product = $_POST['Product'];
$Pack = $_POST['Pack'];
$Each = $_POST['Each'];
$Compound = $_POST['Compound'];
$Amount = $_POST['Amount'];

echo $Pack;


//Extrating Pack to Store in Database
$Pack = explode(',', $Pack);
$ProductPack = "";
for ($i=0; $i < count($Pack); $i++) {
  $ProductPack = $ProductPack . trim($Pack[$i]) . "  ";
}
$ProductPack = trim($ProductPack);


//Extrating Compound to Store in Database
$Compound = explode('<br>', $Compound);
array_pop($Compound);
$ProductCompound = "";
for ($i=0; $i < count($Compound); $i++) {
  $ProductCompound = $ProductCompound . $Compound[$i] . "  ";
}
$ProductCompound = trim($ProductCompound);


//Extrating Amount to Store in Database
$Amount = explode('<br>', $Amount);
array_pop($Amount);
$ProductAmount = "";
for ($i=0; $i < count($Amount); $i++) {
  $ProductAmount = $ProductAmount . $Amount[$i] . "  ";
}
$ProductAmount = trim($ProductAmount);


//Storing in Database
$reg = "insert into products (Product_Name, Product_Pack, Each_Contains, Compound, Amount) values ('$Product', '$ProductPack', '$Each', '$ProductCompound', '$ProductAmount')";
mysqli_query($con, $reg);
 ?>
