<?php

// setup the routes
debugLog("routes.php");

// $app->router->routeAdd(<uri>,<class>,<template>,<meta data xml file>)


$app->router->routeAdd("/game","game","game");
$app->router->routeAdd("/login","login","login");

$app->router->routeAdd("/about","static","about");

// this has to be the last entry as kind of a catch-all
$app->router->routeAdd("","index","index");


?>