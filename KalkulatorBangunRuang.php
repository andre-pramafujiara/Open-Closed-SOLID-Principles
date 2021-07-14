<?php

interface PayableInterface
{
    public function hitungBangunRuang();
}

class PersegiPanjang implements PayableInterface{
    

    public function hitungBangunRuang(){

        $satuan = [10,8,0,0];
        $hasil = $satuan[0] * $satuan[1] ;
     
        echo "</br> Bangun Ruang = Luas Persegi Panjang </br>";
        echo " Panjang = $satuan[0] m</br>";
        echo " Lebar = $satuan[1] m</br>";
        echo " Luas Persegi Panjang = $hasil m2 </br>";
    }
}

class Bola implements PayableInterface{
    public $phi = 3.14;
    

    public function hitungBangunRuang(){
        $phi = 3.14;
    
        $satuan = [0,0,0,7];
        $hasil = 4/3 * $phi * $satuan[3] * $satuan[3] * $satuan[3];
     
        echo "</br> Bangun Ruang = Volume Bola </br>";
        echo " Panjang Jari-jari = $satuan[3] m </br>";
        echo " Volume Bola = $hasil m3 </br>";
    }
}

class Kerucut implements PayableInterface{
    

    public function hitungBangunRuang(){
        $phi = 3.14;
        $satuan = [0,0,5,7];
        $hasil = 1/3 * $phi * $satuan[3] * $satuan[3] * $satuan[2];
     
        echo "</br> Bangun Ruang = Volume Kerucut </br>";
        echo " Panjang Jari-jari = $satuan[3] m </br>";
        echo " Tinggi Kerucut = $satuan[2] m </br>";
        echo " Volume Kerucut = $hasil m3 </br>";
    }
}

class Kubus implements PayableInterface{
    

    public function hitungBangunRuang(){

        $satuan = [10,0,0,0];
        $hasil = $satuan[0] * $satuan[0] * $satuan[0];
     
        echo "</br> Bangun Ruang = Volume Kubus </br>";
        echo " Panjang Rusuk = $satuan[0] m </br>";
        echo " Volume Kubus = $hasil m3 </br>";
    }
}

class Lingkaran implements PayableInterface{
    

    public function hitungBangunRuang(){
        $phi = 3.14;
        $satuan = [0,0,0,14];
        $hasil = 2 * $phi * $satuan[3];
     
        echo "</br> Bangun Ruang = Keliling Lingkaran </br>";
        echo " Panjang Jari-jari = $satuan[3] m </br>";
        echo " Keliling Lingkaran = $hasil m </br>";
    }
}

class KalkulatorBangunRuangFactory
{
    public function initializeKalkulatorBangunRuang($type)
    {
        if ($type == 'luaspersegipanjang') {
            return new PersegiPanjang();
        }
        if ($type == 'volumebola') {
            return new Bola();
        }
        if ($type == 'volumekerucut') {
            return new Kerucut();
        }
        if ($type == 'volumekubus') {
            return new Kubus();
        }
        if ($type == 'kelilinglingkaran') {
            return new Lingkaran();
        }
    }
}

$pilihanKalkulatorBangunRuang1 = 'luaspersegipanjang';
$pilihanKalkulatorBangunRuang2 = 'volumebola';
$pilihanKalkulatorBangunRuang3 = 'volumekerucut';
$pilihanKalkulatorBangunRuang4 = 'volumekubus';
$pilihanKalkulatorBangunRuang5 = 'kelilinglingkaran';

$kalkulatorBangunRuangFactory = new KalkulatorBangunRuangFactory();

$kalkulatorBangunRuang = $kalkulatorBangunRuangFactory->initializeKalkulatorBangunRuang($pilihanKalkulatorBangunRuang1);
$hasilKalkulatorBangunRuang = $kalkulatorBangunRuang->hitungBangunRuang();
print_r($hasilKalkulatorBangunRuang );

$kalkulatorBangunRuang = $kalkulatorBangunRuangFactory->initializeKalkulatorBangunRuang($pilihanKalkulatorBangunRuang2);
$hasilKalkulatorBangunRuang = $kalkulatorBangunRuang->hitungBangunRuang();
print_r($hasilKalkulatorBangunRuang );

$kalkulatorBangunRuang = $kalkulatorBangunRuangFactory->initializeKalkulatorBangunRuang($pilihanKalkulatorBangunRuang3);
$hasilKalkulatorBangunRuang = $kalkulatorBangunRuang->hitungBangunRuang();
print_r($hasilKalkulatorBangunRuang );

$kalkulatorBangunRuang = $kalkulatorBangunRuangFactory->initializeKalkulatorBangunRuang($pilihanKalkulatorBangunRuang4);
$hasilKalkulatorBangunRuang = $kalkulatorBangunRuang->hitungBangunRuang();
print_r($hasilKalkulatorBangunRuang );

$kalkulatorBangunRuang = $kalkulatorBangunRuangFactory->initializeKalkulatorBangunRuang($pilihanKalkulatorBangunRuang5);
$hasilKalkulatorBangunRuang = $kalkulatorBangunRuang->hitungBangunRuang();
print_r($hasilKalkulatorBangunRuang );