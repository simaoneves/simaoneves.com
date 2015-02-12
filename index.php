<?php require_once('init.php'); ?>
<?php require 'includes/header.php' ?>
    <title></title>
    <meta name="description" content="">
    <meta name="keywords" content="">

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
                  <p>Lorem ipsum dolor sit amet, consectetur adipis
                  icing elit, sed do eiusmod tempor incididunt ut la
                  magna aliqua.Ut enim ad minim.Lorem ipsum dol
                  or sit amet, consectetur adipisicing elit, sed do eiu
                  tempor incididunt ut labore et dolore magna aliq
                  ua.Ut enim ad minimnsectetur adipisicing elit, sed
                  tempor incididunt ut labore et dolore magna aliq
                  ua.Ut enim ad minimnsectetur adipisicing elit, se
                  tempor incididunt ut labore et dolore magna aliq
                  ua.Ut enim ad minim</p>
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