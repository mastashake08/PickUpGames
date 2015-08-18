@extends('layouts.master')

@section('sidebar')
<h1 class="text-center">Find A Pickup Game</h1>
<div class="container" ng-controller="HomeController">

<map class="map" center="current-location" zoom="4" ng-init="getGames()" >
<marker id="@{{game.id}}" position="@{{game.lat}},@{{game.lng}}" on-click="showInfoWindow(event, '@{{bar+game.id}}')" ng-repeat="game in games">

<info-window id="@{{bar+game.id}}" visible-on-marker="@{{game.id}}">
<div ng-non-bindable="">
<div id="siteNotice"></div>
<h1 id="firstHeading" class="firstHeading">@{{game.id}}</h1>
<div id="bodyContent">
<p>
  Created: @{{game.created_at}}
   <a href="http://maps.google.com/?saddr=@{{lat}},@{{lng}}&daddr=@{{game.lat}},@{{game.lng}}" class="btn btn-info">Get Directions</a>
</p>
</div>
</div>
</info-window>

</marker>

</map>

</div>
@endsection

@section('content')
<form role="form">
  <div class="form-group">
    <label for="name">Name</label>
    <input  class="form-control" id="name">
  </div>
  <button type="submit" class="btn btn-success">Add Game</button>
</form>
@endsection
