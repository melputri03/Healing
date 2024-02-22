<?php  
    session_start();

    if (!array_key_exists("username", $_SESSION)) {
    	
    	header("location:logout.php");
    }
?>

<nav>
	<ul>
		<li><a href="home.php">HOME</li>
		<li>MASTER</li>
			<ul>
				
				<?php if ($_SESSION["level"] == "admin") : ?> 
					<li><a href="user.php">User</li>
				<?php endif ?>
				<li><a href="barang.php">Barang</li>
			</ul>
		</li>
		<li>TRANSAKSI
			<ul>
				<li><a href="penjualan.php">Penjualan</li>
				<li><a href="pembelian.php">Pembelian</li>	
			</ul>
		</li>
		<li>Selamat datang, <?= $_SESSION["username"] ?> 
		    <ul>
		    	<li><a href="profil.php">Profil</a></li>
		    	<li><a href="logout.php">Log out</a></li>
		    </ul>
		</li>	
	</ul>
</nav>
