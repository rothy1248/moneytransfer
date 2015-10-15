<?php session_start(); ?>
<?php error_reporting(E_ERROR); ?>
<!-- Navigation -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color:#333333 ; font-weight: bold; font-size: 14px;">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="index.php">Money Transaction</a>

        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="transection.php">Transfer Money</a>
                </li>
                <li>
                    <a href="transferhistory.php">Recent Transfer</a>
                </li>
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> <i class="glyphicon glyphicon-chevron-down"></i></a>
                    <?php

                    if (!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])) {
                        ?>

                        <ul class="dropdown-menu">
                            <li><a>Hello !! <?= $_SESSION['Username'] ?></a></li>
                            <li><a href="logout.php">Log Out</a></li>
                            <li><a href="signin.php">view Detail</a></li>
                        </ul>


                        <?php
                    } else {
                        ?>
                        <ul class="dropdown-menu">
                            <li><a href="signin.php">Sign in</a></li>
                            <li><a href="signup.php">Sign up</a></li>

                        </ul>

                        <?php
                    }
                    ?>



                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<!--end nav-->


