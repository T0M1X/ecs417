<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <hgroup>
      <title>Blog</title>
      <link rel="stylesheet" href="reset.css" type="text/css"/>
      <link rel="stylesheet" href="blog.css" type="text/css"/>
    </hgroup>
  </head>
  <header>
    <nav role="navigation" id = "links">
      <ul>
        <li id = "ball"><img src="ball.png" alt="ball" width = 60 height = 60><li>
        <li id = "l1"><a href="homepage.php">Atif Abdur-Rahman</a></li>
				<li id = "l1"><a href="about.html">About Me & Experience</a></li>
				<li id = "l1"><a href="skills.html">Skills & Education</a></li>
				<li id = "l1"><a href="projects.html">Projects</a></li>
				<li id = "l1"><a href="blog.php">Blog</a></li>
      </ul>
    </nav>
  </header>
  <body>
    <section>
      <h1>Welcome to my blog!</h1>
      <hr>
      <p>The purpose of this blog is to inform people what is going on in my work/education.</p>
      <br>
      <?php
        session_start();
        if(isset($_SESSION['person'])){
          echo "<form action='postblog.html'>";
            echo "<input id='new' type='submit' value='Add a new post'>";
          echo "</form>";
        }
        else {
          echo "<form action='login.html'>";
            echo "<input id='new' type='submit' value='Add a new post'>";
          echo "</form>";
        }
      ?>
    </section>
    <section>
      <h1>My Posts</h2>
      <hr>
      <p><strong>20/03/2021 </strong> - Coding my portfolio using HTML (hypertext markup language) and CSS (cascading style sheets)</p>
    </section>
  </body>
</html>
