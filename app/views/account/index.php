<main>
    <section class="herobwa mt-5">
        <div class="container">
            <div class="row">
                <div class="col align-self-stretch">
                    <h1>
                        <center>Pengaturan Akun</center>
                    </h1>
                   
                </div>

            </div>
        </div>
    </section>
    <section class="herobwa mt-5">
        <div class="container">

            <form novalidate class="needs-validation">
                <div class="row" style="margin: 10px;">
                    <h1 id="user_action" style="display: none;">account</h1>
                    <div class="col">
                        <label for="user_name">Nama</label>
                        <input type="text" class="form-control" required id="user_name" name="user_name" value="<?= $data['row']['user_name'] ?>" onkeypress="keyName()">
                        <div id="username-error" class="invalid-feedback">
                            Nama Anda Belum Diisi
                        </div>
                    </div>


                </div>

                <div class="row" style="margin: 10px;">

                    <div class="col">
                        <label for="user_email">Email</label>
                        <input type="email" class="form-control" required id="user_email" name="user_email" value="<?= $data['row']['user_email'] ?>" onkeypress="keyEmail()" readonly>
                        <div id="email-error" class="invalid-feedback">
                            Email Anda Belum Diisi
                        </div>
                    </div>

                </div>

                <div class="row" style="margin: 10px;">

                    <div class="col">
                        <label for="user_phone_number">No.WhatsApp</label>
                        <input type="text" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required id="user_phone_number" name="user_phone_number" onkeypress="keyPhoneNumber()" value="<?= $data['row']['user_phone_number'] ?>">
                        <div id="phone-number-error" class="invalid-feedback">
                            No WhatsApp Anda Belum Diisi
                        </div>
                    </div>

                </div>


                <div class="row" style="margin: 10px;">
                    <div class="col">
                        <label for="user_address">Alamat Lengkap (Titik Lokasi yang dituju)</label>
                        <textarea type="text" class="form-control" required id="user_address" name="user_address" onkeypress="keyAddress()"><?= $data['row']['user_address'] ?></textarea>
                        <div id="address-error" class="invalid-feedback">
                            Alamat Anda Belum Diisi
                        </div>
                    </div>
                </div>

                <div class="row" style="margin: 10px;">
                    <div class="col">
                        <label for="user_password">Sandi</label>
                        <input type="password" class="form-control" required id="user_password" name="user_password" onkeypress="keyPassword()" value="<?= $data['row']['user_password'] ?>">
                        <div id="password-error" class="invalid-feedback">
                            Sandi Anda Belum Diisi
                        </div>

                    </div>

                </div>

                <div class="row" style="margin-left: 30px;">
                    <div class="col">
                        <input type="checkbox" class="form-check-input" onclick="password()" for="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Tampilkan Sandi</label>

                    </div>

                </div>

                <div class="row" style="margin: 10px;">

                    <div class="col">
                        <label for="user_password_repeat">Ulang Sandi</label>
                        <input type="password" class="form-control" required id="user_password_repeat" onkeypress="keyPasswordRepeat()" value="<?= $data['row']['user_password'] ?>">
                        <div id="password-repeat-error" class="invalid-feedback">
                            Ulang Sandi Anda Belum Diisi
                        </div>

                    </div>

                </div>

                <div class="row" style="margin-left: 30px;">
                    <div class="col">
                        <input type="checkbox" class="form-check-input" onclick="passwordRepeat()" for="exampleCheck2">
                        <label class="form-check-label" for="exampleCheck2">Tampilkan Ulang Sandi</label>
                    </div>


                </div>

                <br>
                <div class="row" style="text-align: center;">
                    <div class="col">
                        <button type="submit" class="btn btn-warning" onclick="updateOnAccount()">Ubah Data Akun</button>
                        <button type="button" class="btn btn-danger" onclick="deleteOnAccount()">Hapus Akun</button>
                    </div>

                </div>

        </div>



        </form>
        </div>
        </div>

    </section>
 

</main>