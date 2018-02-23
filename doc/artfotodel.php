<?
include "../connect.php";
if ($logg=="admin") {

$idnn = $_POST['idnn'];
$id = $_POST['id'];

$foto="";
$sql=mysql_query("select * from UserArticlesFoto where id='$id' and art_id='$idnn'");
while ($db=mysql_fetch_object($sql))
{
$foto=$db->foto;
};

if($foto!="") {
$str1="../../img2/".$foto;
$str2="../../img3/".$foto;
if (file_exists($str1)) unlink($str1);
if (file_exists($str2)) unlink($str2);
};

if($foto!="") {
$sql= "delete from UserArticlesFoto where id='$id' and art_id='$idnn'";
mysql_query( $sql );
};
?>

<?}else echo "<script>window.location='/admin'</script>";?>
