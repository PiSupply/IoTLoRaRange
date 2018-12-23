<?php
include('inc/header.php');




?>
<h1>IoT LoRa Gateway Commands</h1>

<div class="container">
  <div class="row">
    <div class="col-sm alert alert-warning">
        <span class="font-weight-bold">Restart Packet Forwarder:</span> This'll restart the packet forwader service. Usually required after modifying the configuration file.
<button  class="btn btn-warning pull-right">Restart</a></button>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col alert alert-warning">
        <span class="font-weight-bold">Run diagnostics program:</span> Run a quick diagnostics program on the gateway to check for hardware errors.
<button type="button" class="btn btn-warning">Run Diagnostics</button>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col alert alert-danger">
        <span class="font-weight-bold">Reboot Gateway:</span> Issues the linux restart command to restart the entire system. <button type="button" class="btn btn-danger">Reboot system</button>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col alert alert-danger">
        <span class="font-weight-bold">Shutdown Gateway:</span> Issues the linux shutdown command to shutdown the entire system. <button type="button" class="btn btn-danger">Shutdown system</button>
    </div>
  </div>
</div>





<?php
include('inc/footer.php');
?>
