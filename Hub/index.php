<!doctype html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Hub</title>

        <!-- Load in fonts -->
        <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>

        <!-- Links to required resources -->
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <script src="js/jquery-2.2.2.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?callback=initDeviceMap" async defer></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script src="js/main.js"></script>

        <!-- Perform the onload tasks -->
        <script>
            $(document).ready(function() {
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
                <div id="login-form" class="login-form">
                    <form>
                        Username: <input type="text" name="username" id="username" style="margin-left: 5em"><br><br>
                        &nbsp;Password: <input type="password" name="password" id="password" style="margin-left: 5em"><br><br>
                        <input type="button" class="button-std" onclick="login(document.getElementById('username').value, document.getElementById('password').value)" value="Login">
                    </form>
                </div>
                <br><br><br>
                <h2>Hub is the centre of your IoT.</h2>
                <p>Designed to be the heart of all your IoT devices, Hub provides<br>
                    developers with a platform that facilitates the storing, visualisation<br>
                    and forwarding of data received from your web enabled systems.</p>
                <a href="javascript:void(0);" class="button-std">Get Started</a>
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
