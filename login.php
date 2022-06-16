<?php include 'header.php' ?>

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


        <?php include 'footer.php' ?>
