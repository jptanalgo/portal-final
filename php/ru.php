<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT PORTAL</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="../css/ru.css">
  </head>
  <body>
  <?php include('sidebar.php'); ?>  
      
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/ru.css">
    <title>Sliding Form</title>
</head>
<body>
  <center>
    <div class="form-container">
        <div class="form-step active">
            <label>Are you a student in this campus?</label>
            <button onclick="nextStep()">Yes</button>
            <button onclick="nextStep()">No</button>
        </div>
        
        <div class="form-step">
            <label>Terms and Conditions</label>
            <p>Please read and accept the terms and conditions.</p>
            <p>I have read and I accept both BCP E-WALLET and Terms and Conditions, and hereby authorize BCP E-WALLET to share my personal data for the purpose of updating my account information.</p>
            <button onclick="nextStep()">Accept</button>
        </div>
        
        <div class="form-step">
            <label>Enter your mobile number:</label>
            <input type="text" placeholder="Mobile Number">
            <button onclick="nextStep()">Send OTP</button>
        </div>

        <div class="form-step">
            <label>Verify OTP:</label>
            <input type="text" placeholder="Enter OTP">
            <p id="otp-timer">You can get another OTP in <span id="timer">30</span>s</p>
            <button onclick="nextStep()">Verify</button>
        </div>

        <div class="form-step">
            <label>Enter your email:</label>
            <input type="email" placeholder="Email (optional)">
            <button onclick="nextStep()">Next</button>
        </div>

        
        <div class="form-step">
            <label>Username:</label>
            <input type="text" placeholder="Username">
            <button onclick="nextStep()">Next</button>
        </div>

        <div class="form-step">
            <label>Pin Passcode:</label>
            <div class="pin-input">
                <input type="password" id="pin" placeholder="Enter Pin Passcode" maxlength="4" readonly>
            </div>
            <div class="keypad">
                <button onclick="enterPin(1)">1</button>
                <button onclick="enterPin(2)">2</button>
                <button onclick="enterPin(3)">3</button>
                <button onclick="enterPin(4)">4</button>
                <button onclick="enterPin(5)">5</button>
                <button onclick="enterPin(6)">6</button>
                <button onclick="enterPin(7)">7</button>
                <button onclick="enterPin(8)">8</button>
                <button onclick="enterPin(9)">9</button>
                <button onclick="clearPin()">C</button>
                <button onclick="enterPin(0)">0</button>
                <button onclick="nextStep()">Next</button>
            </div>
        </div>

        <div class="form-step">
            <label>Confirm Pin Passcode:</label>
            <div class="pin-input">
                <input type="password" id="confirmPin" placeholder="Confirm Pin Passcode" maxlength="4" readonly>
            </div>
            <div class="keypad">
                <button onclick="enterPin(1)">1</button>
                <button onclick="enterPin(2)">2</button>
                <button onclick="enterPin(3)">3</button>
                <button onclick="enterPin(4)">4</button>
                <button onclick="enterPin(5)">5</button>
                <button onclick="enterPin(6)">6</button>
                <button onclick="enterPin(7)">7</button>
                <button onclick="enterPin(8)">8</button>
                <button onclick="enterPin(9)">9</button>
                <button onclick="clearPin()">C</button>
                <button onclick="enterPin(0)">0</button>
                <button onclick="submitForm()"><a href="loginew.html" class="p3">Submit</a></button>
            </div>
        </div>
    </div>
  </center>
  <script src="../js/ru.js"></script>
</body>
</html>
