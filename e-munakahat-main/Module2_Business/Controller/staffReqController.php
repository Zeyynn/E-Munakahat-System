<?php
include 'index.php';
?>

<!-- add course -->
<?php
if (isset($_POST['submit'])) {
    $course_id = $_POST['course_id'];
    $course_location = $_POST['course_location'];
    $course_date = $_POST['course_date'];
    $course_proof_of_payment = $_POST['course_proof_of_payment'];

    $sql = "insert into `marriage_course` (course_id,course_location,course_date,course_proof_of_payment)
    values('$course_id','$course_location','$course_date','$course_proof_of_payment')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "Data inserted successfully";
        header('location:marriageCourseDisplay.php');
    } else {
        die(mysqli_error($con));
    }
}
?>



<!-- delete course -->
<?php
if (isset($_GET['deleteCourseCode'])) {
    $course = $_GET['deleteCourseCode'];

    $sql = "delete from `marriage_course` where course_id='$courseCode'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // echo "Delete Successfull";
        header('location:marriageCourseDisplay.php');
    } else {
        die(mysqli_error($conn));
    }
}
?>