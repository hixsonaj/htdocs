<html>
  <head>
    <title>Zero Four</Title>
    <meta name="description" content="Description of the Volume by Speed android app project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/bfeca9258e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="resources/projects.css">
  </head>
  <body>
    <header>
      <?php
        include 'resources/header_footer/header.php';
      ?>
    </header>
    <main>
      <h1>Volume by Speed</h1>
      <section id="summary">
        <h2>Summary</h2>
        <div class="Asection">
          <p>The goal of the Volume by Speed mobile app is to adjust the volume of the device as the speed of the device changes to meet the user's needs. This might come in useful when it increases the volume as you drive faster to overpower wind and road noise or lowers the volume as you come to a stop on your bike so you can hear the people around you. The app can be used in a variety of ways, some of which I may not be able to account for, but my goal is to accommodate every situation.</p>
          <p>The app is exclusive to the google play store and runs on Android 8 and higher. As of November 2022, the app has 130 active downloads and a 3-star rating. I’ve made some changes since first publishing it and there are more to come, but I don't plan to spend much more time on this project. I really enjoyed building the app despite the many hours and difficulties.</p>
        </div>
        <div class="Bsection">
          <img src="resources/project_images/volume_by_speed/app_logo.png" alt="App logo">
        </div>
      </section>
      <section id="history">
        <h2>History</h2>
        <div class="Asection">
          <p>When driving, I was frustrated that I had to turn down my music to achieve the same relative volume at slow speeds that I did at high speeds. After finding no useful apps on the google play store I decided this app was a reasonable project for me to start on. I started working on the app summer of 2021 and had it finished in December of that year. Because I was still 17, I had trouble creating a google play developer account and publishing it. The fix was to create an LLC and publish it under that name. After registering "Zero Four Tech" as an LLC in Washington State I published the app in January of 2022.</p>
          <p>After publishing, I took a break for a while before coming revisiting it for an update. There were a couple bugs to fix and I add a banner ad to the bottom so I could make some money. I spent a couple of weeks on these fixes and published the update in August 2022. Since then, I’ve started college and haven't had as much time or motivation to work on the app, but I do plan on releasing an update in January 2023. *See more in Future Goals</p>
        </div>
        <div class="Bsection">
          <img src="resources/project_images/volume_by_speed/old_app_logo.jpg" alt="Old App Logo">
        </div>
      </section>
      <section id="technical">
        <h2>Technical</h2>
        <div class="Asection">
          <p>The project uses GitHub for version control and can be viewed <a href="https://github.com/hixsonaj/Volume-by-Speed">HERE</a>.</p>
          <p>The app is written in Java using Android Studio. It’s not overly complicated but does use some more complex features (relative to my skill level). The main feature runs as a background intent represented as a notification when it’s running and can be viewed and stopped from the notification *. The popups appear as dialogfragments which allows data to be easily sent from the fragment to the host activity. </p>
          <p>It works on SDK versions 26 and higher (Android 8.0) and has been tested on all Android versions between Android 8 and 13.</p>
        </div>
        <div class="Bsection">
          <img src="resources/project_images/volume_by_speed/app_screenshot.jpg" alt="App app_screenshot">
        </div>
      </section>
      <section id="success">
        <h2>Success</h2>
        <div class="Asection">
          <p>[As of November 2022]</p>
          <p>The app has been floating around 130 active downloads for the past few months with a peak of 139. Currently, there are 5 reviews averaging out to 3-stars. I enjoy reading the reviews and occasional emails from users sharing their thoughts on the app. One of my biggest motivators for the January 2023 update is the emails from users asking for new features or bug fixes.</p>
          <p>With update 1.2.0 I added a banner ad across the bottom of the screen. In the 4 months since that update was published the ad has brought in about $3; of which I cannot access until I meet the $100 threshold (so I probably won't get paid for a while). However, I am optimistic that the January 2023 update will bring new users.</p>
        </div>
        <div class="Bsection">
          <img src="resources/project_images/volume_by_speed/positive_review.png" alt="Positive Review">
          <img src="resources/project_images/volume_by_speed/helpful_review.png" alt="Helpful review">
        </div>
      </section>
      <section id="limitations">
        <h2>Limitations</h2>
        <p>Currently, the app is only available on the google play store and is thus not available on iPhones. I have no plans to recreate the app for iOS.</p>
        <p>In android, the volume can only be an integer number between 0 and 15. This means when changing the volume, you can often hear it jump up or down. This is not desirable as it brings attention to the service and makes it less seamless.</p>
      </section>
      <section id="future">
        <h2>Future Goals</h2>
        <p>I plan on releasing update 1.3.0 in January 2023. Some features you can expect to see are: </p>
        <p>-3rd party actions from google assistant and tasker</p>
        <p>-Paid*, ad-free version of the app with some premium features</p>
        <p>-Translated to Spanish</p>
        <p>-Layout tweaks and fixes</p>
        <p>-Toggleable option to start the service when the app is opened</p>
        <p>Some bugs that will be fixed include:</p>
        <p>-MPH/KPH toggle will update immediately</p>
        <p>-Eliminate crashes in lower android versions</p>
        <p>This may be split into 2 updates (1.2.1 and 1.3.0)</p>
      </section>
    </main>
    <footer>
      <?php
        include 'resources/header_footer/footer.php';
      ?>
    </footer>
  </body>
</html>
