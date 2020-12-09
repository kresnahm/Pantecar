<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fiksi - Filkom Skripsi</title>
    <link rel="stylesheet" href="<?= base_url('Assets/') ?>css/menu-button.css">
    <link rel="stylesheet" href="<?= base_url('Assets/') ?>css/sidebar.css">
    <link rel="stylesheet" href="<?= base_url('Assets/') ?>css/searchbar.css">
    <link rel="stylesheet" href="<?= base_url('Assets/') ?>css/content.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('Assets/') ?>css/toko.css">
    <link rel="stylesheet" href="<?= base_url('Assets/') ?>css/admin.css">
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
    <style media="screen">
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            min-width: 100vh
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
    <title></title>
</head>

<body>
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
                            <span><img src="<?= base_url('Assets/') ?>img/user.png" alt="user"></span></a>
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
                    <img src="<?= base_url('Assets') ?>img/panter.jpg" alt="Fiksi" width="60px" padding="30px">
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
    <div class="main">
        <div class="toko">
            <div class="container-toko">
                <img src="./img/panter.jpg" alt="">
                <h2 style="transform:translate(175px,5px);">Toko Apalah <i class="fa fa-certificate" aria-hidden="true" style="color:#0fbcf9"></i><i class="fa fa-check fa-xs" style="transform:translate(-17.5px,-3px);color:white;font-size:0.9rem"></i></h2>
                <button type="button" name="button" onclick="window.location.href='<?= base_url('home/addCarPage') ?>'">Tambah Mobil</button>
            </div>
        </div>
        <div class="content">
            <br>
            <br>
            <br>
            <br><br><br><br><br><br>
            <h2 style="text-align:center;">Daftar perental</h2>
            <div class="row">

                <table>

                    <tr>
                        <th>ID Transaksi</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Harga</th>
                        <th>Verifikasi</th>
                    </tr>
                    <?php
                    foreach ($unverif as $u) :
                    ?>
                        <tr>
                            <form class="verifikasi" action="<?= base_url('home/verTrans') ?>" method="post">
                                <td><?= $u['id'] ?></td>
                                <td><?= $u['borrow_date'] ?></td>
                                <td><?= $u['return_date'] ?></td>
                                <td>Rp <?= $u['total_price'] ?></td>
                                <input type="hidden" name="rentalId" value="<?= $shop['id_shop'] ?>">
                                <input type="hidden" name="transId" value="<?= $u['id'] ?>">


                                <td style="justify-content:center;align-items:center;">
                                    <button style="
                  align-items: center;
                  border: none;
                  border-radius: 4px;
                  padding: 8px;
                  background:#2ecc71;
                  text-transform:uppercase;
                  color: white;
                  " type="submit" name="submit">Terima</button></td>

                            </form>
                        </tr>
                    <?php

                    endforeach;
                    ?>
                </table>
                <!-- copy iklan dari sini -->
                <!-- <div class="iklan">
              <a href="link produk">
              <img src="./img/iklan.png" alt="">
              <p style="color:black; font-weight:bold;line-height:10px;font-family: 'Open Sans', sans-serif;">Iklan mobil gajelas</p>
              <p style="margin:0;padding-left: 10px;line-height:20px;font-family: 'Roboto Condensed', sans-serif;">Rp. 1.000.000</p>
              <i class="fa fa-map-marker"style="padding:10px;"> <p style="font-family: 'Open Sans', sans-serif;color:black;transform:translate(10px,-7.6px);line-height:0px;padding:0px;margin:0px">Paiton, Probolinggo</p></i>
            </a>
          </div> -->
                <!-- sampek sini -->
            </div>

        </div>
    </div>
    </div>
    </div>
</body>

</html>