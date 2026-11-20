<?php

require_once ('./propertyConstant.php');

use Pbo\Marketplace\Produk;

$produk = new Produk();

$produk->setKode('P0001')->setNama('Laptop')->setHarga('10000000')->setStok(5);



echo "Produk: " . $produk->getNama();
echo "<br/>";

echo "Harga: " . $produk->getHarga();
echo "<br/>";

echo "Stok: " . $produk->getStok();
echo "<br/>";

echo "Pajak: " . $produk->getStok() . "%";
echo "<br/>";

echo "Total harga setelah pajak: Rp." . $produk->total();