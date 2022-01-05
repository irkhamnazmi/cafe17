// (function () {


//   'use strict';
//   window.addEventListener('load', function () {
//     // Fetch all the forms we want to apply custom Bootstrap validation styles to
//     var forms = document.getElementsByClassName('needs-validation');


//     // Loop over them and prevent submission
//     var validation = Array.prototype.filter.call(forms, function (form) {
//       form.addEventListener('submit', function (event) {
//         var check = $('#user_action').html();
//         if (check == 'register') {

//           // const id = $(this).data('id');
        
//           var name = $('#user_name').val();
//           var emailR = $('#user_email').val();
//           var phoneNumber = $('#user_phone_number').val();
//           var address = $('#user_address').val();
//           var password = $('#user_password').val();
//           var passwordRepeat = $('#user_password_repeat').val();

//           if (name == '') {
//             event.preventDefault();
//             event.stopPropagation();
//             $('#user_name').removeClass("form-control").addClass("form-control is-invalid");
//             // $('#username-error').text(' ');
//           }
//           if (emailR == '') {
//             event.preventDefault();
//             event.stopPropagation();
//             $('#user_email').removeClass("form-control").addClass("form-control is-invalid");
//             // $('#email-error').text(' ');
//           } 
//           else if (!validateEmail(emailR)) {
//             event.preventDefault();
//             event.stopPropagation();
//             $('#user_email').removeClass("form-control").addClass("form-control is-invalid");
//             $('#email-error').text('Email Anda Tidak Valid');
//           }

//           if (phoneNumber == '') {
//             event.preventDefault();
//             event.stopPropagation();
//             $('#user_phone_number').removeClass("form-control").addClass("form-control is-invalid");
     
//           }
//           if (address == '') {
//             event.preventDefault();
//             event.stopPropagation();
//             $('#user_address').removeClass("form-control").addClass("form-control is-invalid");
      
//           }
//           if (password == '') {
//             event.preventDefault();
//             event.stopPropagation();
//             $('#user_password').removeClass("form-control").addClass("form-control is-invalid");
        
//           }
//           if (passwordRepeat == '') {
//             event.preventDefault();
//             event.stopPropagation();
//             $('#user_password_repeat').removeClass("form-control").addClass("form-control is-invalid");
           
//           }

//           else {
           
//             event.preventDefault();
//             event.stopPropagation();
          
//             $.ajax({
//               url: baseurl + '/account/checking',
//               data: {
//                 user_email: emailR
//               },
//               method: 'post',
//               dataType: 'json',
//               success: function (_data) {
//                 $('#user_email').removeClass("form-control").addClass("form-control is-invalid");
//                 $('#email-error').text('sdasd');
                
//               }
//             });

//           }


  


//         }
//         if(check == 'login'){
//             var emailL = $('#user_email_login').val();
//             var password = $('#user_password_login').val();
           
//             if (emailL == '') {
//               event.preventDefault();
//               event.stopPropagation();
//               $('#user_email_login').removeClass("form-control").addClass("form-control is-invalid");
//               $('#email-login-error').text('Email Anda Belum diisi');
//             }
//             else if (!validateEmail(emailL)) {
//               event.preventDefault();
//               event.stopPropagation();
//               $('#user_email_login').removeClass("form-control").addClass("form-control is-invalid");
//               $('#email-login-error').text('Email Anda Tidak Valid');
//             }
//             if(password == ''){
//               event.preventDefault();
//               event.stopPropagation();
//               $('#user_password_login').removeClass("form-control").addClass("form-control is-invalid");
//               $('#password-login-error').text('Password Anda Belum diisi');
//             }

//            else {
//             event.preventDefault();
//             event.stopPropagation();
//             $('#user_email_login').removeClass("form-control").addClass("form-control is-invalid");
//             $('#email-login-error').text(emailL);
//             }

          
//         } if(check == 'forgot'){
//           var emailF = $('#user_email_forgot').val();
//           if (emailF == '') {
//             event.preventDefault();
//             event.stopPropagation();
//             $('#user_email_forgot').removeClass("form-control").addClass("form-control is-invalid");
//             $('#email-forgot-error').text('Email Anda Belum diisi');
//           }
//           else{
//             if (!validateEmail(emailF)) {
//               event.preventDefault();
//               event.stopPropagation();
//               $('#user_email_forgot').removeClass("form-control").addClass("form-control is-invalid");
//               $('#email-forgot-error').text('Email Anda Tidak Valid');
//             }else{
//             // event.preventDefault();
//             // event.stopPropagation();
//             // $.ajax({
//             //   url: baseurl + '/account/checking',
//             //   data: {
//             //     user_email: emailF
//             //   },
//             //   method: 'post',
//             //   dataType: 'json',
//             //   success: function (data) {
                

//             //       $('#user_email').removeClass("form-control").addClass("form-control is-invalid");
//             //       $('#email-error').text(data.user_email);
                


//             //   }
//             // });

            
          
//           }
//           }
//         } 

//       }, false);
//     });
//   }, false);
// })();


// function add() {
//   var price = $('#menu_price').val();
//   var txtQty = $('#transaction_qty').val();
//   var qty = 1 + parseInt(txtQty);
//   var subtotal = qty * parseInt(price);


//   $('#txt_qty').html(qty);
//   $('#transaction_qty').val(qty);
//   $('#txt_subtotal').html('Rp ' + subtotal + ',-');
//   $('#transaction_subtotal').val(subtotal);


// }

// function reduce() {
//   var price = $('#menu_price').val();
//   var txtQty = $('#transaction_qty').val();


//   if (parseInt(txtQty) == 1) {
//     $('#txt_subtotal').html('Rp ' + price + ',-');
//     $('#transaction_subtotal').val(price);
//   } else {
//     var qty = parseInt(txtQty) - 1;
//     var subtotal = qty * parseInt(price);

//     $('#txt_qty').html(qty);
//     $('#transaction_qty').val(qty);

//     $('#txt_subtotal').html(subtotal);
//     $('#txt_subtotal').html('Rp ' + subtotal + ',-');
//   }
// }

// function validateEmail(email) {
//   const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//   return re.test(email);
// }

// function keyName() {
//   $('#user_name').removeClass("form-control is-invalid").addClass("form-control");
// }

// function keyEmail() {
//   $('#user_email').removeClass("form-control is-invalid").addClass("form-control");
// }
// function keyEmailLogin() {
//   $('#user_email_login').removeClass("form-control is-invalid").addClass("form-control");
// }
// function keyEmailForgot() {
//   $('#user_email_forgot').removeClass("form-control is-invalid").addClass("form-control");
// }

// function keyPhoneNumber() {
//   $('#user_phone_number').removeClass("form-control is-invalid").addClass("form-control");
// }

// function keyAddress() {
//   $('#user_address').removeClass("form-control is-invalid").addClass("form-control");
// }

// function keyPassword() {
//   $('#user_password').removeClass("form-control is-invalid").addClass("form-control");
// }
// function keyPasswordLogin() {
//   $('#user_password_login').removeClass("form-control is-invalid").addClass("form-control");
// }

// function keyPasswordRepeat() {
//   $('#user_password_repeat').removeClass("form-control is-invalid").addClass("form-control");
// }


