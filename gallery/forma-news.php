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
$text=$db->text; $text=htmlspecialchars_decode($text); $text = str_replace("<br />", "\n", $text);
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

		<div class="form_main_text1">Редактор галереи</div>
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
	
		<div class="form_conteiner" style="margin: 10px 0 0 0;">
			<p class="form_conteiner_p">Описание:</p>
			<textarea id="txt<?echo $id;?>" class="textarea1" style="width: 729px;" style="width: 419px;" onfocus="$('.forms_ico_F2').css('opacity','0'); $('.forms_ico_L2').css('display','block');" onblur="$('.forms_ico_F2').css('opacity','1'); $('.forms_ico_L2').css('display','none');" type="text" value="<?echo $text;?>" placeholder="Примечание"><?echo $text;?></textarea>
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
$('#file_up_build').JSAjaxFileUploader({
uploadUrl:'/admin/z_load_build.php',
inputText:'ЗАГРУЗИТЬ ИЗОБРАЖЕНИЕ',
fileName:'photo',
autoSubmit:true,
allowExt: 'jpg|gif|png|jpeg',
complete:function(){$(".artfoto").load("artfoto.php",{idnn:<?echo $id;?>});},
formData:{put:'/img2',idst:'<?echo $id;?>',kod_pr:'<?echo $kod;?>'},
maxFileSize:500000000
});

$(".artfoto").load("artfoto.php",{idnn:<?echo $id;?>});

function artsave() {
$('.adm_zagr').css('display','block');
zag=$('#zag<?echo $id;?>').val();
txt=$('#txt<?echo $id;?>').val(); txt=txt.replace(/\n/g, "<br />");
polik1=$('#polik1<?echo $id;?>').val();
polik2=$('#polik2<?echo $id;?>').val();
polik3=$('#polik3<?echo $id;?>').val();
$(".adm_div1").load("artsave.php",{polik1:polik1,polik2:polik2,polik3:polik3,zag:zag,txt:txt,idd:'<?echo $id;?>'},function(){$('.vivod_kv').load('artvew.php',function(){$('.adm_div2,.adm_zagr').css('display','none'); $('body').css('overflow','auto');})});
};
</script>

<?}else echo "<script>window.location='/admin'</script>";?>

