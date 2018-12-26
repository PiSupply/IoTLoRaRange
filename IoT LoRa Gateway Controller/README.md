# IoT LoRa Gateway Controller

New for our IoT LoRa Gateways, this software is designed to run on the host SBC
This will allow you to manage and setup your gateway over the network with a simple to use web app.

To access this program visit http://raspberrypi.local:4242

This web app is built using PHP and runs an NGINX Web server. To stop web server run the following command.
```
sudo systemctl stop nginx
```



# Feature list
Ticked off as programmed in
- [ ] View the status of your gateway including internet connectivity, radio status and packet forwarder status.
- [ ] Easily reboot the packet forwarder or entire gateway
- [ ] Configure the gateway's ID, Keys, Routers etc
- [ ] Check the temperature of your Gateway (Using SOCs Temperature sensor)
- [ ] Authentication that uses Linux user & password
- [ ] Set configuration options such as GPS Enabled, region etc
- [ ] Controls the status LEDs
- [ ] Run diagnostics program for support
- [ ] Packet statistics


# Copyright notices
This program is licensed under the GNU GPL V3 License, all files created by us are automatically under this license.

This program uses the following frameworks & libraries to operate:
Symantic
