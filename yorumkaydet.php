<?php 

try {
     $db = new PDO("mysql:host=localhost;dbname=odev_db", "root", "");
} catch ( PDOException $e ){
     print $e->getMessage();
}


$id=$_GET['id'];
if(isset($_POST['kaydet']))
{	$k_id=$_GET['id'];
	$yorum=$_POST['yorum'];
	$vote=$_POST['vote'];
    $ad = $_POST['ad'];
	$mail=$_POST['mail'];

	
	
	$query = $db->prepare("INSERT INTO yorum SET 
k_id = :id,
vote = :vote,
yorum = :yorum,
ad = :ad,
mail = :mail
");
$update = $query->execute(array(
	"id" => $k_id,
	"vote" => $vote,
	"yorum" => $yorum,
	"ad" => $ad,
    "mail" => $mail
    
));
}
?>
<?php $geldigi_sayfa = $_SERVER['HTTP_REFERER']; 
header("Refresh: 0; url=".$geldigi_sayfa.""); ?>