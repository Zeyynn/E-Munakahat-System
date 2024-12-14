<!DOCTYPE html>
<html>

<header>
    <?php include 'general_Interface.php';?>
    <?php session_start(); $applicantID = $_SESSION['applicantID'];?>
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
            <form class="row g-3" method="post" action="/e_munakahat/module3/business/Controllers/pasanganInsert.php">
            <div class="tab-pane fade show active" id="pills-pemohon" role="tabpanel" aria-labelledby="pills-pemohon-tab">
                <h1>Maklumat Pasangan</h1>
                <hr>
                <div>
                    <div class="col-md-7">
                        <label>No. IC:</label>
                        <input type="text" name="spouseIC" placeholder="No. IC">
                    </div>
                </div>
                <div>
                    <div class="col-7">
                        <label>Nama Penuh:</label>
                        <input type="text" name="spouseFullName" placeholder="Nama Penuh">               
                    </div>
                </div>
                <div>
                    <div class="col-md-3">
                        <label>Tarikh Lahir:</label>
                        <input type="date" name="spouseDOB">
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-3">
                    <label>Umur:</label>
                        <input type="text" name="spouseAge" placeholder="Umur">
                    </div>
                    <div class="col-md-3">
                    <label>Jantina:</label>
                        <input type="text" name="spouseGender" placeholder="Jantina">
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-6">
                    <label>Bangsa:</label>
                        <select name="spouseBangsa">
                            <option value="">Bangsa</option>
                            <option value="malay">Melayu</option>
                            <option value="indian">India</option>
                            <option value="chinese">Cina</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                    <label>Negara:</label>
                        <select name="spouseCitizenship">
                            <option value="">Negara</option>
                            <option value="malaysia">Malaysia</option>
                            <option value="notMalaysia">Luar Malaysia</option>
                        </select>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-6">
                    <label>Tahap Pendidikan:</label>
                        <select name="spouseEducation">
                            <option value="">Tahap Pendidikan</option>
                            <option value="none">Tiada Pendidikan</option>
                            <option value="primary">Sekolah Rendah</option>
                            <option value="secondary">Sekolah Menegah</option>
                            <option value="diploma">Diploma</option>
                            <option value="degree">Degree</option>
                            <option value="masters">Masters</option>
                            <option value="phd">PhD</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                    <label>Sektor Pekerjaan:</label>
                        <select name="spouseOcupationSector">
                            <option value="">Sektor Pekerjaan</option>
                            <option value="none">Tidak Bekerja</option>
                            <option value="public">Sektor Awam</option>
                            <option value="private">Sektor Swasta</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-5">
                    <br>
                <label>Nama Pekerjaan:</label>
                    <input type="text" name="spouseJobName" placeholder="Nama Pekerjaan">
                <label>Pendapatan:</label>
                    <input type="text" name="spouseIncome" placeholder="Pendapatan">
                <label>Alamat:</label>
                    <input type="text" name="spouseAddress" placeholder="Alamat Terkini">
                <label>No. Telefon:</label>
                    <input type="text" name="spousePhnNum" placeholder="No. Telefon">
                <label>Status Kahwin:</label>
                    <input type="text" name="spouseMarriageStatus" placeholder="Status Perkahwinan">
                </div>
            </div>
                <input style="margin-left: 10px" type="submit" value="SIMPAN"> 
            </form>
                <button class="btn" onclick="location='viewRegistrationStatus.php'">CANCEL</button>
        </div>
    <div>
</body>
</html>