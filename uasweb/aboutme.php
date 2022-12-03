<link rel="stylesheet" href="style/style.css?v=<?php echo time(); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Guitar Musik</title>

<div class="navbar">
    <div class="navbarKiri">
        <ul>
            <span>
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">produk</a></li>
            </span>
        </ul>
    </div>
    <div class="navbarKanan">
        <ul>
            <span>
                <?php
                    session_start();
                    error_reporting(0);
                    if($_SESSION['username'])
                    echo '<li><a href="logout.php">Logout</a></li>';
                    else{
                        echo '<li><a href="login.php">Login</a></li>';
                    }
                ?>
            </span>
        </ul>
    </div>
</div>

<div class="landingPage">
    <div class="welcome">
        <div>
            <img src="../image/Logo.png" alt="gitar2" id="imageIndex">
        </div>
        <div class="welcome1">
            <h3>Tentang Guitar Musik</h3>
            <p></p>
            <p></p>
            <p></p>
        </div>
    </div>
</div>

<div class="footer">
    <div class="info">
        <div class="infoKiri">
            <p>Di manapun kamu berada, kamu tetap bisa melengkapi kebutuhan bermusikmu.<br>  Kami telah menyediakan peralatan musik dan sound system dan mengirimkan ke seluruh Indonesia.</p>
            <p>Jika Anda ingin bantuan atau memiliki masukan, silahkan hubungi kami: <br>Jam 8:00 - 20:00 WITA (Kecuali hari libur nasional)</p>
            <p>Email : guitarmusik@gmail.com</p>
        </div>
        <div class="infoKanan">
            <p>Kami menerima pembayaran : </p>
            <ul>
                <li>GOPAY</li>
                <li>DANA</li>
                <li>OVO</li>
                <li>VISA</li>
                <li>MASTER CARD</li>
            </ul>
        </div>
    </div>
    <div class="copyright">
        <p>COPYRIGHT 2022 GUITAR. ALL RIGHTS RESERVED.</p>
    </div>
</div>