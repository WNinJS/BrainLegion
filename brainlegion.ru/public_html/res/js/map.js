ymaps.ready(init);
var map, recRbPlacemark;

function init(){
  map = new ymaps.Map("map", {
        center: [54.739600, 55.985272],
        zoom: 16,
        controls:['zoomControl']
    });
  map.behaviors.disable('scrollZoom');
  recRbPlacemark = new ymaps.Placemark([54.739600, 55.985272], {
    hintContent: 'ЦИК РЭК РБ', balloonContent: 'BL' });
  map.geoObjects.add(recRbPlacemark);
}
