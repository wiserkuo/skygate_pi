#!/usr/bin/python
import time
import RPi.GPIO as GPIO
import time

GPIO.setmode(GPIO.BOARD)
GPIO.setup(11,GPIO.OUT)
for j in range(0,3):
  for i in range(0,5):
    GPIO.output(11,False)
    time.sleep(0.1)
    GPIO.output(11,True)
    time.sleep(0.1)
  time.sleep(0.5)
GPIO.cleanup();
