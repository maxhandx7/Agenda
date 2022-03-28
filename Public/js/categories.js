$(document).ready(function(){
$('#TableLoadCategories').load('Vistas/Categories/TableCategories.php');

$('#btnSaveCa').click(function(){
  if ($('#nombreCategory').val() == "" ) {
    swal("No ha puesto ningun nombre de categoria");
    return false;}
  addCategory() ;
  $('#modaladdcategory').modal('hide');
});

$('#btnUpdateCategory').click(function(){
  updateCategory() ;
});

});

function addCategory() {
  $.ajax({
    type:"POST",
    data:$('#frmaddcategory').serialize(),
    url: "Controlador/Category/addCategory.php",
    success:function(answer){
      answer= answer.trim();
      if (answer == 1) {
        $('#TableLoadCategories').load('Vistas/Categories/TableCategories.php');
        $('#frmaddcategory')[0].reset();
        swal("( ͡ᵔ ͜ʖ ͡ᵔ)","Agregada","success");
      }else{
        swal(":(","Hubo un problema al agregar","error");
      }
    }
  });
}

function dropCategory(Category_id) {
    swal({
        title: "Esta seguro?",
        text: "Una vez eliminado, ¡no podrá recuperar esta categoria!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
        /*  swal("", {
            icon: "success",
          });*/

          $.ajax({
            type: "POST",
            data: 'Category_id=' + Category_id,
            url: "Controlador/Category/dropCategory.php",
            success: function(answer){
              answer= answer.trim();
              if (answer == 1) {
                $('#TableLoadCategories').load('Vistas/Categories/TableCategories.php');
                swal("¡Ok! ¡Tu categoria ha sido eliminado!", "") ;
              }else{
                swal(":(","Hubo un problema al eliminar","error");
              }
            }
          });
        } 
      });
}


function editCategory(Category_id) {
  $.ajax({
    type:"POST",
    data: 'Category_id=' + Category_id,
    url: "Controlador/Category/editCategory.php",
    success:function(answer){
      answer= jQuery.parseJSON(answer); 
      $('#idCategory').val(answer['Category_id']);
      $('#nombreCategoryU').val(answer['nombre']);
      $('#dscategoryU').val(answer['descripcion']); 
    
    }
  });
}


function updateCategory(){
  $.ajax({
    type:"POST",
    data:$('#frmupdatecategory').serialize(),
    url: "Controlador/Category/updateCategory.php",
    success:function(answer){
      answer= answer.trim();
      if (answer == 1) {
        $('#TableLoadCategories').load('Vistas/Categories/TableCategories.php');
        $('#modalupdatecategory').modal("toggle");
        swal("( ͡ᵔ ͜ʖ ͡ᵔ)","Actualizado","success");
      }else{
        swal(":(","Hubo un problema al actuaizar","error");
      }
    }
  });
}