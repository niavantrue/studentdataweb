<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $no = $_POST['no'];

    $sql = "DELETE FROM student WHERE no = $no";

    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error deleting data: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request.";
}

mysqli_close($conn);
?>
