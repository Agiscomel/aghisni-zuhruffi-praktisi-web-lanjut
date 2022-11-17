<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barang;

class barangsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Barang::insert(
            [
                [
                    'Nama_Barang' => 'Baju Muslim Wanita',
                    'Gambar' => 'gmb1.jpeg',
                    'Harga' => '125000',
                    'Stok' => '120',
                    'Bahan' => 'Maxmara silk premium',
                    'Deskripsi' => 'GAMIS MAXMARA SILK HARERA TERBARU..

                    detail size : allsize 
                    lebar dada 110 cm
                    panjang baju 140 cm 
                    RESLETING DEPAN BUSUI
                    TALI BISA DILEPAS
                    
                    lengan lonceng karet klok 220 cm',
                ],
                [
                    'Nama_Barang' => 'Kebaya batik ZALORA oneset',
                    'Gambar' => 'gmb2.jpg',
                    'Harga' => '427000',
                    'Stok' => '98',
                    'Bahan' => 'kain katun prima',
                    'Deskripsi' => 'tak ada salahnya menggunakan blouse outer model kimono untuk ke kondangan.
                     Outfit kondangan batik dari KICHI BATIK ini hadir dengandetail tali pinggang hitam yang 
                     bisa diikat ke depan atau belakang. Terbuat dari bahan katun dengan cara hand-stamp oleh 
                     pengrajin kain Indonesia, KITCHI BATIK Blouse Batik Mahija bisa membuat gayamu terlihat elegan',
                ],
                [
                    'Nama_Barang' => 'Sneakers MEN With Hidden Laces',
                    'Gambar' => 'gmb3.jpeg',
                    'Harga' => '575000',
                    'Stok' => '130',
                    'Bahan' => 'bahan kanvas',
                    'Deskripsi' => 'Original Zara
                    Available Size 40 41 42 43 44 45
                    
                    #sneakersputih
                    #sepatuzara
                    2200/820',
                ],
                [
                    'Nama_Barang' => 'Sepatu Wanita Moccasin',
                    'Gambar' => 'gmb4.jpg',
                    'Harga' => '150000',
                    'Stok' => '180',
                    'Bahan' => 'jelly',
                    'Deskripsi' => 'sepatu moccasin dari ZARA ini. Sepatu warna hitam mengkilap dengan model pita',
                ],
                [
                    'Nama_Barang' => 'Tas Wanita Elizabeth Original',
                    'Gambar' => 'gmb5.jpeg',
                    'Harga' => '455000',
                    'Stok' => '180',
                    'Bahan' => 'sintetis',
                    'Deskripsi' => 'Tas Elizabeth 100% Original
                    ✓Tas Emsio 100% Original 
                    ✓Cek stok sebelum membeli dan mohon cantumkan warna',
                ],
                [
                    'Nama_Barang' => 'Monia Handbag Pink',
                    'Gambar' => 'gmb6.jpg',
                    'Harga' => '550000',
                    'Stok' => '120',
                    'Bahan' => 'kulit sintetis',
                    'Deskripsi' => '- Kompartemen utama dengan restleting
                    - Kantong dalam dengan restleting
                    - Tempat handphone
                    - Dilengkapi dengan tali panjang yang dapat dilepas
                    
                    Dimensi: P 26 x L 10 x T 20 cm
                    SKU (simple) : 32AA6AC419C277GS
                    Petunjuk Perawatan : Simpan dengan silica gel',
                ],
                [
                    'Nama_Barang' => 'Enise Sling Bag Dark',
                    'Gambar' => 'gmb7.jpg',
                    'Harga' => '425000',
                    'Stok' => '135',
                    'Bahan' => 'Kulit sintetis',
                    'Deskripsi' => '- Kompartemen utama dengan restleting
                    - Kantong dalam dengan restleting
                    - Tempat handphone
                    - Dilengkapi dengan tali panjang yang dapat dilepas
                    
                    Dimensi: P 26 x L 10 x T 20 cm
                    SKU (simple) : 32AA6AC419C277GS
                    Petunjuk Perawatan : Simpan dengan silica gel',
                ],
                [
                    'Nama_Barang' => 'SEGIEMPAT MUMTAZ SERIES 4 ORIGINAL',
                    'Gambar' => 'gmb8.jpeg',
                    'Harga' => '25000',
                    'Stok' => '150',
                    'Bahan' => 'Voal',
                    'Deskripsi' => 'Assalamualaikum Kak ,
                    Silahkan di pilih untuk Jilbab Voal Motif Art Premium nya
                    
                    💖 Jilbab Segi Empat 
                    💖 Finishing Lasercut
                    💖 Proses Pengiriman Setiap Hari 
                    💖 Bahan Adem , Mudah digunakan , Motif Mewah
                    💖 Ready Stok Sehingga Aman , Untuk Reseller , Grosir , Dropshipper
                    
                    Detail Produk :
                    💖 Ukuran	: 110 cm x 110 cm 
                    💖 Berat	: 80 Gr , 1kg -+ 12 pcs',
                ],
                [
                    'Nama_Barang' => 'HIJAB Bergo Maryam',
                    'Gambar' => 'gmb9.jpeg',
                    'Harga' => '20000',
                    'Stok' => '200',
                    'Bahan' => 'Diamond Italiano',
                    'Deskripsi' => 'Kelebihan bahan :
                    1. Bagus tidak nerawang
                    2. Bahan lembut dan jatuh
                    3. Adem di pakai walau cuaca panas
                    
                    size :
                    Pajang depan : 65 cm
                    Panjang belakang : 75 cm
                    toleransi jahitan 3-5cm ya ka
                    Menutup dada
                    
                    finishing : jahit tepi no neci jadi lebih awet',
                ],
                [
                    'Nama_Barang' => 'Tunik Atasan Wania Terbaru',
                    'Gambar' => 'gmb10.jpeg',
                    'Harga' => '135000',
                    'Stok' => '125',
                    'Bahan' => ' KAOS COTTON COMBAT  20s (PREMIUM)',
                    'Deskripsi' => 'LONG TUNIK JUMBO NEUM ORIGINAL  ( KUALITAS )
                    JENIS :  LONG TUNIK   ( FOTO REAL )  ORIGINAL
                    
                     UKURAN : 
                     fit.   M / L. XL .XXl
                    LD.   M / L = 110 - 115 cm
                    LD.  XL = 115cm - 120 cm
                    LD.  XXL = 120cm - 125 cm
                    PB.  Depan. 120cm 
                    Belakang. 125cm
                    -  100% Produk Lokal / Handmade.
                    -  Kondisi :  100% Baru.
                    -  Dropship 100% Aman.',
                ],
            ]
        );
    }
}
