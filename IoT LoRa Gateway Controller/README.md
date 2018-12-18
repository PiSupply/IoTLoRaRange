#IoT LoRa Gateway Controller

New for our IoT LoRa Gateways, this software is designed to run on the host SBC
This will allow you to manage and setup your gateway over the network with a simple to use web app.

To access this program visit http://raspberrypi.local:4242

This web app will run automatically as a service on boot. To disable it please run this command
```
sudo systemctl
```



#Feature list
Ticked off as programmed in
- [ ] View the status of your gateway including internet connectivity, radio status and packet forwarder status.
- [ ] Easily reboot the packet forwarder or entire gateway
- [ ] Configure the gateway's ID, Keys, Routers etc
- [ ] Check the temperature of your Gateway (Using SOCs Temperature sensor)
- [ ] Authentication that uses Linux user & password
- [ ] Set configuration options such as GPS Enabled, region etc
- [ ] Controls the status LEDs
- [ ] Run diagnostics program for support
