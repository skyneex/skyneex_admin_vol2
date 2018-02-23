<?
include "../connect.php";
if ($logg=="admin") {
$id = $_POST['ftid'];

$sqll="select * from UserArticlesFoto where id=$id";
$sql=mysql_query($sqll);
while ($db=mysql_fetch_object($sql))
{
$id=$db->id;
$art_id=$db->art_id;
$foto=$db->foto;
$opisanie=$db->opisanie;
$dd=$db->d_dd;
$mm=$db->d_mm;
$gg=$db->d_gg;
};
?>

<div class="form_main_block">
	<div class="form_main_block2">
		
		<div class="admin_close" onclick="docsave();">
			<img class="admin_close1" src="/admin/img/admin_close.png" alt="" />
			<img class="admin_close2 animated rubberBand" src="/admin/img/admin_close.png" alt="" />
		</div>

		<div class="form_main_text1">Редактор документа</div>
		<div class="p100" style="background: rgba(0,0,0,0.5); margin: 20px 0 0 0;"></div>

	<!-- ========================================================================================================================== -->

		<div class="form_conteiner" style="margin: 10px 0 0 0;">
			<p class="form_conteiner_p">Название:</p>
			<input id="zag<?echo $id;?>" class="input1" style="width: 729px;" onfocus="$('.forms_ico_F1').css('opacity','0'); $('.forms_ico_L1').css('display','block');" onblur="$('.forms_ico_F1').css('opacity','1'); $('.forms_ico_L1').css('display','none');" type="text" value="<?echo $opisanie;?>" />
			<img class="forms_ico_F forms_ico_F1" src="/admin/img/text_ico_11.png" alt="" />
			<img class="forms_ico_L forms_ico_L1 animated rubberBand" src="/admin/img/text_ico_12.png" alt="" />
		</div>
		<div class="p100"></div>
		
	<!-- ========================================================================================================================== -->
	
		<div class="form_conteiner" style="margin: 10px 0 0 0;">
			<p class="form_conteiner_p">День:</p>
			<input id="polik1<?echo $id;?>" class="input1" onfocus="$('.forms_ico_F3').css('opacity','0'); $('.forms_ico_L3').css('display','block');" onblur="$('.forms_ico_F3').css('opacity','1'); $('.forms_ico_L3').css('display','none');" type="text" value="<?echo $dd;?>" />
			<img class="forms_ico_F forms_ico_F3" src="/admin/img/text_ico_11.png" alt="" />
			<img class="forms_ico_L forms_ico_L3 animated rubberBand" src="/admin/img/text_ico_12.png" alt="" />
		</div>
		
		<div class="form_conteiner" style="margin: 10px 0 0 0; float: right;">
			<p class="form_conteiner_p">Год:</p>
			<input id="polik3<?echo $id;?>" class="input1" onfocus="$('.forms_ico_F4').css('opacity','0'); $('.forms_ico_L4').css('display','block');" onblur="$('.forms_ico_F4').css('opacity','1'); $('.forms_ico_L4').css('display','none');" type="text" value="<?echo $gg;?>" />
			<img class="forms_ico_F forms_ico_F4" src="/admin/img/text_ico_11.png" alt="" />
			<img class="forms_ico_L forms_ico_L4 animated rubberBand" src="/admin/img/text_ico_12.png" alt="" />
		</div>
		
		<div class="form_conteiner" style="margin: 10px 46px 0 0; float: right;">
			<p class="form_conteiner_p">Месяц:</p>
			<input id="polik2<?echo $id;?>" class="input1" onfocus="$('.forms_ico_F5').css('opacity','0'); $('.forms_ico_L5').css('display','block');" onblur="$('.forms_ico_F5').css('opacity','1'); $('.forms_ico_L5').css('display','none');" type="text" value="<?echo $mm;?>" />
			<img class="forms_ico_F forms_ico_F5" src="/admin/img/text_ico_11.png" alt="" />
			<img class="forms_ico_L forms_ico_L5 animated rubberBand" src="/admin/img/text_ico_12.png" alt="" />
		</div>
		<div class="p100"></div>
		
	</div>
</div>

<script type="text/javascript">
function docsave() {
$('.adm_zagr').css('display','block');
zag=$('#zag<?echo $id;?>').val();
polik1=$('#polik1<?echo $id;?>').val();
polik2=$('#polik2<?echo $id;?>').val();
polik3=$('#polik3<?echo $id;?>').val();
$(".adm_div1").load("docsave.php",{polik1:polik1,polik2:polik2,polik3:polik3,zag:zag,idd:<?echo $id;?>},function(){$('.artfoto').load('artfoto2.php',{idnn:<?echo $art_id;?>},function(){$('.adm_zagr,.adm_div2_dop').css('display','none');});});
};
</script>

<?}else echo "<script>window.location='/admin'</script>";?>

