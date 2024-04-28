<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="prakform.css">
    <title>Input Data</title>
</head>
<body>
    <h2 class="fw-bold text-center mb-4">Input Data</h2>
    <div class="center-box">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1 text-center">
                    <div class="jumbotron content">
                        <form action="prakinput.php" method="POST">
                            <label for="nrp" class="fw-bold">NRP</label><br>
                            <input type="text" id="nrp" name="nrp"><br>
                            
                            <label for="name" class="fw-bold">Name</label><br>
                            <input type="text" id="name" name="name"><br>
                            
                            <label for="gender" class="fw-bold">Gender</label><br>
                            <select id="gender" name="gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select><br>
                            
                            <label for="birthplace" class="fw-bold">Birthplace</label><br>
                            <input type="text" id="birthplace" name="birthplace"><br>
                            
                            <label for="birthdate" class="fw-bold">Birthplace</label><br>
                            <input type="date" id="birthdate" name="birthdate"><br>
                            
                            <label for="address" class="fw-bold">Address</label><br>
                            <textarea id="address" name="address"></textarea><br>
                            
                            <label for="religion" class="fw-bold">Religion</label><br>
                            <input type="text" id="religion" name="religion"><br>
                            
                            <label for="major" class="fw-bold">Major</label><br>
                            <input type="text" id="major" name="major"><br>
                            
                            <label for="age" class="fw-bold">Age</label><br>
                            <input type="number" id="age" name="age"><br><br>
                            
                            <a href="index.php" class="btn btn-secondary" onclick="return confirm('Are you sure you want to go back?\nData will not be saved.');">Back</a>
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
