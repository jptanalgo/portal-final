<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT PORTAL</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="../css/dlreceipt.css">
  </head>
  <body>
  <?php include('sidebar.php'); ?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload and Download Receipt</title>
    <link rel="stylesheet" href="dlreceipt.css">
</head>
<body>
    <center>
    <div class="container">
        <h1>Upload Screenshot</h1>
        <input type="file" id="file-input" accept="image/*" />
        <button id="upload-button">Upload</button>
        <br />
        <img id="preview" src="" alt="Preview" style="display: none; max-width: 100%; margin-top: 20px;" />
        <br />
        <button id="download-button" style="display: none;">Download Receipt</button>

        <div class="buttons">
            <button type="button" id="previous-button"> <a href="accname.html" class="p3">Previous</a>  </button>
            <button type="button" id="next-button"> <a href="deposithistory.html" class="p3">Completed</a>  </button>
        </div>
    </div>
</center>
    <script src="../js/dlreceipt.js"></script>
</body>
</html>

