<!DOCTYPE html>
<html>
  <head>
	 <?php include 'header.php' ?>
	 <title>First Year</title>
  </head>
  <style type="text/css">
    #grey
    {
      background-color: #50524e;
    }
    #darkgrey
    {
      background-color: #212429;
    }
  </style>
  <body>
  	<nav style="padding-left: 25px; background-color: #111">
      <div class="nav-wrapper">
        <div class="col s12" id="navbar">
          <a href="index.php" class="breadcrumb">Home</a>
          <a href="fy.php" class="breadcrumb">FY</a>
          <a href="labtut.php" class="breadcrumb">LAB/TUTORIAL</a>
          <a href="flogin.php"><span style="float: right;"><button class="btn" id="grey">Logout</button></span></a>
        </div>
      </div>
    </nav>
  	<div class="container" style="margin-right: 300px;">
        <a href="batch.php" onclick="window.open(this.href, 'Snopzer','toolbar=1,resizable=0'); return false;">
          <div class="row" style="padding-top: 35px;">
            <div class="col s12 m6">
                <div class="card" id="grey" style="width: 1200px;">
                  <div class="card-content white-text" style="padding-bottom: 50px; height: 150px;">
                    <div class="col s4 offset-s2" style="padding-bottom: 50px;">
                      <i class="large material-icons" style="margin-top: 5px;">assignment_ind</i>
                    </div>
                    <div class="col s6 pull-s3" style="padding-top: 25px;">
                      <span class="card-title" style="font-size: 60px; color: white; font-weight: 100px;">FCP COMP A3</span>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </a>
        <a href="#">
          <div class="row">
            <div class="col s12 m6">
                <div class="card" id="darkgrey" style="width: 1200px;">
                  <div class="card-content white-text" style="padding-bottom: 50px; height: 150px;">
                    <div class="col s4 offset-s2" style="padding-bottom: 50px;">
                      <i class="large material-icons" style="margin-top: 5px;">assignment_ind</i>
                    </div>
                    <div class="col s6 pull-s3" style="padding-top: 25px;">
                      <span class="card-title" style="font-size: 60px; color: white; font-weight: 100px;">FCP COMP A2</span>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </a>
        <a href="#">
          <div class="row">
            <div class="col s12 m6">
                <div class="card" id="grey" style="width: 1200px; color: #fc7703">
                  <div class="card-content white-text" style="padding-bottom: 50px; height: 150px;">
                    <div class="col s4 offset-s2" style="padding-bottom: 50px;">
                      <i class="large material-icons" style="margin-top: 5px;">assignment_ind</i>
                    </div>
                    <div class="col s6 pull-s3" style="padding-top: 25px;">
                      <span class="card-title" style="font-size: 60px; color: white; font-weight: 100px;">FCP COMP B4</span>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </a>
      </div>
  </body>
</html>