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
$dd=$db->dd;
$mm=$db->mm;
$gg=$db->gg;
$hs_dom=$db->hs_dom;
};
?>

<div class="form_main_block">
	<div class="form_main_block2" style="margin: 50px 0 100px 0;">
		
		<div class="admin_close" onclick="artsave();">
			<img class="admin_close1" src="/admin/img/admin_close.png" alt="" />
			<img class="admin_close2 animated rubberBand" src="/admin/img/admin_close.png" alt="" />
		</div>

		<div class="form_main_text1">Редактор компаса</div>
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
	
		<div class="form_conteiner" style="width: 785px; margin: 40px 0 0 0;">
			<div class="form_radio form_radio_1" data-valik="1">
				<img class="form_radio_ico1" src="/admin/img/form_radio_ico11.png" alt="" />
				<img class="form_radio_ico2 animated rubberBand" <?if($hs_dom==1){?>style="display: block;"<?};?> src="/admin/img/form_radio_ico12.png" alt="" />
				<p class="form_radio_text">1 дом</p>
			</div>
			
			<div class="form_radio form_radio_1" data-valik="2">
				<img class="form_radio_ico1" src="/admin/img/form_radio_ico11.png" alt="" />
				<img class="form_radio_ico2 animated rubberBand" <?if($hs_dom==2){?>style="display: block;"<?};?> src="/admin/img/form_radio_ico12.png" alt="" />
				<p class="form_radio_text">2 дом</p>
			</div>
			
			<div class="form_radio form_radio_1" data-valik="3">
				<img class="form_radio_ico1" src="/admin/img/form_radio_ico11.png" alt="" />
				<img class="form_radio_ico2 animated rubberBand" <?if($hs_dom==3){?>style="display: block;"<?};?> src="/admin/img/form_radio_ico12.png" alt="" />
				<p class="form_radio_text">3 дом</p>
			</div>
			
			<div class="form_radio form_radio_1" data-valik="4">
				<img class="form_radio_ico1" src="/admin/img/form_radio_ico11.png" alt="" />
				<img class="form_radio_ico2 animated rubberBand" <?if($hs_dom==4){?>style="display: block;"<?};?> src="/admin/img/form_radio_ico12.png" alt="" />
				<p class="form_radio_text">4 дом</p>
			</div>			
		</div>
		<script type="text/javascript">
		$(".form_radio_1").click(function() {
		hs_dom=$(this).data("valik"); $('.form_radio_1').find('.form_radio_ico1').css('opacity','1'); $('.form_radio_1').find('.form_radio_ico2').css('display','none'); $(this).find('.form_radio_ico1').css('opacity','0'); $(this).find('.form_radio_ico2').css('display','block');
		});
		</script>
		<div class="p100"></div>
		
		<!-- ========================================================================================================================== -->
	
		<div class="form_conteiner" style="width: 785px; margin: 40px 0 0 0;">
			<div class="form_radio form_radio_2" data-valik="1">
				<img class="form_radio_ico1" src="/admin/img/form_radio_ico11.png" alt="" />
				<img class="form_radio_ico2 animated rubberBand" <?if($dd==1){?>style="display: block;"<?};?> src="/admin/img/form_radio_ico12.png" alt="" />
				<p class="form_radio_text">1 секция</p>
			</div>
			
			<div class="form_radio form_radio_2" data-valik="2">
				<img class="form_radio_ico1" src="/admin/img/form_radio_ico11.png" alt="" />
				<img class="form_radio_ico2 animated rubberBand" <?if($dd==2){?>style="display: block;"<?};?> src="/admin/img/form_radio_ico12.png" alt="" />
				<p class="form_radio_text">2 секция</p>
			</div>
			
			<div class="form_radio form_radio_2" data-valik="3">
				<img class="form_radio_ico1" src="/admin/img/form_radio_ico11.png" alt="" />
				<img class="form_radio_ico2 animated rubberBand" <?if($dd==3){?>style="display: block;"<?};?> src="/admin/img/form_radio_ico12.png" alt="" />
				<p class="form_radio_text">3 секция</p>
			</div>
			
			<div class="form_radio form_radio_2" data-valik="4">
				<img class="form_radio_ico1" src="/admin/img/form_radio_ico11.png" alt="" />
				<img class="form_radio_ico2 animated rubberBand" <?if($dd==4){?>style="display: block;"<?};?> src="/admin/img/form_radio_ico12.png" alt="" />
				<p class="form_radio_text">4 секция</p>
			</div>			
		</div>
		<script type="text/javascript">
		$(".form_radio_2").click(function() {
		hs_dd=$(this).data("valik"); $('.form_radio_2').find('.form_radio_ico1').css('opacity','1'); $('.form_radio_2').find('.form_radio_ico2').css('display','none'); $(this).find('.form_radio_ico1').css('opacity','0'); $(this).find('.form_radio_ico2').css('display','block');
		});
		</script>
		<div class="p100"></div>
		
		<!-- ========================================================================================================================== -->
	
		<div class="form_conteiner" style="width: 785px; margin: 40px 0 0 0;">
			<div class="form_radio form_radio_3" data-valik="С" >
				<img class="form_radio_ico1" src="/admin/img/form_radio_ico11.png" alt="" />
				<img class="form_radio_ico2 animated rubberBand" <?if($mm=='С'){?>style="display: block;"<?};?> src="/admin/img/form_radio_ico12.png" alt="" />
				<p class="form_radio_text">С</p>
			</div>
			
			<div class="form_radio form_radio_3" data-valik="СВ">
				<img class="form_radio_ico1" src="/admin/img/form_radio_ico11.png" alt="" />
				<img class="form_radio_ico2 animated rubberBand" <?if($mm=='СВ'){?>style="display: block;"<?};?> src="/admin/img/form_radio_ico12.png" alt="" />
				<p class="form_radio_text">СВ</p>
			</div>
			
			<div class="form_radio form_radio_3" data-valik="В">
				<img class="form_radio_ico1" src="/admin/img/form_radio_ico11.png" alt="" />
				<img class="form_radio_ico2 animated rubberBand" <?if($mm=='В'){?>style="display: block;"<?};?> src="/admin/img/form_radio_ico12.png" alt="" />
				<p class="form_radio_text">В</p>
			</div>
			
			<div class="form_radio form_radio_3" data-valik="ЮВ">
				<img class="form_radio_ico1" src="/admin/img/form_radio_ico11.png" alt="" />
				<img class="form_radio_ico2 animated rubberBand" <?if($mm=='ЮВ'){?>style="display: block;"<?};?> src="/admin/img/form_radio_ico12.png" alt="" />
				<p class="form_radio_text">ЮВ</p>
			</div>
			
			<div class="form_radio form_radio_3" data-valik="Ю">
				<img class="form_radio_ico1" src="/admin/img/form_radio_ico11.png" alt="" />
				<img class="form_radio_ico2 animated rubberBand" <?if($mm=='Ю'){?>style="display: block;"<?};?> src="/admin/img/form_radio_ico12.png" alt="" />
				<p class="form_radio_text">Ю</p>
			</div>
			
			<div class="form_radio form_radio_3" data-valik="ЮЗ">
				<img class="form_radio_ico1" src="/admin/img/form_radio_ico11.png" alt="" />
				<img class="form_radio_ico2 animated rubberBand" <?if($mm=='ЮЗ'){?>style="display: block;"<?};?> src="/admin/img/form_radio_ico12.png" alt="" />
				<p class="form_radio_text">ЮЗ</p>
			</div>
			
			<div class="form_radio form_radio_3" data-valik="З">
				<img class="form_radio_ico1" src="/admin/img/form_radio_ico11.png" alt="" />
				<img class="form_radio_ico2 animated rubberBand" <?if($mm=='З'){?>style="display: block;"<?};?> src="/admin/img/form_radio_ico12.png" alt="" />
				<p class="form_radio_text">З</p>
			</div>
			
			<div class="form_radio form_radio_3" data-valik="СЗ">
				<img class="form_radio_ico1" src="/admin/img/form_radio_ico11.png" alt="" />
				<img class="form_radio_ico2 animated rubberBand" <?if($mm=='СЗ'){?>style="display: block;"<?};?> src="/admin/img/form_radio_ico12.png" alt="" />
				<p class="form_radio_text">СЗ</p>
			</div>
		</div>
		<script type="text/javascript">
		$(".form_radio_3").click(function() {
		hs_mm=$(this).data("valik"); $('.form_radio_3').find('.form_radio_ico1').css('opacity','1'); $('.form_radio_3').find('.form_radio_ico2').css('display','none'); $(this).find('.form_radio_ico1').css('opacity','0'); $(this).find('.form_radio_ico2').css('display','block');
		});
		</script>
		<div class="p100"></div>
		
	<!-- ========================================================================================================================== -->
		
		<div class="artfoto" style="display: none;"></div>
		<div id="file_up_build" style="position: absolute; left: 283px; bottom: -50px; display: none;"></div>
		
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

$(".artfoto").load("artfoto.php",{idnn:<?echo $id;?>}); hs_dom='<?echo $hs_dom;?>'; hs_dd='<?echo $dd;?>'; hs_mm='<?echo $mm;?>';

function artsave() {
$('.adm_zagr').css('display','block');
zag=$('#zag<?echo $id;?>').val();
$(".adm_div1").load("artsave.php",{zag:zag,hs_dom:hs_dom,hs_dd:hs_dd,hs_mm:hs_mm,idd:'<?echo $id;?>'},function(){$('.vivod_kv').load('artvew.php',function(){$('.adm_div2,.adm_zagr').css('display','none'); $('body').css('overflow','auto');})});
};
</script>

<?}else echo "<script>window.location='/admin'</script>";?>

