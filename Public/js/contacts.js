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

function infoContact(idContact) {
  var imagenes = [
    '/Public/images/System/1.svg',
    '/Public/images/System/2.svg',
    '/Public/images/System/3.svg',
    '/Public/images/System/4.svg',
    '/Public/images/System/5.svg',
    '/Public/images/System/6.svg'
  ];

  var numeroAleatorio = Math.floor(Math.random() * imagenes.length);

  var imagenSeleccionada = imagenes[numeroAleatorio];

  $('#contenedor-imagen').attr('src', imagenSeleccionada);

  $.ajax({
    type: "POST",
    data: "idContact=" + idContact,
    url: "Controlador/Contact/infoContact.php",
    success: function (answer) {
      answer = jQuery.parseJSON(answer);
      $("#showNombre").text(answer["nombre"] + " " +( answer["paterno"] ? answer["paterno"] : ""));
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
        $("#showCategory  p").text(answer["categoria"]);
      } else {
        $('#showCategory').attr('hidden', true);
      }
      if (answer["fechaInsert"] != "") {
        $('#showFecha').attr('hidden', false);
        $("#showFecha  p").text(answer["fechaInsert"]);
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
        swal("( ͡ᵔ ͜ʖ ͡ᵔ)", "Actualizado", "success");
      } else {
        swal(":(", "Hubo un problema al actuaizar", "error");
      }
    },
  });
}
