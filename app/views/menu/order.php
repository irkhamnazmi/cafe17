<main>
        <section class="herobwa mt-5">
            <div class="container">
            <form action="<?= BASEURL; ?>/menu/cart" method="POST">
                <div class="row">
              
                    <?php 
                    
                    foreach($data['rowId'] as $rowId):
                    
                    ?>
                   
                    <div class="col align-self-stretch">
                        <input type="hidden" name="menu_id" value="<?= $rowId['menu_id']; ?>" />
                        <h1><?= $rowId['menu_name'];?></h1>

                        <img width="400px" src="<?= BASEURL_ADMIN; ?>/uploads/images/<?= $rowId['menu_image']; ?>" alt="">

                    </div>

                    <div class="col align-self-end">
                        
                        <h2>Deskripsi</h2>
                       
                        <h5 style="text-align: justify; line-height: 1.7em;">
                            <?= $rowId['menu_description'];?>
                         </h5>
                         <span style="display:inline-block; width: 50px;"></span>
                        <div class="d-flex flex-row">
                            <h2>Harga</h2>
                            <h3 class="col">Rp <?= $rowId['menu_price']; ?>,- /porsi</h3>
                            <input type="hidden" name="menu_price" value="<?= $rowId['menu_price']; ?>" id="menu_price"/>

                        </div>

                        <div class="d-flex flex-row">
                            <div class="card col">
                            
                                <div class="card-body">
                                    <div class="col">
                                       
                                        <div class="row">
                                            <div class="col align-self-center">
                                                <h4>Jumlah</h4>
                                            </div>
                                            <div class="d-flex flex-row">
                                                <div class="p-2">
                                                    
                                                    <span class="iconify" data-inline="false"
                                                        data-icon="akar-icons:circle-plus"
                                                        style="font-size: 24px; cursor:pointer;" onclick="add(); return false"></span>
                                                </div>
                                                <div class="p-2">
                                                    <h5 id="txt_qty">1</h5>
                                                    <input type="hidden" name="transaction_detail_qty" value="1" id="transaction_qty"/>
                                                </div>
                                                <div class="p-2">
                                                    <span class="iconify" data-inline="false"
                                                        data-icon="akar-icons:circle-minus"
                                                        style="font-size: 24px; cursor:pointer;"  onclick="reduce();"></span>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col align-self-center">
                                                <h4>Sub Total</h4>
                                            </div>
                                            <div class="d-flex flex-row">

                                                <div class="p-2">
                                                    <h5 id="txt_subtotal">Rp <?= $rowId['menu_price']; ?>,-</h5>
                                                    <input id="transaction_subtotal" type="hidden" name="transaction_detail_price_total" value="<?= $rowId['menu_price'];?>"/>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col align-self-center">
                                                <h4>Catatan</h4>
                                            </div>
                                            <div class="d-flex flex-row align-content-lg-start">

                                                <div class="p-2">
                                                    <textarea class="form-control" placeholder="Misal: Pedes lvl 3" name="transaction_detail_note"></textarea>

                                                </div>

                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <button <?= (empty($_SESSION['user_account'])) ? 'type="button" data-toggle="modal" data-target="#formModal" onclick="login()"' : 'type="submit"'; ?> class="btn btn-primary col">Tambahkan ke Keranjang</button>
                                            </div>
                                        </div>
                                    
                                    </div>



                                </div>
                            </div>

                        </div>




                    </div>
                   
                <?php endforeach;?>
               
                </div>
                </form>
            </div>
        </section>


        <section class="herobwa mt-5">

            <div class="container">
                <div class="row"></div>
                <h1>Menu Lain</h1>
                <div class="d-flex flex-row">
                    <div class="row">
                        <?php foreach($data['menu'] as $row): ?>
                        <div class="col mb-4">
                            <div class="card" style="width: 300px; ">
                                <img class="card-img-top" alt="Card image" height="250px"
                                    style="width:100%; padding: 10px;" src="<?= BASEURL_ADMIN; ?>/uploads/images/<?= $row['menu_image']; ?>">
                                <div class="card-body">
                                    <h4 class="card-text"><?=$row['menu_name'];?></h4>
                                    <h5 class="card-title">Rp <?=$row['menu_price'];?>,-</h5>
                                    <!-- <h6><span class="iconify" data-inline="false" data-icon="bi:cart-check"
                                            style="font-size: 24px;"></span> 0</h6> -->
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