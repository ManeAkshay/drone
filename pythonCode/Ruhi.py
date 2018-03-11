import urllib, json

url = "http://192.168.1.2/AutomatedDrone/sample.php"
response = urllib.urlopen(url)
data = json.loads(response.read())
data.encoding = 'ISO-8859-1'
print data
