<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT PORTAL</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="../css/refundhistory.css">
  </head>
  <body>
  <?php include('sidebar.php'); ?>  


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refund History</title>
    <link rel="stylesheet" href="refundhistory.css">
</head>
<body>
    <div class="container">
        <h1>Refund History</h1>

        <table>
            <thead>
                <tr>
                    <th>Account Name</th>
                    <th>Account #</th>
                    <th>Amount</th>
                    <th>Reason</th>
                </tr>
            </thead>
            <tbody id="history-body">
            </tbody>
        </table>
        <button><a href="bcpewallet.html" class="p3">Back</a></button>
    </div>
    <script src="refundhistory.js"></script>
</body>
</html>

