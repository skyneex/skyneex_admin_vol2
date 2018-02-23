<?
include "../connect.php";
if ($logg=="admin") {
$idnn = $_POST['idnn'];
?>
<p class="form_conteiner_p" style="margin: 20px 0 0 0; text-align: center; opacity: 0.8;">Нажмите на загруженное фото чтобы задать описание.</p>
<div class="foto_main_block">
<?
$sql=mysql_query("select * from UserArticlesFoto where art_id='$idnn' and doc<>1 and doc<>2 and doc<>3 order by id desc");
while ($db=mysql_fetch_object($sql))
{
$id=$db->id;
$art_id=$db->art_id;
$foto=$db->foto;
$mainfoto=$db->mainfoto;
?>
	<div class="foto_main_item" style="background: url('/img2/<?echo $foto;?>') center center no-repeat; background-size: cover;">
		<div class="foto_main_item_1" onclick="$('.adm_zagr').css('display','block'); $('.adm_div2_dop').load('forma-opisanie.php',{ftid:<?echo $id;?>},function(){$('.adm_zagr').css('display','none'); $('.adm_div2_dop').fadeIn(500);})"></div>
		<div class="admin_close" onclick="r=<?echo $id;?>; artfotodel();" style="position: absolute; left: 85%; bottom: 82%; top: unset;">
			<img class="admin_close1" src="/admin/img/admin_close.png" alt="" />
			<img class="admin_close2 animated rubberBand" src="/admin/img/admin_close.png" alt="" />
		</div>
		<p class="form_conteiner_p" style="position: absolute; left: 0; top: 100%; font-size: 13px;"><?if($mainfoto==0){?><span onclick="$('.adm_zagr').css('display','block'); r=<?echo $id;?>; $('.adm_div1').load('artfotomain.php',{id:r,id2:<?echo $idnn;?>});" style="cursor: pointer;">Сделать главной</span><?}else{?><span style="color: red;">Главное фото</span><?};?></p>
	</div>
<?
};
?>
	<div id="file_up_build" style="position: absolute; left: 221px; bottom: -136px;;"></div>
</div>

<script type="text/javascript">
function artfotodel() {
$('.adm_zagr').css('display','block'); $(".adm_div1").load("artfotodel.php",{id:r,idnn:<?echo $idnn;?>},function(){$(".artfoto").load("artfoto.php",{idnn:<?echo $idnn;?>}, function(){$('.adm_zagr').css('display','none');})});
};
</script>

<script type="text/javascript">
$('#file_up_build').JSAjaxFileUploader({
uploadUrl:'/admin/z_load_build.php',
inputText:'ЗАГРУЗИТЬ ИЗОБРАЖЕНИЕ',
fileName:'photo',
autoSubmit:true,
allowExt: 'jpg|gif|png|jpeg',
complete:function(){$(".artfoto").load("artfoto.php",{idnn:<?echo $idnn;?>});},
formData:{put:'/img2',idst:'<?echo $idnn;?>',kod_pr:'<?echo $kod;?>'},
maxFileSize:500000000
});
</script>

<?}else echo "<script>window.location='/admin'</script>";?>
