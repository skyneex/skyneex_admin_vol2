<?
include "../connect.php";
if ($logg=="admin") {

$inf1 = $_POST['inf1'];
$inf2 = $_POST['inf2']; $inf2=str_replace(" ","",$inf2);
$inf3 = $_POST['inf3'];
$idd = $_POST['idd'];
$inf10 = $_POST['inf10'];
$inf11 = $_POST['inf11']; $inf11=htmlspecialchars($inf11, ENT_QUOTES);
$inf12 = $_POST['inf12'];
$typekv = $_POST['typekv'];
$studio = $_POST['studio'];

$kl_imy = $_POST['kl_imy'];
$kl_eml = $_POST['kl_eml'];
$kl_tel = $_POST['kl_tel'];
$kl_fir = $_POST['kl_fir'];
$kl_rk4 = $_POST['kl_rk4'];
$kl_rk5 = $_POST['kl_rk5'];
?>

<?
if ($inf3==0) {
$sql= "UPDATE ".$dtb." SET plosh='$inf1', cena='$inf2', stat='$inf3', kl_rk1='', kl_rk2='', kl_rk3='', kl_rk5='', kl_imy='', kl_eml='', kl_tel='', kl_fir='', kolvo='$typekv', kl_rk6='$kl_rk6', kl_rk4='$kl_rk4', studio='$studio' where id='$idd'";
mysql_query( $sql );
} else {
$sql= "UPDATE ".$dtb." SET plosh='$inf1', cena='$inf2', stat='$inf3', kl_rk1='$inf10', kl_rk2='$inf11', kl_rk3='$inf12', kl_rk4='$kl_rk4', kl_rk5='$kl_rk5', kl_imy='$kl_imy', kl_eml='$kl_eml', kl_tel='$kl_tel', kl_fir='$kl_fir', kolvo='$typekv', studio='$studio' where id='$idd'";
mysql_query( $sql );
};
?>

<?}else echo "<script>window.location='/admin'</script>";?>