<?php
include '..\..\indexs.php';
?>

<!DOCTYPE html>
<html>

<header>
<?php
include '..\..\indexs.php';
include 'general_Interface.php';
?>
</header>

<body>

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