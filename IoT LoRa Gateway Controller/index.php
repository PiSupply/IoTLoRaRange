<?php
include('inc/header.php');

/*
* Lets load most of the information required to fill this page's details out
*
*/

//Linux uptime
$uptime = shell_exec('uptime -p');
$packetForwarder = shell_exec('systemctl is-active iot-lora-gateway.service');
if(strlen($packetForwarder) < 9) {
  $packetForwarder = 1;
}
else {
$packetForwarder = 0;
  }

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
$gatewayIpAddress = getHostByName(getHostName());

//Lets get the data from the NOC api
$ttnNocStatus = json_decode(file_get_contents('http://noc.thethingsnetwork.org:8085/api/v2/gateways/ryanteck-rw-1'),true);
$packetsRx = $ttnNocStatus["rx_ok"];
$packetsTx = $ttnNocStatus["tx_in"];

?>
<h1>IoT LoRa Gateway Status Page</h1>


<div class="ui divided grid stackable">

    <div class="three column row">
    <div class="column wide">
      <?php
      //Change the alert box's colour based on the status.
      if($internetStatus == 0) {
        echo("<div class=\"ui positive message segment\">");
      }
      elseif($internetStatus == 3) {
        echo("<div class=\"ui error message segment\">");
      }
      else {
        echo("<div class=\"ui warning message segment\">");
      }
      ?>

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
    <div class="column wide">
      <?php
      //Change the alert box's colour based on the status.
      if($packetForwarder == 1) {
        echo("<div class=\"ui positive message segment\">");
      }
      else {
        echo("<div class=\"ui error message segment\">");
      }
       ?>
          <h4>Packet Forwarder</h4>
          The packet forwarder service is <?php if($packetForwarder==0){echo("not ");}?>running.
      </div>
    </div>

    <div class="column wide">
      <div class="ui info message segment">
          <h4>Uptime</h4>
          This gateway has been online for:<br/>
          <?php echo($uptime); ?>
      </div>
    </div>
      </div>
  </div>
<div class="ui divided grid stackable">

  <div class="row">
      <div class="column wide">
    <div class="ui positive message">
        <span class="font-weight-bold">Gateway IP Address:</span> <?php echo($gatewayIpAddress);?>
    </div>
  </div>
</div>

  <div class="row">
    <div class="column wide">
    <div class="ui positive message">
        <span class="font-weight-bold">Gateway ID:</span> ryanteck-ps-2
    </div>
  </div>
</div>


  <div class="row">
    <div class="column">
    <div class="ui positive message">
        <span class="font-weight-bold">Configured TTN Server:</span> router.eu.thethings.network 
    </div>
  </div>
</div>

<div class="row">
<div class="container">
  <h4>Packet Statistics</h4>
<div class="ui statistics">
  <div class="statistic">
    <div class="value">
      <i class="arrow down icon"></i> <?php echo $packetsRx;?>
    </div>
    <div class="label">
      Recieved
    </div>
  </div>
  <div class="statistic">
    <div class="value">
      <i class="arrow up icon"></i><?php echo $packetsTx;?>
    </div>
    <div class="label">
      Transmitted
    </div>
  </div>
</div>

  </div>
</div>
</div>


<?php
include('inc/footer.php');
?>
