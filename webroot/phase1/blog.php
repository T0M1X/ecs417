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
      <h1>My Posts</h1>
      <form action="blogmonth.php" method="POST">
        <label for="month">View posts from a specific Month</label>
        <select name="month" id="month" required>
          <option value="" disabled selected>Month</option>
          <option value="01">January</option>
          <option value="02">Febuary</option>
          <option value="03">March</option>
          <option value="04">April</option>
          <option value="05">May</option>
          <option value="06">June</option>
          <option value="07">July</option>
          <option value="08">August</option>
          <option value="09">September</option>
          <option value="10">October</option>
          <option value="11">November</option>
          <option value="12">December</option>
        </select>
        <button type="submit">Find</button>
      </form>
      <hr>
      <?php
      function bubble($data){
        $num = count($data);
        $temp = 0;
        if($num > 1){
          for($i = 0; $i < $num; $i++){
            for($j=1; $j < ($num-$i);$j++){
              if($data[$j-1]['date'] < $data[$j]['date']){
                $temp = $data[$j-1];
                $data[$j-1] = $data[$j];
                $data[$j] = $temp;
              }
            }
          }
        }
        return($data);
      }

      require_once "dbscon.php";
      $query = "SELECT * FROM POSTS";
      $posts = $mysql->query($query);
      $num = $posts->num_rows;
      if($num > 0){
        while ($line = $posts->fetch_array()) {
          $all_data[] = $line;
        }
        $all_data = bubble($all_data);
        $num = count($all_data);
        for($i = 0; $i < $num;$i++){
          $date = date("d/m/Y H:i:s", strtotime($all_data[$i]['date'].'UTC+3'));
          $postmonth = date("d",strtotime($date));
          echo "<div>";
          echo "<h2>".$all_data[$i]['title']."</h2>";
          echo "<p><strong>".$date." </strong> - ".$all_data[$i]['post']."</p>";
          echo "</div>";
          echo "<br>";
        }
      }
      ?>
      <br>
    </section>
  </body>
</html>
