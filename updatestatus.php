<?php
    include 'conn.php';
if(isset($_POST['status'])){
    $id=$_POST['id'];
    $checkStatus="select status from pt where id=$id";
    $result=mysqli_query($conn,$checkStatus);
    if($result && mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
        $currentStatus=$row['status'];
        $newStatus=($currentStatus==0)?1:0;

        $update="update pt set status=$newStatus where id=$id";
        if (mysqli_query($conn, $update)) {
            echo "<script>alert('Status updated to $newStatus');
            window.location.href='viewpatient.php';
            </script>";
        } else {
            echo "<script>alert('Failed to update status');
            window.location.href='viewpatient.php';
            </script>";
        }
    } else {
        echo "<script>alert('Patient not found');
        window.location.href='viewpatient.php';
        </script>";
    }
    }
?>

