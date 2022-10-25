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

            var x_description = document.getElementById(id);

            var w = document.documentElement.clientWidth || window.innerWidth;

            switch (true) {
              case id == 'volume_by_speed_description':
                var x_caret = document.getElementById('volume_by_speed_caret');
                var x_caption = document.getElementById('volume_by_speed_caption');
                var x_brief = document.getElementById('volume_by_speed_brief');

                var y_description = document.getElementById('zero_four_website_description');
                var y_caret = document.getElementById('zero_four_website_caret');
                var y_caption = document.getElementById('zero_four_website_caption');
                var y_brief = document.getElementById('zero_four_website_brief');

                var z_description = document.getElementById('tree_pick_up_description');
                var z_caret = document.getElementById('tree_pick_up_caret');
                var z_caption = document.getElementById('tree_pick_up_caption');
                var z_brief = document.getElementById('tree_pick_up_brief');

                break;

              case id == 'zero_four_website_description':
                var x_caret = document.getElementById('zero_four_website_caret');
                var x_caption = document.getElementById('zero_four_website_caption');
                var x_brief = document.getElementById('zero_four_website_brief');

                var y_description = document.getElementById('tree_pick_up_description');
                var y_caret = document.getElementById('tree_pick_up_caret');
                var y_caption = document.getElementById('tree_pick_up_caption');
                var y_brief = document.getElementById('tree_pick_up_brief');

                var z_description = document.getElementById('volume_by_speed_description');
                var z_caret = document.getElementById('volume_by_speed_caret');
                var z_caption = document.getElementById('volume_by_speed_caption');
                var z_brief = document.getElementById('volume_by_speed_brief');

                break;

              case id == 'tree_pick_up_description':
                var x_caret = document.getElementById('tree_pick_up_caret');
                var x_caption = document.getElementById('tree_pick_up_caption');
                var x_brief = document.getElementById('tree_pick_up_brief');

                var y_description = document.getElementById('volume_by_speed_description');
                var y_caret = document.getElementById('volume_by_speed_caret');
                var y_caption = document.getElementById('volume_by_speed_caption');
                var y_brief = document.getElementById('volume_by_speed_brief');

                var z_description = document.getElementById('zero_four_website_description');
                var z_caret = document.getElementById('zero_four_website_caret');
                var z_caption = document.getElementById('zero_four_website_caption');
                var z_brief = document.getElementById('zero_four_website_brief');

                break;

              default:
                break;

            }

            if (x_description.style.display == "block" || x_brief.style.display == "block") {

              x_description.style.animation = "hide 0.5s linear";
              setTimeout(() => {x_description.style.display = "none";}, 500);

              x_caret.style.animation = "rotate_down 0.5s linear";
              x_caret.style.transform = "rotate(0deg)";

              if (w < 767) {
                x_caption.style.animation = "hide_brief 0.5s linear";
                x_brief.style.animation = "hide_brief_opacity 0.5s linear";
                x_caption.style.background = "rgba(255,255,255,0.7)";
                x_caption.style.top = "82%";
                x_caption.style.height = "36.2%";
                setTimeout(() => {x_brief.style.display = "none";}, 500);
              }

            } else {

              x_description.style.display = "block";
              x_description.style.animation = "reveal 0.5s linear";

              x_description.style.zIndex = "2";
              y_description.style.zIndex = "1";
              z_description.style.zIndex = "1";

              setTimeout(() => {
                y_description.style.display = "none";
                z_description.style.display = "none";
              }, 500);

              x_caret.style.animation = "rotate_up 0.5s linear";
              x_caret.style.transform = "rotate(180deg)";


              if (w > 767) {
                if (y_caret.style.transform == "rotate(180deg)") {
                  y_caret.style.animation = "rotate_down 0.5s linear";
                  y_caret.style.transform = "rotate(0deg)";
                }
                if (z_caret.style.transform == "rotate(180deg)") {
                  z_caret.style.animation = "rotate_down 0.5s linear";
                  z_caret.style.transform = "rotate(0deg)";
                }
              } else {
                x_brief.style.display = "block";
                x_caption.style.animation = "show_brief 0.5s linear";
                x_brief.style.animation = "show_brief_opacity 0.5s linear";
                x_caption.style.background = "white";
                x_caption.style.top = "50%";
                x_caption.style.height = "100.2%";
              }

            }
          }
          </script>

          <li id="volume_by_speed">
            <button onclick="toggleDesc('volume_by_speed_description')" type="button" name="button">
              <section>
                <img src="project_images/app_logo.png" alt="Zero Four App Logo">
                <div class="caption" id="volume_by_speed_caption">
                  <h1>Volume by Speed</h1>
                  <p class="tools"><i>-Java, Android Studio, Git, XML, Customer Support</i></p>
                  <span><i class="fa fa-caret-down" id="volume_by_speed_caret"></i></span>
                  <div class="brief" id="volume_by_speed_brief">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <a href="">click here to see more</a>
                  </div>
                </div>
              </section>
            </button>
          </li>
          <li id="zero_four_website">
            <button onclick="toggleDesc('zero_four_website_description')" type="button" name="button">
              <section>
                <img src="project_images/zero_four_website_logo.png" alt="Zero Four Website Logo">
                <div class="caption" id="zero_four_website_caption">
                  <h1>zero_four_website</h1>
                  <p class="tools"><i>-HTML, CSS, domain management, Cpanel, PHP, Writing</i></p>
                  <span><i class="fa fa-caret-down" id="zero_four_website_caret"></i></span>
                  <div class="brief" id="zero_four_website_brief">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <a href="">click here to see more</a>
                  </div>
                </div>
              </section>
            </button>
          </li>
          <li id="tree_pick_up">
            <button onclick="toggleDesc('tree_pick_up_description')" type="button" name="button">
              <section>
                <img src="project_images/tree_pick_up_website_logo.png" alt="Tree Pick Up Webstie Logo">
                <div class="caption" id="tree_pick_up_caption">
                  <h1>Tree Pick Up</h1>
                  <p class="tools"><i>-javascript, Google maps API, SQL, HTML, CSS</i></p>
                  <span><i class="fa fa-caret-down" id="tree_pick_up_caret"></i></span>
                  <div class="brief" id="tree_pick_up_brief">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <a href="">click here to see more</a>
                  </div>
                </div>
              </section>
            </button>
          </li>
        </ul>
        <div class="projects_about" id="projects_about">
          <div class="description" id="volume_by_speed_description">
            <h1>Volume by Speed</h1>
            <p>"Volume by Speed" is a mobile app I built that is currently available on the google play store for free. The app will increase your phone's media volume as your speed increases, and the rate at which your volume increases can be adjusted. This could be useful for counteracting road noise when driving, or wind noise when biking. "Volume by Speed" was published in January 2022 and as of October 2022 has over 100 active downloads. I have spent hundreds of hours building this app from front to back, and from start to finish (although I still work on it occasionally). Altogether I have enjoyed building the app, learning java, and familiarizing myself with the process of app development. I continue to enjoy the positive (and negative) feedback I get on how they like the app or how they think it could be improved. </p>
            <a href="#">click here to see more</a>
          </div>
          <div class="description" id="zero_four_website_description">
            <h1>zero_four_website</h1>
            <p>zero_four_website is the website you're on right now! It was made as a center for Zero Four and showcases all my past and current projects. It's built mostly in HTML and CSS but uses a little bit of PHP. The website is simple and small and didn't take an extreme amount of time to make but I'm still proud of it. I didn't love web development when I built and put this website up in January 2022 but working on it now in October 2022, I enjoy it. I plan to continuously improve it and keep it up to date with my projects and career but nothing extreme.</p>
            <a href="#">click here to see more</a>
          </div>
          <div class="description" id="tree_pick_up_description">
            <h1>Tree Pick Up</h1>
            <p>"Troop 582 Tree Pick Up" was my first notable coding project. One of the fundraisers my Boy Scout troop held was to pick up and recycle Christmas trees of people in the area (after Christmas of course.) Instead of driving down every street in our area, someone suggested the idea that we create a website that community members could use to submit their addresses for a tree pick-up. After the fundraiser I got to work building a local website; the hard part came from creating a way for users to submit their addresses. So, I set up an SQL database that would store addresses and other useful information. But to ensure that these addresses were within our area I used a google maps API to return the latitude and longitude data of the address. Then, with an array of latitude and longitude locations that when connected enclosed our area, I used the Point in Polygon (PIP) method to determine if the address was inside or outside of our area. Unfortunately, that was the end of this project as I lost interest and realized that running a fundraiser on a very insecure website wasn't realistic, so it was never published. This project taught me a lot more than just how to write javascript or HTML; it was about learning how to program. I learned how to effectively research, learn, and work productively. My success from this project is likely what propelled me to start other projects and ultimately major in computer science.</p>
            <a href="#">click here to see more</a>

          </div>
          <div class="description" id="about_projects">
            <h1>About</h1>
            <p>ABOUT PROJECTS::: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>
    </main>
    <footer>
      <?php
        include 'header_footer/footer.php';
      ?>
    </footer>
  </body>
</html>
