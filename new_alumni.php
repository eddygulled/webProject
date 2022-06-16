<?php
include 'db.php';

$name = $_POST['name'];
$year_of_enrolment = $_POST['year_of_enrolment'];
$year_of_graduation = $_POST['year_of_graduation'];
$headmaster_at_enrolment = $_POST['headmaster_at_enrolment'];
$headmaster_at_graduation = $_POST['headmaster_at_graduation'];
$famous_teacher_graduation = $_POST['famous_teacher_graduation'];
$results = $_POST['results'];
$current_occupation = $_POST['occupation'];
$address = $_POST['curr_address'];
$email = $_POST['email'];
$mobile_number = $_POST['mobile_number'];


$s_query = "INSERT INTO `alumnus`(`id`,`name`,`year_of_enrolment`,`year_of_graduation`,`headmaster_at_enrolment`,`headmaster_at_graduation`,`famous_teacher_graduation`,`results`,`current_occupation`,`address`,`email`,`mobile_number`)VALUES(null,'".$name."','".$year_of_enrolment."','".$year_of_graduation."','".$headmaster_at_enrolment."','".$headmaster_at_graduation."','".$famous_teacher_graduation."','".$results."','".$current_occupation."','".$address."','".$email."','".$mobile_number."')";
$con->query($s_query);

?>

<html>

<body>
    <script>
        document.body.onload = () => {
            window.location.href = "alumni.php";
        }
    </script>
</body>

</html>