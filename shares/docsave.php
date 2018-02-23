<?
include "../connect.php";
if ($logg=="admin") {

$idd = $_POST['idd'];
$zag = $_POST['zag']; $zag=htmlspecialchars($zag, ENT_QUOTES);
$polik1 = $_POST['polik1'];
$polik2 = $_POST['polik2'];
$polik3 = $_POST['polik3'];
?>

<?
$sql= "UPDATE UserArticlesFoto SET d_dd='$polik1', d_mm='$polik2', d_gg='$polik3', opisanie='$zag' where id='$idd'";
mysql_query( $sql );
?>
okkkk
<?} else echo "Доступ запрещен!!!";?>