<?php
class produk {
    private $sku = "";
    private $stock = 0;

    private function setSku($sku) {
        if (is_string($sku)) {
            $this->sku = $sku;

$produk01 = new Produk('ACR014',9);
echo "Stok produk".$produk01->getSku().":". $produk01->getStok()."buah";
// Stok produk ACR014: 9 buah

echo "<br>";

$produk02 = new Produk('LNV023',100);
echo "Stok produk".$produk02->getSku().":".$produk02->getStok()."buah";
// stok produk LNV023: 100 buah

echo "<br>";
$produk03 = new Produk('2NV050',67);
echo "Stok produk".$produk03->getSku().":".$produk->getStok()."buah";
// Error: sku harus 6 digit (3 huruf dan 3 digit), seperti AAA001

echo "<br>";

$produk04 = new Produk('HP002',10);
echo "Stok produk".$produk04->getSku().":".$produk04->getStok()."buah";
//  Error: sku harus 6 digit (3 huruf dan 3 digit), seperti AAA001

echo "<br>";

$produk05 = new Produk('DEL099',-5);
echo "Stok produk".$produk05->getSku().":".$produk05->getStok()."buah";
// Error: stok harus angka bulat positif