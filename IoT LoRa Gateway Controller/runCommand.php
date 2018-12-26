<?php
include('inc/header.php');
//Run command and then add a 60 Second timer for the user to wait.

//Get the command ran

var_dump($_GET['butt']);

?>

<script>
var restartCounter = 0;
var countdownTimer = window.setInterval(function () {
  restartCounter = restartCounter + 1;
  $('#progressBar').progress({percent: restartCounter,text: {
      active  : '{percent}%'
    }});
  if(restartCounter == 99) {
     clearInterval(countdownTimer);
     window.location.replace("index.php");
  }
  $('#progressBar').progress({percent: restartCounter,text: {
      active  : '{percent}%'
    }});
}, 600);
</script>

<h1>IoT LoRa Gateway Command</h1>
<div class="ui indicating progress" id="progressBar">
  <div class="bar"></div>

  <div class="label">0%</div>
</div>
