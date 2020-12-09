<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Product Description</title>
  <link rel="stylesheet" href="<!DOCTYPE html>
<html lang=" en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Description</title>
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/menu-button.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/sidebar.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/searchbar.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/content.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css%22%3E">
    <link rel="preconnect" href="https://fonts.gstatic.com/%22%3E">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/slide.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/helmi.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    </script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('.sidebarBtn').click(function() {
          $('.sidebar').toggleClass('active');
          $('.sidebarBtn').toggleClass('toggle');
          $('.main').toggleClass('active1');
        })
      })

      // var slideIndex = 1;
      // showSlides(1);

      // Next/previous controls
      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      // Thumbnail image controls
      function currentSlide(n) {
        showSlides(slideIndex = n);
      }

      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {
          slideIndex = 1
        }
        if (n < 1) {
          slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        captionText.innerHTML = dots[slideIndex - 1].alt;
      }
    </script>
    <title></title>
    <style type="text/css">
      a {
        text-decoration: none;
      }
    </style>
  </head>

<body onload="currentSlide(1)">
  <!-- <div class="main"> -->
  <div class="header">
    <form class="search-bar" action="index.html" method="post">
      <li><input class="search-bar" type="text" name="" placeholder="Type to search. . .">
        <div class="logo-img">
          <a href="<?= base_url('Home'); ?>"><img src="<?= base_url('assets/'); ?>img/panter.png" alt=""></a>
        </div>
      </li>
    </form>
    <nav>
      <ul>
        <!-- <li><img src="./img/user.png" alt="user"></li> -->
        <li>
          <div class="dropdown">
            <a class="dropbtn">
              <span><img src="<?= base_url('assets/'); ?>img/user.png" alt="user"></span></a>
            <div class="dropdown-content">
              <a href="<?= base_url('Home/openProfile') ?>">Profile</a>

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
              <input type="checkbox" name="" value="" style="left:4px">
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
            </label>
          </li>
          <li><input class="reset" type="reset" name="" value="reset"></li>
      </div>
    </ul>
    </form>
    <button type="button" name="button" class="sidebarBtn">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </div> -->
  <!-- a -->


  <div class="main">
    <div class="content">
      <div class="isi">
        <div class="gambar_mobil">
          <div class="container">


            <div class="mySlides">
              <div class="numbertext">1 / 5</div>
              <img src=<?= "http://localhost:3000/" . $carImageUrl[0]; ?> style="width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">2 / 5</div>
              <img src=<?= "http://localhost:3000/" . $carImageUrl[0]; ?> style="width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">3 / 5</div>
              <img src=<?= "http://localhost:3000/" . $carImageUrl[0]; ?> style="width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">4 / 5</div>
              <img src=<?= "http://localhost:3000/" . $carImageUrl[0]; ?> style="width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">5 / 5</div>
              <img src=<?= "http://localhost:3000/" . $carImageUrl[0]; ?> style="width:100%">
            </div>



            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>


            <div class="row">
              <div class="column">
                <img class="demo cursor" src=<?= "http://localhost:3000/" . $carImageUrl[0]; ?> style="width:100%" onclick="currentSlide(1)" alt="">
              </div>
              <div class="column">
                <img class="demo cursor" src=<?= "http://localhost:3000/" . $carImageUrl[0]; ?> style="width:100%" onclick="currentSlide(2)" alt="">
              </div>
              <div class="column">
                <img class="demo cursor" src=<?= "http://localhost:3000/" . $carImageUrl[0]; ?> style="width:100%" onclick="currentSlide(3)" alt="">
              </div>
              <div class="column">
                <img class="demo cursor" src=<?= "http://localhost:3000/" . $carImageUrl[0]; ?> style="width:100%" onclick="currentSlide(4)" alt="">
              </div>
              <div class="column">
                <img class="demo cursor" src=<?= "http://localhost:3000/" . $carImageUrl[0]; ?> style="width:100%" onclick="currentSlide(5)" alt="">
              </div>
            </div>
          </div>

        </div>
        <div class="ket_mobil">
          <h3><?= $car['car_name'] ?></h3>
          <h4><?= $car['rentalShopName'] ?></h4>
          <h5><?= $car['city'] ?></h5>
          <p style="color:#FA4D4D;font-size: 24px;font-family: 'Roboto Condensed', sans-serif;margin:0px">Rp. <?= number_format($car['fare_per_day'], 2, ',', '.') ?></p>

          <div class="fitur_mobil">
            <h6 style="font-size: 14px">Transmisi : <?= $car['car_transmission'] ?></h6>
            <h6 style="font-size: 14px">Jumlah Kursi : <?= $car['number_of_seat'] ?></h6>
            <h6 style="font-size: 14px">Bahan Bakar : <?= $car['fuel_type'] ?></h6>
            <form class="" action="<?= base_url('Home/createTrans') ?>" method="post">
              <h6 style="font-size: 14px">Tanggal Sewa : <input type="date" name="rentDate" value="" class="text-input"></h6>
              <h6 style="font-size: 14px">Tanggal Kembali : <input type="date" name="returnDate" value="" class="text-input"></h6>
              <input type="hidden" name="rentalId" value=<?= $car['rentalShopIdShop'] ?>>
              <input type="hidden" name="carId" value=<?= $car['id_car'] ?>>
              <button type="submit" name="button" style="padding-left:30px;padding-right:30px;text-transform:uppercase;margin-top:10px;margin-bottom:10px"> Sewa</button>
            </form>
          </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>

        <div class="shift-down">
          <div class="row">
            <?php
            $x = 0;
            foreach ($cars as $c) :
              if ($x == 4) {
                break;
              }
            ?>
              <div class="iklan">
                <form action="<?= base_url('Home/openProdDesc'); ?>" method='POST' id=<?= $c['id_car'] ?>>
                  <a href="javascript:;" onclick="document.getElementById(<?= $c['id_car'] ?>).submit();">
                    <img src="<?= "http://localhost:3000/" . $c['imagePreviewUrl']; ?>" alt="">
                    <input type="hidden" name='carID' value=<?= $c['id_car'] ?>>
                    <p style="color:black; font-weight:bold;line-height:10px;font-family: 'Open Sans', sans-serif;"><?= $c['car_name'] ?></p>
                    <p style="margin:0;padding-left: 10px;line-height:20px;font-family: 'Roboto Condensed', sans-serif;">Rp. <?= $c['fare_per_day'] ?></p>
                    <i class="fa fa-map-marker" style="padding:10px;">
                      <p style="font-family: 'Open Sans', sans-serif;color:black;transform:translate(10px,-7.6px);line-height:0px;padding:0px;margin:0px"><?= $c['city'] ?>, <?= $c['province'] ?></p>
                    </i>
                  </a>
                </form>
              </div>
            <?php
              $x++;
            endforeach ?>

          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
</body>