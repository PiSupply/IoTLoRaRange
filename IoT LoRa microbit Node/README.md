# IoT LoRa micro:bit Node
LoRa (Long Range) is the smart, long-range, wireless transmission technology that is enabling the future of
IoT (Internet of Things).

Our IoT micro:bit LoRa Node allows you to create an inexpensive LoRa node, compatible with The Things
Network, in conjunction with a BBC micro:bit or other single board computers. This board allows quicker
prototyping as it has the LoRa stack on the chip. Add sensors, buttons and more to complete your LoRa
network!

The IoT micro:bit LoRa Node uses the RAKWireless RAK811 LoRa node module which is based on Semtech
SX1276 LoRa technology.

The board can be configured to use either of the two different frequencies listed below:
* 868 MHz
* 915 MHz

**Features:**
* Low power - uses less than 50mA during transmission
* Uses RAK811 LoRa Radio with full LoRaWAN Stack embedded
* Supports LoRaWAN connections and LoRaP2P mode
* Fully soldered and assembled
* Populated I2C header for optional GPS module
* Auto switching between internal and external antennas
* RAK811 Breakout header

Compatible with BBC micro:bit only

## Hardware
![BBC micr:bit LoRa Node](https://user-images.githubusercontent.com/1878314/57850762-ac5d1980-77d6-11e9-9197-1018c69ea42f.png)

```text
micro:bit edge connector
---------------------------------------------------------------------------------------------------------------------
| 1   2   3   4   5   6   7   8   9   10   11   12   13   14   15   16   17   18   19   20   21   22   23   24   25 |
| o   o   o   o   o   o   o   o   o   o    o    o    o    #    #    #    #    3V3  3V3  3V3  #    #   GND  GND  GND |
---------------------------------------------------------------------------------------------------------------------

# Used
o Unavailable

14 P13 SCK  
15 P14 MISO
16 P15 MOSI
17 P16 Reset
21 P19 SCL I2C
22 P20 SDA I2C

```

```text
GPS I2C breakout header JP1
--------------------------------
| 1     2     3     4     5    |
|3V3    SDA   SCL   SCK   GND  |
--------------------------------
```

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

We have a comprehensive getting started guide, which shows you how to setup and program your micro:bit node using Microsoft's Makecode - [https://learn.pi-supply.com/make/getting-started-with-the-microbit-lora-node/](https://learn.pi-supply.com/make/getting-started-with-the-microbit-lora-node/) This guide also shows users how to configure a node in the TTN console.


##US915 NOTE
You may experience issues with US915 and AU915 depending on the regional configuration and gateway coverage. As standard up to 64 channels are set as default.

For the things network we recommend that you set the following configuration lines as these will disable all but the 8 that TTN is setup to use.

For the micro:bit node we have set this into the US915 code manually.
