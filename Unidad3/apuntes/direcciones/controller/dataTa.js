$(document).ready(function() {
    let t_direcciones = $('#t_direcciones').DataTable({
        responsive: true
    });
    new $.fn.dataTable.FixedHeader(t_direcciones);
});