
function login() {
    $('#register').css('display','none');
    $('#login').css('display','block');
    // document.getElementById("register").style.display = "none"
    // document.getElementById("login").style.display = "block"
  }

  function register() {
    $('#register').css('display','block');
    $('#login').css('display','none');
    // document.getElementById("login").style.display = "none"
    // document.getElementById("register").style.display = "block"
  }
  
  

  


//   $('#searchModal').on('show.bs.modal', function (event) {
//     var button = $(event.relatedTarget) // Button that triggered the modal
//     var recipient = button.data('whatever') // Extract info from data-* attributes
//     modal = $(this)
   
//     //  modal.find('.modal-title').text(recipient)
// })

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



