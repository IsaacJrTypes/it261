<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/styles.css" type="text/css" rel="stylesheet" />
    <title>Home Page</title>
  </head>
  <body>
    <header>
      <div id="inner-header">
        <h1 id="logo">
          <a href="index.php">
            <img src="images/php-logo.svg" alt="Php Logo" />
          </a>
        </h1>

        <nav>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="daily.php">Daily</a></li>
            <li><a href="project.php">Project</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="gallery.php">Gallery</a></li>
          </ul>
        </nav>
      </div>
      <!-- end inner header -->
    </header>
    <div id="wrapper">
      <div id="hero">
        <img
          class="profile"
          src="images/isaac.jpg"
          alt="Isaac touching the top of the effel tower"
        />
        <section>
          <h2>Welcome to Isaac's Portal Home Page!</h2>

          <p>
            My name is Isaac Jimenez. I am currently enjoying the programming
            side of web development. Growing up, the world wide web was always a
            magical place. It was a free resource for learning anything you ever
            wanted and seeing any place in the world.
          </p>
          <p>
            My personal hobbies are learning about different disciplines. Web
            development has been the only realm where my interests in
            psychology, philosophy, economics and the arts are put into
            practice.
          </p>
        </section>
      </div>
      <!-- End Hero -->
      <main>
        <section>
          <h3>Week 1: Development Environment Screenshots</h3>
          <h4>MAMP Screenshot</h4>
          <img
            src="images/setupScreenshot.jpg"
            alt="Screenshot of MAMP on Windows desktop"
          />
          <h4>Error Screenshot</h4>
          <img
            src="images/errorScreenshot.jpg"
            alt="Screenshot of php error displayed"
          />
        </section>
      </main>
      <aside>
        <h2>Class Exercises</h2>
        <h3>Week 1:</h3>
        <ul>
          <li>
            <a
              href="https://github.com/IsaacJrTypes"
              title="Link to Github Profile"
            >
              GitHub Profile
            </a>
          </li>
        </ul>
        <h3>Week 2:</h3>
        <ul>
          <li><a href="../weeks/week2/var.php" title="">var.php</a></li>
          <li><a href="../weeks/week2/currency-logic.php" title="">currency-logic.php</a></li>
          <li><a href="../weeks/week2/currency.php" title="">currency.php</a></li>
          <li><a href="../weeks/week2/hereDoc.php" title="">hereDoc.php</a></li>
        </ul>
        <h3>Week 3:</h3>
        <h3>Week 4:</h3>
      </aside>
    </div>
    <!-- End wrapper -->
    <footer>
      <div id="inner-footer">
        <ul>
          <li>Copyright &copy;</li>
          <li>All Rights Reserved</li>
          <li><a href="../index.php">Web Design by Isaac</a></li>
          <li><a id="html-checker" href="#">HTML Validation</a></li>
          <li><a id="css-checker" href="#">CSS Validation</a></li>
        </ul>
      </div>
      <!--Inner Footer -->
    </footer>
    <script src="js/validator.js"></script>
  </body>
</html>
