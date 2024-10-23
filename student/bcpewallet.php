<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT PORTAL</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="../css/bcpewallet.css">
  </head>
  <body>
  <?php include('sidebar.php'); ?>  


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Wallet</title>
    <link rel="stylesheet" href="bcpewallet.css">
</head>
<body>
    <div class="container">
        <h1>E-Wallet</h1>
        <div class="balance">
            <h2>Balance: ₱<span id="balance">0.00</span></h2>
            <h3>Limit: ₱50,000</h3>
        </div>
        
        <div class="actions">
            <h2>Actions</h2>
            <button id="deposit-button"><a href="deposit.html" class="p3">Deposit</a></button>
            <button id="pay-bill-button"><a href="pay.html" class="p3">Pay Bills</a></button>
            <button id="refund-button"><a href="reqrefund.html" class="p3">Request Refund</a></button>
        </div>

        <div class="history">
            <h2>History</h2>
            <button id="view-deposit-history">View Deposit History</button>
            <button id="view-bill-history">View Bill Payment History</button>
            <button id="view-refund-history">View Refund History</button>
            <div id="history-output"></div>
        </div>
    </div>
    
    <script src="../js/bcpewallet.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ Section</title>
    <link rel="stylesheet" href="bcpewallet.css">
</head>
<body>
    <div class="faq-container">
        <h1>Frequently Asked Questions</h1>
        <p>We answer some of your Frequently Asked Questions regarding our 
          platform. If you have a query that is not answered here, Please contact us.</p>
        <div class="faq">
            <h2 class="faq-question">How do i check my account balance?</h2>
            <p class="faq-answer">You can see this anytime on your BCP E-WALLET accounts.</p>
        </div>

        <div class="faq">
            <h2 class="faq-question">I forgot my username, what should i do?</h2>
            <p class="faq-answer">Visit the login page, click the Forgot your username?. Enter 
              your mobile number and click the Verify with OTP then you can get a OTP. So, you 
              can create a new username.</p>
        </div>

        <div class="faq">
            <h2 class="faq-question">I forgot my pin passcode, what should i do?</h2>
            <p class="faq-answer">Visit the login page, click the Forgot your passcode?. Enter 
              your mobile number and click the Verify with OTP then you can get a OTP. So, you 
              can create a new username.</p>
        </div>

        <div class="faq">
          <h2 class="faq-question">How will I know that the deposit has been successful?</h2>
          <p class="faq-answer">Check your deposit history if the status of your receipt of 
            deposit has been completed and you can always check your transactions or account balance.</p>
      </div>

      <div class="faq">
        <h2 class="faq-question">What should i do? If the status of my receipt of deposit in deposit 
          history has been rejected?</h2>
        <p class="faq-answer">You can download it again your receipt in deposit and you can always 
          check your transactions or account balance.</p>
    </div>
    </div>
    <script src="../js/faq.js"></script>
</body>
</html>