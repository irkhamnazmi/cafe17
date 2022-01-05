<main>
<?php if(empty($data['rowId'])){?>
    <section class="herobwa mt-5">
            <div class="container">
                <div class="row">
                    <div class="col align-self-stretch">
                        <h1>Keranjang</h1>
                        <br>
                        <!-- <h2></h2> -->

                        <div class="card col" style="width: auto; text-align: center;">
                           
                            <div class="card-body">
                             
                                <div class="col">
                                    <h2>Ups ... Pesanan Belum Masuk Keranjang</h2>                    
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
                        <h1>Keranjang</h1>
                        <br>
                        <!-- <h2>Pemesan</h2> -->

                        <!-- <div class="card col" style="width: auto;">
                           
                            <div class="card-body">
                              
                                <div class="col">
                                    <form>
                                    <div class="row">
                                            <div class="col align-self-center">
                                                <h3> Atas Nama </h3>
                                                <input class="form-control" type="text" id="transaction_customer_name" name="transaction_customer_name" value="<?= $data['row']['transaction_customer_name'];?>"/> 
                                                <br>
                                            </div>     
                                    </div>
                                    <div class="row">
                                            <div class="col align-self-center">
                                                <h3>Nomor WhatsApp Penerima </h3>
                                                <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" id="transaction_customer_phone_number" name="transaction_customer_phone_number" value="<?= $data['row']['transaction_customer_phone_number'];  ?>"/>
                                                <br>
                                            </div>     
                                    </div>
                                    <div class="row">
                                            <div class="col align-self-center">
                                                <h4>di Lokasi</h4>
                                                 <input class="form-control" type="text" id="transaction_customer_address" name="transaction_customer_address" value="<?= $data['row']['transaction_customer_address']; ?>"/>
                                          
                                            </div>     
                                    </div>
                                   
                                   
                                  
                                    </form>        
                                </div>
                              
    
                            </div>
                            
                            <span class="iconify align-self-end" data-inline="false" data-icon="uil:edit" style="font-size: 50px; margin-bottom:10px; cursor: pointer" onclick="account()"></span>
                            
                          
                            </div>
                        </div> -->
                    </div>
                  
                </div>
            </div>
        </section>

        <div id="detail">
        </div>  
        
        <div class="row">
                    <div class="col-md-12 text-center">
                        <button class="btn btn-primary justify-content-center" type="button" onclick="boxed(<?= $data['rowId']['transaction_id'];?>)"> Kemas Pesanan</button>
                    </div>
                   
                </div>
            </div>
      
           
        </section>

        <?php }?>

    </main>

  