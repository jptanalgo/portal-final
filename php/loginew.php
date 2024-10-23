<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT PORTAL</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="../css/loginew.css">
  </head>
  <body>
  <?php include('sidebar.php'); ?>  


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-Step Login</title>
    <link rel="stylesheet" href="loginew.css">
</head>
<body>
    <div class="container">
        <div class="form-wrapper">
            <!-- Step 1: Username -->
            <div class="form-step active">
                <h1>Enter Your Username</h1>
                <input type="text" id="username" placeholder="Username" required>
                <p class="forgot-password"><a href="#">Forgot your username?</a></p>
                <button class="next-button">Next</button>
            </div>

            
            <!-- Step 2: OTP -->
            <div class="form-step">
                <h1>Enter the OTP</h1>
                <input type="text" id="otp" placeholder="OTP" required>
                <p>You can get another OTP in <span id="otp-timer">30</span> seconds.</p>
                <button id="get-new-otp" disabled>Get a New OTP</button>
                <button class="next-button">Next</button>
            </div>

            <!-- Step 3: PIN Passcode -->
            <div class="form-step">
                <h1>Enter Your PIN Passcode</h1>
                <input type="password" id="pin" placeholder="Passcode" required>
                <div class="keypad">
                    <button>1</button>
                    <button>2</button>
                    <button>3</button>
                    <button>4</button>
                    <button>5</button>
                    <button>6</button>
                    <button>7</button>
                    <button>8</button>
                    <button>9</button>
                    <button class="zero">0</button>
                    <button class="clear">Clear</button>
                </div>
                <button class="submit-button"><a href="bcpewallet.html" class="p3">Submit</a></button>
            </div>
        </div>
    </div>

    <script src="../js/loginew.js"></script>
</body>
</html>
