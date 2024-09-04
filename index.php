<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Wildan Aridh Takhfif-233140701111045</title>
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
        <header>
        <div class="container">
            <div class="Lets">
                <h1>Contact Form</h1>
                <p class="text-header">Lets Get In Touch</p>
            </div>
        </div>
        </header>
        <div class="contact-box">
            <form action="koneksi/koneksi.php" method="post" >
                <textarea class="area-pesan" type="text" name="saran" placeholder="tulis Pesan Disini"></textarea>
                <input class="area-input" type="text"  placeholder="Nama" name="nama" required>
                <input class="area-input" type="number"  placeholder="Nim" name="nim" required>
                <select class="dropdown" name="kelas" id="kelas">
                    <option value="" disabled selected hidden>Kelas</option>
                    <option value="T3A">T3A</option>
                    <option value="T3B">T3B</option>
                    <option value="T3C">T3C</option>
                    <option value="T3F">T3F</option>
                </select>
                <input class="area-input" type="email" id="Email" name="email" placeholder="Email" required>
                <button type="submit">Kirim</button>
                <div class="klik">
                <label  class="radio-label" for="gender" name="jenis_kelamin" >Jenis Kelamin</label><br>
                <input class=radio-button type="radio" id="gender" name="jenis_kelamin" value="laki-laki">
                <label class="radio-label" for="gender">laki-laki</label>
                <input class=radio-button type="radio" id="gender" name="jenis_kelamin" value="Perempuan">
                <label class="radio-label" for="gender">Perempuan</label>
                </div>
            </form>
        </div>

        <footer>
            <div class="container">
                 <div class="social">
                    <a href="#" class="href img">
                        <img src="asset/facebook.svg" alt="facebook link" style="width: 30px; ;height: 30px ;">
                    </a>
                    <a href="#" class="href img">
                        <img src="asset/instagram.svg" alt="facebook link" style="width:30px ; height: 30px ;">
                    </a>
                    <a href="#" class="href img">
                        <img src="asset/twitter.svg" alt="facebook link" style="width: 30px ; height: 30px;">
                    </a>
                </div>
            </div>
        </footer>
        
    </body>
</html>