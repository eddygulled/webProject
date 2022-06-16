<?php include 'header.php' ?>
        <header>
            <div class="container">
                <div class="text-container">
                    <h1 class="h1-large">Create Account</h1>
                    
                </div>
            </div>
        </header>

        
        
        <div class="block3">
            <div class="container grid">
                <div class="text-container">
                    <h2>Register</h2>
                    <p class="p-large">The account that you are going to create will be used to access different parts of this website i.e, Alumni and Staff details</p>
                </div>
                <div class="image-container">
                    <img src="images/img_1.jpg" alt="alternative" class="rounded">
                </div>
            </div>
        </div>


         <!-- block5 -->
         <div id="block5" class="block5 bg-gray">
            <div class="container">
                <h2>Registration Form</h2>
                <p class="p-heading">Please provide all required Information to successfully create your account </p>

                <!-- block5 Form -->
                <form id = "form" action="register.php" method="post">
                    <div class="form-group text-center">
                        <span class="text-danger" id="err"></span>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control-input" placeholder="First Name" id = "fname" name = "fname">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control-input" placeholder="Middle Name" id = "mname" name = "mname">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control-input" placeholder="Last Name" id = "lname" name = "lname">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control-input" placeholder="Email" id = "email"name = "email" >
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control-input" placeholder="User Name" id = "uname" name = "uname">
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control-input" placeholder="Birthday" id = "bdate" name = "bdate">
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control-input" placeholder="CV" id = "cv" name = "cv">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control-input" placeholder="password" id = "pwrd" name = "pWord">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control-input" placeholder="Confirm Password" id = "cpwrd" >
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" id = "form_sub" class="form-control-submit-button" value="Register">
                    </div>
                </form>
                <!-- end of block5 form -->

            </div> <!-- end of container -->
        </div> <!-- end of block5 -->
        
        <?php include 'footer.php' ?>