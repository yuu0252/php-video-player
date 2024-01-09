<?php require_once("includes/config.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  <script src="./assets/js/commonAction.js"></script>
</head>

<body>
  <div id="pageContainer">
    <div id="mastHeadContainer">

      <button id="navShowHide"><img src="./assets/images/icons/menu.png" /></button>

      <a href="index.php" class="logoContainer">
        <img src="./assets/images/icons/logo.png" title="logo" alt="logo" />
        VideoPlayer
      </a>

      <div class="searchBarContainer">
        <form action="search.php" method="GET">
          <input type="text" class="searchBar" name="term" placeholder="Search..." />
          <button class="searchButton">
            <img src="./assets/images/icons/search.png" />
          </button>
        </form>
      </div>

      <div class="rightIcons">
        <a href="upload.php">
          <img src="./assets/images/icons/upload.png" class="upload">
        </a>
        <a href="upload.php">
          <img src="./assets/images/icons/user.png" class="user">
        </a>
      </div>
    </div>



    <div id="sideNavContainer" style="display: none;">

    </div>

    <div id="mainSectionContainer">
      <div id="mainContentContainer">