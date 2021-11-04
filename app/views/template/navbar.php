<nav class="navbar py-4 navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="<?= BASEURL;?>/home">
                <!-- <img src="images/cafe17.svg" width="187" alt=""> -->
                <img src="<?= BASEURL; ?>/images/cafe17.svg" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item align-self-center <?= $v = ('Home' == $data['page']) ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?= BASEURL;?>/home">Beranda </a>
                    </li>
                    <li class="nav-item align-self-center <?= $v = ('Menu' == $data['page']) ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?= BASEURL;?>/menu">Menu</a>
                    </li>
                    <li class="nav-item align-self-center <?= $v = ('Blog' == $data['page']) ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?= BASEURL;?>/blog">Blog</a>
                    </li>
                    <li class="nav-item align-self-center <?= $v = ('About' == $data['page']) ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?= BASEURL;?>/about">Tentang Kami</a>
                    </li>
                    <!-- <a class="btn px-4 btn-secondary ml-5" href="#" role="button">Sign In</a>
                    <a class="btn px-4 btn-primary ml-2" href="#" role="button">Sign Up</a> -->
                </ul>

                <ul class="navbar-nav ml-auto icon">
                    <li class="nav-item align-self-center">
                        <a class="nav-link" type="button" data-toggle="modal" data-target="#searchModal"
                            data-whatever="Cari">
                            <span class="iconify" data-inline="false" data-icon="zmdi:search"
                                style="font-size: 24px;"></span></a>
                    </li>
                    <li class="nav-item align-self-center <?= $v = ('Keranjang' == $data['page']) ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?= BASEURL; ?>/cart"><span class="iconify" data-icon="bi:cart"></span></a>
                    </li>
                    <li class="nav-item align-self-center">
                        <a class="nav-link" type="button" data-toggle="modal" data-target="#formModal" onclick="login()"
                            data-whatever="Pelanggan Baru"><span class="iconify" data-inline="false"
                                data-icon="codicon:account"></span> Masuk / Daftar</a>
                    </li>

                    <!-- <a class="btn px-4 btn-secondary ml-5" href="#" role="button">Sign In</a>
                    <a class="btn px-4 btn-primary ml-2" href="#" role="button">Sign Up</a> -->
                </ul>

            </div>
        </div>
    </nav>
