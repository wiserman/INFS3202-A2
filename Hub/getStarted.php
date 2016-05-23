<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Get Started</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/sign_up.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
        <script src="js/sign_up.js"></script>
        
        <!-- Load in fonts -->
        <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>

        <!-- Links to required resources -->
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/getStarted.css">
        <script src="js/jquery-2.2.2.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?callback=initDeviceMap" async defer></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script src="js/main.js"></script>
    </head>
    <body>
        <?php
            
        ?>
        <nav class="navbar">
                <ul>
                    <li style="width: 100vw; text-align: center; font-size: 40px; color: #f1f1f1; font-family: 'lobster', cursive">Hub</li>
                </ul>
        </nav>
        
        <div id="page" class="container-fluid text-center" ng-app="myApp" ng-controller="myCtrl"> 
            <div class="row content">
                <div class="col-md-3 sidenav">
                </div>
                <div class="col-md-6 text-left mobile">
                    <div class="col-md-12 col-sm-12 text-center btmpad20 mobile">                      
                        <h3 id="sign_up" class="h3">
                            <span class="glyphicon glyphicon-pencil btmpad20"></span>Sign Up
                        </h3>
                        <div class="col-lg-11 col-md-12 col-sm-10 col-xs-12 hr middle">
                        </div>
                        <div class="spacer">                           
                        </div>  
                        <div class="col-lg-11 col-md-12 col-sm-10 col-xs-12 well middle">
                            <form role="form" name="myForm" novalidate action="process_sign_up.php" method="post">
                                <div class="form-group has-feedback" id="email">
                                    <label class="su_label">Email:</label>
                                    <input type="text" class="form-control" id="email_input" placeholder="Enter email" name="myEmail" ng-model="myEmail" ng-change="emailCheck()" onclick="removeErrorMessage()">
                                    <span id="email_glyph" class="glyphicon form-control-feedback"></span>
                                    <p id="email_para" ng-show="false" class="error_text ng-hide">Not a valid email address</p>
                                </div>
                                <div class="form-group has-feedback" id="pass1">
                                    <label class="su_label">Password:</label>
                                    <input type="password" class="form-control" placeholder="Enter password" name="pass1" ng-model="pass1" ng-change="passCheck()">
                                    <span id="pass1_glyph" class="glyphicon form-control-feedback"></span>
                                    <p id="pass1_para" ng-show="false" class="error_text ng-hide">Password must be a minimum of 8 characters</p>
                                </div>
                                <div class="form-group has-feedback" id="pass2">
                                    <label class="su_label">Confirm Password:</label>
                                    <input type="password" class="form-control" placeholder="Confirm password" name="pass2" ng-model="pass2" ng-change="passCheck()">
                                    <span id="pass2_glyph" class="glyphicon form-control-feedback"></span>
                                    <p id="pass2_para" ng-show="false" class="error_text ng-hide">Passwords do not match</p>
                                </div>
                                <button type="submit" class="btn btn-default" ng-disabled="isDisabled">Submit</button>
                                <p id="error_message" class="error_text"></p>
                            </form> 
                        </div>
                        <div class="spacer">                           
                        </div>
                        <p id="forgot">
                            Forgot your password?
                        </p>
                    </div>
                </div>
                <div class="col-md-3 sidenav">
                </div>
            </div>
        </div>
    </body>
</html>
