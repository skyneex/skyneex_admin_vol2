<?
include "../connect.php";
if ($logg=="admin") {
?>

<?
$dat1 = $_POST['dat1'];
$dat2 = $_POST['dat2'];
$dat3 = $_POST['dat3'];
$dat4 = $_POST['dat4'];
$dat5 = $_POST['dat5'];

$sql= "INSERT INTO 10Articles
(kod, zag, cat, dd, mm, gg, hh, nn, text)
 VALUES ($kod,'Без названия','shares','$dat1','$dat2','$dat3','$dat4','$dat5','Новость на стадии создания!')";
 mysql_query( $sql );
?>


<?} else echo "Доступ запрещен!!!";?>



