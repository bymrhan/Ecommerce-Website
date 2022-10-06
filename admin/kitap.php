<?php include 'inc/config.php'; // Configuration php file
ob_start();
session_start();
if(!isset($_SESSION['oturum']))
{
    header("Location: giris.php");
}
error_reporting(E_ALL & ~E_NOTICE);
?>
<?php include 'inc/top.php'; // Meta data and header ?>
<?php include 'inc/nav.php'; // Navigation content ?>
<?php 
try {
      $db = new PDO("mysql:host=localhost;dbname=odev_db", "root", "");
	 
} catch ( PDOException $e ){
     print $e->getMessage();
}
$db->query("SET CHARACTER SET utf8");

if(isset($_GET['id']))
{
    $query = $db->prepare("DELETE FROM kitap WHERE id = :id");
$delete = $query->execute(array(
   'id' => $_GET['id']
));
if($delete)
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
        <li><a href="javascript:void(0)">Tables</a></li>
        <li class="active"><a href="">DataTables</a></li>
    </ul>
    <!-- END Navigation info -->

    <!-- Datatables -->
    <h3 class="page-header page-header-top">Tüm Kitaplar</h3>
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
    <table id="example-datatables" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th class="cell-small">#id</th>
                <th class="cell-small text-center hidden-xs hidden-sm">#id</th>
                <th><i class="fa fa-user"></i> Kapak Resim</th>
                <th class="hidden-xs hidden-sm hidden-md"><i class="fa fa-envelope-o"></i> Kitap Adı</th>
                <th><i ></i> Kitap Yazar</th>
                <th><i ></i> Katagori</th>
				<th><i ></i> Fiyat</th>
				<th><i ></i> Barkod No</th>
            </tr>
        </thead>
        <tbody>
            <?php
$query = $db->query("SELECT * FROM kitap", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
 ?>

            <tr>
                <td class="text-center">
                    <div class="btn-group">
                        <a href="kitapduzenle.php?id=<?php echo $row['id']; ?>" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                        <a href="kitap.php?id=<?php echo $row['id']; ?>" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                    </div>
                </td>
                <td class="text-center hidden-xs hidden-sm"><?php echo $row['id']; ?></td>
                <td> <img style="height:100px;"src="<?php echo $row['kapak_foto']; ?>" alt=""></td>
                <td class="hidden-xs hidden-sm hidden-md"><?php echo $row['kitap_adi']; ?></td>
                <td><?php echo $row['yazar']; ?></td>
				<td><?php echo $row['kitap_turu']; ?></td>
				<td><?php echo $row['fiyat']; ?> TL</td>
                <td><?php echo $row['barkod']; ?></td>
				
            </tr>
            
            <?php   }
}
?>
        </tbody>
    </table>
    <!-- END Datatables -->

    <!-- END Datatables in the grid -->
</div>
<!-- END Page Content -->

<?php include 'inc/footer.php'; // Footer and scripts ?>

<!-- Javascript code only for this page -->
<script>
    $(function(){
        /* Initialize Datatables */
        $('#example-datatables').dataTable({ columnDefs: [ { orderable: false, targets: [ 0 ] } ] });
        $('#example-datatables2').dataTable();
        $('#example-datatables3').dataTable();
        $('.dataTables_filter input').attr('placeholder', 'Search');
    });
</script>

<?php include 'inc/bottom.php'; // Close body and html tags ?>