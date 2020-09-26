<?php include 'ajobs.php' ?>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Automobile Jobs</title>

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

    <!-- Jumbotron Header -->
    <!-- <header class="jumbotron my-4">
      <h1 class="display-3">Featured Job Title</h1>
      <p class="lead">Featured Job Information</p>
      <a href="#" class="btn btn-primary btn-lg">Check this out!</a>
    </header> -->

    <!-- Page Features -->
    <br><br>
    <div class="row text-center">

      <div class="col-lg-3 col-md-6 mb-3">
        <div class="card h-80">
          <div class="card-body">
            <h4 class="card-title">Production</h4>
            <?php
              $productionJobs = getJobEntities(CATEGORY_PRODUCTION, 4);
              if(sizeof($productionJobs)>0) {
                echo '<div class = "list-group list-group-flush">';
                for($i=0; $i < sizeof($productionJobs); $i++) {
                  echo '<a href="' . $productionJobs[$i]->getUrl() .'" class="list-group-item list-group-item-action">' . $productionJobs[$i]->getTitle() . '</a>';
                }
                echo '</div>';
              } else {
                echo '<div class="alert alert-dark"> No Jobs Yet</div>';
              }
            ?>
          </div>
          <?php
          if(sizeof($productionJobs) > 4) {
            echo '<div class="card-footer">';
            echo  '<a href="#" class="btn btn-primary">Find Out More!</a>';
            echo '</div>';
          }
          ?>
       </div>
     </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-80">
          <div class="card-body">
            <h4 class="card-title">Assembly</h4>
            <?php
              $assemblyJobs = getJobEntities(CATEGORY_ASSEMBLY, 4);
              if(sizeof($assemblyJobs)>0) {
                echo '<div class = "list-group list-group-flush">';
                for($i=0; $i < sizeof($assemblyJobs); $i++) {
                  echo '<a href="' . $assemblyJobs[$i]->getUrl() .'" class="list-group-item list-group-item-action">' . $assemblyJobs[$i]->getTitle() . '</a>';
                }
                echo '</div>';
              } else {
                echo '<div class="alert alert-dark"> No Jobs Yet</div>';
              }
            ?>
          </div>
          <?php
          if(sizeof($assemblyJobs) > 4) {
            echo '<div class="card-footer">';
            echo  '<a href="#" class="btn btn-primary">Find Out More!</a>';
            echo '</div>';
          }
          ?>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-80">
          <div class="card-body">
            <h4 class="card-title">Quality</h4>
            <?php
              $qualityJobs = getJobEntities(CATEGORY_QUALITY, 4);
              if(sizeof($qualityJobs)>0) {
                echo '<div class = "list-group list-group-flush">';
                for($i=0; $i < sizeof($qualityJobs); $i++) {
                  echo '<a href="' . $qualityJobs[$i]->getUrl() .'" class="list-group-item list-group-item-action">' . $qualityJobs[$i]->getTitle() . '</a>';
                }
                echo '</div>';
              } else {
                echo '<div class="alert alert-dark"> No Jobs Yet</div>';
              }
            ?>
          </div>
          <?php
          if(sizeof($qualityJobs) > 4) {
            echo '<div class="card-footer">';
            echo  '<a href="#" class="btn btn-primary">Find Out More!</a>';
            echo '</div>';
          }
          ?>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-80">
          <div class="card-body">
            <h4 class="card-title">R&D</h4>
            <?php
              $rdJobs = getJobEntities(CATEGORY_RD, 4);
              if(sizeof($rdJobs)>0) {
                echo '<div class = "list-group list-group-flush">';
                for($i=0; $i < sizeof($rdJobs); $i++) {
                  echo '<a href="' . $rdJobs[$i]->getUrl() .'" class="list-group-item list-group-item-action">' . $rdJobs[$i]->getTitle() . '</a>';
                }
                echo '</div>';
              } else {
                echo '<div class="alert alert-dark"> No Jobs Yet</div>';
              }
            ?>
          </div>
          <?php
          if(sizeof($rdJobs) > 4) {
            echo '<div class="card-footer">';
            echo  '<a href="#" class="btn btn-primary">Find Out More!</a>';
            echo '</div>';
          }
          ?>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-80">
          <div class="card-body">
            <h4 class="card-title">Paint</h4>
            <?php
              $paintJobs = getJobEntities(CATEGORY_PAINT, 4);
              if(sizeof($paintJobs)>0) {
                echo '<div class = "list-group list-group-flush">';
                for($i=0; $i < sizeof($paintJobs); $i++) {
                  echo '<a href="' . $paintJobs[$i]->getUrl() .'" class="list-group-item list-group-item-action">' . $paintJobs[$i]->getTitle() . '</a>';
                }
                echo '</div>';
              } else {
                echo '<div class="alert alert-dark"> No Jobs Yet</div>';
              }
            ?>
          </div>
          <?php
          if(sizeof($paintJobs) > 4) {
            echo '<div class="card-footer">';
            echo  '<a href="#" class="btn btn-primary">Find Out More!</a>';
            echo '</div>';
          }
          ?>
        </div>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
