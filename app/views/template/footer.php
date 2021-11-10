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
   <div class="modal fade" id="formModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-xl" role="document">


           <div class="modal-content" id="register">

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
                                       <input type="text" class="form-control" required id="user_name" name="user_name">
                                       <div class="invalid-feedback">
                                           Nama Anda Belum Diisi
                                       </div>
                                   </div>


                               </div>

                               <div class="row" style="margin: 10px;">

                                   <div class="col">
                                       <label for="user_email">Email</label>
                                       <input type="email" class="form-control" required id="user_email" name="user_email">
                                       <div class="invalid-feedback">
                                           Email Anda Belum Diisi
                                       </div>
                                   </div>

                               </div>

                               <div class="row" style="margin: 10px;">

                                   <div class="col">
                                       <label for="user_phone_number">No.WhatsApp</label>
                                       <input type="text" class="form-control" required id="user_phone_number" name="user_phone_number">
                                       <div class="invalid-feedback">
                                           No WhatsApp Anda Belum Diisi
                                       </div>
                                   </div>

                               </div>


                               <div class="row" style="margin: 10px;">
                                   <div class="col">
                                       <label for="user_address">Alamat Lengkap</label>
                                       <textarea type="text" class="form-control" required id="user_address" name="user_address"></textarea>
                                       <div class="invalid-feedback">
                                           Alamat Anda Belum Diisi
                                       </div>
                                   </div>



                               </div>


                               

                           </div>

                           <div class="col">
                                <div class="row" style="margin: 10px;">
                                <label for="user_password">Sandi</label>
                                        <input type="password" class="form-control" required id="user_password" name="user_password" >
                                        <div class="invalid-feedback">
                                            Sandi Anda Belum Diisi
                                        </div>
                                </div>

                                <div class="row" style="margin-left: 30px;">
                                    
                                    <input type="checkbox" class="form-check-input" onclick="password()" for="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Tampilkan Sandi</label>
                            
                                 </div>
                                
                                <div class="row" style="margin: 10px;">
                                    

                                    <label for="user_password_repeat">Ulang Sandi</label>
                                        <input type="password" class="form-control" required id="user_password_repeat">
                                        <div class="invalid-feedback">
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

           <div class="modal-content" id="login">

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
                                       <label for="user_email">Email</label>
                                       <input type="email" class="form-control" required id="user_email" name="user_email">
                                       <div class="invalid-feedback">
                                           Email Anda Belum Diisi
                                       </div>
                                   </div>

                               </div>

                               <div class="row" style="margin: 10px;">

                                   <div class="col">
                                       <label for="user_password">Sandi</label>
                                       <input type="password" class="form-control" required id="user_password" name="user_password">
                                       <div class="invalid-feedback">
                                           Sandi Anda Belum Diisi
                                       </div>
                                   </div>

                               </div>

                               <div class="row" style="margin: 10px;">

                                   <div class="col">
                                       <a href="#" onclick="forgot()">Tidak Ingat Sandi?</a>
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

       </div>






   </div>
   </div>


   <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
   <script type="text/javascript" src="<?= BASEURL; ?>/js/bootstrap.js"></script>

   <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>

   <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script> -->

   <script type="text/javascript" src="https://unpkg.com/@popperjs/core@2"></script>
   <script src="<?= BASEURL; ?>/js/main.js"></script>

   <!-- BASEURL FOR JS -->
   <script src="<?= BASEURL; ?>/js/jquery.js"></script>
   <script src="<?= BASEURL; ?>/js/formValidate.js"></script>


   </body>

   </html>