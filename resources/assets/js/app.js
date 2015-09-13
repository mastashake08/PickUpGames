var app = angular.module('pickupgame', ['ngMap','geolocation']);
app.controller('HomeController',function($scope,geolocation,$http){
  $scope.game = {};
  $scope.games = [];
  $scope.coords = {};
//get geolocation
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        alert("Geolocation is not supported by this browser.");
    }
}
function showPosition(position) {
  console.log(position);
    $scope.$apply(function(){
      $scope.coords.lat = position.coords.latitude;
    $scope.coords.lng = position.coords.longitude;

    });
    }

//Get Games function
  $scope.getGames = function(){
    $http.get('/game')
    .success(function(data){
      console.log(data);
      $scope.games = data;
    });
  };

//Add Game function
  $scope.addGame = function(){
    console.log('POST GAME FUNCTION INITIATED......');
    $http.post('/game', {name:$scope.game.name, description:$scope.game.description,lat:$scope.coords.lat,lng:$scope.coords.long})
    .success(function(data){
      console.log(data);
      $scope.games.push(data);
    });
  };

});
