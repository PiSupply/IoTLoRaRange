<?php
include('inc/header.php');
$randomId = $_POST['gatewayId'];
$randomId = hash("md5",$randomId);

$selectedRouter = $_POST['router'];

$routerList = array(
  'eu' => 'router.eu.thethings.network',
  'jp' => 'router.asia-se.thethings.network',
  'us-west' => 'router.us.thethings.network',
  'brazil' => 'router.brazil.thethings.network',
  'asia-se' => 'router.as.thethings.network',
  'digital' => 'ttn.thingsconnected.net',
  'switched' => 'ttn.opennetworkinfrastructure.org',
  'meshed' => 'thethings.meshed.com.au'
  );

$configFile = (object)array(
  'gateway_conf' =>
                  (object)array(
                    'gateway_ID' => $randomId,
                    'description' => $_POST['description'],
                    'contact_email' => $_POST['email'],
                    'servers' => array((object)array(
                      'serv_type' => "ttn",
                      'server_address' => $routerList[$selectedRouter],
                      'serv_gw_id' => $_POST['gatewayId'],
                      'serv_gw_key' => $_POST['ttnKey'],
                      'serv_enabled' => true
                    )),
                    "fake_gps" => true,
                    'ref_latitude' => $_POST['latitude'],
                    'ref_longitude' => $_POST['longitude'],
                    'ref_altitude' => $_POST['altitude']
                  )
);

$jsonEncoded = json_encode($configFile, JSON_PRETTY_PRINT);
$configHandler = fopen($configLocation, 'w');
fwrite($configHandler, $jsonEncoded);
fclose($configHandler);


 ?>


 <div class="row align-items-center">
    <div class="text-center">
      <h1>IoT LoRa Gateway Configuration Tool</h1>
      <h4>Configuration has been written, please reboot the packet forwarder from the commands tab.</h4>
    </div>
 </div>
