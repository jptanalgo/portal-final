<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT PORTAL</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="../css/reqrefund.css">
  </head>
  <body>
  <?php include('sidebar.php'); ?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Refund</title>
    <link rel="stylesheet" href="reqrefund.css">
</head>
<body>
    <div class="container">
        <h1>Request Refund</h1>
        <p>Please fill out the details below to request your refund as you are graduating.</p>

        <div class="form-group">
            <label for="student-name">Student Name:</label>
            <input type="text" id="student-name" placeholder="Enter your name" required>
        </div>

        <div class="form-group">
            <label for="account-no">Account No:</label>
            <input type="text" id="account-no" placeholder="Enter your account number" required>
        </div>

        <div class="form-group">
            <label for="ewallet-balance">E-Wallet Balance:</label>
            <div id="ewallet-balance">3000.00</div>
        </div>

        
        <div class="form-group">
            <label for="refund-reason">Reason for Refund:</label>
            <textarea id="refund-reason" placeholder="Explain your reason for refund" required></textarea>
        </div>

        <button id="request-refund-button"><a href="refundhistory.html" class="p3">Submit Refund Request</a></button>
        <div id="response-message" class="response-message"></div>
    </div>

    <script src="reqrefund.js"></script>
</body>
</html>
