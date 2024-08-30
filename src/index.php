<?php
use Core\Autoload;
$a = new Autoload();

// 2. Hardcoded credentials - Vulnerability
$username = "admin";
$password = "password123";

// 3. SQL Injection vulnerability
$user_input = $_GET['user_input'];
$sql = "SELECT * FROM users WHERE username = '$user_input'";
$result = mysqli_query($conn, $sql);

// 4. Cross-Site Scripting (XSS) vulnerability
echo "Hello, " . $_GET['name'];

// 5. Unused variable - Code smell
$unusedVariable = "This is not used";

// 6. Function complexity - Code smell
function complexFunction($number) {
    if ($number > 0) {
        if ($number > 10) {
            if ($number > 20) {
                return "Greater than 20";
            } else {
                return "Between 10 and 20";
            }
        } else {
            return "Between 0 and 10";
        }
    } else {
        return "Negative number";
    }
}


function complexFunction($number) {
    if ($number > 0) {
        if ($number > 10) {
            if ($number > 20) {
                return "Greater than 20";
            } else {
                return "Between 10 and 20";
            }
        } else {
            return "Between 0 and 10";
        }
    } else {
        return "Negative number";
    }
}
// 7. Empty catch block - Code smell
try {
    // Some code that may throw an exception
    throw new Exception("An error occurred");
} catch (Exception $e) {
    // Empty catch block
}

// 8. Using deprecated function - Code smell
$connection = mysql_connect("localhost", "user", "pass");


// 10. Resource leak - Code smell
$file = fopen("example.txt", "r");
// Forgot to close the file

?>
