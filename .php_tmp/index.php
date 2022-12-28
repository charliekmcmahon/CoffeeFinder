<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
  <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
</head>
<div class="m-2">
  <!-- Heading -->
  <div class="bg-white px-4 py-5 border-b border-gray-200 sm:px-6 dark:bg-slate-800">
    <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-slate-100">Welcome to CoffeeFinder</h3>
  </div>

  <!-- Map -->
  <div class="bg-white px-4 py-5 sm:p-0 dark:bg-slate-800">
    <div class="border-4 border-dashed border-gray-200 dark:border-slate-700 rounded-lg h-96">
      <!-- Configure a leaflet map -->
      <div id="map" style="height: 100%;"></div>
      <script>
          var map = L.map('map').setView([51.505, -0.09], 13);

          L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
              attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
          }).addTo(map);

          L.marker([51.5, -0.09]).addTo(map)
              .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
              .openPopup();
      </script>


    </div>
  </div>
 
  

</div>
</html>