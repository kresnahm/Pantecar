<!DOCTYPE html>
<html lang="en" dir="ltr">
<style media="screen">
    body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background-color: #2ECC71;

    }

    .container {
        position: absolute;
        top: 50%;
        left: 40%;
        transform: translate(-50%, -50%);
        border-radius: 14px;


    }

    .box2 {
        width: 300px;
        height: 480px;
        padding: 40px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #ecf0f1;
        text-align: center;
        border-radius: 14px 0px 0px 14px;
        box-shadow: -3px 4px 24px -8px #2d3436;
    }

    .box {
        width: 300px;
        padding: 40px;
        height: 480px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(50%, -50%);
        background: #2c3e50;
        text-align: center;
        border-radius: 0px 14px 14px 0px;
        box-shadow: 3px 4px 24px -8px #2d3436;
    }

    .box2 h1 {
        top: 50%;
        position: absolute;
        transform: translate(30%, -80%);
        font-weight: 500px;
    }

    .box h1 {
        color: white;
        text-transform: uppercase;
        font-weight: 400px;
        top: -10px;
    }

    .box input[type=text],
    .box input[type="password"],
    .box input[type="date"] {
        border: 0;
        background: none;
        display: block;
        margin: 20px auto;
        text-align: center;
        border: 2px solid #bdc3c7;
        padding: 14PX 10PX;
        width: 200px;
        outline: none;
        color: white;
        border-radius: 24px;
        transition: 0.25s;
    }

    .box input[type="text"]:focus,
    .box input[type="password"]:focus,
    .box input[type="date"]:focus {
        width: 250px;
        border-color: #e67e22;
    }

    .box input[type="submit"] {
        border: 0;
        background: none;
        display: block;
        margin: 20px auto;
        text-align: center;
        border: 2px solid #e67e22;
        padding: 14px 40px;
        outline: none;
        color: white;
        border-radius: 24px;
        transition: 0.25s;
        cursor: pointer;

    }

    .box input[type="submit"]:hover {
        background: #e67e22;
    }

    .inputfile {
        width: 0.1px;
        height: 0.1px;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        z-index: -1;
    }

    .inputfile+label {
        font-size: 0.75em;
        font-weight: 100;
        display: inline-block;
        border: 0;
        background: none;
        margin: 0px auto;
        text-align: center;
        border: 2px solid #bdc3c7;
        padding: 10px 10px;
        outline: none;
        color: white;
        border-radius: 24px;
        transition: 0.25s;
        cursor: pointer;
    }

    .inputfile:focus+label,
    .inputfile+label:hover {
        background-color: #e67e22;
        border: 2px solid #e67e22;
    }

    .inputfile+label {
        cursor: pointer;
    }
</style>

<head>
    <meta charset="utf-8">
    <title>Register Page</title>
</head>

<body>
    <div class="container">
        <form class="box2" action="index.html" method="post">
            <h1>PANTECAR</h1>
        </form>
        <form class="box" action="<?= base_url("Auth/register") ?>" method="post" enctype="multipart/form-data">
            <h1>Register</h1>
            <input type="text" name="nama" placeholder="Name">
            <input type="date" name="tglLahir" value="" class="text-input">
            <input type="text" name="email" placeholder="E-mail" class="text-input">
            <input type="password" name="password" placeholder="Password" class="text-input">
            <input type="file" name="image" id="KTP" value="" class="inputfile">
            <label for="KTP" style="color:white; ">Upload Foto KTP</label>
            <input type="submit" name="">
        </form>
    </div>
</body>

</html>