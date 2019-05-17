# IoT LoRa Gateway HAT
LoRa (Long Range) is the smart, long-range, wireless transmission technology that is enabling the future of
IoT (Internet of Things). It's very low power but is only suitable for very small amounts of data. Making it
ideal for sensors such as weather monitoring, air quality etc.

Our IoT LoRa Raspberry Pi HAT allows you to create an inexpensive LoRa gateway, compatible with The
Things Network, in conjunction with a Raspberry Pi or other single board computers. The HAT allows you to
set up your IoT LoRa gateway in minutes rather than hours for a third of the price of traditional gateways.

The IoT LoRa Gateway HAT utilises the RAKWireless RAK833/RAK915 mPCIe LoRa gateway concentrator
module which is based on Semtech SX1301 LoRa technology and provides a fully LoRaWAN Compliant
gateway listening on 8 channels at the same time.

**Features:**
* Low power consumption
* HAT form factor means that it is more
compact to other solutions on the market
* Fully soldered and assembled.
* Plug onto your Raspberry Pi, install
our software and you’re ready to
go! No waiting for compiling
* Industrial standard reliability
* Suitable for low power wireless sensor
network applications such as irrigation
systems, smart metering, smart cities,
home automation etc.
* Real time monitoring

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
* ASUS Tinkerboard
* ASUS Tinkerboard S
* Odroid C2
* Any other Raspberry Pi with 40 GPIO Pins

## Hardware
![IoT-LoRa-Gateway-HAT-Top-No-Module_1024x](https://user-images.githubusercontent.com/1878314/57860384-b7bb3f80-77ec-11e9-8ae0-2a91bca9f24a.png)

```text
GPIO
-----------------------------------------------------------------------------------------------------------------------
| 2     4     6     8    10     12    14    16    18    20    22    24    26    28    30    32    34    36    38    40 |
|5V     5V    GND   o     o     o     GND   o     o     GND   o     #     #     o     GND   o     GND   o     o     o  |
|3V3    o     #     o     GND   o     o     #     3V3   #     #     #     GND   o     o     o     o     o     o     GND|
| 1     3     5     7     9     11    13    15    17    19    21    23    25    27    29    31    33    35    37    39 |
-----------------------------------------------------------------------------------------------------------------------

# Used
o Available
+ Can be reused

15 Reset
19 MOSI
21 MISO
23 SCLK
24 CE0 chip select 0
26 CE1 chip select 1

```

```text
GPS UART
--------------------------------
| 1     2     3     4     5    |
|PPS    Rx    Tx    GND   VCC  |
--------------------------------
```

```text
RAK833 mPCIe
---------------------------------------------------------------------------------------------------------------------------------
| 2   4   6   8   10   12   14   16   18   20   22   24   26   28   30   32   34   36   38   40   42   44   46   48   50   52   |
|3V3 GND  +   +   +    +    +    +    GND  +    #    3V3  GND  +    +    +    GND  +    +    GND  +    +    +    +    GND  3V3  |
| +   +   +   +   GND  +    +    GND  GND  #    GND  +    +    GND  GND  +    +    GND  GND  3V3  3V3  GND  #    #    #    #    |
| 1   3   5   7   9    11   13   15   17   19   21   23   25   27   29   31   33   35   37   39   41   43   45   47   49   51   |
---------------------------------------------------------------------------------------------------------------------------------

# Used
+ Unavailable

19 GPS PPS
22 Reset
45 SPI CLK
47 SPI MISO
49 SPI MOSI
51 SPI CS

```

## Software
Please see the following link on how to download and install the software to setup the Gateway - [https://learn.pi-supply.com/make/iot-lora-gateway-sd-card-image-setup/](https://learn.pi-supply.com/make/iot-lora-gateway-sd-card-image-setup/)

Here is the link to the download the pre-compiled OS image, which will still need some minor configuration - [http://pisupp.ly/iotsd](http://pisupp.ly/iotsd)
