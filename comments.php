<?php include("connect.php"); ?>
<html>

<head>
    <title>Fashion</title>
    <link rel="stylesheet" href="css/fashion.css" />
    <link rel="stylesheet" href="css/comment.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.1/css/font-awesome.min.css' />
    <script src="https://use.fontawesome.com/05113e75b1.js"></script>
    <script>
        // Get The Product: 
        let productone = document.getElementById("product"),
            love = document.getElementById("love"),
            cart = document.getElementById("cart");

        //  When click on this product do this: 
        // make love fav..
        love.onclick = _ => {
            productone.classList.toggle("active_love")
        }
        // add to shopping cart:
        cart.onclick = _ => {
            productone.classList.toggle("active_cart")
        }
    </script>
</head>

<body style="background:#282828;">
    <nav class="navbar navbar-expand-lg" style="background:linear-gradient(to bottom, #ff9800d4, #ffc107)">
        <div class="container">
            <a class="navbar-brand" href="#">
                <strong class="logo">Fashion</strong>
            </a>

        </div>
    </nav>

    <div class="container my-3">
        <div class="row">
            <?php
            $comsql = mysqli_query($con, "SELECT * from comment");
            if (mysqli_num_rows($comsql)) {
                while ($com = mysqli_fetch_assoc($comsql)) {
            ?>
                    <div class="col-md-5 m-2 px-2">
                        <div class="content my-2 mx-auto">
                            <div id="product" class="card">
                                <span class="numberproduct"><?php echo $com['id']; ?></span>
                                <div class="details">
                                    <h1><?php echo $com['comment']; ?></h1>
                                </div>
                                <!--Modals icons cart-->
                                <ul class="shoppintcart">
                                    <li id="cart"><i class="fa fa-shopping-cart"></i></li>
                                    <li id="love"><i class="fa fa-heart"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <center>
                    <h2 class="text-light my-1">Add comments</h2>
                </center>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="sqladdcomments.php" method="post">
                    <textarea name="comment" class="form-control" rows="5"></textarea>
                    <center><input type="submit" value="Add" name="submit" class="btn btn-dark btn-block my-1"></center>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <div style="background: rgb(255, 187, 0);position: sticky; width: 100%; bottom: 0;">
        <center>
            <ul>
                <li style="display:inline" class="mx-2"><a href="index.php" style="text-decoration: none; color:rgb(255, 94, 0)"><i class="fa fa-user fa-3x" aria-hidden="true"></i></a></li>
                <li style="display:inline" class="mx-2"> <a href="comments.php" style="text-decoration: none; color:rgb(255, 94, 0)"><i class="fa fa-heart fa-3x" aria-hidden="true"></i></a></li>
                <li style="display:inline" class="mx-2"> <a href="cart.php" style="text-decoration: none; color:rgb(255, 94, 0)"><i class="fa fa-shopping-cart fa-3x" aria-hidden="true"></i></a></li>
            </ul>
        </center>
    </div>
    <?php include("footerHome.php"); ?>
    <?php include("copyright.php"); ?>
</body>