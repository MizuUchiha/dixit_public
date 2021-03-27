<?php $address = $_SERVER['REQUEST_URI'];
$address = explode('/', $address);
$address = explode('.', $address[count($address) - 1]); ?>
<nav class="navbar navbar-default bg-white">
    <div class="container">
        <div class="navbar-header">
            <a class="text-dark navbar-brand " href="<?= (count($url) < 3) ? 'Portal/' : ''; ?>index"><b>Food Ordering
                    System</b></a>
        </div>

        <ul class="nav">
            <li class="nav-item">
                <a class="text-dark nav-link <?= ($address[0] == 'menu') ? 'text-primary' : 'text-dark'; ?>"
                   href="<?= (count($url) < 3) ? 'Portal/' : ''; ?>menu">Menu</a>
            </li>
            <li class="nav-item">
                <a class="text-dark nav-link <?= ($address[0] == 'contact') ? 'active' : ''; ?>"
                   href="<?= (count($url) < 3) ? 'Portal/' : ''; ?>contact">Contact</a>
            </li>
            <li class="nav-item">
                <?php if (!$_SESSION['username']) { ?>
                    <div class="dropdown">
                        <a class="text-dark nav-link <?= ($address[0] == 'login') ? 'text-primary' : 'text-dark'; ?>"
                           href="<?= (count($url) < 3) ? 'Portal/' : ''; ?>#"
                           class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Login <span class="fa fa-chevron-down"></span></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?= (count($url) < 3) ? 'Portal/' : ''; ?>login">
                                Sign In</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= (count($url) < 3) ? 'Portal/' : ''; ?>login?register">
                                Sign Up</a>
                        </div>
                    </div>
                <?php } else { ?>
                    <span class="text-dark nav-link" onclick="logOut();" style="cursor: pointer;">Sign Out</span>
                <?php } ?>
            </li>
            <li class="nav-item">
                <!--                HERE GOES BASKET    -->
            </li>
            <?php if ($_SESSION['u_access'] == 9): ?>
                <li class="nav-item">
                    <a class="nav-link <?= ($address[0] == 'admin') ? 'text-primary' : 'text-dark'; ?>"
                       href="<?= (count($url) < 3) ? 'Portal/' : ''; ?>admin"><i class="fa fa-tools"></i></a>
                </li>
            <?php endif; ?>
        </ul>

    </div>
</nav>