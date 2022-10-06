<?php 

try {
     $db = new PDO("mysql:host=localhost;dbname=odev_db", "root", "");
} catch ( PDOException $e ){
     print $e->getMessage();
}

  if(isset($_GET['pid']))
{
 $query = $db->prepare("DELETE FROM sepet WHERE sepet_id = :id");
$delete = $query->execute(array(
   'id' => $_GET['pid']
));
}

?>
<?php $geldigi_sayfa = $_SERVER['HTTP_REFERER']; 
header("Refresh: 0; url=".$geldigi_sayfa.""); ?>