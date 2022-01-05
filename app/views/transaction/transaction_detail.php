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
                                               <input class="form-control" type="text" id="transaction_customer_name" name="transaction_customer_name" value="<?= $data['rowId']['transaction_customer_name'];?>"/> 
                                               <br>
                                           </div>     
                                   </div>
                                   <div class="row">
                                           <div class="col align-self-center">
                                               <h3>Nomor WhatsApp Penerima </h3>
                                               <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" id="transaction_customer_phone_number" name="transaction_customer_phone_number" value="<?= $data['rowId']['transaction_customer_phone_number'];  ?>"/>
                                               <br>
                                           </div>     
                                   </div>
                                   <div class="row">
                                           <div class="col align-self-center">
                                               <h4>di Lokasi</h4>
                                                <input class="form-control" type="text" id="transaction_customer_address" name="transaction_customer_address" value="<?= $data['rowId']['transaction_customer_address']; ?>"/>
                                         
                                           </div>     
                                   </div>
                                  
                                  
                                 
                                   </form>        
                               </div>
                             
   
                           </div>
                           
                           <span class="iconify align-self-end" data-inline="false" data-icon="uil:edit" style="font-size: 50px; margin-bottom:10px; cursor: pointer" onclick="account()"></span>
                           
                         
                           </div>
                       </div>
                    </div>
                  
                </div>
            </div>
        </section>

        <div id="detail">
        </div>  
        
        <div class="row">
                    <div class="col-md-12 text-center">
                        <?php if($data['rowId']['transaction_status'] == "Menunggu Konfirmasi"){
                            ?> 
                             <h4 class="text-center" style="display:<?= $data['display'];?>;"> Harap Konfirmasi ke Admin dahulu</h4>
                        <button class="btn btn-primary justify-content-center" type="button" onclick="whatsapp('<?= $data['rowId']['transaction_invoice_code'];?>')" style="display:<?= $data['display']?>"> Chat Admin</button>
                            <?php
                        } else{
                            ?> 
                             <h4 class="text-center" style="display:<?= $data['display'];?>;"> Segera Melakukan Pembayaran untuk mempercepat proses Pesanan Anda </h4>
                             <button class="btn btn-primary justify-content-center" type="button" onclick="paymentOnTransaction('<?= $data['rowId']['transaction_invoice_code'];?>')" style="display:<?= $data['display']?>"> Bayar Sekarang</button>
                            <?php    
                        }?>
                       
                    </div>
                   
                </div>
            </div>
      
           
        </section>

        <?php }?>

    </main>

  