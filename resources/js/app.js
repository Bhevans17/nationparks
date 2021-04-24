require("./bootstrap");

const findParksNearMeButton = document.querySelector("#near-me");

// When user click Find Parks Near Me button get user location
findParksNearMeButton.onclick = () => {
    FindParksNearMe();
};
// Pass current locations latitutde and longitude to mapbox to set current loscation
function setMap(lat, lng) {
    mapboxgl.accessToken =
        "pk.eyJ1IjoiYnJlbmRvaWsiLCJhIjoiY2ticXpod3JzMG9pdTJzbXBteWEyMWFrMyJ9.opn5aQIeDNyCWt-dNvfgSg";
    const map = new mapboxgl.Map({
        container: "map", // container ID
        style: "mapbox://styles/mapbox/streets-v11", // style URL
        center: [lng, lat], // starting position [lng, lat]
        zoom: 9, // starting zoom
    });
}

function FindParksNearMe() {
    navigator.geolocation.getCurrentPosition((position) => {
        setMap(position.coords.latitude, position.coords.longitude);
    });
}

// Check if geolocation is available
if ("geolocation" in navigator) {
    /* geolocation is available */
    navigator.geolocation.getCurrentPosition((position) => {
        setMap(position.coords.latitude, position.coords.longitude);
    });
} else {
    /* geolocation IS NOT available */
    mapboxgl.accessToken =
        "pk.eyJ1IjoiYnJlbmRvaWsiLCJhIjoiY2ticXpod3JzMG9pdTJzbXBteWEyMWFrMyJ9.opn5aQIeDNyCWt-dNvfgSg";
    const map = new mapboxgl.Map({
        container: "map", // container ID
        style: "mapbox://styles/mapbox/streets-v11", // style URL
        center: [-74.5, 40], // starting position [lng, lat]
        zoom: 9, // starting zoom
    });
    alert("Error with geolocation");
}
