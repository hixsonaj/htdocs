<html>
  <head>
    <title>Zero Four</Title>
    <meta name="description" content="Do you need your Christmas tree picked up. We can help you learn how.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/bfeca9258e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="projects.css">
  </head>
  <body>
    <header>
      <?php
        include 'header_footer/header.php';
      ?>
    </header>
    <main>
      <h1>Tree Pick Up</h1>
      <section id="section">
        <h2>Summary</h2>
        <p>"Troop 582 Tree Pick Up" was my first notable coding project. It was a website that would allow you to mark your address for a Christmas tree pick up if you were inside of a designated area. It was an unrealistic goal and was never finished but it was fun to build something with a purpose.</p>
        <p>You can view and example of the website <a href="projects.zerofour.tech/treepickup">HERE</a></p>
        <p>*note that the google maps geocoding API has been disabled as it is not free</p>
      </section>
      <section id="history">
        <h2>History</h2>
        <p>One of the fundraisers my Boy Scout troop held was to pick up and recycle Christmas trees of people in the area (after Christmas of course.) Instead of driving down every street in our area, someone suggested the idea that we create a website that community members could use to submit their addresses for a tree pick-up. After the fundraiser I got to work building a local website; the hard part came from creating a way for users to submit their addresses. Unfortunately, that was the end of this project as I lost interest and realized that running a fundraiser on a very insecure website wasn't realistic, so it was never published.</p>
      </section>
      <section id="technical">
        <h2>Technical</h2>
        <p>Building and formatting the website was straight forward. The hard part came from creating a way for users to submit their addresses. So, I set up an SQL database that would store addresses and other useful information. But to ensure that these addresses were within our area I used a google maps API to return the latitude and longitude data of the address. Then, with an array of latitude and longitude locations that when connected enclosed our area, I used the Point in Polygon (PIP) method to determine if the address was inside or outside of our area.</p>
      </section>
      <section id="success">
        <h2>Success</h2>
        <p>This project taught me a lot more than just how to write JavaScript or HTML; it was about learning how to program. I learned how to effectively research, learn, and work productively. My success from this project is likely what propelled me to start other projects and ultimately major in computer science.</p>
      </section>
    </main>
    <footer>
      <?php
        include 'header_footer/footer.php';
      ?>
    </footer>
  </body>
</html>
