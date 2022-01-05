<nav class="navbar py-4 navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="<?= BASEURL; ?>/home">
            <!-- <img src="images/cafe17.svg" width="187" alt=""> -->
            <img src="<?= BASEURL; ?>/images/cafe17.svg" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item align-self-center <?= $v = ('Home' == $data['page']) ? 'active' : ''; ?>">
                    <a class="nav-link" href="<?= BASEURL; ?>/home">Beranda </a>
                </li>
                <li class="nav-item align-self-center <?= $v = ('Menu' == $data['page']) ? 'active' : ''; ?>">
                    <a class="nav-link" href="<?= BASEURL; ?>/menu">Menu</a>
                </li>
                <li class="nav-item align-self-center <?= $v = ('Blog' == $data['page']) ? 'active' : ''; ?>">
                    <a class="nav-link" href="<?= BASEURL; ?>/blog">Blog</a>
                </li>
                <li class="nav-item align-self-center <?= $v = ('About' == $data['page']) ? 'active' : ''; ?>">
                    <a class="nav-link" href="<?= BASEURL; ?>/about">Tentang Kami</a>
                </li>
                <!-- <a class="btn px-4 btn-secondary ml-5" href="#" role="button">Sign In</a>
                    <a class="btn px-4 btn-primary ml-2" href="#" role="button">Sign Up</a> -->
            </ul>

            <ul class="navbar-nav ml-auto icon">
                <li class="nav-item align-self-center">
                    <a class="nav-link" type="button" data-toggle="modal" data-target="#formModal" onclick="searching()">
                        <span class="iconify" data-inline="false" data-icon="zmdi:search" style="font-size: 24px;"></span></a>
                </li>
                <?php if (empty($_SESSION['user_account'])) { ?>
                    <li class="nav-item align-self-center <?= $v = ('Keranjang' == $data['page']) ? 'active' : ''; ?>">
                    <a class="nav-link" type="button" data-toggle="modal" data-target="#formModal" onclick="login()"><span class="iconify" data-icon="bi:cart"></span></a>
                    </li>
                    <li class="nav-item align-self-center">

                        <a class="nav-link" type="button" data-toggle="modal" data-target="#formModal" onclick="login()">
                            <span class="iconify" data-inline="false" data-icon="codicon:account"></span> Masuk / Daftar</a>
                    </li>
                <?php } else { ?>

                  
                    <li class="nav-item align-self-center <?= $v = ('Keranjang' == $data['page']) ? 'active' : ''; ?>">
                    <div class="dropdown">
                            <a class="nav-link" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="iconify" data-icon="bi:cart"></span> 
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="<?= BASEURL; ?>/transaction">Keranjang</a>
                                <a class="dropdown-item" href="<?= BASEURL; ?>/transaction/payment">Pembayaran</a>

                            </div>
                        </div>
                        
                    </li>
                    <li class="nav-item align-self-center">
                        <div class="dropdown">
                            <a class="nav-link" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="iconify" data-inline="false" data-icon="codicon:account"></span> <?= $_SESSION['user_account']['username']; ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" type="button" onclick="account()">Pengaturan Akun</a>
                                <a class="dropdown-item" type="button" data-toggle="modal" data-target="#formModal" onclick="logout()">Keluar</a>

                            </div>
                        </div>
                    </li>
                <?php } ?>
                <!-- <a class="btn px-4 btn-secondary ml-5" href="#" role="button">Sign In</a>
                    <a class="btn px-4 btn-primary ml-2" href="#" role="button">Sign Up</a> -->
            </ul>

        </div>
    </div>
</nav>