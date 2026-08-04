<html lang = "en">
    <body>
        <?php

            $conn = new musqli("localhost","root","studentb");
            if($conn->connect_error){
                die("connection Failed");
            }
            $sql = "DELETE FROM students3 WHERE id = ;";
            if($conn->Query(sql){
                echo "Record Deleted Successfully.";
            }
            else(
                echo "Error";
            )

            $conn->Close();
        ?>
    </body>
</html>