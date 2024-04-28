<?php
include 'connect.php';

$nrp = $_POST['nrp'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$birthplace = $_POST['birthplace'];
$birthdate = $_POST['birthdate'];
$address = $_POST['address'];
$religion = $_POST['religion'];
$major = $_POST['major'];
$age = $_POST['age'];

$sql = "INSERT INTO student (nrp, name, gender, birthplace, birthdate, address, religion, major, age) 
        VALUES ('$nrp', '$name', '$gender', '$birthplace', '$birthdate', '$address', '$religion', '$major', '$age')";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>