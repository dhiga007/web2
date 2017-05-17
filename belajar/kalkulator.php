<?php 
class Kalkulator{
     //Membuat properti yang diperlukan
     var $hasil;
      
     //Membuat method yang diperlukan
     function tambah($x, $y){
          $this->hasil = $x + $y;
     }
 
     function kurang($x, $y){
          $this->hasil = $x - $y;
     }
 
     function kali($x, $y){
          $this->hasil = $x*$y;
     }
 
     function bagi($x, $y){
          $this->hasil = $x/$y;
     }
 
     function cetak(){
          echo "Nilai variabel hasil = ".$this->hasil."<br />";
     }
}
 
$x = 6;
$y = 3;
//Membuat objek dari class Kalkulator
$kalkulator = new Kalkulator();
 
//Melakukan operasi penjumlahan, menggunakan method tambah yang terdapat pada objek
echo "Operasi Penjumlahan ".$x." + ".$y."<br />";
$kalkulator->tambah($x, $y);
//Mencetak hasil penjumlahan yang telah dilakukan
$kalkulator->cetak();
 
//Melakukan operasi pengurangan, menggunakan method kurang yang terdapat pada objek
echo "Operasi Pengurangan ".$x." - ".$y."<br />";
$kalkulator->kurang($x, $y);
//Mencetak hasil pengurangan yang telah dilakukan
$kalkulator->cetak();
 
//Melakukan operasi perkalian, menggunakan method kali yang terdapat pada objek
echo "Operasi Perkalian ".$x." * ".$y."<br />";
$kalkulator->kali($x, $y);
//Mencetak hasil perkalian yang telah dilakukan
$kalkulator->cetak();
 
//Melakukan operasi pembagian, menggunakan method bagi yang terdapat pada objek
echo "Operasi Pembagian ".$x." / ".$y."<br />";
$kalkulator->bagi($x, $y);
//Mencetak hasil pembagian yang telah dilakukan
$kalkulator->cetak();
?>

<?php
class Mobil2{
     var $warna;
     var $merk;
     var $tipe;
      
     //Sesuaikan dengan nama class
     function Mobil2(){
          $this->warna = "Hitam";
          $this->merk = "Toyota";
          $this->tipe = "Sedan";     
     }
 
     function gantiWarna($warna){
          /*keyword $this mereferensikan ke variabel warna yang menjadi properti class (global)
          keyword ini yang menjadi penanda bagi intepreter PHP. Mana variabel warna yg menjadi
          parameter masukan method (local), dan yang menjadi properti class (global). */
          $this->warna = $warna;
     }
 
     function gantiMerk($merk){
          $this->merk = $merk;
     }
 
     function gantiTipe($tipe){
          $this->tipe = $tipe;
     }
 
     function perlihatkanMobil(){
          echo "Mobil ".$this->tipe."<br />";
          echo "Mobil ini bermerk ".$this->merk.", berwarna ".$this->warna."<br /><br />";
     }
}
 
//Menbuat objek dari class
$mobil2 = new Mobil2();
echo "Mobil Pertama Saya <br />";
$mobil2->perlihatkanMobil();
 
//Mengganti nilai properti, menggunakan method yang telah dibuat
$mobil2->gantiTipe("Balap");
$mobil2->gantiMerk("Ferrari");
$mobil2->gantiWarna("Merah");
//Cetak perubahan
echo "Mobil Kedua Saya <br />";
$mobil2->perlihatkanMobil();
?>