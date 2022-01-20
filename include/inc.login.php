<?php
    session_start();
    if(isset($_SESSION["usr"]))
        header("Location: ../home.php");
        
    if($_GET['submit']){
        require "./config.php";
        $con=new mysqli;
        //var
        $usr=$_GET['usr'];
        $passwd=$_GET['passwd'];
        $table="accounts";
        // 
        $sql="select passwd from $acc_table where usr=\"$usr\"";
        if($con->connect("127.0.0.1","root","toor","ginfo",3306)){
            $row= $con->query($sql)->fetch_row();
            if(!is_null($row)){
                if($row[0]==$passwd){
                    $con->close();
                    $_SESSION["usr"]=$usr;
                    header("Location: ../home.php");
                }else header("Location: ../?status=2"); 
            }else header("Location: ../?status=1");
        }else header("Location: ../?status=0");
    }else header("Location: ../");
?>
