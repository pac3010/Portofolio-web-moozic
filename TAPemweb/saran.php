<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moozic</title>
    <link rel="stylesheet" href="saran.css" />
    <link href='https://fonts.googleapis.com/css?family=Merriweather Sans' rel='stylesheet' />
    <link href='https://fonts.googleapis.com/css?family=Merienda' rel='stylesheet' />
    <link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet' />
    <link href='https://fonts.googleapis.com/css?family=Arima Madurai' rel='stylesheet' />
</head>

<body style="background-image:url('bg.png'); background-repeat:space;">
    <div class="container">
        <ul>
            <img style="border-radius: 50%; float: left; margin-left: 30px;" src="Logo1.png" width="95px">
            <li><a href="tentang.html">Tentang</a></li>
            <li><a class="active" href="saran.php">Saran Masukan</a></li>
            <li><a href="artikel.html">Artikel</a></li>
            <li><a href="index.html">Beranda</a></li>
        </ul>
        </div>
        <div class="container2" style="background-image: url(saran.png);">  
            <form id="contact" action="" method="post">
              <h3 style="font-family: Arima Madurai; font-size: 23px;" >Kotak Saran dan Masukan</h3>
              <h4>saran dan masukan anda akan sangat membantu</h4>
              <fieldset>
                <input placeholder="Nama anda" type="text" name="nama" tabindex="1" required autofocus>
              </fieldset>
              <fieldset>
                <input placeholder="Alamat email" type="email" name="email" tabindex="2" required>
              </fieldset>
              <fieldset>
                <textarea placeholder="Saran dan Masukan" name="saran" tabindex="5" required></textarea>
              </fieldset>
              <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
              </fieldset>
            </form>

            <?php
include "koneksi.php";

if(isset($_POST['submit'])){
    mysqli_query($koneksi,"insert into saran_moozic set
    nama = '$_POST[nama]',
    email = '$_POST[email]',
    saran = '$_POST[saran]");

}

?>
          </div>
        <div class="footer">
            <br><p><h3 style="font-family: Acme; font-size: 30px;">MOOZIC</h3></p>
            <p>Moozic merupakan website yang menyediakan artikel di bidang seni musik<br> Untuk saat ini, website moozic masih dalam tahap pengembangan <br>Nantikan updatean selanjutnya &#127925;</p>
            
          </div>
          <p style="text-align: left;">
            <p style="float: left; font-family: Arima Madurai; background-color: ivory;"></p>
                    <p>Copyright© 2021
            </p>
        </p>



        </body>