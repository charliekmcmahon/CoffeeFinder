<div class="w-full sm:w-1/2">
    <!-- Map -->
    <div class="bg-white px-4 py-5 sm:p-0 dark:bg-slate-800">
      <div class="border-4 border-dashed border-gray-200 dark:border-slate-700 rounded-lg h-96">
        <!-- Configure a leaflet map -->
        <div id="map" style="height: 100%;"></div>
        <script>
            var map = L.map('map').setView([<?php echo $_GET["userLat"];?>, <?php echo $_GET["userLng"]; ?>], 13);

            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            <?php

            // display the markers for the coffee shops, with the user's location as the center and the popup text for each coffee shop as the name of the coffee shop
            foreach ($results as $result) {
                echo "L.marker([" . $result['geometry']['location']['lat'] . ", " . $result['geometry']['location']['lng'] . "]).addTo(map).bindPopup('" . $result['name'] . "');";
            }
            
            ?>
            var redIcon = L.icon({
                iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
                shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
                iconSize: [25, 41],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                shadowSize: [41, 41]
            });
            // make a marker for the user's location, with the icon as a red marker
            L.marker([<?php echo $_GET["userLat"];?>, <?php echo $_GET["userLng"]; ?>], {icon: redIcon}).addTo(map).bindPopup('You are here');
        </script>
      </div>
    </div>
</div>