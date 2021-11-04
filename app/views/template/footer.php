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
                                <span class="iconify" data-inline="false" data-icon="akar-icons:instagram-fill"
                                    style="color: #ffffff; font-size: 36px;"></span>
                            </div>


                            <div class="card-body" style="text-align: center;">
                                <a class="link"
                                    href="https://www.instagram.com/cafe17.purwokerto/">@cafe17.purwokerto</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-auto">
                        <div class="card" style="background-color: transparent; border: transparent;">

                            <div class="col d-flex justify-content-center">
                                <span class="iconify" data-inline="false" data-icon="ant-design:facebook-outlined"
                                    style="color: #ffffff; font-size: 36px;"></span>

                            </div>


                            <div class="card-body" style="text-align: center;">
                                <a class="link"
                                    href="https://www.facebook.com/cafe17.purwokerto/">@cafe17.purwokerto</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-auto">
                        <div class="card" style="background-color: transparent; border: transparent;">

                            <div class="col d-flex justify-content-center">
                                <span class="iconify" data-inline="false" data-icon="bi:whatsapp"
                                    style="color: #ffffff; font-size: 36px;"></span>


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


            <div class="modal-content" id="signup">

                <div class="modal-header">
                    <h1 class="modal-title" id="exampleModalLabel">Pelanggan Baru</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col">
                                <div class="row" style="margin: 10px;">

                                    <div class="col">
                                        <label>Nama</label>
                                        <input type="text" class="form-control">
                                    </div>

                                </div>

                                <div class="row" style="margin: 10px;">

                                    <div class="col">
                                        <label>Email</label>
                                        <input type="email" class="form-control">
                                    </div>

                                </div>

                                <div class="row" style="margin: 10px;">

                                    <div class="col">
                                        <label>No.WhatsApp</label>
                                        <input type="text" class="form-control">
                                    </div>

                                </div>

                            </div>

                            <div class="col">
                                <div class="row" style="margin: 10px;">

                                    <div class="col">
                                        <label>Sandi</label>
                                        <input type="password" class="form-control">
                                    </div>

                                </div>

                                <div class="row" style="margin: 10px;">

                                    <div class="col">
                                        <label>Ulang Sandi</label>
                                        <input type="password" class="form-control">
                                    </div>

                                </div>


                            </div>


                        </div>

                        <div class="row" style="margin: 10px;">

                            <div class="col">
                                <label>Alamat Lengkap</label>
                                <textarea type="text" class="form-control"></textarea>
                            </div>

                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="login()">Masuk</button>
                    <button type="button" class="btn btn-primary">Daftar</button>
                </div>
            </div>

            <div class="modal-content" id="login">

                <div class="modal-header">
                    <h1 class="modal-title" id="exampleModalLabel">Silahkan Masuk</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col">

                                <div class="row" style="margin: 10px;">

                                    <div class="col">
                                        <label>Email</label>
                                        <input type="email" class="form-control">
                                    </div>

                                </div>

                                <div class="row" style="margin: 10px;">

                                    <div class="col">
                                        <label>Sandi</label>
                                        <input type="password" class="form-control">
                                    </div>

                                </div>

                            </div>


                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="signup()">Daftar</button>
                    <button type="button" class="btn btn-primary">Masuk</button>
                </div>
            </div>

        </div>

    </div>






    </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?= BASEURL; ?>/js/bootstrap.js"></script>

    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>

    <script  type="text/javascript" src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="<?= BASEURL; ?>/js/main.js"></script>

    <!-- BASEURL FOR JS -->
    <script>var userId = "<? echo $_SESSION['user_id'] ?>";</script>
    <script src="<?= BASEURL; ?>/js/formValidate.js"></script>


</body>

</html>