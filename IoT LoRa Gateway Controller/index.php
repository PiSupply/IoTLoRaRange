<?php
include('inc/header.php');

/*
* Lets load most of the information required to fill this page's details out
*
*/

//Linux uptime
$uptime = shell_exec('uptime -p');
$packetForwarder = shell_exec('systemctl is-active iot-lora-gateway.service');
var_dump($packetForwarder);
if(strlen($packetForwarder) < 9) {
  $packetForwarder = 1;
}
else {
$packetForwarder = 0;
  }

var_dump($packetForwarder);
//Lets check for external internet connectivity by doing a http request to three servers
$internetCheck1 = file_get_contents('http://www.google.com');
$internetCheck2 = file_get_contents('https://status.thethings.network/');
$internetCheck3 = file_get_contents('https://www.cloudflare.com/');
$internetStatus = 0;
if($internetCheck1 == FALSE) {
  $internetStatus++;
}
if($internetCheck2 == FALSE) {
  $internetStatus++;
}
if($internetCheck3 == FALSE) {
  $internetStatus++;
}
//If the number is greater than 0 then either one of the sites is down, if all three are down there is likely an internet issue.
?>
<h1>IoT LoRa Gateway Status Page</h1>

<div class="container">
  <div class="row">
    <div class="col-sm">
      <?php
      //Change the alert box's colour based on the status.
      if($internetStatus == 0) {
        echo("<div class=\"card alert alert-success\">");
      }
      elseif($internetStatus == 3) {
        echo("<div class=\"card alert alert-danger\">");
      }
      else {
        echo("<div class=\"card alert alert-warning\">");
      }
      ?>

        <div class="card-body">
          <h4>Internet Connectivity</h3>
            <?php
            //Change the text based on the status.

            if($internetStatus == 0) {
              echo("All good!");
            }
            elseif($internetStatus == 3) {
              echo("All 3 Sites we've tested against are producing no response indicating an internet outage.");
            }
            else {
              echo("One or more of the 3 sites we've tested against are producing no response indicating a potential outage");
            }
            ?>
        </div>
      </div>
    </div>
    <div class="col-sm">
      <?php
      //Change the alert box's colour based on the status.
      if($packetForwarder == 1) {
        echo("<div class=\"card alert alert-success\">");
      }
      else {
        echo("<div class=\"card alert alert-danger\">");
      }
       ?>
        <div class="card-body">
          <h4>Packet Forwarder</h4>
          The packet forwarder service is <?php if($packetForwarder==0){echo("not ");}?>running.
        </div>
      </div>
    </div>
    <div class="col-sm">
      <div class="card alert alert-info">
        <div class="card-body">
          <h4>Uptime</h4>
          This gateway has been online for:<br/>
          <?php echo($uptime); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm alert alert-info">
        <span class="font-weight-bold">Gateway IP Address:</span> 192.168.42.1
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col alert alert-info">
        <span class="font-weight-bold">Gateway ID:</span> ryanteck-ps-2
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col alert alert-info">
        <span class="font-weight-bold">Configured TTN Server:</span> router.eu.thethings.network
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm alert alert-info">
        <span class="font-weight-bold">Packets Recieved:</span> 1024
    </div>
    <div class="col-1">
    </div>
    <div class="col-sm alert alert-info">
        <span class="font-weight-bold">Packets Transmitted:</span> 32
    </div>
  </div>
</div>



<?php
include('inc/footer.php');
?>
