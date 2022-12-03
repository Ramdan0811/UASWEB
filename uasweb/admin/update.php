<link rel="stylesheet" href="../style/style.css?v=<?php echo time(); ?>">

<?php  
require '../database/connection.php';
session_start();

if(isset($_POST['submitForm1'])){
    $id = $_GET['id'];
    $nama_gtr = $_POST['nama_gtr'];
    $harga_gtr = $_POST['harga_gtr'];
    $stok_gtr = $_POST['stok_gtr'];
    $bulantahun = $_POST['bulantahun'];

    $sql = "UPDATE produk SET nama_gtr = '$nama_gtr', harga_gtr = '$harga_gtr', stok_gtr = '$stok_gtr', bulantahun = '$bulantahun' WHERE id_gtr = $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo"<script>
        alert('Data berhasil diubah');
        document.location.href ='read.php';
        </script>";
    } else{
        echo"<script>
        alert('Data gagal diubah');
        document.location.href ='read.php';
        </script>";
    }
}
?>

<div class="navbarUpdate">
    <?php echo "Waktu sekarang " . date("h:i:sa"); ?>
    <h3>Menu mengubah data</h3>
    <a href="read.php" id="kembaliAdmin">Kembali</a>
</div>

<div class="adminCreate">
    <form action="" method="POST">
		<label for="">Nama Guitar : </label>
        <input type="text" name="nama_gtr" required><br><br>

        <label for="">Harga : </label>
        <input type="number" name="harga_gtr" required><br><br>

        <label for="">Stok : </label>
        <input type="number" name="stok_gtr" required><br><br>

        <label for="">Bulan tahun rilis : </label>
        <input type="month" name="bulantahun" placeholder="1999-12" required>

		<input type="submit" name="submitForm1">
	</form>
</div>