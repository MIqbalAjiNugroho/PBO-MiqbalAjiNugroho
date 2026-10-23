<?php

class Produk {
    // Property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    public const PAJAK = 0.11;

    public function__construct($kode,$nama,$harga,$stok){
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    } 

       public function pajak() {
        return self::PAJAK * 100;   
    }

    public function total(){
        return $this->harga + ($this->harga * self::PAJAK);
    }
}

$produk = new Produk();

// $produk->kode  = 'p0001';
// $produk->nama  = 'laptop';
// $produk->harga = 10000000;
// $produk->stok  = 5;


echo "Produk: " . $produk->nama;
echo "<br/>";
echo "Harga: " . $produk->harga;
echo "<br/>";
echo "Stok: " . $produk->stok;
echo "<br/>";
echo "Pajak: " . $produk->pajak() . "%";
echo "<br/>";
echo "Total harga setelah pajak: Rp." . $produk->total();