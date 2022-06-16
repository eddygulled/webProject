 
 <footer>
            <div class="container grid grid-3">
                <div>
                    <a class="logo-image" href="index.html"><img src="images/logo.jpg" alt="alternative" class="rounded"></a> 
                </div>
                <div>
                    <ul class="li-space-lg">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="staff.php">Staff</a></li>
                        <li><a href="contacts.php">contacts</a></li>
                        <li><a href="register.v2.php">Register</a></li>
                        <?php if(empty($_SESSION['id'])){?>
                        <li><a href="login.php">Login</a></li>
                        <?php }else{ ?>
                            <li><a href="alumni.php">Alumni</a></li>
                            <li><a href="logout.php">logout</a></li>
                        <?php } ?>
                    </ul>
                </div>
                <div>
                    <a href="https://web.facebook.com/StMarys-Secondary-School-Mbezi-BEACH-112852430561223/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://web.facebook.com/StMarys-Secondary-School-Mbezi-BEACH-112852430561223/"><i class="fab fa-twitter"></i></a>
                    <a href="https://web.facebook.com/StMarys-Secondary-School-Mbezi-BEACH-112852430561223/"><i class="fab fa-instagram"></i></a>
                    <a href="https://web.facebook.com/StMarys-Secondary-School-Mbezi-BEACH-112852430561223/"><i class="fab fa-linkedin"></i></a>

                </div>
            </div> 
        </footer>


        
        <a id="myBtn" href="#" data-scroll>
            <img src="images/up-arrow.png" alt="alternative">
        </a>
       
        <script src="js/smooth-scroll.polyfills.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>