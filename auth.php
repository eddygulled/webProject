<?php
   include 'db.php';

    $user = $_POST['uname'];
    $pass = $_POST['pWord'];
    $res = $con->query("select * from user where uname='".$user."' and pWord='".$pass."'");
   
    if($res->num_rows > 0){
        $resp = $res->fetch_assoc();
        $user_id = $resp['id'];
        $url = "alumni.php?id=".$user_id."";
        echo "<script>window.location.href = '".$url."'</script>";
    }else{
        $url = "login.php";
        echo "<script>window.location.href = '".$url."'</script>";
    }
?>