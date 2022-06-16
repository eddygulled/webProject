<?php session_start(); session_unset(); $_SESSION['id'];  ?>

<html>
    <body>
        
    </body>
    <script>
    document.body.onload = ()=>{
        window.location.href = "login.php";
    }
</script>
</html>
