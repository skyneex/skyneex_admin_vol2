<?
include "../connect.php";
if ($logg=="admin") {

$idd = $_POST['idd'];
$zag = $_POST['zag']; $zag=htmlspecialchars($zag, ENT_QUOTES);
$txt = $_POST['txt']; $txt=htmlspecialchars($txt, ENT_QUOTES);
$polik1 = $_POST['polik1'];
$polik2 = $_POST['polik2'];
$polik3 = $_POST['polik3'];
$hs_dom = $_POST['hs_dom'];
?>

<?
$sql= "UPDATE 10Articles SET dd='$polik1', mm='$polik2', gg='$polik3', zag='$zag', text='$txt', hs_dom='$hs_dom' where id='$idd'";
mysql_query( $sql );
?>

<?}else echo "<script>window.location='/admin'</script>";?>