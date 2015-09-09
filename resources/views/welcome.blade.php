@extends('layouts.master')

@section('sidebar')
<h1 class="text-center">Find A Pickup Game</h1>
<div class="container" ng-controller="HomeController">

<map class="map" center="current-location" zoom="4" ng-init="getGames()" >
<marker id="@{{game.id}}" position="@{{game.lat}},@{{game.lng}}" on-click="showInfoWindow(event, '@{{bar+game.id}}')" ng-repeat="game in games">

<info-window id="@{{bar+game.id}}" visible-on-marker="@{{game.id}}">
<div ng-non-bindable="">
<div id="siteNotice"></div>
<h1 id="firstHeading" class="firstHeading">@{{game.name}}</h1>
<div id="bodyContent">
<p>
	<b>Description: </b>@{{game.description}} <br/>
  <b>Created:</b> @{{game.created_at}} <br/>

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
    <input  class="form-control" ng-scope="game.name" id="name" placeholder="Give your game an unique name!">
    <label for="desciption">Description</label>
    <textarea class="form-control" ng-scope="game.description" id="description" 
    placeholder="In a few words describe your game, any special rules, etc."></textarea>
  </div>
  <button type="button" onClick="addGame()" class="btn btn-success">Add Game</button>
</form>
@endsection
