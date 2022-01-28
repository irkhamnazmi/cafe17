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


    <section class="herobwa mt-5">
        <div class="container">


            <h1><?= $data['status']; ?></h1>
            <div class="d-flex flex-row">
                <div class="row">
                    <?php

                    if (!empty($data['row'])) {
                        foreach ($data['row'] as $row) :

                    ?>
                            <div class="col mb-4">
                                <div class="card" style="width:350px; ">
                                    <div class="card-title" style="text-align: center;">
                                        <?php
                                        switch ($row['transaction_status']) {

                                            case 'Menunggu Konfirmasi':
                                        ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <h4><?= $row['transaction_status']; ?></h4>
                                                </div>
                                        <?php
                                                break;
                                            case 'Menunggu Pembayaran':
                                        ?>
                                                <div class="alert alert-danger" role="alert">
                                                    <h4><?= $row['transaction_status']; ?></h4>
                                                </div>
                                        <?php
                                                break;
                                            case 'Sedang Proses':
                                        ?>
                                                <div class="alert alert-info" role="alert">
                                                    <h4><?= $row['transaction_status']; ?></h4>
                                                </div>
                                        <?php
                                                break;
                                            case 'Lunas':
                                        ?>
                                                <div class="alert alert-success" role="alert">
                                                    <h4><?= $row['transaction_status']; ?></h4>
                                                </div>
                                        <?php
                                                
                                        }


                                        ?>

                                        <div class="row">
                                            <div class="col">
                                                <p class="text-left ml-3"><?php
                                                                            $datetime = explode(' ', $row['transaction_date']);
                                                                            $date = explode('-', $datetime[0]);
                                                                            echo $date[2] . '-' . $date[1] . '-' . $date[0];
                                                                            ?></p>

                                            </div>
                                            <div class="col">
                                                <p class="text-right mr-3"><?php
                                                                            $datetime = explode(' ', $row['transaction_date']);
                                                                            $date = explode('-', $datetime[0]);
                                                                            echo $datetime[1];
                                                                            ?></p>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="card-body">
                                        <h5 class="text-center"><u>Jumlah Pesanan</u></h5>
                                        <h4 class="text-center"><?= $row['transaction_qty_total']; ?></h4>
                                        <h5 class="text-center"><u>Total Biaya</u></h5>
                                        <h4 class="text-center">Rp <?= $row['transaction_pay_total']; ?>,-</h4>
                                    </div>
                                    <div class="card-footer" style="text-align: center;">
                                        <button class="btn btn-success" onclick="location.href='<?= BASEURL; ?>/transaction/transaction_detail/<?= $title = str_replace(' ', '-', $row['transaction_id'] . ' ' . $row['transaction_status']); ?>'"> Check Pesanan </button>

                                    </div>
                                </div>
                            </div>



                        <?php

                        endforeach;
                    } else {
                        ?>
                        <div class="card col" style="width: auto; text-align: center;">

                            <div class="card-body">

                                <div class="col">
                                <?php Flasher::flash() ?>
                                </div>

                            </div>

                            <!-- <span class="iconify align-self-end" data-inline="false" data-icon="uil:edit" style="font-size: 50px; margin-bottom:10px;"></span> -->

                        </div>
                </div>
            <?php
                    }

            ?>

            </div>
        </div>
        </div>
    </section>

</main>