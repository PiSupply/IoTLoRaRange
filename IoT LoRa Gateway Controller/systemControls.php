<?php
include('inc/header.php');




?>
<h1>IoT LoRa Gateway Commands</h1>


<div class="ui warning message">
        <span class="font-weight-bold">Restart Packet Forwarder:</span> This'll restart the packet forwader service. Usually required after modifying the configuration file.
<button  class="ui negative button">Restart</a></button>
</div>
<div class="ui warning message">
        <span class="font-weight-bold">Run diagnostics program:</span> Run a quick diagnostics program on the gateway to check for hardware errors.
<button  class="ui negative button">Run Diagnostics</button>
</div>

    <div class="ui error message">
        <span class="font-weight-bold">Reboot Gateway:</span> Issues the linux restart command to restart the entire system
         <button  class="ui negative button">Reboot system</button>
    </div>



    <div class="ui error message">
        <span class="font-weight-bold">Shutdown Gateway:</span> Issues the linux shutdown command to shutdown the entire system.
        <button  class="ui negative button">Shutdown system</button>
    </div>






<?php
include('inc/footer.php');
?>
