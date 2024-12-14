<!DOCTYPE html>
<html>
<header>
    <link rel="stylesheet" href="/nikahConsultation_UserView/generalStyle.css">
    <link rel="stylesheet" href="/nikahManageConsultation_AdminView/viewConsultationOngoingForm.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

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

    <div class="content">
        <div class="smallBanner"><h1>Urus Aduan / Khidmat Nasihat</h1></div>

        <div class="smallBanner1"><h1>Maklumat Pengadu</h1></div>

        <label class="label">Sebab Pertukaran</label><br>
        <select class="tukar">
            <option id="masa">Konflik Penjadualan</option>
            <option id="puas">Tidak Puas Hati dengan Penasihat</option>
        </select><br><br>
        <label class="label">Sila Pilih Penasihat Baru</label><br>
        <select class="penasihat">
        <option id="penasihat1">Nurfarhana Rabiah binti Jantan</option>
        <option id="penasihat2">Asyraf Ehsan bin Rizal Mahmud</option>
    </select>

    <div class="smallBanner1"><h1>Tetap Masa dan Tarikh</h1></div>

    <div class="tarikh">
        <label class="label">Tarikh Baru Khidmat Nasihat</label><br>
        <input class="tarikh2" type="date" name="cdate"><br><br>
        <label class="label">Masa</label><br>
        <input class="time" type="time" id="timeInput" name="timeInput">
    </div>

    <button class= "hantar" type="submit">Tetap dan Hantar</button>
</body>
</html>