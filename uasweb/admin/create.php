<link rel="stylesheet" href="../style/style.css?v=<?php echo time(); ?>">

<?php
    date_default_timezone_set('Etc/GMT-8');
    require '../admin/functions.php';
    $pdo = pdo_connect_mysql();
    $msg = '';

    if (!empty($_POST)) {

        $id_gtr = isset($_POST['id_gtr']) && !empty($_POST['id_gtr']) && $_POST['id_gtr'] != 'auto' ? $_POST['id_gtr'] : NULL;

        $nama_gtr = isset($_POST['nama_gtr']) ? $_POST['nama_gtr'] : '';
        $harga_gtr = isset($_POST['harga_gtr']) ? $_POST['harga_gtr'] : '';
        $stok_gtr = isset($_POST['stok_gtr']) ? $_POST['stok_gtr'] : '';
        $bulantahun = isset($_POST['bulantahun']) ? $_POST['bulantahun'] : '';
        $gambar = isset($_POST['gambar']) ? $_POST['gambar'] : '';
    
        $stmt = $pdo->prepare('INSERT INTO produk VALUES (?, ?, ?, ?, ?, ?)');
        $stmt->execute([$id_gtr, $nama_gtr, $harga_gtr, $stok_gtr, $bulantahun, $gambar]);
        echo "<script>alert('Data berhasil di tambahkan!')</script>";
    } else{
        echo "<script>alert('Data gagal di tambahkan!')</script>";
    }
?>

<div id="adminCreateNavbar">
    <?php echo "Waktu sekarang " . date("h:i:sa"); ?>
    <h3>Menu menambahkan data</h3>
</div>

<div class="kembaliAdmin">
    <a href="../admin/admin.php" style="color:black;" id="kembaliAdmin">Kembali</a>
</div>
<div class="adminCreate">
    <form action="" method="POST">
                <label for="">Nama Guitar</label>
				<input type="text" name="nama_gtr" required>
                <label for="">Harga</label>
				<input type="number" name="harga_gtr" required>
                <label for="">Stok</label>
				<input type="number" name="stok_gtr" required>
                <label for="">Bulan dan tahun rilis</label>
                <input type="month" name="bulantahun" required>
                <label for="">Gambar</label>
                <input type="file" name="gambar" required>
		</table>
		<input class="logBtn" type="submit" name="submitForm">
	</form>
</div>