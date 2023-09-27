<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
<?php
$Dbname="techno";
$host="localhost";
$user_name="root";
$password="";
$conn=Mysqli_connect($host,$user_name,$password,$password);
if($conn){
    echo "Connected";
}
else {
    echo "Not connected" .mysqli_error($conn);
}
?>
</body>
</html>