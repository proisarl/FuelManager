window.addEventListener('event',event => {
    Swal.fire({
        text: event.detail[0].message,
        icon: event.detail[0].type,
    });
});
// window.addEventListener('erreur',event => {
//     var message="Une Erreur s'est Produite";
//     if (event.detail.message) {
//         message=event.detail.message;
//     }
//     swal("Erreur",message , "error");
// });
window.addEventListener('eventModal',event => {
    // alert(event.detail[0].modal);
    $("#showVehicule").modal('show');
    // Swal.fire({
    //     text: event.detail[0].message,
    //     icon: event.detail[0].type,
    // });
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
let onChange = (e) => {
    let value = e.target.value
    let selected = document.body.querySelector("datalist [value=\""+value+"\"]")
    if (selected) {
        let id = selected.dataset.value
        console.log('selected value is:', id)
    }
}
// $(document).ready(function (){
//     $('.exemple').select2();
//     let el = $('#companie')
//                 initSelect()
//     // $('.exemple').on('change',function(e){
//     //     // alert(e.target.value);
//     //     @this.set('informa', e.target.value);
//                 el.on('change', function (e) {
//                     @this.set('companie', el.select2("val"))
//                 });
//     // });
//   });
