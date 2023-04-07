$(document).ready(function () {


  $("#btnUpdateUsers").click(function () {
    updateUser();
  });

  $("#btnAddEst").click(function () {
    actestado();
  });

  $("#btnPicUsers").click(function () {
    actualizarimg();
  });
});

$("#btnuser").click(function () {

  if ($("#nombretxt").val() == 0) {
    Swal.fire({
      icon: "info",
      text: "Nombre de usuario vacio",
    });
    return false;
  } else if ($("#passtxt").val() == 0) {
    Swal.fire({
      icon: "info",
      text: "Contraseña de usuario vacia",
    });
    return false;
  }
  else if ($("#passtxt").val() != $("#Passconfirm").val()) {
    Swal.fire({
      icon: "info",
      text: "Contraseña no coinciden",
    });
    return false;
  }
  else if ($("#txtEmail").val() == 0) {
    Swal.fire({
      icon: "info",
      text: "Se requiere de un correo electronico para registrarse",
    });
    return false;
  } else {
    addUser();
  }
});

function editUser(idUser) {
  $.ajax({
    type: "POST",
    data: "idUser=" + idUser,
    url: "Controlador/Admin/editUser.php",
    success: function (answer) {
      answer = jQuery.parseJSON(answer);

      $("#id_User").val(answer["idUser"]);
      $("#nombreUserU").val(answer["nombre"]);
      $("#passUserU").val(answer["pass"]);
      $("#emailUserU").val(answer["email"]);
      $("#numUserU").val(answer["num"]);
    },
  });
}

function updateUser() {
  $.ajax({
    type: "POST",
    data: $("#frmUpdateuser").serialize(),
    url: "Controlador/Admin/updateUser.php",
    success: function (answer) {
      answer = answer.trim();
      if (answer == 1) {
        $("#modalupdateuser").modal("toggle");
        Swal.fire({
          icon: "success",
          title: "Usuario Actualizado",
          footer: '<a class="btn btn-outline-info" href="/">ver perfil</a>',
        });
      } else {
        Swal.fire({
          icon: "error",
          title: "Ups...",
          text: "Hubo un problema al actualizar usuario",
        });
      }
    },
  });
}

function actestado() {
  $.ajax({
    type: "POST",
    data: $("#frmaddstate").serialize(),
    url: "Controlador/Admin/updateStatus.php",

    success: function (answer) {
      answer = answer.trim();
      if (answer == 1) {
        Swal.fire({
          icon: "success",
          title: "Estado Actualizado",
          footer: '<a class="btn btn-outline-info" href="/">ver perfil</a>',
        });
        $("#modalupdatestate").modal("hide");
      } else {
        Swal.fire({
          icon: "error",
          title: "Ups...",
          text: "Hubo un problema al actualizar el estado",
        });
      }
    },
  });
}

function actualizarimg() {
  var frm = $("#frmPicuser");

  frm.submit(function (e) {
    e.preventDefault(e);
    var Frmdata = new FormData(this);

    Frmdata.append("pic", $("input[name=pic]")[0].files[0]);

    $.ajax({
      async: true,
      type: "POST",
      data: Frmdata,
      url: "Controlador/Admin/img.php",
      processData: false,
      contentType: false,
      cache: false,
      success: function (answer) {
        answer = answer.trim();

        if (answer == 1) {
          Swal.fire({
          icon: "success",
          title: "Imagen Actualizada",
          footer: '<a class="btn btn-outline-info" href="/">ver perfil</a>',
        });
          $("#modalupdatepic").modal("hide");
        } else {
          Swal.fire({
          icon: "error",
          title: "Ups...",
          text: "Hubo un problema al actualizar la imagen",
        });
        }
      },
    });

    return false;
  });
}

function addUser() {
  $.ajax({
    type: "POST",
    data: $("#frmadduser").serialize(),
    url: "../../Controlador/Admin/signup.php",

    success: function (answer) {
      answer = answer.trim();
      if (answer == 1) {
        Swal.fire({
          icon: "success",
          title: "Bienvenido",
          text: "Usuario creado",
        });
        $("#frmadduser")[0].reset();
      } else if (answer == 0) {
        Swal.fire({
          icon: "error",
          title: "Ups...",
          text: "Los campos con * son obligatorios y la contraseña debe ser mayor a 6 caracteres",
        });
      }
      else {
        Swal.fire({
          icon: "error",
          title: "Ups...",
          text: "Hubo un error " + answer,
        });
      }
    },
  });
}

function recogerdatos() {
  $.ajax({
    type: "POST",
    data: $("#frmaddContactFast").serialize(),
    url: "Controlador/Contact/addContact.php",
    success: function (answer) {
      answer = answer.trim();
      if (answer == 1) {
        Swal.fire({
          title: "( ͡ᵔ ͜ʖ ͡ᵔ)",
          text: "Agregado",
          icon: "success",

        });

      } else {
        Swal.fire(":(", "Hubo un problema al agregar contacto" + answer, "error");

      }
    },
  });


}

