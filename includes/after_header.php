  <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
  <![endif]-->
  </head>
  <body>
    <div class="wrapper">

      <header class="left_bar">
        <div class="inside_content_left">
          <a href="http://www.simaoneves.com" target="_self" class="logo">
            <img src="img/simao_neves_logo.png" alt="Simão Neves">
          </a>
          <nav>
            <ul class="navigation">
              
              <?php
                $url = new URL();
                $file = explode('?', $url->getCurrentFolder());
                $file = $file[0];

                $class = $file == "index.php" ? "class='active'" : '';
                echo "<li><a $class href='index.php'>Home</a></li>";

                $class = $file == "about_me.php" ? "class='active'" : '';
                echo "<li><a $class href='about_me.php'>About me</a></li>";

                $class = $file == "work.php" || $file == "work_detail.php" ? "class='active'" : '';
                echo "<li><a $class href='work.php'>Work</a></li>";

                $class = $file == "blog.php" ? "class='active'" : '';
                echo "<li><a $class href='blog.php'>Blog</a></li>";

                $class = $file == "contacts.php" ? "class='active'" : '';
                echo "<li><a $class href='contacts.php'>Contact</a></li>";
                
              ?>

              
            </ul>
          </nav>
          <div class="copy">© Copyright <?= getdate()["year"] ?></div>
        </div>
      </header>

      <div class="right_content">
        <section class="inside_content">
        <!-- Page Content Begin -->