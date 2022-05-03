<header class="main-header">
    <!-- Logo -->
    <a href="../" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b><i class="fa fa-cab"></i></b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b><i class="fa fa-cab"></i> Car</b>Rental</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="../userpanel/dist/img/avatar5.png" class="user-image" alt="User Image">
                        <span class="hidden-xs"><?php echo $_SESSION['name']; ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="../userpanel/dist/img/avatar5.png" class="img-circle" alt="User Image">

                            <p>
                                <?php echo $_SESSION['name']; ?>
                                <small>Member since Apr. 2022</small>
                            </p>
                        </li>
                        <li class="user-footer">
                            <div class="pull-center">
                                <a class="btn btn-danger" style="width: 100%" href="../logout.php"><i class="fa fa-spinner fa-spin"></i> Log out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
            </ul>
        </div>
    </nav>
</header>