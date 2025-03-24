<?php include('config/constants.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/styles.css">
</head>

<body style="background-color:#dfe4ea;">
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img height="90px" src="images/yumyard1.png" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="<?php echo SITEURL; ?>">Home</a>
                    </li>
                    <li>
                        <a  href="<?php echo SITEURL; ?>categories.php">Categories</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>foods.php">Foods</a>
                    </li>
                    <?php if(isset($_SESSION['username'])): ?>
                        <li><a href="<?php echo SITEURL; ?>logout.php">Logout</a></li>
                        <?php else: ?>
                            <li><a href="<?php echo SITEURL; ?>login.php">Login</a></li>
                            <li><a href="<?php echo SITEURL; ?>signup.php">Sign Up</a></li>
                         <?php endif; ?>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
   