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
  swal({
    title: "Esta seguro?",
    text: "Una vez eliminado, ¡no podrá recuperar su contacto!",
    icon: "warning",
    buttons: true,
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
            swal("¡Ok! ¡Tu contacto ha sido eliminado!", "");
          } else {
            swal(":(", "Hubo un problema al eliminar", "error");
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
        swal("( ͡ᵔ ͜ʖ ͡ᵔ)", "Agregado", "success");
      } else {
        swal(":(", "Hubo un problema al agregar contacto" + answer, "error");
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
      $("#categoryContactU").load(
        "Vistas/Contacts/SelectCategoryUpdate.php?idCategory=" + idCategory
      );
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
        swal("( ͡ᵔ ͜ʖ ͡ᵔ)", "Actualizado", "success");
      } else {
        swal(":(", "Hubo un problema al actuaizar", "error");
      }
    },
  });
}
