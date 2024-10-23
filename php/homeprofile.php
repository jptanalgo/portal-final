<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT PORTAL</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="../css/homeprofile.css">
</head>
<body>
<?php include('sidebar.php'); ?>  
      

    <div class="container">
        <h1>Student Profile</h1>
        <form action="process_profile.php" method="POST">
            <div class="form-group">
                <label>Name:</label>
                <div id="name">Jonalyn Diala</div>
            </div>

            <div class="form-group">
                <label>Age:</label>
                <div id="age">21</div>
            </div>

            <div class="form-group">
                <label>Student Number:</label>
                <div id="student_number">21014178</div>
            </div>

            <div class="form-group">
                <label>Email:</label>
                <div id="email">jonalyndiala05@gmail.com</div>
            </div>

            <div class="form-group">
                <label>Mobile Number:</label>
                <div id="mobile">09318732702</div>
            </div>

            <div class="form-group">
                <label>Address:</label>
                <div id="address">4 U.P CAMPUS, QUEZON CITY</div>
            </div>

            <button type="button" onclick="window.location.href='edit_profile.php'">Edit Profile</button>
        </form>
    </div>

    <script>
        function logout() {
            alert('Logging out...');
            window.location.href = '../php/splogin.php'; 
        }
    </script>
</body>
</html>