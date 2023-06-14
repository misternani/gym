<?php
session_start();
include_once 'dbConnection.php';

if (!(isset($_SESSION['username']))) {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Balal Strength Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      background-color: white;
      font-family: Arial, sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .container {
      background-color: #ffffff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
      width: 80%;
      max-width: 500px;
    }

    h1 {
      text-align: center;
      color: #000000;
      margin-bottom: 30px;
    }

    input[type="text"],
    input[type="number"],
    textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: none;
      border-radius: 5px;
      background-color: #eeeeee;
      color: #000000;
      box-sizing: border-box;
    }

    input[type="text"]:focus,
    input[type="number"]:focus,
    textarea:focus {
      outline: none;
      background-color: #dddddd;
    }

    button {
      width: 100%;
      padding: 10px;
      background-color: #000000;
      color: #ffffff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-weight: bold;
      transition: background-color 0.3s;
    }

    button:hover {
      background-color: #222222;
    }

    .center-image {
      display: flex;
      justify-content: center;
    }

    .center-image img {
      max-width: 100%;
    }

    .form-label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    /* Align image upload buttons with their labels */
    .center-image input {
      float: left;
      margin-right: 10px;
    }

    /* Logout button */
    .logout {
      position: absolute;
      top: 10px;
      right: 10px;
    }

    .logout a {
      color: #ffffff;
      text-decoration: none;
      font-weight: bold;
    }
    /* Hamburger Icon Styles */
 .hamburger {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 30px;
    height: 20px;
    cursor: pointer;
    position: fixed;
    top: 10px;
    left: 10px;
    z-index: 999;
    color:white;
  }

  .hamburger-line {
    width: 100%;
    height: 3px;
    background-color: #000000;
    margin-bottom: 4px;
    transition: all 0.3s ease;
  }

  /* Hamburger Icon Animation */
  .hamburger.open .line-1 {
    transform: rotate(45deg) translate(5px, 5px);
  }

  .hamburger.open .line-2 {
    opacity:0;
  }

  .hamburger.open .line-3 {
    transform: rotate(-45deg) translate(5px, -5px);
  }

  /* Overlay Menu Styles */
  .overlay-menu {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.8);
    z-index: 998;
  }

  .overlay-menu.open {
    display: block;
  }

  .menu-content {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100%;
    color: #fafafa;
  }

  .menu-item {
    margin-bottom: 20px;
    font-size: 24px;
  }
  a{
    text-decoration:none;
    color:white;
  }
  a:hover{
    text-decoration:underline;
  }
  </style>
</head>
<body>
 <!-- Hamburger Icon -->
 <div class="hamburger" onclick="toggleMenu(this)">
    <div class="hamburger-line line-1"></div>
    <div class="hamburger-line line-2"></div>
    <div class="hamburger-line line-3"></div>
  </div>

  <!-- Overlay Menu -->
  <div class="overlay-menu" id="overlayMenu">
    <div class="menu-content">
      <div class="menu-item"><img src="upload/logo-fixed.png"></div>
      <div class="menu-item"><a href="btransformations.php">Add Transformations</a></div>
      <div class="menu-item"><a href="#">Add Blog post</a></div>
      <div class="menu-item"><a href="logout.php">Logout</a></div>
    </div>
  </div>


  <script>
  function toggleMenu(element) {
    element.classList.toggle("open");
    var overlayMenu = document.getElementById("overlayMenu");
    overlayMenu.classList.toggle("open");
  }
</script>
  <div class="container">
    <h1>Upload Blog Post</h1>
    <form action="addblogpost.php" method="post" enctype="multipart/form-data">
    <input type="text" id="title" name="title" placeholder="Blog Title" required />  
    <textarea id="blogpost" name="blogpost" placeholder="Blog Text"  required></textarea>
    <div>
     <label for="headerimage" class="form-label">Blog Header Image:</label>
        <input type="file" id="headerimage" name="headerimage" accept="image/*" required />
      </div>
      <br>
      <div>
        <label for="blogvideo" class="form-label">Blog Video:</label>
        <input type="file" id="blogvideo" name="blogvideo" accept="video/*" required />
      </div>
      <br>
      <input type="text" id="videolink" name="videolink" placeholder="Video Link" required />
      
      <button type="submit">Upload</button>
    </form>
  </div>
</body>
</html>
