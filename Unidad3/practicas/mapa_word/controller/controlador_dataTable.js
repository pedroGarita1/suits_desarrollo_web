$(() => {
    let t_direcciones = $('#t_paises').DataTable({
        responsive: true
    });
    new $.fn.dataTable.FixedHeader(t_direcciones);
});