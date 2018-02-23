<?
include "../connect.php";
if ($logg=="admin") {

$idd = $_POST['r_pr'];
$pre = $_POST['pre'];

$sql= "UPDATE 10Articles SET preor='$pre' where id='$idd'";
mysql_query( $sql );
?>

<?} else echo "Доступ запрещен!!!";?>