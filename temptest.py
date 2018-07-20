import time
from datetime import datetime
running = True

while running:
    tempStore = open('/sys/bus/w1/devices/28-02183050a7ff/w1_slave')
    data = tempStore.read()
    tempStore.close()
    tempData = data.split("\n")[1].split(" ")[9]
    temperature = float(tempData[2:])
    temperature = temperature/1000
    temp = float("{0:.1f}".format(temperature))
    print('')
    print(datetime.now(),': ')
    print(temp,' Celcius')
    print((temp*1.8) + 32, 'Farenheit')
    time.sleep(5)
