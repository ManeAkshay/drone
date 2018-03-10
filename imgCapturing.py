import picamera
from time import sleep
from shutil import copyfile
import requests
import pdata


camera = picamera.PiCamera()

url = 'http://'+pdata.ip+'/AutomatedDrone/api/capture.php'
payload = {'id':'11'}
r = requests.post(url, data=payload)
print(r.text)

camera.capture('image1.jpg')

url = 'http://'+pdata.ip+'/AutomatedDrone/api/capture.php'
files = {'fileToUpload': open('image1.jpg', 'rb')}
r = requests.post(url, files=files)
print(r.text)




