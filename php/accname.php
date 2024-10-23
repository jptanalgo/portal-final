<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT PORTAL</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="../css/accname.css">
  </head>
  <body>
  <?php include('sidebar.php'); ?>  
  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Details</title>
    <link rel="stylesheet" href="accname.css">
</head>
<body>
    <div class="container">
        <h1>Account Details</h1>
        <center>
        <div class="account-info">
            <div class="info-item">
                <label>Account Name:</label>
                <div id="account-name" class="info-box">Bestlink College of the Phil., inc...</div>
                <button class="copy-button" onclick="copyToClipboard('account-name')">Copy</button>
            </div>
            <div class="info-item">
                <label>Account No:</label>
                <div id="account-no" class="info-box">12345678</div>
                <button class="copy-button" onclick="copyToClipboard('account-no')">Copy</button>
            </div>
        </div>

        <div class="buttons">
            <button type="button" id="previous-button"> <a href="deposit.html" class="p3">Previous</a>  </button>
            <button type="button" id="next-button"> <a href="dlreceipt.html" class="p3">Next</a>  </button>
        </div>
    </div>
</center>
    <script src="../js/accname.js"></script>
</body>
</html>
