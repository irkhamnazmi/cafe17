<main>
<?php if(empty($data['rowId'])){?>
    <section class="herobwa mt-5">
            <div class="container">
                <div class="row">
                    <div class="col align-self-stretch">
                        <h1>Detail Pesanan</h1>
                        <br>
                        <!-- <h2></h2> -->

                        <div class="card col" style="width: auto; text-align: center;">
                           
                            <div class="card-body">
                             
                                <div class="col">
                                    <h2>Ups ... Tidak Ada Pesanan</h2>                    
                                </div>
                             
                            </div>
                              
                            <!-- <span class="iconify align-self-end" data-inline="false" data-icon="uil:edit" style="font-size: 50px; margin-bottom:10px;"></span> -->
                          
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
        </section>


       
     <?php
    }else{?>

     
        <section class="herobwa mt-5">
            <div class="container">
                <div class="row">
                    <div class="col align-self-stretch">
                        <h1>Detail Pesanan</h1>
                        <br>
                        <h2>Pemesan</h2>

                        <div class="card col" style="width: auto;">
                           
                           <div class="card-body">
                             
                               <div class="col">
                                   <form>
                                   <div class="row">
                                           <div class="col align-self-center">
                                               <h3> Atas Nama </h3>
                                               <input class="form-control" type="text" id="transaction_customer_name" name="transaction_customer_name" value="<?= $data['rowId']['transaction_customer_name'];?>" <?= $data['readonly']; ?>/> 
                                               <br>
                                           </div>     
                                   </div>
                                   <div class="row">
                                           <div class="col align-self-center">
                                               <h3>Nomor WhatsApp Penerima </h3>
                                               <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" id="transaction_customer_phone_number" name="transaction_customer_phone_number" value="<?= $data['rowId']['transaction_customer_phone_number'];  ?>" <?= $data['readonly'];?> >
                                               <br>
                                           </div>     
                                   </div>
                                   <div class="row">
                                           <div class="col align-self-center">
                                               <h4>di Lokasi</h4>
                                                <input class="form-control" type="text" id="transaction_customer_address" name="transaction_customer_address" value="<?= $data['rowId']['transaction_customer_address']; ?>" <?= $data['readonly'];?>/>
                                         
                                           </div>     
                                   </div>
                                  
                                  
                                 
                                   </form>        
                               </div>
                             
   
                           </div>
                           
                           <span class="iconify align-self-end" data-inline="false" data-icon="uil:edit" style="font-size: 50px; margin-bottom:10px; cursor: pointer; <?= $data['display'];?>" onclick="account()"></span>
                           
                         
                           </div>
                       </div>
                    </div>
                  
                </div>
            </div>
        </section>
    <section>
        <div id="detail">
        </div>  
        
        <div class="row" style="text-align: center;">
                    <div class="col">
                        <?php 
                        switch($data['rowId']['transaction_status']){
                            case 'Menunggu Konfirmasi':
                                ?> 
                                <h4 class="text-center" style="display:<?= $data['display'];?>;"> Harap Konfirmasi ke Admin dahulu</h4>
                           <button class="btn btn-primary justify-content-center" type="button" onclick="whatsapp('<?= $data['rowId']['transaction_invoice_code'];?>')" style="display:<?= $data['display']?>"> Chat Admin</button>
                               <?php
                            break;
                            case 'Menunggu Pembayaran':
                                ?> 
                                <h4 class="text-center" style="display:<?= $data['display'];?>;"> Segera Melakukan Pembayaran untuk mempercepat proses Pesanan Anda </h4>
                                <button class="btn btn-danger" data-toggle="modal" data-target="#formModal" data-id="<?= $data['rowId']['transaction_id'];?>" type="button" onclick="CancelPaymentOnTransaction()" style="display:<?= $data['display']?>"> Batal</button>
                                <button class="btn btn-success" type="button" onclick="paymentOnTransaction(<?= $data['rowId']['transaction_id'];?>)" style="display:<?= $data['display']?>"> Bayar Sekarang</button>
                               <?php    
                            break;
                            case 'Lunas':
                                ?> 
                                <button class="btn btn-success" type="button" onclick="window.location.href='<?= BASEURL_ADMIN.'/transaction/receipt/'.$data['rowId']['transaction_id'];?>';"> Lihat Bukti Pembayaran</button>
                               <?php    
                            break;
                            
                        }
                      ?>
                       
                    </div>
                   
                </div>
            </div>
      
           
        </section>

        <?php }?>

    </main>

  