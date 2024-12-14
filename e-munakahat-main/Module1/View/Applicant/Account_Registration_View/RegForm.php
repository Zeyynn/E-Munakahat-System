<!DOCTYPE html>
<html>
<header>  
    <link rel="stylesheet" href="generalStyle.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #1E2772;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.loginbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #1E2772;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
 
}

 
</style>
</header>

<body>
<!--Yolo-->
    <div class="banner">
        <img class="symbol" src="assets/pahangSymbol.png">
        <img class="logo" src="assets/JomKahwin Logo.png">
    </div>
    

    <div class="content">
       
        <form action="/action_page.php" method="post">

  <div class="container">

    <form>

    <label for="kad pengenalan"><b>Nombor Kad Pengenalan:</b></label>
    <input type="text" placeholder="Masukkan No. IC" name="kad pengenalan" required>

    <label for="Nama"><b>Nama:</b></label>
    <input type="text" id="nama" name="nama" required>

    <label for="Tarikh Lahir"><b>Tarikh Lahir:</b></label>
    <input type="text" id="Tarikh Lahir" placeholder="dd/mm/yy" name="Tarikh Lahir" required>

    <label for="bangsa"><b>Bangsa:</b></label>
    <input type="text" id="bangsa" name="bangsa" required>

    <label for="warganegara"><b>Warganegara:</b></label>
    <input type="text" id="warganegara" name="warganegara" required>

    <label for="alamat"><b>Alamat:</b></label>
    <input type="text" id="alamat" name="alamat" required>

    <label for="No.telefon"><b>Nombor Telefon (Rumah):</b></label>
    <input type="text" id="No.telefon" name="No.telefon" required>

    <label for="No.telefon"><b>Nombor Telefon (Bimbit):</b></label>
    <input type="text" id="No.telefon" name="No.telefon" required>

    <label for="pendidikan"><b>Taraf Pendidikan:</b></label>
    <input type="text" id="pendidikan" name="pendidikan" required>

    <label for="pekerjaan"><b>Pekerjaan/Jawatan:</b></label>
    <input type="text" id="pekerjaan" name="pekerjaan" required>

    <label for="alamat"><b>Alamat Tempat Kerja:</b></label>
    <input type="text" id="alamat" name="alamat" required>

    <label for="No.telefon"><b>Nombor Telefon (Pejabat):</b></label>
    <input type="text" id="No.telefon" name="No.telefon" required>
      
    
    <label>
        <button type="submit">Daftar Sekarang</button>
    </label>
    

    <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="loginbtn">Log Masuk</button>
    
  </div>
</form>

</body>
</html>