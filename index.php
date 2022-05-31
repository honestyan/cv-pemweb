<?php
if (isset($_POST["submission"])){

  $email = $_POST["email"];
  $message = $_POST["msg"];
  $store_name = "message.json";
  
  if(!file_exists($store_name)){
    fopen("message.json", "w");  
  }
  $json_store = file_get_contents($store_name);

  $data = array(
     array(
         'email' => $email,
         'message' => $message
     )
  );

  if(strlen($json_store) < 1){
    $json_data = json_encode($data);
  }else{
    $json_data = json_decode($json_store);
    array_push($json_data, ["email" => $email, "message" => $message]);
    $json_data = json_encode($json_data);
  }
  $stored = file_put_contents('message.json', $json_data, LOCK_EX);
  if($stored){
    echo "<script type='text/javascript'>alert('Message has been sent!');</script>";
  }
}


?>
<html>
  <head>
    <title>Honestyan Didyafarhan | Curriculum Vitae</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>

  <body>
    <svg viewbox="0 0 1440 320" xmlns="http://www.w3.org/2000/svg">
      <defs>
        <style type="text/css">
          .wave {
            animation: wave 8s linear infinite;
          }

          .wave1 {
            animation: wave1 10s linear infinite;
          }

          .wave2 {
            animation: wave2 12s linear infinite;
          }

          @keyframes wave {
            0% {
              transform: translateX(0%);
            }

            100% {
              transform: translateX(100%);
            }
          }

          @keyframes wave1 {
            0% {
              transform: scaleY(1.2) translateX(0%);
            }

            100% {
              transform: scaleY(1.2) translateX(100%);
            }
          }

          @keyframes wave2 {
            0% {
              transform: scaleY(0.8) translateX(0%);
            }

            100% {
              transform: scaleY(0.8) translateX(100%);
            }
          }
        </style>
        <path
          id="sineWave"
          fill="#666666"
          fill-opacity="0.2"
          d="M0,160 C320,300,420,300,740,160 C1060,20,1120,20,1440,160 V0 H0"
        />
      </defs>
      <use class="wave" href="#sineWave" />
      <use class="wave" x="-100%" href="#sineWave" />
      <use class="wave1" href="#sineWave" />
      <use class="wave1" x="-100%" href="#sineWave" />
      <use class="wave2" href="#sineWave" />
      <use class="wave2" x="-100%" href="#sineWave" />
    </svg>
    <div id="doc2" class="container-t7">
      <div id="inner">
        <div id="hd">
          <div class="container-gc">
            <div class="container-u first">
              <h1>Honestyan Didyafarhan Atthariq</h1>
              <h2>Mobile Developer</h2>
            </div>
          </div>
        </div>
        <div class="dropdown">
          <span>
            <img src="assets/arrowhead.svg" class="icon-dropdown" />
          </span>
        </div>
        <div class="main-content">
          <div id="bd">
            <div id="container-main">
              <div class="container-b">
                <div class="container-u first">
                  <h2>Technical Stack</h2>
                </div>
                <div class="container-u">
                  <ul class="talent">
                    <li>React Native</li>
                    <li>React JS</li>
                    <li>Node JS</li>
                    <li>PHP</li>
                    <li class="last">Javascript</li>
                    <br />
                    <br />
                  </ul>
                </div>

                <div class="container-section">
                  <div class="container-u first">
                    <h2>Freelance Experience</h2>
                  </div>

                  <div class="container-u">
                    <div class="job">
                      <h2>Deskato</h2>
                      <h3>Web and Mobile Development</h3>
                      <h4>December 2021</h4>
                      <p>
                        A furniture marketplace using CodeIgniter and React
                        Native as mobile apps.
                      </p>
                    </div>

                    <div class="job">
                      <h2>Hat Swap City</h2>
                      <h3>Web Development</h3>
                      <h4>September 2021</h4>
                      <p>
                        A web marketplace Non Fungible Token on chain Binance
                        Smart Chain.
                      </p>
                    </div>

                    <div class="job">
                      <h2>Mayora Group</h2>
                      <h3>Web and Mobile Development</h3>
                      <h4>April 2021</h4>
                      <p>
                        An app development that helps users check product stock
                        and load/unload product easily using QR code system.
                      </p>
                    </div>

                    <div class="job">
                      <h2>My Islamic App</h2>
                      <h3>Mobile Development</h3>
                      <h4>January 2021</h4>
                      <p>
                        Developing an app that contain Al-Quran and including
                        daily prayer, Asmaul Husna and etc.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="container-section last">
                  <div class="container-u first">
                    <h2>Education</h2>
                  </div>
                  <div class="container-u">
                    <h2>Mobile Developer: Sanbercode</h2>
                    <h3>
                      Tech Education Platform &mdash; March 2021 - April 2021
                    </h3>
                  </div>
                  <div class="container-u">
                    <h2>Fullstack Developer: Progate</h2>
                    <h3>
                      Tech Education Platform &mdash; December 2020 - February
                      2021
                    </h3>
                  </div>
                  <div class="container-u">
                    <h2>
                      Universitas Pembangunan Nasional "Veteran" Jawa Timur
                    </h2>
                    <h3>Informatics Bachelor's Degree &mdash; Ongoing</h3>
                  </div>
                  <div class="container-u">
                    <h2>SMA Negeri 1 Tuban</h2>
                    <h3>MIPA &mdash; May 2017 - April 2020</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="ft">
            <p>
              Honestyan Didyafarhan Atthariq &mdash;
              <a href="mailto:honestyan0708@gmail.com"
                >honestyan0708@gmail.com</a
              >
              &mdash; +62 823 3146 6505
            </p>
          </div>
        </div>
      </div>
    </div>
    <button class="open-button" onclick="openForm()">Hit me up!</button>

    <div class="form-popup" id="myForm">
      <form action="index.php" class="form-container" method="post">
        <h1>Message</h1>
        <input type="hidden" id="submission" name="submission" />
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required />

        <label for="msg"><b>Message</b></label>
        <textarea
          class="msg"
          id="msg"
          name="msg"
          rows="4"
          cols="50"
          placeholder="Hello..."
        ></textarea>

        <button type="submit" class="btn">Send</button>
        <button type="button" class="btn cancel" onclick="closeForm()">
          Close
        </button>
      </form>
    </div>
  </body>
  <script src="script.js"></script>
</html>
