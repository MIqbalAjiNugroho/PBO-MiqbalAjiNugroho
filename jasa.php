<?php

namespace Pbo\Marketplace;

require_once ('./propertyConstant.php');

use Pbo\Marketplace\Produk;

class jasa {

    use Produk;
    
    public function payment($tipe) {

        return match($tipe) {
            "virtual" => "Virtual Account",
            "qris" => "QRIS",
            default => "Hanya bisa pakai VA dan QRIS",
        };
    }

}