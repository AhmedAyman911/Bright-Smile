

<!DOCTYPE html>
<html>
    <head>
        <?php
        if(isset($_POST['submit']))
        {
            require_once("signup.inc.php");
        }
        ?>
        <meta name="sign in" content="width=device-width,initial-scale=1.0">
        <title>sign up</title>
        <link rel="stylesheet" href="regest.css">
        <script src="https://kit.fontawesome.com/c42544e24a8.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="quote">
            <blockquote> <h2 > Register for easy access</h2></blockquote>

        </div>
        
        <div class="container">
            <form action="" method="post">
                <i class="fas fa-paper-plane"></i>
                <div class="input-group">
                    <label>UserName</label>
                    <input type="text" name="uname" placeholder="Enter your name" id="contact-name" onkeyup="validateName()">
                    <span id="name-error"></span>
                </div>
                <div class="input-group">
                    <labele>
                        Password
                    </labele>
                    
                    <input type="text" name="password" class="inputtext" placeholder="password" onchange="checkPwd(this.value)"/>
                </div>

                <div  class="input-group">
                    
                    <lable>confirm Password</lable>
                
                <input type="text" id="confirm_pass" name="confirmpassword" class="inputtext" placeholder="confirm password">
                <br><br>
                </div>

                <div class="input-group">
                    <label>Age</label>
                    <input type="text" placeholder=" age" name="age" id="your age" onkeyup="checkAge(this.value)">
                    <span id="phone-error"></span>
                </div>

                <div class="input-group">
                    <label>Phone No.</label>
                    <input type="tel" placeholder="123 456 78901" name="phonenum" id="contact-phone" onkeyup="validatephone()">
                    <span id="phone-error"></span>
                </div>
                <div class="input-group">
                    <label>Email Address</label>
                    <input type="email" placeholder="Enter Email" name="mail" id="contact-email" onkeyup="validateEmail()">
                    <span id="email-error"></span>
                </div>
                <!--<onclick> <button><a href="home.html">signup</a></button></onclick>-->
                <input type="submit" name="submit" value="Sign Up">
                <span id="subit-error"></span>
            </form>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="regjjest.js"></script>
       
    </body>
</html>