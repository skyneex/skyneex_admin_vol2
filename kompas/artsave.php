<?
include "../connect.php";
if ($logg=="admin") {

$idd = $_POST['idd'];
$zag = $_POST['zag']; $zag=htmlspecialchars($zag, ENT_QUOTES);
$hs_dom = $_POST['hs_dom'];
$hs_dd = $_POST['hs_dd'];
$hs_mm = $_POST['hs_mm'];
?>

<?
$sql= "UPDATE 10Articles SET dd='$hs_dd', mm='$hs_mm', zag='$zag', hs_dom='$hs_dom' where id='$idd'";
mysql_query( $sql );
?>

<?}else echo "<script>window.location='/admin'</script>";?>