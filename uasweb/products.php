<?php
require 'database/connection.php';
date_default_timezone_set('Etc/GMT-8');
session_start();
if(!isset($_SESSION['username'])){
    echo "<script>alert('Silahkan login terlebih dahulu!')</script>";
    echo "<script>window.location='login.php'</script>";
}

if(isset($_POST['search'])){
    $search = trim($_POST['search']);
    $sql = "SELECT * FROM produk WHERE nama_gtr LIKE '%".$search."%'";
    $tampil = mysqli_query($conn, $sql);
    $gtr = [];
    while($row = mysqli_fetch_assoc($tampil)){
        $gtr[] = $row;
    }
} else {
    $tampil = mysqli_query($conn,"SELECT * FROM produk");
    $gtr = [];
    while($row = mysqli_fetch_assoc($tampil)){
      $gtr[] =$row;
    }
}

?>

<link rel="stylesheet" href="style/style.css?v=<?php echo time(); ?>">
<title>Products Guitar</title>

<div class="navbar">
    <div class="navbarKiri">
        <ul>
            <span>
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
            </span>
        </ul>
    </div>
    <div class="navbarKanan">
        <ul>
            <span>
                <?php
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

<?php

?>

<div class="productsPage">
    <div class="filter">
    	<form action="" method="post">
        <input type="text" name="search" placeholder="Cari produk di Gitar">
        <input type="submit" value="Search">
    </form>
    </div>
    <form action="" method="post">
    <div class="catalog">
        <?php

        foreach($gtr as $i):
        ?>
        <div class="catalogCard">
                <div class="nShadow">
                    <img src="image/<?php echo $i['gambar'] ?>" alt="Gitar" style="max-width: 100px;height: auto;">
                    <h3><?php echo $i['nama_gtr'] ?></h3>
                    <p>Rp. <?php echo $i['harga_gtr'] ?></p>
                    <!-- <input type="submit" name="submit" class="cartSubmit" value="Buy now" href="detailProduct.php?id=<?php echo $keranjang["id_gtr"]; ?>"> -->
                    <div class="buy">
                    <?php
                        if($i['stok_gtr'] == 0){
                            echo("Stok Habis");
                        } else{
                            ?>
                            <a href="detailProduct.php?id=<?php echo $i['id_gtr'] ?>">Buy Now</a>
                            <?php
                        }
                    ?>
                    </div>
            </div>
        </div>
        <?php
        endforeach;
        ?>
    </div>
    </form>
</div>