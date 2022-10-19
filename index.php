<html>
  <head>
    <title>Zero Four</Title>
    <meta name="description" content="Do you need your Christmas tree picked up. We can help you learn how.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" media="screen and (min-width: 767px)" href="index.css" />
    <link rel="stylesheet" media="screen and (max-width: 766px)" href="index_mobile.css" />
  </head>
  <body>
    <header>
      <?php
        include 'header_footer/header.php';
      ?>
    </header>
    <main>
      <div class="projects_section">
        <ul class="projects">

          <script type="text/javascript">
          let id;
          function toggleDesc(id) {
            var x = document.getElementById(id);
            if (x.style.display == "block") {
              x.style.display = "none";
            } else {
              x.style.display = "block";
            }
          }
          </script>

          <li id="volume_by_speed">
            <section>
              <img src="project_images/app_logo.png" alt="Zero Four App Logo">
              <h1>Volume by Speed</h1>
              <p><i>March 2021 - current</i></p>
              <p><i>-Java, Android Studio, Git, XML, Customer Support</i></p>
              <button onclick="toggleDesc('volume_by_speed_description')" type="button" name="button"><span><i class="fa fa-caret-down"></i></span></button>
            </section>
            <div class="description" id="volume_by_speed_description">
              <p>"Volume by Speed" is a mobile app I built that is currently available on the google play store for free. The app will increase your phone's media volume as your speed increases, and the rate at which your volume increases can be adjusted. This could be useful for counteracting road noise when driving, or wind noise when biking. "Volume by Speed" was published in January 2022 and as of October 2022 has over 100 active downloads. I have spent hundreds of hours building this app from front to back, and from start to finish (although I still work on it occasionally). Altogether I have enjoyed building the app, learning java, and familiarizing myself with the process of app development. I continue to enjoy the positive (and negative) feedback I get on how they like the app or how they think it could be improved. </p>
            </div>
          </li>
          <li id="zerofour.tech">
            <section>
              <img src="project_images/zero_four_website_logo.png" alt="Zero Four Website Logo">
              <h1>zerofour.tech (January 2022 - current)</h1>
              <p><i>-HTML, CSS, domain management, Cpanel, PHP, Writing</i></p>
              <button onclick="toggleDesc('zero_four_website_description')" type="button" name="button"><span><i class="fa fa-caret-down"></i></span></button>
            </section>
            <div class="description" id="zero_four_website_description">
              <p>zerofour.tech is the website you're on right now! It was made as a center for Zero Four and showcases all my past and current projects. It's built mostly in HTML and CSS but uses a little bit of PHP. The website is simple and small and didn't take an extreme amount of time to make but I'm still proud of it. I didn't love web development when I built and put this website up in January 2022 but working on it now in October 2022, I enjoy it. I plan to continuously improve it and keep it up to date with my projects and career but nothing extreme.</p>
            </div>
          </li>
          <li id="tree_pick_up">
            <section>
              <img src="project_images/tree_pick_up_website_logo.png" alt="Tree Pick Up Webstie Logo">
              <h1>Troop 582 Tree Pick Up (January 2020 - May 2021)</h1>
              <p><i>-javascript, Google maps API, SQL, HTML, CSS</i></p>
              <button onclick="toggleDesc('tree_pick_up_website_description')" type="button" name="button"><span><i class="fa fa-caret-down"></i></span></button>
            </section>
            <div class="description" id="tree_pick_up_website_description">
              <p>"Troop 582 Tree Pick Up" was my first notable coding project. One of the fundraisers my Boy Scout troop held was to pick up and recycle Christmas trees of people in the area (after Christmas of course.) Instead of driving down every street in our area, someone suggested the idea that we create a website that community members could use to submit their addresses for a tree pick-up. After the fundraiser I got to work building a local website; the hard part came from creating a way for users to submit their addresses. So, I set up an SQL database that would store addresses and other useful information. But to ensure that these addresses were within our area I used a google maps API to return the latitude and longitude data of the address. Then, with an array of latitude and longitude locations that when connected enclosed our area, I used the Point in Polygon (PIP) method to determine if the address was inside or outside of our area. Unfortunately, that was the end of this project as I lost interest and realized that running a fundraiser on a very insecure website wasn't realistic, so it was never published. This project taught me a lot more than just how to write javascript or HTML; it was about learning how to program. I learned how to effectively research, learn, and work productively. My success from this project is likely what propelled me to start other projects and ultimately major in computer science.</p>
            </div>
          </li>
        </ul>
        <!-- <div class="project" id="Volume by Speed">
          <img src="post_images/app_logo.png" alt="LOGO">
          <h1>Volume by Speed</h1>
          <p><i>March 2021 - current</i></p>
          <p><i>-Java, Android Studio, Git, XML, Customer Support</i></p>
          <p>"Volume by Speed" is a mobile app I built that is currently available on the google play store for free. The app will increase your phone's media volume as your speed increases, and the rate at which your volume increases can be adjusted. This could be useful for counteracting road noise when driving, or wind noise when biking. "Volume by Speed" was published in January 2022 and as of October 2022 has over 100 active downloads. I have spent hundreds of hours building this app from front to back, and from start to finish (although I still work on it occasionally). Altogether I have enjoyed building the app, learning java, and familiarizing myself with the process of app development. I continue to enjoy the positive (and negative) feedback I get on how they like the app or how they think it could be improved. </p>
        </div>
        <div class="project" id="zerofour.tech">
          <h1>zerofour.tech (January 2022 - current)</h1>
          <p><i>-HTML, CSS, domain management, Cpanel, PHP, Writing</i></p>
          <p>zerofour.tech is the website you're on right now! It was made as a center for Zero Four and showcases all my past and current projects. It's built mostly in HTML and CSS but uses a little bit of PHP. The website is simple and small and didn't take an extreme amount of time to make but I'm still proud of it. I didn't love web development when I built and put this website up in January 2022 but working on it now in October 2022, I enjoy it. I plan to continuously improve it and keep it up to date with my projects and career but nothing extreme.</p>
        </div>
        <div class="project" id="Tree_Pick_Up">
          <h1>Troop 582 Tree Pick Up (January 2020 - May 2021)</h1>
          <p><i>-javascript, Google maps API, SQL, HTML, CSS</i></p>
          <p>"Troop 582 Tree Pick Up" was my first notable coding project. One of the fundraisers my Boy Scout troop held was to pick up and recycle Christmas trees of people in the area (after Christmas of course.) Instead of driving down every street in our area, someone suggested the idea that we create a website that community members could use to submit their addresses for a tree pick-up. After the fundraiser I got to work building a local website; the hard part came from creating a way for users to submit their addresses. So, I set up an SQL database that would store addresses and other useful information. But to ensure that these addresses were within our area I used a google maps API to return the latitude and longitude data of the address. Then, with an array of latitude and longitude locations that when connected enclosed our area, I used the Point in Polygon (PIP) method to determine if the address was inside or outside of our area. Unfortunately, that was the end of this project as I lost interest and realized that running a fundraiser on a very insecure website wasn't realistic, so it was never published. This project taught me a lot more than just how to write javascript or HTML; it was about learning how to program. I learned how to effectively research, learn, and work productively. My success from this project is likely what propelled me to start other projects and ultimately major in computer science. </p>
        </div> -->
      </div>
    </main>
    <footer>
      <?php
        include 'header_footer/footer.php';
      ?>
    </footer>
  </body>
</html>
