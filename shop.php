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
    <nav class="navbar navbar-expand-lg" style="background:linear-gradient(to bottom, #ff9800d4, #ffc107)">
        <div class="container">
            <a class="navbar-brand" href="#">
                <strong class="logo">Fashion</strong>
            </a>
            <div class="mr-2">
                <input type="checkbox" id="check">
                <label for="check">
                    <input type="search" id="searchbox" placeholder="Search here">
                    <span>
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </span>
                </label>
            </div>
        </div>
    </nav>

    <div class="container text-center collections my-5" id="collection">
        <h2 class="custom-title">Shop Here</h2>
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
                            <input type="submit" value="Add to cart" name="submit" class="btn">
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
                            <input type="submit" value="Add to cart" name="submit" class="btn">
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
                            <input type="submit" value="Add to cart" name="submit" class="btn">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/4.jpg" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Red & Black</h5>
                        <p class="card-text dummy-desc">
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy
                            text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book.
                        </p>
                        <form action="sqlcart_add.php" method="POST">
                            <input type="hidden" name="name" value="red black Sheet">
                            <input type="hidden" name="id" value="4">
                            <input type="hidden" name="type" value="Red & Black">
                            <input type="hidden" name="price" value="800">
                            <i class=' fa fa-shopping-bag fa-3x' aria-hidden='true'>Rs 800</i><br>
                            <br>
                            <input type="submit" value="Add to cart" name="submit" class="btn">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/5.jpg" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Shoes</h5>
                        <p class="card-text dummy-desc">
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy
                            text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book.
                        </p>
                        <form action="sqlcart_add.php" method="POST">
                            <input type="hidden" name="name" value="Ladies Dress">
                            <input type="hidden" name="id" value="5">
                            <input type="hidden" name="type" value="Ladies collection">
                            <input type="hidden" name="price" value="500">
                            <i class=' fa fa-shopping-bag fa-3x' aria-hidden='true'>Rs 500</i><br>
                            <br>
                            <input type="submit" value="Add to cart" name="submit" class="btn">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/6.jpg" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Sneakers</h5>
                        <p class="card-text dummy-desc">
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy
                            text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book.
                        </p>
                        <form action="sqlcart_add.php" method="POST">
                            <input type="hidden" name="name" value="Addidas Sneakers">
                            <input type="hidden" name="id" value="6">
                            <input type="hidden" name="type" value="Sneakers">
                            <input type="hidden" name="price" value="650">
                            <i class=' fa fa-shopping-bag fa-3x' aria-hidden='true'>Rs 650</i><br>
                            <br>
                            <input type="submit" value="Add to cart" name="submit" class="btn">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/7.jpg" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Bags</h5>
                        <p class="card-text dummy-desc">
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy
                            text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book.
                        </p>
                        <form action="sqlcart_add.php" method="POST">
                            <input type="hidden" name="name" value="Leather Bags">
                            <input type="hidden" name="id" value="7">
                            <input type="hidden" name="type" value="Bags">
                            <input type="hidden" name="price" value="500">
                            <i class=' fa fa-shopping-bag fa-3x' aria-hidden='true'>Rs 500</i><br>
                            <br>
                            <input type="submit" value="Add to cart" name="submit" class="btn">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/8.jpg" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Mobile Acceories</h5>
                        <p class="card-text dummy-desc">
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy
                            text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book.
                        </p>
                        <form action="sqlcart_add.php" method="POST">
                            <input type="hidden" name="name" value="Mobiles">
                            <input type="hidden" name="id" value="8">
                            <input type="hidden" name="type" value="Mobile Acceories">
                            <input type="hidden" name="price" value="12000">
                            <i class=' fa fa-shopping-bag fa-3x' aria-hidden='true'>Rs 12000</i><br>
                            <br>
                            <input type="submit" value="Add to cart" name="submit" class="btn">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/9.jpg" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Electronic</h5>
                        <p class="card-text dummy-desc">
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy
                            text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book.
                        </p>
                        <form action="sqlcart_add.php" method="POST">
                            <input type="hidden" name="name" value="TV">
                            <input type="hidden" name="id" value="9">
                            <input type="hidden" name="type" value="Electronic">
                            <input type="hidden" name="price" value="35000">
                            <i class=' fa fa-shopping-bag fa-3x' aria-hidden='true'>Rs 35000</i><br>
                            <br>
                            <input type="submit" value="Add to cart" name="submit" class="btn">
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