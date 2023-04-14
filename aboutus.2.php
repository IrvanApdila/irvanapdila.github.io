<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="abts2.css">
    <title>About Us - VAN STORE</title>
    <style>
    </style>
  </head>
  <body>
  <header>
      <h1>VAN STORE</h1>
      <nav>
        <div>
          <a href="user.php">Beranda</a>
          <a href="aboutus.2.php">About Us</a>
          <a href="index.php">LOGOUT</a>
          
        </div>
        <?php
            session_start();
            if(isset($_SESSION['user'])){
                if($_SESSION['user'] == "admin"){
                    echo "<span class='greeting'>Selamat datang Admin</span>";
                } elseif($_SESSION['user'] == "staf"){
                    echo "<span class='greeting'>Selamat datang Staf</span>";
                } elseif($_SESSION['user'] == "user"){
                    echo "<span class='greeting'>Selamat datang User</span>";
                }

            }
            ?>

      </nav>
    </header>
    <main>
      <p>VAN STORE adalah toko pakaian online yang menyediakan berbagai macam produk pakaian berkualitas dengan harga terjangkau. Kami berkomitmen untuk memberikan pelayanan terbaik kepada pelanggan dengan menjaga kualitas produk dan memberikan pengalaman berbelanja yang mudah dan menyenangkan.</p>
    </main>
    <footer>
        <p>Anda Dapat Menghubungi Akun Sosial Media Kami</p>
        <div class="social-media">
            <a href="https://www.facebook.com/irvan.apdila/"><img src="https://www.facebook.com/images/fb_icon_325x325.png" alt="Facebook"></a>
            <a href="https://www.tiktok.com/@sshhaannjjuu?_t=8aTpM9ZJgBt&_r=1"><img src="https://s.yimg.com/fz/api/res/1.2/dtceks3AcI55e2E7xp65Kw--~C/YXBwaWQ9c3JjaGRkO2g9MTEyO3E9ODA7dz0yMDA-/https://www.bing.com/th?id=OIP.VrBI4G9krckNCs57JySkgQHaEK&w=200&h=112&rs=1&qlt=80&pid=3.1"></a>
            <a href="https://www.instagram.com/irvanapdila/"><img src="https://www.instagram.com/static/images/ico/favicon-192.png/68d99ba29cc8.png" alt="Instagram"></a>
          </div>
          
      <p>&copy; 2023 VAN STORE. All rights reserved.</p>
    </footer>
  </body>
   
</html>
