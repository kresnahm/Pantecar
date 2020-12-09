<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fiksi - Filkom Skripsi</title>
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/menu-button.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/sidebar.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/searchbar.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/content.css">
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
                            <span><img src="<?= base_url('assets/'); ?>img/user.png" alt="user"></span></a>
                        <div class="dropdown-content">
                            <a href="<?= base_url('Home/openProfile') ?>">Profile</a>
                            <?php
                            if (!$status) { ?>
                                <a href="<?= base_url('Home/reqOpenShop') ?>">Buka jasa rental</a>
                            <?php
                            } ?>
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
                    <img src="<?= base_url('assets/'); ?>img/panter.jpg" alt="Fiksi" width="60px" padding="30px">
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
        <div class="content">
            <h2>Featured Car</h2>
            <div class="row">
                <?php
                foreach ($car as $c) :
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
                endforeach ?>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>