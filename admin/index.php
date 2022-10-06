<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php'; // Meta data and header ?>
<?php include 'inc/nav.php'; // Navigation content ?>
<?php 
try {
     $db = new PDO("mysql:host=localhost;dbname=odev_db", "root", "");
} catch ( PDOException $e ){
     print $e->getMessage();
}
 $query = $db->query("SELECT COUNT(id) as toplamkitap FROM kitap", PDO::FETCH_ASSOC); 
	 if ( $query->rowCount() ){
     foreach( $query as $row ){ $toplamkitap=$row['toplamkitap']; } } 

?>

<!-- Page Content -->
<div id="page-content">
    <!-- Navigation info -->
    <ul id="nav-info" class="clearfix">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li class="active"><a href="">Admin Panel</a></li>
    </ul>
    <!-- END Navigation info -->

    <!-- Nav Dash -->
    <ul class="nav-dash">
        <li>
            <a href="javascript:void(0)" data-toggle="tooltip" title="Users" class="animation-fadeIn">
                <i class="fa fa-user"></i>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" data-toggle="tooltip" title="Comments" class="animation-fadeIn">
                <i class="fa fa-comments"></i> <span class="badge badge-success">3</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" data-toggle="tooltip" title="Calendar" class="animation-fadeIn">
                <i class="fa fa-calendar"></i> <span class="badge badge-inverse">5</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" data-toggle="tooltip" title="Photos" class="animation-fadeIn">
                <i class="fa fa-camera-retro"></i>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" data-toggle="tooltip" title="Projects" class="animation-fadeIn">
                <i class="fa fa-paperclip"></i>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" data-toggle="tooltip" title="Tasks" class="animation-fadeIn">
                <i class="fa fa-tasks"></i> <span class="badge badge-warning">1</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" data-toggle="tooltip" title="Reader" class="animation-fadeIn">
                <i class="fa fa-book"></i>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" data-toggle="tooltip" title="Settings" class="animation-fadeIn">
                <i class="fa fa-cogs"></i>
            </a>
        </li>
    </ul>
    <!-- END Nav Dash -->

    <!-- Tiles -->
    <!-- Row 1 -->
    <div class="dash-tiles row">
        <!-- Column 1 of Row 1 -->
        <div class="col-sm-3">
            <!-- Total Users Tile -->
            <div class="dash-tile dash-tile-ocean clearfix animation-pullDown">
                <div class="dash-tile-header">
                    <div class="dash-tile-options">
                        <div class="btn-group">
                            <a href="kitap.php" class="btn btn-default" data-toggle="tooltip" title="Kitapları düzenle"><i class="fa fa-cog"></i></a>
                            <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Statistics"><i class="fa fa-bar-chart-o"></i></a>
                        </div>
                    </div>
                    Toplam Kitap Sayısı
                </div>
                <div class="dash-tile-icon"><i class="fa fa-book"></i></div>
                <div class="dash-tile-text"><?php echo $toplamkitap=$row['toplamkitap']; ?> Adet.</div>
            </div>
            <!-- END Total Users Tile -->

            
        </div>
        <!-- END Column 1 of Row 1 -->
<div class="col-sm-3">
            <!-- Total Sales Tile -->
            <div class="dash-tile dash-tile-flower clearfix animation-pullDown">
                <div class="dash-tile-header">
                    <div class="dash-tile-options">
                        <div class="btn-group">
                            <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="View new orders"><i class="fa fa-shopping-cart"></i></a>
                            <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Statistics"><i class="fa fa-bar-chart-o"></i></a>
                        </div>
                    </div>
                    Toplam Sipariş
                </div>
                <div class="dash-tile-icon"><i class="fa fa-tags"></i></div>
                <div class="dash-tile-text"> 0 Adet</div>
            </div>
            <!-- END Total Sales Tile -->
        </div>
		
		<div class="col-sm-3">
            <!-- Popularity Tile -->
            <div class="dash-tile dash-tile-oil clearfix animation-pullDown">
                <div class="dash-tile-header">
                    <div class="dash-tile-options">
                        <div class="btn-group">
                            <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="What's changed?"><i class="fa fa-fire"></i></a>
                            <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Share"><i class="fa fa-share-square-o"></i></a>
                        </div>
                    </div>
                    Gelen Mesaj sayısı
                </div>
				 <?php
$query = $db->query("SELECT count(id) as toplam FROM iletisimform", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){ $toplammesaj=$row['toplam'];
 ?>
                <div class="dash-tile-icon"><i class="fa fa-globe"></i></div>
                <div class="dash-tile-text"><?php echo $toplammesaj; ?></div>
				<?php }}
													?>	
            </div>
            <!-- END Popularity Tile -->           
        </div>
       

        
        
    </div>
    <!-- END Row 1 -->

    <!-- Row 2 -->
    <div class="row">
        <!-- Column 1 of Row 2 -->
      
        <!-- END Column 1 of Row 2 -->

        <!-- Column 2 of Row 2 -->
      
        <!-- END Column 2 of Row 2 -->

        
    </div>
    <!-- END Row 2 -->

    <!-- Row 3 -->
    <div class="row">
        <!-- Column 1 of Row 3 -->
        <div class="col-sm-6">
             <!-- Datatables Tile -->
            <div class="dash-tile dash-tile-2x" style="width: 200%;">
                <div class="dash-tile-header">
                   
                    <i class="fa fa-comments"></i> Mesajlar
                </div>
                <div class="dash-tile-content">
                    <div class="dash-tile-content-inner-fluid">
                        <table id="dash-example-orders" class="table table-striped table-bordered table-condensed">
                            <thead>
                                <tr>
                                    <th class="cell-small"></th>
                                    <th class="hidden-xs hidden-sm hidden-md">#id</th>
                                    <th><i class="fa fa-user"></i> Ad</th>
                                    <th><i class="fa fa-envelope"></i> E - mail</th>
                                    <th><i class="fa fa-phone"></i> Telefon</th>
									<th><i class="fa fa-bolt"></i> Mesaj İçeri</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                                 <?php
$query = $db->query("SELECT * FROM iletisimform", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
 ?>
                                <tr>
                                    <td class="text-center">
                                        
                                    </td>

 
                                    <td class="hidden-xs hidden-sm hidden-md"><?php echo $row['id']; ?></td>
                                    <td><a href="javascript:void(0)"><?php echo $row['ad']; ?></a></td>
                                    <td class="hidden-xs hidden-sm hidden-md"><a href="javascript:void(0)"><?php echo $row['mail']; ?></a></td>
                                   <td><a href="javascript:void(0)"><?php echo $row['telefon']; ?></a></td>
								   <td><a href="javascript:void(0)"><?php echo $row['mesaj']; ?></a></td>
                                    
                                      
                                </tr>
                              <?php } }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END Datatables Tile -->
        </div>
        <!-- END Column 1 of Row 3 -->

       
    </div>
    <!-- END Row 3 -->
    <!-- END Tiles -->
</div>
<!-- END Page Content -->

<?php include 'inc/footer.php'; // Footer and scripts ?>

<!-- Javascript code only for this page -->
<script>
    $(function(){
        // Initialize dash Datatables
        $('#dash-example-orders').dataTable({
            columnDefs: [ { orderable: false, targets: [ 0 ] } ],
            pageLength: 6,
            lengthMenu: [[6, 10, 30, -1], [6, 10, 30, "All"]]
        });
        $('.dataTables_filter input').attr('placeholder', 'Search');

        // Dash example stats
        var dashChart = $('#dash-example-stats');

        var dashChartData1 = [
            [0, 200],
            [1, 250],
            [2, 360],
            [3, 584],
            [4, 1250],
            [5, 1100],
            [6, 1500],
            [7, 1521],
            [8, 1600],
            [9, 1658],
            [10, 1623],
            [11, 1900],
            [12, 2100],
            [13, 1700],
            [14, 1620],
            [15, 1820],
            [16, 1950],
            [17, 2220],
            [18, 1951],
            [19, 2152],
            [20, 2300],
            [21, 2325],
            [22, 2200],
            [23, 2156],
            [24, 2350],
            [25, 2420],
            [26, 2480],
            [27, 2320],
            [28, 2380],
            [29, 2520],
            [30, 2590]
        ];
        var dashChartData2 = [
            [0, 50],
            [1, 180],
            [2, 200],
            [3, 350],
            [4, 700],
            [5, 650],
            [6, 700],
            [7, 780],
            [8, 820],
            [9, 880],
            [10, 1200],
            [11, 1250],
            [12, 1500],
            [13, 1195],
            [14, 1300],
            [15, 1350],
            [16, 1460],
            [17, 1680],
            [18, 1368],
            [19, 1589],
            [20, 1780],
            [21, 2100],
            [22, 1962],
            [23, 1952],
            [24, 2110],
            [25, 2260],
            [26, 2298],
            [27, 1985],
            [28, 2252],
            [29, 2300],
            [30, 2450]
        ];

        // Initialize Chart
        $.plot(dashChart, [
            { data: dashChartData1, lines: { show: true, fill: true, fillColor: { colors: [{ opacity: 0.05 }, { opacity: 0.05 }] } }, points: { show: true }, label: 'All Visits' },
            { data: dashChartData2, lines: { show: true, fill: true, fillColor: { colors: [{ opacity: 0.05 }, { opacity: 0.05 }] } }, points: { show: true }, label: 'Unique Visits' } ],
            {
                legend: {
                    position: 'nw',
                    backgroundColor: '#f6f6f6',
                    backgroundOpacity: 0.8
                },
                colors: ['#555555', '#db4a39'],
                grid: {
                    borderColor: '#cccccc',
                    color: '#999999',
                    labelMargin: 5,
                    hoverable: true,
                    clickable: true
                },
                yaxis: {
                    ticks: 5
                },
                xaxis: {
                    tickSize: 2
                }
            }
        );

        // Create and bind tooltip
        var previousPoint = null;
        dashChart.bind("plothover", function (event, pos, item) {

            if (item) {
                if (previousPoint !== item.dataIndex) {
                    previousPoint = item.dataIndex;

                    $("#tooltip").remove();
                    var x = item.datapoint[0],
                        y = item.datapoint[1];

                    $('<div id="tooltip" class="chart-tooltip"><strong>' + y +'</strong> visits</div>')
                        .css( { top: item.pageY - 30, left: item.pageX + 5 })
                        .appendTo("body")
                        .show();
                }
            }
            else {
                $("#tooltip").remove();
                previousPoint = null;
            }
        });
    });
</script>

<?php include 'inc/bottom.php'; // Close body and html tags ?>