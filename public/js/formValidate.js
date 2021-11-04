(function() {
  
  
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
     
   
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
         
            if (isEmpty(userId)) {
                event.preventDefault();
                event.stopPropagation();
                login();
               
             }  
          
                // form.classList.add('was-validated');
        
         
       
        }, false);
      });
    }, false);
  })();


  function add(){
    var price =  $('#menu_price').val();
    var txtQty = $('#transaction_qty').val();
    var qty = 1 + parseInt(txtQty);
    var subtotal = qty * parseInt(price);


    $('#txt_qty').html(qty);
    $('#transaction_qty').val(qty);
    $('#txt_subtotal').html('Rp '+subtotal+',-');
    $('#transaction_subtotal').val(subtotal);
    
   
  }

  function reduce(){
    var price =  $('#menu_price').val();
    var txtQty = $('#transaction_qty').val();
   

    if(parseInt(txtQty) == 1){
      $('#txt_subtotal').html('Rp '+price+',-');
      $('#transaction_subtotal').val(price);
    } 
    else{
      var qty = parseInt(txtQty) - 1;
      var subtotal = qty * parseInt(price);
      
      $('#txt_qty').html(qty);
      $('#transaction_qty').val(qty);
      
      $('#txt_subtotal').html(subtotal);
      $('#txt_subtotal').html('Rp '+subtotal+',-');
    } 


  

}
  