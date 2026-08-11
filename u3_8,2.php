<!DOCTYPE html>
    <body>
        <?php
            if(isset($_COOKIE["username"]))
            {
                echo"<h2>Welcome Back !</h2>";
                echo"You are a repeated user.";
            }
            else
            {
                setcookie("username", "Google", time() + (24 * 24 *60 *60), "/");
                echo"<h2>Welcome !</h2>";
                echo"You are a new user.";
            }
        ?>
    </body>
</html>