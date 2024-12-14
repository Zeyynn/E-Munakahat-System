<?php
include '..\..\index.php';
?>

<!DOCTYPE html>
<html>

<header>
    <link rel="stylesheet" href="stylesheet/applicantStyle.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="assets\font-awesome-4.7.0\font-awesome-4.7.0\css\font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</header>

<body>
    <div class="banner">
        <img class="symbol" src="assets/pahangSymbol.png">
        <img class="logo" src="assets/JomKahwin Logo.png">
    </div>
    <div class="sidebar">
        <div class="sidebarMenu">
            <hr>
            <p class="smallTitle">Sistem Maklumat Perkahwinan Islam Pahang</p>

            <div class="quickView">
                <table class="topTitle">
                    <tr>
                        <th class="title">No. IC</th>
                        <th>placeholder</th>
                    </tr>
                </table>

                <table class="bottomTitle">
                    <tr>
                        <th class="title">No. Telefon</th>
                        <th>placeholder</th>
                    </tr>
                </table>
            </div>

            <table>
                <tr>
                    <th><a href="">Profile</a></th>
                </tr>
            </table>
            <table>
                <tr>
                    <th><a href="">Permohonan Perkahwinan</a></th>
                </tr>
                <td>
                    <ul>
                        <li><a href="">Mohon Perkahwinan</a></li>
                        <li><a href="">Daftar Kursus Pra Perkahwinan</a></li>
                    </ul>
                </td>
            </table>

            <table>
                <tr>
                    <th><a href="viewRegistrationStatus.php">Marriage Registration</a></th>
                </tr>
                <td>
                    <ul>
                        <li><a class="marriageReg">Perkahwinan Dalam Negara</a></li>
                        <li><a class="marriageReg">Perkahwinan Antarabangsa</a></li>
                        <li><a class="marriageReg">Perkahwinan Sukarela</a></li>
                    </ul>
                </td>
            </table>

            <table>
                <tr>
                    <th><a href="">Permohonan Ruju'</a></th>
                </tr>
            </table>

            <table>
                <tr>
                    <th><a href="">Aduan / Khidmat Nasihat</a></th>
                </tr>
                <td>
                    <ul>
                        <li><a href="">Stuff</a></li>
                    </ul>
                </td>
            </table>

            <table>
                <tr>
                    <th><a href="">Salinan Dokumen</a></th>
                </tr>
            </table>

            <table>
                <tr>
                    <th><a href="">Muat Naik Dokumen</a></th>
                </tr>
            </table>

            <table>
                <tr>
                    <th><a href="">Log Keluar</a></th>
                </tr>
            </table>
        </div>
    </div>

    <!--Actual Content-->
    <div class="content">
        <div class="container">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Kod Kursus</th>
                        <th scope="col">Organisasi</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Tarikh</th>
                        <th scope="col">Slot</th>
                        <th scope="col">Daftar</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $sql = "Select * from `nikahcourse`";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $courseCode = $row['courseCode'];
                            $courseOrganizer = $row['courseOrganizer'];
                            $courseVenue = $row['courseVenue'];
                            $courseDate = $row['courseDate'];
                            $courseCapacity = $row['courseCapacity'];
                            // $course_proof_of_payment = $row['course_proof_of_payment'];

                            echo ' <tr>
                        <th scope="row">' . $courseCode . '</th>
                        <td>' . $courseOrganizer . '</td>
                        <td>' . $courseVenue . '</td>
                        <td>' . $courseDate . '</td>
                        <td>' . $courseCapacity . '/50</td>
                        <td>
                            <button class="btn btn-primary"><a href="preMarriagerRegistration.php?" class="text-light">Daftar</a></button>
                        </td>

                        </tr>';
                        }
                    }

                    ?>


                </tbody>
            </table>
        </div>
    </div>

</body>

</html>