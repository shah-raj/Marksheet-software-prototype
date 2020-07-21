<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style type="text/css">
      body
      {
        font-family: "Montserrat";
        overflow: hidden;
      }

      .inactiveLink {
         pointer-events: none;
         cursor: default;
      }
      .main 
      {
        font-size: 20px; /* Increased text to enable scrolling */
        padding-left: 15%;
      }
      .carousel-control-prev-icon,.carousel-control-next-icon
      {
        height: 100px;
        width: 100px;
        outline: black;
        background-size: 100%, 100%;
        border-radius: 50%;
        /*border: 1px solid black;*/
        background-image: none;
      }
      .carousel-control-next-icon:after
      {
        content: '>';
        font-size: 55px;
        color: red;
      }

      .carousel-control-prev-icon:after 
      {
        content: '<';
        font-size: 55px;
        color: red;
      }

      #footer 
      {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: red;
        color: white;
        text-align: center;
      }
    </style>
    <title>Marksheet Sample</title>   
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand inactiveLink" href="" style="text-align: center; margin: 0 auto;">Your IP address is 
      <?php $ip=$_SERVER['REMOTE_ADDR']; echo $ip; ?></a>
    </nav>
  </head>
  <body >
    <nav class="navbar navbar-expand-lg navbar-light bg-dark " style="float: left;">
      <a class="navbar-brand inactiveLink" href="" style="float: right; color: white;">Maximum Marks:</a>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark " style="float: right;">
      <a class="navbar-brand inactiveLink" href="" style="float: right; color: white;">FCP COMP B<br>123456780</a>
    </nav>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-wrap = "false" data-interval="false">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="main">
            <form>
              <?php
                // error_reporting(0);
                session_start();
                $_SESSION["r"] = 1711064;
                include 'test1.php';
                // session_destroy();
              ?>
            </form>
          </div>
        </div>
        <div class="carousel-item">
          <div class="main">
            <form>
              <?php
                // session_start();
                $_SESSION["r"] = 1711084;
                include 'test1.php';
                // session_destroy();
              ?>
            </form>
          </div>
        </div>
        <div class="carousel-item">
          <div class="main">
            <form>
              <?php
                // session_start();
                $_SESSION["r"] = 1711104;
                include 'test1.php';
                session_destroy();
              ?>
            </form>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev" >
        <span class="carousel-control-prev-icon" aria-hidden="true" ></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark " id ="footer">
      <a class="navbar-brand inactiveLink" href="" style="color: white; margin-left: 50px;">FCP COMP B (123456780)</a>
      <a class="navbar-brand inactiveLink" href="" style="color: white; display: inline-block; margin: 0 auto;">VPV: __________</a>

      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#update" >UPDATE</button>
      <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true=">
        <form>
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="background-color: #292b2c;">
              <div class="modal-body">
                <p>Enter password to continue:</p>
                <input type="password" name="pwd">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Confirm</button>
              </div>
            </div>
          </div>
        </form>
      </div>      

      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#submit" style="margin: 0 25px;">SUBMIT</button>
      <div class="modal fade" id="submit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true=">
        <form>  
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="background-color: #292b2c;">
              <div class="modal-body">
                <p>Enter password to continue:</p> 
                <input type="password" name="pwd">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Confirm</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </nav>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
  <script>
    var x = document.getElementsByClassName('input');
    for(i=0;i<x.length;i++)
    {
      if(Number(x[i].value)<10){
        x[i].style.backgroundColor = "#ff7566";
      }
    }
  </script>
</html>