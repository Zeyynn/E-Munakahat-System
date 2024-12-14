<!DOCTYPE html>
<html>
<header>
    <link rel="stylesheet" href="generalStyle.css">
    <link rel="stylesheet" href="viewConsultationStatus.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</header>
<body>
    <div class="banner">
        <img class="symbol" src="/assets/pahangSymbol.png">
        <img class="logo" src="/assets/JomKahwin Logo.png">
    </div>
    <div class="sidebar">
        <div class="sidebarMenu">
            <hr>
            <p class="smallTitle">Sistem Maklumat Perkahwinan Islam Pahang</p>

            <div class="quickView">
                <table class="topTitle"><tr><th class="title">No. IC</th><th>placeholder</th></tr></table> 

                <table class="bottomTitle"><tr><th class="title">No. Telefon</th><th>placeholder</th></tr></table>
            </div>

            <table>
                <tr><th><a href="">Profile</a></th></tr>
            </table>
            <table>
                <tr><th><a href="">Permohonan Perkahwinan</a></th></tr>
                <td>
                    <ul>
                        <li><a href="">Stuff</a></li>
                        <li><a href="">Stuff</a></li>
                    </ul>
                </td>
            </table>

            <table>
                <tr><th><a href="">Marriage Registration</a></th></tr>
                <td>
                    <ul>
                        <li><a href="">Stuff</a></li>
                        <li><a href="">Stuff</a></li>
                        <li><a href="">Stuff</a></li>
                    </ul>
                </td>
            </table>

            <table>
                <tr><th><a href="">Permohonan Ruju'</a></th></tr>
            </table>

            <table>
                <tr><th><a href="">Aduan / Khidmat Nasihat</a></th></tr>
                <td>
                    <ul>
                        <li><a href="">Maklumat Khidmat Nasihat</a></li>
                    </ul>
                </td>
            </table>

            <table>
                <tr><th><a href="">Salinan Dokumen</a></th></tr>
            </table>

            <table>
                <tr><th><a href="">Muat Naik Dokumen</a></th></tr>
            </table>

            <table>
                <tr><th><a href="">Log Keluar</a></th></tr>
            </table>
        </div>
    </div>

    <!--Actual Content-->


    <div class="content">
        <div class="smallBanner"><h1>Urus Aduan / Khidmat Nasihat</h1></div>
        <div class="container">
<label class="noIC">No IC Pengadu :</label><br>
<div class="IDsec">
    
<input class="enterID" type="text" name="ID" placeholder="IC Pengadu">
<form action="file2.php" method="post">
    <button class= "semak" type="submit">Semak</button>
</form>

<hr>
</div>
</div>
        <div>
           <table class="List" border=1px align="center">
           <tr>
            <div class="header">
            <th>
                No.
            </th>
            <th>
                No IC Pengadu / Nama
            </th>
            <th>
                No IC Pasangan / Nama
            </th>
            <th>
                Tarikh
            </th>
            <th>
                Status
            </th>
            <th>
                Tindakan
            </th>
            </div>
           </tr> 
           <tr>
            <td>
                1.
            </td>
            <td>990803105573<br>
                MOHAMED YUNOS BIN MAN
            </td>
            <td>
                890808111234<br>
                SERAH BINTI ALI
            </td>
            <td>
                01/01/2023
            </td>
            <td>
                <a href="">Hantar</a>
            </td>
            <td>
                <a href="">Buang</a><br>
            </td>
           </tr>
           </table>
           <button class= "add" type="submit">Minta Sesi Khidmat Nasihat</button>
           <div class="catatan"><br>
            <p>Catatan : </p><br>
            </div>
            <div class="aduan">
            <p>Jika Ingin Melihat Sesi Khidmat Nasihat Berlangsung, Klik Butang di Bawah</p>
            </div>
           <div>
           <button class= "ongoing" type="submit">Lihat Sesi Khidmat Langsung</button>
           </div>
        </div>
        
    

</body>
</html>