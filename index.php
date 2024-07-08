<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Deepika Chintala </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
    </style>
</head>
<body>
  <header>
      <img src="logo.png" alt="Logo" width="200"/>
      <button class="menu-toggle">☰</button>
      <nav>
          <ul class="menu">
              <li><a href="index.php">CV</a></li>
              <li><a href="regChintala.php">Mailing List Registration</a></li>
              <li><a href="contactUsChintala.php">Contact Us</a></li>
              <li><a href="courseReflectChintala.php">Course Reflection</a></li>
          </ul>
      </nav>
  </header>
  <script>
      document.querySelector('.menu-toggle').addEventListener('click', () => 
      {
          document.querySelector('.menu').classList.toggle('active');
      });
  </script>
  <main>
    <section class="content-container">
        <div class="text-content">
            <h2>CV</h2>

          <!-- Page Container -->
          <div class="w3-content w3-margin-top" style="max-width:1400px;">

            <!-- The Grid -->
            <div class="w3-row-padding">

              <!-- Left Column -->
              <div class="w3-third">

                <div class="w3-white w3-text-grey w3-card-4">
                  <div class="w3-display-container">
                    <img src="Photo.jpeg" style="width:100%" alt="Avatar">
                    <div class="w3-display-bottomleft w3-container w3-text-black">
                      <h2>Deepika Chintala</h2>
                    </div>
                  </div>
                  <div class="w3-container">
                    <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Data Scientist</p>
                    <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Texas, USA</p>
                    <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>deepikachintala1994@gmail.com</p>
                    <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>4698317186</p>
                    <hr>

                    <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
                    <p>Python</p>
                    <div class="w3-light-grey w3-round-xlarge w3-small">
                      <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">90%</div>
                    </div>
                    <p>SQL Server</p>
                    <div class="w3-light-grey w3-round-xlarge w3-small">
                      <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
                        <div class="w3-center w3-text-white">80%</div>
                      </div>
                    </div>
                    <p>Machine Learning</p>
                    <div class="w3-light-grey w3-round-xlarge w3-small">
                      <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:75%">75%</div>
                    </div>
                    <p>Tableau</p>
                    <div class="w3-light-grey w3-round-xlarge w3-small">
                      <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">50%</div>
                    </div>
                    <br>

                    <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
                    <p>English</p>
                    <div class="w3-light-grey w3-round-xlarge">
                      <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
                    </div>
                    <p>German</p>
                    <div class="w3-light-grey w3-round-xlarge">
                      <div class="w3-round-xlarge w3-teal" style="height:24px;width:10%"></div>
                    </div>
                    <br>
                  </div>
                </div><br>

              <!-- End Left Column -->
              </div>

              <!-- Right Column -->
              <div class="w3-twothird">

                <div class="w3-container w3-card w3-white w3-margin-bottom">
                  <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
                  <div class="w3-container">
                    <h5 class="w3-opacity"><b>Technology Lead / Infosys Limited, India</b></h5>
                    <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Nov 2018 - Dec 2022</h6>
                    <p>Worked with a leading US based financial services client for 4 years and worked closely with project managers to define project requirements and deliver applications according to business needs.
                    Led a team of python developers to implement efficient web applications and performed best practices for code optimization, thereby resulting in 10% less production defects. 
                    Performed Exploratory Data Analysis (EDA) on large business datasets to extract meaningful insights.
                    Assisted in building predictive machine learning models and helped the team evaluate the performance of those models.
                    Experience in developing an automation script for creating metadata table queries.
</p>
                    <hr>
                  </div>
                  <div class="w3-container">
                    <h5 class="w3-opacity"><b>Associate Consultant / Capgemini, India</b></h5>
                    <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Sep 2015 - Nov 2018</h6>
                    <p>Worked with a leading Canada based financial services client for 3 years and performed several data analysis tasks using Python.
                    Strong experience in Matplotlib, Pandas, and Numpy libraries in Python for different Analytical Solutions and Visual Representation of Data.
                    Assisted senior data scientists in data cleaning and analysis.
                    Developed workflows to automate data cleaning activities.
                    Worked on the end-to-end process of software development lifecycle.
                    Experience in working with version control systems like GIT.<br><br>
</p>
                    
                  </div>
                </div>

                <div class="w3-container w3-card w3-white">
                  <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
                  <div class="w3-container">
                    <h5 class="w3-opacity"><b>University of North Texas</b></h5>
                    <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jan 2023 - <span class="w3-tag w3-teal w3-round">Current</span></h6>
                    <p>Pursuing Master of Science in Data Science<br>
                    Worked on a Classification project titled  Coupon Purchase Prediction, where we predict whether a customer purchases a product based on past data.
</p>
                    <hr>
                  </div>
                  <div class="w3-container">
                    <h5 class="w3-opacity"><b>Malla Reddy Engineering College</b></h5>
                    <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2011 - 2015</h6>
                    <p>Pursued Bachelors Degreee with Computer Science and Engineering Stream<br>
                    Built Web Applications using Java, HTML, CSS, JSP, and DB2.<br><br><br><br><br><br>
</p>
                    
                  </div>
                  
                </div>

              <!-- End Right Column -->
              </div>

            <!-- End Grid -->
            </div>

            <!-- End Page Container -->
          </div>
        </div>    
    </section>
   </main>
  
  <footer class="w3-container w3-teal w3-center w3-margin-top">
    <p>Find me on social media.</p>
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
  </footer>
</body>
</html>
