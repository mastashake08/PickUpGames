var app = angular.module('pickupgame', ['ngMap','geolocation']);
app.controller('HomeController',function($scope,geolocation,$http){
  $scope.lat = 0;
  $scope.lng = 0;
  $scope.games = [];
  geolocation.getLocation().then(function(data){
      $scope.lat = data.coords.latitude;
      $scope.lng= data.coords.longitude;
    });
  $scope.getGames = function(){
    $http.get('/game')
    .success(function(data){
      $scope.games = data;
    });
  };
});
