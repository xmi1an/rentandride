<aside class="main-sidebar">
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="../userpanel/dist/img/avatar5.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $_SESSION['name']; ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Admin</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li>
                <a href="./useraccount.php">
                    <i class="fa-solid fa-pen-to-square"></i> <span>&nbsp; Manage Users</span>
                </a>
            </li>
            <li>
                <a href="./testimonial.php">
                    <i class="fa-solid fa-comment-dots"></i><span>&nbsp; Manage Testimonials</span>
                </a>
            </li>
            <li>
                <a href="./inbox.php">
                    <i class="fa-solid fa-inbox"></i><span>&nbsp; Inbox</span>
                </a>
            </li>

            <li>
                <a href="../logout.php">
                    <i class="fa-solid fa-right-from-bracket"></i> <span>&nbsp; Logout</span>
                </a>
            </li>
            <?php if (isset($_SESSION['a_id'])) : ?>
                <li>
                    <a href="testimonial.php">
                        <i class="fa fa-files-o"></i> <span>&nbsp; Testimonial</span>
                    </a>
                </li>
                <li>
                    <a href="useraccount.php">
                        <i class="fa fa-user-secret"></i> <span>&nbsp; User Account</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-laptop"></i>
                        <span>Encoding</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="car.php"><i class="fa fa-circle-o"></i> Car</a></li>
                        <li><a href="costumer.php"><i class="fa fa-circle-o"></i> Costumer</a></li>
                        <li><a href="carowner.php"><i class="fa fa-circle-o"></i> Car Owner</a></li>
                    </ul>
                </li>
        </ul>
    </section>
    <!-- /.sidebar -->
<?php endif ?>
</aside>