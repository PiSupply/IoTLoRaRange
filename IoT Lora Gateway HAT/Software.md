# How to update your LoRa Gateway for TTN v3

This guide will help you update your Pi Supply LoRa Gateway HAT to be compatible with the latest TTN v3.

## What you will need

Pi Supply LoRa Gateway HAT
Raspberry Pi
Raspbian Lite OS

## Installation procedure

**Step 1** - Download and install the latest Raspbian OS Lite from the Raspberry Pi website here - https://www.raspberrypi.com/software/operating-systems/

**Step 2** - Power up your Raspberry Pi with the SD card inserted and the Pi Supply LoRa Gateway HAT attached also. Once you have logged in using the default credentials, type in the following into the command line:
```
sudo raspi-config
```

In the menu, select “Interfaces” and enable SPI and I2C. Once you have enabled those, you will also need to enable Serial Hardware, but you will need to disable login over shell.

**Step 3** - You will need to clone the RAK installer GitHub repository and run the install script by running the following command in the command line:
```
sudo apt update; sudo apt install git -y
```
```
Sudo git clone https://github.com/ChristopherRush/rak_common_for_gateway.git
```
```
cd rak_common_for_gateway/lora
```

**Step 4** - change the reset pin in the configuration. The Pi Supply LoRa Gateway has a different GPIO pin to reset the LoRa module, and as such, you will need to update the script with this pin number.
```
sudo nano start.sh
```

Edit the following line:
```
SX1301_RESET_BCM_PIN=17
```

Change to:
```
SX1301_RESET_BCM_PIN=22
```

**CTRL+O** & **ENTER** to save

**CTRL+X** to exit the test editor

cd .. to go back to the previous folder

**Step 5** - Install the software with the following command:
```
./install.sh
```

**Step 6** - During the install process you will be prompted to select your gateway from a number of options. Please choose Option “**5**” for RAK2247 SPI.

Wait until the installation is complete.

**Step 7** - Reboot your Gateway:
```
sudo reboot
```

**Step 8** - Now, you can run the Gateway configuration software using the following command:
```
sudo gateway-config
```

In the menu, select option 2 and configure your Gateway channel plan.

**Step 9** - At the top of the menu, you will see your Gateway ID which you will need to add to the packet-forwarder config (Option 4). You will also require this ID when you add a new Gateway in the TTN Stack.
