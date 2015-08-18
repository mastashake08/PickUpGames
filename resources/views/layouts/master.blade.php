<!DOCTYPE html>
<html ng-app="pickupgame">
    <head>
        <title>Pick Up Games</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="css/app.css" rel="stylesheet" type="text/css">
        <script src="http://maps.google.com/maps/api/js"></script>
<script src="js/all.js"></script>

    </head>
    <body>

      @section('sidebar')
      
          This is the master sidebar.
      @show

      <div class="container">
        <h2>Add A Pickup Game</h2>
          @yield('content')
      </div>


    </body>
</html>
