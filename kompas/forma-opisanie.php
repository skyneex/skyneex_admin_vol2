<?
include "../connect.php";
if ($logg=="admin") {
$id = $_POST['ftid'];

$sqll="select * from UserArticlesFoto where id=$id";
$sql=mysql_query($sqll);
while ($db=mysql_fetch_object($sql))
{
$id=$db->id;
$opisanie=$db->opisanie;
};
?>

<div class="form_main_block">
	<div class="form_main_block2" style="margin: 50px 0 100px 0;">
		
		<div class="admin_close" onclick="opisanie_save();">
			<img class="admin_close1" src="/admin/img/admin_close.png" alt="" />
			<img class="admin_close2 animated rubberBand" src="/admin/img/admin_close.png" alt="" />
		</div>

		<div class="form_main_text1">Описание изображения</div>
		<div class="p100" style="background: rgba(0,0,0,0.5); margin: 20px 0 0 0;"></div>

	<!-- ========================================================================================================================== -->
	
		<div class="form_conteiner" style="margin: 10px 0 0 0;">
			<p class="form_conteiner_p">Описание:</p>
			<textarea id="ft_ops" class="textarea1" style="width: 729px;" style="width: 419px;" onfocus="$('.forms_ico_F2').css('opacity','0'); $('.forms_ico_L2').css('display','block');" onblur="$('.forms_ico_F2').css('opacity','1'); $('.forms_ico_L2').css('display','none');" type="text" value="<?echo $opisanie;?>" placeholder="Примечание"><?echo $opisanie;?></textarea>
			<img class="forms_ico_F forms_ico_F2" style="bottom: 93px;" src="/admin/img/text_ico_11.png" alt="" />
			<img class="forms_ico_L forms_ico_L2  animated rubberBand" style="bottom: 93px;" src="/admin/img/text_ico_12.png" alt="" />
		</div>
		<div class="p100"></div>
		
	<!-- ========================================================================================================================== -->
		
		<div class="artfoto"></div>
		<div id="file_up_build" style="position: absolute; left: 283px; bottom: -50px;"></div>
		
	</div>
</div>

<script type="text/javascript">
function opisanie_save() {
$('.adm_zagr').css('display','block');
opis=$('#ft_ops').val();
$(".adm_div1").load("opisaniesave.php",{opis:opis,idd:'<?echo $id;?>'},function(){$('.adm_zagr,.adm_div2_dop').css('display','none');});
};
</script>

<?}else echo "<script>window.location='/admin'</script>";?>

