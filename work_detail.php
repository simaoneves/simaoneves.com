<?php require_once('init.php'); ?>
<?php
  $project = new Project($_GET["project_id"]);
  if ($project->data()->visible == 0) {
    Redirect::redirectTo(404);
  }
?>

<?php require 'includes/header.php' ?>

    <title>Simão Neves - Work - <?= $project->data()->name ?></title>
    <meta name="description" content="All the information about the project <?= $project->data()->name ?>">
    <meta name="keywords" content="Simão Neves, web developer, software engineer, <?= $project->data()->name . ', ' . $project->data()->tech_used ?>">

    <script src="js/vendor/jquery-1.11.0.min.js"></script>

    <!-- bxSlider links -->
    <script src="js/jquery.bxslider.min.js"></script>
    <link href="css/jquery.bxslider.css" rel="stylesheet" />
    <script src="js/sliderSetup.js"></script>

<?php require 'includes/after_header.php' ?>

          <header class="content_header">
            <h1><?= $project->data()->name ?></h1>
            <?php printSocial("_min") ?>
          </header>

          <div class="content">

            <div class="one_col section">
              <div class="img_frame relative">
                <ul class="bxslider">
                  <?php

                    $all_photos_from_project = Project_Photo::getAll($project->data()->id);
                    foreach ($all_photos_from_project as $current_photo) {

                      // If the project is visible
                      if ($current_photo->visible == 1) {
                        echo "<li><img src='backend/uploads/$current_photo->url' alt='$current_photo->keywords'></li>";
                      }
                    }
                    
                  ?>
                </ul>
                <div id="next" class="sliderBtn"></div>
                <div id="prev" class="sliderBtn"></div>
              </div>
            </div>

            <div class="double_col section">
              <h2>Info</h2>
              <div class="vert_bar">
                <div class="left_col">
                  <?= $project->data()->description ?>
                  <br><br>
                  <a href="<?= $project->data()->website ?>" target="_blank" class="btn">Visit website</a>
                </div>
                <div class="right_col">
                  <p><b>Job:</b><br>
                  <?= $project->data()->name ?></p>
                  <p><b>Type:</b><br>
                  <?= $project->data()->type ?></p>

                  <p><b>Date:</b><br>
                  <?= $project->getDate() ?></p>

                  <p><b>Technologies used:</b><br>
                  <?= $project->data()->tech_used ?></p>

                  <?php 
                    if (!$project->data()->produced_for == '') {
                      echo "<p><b>Produced for:</b><br>";
                      echo "<a target='_blank' class='link' href='" . $project->data()->produced_for . "'>" . $project->data()->produced_for . "</a>";
                      echo "</p>";
                    }
                  ?>
                </div>
                <div class="clear"></div>
              </div>
            </div>
          </div>

<?php require 'includes/end.php' ?>