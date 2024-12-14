<!DOCTYPE html>
<html>

<header>
    <?php include 'general_Interface.php' ?>
</header>


    
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Pendaftaran Kursus Pra Perkahwinan</h6>
                    </div>
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nombor Kad Pengenalan</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nama Penuh</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-12 mb-2">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Alamat</label>
                                    <textarea class="form-control" cols="30" rows="5" background: gray;></textarea>
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Negeri</label>
                                    <select class="form-select">
                                        <option selected>Pilih negeri</option>
                                        <option value="1">Perlis</option>
                                        <option value="2">Kedah</option>
                                        <option value="3">Pulau Pinang</option>
                                        <option value="4">Perak</option>
                                        <option value="5">Selangor</option>
                                        <option value="6">Johor</option>
                                        <option value="7">Negeri Sembilan</option>
                                        <option value="8">Melaka</option>
                                        <option value="9">Pahang</option>
                                        <option value="10">Terengganu</option>
                                        <option value="11">Kelantan</option>
                                        <option value="12">Sabah</option>
                                        <option value="13">Sarawak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Sektor Pekerjaan</label>
                                    <select class="form-select">
                                        <option selected>Pilih sektor pekerjaan</option>
                                        <option value="1">Kerajaan</option>
                                        <option value="2">Swasta</option>
                                        <option value="3">Tidak Bekerja</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Tahap Pendidikan</label>
                                    <select class="form-select">
                                        <option selected>Pilih tahap pendidikan</option>
                                        <option value="1">Menengah</option>
                                        <option value="2">Pengajian Tinggi</option>
                                        <option value="3">Tidak Belajar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Jantina</label>
                                    <select class="form-select">
                                        <option selected>Pilih jantina</option>
                                        <option value="1">Lelaki</option>
                                        <option value="2">Perempuan</option>
                                        <option value="3">Lain-lain</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nombor Telefon</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Tarikh Nikah</label>
                                    <input class="form-control" type="date">
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Bukti Pembayaran</label>
                                    <input class="form-control" type="file">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-5">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Saya telah membaca dan memahami terma dan syarat yang telah ditetapkan, dan bersetuju untuk menyertai Kursus Pra Perkahwinan Islam Pahang ini.</label>
                                    </div>
                                </div>
                            </div>

                        <div class="text-end mt-2">
                            <button onclick="history.back()" class="btn btn-secondary btn-md ms-auto">Back</button>
                            <button class="btn btn-success btn-md ms-auto">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>