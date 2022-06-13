<?php
include 'db.php';
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$uname = $_POST['uname'];
$email = $_POST['email'];
$bdate = $_POST['bdate'];
$pWord = $_POST['pWord'];


$s_query = "INSERT INTO `user`(`id`,`fname`,`mname`,`lname`,`uname`,`email`,`bdate`,`pWord`,`uState`) VALUES(null,'".$fname."', '".$mname."', '".$lname."', '".$uname."','".$email."', '".$bdate."', '".$pWord."', 'student')";
$con->query($s_query);

?>

<html>
    <body>
        <script>
            document.body.onload = ()=>{
                window.location.href = "alumni.php?user=<?php echo $uname ?>";
            }
        </script>
    </body>
</html>