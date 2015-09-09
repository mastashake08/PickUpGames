var app = angular.module('pickupgame', ['ngMap','geolocation']);
app.controller('HomeController',function($scope,geolocation,$http){
  $scope.lat = 0;
  $scope.lng = 0;
  $scope.game = {};
  $scope.games = function(){
    $http.get('/game')
    .success(function(data){
      console.log(data);
      $scope.games = data;
    });
  };
  geolocation.getLocation().then(function(data){
      $scope.lat = data.coords.latitude;
      $scope.lng= data.coords.longitude;
      console.log($scope.game);
    });

  $scope.addGame = function(){
    console.log('POST GAME FUNCTION INITIATED......');
    $http.post('/game', {name:$scope.game.name, description:$scope.game.description})
    .success(function(data){
      console.log(data);
      $scope.games.push(data);
    });
  };
});
