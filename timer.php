<?php     

      session_start();
      $_SESSION['tmp']=0;
      $_SESSION['result']=0;
      $_SESSION['res']="";
      $name=$_SESSION['name'];
       if($_SERVER["REQUEST_METHOD"]=="POST")
       {
         $_SESSION['res']=$_POST["op"];
       
          if($_SESSION['res']=="quiz")
          {
            ?>
            
            <html>
            <head>
              <link rel="stylesheet" href="timer1.css"/>
              <h2 id="h1"></h2>
            </head>
            <body>
              <script>
                document.getElementById("h1").innerHTML="<b>Hello <?php echo $name   ?>  ,please select your Interest ...</b>";
              </script>

              <div class="d1">
                <form action="link.php" method="POST">
                  <input type="radio" name="ch" value="gk" id=1 />
                  <label for=1 id="i4"><b>GENERAL_KNOWLEDGE<b></label>
                  <br><br>
                  <input type="radio" name="ch" value="ai" id=5  />
                  <label for=5 id="i5"><b>ABOUT_INDIA<b></label>
                  <br><br>
                  <input type="radio" name="ch" value="apt" id=2  />
                  <label for=2 id="i1"><b>APTITUDE<b></label>
                  <br><br>
                  <input type="radio" name="ch" value="sp" id=3  />
                  <label for=3 id="i2"><b>SPORTS<b></label>
                  <br><br>
                  <input type="radio" name="ch" value="phy" id=4  />
                  <label for=4 id="i3"><b>PHYSICS<b></label>
                  <br><br>
                  <input id="sb" type="submit" value="submit" />
               </form>  
              </div>
            </body>
           </html>
           <?php
          
           }
          
          if($_SESSION['res']=="game")
          {
            ?>
            <html>
            <head>
              <link rel="stylesheet" href="timer.css"/>
              <h2 id="h1"></h2>
            </head>
            <body>
              <script>
                document.getElementById("h1").innerHTML="<b>Hello <?php echo $name   ?>  ,please select your Interest ...</b>";
              </script>

            <div class="d1">
            <form action="link.php" method="POST">
              <input type="radio" name="ch" value="tic" id=1 />
              <label for=1 id="i4"><b>TIC-TAC-TOE<b></label>
              <br><br>
              <input type="radio" name="ch" value="mem" id=5 />
              <label for=5 id="i5"><b>MEMORY_CARD<b></label>
              <br><br>
              <input type="radio" name="ch" value="snk" id=2 />
              <label for=2 id="i1"><b>SNAKE<b></label>
              <br><br> 
              <input type="radio" name="ch" value="ter" id=3 />
              <label for=3 id="i2"><b>TETRIS<b></label>
              <br><br>
              <input id="sb" type="submit" value="submit" />
            </form>  
          </body>
          </html>
           <?php
          }
        }       
?>
       