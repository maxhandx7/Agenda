$(document).ready(function () {
  $("#btn").click(function () {
    $("#modal").modal({
      fadeDuration: 500,
      fadeDelay: 0.5,
    });
  });

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
  if ($("#txtPass").val() == 0) {
    Swal.fire({
      icon: "info",
      text: "Nombre de usuario vacio",
    });
    return false;
  } else if ($("#txtPass").val() == "") {
    Swal.fire({
      icon: "info",
      text: "Contraseña de usuario vacia",
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
      $("#numUserU").val(answer["email"]);
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
        swal("( ͡ᵔ ͜ʖ ͡ᵔ)", "Actualizado", "success");
      } else {
        swal(":(", "Hubo un problema al actuaizar" + answer, "error");
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
        swal("( ͡ᵔ ͜ʖ ͡ᵔ)", "Actualizado", "success");
        $("#modalupdatestate").modal("hiden");
      } else {
        swal(":(", "Hubo un problema al actuaizar" + answer, "error");
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
          swal("( ͡ᵔ ͜ʖ ͡ᵔ)", "Hecho", "success");
          $("#modalupdatepic").modal("hide");
        } else {
          swal(":(", "Hubo un problema " + answer, "error");
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
    url: "Controlador/Admin/signup.php",

    success: function (answer) {
      answer = answer.trim();
      if (answer == 1) {
        Swal.fire({
          icon: "success",
          title: "Bienvenido",
          text: "Usuario creado",
        });
        $("#frmadduser")[0].reset();
      } else {
        Swal.fire({
          icon: "error",
          title: "Ups...",
          text: "Hubo un error " + answer,
        });
      }
    },
  });
}

