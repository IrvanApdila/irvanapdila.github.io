<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="user.css">
    <title>VAN STORE - Toko Pakaian</title>
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
      <div class="product-container">
        <div class="product-card">
          <img src="https://tse3.mm.bing.net/th?id=OIP.FIolCPX6CKs9KAcSYoDFewHaLH&pid=Api&P=0" alt="Product">
          <h2>Hoodie From UK</h2>
          <p>Warna: Pink putih hijau</P>
           <P>Ukuran: L</p>
          <button>Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="https://tse1.mm.bing.net/th?id=OIP.6z5yae1tnVS9mAGyWe-QigHaJ4&pid=Api&P=0" alt="product 2">
          <h2>d Zip Up LWomen's Hoodie Oversizeong Fleece Sweat Jacket Army Green ML</h2>
          <P> Warna: Hitam</P> 
            <P>Ukuran: L</P>
            <div class="product-card">
              <img src="https://s1.bukalapak.com/img/6159904021/w-1000/Promo_baju_pria_atasan_kaos_Minhoa_Maron_casual_harga_murah_.jpg" alt="product 5">
              <h2>baju kaos minhoa marom</h2>
              <P> Warna: abu-abu,maroon</P> 
                <P>Ukuran: L</P>
              <button>Add to Cart</button>
          </div>
        </div>
        <div class="product-card">
          <img src="https://tse2.mm.bing.net/th?id=OIP._phNtGFKw-q51Q19xZqjXwHaHa&pid=Api&P=0" alt="product 3">
          <h2>Sweatshirt Adidas Hoodie Black</h2>
          <p>Warna: Army green</p>
          <P>Ukuran: L</p>
          <button>Add to Cart</button>
        <div class="product-container">
          <div class="product-card">
            <img src="https://tse1.mm.bing.net/th?id=OIP.34zyQS7bK8pUXnL9T8-7GAHaHs&pid=Api&P=0" alt="product 4">
            <h2>Sepatu Adidas</h2>
            <p></p>
            <P> Warna: Hitam,biru,abu,putih</P> 
              <P>Ukuran: 43</P>
            <button>Add to Cart</button>

           
</html>
