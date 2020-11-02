<?php include("connect.php"); ?>
<html>

<head>
    <title>Fashion</title>
    <link rel="stylesheet" href="css/fashion.css" />
    <link rel="stylesheet" href="css/button.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.1/css/font-awesome.min.css' />
    <script src="https://use.fontawesome.com/05113e75b1.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background:linear-gradient(to bottom, #ff9800d4, #ffc107)">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <strong class="logo">Fashion</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active mx-3">
                        <a class="nav-link" href="index.php">Home
                        </a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="gallary.php">Gallery</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="shop.php">
                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-3 p-3">

        <div class="card">

            <div class="card-body m-2">
                <table class="table table-hover table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Item Name</th>
                            <th scope="col">Item Type</th>
                            <th scope="col">Price</th>
                            <th> Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sum = 0;
                        $cartsql = mysqli_query($con, "SELECT * from orders where status='unpaid' order by id desc");
                        if (mysqli_num_rows($cartsql)) {
                            while ($cart = mysqli_fetch_assoc($cartsql)) {
                        ?>
                                <tr>
                                    <td>
                                        <h3><?php echo $cart['item name']; ?></h3>
                                    </td>
                                    <td>
                                        <?php echo $cart['item type']; ?>
                                    </td>
                                    <td>
                                        <button class="button"><span><?php echo $cart['item price'];
                                                                        $sum += $cart['item price']; ?></span></button>
                                    </td>
                                    <td>
                                        <form action="sqlcart_delete.php" method="POST">
                                            <input type="hidden" name="id" value="<?php echo $cart['id']; ?>">
                                            <input type="submit" value="X" class="btn btn-danger" name="submit">
                                        </form>
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer m-2">
                <form action="pay.php" method="POST">
                    <div class="row">
                        <div class="col-md-6 mx-2 p-3">
                            <label>Customer Name</label>
                            <input type="text" name="custname" class="form-control">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Customer Mobile</label>
                                    <input type="number" name="custphone" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>Pincode</label>
                                    <input type="number" name="pincode" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mx-2 p-3">
                            <label>Address</label><br>
                            <textarea rows="4" class="form-control" name="custaddr"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10"></div>
                        <div class="col-md-2">
                            Total
                            <input type="text" class="form-control" value="<?php echo $sum; ?>" disabled>
                            <input type="hidden" name="total" value="<?php echo $sum; ?>">
                            <input type="submit" value="Pay" class="btn btn-block my-3" name="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>