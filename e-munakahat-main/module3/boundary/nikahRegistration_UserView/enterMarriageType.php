<!DOCTYPE html>
<html>
<header>
    <?php include 'general_Interface.php';?>
    <link rel="stylesheet" href="stylesheet/getMarriageTypeStyle.css">
</header>
<body>
    <!--Actual Content-->
    <div class="smallBanner"><h1>Marriage Registration</h1></div>
    <div class="content">            
        <div class="getMarriageType">
            <div class="icPasangan"><label><strong>Nom. IC Pasangan</strong></label><p>placeholder</p></div>
            <div class="jenisKahwin"><label><strong>Jenis Perkahwinan</strong></label><form action="applicantInfoForm.php" method="post"><select name="marriageType" required><option value="">Jenis Perkahwinan</option> <option value="legal">Perkahwinan Dengan Kebenaran</option> <option value="voluntary">Perkahwinan Sukarela</option></select></div>
        </div>
        <hr style="width: 700px;">
        <div class="boxButtons"><button type="reset" class="back" onclick="location='viewRegistrationStatus.php'">Kembali</button> <button class="btn" type="submit">Seterusnya</button></form></div>
        <div class="reminder">
            <p>Sekiranya perkahwinan yang ingin didaftarkan <strong class="belumHantar">BELUM</strong> melalui proses Permohonan Kebenaran Nikah klik butang di bawah untuk memohon ATAU kunjungi mana-mana Pejabat Agama Islam Daerah di Negeri Pahang, sila mohon Pengesahan Nikah terlebih dahulu.</p>
            <button onclick="">Mohon Perkahwinan</button>
        </div>    
    <div>

</body>
</html>


