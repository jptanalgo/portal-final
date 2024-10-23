<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT PORTAL</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="../css/deposithistory.css">
  </head>
  <body>
  <?php include('sidebar.php'); ?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposit History</title>
    <link rel="stylesheet" href="deposithistory.css">
</head>
<body>
    <div class="container">
        <h1>Deposit History</h1>
        <table>
            <thead>
                <tr>
                    <th>Transaction Date</th>
                    <th>Student No.</th>
                    <th>Mode of Payment</th>
                    <th>Amount</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody id="history-body">
                <!-- History rows will be injected here by JavaScript -->
            </tbody>
        </table>
        <button><a href="bcpewallet.html" class="p3">Back</a></button>
    <script src="../js/deposithistory.js"></script>
</body>
</html>

