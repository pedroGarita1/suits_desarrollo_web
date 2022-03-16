function obtener_id_img(id) {
    $.ajax({
        type: 'POST',
        data: "id=" + id,
        url: "proceso/obtener_img.php",
        success: (r) => {
            $('#img_obtenida').html('<img src="' + r + '" alt="" style="high: 90px; width: 90px"></img>');
            $('#img_obtenida2').html('<img src="' + r + '" alt="" style="high: 100%; width: 100%"></img>');
        }
    });
}