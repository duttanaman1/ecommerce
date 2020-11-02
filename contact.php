<html>

<head>
    <title>Fashion</title>
    <link rel="stylesheet" href="css/fashion.css" />
    <link rel="stylesheet" href="css/contact.css" />
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
        </div>
    </nav>
    <div class="container">
        <!-- ==============================================
		CONTACT
		=============================================== -->
        <section id="contact" class="add-padding border-top-color2">

            <div class="container text-center">

                <div class="row">

                    <div class="col-sm-6 col-md-5 text-right scrollimation fade-up d1">

                        <h1 class="big-text">Contact Me</h1>

                        <p class="lead">Software Engineer. Lawyer.<br>Experienced Manager. Entrepreneur.</p>
                        <br>
                        <br>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit magnam odit a quam enim alias quibusdam eius id illum culpa distinctio, suscipit numquam provident et laboriosam repellat eligendi tempora eveniet?
                        </p>

                    </div>

                    <!--=== Contact Form ===-->

                    <form id="contact-form" class="col-sm-6 col-md-offset-1 scrollimation fade-left d3" action="contact.php" method="post" novalidate>

                        <div class="form-group">
                            <label class="control-label" for="contact-name">Name</label>
                            <div class="controls">
                                <input id="contact-name" name="contactName" placeholder="Your name" class="form-control requiredField" data-new-placeholder="Your name" type="text" data-error-empty="Please enter your name">
                                <i class="fa fa-user"></i>
                            </div>
                        </div><!-- End name input -->

                        <div class="form-group">
                            <label class="control-label" for="contact-mail">Email</label>
                            <div class=" controls">
                                <input id="contact-mail" name="email" placeholder="Your email" class="form-control requiredField" data-new-placeholder="Your email" type="email" data-error-empty="Please enter your email" data-error-invalid="Invalid email address">
                                <i class="fa fa-envelope"></i>
                            </div>
                        </div><!-- End email input -->

                        <div class="form-group">
                            <label class="control-label" for="contact-message">Message</label>
                            <div class="controls">
                                <textarea id="contact-message" name="comments" placeholder="Your message" class="form-control requiredField" data-new-placeholder="Your message" rows="6" data-error-empty="Please enter your message"></textarea>
                                <i class="fa fa-comment"></i>
                            </div>
                        </div><!-- End textarea -->

                        <p><button name="submit" type="submit" class="btn p-3 btn-block" data-error-message="Error!" data-sending-message="Sending..." data-ok-message="Message Sent"><i class="fa fa-paper-plane"></i>Send Message</button></p>
                        <input type="hidden" name="submitted" id="submitted" value="true" />

                    </form><!-- End contact-form -->

                </div>

            </div>

        </section>

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