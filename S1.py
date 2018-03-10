import requests

r = requests.request('GET','http://192.168.1.2/AutomatedDrone/sample.php').json()
print(r)
print(r['A'])
