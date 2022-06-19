<?php
include 'db.php';
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$uname = $_POST['uname'];
$email = $_POST['email'];
$bdate = $_POST['bdate'];
$pWord = $_POST['pWord'];
$cv = "";

if(isset($_FILES['cv'])){
    $errors= array();
    $file_name = $_FILES['cv']['name'];
    $file_size =$_FILES['cv']['size'];
    $file_tmp =$_FILES['cv']['tmp_name'];
    $file_type=$_FILES['cv']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['cv']['name'])));
    
    $extensions= array("jpeg","jpg","png","docx","pdf","epub");
    
    if(in_array($file_ext,$extensions)=== false){
       $errors[]="file formart is not allowed.";
    }
     
    if(empty($errors)==true){
       move_uploaded_file($file_tmp,"uploads/".$file_name);
       $cv = "uploads/".$file_name;
    }else{
       // not uploaded
    }
 }
$s_query = "INSERT INTO `user`(`id`,`fname`,`mname`,`lname`,`uname`,`email`,`bdate`,`pWord`,`cv`) VALUES(null,'".$fname."', '".$mname."', '".$lname."', '".$uname."','".$email."', '".$bdate."', '".$pWord."', '".$cv."')";
$con->query($s_query);

$id_data = $con->query("select * from user where uname = '".$uname."' and pWord='".$pWord."'")->fetch_assoc();
$id = $id_data['id'];
$_SESSION['id'] = $id;
?>

<html>
    <body>
        <script>
            document.body.onload = ()=>{
                window.location.href = "alumni.php";
            }
        </script>
    </body>
</html>