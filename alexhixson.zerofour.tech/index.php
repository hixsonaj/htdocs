<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Alex Hixson</title>
    <link rel="stylesheet" media="screen and (min-width: 767px)" href="index.css" />
    <link rel="stylesheet" media="screen and (max-width: 766px)" href="index_mobile.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/bfeca9258e.js" crossorigin="anonymous"></script>
  </head>
  <body>
		<header>
      <div class="inner_header">
        <ul class="navigation">
					<a href="http://alexhixson.com"><li>Home</li></a>
					<a href="http://alexhixson.com"><li>Blog</li></a>
				</ul>
				<div class="logo_container">
					<a href="http://alexhixson.com"><h1>ALEX HIXSON</h1></a>
				</div>
				<ul class="navigation">
					<a href="http://alexhixson.com"><li>About</li></a>
					<a href="http://alexhixson.com"><li>Contact</li></a>
				</ul>
			</div>
    </header>
    <main>
      <div class="banner_notification">
        <!-- <p></p> -->
      </div>
      <div class="alex_hixson">
        <div class="image"></div>  
        <div class="main">
          <h1>Alex Hixson</h1>
          <p>"I aspire to have lots of cars and friends"</p>
          <p>San Diego State Undergrad Student pursuing Computer Science; Car Enthusiast; Aspiring Nerd; BROCKHAMPTON fanboy</p>
          <div class="links">
            <a href="http://alexhixson.com"><i class="fa-solid fa-link"></i>ALEXHIXSON.COM</a>
            <a href="http://zerofour.tech/"><i class="fa-solid fa-link"></i>ZEROFOUR.TECH</a>
          </div>
        </div>
      </div>
      <div class="main_main">
        <div class="comments">
          <div class="text_box">
            <form action="commentQuery.php" method="post">
              <p>Name:</p>
              <input type="text" name="name" id="comment">
              <br>
              <p>Comment:</p>
              <input type="text" name="comment" id="address_input">
              <br>
              <button type="submit" name="submit">Submit</button>
            </form>
          </div>
          <?php
            include 'sqlconnect.php';

            $data = $con->query('SELECT COUNT(*) AS num FROM `comments`') or die(mysql_error());
            $row = $data->fetch_assoc();
            $numUsers = $row['num'];
            echo "<ul>";

            for ($i=$numUsers; $i > $numUsers-10; $i--) {
              $sql = "SELECT name, comment FROM comments WHERE id=$i";
              $query = $con->query($sql);
              $comment = $query->fetch_assoc();
              echo "<li><h3>" . $comment["name"] . "</h3><p>" . $comment["comment"] . "</p></li>";
            }

            echo "</ul>";

            $con->close();
          ?>
        </div>
      </div>
    </main>
	</body>
</html>
