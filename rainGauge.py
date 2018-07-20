# 1 power pulse = 1 tip of sensor = 1.346 mm
# GPIO pin 7 (BCM pin 4) is power pulse, GPIO pin 2 is 5v, GPIO pin 39 is ground

# To Do
# Upon connecting to the Internet, get the time from the internet (keyword: sudo ntp)
# and set the clock for time accurate data

# Would most likely need to change the writing to file code when Internet and database
# connection can be achieved

# Import the required libraries for sensor and functionality
from gpiozero import DigitalInputDevice
import threading
import time

# Assign rainSensor to BCM pin 4
rainSensor = DigitalInputDevice(4)

# Assign a constant mm size for bucket
BUCKET_SIZE = 1.346

# On boot, initialise variables to 0
hourlyRain = 0.0

# Function to add bucket tips to hourly rain
def bucket_tipped():
    global hourlyRain
    hourlyRain = hourlyRain + BUCKET_SIZE
    print(hourlyRain)

# Run a thread to calculate hourly rain
class hourlyCalc(threading.Thread):        
    def run(self):
        print("Starting Hourly Calculations") # Optional code
        global hourlyRain
        dailyRain = 0.0
        hour = 0
        day = 1

        # Enter loop
        while True:
            # Add hourly rain to daily rain
            dailyRain = dailyRain + hourlyRain

            # If the end of the day
            if hour == 23:
                # Open text file
                dataFile = open("rainData.txt", "a")
                # Write hour recording to file
                dataFile.write("hour " + str(hour) + ": " + str(hourlyRain) + "mm rain\n")
                # Write daily recording to file
                dataFile.write("day " + str(day) + ": " + str(dailyRain) + "mm rain\n")
                # Close the file
                dataFile.close()

                # Reset variables and increment day (to be replaced)
                dailyRain = 0.0
                day = day + 1
                hour = 0
            else:
                # Open the file
                dataFile = open("rainData.txt", "a")
                # Write hourly recording to file
                dataFile.write("hour " + str(hour) + ": " + str(hourlyRain) + "mm rain\n")
                # Close the file
                dataFile.close()

                # Increment the hour
                hour = hour + 1

            # Reset hourly rain to 0
            hourlyRain = 0.0

            # Sleep thread for 60 minutes
            time.sleep(3600)

# Assign thread to function
thread = hourlyCalc()
# Start thread upon execution of code
thread.start()
# Run function when voltage is sent to the pin
rainSensor.when_activated = bucket_tipped
