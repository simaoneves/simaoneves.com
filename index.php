<?php require_once('init.php'); ?>
<?php require 'includes/header.php' ?>
    <title>Simão Neves - Home</title>
    <meta name="description" content="My personal website where you can find my information and projects!">
    <meta name="keywords" content="Simão Neves, web developer, software engineer">

    <script src="js/vendor/jquery-1.11.0.min.js"></script>

    <!-- bxSlider links -->
    <script src="js/jquery.bxslider.min.js"></script>
    <link href="css/jquery.bxslider.css" rel="stylesheet" />

    <!-- Put only in work detail pages -->
    <script src="js/sliderSetup.js"></script>

<?php require 'includes/after_header.php' ?>

          <header class="content_header">
            <h1>Hello there</h1>
            <?php printSocial("_min") ?>
          </header>

          <div class="content">

            <div class="double_col section">
              <h2>I'm Simão Neves</h2>
              <div class="vert_bar">
                <div class="left_col">
                  <p>Hello there, my name is Simão Neves, born in 1988 and raised in Lisbon as long as i can remember.<br>
                Ah, programming.. It all started in 2004 when i discovered that my T83-Plus could have programs made by me, wow! As far as i know it was a BASIC-ish programming language that you had to use, i first wrote my games/programs in a calculator! Badass programmer? Check!<br><a class="link" href="about_me.php">Read more</a></p>
                </div>
                <div class="right_col">
                  <div class="container_resp_img">
                    <img src="img/hhh.jpg" alt="Simão Neves" class="img_frame resp_img">
                  </div>
                </div>
                <div class="clear"></div>
              </div>
            </div>

            <div class="one_col section">
              <h2>Featured Work</h2>
              <div class="img_frame relative">
                <ul class="bxslider">
                  <?php

                    $all_projects = Project::getAll();
                    foreach ($all_projects as $current_project) {

                      // If the project is visible
                      if ($current_project->visible == 1) {

                        // Get first picture
                        $current_project_photo = Project_Photo::getAll($current_project->id);
                        $current_project_photo = $current_project_photo[0];

                        echo "<li><a href='work_detail.php?project_id=$current_project->id'><img src='backend/uploads/$current_project_photo->url' alt='$current_project_photo->keywords'></a></li>";
                      }
                    }
                    
                  ?>
                </ul>
                <div id="next" class="sliderBtn"></div>
                <div id="prev" class="sliderBtn"></div>
              </div>
            </div>

          </div>
<?php require 'includes/end.php' ?>