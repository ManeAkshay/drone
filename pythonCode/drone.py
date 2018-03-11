from dronekit import connect

import requests
# Connect to the Vehicle (in this case a UDP endpoint)
vehicle = connect('/dev/ttyACM0', wait_ready=True)

print("GPS: %s" % vehicle.gps_0)

print("Global Location : %s" % vehicle.location.global_frame.lat)
print("Global Location : %s" % vehicle.location.global_frame.lon)

payload = {'lat': vehicle.location.global_frame.lat, 'lon': vehicle.location.global_frame.lon , 'crime_id' : '3'}

req = requests.post("http://192.168.1.2/AutomatedDrone/api/location.php", data=payload)

