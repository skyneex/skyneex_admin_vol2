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
(kod, zag, cat, dd, mm, gg, hh, nn, text, preor)
 VALUES ($kod,'Без названия','building','$dat1','$dat2','$dat3','$dat4','$dat5','Новость об этапе строительства на стадии создания!',9999)";
 mysql_query( $sql );
?>


<?}else echo "<script>window.location='/admin'</script>";?>



