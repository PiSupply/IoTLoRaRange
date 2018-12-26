<?php
/*
*IoT LoRa Gateway Controller
*Copyright (C) 2018-2019  Nebra LTD. T/a Pi Supply

*This program is free software: you can redistribute it and/or modify
*it under the terms of the GNU General Public License as published by
*the Free Software Foundation, either version 3 of the License, or
*(at your option) any later version.
*
*This program is distributed in the hope that it will be useful,
*but WITHOUT ANY WARRANTY; without even the implied warranty of
*MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*GNU General Public License for more details.
*
*You should have received a copy of the GNU General Public License
*along with this program.  If not, see <https://www.gnu.org/licenses/>.
*/


//Global variables

$configLocation = "/boot/iot-lora-gateway/local_conf.json";

 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>IoTLoRaGateway Management</title>

    <!-- Bootstrap core CSS -->
    <link href="css/semantic.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/semantic.min.js"></script>

  </head>


  <body>

    <header>
      <!-- Fixed navbar -->
      <div class="ui menu">
        <div class="header item"><img src="img/logo.png"/><pre> IoT LoRa Gateway Management</div>
        <a class="item" href="index.php">Gateway Status</a>
        <a class="item" href="configureGateway.php">Change Configuration</a>
        <a class="item" href="systemControls.php">System Controls</a>
</div>

    </header>


<!-- Begin page content -->
<div class="ui container">
