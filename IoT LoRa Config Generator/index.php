
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>IoTLoRaGateway Configurato</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">
    <style type="text/css" media="print">
            @page
            {
                size: landscape;
            }
        </style>
  </head>


  <body>

    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">IoTLoRaGateway Configurator</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>


<!-- Begin page content -->
<main role="main" class="container">
  <div class="row align-items-center">
     <div class="text-center">
       <h1>LoRa Gateway Configuration Tool</h1>
     </div>
  </div>
  <div class="row align-items-center">
     <div class="text-center">
       <p>This tool will help you configure your IoT LoRa Gateway HAT, simply type the data required into each field and this site will generate the configuration script for you. Once generated it will download and you simply need to copy this into the iotloragateway folder on the SD Card.</p><br/>
       <p>Please note this file is generated on the server so the data you type in is sent over the internet for processing.<br/>Security measures have been taken to ensure the safety of data during transport.</p>
       <p>This tool will be improved over time and feedback is is appreciated</p>
     </div>
  </div>
  <div class="row align-items-center">
    <div class="col-lg">
     <div class="card">
       <h1 class="card-header text-center">Create config file</h1>
       <form action="/generate_conf.php" method="post">
           <div class="card-body">
        <div class="form-group">
         <label for="emailAddr">Contact Email Address:</label> Contact email address in case of any issues.
         <input type="email" id="email" name="email" class="form-control" required/>
         </div>
        <div class="form-group">
         <label for="emailAddr">Description:</label> Short description of the Gateway.
         <input type="text" id="description" name="description" class="form-control" required/>
         </div>
        <div class="form-group">
         <label for="emailAddr">Gateway ID:</label> This is the same as the Gateway ID from the TTN Console.
         <input type="text" id="gatewayId" name="gatewayId" class="form-control" required/>
         </div>
        <div class="form-group">
         <label for="emailAddr">TTN Gateway Key:</label> This is the Gateway Key from the TTN Console
         <input type="text" id="ttnKey"name="ttnKey" class="form-control" required minlength=101/>
         </div>
        <div class="form-group">
         <label for="emailAddr">Altitude:</label> Approximate altitude of the Gateway.
         <input type="text" id="altitude" name="altitude" class="form-control" required/>
         </div>
         <div class="form-group">
          <label for="emailAddr">Latitude:</label> Latitude of the Gateway's Location.
          <input type="text" id="latitude" name="latitude" class="form-control" required/>
          </div>
        <div class="form-group">
         <label for="emailAddr">Longitude:</label> Longitude of the Gateway's Location.
         <input type="text" id="longitude" name="longitude" class="form-control" required/>
         </div>

         <p>A handy tool for this is https://www.latlong.net/convert-address-to-lat-long.html</p>
        <div class="form-group">
         <label for="router">TTN Router:</label>
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


</main>
