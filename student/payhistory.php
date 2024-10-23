<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT PORTAL</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="../css/payhistory.css">
  </head>
  <body>
  <?php include('sidebar.php'); ?>  


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay Bills History</title>
    <link rel="stylesheet" href="payhistory.css">
</head>
<body>
    <div class="container">
        <h1>Pay Bills History</h1>
        
        <div class="form-group">
            <label for="student-name">Student Name:</label>
            <div id="student-name">Jonalyn Diala</div>
        </div>

        <div class="form-group">
            <label for="student-no">Student No:</label>
            <div id="student-no">12345678</div>
        </div>

        <button id="check-response-button">Check Payment Response</button>
        <div id="response-message" class="response-message"></div>

        <table>
            <thead>
                <tr>
                    <th>Transaction Date</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody id="history-body">
                <!-- History rows will be injected here by JavaScript -->
            </tbody>
        </table>
        <button><a href="bcpewallet.html" class="p3">Back</a></button>
    </div>
    <script src="payhistory.js"></script>
</body>
</html>


