<html>
  <head>
    <title>Submit My Tree</Title>
    <meta name="description" content="Submit your tree for pick up!">
  </head>
  <body>
    <header>
      <?php
        include 'header_footer/header.php';
      ?>
    </header>
    <main>
      <link rel="stylesheet" type="text/css" href="post_style.css">
      <div class="post">
        <form action="address_process/address_to_latlng.php" method="post">
          <form action="address_process/address_to_latlng.php" method="post">
          <p>Address:</p>
          <input type="text" name="address_input" id="address_input">
          <br>
          <button type="submit" name="submit">Submit</button>

        </form>
      </div>
    </main>
    <footer>
      <?php
        include 'header_footer/footer.php';
      ?>
    </footer>
  </body>
</html>
