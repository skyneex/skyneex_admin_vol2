<?
include "../connect.php";
if ($logg=="admin") {
$idnn = $_POST['idnn'];
?>
<p class="form_conteiner_p" style="margin: 20px 0 0 0; text-align: center; opacity: 0.8;">Нажмите на загруженный документ чтобы задать название.</p>
<?
$sql=mysql_query("select * from UserArticlesFoto where art_id='$idnn' and doc=1 order by d_gg, d_mm, d_dd, id");
while ($db=mysql_fetch_object($sql))
{
$id=$db->id;
$art_id=$db->art_id;
$foto=$db->foto;
$opisanie=$db->opisanie;
?>
<div style="position: relative; float: left; margin: 10px 0px 0px 0px;">
	<p class="form_conteiner_p" onclick="$('.adm_zagr').css('display','block'); $('.adm_div2_dop').load('forma-opisanie2.php',{ftid:<?echo $id;?>},function(){$('.adm_zagr').css('display','none'); $('.adm_div2_dop').fadeIn(500);})" style="margin: 20px 40px 0 0; cursor: pointer;"><?echo $opisanie;?></p>
	<div class="admin_close" onclick="r=<?echo $id;?>; artfotodel();" style="position: absolute; right: 20px; top: 0;">
		<img class="admin_close1" src="/admin/img/admin_close.png" alt="" />
		<img class="admin_close2 animated rubberBand" src="/admin/img/admin_close.png" alt="" />
	</div>
</div>
<?
};
?>
<div id="file_up_build" style="position: absolute; left: 221px; bottom: -136px;;"></div>

<script type="text/javascript">
function artfotodel(id) {
$('.adm_zagr').css('display','block'); $(".adm_div1").load("artfotodel.php",{id:r,idnn:<?echo $idnn;?>},function(){$(".artfoto").load("artfoto2.php",{idnn:<?echo $idnn;?>}, function(){$('.adm_zagr').css('display','none');})});
};
</script>

<script type="text/javascript">
$('#file_up_build').JSAjaxFileUploader({
uploadUrl:'/admin/z_load_doc.php',
inputText:'ЗАГРУЗИТЬ ДОКУМЕНТ',
fileName:'photo',
autoSubmit:true,
allowExt: 'jpg|gif|png|jpeg|doc|xls|pdf|docx|xlsx',
complete:function(){$(".artfoto").load("artfoto2.php",{idnn:<?echo $idnn;?>});},
formData:{put:'/img2',idst:'<?echo $idnn;?>',kod_pr:'0'},
maxFileSize:50000000
});
</script>

<?}else echo "<script>window.location='/admin'</script>";?>

