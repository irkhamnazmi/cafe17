<main>
    <section class="herobwa mt-5">
        <div class="container">
            <div class="row">
            <div class="col">
                <?php Flasher::flash() ?>          
                </div>
            </div>
            <div class="row">
                <div class="col align-self-stretch">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Status Transaksi
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="<?= BASEURL; ?>/transaction/payment/Semua-Transaksi">Semua Transaksi</a>
                            <a class="dropdown-item" href="<?= BASEURL; ?>/transaction/payment/Menunggu-Konfirmasi">Menunggu Konfirmasi</a>
                            <a class="dropdown-item" href="<?= BASEURL; ?>/transaction/payment/Menunggu-Pembayaran">Menunggu Pembayaran</a>
                            <a class="dropdown-item" href="<?= BASEURL; ?>/transaction/payment/Sedang-Proses">Sedang Proses</a>
                            <a class="dropdown-item" href="<?= BASEURL; ?>/transaction/payment/lunas">Lunas</a>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    
    <div id="detail"> 
    </div>
</main>