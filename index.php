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

  <!-- make a flex box side by side, with the map on the right side and the coffee shops on the left side -->
  <div class="flex flex-col sm:flex-row">
    <div class="sm:w-1/2 w-full">
      <!-- Coffee shops -->

  <?php

  // make a http request to the google maps places api and look for the nearest coffee shops to the user.


  if (isset($_GET['userLat']) && isset($_GET['userLng'])) {
    $userLat = $_GET['userLat'];
    $userLng = $_GET['userLng'];

    $url = "https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=$userLat,$userLng&radius=5000&type=cafe&keyword=coffee&key=AIzaSyCh5GABCAdHvduil3qnTFy5HC8YnESqBos";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);

    $json = json_decode($output, true);

    $results = $json['results'];

    // make the following code scroll if there are more than 6 results

    /*

    echo "<div class='bg-white px-4 py-5 sm:p-0 dark:bg-slate-800'>";
    echo "<div class='border-4 border-dashed border-gray-200 dark:border-slate-700 rounded-lg h-96'>";
    echo "<div class='px-4 py-5 sm:p-6'>";
    echo "<h3 class='text-lg leading-6 font-medium text-gray-900 dark:text-slate-100'>Coffee shops near you</h3>";

    */

    // scroll if the text overflows

    echo "<div class='bg-white px-2 py-2 sm:p-0 dark:bg-slate-800'>";
    echo "<div class='border-2 border-solid border-gray-200 dark:border-slate-700 rounded-lg h-96 overflow-y-scroll'>";
    echo "<div class='px-4 py-5 sm:p-6'>";
    echo "<h3 class='text-lg leading-6 font-medium text-gray-900 dark:text-slate-100'>Coffee shops near you</h3>";

    
    foreach ($results as $result) {
      echo "<div class='mb-2 mt-1 pt-1 max-w-2xl text-sm text-gray-500 dark:text-slate-400'>";
      echo "<p class='font-medium text-gray-900 dark:text-slate-100'>" . $result['name'] . "</p>";
      echo "<p>" . $result['vicinity'] . "</p>";
      require('action_buttons.php');
      echo "</div>";
    }

    echo "</div>";
    echo "</div>";
    echo "</div>";
  } else {
    require('get_location.php');
  }
  


  ?>
  
  </div>
  <div class="w-full sm:w-1/2">
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