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
                        <li><a href="">Stuff</a></li>
                        <li><a href="">Stuff</a></li>
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

    <?php
    include 'C:\xampp\htdocs\e-munakahat\index.php';
    ?>

    <div class="content">
        <div class="container">

            <div class="card mb-5">
                <div class="card-body">
                    Senarai Pemohon
                </div>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No. IC Pemohon</th>
                        <th scope="col">Nama Pemohon</th>
                        <th scope="col">Organisasi</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Tarikh</th>
                        <th scope="col">Operasi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $sql = "Select * from `nikahcourse`";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $applicantID = $row['applicantID'];
                            $applicantName = $row['applicantName'];
                            $spouseID = $row['spouseID'];
                            $spouseName = $row['spouseName'];
                            // $course_proof_of_payment = $row['course_proof_of_payment'];

                            echo ' <tr>
                        <th scope="row">' . $applicantID . '</th>
                        <td>' . $applicantName . '</td>
                        <td>' . $spouseID . '</td>
                        <td>' . $spouseName . '</td>
                        <td>' . $courseCapacity . '/50</td>
                        <td>
                            <button class="btn btn-primary"><a href="preMarriagerRegistration.php?" class="text-light">Daftar</a></button>
                        </td>
                        <td>
                            <button class="btn btn-primary"><a href="editCourseInformation.php? editCourseId=' . $applicantID . '" class="text-light">Terima</a></button>
                            <button class="btn btn-danger"><a href="deleteCourseInformationController.php? deleteCourseId=' . $applicantID . '" class="text-light">Tolak</a></button>
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