<html lang="en">
    
    <head>
        <title>Faculty Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="login.css">
            <script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('html_element', {
          'sitekey' : '6LflrN0UAAAAAClbB6Cm1FGc9ggUBzpCQpnJ51LW'
        });
      };
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <style type="text/css">
      #grey
      {
        background-color: #50524e;
      }
    </style>
    
     <body style="background-color: #212429">

       <div>
            <div class="container eq">

<!--                   <div class="card info col">
                     <div class="logo animated">
                      <img src="https://lms-kjsce.somaiya.edu/pluginfile.php/1/theme_essential/logo/1579853562/college%20plate.png    ">   
                     </div>
                      
                      <h1 class="animated">GENERATE MARKSHEET</h1>
                      <form>
                      <div class="input-container animated">
                        <label for="RollNo">Enter Your Roll No.</label>
                        <input type="text" id="RollNo" required="required"/>
                        <div class="bar"></div>
                      </div>
                      <div class="input-container animated">
                        <label for="Bday">Enter Your Birthdate</label>
                        <input type="date" id="Bday" required="required"/>
                        <div class="bar"></div>
                      </div>
                      
                      <div class="button-container animated">
                        <button>Go</button>
                      </div>
                      

                    </form>

                  </div> -->
                  <div class="card col" id="grey">
                    <h1 class="title animated" style="color: white;">Faculty Login</h1>
                    <form action="faction.php">
                      <div class="input-container animated">
                        <label for="Username" style="color: white;">Username</label>
                        <input type="text" id="username" name="username" required="required" autocomplete="off" />
                        <div class="bar"></div>
                      </div>
                      <div class="input-container animated">
                        <label for="Password" style="color: white;">Password</label>
                        <input type="password" id="password" name="password" required="required" autocomplete="off" />
                        <div class="bar"></div>

                      </div>
    
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
                  </div>
                  
            </div>
        
        </div>        
        
    </body>
    
</html>