<?php
    include 'conn.php';

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['delete']) && isset($_POST['bid']) && isset($_POST['pid'])) {
    $bill_id = intval($_POST['bid']);
    $patient_id = intval($_POST['pid']);

    // Step 1: Get the bill amount
    $query = "SELECT amount FROM bills WHERE id = $bill_id";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $bill = mysqli_fetch_assoc($result);
        $amount = $bill['amount'];

        // Step 2: Update patient's total amount
        $update = "UPDATE pt SET amount = amount - $amount WHERE id = $patient_id";
        mysqli_query($conn, $update);

        // Step 3: Delete the bill
        $delete = "DELETE FROM bills WHERE id = $bill_id";
        mysqli_query($conn, $delete);

        echo "<script>alert('Bill deleted successfully'); window.location.href='billpage.php?id=$patient_id';</script>";
    } else {
        echo "<script>alert('Bill not found.'); window.location.href='register.php';</script>";
    }
} else {
    echo "<script>alert('Invalid request.'); window.location.href='register.php';</script>";
}

mysqli_close($conn);
?>
