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
    <a href="#" class="logo">PuyuhDuasatu<span>.</span></a>
    <nav class="navbar">
      <a href="#home">home</a>
      <a href="#product">product</a>
      <a href="#review">review</a>
      <a href="#contact">contact</a>
    </nav>
    <div class="icon">
      <a href="" class="material-icons">account_box</a>
      <a href="" class="material-icons">shopping_cart_checkout</a>
    </div>
  </header>
  <!--akhir header-->

  <!--home-->
  <section class="home" id="home">
    <div class="content">
      <h3>PuyuhDuasatu</h3>
      <span>toko telur puyuh</span>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo iste fugit ad quasi quia atque placeat tempora id
        iusto, soluta perspiciatis deleniti quos magnam itaque ab reprehenderit, facere eaque.</p>
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
        <h3>gihbibngib</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro dolor, placeat suscipit voluptatem sunt
          perspiciatis. Nihil blanditiis numquam consequuntur reprehenderit,</p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi nulla, aliquam adipisci incidunt, deserunt
          perferendis quia non, dolorum possimus deleniti placeat.</p>
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
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus veniam atque dolor iusto molestias, ad vel
          expedita quo, doloribus adipisci temporibus dolore recusandae quae neque harum deleniti porro itaque. Soluta?
        </p>
        <div class="user">
         <img src="img/user1.jpeg" alt="potouser">
          <div class="user-info">
            <h3>nama</h3>
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
            <h3>nama</h3>
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
            <h3>nama</h3>
            <span>happy costumer</span>
          </div>
        </div>
        <span class="fa fa-quote-right"></span>
      </div>
    </div>
  </section>
  <!--akhir review-->

</body>

</html>