<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php'; // Meta data and header ?>
<?php include 'inc/nav.php'; // Navigation content ?>
<?php 
error_reporting(E_ALL & ~E_NOTICE);
date_default_timezone_set('Europe/Istanbul');
$mesaj="";
$yil= date('Y');
try {
      $db = new PDO("mysql:host=localhost;dbname=odev_db", "root", "");
	 
} catch ( PDOException $e ){
     print $e->getMessage();
}
$db->query("SET CHARACTER SET utf8");
$id=$_GET['id'];
$query = $db->query("SELECT * FROM kitap WHERE id='".$id."'", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
	$kitap_adi = $row['kitap_adi'];
	$kitap_turu=$row['kitap_turu'];
	$yazar=$row['yazar'];
	$sayfa=$row['sayfa'];
	$yili=$row['yili'];
	$dili=$row['dili'];
	$fiyat=$row['fiyat'];
	$aciklama=$row['aciklama'];
	$barkod=$row['barkod'];
	$kapak_foto=$row['kapak_foto'];

     }
}

if(isset($_POST['guncelle']))
{
   
    $kitap_adi = $_POST['kitap_adi'];
	$kitap_turu=$_POST['kitap_turu'];
	$yazar=$_POST['yazar'];
	$sayfa=$_POST['sayfa'];
	$yili=$_POST['yili'];
	$dili=$_POST['dili'];
	$fiyat=$_POST['fiyat'];
	$barkod=$_POST['barkod'];
	$aciklama=$_POST['aciklama'];
	$kapak_foto=$_POST['kapak_foto'];
	$query = $db->prepare("UPDATE kitap SET
kitap_adi = :kitap_adi,
kitap_turu = :kitap_turu,
yazar = :yazar,
sayfa = :sayfa,
yili = :yili,
dili = :dili,
fiyat = :fiyat,
barkod = :barkod,
aciklama = :aciklama,
kapak_foto = :kapak_foto
    WHERE id ='".$id."'");
$update = $query->execute(array(
     "kitap_adi" => $kitap_adi,
	 "kitap_turu" => $kitap_turu,
	 "yazar" => $yazar,
	 "sayfa" => $sayfa,
	 "yili" => $yili,
	 "dili" => $dili,
	 "fiyat" => $fiyat,
     "barkod" => $barkod,
	 "aciklama" => $aciklama,
	 "kapak_foto" => $kapak_foto
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




<!-- Page Content -->
<div id="page-content">
    <!-- Navigation info -->
    <ul id="nav-info" class="clearfix">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="javascript:void(0)">Forms</a></li>
        <li class="active"><a href="">Components</a></li>
    </ul>
    <!-- END Navigation info -->

    <!-- Text Inputs -->
    <form action="kitapduzenle.php?id=<?php echo $id; ?>" method="POST" class="form-horizontal form-box">
        <h4 class="form-box-header">Eğitim Bilgileri</h4>
        <div class="form-box-content">
            <?php if($mesaj=="basarili")
            { 
                ?>
            <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>Başarılı!</strong> Tüm Bilgiler Güncellendi.!
            </div>
            <?php } elseif($mesaj=="basarisiz") { ?>
            <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>Tühhh!</strong> Veriyi Sildiniz!
            </div>
            <?php } ?>
            <!-- Input Sizes -->
             <div class="form-group">
                <label class="control-label col-md-2" for="example-input-small">kitap Adi</label>
                <div class="col-md-4">
                    <input type="text" id="example-input-small" name="kitap_adi" class="form-control input-sm" value="<?php echo $kitap_adi; ?>">
                </div>
            </div>
			 <div class="form-group">
                <label class="control-label col-md-2" for="example-input-small">kitap Türü</label>
                <div class="col-md-4">
                    <input type="text" id="example-input-small"  class="form-control input-sm" value="<?php echo $kitap_turu; ?>">
                </div>
            </div>
			<div class="form-group">
                <label class="control-label col-md-2" for="example-input-small">Katagori</label>
                <div class="col-md-4">
                    <select name="kitap_turu">		
<option   value="<?php echo $kitap_turu; ?>" selected><?php echo $kitap_turu; ?></option>					
<?php		
$query = $db->query("SELECT * FROM katagoriler", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
 ?>						
						<option   value="<?php echo $row['k_katagori']; ?>"><?php echo $row['k_katagori']; ?></option>
					
						<?php   }
}						
?>

	
						</select>            
                </div>
            </div>
			<div class="form-group">
                <label class="control-label col-md-2" for="example-input-small">Yıl</label>
                <div class="col-md-4">
                    <input type="text" id="example-input-small" name="yili" class="form-control input-sm" value="<?php echo $yili; ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2" for="example-input-small">Yazar</label>
                <div class="col-md-4">
                    <input type="text" id="example-input-small" name="yazar" class="form-control input-sm" value="<?php echo $yazar; ?>">
                </div>
            </div>
			<div class="form-group">
                <label class="control-label col-md-2" for="example-input-small">Sayfa</label>
                <div class="col-md-4">
                    <input type="text" id="example-input-small" name="sayfa" class="form-control input-sm" value="<?php echo $sayfa; ?>">
                </div>
            </div>			
			<div class="form-group">
                <label class="control-label col-md-2" for="example-input-small">dili</label>
                <div class="col-md-4">
                    <input type="text" id="example-input-small" name="dili" class="form-control input-sm" value="<?php echo $dili; ?>">
                </div>
            </div>
            
			<div class="form-group">
                <label class="control-label col-md-2" for="example-input-small">fiyat</label>
                <div class="col-md-4">
                    <input type="text" id="example-input-small" name="fiyat" class="form-control input-sm" value="<?php echo $fiyat; ?>">
                </div>
            </div>
			<div class="form-group">
                <label class="control-label col-md-2" for="example-input-small">barkod</label>
                <div class="col-md-4">
                    <input type="text" id="example-input-small" name="barkod" class="form-control input-sm" value="<?php echo $barkod; ?>">
                </div>
            </div>
			
			<div class="form-group">
                        <label for="">Kitap aciklama</label>
                        <textarea class="form-control product_description" name="aciklama" rows="8" 
                                  cols="50" ><?php echo $aciklama; ?></textarea>
             </div>
			<div class="form-group">
                <label class="control-label col-md-2" for="example-input-small">Kapak Foto</label>
                <div class="col-md-4">
				<input type="text" id="example-input-small" name="kapak_foto" class="form-control input-sm" value="<?php echo $kapak_foto; ?>">         
                </div>
            </div>
            
            <div class="form-group form-actions">
                <div class="col-md-10 col-md-offset-2">
                    <input type="submit" name="guncelle" value="Kaydet">
                </div>
            </div>

        </div>
    </form>
    <!-- END Input Grid -->
</div>
<!-- END Page Content -->
<style>
    .btn-success {
        display: flex;
        width: 70px;
        padding-top: 15px;
    }
</style>
<?php include 'inc/footer.php'; // Footer and scripts ?>

<!-- ckeditor.js, load it only in the page you would like to use CKEditor (it's a heavy plugin to include it with the others!) -->
<script src="js/ckeditor/ckeditor.js"></script>

<?php include 'inc/bottom.php'; // Close body and html tags ?>