<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fiksi - Filkom Skripsi</title>
  <link rel="stylesheet" href="<?= base_url('Assets/'); ?>css/menu-button.css">
  <link rel="stylesheet" href="<?= base_url('Assets/'); ?>css/sidebar.css">
  <link rel="stylesheet" href="<?= base_url('Assets/'); ?>css/searchbar.css">
  <link rel="stylesheet" href="<?= base_url('Assets/'); ?>css/bukajasa.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.sidebarBtn').click(function() {
        $('.sidebar').toggleClass('active');
        $('.sidebarBtn').toggleClass('toggle');
        $('.main').toggleClass('active1');
      })
    })
  </script>
  <title></title>
  <style type="text/css">
    h1 {
      position: absolute;
      left: 830px;
      bottom: 250px;
      top: 270px;
      z-index: 2;
      color: #fff;
    }
  </style>
</head>

<body>
  <!-- <div class="main"> -->
  <div class="header">
    <form class="search-bar" action="index.html" method="post">
      <li><input class="search-bar" type="text" name="" placeholder="Type to search. . .">
      </li>
    </form>
    <nav>
      <ul>
        <!-- <li><img src="./img/user.png" alt="user"></li> -->
        <li>
          <div class="dropdown">
            <a class="dropbtn">
              <span><img src="<?= base_url('Assets/'); ?>img/user.png" alt="user"></span></a>
            <div class="dropdown-content">
              <a href="<?= base_url('Home/openProfile') ?>">Profile</a>
              <a href="<?= base_url('Home/reqOpenShop') ?>">Buka jasa rental</a>
              <a href="<?= base_url('Auth/logout') ?>">log out</a>
            </div>
          </div>
        </li>
      </ul>
    </nav>
  </div>
  <!-- </div> -->


  <!-- <div class="sidebar">
    <ul>
      <div class="img">
        <a href="home.html">
          <img src="./img/panter.jpg" alt="Fiksi" width="60px" padding="30px">
        </a>
      </div>
      <div class="bdrTop">
        <div class="filter">
          <h3>FILTER</h3>
        </div>
        <h5 style="margin-left:10PX">Harga</h5>
        <form class="" action="index.html" method="post">
          <li><input class="harga" type="number" name="" placeholder="Harga Minimum"></li>
          <li><input class="harga" type="number" name="" placeholder="Harga Maksimum"></li>
          <h5 style="margin-left:10PX">Transmisi</h5>
          <li style="margin-left:20px">
            <label class="checkbox">Automatic
              <input type="checkbox" name="" value="">
              <span class="checkmark"></span></label>
            </li>
            <li style="margin-left:20px">
              <label class="checkbox">Manual
                <input type="checkbox" name="" value=""style="left:4px">
                <span class="checkmark"></span>
              </label>
            </li>
            <h5 style="margin-left:10PX">Jumlah Kursi</h5>
            <li style="margin-left:20px">
              <label class="checkbox">5 seater
                <input type="checkbox" name="" value="">
                <span class="checkmark"></span></label>
              </li>
              <li style="margin-left:20px">
                <label class="checkbox">7 seater
                  <input type="checkbox" name="" value="">
                  <span class="checkmark"></span></label>
              </li>
              <li><input class="reset" type="reset" name="" value="reset"></li>
            </div>
          </ul>
        <button type="button" name="button" class="sidebarBtn">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div> -->
  <div class="main_content">
    <div class="content">
      <div class="isi">
        <h2>Form Membuka Jasa Rental</h2>
        <form action="<?= base_url('home/reqShop'); ?>" class="box_form" method='POST'>
          <div class="form_data">
            <label for="fname">Nama Rental:</label><br>
            <input type="text" id="nama" name="nama"><br><br>
            <label for="lname">Alamat:</label><br>
            <input type="text" id="merk" name="alamat"><br><br>
            <label for="fname">Kota:</label><br>
            <input type="text" id="transmisi" name="kota"><br><br>
            <label for="lname">Provinsi:</label><br>
            <input type="text" id="plat" name="provinsi"><br><br>
            <label for="fname">Bank untuk Transfer:</label><br>
            <input type="text" id="bahanBakar" name="bank"><br><br>
            <label for="lname">No. Rekening:</label><br>
            <input type="text" id="kursi" name="norek"><br><br>
          </div>
          <br><br>
          <input class="simpan" style="cursor:pointer" type="submit" value="Submit" multiple><br><br>
        </form>
      </div>
    </div>
  </div>
</body>

</html>