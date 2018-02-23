<?
include "../connect.php";
if ($logg=="admin") {
$id = $_POST['id'];

$sqll="select * from 10Articles where id=$id";
$sql=mysql_query($sqll);
while ($db=mysql_fetch_object($sql))
{
$id=$db->id;
$zag=$db->zag; $zag=htmlspecialchars_decode($zag);
$text=$db->text; $text=htmlspecialchars_decode($text);
$dd=$db->dd;
$mm=$db->mm;
$gg=$db->gg;
};
?>

<div class="form_main_block">
	<div class="form_main_block2" style="margin: 50px 0 100px 0;">
		
		<div class="admin_close" onclick="artsave();">
			<img class="admin_close1" src="/admin/img/admin_close.png" alt="" />
			<img class="admin_close2 animated rubberBand" src="/admin/img/admin_close.png" alt="" />
		</div>

		<div class="form_main_text1">Редактор новостей</div>
		<div class="p100" style="background: rgba(0,0,0,0.5); margin: 20px 0 0 0;"></div>

	<!-- ========================================================================================================================== -->

		<div class="form_conteiner" style="margin: 10px 0 0 0;">
			<p class="form_conteiner_p">Название:</p>
			<input id="zag<?echo $id;?>" class="input1" style="width: 729px;" onfocus="$('.forms_ico_F1').css('opacity','0'); $('.forms_ico_L1').css('display','block');" onblur="$('.forms_ico_F1').css('opacity','1'); $('.forms_ico_L1').css('display','none');" type="text" value="<?echo $zag;?>" />
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
		
	<!-- ========================================================================================================================== -->
	
		<div style="position: relative; float: left; width: 790px; margin-top: 20px; line-height: 28px; margin-bottom: 40px;">
			<p class="form_conteiner_p">Содержание:</p>
			<textarea id="txt<?echo $id;?>" class="main_text" style="position: relative; float: left; width: 915px; height: 190px; font-size: 14px; font-family: Arial; background: none; border: 1px solid #cccccc; padding: 5px 15px; border-radius: 4px;"><?echo $text;?></textarea>
		</div>
		<div class="p100"></div>
		
	<!-- ========================================================================================================================== -->
		
		<p class="form_conteiner_p"><span id="txfd1" class="txfd" style="color: red; cursor: pointer;" onclick="$('.artfoto').load('artfoto.php',{idnn:<?echo $id;?>}); $('.txfd').css('color','#000000'); $('#txfd1').css('color','red');">Изображение</span> / <span id="txfd2" class="txfd" style="cursor: pointer;" onclick="$('.artfoto').load('artfoto2.php',{idnn:<?echo $id;?>}); $('.txfd').css('color','#000000'); $('#txfd2').css('color','red');">Документы</span></p>
		<div class="artfoto"></div>
		
	</div>
</div>


<script type="text/javascript">
function artsave() {
$('.adm_zagr').css('display','block');
zag=$('#zag<?echo $id;?>').val();
txt=document.getElementsByTagName("iframe")[0].contentDocument.getElementsByTagName("body")[0].innerHTML;
polik1=$('#polik1<?echo $id;?>').val();
polik2=$('#polik2<?echo $id;?>').val();
polik3=$('#polik3<?echo $id;?>').val();
$(".adm_div1").load("artsave.php",{polik1:polik1,polik2:polik2,polik3:polik3,zag:zag,txt:txt,idd:'<?echo $id;?>'},function(){$('.vivod_kv').load('artvew.php',function(){$('.adm_div2,.adm_zagr').css('display','none'); $('body').css('overflow','auto');})});
};

$(".artfoto").load("artfoto.php",{idnn:<?echo $id;?>});

if (CKEDITOR.instances['txt<?echo $id;?>']) CKEDITOR.instances['txt<?echo $id;?>'].destroy(true);
var ckeditor1 = CKEDITOR.replace( 'txt<?echo $id;?>' );
AjexFileManager.init({
returnTo: 'ckeditor',
editor: ckeditor1
});
</script>

<?}else echo "<script>window.location='/admin'</script>";?>

