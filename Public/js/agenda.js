document.addEventListener('DOMContentLoaded', function () {
  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    locale: 'es',
    headerToolbar: {
      left: 'prev,next today',
      center: 'title',
      right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
    },
    allDayText: 'Hora',
    buttonText: {
      today: 'Hoy',
      month: 'Mes',
      week: 'Semana',
      day: 'Día',
      list: 'Lista'
    },
    timeZone: 'local',
    navLinks: true,
    selectable: true,
    editable: true,
    events: eventos,
    select: function (info) {
      Swal.fire({
        title: 'Nuevo evento',
        html: `<input type="text" id="titulo" class="swal2-input" placeholder="Titulo">
                    <textarea  id="dsAgenda" class="swal2-textarea" placeholder="Descripcion" rows="2"></textarea>`,
        confirmButtonText: 'Guardar',
        focusConfirm: false,
        preConfirm: () => {
          const titulo = Swal.getPopup().querySelector('#titulo').value
          const dsAgenda = Swal.getPopup().querySelector('#dsAgenda').value
          if (!titulo) {
            Swal.showValidationMessage(`Por favor ingrese un titulo`)
          }
          return { titulo: titulo, dsAgenda: dsAgenda }
        }
      }).then((result) => {
        if (result.value) {
          let title = result.value.titulo;
          let descripcion = result.value.dsAgenda;
          calendar.addEvent({
            title: title,
            descripcion: descripcion,
            start: info.startStr,
            end: info.endStr
          });
          fetch('../../Controlador/Agenda/agenda.php', {
            method: 'POST',
            body: JSON.stringify({
              titleInput: title,
              descripcion: descripcion,
              start: info.startStr,
              end: info.endStr
            })
          })
            .then(response => response.text())
            .then(data => {
              if (data == 1) {
                Swal.fire({
                  icon: 'success',
                  title: 'Evento guardado exitosamente',
                }).then(function () {
                  location.reload();
                })
              }
            })
        }
      })
        .catch(error => {
          // mostrar un mensaje de error al usuario
          Swal.fire({
            icon: 'error',
            title: 'ha ocurrido un error al guardar el evento'
          })
        });
      calendar.unselect();
    },

    eventDidMount: function (info) {
      // code for when event is rendered
    },

    eventClick: function (info) {
      /* alert(info.event.id); */
      $.ajax({
        type: "POST",
        data: "idAgenda=" + info.event.id,
        url: "Controlador/Agenda/infoAgenda.php",
        success: function (answer) {
          answer = jQuery.parseJSON(answer);

          const fechainicio = new Date(answer["inicio"]);
          const fechafin = new Date(answer["fin"]);
          const horainicio = fechainicio.getHours();
          const minutosinicio = fechainicio.getMinutes();
          const segundosinicio = fechainicio.getSeconds();
          const horafin = fechafin.getHours();
          const minutosfin = fechafin.getMinutes();
          const segundosfin = fechafin.getSeconds();

          $("#titulo").text(answer["titulo"]);
          if (answer["descripcion"] != "") {
            $('#descripcion').attr('hidden', false);
            $("#descripcion  p").html(answer["descripcion"]);
          } else {
            $('#descripcion').attr('hidden', true);
          }
          if (horainicio != 19) {
            if (answer["inicio"] != "") {
              $('#start').attr('hidden', false);
              $("#start  p").html(horainicio + " : " + minutosinicio);
            } else {
              $('#start').attr('hidden', true);
            }
            if (answer["fin"] != "") {
              $('#end').attr('hidden', false);
              $("#end  p").html(horafin + " : " + minutosfin);
            } else {
              $('#end').attr('hidden', true);
            }
          } else {
            if (answer["inicio"] != "") {
              $('#start').attr('hidden', false);
              $("#start  p").html(answer["inicio"]);
            } else {
              $('#start').attr('hidden', true);
            }
            if (answer["fin"] != "") {
              $('#end').attr('hidden', false);
              $("#end  p").html(answer["fin"]);
            } else {
              $('#end').attr('hidden', true);
            }
          }
        }
      });
      $('#modalInfoAgenda').modal('show');
      $('#dropEvent').click(function () {
        dropEvents(info.event.id);
      });
    },


  });

  calendar.render();
});


function dropEvents(idEvent) {
  Swal.fire({
    title: "Esta seguro?",
    text: "Una vez eliminado, ¡no podrá recuperar su evento!",
    icon: "warning",
    buttons: true,
    showCancelButton: true,
    dangerMode: true,
  }).then((willDelete) => {
    if (willDelete) {
      $.ajax({
        type: "POST",
        data: "idEvent=" + idEvent,
        url: "Controlador/Agenda/dropEvent.php",
        success: function (answer) {
          answer = answer.trim();
          if (answer == 1) {
            location.reload();
          } else {
            location.reload();
          }
        },
      });
    }
  })


}



