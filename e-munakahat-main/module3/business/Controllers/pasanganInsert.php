<?php
    include '../../../indexs.php';

    session_start(); 
    $applicantID = $_SESSION['applicantID'];

    $spouseID = $_POST["spouseIC"];
    $_SESSION['spouseID'] = $spouseID;

    $spouseName = $_POST["spouseFullName"];
    $spouseDOB = $_POST["spouseDOB"];
    $spouseRace = $_POST["spouseBangsa"];
    $spouseCitizenship = $_POST["spouseCitizenship"];
    $spouseEducation = $_POST["spouseEducation"];
    $spouseJob = $_POST["spouseJobName"];
    $spouseAddrs = $_POST["spouseAddress"];
    $spousePhnNum = $_POST["spousePhnNum"];
    $spouseMaritalStatus = $_POST["spouseMarriageStatus"];

    $requestDate = date("d-m-y");
    $requestNum = rand(0, 5000);
    $requestStatus = "Belum Hantar";

    if (!$conn) {
        die('Could not connect: ' . mysqli_connect_error());
    }
    else {
        $query = "update applicant set spouseID='$spouseID', spouseName='$spouseName', spouseDOB='$spouseDOB', spouseRace='$spouseRace', spouseCitizenship='$spouseCitizenship', spouseEducation='$spouseEducation', spouseJob='$spouseJob', spouseAddrs='$spouseAddrs', spousePhnNum='$spousePhnNum', spouseMaritalStatus='$spouseMaritalStatus' where applicantID='$applicantID'";
        mysqli_query($conn, $query);
        $query = "insert into marriageRegistrationDetails values ('$applicantID', '$spouseID', '$requestDate', '$requestNum', '$requestStatus')";
        mysqli_query($conn, $query);

        echo "<script>alert ('Success!');</script>";
    }
?>
<script>
    window.location.replace("/e_munakahat/module3/boundary/nikahRegistration_UserView/nikahInfoForm.php");
</script>