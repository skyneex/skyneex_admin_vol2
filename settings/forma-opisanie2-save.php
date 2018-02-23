<?
include "../connect.php";
if ($logg=="admin") {
$set1 = $_POST['set1'];

$sql="UPDATE site_settings SET si_ops='$set1'";
mysql_query($sql);

}else echo "<script>window.location='/admin'</script>";
?>