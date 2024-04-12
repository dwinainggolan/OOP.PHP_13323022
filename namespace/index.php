
<?php
require_once 'App/init.php';

 
// $produk1 = new Komik("Naruto", "Masahi Kisihimoto", "Shonen Jump", 30000, 100, 0);
// $produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk( $produk1 );
// $cetakProduk->tambahProduk( $produk2 );
// echo $cetakProduk->cetak();
use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;


// new App\Produk\User();
new ServiceUser();
echo "<br>";
new ProdukUser();