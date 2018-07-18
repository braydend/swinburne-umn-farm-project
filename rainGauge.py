# 1 power pulse = 1 tip of sensor = 1.346 mm
# GPIO pin 7 (BCM pin 4) is power pulse, GPIO pin 2 is 5v, GPIO pin 39 is ground

from gpiozero import DigitalInputDevice
import threading
import time

rainSensor = DigitalInputDevice(4)

BUCKET_SIZE = 1.346

hourlyRain = 0.0
dailyRain = 0.0
dailyRain_til_LastHour = 0.0
    
def bucket_tipped():
    global dailyRain
    dailyRain = dailyRain + BUCKET_SIZE
    print(dailyRain)

class hourlyCalc(threading.Thread):        
    def run(self):
        print("Starting Hourly Calculations")
        global hourlyRain
        global dailyRain
        global dailyRain_til_LastHour
        hour = 0
        day = 1

        while True:
            hourlyRain = dailyRain - dailyRain_til_LastHour
            dailyRain_til_LastHour = dailyRain
            
            if hour == 23:
                dataFile = open("rainData.txt", "a")
                dataFile.write("hour " + str(hour) + ": " + str(hourlyRain) + "mm rain\n")
                dataFile.write("day " + str(day) + ": " + str(dailyRain) + "mm rain\n")
                dataFile.close()

                dailyRain = 0.0
                dailyRain_til_LastHour = 0.0
                day = day + 1
                hour = 0
            else:
                dataFile = open("rainData.txt", "a")
                dataFile.write("hour " + str(hour) + ": " + str(hourlyRain) + "mm rain\n")
                dataFile.close
                
                hour = hour + 1
        
            time.sleep(3600)

thread = hourlyCalc()
thread.start()
rainSensor.when_activated = bucket_tipped
