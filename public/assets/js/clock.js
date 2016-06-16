function clock(){ 
   	dateNow = new Date(); 
   	hour = dateNow.getHours(); 
   	minute = dateNow.getMinutes(); 
   	second = dateNow.getSeconds(); 

    if (hour   < 10) {hour   = "0"+hour;}
    if (minute < 10) {minute = "0"+minute;}
    if (second < 10) {second = "0"+second;}
   	
   	hourPrint = hour + " : " + minute + " : " + second 

   	$("#clock").html(hourPrint); 

   	setTimeout("clock()",1000) 
}