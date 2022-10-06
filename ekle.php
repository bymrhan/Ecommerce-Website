<?php 

try {
     $db = new PDO("mysql:host=localhost;dbname=odev_db", "root", "");
} catch ( PDOException $e ){
     print $e->getMessage();
}

$id=$_GET['id'];
$query = $db->query("SELECT * FROM sepet WHERE id='".$id."'", PDO::FETCH_ASSOC);
	if ($query->rowCount()) {
		foreach( $query as $row ){
		$adet = $row['adet'];
		 $adet++;
		}
		$query = $db->prepare("UPDATE sepet SET

adet = :adet
    WHERE id ='".$id."'");
$update = $query->execute(array(
	
	 "adet" => $adet
	 ));
	}
	else {
  
	$adet = "1";
	
	$query = $db->prepare("INSERT INTO sepet SET

id = :id,
adet = :adet

");
$update = $query->execute(array(
     "adet" => $adet,
	 "id" => $id
));
if ( $update ){
     $mesaj="basarili";
}
else
{
    $mesaj="basarisiz";
}

	}
?>
<?php $geldigi_sayfa = $_SERVER['HTTP_REFERER']; 
header("Refresh: 0; url=".$geldigi_sayfa.""); ?>