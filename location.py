import requests
payload = {'lat': '12.2334', 'lon': '39.23467' , 'crime_id' : '3'}

req = requests.post("http://192.168.1.2/AutomatedDrone/api/location.php", data=payload)
print(req.text)
