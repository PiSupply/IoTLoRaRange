#!/usr/bin/env bash

if [ ! -d "/sys/class/gpio/gpio17" ]; then
    echo "17" > /sys/class/gpio/export
fi
echo "out" > /sys/class/gpio/gpio17/direction
echo "0" > /sys/class/gpio/gpio17/value
sleep 1
echo "1" > /sys/class/gpio/gpio17/value
sleep 1

echo "Device should be in bootloader"
