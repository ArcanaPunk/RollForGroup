<!DOCTYPE html>
<html lang="en">
<head>
  <title>Roll For Group</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;

    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {
      height: 90vh;
    }

    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
      position:fixed;
      bottom: 0px;
      width: 100%;
      background-color: #555;
      color: white;
      padding: 15px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }

    .piTable {
      text-align: center;
    }

    .playerIcon {
      height: 50%;
      width: 50%;
      display: inline-block;
      max-width: 100%;
      height: auto;
      padding: 4px;
      line-height: 1.42857143;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 4px;
      -webkit-transition: all .2s ease-in-out;
           -o-transition: all .2s ease-in-out;
              transition: all .2s ease-in-out;
    }

  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">

    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href="home.php">Roll For Group</a>

    </div>

    <div class="collapse navbar-collapse" id="myNavbar">

      <ul class="nav navbar-nav">
        <li class="active"><a href="players.php">Players</a></li>
        <li><a href="group.php">Groups</a></li>
        <li><a href="#">Messages</a></li>
        <li><a href="#">About</a></li>
      </ul>

      <!-- Login and Profile Button -->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>

  </div>
</nav>

<!-- Main Body -->
<div class="container-fluid text-center">
  <div class="row content">

    <!-- Left Sidebar -->
    <div class="col-sm-2 sidenav" style="height:100%">
      <p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>

    <!-- Center Body -->
    <div class="col-sm-8 text-left">
    <h2>Browse Players:</h2>

      <table style="text-align: center;"">
        <tr>
          <td>
            <img src="pictures/Male-Generic-Photo.jpg" alt="IMG" class="playerIcon"/><br/>
            <h4>Name 1</h4>
          </td>
          <td>
            <img src="pictures/Male-Generic-Photo.jpg" alt="IMG" class="playerIcon"/><br/>
            <h4>Name 2</h4>
          </td>
          <td>
            <img src="pictures/Male-Generic-Photo.jpg" alt="IMG" class="playerIcon"/><br/>
            <h4>Name 3</h4>
          </td>
          <td>
            <img src="pictures/Male-Generic-Photo.jpg" alt="IMG" class="playerIcon"/><br/>
            <h4>Name 4</h4>
          </td>
        </tr>
        <tr>
          <td>
            <img src="pictures/Male-Generic-Photo.jpg" alt="IMG" class="playerIcon"/><br/>
            <h4>Name 5</h4>
          </td>
          <td>
            <img src="pictures/Male-Generic-Photo.jpg" alt="IMG" class="playerIcon"/><br/>
            <h4>Name 6</h4>
          </td>
          <td>
            <img src="pictures/Male-Generic-Photo.jpg" alt="IMG" class="playerIcon"/><br/>
            <h4>Name 7</h4>
          </td>
          <td>
            <img src="pictures/Male-Generic-Photo.jpg" alt="IMG" class="playerIcon"/><br/>
            <h4>Name 8</h4>
          </td>
        </tr>
        <tr>
          <td>
            <img src="pictures/Male-Generic-Photo.jpg" alt="IMG" class="playerIcon"/><br/>
            <h4>Name 9</h4>
          </td>
          <td>
            <img src="pictures/Male-Generic-Photo.jpg" alt="IMG" class="playerIcon"/><br/>
            <h4>Name 10</h4>
          </td>
          <td>
            <img src="pictures/Male-Generic-Photo.jpg" alt="IMG" class="playerIcon"/><br/>
            <h4>Name 11</h4>
          </td>
          <td>
            <img src="pictures/Male-Generic-Photo.jpg" alt="IMG" class="playerIcon"/><br/>
            <h4>Name 12</h4>
          </td>
        </tr>
        <tr>
          <td>
            <img src="pictures/Male-Generic-Photo.jpg" alt="IMG" class="playerIcon"/><br/>
            <h4>Name 13</h4>
          </td>
          <td>
            <img src="pictures/Male-Generic-Photo.jpg" alt="IMG" class="playerIcon"/><br/>
            <h4>Name 14</h4>
          </td>
          <td>
            <img src="pictures/Male-Generic-Photo.jpg" alt="IMG" class="playerIcon"/><br/>
            <h4>Name 15</h4>
          </td>
          <td>
            <img src="pictures/Male-Generic-Photo.jpg" alt="IMG" class="playerIcon"/><br/>
            <h4>Name 16</h4>
          </td>
        </tr>
        <tr>
          <td colspan="2" style="text-align: left">
            <a href="#"><span class="glyphicon glyphicon-arrow-left"></span> Previous</a>
          </td>
          <td colspan="2" style="text-align: right">
            <a href="#"><span class="glyphicon glyphicon-arrow-right"></span> Next</a>
          </td>
        </tr>
      </table>
    </div>

    <!-- Right Sidebar -->
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>

  </div>
</div>

<!-- Footer -->
<footer class="container-fluid text-center">
  <p>Copywrite &copy; Roll For Group 2017</p>
</footer>

</body>
</html>
