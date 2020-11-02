<?php
include("connect.php");

if ($_POST['submit'] != null) {
    $com = $_POST['comment'];
    mysqli_query($con, "INSERT into comment values(null, '$com')");
    header("Location: http://localhost/ecommerce/comments.php");
}
