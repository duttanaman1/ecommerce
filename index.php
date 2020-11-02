<html>

<head>
    <title>Fashion</title>
    <link rel="stylesheet" href="css/fashion.css" />
    <link rel="stylesheet" href="css/search.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.1/css/font-awesome.min.css' />
    <script src="https://use.fontawesome.com/05113e75b1.js"></script>
</head>

<body>
    <?php include("headerHome.php"); ?>
    <!-- main -->
    <div class="container-fluid">
        <!-- banner -->
        <div class="row banner" color="primary">
            <div class="row col-md inner-banner m-4">
                <div class="col-md-6 content bg-circle align-self-center text-center">
                    <h1 class="text-center">Hello Summer!</h1>
                    <h5>Enjoy Amazing summer 2020 sale</h5>
                    <p class="dummy-desc">
                        Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy text
                        ever since the 1500s, when an unknown printer took a galley of
                        type and scrambled it to make a type specimen book.
                    </p>
                    <div class="button">
                        <a href="shop.php">
                            <button type="button" class="btn">
                                Shop Now <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 image alig-end">
                    <div class=""></div>
                </div>
            </div>
        </div>
    </div>
    <!-- About -->
    <div class="container text-center about my-5" id="about">

        <div class="row">
            <div class="col-lg col-md col-sm col-xs">
                <h2 class="custom-title my-5">
                    What We Offer
                </h2>
                <p class="dummy-desc">
                    Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text
                    ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint ad cupiditate tempore voluptas facilis! Suscipit, eius ut omnis molestias deserunt hic aperiam minus? Architecto animi esse dolor officiis? Unde, veritatis!
                </p>
            </div>
        </div>
    </div>
    <!-- sale -->
    <div class="container-fluid text-center my-5" style="background:linear-gradient(to bottom, #ff9800d4, #ffc107);">
        <div class="row sale-section">
            <div class="col-md align-self-center mx-5" style="border:3px solid white;">
                <h2 style="color:#ff5722; text-shadow:2px 2px #009688;">Enjoy a Big Sale!</h2>
                <h5 style="color:#ff5722;">50% off on entire stock</h5>
                <div class="button my-4">
                    <a href="shop.php">
                        <button type="button" class="btn">
                            Shop Now <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- collection -->
    <div class="container text-center collections my-5" id="collection">
        <h2 class="custom-title">New Collections</h2>
        <div class="row my-5">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/1.jpg" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Ladies collection</h5>
                        <p class="card-text dummy-desc">
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy
                            text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book.
                        </p>
                        <form action="sqlcart_add.php" method="POST">
                            <input type="hidden" name="name" value="Ladies Dress">
                            <input type="hidden" name="id" value="1">
                            <input type="hidden" name="type" value="Ladies collection">
                            <input type="hidden" name="price" value="500">
                            <i class=' fa fa-shopping-bag fa-3x' aria-hidden='true'>Rs 500</i><br>
                            <br>
                            <input type="button" value="Add to cart" name="submit" class="btn">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/2.jpg" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Boys Collections</h5>
                        <p class="card-text dummy-desc">
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry' s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>

                        <form action="sqlcart_add.php" method="POST">
                            <input type="hidden" name="name" value="Boys Dress">
                            <input type="hidden" name="id" value="2">
                            <input type="hidden" name="type" value="Boys Collections">
                            <input type="hidden" name="price" value="400">
                            <i class=' fa fa-shopping-bag fa-3x' aria-hidden='true'>Rs 400</i><br>
                            <br>
                            <input type="button" value="Add to cart" name="submit" class="btn">
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/3.jpg" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Tiny Jeans</h5>
                        <p class="card-text dummy-desc">
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy
                            text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book.
                        </p>
                        <form action="sqlcart_add.php" method="POST">
                            <input type="hidden" name="name" value="Jeans">
                            <input type="hidden" name="id" value="3">
                            <input type="hidden" name="type" value="Tiny Jeans">
                            <input type="hidden" name="price" value="150">
                            <i class=' fa fa-shopping-bag fa-3x' aria-hidden='true'>Rs 150</i><br>
                            <br>
                            <input type="button" value="Add to cart" name="submit" class="btn">
                        </form>
                    </div>
                </div>
            </div>
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
    <!-- footer -->
    <?php include("footerHome.php"); ?>
    <?php include("copyright.php"); ?>
</body>

</html>