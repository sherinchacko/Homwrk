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
    Enter a number:
    </td>
    <td>
    <input type="text" name="getNum" class="form-control">
    </td>
    </tr>
    <tr>
    <td>

    </td>
    <td>
    <button type="submit" name="submit" class="btn btn-danger">
    Check even/odd
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
   $Name=$_GET["getNum"];
   echo $Name;
   echo"<br>";
   if($Name%2==0)
   {
       echo" is even";
   }
   else
   {
       echo" is odd";
   }
}
?>