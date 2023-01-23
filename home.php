<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="style.css">
   <title>Proiect PAI</title>
</head>

<body class="bg-image image">
   <h2>Hello, <?php echo $user_data['user_name']; ?></h2>
   <nav class="navbar">
      <ul>
         <li>
            <a href="about-me.html" class="navbar-item">About Me</a>
         </li>
         <li>
            <a href="projects.html" class="navbar-item">Stuff I've Done</a>
         </li>
         <li>
            <a href="contact.html" class="navbar-item">Contact</a>
         </li>
         <li>
            <a href="maps_section.php" class="navbar-item">Visited Cities</a>
         </li>
         <li>
            <a href="logout.php" tite="Logout" class="navbar-item">Logout</a>
         </li>
      </ul>
   </nav>
   <section class="about-me">
      <h2>About me</h2>
      <div class="container">
         <img src="./20221123_134552.jpg" alt="Photo of me">
         <p class="description">My name is Ciocoiu Radu-Mihail<br>
            <br>I am a student at Transilvania University<br>
            Currently studying Telecommunications Systems and Technologies at the Electrical Engineering and Computer Science Faculty.<br>
            I consider myself a sociable, friendly individual that enjoys helping others with what knowledge I possess be it enough or no. <br>
            As soon as I learn something new I like to put it into practice so I don't forget it.
         </p>
      </div>
      <div class="hobbies-interests-skills">
         <div class="hobbies margin">
            <h3>Hobbies</h3>
            <ul>
               <li>Working Out</li>
               <li>Watching Movies</li>
               <li>Growing my web development skills</li>
               <li>Learning random stuff</li>
            </ul>
         </div>
         <div class=" interests margin">
            <h3>Interests</h3>
            <ul>
               <li>Self Improvement</li>
               <li>Web Development</li>
            </ul>
         </div>
         <div class="skills margin">
            <h3>Skills</h3>
            <ul>
               <li>HTML</li>
               <li>CSS</li>
               <li>JavaScript</li>
               <li>React</li>
               <li>Python</li>
            </ul>
         </div>
      </div>
   </section>
</body>

</html>