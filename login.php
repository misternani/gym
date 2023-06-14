<?php
session_start();
include_once 'dbConnection.php';

if ((isset($_SESSION['username']))) {
    header("location:btransformations.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Balal Strength Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      background-color: #000000;
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
      max-width: 350px;
    }

    h1 {
      text-align: center;
      color: #000000;
      margin-bottom: 30px;
    }

    input[type="text"],
    input[type="password"] {
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
    input[type="password"]:focus {
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
  </style>
</head>
<body>
  <div class="container">
    <div class="center-image">
      <img src="image.png" alt="Logo" />
    </div>
    <form action="authentication.php" method="post">
      <input type="text" id="username" name="username" placeholder="Username" minlength="1" required />
      <input type="password" id="password" name="password" placeholder="Password" minlength="1" required />
      <button type="submit">Login</button>
    </form>
  </div>
</body>
</html>
