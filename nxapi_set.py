import requests
import json
import sys
import urllib3
urllib3.disable_warnings(urllib3.exceptions.InsecureRequestWarning)

data=json.loads(sys.argv[1])
ip = data['ip'];
username = data['username'];
password =data['password'];
ver =data['ver'];
newconfig =data['newconfig'];


url='http://'+ip+':65000/ins:'





myheaders={'content-type':'application/json'}

payload={
  "ins_api": {
    "version": "1.0",
    "type": "cli_conf",
    "chunk": "0",
    "sid": "1",
    "input": newconfig,
    "output_format": "json"
  }
}

response = requests.post(url,data=json.dumps(payload), headers=myheaders,auth=(username,password)).json()

print(json.dumps(response, indent=2))
