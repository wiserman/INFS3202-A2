/* List of variables */
var username = "";
var numActiveDevices = 3;
var totalDataRecieved = 184736;
var currentDeviceId = 0;
var deviceNameList = ["Device 1", "Device 2", "Device 3"];
var deviceDescriptionList = ["A device with the name 'Device 1' associated with this user",
                            "Another associated device but with the name 'Device 2'",
                            "This is the 3rd associated device with name 'Device 3'"];
var receivedDataList = [234123423, 14123214, 1234213];
var device1Loc = {lat: (-27.5033), lng: 153.1001};
var device2Loc = {lat: (-27.5115), lng: 153.0317};
var device3Loc = {lat: (-27.5372), lng: 153.0783};
var deviceLoc = [device1Loc, device2Loc, device3Loc];
var currentView = "Home";
var map;
var tableData = [];

/* Google Charts API methods */
google.charts.load('current', {'packages':['corechart', 'table']});
google.charts.setOnLoadCallback(drawTotalActivityChart());
google.charts.setOnLoadCallback(drawDeviceTableChart());
google.charts.setOnLoadCallback(populateData());


/* Draw the map on the device view */
function initDeviceMap(id) {
    var deviceMapDiv = document.getElementById('device-map');

    map = new google.maps.Map(deviceMapDiv, {
        center: deviceLoc[id - 1],
        zoom: 13
    });
    var marker = new google.maps.Marker({
        position: deviceLoc[id - 1],
        map: map,
        title: 'A'
    });
}

/* Draw the activity chart */
function drawTotalActivityChart(elementID) {
    var data = google.visualization.arrayToDataTable([
        ['Time', 'Messages'],
        ['4am', Math.ceil(Math.random() * 1000)],
        ['5am', Math.ceil(Math.random() * 1000)],
        ['6am', Math.ceil(Math.random() * 1000)],
        ['7am', Math.ceil(Math.random() * 1000)],
        ['8am', Math.ceil(Math.random() * 1000)],
        ['9am', Math.ceil(Math.random() * 1000)],
        ['10am', Math.ceil(Math.random() * 1000)],
        ['11am', Math.ceil(Math.random() * 1000)],
        ['12pm', Math.ceil(Math.random() * 1000)]
    ]);

    var options = {
        title: 'Device Activity',
        legend: {position: 'bottom'},
        backgroundColor: '#E7E7E7'
    };

    var chart = new google.visualization.LineChart(document.getElementById(elementID));
    chart.draw(data, options);
}

/* Populate the example data for each device */
function populateData() {

    var time = Date.now();

    for (var i = 0; i < numActiveDevices; i++) {
        var data = new google.visualization.DataTable();
        data.addColumn('date', 'Timestamp');
        data.addColumn('number', 'Latitude');
        data.addColumn('number', 'Longitude');
        data.addColumn('number', 'Variable 1');
        data.addColumn('number', 'Variable 2');
        data.addColumn('number', 'Variable 3');

        for (var j = 0; j < 100; j++) {
            data.addRows([
                [new Date(time), deviceLoc[i].lat, deviceLoc[i].lng,
                    Math.ceil(Math.random() * 1000), Math.ceil(Math.random() * 100), Math.round(Math.random())]
            ]);
            time += 300;
        }

        tableData[i] = data;
    }
}

/* Draw the table chart */
function drawDeviceTableChart(deviceID) {
    var table = new google.visualization.Table(document.getElementById("device-table-chart"));
    table.draw(tableData[deviceID - 1], {showRowNumber: true, width: '100%', height: '100%', title: 'Table View'});
}

/* Draw the graph charts for each device */
function drawDeviceGraphChart(deviceID) {
    var options = {
        title: 'Graph View',
        legend: {position: 'bottom'},
        backgroundColor: '#E7E7E7',
        width: '100%',
        height: '500px'
    };
    var chart = new google.visualization.LineChart(document.getElementById("device-graph-chart"));
    chart.draw(tableData[deviceID - 1], options);
}

/* Load the device view for device with specified id */
/* Adapted from the w3schools tabs example http://www.w3schools.com/howto/howto_js_tabs.asp*/
function loadDeviceView(id) {
    currentView = "Device";
    $('#home').hide();
    $('#device-view').show();
    currentDeviceId = id;

    //load the data into the device view
    openDeviceTab(event, 0);
}

/* Open the tab with specified code */
function openDeviceTab(event, code) {
    
    var tabContent = document.getElementsByClassName("device-chart-tabs");
    for (var i = 0; i < tabContent.length; i++) {
        tabContent[i].style.display = "none";
    }
    
    var tabIcons = document.getElementsByClassName("tab-icons");
    for (i = 0; i < tabIcons.length; i++) {
        tabIcons[i].className = tabIcons[i].className.replace(" active", "");
    }

    if (code == 0) {
        /* Load the device overview view */
        loadDevice(currentDeviceId);
    } else if (code == 1) {
        document.getElementById("device-tabs-1").style.display = "block";
        // Draw the table chart for the device
        drawDeviceTableChart(currentDeviceId);
    } else if (code == 2) {
        document.getElementById("device-tabs-2").style.display = "block";
        drawDeviceGraphChart(currentDeviceId);
    } else if (code == 3) {
        document.getElementById("device-tabs-3").style.display = "block";
    } else if (code == 4) {
        document.getElementById("device-tabs-4").style.display = "block";
    }
    event.currentTarget.className += " active";
}

/* Load the device information with specified id */
function loadDevice(id) {
    document.getElementById("device-tabs-0").style.display = "block";
    document.getElementById('device-name').innerHTML = deviceNameList[id - 1] + "";
    document.getElementById('device-description').innerHTML = deviceDescriptionList[id - 1] + "";
    document.getElementById('device-received-data').innerHTML = "Total received data: <b>"
        + receivedDataList[id - 1] + "KB</b>";
    drawTotalActivityChart('device-activity-chart');
    initDeviceMap(id);
}

