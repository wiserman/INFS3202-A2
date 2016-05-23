/* List of variables */
var username = "";
var numActiveDevices = 3;
var totalDataRecieved = 184736;
var tableData = [];

/* Google Charts API methods */
/*google.charts.load('current', {'packages':['corechart', 'table']});
google.charts.setOnLoadCallback(drawTotalActivityChart());
google.charts.setOnLoadCallback(drawDeviceTableChart());
google.charts.setOnLoadCallback(populateData());*/


/* A function that handles window resize events */
function resizeEventHandler() {
    //reload current page
    loadHome();
}

function loadHome() {
    //load the data into the home view
    //initTotalMap();
    console.log('home function called');
    //drawTotalActivityChart('total-activity-chart');
    document.getElementById("welcome-message").innerHTML = "Welcome Back, " + username  + ".";
    document.getElementById("num-active-devices").innerHTML = "Number of Active Devices: <b>"
        + numActiveDevices + "</b>";
    document.getElementById("total-data-received").innerHTML = "Total data received: <b>" + totalDataRecieved
        + "KB</b>";
}