<?php
        $host='localhost';
        $user='root';
        $password='';
        $dbname='db1';
        $conn=mysqli_connect($host,$user,$password,$dbname);
        echo"<div class='message'>";
        if(!$conn){
    
            echo'failed to connect';
        }
?>