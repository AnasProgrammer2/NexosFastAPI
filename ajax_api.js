////////////////Nxos Fuctntion ////////////////
window.NexApiGet=function(Message,data,refresh,callback)
{
 var databack="";
 return $.ajax({
  type: "POST",
  url: "/Engine/nxosEngine.php",
    datatype : "json",
    data: {
    'cmd': Message,
    'data':data,
      }, 
    success: function (databack) {

    if(databack!="" && databack!="0") 
    {
       if(typeof callback === "function") callback(databack);
    }
  
  })
}
