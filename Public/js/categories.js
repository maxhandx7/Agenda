$(document).ready(function () {
  $("#TableLoadCategories").load("Vistas/Categories/TableCategories.php");

  $("#btnSaveCa").click(function () {
    if ($("#nombreCategory").val() == "") {
      swal("No ha puesto ningun nombre de categoria");
      return false;
    }
    addCategory();
    $("#modaladdcategory").modal("hide");
  });

  $("#btnUpdateCategory").click(function () {
    updateCategory();
  });
});

function addCategory() {
  $.ajax({
    type: "POST",
    data: $("#frmaddcategory").serialize(),
    url: "Controlador/Category/addCategory.php",
    success: function (answer) {
      answer = answer.trim();
      if (answer == 1) {

        $("#TableLoadCategories").load("Vistas/Categories/TableCategories.php");
        $("#frmaddcategory")[0].reset();
        Swal.fire({
          icon: 'success',
          title: 'Categoria guardada exitosamente',
        })
      } else {
        Swal.fire({
          icon: 'error',
          title: 'ha ocurrido un error al guardar la Categoria'
        })
      }
    },
  });
}

function dropCategory(Category_id) {
  Swal.fire({
    title: "Esta seguro?",
    text: "Una vez eliminado, ¡no podrá recuperar esta categoria!",
    icon: "warning",
    buttons: true,
    showCancelButton: true,
    dangerMode: true,
  }).then((willDelete) => {
    if (willDelete) {
      $.ajax({
        type: "POST",
        data: "Category_id=" + Category_id,
        url: "Controlador/Category/dropCategory.php",
        success: function (answer) {
          answer = answer.trim();
          if (answer == 1) {
            $("#TableLoadCategories").load(
              "Vistas/Categories/TableCategories.php"
            );
            Swal.fire({
              icon: 'success',
              title: 'Categoria eliminada',
            })
          } else {
            Swal.fire({
              icon: 'error',
              title: 'ha ocurrido un error al eliminar la categoria'
            })
          }
        },
      });
    }
  });
}

function editCategory(Category_id) {
  $.ajax({
    type: "POST",
    data: "Category_id=" + Category_id,
    url: "Controlador/Category/editCategory.php",
    success: function (answer) {
      answer = jQuery.parseJSON(answer);
      $("#idCategory").val(answer["Category_id"]);
      $("#nombreCategoryU").val(answer["nombre"]);
      $("#dscategoryU").val(answer["descripcion"]);
    },
  });
}

function updateCategory() {
  $.ajax({
    type: "POST",
    data: $("#frmupdatecategory").serialize(),
    url: "Controlador/Category/updateCategory.php",
    success: function (answer) {
      answer = answer.trim();
      if (answer == 1) {
        $("#TableLoadCategories").load("Vistas/Categories/TableCategories.php");
        $("#modalupdatecategory").modal("toggle");
        Swal.fire({
          icon: 'success',
          title: 'Categoria actualizada',
        })
      } else {
        Swal.fire({
          icon: 'error',
          title: 'ha ocurrido un error al actualizar la categoria'
        })
      }
    },
  });
}
