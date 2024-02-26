window.addEventListener('success',event => {
    // $('#add_information').modal('hide');
    // var message="L'operation a Reussi";
    // if (event.detail.message) {
    //     message=event.detail.message;
    // }
    swal("Success",message, "success");
});
window.addEventListener('erreur',event => {
    var message="Une Erreur s'est Produite";
    if (event.detail.message) {
        message=event.detail.message;
    }
    swal("Erreur",message , "error");
});
window.addEventListener('Edit-accouchement',event => {
    $('#edit_information_accouchement').modal('show');
});
window.addEventListener('name-updated',event => {
    $('#add_information').modal('show');
});
function logout(){
    // swal({
    //   title: "Se Deconnecter ?",
    //   type: "warning",
    //   showCancelButton: true,
    //   closeOnConfirm: false,
    //   showLoaderOnConfirm: true
    // }, function (isConfirm) {
    //     if (isConfirm){
    //       swal("Deconnexion!", "Vous Vous etes deconnectés.", "success");
        //   event.preventDefault();
          document.getElementById('logout-form').submit();
    //     }
    // });
}

