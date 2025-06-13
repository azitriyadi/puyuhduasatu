<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>UMKM Telur Puyuh</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('style.css') }}"> 
</head>

<body>
  <!---header-->
  <header>
    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="material-icons">menu</label>
    <a href="#" class="logo">PuyuhDuasatu</a>
    <nav class="navbar">
      <a href="#home">home</a>
      <a href="#product">product</a>
      <a href="#review">review</a>
      <a href="#contact">contact</a>
    </nav>
  </header>
  <!--akhir header-->

  <!--home-->
  <section class="home" id="home">
    <div class="content">
      <h3>PuyuhDuasatu</h3>
      <span>selamat datang</span>
      <p> di website toko kami, wesite ini melampirkan tentang toko telur puyuh </p>
      <a href="#" class="btn">shop now</a>
    </div>
  </section>
  <!--akhir home-->

  <!--about-->
  <section class="about" id="about">

    <h1 class="heading"><span>about </span>us</h1>

    <div class="row">
      <div class="poto-container">
        <img src="img/umkmpuyuh.jpeg" alt="poto">
      </div>
      <div class="content">
        <h3>telur puyuh</h3>
        <p>toko telur puyuhduasatu adalah bagian dari usaha kami yang bergerak untuk menjual sebuah produk telur puyuh dari hasil ternak burung puyuh ,
          toko yang di pegang oleh bapa ayi sujana subah beroprasi dari tahun 2020 hingga sekarang
        </p>
        <p>telur puyuh sudah menjadi bagian makana pokok oleh orang orang dan enaka olahan makanan dengan telur puyuh dan juga
          telur puyuh ini sudah digunakan di acara acara keluarga seperti pernikahan , makan bersama.Serta telur puyuh meiliki hasiat yang baik untuk organ tubuh
          dan tentunya baik untuk kesehatan manusia.
        </p>
        <a href="" class="btn">learn more</a>
      </div>
    </div>
  </section>
  <!--akhir about-->

  <!--produk-->
  <section class="product" id="product">
    <h1 class="heading">latest <span>Product</span></h1>
    <div class="box-container">
      <div class="box">
        <span class="diskon">-10%</span>
        <div class="gambar-product">
          <img src="img/puyuh1.jpg" alt="gambar product">
          <div class="icon">
            <a href="" class="material-icons" style="color: black;">shopping_cart</a>
            <a href="" class="cart-btn">tambah ke karanjang</a>
            <a href="" class="material-icons" style="color: black;">share</a>
          </div>
        </div>
        <div class="content">
          <h3>telur puyuh</h3>
          <div class="harga">Rp25.000 <span>Rp15.000</span></div>
        </div>
      </div>

      <div class="box">
        <span class="diskon">-15%</span>
        <div class="gambar-product">
          <img src="img/One moment, please___.jpg" alt="gambar product">
          <div class="icon">
            <a href="" class="material-icons" style="color: black;">shopping_cart</a>
            <a href="" class="cart-btn">tambah ke karanjang</a>
            <a href="" class="material-icons" style="color: black;">share</a>
          </div>
        </div>
        <div class="content">
          <h3>burung puyuh</h3>
          <div class="harga">Rp60.000 <span>Rp45.000</span></div>
        </div>
      </div>

      <div class="box">
        <span class="diskon">-5%</span>
        <div class="gambar-product">
          <img src="img/puyuh2.jpg" alt="gambar product">
          <div class="icon">
            <a href="" class="material-icons" style="color: black;">shopping_cart</a>
            <a href="" class="cart-btn">tambah ke karanjang</a>
            <a href="" class="material-icons" style="color: black;">share</a>
          </div>
        </div>
        <div class="content">
          <h3>telur puyuh coklat</h3>
          <div class="harga">Rp30.000 <span>Rp25.000</span></div>
        </div>
      </div>


    </div>
  </section>
  <!--akhir produk-->

  <!--review-->
  <section class="review" id="review">
    <h1 class="heading"> costumer's <span>review</span></h1>
    <div class="box-content">
      <div class="box">
        <div class="stars">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-alt"></i>
        </div>
        <p> woww telur puyuh kondisi baik dan pemilik toko ini sangat ramah dan harga pas untuk di kantong
        </p>
        <div class="user">
         <img src="img/user1.jpeg" alt="potouser">
          <div class="user-info">
            <h3>budi</h3>
            <span>happy costumer</span>
          </div>
        </div>
        <span class="fa fa-quote-right"></span>
      </div>
      <div class="box">
        <div class="stars">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-alt"></i>
        </div>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus veniam atque dolor iusto molestias, ad vel
          expedita quo, doloribus adipisci temporibus dolore recusandae quae neque harum deleniti porro itaque. Soluta?
        </p>
        <div class="user">
        <img src="https://via.placeholder.com/60" alt="potouser">
          <div class="user-info">
            <h3>ridwan</h3>
            <span>happy costumer</span>
          </div>
        </div>
        <span class="fa fa-quote-right"></span>
      </div>
      <div class="box">
        <div class="stars">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-alt"></i>
        </div>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus veniam atque dolor iusto molestias, ad vel
          expedita quo, doloribus adipisci temporibus dolore recusandae quae neque harum deleniti porro itaque. Soluta?
        </p>
        <div class="user">
         <img src="https://via.placeholder.com/60" alt="potouser">
          <div class="user-info">
            <h3>zahra</h3>
            <span>happy costumer</span>
          </div>
        </div>
        <span class="fa fa-quote-right"></span>
      </div>
    </div>
  </section>
  <!--akhir review-->
  <!--contanct-->
  <section class = "contact" id="contact">
    <h1 class="heading"><span> contact </span> kami </h1>
    <div class="row">
      <form action="">
        <input type="text" placeholder="home" class="box">
        <input type="email" placeholder="email" class="box">
        <input type="number" placeholder="number" class="box">
        <textarea name="" class="box" placeholder="message" id="" clos="30" rows="10"></textarea>
        <input type="submit" value="send messge" class="btn">
      </form>
      <div class="image">
        <img src="#" alt="gambar telur">
      </div>
    </div>

  </section>
  <!--akhir contact-->

</body>

</html>