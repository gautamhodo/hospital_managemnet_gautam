<?php
    include 'conn.php';
    if(isset($_POST['id'])){
        $id=$_POST['id'];
        // echo"<br>". $id;
        $sql="delete from pt where id='$id'";
        try{
            if(mysqli_query($conn,$sql)){
                header("Location: viewpatient.php");
                exit();
            }
            else{
                echo'error while deleting data';
            }
        }
        catch(mysqli_sql_exception){
            echo"<script>alert('Patient bills pending');window.location.href='viewpatient.php';</script>";
        }
    }
    else{
        echo'no id found';
    }
?>