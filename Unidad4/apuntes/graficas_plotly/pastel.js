$(() => {
    $.ajax({
        url: "servidor.php",
        success: (r) => {
            valores = crearCadenaPastel(r);
            datosX = valores[0];
            datosY = valores[1];
            var data = [{
                values: datosX,
                labels: datosY,
                type: 'pie'
            }];

            var layout = {
                height: 400,
                width: 500
            };

            Plotly.newPlot('pastel', data, layout);
        }
    });
});

function crearCadenaPastel(json) {
    var parsed = JSON.parse(json);
    var arr = [];
    for (var x in parsed) {
        arr.push(parsed[x]);
    }
    return arr;
}