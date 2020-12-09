<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link rel="stylesheet" href="<?= base_url('Assets/'); ?>css/menu-button.css">
    <link rel="stylesheet" href="<?= base_url('Assets/'); ?>css/sidebar.css">
    <link rel="stylesheet" href="<?= base_url('Assets/'); ?>css/searchbar.css">
    <link rel="stylesheet" href="<?= base_url('Assets/'); ?>css/content.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css%22%3E">
    <link rel="preconnect" href="https://fonts.gstatic.com/%22%3E">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('Assets/'); ?>css/profile.css">
</head>

<body>
    <div class="header" id="header">
        <form class="search-bar" action="index.html" method="post">
            <li><input class="search-bar" type="text" name="" placeholder="Type to search. . .">
                <div class="logo-img">
                    <a href="<?= base_url('Home'); ?>"><img src="<?= base_url('assets/'); ?>img/panter.png" alt=""></a>
                </div>
            </li>
        </form>
        <nav>
            <ul>
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
    <div class="parent">
        <div class="profile-container">
            <div class="profile-pict">
                <img src="<?= base_url('assets/'); ?>img/user.png" alt="" style="max-width:200px">
            </div>
            <h3 style="transform:translate(500px,-400px)">BIODATA DIRI</h3>



            <div class="container-text-format">

                <p>Nama</p>
                <p>Tanggal Lahir</p>
                <p>E-mail</p>

            </div>
            <div class="container-text-fetch">

                <p><?= $user_name ?></p>
                <p><?= $date_of_birth ?></p>
                <p><?= $email ?></p>

            </div>
            <div class="transaksi">
                <?php
                if (!$status) { ?>
                    <button type="button" name="button">BUKA JASA RENTAL</button>
                <?php
                } else { ?>
                    <button type="button" name="button" onclick="window.location.href='<?= base_url('home/openTokoPage') ?>'">Buka Halaman Toko</button>
                <?php
                } ?>
                <!-- <h5 style=" transform:translate(33%,0%)">TRANSAKSI YANG BERLANGSUNG</h5>
                <table id="transaksi">
                    <tr>
                        <th>Tanggal pesan</th>
                        <th>Tanggal kembali</th>
                        <th>Nama mobil</th>
                        <th>Nama Penyewa</th>
                        <th>Email Penyewa</th>

                    </tr>
                    <tr>
                        <td>01 Januari 2030</td>
                        <td>01 Januari 2030</td>
                        <td>Dodge Challenger SRT</td>
                        <td>Sapik</td>
                        <td>fafafatur@gmail.com</td>
                    </tr>
                </table> -->
            </div>
        </div>
    </div>

</body>

</html>