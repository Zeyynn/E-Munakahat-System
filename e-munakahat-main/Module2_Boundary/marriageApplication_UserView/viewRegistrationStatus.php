<!DOCTYPE html>
<html>
<header>
    <?php include 'general_Interface.php';?>
</header>
<body>
    <!--Actual Content-->
    <div class="smallBanner"><h1>Mohon Kebenaran Kahwin</h1></div>
    <div class="content">            
        <div class="getCoupleID">
            <form method="post"><input type="text" placeholder="IC Pasangan"><input type="submit" value="Cari"></form>
            <button class="btn" onclick="location = 'enterMarriageType.php'">Pendaftaran Baru</button>
        </div>
        <hr style="width: 700px;">
    <div>
    <div class="requestsList">
        <!--List Goes Here-->
        <?php
        
        ?>
    </div>
    <div class="attention">
        <h1>ATTENTION!</h1>
        <p>Jika pendaftaran perkahwinan anda <strong class="belumHantar">BELUM DIHANTAR</strong>. Sila tekan butang <i class="fa fa-check fa-2x"></i> untuk menghantar pendaftaran anda.</p> 
    </div>

</body>
</html>