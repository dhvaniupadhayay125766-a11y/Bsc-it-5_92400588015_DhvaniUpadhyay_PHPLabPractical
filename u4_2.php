<html lang="en">
    <body>
        <?php
            $conn = new sqli("localhost","root","","studentdb",);
            if (!$conn){
                die("Connection failed: " . mysqli_connect_error());
            }
             $sql = "CREATE TABLE IF NOT EXISTS students3"
             (
                 id INT AUTO_INCREMENT PRIMARY KEY,
                 name VARCHAR(50),
                 email VARCHAR(50),
                 city VARCHAR(30),
             );
        ?>
    </body>
</html>