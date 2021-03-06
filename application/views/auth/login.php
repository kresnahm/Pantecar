<html lang="en">
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
        height: 380px;
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

    .box2 h1 {
        top: 50%;
        position: absolute;
        transform: translate(30%, -80%);
    }

    .box {
        width: 300px;
        padding: 40px;
        height: 380px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(50%, -50%);
        background: #2c3e50;
        text-align: center;
        border-radius: 0px 14px 14px 0px;
        box-shadow: 3px 4px 24px -8px #2d3436;
    }

    .box h1 {
        color: white;
        text-transform: uppercase;
        font-weight: 400px;
    }

    .box input[type=text],
    .box input[type="password"] {
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
    .box input[type="password"]:focus {
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
</style>

<head>
    <meta charset="utf-8">
    <title>Login Page</title>
</head>

<body>
    <div class="container">
        <form class="box2" action="index.html" method="post">
            <h1>PANTECAR</h1>
        </form>
        <div class="box">
            <form class="user" action="<?= base_url('Auth'); ?>" method="POST">
                <h1>Login</h1>
                <div class="form-group">
                    <input type="text" class="text-input" id="email" name="email" placeholder="Enter Email Address...">
                    <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" class="text-input" id=password>
                    <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                </div>
                <input type="submit" name="" value="Login">
            </form>
            <a href="<?= base_url("Auth/register"); ?>" style="color:#e67e22">
                Register
            </a>
            <br>
            <br>
        </div>
    </div>
</body>

</html>