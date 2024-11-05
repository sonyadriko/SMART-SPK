<!-- ########## START: HEAD PANEL ########## -->
<?php 
session_start()
?>
<div class="br-header">
    <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a>
        </div>
    </div><!-- br-header-left -->
    <div class="br-header-right">
        <nav class="nav">

            <div class="dropdown">
                <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                    <span class="logged-name hidden-md-down"><?php echo $_SESSION['nama'] ?></span>
                    <img src="../assets/img/users.jpg" class="wd-32 rounded-circle" alt="">
                    <span class="square-10 bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-header wd-250">
                    <div class="tx-center">
                        <a href=""><img src="../assets/img/users.jpg" class="wd-80 rounded-circle" alt=""></a>
                        <h6 class="logged-fullname"><?php echo $_SESSION['nama'] ?></h6>
                        <p><?php echo $_SESSION['email'] ?></p>
                    </div>

                    <hr>
                    <ul class="list-unstyled user-profile-nav">

                        <li><a href="logout.php"><i class="icon ion-power"></i> Sign Out</a></li>
                    </ul>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
        </nav>
    </div><!-- br-header-right -->
</div><!-- br-header -->
<!-- ########## END: HEAD PANEL ########## -->