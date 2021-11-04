
function login() {
    document.getElementById("signup").style.display = "none"
    document.getElementById("login").style.display = "block"
  }

  function signup() {
    document.getElementById("login").style.display = "none"
    document.getElementById("signup").style.display = "block"
  }

  


  $('#searchModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
    modal = $(this)
   
    //  modal.find('.modal-title').text(recipient)
})





