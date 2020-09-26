<?php include 'ajobs.php' ?>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Automobile Jobs - Add Job</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/ajobs.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">autoMobileJobs.com</a>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <header class="jumbotron my-4">
      <h1 class="display-4">Add Job</h1>
    </header>
    <form action="" method="post">
      <div class="form-group">
        <label for="categorySelection">Select Category</label><br>
        <select class="form-control" name="categorySelector">
          <option value="production">Production</option>
          <option value="assembly">Assembly</option>
          <option value="rd">R&D</option>
          <option value="paint">Paint</option>
          <option value="quality">Quality</option>
        </select>
      </div>

      <div class="form-group">
        <label for="jobTitle">Job Title</label>
        <input type="text" name="jobTitle" id="jobTitle" placeholder="Enter job title" class="form-control" required>
        <small class="form-text text-muted">This title will be displayed on the web site</small>
      </div>

      <div class="form-group">
        <label for="jobUrl">Job Url</label>
        <input type="text" name="jobUrl" id="jobUrl" placeholder="Enter redirection Url" class="form-control" required>
        <small class="form-text text-muted">This Url will redirect the user for job's page.</small>
      </div>

      <button type="submit" name="submitBtn" class="btn btn-primary">Submit</button>

    </form>
  </div>
  <!-- /.container -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

<?php

if(isset($_POST['submitBtn'])) {
  $category = $_POST['categorySelector'];
  $title = $_POST['jobTitle'];
  $url = $_POST['jobUrl'];

  $jobEntity = createJobEntity($category, $title, $url);

  saveToFile($jobEntity, $category);
  echo '<script>alert("Job Added Successfully")</script>';
}

?>
