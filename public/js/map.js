'use strict'

function iniciarMap() {
    var coord = {
        lat: 20.6746575,
        lng: -101.3422468
    };
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 10,
        center: coord
    });
    var marker = new google.maps.Marker({
        position: coord,
        map: map
    });
}