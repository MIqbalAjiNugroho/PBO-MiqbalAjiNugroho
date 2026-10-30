<?php

require_once ('./propertyConstant.php');

use Pbo\Marketplace\Produk;

$produk = new Produk('P001', 'Laptop', 10000000, 5);



echo "Produk: " . $produk->nama;
echo "<br/>";

echo "Harga: " . $produk->harga;
echo "<br/>";

echo "Stok: " . $produk->stok;
echo "<br/>";

echo "Pajak: " . $produk->pajak() . "%";
echo "<br/>";

echo "Total harga setelah pajak: Rp." . $produk->total();