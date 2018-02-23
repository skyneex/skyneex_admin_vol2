<?
include "../connect.php";
if ($logg=="admin") {

$idd = $_POST['r_pr'];
$pre = $_POST['pre'];

$sqll="select * from 10Articles where preor>=$pre and cat='building' and id<>$idd order by preor limit 1";
$sql=mysql_query($sqll);
while ($db=mysql_fetch_object($sql))
{
$preor=$db->preor;
};
$preor=$preor+1;
?>

<?
$sql= "UPDATE 10Articles SET preor='$preor' where id='$idd'";
mysql_query( $sql );
?>

<?} else echo "Доступ запрещен!!!";?>