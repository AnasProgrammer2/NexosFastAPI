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



$cmd=$_POST['cmd'];
$data =$_POST['data'];
$obj = json_decode($data);

$DevName =$obj->DevName;
$DevIp  = $obj->DevIP;
$DevType  =$obj->DevType;
$DevVer  =$obj->DevVer;

if($cmd=="GetIntnxos")
{
$command = NexApiGet($DevIp,$DevVer,$DevType,"sh int ");
}
elseif($cmd=="GetIntModenxos")
{
$command = NexApiGet($DevIp,$DevVer,$DevType,"show interface switchport");
}elseif($cmd=="GetVernxos")
{
$command = NexApiGet($DevIp,$DevVer,$DevType,"show version ;sh system resources ;sh environment");
}elseif($cmd=="GetnxSn")
{
$command = NexApiGet($DevIp,$DevVer,$DevType,"sh inventory module");
}elseif($cmd=="GetIntSfpPowernxos")
{
$command = NexApiGet($DevIp,$DevVer,$DevType,"show interface transceiver details");
}
elseif($cmd=="GetVlansAllnxos")
{
$command = NexApiGet($DevIp,$DevVer,$DevType,"sh vlan summary ;show vlan");
}






?>
