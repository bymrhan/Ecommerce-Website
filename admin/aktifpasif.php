<?php
if ($_POST) { //post var mı diye bakıyoruz
date_default_timezone_set('Europe/Istanbul');
$mesaj="";
$yil= date('Y');
try {
     $db = new PDO("mysql:host=localhost;dbname=muca_cv", "muca_cvk", "4GYUWaoMk6LO");
	 
} catch ( PDOException $e ){
     print $e->getMessage();
}
$db->query("SET CHARACTER SET utf8");


    //değişkenleri integer olarak alıyoruz
    $id = (int)$_POST['id'];
    $durum = (int)$_POST['durum'];

    //Güncellme sorgumuzu yazıyoruz
    $sorgu = $db->query("UPDATE ayar SET isdurumu=$durum WHERE  id=$id");

    //gerekli ise geriye değer döndürüyoruz
    echo "İş durumu değiştirildi.";
}
?>