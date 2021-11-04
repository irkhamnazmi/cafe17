<main>
        <section class="herobwa mt-5">
            <div class="container">
                <div class="row">
                    <div class="col align-self-stretch">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Kategori
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Semua Kategori</a>
                                <a class="dropdown-item" href="#">Makanan</a>
                                <a class="dropdown-item" href="#">Minuman</a>
                                <a class="dropdown-item" href="#">Menu Terlaris</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>


        <section class="herobwa mt-5">
            <div class="container">


                <h1>Semua Kategori</h1>
                <div class="d-flex flex-row">
                    <div class="row">
                        <?php
                        
                        if(!empty($data['row']))
                        {
                           foreach ($data['row'] as $row):
                   
                        ?>
                        <div class="col mb-4">
                            <div class="card" style="width:350px; ">
                                <img class="card-img-top" alt="Card image" height="300"
                                    style="width:100%; padding: 10px;" src="<?= BASEURL_ADMIN.'/uploads/images/'.$row['menu_image'];?>">
                                <div class="card-body">
                                    <h4 class="card-text"><?= $row['menu_name']; ?></h4>
                                    <h5 class="card-title">Rp <?= $row['menu_price']; ?>,-</h5>
                                    <h6><span class="iconify" data-inline="false" data-icon="bi:cart-check"
                                            style="font-size: 24px;"></span> 0</h6>
                                    <div class="col-md-12 text-center">
                                        <button type="button"  onclick="location.href='<?= BASEURL; ?>/menu/order/<?= $title = str_replace(' ', '-', $row['menu_id'].' '.$row['menu_name']); ?>'" class="btn btn-primary">Pesan</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                  

                        <?php 
                        
                           endforeach;
                        } 

                        ?>

                    </div>
                </div>
                </div>
        </section>

    </main>
