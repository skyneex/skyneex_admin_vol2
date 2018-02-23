<?
include "../connect.php";
if ($logg=="admin") {

$sqll="select * from site_settings";
$sql=mysql_query($sqll);
while ($db=mysql_fetch_object($sql))
{
$si_zag=$db->si_zag;
};
?>

<div class="form_main_block">
	<div class="form_main_block2">
		
		<div class="admin_close" onclick="setings_save();">
			<img class="admin_close1" src="/admin/img/admin_close.png" alt="" />
			<img class="admin_close2 animated rubberBand" src="/admin/img/admin_close.png" alt="" />
		</div>

		<div class="form_main_text1">Заголовок сайта</div>
		<div class="p100" style="background: rgba(0,0,0,0.5); margin: 20px 0 0 0;"></div>

	<!-- ========================================================================================================================== -->
		
		<div class="form_conteiner" style="margin: 10px 0 0 0;">
			<textarea id="set1" class="textarea1" style="width: 729px;" onfocus="$('.forms_ico_F2').css('opacity','0'); $('.forms_ico_L2').css('display','block');" onblur="$('.forms_ico_F2').css('opacity','1'); $('.forms_ico_L2').css('display','none');" type="text" placeholder="Заголовок сайта"><?echo $si_zag;?></textarea>
			<img class="forms_ico_F forms_ico_F2" style="bottom: 93px;" src="/admin/img/text_ico_11.png" alt="" />
			<img class="forms_ico_L forms_ico_L2  animated rubberBand" style="bottom: 93px;" src="/admin/img/text_ico_12.png" alt="" />
		</div>
		<div class="p100"></div>
	
	</div>
</div>

<script type="text/javascript">
function setings_save() {
$('.adm_zagr').css('display','block');
set1=$('#set1').val();
$(".adm_div1").load("forma-opisanie1-save.php",{set1:set1},function(){$('.adm_zagr,.adm_div2_dop').css('display','none');});
};
</script>

<?}else echo "<script>window.location='/admin'</script>";?>

