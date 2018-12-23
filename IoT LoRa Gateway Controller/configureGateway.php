- f<?php
include('inc/header.php');
?>

<div class="row align-items-center">
   <div class="text-center">
     <h1>IoT LoRa Gateway Configuration Tool</h1>
   </div>
</div>
<div class="row align-items-center">
   <div class="text-center">
     <p>This page modifies the packet forwarder configuration. After updating the configuration you will have to go to the system control's page to reload the software.</p>
   </div>
</div>
<div class="row align-items-center">
  <div class="col-lg">
   <div class="card">
     <h1 class="card-header text-center">Edit config file</h1>
     <form action="/generate_conf.php" method="post">
         <div class="card-body">
      <div class="form-group">
       <label for="emailAddr" class="font-weight-bold">Contact Email Address:</label> Contact email address in case of any issues.
       <input type="email" id="email" name="email" class="form-control" required/>
       </div>
      <div class="form-group">
       <label for="emailAddr"  class="font-weight-bold">Description:</label> Short description of the Gateway.
       <input type="text" id="description" name="description" class="form-control" required/>
       </div>
      <div class="form-group">
       <label for="emailAddr"  class="font-weight-bold">Gateway ID:</label> This is the same as the Gateway ID from the TTN Console.
       <input type="text" id="gatewayId" name="gatewayId" class="form-control" required/>
       </div>
      <div class="form-group">
       <label for="emailAddr"  class="font-weight-bold">TTN Gateway Key:</label> This is the Gateway Key from the TTN Console
       <input type="text" id="ttnKey"name="ttnKey" class="form-control" required minlength=101/>
       </div>
      <div class="form-group">
       <label for="emailAddr"  class="font-weight-bold">Altitude:</label> Approximate altitude of the Gateway.
       <input type="text" id="altitude" name="altitude" class="form-control" required/>
       </div>
       <div class="form-group">
        <label for="emailAddr"  class="font-weight-bold">Latitude:</label> Latitude of the Gateway's Location.
        <input type="text" id="latitude" name="latitude" class="form-control" required/>
        </div>
      <div class="form-group">
       <label for="emailAddr"  class="font-weight-bold">Longitude:</label> Longitude of the Gateway's Location.
       <input type="text" id="longitude" name="longitude" class="form-control" required/>
       </div>

       <p>A handy tool for this is https://www.latlong.net/convert-address-to-lat-long.html</p>
      <div class="form-group">
       <label for="router"  class="font-weight-bold">TTN Router:</label>
       <select name="router" class="form-control">
        <option value="eu">ttn-router-eu</option>
        <option value="jp">ttn-router-jp</option>
        <option value="us-west">ttn-router-us-west</option>
        <option value="brazil">ttn-router-brazil</option>
        <option value="asia-se">ttn-router-asia-se</option>
        <option value="digital">digitalcatapult-uk-router</option>
        <option value="meshed">meshed-router</option>
        <option value="switch">switch-router</option>
      </select>
      </div>

      <br/>
      <input type="submit" class="btn btn-success" value="Create Config">
      </div>
     </form>
   </div>
  </div>
</div>
<?php
include('inc/footer.php');
?>
