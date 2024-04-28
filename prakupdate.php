<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $no = $_POST['no'];
    $nrp = $_POST['nrp'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $birthplace = $_POST['birthplace'];
    $birthdate = $_POST['birthdate'];
    $address = $_POST['address'];
    $religion = $_POST['religion'];
    $major = $_POST['major'];
    $age = $_POST['age'];

    $sql = "UPDATE student 
            SET nrp='$nrp', name='$name', gender='$gender', birthplace='$birthplace', birthdate='$birthdate', 
            address='$address', religion='$religion', major='$major', age='$age' 
            WHERE no=$no";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
    exit();
} else {
    echo "Error updating data: " . mysqli_error($conn);
}
} else {
echo "Invalid request.";
}

mysqli_close($conn);
?>
