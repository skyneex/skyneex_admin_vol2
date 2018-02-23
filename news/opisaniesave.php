<?
include "../connect.php";
if ($logg=="admin") {

$idd = $_POST['idd'];
$opis = $_POST['opis']; $opis=htmlspecialchars($opis, ENT_QUOTES);
?>

<?
$sql= "UPDATE UserArticlesFoto SET opisanie='$opis' where id='$idd'";
mysql_query( $sql );
?>

<?}else echo "<script>window.location='/admin'</script>";?>

