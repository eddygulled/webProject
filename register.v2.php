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
                <form id = "form" action="register.php" method="post" enctype = "multipart/form-data">
                    <div class="form-group text-center">
                        <span class="text-danger" id="err"></span>
                    </div>
                    <div class="form-group">
                        <input required type="text" class="form-control-input" placeholder="First Name" id = "fname" name = "fname">
                    </div>
                    <div class="form-group">
                        <input required type="text" class="form-control-input" placeholder="Middle Name" id = "mname" name = "mname">
                    </div>
                    <div class="form-group">
                        <input required type="text" class="form-control-input" placeholder="Last Name" id = "lname" name = "lname">
                    </div>
                    <div class="form-group">
                        <input required type="email" class="form-control-input" placeholder="Email" id = "email"name = "email" >
                    </div>
                    <div class="form-group">
                        <input required type="text" class="form-control-input" placeholder="User Name" id = "uname" name = "uname">
                    </div>
                    <div class="form-group">
                        <input required type="date" class="form-control-input" placeholder="Birthday" id = "bdate" name = "bdate">
                    </div>
                    <div class="form-group">
                        <input required type="file" class="form-control-input" placeholder="CV" id = "cv" name = "cv">
                    </div>
                    <div class="form-group">
                        <input required type="password" class="form-control-input" placeholder="password" id = "pwrd" name = "pWord"><br>
                        <span class="text-danger" id="err1"></span>
                    </div>
                    <div class="form-group">
                        <input required type="password" class="form-control-input" placeholder="Confirm Password" id = "cpwrd" ><br>
                        <span class="text-danger" id="err2"></span>
                    </div>
                    
                    <div class="form-group">
                        <input type="button" id = "form_sub" class="form-control-submit-button" value="Register">
                    </div>
                </form>
                <!-- end of block5 form -->
                <script>
                    var pwrd = document.getElementById("pwrd");
                    var cpwrd = document.getElementById("cpwrd");
                    var err = document.getElementById("err1");
                    var err1 = document.getElementById("err2");
                    var bt = document.getElementById("form_sub");
                    bt.onclick = function(){
                        if(document.getElementById("email").value.indexOf("@") == -1){alert("Invalid email address")}
                        else{
                        // validate password
                        if(pwrd.value == cpwrd.value){
                        
                            //check markup
                            var regEx =/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
                            if (regEx.test(pwrd.value)) {
                                bt.type = "submit";
                            } else {
                                err.innerHTML = "Password Must contain Capital letter and special character!";
                            }
                        }else{
                            err1.innerHTML = "Password mismatch!";
                        }
                    }
                    }
                </script>
            </div> <!-- end of container -->
        </div> <!-- end of block5 -->
        
        <?php include 'footer.php' ?>