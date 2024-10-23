<?php 
// Include the database connection file
include 'connections.php'; 

$Username = $Password = $ConfirmPassword = $Email = $Age = $AccountType = "";
$UsernameErr = $PasswordErr = $ConfirmPasswordErr = $EmailErr = $AgeErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Username validation
    if (empty($_POST["Username"])) {
        $UsernameErr = "Username is required!";
    } else {
        $Username = $_POST["Username"];
    }

    
    // Password validation
    if (empty($_POST["Password"])) {
        $PasswordErr = "Password is required!";
    } else {
        $Password = $_POST["Password"];
    }

    // Confirm password validation
    if (empty($_POST["Cpassword"])) {
        $ConfirmPasswordErr = "Confirm Password is required!";
    } else {
        $ConfirmPassword = $_POST["Cpassword"];
        if ($Password !== $ConfirmPassword) {
            $ConfirmPasswordErr = "Passwords do not match!";
        }
    }

    // Email validation
    if (empty($_POST["Email"])) {
        $EmailErr = "Email is required!";
    } elseif (!filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL)) {
        $EmailErr = "Invalid email format!";
    } else {
        $Email = $_POST["Email"];
    }

    // Age validation
    if (empty($_POST["Age"])) {
        $AgeErr = "Age is required!";
    } elseif (!filter_var($_POST["Age"], FILTER_VALIDATE_INT)) {
        $AgeErr = "Age must be a number!";
    } else {
        $Age = $_POST["Age"];
    }

    // Account type validation
    if (empty($_POST["AccountType"])) {
        $AccountType = "2"; // Default to 'student' if not provided
    } else {
        $AccountType = $_POST["AccountType"];
    }

    // Insert data if no validation errors
    if (empty($UsernameErr) && empty($PasswordErr) && empty($ConfirmPasswordErr) && empty($EmailErr) && empty($AgeErr)) {
        // Hash the password before storing it
        $hashedPassword = password_hash($Password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO login1 (username, password, age, email, account_type) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssi", $Username, $hashedPassword, $Age, $Email, $AccountType);

        if ($stmt->execute()) {
            echo "<script>alert('Registration successful!');</script>";
            header("Location: view.php");
        } else {
            echo "<script>alert('Error: Could not register.');</script>";
        }
        
        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT PORTAL</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="../css/create.css?v=<?php echo time(); ?>">
</head>
<body>
<?php include('sidebar.php'); ?>  
<body>   
    <center>
        <br>
        <h1>REGISTRATION</h1><br><br>
    </center>
    
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <center>
            <label>Username: </label>
            <input type="text" placeholder="Enter Username" name="Username" value="<?php echo htmlspecialchars($Username); ?>">
            <br><span class="error"><?php echo $UsernameErr; ?></span>
        </center>

        <center>
            <label>Password: </label>
            <input type="password" placeholder="Enter Password" name="Password">
            <br><span class="error"><?php echo $PasswordErr; ?></span>
        </center>

        <center>
            <label>Confirm Password: </label>
            <input type="password" placeholder="Enter Confirm Password" name="Cpassword">
            <br><span class="error"><?php echo $ConfirmPasswordErr; ?></span>
        </center>

        <center>
            <label>Email: </label>
            <input type="text" placeholder="Enter Email" name="Email" value="<?php echo htmlspecialchars($Email); ?>">
            <br><span class="error"><?php echo $EmailErr; ?></span>
        </center>

        <center>
            <label>Age: </label>
            <input type="text" placeholder="Enter Age" name="Age" value="<?php echo htmlspecialchars($Age); ?>">
            <br><span class="error"><?php echo $AgeErr; ?></span>
        </center>

        <!-- Account Type (Admin or Student) -->
        <center>
            <label>Account Type: </label>
            <select name="AccountType">
                <option value="1" selected>Admin</option>
                <option value="2" selected>Student</option>
            </select>
        </center>

        <br>
        <center>
            <button type="submit">Create Account</button>
        </center>
    </form>
</body>
</html>