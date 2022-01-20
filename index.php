<?php
    session_start();
    if(isset($_SESSION["usr"]))
        header("Location: ./home.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            INDEX | LOGIN PAGE | WELCOME       
        </title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <form class="input_section" action="./include/inc.login.php" method="GET">
            <input required type="text" name="usr" placeholder="Username">
            <input required type="text" name="passwd" placeholder="Password">
            <input requured type="submit" name="submit" value="Go">
            <?php
                if(isset($_GET['status'])){
                    echo '<div class="error_section">';
                    switch ($_GET['status']){
                        case 0:
                            echo "Conection issue !";
                            break;
                        case 1:
                            echo "Invalid username !";
                            break;
                        case 2:
                            echo "Invalid password !";
                            break;
                    }
                    echo '<div>';
                }
            ?>
        </form>       
    </body>
</html>