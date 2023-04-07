$(document).ready(function () {
  $("#TableLoadContacts").load("Vistas/Contacts/TableContacts.php");
  $("#btnSaveCo").click(function () {
    addContact();
    $("#modaladdcontacts").modal("hide");
  });
  $("#btnUpdateContacts").click(function () {
    updateContact();
  });
});

function dropContacts(idContact) {
  Swal.fire({
    title: "Esta seguro?",
    text: "Una vez eliminado, ¡no podrá recuperar su contacto!",
    icon: "warning",
    buttons: true,
    showCancelButton: true,
    dangerMode: true,
  }).then((willDelete) => {
    if (willDelete) {
      $.ajax({
        type: "POST",
        data: "idContact=" + idContact,
        url: "Controlador/Contact/dropContact.php",
        success: function (answer) {
          answer = answer.trim();
          if (answer == 1) {
            $("#TableLoadContacts").load("Vistas/Contacts/TableContacts.php");
            Swal.fire({
              icon: 'success',
              title: 'Contacto eliminado',
            })
          } else {
            Swal.fire({
              icon: 'error',
              title: 'ha ocurrido un error eliminar el contacto'
            })
          }
        },
      });
    }
  });
}

function addContact() {
  $.ajax({
    type: "POST",
    data: $("#frmaddContact").serialize(),
    url: "Controlador/Contact/addContact.php",
    success: function (answer) {
      answer = answer.trim();
      if (answer == 1) {
        $("#TableLoadContacts").load("Vistas/Contacts/TableContacts.php");
        $("#frmaddContact")[0].reset();
        Swal.fire({
          icon: 'success',
          title: 'Contacto guardado exitosamente',
        })
      } else {
        Swal.fire({
          icon: 'error',
          title: 'ha ocurrido un error al guardar el Contacto'
        })
      }
    },
  });
}

function editContact(idContact) {
  $.ajax({
    type: "POST",
    data: "idContact=" + idContact,
    url: "Controlador/Contact/editContact.php",
    success: function (answer) {
      answer = jQuery.parseJSON(answer);
      idCategory = answer["id_categoria"];
      $("#idContact").val(answer["idContact"]);
      $("#nombreContactU").val(answer["nombre"]);
      $("#apellidoContactU").val(answer["paterno"]);
      $("#telContactU").val(answer["telefono"]);
      $("#emailContactU").val(answer["email"]);
      $("#avatarContactU").val(answer["avatar"]);
      $("#categoryContactU").load(
        "Vistas/Contacts/SelectCategoryUpdate.php?idCategory=" + idCategory
      );
      $('.form-group input[type="radio"]').each(function () {
        if ($(this).val() === answer["avatar"]) {
          $(this).prop('checked', true);
        }
      });
    },
  });
}

function infoContact(idContact) {
  $.ajax({
    type: "POST",
    data: "idContact=" + idContact,
    url: "Controlador/Contact/infoContact.php",
    success: function (answer) {
      answer = jQuery.parseJSON(answer);
      $('#contenedor-imagen').attr('src', answer["avatar"]);
      $("#showNombre").text(answer["nombre"] + " " + (answer["paterno"] ? answer["paterno"] : ""));
      if (answer["telefono"] != "") {
        $('#showTel').attr('hidden', false);
        $("#showTel  p").html("<a href='https://api.whatsapp.com/send?phone=" + answer["telefono"] + "' class='link-success text-decoration-none' Target='_blank'></i>" + answer["telefono"] + "</a>");
      } else {
        $('#showTel').attr('hidden', true);
      }
      if (answer["email"] != "") {
        $('#showEmail').attr('hidden', false);
        $("#showEmail  p").html("<a href='mailto:" + answer["email"] + "' class='link-info text-decoration-none' Target='_blank'>" + answer["email"] + "</i></a>");
      } else {
        $('#showEmail').attr('hidden', true);
      }
      if (answer["categoria"] != null) {
        $('#showCategory').attr('hidden', false);
        $("#showCategory  p").html("<b>" + answer["categoria"] + " </b>" + "<br />" + "<span class='text-muted d-sm-inline-block'>Categoria </span>");
      } else {
        $('#showCategory').attr('hidden', true);
      }
      if (answer["fechaInsert"] != "") {
        $('#showFecha').attr('hidden', false);
        $("#showFecha  p").html("<span class='text-muted d-sm-inline-block'>" + answer["fechaInsert"] + "</span>");
      } else {
        $('#showFecha').attr('hidden', true);
      }
    },
  });



}

function updateContact() {
  $.ajax({
    type: "POST",
    data: $("#frmUpdatecontact").serialize(),
    url: "Controlador/Contact/updateContact.php",
    success: function (answer) {
      answer = answer.trim();
      if (answer == 1) {
        $("#TableLoadContacts").load("Vistas/Contacts/TableContacts.php");
        $("#modalupdatecontacts").modal("toggle");
        Swal.fire({
          icon: 'success',
          title: 'Contacto actualizado',
        })
      } else {
        Swal.fire({
          icon: 'error',
          title: 'ha ocurrido un error al actualizar el contacto'
        })
      }
    },
  });
}
