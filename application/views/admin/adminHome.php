<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fiksi - Filkom Skripsi</title>
    <link rel="stylesheet" href="<?= base_url('Assets/'); ?>css/menu-button.css">
    <link rel="stylesheet" href="<?= base_url('Assets/'); ?>css/sidebar.css">
    <link rel="stylesheet" href="<?= base_url('Assets/'); ?>css/searchbar.css">
    <link rel="stylesheet" href="<?= base_url('Assets/'); ?>css/content.css">
    <link rel="stylesheet" href="<?= base_url('Assets/'); ?>css/modal.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.js"></script> -->
    <script>
        // document.getElementById("close").addEventListener("click",function(){
        //   document.querySelector('.modal').style.display="none";
        // })
        //   document.querySelector('.close').addEventListener("click",function(){
        //     // document.getElementById("open-modal").style.display = "none";
        //     document.querySelector('.modal').style.display="none";
        //   })
        function openForm(n) {
            document.getElementById("open-modal-" + n).style.display = "flex";
        }

        function closeForm(n) {
            document.getElementById("open-modal-" + n).style.display = "none";
        }
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

        .dropdown {
            transform: translate(0px, -15px);
        }

        /* .dropbtn {
            transform: translate(0px, 120px);
        } */

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
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

        .img-popup {
            display: none;
            position: fixed;
            bottom: 0;
            right: 15px;
            border: 3px solid #f1f1f1;
            z-index: 9;
            max-width: 300px;
            padding: 10px;
            background-color: white;
        }

        .img-container {
            max-width: 300px;
            padding: 10px;
            background-color: white;
        }
    </style>
</head>

<body>
    <img class="img-popup" src="<?= base_url('Assets/'); ?>img/1dekan.png" id="image" alt="">
    <!-- <div class="main"> -->
    <div class="header">
        <nav>
            <ul>
                <li>
                    <div class="dropdown">
                        <a class="dropbtn">
                            <span><img src="<?= base_url('Assets/'); ?>img/user.png" alt="user"></span></a>
                        <div class="dropdown-content">
                            <a href="<?= base_url('Auth/logout') ?>">log out</a>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
    <div class="main">
        <div class="content">
            <div class="row">
                <h2>Verifikasi Akun</h2>
                <table>
                    <tr>
                        <th>Nama</th>
                        <th>E-mail</th>
                        <th>Tanggal lahir</th>
                        <th>Foto KTP</th>
                        <th>Verifikasi</th>
                    </tr>
                    <?php
                    foreach ($user as $u) :
                    ?>
                        <tr>
                            <form class="verifikasi" action="<?= base_url('Admin/verify') ?>" method="post">
                                <td><?= $u['user_name'] ?></td>
                                <td><?= $u['email'] ?></td>
                                <td><?= $u['date_of_birth'] ?></td>
                                <input type="hidden" name='uid' value=<?= $u['id_user']; ?>>
            </div>
            <div class="modal" id="open-modal-<?= $u['id_user']; ?>">
                <div class="modal-content">
                    <div class="close"><button type="button" name="button" onclick="closeForm(<?= $u['id_user']; ?>)" style="background:none;border:none">+</button></div>
                    <img src="<?= "http://localhost:3000/" . $u['id_card_url'];
                                ?>" alt="">
                </div>
            </div>
            <td><button style="
              align-items: center;
              border: none;
              border-radius: 4px;
              padding: 8px;
              background:#2ecc71;
              text-transform:uppercase;
              color: white;
              " type="button" name="button" onclick="openForm(<?= $u['id_user']; ?>)">view</button></td>
            <td><button style="
              align-items: center;
              border: none;
              border-radius: 4px;
              padding: 8px;
              background:#3498db;
              text-transform:uppercase;
              color: white;
              " type="submit" name="submit">Verif</button></td>
            </form>
            </tr>
        <?php
                    endforeach; ?>
        <!-- <tr>


                        <form class="verifikasi" action="index.html" method="post">
                            <td>Alfreds Futterkiste</td>
                            <td>xxx@xxx.xxx</td>
                            <td>date</td>
                            <div class="modal" id="open-modal">
                                <div class="modal-content">
                                    <div class="close"><button type="button" name="button" onclick="closeForm()" style="background:none;border:none">+</button></div>
                                    <img src="<?= base_url('Assets/'); ?>img/1dekan.png" alt="">
                                </div>
                            </div>
                            <td><button style="
                align-items: center;
                border: none;
                border-radius: 4px;
                padding: 8px;
                background:#2ecc71;
                text-transform:uppercase;
                color: white;
                " type="button" name="button" onclick="openForm()">view</button></td>
                            <td><button style="
                align-items: center;
                border: none;
                border-radius: 4px;
                padding: 8px;
                background:#3498db;
                text-transform:uppercase;
                color: white;
                " type="submit" name="submit">Verif</button></td>
                        </form>
                    </tr> -->
        </table>
        <h2>Verifikasi Rental</h2>
        <table>
            <tr>
                <th>ID User</th>
                <th>Nama Pemilik</th>
                <th>Nama Rental</th>
                <th>Verifikasi</th>
            </tr>
            <?php
            foreach ($shop as $s) :
            ?>
                <form class="verifikasiToko" action="<?= base_url('Admin/verifyShop') ?>" method="post">
                    <tr>
                        <td><?= $s['userIdUser'] ?></td>
                        <td><?= $s['ownerName'] ?></td>
                        <td><?= $s['name']; ?></td>
                        <input type="hidden" name='shopId' value=<?= $s['id_shop']; ?>>
                        <td><button style="
              align-items: center;
              border: none;
              border-radius: 4px;
              padding: 8px;
              background:#3498db;
              text-transform:uppercase;
              color: white;
              " type="submit" name="submit">Verif</button></td>
                    </tr>
                </form>
            <?php
            endforeach; ?>
        </table>
        </div>
    </div>
    </div>
    </div>
    </div>
</body>

</html>