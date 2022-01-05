   <!--Footer-->
   <footer>
       <section class="herobwa-black mt-5">
           <div class="container">
               <!-- <h1>Cerita Cafe 17</h1> -->
               <br>

               <div class="row justify-content-md-center">
                   <div class="col-md-auto">
                       <div class="card" style="background-color: transparent; border: transparent;">

                           <div class="col d-flex justify-content-center">
                               <span class="iconify" data-inline="false" data-icon="akar-icons:instagram-fill" style="color: #ffffff; font-size: 36px;"></span>
                           </div>


                           <div class="card-body" style="text-align: center;">
                               <a class="link" href="https://www.instagram.com/cafe17.purwokerto/">@cafe17.purwokerto</a>

                           </div>
                       </div>
                   </div>
                   <div class="col-md-auto">
                       <div class="card" style="background-color: transparent; border: transparent;">

                           <div class="col d-flex justify-content-center">
                               <span class="iconify" data-inline="false" data-icon="ant-design:facebook-outlined" style="color: #ffffff; font-size: 36px;"></span>

                           </div>


                           <div class="card-body" style="text-align: center;">
                               <a class="link" href="https://www.facebook.com/cafe17.purwokerto/">@cafe17.purwokerto</a>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-auto">
                       <div class="card" style="background-color: transparent; border: transparent;">

                           <div class="col d-flex justify-content-center">
                               <span class="iconify" data-inline="false" data-icon="bi:whatsapp" style="color: #ffffff; font-size: 36px;"></span>


                           </div>


                           <div class="card-body" style="text-align: center;">
                               <a class="link" href="https://wa.me/6285725003400">+62 857-2500-3400</a>
                           </div>
                       </div>
                   </div>
               </div>

               <br>

               <p style="text-align: center;">© 2021 Cafe 17 Purwokerto</p>


           </div>
       </section>

   </footer>




   <!-- Modal Dialog -->
   <div class="modal fade" id="formModal" role="dialog" data-backdrop="static" data-keyboard="false" tabindex="-1">
       <div class="modal-dialog modal-xl" role="document">
           <h1 id="user_action" style="display: none;"></h1>
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

               <div class="modal-body">
                   <div class="row" style="margin: 10px;">
                       <div class="col">
                           <div class="dropdown">
                               <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   Metode
                               </button>
                               <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                   <a class="dropdown-item" href="#" onclick="cod()">Bayar ditempat (COD)</a>
                                   <a class="dropdown-item" href="#" onclick="ewallet()">Dompet Digital</a>


                               </div>
                           </div>

                       </div>
                   </div>

                   <form novalidate class="needs-validation">

                       <div class="row" style="display: none;" id="ewallet">
                           <div class="col">

                               <div class="row" style="margin: 10px;">

                                   <div class="col">
                                       <label for="user_scan_qr_code">Scan kode QRIS</label>

                                   </div>

                               </div>
                               <div class="row" style="margin: 10px;">

                                   <div class="col">

                                       <img src="<?= BASEURL; ?>/images/qrcodecafe.png" width="50%" />
                                       <div class="invalid-feedback" id="email-login-error">
                                           Belum Ada Bukti yang dilampirkan
                                       </div>
                                   </div>

                               </div>
                               <div class="row" style="margin: 10px;">

                                   <div class="col">
                                       <label for="transaction_foto">Upload Bukti Pembayaran</label>
                                       <input type="file" class="form-control" required id="transaction_foto" name="transaction_foto">
                                       <div class="invalid-feedback" id="email-login-error">
                                           Belum Ada Bukti yang dilampirkan
                                       </div>
                                   </div>

                               </div>



                               <!-- <div class="row" style="margin-left: 45px;">

                                   <input type="checkbox" class="form-check-input"  for="exampleCheck1">
                                   <label class="form-check-label" for="exampleCheck1">Terima dan disetujui</label>

                               </div> -->



                           </div>
                       </div>
                       <div class="row" style="display: block;" id="cod">


                           <div class="col">
                               <div class="row" style="margin: 10px;">

                                   <div class="col">
                                       <label for="user_cod">Bayar di tempat (COD)</label>

                                   </div>

                               </div>

                               <div class="row" style="margin: 10px">
                                   <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_vivylat3.json" background="transparent" speed="1" style="width: 50%; text-align:center" loop autoplay></lottie-player>
                               </div>

                           </div>

                       </div>
                       <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="close">Nanti</button>
                           <button type="submit" class="btn btn-primary">Proses Sekarang</button>
                       </div>
                   </form>



               </div>









           </div>

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

                               <!-- <div class="col mb-4">
                                       <div class="card" style="width:200px; ">
                                           <div class="card-body">
                                           <img  alt="Card image" height="150" style="width:100%; padding: 10px;" src="<?= BASEURL_ADMIN . '/uploads/images/' . 'mieayam.jpg' ?>">
                                               <h4 class="card-text text-center" id="menu_name"></h4>
                                           </div>
                                           <div class="card-footer">
                                           <div class="col-md-12 text-center">
                                                   <button type="button" onclick="location.href='<?= BASEURL; ?>/menu/order/<?= $title = str_replace(' ', '-', $row['menu_id'] . ' ' . $row['menu_name']); ?>'" class="btn btn-primary">Pesan</button>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                 <div class="col mb-4">
                                       <div class="card" style="width:200px; ">
                                           <div class="card-body">
                                           <img  alt="Card image" height="150" style="width:100%; padding: 10px;" src="<?= BASEURL_ADMIN . '/uploads/images/' . 'mieayam.jpg' ?>">
                                               <h4 class="card-text text-center" id="menu_name"></h4>
                                           </div>
                                           <div class="card-footer">
                                           <div class="col-md-12 text-center">
                                                   <button type="button" onclick="location.href='<?= BASEURL; ?>/menu/order/<?= $title = str_replace(' ', '-', $row['menu_id'] . ' ' . $row['menu_name']); ?>'" class="btn btn-primary">Pesan</button>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                  -->
                                  
                                

                               </div>

                           </div>



                       </div>
                       <!-- <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" onclick="register()">Daftar</button>
                           <button type="submit" class="btn btn-primary">Reset</button>
                       </div> -->
                   </form>
               </div>

           </div>

           


       </div>

       <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
       <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
       <script type="text/javascript" src="<?= BASEURL; ?>/js/bootstrap.js"></script>

       <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>



       <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script> -->
       <!-- <script  type="text/javascript" src="https://unpkg.com/@popperjs/core@2"></script> -->
       <script src="<?= BASEURL; ?>/js/main.js"></script>


       <!-- <script type="text/javascript" src="<?= BASEURL; ?>/js/formValidate.js"></script> -->
       <script>
           var baseurl = "<?php echo BASEURL ?>";
           var baseUrlAdmin = "<?php echo BASEURL_ADMIN; ?>";
       </script>


       <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>



       </body>

       </html>