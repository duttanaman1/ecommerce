<?php include("connect.php");
if ($_POST['submit'] != null) {
    $id = $_POST['id'];
    mysqli_query($con, "DELETE from orders where id='$id' ");
    header("Location:http://localhost/ecommerce/cart.php");
}
