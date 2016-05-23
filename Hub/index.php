<!doctype html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Hub</title>

        <!-- Load in fonts -->
        <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
        <script src="js/sign_in.js"></script>


        <!-- Links to required resources -->
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/sign_in.css">
        <script src="js/jquery-2.2.2.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?callback=initDeviceMap" async defer></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script src="js/main.js"></script>

        <!-- Perform the onload tasks -->
        <script>
            $(document).ready(function () {
                $('#content').hide();
                $('#deviceList').hide();
            });
        </script>
    </head>

    <body>
        <main>
            <nav class="navbar">
                <ul>
                    <li style="width: 100vw; text-align: center; font-size: 40px; color: #f1f1f1; font-family: 'lobster', cursive">Hub</li>
                </ul>
            </nav>

            <!-- Welcome screen and login form -->
            <div class="welcome" id="welcome">
                <br><br><br><br><br>
                <h1>Welcome to <a style="font-family: lobster,cursive; font-size: larger">Hub</a>!</h1>
                <br>

                <div class="col-lg-4 col-sm-6  well middle">
                    <form action="process_sign_in.php" method="post">
                        <div id="email" class="form_group_style">
                            <label class="si_label">Email:</label>
                            <input type="text" class="input_field_style" id="email_input" placeholder="Enter email" name="myEmail" onclick="removeErrorMessage()">
                            <span id="email_glyph" class="glyphicon form-control-feedback"></span>
                        </div>
                        <div id="pass1" class="form_group_style">
                            <label class="si_label">Password:</label>
                            <input type="password" class="input_field_style" placeholder="Enter password" name="pass1">
                            <span id="pass1_glyph" class="glyphicon form-control-feedback"></span>
                        </div>
                        <button type="submit" class="btn btn-default">Login</button>
                        <p id="error_message" class="error_text"></p>
                    </form> 
                </div>

                <br><br><br>
                <h2>Hub is the centre of your IoT.</h2>
                <p>Designed to be the heart of all your IoT devices, Hub provides<br>
                    developers with a platform that facilitates the storing, visualisation<br>
                    and forwarding of data received from your web enabled systems.</p>
                <a href="getStarted.php" class="button-std">Get Started</a>
            </div>

            <!-- Main content -->
            <div class="content" id="content">
                <!-- Home content -> Holistic view of devices -->
            </div>
        </main>
        <footer>
            <p style="text-align: center; font-size: small">Developed By Joshua Wise s4320715</p>
        </footer>
    </body>
</html>
