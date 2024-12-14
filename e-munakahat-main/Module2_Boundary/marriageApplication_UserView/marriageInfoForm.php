<!DOCTYPE html>
<html>

<header>
    <?php include 'general_Interface.php';?>
    <?php session_start(); $applicantID = $_SESSION['applicantID']; $spouseID = $_SESSION['spouseID'];?>
</header>
<body>
    <!--Actual Content-->
    <div class="smallBanner">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active text-white" onclick="location='husbandInfoForm.php'" id="pills-pemohon-tab" data-bs-toggle="pill" data-bs-target="#pills-pemohon" type="button" role="tab" aria-controls="pemohon" aria-selected="false">Maklumat Pemohon</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link text-white" onclick="location='wifeInfoForm.php'" id="pills-pasangan-tab" data-bs-toggle="pill" data-bs-target="#pills-pasangan" type="button" role="tab" aria-controls="pasangan" aria-selected="false">Maklumat Pasangan</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link text-white" onclick="location='marriageInfoForm.php'" id="pills-nikah-tab" data-bs-toggle="pill" data-bs-target="#pills-nikah" type="button" role="tab" aria-controls="nikah" aria-selected="true">Maklumat Nikah</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link text-white" onclick="location='viewDocumentList.php'" id="pills-dokumen-tab" data-bs-toggle="pill" data-bs-target="#pills-dokumen" type="button" role="tab" aria-controls="dokumen" aria-selected="false">Dokumen</button>
        </li>
    </ul>
    </div>
    <div class="content">          
        <div class="tab-content" id="pills-tabContent">
            <form class="row g-3" method="post" id="nikahForm" action="/e_munakahat/module3/business/Controllers/nikahInsert.php">
            <div class="tab-pane fade show active" id="pills-pemohon" role="tabpanel" aria-labelledby="pills-pemohon-tab">
                <h1>Maklumat Nikah</h1>
                <hr>
                <div>
                    <div class="col-md-3">
                        <label>Akad Nikah Date:</label>
                        <input type="date" name="nikahDate">
                    </div>
                </div>
                <div class="col-2">
                    <label>Akad Nikah Location:</label>
                    <textarea name="nikahLocation" form="nikahForm" cols="50" rows="5">Alamat</textarea> 
                </div>
                <div class="col-md-4">
                    <label>Jenis Mas Kahwin:</label>
                        <select name="masKahwin">
                            <option value="">Jenis Mas Nikah</option>
                            <option value="tunai">Tunai</option>
                            <option value="hutang">Hutang</option>
                        </select>
                </div>
                <br>
                <div class="col-md-4">
                    <label>Mas Kahwin (RM):</label>
                    <input type="text" name="masKahwinValue" placeholder="0.00">
                </div>
                <div class="col-md-5">
                    <label>Hantaran:</label>
                    <input type="text" name="hantaran" placeholder="Hantaran">
                
                    <label>Pemberian Lain:</label>
                    <input type="text" name="pemberianLain" placeholder="Pemberian Lain">
                                                        
                    <label>Negeri:</label>
                    <select name="negeri">
                            <option value="">Negeri</option>
                            <option value="sabah">Sabah</option>
                            <option value="sarawak">Sarawak</option>
                            <option value="johor">Johor</option>
                            <option value="n. sembilan">N. Sembilan</option>
                            <option value="melaka">Melaka</option>
                            <option value="selangor">Selangor</option>
                            <option value="pahang">Pahang</option>
                            <option value="perak">Perak</option>
                            <option value="kelantan">Kelantan</option>
                            <option value="terengganu">Terengganu</option>
                            <option value="kedah">Kedah</option>
                            <option value="perlis">Perlis</option>
                            <option value="p. pinang">P. Pinang</option>
                            <option value="kuala lumpur">Kuala Lumpur</option>
                            <option value="putrajaya">Putrajaya</option>
                            <option value="labuan">Labuan</option>
                    </select>                
                </div>
                <br><br>
                <h1>Maklumat Wali</h1>
                <hr>

                <div class="col-md-5">
                    <label>Wali ID:</label>
                    <input type="text" name="waliID" placeholder="Wali ID">

                    <label>Wali Name:</label>
                    <input type="text" name="waliName" placeholder="Nama Wali">

                    <label>Wali Address:</label>
                    <textarea name="waliAddrs" form="nikahForm" cols="50" rows="5">Alamat Wali</textarea>

                    <label>Wali DOB:</label>
                    <input type="date" name="waliDOB">

                    <label>WaliAge:</label>
                    <input type="text" name="waliAge" placeholder="WaliAge">
                
                    <label>Wali Relation:</label>
                    <input type="text" name="waliRelation" placeholder="Wali Relation">
                </div>

                <br><br>
                <h1>Maklumat Saksi</h1>
                <hr>
                
                <div class="col-md-5">
                    <label>Nama Saksi(1):</label>
                    <input type="text" name="namaSaksi1" placeholder="Nama Saksi">

                    <label>No. IC Saksi(1):</label>
                    <input type="text" name="icSaksi1" placeholder="IC Saksi">

                    <label>Alamat Saksi(1):</label>
                    <input type="text" name="alamatSaksi1" placeholder="Alamat Saksi">

                    <label>No. Telefon Saksi(1):</label>
                    <input type="text" name="telefonSaksi1" placeholder="No. Telefon Saksi">
                
                    <label>Nama Saksi(2):</label>
                    <input type="text" name="namaSaksi2" placeholder="Nama Saksi">

                    <label>No. IC Saksi(2):</label>
                    <input type="text" name="icSaksi2" placeholder="IC Saksi">

                    <label>Alamat Saksi(2):</label>
                    <input type="text" name="alamatSaksi2" placeholder="Alamat Saksi">

                    <label>No. Telefon Saksi(2):</label>
                    <input type="text" name="telefonSaksi2" placeholder="No. Telefon Saksi">
                
                    <label>Jenis Pernikahan:</label>
                    <select name="nikahJenis">
                            <option value="">Jenis Nikah</option>
                            <option value="nikahSemula">Pernikahan Semula</option>
                            <option value="nikahBiasa">Bukan Pernikahan Semula</option>
                    </select> 
                </div>
            </div>
                <input style="margin-left: 10px" type="submit" value="SIMPAN"> 
            </form>
            <button class="btn" onclick="location='viewRegistrationStatus.php'">CANCEL</button>
        </div>
    <div>
</body>
</html>