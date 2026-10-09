<?php

class Produk {
    //Property
    public string $kode;
    public string $nama;
    public int $harga;

    public tring $kode;

}

$produk = new produk();

$produk->kode = 'p0001';
$produk->nama = 'laptop';
$produk->harga = 10000000;
$produk->stock = 5;

$pajak = Produk::PAJAK * 100;
$jumlahPajak = $produk->harga * Produk::PAJAK;

$total= $produk->harga + $jumlahPajak

echo "Produk:  ".$produk->nama;
echo "<br/>";
echo "Harga: ".$produk->harga;
echo "<br/>";
echo "Stok: ".$produk->stok;
echo "<br/>";
echo "Pajak: ".$pajak . "%"
echo "<br/>";
echo " Total harga setelah pajak: Rp.".$total; "