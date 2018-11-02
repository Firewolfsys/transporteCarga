
$(".eliminar_item").each(function() {
    var href = $(this).attr('href');
    $(this).attr('href', 'javascript:void(0)');
    $(this).click(function() {
       if (confirm("¿Seguro desea eliminar este item?")) {
          location.href = href;
       }
    });
 });


$(".debaja_item").each(function() {
    var href = $(this).attr('href');
    $(this).attr('href', 'javascript:void(0)');
    $(this).click(function() {
       if (confirm("¿Seguro desea darlo de baja?")) {
          location.href = href;
       }
    });
 });

$(".anular_item").each(function() {
    var href = $(this).attr('href');
    $(this).attr('href', 'javascript:void(0)');
    $(this).click(function() {
       if (confirm("¿Seguro desea anularla?")) {
          location.href = href;
       }
    });
 });



 $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
