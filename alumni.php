<?php 
include 'db.php';

$id = $_GET['id'];
$user_data = $con->query("SELECT * FROM user WHERE id='".$id."'");
if($user_data->num_rows < 1){
    echo "<script>window.location.href = 'register.html'</script>";
}
$user = $user_data->fetch_assoc();
echo "name: ". $user['fname'];

?>