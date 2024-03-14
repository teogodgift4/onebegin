<?php
  include "weather_class.php";
?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="./output.css" rel="stylesheet">
  <title>My Weather</title>
</head>
<body class="font-Poppins">
    <!-- Header -->
    <header>
        <nav class="container flex items-center py-4 mt-4">
          <div class="py-1"><img class="w-24" src="/onebegin/img/logo.webp" alt="weather logo"/></div>
          <ul class="hidden sm:flex flex-1 justify-end items-center gap-12 text-weather-blue uppercase text-sm">
            <li class="cursor-pointer">Features</li>
            <li class="cursor-pointer">Pricing</li>
            <li class="cursor-pointer">Contact</li>
            <button type="button" class="bg-myweather-red text-white rounded-md px-7 py-3 uppercase">Login</button>
          </ul>
          <div class="flex sm:hidden flex-1 justify-end">
            <i class="text-2xl fas fa-bars"></i>
          </div>
        </nav>
    </header>

    <!-- Hero -->
    <section class="relative">
      <div class="container flex flex-col  flex-col-reserve lg:flex-row justify-around gap-12 mt-14 lg:mt-28">
        <div class="sm:w-6/12">
        <h2 class="text-myweather-blue text-3xl md:text-4 lg:text-5xl text-center lg:text-left mb-6">
          The Finest Weather App
        </h2>
        <p class="text-left text-myweather-grey mt-4">
          Nunc egestas neque nec purus sodales vestibulum. Sed dictum sem nec suscipit commodo. 
          In vitae justo feugiat, pulvinar quam quis, ultricies mi. Integer cursus rutrum imperdiet. 
          Suspendisse potenti. Ut consectetur sollicitudin erat sed venenatis. Phasellus tincidunt imperdiet turpis ac rhoncus. Aliquam erat volutpat.
        </p>
        </div>
        <div>
        <form class="w-full max-w-md" action="" method="get">
          <div class="flex items-center border-b border-myweather-purple py-2">
            <input name="city" id="city" class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Please enter the name of the city" aria-label="Full name">
            <button class="flex-shrink-0 bg-myweather-purple hover:bg-myweather-blue border-myweather-purple hover:border-myweather-blue text-sm border-4 text-white py-1 px-2 rounded" type="submit">
              Search
            </button>
            <button class="flex-shrink-0 border-transparent border-4 text-myweather-purple hover:text-myweather-blue text-sm py-1 px-2 rounded" type="button">
              Cancel
            </button>
          </div>
        </form>
        <?php 
        $wt = new Weather("510eb7be47904818b8a174646202809",$_GET['city']);
        ?>
        <p class="text-left text-myweather-grey mt-4">City: <?php $wt->printName(); ?></p>
        <p class="text-left text-myweather-grey mt-4">Region: <?php $wt->printRgeion(); ?></p>
        <p class="text-left text-myweather-grey mt-4">Country: <?php $wt->printCountry(); ?></p>
        <p class="text-left text-myweather-grey mt-4">Date: <?php $wt->printTime(); ?></p>
        <p class="text-left text-myweather-grey mt-4">Temp:<?php $wt->printTemp_c(); ?> C</p>
        <p class="text-left text-myweather-grey mt-4">Conditions:<?php $wt->printCondition(); ?></p>
        </div>
      </div>
    </section>
    <!-- Features -->
    <section class="bg-myweather-white py-20 mt-20">
      <div class="sm:w-3/4 lg:w-5/12 mx-auto px-2">
        <h1 class="text-3xl text-center text-myweather-blue">Features</h1>
        <p class="text-center text-myweather-grey mt-4">
          Nunc egestas neque nec purus sodales vestibulum. Sed dictum sem nec suscipit commodo. 
          In vitae justo feugiat, pulvinar quam quis, ultricies mi. Integer cursus rutrum imperdiet. 
          Suspendisse potenti. Ut consectetur sollicitudin erat sed venenatis. Phasellus tincidunt imperdiet turpis ac rhoncus. Aliquam erat volutpat.
        </p>
      </div>
    </section>
     <!-- Contact Us -->
     <section class="bg-myweather-purple text-white py-20">
      <div class="container">
        <div class="sm:w-3/4 lg:w-2/4 mx-auto">
          <p class="font-light uppercase text-center mb-8">35,000+ ALREADY JOINED</p>
          <h1 class="text-3xl text-center">Stay up-to-date with what we’re doing</h1>
          <div class="flex flex-col sm:flex-row gap-6 mt-8">
            <input
              type="text"
              placeholder="Enter your email address"
              class="focus:outline-none flex-1 px-2 py-3 rounded-md text-black"
            />
            <button type="button" class="btn bg-myweather-red hover:bg-bookmark-white hover:text-black">
              Subscribe
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-myweather-blue py-8">
      <div class="container flex flex-col md:flex-row items-center">
        <div class="flex flex-1 flex-wrap items-center justify-center md:justify-start gap-12">
          <img src="./imgs/logo-bookmark-white.png" alt="" />
          <ul class="flex text-white uppercase gap-12 text-xs">
            <li class="cursor-pointer">Features</li>
            <li class="cursor-pointer">Pricing</li>
            <li class="cursor-pointer">Contact</li>
          </ul>
        </div>
        <div class="flex gap-10 mt-12 md:mt-0">
          <li><i class="text-white text-2xl fab fa-twitter"></i></li>
          <li><i class="text-white text-2xl fab fa-facebook-square"></i></li>
        </div>
      </div>
    </footer>
</body>
</html>