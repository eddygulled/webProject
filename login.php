

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
     
        <meta name="description" content="Our school">
        <meta name="author" content="GUlay, Edgar Edward">

        <title>St. Mary's</title>
        
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
        <link href="css/fontawesome-all.min.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        
        <link rel="icon" href="images/logo.jpg">
    </head>
    <body>
    
        <div class="navbar">
            <div class="container flex">
                <nav>
                    <ul >
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="staff.html">staff</a></li>
                        <li><a href="login.php">login</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        
       
         <!-- block5 -->
         <div id="block5" class="block5 bg-gray">
            <div class="container">
                <h2>Login</h2>
                <p class="p-heading">Please provide all required Information to access alumni </p>

                <!-- block5 Form -->
                <form id = "form"  method="post" action="auth.php">
                  
                    <div class="form-group">
                        <input type="text" class="form-control-input" placeholder="User Name" id = "uname" name = "uname">
                    </div>
                   
                    <div class="form-group">
                        <input type="password" class="form-control-input" placeholder="password" id = "pwrd" name = "pWord">
                    </div>
                   
                    
                    <div class="form-group">
                        <input type="submit" id = "form_sub" class="form-control-submit-button" value="login">
                    </div>
                </form>
                <!-- end of block5 form -->

            </div> <!-- end of container -->
        </div> <!-- end of block5 -->
        
       
        <!-- Footer -->
        <footer>
            <div class="container grid grid-3">
                <div>
                    <a class="logo-image" href="index.html"><img src="images/logo.jpg" alt="alternative" class="rounded"></a> 
                </div>
                <div>
                    <ul class="li-space-lg">
                        <li><a href="about.html">About</a></li>
                        <li><a href="staff.html">Staff</a></li>
                        <li><a href="register.html">Register</a></li>
                    </ul>
                </div>
                <div>
                    <a href="https://web.facebook.com/StMarys-Secondary-School-Mbezi-BEACH-112852430561223/"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div> 
        </footer>


        
        <a id="myBtn" href="#" data-scroll>
            <img src="images/up-arrow.png" alt="alternative">
        </a>
        <!-- end of back to top button -->
            
        <!-- Scripts -->
        <script src="js/smooth-scroll.polyfills.min.js"></script> <!-- Smooth Scroll -->
        <script src="js/scripts.js"></script> <!-- Custom scripts -->
    </body>
</html>