<!-- Main Sidebar container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= url_to('dashboard') ?>" class="brand-link">
        <img src="<?= base_url('adminLTE'); ?>/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Cafe</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-coloumn" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
                <li class="nav-header">Menu</li>
                <li class="nav-item">
                    <a href="<?= url_to('dashboard') ?>" class="nav-link">
                        <i class="fas fa-home nav-icon"></i>
                        <p> Dashboard </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= url_to('drink') ?>" class="nav-link">
                        <i class="fas fa-wine-glass nav-icon"></i>
                        <p> Drink </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= url_to('food') ?>" class="nav-link">
                        <i class="fas fa-utensils nav-icon"></i>
                        <p> Food </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= url_to('order') ?>" class="nav-link">
                        <i class="fas fa-cash-register nav-icon"></i>
                        <p> Order </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!--/.sidebar-menu-->
    </div>
    <!--/.sidebar -->
</aside>