require("./bootstrap");

(function () {
    "use strict";
    // Check if geolocation is available
    if ("geolocation" in navigator) {
        navigator.geolocation.getCurrentPosition((position) => {
            setMap(position.coords.latitude, position.coords.longitude);
        });
    } else {
        mapboxgl.accessToken =
            "pk.eyJ1IjoiYnJlbmRvaWsiLCJhIjoiY2ticXpod3JzMG9pdTJzbXBteWEyMWFrMyJ9.opn5aQIeDNyCWt-dNvfgSg";
        const map = new mapboxgl.Map({
            container: "map",
            style: "mapbox://styles/mapbox/streets-v11",
            center: [-74.5, 40],
            zoom: 9,
        });
    }
    // When user click Find Parks Near Me button get user location
    $("#near-me").on("click", () => {
        FindParksNearMe();
    });

    // Live Search
    $("#search-parks").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#card-wrapper *").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });

    // Find parks based on users location
    const FindParksNearMe = () => {
        navigator.geolocation.getCurrentPosition((position) => {
            setMap(position.coords.latitude, position.coords.longitude);
        });
    };

    // Pass current locations latitutde and longitude to mapbox to set current loscation
    async function setMap(lat, lng) {
        $.get(
            "https://developer.nps.gov/api/v1/parks?api_key=HkISxGJHwD8hh2h6K8VTE5SevsAMu4yL2K4OU8xc",
            (data, status) => {
                const parks = data.data;
                console.log();
            }
        );

        mapboxgl.accessToken =
            "pk.eyJ1IjoiYnJlbmRvaWsiLCJhIjoiY2ticXpod3JzMG9pdTJzbXBteWEyMWFrMyJ9.opn5aQIeDNyCWt-dNvfgSg";
        const map = new mapboxgl.Map({
            container: "map",
            style: "mapbox://styles/mapbox/streets-v11",
            center: [lng, lat],
            zoom: 9,
        });

        const marker = new mapboxgl.Marker({
            color: "red",
            draggable: true,
        })
            .setLngLat([lng, lat])
            .addTo(map);
    }
})();
