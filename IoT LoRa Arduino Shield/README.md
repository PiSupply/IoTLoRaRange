# IoT LoRa Arduino Shield,

LoRa (Long Range) is the smart, long-range, wireless transmission technology that is enabling the future of
IoT (Internet of Things).

Our IoT LoRa Arduino Shield allows you to create an inexpensive LoRa node, compatible with The Things
Network, in conjunction with a range of Arduinos & Arduino Compatible boards. This shield allows quicker
prototyping as it has the LoRa stack on the chip. Add sensors, buttons and more to complete your LoRa
network!

The IoT LoRa Node pHAT uses the RAKWireless RAK811 LoRa node module which is based on Semtech
SX1276 LoRa technology.

The board can be configured to use either of the two different frequencies listed below:
* 868 MHz
* 915 MHz

**Features:**
* Uses RAK811 LoRa Radio with full LoRaWAN Stack embedded.
* Communicates with the Arduino over UART only using a total of 3 pins for the module.
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
* Arduino Uno
* Arduino Nano
* Arduino Mega
* Most Arduino Compatibles



## Hardware


```text
GPIO
--------------------------------------------------------------------------------------------
| Aref     GND     13     12    11     10    9    8    7    6    5    4    3    2    1     |
|  o       GND      o     #      #      #    o     o   o    o    o    o    o    o    o     |
--------------------------------------------------------------------------------------------

No pins apart from 3V is used on the other side of the board.

# Used
o Available

A4 SDA1 I2C connected to JP1
A5 SCL1 I2C connected to JP1
A3 A3 connected to JP1
10 Tx Connects to Rx on RAK811 module
11 Rx Connects to Tx on RAK811 module
12 Reset pin

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

**Important** If you wish for your node to comply with the LoRaWAN Certification and CE/FCC Certification then you must use the internal antenna only.

## Software

For the Arduino library please see the repository at https://github.com/PiSupply/rak811-arduino
