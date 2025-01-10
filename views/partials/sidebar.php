<!-- ########## START: LEFT PANEL ########## -->
<?php session_start()?>
<div class="br-logo"><a href=""><span>[</span>SMART <i>SPK</i><span>]</span></a></div>
<div class="br-sideleft sideleft-scrollbar">
    <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
    <ul class="br-sideleft-menu">
        <li class="br-menu-item">
            <a href="index.php" class="br-menu-link">
                <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
                <span class="menu-item-label">Dashboard</span>
            </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
            <a href="kriteria.php" class="br-menu-link">
                <i class="menu-item-icon icon ion-ios-list-outline tx-24"></i>
                <span class="menu-item-label">Kriteria</span>
            </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <?php if($_SESSION['role'] == 'admin'){?>

        <li class="br-menu-item">
            <a href="handphone.php" class="br-menu-link">
                <i class="menu-item-icon icon fas fa-mobile-alt tx-24"></i>
                <span class="menu-item-label">Handphone</span>
            </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <?php } ?>
        <li class="br-menu-item">
            <a href="prehitung.php" class="br-menu-link">
                <i class="menu-item-icon icon ion-ios-calculator-outline tx-24"></i>
                <span class="menu-item-label">SMART</span>
            </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
            <a href="history.php" class="br-menu-link">
                <i class="menu-item-icon icon ion-ios-time-outline tx-24"></i>
                <span class="menu-item-label">History</span>
            </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->

    </ul><!-- br-sideleft-menu -->
    <br>
</div><!-- br-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->