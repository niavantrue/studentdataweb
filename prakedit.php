<?php
include 'connect.php';

$no = mysqli_real_escape_string($conn, $_GET['no']);

$sql = "SELECT * FROM student WHERE no=?";
$stmt = mysqli_stmt_init($conn);
if (mysqli_stmt_prepare($stmt, $sql)) {
    mysqli_stmt_bind_param($stmt, "i", $no);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Data isn't found.";
        exit();
    }
    mysqli_stmt_close($stmt);
} else {
    echo "Error: " . mysqli_error($conn);
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="prakedit.css">
    <title>Edit Data</title>
</head>
<body>
    <h2 class="fw-bold text-center mb-4">Edit Data</h2>
    <div class="center-box">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1 text-center">
                    <div class="jumbotron content">
                        <form action="prakupdate.php" method="POST">
                            <input type="hidden" name="no" value="<?php echo htmlspecialchars($row['no']); ?>">
                            
                            <label for="nrp" class="fw-bold">NRP</label><br>
                            <input type="text" id="nrp" name="nrp" value="<?php echo htmlspecialchars($row['nrp']); ?>"><br>
                            
                            <label for="name" class="fw-bold">Name</label><br>
                            <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($row['name']); ?>"><br>
                            
                            <label for="gender" class="fw-bold">Gender</label><br>
                            <select id="gender" name="gender">
                                <option value="Male" <?php if ($row['gender'] == 'Male') echo 'selected'; ?>>Laki-laki</option>
                                <option value="Female" <?php if ($row['gender'] == 'Female') echo 'selected'; ?>>Perempuan</option>
                            </select><br>
                            
                            <label for="birthplace" class="fw-bold">Birthplace</label><br>
                            <input type="text" id="birthplace" name="birthplace" value="<?php echo htmlspecialchars($row['birthplace']); ?>"><br>
                            
                            <label for="birthdate" class="fw-bold">Birthdate</label><br>
                            <input type="date" id="birthdate" name="birthdate" value="<?php echo htmlspecialchars($row['birthdate']); ?>"><br>
                            
                            <label for="address" class="fw-bold">Address</label><br>
                            <textarea id="address" name="address"><?php echo htmlspecialchars($row['address']); ?></textarea><br>
                            
                            <label for="religion" class="fw-bold">Religion</label><br>
                            <input type="text" id="religion" name="religion" value="<?php echo htmlspecialchars($row['religion']); ?>"><br>
                            
                            <label for="major" class="fw-bold">Major</label><br>
                            <input type="text" id="major" name="major" value="<?php echo htmlspecialchars($row['major']); ?>"><br>
                            
                            <label for="age" class="fw-bold">Age</label><br>
                            <input type="number" id="age" name="age" value="<?php echo htmlspecialchars($row['age']); ?>"><br><br>
                            
                            <button type="button" class="btn btn-danger" onclick="confirmDelete()">Delete</button>
                            <input type="submit" class="btn btn-primary" value="Update">
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
<script>
function confirmDelete() {
    if(confirm('Are you sure you want to delete this data?')) {
        document.forms[0].action = 'prakdelete.php';
        document.forms[0].submit();
    }
}
</script>
</html>

<?php
mysqli_close($conn);
?>
