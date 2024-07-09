// Cargar todos los empleados al cargar la página
$(document).ready(function() {

  // Cargar todos los empleados
  cargarEmpleados();

  // Cargar un solo empleado
  $('#form-buscar').submit(function(e) {
      e.preventDefault();

      var id = $('#id').val();
      $.ajax({
          url: '../../api/index.php',
          method: 'POST',
          dataType: 'json',
          data: { id: id },
          async: true,
      }).done(function(data) {
          var tabla = '';
          if (data.error) {
              tabla = '<tr><td colspan="3">' + data.error + '</td></tr>';
          } else {
              tabla += `
              <tr>
                <td>${data.id}</td>
                <td>${data.nombre}</td>
                <td>${data.puesto}</td>
              </tr>`;
          }
          $('#empleados-lista').html(tabla);
      });
  });
});

// Funcion para cargar todos los empleados
function cargarEmpleados() {
    $.ajax({
        url: '../../api/index.php',
        method: 'GET',
        dataType: 'json',
        async: true,
    }).done(function(data) {
        var tabla = '';
        $.each(data, function(index, empleado) {
            tabla += `
            <tr>
              <td>${empleado.id}</td>
              <td>${empleado.nombre}</td>
              <td>${empleado.puesto}</td>
            </tr>`;
        });
        $('#empleados-lista').html(tabla);
    });
}
