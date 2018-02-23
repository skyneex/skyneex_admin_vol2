<?
include "../connect.php";
if ($logg=="admin") {

$idd = $_POST['idd'];
$opis = $_POST['opis'];
?>

<?
$sql= "UPDATE UserArticlesFoto SET opisanie='$opis' where id='$idd'";
mysql_query( $sql );
?>

<?} else echo "Доступ запрещен!!!";?>