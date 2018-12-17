<?php

header("Content-type: text/plain");
header("Content-Disposition: attachment; filename=local_conf.json");

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

echo json_encode($configFile, JSON_PRETTY_PRINT);
 ?>
