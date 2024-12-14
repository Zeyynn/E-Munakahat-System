<?php
    include '../../../indexs.php';

    session_start(); 
    $applicantID = $_SESSION['applicantID'];
    $spouseID = $_SESSION['spouseID'];

    $nikahDate = $_POST["nikahDate"];
    $nikahLocation = $_POST["nikahLocation"];
    $masKahwin = $_POST["masKahwin"];
    $nikahType = $_POST["nikahJenis"];

    $waliName = $_POST["waliName"];
    $waliAddrs = $_POST["waliAddrs"];
    $waliDOB = $_POST["waliDOB"];
    $waliAge = $_POST["waliAge"];
    $waliRelation = $_POST["waliRelation"];
    $wali_ID = $_POST["waliID"];

    $witnessName = $_POST["namaSaksi1"];
    $witnessAge = $_POST["telefonSaksi1"];
    $witnessAddrs = $_POST["alamatSaksi1"];
    $witnessID = $_POST["icSaksi1"];

    $coupleID = rand(0, 5000);

    if (!$conn) {
        die('Could not connect: ' . mysqli_connect_error());
    }
    else {
        $query = "insert into nikahdetails values('$coupleID', '$nikahDate', '$nikahLocation', '$masKahwin', '$nikahType', '$waliName', '$waliAddrs', '$waliDOB', '$waliAge', '$waliRelation', '$wali_ID', '$witnessName', '$witnessAge', '$witnessAddrs', '$witnessID', '$applicantID', '$spouseID')";
        mysqli_query($conn, $query);

        echo "<script>alert ('Success!');</script>";
    }
?>
<script>
    window.location.replace("/e_munakahat/module3/boundary/nikahRegistration_UserView/viewRegistrationStatus.php");
</script>