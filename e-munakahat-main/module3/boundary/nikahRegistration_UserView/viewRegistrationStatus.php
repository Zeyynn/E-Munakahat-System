<!DOCTYPE html>
<html>
<header>
    <?php include 'general_Interface.php';?>
</header>
<body>
    <!--Actual Content-->
    <div class="smallBanner"><h1>Marriage Registration</h1></div>
    <div class="content">            
        <div class="getCoupleID">
            <form method="post"><input type="text" placeholder="IC Pasangan"><input type="submit" value="Cari"></form>
            <button class="btn" onclick="location = 'enterMarriageType.php'">Pendaftaran Baru</button>
        </div>
        <hr style="width: 700px;">
        <div class="listBox">
        <table class="userList">
            <tr>
                <th>No.</th>
                <th>ID / Name</th>
                <th>No. Pendaftaran</th>
                <th>Tarikh</th>
                <th>Status</th>
                <th>Operasi</th>
            </tr>
        <?php
        include '../../../indexs.php';
        $query = "select * from marriageRegistrationDetails";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php?></td>
            <td><?php echo $row["applicantID"];?></td>
            <td><?php echo $row["requestNum"];?></td>
            <td><?php echo $row["requestDate"];?></td>
            <td><?php echo $row["requestStatus"];?></td>
            <td class="operation">
                <a href="" class="functionIcon"><i class="fa fa-pencil fa-1x"></i></a>
                <a href="" class="functionIcon"><i class="fa fa-trash fa-1x"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
    </table>
    </div>
    <div class="attention">
        <br>
        <h1>ATTENTION!</h1>
        <p>Jika pendaftaran perkahwinan anda <strong class="belumHantar">BELUM DIHANTAR</strong>. Sila tekan butang <i class="fa fa-check fa-2x"></i> untuk menghantar pendaftaran anda.</p> 
    </div>
    </div>
</body>
</html>