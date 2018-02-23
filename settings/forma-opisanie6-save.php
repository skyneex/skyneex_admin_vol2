<?
include "../connect.php";
if ($logg=="admin") {
$set1 = $_POST['set1']; $set1=htmlspecialchars($set1, ENT_QUOTES);
$set2 = $_POST['set2']; $set2=htmlspecialchars($set2, ENT_QUOTES);
$set3 = $_POST['set3']; $set3=htmlspecialchars($set3, ENT_QUOTES);

$sql="UPDATE site_settings SET si_kod1='$set1', si_kod2='$set2', si_kod3='$set3'";
mysql_query($sql);

}else echo "<script>window.location='/admin'</script>";
?>