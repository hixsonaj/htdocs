<html>
  <head>
    <title>Zero Four</Title>
    <meta name="description" content="Do you need your Christmas tree picked up. We can help you learn how.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/bfeca9258e.js" crossorigin="anonymous"></script>
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

        <script type="text/javascript">
        let id;
        function toggleDesc(id) {

          var x_description = document.getElementById(id);

          var w = window.innerWidth;

          switch (id) {
            case 'volume_by_speed_description':
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

            case 'zero_four_website_description':
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

            case 'tree_pick_up_description':
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


            if (w >= 767) {
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

        <ul class="projects">
          <li id="volume_by_speed">
            <button onclick="toggleDesc('volume_by_speed_description')" type="button" name="button">
              <section>
                <img src="index_images/app_logo.png" alt="Zero Four App Logo">
                <div class="caption" id="volume_by_speed_caption">
                  <h1>Volume by Speed</h1>
                  <span><i class="fa fa-caret-down" id="volume_by_speed_caret"></i></span>
                  <span><a href="volumebyspeed.php"><i class="fa-solid fa-arrow-up-right-from-square"></i></a></span>
                  <div class="brief" id="volume_by_speed_brief">
                    <p>"Volume by Speed" is a mobile app I built that is available on the google play store. The app will increase your phone's volume as your speed increases. It currently has over 100 downloads and continues to grow everyday.</p>
                  </div>
                </div>
              </section>
            </button>
          </li>
          <li id="zero_four_website">
            <button onclick="toggleDesc('zero_four_website_description')" type="button" name="button">
              <section>
                <img src="index_images/zero_four_website_logo.png" alt="Zero Four Website Logo">
                <div class="caption" id="zero_four_website_caption">
                  <h1>zerofour.tech</h1>
                  <span><i class="fa fa-caret-down" id="zero_four_website_caret"></i></span>
                  <span><a href="zerofourwebsite.php"><i class="fa-solid fa-arrow-up-right-from-square"></i></a></span>
                  <div class="brief" id="zero_four_website_brief">
                    <p>zerofour.tech is the website you're on right now! It was made as a center for Zero Four and showcases all my past and current projects. It's built mostly in HTML and CSS but uses a little bit of PHP.</p>
                  </div>
                </div>
              </section>
            </button>
          </li>
          <li id="tree_pick_up">
            <button onclick="toggleDesc('tree_pick_up_description')" type="button" name="button">
              <section>
                <img src="index_images/tree_pick_up_website_logo.png" alt="Tree Pick Up Webstie Logo">
                <div class="caption" id="tree_pick_up_caption">
                  <h1>Tree Pick Up</h1>
                  <span><i class="fa fa-caret-down" id="tree_pick_up_caret"></i></span>
                  <span><a href="treepickup.php"><i class="fa-solid fa-arrow-up-right-from-square"></i></a></span>
                  <div class="brief" id="tree_pick_up_brief">
                    <p>"Troop 582 Tree Pick Up" was a mock website for my boy scout troop to assist with a fundraiser and my first notable coding project. It taught me a lot more than coding in javascript and HTML; it was about learning how to research and work productively.</p>
                  </div>
                </div>
              </section>
            </button>
          </li>
        </ul>
        <div class="projects_about" id="projects_about">
          <div class="description" id="volume_by_speed_description">
            <h1><a href="volumebyspeed.php">Volume by Speed <i class="fa-solid fa-arrow-up-right-from-square"></i></a></h1>
            <p class="full_description">"Volume by Speed" is a mobile app I built that is currently available on the google play store for free. The app will increase your phone's media volume as your speed increases, and the rate at which your volume increases can be adjusted. This could be useful for counteracting road noise when driving, or wind noise when biking. "Volume by Speed" was published in January 2022 and as of October 2022 has over 100 active downloads. I have spent hundreds of hours building this app from front to back, and from start to finish (although I still work on it occasionally). Altogether I have enjoyed building the app, learning java, and familiarizing myself with the process of app development. I continue to enjoy the positive (and negative) feedback I get on how they like the app or how they think it could be improved.</p>
          </div>
          <div class="description" id="zero_four_website_description">
            <h1><a href="zerofourwebsite.php">zerofour.tech <i class="fa-solid fa-arrow-up-right-from-square"></i></a></h1>
            <p class="full_description">zerofour.tech is the website you're looking at right now! It was made as a center for Zero Four and showcases all my past and current projects. It's built mostly in HTML and CSS but uses a little bit of PHP. The website is simple and small and didn't take an extreme amount of time to make but I'm still proud of it. I didn't love web development when I built and put this website up in January 2022 but working on it now in October 2022, I enjoy it. I plan to continuously improve it and keep it up to date with my projects and career but nothing extreme.</p>
          </div>
          <div class="description" id="tree_pick_up_description">
            <h1><a href="treepickup.php">Tree Pick Up <i class="fa-solid fa-arrow-up-right-from-square"></i></a></h1>
            <p class="full_description">"Troop 582 Tree Pick Up" was my first notable coding project. It was a mock website made to assist with fundraiser for my Boy Scout Troop. Instead of driving down every street in our area, people in the community would submit their address to the website for us to come pick up their tree. The most difficult part was creating a way for users to submit their addresses and making sure they were close enough to qualify for pick up. The website used an SQL database that would store addresses and used a google maps API and some algebra to determine if the address was within our community. Unfortunately, the project never made it to production. This project taught me a lot more than just how to write javascript or HTML; it was about learning how to program. I learned how to effectively research, learn, and work productively. My success from this project is likely what propelled me to start other projects and ultimately major in computer science.</p>
          </div>
          <div class="description" id="about_projects">
            <h1>My Projects</h1>
            <p>Above are some of the computer science related projects I've worked on. I believe the best way to learn is to learn by doing. With all of my projects, I usually have little to no experience in the languages or tools when starting, but my goal is to learn them while working on the project. I've tried to pick projects in a variety of fields to figure out what I do and don't enjoy doing. You can find a full report on each of these projects by clicking the link in the description.</p>
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
