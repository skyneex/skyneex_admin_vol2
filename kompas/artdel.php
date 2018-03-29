<?
include "../connect.php";
if ($logg=="admin") {

$id = $_POST['id'];

$sql= "delete from 10Articles where id='$id'";
mysql_query( $sql );

$sql=mysql_query("select * from UserArticlesFoto where art_id='$id'");
while ($db=mysql_fetch_object($sql))
{
$foto=$db->foto;
$str1="../../img2/".$foto;
$str2="../../img3/".$foto;
if (file_exists($str1)) unlink($str1);
if (file_exists($str2)) unlink($str2);
};

$sql= "delete from UserArticlesFoto where art_id='$id'";
mysql_query( $sql );
?>

<?}else echo "<script>window.location='/admin'</script>";?>
