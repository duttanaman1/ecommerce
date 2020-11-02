<?php include("connect.php");
if ($_POST['submit'] != null) {
    $name = $_POST['name'];
    $id = $_POST['id'];
    $type = $_POST['type'];
    $price = $_POST['price'];

    mysqli_query($con, "INSERT INTO orders VALUES(null,'$id','$name','$type','$price','user','0000','0000','address','unpaid')");
    header("LOCATION: http://localhost/ecommerce/shop.php");
}
