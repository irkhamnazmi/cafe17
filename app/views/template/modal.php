   <!-- Modal Dialog -->
   <div class="modal fade" id="formModal" role="dialog" data-backdrop="static" data-keyboard="false" tabindex="-1">
       <div class="modal-dialog modal-xl" role="document">
           <h1 id="user_action" style="display: none;"></h1>

           <?php
            if (empty($_SESSION['user_account'])) {
            ?>

               <!--Register-->
               <div class="modal-content" id="register" style="display: none;">

                   <div class="modal-header">
                       <h1 class="modal-title" id="exampleModalLabel">Pelanggan Baru</h1>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>

                   </div>

                   <div class="modal-body">
                       <form novalidate class="needs-validation">
                           <div class="row">
                               <div class="col">
                                   <div class="row" style="margin: 10px;">

                                       <div class="col">
                                           <label for="user_name">Nama</label>
                                           <input type="text" class="form-control" required id="user_name" name="user_name" onkeypress="keyName()">
                                           <div id="username-error" class="invalid-feedback">
                                               Nama Anda Belum Diisi
                                           </div>
                                       </div>


                                   </div>

                                   <div class="row" style="margin: 10px;">

                                       <div class="col">
                                           <label for="user_email">Email</label>
                                           <input type="email" class="form-control" required id="user_email" name="user_email" onkeypress="keyEmail()">
                                           <div id="email-error" class="invalid-feedback">
                                               Email Anda Belum Diisi
                                           </div>
                                       </div>

                                   </div>

                                   <div class="row" style="margin: 10px;">

                                       <div class="col">
                                           <label for="user_phone_number">No.WhatsApp</label>
                                           <input type="text" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required id="user_phone_number" name="user_phone_number" onkeypress="keyPhoneNumber()">
                                           <div id="phone-number-error" class="invalid-feedback">
                                               No WhatsApp Anda Belum Diisi
                                           </div>
                                       </div>

                                   </div>


                                   <div class="row" style="margin: 10px;">
                                       <div class="col">
                                           <label for="user_address">Alamat Lengkap (Titik Lokasi yang dituju)</label>
                                           <textarea type="text" class="form-control" required id="user_address" name="user_address" onkeypress="keyAddress()"></textarea>
                                           <div id="address-error" class="invalid-feedback">
                                               Alamat Anda Belum Diisi
                                           </div>
                                       </div>
                                   </div>

                               </div>

                               <div class="col">
                                   <div class="row" style="margin: 10px;">
                                       <label for="user_password">Sandi</label>
                                       <input type="password" class="form-control" required id="user_password" name="user_password" onkeypress="keyPassword()">
                                       <div id="password-error" class="invalid-feedback">
                                           Sandi Anda Belum Diisi
                                       </div>
                                   </div>

                                   <div class="row" style="margin-left: 30px;">

                                       <input type="checkbox" class="form-check-input" onclick="password()" for="exampleCheck1">
                                       <label class="form-check-label" for="exampleCheck1">Tampilkan Sandi</label>

                                   </div>

                                   <div class="row" style="margin: 10px;">


                                       <label for="user_password_repeat">Ulang Sandi</label>
                                       <input type="password" class="form-control" required id="user_password_repeat" onkeypress="keyPasswordRepeat()">
                                       <div id="password-repeat-error" class="invalid-feedback">
                                           Ulang Sandi Anda Belum Diisi
                                       </div>

                                   </div>

                                   <div class="row" style="margin-left: 30px;">

                                       <input type="checkbox" class="form-check-input" onclick="passwordRepeat()" for="exampleCheck2">
                                       <label class="form-check-label" for="exampleCheck2">Tampilkan Ulang Sandi</label>

                                   </div>

                               </div>


                           </div>



                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" onclick="login()">Masuk</button>
                       <button type="submit" class="btn btn-primary">Daftar</button>
                   </div>
                   </form>
               </div>

               <!--Login-->
               <div class="modal-content" id="login" style="display: none;">

                   <div class="modal-header">
                       <h1 class="modal-title" id="exampleModalLabel">Silahkan Masuk</h1>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>

                   <div class="modal-body">
                       <form novalidate class="needs-validation">
                           <div class="row">
                               <div class="col">

                                   <div class="row" style="margin: 10px;">

                                       <div class="col">
                                           <label for="user_email_login">Email</label>
                                           <input type="email" class="form-control" required id="user_email_login" name="user_email_login" onkeypress="keyEmailLogin()">
                                           <div class="invalid-feedback" id="email-login-error">
                                               Email Anda Belum Diisi
                                           </div>
                                       </div>

                                   </div>

                                   <div class="row" style="margin: 10px;">

                                       <div class="col">
                                           <label for="user_password_login">Sandi</label>
                                           <input type="password" class="form-control" required id="user_password_login" name="user_password_login" onkeypress="keyPasswordLogin()">
                                           <div class="invalid-feedback" id="password-login-error">
                                               Sandi Anda Belum Diisi
                                           </div>
                                       </div>

                                   </div>

                                   <div class="row" style="margin-left: 45px;">

                                       <input type="checkbox" class="form-check-input" onclick="passwordLogin()" for="exampleCheck1">
                                       <label class="form-check-label" for="exampleCheck1">Tampilkan Sandi</label>

                                   </div>

                                   <div class="row" style="margin: 10px;">

                                       <div class="col">
                                           <a href="javascript:void(0);" onclick="forgot()">Tidak Ingat Sandi?</a>
                                       </div>

                                   </div>

                               </div>



                           </div>
                           <div class="modal-footer">
                               <button type="button" class="btn btn-secondary" onclick="register()">Daftar</button>
                               <button type="submit" class="btn btn-primary">Masuk</button>
                           </div>
                       </form>
                   </div>

               </div>
               <!-- Forgot -->
               <div class="modal-content" id="forgot" style="display: none;">

                   <div class="modal-header">
                       <h1 class="modal-title" id="exampleModalLabel">Lupa Sandi</h1>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>

                   <div class="modal-body">
                       <form novalidate class="needs-validation">
                           <div class="row">
                               <div class="col">

                                   <div class="row" style="margin: 10px;">

                                       <div class="col">
                                           <label for="user_email_forgot">Email</label>
                                           <input type="email" class="form-control" required id="user_email_forgot" name="user_email_forgot" onkeypress="keyEmailForgot()">
                                           <div class="invalid-feedback" id="email-forgot-error">
                                               Email Anda Belum Diisi
                                           </div>
                                       </div>

                                   </div>

                                   <div class="row" style="margin: 10px;">

                                       <div class="col">
                                           <a href="javascript:void(0);" onclick="login()">Ingat Sandi?</a>
                                       </div>

                                   </div>

                               </div>



                           </div>
                           <div class="modal-footer">
                               <button type="button" class="btn btn-secondary" onclick="register()">Daftar</button>
                               <button type="submit" class="btn btn-primary">Reset</button>
                           </div>
                       </form>
                   </div>

               </div>

           <?php
            } else {
            ?>
               <!-- Logout -->
               <div class="modal-content" id="logout" style="display: none;">

                   <div class="modal-header">
                       <h1 class="modal-title" id="exampleModalLabel">Mau Keluar?</h1>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>

                   <div class="modal-body">
                       <form action="<?= BASEURL ?>/account/logout">
                           <div class="row">
                               <div class="col">

                                   <div class="row" style="margin: 10px;">

                                       <div class="col">

                                           <h3>Konfirmasi jika mau keluar... nanti ke sini lagi ya</h3>

                                       </div>

                                   </div>



                               </div>



                           </div>
                           <div class="modal-footer">
                               <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Batal</button>
                               <button type="submit" class="btn btn-primary">Keluar</button>
                           </div>
                       </form>
                   </div>

               </div>

               <!-- Account -->

               <div class="modal-content" id="deleteOnAccount" style="display: none;">

                   <div class="modal-header">
                       <h1 class="modal-title" id="exampleModalLabel">Beneran mau dihapus?</h1>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>

                   <div class="modal-body">
                       <form action="<?= BASEURL ?>/account/logout">
                           <div class="row">
                               <div class="col">

                                   <div class="row" style="margin: 10px;">

                                       <div class="col">

                                           <h3>Konfirmasi jika dihapus seluruh data akun ini Anda akan hilang</h3>

                                       </div>

                                   </div>



                               </div>



                           </div>
                           <div class="modal-footer">
                               <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Jangan</button>
                               <button type="button" class="btn btn-primary" onclick="destroyThisAccount(<?= $_SESSION['user_account']['id']; ?>)">Ya Tetap Hapus</button>
                           </div>
                       </form>
                   </div>

               </div>

               <!-- Payment -->

               <div class="modal-content" id="payment" style="display: none;">

                   <div class="modal-header">
                       <h1 style="display:none" id="method"></h1>
                       <h1 class="modal-title" id="exampleModalLabel">Lakukan Pembayaran</h1>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <form novalidate class="needs-validation">
                   <div class="modal-body">
                       <div class="row" style="margin: 10px;">
                           <div class="col">
                               <label for="transaction_method"></label>
                               <select class="form-control" id="transaction_method" name="transaction_method" required onchange="changeMethod()">
                                   <option value="">Pilih Metode Pembayaran</option>
                                   <option value="Bayar di Tempat">Bayar ditempat (COD)</option>
                                   <option value="Dompet Digital">Dompet Digital</option>
                               </select>
                               <div class="invalid-feedback" id="transaction-method-error">
                                              
                               </div>

                           </div>
                       </div>

                    
                       <input type="hidden" class="form-control transaction-id" name="transaction_id">
                           <div class="row" style="display: none;" id="ewallet">
                               <div class="col">

                                   <div class="row" style="margin: 10px;">

                                       <div class="col">
                                           <label for="user_scan_qr_code">Lakukan Pindai kode QRIS di bawah ini</label>

                                       </div>

                                   </div>
                                   <div class="row" style="margin: 10px;">

                                       <div class="col">

                                           <img src="<?= BASEURL; ?>/images/qrcodecafe.png" width="50%" />
                                           <div class="invalid-feedback" id="transaction-qrcode-error">
                                             
                                           </div>
                                       </div>

                                   </div>
                                   <div class="row" style="margin: 10px;">

                                       <div class="col">
                                           <label for="transaction_image">Upload Bukti Pembayaran</label>
                                           <input type="file" class="form-control" required id="transaction_image" name="transaction_image">
                                          
                                           <div class="invalid-feedback" id="transaction-image-error">
                                               Belum Ada Bukti yang dilampirkan
                                           </div>
                                       </div>

                                   </div>


                               </div>
                           </div>
                           <div class="row" style="display: none;" id="cod">


                               <div class="col">
                                   <div class="row" style="margin: 10px;">

                                       <div class="col">
                                           <label for="user_cod">Tunggu di rumah saja, dan Pembayaran akan segera dilakukan bila Pesanan telah diterima</label>

                                       </div>

                                   </div>

                                   <div class="row" style="margin: 10px">
                                       <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_vivylat3.json" background="transparent" speed="1" style="width: 50%; text-align:center" loop autoplay></lottie-player>
                                      
                                   </div>

                               </div>

                           </div>
                           <div class="modal-footer">
                               <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="close">Nanti</button>
                               <button id="btn" type="submit" class="btn btn-primary">Proses Sekarang</button>
                           </div>
                       </form>



                   </div>


               </div>

               <!-- Alert -->
               <div class="modal-content" id="alert" style="display: none;">

                   <div class="modal-header">
                       <h1 class="modal-title" id="title"></h1>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>

                   <div class="modal-body">
                       <form action="<?= BASEURL ?>/transaction/delete">
                           <div class="row">
                               <div class="col">

                                   <div class="row" style="margin: 10px;">

                                       <div class="col">

                                           <h3 id="content">Membatalkan Pesanan ini akan menghapus seluruh data makanan yang sudah dipesan. </h3>

                                       </div>

                                   </div>



                               </div>



                           </div>
                           <div class="modal-footer">
                               <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Nanti</button>
                               <button type="submit" class="btn btn-danger">Proses</button>
                           </div>
                       </form>
                   </div>

               </div>

           <?php
            }
            ?>
           <!-- Searching -->
           <div class="modal-content" id="search" style="display: none;">

               <div class="modal-header">
                   <h1 class="modal-title" id="exampleModalLabel">Cari Menu yang Enak</h1>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>

               <div class="modal-body">
                   <form novalidate class="needs-validation">
                       <div class="row">
                           <div class="col">

                               <div class="row" style="margin: 10px;">

                                   <div class="col">
                                       <label for="user_search">Kata Kunci</label>
                                       <input type="email" class="form-control" required id="user_search" name="user_search" oninput="keyWordToSearch()">
                                       <div class="invalid-feedback" id="user-forgot-error">
                                           Kata Kunci
                                       </div>
                                   </div>

                               </div>

                               <div class="row" style="margin: 10px;">
                                   <ul id="row">

                                   </ul>





                               </div>

                           </div>



                       </div>

                   </form>
               </div>

           </div>
           <?php
            ?>
       </div>

   </div>    
