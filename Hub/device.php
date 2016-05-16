<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Device</title>
        
        
        <!-- Load in fonts -->
        <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>

        <!-- Links to required resources -->
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <script src="js/jquery-2.2.2.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?callback=initDeviceMap" async defer></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script src="js/main.js"></script>
    </head>
    <body>
        <?php
            include 'navbar.php';
            include 'sidebar.php';
        ?>
        
        <div class="device-view" id="device-view">
            <div class="outline">
                <div id="device-tabs-container">
                    <ul class="device-tabs">
                        <li><a href="javascript:openDeviceTab(event, 0)" class="tab-icons">Overview</a></li>
                        <li><a href="javascript:openDeviceTab(event, 1)" class="tab-icons">Table</a></li>
                        <li><a href="javascript:openDeviceTab(event, 2)" class="tab-icons">Graph</a></li>
                        <li><a href="javascript:openDeviceTab(event, 3)" class="tab-icons">Live</a></li>
                        <li><a href="javascript:openDeviceTab(event, 4)" class="tab-icons">Connections</a></li>
                    </ul>
                    <div id="device-tabs-0" class="device-chart-tabs">
                        <div id="device-overview">
                            <div class="device-stats" id="device-stats">
                                <h1><a id="device-name"></a></h1>
                                <p id="device-description"></p>
                                <p id="device-received-data"></p>
                                <div class="device-activity-chart-container">
                                    <div id="device-activity-chart" class="total-activity-chart"></div>
                                </div>
                                <br>
                                <p style="text-align: center">
                                    <input type="button" value="Send Message" class="button-std">
                                    <input type="button" style="margin-left: 5em" value="Download Data" class="button-std">
                                </p>
                            </div>
                            <div id="device-map-container" class="device-map-container">
                                <figure id="device-map" class="device-map"></figure>
                            </div>
                        </div>
                    </div>
                    <div id="device-tabs-1" class="device-chart-tabs">
                        <div class="device-graph-container">
                            <figure id="device-table-chart">
                                <p>This tab will display a table view of the data received by the device</p>
                            </figure>
                        </div>
                    </div>
                    <div id="device-tabs-2" class="device-chart-tabs">
                        <div class="device-graph-container">
                            <figure id="device-graph-chart" class="device-graph-chart">
                                <p>This tab will display a series of interactive graphs representing the data received by the device</p>
                            </figure>
                        </div>
                    </div>
                    <div id="device-tabs-3" class="device-chart-tabs">
                        <div class="device-graph-container">
                            <div id="live-data-feed" class="live-data-feed">
                                <p>This tab will house a live data feed view that displays messages received by the device in real time</p>
                            </div>
                        </div>
                    </div>
                    <div id="device-tabs-4" class="device-chart-tabs">
                        <div class="device-graph-container">
                            <div id="connected-devices" class="connected-devices">
                                <p>This tab will facilitate the formation of links between devices. Messages sent by a device will be sent to all of its connected devices.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
