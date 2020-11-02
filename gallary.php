<html>

<head>
    <title>Fashion</title>
    <link rel="stylesheet" href="css/fashion.css" />
    <link rel="stylesheet" href="css/gallary.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.1/css/font-awesome.min.css' />
    <script src="https://use.fontawesome.com/05113e75b1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous"></script>
    <script src="js/gallary.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background:linear-gradient(to bottom, #ff9800d4, #ffc107)">
        <div class="container">
            <a class="navbar-brand" href="#">
                <strong class="logo">Fashion</strong>
            </a>
        </div>
    </nav>

    <main class="main">
        <div class="container">
            <div class="card">
                <div class="card-image">

                    <img src="img/1.jpg" alt="Image Gallery">

                </div>
            </div>
            <div class="card">
                <div class="card-image">

                    <img src="img/2.jpg" alt="Image Gallery">

                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="img/3.jpg" alt="Image Gallery">

                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="img/4.jpg" alt="Image Gallery">
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="img/5.jpg" alt="Image Gallery">
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="img/6.jpg" alt="Image Gallery">
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="img/7.jpg" alt="Image Gallery">
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="img/8.jpg" alt="Image Gallery">
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="img/9.jpg" alt="Image Gallery">
                </div>
            </div>
        </div>
    </main>

    <div style="background: rgb(255, 187, 0);position: sticky; width: 100%; bottom: 0;">
        <center>
            <ul>
                <li style="display:inline" class="mx-2"><a href="index.php" style="text-decoration: none; color:rgb(255, 94, 0)"><i class="fa fa-user fa-3x" aria-hidden="true"></i></a></li>
                <li style="display:inline" class="mx-2"> <a href="comments.php" style="text-decoration: none; color:rgb(255, 94, 0)"><i class="fa fa-heart fa-3x" aria-hidden="true"></i></a></li>
                <li style="display:inline" class="mx-2"> <a href="cart.php" style="text-decoration: none; color:rgb(255, 94, 0)"><i class="fa fa-shopping-cart fa-3x" aria-hidden="true"></i></a></li>
            </ul>
        </center>
    </div>
    <!-- footer -->
    <?php include("footerHome.php"); ?>
    <?php include("copyright.php"); ?>
</body>

</html>