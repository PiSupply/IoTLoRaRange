<?php
include('inc/header.php');




?>
<h1>IoT LoRa Gateway Commands</h1>


<div class="ui warning message">
  <a href="runCommand.php?butt=rstPkt"  class="ui big orange button fluid">Restart</a>
        <strong>Restart Packet Forwarder:</strong> This'll restart the packet forwader service. Usually required after modifying the configuration file.

</div>
<div class="ui warning message">
    <a href="runCommand.php?butt=diag"  class="ui violet big button fluid">Run Diagnostics</a>
        <strong>Run diagnostics program:</strong> Run a quick diagnostics program on the gateway to check for hardware errors.

</div>
<div class="ui collumn segment error message ">
    <a href="runCommand.php?butt=rbtSys"  class="ui yellow button big fluid ">Reboot system</a>
  <strong>Reboot Gateway:</strong> Issues the linux restart command to restart the entire system.

</div>



    <div class="ui error message">
        <a href="runCommand.php?butt=sdSys"  class="ui negative button big fluid">Shutdown system</a>
        <strong>Shutdown Gateway:</strong> Issues the linux shutdown command to shutdown the entire system.
    </div>






<?php
include('inc/footer.php');
?>
