<section class="herobwa mt-5">
            <div class="container">
                <div class="row">
                    <div class="col align-self-stretch">
                    <input type="hidden" name="transaction_id" value="<?= $data['row']['transaction_id']; ?>" id="transaction_id" />
                        <h2>Menu</h2>
                      <?php foreach($data['rowDetail'] as $row):?>              
                        <div class="card col" style="width: auto;">
                           
                            <div class="card-body">
                                <div class="row justify-content-start">
                                    <div class="col-3 align-self-stretch">
                                        <a href="<?= BASEURL; ?>/menu/order/<?= $title = str_replace(' ', '-', $row['menu_id'].' '.$row['menu_name']); ?>'">
                                        <img class="card-img-top" alt="Card image" height="250px"
                                        style="width:100%; padding: 10px;" src="<?= BASEURL_ADMIN.'/uploads/images/'.$row['menu_image'];?>">
                                        </a>
                                    </div>
                                    <div class="col align-self-start">
                                        <div class="row">
                                            <div class="col align-self-center">
                                                <h2><?= $row['menu_name'];?></h2>
                                               
                                            </div>
                                            <div class="d-flex flex-row">
                                              
                                                <div class="p-2" style="<?= $data['display'];?>">
                                                    <span class="iconify" data-inline="false" data-icon="akar-icons:circle-plus" style="font-size: 24px; cursor: pointer" onclick="addOnCart(<?= $row['transaction_detail_id']?>)"></span>
                                                   </div>
                                                   <div class="p-2" style="<?= $data['display'];?>">
                                                     <h5 id="txt_qty<?=$row['transaction_detail_id'];?>"><?= $row['transaction_detail_qty'];?></h5>
                                                     <input type="hidden" name="transaction_detail_qty" value="<?= $row['transaction_detail_qty']; ?>" id="transaction_detail_qty<?=$row['transaction_detail_id'];?>" />
                                                   </div>
                                                   <div class="p-2" style="<?= $data['display'];?>">
                                                    <span class="iconify" data-inline="false" data-icon="akar-icons:circle-minus" style="font-size: 24px; cursor: pointer" onclick="reduceOnCart(<?= $row['transaction_detail_id']?>);"></span>
                                                   </div>
                                                 </div>
                                             
                                               
    
                                        </div>
                                        <div class="row align-self-lg-start">
                                            <div class="col align-self-center">
                                                <h5>Rp <?= $row['menu_price'];?>,-/porsi</h5>
                                                <input type="hidden" name="menu_price" value="<?= $row['menu_price']; ?>" id="menu_price<?= $row['transaction_detail_id']?>"/>
                                            </div> 
                                           
                                        </div>
                                        <br>
                                        <div class="row align-self-lg-start">
                                            <div class="col align-self-center">
                                                <h5>Sub Total</h5>
                                            </div> 
                                           
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col align-self-center">
                                                <h3 id="txt_subtotal<?= $row['transaction_detail_id']?>">Rp <?= $row['transaction_detail_price_total']; ?>,-</h3>
                                                <input type="hidden" name="transaction_detail_price_total" value="<?= $row['transaction_detail_price_total'];?>" id="transaction_detail_price_total<?=$row['transaction_detail_id']?>"/>
                                            </div>     
                                        </div>
        
                                        <br>

                                        <div class="row align-self-lg-start">
                                            <div class="col align-self-center">
                                                <h5>Catatan</h5>
                                            </div> 
                                           
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col align-self-center">
                                                <textarea id="note<?= $row['transaction_detail_id'];?>" oninput="noteOnCart(<?=$row['transaction_detail_id']?>);" class="form-control" <?= $data['readonly'];?>><?= $row['transaction_detail_note'];?></textarea>
                                            </div>     
                                        </div>

                                       
                                       
                                    </div>
                                  
                                </div>
                                
                            </div>

                            <span class="iconify align-self-end" data-inline="false" data-icon="ion:trash-bin-outline" style="font-size: 50px; margin-bottom:10px; cursor: pointer; <?= $data['display_delete']?>" onclick="deleteOnCart(<?= $row['transaction_detail_id']?>)"></span>
                        
                        </div>
                        <?php endforeach;?>
                    </div>
    
                </div>
            </div>
        </section>

        <section class="herobwa mt-5">
            <div class="container">
                <div class="row" style="margin-bottom: 5%;">
                    <div class="col align-self-center">
                        
                      <h2><center>Jumlah Pembayaran</center></h2>
                      <h2 id="transaction_pay_total"><center>Rp <?= $data['row']['transaction_pay_total']; ?>,-</center></h2>
                        

                       
                    </div>   
                    </div>
