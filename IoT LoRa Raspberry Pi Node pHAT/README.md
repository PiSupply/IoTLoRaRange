# IoT LoRa pHAT Node
LoRa (Long Range) is the smart, long-range, wireless transmission technology that is enabling the future of
IoT (Internet of Things).

Our IoT LoRa Node pHAT allows you to create an inexpensive LoRa node, compatible with The Things
Network, in conjunction with a Raspberry Pi or other single board computers. This pHAT allows quicker
prototyping as it has the LoRa stack on the chip. Add sensors, buttons and more to complete your LoRa
network!

The IoT LoRa Node pHAT uses the RAKWireless RAK811 LoRa node module which is based on Semtech
SX1276 LoRa technology.

The board can be configured to use either of the two different frequencies listed below:
* 868 MHz
* 915 MHz

**Features:**
* Uses RAK811 LoRa Radio with full LoRaWAN Stack embedded.
* Communicates with the Raspberry Pi over UART only using a total of 3 GPIO pins for the module.
* Support LoRaWAN connections and LoRa P2P modes.
* u.FL connector and on-board antenna allowing different antennas to be used or integrated into enclosures with external antennas.
* Also adds 8 extra GPIO pins controllable via the UART including 2 pins which can read analogue sensors!
* Low power - uses less than 50mA during transmission

**Applications:**
* Agriculture
* Smart Cities
* Environmental monitoring
* Industrial Control
* Supply Chain & Logistics
* Energy Metering

**Compatible with:**
* Raspberry Pi A+
* Raspberry Pi B+
* Raspberry Pi 2B
* Raspberry Pi 3B
* Raspberry Pi 3B+
* Raspberry Pi Zero
* Raspberry Pi Zero W
* Any other Raspberry Pi with 40 GPIO Pins

## Hardware
![1_516121d5-d075-4418-b6bd-36dbc977280e_1024x](https://user-images.githubusercontent.com/1878314/62480754-f986d100-b7b0-11e9-991c-7bbf8dfb3866.png)

```text
GPIO
-----------------------------------------------------------------------------------------------------------------------
| 2     4     6     8    10     12    14    16    18    20    22    24    26    28    30    32    34    36    38    40 |
|5V     5V    GND   #    #      o     GND   o     o     GND   o     o     o     #     GND   o     GND   o     o     o  |
|3V3    #     #     #     GND   #     o     o     3V3   o     o     o     GND   #     o     o     o     o     #     GND|
| 1     3     5     7     9     11    13    15    17    19    21    23    25    27    29    31    33    35    37    39 |
-----------------------------------------------------------------------------------------------------------------------

# Used
o Available

3 SDA1 I2C connected to JP1
5 SCL1 I2C connected to JP1
7 GPIO 4 connected to JP1
8 Tx Connects to Rx on RAK811 module
10 Rx Connects to Tx on RAK811 module
11 GPIO 17 Reset pin
27 ID SD EEPROM
28 ID SC EEPROM
37 ID WP EEPROM

```

```text
GPS I2C
--------------------------------
| 1     2     3     4     5    |
|VCC    SDA  SCL  GPIO4   GND  |
--------------------------------
```
This is the same as the first 5 pins from 3v3 to GND on the Raspberry Pi

```text
RAK811 Breakout U$3
---------------------------------------------------------------
| 1     2     3     4     5     6     7     8     9     10    |
|3V3   PA13  PA14  PA15  PB3   PB5   PB8   PB9   PA2   GND    |
---------------------------------------------------------------
```
## Antenna
![IoT-LoRa-Node-microbit-Top_1024x-2](https://user-images.githubusercontent.com/1878314/58700166-45735f00-8397-11e9-9612-d2a22d5cedf2.png)

There are two antennas, which can be used with the nodes. By default the internal antenna is in use as indicated by the inductor soldered to the INT solder pads. If you wish to use the external antenna connector then you will need to de-solder the inductor on the INT solder pads and solder this or bridge the EXT solder pads.

**NOTE:** If both solder pads for the antenna are connected then there is a significant reduction in antenna range for both internal and external antennas.
Some units were sent out with both connected so for best performance unsolder the inductor for the one you wish to use.

**Important** If you wish for your node to comply with the LoRaWAN Certification and CE/FCC Certification then you must use the internal antenna only.

## Software
The software library for the LoRa pHAT can be found at the following GitHub URL - [https://github.com/AmedeeBulle/pyrak811](https://github.com/AmedeeBulle/pyrak811)

##US915 NOTE
You may experience issues with US915 and AU915 depending on the regional configuration and gateway coverage. As standard up to 64 channels are set as default.

For the things network we recommend that you set the following configuration lines as these will disable all but the 8 that TTN is setup to use:

```
lora.set_config(ch_mask = '0,FF00')
lora.set_config(ch_mask = '1,0000')
lora.set_config(ch_mask = '2,0000')
lora.set_config(ch_mask = '3,0000')
lora.set_config(ch_mask = '4,0000')
```
