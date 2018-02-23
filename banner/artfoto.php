<?
include "../connect.php";
if ($logg=="admin") {
$idnn = $_POST['idnn'];
?>

<div style="position: relative; float: left; width: 100%; margin-bottom: 20px;">Нажмите на загруженное фото чтобы задать описание.</div>

<?
$sql=mysql_query("select * from UserArticlesFoto where art_id='$idnn' and doc<>1 and doc<>2 and doc<>3 order by id desc");
while ($db=mysql_fetch_object($sql))
{
$id=$db->id;
$art_id=$db->art_id;
$foto=$db->foto;
$mainfoto=$db->mainfoto;
?>

<div style="position: relative; float: left; margin: 20px 0px 0px 20px;">
<div id="<?echo $id;?>" class="kl_krestik2" onclick="artfotodel(this.id)" style="position: absolute; left: 52px; top: -8px; width: 16px; height: 16px; background: url(/admin/img/krestik-artfoto21.png); z-index: 50; cursor: pointer;"></div>
<div onclick="$('#zagr').css('display','block'); $('#div33').load('forma-opisanie.php',{ftid:<?echo $id;?>},function(){$('#zagr').css('display','none'); $('#div33').fadeIn(500);})" style="position: relative; float: left; width: 55px; height: 55px; background: url('/img2/<?echo $foto;?>') center center no-repeat; background-size: cover; margin-left: 5px;"></div><br />
<div style="position: relative; float: left; font-size: 10px; color: #000000; margin-top: 5px; line-height: 16px;"><?if ($mainfoto==0){?><span onclick="$('#zagr').css('display','block'); r=<?echo $id;?>; $('#div1').load('artfotomain.php',{id:r,id2:<?echo $idnn;?>});" style="cursor: pointer;"><b>Сделать главной</b></span><?} else {?><span style="color: red;"><b>Главное фото</b></span><?};?></div>
</div>

<?
};
?>

<script type="text/javascript">
function artfotodel(id) {
r=id; $('#zagr').css('display','block');
$("#div1").load("artfotodel.php",{id:r,idnn:<?echo $idnn;?>},function(){$("#artfoto").load("artfoto.php",{idnn:<?echo $idnn;?>}, function(){$('#zagr').css('display','none');})});
};
</script>

<?} else echo "Доступ запрещен!!!";?>