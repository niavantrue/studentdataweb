<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="prakdisplay.css">
    <title>Student Data</title>
</head>
<body>
    <h2 class= "text-center fw-bold mb-4">PENS Student Data</h2>
    <table class="table table-hover curved-table">
        <tr>
            <th style="background-color: #FFE5E1;">No</th>
            <th style="background-color: #FFE5E1;">NRP</th>
            <th style="background-color: #FFE5E1;">Name</th>
            <th style="background-color: #FFE5E1;">Gender</th>
            <th style="background-color: #FFE5E1;">Birthplace</th>
            <th style="background-color: #FFE5E1;">Birthtime</th>
            <th style="background-color: #FFE5E1;">Address</th>
            <th style="background-color: #FFE5E1;">Religion</th>
            <th style="background-color: #FFE5E1;">Major</th>
            <th style="background-color: #FFE5E1;">Age</th>
            <th style="background-color: #FFE5E1;">Edit</th>
        </tr>
        <?php
        include 'connect.php';

        $sql = "SELECT * FROM student";
        $result = mysqli_query($conn, $sql);
        $rowNumber = 1;

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $rowNumber++ . "</td>";
                echo "<td>" . $row["nrp"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["gender"] . "</td>";
                echo "<td>" . $row["birthplace"] . "</td>";
                echo "<td>" . $row["birthdate"] . "</td>";
                echo "<td>" . $row["address"] . "</td>";
                echo "<td>" . $row["religion"] . "</td>";
                echo "<td>" . $row["major"] . "</td>";
                echo "<td>" . $row["age"] . "</td>";
                echo "<td><a href='prakedit.php?no=" . $row["no"] . "'>Edit</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='12'>No data</td></tr>";
        }

        mysqli_close($conn);
        ?>
    </table>
    <div class="col text-end mt-1">
      <a href="prakform.php" class="btn btn-light">Add Data</a>
    </div>
</body>
</html>
