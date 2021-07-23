<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create account</title>
    <link rel="stylesheet" href="Accountform.css">
</head>
<body>
    <div class="signup-box">
        <h1>Sign Up</h1>
    <form action="registration.php" method="POST">
       <label>First Name</label>
       <input type="text" name="FirstName" required="required">
       <label>Last Name</label>
       <input type="text" name="LastName" required="required">
       <label>Email</label>
       <input type="text" name="email" required="required">
       <label>Phone Number</label>
       <input type="tel" name="phone" required="required">
       <label>Password</label>
       <input type="password" name="pswd" required="required">
       <label> Confirm Password</label>
       <input type="password" name="pswd" required="required">
       <button class="button" >SUBMIT</button>
    </form>
    <p>Already have account? <a href="login.html">Login here</a></p>
</div>
</body>
</html>