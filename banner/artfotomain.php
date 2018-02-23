<?
include "../connect.php";
if ($logg=="admin") {

$id = $_POST['id'];
$id2 = $_POST['id2'];

$sql= "UPDATE UserArticlesFoto SET mainfoto=0 where art_id='$id2'";
mysql_query( $sql );

$sql= "UPDATE UserArticlesFoto SET mainfoto=1 where id='$id'";
mysql_query( $sql );
?>

<script type="text/javascript">
$("#artfoto").load("artfoto.php",{idnn:<?echo $id2;?>}, function(){$('#zagr').css('display','none');});
</script>

<?} else echo "Доступ запрещен!!!";?>








