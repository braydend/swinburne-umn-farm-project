import time
import threading
from gpiozero import DigitalInputDevice # the pi's pin access library

DELAY_TIME = 1800 # 30 minutes

charge_voltage_check = DigitalInputDevice(8)
battery_low_check = DigitalInputDevice(5)
battery_medium_check = DigitalInputDevice(6) # these pin values are interchangeable and may not work in current state
battery_high_check = DigitalInputDevice(13)

def check_battery_status():
    # this would also need to be changed to the web server output
    if charge_voltage_check.is_active: print('solar-power is charging')

    if battery_high_check.is_active:
        print('high battery')
    elif battery_medium_check.is_active:
        print('medium battery')
    elif battery_low_check.is_active:
        print('low battery')
    else:
        print('no battery!')

    time.sleep(DELAY_TIME)

try:
    threading._start_new_thread( check_battery_status )
except:
    # change this to output to web server, printing won't work in the actual system
    print('Cannot start new thread, contact system administrator!')

while True:
    pass