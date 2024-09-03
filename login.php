<!DOCTYPE html>
<html>
<head>
    <title>BRIGHT SMILE</title>

      <link rel="stylesheet" href="login.css">
   

    </head>

    <body>
        <h1> sign in </h1>
        <!-- sign in box -->
        <div class="div1">
            
            <form action="login.inc.php" method="post">
                <labele>
                    username
                </labele>
                <input type="text" id ="pass" name="uname" class="inputtext" placeholder="user name">
                <br><br>
            
                <labele>
                    password
                </labele>
                
                <input type="text" name="password" class="inputtext" placeholder="password" onchange="checkPwd(this.value)"/>
                <br><br>
               
                <input type="submit" name="submit" value="Login">

                <!--<onclick> <button>Log in</a></button></onclick>-->
                <br><br>
                
               
            </form>
        </div>
 

        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>-->
     

        
    </body>
    </html>