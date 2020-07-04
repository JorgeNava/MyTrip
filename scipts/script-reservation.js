function obtenerCostoTour(){
    var adultosExtra = null;
    var niñosExtra = null;
    var horasTour = null;
    var precioHora = 35;
    var precioNiñosExtra = 20;
    var precioAdultosExtra = 30;
    var str ="";

    adultosExtra = document.getElementsByName("adultosExtra")[0].value;
    niñosExtra = document.getElementsByName("niñosExtra")[0].value;
    horasTour = parseInt(document.getElementsByName("duracionTour")[0].value);

    var costoHoras = (precioHora * horasTour);
    var costoPersonasExtra = ((adultosExtra*precioAdultosExtra) + (niñosExtra*precioNiñosExtra));
    var costoTotal = (costoHoras + costoPersonasExtra);

    str = "<input type='number' style='display: none;' value='"+costoTotal+"' name='costoTour'>";
    $("#jsAdder").html(str);
}
