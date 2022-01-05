<main>
    <section class="herobwa mt-5">
        <div class="container">
            <div class="row">
                <div class="col align-self-stretch">
                    <h1 style="font-size: 40pt;">
                        Selamat Datang
                    </h1>
                    <h2>
                        di Cafe 17 Purwokerto
                    </h2>
                    <!-- <a class="btn btn-primary" href="#" role="button">Get Started</a> -->
                </div>
                <div class="col align-self-stretch">
                    <!-- <img width="600" src="images/imageberanda.png" alt=""> -->

                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">

                            <?php
                            $count = 0;
                            foreach ($data['billboard'] as $row) :

                            ?>
                                <div class="carousel-item <?= $v = (0 == $count) ? 'active' : ''; ?>">
                                    <a type="button" href="detail.html"><img width="100%" height="100%" src="<?= BASEURL_ADMIN; ?>/images/<?= $row['menu_image']; ?>" alt=""></a>
                                </div>


                            <?php
                                $count++;
                            endforeach;
                            ?>
                        </div>

                        <ol class="carousel-indicators">


                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>


                        </ol>

                        <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a> -->
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="herobwa-black mt-5">
        <div class="container">
            <h1>Cerita Cafe 17</h1>
            <div class="scrolling-wrapper row flex-row flex-nowrap mt-4 pb-4 pt-2">

                <div class="d-flex flex-row">
                    <?php foreach($data['blog'] as $row):?>
                    <div class="d-flex flex-row"> <img class="image" src="<?= BASEURL_ADMIN;?>/uploads/blog/images/<?= $row['blog_image']?>" alt="Responsive image">
                        <label class="col-6">
                           <b><u><?= $row['blog_title'];?></u></b>
                           <?= substr($row['blog_description'],3,100); ?>
                           <a class="link" href="<?= BASEURL; ?>/blog/view_blog/<?= $title = str_replace(' ', '-', $row['blog_id'].' '.$row['blog_title']); ?>"><u>Baca selengkapnya...</u></a>
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

    <section class="herobwa mt-5">
        <div class="container">
            <h1 style="text-align: center;">Menu Terlaris</h1>
            <div class="d-flex flex-row">
                <div class="row">
                    
                    <?php foreach($data['menu'] as $row):?>
                    <div class="col mb-4">
                        <div class="card" style="width:350px;">
                            <img class="card-img-top" alt="Card image" style="width:100%; padding: 10px;" height="300" src="<?= BASEURL_ADMIN;?>/uploads/images/<?= $row['menu_image'];?>">
                            <div class="card-body">
                                <h4 class="card-text"><?= $row['menu_name'];?></h4>
                                <h5 class="card-title">Rp <?= $row['menu_price'];?>,-</h5>
                                <!-- <h6><span class="iconify" data-inline="false" data-icon="bi:cart-check" style="font-size: 24px;"></span> 0</h6> -->
                                <div class="col-md-12 text-center">
                                    <button type="button" class="btn btn-primary" onclick="location.href='<?= BASEURL; ?>/menu/order/<?= $title = str_replace(' ', '-', $row['menu_id'].' '.$row['menu_name']); ?>'">Pesan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                       

                    <?php endforeach; ?>      
                </div>
            </div>
        </div>
    </section>
</main>