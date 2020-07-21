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
        padding: 65px 0px;
        margin-bottom: 25px;
        padding-left: 15%;
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
    <title>FCP COMP A3 LAB</title>   
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand inactiveLink" href="" style="text-align: center; margin: 0 auto;">Your IP address is 
      <?php $ip=$_SERVER['REMOTE_ADDR']; echo $ip; ?></a>
    </nav>
  </head>
  <body >
    <nav class="navbar navbar-expand-lg navbar-light bg-dark " style="float: left;">
      <a class="navbar-brand inactiveLink" href="" style="float: right; color: white;">Maximum marks: </a>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark " style="float: right;">
      <a class="navbar-brand inactiveLink" href="" style="float: right; color: white;">FCP COMP A3<br>123456789</a>
    </nav>
    <div class = "main"> 
      <form >
        <?php
          $i = 0;
          $r = 1711104;
          $n = 0;
          $marks = array();
          $arrlength = 24;
          for($x = 0; $x < $arrlength; $x++) {
              $marks[$x] = rand(0,25);
          }
          $x = 0;
          while ($i != 3) {
            echo '';
            echo '<table class="table table-striped table-dark" style=" width: 300px; float: left; margin-left: 10px; margin-right:50px" >';
              echo '<thead>';
                echo '<tr >';
                  echo '<th>Roll Number</th>';
                  echo '<th>Marks</th>';
                echo '</tr>';
              echo '</thead>';
              echo '<tbody>';
              while($n != 8)
              {
                  echo '<tr>';
                  echo '<td >'.$r.'</td>';
                  echo '<td><input type="text" name="text" class="input" autocomplete="off" id="'.$n.'" style=" width: 100px;" value = "'.$marks[$x].'" style = "text-color:black;"></td>';
                  $r = $r + 1;
                  $n = $n + 1;
                  echo '</tr>';
                  $x = $x + 1;

              }
              $n = 0;
              $i = $i + 1;
              echo '</tbody>';
            echo '</table>';
            echo '';
          }
        ?>
      </form>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark " id ="footer">
      <a class="navbar-brand inactiveLink" href="" style="color: white; margin-left: 50px;">FCP COMP A3 (123456789)</a>
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