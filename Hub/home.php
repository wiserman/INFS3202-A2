<!DOCTYPE html>
<?php session_start();?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        
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
        
        <div class="home" id="home">
            <div class="outline">
                <div class="total-stats" id="total-stats">
                    <h1><a id="welcome-message"></a></h1>
                    <!-- Graph of activity over time -->
                    <p id="num-active-devices"></p>
                    <p id="total-data-received"></p>
                    <div class="total-activity-chart-container">
                        <div id="total-activity-chart" class="total-activity-chart"></div>
                    </div>
                    <br>
                    <p style="text-align: center">
                        <input type="button" value="Add Device" class="button-std">
                        <input type="button" style="margin-left: 5em" value="Remove Device" class="button-std">
                    </p>
                </div>
                <div class="total-map-container" id="total-map-container">
                    <figure class="total-map" id="total-map"></figure>
                </div>
            </div>
        </div>
    </body>
</html>
