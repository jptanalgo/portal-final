<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT PORTAL</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="../css/grades.css">
  </head>
  <body>
  <?php include('sidebar.php'); ?>  


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/grades.css">
    <title>Student Grades</title>
</head>
<body>
    <div class="container">
        <h1>Student Grades</h1>
        <label for="semester-select">Select Semester:</label>
        <select id="semester-select" onchange="updateGrades()">
            <option value="1st_year_1st_sem">1st Year - 1st Semester</option>
            <option value="1st_year_2nd_sem">1st Year - 2nd Semester</option>
            <option value="2nd_year_1st_sem">2nd Year - 1st Semester</option>
            <option value="2nd_year_2nd_sem">2nd Year - 2nd Semester</option>
            <option value="3rd_year_1st_sem">3rd Year - 1st Semester</option>
            <option value="3rd_year_2nd_sem">3rd Year - 2nd Semester</option>
            <option value="4th_year_1st_sem">4th Year - 1st Semester</option>
            <option value="4th_year_2nd_sem">4th Year - 2nd Semester</option>
        </select>
        
        <table id="grades-table">
        <table>
            <thead>
                <tr>
                    <th>BSIT</th>
                    <th>Grade</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Capstone 1</td>
                    <td>1.00</td>
                </tr>
                <tr>
                    <td>Research 1</td>
                    <td>1.00</td>
                </tr>
                <tr>
                    <td>ITE 4</td>
                    <td>1.25</td>
                </tr>
                <tr>
                    <td>ITSP</td>
                    <td>1.25</td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="../js/grades.js"></script>
</body>
</html>
</body>
</html>