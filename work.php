<?php require_once('init.php'); ?>
<?php require 'includes/header.php' ?>

    <title>Work list</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

<?php require 'includes/after_header.php' ?>

          <header class="content_header">
            <h1>Work list</h1>
            <?php printSocial("_min") ?>
          </header>

          <div class="content">

            <div class="work_list section">

              <div class="work_list section">
              <?php

                $all_projects = Project::getAll();
                foreach ($all_projects as $current_project) {

                  // If the project is visible
                  if ($current_project->visible == 1) {

                    // Get first picture
                    $current_project_photo = Project_Photo::getAll($current_project->id);
                    $current_project_photo = $current_project_photo[0];

                    echo "<div class='work'>";
                      echo "<h2 class='title_work_list'>$current_project->name</h2>";
                      echo "<div class='work_list_img'>";
                        echo "<div class='img_container'>";
                          echo "<a href='work_detail.php?project_id=$current_project->id'>";
                            echo "<img src='backend/uploads/$current_project_photo->url' alt='$current_project_photo->keywords' class='resp_img img_frame'>";
                          echo "</a>";
                        echo "</div>";
                      echo "</div>";
                      echo "<div class='left_work'>";
                        echo "<p><b>$current_project->type</b><br>";
                        echo $current_project->description;
                        echo "<br>";
                        echo "<a target='_self' href='work_detail.php?project_id=$current_project->id'>Read more</a>";
                        echo "</p>";
                      echo "</div>";
                      echo "<div class='clear'></div>";
                    echo "</div>";
                  }
                }
                
              ?>
            </div>

          </div>
<?php require 'includes/end.php' ?>