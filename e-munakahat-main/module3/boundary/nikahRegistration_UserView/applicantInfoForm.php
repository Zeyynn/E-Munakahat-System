<!DOCTYPE html>
<html>
<header>
    <?php include 'general_Interface.php';?>
    <link rel="stylesheet" href="stylesheet/applicantStyle.css">
</header>
<body>
    <!------------------------------Actual Content--------------------------->
    <div class="smallBanner">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active text-white" onclick="location='applicantInfoForm.php'" id="pills-pemohon-tab" data-bs-toggle="pill" data-bs-target="#pills-pemohon" type="button" role="tab" aria-controls="pemohon" aria-selected="false">Maklumat Pemohon</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link text-white" onclick="location='pasanganInfoForm.php'" id="pills-pasangan-tab" data-bs-toggle="pill" data-bs-target="#pills-pasangan" type="button" role="tab" aria-controls="pasangan" aria-selected="false">Maklumat Pasangan</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link text-white" onclick="location='nikahInfoForm.php'" id="pills-nikah-tab" data-bs-toggle="pill" data-bs-target="#pills-nikah" type="button" role="tab" aria-controls="nikah" aria-selected="true">Maklumat Nikah</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link text-white" onclick="location='text.php'" id="pills-dokumen-tab" data-bs-toggle="pill" data-bs-target="#pills-dokumen" type="button" role="tab" aria-controls="dokumen" aria-selected="false">Dokumen</button>
        </li>
    </ul>
    </div>
    <div class="content">          
        <div class="tab-content" id="pills-tabContent">
            <form class="row g-3" method="post" action="/e_munakahat/module3/business/Controllers/applicantInsert.php">
            <div class="tab-pane fade show active" id="pills-pemohon" role="tabpanel" aria-labelledby="pills-pemohon-tab">
                <h1>Maklumat Pemohon</h1>
                <hr>
                <div>
                    <div class="col-md-7">
                        <label>No. IC:</label>
                        <input type="text" name="applicantIC" placeholder="IC number">
                    </div>
                </div>
                <div>
                    <div class="col-7">
                        <label>Nama Penuh:</label>
                        <input type="text" name="applicantFullName" placeholder="Full Name">               
                    </div>
                </div>
                <div>
                    <div class="col-md-3">
                        <label>Tarikh lahir:</label>
                        <input type="date" name="applicantDOB">
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-3">
                    <label>Umur:</label>
                        <input type="text" name="applicantAge" placeholder="Age">
                    </div>
                    <div class="col-md-3">
                    <label>Jantina:</label>
                        <input type="text" name="applicantGender" placeholder="Gender">
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-6">
                    <label>Bangsa:</label>
                        <select name="applicantBangsa">
                            <option value="">Bangsa</option>
                            <option value="malay">Melayu</option>
                            <option value="indian">India</option>
                            <option value="chinese">Cina</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                    <label>Negara:</label>
                        <select name="applicantCitizenship">
                            <option value="">Negara</option>
                            <option value="malaysia">Malaysia</option>
                            <option value="notMalaysia">Luar Malaysia</option>
                        </select>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-6">
                    <label>Tahap Pendidikan:</label>
                        <select name="applicantEducation">
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
                        <select name="applicantOcupationSector">
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
                    <input type="text" name="applicantJobName" placeholder="Nama Pekerjaan">
                <label>Pendapatan(RM):</label>
                    <input type="text" name="applicantIncome" placeholder="Pendapatan">
                <label>Alamat Semasa:</label>
                    <input type="text" name="applicantAddress" placeholder="Alamat Terkini">
                <label>No. Telefon:</label>
                    <input type="text" name="applicantPhnNum" placeholder="No. Telefon">
                <label>Status Perkahwinan:</label>
                    <input type="text" name="applicantMarriageStatus" placeholder="Status Perkahwinan">
                </div>
            </div>
            <br>
                <input style="margin-left: 10px" type="submit" value="SIMPAN"> 
            </form>
                <button class="btn" onclick="location='viewRegistrationStatus.php'">CANCEL</button>
        </div>
    <div>
</body>
</html>