<!DOCTYPE html>
<html>
<head>   
    <title>Car Zone Homepage</title>
    <meta charset="UTF-8">  
    <link rel="stylesheet" href="stylesheet1.css" />
<style>

    div.center{
        text-align: center;
    }

</style>
</head> 
<body>
    <div class="topnav">
        <a href= "homepage.html">Home</a>
        <a href="contactus.html">Contact Us</a>
        <a href="scheduleappointment.html">Schedule Appointment</a>
        <a href="About.html">About</a>
        <a href="Warehouse.html">Warehouse</a>
    </div>

    <div class="homepagebox">
        <H2> Car Zone</H2>
    </div>  

    <div class= "hero">
        <div class= "form-box">
            <div class="button-box">
                <div id="btn"></div>
                    <button type="button" class=" toggle-btn">Log In</button>
                    <a href="register.html"><button class=" toggle-btn">Register</button></a>
            </div>
            <div class= "social-icons" >
                <a href= "https://www.facebook.com"><img src= "static/fbimage.jpeg"></a>
                <a href="https://www.google.com"><img src= "static/google image.png"></a>
                <a href="https://www.twitter.com"><img src= "static/twitterimage.png"></a>
            </div>
            <form  action="board.php" method="POST" class= "input-group">
                <input type= "text"  class="input-field" name="username" placeholder="Username" id = "uname" required>
                <input type= "text"  class="input-field" name="password" placeholder="Password" id="password_id" required>
                <button type="submit" class=" submit-btn" name="login">Login</button>   
            </form>
        </div>
    </div>  

    <div class="center">
        <video width= "700" height="500" controls autoplay loop>
            <source src="static/WDMVideo.wmp4" type="video/mp4"><!--change the wmp4 to mp4 for video -->
            Your Browser does not support the Video Tag.
        </video> 
    </div>  

    <script>
        function uname_validate()
            {
                console.log("uame_validate")
                var uname = document.getElementById("uname");
                const uname_value= uname.value.trim();
                var uname_regx= /^[a-zA-Z]{2,10}$/;
                if(uname_regx.test(uname_value))
                    {
                        console.log("matched uname");
                    }
                else
                    {
                        alert("Incorrect foramt for first name ");
                    }
            }

       // var uname = document.getElementById("uname");
        //uname.addEventListener("mouseup",e=>{
        //uname_validate();   
        //});

        function password_validate()
            {
                console.log("password_validate")
                var passwordid = document.getElementById("password_id");
                const password_id_value= passwordid.value.trim();
                var password_id_regx= /^[A-Z]+([A-Za-z0-9\._\-\!\#\$\%\&\'\*\+\/\=\?\^\`\{\}\|\~]){8,32}$/;
                if(password_id_regx.test(password_id_value))
                    {
                        console.log("matched password");
                    }
                else
                    {
                        alert("Incorrect password format");
                    }
            }

            //var password = document.getElementById("password_id");
            //password.addEventListener("mouseup",e=>{
            //password_validate();
            //});

    </script>



    

    
</body>      
</html>     