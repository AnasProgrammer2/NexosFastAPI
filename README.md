# NexosFastAPI
The fastest and most secure way to working with Cisco API for Nexus Switch's  
Is fast too to use API nexus from your Website by JS and PHP ,
you will send playlood data to php with key name of what u want , then php will send to python






1- Upload nxapi_set.py , nxapi.py to your Server (Ubuntu);

2- Upload api_php.php, ajax_api.js to your Web Root Path (www)

3- use it in your Website 


How To Use

it Create your Own js file,and call Function NexApiGet to get What you Want 

DevName="Any name"

DevIP="Switch ip"
DevType="Switch"

DevVer="nxos" 

msg="WHAT YOUR KEY Query" 

var Data ={"DevName":DevName,"DevIP":DevIp,"DevType":DevType,"DevVer":DevVer}; 

var DataSend = JSON.stringify(Data); 

NexApiGet(msg,DataSend,refresh,function(DataCallBack){ 

var n=JSON.parse(DataCallBack); 
Console.log(n) 

}
