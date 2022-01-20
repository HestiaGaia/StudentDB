<?php
session_start();
    if(!isset($_SESSION["usr"]))
        header("Location: ./index.php");
    //dbconnection
    require "./include/config.php";
    $con= new mysqli;
    $table= "students";
    $sql= "select * from $table";
    $con->connect($host,$usr,$passwd,$dbname);
    $result=$con->query($sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            HOME PAGE
        </title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <div class="control_section">
            <a href="./add_student.php">Add new student</a>
            <a href="./include/inc.logout.php" ">LOGOUT</a>
        </div>
        <H3 style="color: Gray;">STUDENTS DATA ::</H3>
        <?php
            if($result){
                echo '<div class="students_output">';
                $fields=$result->fetch_fields();
                foreach ($fields as $field)
                echo '<div class="fields">',$field->name,'</div>';
                echo '<div class="fields">',"IMG",'</div>';
                while($row=$result->fetch_row()){
                    foreach ($row as $elem)
                    echo '<div>',$elem,'</div>';
                    if(file_exists("./imgs/$row[0]"))
                        echo '<div class="img">',"<img src=\"./imgs/$row[0]\">",'</div>';
                    else echo '<div class="img">','</div>';
                }
                echo '</div>';
            }
        ?>
    </body>
</html>