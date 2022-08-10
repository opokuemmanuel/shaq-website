// This example adds a search box to a map, using the Google Place Autocomplete
// feature. People can enter geographical searches. The search box will return a
// pick list containing a mix of places and predicted search terms.
// This example requires the Places library. Include the libraries=places
// parameter when you first load the API. For example:
// <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
function initAutocomplete() {
    const map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: -33.8688, lng: 151.2195 },
        zoom: 13,
        mapTypeId: "roadmap",
    });
    // Create the search box and link it to the UI element.
    const input = document.querySelector("#pac-input");
    const searchBox = new google.maps.places.SearchBox(input);

    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
    // Bias the SearchBox results towards current map's viewport.
    map.addListener("bounds_changed", () => {
        searchBox.setBounds(map.getBounds());
    });

    let markers = [];

    // Listen for the event fired when the user selects a prediction and retrieve
    // more details for that place.
    searchBox.addListener("places_changed", () => {
        const places = searchBox.getPlaces();

        if (places.length == 0) {
            return;
        }

        // Clear out the old markers.
        markers.forEach((marker) => {
            marker.setMap(null);
        });
        markers = [];

        // For each place, get the icon, name and location.
        const bounds = new google.maps.LatLngBounds();

        places.forEach((place) => {
            if (!place.geometry || !place.geometry.location) {
                console.log("Returned place contains no geometry");
                return;
            }

            const icon = {
                url: place.icon,
                size: new google.maps.Size(71, 71),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(17, 34),
                scaledSize: new google.maps.Size(25, 25),
            };
            console.log("latitude: " + place.geometry.location.lat() + ", longitude: " + place.geometry.location.lng())
            document.querySelector('#pickup_lat').value = place.geometry.location.lat()
            document.querySelector('#pickup_lng').value = place.geometry.location.lng()
           
            if(document.querySelector('#pickup_lat').value > 8){
                //alert('northern region');
                document.querySelector('#carSend').setAttribute('hidden', true)
                
            }else{
                document.querySelector('#carSend').removeAttribute('hidden')
            }

            markers.push(
                new google.maps.Marker({
                    map,
                    icon,
                    title: place.name,
                    position: place.geometry.location,
                })
            );
            if (place.geometry.viewport) {
                // Only geocodes have viewport.
                bounds.union(place.geometry.viewport);
            } else {
                bounds.extend(place.geometry.location);
            }
        });
        map.fitBounds(bounds);
    });
    initAutocompleteTwo()

    // autocomplete2 = new google.maps.places.Autocomplete(document.getElementById('pac-inputTwo'), { types: ['geocode'] });
    // google.maps.event.addListener(autocomplete2, 'place_changed', function() {
    //     console.log(autocomplete2);
    //     //console.log("latitude: " + place.geometry.location.lat() + ", longitude: " + place.geometry.location.lng())
    // });

}



function initAutocompleteTwo() {
    const mapTwo = new google.maps.Map(document.getElementById("map"), {
        center: { lat: -33.8688, lng: 151.2195 },
        zoom: 13,
        mapTypeId: "roadmap",
    });
    // Create the search box and link it to the UI element.
    const inputTwo = document.querySelector("#pac-inputTwo");
    const searchBoxTwo = new google.maps.places.SearchBox(inputTwo);

    mapTwo.controls[google.maps.ControlPosition.TOP_LEFT].push(inputTwo);
    // Bias the SearchBox results towards current map's viewport.
    mapTwo.addListener("bounds_changed", () => {
        searchBoxTwo.setBounds(mapTwo.getBounds());
    });

    let markersTwo = [];

    // Listen for the event fired when the user selects a prediction and retrieve
    // more details for that place.
    searchBoxTwo.addListener("places_changed", () => {
        const placesTwo = searchBoxTwo.getPlaces();

        if (placesTwo.length == 0) {
            return;
        }

        // Clear out the old markers.
        markersTwo.forEach((marker) => {
            marker.setMap(null);
        });
        markersTwo = [];

        // For each place, get the icon, name and location.
        const boundsTwo = new google.maps.LatLngBounds();

        placesTwo.forEach((place) => {
            if (!place.geometry || !place.geometry.location) {
                console.log("Returned place contains no geometry");
                return;
            }

            const iconTwo = {
                url: place.icon,
                size: new google.maps.Size(71, 71),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(17, 34),
                scaledSize: new google.maps.Size(25, 25),
            };
           
            console.log("latitude: " + place.geometry.location.lat() + ", longitude: " + place.geometry.location.lng())
            document.querySelector('#dropoff_lat').value = place.geometry.location.lat()
            document.querySelector('#dropoff_lng').value = place.geometry.location.lng()
            markersTwo.push(
                new google.maps.Marker({
                    mapTwo,
                    iconTwo,
                    title: place.name,
                    position: place.geometry.location,
                })
            );
            if (place.geometry.viewport) {
                // Only geocodes have viewport.
                boundsTwo.union(place.geometry.viewport);
            } else {
                boundsTwo.extend(place.geometry.location);
            }
        });
        mapTwo.fitBounds(boundsTwo);
    });

}