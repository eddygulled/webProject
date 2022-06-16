<?php 
include 'db.php';
$id = $_SESSION['id'];
if( empty( $_SESSION['id'] )){
    echo "<script>window.location.href = 'login.php' </script>";
}
$user_data = $con->query("SELECT * FROM user WHERE id='".$id."'");
$user = $user_data->fetch_assoc();

?>

<?php include 'header.php'; ?>

    <header>
        <div class="container">
            <div class="text-container">
                <h1 class="h1-large">Alumni</h1>
            </div>
        </div>
    </header>

    <div id="block2">
        <div class="container grid">
        <div class="mt-10">
                <img src="images/Avatar-Maker (1).png" alt="alternative" class="rounded alumni">
            </div>
            <div class="mt-10">
                <table>
                    <tr>
                        <td class='profile'>First Name</td>
                        <td class='profile'><?php echo $user['fname'] ?></td>
                    </tr>
                    <tr>
                        <td class='profile'>Second Name</td>
                        <td class='profile'><?php echo $user['mname'] ?></td>
                    </tr>
                    <tr>
                        <td class='profile'>Last Name</td>
                        <td class='profile'><?php echo $user['lname'] ?></td>
                    </tr>
                    <tr>
                        <td class='profile'>Email</td>
                        <td class='profile'><?php echo $user['email'] ?></td>
                    </tr>
                    <tr>
                        <td class='profile'>Birthdate</td>
                        <td class='profile'><?php echo $user['bdate'] ?></td>
                    </tr>
                </table>

            </div>

            
        
        </div>
    </div>

    <div class="block3">
            <div class="">
                <div class="text-container">
                    <h2>PREVIOUS AlUMNI</h2>
                    <p class="p-large">Simple token of gratitude displaying our finest alumni in previous years.</p>
                    
                    <table>
                        <tr class="al_row">
                            <th class="al_head">name</th>
                            <th class="al_head">year of enrolment</th>
                            <th class="al_head">year of graduation</th>
                            <th class="al_head">headmaster at enrolment</th>
                            <th class="al_head">headmaster at graduation</th>
                            <th class="al_head">famous teacher graduation</th>
                            <th class="al_head">results</th>
                            <th class="al_head">current occupation</th>
                            <th class="al_head">address</th>
                            <th class="al_head">email</th>
                            <th class="al_head">mobile number</th>

                        </tr>
                        <?php
                            $al = $con->query("select * from alumnus");
                            while($row = $al->fetch_assoc()){
                        ?>
                            <tr class="al_row">
                            
                                    <td class="al_data"><?php echo $row['name']; ?></td>
                                    <td class="al_data"><?php echo $row['year_of_enrolment']; ?></td>
                                    <td class="al_data"><?php echo $row['year_of_graduation']; ?></td>
                                    <td class="al_data"><?php echo $row['headmaster_at_enrolment']; ?></td>
                                    <td class="al_data"><?php echo $row['headmaster_at_graduation']; ?></td>
                                    <td class="al_data"><?php echo $row['famous_teacher_graduation']; ?></td>
                                    <td class="al_data"><?php echo $row['results']; ?></td>
                                    <td class="al_data"><?php echo $row['current_occupation']; ?></td>
                                    <td class="al_data"><?php echo $row['address']; ?></td>
                                    <td class="al_data"><?php echo $row['email']; ?></td>
                                    <td class="al_data"><?php echo $row['mobile_number']; ?></td>
                                
                            
                           </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
        
         <!-- block5 -->
         <div id="block5" class="block5 bg-gray">
            <div class="container">
                <h2>Add New Alumni</h2>
                <p class="p-heading">Please provide all required details </p>

                <!-- block5 Form -->
                <form id = "form" action="new_alumni.php" method="post">
                    <div class="form-group text-center">
                        <span class="text-danger" id="err"></span>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control-input" placeholder="Full Name" id = "name" name = "name">
                    </div>
                    <div class="form-group">  
                        <select name = "year_of_enrolment">
                            <option value="">Year Of Enrolment</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                        </select>
                    </div>
                    <div class="form-group">  
                        <select name = "year_of_graduation">
                            <option value="">Year Of Graduation</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control-input" placeholder="Headmaster During Enrolment" id = "het" name = "headmaster_at_enrolment">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control-input" placeholder="Headmaster During Graduation" id = "hdg" name = "headmaster_at_graduation">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control-input" placeholder="Famous Teacher at Graduation" id = "ftdg" name = "famous_teacher_graduation">
                    </div>

                    <div class="form-group">
                        <select name="results" id="results">
                            <option value="">Result Summary</option>
                            <option value="DIV I">DIV I</option>
                            <option value="DIV II">DIV II</option>
                            <option value="DIV III">DIV III</option>
                            <option value="DIV IV">DIV IV</option>
                            <option value="DIV O">DIV O</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control-input" placeholder="Current Occupation" id = "current_occupation" name = "occupation">
                    </div>
                    
                    <div class="form-group">
                        <input type="text" class="form-control-input" placeholder="Current Address" id = "address" name = "curr_address">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control-input" placeholder="Email" id = "email" name = "email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control-input" placeholder="Mobile Number" id = "mobile_number" name = "mobile_number">
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" id = "form_sub" class="form-control-submit-button" value="Add Alumni">
                    </div>
                </form>
                <!-- end of block5 form -->

            </div> 

<?php include 'footer.php'; ?>