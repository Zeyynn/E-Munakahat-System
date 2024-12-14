<!DOCTYPE html>
<html>

<header>
    <link rel="stylesheet" href="stylesheet/applicantStyle.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="assets\font-awesome-4.7.0\font-awesome-4.7.0\css\font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</header>

<body>
    <div class="banner">
        <img class="symbol" src="assets/pahangSymbol.png">
        <img class="logo" src="assets/JomKahwin Logo.png">
    </div>
    <div class="sidebar">
        <div class="sidebarMenu">
            <hr>
            <p class="smallTitle">Sistem Maklumat Perkahwinan Islam Pahang</p>

            <div class="quickView">
                <table class="topTitle">
                    <tr>
                        <th class="title">No. IC</th>
                        <th>placeholder</th>
                    </tr>
                </table>

                <table class="bottomTitle">
                    <tr>
                        <th class="title">No. Telefon</th>
                        <th>placeholder</th>
                    </tr>
                </table>
            </div>

            <table>
                <tr>
                    <th><a href="">Profile</a></th>
                </tr>
            </table>
            <table>
                <tr>
                    <th><a href="">Permohonan Perkahwinan</a></th>
                </tr>
                <td>
                    <ul>
                        <li><a href="">Stuff</a></li>
                        <li><a href="">Stuff</a></li>
                    </ul>
                </td>
            </table>

            <table>
                <tr>
                    <th><a href="viewRegistrationStatus.php">Marriage Registration</a></th>
                </tr>
                <td>
                    <ul>
                        <li><a class="marriageReg">Perkahwinan Dalam Negara</a></li>
                        <li><a class="marriageReg">Perkahwinan Antarabangsa</a></li>
                        <li><a class="marriageReg">Perkahwinan Sukarela</a></li>
                    </ul>
                </td>
            </table>

            <table>
                <tr>
                    <th><a href="">Permohonan Ruju'</a></th>
                </tr>
            </table>

            <table>
                <tr>
                    <th><a href="">Aduan / Khidmat Nasihat</a></th>
                </tr>
                <td>
                    <ul>
                        <li><a href="">Stuff</a></li>
                    </ul>
                </td>
            </table>

            <table>
                <tr>
                    <th><a href="">Salinan Dokumen</a></th>
                </tr>
            </table>

            <table>
                <tr>
                    <th><a href="">Muat Naik Dokumen</a></th>
                </tr>
            </table>

            <table>
                <tr>
                    <th><a href="">Log Keluar</a></th>
                </tr>
            </table>
        </div>
    </div>

    <!--Actual Content-->

    <div class="container-fluid py-4">
        <div class="row mt-4">

            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Pilihan Penganjuran Kursus Pra Perkahwinan</h6>
                    </div>
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-md-3 mb-4">
                                <div class="input-group">
                                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                                    <button type="button" class="btn btn-outline-primary">search</button>
                                </div>
                                <div class="form-group">
                                    <select class="form-select">
                                        <option selected>Pilih Penganjur</option>
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
                            <div class="col-md-6 mb-1">
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" height="5px" value="Pilih">
                                </div>
                            </div>

                            <div class="col-md-12 mb-2">
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr class="bg-dark text-white">
                                            <th scope="col">No.</th>
                                            <th scope="col">Organisasi</th>
                                            <th scope="col">Lokasi</th>
                                            <th scope="col">Tarikh</th>
                                            <th scope="col">Slot</th>
                                            <th scope="col">Pendaftaran</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>a</td>
                                            <td>b</td>
                                            <td>c</td>
                                            <td>d</td>
                                            <td>
                                                <div class="form-group">
                                                    <input class="btn btn-primary" type="submit" value="Pilih">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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