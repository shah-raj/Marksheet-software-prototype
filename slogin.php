<html lang="en">
    
    <head>
        <title>Student Login</title>
        <link rel="stylesheet" href="login.css">
            <script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('html_element', {
          'sitekey' : '6LflrN0UAAAAAClbB6Cm1FGc9ggUBzpCQpnJ51LW'
        });
      };
    </script>
    <style type="text/css">
      #grey
      {
        background-color: #50524e;
      }
    </style>
    </head>
    
     <body style="background-color: #212429">

       <div>
            <div class="container eq" style="padding-top: 100px;">

                  <div class="card info col" id="grey">
                     <div class="logo animated">
                      <!-- <img src="https://lms-kjsce.somaiya.edu/pluginfile.php/1/theme_essential/logo/1579853562/college%20plate.png    ">    -->
                     </div>
                      
                      <h1 class="animated">GENERATE MARKSHEET</h1>
                      <form action="marksheet.php">
                      <div class="input-container animated">
                        <label for="RollNo">Enter Your Roll No.</label>
                        <input type="text" id="RollNo" required="required" autocomplete="off" />
                        <div class="bar"></div>
                      </div>
                      <div class="input-container animated">
                        <label for="Bday">Enter Your Birthdate</label>
                        <input type="date" id="Bday" required="required" autocomplete="off" />
                        <div class="bar"></div>
                      </div>
                      <a href="marksheet.php">
                      <div class="button-container animated">
                        <button>Go</button>
                      </div>
                    </a>
                      

                    </form>

                  </div>
<!--                   <div class="card col">
                    <h1 class="title animated">Faculty Login</h1>
                    <form>
                      <div class="input-container animated">
                        <label for="Username">Username</label>
                        <input type="text" id="Username" required="required"/>
                        <div class="bar"></div>
                      </div>
                      <div class="input-container animated">
                        <label for="Password">Password</label>
                        <input type="password" id="Password" required="required"/>
                        <div class="bar"></div>

                      </div>
    <form action="?" method="POST">
      <div id="html_element"></div>
      <br>
      <div class="button-container animated">
      <input type="submit" value="Submit"></div>

    </form>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
    </script>
                      
                      
                      <div class="forgot animated">Forgot your password?</div>
                      <div class="forgot animated">Change your password</div>
                    </form>
                  </div> -->
                  
            </div>
        
        </div>        
        
    </body>
    
</html>