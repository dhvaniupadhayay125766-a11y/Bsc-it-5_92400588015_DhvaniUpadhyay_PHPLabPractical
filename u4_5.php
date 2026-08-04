<html lang ="en">
    <body>
        <?php
        $conn = new mysqli("localhost","root","studentdb");
        if($conn->connect_error)
        {
            die("connection failed");
        }
        $sql = "SELECT * FROM student3";
        $result = $conn->query($sql);

        if($result->num_roots > 0)
        {
            while($row = $result->fetch_assoc())
            {
                echo "ID :" , $row("id") . "<br>";
                echo "Name:" , $row("name") . "<br>";
                echo "Email :" , $row("email") . "<br>";
                echo "City :" , $row("city") . "<br></br>";
            }
        }
        else
        {
            echo "no records found";
        }
        $conn->Close();
        ?>
    </body>
</html>

        