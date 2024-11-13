
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs to prevent SQL injection
    $user = $conn->real_escape_string($_POST['username']);
    $pass = $conn->real_escape_string($_POST['password']);
    
    // SQL query to check the login credentials
    $sql = "SELECT * FROM login WHERE username='$user' AND pass='$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Successful login
        echo "Registration successful!";
        // Additional code for successful login can go here
    } else {
        // Failed login
        echo "Failed Registration.";
    }
}


?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
  
  
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
    </style>
</head>
<body>
   
    <h2 align="center">Registration Form</h2>
    <form action="home.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        <label for="">Rewrite password</label>
        <input type="password" name="repeat_password" id="repeat_password">
        <p>Already have an account ? <a href="LOGIN.php">login here</a></p>

        <?php
// Check if form data has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize form inputs
    $password = 'password';
    $repeat_password = trim($_POST['repeat_password']);

    // Check if passwords match
    if ($password === $repeat_password) {
        // Proceed if passwords match
        echo "Passwords match. You can proceed with registration!";
        
        // Additional validation (e.g., minimum length)
        if (strlen($password) < 8) {
            echo "Password must be at least 8 characters long.";
        } else {
            // Hash the password before storing it in the database
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            // Now you can proceed with storing $hashedPassword in the database
            echo "Password is securely hashed and ready to be saved!";
        }

    } else {
        // If passwords don't match, display an error
        echo "Passwords do not match. Please try again.";
    }
   
}
?>
       
        <input type="submit" value="Register" class="registerbtn">
        <?php
       $password = $_POST["password"];
        $rpass= $_POST["repeat_password"];
        
        if (condition($rpass, $password) == false) {
            echo "Registration Failed";
            # code...
        }else {
            echo "Registration Successful !";
            # code...
        }
        
        ?>
       
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form input and sanitize it
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);

    // Validate required fields
    if (empty($username) || empty($password) || empty($email)) {
        echo "All fields are required.";
        exit;
    }

    // Hash the password for secure storage
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Prepare and bind an SQL statement
    $stmt = $conn->prepare("INSERT INTO login (username, pass, email) VALUES (username, password, email)");
    $stmt->bind_param("sss", $username, $hashedPassword, $email);

    // Execute the statement and check for success
    if ($stmt->execute()) {
        echo "User registered successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
}

// Close the connection
$conn->close();
?>

</body>
</html>


