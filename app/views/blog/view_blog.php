<main>
    <section class="herobwa mt-5">
        <div class="container">
            <?php foreach($data['rowId'] as $rowId):?>
            <div class="row">
                <img src="<?= BASEURL_ADMIN;?>/uploads/blog/images/<?= $rowId['blog_image']?>" class="rounded mx-auto d-block" alt="..." style="margin-bottom: 5%;">

            </div>

            <div class="row">
                <div class="col align-self-stretch">
                    <h2 class="text-center" style="font-size: 30pt;">
                        <?= $rowId['blog_title'] ?>
                    </h2>
                    <h5 style="text-align: left; line-height: 1.7em;">
                        <!-- <span style="display:inline-block; width: 50px;"></span> -->
                        <?= substr($rowId['blog_description'], 3); ?>

                    </h5>
                    </br>
                    <h5 class="text-left" style="font-size: 12pt;">
                        <?php
                        $datetime = explode(' ', $rowId['blog_date']);
                        $date = explode('-', $datetime[0]);
                        switch ($date[1]) {
                            case '01';
                                $bulan = 'Januari';
                                break;
                            case '02';
                                $bulan = 'Februari';
                                break;
                            case '03';
                                $bulan = 'Maret';
                                break;
                            case '04';
                                $bulan = 'April';
                                break;
                            case '05';
                                $bulan = 'Mei';
                                break;
                            case '06';
                                $bulan = 'Juni';
                                break;
                            case '07';
                                $bulan = 'Juli';
                                break;
                            case '08';
                                $bulan = 'Agustus';
                                break;
                            case '09';
                                $bulan = 'September';
                                break;
                            case '10';
                                $bulan = 'Oktober';
                                break;
                            case '11';
                                $bulan = 'November';
                                break;
                            case '12';
                                $bulan = 'Desember';
                                break;
                        }
                        echo $date['2'] . ' ' . $bulan . ' ' . $date['0'] . ' | by ' . $rowId['cashier_name'];
                        ?>
                    </h5>

                </div>
            </div>
            <?php endforeach;?>
        </div>
        <br />
        <br />
    </section>

    <section class="herobwa mt-5">
        <div class="container">
            <div class="text-center">
                <h1>Cerita Lainnya</h1>
            </div>

            <div class="scrolling-wrapper rowId flex-row flex-nowrap mt-4 pb-4 pt-2">

                <div class="d-flex flex-row">
                    <?php foreach ($data['blog'] as $row) : ?>
                        <div class="d-flex flex-row"> <img class="image" src="<?= BASEURL_ADMIN; ?>/uploads/blog/images/<?= $row['blog_image'] ?>" alt="Responsive image">
                            <label class="col-6">
                                <b><u><?= $row['blog_title']; ?></u></b>
                                <?= substr($row['blog_description'], 3, 100); ?>
                                <a class="link-b" href="<?= BASEURL; ?>/blog/view_blog/<?= $title = str_replace(' ', '-', $row['blog_id'].' '.$row['blog_title']); ?>"><u>Baca selengkapnya...</u></a>
                                </br>
                                <?php
                                $datetime = explode(' ', $row['blog_date']);
                                $date = explode('-', $datetime[0]);
                                switch ($date[1]) {
                                    case '01';
                                        $bulan = 'Januari';
                                        break;
                                    case '02';
                                        $bulan = 'Februari';
                                        break;
                                    case '03';
                                        $bulan = 'Maret';
                                        break;
                                    case '04';
                                        $bulan = 'April';
                                        break;
                                    case '05';
                                        $bulan = 'Mei';
                                        break;
                                    case '06';
                                        $bulan = 'Juni';
                                        break;
                                    case '07';
                                        $bulan = 'Juli';
                                        break;
                                    case '08';
                                        $bulan = 'Agustus';
                                        break;
                                    case '09';
                                        $bulan = 'September';
                                        break;
                                    case '10';
                                        $bulan = 'Oktober';
                                        break;
                                    case '11';
                                        $bulan = 'November';
                                        break;
                                    case '12';
                                        $bulan = 'Desember';
                                        break;
                                }
                                echo $date['2'] . ' ' . $bulan . ' ' . $date['0'];
                                ?>
                            </label>
                        </div>

                    <?php endforeach; ?>
                </div>

            </div>

        </div>
    </section>
</main>