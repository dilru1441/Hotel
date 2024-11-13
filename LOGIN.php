<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  
}
$sql = "SELECT * FROM login WHERE username='$username' AND pass ='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Valid username and password
    echo "Credentials validated";
} else {
    // Invalid username or password
    echo "Invalid credentials";
}


?>

<html>
<head>
<style>
    body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f5;
        }

        .login-container {
            width: 100%;
            max-width: 400px;
            background-color: white;
            padding: 2em;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .login-container h2 {
            margin-top: 0;
            color: #003580;
            text-align: center;
        }

        .form-group {
            margin-bottom: 1.5em;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5em;
            font-weight: bold;
        }

        .form-group input[type="email"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 0.8em;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group input[type="checkbox"] {
            margin-right: 0.5em;
        }

        .form-group .remember-me {
            display: flex;
            align-items: center;
        }

        .login-button {
            width: 100%;
            padding: 0.8em;
            background-color: #003580;
            color: white;
            font-size: 1em;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-button:hover {
            background-color: #0056b3;
        }

        .forgot-password {
            display: block;
            text-align: center;
            margin-top: 1em;
            color: #0056b3;
            text-decoration: none;
            font-size: 0.9em;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }
</style>  
   
<div class="login-container">
<form action="home.php" method="post">
    <img src="https://img.freepik.com/premium-vector/hotel-logo-vector-illustration_969863-5246.jpg" alt="hotel logo" style="width: 100%; transition: transform 0.2s ease;">
    
<div>
<table align: center>
<tr>
    <div class="form group">
        <br>
<label> Username:</label>
<input type="textbox" id="name" name="username" size="10" >


</div>
</br></br>
</tr>
<tr>
<div class="form group">
<label> Password:</label>
<input type="password" id="pass" name="password" size="10">

</tr>
</br></br>
</div>
</table>

<button onclick="SignIn();" class="btn btn-primary">Sign In</button>
<a href="registration.php">don't have an account</a>
</form>
</div>
</div>
</head>

</body>
</html>