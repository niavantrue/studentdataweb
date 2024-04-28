<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Red Small Box</title>
  <!-- Link Bootstrap CSS via CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
  <style>
    /* Custom CSS for centering the box and coloring it red */
    .center-box {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 300px; /* Set the width of the box */
      height: 200px; /* Set the height of the box */
      background-color: red; /* Red background color */
    }
    .content {
      text-align: center;
      color: white; /* White text color */
    }
  </style>
</head>
<body>

<!-- Red Small Box -->
<div class="center-box">
  <div class="container">
    <div class="row">
      <div class="col-md-10 offset-md-1">
        <div class="jumbotron content">
          <h1 class="display-6">Red Small Box</h1>
          <p class="lead">This is a small red box that you can fill with content.</p>
          <hr class="my-4">
          <p>You can add more content here...</p>
          <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Optional: Include Bootstrap JS via CDN -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
