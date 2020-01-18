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
    Num1
    </td>
    <td>
    <input type="text"name="getNum1" class="form-control">
    </td>
     </tr>
     <tr>
     <td>
     Num2
     </td>
     <td>
     <input type="text"name="getNum2" class="form-control">
     </td>
     </tr>
     <tr>
     <td>
     </td>
     <td>
     <button type="submit" class="btn btn-success"name="submit">
     ADD
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
$Num1=$_GET["getNum1"];
$Num2=$_GET["getNum2"];
$Sum=$Num1+$Num2;
echo $Sum;
}
?>