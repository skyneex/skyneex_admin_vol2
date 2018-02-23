<?
include "../connect.php";
if ($logg=="admin") {
$id = $_POST['id'];

$sqll="select * from UserArticlesFoto where id=$id";
$sql=mysql_query($sqll);
while ($db=mysql_fetch_object($sql))
{
$id=$db->id;
$foto=$db->foto;
$opisanie=$db->opisanie;
$opisanie2=$db->opisanie2;
$ochered=$db->ochered;
$dd=$db->d_dd;
$mm=$db->d_mm;
$gg=$db->d_gg;
$doc_tip=$db->doc_tip;
};
?>

<div class="form_main_block">
	<div class="form_main_block2">
		
		<div class="admin_close" onclick="artsave();">
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
			<p class="form_conteiner_p">Описание:</p>
			<textarea id="opisanie2<?echo $id;?>" class="textarea1" style="width: 729px;" style="width: 419px;" onfocus="$('.forms_ico_F2').css('opacity','0'); $('.forms_ico_L2').css('display','block');" onblur="$('.forms_ico_F2').css('opacity','1'); $('.forms_ico_L2').css('display','none');" type="text" value="<?echo $opisanie2;?>" placeholder="Примечание"><?echo $opisanie2;?></textarea>
			<img class="forms_ico_F forms_ico_F2" style="bottom: 93px;" src="/admin/img/text_ico_11.png" alt="" />
			<img class="forms_ico_L forms_ico_L2  animated rubberBand" style="bottom: 93px;" src="/admin/img/text_ico_12.png" alt="" />
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
	
		<div class="form_conteiner" style="width: 785px; margin: 10px 0 0 0;">
			<p class="form_conteiner_p" style="width: 100%;">Очередь:</p>
			
			<div class="form_radio form_radio2" data-valik="1" <?if (strpos($ochered,'1|') === false){?>style="opacity: 0.3;"<?};?>>
				<img class="form_radio_ico1" src="/admin/img/form_radio_ico11.png" alt="" />
				<img class="form_radio_ico2 animated rubberBand" src="/admin/img/form_radio_ico12.png" alt="" />
				<p class="form_radio_text">- 1</p>
			</div>
			
			<div class="form_radio form_radio2" data-valik="2" <?if (strpos($ochered,'2|') === false){?>style="opacity: 0.3;"<?};?>>
				<img class="form_radio_ico1" src="/admin/img/form_radio_ico11.png" alt="" />
				<img class="form_radio_ico2 animated rubberBand" src="/admin/img/form_radio_ico12.png" alt="" />
				<p class="form_radio_text">- 2</p>
			</div>
			
			<div class="form_radio form_radio2" data-valik="3" <?if (strpos($ochered,'3|') === false){?>style="opacity: 0.3;"<?};?>>
				<img class="form_radio_ico1" src="/admin/img/form_radio_ico11.png" alt="" />
				<img class="form_radio_ico2 animated rubberBand" src="/admin/img/form_radio_ico12.png" alt="" />
				<p class="form_radio_text">- 3</p>
			</div>
			
			<div class="form_radio form_radio2" data-valik="4" <?if (strpos($ochered,'4|') === false){?>style="opacity: 0.3;"<?};?>>
				<img class="form_radio_ico1" src="/admin/img/form_radio_ico11.png" alt="" />
				<img class="form_radio_ico2 animated rubberBand" src="/admin/img/form_radio_ico12.png" alt="" />
				<p class="form_radio_text">- 4</p>
			</div>
			
			<div class="form_radio form_radio2" data-valik="5" <?if (strpos($ochered,'5|') === false){?>style="opacity: 0.3;"<?};?>>
				<img class="form_radio_ico1" src="/admin/img/form_radio_ico11.png" alt="" />
				<img class="form_radio_ico2 animated rubberBand" src="/admin/img/form_radio_ico12.png" alt="" />
				<p class="form_radio_text">- 5</p>
			</div>			
		</div>
		<script type="text/javascript">
		$('.form_radio2').click(function(){
		fld=$(this).data('valik'); fld=fld+'|';
		if(ochered.indexOf(fld) + 1) {ochered=ochered.replace(fld,''); $(this).css('opacity','0.3');} else {ochered=ochered+fld; $(this).css('opacity','1');};
		});
		</script>
		<div class="p100"></div>
	
	<!-- ========================================================================================================================== -->
	
		<div class="form_conteiner" style="width: 785px; margin: 40px 0 0 0;">
			<div class="form_radio form_radio1" data-valik="1" style="width: 100%; margin: 10px 0 0 0;">
				<img class="form_radio_ico1" src="/admin/img/form_radio_ico11.png" alt="" />
				<img class="form_radio_ico2 animated rubberBand" <?if($doc_tip==1){?>style="display: block;"<?};?> src="/admin/img/form_radio_ico12.png" alt="" />
				<p class="form_radio_text">Проектные декларации</p>
			</div>
			
			<div class="form_radio form_radio1" data-valik="2" style="width: 100%; margin: 10px 0 0 0;">
				<img class="form_radio_ico1" src="/admin/img/form_radio_ico11.png" alt="" />
				<img class="form_radio_ico2 animated rubberBand" <?if($doc_tip==2){?>style="display: block;"<?};?> src="/admin/img/form_radio_ico12.png" alt="" />
				<p class="form_radio_text">Разрешительная документация</p>
			</div>
			
			<div class="form_radio form_radio1" data-valik="3" style="width: 100%; margin: 10px 0 0 0;">
				<img class="form_radio_ico1" src="/admin/img/form_radio_ico11.png" alt="" />
				<img class="form_radio_ico2 animated rubberBand" <?if($doc_tip==3){?>style="display: block;"<?};?> src="/admin/img/form_radio_ico12.png" alt="" />
				<p class="form_radio_text">Проекты договоров</p>
			</div>
			
			<div class="form_radio form_radio1" data-valik="4" style="width: 100%; margin: 10px 0 0 0;">
				<img class="form_radio_ico1" src="/admin/img/form_radio_ico11.png" alt="" />
				<img class="form_radio_ico2 animated rubberBand" <?if($doc_tip==4){?>style="display: block;"<?};?> src="/admin/img/form_radio_ico12.png" alt="" />
				<p class="form_radio_text">Сведения о способах обеспечения обязательств</p>
			</div>
			
			<div class="form_radio form_radio1" data-valik="5" style="width: 100%; margin: 10px 0 0 0;">
				<img class="form_radio_ico1" src="/admin/img/form_radio_ico11.png" alt="" />
				<img class="form_radio_ico2 animated rubberBand" <?if($doc_tip==5){?>style="display: block;"<?};?> src="/admin/img/form_radio_ico12.png" alt="" />
				<p class="form_radio_text">Прочие</p>
			</div>			
		</div>
		<script type="text/javascript">
		$(".form_radio1").click(function() {
		doc_tip=$(this).data("valik"); $('.form_radio_ico1').css('opacity','1'); $('.form_radio_ico2').css('display','none'); $(this).find('.form_radio_ico1').css('opacity','0'); $(this).find('.form_radio_ico2').css('display','block');
		});
		</script>
		<div class="p100"></div>
		
	</div>
</div>

<script type="text/javascript">
doc_tip=<?echo $doc_tip;?>; ochered='<?echo $ochered;?>';
function artsave() {
$('.adm_zagr').css('display','block');
zag=$('#zag<?echo $id;?>').val();
polik1=$('#polik1<?echo $id;?>').val();
polik2=$('#polik2<?echo $id;?>').val();
polik3=$('#polik3<?echo $id;?>').val();
opisanie2=$('#opisanie2<?echo $id;?>').val();
$(".adm_div1").load("artsave.php",{polik1:polik1,polik2:polik2,polik3:polik3,doc_tip:doc_tip,zag:zag,opisanie2:opisanie2,ochered:ochered,idd:<?echo $id;?>},function(){$('.vivod_kv').load('artvew.php',function(){$('.adm_div2,.adm_zagr').css('display','none'); $('body').css('overflow','auto');})});
};
</script>

<?}else echo "<script>window.location='/admin'</script>";?>
