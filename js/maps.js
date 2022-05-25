ymaps.ready(init);

function init(){
    var map = new ymaps.Map('map',{
        center:[59.94, 30.32],
        zoom: 12
    });

    var placemark = new ymaps.Placemark([59.97, 30.31],{

    });

    map.geoObjects.add(placemark);
}