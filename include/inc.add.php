<?php
    if($_POST['submit']){
        require "./config.php";
        $con=new mysqli;
        //var
        $cin=$_POST['cin'];
        $firstname=$_POST['prenom'];
        $lastname=$_POST['nom'];
        $email=$_POST['email'];
        //query
        $sql="insert into $student_table (cin,firstname,lastname,email) 
                values(\"$cin\",\"$firstname\",\"$lastname\",\"$email\")";
        //
        if($con->connect("127.0.0.1","root","toor","ginfo",3306)){
            if($con->query($sql)){
                move_uploaded_file($_FILES['img']['tmp_name'],"../imgs/$cin");
                $con->close();
                header("Location: ../home.php?status=2");
            }else header("Location: ../home.php?status=1");
        }else header("Location: ../home.php?status=0");
    }else header("Location: ../home.php");
?>