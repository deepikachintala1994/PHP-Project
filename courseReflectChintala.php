<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Deepika Chintala </title>
    <link rel="stylesheet" href="style.css">
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
            <h2>Course Reflection</h2>
          <div class="image-content">
              <img src="funphoto.jpg" alt="funphoto" style="width:20%"/>
          </div>
          
            <p><h3>What I learned in this Class</h3><br>
            As a beginner in Cybersecurity, this course helped me to understand the basics of Cybersecurity. It helped me in understanding the importance of securing data and what are the different types of data breaches that can occur.<br>
            We learned about threats, attacks and vulnerabilities. We learned how to manage and mitigate risks. We understood the importance of including Firewalls and Virtual Private Networks (VPNs), and Intrusion Detection and Prevention Systems (IDPS). <br>
            We also discussed various Authentication and Access Control techniques like passwords, biometrics, and multi-factor authentications. We understood the importance of following the security standards and procedures followed by a company to maintain a secure environment. <br>
            Apart from all this, we also learnt team management, which is very crucial when working in a corporate organization.<br>

            <br><h3>My Favorite Topics</h3><br>
            As I’m more interested in coding and programming, my favorite topics from this class would be something related to working on replit. I learned about a new tool that is used to build secure web pages. I learned how to create forms securely using GET and POST methods. <br>
            I liked how team presentations helped us in learning more things by working on the presentations and evaluating other teams’ presentations. <br>
            Discussion Posts helped us in learning fun things about cybersecurity and kept us engaged in this course. It also gave us a chance to interact with our teammates. <br><br>
            <h3>Future Interests</h3><br>
            In the future, I would like to learn about more cool tools like replit that help in creating secure web pages. As the data regarding information security keeps updating with time, I would like to keep myself updated on the latest trends in Information Security. 
              <br><br><br><br><br><br>
 </p>
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
