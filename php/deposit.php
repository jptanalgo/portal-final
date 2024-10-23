<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT PORTAL</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="../css/deposit.css">
  </head>
  <body>
  <?php include('sidebar.php'); ?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Wallet Deposit</title>
    <link rel="stylesheet" href="../css/deposit.css">
</head>
<body>
    <div class="container">
        <h1>Deposit</h1>
        <center>
        <form id="deposit-form">
            <div class="form-group">
                <input type="number" id="deposit-amount" placeholder="Enter Deposit Amount" required>
            </div>
            <div class="form-group">
                <label for="payment-mode">Mode of Payment:</label>
                <select id="payment-mode" required>
                    <option value="">Select Payment Mode</option>
                    <option value="Asia United Bank (AUB)">Asia United Bank (AUB)</option>
                    <option value="Hello Money App (HMA)">Hello Money App (HMA)</option>
                </select>
            </div>
            <div class="buttons">
                <button type="button" id="previous-button" disabled>Previous</button>
                <button type="submit" id="next-button"><a href="accname.html" class="p3">Next</a></button>
            </div>
        </form>
    </div>
</center>
    <script src="../js/deposit.js"></script>
</body
</html>
