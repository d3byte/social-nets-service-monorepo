window.onload = function () {
  var date = new Date();   //Creates date object
  var hours = date.getHours();   //get hour using date object
  var minutes = date.getMinutes();    //get minutes using date object
  var ampm = hours >= 12 ? 'pm' : 'am';  //Check wether 'am' or 'pm'

  var month = date.getMonth(); //get month using date object
  var day = date.getDate();    //get day using date object
  var year = date.getFullYear();  //get year using date object
  var dayname = date.getDay();  // get day of particular week

  var monthNames = [ "01", "02", "03", "04", "05", "06",
  "07", "08", "09", "10", "11", "12" ];

  var week=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];

  // document.getElementById("para1").innerHTML = hours+"."+minutes+ampm;
  // document.getElementById("para2").innerHTML = week[dayname];
  document.getElementById("date").innerHTML = day+"/"+monthNames[month]+"/"+year;

}
