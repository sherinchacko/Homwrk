<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="GET">
    <table class="table">
    <tr>
    <td>
    Product name:
    </td>
    <td>
    <input type="text"class="form-control"name="getProductName">
    </td>
    </tr>
    <tr>
    <td>
    Description:
    </td>
    <td>
    <input type="text"class="form-control"name="getDescription">
    </td>
    </tr>
    <tr>
    <td>
    Brand name:
    </td>
    <td>
    <input type="text"class="form-control"name="getBrandName">
    </td>
    </tr>
    <tr>
    <td>
    Price:
    </td>
    <td>
    <input type="text"class="form-control"name="getPrice">
    </td>
    </tr>
    <tr>
    <td>
    Quality:
    </td>
    <td>
    <input type="text"class="form-control"name="getQuality">
    </td>
    </tr>
    <tr>
    <td>
    Model no.:
    </td>
    <td>
    <input type="text"class="form-control"name="getModel">
    </td>
    </tr>
    <tr>
    <td>
    <button type="reset" class="btn btn-danger"name="reset">
    RESET
    </button>
    </td>
    <td>
    <button type="submit" class="btn btn-success"name="submit">
    SUBMIT
    </button>
    </td>
    </tr>
    </table>
    </form>
</body>
</html>
<?php
if(isset($_GET["submit"]))
{
 $Product=$_GET["getProductName"];
 $Description=$_GET["getDescription"];
 $Brand=$_GET["getBrandName"];
 $Price=$_GET["getPrice"];
 $Quantity=$_GET["getQuality"];
 $Model=$_GET["getModel"];
 echo $Product;
 echo "<br>";
 echo $Description;
 echo "<br>";
 echo $Brand;
 echo "<br>";
 echo $Price;
 echo "<br>";
 echo $Quantity;
 echo "<br>";
 echo $Model;
}
?>