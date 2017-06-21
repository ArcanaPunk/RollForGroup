<!DOCTYPE html>
<html lang="en">
<head>
  <title>Roll For Party: Players</title>
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

    .player-modal-content {
      position: relative;
      background-color: #fff;
      -webkit-background-clip: padding-box;
              background-clip: padding-box;
      border: 1px solid #999;
      border: 1px solid rgba(0, 0, 0, .2);
      border-radius: 0px;
      outline: 0;
      -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
              box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
    }

    .panel-profile {
      margin-bottom: 20px;
      margin-top: 20px;
      background-color: #fff;
      border: 1px solid transparent;
      border-radius: 4px;
      -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
              box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    }

    .panel-profile-body {
      padding: 15px;
    }
    .panel-profile-heading {
      padding: 10px 15px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 3px;
      border-top-right-radius: 3px;

        color: #000000;
        background-color: #f1f1f1;
        border-color: #000000;
    }
    .panel-profile-heading > .dropdown .dropdown-toggle {
      color: inherit;
    }
    .panel-profile-title {
      margin-top: 0;
      margin-bottom: 0;
      font-size: 16px;
      color: inherit;
    }
    .panel-profile-title > a,
    .panel-profile-title > small,
    .panel-profile-title > .small,
    .panel-profile-title > small > a,
    .panel-profile-title > .small > a {
      color: inherit;
    }
    .panel-profile-footer {
      padding: 10px 15px;
      text-align: right;
      background-color: #f5f5f5;
      border-top: 1px solid #ddd;
      border-bottom-right-radius: 3px;
      border-bottom-left-radius: 3px;
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

      <a class="navbar-brand" href="home.php">Roll For Party</a>

    </div>

    <div class="collapse navbar-collapse" id="myNavbar">

      <ul class="nav navbar-nav">
        <li class="active"><a href="players.php">Players</a></li>
        <li><a href="group.php">Groups</a></li>
        <li><a href="viewMessages.html">Messages</a></li>
        <li><a href="viewAbout.html">About</a></li>
      </ul>

      <!-- My Profile and My Group Button and Login -->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="profile.html"><span class="glyphicon glyphicon-user"></span> My Profile</a></li>
        <li><a href="viewOwnGroups.html"><span class="glyphicon glyphicon-th-large"></span> My Groups</a></li>
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
      
    </div>

    <!-- Center Body -->
    <div class="col-sm-8 text-left">
    <h2>Browse Players:</h2>

      <table style="text-align: center;"">
        <tr>
          <td>
            <a data-toggle="modal" href="#myModal">
              <img src="pictures/Female-Generic-Photo.jpg" alt="IMG" class="playerIcon"/><br/>
              <h4>Name 1</h4>
            </a>
          </td>
          <td>
            <img src="pictures/Male-Generic-Photo.jpg" alt="IMG" class="playerIcon"/><br/>
            <h4>Name 2</h4>
          </td>
          <td>
            <img src="pictures/Female-Generic-Photo.jpg" alt="IMG" class="playerIcon"/><br/>
            <h4>Name 3</h4>
          </td>
          <td>
            <img src="pictures/Female-Generic-Photo.jpg" alt="IMG" class="playerIcon"/><br/>
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
            <img src="pictures/Female-Generic-Photo.jpg" alt="IMG" class="playerIcon"/><br/>
            <h4>Name 7</h4>
          </td>
          <td>
            <img src="pictures/Male-Generic-Photo.jpg" alt="IMG" class="playerIcon"/><br/>
            <h4>Name 8</h4>
          </td>
        </tr>
        <tr>
          <td>
            <img src="pictures/Female-Generic-Photo.jpg" alt="IMG" class="playerIcon"/><br/>
            <h4>Name 9</h4>
          </td>
          <td>
            <img src="pictures/Female-Generic-Photo.jpg" alt="IMG" class="playerIcon"/><br/>
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
            <img src="pictures/Female-Generic-Photo.jpg" alt="IMG" class="playerIcon"/><br/>
            <h4>Name 14</h4>
          </td>
          <td>
            <img src="pictures/Male-Generic-Photo.jpg" alt="IMG" class="playerIcon"/><br/>
            <h4>Name 15</h4>
          </td>
          <td>
            <img src="pictures/Female-Generic-Photo.jpg" alt="IMG" class="playerIcon"/><br/>
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

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="player-modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Quick View</h4>
          </div>

          <div class="modal-body">
            <div class="panel-profile">

              <div class="panel-profile-heading">
                <h3 class="panel-profile-title">Name 1</h3>
              </div>
              
              <div class="panel-profile-body">
              <div align="center"> 
                <img alt="User Pic" src="pictures/Female-Generic-Photo.jpg"><br/> 
              </div>
                <div class="row">            
                  <div align="center" style="padding-top: 20px">
                    <table class="table table-user-information">
                      <tbody>
                        <tr>
                          <td>Name:</td>
                          <td>Name 1</td>
                        </tr>
                        <tr>
                          <td>Location:</td>
                          <td>City, State</td>
                        </tr>
                        <tr>
                          <td>Games I play:</td>
                          <td>DnD, Munchkin</td>
                        </tr>
                        <tr>
                          <td>Description:</td>
                          <td>Blank</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <a href="viewOtherPlayer.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-user"></i> View Full Profile</a>
            <a href="viewMessageThread.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-comment"></i> Message</a>
            <a href="#" onclick="$('#myModal').modal('hide')" class="btn btn-sm btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i>Close</a>
          </div>
        </div>
      </div>
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
  <p>Copywrite &copy; Roll For Party 2017</p>
</footer>

</body>
</html>
