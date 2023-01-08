<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Alex Hixson @ Zero Four Tech</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2701820106710934"
     crossorigin="anonymous"></script>
  </head>
  <body>
		<header>
      <div class="inner_header">
        <ul class="navigation">
					<a><li>Home</li></a>
					<a><li>Blog</li></a>
				</ul>
				<div class="logo_container">
					<a><h1>ALEX HIXSON</h1></a>
				</div>
				<ul class="navigation">
					<a><li>About</li></a>
					<a><li>Contact</li></a>
				</ul>
			</div>
    </header>
    <main>
      <div class="broke_warning">
        <!-- <p>Attention: Alex is Broke!</p>
        <p>He cannot afford to host alexhixson.com and instead redirects it to here,</p>
        <p>if you'd like to support the cause you can venmo him: @alex-hixson-04</p> -->
      </div>










      <div class="headlines">
        <div class="personal_headlines">
          <img src="index_pictures/image_1.jpg" alt="Me and the boys on the BH couch">
          <h1>Personal Blog</h1>
        </div>
        <div class="profesional_headlines">
          <img src="index_pictures/IMG_3509.jpg" alt="BROCKHAMPTON">
          <h1>Profesional Blog</h1>
        </div>
      </div>











      <div class="main_main">
        <div class="comments">
          <div class="text_box">
            <form action="commentQuery.php" method="post">
              <p>Name:</p>
              <input type="text" name="name" id="comment">
              <br>
              <p>Leave a Comment:</p>
              <input type="text" name="comment" id="address_input">
              <br>
              <button type="submit" name="submit">Submit</button>
            </form>
          </div>
          <?php
            $con = mysqli_connect('localhost','root','', 'comments');


            $data = $con->query('SELECT COUNT(*) AS num FROM `comments`') or die(mysql_error());
            $row = $data->fetch_assoc();
            $numUsers = $row['num'];
            echo "<br>Total Comments:" . $numUsers . "<br><br>";

            echo "<ul>";

            for ($i=$numUsers; $i > $numUsers-10 ; $i--) {
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
