<main>

    <section class="herobwa mt-5">
        <div class="container">
            <h1>Berbagi Cerita</h1>
            <div class="d-flex flex-row">
                <div class="row">


                <?php 
                 foreach($data['blog'] as $row):
                ?>

                    
                    <div class="col mb-4">
                        <div class="card" style="width:350px; border: none;">
                            <img class="card-img-top" alt="Card image" height="300" style="width:100%; padding: 10px;" src="<?= BASEURL_ADMIN; ?>/uploads/blog/images/<?= $row['blog_image'];?>">
                            <div class="card-body">
                                <h2 class="card-title"><u><?= $row['blog_title'];?></u></h2>
                                <h5 class="card-text"> <?= $row['blog_title'];?>
                           <?= substr($row['blog_description'],3,100); ?>
                            
                    </h5>
                    <a type="button" class="link-b" href="<?= BASEURL; ?>/blog/view_blog/<?= $title = str_replace(' ', '-', $row['blog_id'].' '.$row['blog_title']); ?>">
                                    <h5><u>Baca selengkapnya...</u></h5>
                                </a>
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
                          echo '<h5 class="card-text">'.$date['2'] . ' ' . $bulan . ' ' . $date['0'].'</h5>'; 
                        ?>
                                
                            </div>
                        </div>
                    </div>



                    

                    <?php
                        endforeach;
                    ?>


                   

                </div>
            </div>
    </section>
</main>