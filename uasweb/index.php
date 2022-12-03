<link rel="stylesheet" href="style/style.css?v=<?php echo time(); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Guitar Musik</title>

<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<script>alert('Username/Password anda salah!')</script>";
		}
	}
?>

<div class="navbar">
    <div class="navbarKiri">
        <ul>
            <span>
                <li><a href="index.php">Guitar</a></li>
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Produk</a></li>
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
            <img src="image/gitar5.jpg" alt="gitar" id="imageIndex">
            <img src="image/gitar1.jpg" alt="gitar" id="imageIndex">
        </div>
        <div class="welcome1">
            <img src="image/logo.png" alt="logo" width="100px">
            <h3>Gitar Akustik</h3>
            <h3>Suara yang dihasilkan terdengar lebih jelas dan merdu</h3>
            <h3>Mudah menjangkau nada-nada di gitar</h3>
            <h3>Bentuknya cenderung lebih modern dan elegan, sehingga terlihat keren</h3>
            <h3>Lebih simple, praktis, dan mudah, terutama saat mengganti senar</h3><br><br><br><br><br><br>
            <div class="buy">
                <a href="products.php">Buy now</a>
            </div>
        </div>
    </div>
    <a href="../public/aboutme.php">
    <div class="aboutContainer">
        <img src="https://torange.biz/photofxnew/212/HD/mirror-blur-left-side-212085.jpg" alt="aboutmeBanner" width="100%" height="40%">
    </div>
    </a>
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
