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

.kembalibtn {
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
  .cancelbtn {
     width: 100%;
  }
}
</style>
</header>

<body>
    <div class="banner">
        <img class="symbol" src="assets/pahangSymbol.png">
        <img class="logo" src="assets/JomKahwin Logo.png">
    </div>
    
    <div class="content">
        

        <form action="/action_page.php" method="post">

  <div class="container">
  <h2>SELAMAT DATANG KE SISTEM PERKAHWINAN PAHANG</h2>

    <label for="kad pengenalan"><b>Nombor Kad Pengenalan:</b></label>
    <input type="text" placeholder="Masukkan No. IC" name="kad pengenalan" required>

    <label for="psw"><b>Kata Laluan:</b></label>
    <input type="password" placeholder="Masukkan Kata Laluan" name="kata laluan" required>

    <label for="user-type">Jenis Pengguna</label>
      <select id="user-type" name="user-type">
        <option value="staff">JAIP staff</option>
        <option value="user">Pemohon</option>
      </select>
        
      <label>
    <button type="submit">Log Masuk Sekarang</button>
      </label>
    
    <label>
        <button type="submit">Daftar Sekarang</button>
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="kembalibtn">Kembali</button>
    <span class="psw">Lupa <a href="#">Kata Laluan?</a></span>
  </div>
</form>

</body>
</html>