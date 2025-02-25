<?php
if (isset($_POST['submit'])) {
    $host = "localhost"; 
    $user = "root";      
    $password = "";      
    $db_name = "testthesql";

    
    $con = mysqli_connect($host, $user, $password, $db_name);

    


   
    $username = $_POST['user'];
    $password = $_POST['pass'];

  
 
    if (empty($username) || empty($password)) {
        die("<h1>Login failed. Username or password cannot be empty.</h1>");
    }

    if (!preg_match("/^[a-zA-Z0-9]{3,20}$/", $username)) {
        die("<h1>Invalid username</h1>");
    }


    if (strlen($password) < 8 || strlen($password) > 50) {
        die("<h1>Invalid password </h1>");
    }

    if (preg_match("/['\";\\-]/", $password)) {
        die("<h1>Invalid password</h1>");
    }

   
    $sql = "SELECT * FROM students WHERE name = '$username' AND password = '$password'";

   
    $result = mysqli_query($con, $sql);

    
    $count = $result->num_rows;

    if ($count > 0) {
        echo "<h1><center>Login was successful</center></h1>";
        echo "<p><center> SQL Query: <strong>$sql</strong></center></p>";

     
        echo "<div id='GFG' style='margin: 20px auto; max-width: 600px;'>";
        echo "<table border='1' cellpadding='5' cellspacing='0' style='width: 100%; border-collapse: collapse;'>";
        echo "<tr bgcolor='#ccc'><th>Username</th><th>Password</th></tr>";

       
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td align='center'>" . htmlspecialchars($row['name']) . "</td>";
            echo "<td align='center'>" . htmlspecialchars($row['password']) . "</td>";
            echo "</tr>";
        }

        echo "</table>";
        echo "</div>";
    } else {
        echo "<h1>Login failed, Invalid username or password.</h1>";
    }

    
    mysqli_close($con);
}
?>


