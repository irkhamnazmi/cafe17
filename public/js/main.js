function login() {
  $('#register').css('display', 'none');
  $('#login').css('display', 'block');
  $('#forgot').css('display', 'none');
  $('#logout').css('display', 'none');
  $('#user_action').html('login');
  $('#payment').css('display','none');
  $('#search').css('display','none');
}


function register() {
  $('#register').css('display', 'block');
  $('#login').css('display', 'none');
  $('#forgot').css('display', 'none');
  $('#logout').css('display', 'none');
  $('#user_action').html('register');
  $('#payment').css('display','none');
  $('#search').css('display','none');

}

function forgot() {
  $('#register').css('display', 'none');
  $('#login').css('display', 'none');
  $('#forgot').css('display', 'block');
  $('#logout').css('display', 'none');
  $('#user_action').html('forgot');
  $('#payment').css('display','none');
  $('#search').css('display','none');

}

function logout() {
  $('#register').css('display', 'none');
  $('#login').css('display', 'none');
  $('#forgot').css('display', 'none');
  $('#logout').css('display', 'block');
  $('#deleteOnAccount').css('display', 'none');
  $('#payment').css('display','none');
  $('#search').css('display','none');
 

}

function searching(){
 
  $('#register').css('display', 'none');
  $('#login').css('display', 'none');
  $('#forgot').css('display', 'none');
  $('#logout').css('display', 'none');
  $('#deleteOnAccount').css('display', 'none');
  $('#payment').css('display','none');
  $('#search').css('display','block');
 
}

function account() {
  window.location.href = baseurl + "/account";
}

function deleteOnAccount(){
  $('#formModal').modal();
  $('#register').css('display', 'none');
  $('#login').css('display', 'none');
  $('#forgot').css('display', 'none');
  $('#logout').css('display', 'none');
  $('#deleteOnAccount').css('display', 'block');
  $('#payment').css('display','none');
  $('#user_action').html('deleteOnAccount');
  $('#search').css('display','none');
}

function destroyThisAccount(id){
 
 
  $.ajax({
   
    url: baseurl + '/account/delete_account',
    data: {
      user_id: id
    },
    method: 'POST',
    dataType: 'json',
    success: function (data) {
      if(data == 'success'){
        window.location.href = baseurl+'/account/logout';
      }
      

    }
  });
}

function updateOnAccount(){

  $('#user_action').html('account');
}

function whatsapp(id){
  var header = "Permisi Admin Saya mau konfirmasi Pesanan dengan kode invoice berikut ini";
  var body = "\n "+id+" \n";
  var footer = "Mohon Segera diproses Terima Kasih.";
  var text = header+body+footer; 
  window.location.href = 'https://wa.me/62895336272308/?text='+text;
  console.log(id);
}
function payment(id){
  var header = "Permisi Admin Saya mau konfirmasi Pesanan dengan kode invoice berikut ini";
  var body = "\n "+id+" \n";
  var footer = "Mohon Segera diproses Terima Kasih.";
  var text = header+body+footer; 
  window.location.href = 'https://wa.me/6285786625255/?text='+text;
  console.log(id);
}

function paymentOnTransaction(id){
  
  $('#register').css('display', 'none');
  $('#login').css('display', 'none');
  $('#forgot').css('display', 'none');
  $('#logout').css('display', 'none');
  $('#deleteOnAccount').css('display', 'none');
  $('#user_action').html('payment');
  $('#method').html('cod');
  $('#payment').css('display','block');
  $('#formModal').modal();
  $('#search').css('display','none');
  $('.transaction-id').val(id);
 

  
}

function CancelPaymentOnTransaction(){
  $('#register').css('display', 'none');
  $('#login').css('display', 'none');
  $('#forgot').css('display', 'none');
  $('#logout').css('display', 'none');
  $('#deleteOnAccount').css('display', 'none');
  $('#search').css('display','none');
  $('#payment').css('display','none');
  $('#user_action').html('alert');
  $('#alert').css('display','block');

  $('#title').html('Apakah pesanan ini mau dibatalkan?');
  $('#content').html('Membatalkan pesanan untuk mengubah beberapa menu atau informasi penerima');

  const id = $(this).data('id');
  console.log(id);
  

}

function changeMethod(){
  var method = $('#transaction_method').val();
  
  console.log(method);

  if(method == 'Dompet Digital'){
    $('#ewallet').css('display','block');
    $('#cod').css('display','none');
   
    $('#method').html('ewallet');
  }else{
    $('#ewallet').css('display','none');
    $('#cod').css('display','block');

    $('#method').html('cod');
  }
}

// function ewallet(){
//   $('#ewallet').css('display','block');
//   $('#cod').css('display','none');
//   console.log('ewallet');
//   $('#method').html('ewallet');
// }
// function cod(){
//   $('#ewallet').css('display','none');
//   $('#cod').css('display','block');
//   console.log('cod');
//   $('#method').html('cod');
// }



function passwordLogin() {
  var x = document.getElementById("user_password_login");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function password() {
  var x = document.getElementById("user_password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function passwordRepeat() {
  var x = document.getElementById("user_password_repeat");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}




function add() {
  var price = $('#menu_price').val();
  var txtQty = $('#transaction_qty').val();
  var qty = 1 + parseInt(txtQty);
  var subtotal = qty * parseInt(price);


  $('#txt_qty').html(qty);
  $('#transaction_qty').val(qty);
  $('#txt_subtotal').html('Rp ' + subtotal + ',-');
  $('#transaction_subtotal').val(subtotal);


}


function reduce() {
  var price = $('#menu_price').val();
  var txtQty = $('#transaction_qty').val();


  if (parseInt(txtQty) == 1) {
    $('#txt_subtotal').html('Rp ' + price + ',-');
    $('#transaction_subtotal').val(price);
  } else {
    var qty = parseInt(txtQty) - 1;
    var subtotal = qty * parseInt(price);

    $('#txt_qty').html(qty);
    $('#transaction_qty').val(qty);

    $('#txt_subtotal').html(subtotal);
    $('#txt_subtotal').html('Rp ' + subtotal + ',-');
  }
}

function addOnCart(id) {

  var transactionDetailId = id;
  var price = $('#menu_price' + id).val();
  var txtQty = $('#transaction_detail_qty' + id).val();
  var qty = 1 + parseInt(txtQty);
  var subtotal = qty * parseInt(price);
  var note = $('#note' + id).val();




  $.ajax({
    url: baseurl + '/transaction/editItem',
    data: {
      transaction_detail_id: transactionDetailId,
      transaction_detail_qty: qty,
      transaction_detail_price_total: subtotal,
      transaction_detail_note: note
    },
    method: 'POST',
    dataType: 'json',
    success: function (data) {

      $('#txt_qty' + id).html(data.transaction_detail_qty);
      $('#transaction_detail_qty' + id).val(data.transaction_detail_qty);
      $('#txt_subtotal' + id).html('Rp ' + data.transaction_detail_price_total + ',-');
      $('#transaction_detail_price_total' + id).val(data.transaction_detail_price_total);
      $('#transaction_pay_total').html('<center>Rp ' + data.transaction_pay_total + ',-</center>');


      console.log('Entry Data');
    }
  });



}

function reduceOnCart(id) {
  var transactionDetailId = id;
  var price = $('#menu_price' + id).val();
  var txtQty = $('#transaction_detail_qty' + id).val();
  var note = $('#note' + id).val();


  if (parseInt(txtQty) == 1) {
    $('#txt_subtotal' + id).html('Rp ' + price + ',-');
    $('#transaction_detail_price_total' + id).val(price);
  } else {
    var qty = parseInt(txtQty) - 1;
    var subtotal = qty * parseInt(price);


    $.ajax({
      url: baseurl + '/transaction/editItem',
      data: {
        transaction_detail_id: transactionDetailId,
        transaction_detail_qty: qty,
        transaction_detail_price_total: subtotal,
        transaction_detail_note: note
      },
      method: 'POST',
      dataType: 'json',
      success: function (data) {
        

        $('#txt_qty' + id).html(data.transaction_detail_qty);
        $('#transaction_detail_qty' + id).val(data.transaction_detail_qty);
        $('#txt_subtotal' + id).html('Rp ' + data.transaction_detail_price_total + ',-');
        $('#transaction_detail_price_total' + id).val(data.transaction_detail_price_total);
        $('#transaction_pay_total').html('<center>Rp ' + data.transaction_pay_total + ',-</center>');


        console.log('Entry Data');
      }
    });


  }
}

function noteOnCart(id) {
  var transactionDetailId = id;
  var qty = $('#transaction_detail_qty' + id).val();
  var subtotal = $('#transaction_detail_price_total' + id).val();
  var note = $('#note' + id).val();
  $.ajax({
    url: baseurl + '/transaction/editItem',
    data: {
      transaction_detail_id: transactionDetailId,
      transaction_detail_qty: qty,
      transaction_detail_price_total: subtotal,
      transaction_detail_note: note
    },
    method: 'POST',
    dataType: 'json',
    success: function (data) {
      console.log('Entry Data');

    }
  });

}

function deleteOnCart(id) {
  var transactionDetailId = id;
  var transactionId = $('#transaction_id').val();
  
  $.ajax({
    async: true,
    url: baseurl + '/transaction/deleteItem',
    data: {
      transaction_detail_id: transactionDetailId,
      transaction_id: transactionId
    },
    method: 'POST',
    dataType: 'json',
    beforeSend: function() {
      toastr.warning('Pesanan ini telah terhapus');
    },
    success: function (data) {
      setTimeout(function() {
        console.log(data);
        if(data == "empty"){
          history.back();
        }
        else{
          $('#detail').load(baseurl + '/transaction/detaildata');
        }
      }, 2000);
     
     

    }
  });

}

function boxed(id) {

     
  $.ajax({
    async: true,
    url: baseurl + '/transaction/boxed',
    data: {
      transaction_id: id
    },
    method: 'POST',
    dataType: 'json',
    beforeSend: function() {
      toastr.success('Pesanan ini telah dikemas');
    },
    success: function (data) {
      setTimeout(function() {
        console.log(data);
        window.location.href=baseurl+'/transaction/payment';
      }, 2000);
      

    }
  });

   


}

function validateEmail(email) {
  const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

function keyName() {
  $('#user_name').removeClass("form-control is-invalid").addClass("form-control");
}

function keyEmail() {
  $('#user_email').removeClass("form-control is-invalid").addClass("form-control");
}

function keyEmailLogin() {
  $('#user_email_login').removeClass("form-control is-invalid").addClass("form-control");
}

function keyEmailForgot() {
  $('#user_email_forgot').removeClass("form-control is-invalid").addClass("form-control");
}

function keyPhoneNumber() {
  $('#user_phone_number').removeClass("form-control is-invalid").addClass("form-control");
}

function keyAddress() {
  $('#user_address').removeClass("form-control is-invalid").addClass("form-control");
}

function keyPassword() {
  $('#user_password').removeClass("form-control is-invalid").addClass("form-control");
}

function keyPasswordLogin() {
  $('#user_password_login').removeClass("form-control is-invalid").addClass("form-control");
}

function keyPasswordRepeat() {
  $('#user_password_repeat').removeClass("form-control is-invalid").addClass("form-control");
}

function keyWordToSearch(){
  var keyWord = $('#user_search').val();
  $('#row').html('');
  
  $.ajax({
    async: true,
    url: baseurl + '/menu/search',
    data: {
      menu_name : keyWord
      
    },
    method: 'POST',
    dataType: 'json',
    success: function (data) {
      if(data == 'empty'){
        console.log('Belum ditemukan');
       
      } else{
       
        var expression = new RegExp(keyWord, "i");
        $.each(data,function(key, value){
          
          if(value.menu_name.search(expression) != -1)
          {
         
            $('#row').css('display','block');
            $('#row').append('<li><img  alt="Card image" height="150" style="width:100%; padding: 10px;" src="'+baseUrlAdmin+'/uploads/images/'+value.menu_image+'"><a class="link-b" href="#" onclick="detailSearch(\'' + value.menu_id +'-'+ value.menu_name + '\')"> <h6 class="card-text text-center">'+value.menu_name+'</h6></a> </li>')
          }
     
        
        });
       
      }

     
     
    }
    
  });


}

function detailSearch(x){
  window.location.href = baseurl+'/menu/order/'+x.replace(' ','-');
 
 
}