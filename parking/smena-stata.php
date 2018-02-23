<?
include "../connect.php";
if ($logg=="admin") {
$stkv = $_POST['stkv'];
$idd = $_POST['idd'];

if ($stkv==0) $stkv=1; else if ($stkv==1) $stkv=2; else if ($stkv==2) $stkv=0;

if ($stkv==0) {
$sql= "UPDATE ".$dtb." SET stat='$stkv', kl_rk1='', kl_rk2='', kl_rk3='', kl_rk5='', kl_imy='', kl_eml='', kl_tel='', kl_fir='' where id=$idd";
mysql_query( $sql );
} else {
$sql= "UPDATE ".$dtb." SET stat='$stkv' where id=$idd";
mysql_query( $sql );
};
?>

<?}else echo "<script>window.location='/admin'</script>";?>