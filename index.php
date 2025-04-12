<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CodeStyle | Home</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php include 'header.php'; ?>
  <main>
    <h1>Welcome to CodeStyle</h1>
    <p>This is a sleek, code-inspired PHP website.</p>
  </main>
  <?php include 'footer.php'; ?>
</body>
</html>

<?php
// about.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CodeStyle | About</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php include 'header.php'; ?>
  <main>
    <h1>About Us</h1>
    <p>We're passionate about clean code and elegant web design.</p>
  </main>
  <?php include 'footer.php'; ?>
</body>
</html>

<?php
// contact.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CodeStyle | Contact</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php include 'header.php'; ?>
  <main>
    <h1>Contact Us</h1>
    <form action="contact.php" method="post">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="message">Message:</label>
      <textarea id="message" name="message" required></textarea>

      <button type="submit">Send</button>
    </form>
  </main>
  <?php include 'footer.php'; ?>
</body>
</html>

<?php
// header.php
?>
<header>
  <nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </nav>
</header>

<?php
// footer.php
?>
<footer>
  <p>&copy; <?php echo date("Y"); ?> CodeStyle. All rights reserved.</p>
</footer>

/* style.css */
body {
  font-family: monospace;
  background-color: #1e1e1e;
  color: #dcdcdc;
  margin: 0;
  padding: 0;
}

nav ul {
  list-style-type: none;
  padding: 0;
  display: flex;
  background-color: #333;
  margin: 0;
}

nav li {
  margin: 0;
  padding: 1em;
}

nav a {
  color: #dcdcdc;
  text-decoration: none;
}

main {
  padding: 2em;
}

form {
  display: flex;
  flex-direction: column;
  max-width: 400px;
}

input, textarea {
  margin-bottom: 1em;
  padding: 0.5em;
  border: none;
  background-color: #2d2d2d;
  color: #fff;
}

button {
  padding: 0.5em;
  background-color: #4caf50;
  color: white;
  border: none;
  cursor: pointer;
}

footer {
  background-color: #333;
  text-align: center;
  padding: 1em;
  position: fixed;
  bottom: 0;
  width: 100%;
  color: #999;
}
