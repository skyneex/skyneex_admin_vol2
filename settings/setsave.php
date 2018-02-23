<?
include "../connect.php";
if ($logg=="admin") {
$inf7 = $_POST['inf7'];
?>

<?
$sql = "UPDATE site_settings SET si_ipo = '$inf7'";
mysql_query( $sql );
?>

<?}else echo "<script>window.location='/admin'</script>";?>