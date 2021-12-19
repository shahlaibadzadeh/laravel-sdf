<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<style>
body, html {height: 100%}
body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}
.menu {display: none}
.bgimg {
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url("https://www.w3schools.com/w3images/pizza.jpg");
  min-height: 90%;
}
</style>
<body>



<!-- About Container -->
<div class="w3-container w3-padding-64 w3-red w3-grayscale w3-xlarge" id="about">
  <div class="w3-content">
  @foreach($tasks as $task)
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">{{ $task -> title1}}</h1>
    <p>{{ $task -> text1}}</p>
    
    <p>{{ $task -> text2}}</p>
    <img src="https://www.w3schools.com/w3images/onepage_restaurant.jpg" style="width:100%" class="w3-margin-top w3-margin-bottom" alt="Restaurant">
    <h1><b>{{ $task -> titleHours}}</b></h1>
    
    <div class="w3-row">
      <div class="w3-col s6">
        <p>{{ $task -> closedDays}}</p>
        <p>{{ $task -> openHourWen}}</p>
        <p>{{ $task -> openHourThu}}</p>
      </div>
      <div class="w3-col s6">
        <p>{{ $task -> openHourFri}}</p>
        <p>{{ $task -> openHourSat}}</p>
        <p>{{ $task -> closedSun}}</p>
      </div>
    </div>
    @endforeach
    
  </div>
</div>


</body>
</html>