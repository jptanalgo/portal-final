<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT PORTAL</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="../css/concern.css">
  </head>
  <body>
  <?php include('sidebar.php'); ?>  


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal - Concern Ticketing System</title>
    <link rel="stylesheet" href="../css/concern.css">
</head>
<body>
    <div class="container">
        <h1>Submit a Concern Ticket</h1>
        <p id="studentLimitMessage" class="error-message" style="display:none;">The maximum limit of 500 students has been reached. Please try again later.</p>
        <form id="ticketForm" onsubmit="return handleSubmit(event)">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="subject">Concern:</label>
            <input type="text" id="concern" name="concern" required>

            <label for="description">Reason:</label>
            <textarea id="reason" name="reason" rows="4" required></textarea>

            <label for="priority">Priority Level:</label>
            <select id="priority" name="priority" required>
                <option value="low">Low</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
            </select>

            <button type="submit">Submit Ticket</button>
        </form>
    </div>

    <script>
        const studentLimit = 500; // Example limit
        let currentStudentCount = 0; // This would come from your backend

        function handleSubmit(event) {
            event.preventDefault();

            // Check if student limit has been reached
            if (currentStudentCount >= studentLimit) {
                document.getElementById('studentLimitMessage').style.display = 'block';
                return false;
            }

            // Normally here you would send the form data to the backend
            alert('Ticket submitted successfully!');

            // Simulating ticket submission
            currentStudentCount++;
            return false; // Prevent page refresh
        }
    </script>
</body>
</html>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Concern</title>
    <link rel="stylesheet" href="concerns.css">
</head>
<body>
    <div class="container">
        <h1>Message Concern</h1>
        
        <form id="concern-form">
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" placeholder="Enter your message here" required></textarea>
            </div>

            <div class="form-group">
                <label for="image-upload">Choose Image:</label>
                <input type="file" id="image-upload" accept="image/*" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" placeholder="Enter your email" required>
            </div>

            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" id="date" required>
            </div>

            <button type="submit">Submit Concern</button>
            <div id="response-message" class="response-message"></div>
        </form>
    </div>

    <script src="../js/concerns.js"></script>
</body>
</html>