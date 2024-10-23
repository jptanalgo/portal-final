<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT PORTAL</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="../css/setting.css">
  </head>
  <body>
  <?php include('sidebar.php'); ?>  


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal - Settings</title>
    <link rel="stylesheet" href="setting.css">
</head>
<body>
    <div class="container">
        <h1>Account Settings</h1>
        <form id="settingsForm">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Change Password:</label>
            <input type="password" id="password" name="password">

            <label for="confirm-password">Confirm Password:</label>
            <input type="password" id="confirm-password" name="confirm-password">

            <label for="notifications">Notifications:</label>
            <select id="notifications" name="notifications">
                <option value="enabled">Enabled</option>
                <option value="disabled">Disabled</option>
            </select>

            <button type="submit">Save Changes</button>
        </form>
    </div>
</body>
</html>
</body>
</html>