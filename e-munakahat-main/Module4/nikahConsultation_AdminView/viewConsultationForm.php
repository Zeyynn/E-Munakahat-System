<!DOCTYPE html>
<html>
<header>
    <link rel="stylesheet" href="/nikahConsultation_UserView/generalStyle.css">
    <link rel="stylesheet" href="viewConsultationForm.css">
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

    <div class="content">
        <div class="smallBanner"><h1>Urus Aduan / Khidmat Nasihat</h1></div>
        <div class="reason">
        <label class="aduan">Tujuan Aduan :</label><br>
        <select name="aduan" id="aduan" class="aduann">
        <option value="pilih">Sila Pilih</option>
        <option value="kewangan">Pertikaian Kewangan</option>
        <option value="cerai">Mengelakkan perceraian</option>
        <option value="sihat">Cara yang Sihat untuk Menamatkan Hubungan</option>
        <option value="intim">Membina Keintiman</option>
        </select>
        </div>
        <div class="smallBanner1"><h1>Maklumat Pengadu</h1></div>
        
        <div class= "pengadu">
            <label>No IC Pengadu :</label>
            <input class="noICadu" type="text" name="IC" placeholder="IC Pengadu">
            <label class="namaaduu">Nama Pengadu : </label>
            <input class="nameAdu" type="text" name="name" placeholder="nama Pengadu"><br><br>
            <label>Tarikh Lahir</label>
            <input class="bDate" type="date" name="bdate">
            <label class="warga">Warganegara</label>
            <select class="warganegara">
                <option value="malay">Melayu</option>
                <option value="cina">Cina</option>
                <option value="india">India</option>
                <option value="lain">Lain lain</option>
            </select><br><br>
            <label>Alamat</label>
            <input class="alamat" type="text" name="alamat" placeholder="Alamat Pengadu"><br><br>
            <label>No Tel</label>
            <input class="notel" type="text" name="notel" placeholder="No Tel Pengadu"><br><br>
            <label>Pekerjaan Sektor</label>
            <select class="sektor">
                <option value="pertanian">Pertanian</option>
                <option value="pembuatan">Pembuatan</option>
                <option value="kewangan">Kewangan</option>
                <option value="kesihatan">Kesihatan</option>
                <option value="pendidikan">Pendidikan</option>
            </select><br><br>
            <label>Jawatan</label>
            <input class="jawatan" type="text" name="jawatan">
            <label class="salary">Gaji</label>
            <input class="gaji" type="text" name="gaji"><br><br>
            <label>Tahap Pembelajaran</label>
            <select class="tahap">
                <option value="diploma">Diploma</option>
                <option value="ijazah">Ijazah Sarjana</option>
                <option value="sarjana">Ijazah Sarjana Muda</option>
                <option value="doktor">Ijazah Kedoktoran</option>
                <option value="voka">Vokasional</option>
            </select><br><br>
            <label>Tarikh Perkahwinan</label>
            <input class="kdate" type="date" name="kdate">

        </div>

        <div class="smallBanner2"><h1>Maklumat Pasangan</h1></div>
        <div class="pasangan">
            <label>No IC Pasangan</label>
            <input class="icpasangan" type="text" name="icpasangan" placeholder="IC Pasangan">
            <label class="namapas">Nama Pasangan</label>
            <input class="namapasangan" type="text" name="namapasangan" placeholder="Nama Pasangan">
        </div>
        <div class="smallBanner3"><h1>Maklumat Aduan</h1></div>
        <div class="info">
            <label>Info Aduan</label>
            <input class="infoaduan" type="text" name="infoaduan" placeholder="Info Aduan">
        </div>
        <div class="nav2">
            <button class="back" type="submit">Kembali</button>
            <button class="hantar" type="submit">Hantar</button>
        </div>
    </div>