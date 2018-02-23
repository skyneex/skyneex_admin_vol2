<?
include "../connect.php";
if ($logg=="admin") {

$idd = $_POST['idd'];
$zag = $_POST['zag'];
$polik1 = $_POST['polik1'];
$polik2 = $_POST['polik2'];
$polik3 = $_POST['polik3'];
$doc_tip = $_POST['doc_tip'];
$opisanie2 = $_POST['opisanie2'];
$ochered = $_POST['ochered'];
?>

<?
$sql= "UPDATE UserArticlesFoto SET d_dd='$polik1', d_mm='$polik2', d_gg='$polik3', opisanie='$zag', doc_tip=$doc_tip, opisanie2='$opisanie2', ochered='$ochered' where id='$idd'";
mysql_query( $sql );
?>

<?}else echo "<script>window.location='/admin'</script>";?>