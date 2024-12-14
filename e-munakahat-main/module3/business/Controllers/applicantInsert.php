<?php
    include '../../../indexs.php';

    $applicantID = $_POST["applicantIC"];
    $applicantName = $_POST["applicantFullName"];
    $applicantDOB = $_POST["applicantDOB"];
    $applicantRace = $_POST["applicantBangsa"];
    $applicantCitizenship = $_POST["applicantCitizenship"];
    $applicantEducation = $_POST["applicantEducation"];
    $applicantJob = $_POST["applicantJobName"];
    $applicantAddrs = $_POST["applicantAddress"];
    $applicantPhnNum = $_POST["applicantPhnNum"];
    $applicantMaritalStatus = $_POST["applicantMarriageStatus"];

    session_start();
    $_SESSION['applicantID'] = $applicantID;

    if (!$conn) {
        die('Could not connect: ' . mysqli_connect_error());
    }
    else {
        $query = "insert into applicant values ('$applicantID', '$applicantName', '$applicantDOB', '$applicantRace', '$applicantCitizenship', '$applicantEducation', '$applicantJob', '$applicantAddrs', '$applicantPhnNum', '$applicantMaritalStatus','','','','','','','','','','')";
        mysqli_query($conn, $query);

        echo "<script>alert ('Success!');</script>";
    }
?>
<script>
    window.location.replace("/e_munakahat/module3/boundary/nikahRegistration_UserView/pasanganInfoForm.php");
</script>