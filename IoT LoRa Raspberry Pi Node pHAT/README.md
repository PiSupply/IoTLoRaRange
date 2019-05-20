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

## hardware
![https://user-images.githubusercontent.com/1878314/57806506-2948ae80-7757-11e9-941f-a43fef9c4b51.png](https://user-images.githubusercontent.com/1878314/57806506-2948ae80-7757-11e9-941f-a43fef9c4b51.png)

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
|PPS    Rx    Tx    GND   VCC  |
--------------------------------
```

```text
RAK811 Breakout U$3
---------------------------------------------------------------
| 1     2     3     4     5     6     7     8     9     10    |
|3V3   PA13  PA14  PA15  PB3   PB5   PB8   PB9   PA2   GND    |
---------------------------------------------------------------
```

## Software
The software library for the LoRa pHAT can be found at the following GitHub URL - [https://github.com/PiSupply/rak811-python](https://github.com/PiSupply/rak811-python)
