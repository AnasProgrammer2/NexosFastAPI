<?php
function NexApiGet($ip,$ver,$type,$newconfig)
{
global $username;
global $Rpass;
global $Spass;
global $libpath;
$pass ="";
$str="";
if($ver=="iosxe")
$ver="ios";
if($type=="Swtich")
$pass=$Spass;
$data = array("ip"=>$ip, "username"=>$username, "password"=>$pass,"ver"=>$ver,"newconfig"=>$newconfig);
$datajson=json_encode($data);
$str=$libpath."nxos/nxapi.py   '".$datajson."' ";	
return  $str;
}
function NexApiSet($ip,$ver,$type,$newconfig)
{
global $username;
global $Rpass;
global $Spass;
global $libpath;
$pass ="";
$str="";
if($ver=="iosxe")
$ver="ios";
if($type=="Swtich")
$pass=$Spass;
$data = array("ip"=>$ip, "username"=>$username, "password"=>$pass,"ver"=>$ver,"newconfig"=>$newconfig);
$datajson=json_encode($data);
$str=$libpath."nxos/nxapi_set.py   '".$datajson."' ";	
return  $str;
}








?>
