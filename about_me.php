<?php require_once('init.php'); ?>
<?php require 'includes/header.php' ?>

  <title>Simão Neves - About me</title>
  <meta name="description" content="My personal information, a litle bit of history and my skills">
  <meta name="keywords" content="Simão Neves, web developer, software engineer, skills, self taught, PHP, Java Javascript, Angular">

<?php require 'includes/after_header.php' ?>

          <header class="content_header">
            <h1>About me</h1>
            <?php printSocial("_min") ?>
          </header>

          <div class="content">

            <div class="freeText section">
              <div class="free_img">
                <img class="img_frame fl" src="img/ritasimao.jpg" alt="whatever">
              </div>
              <h2>I'm Simão Neves</h2>
              <p>Hello there, my name is Simão Neves, born in 1988 and raised in Lisbon as long as i can remember.<br>
                Ah, programming.. It all started in 2004 when i discovered that my T83-Plus could have programs made by me, wow! As far as i know it was a BASIC-ish programming language that you had to use, i first wrote my games/programs in a calculator! Badass programmer? Check!<br>
                I learned a lot of programming basics from experience and then i discovered Adobe Flash and Actionscript, from there i was interested in doing webpages, where my flash programs would run.
                From there i discovered the HTML, CSS and Javascript. Kinda begun doing stupid little websites for myself.<br>
                In my professional experience i had the pleasure of continue this passion by doing and learning a lot in the Web Development area.<br>
                Years gone by and now i’m taking Computer Science in university of <a class="link" target="_blank" href="http://www.ciencias.ulisboa.pt">FCUL (Faculdade de Ciências da Universidade de Lisboa)</a>, pursuing my passion as i learn more and more about Software Engineering.</p>

              <div class="clear"></div>
            </div>


            <div class="double_col section">
              <h2>Skills</h2>
              <div class="vert_bar">
                <div class="left_col">
                  <p>Self taught<br>
                    HTML (HTML5)<br>
                    CSS (CSS3, Bootstrap, Foundation)<br>
                    Javascript (jQuery, Angular)<br>
                    Actionscript<br>
                    PHP<br>
                    Java<br>
                    Photoshop<br>
                    Fluent in English<br>
                    SEO<br>
                    Google AdWords<br>
                    SQL<br>
                    Git
                    </p>
                </div>
                <div class="right_col">
                  <?php printSocial("") ?>
                </div>
                <div class="clear"></div>
              </div>
            </div>

<?php require 'includes/end.php' ?>