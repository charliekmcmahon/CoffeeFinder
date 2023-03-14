<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.5/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.4.5/dist/flowbite.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/twinklecss@1.1.0/twinkle.min.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
</head>
<div class="m-2">
  <!-- Heading -->
  <div class="bg-white px-4 py-5 border-b border-gray-200 sm:px-6 dark:bg-slate-800">
    <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-slate-100">Welcome to CoffeeFinder</h3>
  </div>

  <!-- make a flex box side by side, with the map on the right side and the coffee shops on the left side -->
  <div class="flex flex-col sm:flex-row">
    <div class="sm:w-1/2 w-full">
      <!-- FORM -->
      <div class="">
            <form class="mb-0" action="submitRating.php" method="POST">
            <div href="#" class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Write a review</h5>
                    <label for="search-icon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Review</label>
                        <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </div>
                        <input type="text" required name="inputReview" id="search-icon" class="mb-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Not enough bats!">
                    </div>
                    <label for="coffee-icon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">What did you have to drink?</label>
                        <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <object type="image/svg+xml" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" data="coffee.svg">
                            </object>
                        </div>
                        <input type="text" required name="inputReview" id="coffee-icon" class="mb-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Lactose free Iced latte">
                    </div>
                <label for="ratingValue" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Rating</label>
                <div class="relative pb-5">
                <div x-data="{ temp: 3, orig: 3 }" class="flex cursor-pointer text-4xl" @click="orig = temp">
                <input name="ratingValue" type="number" :value="temp" class="hidden"/>
                <template x-for="item in [1,2,3,4,5]">
                    <button name="ratingSubmit" type="button" @mouseenter="temp = item" @mouseleave="temp = orig" class="text-gray-300 hover:text-amber-400" :class="{'text-amber-400': (temp >= item)}">★</button>
                </template>
                </div>
                </div>
                <input type="submit" name="submitRating" value="Submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 disabled:bg-grey-700 disabled:opacity-40 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"></input>
            </div>
            <input name="movieID" type="hidden" value="<?php echo 'asd'?>"></input>
            </form>
    </div>
    </div>
    </div>