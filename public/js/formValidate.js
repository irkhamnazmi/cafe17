(function () {


  'use strict';
  window.addEventListener('load', function () {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');


    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function (form) {
      form.addEventListener('submit', function (event) {
        var check = $('#user_action').html();

        switch (check) {
          case 'register':
            var name = $('#user_name').val();
            var email = $('#user_email').val();
            var phoneNumber = $('#user_phone_number').val();
            var address = $('#user_address').val();
            var password = $('#user_password').val();
            var passwordRepeat = $('#user_password_repeat').val();

            if (name == '') {
              event.preventDefault();
              event.stopPropagation();
              $('#user_name').removeClass("form-control").addClass("form-control is-invalid");
              // $('#username-error').text(' ');
            }
            if (email == '') {
              event.preventDefault();
              event.stopPropagation();
              $('#user_email').removeClass("form-control").addClass("form-control is-invalid");
              // $('#email-error').text(' ');
            } else if (!validateEmail(email)) {
              event.preventDefault();
              event.stopPropagation();
              $('#user_email').removeClass("form-control").addClass("form-control is-invalid");
              $('#email-error').text('Email Anda Tidak Valid');
            }

            if (phoneNumber == '') {
              event.preventDefault();
              event.stopPropagation();
              $('#user_phone_number').removeClass("form-control").addClass("form-control is-invalid");

            }
            if (address == '') {
              event.preventDefault();
              event.stopPropagation();
              $('#user_address').removeClass("form-control").addClass("form-control is-invalid");

            }
            if (password == '') {
              event.preventDefault();
              event.stopPropagation();
              $('#user_password').removeClass("form-control").addClass("form-control is-invalid");

            }
            if (passwordRepeat == '') {
              event.preventDefault();
              event.stopPropagation();
              $('#user_password_repeat').removeClass("form-control").addClass("form-control is-invalid");

            } else if (passwordRepeat != password) {
              event.preventDefault();
              event.stopPropagation();
              $('#user_password_repeat').removeClass("form-control").addClass("form-control is-invalid");
              $('#password-repeat-error').text('Ulang Sandi tidak sama dengan Sandi Anda');

            } else {

              event.preventDefault();
              event.stopPropagation();


              $.ajax({
                url: baseurl + '/account/checking',
                data: {
                  user_email: email
                },
                method: 'post',
                dataType: 'json',
                success: function (checking) {
                  // $('#user_email').removeClass("form-control").addClass("form-control is-invalid");
                  // $('#email-error').text(data.user_email);

                  if (checking != '') {
                    $('#user_email').removeClass("form-control").addClass("form-control is-invalid");
                    $('#email-error').text('Email Anda sudah terdaftar');
                  } else {
                    $.ajax({
                      url: baseurl + '/account/register',
                      data: {
                        user_name: name,
                        user_email: email,
                        user_phone_number: phoneNumber,
                        user_address: address,
                        user_password: password

                      },
                      method: 'post',
                      dataType: 'json',
                      success: function (register) {
                        // $('#user_email').removeClass("form-control").addClass("form-control is-invalid");
                        // $('#email-error').text(data.user_email);

                        console.log(register);
                        window.location.href = baseurl;
                        toastr.success('Proses Pendaftaran Selesai');

                        $.ajax({
                          url: baseurl + '/email',
                          data: {
                            data: register
                          },
                          method: 'POST',
                          dataType: 'json',
                          success: function (response) {

                          }
                        });

                      }
                    });
                  }

                }
              });

            }

            break;
          case 'login':
            var email = $('#user_email_login').val();
            var password = $('#user_password_login').val();

            if (email == '') {
              event.preventDefault();
              event.stopPropagation();
              $('#user_email_login').removeClass("form-control").addClass("form-control is-invalid");
              $('#email-login-error').text('Email Anda Belum diisi');
            } else if (!validateEmail(email)) {
              event.preventDefault();
              event.stopPropagation();
              $('#user_email_login').removeClass("form-control").addClass("form-control is-invalid");
              $('#email-login-error').text('Email Anda Tidak Valid');
            }
            if (password == '') {
              event.preventDefault();
              event.stopPropagation();
              $('#user_password_login').removeClass("form-control").addClass("form-control is-invalid");
              $('#password-login-error').text('Password Anda Belum diisi');
            } else {
              event.preventDefault();
              event.stopPropagation();


              $.ajax({
                url: baseurl + '/account/validation',
                data: {
                  user_email: email,
                  user_password: password
                },
                method: 'POST',
                dataType: 'json',
                success: function (valid) {

                  if (valid == '') {
                    $('#user_email_login').removeClass("form-control").addClass("form-control is-invalid");
                    $('#user_password_login').removeClass("form-control").addClass("form-control is-invalid");
                    $('#email-login-error').text('Mungkin email anda kurang tepat');
                    $('#password-login-error').text(' Atau Mungkin password anda kurang tepat');
                  } else {
                    $.ajax({
                      url: baseurl + '/account/login',
                      data: {
                        user_id: valid.user_id,
                        user_name: valid.user_name
                      },
                      method: 'POST',
                      success: function (data) {

                        window.location.href = baseurl;

                        console.log(data);
                      }
                    });

                  }

                  console.log(valid);
                }
              });


            }

            break;
          case 'forgot':

            var email = $('#user_email_forgot').val();
            if (email == '') {
              event.preventDefault();
              event.stopPropagation();
              $('#user_email_forgot').removeClass("form-control").addClass("form-control is-invalid");
              $('#email-forgot-error').text('Email Anda Belum diisi');
            } else if (!validateEmail(email)) {
              event.preventDefault();
              event.stopPropagation();
              $('#user_email_forgot').removeClass("form-control").addClass("form-control is-invalid");
              $('#email-forgot-error').text('Email Anda Tidak Valid');
            } else {
              event.preventDefault();
              event.stopPropagation();
              $.ajax({
                url: baseurl + '/account/checking',
                data: {
                  user_email: email
                },
                method: 'post',
                dataType: 'json',
                success: function (checked) {
                  if (checked == '') {
                    $('#user_email_forgot').removeClass("form-control").addClass("form-control is-invalid");

                    $('#email-login-forgot').text('Email Anda Belum terdaftar');

                  } else {
                    $.ajax({
                      url: baseurl + '/account/reset',
                      data: {
                        user_id: checked.user_id,
                        user_email: checked.user_email
                      },
                      method: 'POST',
                      dataType: 'json',
                      success: function (data) {
                        console.log(data);
                        window.location.href = baseurl;
                        toastr.success('Reset Sandi Telah Terkirim cek email Anda Sekarang');
                        $.ajax({
                          url: baseurl + '/email',
                          data: {
                            data: data
                          },
                          method: 'POST',
                          dataType: 'json',
                          success: function (response) {

                          }
                        });

                      }
                    });

                  }


                }
              });



            }
            break;
          case 'account':
            var name = $('#user_name').val();
            var email = $('#user_email').val();
            var phoneNumber = $('#user_phone_number').val();
            var address = $('#user_address').val();
            var password = $('#user_password').val();
            var passwordRepeat = $('#user_password_repeat').val();

            if (name == '') {
              event.preventDefault();
              event.stopPropagation();
              $('#user_name').removeClass("form-control").addClass("form-control is-invalid");
              // $('#username-error').text(' ');
            }
            if (email == '') {
              event.preventDefault();
              event.stopPropagation();
              $('#user_email').removeClass("form-control").addClass("form-control is-invalid");
              // $('#email-error').text(' ');
            } else if (!validateEmail(email)) {
              event.preventDefault();
              event.stopPropagation();
              $('#user_email').removeClass("form-control").addClass("form-control is-invalid");
              $('#email-error').text('Email Anda Tidak Valid');
            }

            if (phoneNumber == '') {
              event.preventDefault();
              event.stopPropagation();
              $('#user_phone_number').removeClass("form-control").addClass("form-control is-invalid");

            }
            if (address == '') {
              event.preventDefault();
              event.stopPropagation();
              $('#user_address').removeClass("form-control").addClass("form-control is-invalid");

            }
            if (password == '') {
              event.preventDefault();
              event.stopPropagation();
              $('#user_password').removeClass("form-control").addClass("form-control is-invalid");

            }
            if (passwordRepeat == '') {
              event.preventDefault();
              event.stopPropagation();
              $('#user_password_repeat').removeClass("form-control").addClass("form-control is-invalid");

            } else if (passwordRepeat != password) {
              event.preventDefault();
              event.stopPropagation();
              $('#user_password_repeat').removeClass("form-control").addClass("form-control is-invalid");
              $('#password-repeat-error').text('Ulang Sandi tidak sama dengan Sandi Anda');

            } else {

              event.preventDefault();
              event.stopPropagation();
              // var x = name+email+phoneNumber+address+password;
              // console.log(x);


              $.ajax({
                url: baseurl + '/account/update_account',
                data: {

                  user_name: name,
                  user_email: email,
                  user_phone_number: phoneNumber,
                  user_address: address,
                  user_password: password
                },
                method: 'POST',
                dataType: 'json',
                success: function (data) {
                  console.log(data);
                  window.location.href = baseurl + '/account/';


                }
              });


            }
            break;
          case 'payment':
            

            var transaction_method = $('#transaction_method').val();
            // var transaction_id = $('.transaction-id').val();
            if(transaction_method == ""){
              event.preventDefault();
              event.stopPropagation();
              $('#transaction_method').removeClass("form-control").addClass("form-control is-invalid");
              $('#transaction-method-error').text(' Ups metodenya belum dipilih');
            }
            else{
                if(transaction_method == "Dompet Digital"){
                  var image = $("#transaction_image");
                  if(image.val() == ""){
                    event.preventDefault();
                    event.stopPropagation();
                    $('#transaction_image').removeClass("form-control").addClass("form-control is-invalid");
                    $('transaction-image-error').text('Belum melampirkan bukti pembayaran');
                  }
                }
                var delayInMilliseconds = 5000; //1 second

                setTimeout(function() {
                  toastr.success('Pesanan ini sedang diproses');
                
                }, delayInMilliseconds);
                      
               
            }
            

            // var fd = new FormData();
            
            // if (transaction_method == "") {
            //   $('#transaction_method').removeClass("form-control").addClass("form-control is-invalid");
            //   $('#transaction-method-error').text(' Ups metodenya belum dipilih');
            // }
            // if (transaction_method == 'Dompet Digital') {
            
            //   var image = $("#transaction_image");
            //   fd.append('file',image[0].files);
            //   fd.append('transaction_id',transaction_id);
            //   fd.append('transaction_method',transaction_method);
            //   // console.log(image[0].files);
            //   // var imageFile = $("#transaction_image").prop("files")[0];
            //   // var form_data = new FormData();                  // Creating object of FormData class
            //   // form_data.append("file", imageFile)
             
            //   if (image.val() == '') {
            //     $('#transaction_image').removeClass("form-control").addClass("form-control is-invalid");
            //     $('transaction-image-error').text('Belum melampirkan bukti pembayaran');
            //   } else{
            //     $.ajax({
            //       url: baseurl + '/transaction/payment_process',
            //       data: fd,
            //       method: 'POST',
            //       enctype: 'multipart/form-data',
            //       contentType: false,
            //       processData: false,
            //       beforeSend: function () {
            //         toastr.success('Pesanan ini berhasil diproses');
            //       },
            //       success: function (data) {
                   
            //         console.log(data);
            //         // window.location.href = baseurl + '/transaction/payment';
  
  
            //       }
            //     });
            //   }

            


            // } else {

           
            // }

            break;

        }

        // if (check == 'register') {

        //   // const id = $(this).data('id');






        // }
        // if (check == 'login') {


        // }
        // if (check == 'forgot') {

        // }

        // if(check == 'account'){


        // }

        // if(check == 'payment'){


        // }

      }, false);
    });
  }, false);
})();