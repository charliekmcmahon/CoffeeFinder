  <!-- User's location -->
  <div class="bg-white px-4 py-5 sm:p-0 dark:bg-slate-800">
    <div class="border-4 border-dashed border-gray-200 dark:border-slate-700 rounded-lg h-96">
      <div class="px-4 py-5 sm:p-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-slate-100">Your location - <span id="lat"></span>,<span id="lng"></span></h3>
        <p class="mt-1 max-w-2xl text-sm text-gray-500 dark:text-slate-400">We use your location to find the nearest coffee shops to you.</p>
        <form action="index.php" method="get">
          <input type="hidden" name="userLat" id="userLat" value="-26.720805960364423">
          <input type="hidden" name="userLng" id="userLng" value="153.13189875588805">
          <button type="submit" class="mt-2 inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Find coffee shops
          </button>
        </form>
      </div>
    </div>

  <script>
    // get the user's current location and write it to a hidden input field on the page
    alert('getting location');
    navigator.geolocation.getCurrentPosition(function(position) {
      alert('got location');
      document.getElementById("userLat").value = position.coords.latitude;
      document.getElementById("userLng").value = position.coords.longitude;
      document.getElementById("lat").innerHTML = position.coords.latitude;
      document.getElementById("lng").innerHTML = position.coords.longitude;
    });
  </script>